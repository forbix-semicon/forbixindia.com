<?php
// Start session early for CAPTCHA
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set base path for root directory
$basePath = $basePath ?? '';

$pageTitle = "Contact Us - FORBIX SEMICON® Technologies Pvt Ltd";
$pageDescription = "Get in touch with FORBIX SEMICON® for wireless electronic automation solutions. Contact our experts for consultation and support.";
$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/contact.php" />
    <meta property="og:url" content="https://www.forbixindia.com/contact.php" />
    <style>
        /* Font Family - Matching nurse-call.php */
        html, body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        
        /* CSS Variables */
        :root {
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-card: #ffffff;
            --text-primary: #1a202c;
            --text-secondary: #4a5568;
            --text-muted: #718096;
            --border-color: #e2e8f0;
            --accent-color: #0d9488;
            --accent-hover: #0f766e;
            --shadow-light: rgba(0, 0, 0, 0.05);
            --shadow-medium: rgba(0, 0, 0, 0.1);
            --shadow-heavy: rgba(0, 0, 0, 0.15);
        }
        [data-theme="dark"] {
            --bg-primary: #2a2a2a;
            --bg-secondary: #1e293b;
            --bg-card: #334155;
            --text-primary: #f1f5f9;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;
            --border-color: #475569;
            --accent-color: #14b8a6;
            --accent-hover: #0d9488;
            --shadow-light: rgba(0, 0, 0, 0.2);
            --shadow-medium: rgba(0, 0, 0, 0.3);
            --shadow-heavy: rgba(0, 0, 0, 0.4);
        }
        
        /* Dark Mode Background */
        [data-theme="dark"] body {
            background: #2a2a2a !important;
            color: #e0e0e0;
        }
        [data-theme="dark"] html {
            background: #2a2a2a;
        }
        [data-theme="dark"] main {
            background: transparent;
        }
        
        /* Contact Page Container */
        .contact-page {
            min-height: 100vh;
            padding: 0;
            margin: 0;
        }
        
        /* Hero Section */
        .contact-hero {
            background: linear-gradient(135deg, #0d9488 0%, #0f766e 50%, #0d9488 100%);
            background-size: 200% 200%;
            animation: gradientShift 8s ease infinite;
            color: white;
            padding: 5rem 1rem;
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
        }
        .contact-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.1) 1px, transparent 0);
            background-size: 40px 40px;
            opacity: 0.3;
        }
        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero-content h1 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            margin: 0 0 1.25rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .hero-content p {
            font-size: clamp(1rem, 2.5vw, 1.35rem);
            margin: 0;
            opacity: 0.95;
            line-height: 1.7;
            font-weight: 300;
        }
        
        /* Contact Main Section */
        .contact-main {
            padding: 0 1rem 4rem;
        }
        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }
        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }
        }
        
        /* Contact Cards */
        .contact-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 20px var(--shadow-light);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .contact-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--accent-color), var(--accent-hover));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        .contact-card:hover {
            box-shadow: 0 12px 40px var(--shadow-medium);
            transform: translateY(-4px);
            border-color: var(--accent-color);
        }
        .contact-card:hover::before {
            transform: scaleX(1);
        }
        .contact-card h2 {
            color: var(--accent-color);
            font-size: 1.75rem;
            margin: 0 0 2rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 1rem;
        }
        .contact-card h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-color), var(--accent-hover));
            border-radius: 2px;
        }
        
        /* Form Container */
        .contact-form-section {
            width: 100%;
        }
        .form-container {
            width: 100%;
            border-radius: 16px;
            overflow: hidden;
            background: var(--bg-secondary);
            padding: 1.5rem;
            border: 1px solid var(--border-color);
        }
        .form-container iframe {
            width: 100%;
            min-height: 1000px;
            border: none;
            border-radius: 12px;
            background: white;
        }
        @media (max-width: 768px) {
            .form-container {
                padding: 1rem;
            }
            .form-container iframe {
                min-height: 800px;
            }
        }
        
        /* Contact Info Section */
        .contact-info-section {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        
        /* Contact Methods */
        .contact-methods {
            display: flex;
            flex-direction: column;
            gap: 1.75rem;
        }
        .contact-method {
            display: flex;
            gap: 1.5rem;
            align-items: flex-start;
            padding: 1.5rem;
            background: var(--bg-secondary);
            border-radius: 16px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            position: relative;
        }
        .contact-method::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--accent-color);
            border-radius: 0 4px 4px 0;
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }
        .contact-method:hover {
            background: var(--bg-primary);
            transform: translateX(8px);
            border-color: var(--border-color);
            box-shadow: 0 4px 15px var(--shadow-light);
        }
        .contact-method:hover::before {
            transform: scaleY(1);
        }
        .contact-icon {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
            color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        .contact-method:hover .contact-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        }
        .phone-icon {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
        }
        .whatsapp-icon {
            background: linear-gradient(135deg, #25d366, #128c7e);
        }
        .email-icon {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        }
        .location-icon {
            background: linear-gradient(135deg, #ef4444, #dc2626);
        }
        .contact-details {
            flex: 1;
        }
        .contact-details h3 {
            margin: 0 0 0.75rem;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-primary);
            letter-spacing: -0.3px;
        }
        .contact-details p {
            margin: 0 0 0.5rem;
            font-size: 1.05rem;
            color: var(--text-secondary);
        }
        .contact-details p a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }
        .contact-details p a:hover {
            color: var(--accent-hover);
            text-decoration: underline;
            transform: translateX(3px);
        }
        .contact-details span {
            font-size: 0.9rem;
            color: var(--text-muted);
            font-weight: 500;
        }
        .email-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        .email-list p {
            margin: 0;
        }
        .email-list a {
            color: var(--accent-color);
            text-decoration: none;
            word-break: break-word;
            transition: all 0.3s ease;
            font-weight: 500;
            display: inline-block;
        }
        .email-list a:hover {
            color: var(--accent-hover);
            text-decoration: underline;
            transform: translateX(3px);
        }
        .address {
            color: var(--text-secondary);
            line-height: 1.8;
            font-size: 0.95rem;
        }
        .address strong {
            color: var(--text-primary);
            font-weight: 700;
            font-size: 1.05rem;
        }
        
        /* Business Hours */
        .business-hours {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        .hour-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.25rem 1.5rem;
            background: var(--bg-secondary);
            border-radius: 12px;
            border-left: 5px solid var(--accent-color);
            transition: all 0.3s ease;
        }
        .hour-row:hover {
            background: var(--bg-primary);
            transform: translateX(5px);
            box-shadow: 0 4px 15px var(--shadow-light);
        }
        .hour-row .day {
            font-weight: 700;
            color: var(--text-primary);
            font-size: 1.05rem;
        }
        .hour-row .time {
            color: var(--text-secondary);
            font-weight: 600;
            font-size: 1rem;
        }
        .hour-row .time.closed {
            color: var(--text-muted);
            font-style: italic;
        }
        
        /* Company Details */
        .company-details {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.5rem;
            background: var(--bg-secondary);
            border-radius: 12px;
            border-left: 4px solid var(--accent-color);
            transition: all 0.3s ease;
        }
        .detail-row:hover {
            background: var(--bg-primary);
            transform: translateX(5px);
            box-shadow: 0 4px 15px var(--shadow-light);
        }
        .detail-row .label {
            font-weight: 700;
            color: var(--text-primary);
            min-width: 140px;
            font-size: 0.95rem;
        }
        .detail-row .value {
            color: var(--text-secondary);
            text-align: right;
            word-break: break-word;
            font-weight: 500;
            font-size: 0.95rem;
        }
        @media (max-width: 480px) {
            .detail-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }
            .detail-row .value {
                text-align: left;
            }
        }
        
        /* Registered Office */
        .registered-office {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        .company-name {
            font-weight: 700;
            color: var(--text-primary);
            font-size: 1.15rem;
            margin: 0 0 0.75rem;
        }
        
        /* Map Section */
        .map-section {
            padding: 4rem 1rem;
            background: linear-gradient(to bottom, var(--bg-secondary), var(--bg-primary));
        }
        .map-section .container {
            max-width: 1400px;
            margin: 0 auto;
        }
        .map-intro {
            text-align: center;
            margin-bottom: 3rem;
        }
        .map-intro h2 {
            font-size: clamp(2rem, 4.5vw, 3rem);
            color: var(--text-primary);
            margin: 0 0 1rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .map-intro p {
            font-size: 1.15rem;
            color: var(--text-secondary);
            margin: 0;
            font-weight: 400;
        }
        .map-content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            align-items: start;
        }
        @media (max-width: 992px) {
            .map-content-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
        .map-container {
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 12px 40px var(--shadow-medium);
            border: 1px solid var(--border-color);
        }
        .map-container iframe {
            width: 100%;
            height: 450px;
            border: none;
            display: block;
        }
        @media (max-width: 768px) {
            .map-container iframe {
                height: 350px;
            }
        }
        
        /* Location Details */
        .location-details {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        .location-info h3 {
            color: var(--accent-color);
            font-size: 1.5rem;
            margin: 0 0 1.5rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 0.75rem;
        }
        .location-info h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-color), var(--accent-hover));
            border-radius: 2px;
        }
        .location-info .address {
            color: var(--text-secondary);
            line-height: 1.9;
        }
        .location-info .address p {
            margin: 0.75rem 0;
        }
        
        /* Transport Info */
        .transport-info {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        .transport-item {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            padding: 1.25rem 1.5rem;
            background: var(--bg-card);
            border-radius: 14px;
            border-left: 5px solid var(--accent-color);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
        }
        .transport-item:hover {
            transform: translateX(8px);
            box-shadow: 0 6px 20px var(--shadow-light);
            border-color: var(--border-color);
        }
        .transport-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: white;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        .transport-item:hover .transport-icon {
            transform: scale(1.1) rotate(-5deg);
        }
        .transport-icon.bus {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
        }
        .transport-icon.plane {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        }
        .transport-icon.train {
            background: linear-gradient(135deg, #ef4444, #dc2626);
        }
        .transport-item span {
            color: var(--text-secondary);
            font-weight: 600;
            font-size: 1rem;
        }
    </style>
';
include __DIR__ . '/includes/header.php';
?>

<main class="contact-page">
    <!-- Page Header -->
    <section class="contact-hero">
        <div class="hero-content">
            <h1>Contact Us | FORBIX SEMICON®</h1>
            <p>Get in touch with our experts for consultation, support, or<br>custom wireless automation solutions.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-main">
        <div class="contact-container">
            <div class="contact-grid">
                <!-- Contact Form Container -->
                <div class="contact-form-section">
                    <div class="contact-card">
                        <h2>Contact Form</h2>
                        <div class="form-container">
                            <?php include __DIR__ . '/contact-form-html.php'; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Company Information Sidebar -->
                <div class="contact-info-section">
                    <!-- Contact Info -->
                    <div class="contact-card">
                        <h2>Get in Touch</h2>
                        
                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="contact-icon phone-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>Phone</h3>
                                    <p>
                                        <a href="tel:+919742159846">
                                            +91 9742159846
                                            <i class="fas fa-phone-alt"></i>
                                        </a>
                                    </p>
                                    <span>Mon - Fri, 9AM - 6PM IST</span>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="contact-icon whatsapp-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>WhatsApp</h3>
                                    <p>
                                        <a href="https://wa.me/919742370190" target="_blank" rel="nofollow noopener noreferrer" data-no-prefetch>
                                            +91 9742370190
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </p>
                                    <span>Quick support and inquiries</span>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="contact-icon email-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>Email</h3>
                                    <div class="email-list">
                                        <p><a href="mailto:forbix.semicon.sales4@gmail.com">forbix.semicon.sales4@gmail.com</a></p>
                                        <p><a href="mailto:forbix.semicon.sales5@gmail.com">forbix.semicon.sales5@gmail.com</a></p>
                                        <p><a href="mailto:sales@forbixindia.com">sales@forbixindia.com</a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="contact-icon location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>Works Office / Factory</h3>
                                    <div class="address">
                                        <strong>FORBIX SEMICON® Technologies Pvt Ltd</strong><br>
                                        Building no. 118/4,<br>
                                        KNO 40/326/74/87 & 41/74/86/327<br>
                                        1st Cross, Bazaar Street<br>
                                        Uday Nagar (near Tin Factory),<br>Bangalore, Karnataka, India - 560016
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Business Hours -->
                    <div class="contact-card">
                        <h2>Business Hours</h2>
                        
                        <div class="business-hours">
                            <div class="hour-row">
                                <span class="day">Mon - Fri</span>
                                <span class="time">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="hour-row">
                                <span class="day">Saturday & Sunday</span>
                                <span class="time closed">Closed</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Company Details -->
                    <div class="contact-card">
                        <h2>Company Details</h2>
                        
                        <div class="company-details">
                            <div class="detail-row">
                                <span class="label">CIN:</span>
                                <span class="value">U31909KA2021PTC156093</span>
                            </div>
                            <div class="detail-row">
                                <span class="label">PAN:</span>
                                <span class="value">AAECF8700F</span>
                            </div>
                            <div class="detail-row">
                                <span class="label">HSN:</span>
                                <span class="value">8542 9000</span>
                            </div>
                            <div class="detail-row">
                                <span class="label">GSTIN:</span>
                                <span class="value">29AAECF8700F1ZO</span>
                            </div>
                            <div class="detail-row">
                                <span class="label">Trade Mark No.:</span>
                                <span class="value">4216274, Class 9</span>
                            </div>
                            <div class="detail-row">
                                <span class="label">CE Certificate:</span>
                                <span class="value">CE-1244</span>
                            </div>
                        </div>
                    </div>

                    <!-- Registered Office -->
                    <div class="contact-card">
                        <h2>Registered Office</h2>
                        <div class="registered-office">
                            <p class="company-name">FORBIX SEMICON® Technologies Private Limited</p>
                            <div class="address">
                                Plot No. 77, JBR Tech Park, 6th Road,<br>
                                Whitefield, Bangalore<br>
                                India, Pin – 560066
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-intro">
                <h2>Find Us</h2>
                <p>Visit our office in Bangalore for product demonstrations and consultations</p>
            </div>
            
            <div class="map-content-grid">
                <div class="map-container">
                    <iframe 
                        src="https://maps.google.com/maps?q=12.997071,77.671651+(FORBIX+SEMICON®+Technologies+Pvt+Ltd)&z=17&ie=UTF8&iwloc=&output=embed"
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <!-- Location Details -->
                <div class="location-details">
                    <div class="location-info">
                        <h3>Our Location</h3>
                        <div class="address">
                            <p class="company-name">FORBIX SEMICON® Technologies Pvt Ltd</p>
                            <p>Building no. 118/4,</p>
                            <p>KNO 40/326/74/87 & 41/74/86/327</p>
                            <p>1st Cross, Bazaar Street</p>
                            <p>Uday Nagar (near Tin Factory),<br>Bangalore, Karnataka, India - 560016</p>
                        </div>
                    </div>
                    
                    <div class="location-info">
                        <h3>Getting Here</h3>
                        <div class="transport-info">
                            <div class="transport-item">
                                <i class="fas fa-bus transport-icon bus"></i>
                                <span>Accessible by public transport</span>
                            </div>
                            <div class="transport-item">
                                <i class="fas fa-plane transport-icon plane"></i>
                                <span>25 km from Bangalore Airport</span>
                            </div>
                            <div class="transport-item">
                                <i class="fas fa-train transport-icon train"></i>
                                <span>15 km from Bangalore City Railway Station</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
