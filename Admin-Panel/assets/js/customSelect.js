document.querySelectorAll('.custom-select').forEach(selectBox => {
  const display = selectBox.querySelector('.select-display');
  const isMultiSelect = selectBox.querySelector('input[type="checkbox"]');

  // OPEN / CLOSE dropdown
  display.addEventListener('click', (e) => {
    e.stopPropagation();
    selectBox.classList.toggle('active');
  });

  /* =========================
     MULTI SELECT (CHECKBOX)
  ========================= */
  if (isMultiSelect) {
    const checkboxes = selectBox.querySelectorAll(
      '.dropdown-options-list input[type="checkbox"]'
    );

    checkboxes.forEach(checkbox => {
      checkbox.addEventListener('click', (e) => {
        e.stopPropagation();

        const selected = [];
        checkboxes.forEach(cb => {
          if (cb.checked) {
            selected.push(
              cb.closest('label').querySelector('span').textContent.trim()
            );
          }
        });

        display.querySelector('span').textContent =
          selected.length ? selected.join(', ') : 'Select';
      });
    });
  }

  /* =========================
     SINGLE SELECT (NORMAL)
  ========================= */
  else {
    const options = selectBox.querySelectorAll('.dropdown-options-list');

    options.forEach(option => {
      option.addEventListener('click', () => {
        display.querySelector('span').textContent = option.textContent.trim();
        selectBox.classList.remove('active'); // ✅ close dropdown
      });
    });
  }

  // CLOSE ON OUTSIDE CLICK
  document.addEventListener('click', (event) => {
    if (!selectBox.contains(event.target)) {
      selectBox.classList.remove('active');
    }
  });
});
