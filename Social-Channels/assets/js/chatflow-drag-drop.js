// Tool configurations with their details
const toolConfigs = {
    'text-message': {
        name: 'Text',
        icon: 'assets/images/svg/chat.svg',
        bgClass: 'bg-voilet-light',
        description: 'Send a text message',
        toolType: 'text-message'
    },
    'media-message': {
        name: 'Media',
        icon: 'assets/images/svg/file.svg',
        bgClass: 'bg-voilet-light',
        description: 'Share media files',
        toolType: 'media-message'
    },
    'cta-message': {
        name: 'CTA',
        icon: 'assets/images/svg/action.svg',
        bgClass: 'bg-voilet-light',
        description: 'Call to action button',
        toolType: 'cta-message'
    },
    'collect-name': {
        name: 'Quick reply buttons',
        icon: 'assets/images/svg/yellow-album.svg',
        bgClass: 'bg-yellow-light',
        description: 'Quick reply options',
        toolType: 'collect-name'
    },
    'collect-email': {
        name: 'List options',
        icon: 'assets/images/svg/yellow-album.svg',
        bgClass: 'bg-yellow-light',
        description: 'List selection options',
        toolType: 'collect-email'
    },
    'collect-phone': {
        name: 'Ask Anything',
        icon: 'assets/images/svg/yellow-album.svg',
        bgClass: 'bg-yellow-light',
        description: 'Ask any question',
        toolType: 'collect-phone'
    },
    'collect-address': {
        name: 'Address',
        icon: 'assets/images/svg/yellow-album.svg',
        bgClass: 'bg-yellow-light',
        description: 'Collect address information',
        toolType: 'collect-address'
    },
    'collect-forms': {
        name: 'Forms',
        icon: 'assets/images/svg/yellow-album.svg',
        bgClass: 'bg-yellow-light',
        description: 'Custom form collection',
        toolType: 'collect-forms'
    },
    'collect-location': {
        name: 'Location',
        icon: 'assets/images/svg/yellow-album.svg',
        bgClass: 'bg-yellow-light',
        description: 'Get location data',
        toolType: 'collect-location'
    },
    'set-condition': {
        name: 'Check condition',
        icon: 'assets/images/svg/blue-album.svg',
        bgClass: 'bg-blue-light',
        description: 'Set conditional logic',
        toolType: 'set-condition'
    },
    'write-attribute': {
        name: 'Write attribute',
        icon: 'assets/images/svg/blue-album.svg',
        bgClass: 'bg-blue-light',
        description: 'Write custom attributes',
        toolType: 'write-attribute'
    },
    'assign': {
        name: 'Assign',
        icon: 'assets/images/svg/blue-album.svg',
        bgClass: 'bg-blue-light',
        description: 'Assign to team member',
        toolType: 'assign'
    },
    'alert': {
        name: 'Alert',
        icon: 'assets/images/svg/blue-album.svg',
        bgClass: 'bg-blue-light',
        description: 'Send WhatsApp alert',
        toolType: 'alert'
    },
    'custom-api': {
        name: 'Custom API',
        icon: 'assets/images/svg/blue-album.svg',
        bgClass: 'bg-blue-light',
        description: 'Custom API integration',
        toolType: 'custom-api'
    },
    'open-conversation': {
        name: 'Open conversation',
        icon: 'assets/images/svg/blue-album.svg',
        bgClass: 'bg-blue-light',
        description: 'Open conversation window',
        toolType: 'open-conversation'
    },
    'flow-completed': {
        name: 'Flow completed',
        icon: 'assets/images/svg/blue-album.svg',
        bgClass: 'bg-blue-light',
        description: 'Mark flow as complete',
        toolType: 'flow-completed'
    },
    'connect-other-flow': {
        name: 'Connect other flow',
        icon: 'assets/images/svg/blue-album.svg',
        bgClass: 'bg-blue-light',
        description: 'Connect to another flow',
        toolType: 'connect-other-flow'
    },
    'wait': {
        name: 'Wait',
        icon: 'assets/images/svg/blue-album.svg',
        bgClass: 'bg-blue-light',
        description: 'Add wait time',
        toolType: 'wait'
    },
    'google-sheets': {
        name: 'Google Sheets',
        icon: 'assets/images/svg/green-album.svg',
        bgClass: 'bg-green-light',
        description: 'Google Sheets integration',
        toolType: 'google-sheets'
    },
    'shopify': {
        name: 'Shopify',
        icon: 'assets/images/svg/green-album.svg',
        bgClass: 'bg-green-light',
        description: 'Shopify integration',
        toolType: 'shopify'
    },
    'zoho': {
        name: 'Zoho',
        icon: 'assets/images/svg/green-album.svg',
        bgClass: 'bg-green-light',
        description: 'Zoho integration',
        toolType: 'zoho'
    },
    'woo-commerce': {
        name: 'Woo Commerce',
        icon: 'assets/images/svg/green-album.svg',
        bgClass: 'bg-green-light',
        description: 'WooCommerce integration',
        toolType: 'woo-commerce'
    },
    'appointment': {
        name: 'Appointment',
        icon: 'assets/images/svg/green-album.svg',
        bgClass: 'bg-green-light',
        description: 'Schedule appointments',
        toolType: 'appointment'
    },
    'share-product': {
        name: 'Share product',
        icon: 'assets/images/svg/red-album.svg',
        bgClass: 'bg-pink-light',
        description: 'Share product details',
        toolType: 'share-product'
    },
    'manage-cart': {
        name: 'Manage cart',
        icon: 'assets/images/svg/red-album.svg',
        bgClass: 'bg-pink-light',
        description: 'Manage shopping cart',
        toolType: 'manage-cart'
    },
    'collect-payment': {
        name: 'Collect payment',
        icon: 'assets/images/svg/red-album.svg',
        bgClass: 'bg-pink-light',
        description: 'Collect payment information',
        toolType: 'collect-payment'
    },
    'ai-response': {
        name: 'Let AI reply',
        icon: 'assets/images/svg/black-album.svg',
        bgClass: 'bg-black-light',
        description: 'AI-powered response',
        toolType: 'ai-response'
    }
};

function initDragAndDrop() {
    const toolOptions = document.querySelectorAll('.tool-option');
    const dropZone = document.querySelector('.chatFlow-container-bg');
    const container = document.querySelector('.chatFlow-container');

    // Make all tool options draggable
    toolOptions.forEach(tool => {
        tool.setAttribute('draggable', 'true');
        
        tool.addEventListener('dragstart', function(e) {
            const toolType = this.getAttribute('data-tool');
            e.dataTransfer.setData('toolType', toolType);
            this.style.opacity = '0.5';
        });

        tool.addEventListener('dragend', function(e) {
            this.style.opacity = '1';
        });
    });

    // Setup drop zone
    if (dropZone) {
        dropZone.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.style.backgroundColor = 'rgba(124, 58, 237, 0.05)';
        });

        dropZone.addEventListener('dragleave', function(e) {
            this.style.backgroundColor = '';
        });

        dropZone.addEventListener('drop', function(e) {
            e.preventDefault();
            this.style.backgroundColor = '';
            
            const toolType = e.dataTransfer.getData('toolType');
            const toolConfig = toolConfigs[toolType];
            
            if (toolConfig) {
                createToolCard(toolConfig, e.clientX, e.clientY);
            }
        });
    }
}

function createToolCard(config, x, y) {
    const container = document.querySelector('.chatFlow-container');
    const containerRect = container.getBoundingClientRect();
    
    // Calculate position relative to container
    const posX = x - containerRect.left;
    const posY = y - containerRect.top;

    // Create new card element
    const card = document.createElement('div');
    card.className = 'chatFlow-create-card d-flex flex-column gap-2 position-absolute cursor-pointer';
    card.style.left = posX + 'px';
    card.style.top = posY + 'px';
    card.style.transform = 'translate(-50%, -50%)';
    card.setAttribute('data-tool-type', config.toolType);
    
    card.innerHTML = `
        <div class="d-flex align-items-center gap-2">
            <div class="tool-icon d-flex justify-content-center align-items-center ${config.bgClass}">
                <img src="${config.icon}" alt="${config.name}">
            </div>
            <h4 class="font-14 medium textDark mb-0">${config.name}</h4>
        </div>
        <h5 class="font-12 regular textLightColor mb-0">${config.description}</h5>
        <span class="dot cursor-pointer"></span>
    `;

    // Add double click event to open sidebar
    card.addEventListener('dblclick', function(e) {
        if (!e.target.classList.contains('dot')) {
            openToolSidebar(config.toolType);
        }
    });

    // Make the card draggable within the container
    makeCardDraggable(card);
    
    container.appendChild(card);
}

function makeCardDraggable(card) {
    let isDragging = false;
    let currentX;
    let currentY;
    let initialX;
    let initialY;

    card.addEventListener('mousedown', function(e) {
        if (e.target.classList.contains('dot')) return;
        
        isDragging = true;
        const rect = card.getBoundingClientRect();
        initialX = e.clientX - rect.left;
        initialY = e.clientY - rect.top;
        
        card.style.cursor = 'grabbing';
    });

    document.addEventListener('mousemove', function(e) {
        if (!isDragging) return;
        
        e.preventDefault();
        const container = document.querySelector('.chatFlow-container');
        const containerRect = container.getBoundingClientRect();
        
        currentX = e.clientX - containerRect.left - initialX;
        currentY = e.clientY - containerRect.top - initialY;
        
        // Clamp card within container bounds
        const cardW = card.offsetWidth;
        const cardH = card.offsetHeight;
        const maxX = containerRect.width - cardW;
        const maxY = containerRect.height - cardH;
        currentX = Math.max(0, Math.min(currentX, maxX));
        currentY = Math.max(0, Math.min(currentY, maxY));

        card.style.left = currentX + 'px';
        card.style.top = currentY + 'px';
        card.style.transform = 'none';
    });

    document.addEventListener('mouseup', function() {
        if (isDragging) {
            isDragging = false;
            card.style.cursor = 'pointer';
        }
    });
}

// Initialize drag and drop when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    initDragAndDrop();
});


// Function to open tool sidebar with specific content
function openToolSidebar(toolType) {
    const sidebar = document.getElementById('chatFlowDetailsSidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    
    if (sidebar) {
        // Update sidebar content based on tool type
        updateSidebarContent(toolType);
        
        sidebar.classList.add('active');
        if (sidebarOverlay) {
            sidebarOverlay.classList.add('active');
        }
        document.body.style.overflow = 'hidden';
    }
}

// Function to update sidebar content based on tool type
function updateSidebarContent(toolType) {
    // Hide all content sections
    const allContents = document.querySelectorAll('.sidebar-content');
    allContents.forEach(content => {
        content.style.display = 'none';
    });
    
    // Update header based on tool type
    const sidebarIcon = document.getElementById('sidebarIcon');
    const sidebarTitleText = document.getElementById('sidebarTitleText');
    const sidebarDescription = document.getElementById('sidebarDescription');
    
    const toolSettings = {
        'text-message': {
            icon: 'assets/images/svg/chat.svg',
            title: 'Text',
            description: 'All messages will be sent from top to bottom.',
            contentId: 'textMessageContent'
        },
        'media-message': {
            icon: 'assets/images/svg/file.svg',
            title: 'Media',
            description: 'Share images, videos, documents, and audio files with your audience.',
            contentId: 'mediaMessageContent'
        },
        'cta-message': {
            icon: 'assets/images/svg/action.svg',
            title: 'CTA',
            description: 'Create call-to-action messages with buttons that redirect users to external links.',
            contentId: 'ctaMessageContent'
        },
        'collect-name': {
            icon: 'assets/images/svg/yellow-album.svg',
            title: 'Quick Reply Buttons',
            description: 'Create interactive messages with quick reply buttons for easy user responses.',
            contentId: 'quickReplyContent'
        },
        'collect-email': {
            icon: 'assets/images/svg/yellow-album.svg',
            title: 'List',
            description: 'Share a list of options for users to choose from.',
            contentId: 'listOptionsContent'
        },
        'collect-address': {
            icon: 'assets/images/svg/yellow-album.svg',
            title: 'Address',
            description: 'Capture user\'s address in structured format (House No., Locality, Street, City, Pin Code, etc.).',
            contentId: 'addressContent'
        },
        'collect-forms': {
            icon: 'assets/images/svg/yellow-album.svg',
            title: 'Forms',
            description: 'Send structured messages that feel more natural and user-friendly.',
            contentId: 'formsContent'
        },
        'collect-location': {
            icon: 'assets/images/svg/yellow-album.svg',
            title: 'Location',
            description: 'Capture user accurate pin location in latitude and longitude.',
            contentId: 'locationContent'
        },
        'set-condition': {
            icon: 'assets/images/svg/blue-album.svg',
            title: 'Check Condition',
            description: 'All rules will be checked from top to bottom, which means an action (such as assignment).',
            contentId: 'checkConditionContent'
        },
        'write-attribute': {
            icon: 'assets/images/svg/blue-album.svg',
            title: 'Write Attribute',
            description: 'Update user attributes dynamically by assigning any value, such as setting a funnel stage from Visitor to Interested, enabling seamless personalization.',
            contentId: 'writeAttributeContent'
        },
        'assign': {
            icon: 'assets/images/svg/blue-album.svg',
            title: 'Assign',
            description: 'Automatically assign conversations to a specific team member or team. Team assignments follow a round-robin distribution for balanced workload management.',
            contentId: 'assignContent'
        },
        'alert': {
            icon: 'assets/images/svg/blue-album.svg',
            title: 'Alert',
            description: 'Send a WhatsApp alert about lead qualification to a team member.',
            contentId: 'alertContent',
            toolType: 'alert'
        },
        'custom-api': {
            icon: 'assets/images/svg/blue-album.svg',
            title: 'Custom API',
            description: 'Send or receive data from any external system using API calls, enabling seamless integration and real-time automation.',
            contentId: 'customApiContent'
        },
        'connect-other-flow': {
            icon: 'assets/images/svg/blue-album.svg',
            title: 'Connect Flow',
            description: 'Jump on to other chatflows that you have created.',
            contentId: 'connectFlowContent'
        },
        'wait': {
            icon: 'assets/images/svg/blue-album.svg',
            title: 'Wait',
            description: 'Add a delay before the next step in your chatflow. The flow will pause for the duration you set and automatically resume afterward.',
            contentId: 'waitContent'
        },
        'share-product': {
            icon: 'assets/images/svg/red-album.svg',
            title: 'Share Products',
            description: 'Share single or multiple products with your users from the connected Facebook Catalog.',
            contentId: 'shareProductsContent'
        },
        'manage-cart': {
            icon: 'assets/images/svg/red-album.svg',
            title: 'Manage Cart',
            description: 'Allow users to manage their shopping cart by either confirming or clearing it, and proceed with checkout options.',
            contentId: 'manageCartContent'
        },
        'keyword': {
            icon: 'assets/images/svg/add-keyword.svg',
            title: 'Add keyword',
            description: 'Add up to 10 keywords to trigger this chatflow.',
            contentId: 'keywordContent'
        }
    };
    
    const settings = toolSettings[toolType] || toolSettings['keyword'];
    
    // Update header
    if (sidebarIcon) sidebarIcon.src = settings.icon;
    if (sidebarTitleText) sidebarTitleText.textContent = settings.title;
    if (sidebarDescription) sidebarDescription.textContent = settings.description;
    
    // Show specific content
    const contentToShow = document.getElementById(settings.contentId);
    if (contentToShow) {
        contentToShow.style.display = 'block';
    }
}
