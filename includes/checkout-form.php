<!-- Checkout Form Modal -->
<div id="checkout-modal" class="hidden">
    <div class="checkout-modal-container">
        <!-- Modal Header -->
        <div class="checkout-modal-header">
            <div class="checkout-header-content">
                <div class="checkout-icon-wrapper">
                    <span class="material-icons checkout-header-icon">payment</span>
                </div>
                <div class="checkout-header-text">
                    <h3>Secure Checkout</h3>
                </div>
            </div>
            <button onclick="closeCheckoutModal()" class="checkout-modal-close">
                <span class="material-icons">close</span>
            </button>
        </div>

        <!-- Checkout Form Container -->
        <div class="checkout-form-container">
            <!-- Checkout Form -->
            <form id="checkout-form">
                <div class="checkout-form-grid">
                    <!-- Personal Information -->
                    <div class="checkout-section">
                        <h4 class="checkout-section-title">
                            <span class="material-icons">person</span>
                            Personal Information
                        </h4>
                        <div class="checkout-form-group">
                            <label class="checkout-label required">Full Name</label>
                            <div class="checkout-input-wrapper">
                                <input type="text" name="name" required class="checkout-input" placeholder="Enter your full name">
                                <span class="material-icons">person</span>
                            </div>
                        </div>
                        <div class="checkout-form-group">
                            <label class="checkout-label required">Email Address</label>
                            <div class="checkout-input-wrapper">
                                <input type="email" name="email" required class="checkout-input" placeholder="your.email@example.com">
                                <span class="material-icons">email</span>
                            </div>
                        </div>
                        <div class="checkout-form-group">
                            <label class="checkout-label required">Phone Number</label>
                            <div class="checkout-input-wrapper">
                                <input type="tel" name="phone" required class="checkout-input" placeholder="+91 9876543210">
                                <span class="material-icons">phone</span>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Information -->
                    <div class="checkout-section">
                        <h4 class="checkout-section-title">
                            <span class="material-icons">local_shipping</span>
                            Shipping Address
                        </h4>
                        <div class="checkout-form-group">
                            <label class="checkout-label required">Street Address</label>
                            <div class="checkout-input-wrapper">
                                <input type="text" name="address" required class="checkout-input" placeholder="House no., Street, Area">
                                <span class="material-icons">home</span>
                            </div>
                        </div>
                        <div class="checkout-form-row">
                            <div class="checkout-form-group">
                                <label class="checkout-label required">City</label>
                                <input type="text" name="city" required class="checkout-input" placeholder="City">
                            </div>
                            <div class="checkout-form-group">
                                <label class="checkout-label required">State</label>
                                <input type="text" name="state" required class="checkout-input" placeholder="State">
                            </div>
                        </div>
                        <div class="checkout-form-row">
                            <div class="checkout-form-group">
                                <label class="checkout-label required">Country</label>
                                <select name="country" required class="checkout-select">
                                    <option value="">Select Country</option>
                                    <option value="IN" selected>India</option>
                                    <option value="OTHER">Other Country</option>
                                </select>
                            </div>
                            <div class="checkout-form-group">
                                <label class="checkout-label required">PIN Code</label>
                                <input type="text" name="pincode" required class="checkout-input" placeholder="123456">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="checkout-order-summary">
                    <h4 class="checkout-order-title">
                        <span class="material-icons">receipt_long</span>
                        Order Summary
                    </h4>
                    <div class="checkout-items-list">
                        <div id="checkout-items">
                            <!-- Order items will be dynamically inserted here -->
                        </div>
                    </div>
                    <div class="checkout-summary-totals">
                        <div class="checkout-summary-row">
                            <span class="checkout-summary-label">Subtotal</span>
                            <span id="checkout-subtotal" class="checkout-summary-value">₹0</span>
                        </div>
                        <div class="checkout-summary-row">
                            <span class="checkout-summary-label">Shipping</span>
                            <span id="checkout-shipping" class="checkout-free-shipping">Free</span>
                        </div>
                        <div class="checkout-summary-divider"></div>
                        <div class="checkout-summary-row checkout-summary-total">
                            <span class="checkout-summary-label">Total Amount</span>
                            <span id="checkout-total" class="checkout-summary-value">₹0</span>
                        </div>
                    </div>

                    <!-- Security Info -->
                    <div class="checkout-security-info">
                        <span class="material-icons">security</span>
                        <span class="checkout-security-text">Your payment information is encrypted and secure</span>
                    </div>
                </div>

                <!-- Payment Buttons -->
                <div class="checkout-payment-buttons">
                    <button type="submit" id="razorpay-button" onclick="gtag_report_conversion();" class="checkout-payment-btn checkout-btn-razorpay">
                        <span class="material-icons">payment</span>
                        <span>Pay with Razorpay</span>
                    </button>
                    <button type="submit" id="paypal-button" onclick="gtag_report_conversion();" class="checkout-payment-btn checkout-btn-paypal">
                        <span class="material-icons">account_balance_wallet</span>
                        <span>Pay with PayPal</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
