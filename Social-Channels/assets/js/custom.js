const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");

navToggle.addEventListener("click", () => {
    navToggle.classList.toggle("active");
    navMenu.style.display =
        navMenu.style.display === "flex" ? "none" : "flex";
});

// Mobile Navigation Functions
function goBackToConversations() {
    console.log('Going back to conversations');
    const chatContainer = document.querySelector('.chat-container');
    chatContainer.classList.remove('mobile-view-chat');
    chatContainer.classList.add('mobile-view-conversations');
}

function openCustomerDetails() {
    console.log('Opening customer details');
    const customerSidebar = document.getElementById('customerDetailsSidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    if (customerSidebar) {
        customerSidebar.classList.add('active');
    }
    if (sidebarOverlay) {
        sidebarOverlay.classList.add('active');
    }
    document.body.style.overflow = 'hidden';
}

// Dropdown and Customer Details Functionality
document.addEventListener('DOMContentLoaded', function () {
    console.log('Custom.js loaded');

    // Dropdown functionality
    setTimeout(function () {
        const dropdowns = document.querySelectorAll('.custom-select');
        console.log('Found dropdowns:', dropdowns.length);

        dropdowns.forEach(function (dropdown, index) {
            const trigger = dropdown.querySelector('.select-trigger');
            if (trigger) {
                console.log('Setting up dropdown', index);

                trigger.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    console.log('Dropdown', index, 'clicked');

                    // Close other dropdowns
                    dropdowns.forEach(function (other, otherIndex) {
                        if (otherIndex !== index) {
                            other.classList.remove('active');
                        }
                    });

                    // Toggle this dropdown
                    dropdown.classList.toggle('active');
                    console.log('Dropdown', index, 'is now:', dropdown.classList.contains('active') ? 'OPEN' : 'CLOSED');
                });
            }
        });

        // Close on outside click
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.custom-select')) {
                dropdowns.forEach(function (dropdown) {
                    dropdown.classList.remove('active');
                });
            }
        });
    }, 500);

    // Customer Details Sidebar functionality
    const chatUserInfo = document.querySelector('.chat-user-info');
    const customerSidebar = document.getElementById('customerDetailsSidebar');
    const closeSidebarBtn = document.getElementById('closeSidebarBtn');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    console.log('Customer sidebar elements:', {
        chatUserInfo: !!chatUserInfo,
        customerSidebar: !!customerSidebar,
        closeSidebarBtn: !!closeSidebarBtn,
        sidebarOverlay: !!sidebarOverlay
    });

    // Open sidebar when clicking on chat user info
    if (chatUserInfo) {
        console.log('Adding click listener to chat user info');
        chatUserInfo.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Chat user info clicked - opening customer details sidebar');

            if (customerSidebar) {
                customerSidebar.classList.add('active');
                console.log('Added active class to customer sidebar');
            }

            if (sidebarOverlay) {
                sidebarOverlay.classList.add('active');
                console.log('Added active class to overlay');
            }

            document.body.style.overflow = 'hidden';
            console.log('Customer details sidebar should be open now');
        });
    } else {
        console.log('ERROR: chat-user-info element not found!');
    }

    // Close sidebar functions
    function closeSidebar() {
        if (customerSidebar) {
            customerSidebar.classList.remove('active');
        }
        if (sidebarOverlay) {
            sidebarOverlay.classList.remove('active');
        }
        document.body.style.overflow = '';
    }

    // Close on close button click
    if (closeSidebarBtn) {
        closeSidebarBtn.addEventListener('click', closeSidebar);
    }

    // Close on overlay click
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', closeSidebar);
    }

    // Close on escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && customerSidebar && customerSidebar.classList.contains('active')) {
            closeSidebar();
        }
    });
});

// ==================== CHATFLOW RIGHT SIDEBAR FUNCTIONALITY ====================
document.addEventListener('DOMContentLoaded', function () {
    console.log('Chatflow sidebar functionality loaded');

    // Section collapse/expand functionality using Bootstrap collapse
    const sectionHeaders = document.querySelectorAll('.section-header[data-toggle="collapse"]');
    
    sectionHeaders.forEach(function (header) {
        header.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('data-target');
            const targetElement = document.querySelector(targetId);
            const arrow = this.querySelector('.section-arrow');
            
            if (targetElement) {
                // Toggle Bootstrap collapse
                $(targetElement).collapse('toggle');
                
                // Update aria-expanded attribute
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);
                
                console.log('Section toggled:', targetId, 'Expanded:', !isExpanded);
            }
        });
    });

    // Tool option click functionality
    const toolOptions = document.querySelectorAll('.tool-option');
    
    toolOptions.forEach(function (tool) {
        tool.addEventListener('click', function (e) {
            e.preventDefault();
            
            const toolType = this.getAttribute('data-tool');
            const toolName = this.querySelector('.tool-name').textContent;
            
            console.log('Tool clicked:', toolType, '-', toolName);
            
            // Remove active class from all tools
            toolOptions.forEach(function (otherTool) {
                otherTool.classList.remove('active');
            });
            
            // Add active class to clicked tool
            this.classList.add('active');
            
            // Here you can add specific functionality for each tool
            handleToolSelection(toolType, toolName);
        });
    });

    // Handle tool selection
    function handleToolSelection(toolType, toolName) {
        console.log('Handling tool selection:', toolType, toolName);
        
        // Add your tool-specific logic here
        switch (toolType) {
            case 'text-message':
                console.log('Opening text message creator');
                // Add text message functionality
                break;
            case 'media-message':
                console.log('Opening media message creator');
                // Add media message functionality
                break;
            case 'cta-message':
                console.log('Opening CTA message creator');
                // Add CTA message functionality
                break;
            case 'collect-name':
                console.log('Opening name collection form');
                // Add name collection functionality
                break;
            case 'collect-email':
                console.log('Opening email collection form');
                // Add email collection functionality
                break;
            case 'collect-phone':
                console.log('Opening phone collection form');
                // Add phone collection functionality
                break;
            case 'set-condition':
                console.log('Opening condition setter');
                // Add condition setting functionality
                break;
            case 'delay-action':
                console.log('Opening delay action creator');
                // Add delay action functionality
                break;
            case 'webhook':
                console.log('Opening webhook configuration');
                // Add webhook functionality
                break;
            case 'google-sheets':
                console.log('Opening Google Sheets integration');
                // Add Google Sheets functionality
                break;
            case 'calendar':
                console.log('Opening calendar integration');
                // Add calendar functionality
                break;
            case 'email-integration':
                console.log('Opening email integration');
                // Add email integration functionality
                break;
            case 'payment-link':
                console.log('Opening payment link creator');
                // Add payment link functionality
                break;
            case 'product-catalog':
                console.log('Opening product catalog');
                // Add product catalog functionality
                break;
            case 'order-tracking':
                console.log('Opening order tracking');
                // Add order tracking functionality
                break;
            case 'ai-response':
                console.log('Opening AI response configuration');
                // Add AI response functionality
                break;
            case 'ai-agent':
                console.log('Opening AI agent configuration');
                // Add AI agent functionality
                break;
            case 'smart-routing':
                console.log('Opening smart routing configuration');
                // Add smart routing functionality
                break;
            default:
                console.log('Unknown tool type:', toolType);
        }
    }

    console.log('Chatflow sidebar functionality initialized successfully');
});
// ==================== CHATFLOW SIDEBAR TOGGLE FUNCTIONALITY ====================
document.addEventListener('DOMContentLoaded', function () {

    const flowToggleBtn = document.querySelector('.flow-toggle-btn');
    const chatflowSidebar = document.getElementById('dashboardSidebar');

    // Create overlay for mobile if not already present
    let chatflowOverlay = document.getElementById('chatflowSidebarOverlay');
    if (!chatflowOverlay) {
        chatflowOverlay = document.createElement('div');
        chatflowOverlay.id = 'chatflowSidebarOverlay';
        document.body.appendChild(chatflowOverlay);
    }

    function isMobile() {
        return window.innerWidth < 768;
    }

    function closeMobileSidebar() {
        chatflowSidebar.classList.remove('mobile-open');
        chatflowOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    function initSidebarState() {
        if (isMobile()) {
            // On mobile: sidebar always closed by default, no collapsed class needed
            chatflowSidebar.classList.remove('collapsed');
            chatflowSidebar.classList.remove('mobile-open');
            chatflowOverlay.classList.remove('active');
            flowToggleBtn.classList.remove('active');
        } else {
            // On desktop: normal inline behavior
            chatflowSidebar.classList.remove('mobile-open');
            chatflowOverlay.classList.remove('active');
            chatflowSidebar.classList.remove('collapsed');
            flowToggleBtn.classList.remove('active');
            localStorage.removeItem('chatflowSidebarCollapsed');
        }
    }

    if (flowToggleBtn && chatflowSidebar) {
        initSidebarState();

        flowToggleBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            if (isMobile()) {
                // Mobile: toggle overlay sidebar
                const isOpen = chatflowSidebar.classList.contains('mobile-open');
                if (isOpen) {
                    closeMobileSidebar();
                    flowToggleBtn.classList.remove('active');
                } else {
                    chatflowSidebar.classList.add('mobile-open');
                    chatflowOverlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                    flowToggleBtn.classList.add('active');
                }
            } else {
                // Desktop: inline collapse/expand
                chatflowSidebar.classList.toggle('collapsed');
                flowToggleBtn.classList.toggle('active');
                localStorage.setItem('chatflowSidebarCollapsed', chatflowSidebar.classList.contains('collapsed'));
            }
        });

        // Close mobile sidebar on overlay click
        chatflowOverlay.addEventListener('click', function () {
            closeMobileSidebar();
            flowToggleBtn.classList.remove('active');
        });

        // On resize: reset state
        window.addEventListener('resize', function () {
            initSidebarState();
        });
    }
});

// ==================== FLOW RIGHT SIDEBAR MOBILE TOGGLE ====================
document.addEventListener('DOMContentLoaded', function () {
    const rightToggleBtn = document.querySelector('.right-sidebar-toggle-btn');
    const flowRightSidebar = document.getElementById('flowRightSidebar');
    const navbar = document.querySelector('.navbar');

    // Create overlay
    let rightOverlay = document.getElementById('rightSidebarOverlay');
    if (!rightOverlay) {
        rightOverlay = document.createElement('div');
        rightOverlay.id = 'rightSidebarOverlay';
        document.body.appendChild(rightOverlay);
    }

    function getNavbarHeight() {
        return navbar ? navbar.offsetHeight : 0;
    }

    function closeRightSidebar() {
        flowRightSidebar.classList.remove('mobile-open');
        flowRightSidebar.removeAttribute('style');
        rightOverlay.classList.remove('active');
        document.body.style.overflow = '';
        if (rightToggleBtn) rightToggleBtn.classList.remove('active');
    }

    if (rightToggleBtn && flowRightSidebar) {
        rightToggleBtn.addEventListener('click', function () {
            const isOpen = flowRightSidebar.classList.contains('mobile-open');
            if (isOpen) {
                closeRightSidebar();
            } else {
                flowRightSidebar.setAttribute('style', 
                    'display: block !important; position: fixed !important; top: 0 !important; right: 0 !important; ' +
                    'height: 100% !important; width: 280px !important; min-width: 280px !important; ' +
                    'max-width: 280px !important; z-index: 99999 !important; ' +
                    'transform: translateX(0) !important; overflow-y: auto !important;'
                );
                rightOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
                rightToggleBtn.classList.add('active');
                flowRightSidebar.classList.add('mobile-open');
            }
        });

        rightOverlay.addEventListener('click', closeRightSidebar);

        window.addEventListener('resize', function () {
            if (window.innerWidth >= 768) {
                closeRightSidebar();
            }
        });
    }
});
