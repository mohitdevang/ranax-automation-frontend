// Junction Social Channel Tabs
document.addEventListener('DOMContentLoaded', function() {
    console.log('Junction tabs script loaded');
    
    const tabButtons = document.querySelectorAll('.junction-chennel-card[data-tab]');
    console.log('Found tab buttons:', tabButtons.length);
    
    // Function to bind conversation item clicks for a specific tab
    function bindConversationClicks(tabId) {
        const tabContent = document.getElementById(tabId + '-content');
        if (!tabContent) return;
        
        const conversationItems = tabContent.querySelectorAll('.conversation-item');
        console.log(`Binding ${conversationItems.length} conversation items for ${tabId}`);
        
        conversationItems.forEach((item) => {
            const userName = item.getAttribute('data-user');
            
            // Remove any existing click handlers
            const newItem = item.cloneNode(true);
            item.parentNode.replaceChild(newItem, item);
            
            // Add new click handler
            newItem.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                console.log('Conversation clicked:', userName);
                
                // Remove active from all items in this tab
                conversationItems.forEach(ci => ci.classList.remove('active'));
                
                // Add active to clicked item
                this.classList.add('active');
                
                // Update chat header
                const chatHeader = tabContent.querySelector('.chat-user-name');
                if (chatHeader) {
                    chatHeader.textContent = userName;
                }
                
                // You can add more logic here to load messages, etc.
            });
        });
    }
    
    // Bind clicks for initially active tab (whatsapp)
    bindConversationClicks('whatsapp');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            console.log('Tab clicked:', targetTab);
            
            // Remove active class from all tab buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Hide all tab content
            const allTabContent = document.querySelectorAll('.tab-content-item');
            console.log('Found tab content items:', allTabContent.length);
            allTabContent.forEach(content => content.classList.remove('active'));
            
            // Show target tab content
            const targetContent = document.getElementById(targetTab + '-content');
            console.log('Target content element:', targetContent);
            if (targetContent) {
                targetContent.classList.add('active');
                console.log('Activated content for:', targetTab);
                
                // Bind conversation clicks for the newly active tab
                bindConversationClicks(targetTab);
            } else {
                console.error('Content not found for:', targetTab + '-content');
            }
        });
    });
});
