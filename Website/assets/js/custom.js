
const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");

if (navToggle && navMenu) {
  navToggle.addEventListener("click", () => {
    navToggle.classList.toggle("active");
    navMenu.style.display =
        navMenu.style.display === "flex" ? "none" : "flex";
  });
}

// Password Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
  const passwordToggleBtn = document.querySelector('.password-toggle-btn');
  const passwordInput = document.getElementById('passwordInput');
  
  if (passwordToggleBtn && passwordInput) {
    passwordToggleBtn.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      
      // Optional: Toggle eye icon if you have different icons for show/hide
      // this.querySelector('img').src = type === 'password' ? 'assets/images/svg/eye.svg' : 'assets/images/svg/eye-off.svg';
    });
  }

  // Scroll Animations
  const scrollElements = document.querySelectorAll('.scroll-animate, .scroll-animate-left, .scroll-animate-right, .scroll-animate-scale');
  
  const elementInView = (el, offset = 100) => {
    const elementTop = el.getBoundingClientRect().top;
    return (
      elementTop <= (window.innerHeight || document.documentElement.clientHeight) - offset
    );
  };

  const displayScrollElement = (element) => {
    element.classList.add('animate-in');
  };

  const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
      if (elementInView(el, 100)) {
        displayScrollElement(el);
      }
    });
  };

  // Check on scroll
  const scrollArea = document.querySelector('.page-scroll-area');
  if (scrollArea) {
    scrollArea.addEventListener('scroll', () => {
      handleScrollAnimation();
    });
  } else {
    window.addEventListener('scroll', () => {
      handleScrollAnimation();
    });
  }

  // Check on page load
  handleScrollAnimation();
});



// Country Code Dropdown Functionality
document.addEventListener('DOMContentLoaded', function() {
  const countryCodeDisplay = document.getElementById('countryCodeDisplay');
  const countryCodeDropdown = document.getElementById('countryCodeDropdown');
  const countryOptions = document.querySelectorAll('.country-option');
  const flagDisplay = document.getElementById('flagDisplay');
  const codeDisplay = document.getElementById('codeDisplay');
  const dropdownArrow = document.querySelector('.dropdown-arrow');

  if (countryCodeDisplay) {
    // Toggle dropdown
    countryCodeDisplay.addEventListener('click', function() {
      const isOpen = countryCodeDropdown.classList.contains('show');
      countryCodeDropdown.classList.toggle('show', !isOpen);
      dropdownArrow.classList.toggle('open', !isOpen);
    });

    // Select country option
    countryOptions.forEach(option => {
      option.addEventListener('click', function() {
        const code = this.getAttribute('data-code');
        const flag = this.getAttribute('data-flag');
        
        flagDisplay.src = flag;
        codeDisplay.textContent = code;
        countryCodeDropdown.classList.remove('show');
        dropdownArrow.classList.remove('open');
      });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
      if (!event.target.closest('.country-code-wrapper')) {
        countryCodeDropdown.classList.remove('show');
        dropdownArrow.classList.remove('open');
      }
    });
  }
});


// OTP Input Auto Focus
document.addEventListener('DOMContentLoaded', function() {
  const otpInputs = document.querySelectorAll('.otp-input');
  
  if (otpInputs.length > 0) {
    otpInputs.forEach((input, index) => {
      // Auto focus next input on input
      input.addEventListener('input', function(e) {
        if (this.value.length === 1 && index < otpInputs.length - 1) {
          otpInputs[index + 1].focus();
        }
      });

      // Handle backspace to focus previous input
      input.addEventListener('keydown', function(e) {
        if (e.key === 'Backspace' && this.value === '' && index > 0) {
          otpInputs[index - 1].focus();
        }
      });

      // Only allow numbers
      input.addEventListener('keypress', function(e) {
        if (!/[0-9]/.test(e.key)) {
          e.preventDefault();
        }
      });

      // Handle paste
      input.addEventListener('paste', function(e) {
        e.preventDefault();
        const pastedData = e.clipboardData.getData('text').slice(0, 6);
        const digits = pastedData.split('');
        
        digits.forEach((digit, i) => {
          if (otpInputs[i] && /[0-9]/.test(digit)) {
            otpInputs[i].value = digit;
          }
        });
        
        // Focus last filled input or last input
        const lastIndex = Math.min(digits.length, otpInputs.length - 1);
        otpInputs[lastIndex].focus();
      });
    });
  }
});
