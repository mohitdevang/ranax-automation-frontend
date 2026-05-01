// Sidebar Management Functions

// Utility functions for element visibility management
function hideElement(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
        // Use !important to override Bootstrap's d-flex !important
        element.style.setProperty('display', 'none', 'important');
        console.log(`Hidden element: ${elementId}`);
    } else {
        console.warn(`Element with ID '${elementId}' not found`);
    }
}

function showElement(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
        // Check if it's the postButtonDiv to restore flex properties
        if (elementId === 'postButtonDiv') {
            element.style.display = 'flex';
            element.style.flexDirection = 'column';
            element.style.gap = '12px';
        } else {
            element.style.display = 'block';
        }
        console.log(`Shown element: ${elementId}`);
    } else {
        console.warn(`Element with ID '${elementId}' not found`);
    }
}

function hideElementByClass(className) {
    const element = document.querySelector(`.${className}`);
    if (element) {
        element.style.display = 'none !important';
        console.log(`Hidden element by class: ${className}`);
    } else {
        console.warn(`Element with class '${className}' not found`);
    }
}

function showElementByClass(className) {
    const element = document.querySelector(`.${className}`);
    if (element) {
        element.style.display = 'flex';
        element.style.flexDirection = 'column';
        element.style.gap = '12px';
        console.log(`Shown element by class: ${className}`);
    } else {
        console.warn(`Element with class '${className}' not found`);
    }
}

// State management functions
function showWhatsAppConnectedState(userData = null) {
    console.log('showWhatsAppConnectedState called');
    
    // Hide the post-button div (3 default buttons)
    hideElement('postButtonDiv');
    
    // Show the after-connected-whatsapp div
    showElement('afterConnectedDiv');
    
    // Update user data if provided
    if (userData) {
        const nameElement = document.getElementById('connectedUserName');
        const phoneElement = document.getElementById('connectedUserPhone');
        
        if (nameElement && userData.name) {
            nameElement.textContent = userData.name;
        }
        if (phoneElement && userData.phone) {
            phoneElement.textContent = userData.phone;
        }
    }
    
    console.log('showWhatsAppConnectedState completed');
}

function showWhatsAppDisconnectedState() {
    console.log('showWhatsAppDisconnectedState called');
    
    // Show the post-button div (3 default buttons)
    showElement('postButtonDiv');
    
    // Hide the after-connected-whatsapp div
    hideElement('afterConnectedDiv');
    
    console.log('showWhatsAppDisconnectedState completed');
}

// Function to update sidebar when WhatsApp is connected (updated to use visibility management)
function updateWhatsAppSidebar(userData = null) {
    showWhatsAppConnectedState(userData);
}

// Debug function - call this manually to test
function debugSidebarSwitch() {
    console.log('=== DEBUG SIDEBAR SWITCH ===');
    
    const postDiv = document.getElementById('postButtonDiv');
    const afterDiv = document.getElementById('afterConnectedDiv');
    
    console.log('postButtonDiv element:', postDiv);
    console.log('afterConnectedDiv element:', afterDiv);
    
    if (postDiv) {
        console.log('postButtonDiv current display:', postDiv.style.display);
        postDiv.style.display = 'none';
        console.log('postButtonDiv set to none');
    } else {
        console.error('postButtonDiv NOT FOUND!');
    }
    
    if (afterDiv) {
        console.log('afterConnectedDiv current display:', afterDiv.style.display);
        afterDiv.style.display = 'block';
        console.log('afterConnectedDiv set to block');
    } else {
        console.error('afterConnectedDiv NOT FOUND!');
    }
    
    console.log('=== DEBUG COMPLETE ===');
}



// Form submission handler
function handleFormSubmit(event) {
    event.preventDefault();
    
    // Show loading overlay
    document.getElementById('loadingOverlay').classList.add('show');
    
    // Simulate loading delay
    setTimeout(() => {
        // Hide loading
        document.getElementById('loadingOverlay').classList.remove('show');
        
        // Go to step 2 (Verify)
        goToStep(2);
    }, 1500);
}

// Step navigation function
function goToStep(stepNumber) {
    // Hide all step contents
    document.querySelectorAll('.step-content').forEach(content => {
        content.style.display = 'none';
    });
    
    // Remove active/completed classes from all steps and reset dots
    document.querySelectorAll('.step-item').forEach(step => {
        step.classList.remove('active', 'completed');
    });
    
    // Reset all dots to empty
    document.querySelectorAll('.step-dot').forEach(dot => {
        dot.classList.remove('filled');
    });
    
    // Get layout elements
    const leftColumn = document.querySelector('.col-md-7');
    const rightColumn = document.querySelector('.col-md-5');
    
    // Show current step content and update step indicators
    if (stepNumber === 1) {
        document.getElementById('step1Content').style.display = 'block';
        document.getElementById('step1').classList.add('active');
        // Step 1 is active but not filled (empty circle)
        
        // Show normal layout for Step 1 & 2
        leftColumn.className = 'col-md-7';
        rightColumn.style.display = 'block';
    } else if (stepNumber === 2) {
        document.getElementById('step2Content').style.display = 'block';
        document.getElementById('step1').classList.add('completed');
        document.getElementById('step2').classList.add('active');
        // Step 1 completed (filled), Step 2 active (empty)
        document.querySelector('#step1 .step-dot').classList.add('filled');
        
        // Show normal layout for Step 1 & 2
        leftColumn.className = 'col-md-7';
        rightColumn.style.display = 'block';
    } else if (stepNumber === 3) {
        document.getElementById('step3Content').style.display = 'block';
        document.getElementById('step1').classList.add('completed');
        document.getElementById('step2').classList.add('completed');
        document.getElementById('step3').classList.add('active');
        // Step 1 & 2 completed (filled), Step 3 active (also filled for complete design)
        document.querySelector('#step1 .step-dot').classList.add('filled');
        document.querySelector('#step2 .step-dot').classList.add('filled');
        document.querySelector('#step3 .step-dot').classList.add('filled');
        
        // Center layout for Step 3 - hide right column and center left
        leftColumn.className = 'col-12 d-flex justify-content-center';
        rightColumn.style.display = 'none';
        
        // Update WhatsApp sidebar item to show connected account
        updateWhatsAppSidebar();
        
        // Force update immediately for testing
        setTimeout(() => {
            console.log('Force updating sidebar after 1 second');
            showWhatsAppConnectedState({name: "Rahul Kumar", phone: "+1 (951) 315-2454"});
        }, 1000);
    }
}

// Toggle code input and button text
function toggleCodeInput() {
    const codeSection = document.getElementById('codeInputSection');
    const button = document.getElementById('generateVerifyBtn');
    
    // Check if we're on telegram page
    const isTelegramPage = window.location.pathname.includes('telegram');
    
    if (codeSection.style.display === 'none') {
        // Show code input and change button to "Verify Code"
        codeSection.style.display = 'block';
        button.innerHTML = `
            Verify Code
            <img src="assets/images/svg/arrow-left.svg" alt="Verify" width="12" height="12" class="">
        `;
        button.onclick = function() { 
            if (isTelegramPage) {
                window.location.href = 'dashboard-telegram.html';
            } else {
                goToStep(3);
            }
        };
    }
}

// Sidebar toggle functionality
document.addEventListener('DOMContentLoaded', function () {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('dashboardSidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const body = document.body;

    // Auto-detect WhatsApp connection state based on current page
    const currentPage = window.location.pathname;
    console.log('Current page:', currentPage);
    
    if (currentPage.includes('whatsapp-management.html')) {
        // If on WhatsApp management page, user is already connected
        console.log('WhatsApp management page detected - showing connected state');
        
        // Force hide post-button div
        setTimeout(() => {
            const postDiv = document.getElementById('postButtonDiv');
            const afterDiv = document.getElementById('afterConnectedDiv');
            
            if (postDiv) {
                postDiv.style.setProperty('display', 'none', 'important');
                console.log('Force hidden postButtonDiv with !important');
            }
            
            if (afterDiv) {
                afterDiv.style.display = 'block';
                console.log('Force shown afterConnectedDiv');
            }
        }, 100);
        
        showWhatsAppConnectedState({name: "Rahul Kumar", phone: "+1 (951) 315-2454"});
    } else if (currentPage.includes('connect-whatsapp.html')) {
        // Check if we're on step 3 (connection complete)
        const step3Content = document.getElementById('step3Content');
        if (step3Content && step3Content.style.display !== 'none') {
            console.log('Step 3 detected, updating sidebar');
            showWhatsAppConnectedState({name: "Rahul Kumar", phone: "+1 (951) 315-2454"});
        }
    }

    // Sidebar toggle functionality
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function () {
            sidebar.classList.toggle('sidebar-collapsed');
            overlay.classList.toggle('show');
            body.classList.toggle('sidebar-open');
        });
    }

    // Close sidebar when clicking overlay
    if (overlay) {
        overlay.addEventListener('click', function () {
            sidebar.classList.remove('sidebar-collapsed');
            overlay.classList.remove('show');
            body.classList.remove('sidebar-open');
        });
    }

    // Close sidebar on window resize if mobile
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            sidebar.classList.remove('sidebar-collapsed');
            overlay.classList.remove('show');
            body.classList.remove('sidebar-open');
        }
    });
});