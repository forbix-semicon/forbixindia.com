<!-- Elegant Cart Modal -->
<div id="cart-modal" class="cart-modal-overlay hidden">
    <div class="cart-modal-backdrop" onclick="closeCartModal()"></div>
    <div class="cart-modal-container">
        <div class="cart-modal-content">
            <!-- Elegant Modal Header -->
            <div class="cart-modal-header">
                <div class="cart-header-content">
                    <div class="cart-icon-wrapper">
                        <span class="material-icons cart-header-icon">shopping_cart</span>
                    </div>
                    <div class="cart-header-text">
                        <h3 class="cart-modal-title">Your Shopping Cart</h3>
                        <p class="cart-modal-subtitle" id="cart-item-count">0 items selected</p>
                    </div>
                </div>
                <button class="cart-modal-close" onclick="closeCartModal()" aria-label="Close cart">
                    <span class="material-icons">close</span>
                </button>
            </div>

            <!-- Elegant Cart Items Section -->
            <div class="cart-modal-body">
                <div id="cart-items" class="cart-items-container">
                    <!-- Cart items will be dynamically inserted here -->
                </div>
            </div>

            <!-- Elegant Cart Footer with Summary -->
            <div class="cart-modal-footer">
                <div class="cart-summary-section">
                    <div class="cart-summary-row">
                        <span class="cart-summary-label">Subtotal</span>
                        <span id="cart-subtotal" class="cart-summary-value">₹0</span>
                    </div>
                    <div class="cart-summary-row cart-summary-shipping">
                        <span class="cart-summary-label">Shipping</span>
                        <span class="cart-summary-value cart-free-shipping">FREE</span>
                    </div>
                    <div class="cart-summary-divider"></div>
                    <div class="cart-summary-row cart-summary-total">
                        <span class="cart-summary-label">Total</span>
                        <span id="cart-total" class="cart-summary-value">₹0</span>
                    </div>
                </div>
                
                <div class="cart-action-buttons">
                    <button class="cart-btn-checkout" onclick="showCheckoutForm()">
                        <span class="material-icons">shopping_cart_checkout</span>
                        <span>Proceed to Checkout</span>
                        <div class="btn-shine"></div>
                    </button>
                    <button class="cart-btn-continue" onclick="closeCartModal()">
                        <span class="material-icons">arrow_back</span>
                        <span>Continue Shopping</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
