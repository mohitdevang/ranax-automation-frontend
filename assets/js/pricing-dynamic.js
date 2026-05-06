document.addEventListener('DOMContentLoaded', async function () {
  const monthlyContainer = document.getElementById('pricingMonthlyPlans');
  const annualContainer = document.getElementById('pricingAnnualPlans');
  const errorBox = document.getElementById('pricingPlansError');
  if (!monthlyContainer && !annualContainer) return;

  const setLoading = () => {
    if (errorBox) errorBox.classList.add('d-none');
    const html = '<div class="col-12"><div class="alert alert-secondary mb-0" role="alert">Loading plans...</div></div>';
    if (monthlyContainer) monthlyContainer.innerHTML = html;
    if (annualContainer) annualContainer.innerHTML = html;
  };

  const getChannelsSelected = () => {
    const el = document.getElementById('rsChannelsSelected');
    if (!el) return 1;
    const n = parseInt((el.textContent || '1').trim(), 10);
    return Number.isFinite(n) && n > 0 ? n : 1;
  };

  const hookChannelCounter = () => {
    const el = document.getElementById('rsChannelsSelected');
    if (!el) return;
    const btns = Array.from(document.querySelectorAll('.channel-btn'));
    if (btns.length < 2) return;

    const dec = btns[0];
    const inc = btns[1];

    const set = (v) => { el.textContent = String(v); };
    let maxAllowed = 99;
    const clamp = (v) => Math.max(1, Math.min(maxAllowed, v));

    const updateDisabled = () => {
      const v = getChannelsSelected();
      dec.disabled = v <= 1;
      inc.disabled = v >= maxAllowed;
    };

    const notify = () => {
      try {
        const evt = new CustomEvent('rs:channelsChanged', { detail: { channels: getChannelsSelected(), maxAllowed } });
        document.dispatchEvent(evt);
      } catch (_) { /* noop */ }
    };

    dec.addEventListener('click', () => { set(clamp(getChannelsSelected() - 1)); updateDisabled(); notify(); });
    inc.addEventListener('click', () => { set(clamp(getChannelsSelected() + 1)); updateDisabled(); notify(); });
    updateDisabled();

    return {
      setMaxAllowed: (n) => { maxAllowed = Math.max(1, Math.min(999, Number(n) || 1)); set(clamp(getChannelsSelected())); updateDisabled(); notify(); },
      updateDisabled,
      setValue: (n) => { set(clamp(Number(n) || 1)); updateDisabled(); notify(); },
    };
  };

  // Selected plan (shared across monthly/yearly tabs)
  let selectedPlanSlug = null;
  let selectedPlanMax = 1;

  const pickDefaultPlan = (plans) => {
    if (!Array.isArray(plans) || plans.length === 0) return null;
    return (
      plans.find(p => String(p.slug || '').toLowerCase() === 'growth') ||
      plans.find(p => !!p.is_popular) ||
      plans[0]
    );
  };

  const clampChannelsForSelectedPlan = (counter) => {
    if (!counter) return;
    counter.setMaxAllowed(selectedPlanMax);
    counter.setValue(Math.min(getChannelsSelected(), selectedPlanMax));
  };

  const updateCtasForSelectedPlan = () => {
    const channels = Math.min(getChannelsSelected(), selectedPlanMax || 1);
    const bases = [monthlyContainer, annualContainer].filter(Boolean);
    bases.forEach((container) => {
      Array.from(container.querySelectorAll('.rs-plan-cta')).forEach((a) => {
        const planSlug = String(a.getAttribute('data-plan-slug') || '');
        const max = parseInt(a.getAttribute('data-plan-max') || '1', 10);
        const billing = String(a.getAttribute('data-billing') || 'monthly');
        const url = new URL(a.getAttribute('href'), window.location.origin);
        // keep each CTA internally consistent; selected plan uses current channels, others clamp to their own max
        const v = (selectedPlanSlug && planSlug === selectedPlanSlug) ? channels : Math.min(channels, Math.max(1, max || 1));
        url.searchParams.set('plan', planSlug);
        url.searchParams.set('billing', billing);
        url.searchParams.set('channels', String(v));
        a.setAttribute('href', url.toString());
      });

      // Visual selection state
      Array.from(container.querySelectorAll('[data-rs-plan-card]')).forEach((card) => {
        const slug = String(card.getAttribute('data-plan-slug') || '');
        const isSelected = !!selectedPlanSlug && slug === selectedPlanSlug;
        card.classList.toggle('rs-plan-selected', isSelected);
      });
    });
  };

  const selectPlan = (slug, max, counter) => {
    selectedPlanSlug = String(slug || '');
    selectedPlanMax = Math.max(1, Number(max) || 1);
    clampChannelsForSelectedPlan(counter);
    updateCtasForSelectedPlan();
  };

  const renderInto = (container, plans, billingType, counter) => {
    if (!container) return;
    container.innerHTML = plans.map((p) => {
      const isPopular = !!p.is_popular;
      const cardClass = isPopular ? 'pricing-card pricing-card-featured h-100' : 'pricing-card h-100';
      const nameClass = isPopular ? 'plan-name font-24 regular text-white mb-0' : 'plan-name font-24 regular textColor mb-0';
      const priceClass = isPopular ? 'font-36 regular text-white' : 'font-36 regular grayColor';
      const intervalClass = isPopular ? 'font-16 regular text-white' : 'font-16 regular grayColor';
      const descClass = isPopular ? 'font-14 regular whiteLightColor mb-4 line-height-24' : 'font-14 regular grayColor mb-4 line-height-24';
      const btnClass = isPopular
        ? 'pricing-btn w-100 d-flex justify-content-center align-items-center font-16 regular bg-white greenColor border-0'
        : 'pricing-btn w-100 d-flex justify-content-center align-items-center font-16 regular bgYellowColor text-white border-0';

      const features = Array.isArray(p.features) ? p.features : [];
      const featuresHtml = features.map((f) => {
        const txtClass = isPopular ? 'font-16 regular text-white' : 'font-16 regular textLightColor';
        return `
          <li class="feature-item d-flex align-items-start mb-3">
            <img src="assets/images/svg/tik-mark.svg" alt="Check" class="feature-check me-3">
            <span class="${txtClass}">${rsEscapeHtml(f)}</span>
          </li>
        `;
      }).join('');

      const taxLabel = (window.RS_TAX && window.RS_TAX.mode === 'inclusive')
        ? ' (incl. GST)'
        : ' + GST';
      const interval = (billingType === 'yearly' ? '/yr' : '/mo') + taxLabel;
      const cta = p.cta_label || 'Start Free Trial';
      const trialEnabled = !!(p.trial && p.trial.enabled);
      const trialDays = trialEnabled ? Number(p.trial.days || 0) : 0;
      const trialHtml = (trialEnabled && trialDays > 0)
        ? `<div class="${isPopular ? 'font-14 regular text-white mb-2' : 'font-14 regular textLightColor mb-2'}">${trialDays}-day free trial</div>`
        : '';
      // Always prefer configured base. Never default to a non-resolvable domain.
      const appBase = (window.RS_BASE_URL || (window.location.origin + '/ranax-automation-backend')).replace(/\/+$/, '');
      const priceObj = (p.pricing && p.pricing[billingType]) ? p.pricing[billingType] : null;
      const priceDisplay = priceObj ? priceObj.price_display : (p.price_display || '');
      const max = Number(p.channels_max || 1);
      const selected = Math.min(getChannelsSelected(), max);
      const href = `${appBase}/register?plan=${encodeURIComponent(p.slug)}&billing=${encodeURIComponent(billingType)}&channels=${encodeURIComponent(selected)}`;

      return `
        <div class="col-12 col-md-6 col-lg-4">
          <div class="${cardClass}" data-rs-plan-card="1" data-plan-slug="${rsEscapeHtml(String(p.slug))}" data-plan-max="${rsEscapeHtml(String(max))}">
            <div class="pricing-header">
              <div class="d-flex flex-column align-items-start">
                <h4 class="${nameClass}">${rsEscapeHtml(p.name)}</h4>
                <div class="plan-price mb-2">
                  <span class="${priceClass}">${rsEscapeHtml(priceDisplay)}</span>
                  <span class="${intervalClass}">${rsEscapeHtml(interval)}</span>
                </div>
                ${trialHtml}
                <p class="${descClass}">${rsEscapeHtml(p.description || '')}</p>
              </div>
              <a href="${href}" class="${btnClass} rs-plan-cta" data-plan-slug="${rsEscapeHtml(String(p.slug))}" data-billing="${rsEscapeHtml(String(billingType))}" data-plan-max="${rsEscapeHtml(String(max))}">${rsEscapeHtml(cta)}</a>
            </div>
            <div class="pricing-features">
              <ul class="list-unstyled mb-0">
                ${featuresHtml}
              </ul>
            </div>
          </div>
        </div>
      `;
    }).join('');

    // Bind plan selection on card click (not only on CTA click)
    if (counter) {
      Array.from(container.querySelectorAll('[data-rs-plan-card]')).forEach((card) => {
        card.addEventListener('click', (ev) => {
          // If user clicks on a link, let navigation happen.
          if (ev.target && ev.target.closest && ev.target.closest('a')) {
            return;
          }
          const slug = String(card.getAttribute('data-plan-slug') || '');
          const max = parseInt(card.getAttribute('data-plan-max') || '1', 10);
          selectPlan(slug, max, counter);
        });
      });

      // Also clamp & update channels for selected plan right after render
      updateCtasForSelectedPlan();
    }
  };

  try {
    setLoading();
    const counter = hookChannelCounter();
    const plans = await rsFetchPlans();
    const def = pickDefaultPlan(plans);
    if (def) {
      selectedPlanSlug = String(def.slug || '');
      selectedPlanMax = Math.max(1, Number(def.channels_max || 1));
    } else {
      selectedPlanSlug = null;
      selectedPlanMax = 1;
    }
    if (counter) clampChannelsForSelectedPlan(counter);
    renderInto(monthlyContainer, plans, 'monthly', counter);
    renderInto(annualContainer, plans, 'yearly', counter);

    // Update CTAs whenever channels change
    document.addEventListener('rs:channelsChanged', function () {
      updateCtasForSelectedPlan();
    });
  } catch (e) {
    if (monthlyContainer) monthlyContainer.innerHTML = '';
    if (annualContainer) annualContainer.innerHTML = '';
    if (errorBox) {
      errorBox.classList.remove('d-none');
      errorBox.textContent = 'Plans not available. Please try again later.';
    }
  }
});

