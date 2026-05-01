// Country Dropdown Functionality

function toggleCountryDropdown() {
    const dropdown = document.getElementById('countryDropdown');
    const container = document.querySelector('.phone-input-container');

    dropdown.classList.toggle('show');
    container.classList.toggle('dropdown-open');
}

function selectCountry(flagUrl, code, name) {
    const selector = document.querySelector('.country-selector');
    const container = document.querySelector('.phone-input-container');

    selector.innerHTML = `
        <div class="flag-circle">
            <img src="${flagUrl}" alt="${name} Flag" class="country-flag">
        </div>
        <span class="country-code">${code}</span>
        <svg class="dropdown-arrow" viewBox="0 0 12 12" fill="currentColor">
            <path d="M6 8L2 4h8L6 8z"/>
        </svg>
    `;

    // Close dropdown and remove rotation
    document.getElementById('countryDropdown').classList.remove('show');
    container.classList.remove('dropdown-open');
}

// Close dropdown when clicking outside
document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('click', function (event) {
        const container = document.querySelector('.phone-input-container');
        const dropdown = document.getElementById('countryDropdown');

        if (container && !container.contains(event.target)) {
            dropdown.classList.remove('show');
            container.classList.remove('dropdown-open');
        }
    });
});