<?php
// Set default base path if not defined (for pages in root directory)
$basePath = $basePath ?? '';
?>
<!-- Elegant Footer -->
<style>
    /* Footer Base Styles */
    footer {
        background: #1a1a1a;
        color: #e0e0e0;
        margin-top: 60px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
    }
    [data-theme="light"] footer {
        background: #2a2a2a;
        color: #f0f0f0;
    }
    
    /* Footer Main Content */
    .footer-main {
        max-width: 1400px;
        margin: 0 auto;
        padding: 60px 20px 40px;
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1.5fr;
        gap: 40px;
    }
    @media (max-width: 992px) {
        .footer-main {
            grid-template-columns: 1fr 1fr;
            gap: 40px 30px;
        }
    }
    @media (max-width: 768px) {
        .footer-main {
            grid-template-columns: 1fr;
            gap: 35px;
            padding: 50px 20px 35px;
        }
    }
    
    /* Company Info Section */
    .footer-company {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .footer-logo {
        display: block;
        line-height: 0;
    }
    .footer-logo img {
        height: auto;
        max-height: 60px;
        width: auto;
        max-width: 220px;
        object-fit: contain;
        filter: brightness(0) invert(1);
        transition: opacity 0.3s ease;
    }
    @media (max-width: 768px) {
        .footer-logo img {
            max-height: 50px;
            max-width: 180px;
        }
    }
    @media (max-width: 480px) {
        .footer-logo img {
            max-height: 45px;
            max-width: 150px;
        }
    }
    .footer-company p {
        margin: 0;
        font-size: 14px;
        line-height: 1.7;
        color: #b0b0b0;
        max-width: 400px;
    }
    [data-theme="light"] .footer-company p {
        color: #d0d0d0;
    }
    
    /* Social Media Links */
    .footer-social {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 8px;
    }
    .footer-social a {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 14px;
        background: rgba(255,255,255,0.1);
        border-radius: 20px;
        color: #e0e0e0;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 13px;
    }
    .footer-social a i {
        font-size: 15px;
    }
    .footer-social a span {
        font-weight: 500;
    }
    [data-theme="light"] .footer-social a {
        background: rgba(255,255,255,0.15);
        color: #f0f0f0;
    }
    .footer-social a:hover {
        background: #0066cc;
        color: #fff;
        transform: translateY(-2px);
    }
    [data-theme="light"] .footer-social a:hover {
        background: #4da6ff;
    }
    .footer-social .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0,0,0,0);
        white-space: nowrap;
        border: 0;
    }
    
    /* Footer Sections */
    .footer-section h3 {
        margin: 0 0 20px;
        font-size: 18px;
        font-weight: 600;
        color: #fff;
        letter-spacing: 0.5px;
    }
    [data-theme="light"] .footer-section h3 {
        color: #fff;
    }
    .footer-section ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }
    .footer-section ul li {
        margin: 0;
    }
    .footer-section ul li a {
        color: #b0b0b0;
        text-decoration: none;
        font-size: 14px;
        transition: all 0.2s ease;
        display: inline-block;
    }
    [data-theme="light"] .footer-section ul li a {
        color: #d0d0d0;
    }
    .footer-section ul li a:hover {
        color: #4da6ff;
        padding-left: 5px;
    }
    [data-theme="light"] .footer-section ul li a:hover {
        color: #66b3ff;
    }
    
    /* Contact Info Section */
    .footer-contact {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }
    .footer-contact a {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        color: #b0b0b0;
        text-decoration: none;
        font-size: 14px;
        line-height: 1.6;
        transition: all 0.2s ease;
    }
    [data-theme="light"] .footer-contact a {
        color: #d0d0d0;
    }
    .footer-contact a:hover {
        color: #4da6ff;
    }
    [data-theme="light"] .footer-contact a:hover {
        color: #66b3ff;
    }
    .footer-contact i {
        font-size: 18px;
        margin-top: 2px;
        flex-shrink: 0;
        width: 20px;
        text-align: center;
    }
    .footer-contact span {
        flex: 1;
    }
    
    /* Newsletter Section */
    .footer-newsletter {
        background: rgba(0,0,0,0.3);
        padding: 50px 20px;
        border-top: 1px solid rgba(255,255,255,0.1);
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    [data-theme="light"] .footer-newsletter {
        background: rgba(0,0,0,0.2);
    }
    .footer-newsletter-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }
    .footer-newsletter h3 {
        margin: 0 0 10px;
        font-size: 24px;
        font-weight: 600;
        color: #fff;
    }
    [data-theme="light"] .footer-newsletter h3 {
        color: #fff;
    }
    .footer-newsletter p {
        margin: 0 0 25px;
        font-size: 15px;
        color: #b0b0b0;
    }
    [data-theme="light"] .footer-newsletter p {
        color: #d0d0d0;
    }
    .footer-newsletter form {
        display: flex;
        gap: 12px;
        max-width: 500px;
        margin: 0 auto;
    }
    @media (max-width: 640px) {
        .footer-newsletter form {
            flex-direction: column;
        }
    }
    .footer-newsletter input[type="email"] {
        flex: 1;
        padding: 14px 18px;
        font-size: 15px;
        border: 2px solid rgba(255,255,255,0.2);
        border-radius: 8px;
        background: rgba(255,255,255,0.1);
        color: #fff;
        outline: none;
        transition: all 0.3s ease;
    }
    .footer-newsletter input[type="email"]::placeholder {
        color: rgba(255,255,255,0.6);
    }
    .footer-newsletter input[type="email"]:focus {
        border-color: #4da6ff;
        background: rgba(255,255,255,0.15);
    }
    .footer-newsletter button {
        padding: 14px 32px;
        font-size: 15px;
        font-weight: 600;
        background: #0066cc;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
    }
    [data-theme="light"] .footer-newsletter button {
        background: #4da6ff;
    }
    .footer-newsletter button:hover:not(:disabled) {
        background: #0052a3;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,102,204,0.4);
    }
    [data-theme="light"] .footer-newsletter button:hover:not(:disabled) {
        background: #66b3ff;
        box-shadow: 0 4px 12px rgba(77,166,255,0.4);
    }
    .footer-newsletter button:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }
    #footerSubscribeMessage {
        margin-top: 15px;
        font-size: 14px;
        min-height: 20px;
    }
    #footerSubscribeMessage.hidden {
        display: none;
    }
    .footer-message-success {
        color: #4ade80;
    }
    .footer-message-error {
        color: #f87171;
    }
    
    /* Copyright Section */
    .footer-copyright {
        background: rgba(0,0,0,0.4);
        padding: 25px 20px;
        text-align: center;
    }
    [data-theme="light"] .footer-copyright {
        background: rgba(0,0,0,0.3);
    }
    .footer-copyright p {
        margin: 0;
        font-size: 13px;
        color: #999;
        line-height: 1.6;
    }
    [data-theme="light"] .footer-copyright p {
        color: #aaa;
    }
    @media (max-width: 640px) {
        .footer-copyright p {
            font-size: 12px;
        }
    }
</style>

<footer>
    <!-- Main Footer Content -->
    <div class="footer-main">
        <!-- Company Info -->
        <div class="footer-company">
            <a href="<?php echo $basePath; ?>index.php" class="footer-logo" aria-label="Home">
                <img src="<?php echo $basePath; ?>assets/images/FORBIX-SEMICON-logo-white.png" alt="FORBIX SEMICON® Technologies Pvt Ltd">
            </a>
            <p>Leading manufacturer of wireless electronic automation solutions, specializing in nurse call systems, panic alarms, queue management solutions, long range data signal transmitter & receivers and traffic controllers.</p>
            <div class="footer-social">
                <a href="https://www.facebook.com/forbixindia" target="_blank" rel="noopener" aria-label="Visit our Facebook page">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </a>
                <a href="https://www.instagram.com/forbixsemicon/" target="_blank" rel="nofollow noopener noreferrer" aria-label="Visit our Instagram profile" data-no-prefetch>
                    <i class="fab fa-instagram"></i>
                    <span>Instagram</span>
                </a>
                <a href="https://www.youtube.com/user/forbixsemicon/videos" target="_blank" rel="noopener" aria-label="Visit our YouTube channel">
                    <i class="fab fa-youtube"></i>
                    <span>YouTube</span>
                </a>
            </div>
        </div>
        
        <!-- Quick Links -->
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="<?php echo $basePath; ?>about.php">About Us</a></li>
                <li><a href="<?php echo $basePath; ?>clients.php">Clients</a></li>
                <li><a href="<?php echo $basePath; ?>contact.php">Contact</a></li>
            </ul>
        </div>
        
        <!-- Offerings -->
        <div class="footer-section">
            <h3>Offerings</h3>
            <ul>
                <li><a href="<?php echo $basePath; ?>products.php">Products</a></li>
                <li><a href="<?php echo $basePath; ?>careers.php">Careers</a></li>
                <li><a href="<?php echo $basePath; ?>faq.php">FAQ</a></li>
                <li><a href="<?php echo $basePath; ?>warrantyterms.php">Warranty Terms</a></li>
                <li><a href="<?php echo $basePath; ?>privacypolicy.php">Privacy Policy</a></li>
                <li><a href="<?php echo $basePath; ?>return-policy.php">Return Policy</a></li>
            </ul>
        </div>
        
        <!-- Contact Info -->
        <div class="footer-section">
            <h3>Contact Info</h3>
            <div class="footer-contact">
                <a href="https://wa.me/919742159846" target="_blank" rel="nofollow noopener noreferrer" data-no-prefetch>
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp: +91 9742159846</span>
                </a>
                <a href="<?php echo $basePath; ?>contact.php#find-us">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Building no. 118/4,<br>KNO 40/326/74/87 & 41/74/86/327<br>1st Cross, Bazaar Street<br>Uday Nagar (near Tin Factory),<br>Bangalore, Karnataka, India - 560016</span>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Newsletter Section -->
    <div class="footer-newsletter">
        <div class="footer-newsletter-content">
            <h3>Subscribe to Our Newsletter</h3>
            <p>Stay updated with our latest products and innovations</p>
            <form id="footerNewsletterForm">
                <input type="email" name="email" required placeholder="Enter your email address">
                <button type="submit" id="footerSubscribeBtn">Subscribe</button>
            </form>
            <div id="footerSubscribeMessage" class="hidden"></div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="footer-copyright">
        <div>
            <p>© 2025 FORBIX SEMICON Technologies Pvt Ltd. All Rights Reserved. | CIN: U31909KA2021PTC156093 | GSTIN: 29AAECF8700F1ZO</p>
        </div>
    </div>
</footer>

<!-- Prevent prefetching of external links -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Prevent prefetching of links with data-no-prefetch attribute
    const noPrefetchLinks = document.querySelectorAll('a[data-no-prefetch]');
    noPrefetchLinks.forEach(function(link) {
        // Ensure rel attributes are set correctly to prevent crawlers
        if (!link.getAttribute('rel') || !link.getAttribute('rel').includes('nofollow')) {
            const currentRel = link.getAttribute('rel') || '';
            const newRel = currentRel ? currentRel + ' nofollow noopener noreferrer' : 'nofollow noopener noreferrer';
            link.setAttribute('rel', newRel.trim());
        }
    });
});
</script>

<!-- Footer Newsletter Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('footerNewsletterForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = this.email.value;
            const button = document.getElementById('footerSubscribeBtn');
            const messageDiv = document.getElementById('footerSubscribeMessage');
            
            // Disable button and show loading state
            button.disabled = true;
            button.innerHTML = 'Subscribing...';
            messageDiv.classList.add('hidden');
            
            fetch('<?php echo $basePath; ?>subscribe-handler.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'email=' + encodeURIComponent(email)
            })
            .then(response => response.json())
            .then(data => {
                messageDiv.classList.remove('hidden');
                if (data.success) {
                    messageDiv.className = 'footer-message-success';
                    messageDiv.textContent = data.message;
                    this.reset();
                } else {
                    messageDiv.className = 'footer-message-error';
                    messageDiv.textContent = data.message;
                }
            })
            .catch(error => {
                messageDiv.classList.remove('hidden');
                messageDiv.className = 'footer-message-error';
                messageDiv.textContent = 'An error occurred. Please try again.';
            })
            .finally(() => {
                button.disabled = false;
                button.innerHTML = 'Subscribe';
            });
        });
    }
});
</script>

</body>
</html>