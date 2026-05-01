   // Chat Box JavaScript Functionality
        class ChatBox {
            constructor() {
                this.currentUser = 'Luis Pittman';
                this.selectedImages = [];
                this.isMobileView = false;
                this.conversations = {
                    'Tom Anderson': [
                        { sender: 'Tom Anderson', message: 'Hello, I\'m interested in this item...', time: '12:24 AM', type: 'received' }
                    ],
                    'Luis Pittman': [
                        { sender: 'Luis Pittman', message: 'Hi, I wonder when if there is going to be anything new for spring?', time: '12:45 AM', type: 'received' },
                        { sender: 'You', message: 'Hi Luis, can you please be more specific?', time: '12:51 AM', type: 'sent' },
                        { sender: 'Luis Pittman', message: 'Sure, I want to know when the new spring collection for men is coming', time: '12:45 AM', type: 'received' },
                        { sender: 'You', message: 'Thank you for taking interest in our upcoming products. You can have a look at the upcoming collection in our blog post.', time: '12:49 AM', type: 'sent', hasAttachment: true }
                    ],
                    'Alisson Mack': [
                        { sender: 'Alisson Mack', message: 'I want to complain about item', time: 'Yesterday', type: 'received' }
                    ],
                    'Barry George': [
                        { sender: 'Barry George', message: 'Is there any chance to get a refund?', time: '09:54 AM', type: 'received' }
                    ],
                    'Jenny Lloyd': [
                        { sender: 'Jenny Lloyd', message: 'I\'m not sure if this is what I want', time: 'Yesterday', type: 'received' }
                    ],
                    'Andrew Larson': [
                        { sender: 'Andrew Larson', message: 'Can you help me choose from these options?', time: 'Yesterday', type: 'received' }
                    ]
                };
                
                this.init();
            }

            init() {
                this.checkMobileView();
                this.bindEvents();
                this.loadConversation(this.currentUser);
                this.setupMobileNavigation();
            }

            checkMobileView() {
                this.isMobileView = window.innerWidth <= 768;
                
                if (this.isMobileView) {
                    // Mobile view - show conversations first
                    this.showConversations();
                } else {
                    // Desktop view - remove all mobile classes to show both panels
                    const chatContainer = document.querySelector('.chat-container');
                    chatContainer.classList.remove('mobile-view-conversations', 'mobile-view-chat');
                }
            }

            showConversations() {
                const chatContainer = document.querySelector('.chat-container');
                chatContainer.classList.remove('mobile-view-chat');
                chatContainer.classList.add('mobile-view-conversations');
            }

            showChat() {
                const chatContainer = document.querySelector('.chat-container');
                chatContainer.classList.remove('mobile-view-conversations');
                chatContainer.classList.add('mobile-view-chat');
            }

            setupMobileNavigation() {
                // Mobile back button functionality
                const mobileBackBtn = document.getElementById('mobileBackBtn');
                console.log('Mobile back button found:', !!mobileBackBtn);
                
                if (mobileBackBtn) {
                    console.log('Adding click listener to mobile back button');
                    mobileBackBtn.addEventListener('click', (e) => {
                        console.log('Mobile back button clicked!');
                        console.log('Is mobile view:', this.isMobileView);
                        e.preventDefault();
                        e.stopPropagation();
                        
                        if (this.isMobileView) {
                            console.log('Showing conversations...');
                            this.showConversations();
                        }
                    });
                } else {
                    console.log('ERROR: Mobile back button not found!');
                }

                // Handle window resize
                window.addEventListener('resize', () => {
                    const wasMobile = this.isMobileView;
                    this.checkMobileView();
                    
                    // If switching from mobile to desktop, ensure both sections are visible
                    if (wasMobile && !this.isMobileView) {
                        const chatContainer = document.querySelector('.chat-container');
                        chatContainer.classList.remove('mobile-view-conversations', 'mobile-view-chat');
                    }
                    // If switching from desktop to mobile, show conversations
                    else if (!wasMobile && this.isMobileView) {
                        this.showConversations();
                    }
                });

                // Virtual keyboard handling for mobile
                this.setupVirtualKeyboardHandling();
            }

            setupVirtualKeyboardHandling() {
                if (!this.isMobileView) return;

                const messageInput = document.getElementById('messageInput');
                const chatContainer = document.querySelector('.chat-container');
                const messagesContainer = document.querySelector('.messages-container');
                
                let initialViewportHeight = window.visualViewport ? window.visualViewport.height : window.innerHeight;

                const handleViewportChange = () => {
                    if (window.visualViewport) {
                        const currentHeight = window.visualViewport.height;
                        const heightDifference = initialViewportHeight - currentHeight;
                        
                        if (heightDifference > 150) { // Keyboard is likely visible
                            chatContainer.style.height = `${currentHeight - 100}px`;
                            // Auto scroll to bottom when keyboard appears
                            setTimeout(() => {
                                if (messagesContainer) {
                                    messagesContainer.scrollTop = messagesContainer.scrollHeight;
                                }
                            }, 100);
                        } else { // Keyboard is likely hidden
                            chatContainer.style.height = 'calc(100vh - 200px)';
                        }
                    }
                };

                // Listen for viewport changes (keyboard show/hide)
                if (window.visualViewport) {
                    window.visualViewport.addEventListener('resize', handleViewportChange);
                }

                // Fallback for older browsers
                window.addEventListener('resize', () => {
                    if (this.isMobileView) {
                        const newHeight = window.innerHeight;
                        const heightDifference = initialViewportHeight - newHeight;
                        
                        if (heightDifference > 150) {
                            chatContainer.style.height = `${newHeight - 100}px`;
                        } else {
                            chatContainer.style.height = 'calc(100vh - 200px)';
                        }
                    }
                });

                // Focus handling
                if (messageInput) {
                    messageInput.addEventListener('focus', () => {
                        setTimeout(() => {
                            if (messagesContainer) {
                                messagesContainer.scrollTop = messagesContainer.scrollHeight;
                            }
                        }, 300);
                    });
                }
            }

            bindEvents() {
                // Conversation switching
                console.log('Binding conversation item events...');
                const conversationItems = document.querySelectorAll('.conversation-item');
                console.log('Found conversation items:', conversationItems.length);
                
                conversationItems.forEach((item, index) => {
                    const userName = item.getAttribute('data-user');
                    console.log(`Binding event for item ${index}: ${userName}`);
                    
                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        console.log('Conversation item clicked:', userName);
                        this.switchConversation(userName);
                    });
                });

                // Message sending
                const sendBtn = document.getElementById('sendBtn');
                const messageInput = document.getElementById('messageInput');

                sendBtn.addEventListener('click', () => {
                    this.sendMessage();
                });

                messageInput.addEventListener('keypress', (e) => {
                    if (e.key === 'Enter') {
                        this.sendMessage();
                    }
                });

                // Search functionality
                const searchInput = document.querySelector('.search-input');
                searchInput.addEventListener('input', (e) => {
                    this.filterConversations(e.target.value);
                });

                // Auto-resize message input
                messageInput.addEventListener('input', () => {
                    this.updateSendButtonState();
                    
                    // Auto-scroll messages when typing on mobile
                    if (this.isMobileView) {
                        const messagesContainer = document.querySelector('.messages-container');
                        if (messagesContainer) {
                            messagesContainer.scrollTop = messagesContainer.scrollHeight;
                        }
                    }
                });

                // Image upload functionality
                const attachmentBtn = document.getElementById('attachmentBtn');
                const imageUpload = document.getElementById('imageUpload');

                attachmentBtn.addEventListener('click', () => {
                    imageUpload.click();
                });

                imageUpload.addEventListener('change', (e) => {
                    this.handleImageUpload(e);
                });

                // Image modal functionality
                const imageModal = document.getElementById('imageModal');
                const modalClose = document.getElementById('modalClose');

                modalClose.addEventListener('click', () => {
                    this.closeImageModal();
                });

                imageModal.addEventListener('click', (e) => {
                    if (e.target === imageModal) {
                        this.closeImageModal();
                    }
                });
            }

            switchConversation(userName) {
                console.log('switchConversation called with userName:', userName);
                
                // Always check mobile view status before switching
                this.checkMobileView();
                console.log('Switch conversation - Mobile view:', this.isMobileView, 'Screen width:', window.innerWidth);
                
                // Update active conversation
                document.querySelectorAll('.conversation-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                document.querySelector(`[data-user="${userName}"]`).classList.add('active');
                
                // Update current user
                this.currentUser = userName;
                
                // Update chat header
                this.updateChatHeader(userName);
                
                // Load conversation messages
                this.loadConversation(userName);
                
                // Remove unread badge
                const unreadBadge = document.querySelector(`[data-user="${userName}"] .unread-badge`);
                if (unreadBadge) {
                    unreadBadge.remove();
                }

                // On mobile, show chat area when conversation is selected
                if (this.isMobileView) {
                    console.log('Mobile detected - showing chat area');
                    this.showChat();
                } else {
                    console.log('Desktop detected - both panels should be visible');
                }
            }

            updateChatHeader(userName) {
                const chatUserName = document.querySelector('.chat-user-name');
                const chatUserStatus = document.querySelector('.chat-user-status');
                
                chatUserName.textContent = userName;
                
                // Simulate online status (Luis Pittman is online)
                if (userName === 'Luis Pittman') {
                    chatUserStatus.textContent = 'Online';
                    chatUserStatus.classList.add('online');
                } else {
                    chatUserStatus.textContent = 'Last seen recently';
                    chatUserStatus.classList.remove('online');
                }
            }

            loadConversation(userName) {
                const messagesContainer = document.querySelector('.messages-container');
                const messages = this.conversations[userName] || [];
                
                messagesContainer.innerHTML = '';
                
                messages.forEach(msg => {
                    const messageElement = this.createMessageElement(msg);
                    messagesContainer.appendChild(messageElement);
                });
                
                // Scroll to bottom
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }

            createMessageElement(messageData) {
                const messageDiv = document.createElement('div');
                messageDiv.className = `message ${messageData.type}`;
                
                let avatarSrc = 'assets/images/svg/avatar.svg';
                let messageHTML = '';
                
                if (messageData.type === 'received') {
                    messageHTML = `
                        <img src="${avatarSrc}" alt="${messageData.sender}" class="message-avatar">
                        <div class="message-content">
                            <div class="message-bubble">
                                ${messageData.message}
                                ${messageData.hasAttachment ? this.createAttachmentHTML() : ''}
                                ${messageData.images ? this.createImageHTML(messageData.images) : ''}
                            </div>
                            <span class="message-time">${messageData.time}</span>
                        </div>
                    `;
                } else {
                    messageHTML = `
                        <div class="message-content">
                            <div class="message-bubble">
                                ${messageData.message}
                                ${messageData.hasAttachment ? this.createAttachmentHTML() : ''}
                                ${messageData.images ? this.createImageHTML(messageData.images) : ''}
                            </div>
                            <span class="message-time">${messageData.time}</span>
                        </div>
                        <img src="${avatarSrc}" alt="You" class="message-avatar">
                    `;
                }
                
                messageDiv.innerHTML = messageHTML;
                
                // Add click event listeners for images
                if (messageData.images) {
                    const images = messageDiv.querySelectorAll('.message-image');
                    images.forEach(img => {
                        img.addEventListener('click', () => {
                            this.openImageModal(img.src);
                        });
                    });
                }
                
                return messageDiv;
            }

            createAttachmentHTML() {
                return `
                    <div class="message-attachments">
                        <div class="attachment-item">
                            <img src="assets/images//png/post-bg-img.png" alt="Product 1" class="attachment-image">
                        </div>
                        <div class="attachment-item">
                            <img src="assets/images/png/social-media-bg-img.png" alt="Product 2" class="attachment-image">
                        </div>
                    </div>
                `;
            }

            sendMessage() {
                const messageInput = document.getElementById('messageInput');
                const messageText = messageInput.value.trim();
                
                if (!messageText && this.selectedImages.length === 0) {
                    return;
                }
                
                // Create new message
                const newMessage = {
                    sender: 'You',
                    message: messageText,
                    time: this.getCurrentTime(),
                    type: 'sent'
                };

                // Add images if any
                if (this.selectedImages.length > 0) {
                    newMessage.images = [...this.selectedImages];
                }
                
                // Add to conversation
                if (!this.conversations[this.currentUser]) {
                    this.conversations[this.currentUser] = [];
                }
                this.conversations[this.currentUser].push(newMessage);
                
                // Create and add message element
                const messageElement = this.createMessageElement(newMessage);
                messageElement.classList.add('new');
                
                const messagesContainer = document.querySelector('.messages-container');
                messagesContainer.appendChild(messageElement);
                
                // Clear input and maintain focus
                messageInput.value = '';
                messageInput.focus();
                
                // Clear selected images
                this.clearSelectedImages();
                
                // Scroll to bottom
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
                
                // Update send button state
                this.updateSendButtonState();
                
                // Update conversation preview
                const previewText = messageText || (newMessage.images ? `📷 ${newMessage.images.length} image(s)` : '');
                this.updateConversationPreview(this.currentUser, previewText);
                
                // Simulate typing indicator and response (for demo)
                setTimeout(() => {
                    this.simulateTypingResponse();
                }, 1000);
            }

            simulateTypingResponse() {
                const responses = [
                    "Thank you for your message!",
                    "I'll get back to you shortly.",
                    "That's interesting, tell me more.",
                    "I understand your concern.",
                    "Let me check that for you."
                ];
                
                const randomResponse = responses[Math.floor(Math.random() * responses.length)];
                
                const responseMessage = {
                    sender: this.currentUser,
                    message: randomResponse,
                    time: this.getCurrentTime(),
                    type: 'received'
                };
                
                this.conversations[this.currentUser].push(responseMessage);
                
                const messageElement = this.createMessageElement(responseMessage);
                messageElement.classList.add('new');
                
                const messagesContainer = document.querySelector('.messages-container');
                messagesContainer.appendChild(messageElement);
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
                
                this.updateConversationPreview(this.currentUser, randomResponse);
            }

            updateConversationPreview(userName, lastMessage) {
                const conversationItem = document.querySelector(`[data-user="${userName}"]`);
                if (conversationItem) {
                    const preview = conversationItem.querySelector('.conversation-preview');
                    const time = conversationItem.querySelector('.conversation-time');
                    
                    preview.textContent = lastMessage.length > 30 ? lastMessage.substring(0, 30) + '...' : lastMessage;
                    time.textContent = this.getCurrentTime();
                }
            }

            getCurrentTime() {
                const now = new Date();
                return now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            }

            updateSendButtonState() {
                const messageInput = document.getElementById('messageInput');
                const sendBtn = document.getElementById('sendBtn');
                const attachmentBtn = document.getElementById('attachmentBtn');
                
                if (messageInput.value.trim() || this.selectedImages.length > 0) {
                    sendBtn.disabled = false;
                } else {
                    sendBtn.disabled = true;
                }

                // Update attachment button appearance
                if (this.selectedImages.length > 0) {
                    attachmentBtn.classList.add('has-images');
                } else {
                    attachmentBtn.classList.remove('has-images');
                }
            }

            filterConversations(searchTerm) {
                const conversationItems = document.querySelectorAll('.conversation-item');
                
                conversationItems.forEach(item => {
                    const userName = item.getAttribute('data-user').toLowerCase();
                    const preview = item.querySelector('.conversation-preview').textContent.toLowerCase();
                    
                    if (userName.includes(searchTerm.toLowerCase()) || preview.includes(searchTerm.toLowerCase())) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            // Image handling methods
            handleImageUpload(event) {
                const files = Array.from(event.target.files);
                
                files.forEach(file => {
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            this.selectedImages.push(e.target.result);
                            this.updateImagePreview();
                            this.updateSendButtonState();
                        };
                        reader.readAsDataURL(file);
                    }
                });
                
                // Clear the input so the same file can be selected again
                event.target.value = '';
            }

            updateImagePreview() {
                const previewContainer = document.getElementById('imagePreviewContainer');
                const previews = document.getElementById('imagePreviews');
                
                if (this.selectedImages.length > 0) {
                    previewContainer.classList.add('show');
                    previews.innerHTML = '';
                    
                    this.selectedImages.forEach((imageSrc, index) => {
                        const previewDiv = document.createElement('div');
                        previewDiv.className = 'image-preview';
                        previewDiv.innerHTML = `
                            <img src="${imageSrc}" alt="Preview ${index + 1}" class="preview-image">
                            <button class="remove-image" onclick="chatBox.removeImage(${index})">×</button>
                        `;
                        previews.appendChild(previewDiv);
                    });
                } else {
                    previewContainer.classList.remove('show');
                }
            }

            removeImage(index) {
                this.selectedImages.splice(index, 1);
                this.updateImagePreview();
                this.updateSendButtonState();
            }

            clearSelectedImages() {
                this.selectedImages = [];
                this.updateImagePreview();
            }

            createImageHTML(images) {
                if (!images || images.length === 0) return '';
                
                const imageClass = images.length === 1 ? 'single' : 'multiple';
                
                return `
                    <div class="message-images">
                        ${images.map(imageSrc => `
                            <img src="${imageSrc}" alt="Shared image" class="message-image ${imageClass}">
                        `).join('')}
                    </div>
                `;
            }

            openImageModal(imageSrc) {
                const modal = document.getElementById('imageModal');
                const modalImage = document.getElementById('modalImage');
                
                modalImage.src = imageSrc;
                modal.classList.add('show');
            }

            closeImageModal() {
                const modal = document.getElementById('imageModal');
                modal.classList.remove('show');
            }
        }

        // Initialize chat box when DOM is loaded
        let chatBox;
        document.addEventListener('DOMContentLoaded', () => {
            console.log('DOM loaded, initializing...');
            chatBox = new ChatBox();
            window.chatBox = chatBox; // Make it globally accessible
            
            // Additional debugging - add direct click handlers
            setTimeout(() => {
                console.log('Adding additional click handlers for debugging...');
                const items = document.querySelectorAll('.conversation-item');
                console.log('Found items for additional handlers:', items.length);
                
                items.forEach((item, index) => {
                    const userName = item.getAttribute('data-user');
                    console.log(`Adding additional handler for: ${userName}`);
                    
                    item.onclick = function(e) {
                        console.log('Direct onclick handler triggered for:', userName);
                        if (window.chatBox) {
                            window.chatBox.switchConversation(userName);
                        }
                    };
                });
            }, 500);
            
            // Initialize custom select dropdowns with delay
            setTimeout(() => {
                console.log('Initializing custom selects after delay...');
                initCustomSelects();
                
                // Test function - add click listener to first select
                const firstSelect = document.querySelector('.custom-select');
                if (firstSelect) {
                    console.log('Found first select, adding test listener');
                    firstSelect.addEventListener('click', function() {
                        console.log('First select clicked!');
                        this.classList.toggle('active');
                    });
                }
            }, 1000);
        });

        // Simple Custom Select Functionality
        function initCustomSelects() {
            console.log('Initializing custom selects...');
            const customSelects = document.querySelectorAll('.custom-select');
            console.log('Found custom selects:', customSelects.length);
            
            customSelects.forEach((select, index) => {
                const trigger = select.querySelector('.select-trigger');
                const options = select.querySelectorAll('.select-option');
                
                if (!trigger) {
                    console.log('No trigger found for select', index);
                    return;
                }
                
                // Simple toggle functionality
                trigger.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    console.log('Dropdown clicked:', index);
                    
                    // Close all other dropdowns
                    customSelects.forEach((otherSelect, otherIndex) => {
                        if (otherIndex !== index) {
                            otherSelect.classList.remove('active');
                        }
                    });
                    
                    // Toggle current dropdown
                    select.classList.toggle('active');
                    console.log('Dropdown is now:', select.classList.contains('active') ? 'OPEN' : 'CLOSED');
                });
                
                // Handle option clicks
                options.forEach((option, optIndex) => {
                    option.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        console.log('Option selected:', optIndex);
                        
                        // Update trigger content
                        updateTriggerContent(select, option);
                        
                        // Close dropdown
                        select.classList.remove('active');
                        
                        // Handle filter change
                        handleFilterChange(select, option.dataset.value);
                    });
                });
            });
            
            // Close all dropdowns when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.custom-select')) {
                    customSelects.forEach(select => {
                        select.classList.remove('active');
                    });
                }
            });
        }
        
        function updateTriggerContent(select, selectedOption) {
            const trigger = select.querySelector('.select-trigger');
            const filterLabel = trigger.querySelector('.filter-label');
            const priorityDot = trigger.querySelector('.priority-dot');
            
            if (select.classList.contains('priority-select')) {
                const optionDot = selectedOption.querySelector('.priority-dot');
                const optionText = selectedOption.textContent.trim();
                
                if (priorityDot && optionDot) {
                    priorityDot.className = optionDot.className;
                }
                filterLabel.textContent = optionText;
            } else {
                filterLabel.textContent = selectedOption.textContent.trim();
            }
        }
        
        function handleFilterChange(select, value) {
            if (select.classList.contains('priority-select')) {
                console.log('Priority filter changed to:', value);
                // Add your priority filter logic here
            } else if (select.classList.contains('status-select')) {
                console.log('Status filter changed to:', value);
                // Add your status filter logic here
            }
        }

        // Mobile responsive behavior is now handled in the ChatBox class


// Only Share With - checkbox count update
document.addEventListener('change', function(e) {
    if (e.target.classList.contains('share-checkbox')) {
        const checked = document.querySelectorAll('.share-checkbox:checked').length;
        const countEl = document.getElementById('shareCount');
        if (countEl) countEl.textContent = checked + ' Contact' + (checked !== 1 ? 's' : '') + ' included';
    }
});
