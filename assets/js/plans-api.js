async function rsFetchPlans() {
  // Critical: default to Laragon-style subfolder backend
  // e.g. http://my-project.test/ranax-automation-backend/api/plans
  const apiBase = (window.RS_BASE_URL || (window.location.origin + '/ranax-automation-backend')).replace(/\/+$/, '');
  const res = await fetch(apiBase + '/api/plans', {
    headers: { 'Accept': 'application/json' },
    credentials: 'same-origin'
  });
  if (!res.ok) {
    throw new Error('Failed to load plans');
  }
  const data = await res.json();
  if (!data || data.success !== true || !Array.isArray(data.plans)) {
    throw new Error('Invalid plans response');
  }
  window.RS_TAX = data.tax || null;
  return data.plans;
}

function rsEscapeHtml(str) {
  return String(str)
    .replaceAll('&', '&amp;')
    .replaceAll('<', '&lt;')
    .replaceAll('>', '&gt;')
    .replaceAll('"', '&quot;')
    .replaceAll("'", '&#039;');
}

function rsPlanIntervalLabel(interval) {
  if (interval === 'yearly' || interval === 'annual') return '/year';
  return '/month';
}

