// Shared Cart Utility using sessionStorage
// This allows cart to persist across pages during the session
// Ensure CartUtils is defined globally

var CartUtils = CartUtils || {};
    // Get cart from sessionStorage
    getCart: function() {
        try {
            const cartData = sessionStorage.getItem('forbixCart');
            return cartData ? JSON.parse(cartData) : {};
        } catch (e) {
            console.error('Error reading cart from sessionStorage:', e);
            return {};
        }
    },

    // Save cart to sessionStorage
    saveCart: function(cart) {
        try {
            sessionStorage.setItem('forbixCart', JSON.stringify(cart));
            // Dispatch custom event for cart updates
            window.dispatchEvent(new CustomEvent('cartUpdated', { detail: cart }));
        } catch (e) {
            console.error('Error saving cart to sessionStorage:', e);
        }
    },

    // Add product to cart
    addToCart: function(productId, quantity = 1) {
        const cart = this.getCart();
        if (cart[productId]) {
            cart[productId] = parseInt(cart[productId]) + parseInt(quantity);
        } else {
            cart[productId] = parseInt(quantity);
        }
        this.saveCart(cart);
        return cart;
    },

    // Remove product from cart
    removeFromCart: function(productId) {
        const cart = this.getCart();
        delete cart[productId];
        this.saveCart(cart);
        return cart;
    },

    // Update product quantity in cart
    updateQuantity: function(productId, quantity) {
        const cart = this.getCart();
        if (quantity <= 0) {
            delete cart[productId];
        } else {
            cart[productId] = parseInt(quantity);
        }
        this.saveCart(cart);
        return cart;
    },

    // Get total items in cart
    getTotalItems: function() {
        const cart = this.getCart();
        return Object.values(cart).reduce((total, qty) => total + parseInt(qty), 0);
    },

    // Clear cart
    clearCart: function() {
        sessionStorage.removeItem('forbixCart');
        window.dispatchEvent(new CustomEvent('cartUpdated', { detail: {} }));
    }
};

// Product ID mapping from product pages to buy.php IDs
const ProductIdMap = {
    'nurse-call-10beds': 'nurse-call-10beds',
    'panic-alarm-1remote-1siren': 'panic-alarm-1remote-1siren',
    'peon-call-bell-6remotes': 'peon-call-bell-6remotes',
    'wireless-attendant-10remotes': 'wireless-attendant-10remotes',
    'token-display-6-queue': 'token-display-6-queue',
    'air-quality-monitor-voc': 'air-quality-monitor-voc',
    '6remote-code-red-2d-display': '6remote-code-red-2d-display',
    'remote-traffic-light-controller': 'remote-traffic-light-controller',
    'wireless-1channel-relay': 'wireless-1channel-relay'
};

// Function to add product from product page
function addProductToCart(productKey, productName, productPrice, productImage, productModel) {
    const productId = ProductIdMap[productKey] || productKey;
    const quantity = 1; // Default quantity
    
    // Add to cart
    CartUtils.addToCart(productId, quantity);
    
    // Show notification
    showCartNotification(productName, quantity);
    
    // Optionally redirect to buy page
    // Uncomment the line below if you want to redirect after adding
    // window.location.href = 'buy.php';
}

// Show cart notification
function showCartNotification(productName, quantity) {
    const notification = document.createElement('div');
    notification.className = 'cart-notification';
    notification.style.cssText = `
        position: fixed;
        bottom: 100px;
        right: 24px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 12px 40px rgba(15,23,42,0.15);
        padding: 16px 20px;
        z-index: 10001;
        transition: transform 0.3s ease;
        border-left: 4px solid #10b981;
        max-width: 320px;
        transform: translateX(120%);
    `;
    notification.innerHTML = `
        <div style="display: flex; align-items: center; gap: 12px;">
            <svg viewBox="0 0 24 24" fill="currentColor" style="width: 24px; height: 24px; color: #10b981; flex-shrink: 0;">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            <div>
                <h4 style="margin: 0; font-size: 14px; font-weight: 600; color: #1e293b;">Added to Cart!</h4>
                <p style="margin: 4px 0 0; font-size: 13px; color: #64748b;">${quantity}x ${productName}</p>
            </div>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    requestAnimationFrame(() => {
        notification.style.transform = 'translateX(0)';
    });
    
    setTimeout(() => {
        notification.style.transform = 'translateX(120%)';
        setTimeout(() => {
            if (notification.parentNode) {
                document.body.removeChild(notification);
            }
        }, 300);
    }, 3000);
}

