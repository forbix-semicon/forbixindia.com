<?php
$pageTitle = "Wireless Automation Products | FORBIX SEMICON®";
$pageDescription = "FORBIX SEMICON® manufactures wireless nurse call system, panic alarms, token display, peon attendant calling, traffic light controllers, air monitors";
$pageKeywords = "wireless nurse call system, panic alarm, peon call bell, token display, long range wireless, traffic light controller, wireless transceiver, motor control, air quality monitor";

// Breadcrumb Schema
$breadcrumbSchema = array(
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => array(
        array(
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => "https://www.forbixindia.com"
        ),
        array(
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Products",
            "item" => "https://www.forbixindia.com/products.php"
        )
    )
);

$additionalHeadTags = '
        <link rel="canonical" href="https://www.forbixindia.com/products.php" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="' . htmlspecialchars($pageTitle) . '" />
        <meta property="og:description" content="' . htmlspecialchars($pageDescription) . '" />
        <meta property="og:url" content="https://www.forbixindia.com/products.php" />
        <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system.jpg" />
        <meta property="og:site_name" content="FORBIX SEMICON®" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="' . htmlspecialchars($pageTitle) . '" />
        <meta name="twitter:description" content="' . htmlspecialchars($pageDescription) . '" />
        <meta name="twitter:image" content="https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system.jpg" />
        <script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
        <style>
        :root{--bg:#fbfdff;--card:#ffffff;--muted:#64748b;--accent:#0ea5a4;--accent-600:#089e99;--accent-700:#057a77;--radius:12px}
        html,body{height:100%;margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;-webkit-font-smoothing:antialiased;background:var(--bg);color:#07203a}
        a{color:var(--accent);text-decoration:none}
        .page-container{max-width:1200px;margin:22px auto;padding:18px}
        .hero-section{background:#0D8F84;border-radius:var(--radius);padding:28px;display:flex;flex-direction:column;gap:18px;color:#ffffff;text-align:center;align-items:center}
        .hero-content{text-align:center}
        .hero-title{font-size:clamp(20px,3.6vw,34px);margin:0;color:#ffffff}
        .hero-subtitle{margin:0;color:rgba(255,255,255,0.92);font-weight:600}
        .hero-description{margin:0;color:rgba(255,255,255,0.95);line-height:1.5}
        .hero-links{display:flex;flex-wrap:wrap;gap:10px;margin-top:8px;justify-content:center}
        .hero-link{display:inline-flex;align-items:center;gap:8px;padding:8px 12px;border-radius:999px;background:rgba(255,255,255,0.12);font-weight:600;color:#ffffff;border:1px solid rgba(255,255,255,0.12);transition:background 0.2s}
        .hero-link:hover{background:rgba(255,255,255,0.22)}
        .hero-link .icon{background:rgba(255,255,255,0.12);color:#ffffff}
        .hero-stats{display:flex;flex-wrap:wrap;gap:20px;margin-top:16px;justify-content:center}
        .stat{text-align:center;padding:0 10px}
        .stat-value{font-size:1.6rem;font-weight:700;color:#ffffff}
        .stat-label{font-size:0.75rem;color:rgba(255,255,255,0.8);text-transform:uppercase;letter-spacing:0.05em}
        .separator-line{height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.3),transparent);margin:12px 0;border-radius:2px;width:100%}
        .section-header{text-align:center;margin:36px 0 18px;padding-top:12px}
        .section-title{font-size:20px;margin:6px 0 12px}
        .section-subtitle{color:var(--muted);margin:0;font-size:14px}
        .products-grid{display:grid;grid-template-columns:repeat(1,1fr);gap:18px;margin-top:20px}
        .product-card{display:flex;flex-direction:column;background:var(--card);border-radius:12px;overflow:hidden;box-shadow:0 6px 18px rgba(16,24,40,0.06);transition:transform 0.3s ease,box-shadow 0.3s ease}
        .product-card:hover{transform:translateY(-4px);box-shadow:0 12px 28px rgba(16,24,40,0.12)}
        .product-image-container{background:linear-gradient(180deg,rgba(2,6,23,0.03),transparent);padding:14px;display:flex;justify-content:center;align-items:center}
        .product-image-container img{max-width:100%;height:auto;border-radius:8px;display:block;aspect-ratio:4/3;object-fit:cover}
        .product-info{padding:14px;flex:1;display:flex;flex-direction:column}
        .product-title{margin:0;font-size:16px;line-height:1.4}
        .product-model{margin:6px 0;color:var(--muted);font-size:12px}
        .product-description{margin:8px 0;color:#324149;flex:1;font-size:13px;line-height:1.5}
        .btn{display:inline-flex;align-items:center;gap:8px;padding:8px 12px;border-radius:8px;border:none;cursor:pointer;background:var(--accent);color:#fff;font-weight:700;font-size:13px;transition:background 0.2s}
        .btn:hover{background:var(--accent-600)}
        .btn.btn-secondary{background:#fff;border:1px solid #dbeafe;color:#0f172a}
        .btn:focus{outline:3px solid rgba(14,165,164,0.18)}
        .features-section{margin-top:22px}
        .features-grid{display:grid;grid-template-columns:repeat(1,1fr);gap:12px}
        .feature-card{background:var(--card);padding:12px;border-radius:10px;display:flex;gap:12px;align-items:flex-start}
        .feature-card h3,.feature-card h4{margin:0;font-size:14px}
        .feature-card p{margin:6px 0 0;color:var(--muted);font-size:13px}
        .cta-section{margin:22px 0;padding:18px;border-radius:12px;background:linear-gradient(90deg,rgba(14,165,164,0.06),transparent)}
        .cta-buttons{display:flex;gap:12px;margin-top:12px;flex-wrap:wrap}
        .icon{display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:6px;background:rgba(2,6,23,0.03);font-size:16px}
        @media(min-width:580px){
            .products-grid{grid-template-columns:repeat(2,1fr)}
            .features-grid{grid-template-columns:repeat(2,1fr)}
        }
        @media(min-width:900px){
            .products-grid{grid-template-columns:repeat(3,1fr)}
            .features-grid{grid-template-columns:repeat(3,1fr)}
        }
        @media(min-width:1100px){
            .products-grid{grid-template-columns:repeat(4,1fr)}
            .features-grid{grid-template-columns:repeat(4,1fr)}
            .page-container{padding:28px}
        }
        /* Dark theme */
        [data-theme="dark"]{
            --bg:#111827;
            --card:#1f2937;
            --muted:#94a3b8;
            --accent:#7dd3fc;
            --accent-600:#38bdf8;
        }
        [data-theme="dark"] html,[data-theme="dark"] body{background:var(--bg)!important;color:#e6eef6!important}
        [data-theme="dark"] .page-container{background:transparent}
        [data-theme="dark"] .product-card,[data-theme="dark"] .feature-card,[data-theme="dark"] .cta-section{background:var(--card);color:#e6eef6;box-shadow:0 4px 12px rgba(0,0,0,0.3)}
        [data-theme="dark"] .product-title,[data-theme="dark"] .section-title,[data-theme="dark"] h1,[data-theme="dark"] h2,[data-theme="dark"] h3,[data-theme="dark"] h4{color:#e6eef6}
        [data-theme="dark"] .product-description,[data-theme="dark"] .product-model,[data-theme="dark"] .feature-card p{color:var(--muted)}
        [data-theme="dark"] a{color:var(--accent)}
        [data-theme="dark"] .hero-link{background:rgba(255,255,255,0.06);border-color:rgba(255,255,255,0.08);color:#ffffff}
        [data-theme="dark"] .icon{background:rgba(255,255,255,0.04);color:#e6eef6}
        [data-theme="dark"] .btn{background:var(--accent);color:#0f172a}
        [data-theme="dark"] .btn:hover{background:var(--accent-600)}
        [data-theme="dark"] .btn.btn-secondary{background:transparent!important;border-color:#7dd3fc!important;color:#7dd3fc!important}
        [data-theme="dark"] .product-image-container{background:linear-gradient(180deg,rgba(0,0,0,0.2),transparent)}
        </style>
';

$skipCommonCss = true;
include __DIR__ . '/includes/header.php';
?>

<div class="page-container">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Wireless Automation Products</h1>
            <p class="hero-subtitle">Designed & Manufactured by FORBIX SEMICON®</p>
            <p class="hero-description">
                India's leading indigenous manufacturer of wireless electronic automation solutions for healthcare, industrial, security, and commercial applications.
            </p>

            <div class="hero-stats">
                <div class="stat"><div class="stat-value">50,000+</div><div class="stat-label">Customers</div></div>
                <div class="stat"><div class="stat-value">Made in India</div><div class="stat-label">Quality you can trust</div></div>
                <div class="stat"><div class="stat-value">100%</div><div class="stat-label">Wireless</div></div>
                <div class="stat"><div class="stat-value">15+</div><div class="stat-label">Years</div></div>
            </div>

            <div class="separator-line"></div>

            <div class="hero-links">
                <a href="https://www.youtube.com/user/forbixsemicon/videos" target="_blank" class="hero-link">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                    Demo Videos
                </a>
                <a href="docs/Brochure-2024-FORBIX-SEMICON.pdf" target="_blank" class="hero-link">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6a2 2 0 0 0-2 2v16h12a2 2 0 0 0 2-2V8l-6-6zM13 9V3.5L18.5 9H13z"/></svg>
                    Product Catalog
                </a>
                <a href="contact.php" class="hero-link">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <!-- Product Categories Section -->
    <div class="section-header">
        <h2 class="section-title">Product Categories</h2>
        <p class="section-subtitle">Explore our comprehensive range of wireless automation solutions</p>
    </div>

    <section class="products-grid">
        <!-- Nurse Call System -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system.jpg" alt="Wireless Nurse Call System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Wireless Nurse Call System</h3>
                <p class="product-model">Healthcare</p>
                <p class="product-description">Advanced wireless nurse call system for hospitals. Patient call buttons, LCD monitors, pull cords.</p>
                <a href="nurse-call.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Panic Alarm -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-products.jpg" alt="Wireless Panic Alarm System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Wireless Panic Alarm</h3>
                <p class="product-model">Security</p>
                <p class="product-description">Emergency alerts for banks, homes, and offices. One-touch panic buttons with sirens.</p>
                <a href="panic-alarm.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Peon Call Bell -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/peon-call-bell/forbix-semicon-wireless-peon-call-bell-system.jpg" alt="Wireless Attendant Call System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Wireless Attendant Call</h3>
                <p class="product-model">Office</p>
                <p class="product-description">Multi-zone wireless peon call bell for offices, restaurants, and hotels.</p>
                <a href="peon-call.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Token Display -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/token-display/forbix-semicon-queue-management-token-display-wireless.jpg" alt="Token Display Queue System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Token Display System</h3>
                <p class="product-model">Queue Management</p>
                <p class="product-description">Wireless token display and queue management for banks, hospitals, counters.</p>
                <a href="token-display.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Motor Control -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/2021/05/forbix-semicon-remote-pump-controller-800x600.jpg" alt="Wireless Motor Control System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Motor Control System</h3>
                <p class="product-model">Industrial</p>
                <p class="product-description">Wireless remote motor control for pumps, water management, industrial automation.</p>
                <a href="motor-control.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Long Range -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/long-range/forbix-semicon-long-range-alarm-configuration.jpg" alt="Long Range RF System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Long Range RF System</h3>
                <p class="product-model">Long Range</p>
                <p class="product-description">Industrial long range wireless alarm and remote control up to 4km.</p>
                <a href="long-range.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Traffic Light -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/traffic-light-controller/forbix-semicon-wireless-automatic-traffic-light-controller-4-junction.jpg" alt="Traffic Light Controller" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Traffic Light Controller</h3>
                <p class="product-model">Traffic Control</p>
                <p class="product-description">Programmable wireless traffic light controller for intersections and parking.</p>
                <a href="traffic-light.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Wireless Transceiver -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg" alt="Wireless Transceiver" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Wireless Transceiver</h3>
                <p class="product-model">Automation</p>
                <p class="product-description">Industrial wireless transmitter/receiver for automation and remote control.</p>
                <a href="wireless-transceiver.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Air Quality Monitor -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/air-monitor/forbix-semicon-air-quality-monitor-voc-meter-1.jpg" alt="Air Quality Monitor" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Air Quality Monitor</h3>
                <p class="product-model">Environment</p>
                <p class="product-description">Real-time air quality monitoring for PM2.5, CO2, VOC, temperature, humidity.</p>
                <a href="air-quality.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </section>

    <!-- Product Packages Section -->
    <div class="section-header">
        <h2 class="section-title">Ready-to-Buy Product Packages</h2>
        <p class="section-subtitle">Complete solutions with everything you need included</p>
    </div>

    <section class="products-grid">
        <!-- 10-Bed Nurse Call -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system-3.jpg" alt="10-Bed Wireless Nurse Call System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">10-Bed Wireless Nurse Call System</h3>
                <p class="product-model">Complete Package</p>
                <p class="product-description">10 patient remotes + LCD monitor display. WiFi configurable room names.</p>
                <a href="product-nurse-call-10bed-lcd-monitor.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Panic Alarm 1+1 -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-1remote-1siren-set.jpg" alt="1 Remote 1 Siren Panic Alarm" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">1 Remote 1 Siren Panic Alarm</h3>
                <p class="product-model">Starter Package</p>
                <p class="product-description">Wireless remote + 108dB siren. Up to 100m range, weather-resistant.</p>
                <a href="product-panic-alarm-1remote-1siren.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- 6 Remote Peon Call -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/peon-call-bell/forbix-semicon-wireless-attendant-calling-system-6-remotes.jpg" alt="6 Remote Peon Call Bell" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">6 Remote Wireless Peon Call Bell</h3>
                <p class="product-model">Office Package</p>
                <p class="product-description">6 wireless remotes + central receiver. Multi-point communication.</p>
                <a href="product-peon-call-bell-6remotes.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- 10 Remote Attendant System -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/peon-call-bell/forbix-semicon-attendant-calling-system.jpg" alt="10 Remote Attendant Calling System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">10 Remote Attendant Calling System</h3>
                <p class="product-model">Enterprise Package</p>
                <p class="product-description">10 wireless remotes + receiver. For hospitals, large offices, service counters.</p>
                <a href="product-wireless-attendant-calling-system-10remotes.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Token Display 6 Queue -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/token-display/forbix-semicon-token-display-queue-management-lcd-monitor.jpg" alt="Token Display 6 Queue System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Token Display 6 Queue System</h3>
                <p class="product-model">Queue Package</p>
                <p class="product-description">6 queue management with LCD. WiFi control, multi-screen replication.</p>
                <a href="product-token-display-6-queue.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Traffic Light Controller -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/traffic-light-controller/forbix-semicon-remote-traffic-light-controller-1.jpg" alt="Wireless Traffic Light Controller" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Wireless Traffic Light Controller</h3>
                <p class="product-model">200mm LEDs</p>
                <p class="product-description">Remote control traffic lights up to 120m. Perfect for construction sites.</p>
                <a href="product-remote-wireless-traffic-light-controller.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Code Red 6 Remote -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/panic-alarm/forbix-semicon-code-red-2d-display-6remotes.jpg" alt="6 Remote Code Red 2D Display" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">6 Remote Code Red 2D Display</h3>
                <p class="product-model">Emergency Package</p>
                <p class="product-description">6 remotes + 2-digit display. Code Red emergency alert system.</p>
                <a href="product-6remote-code-red-2d-display.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Air Quality Monitor VOC -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/air-monitor/forbix-semicon-air-quality-monitor-voc-meter-1.jpg" alt="Air Quality Monitor VOC Meter" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Air Quality Monitor VOC Meter</h3>
                <p class="product-model">Environment Monitor</p>
                <p class="product-description">VOC & formaldehyde monitoring. WiFi enabled with data logging.</p>
                <a href="product-air-quality-monitor-voc-meter.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </section>

    <!-- Individual Devices Section -->
    <div class="section-header">
        <h2 class="section-title">Individual Devices & Components</h2>
        <p class="section-subtitle">Build your custom solution with individual components</p>
    </div>

    <section class="products-grid">
        <!-- Patient Call Button -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-patient-remote-control.jpg" alt="Patient Call Button" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Patient Call Button</h3>
                <p class="product-model">Model: FBX521</p>
                <p class="product-description">Wireless patient call button with ergonomic design. Long battery life.</p>
                <a href="device-patient-call-button.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Nurse Station Console -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-system-display-ready.jpg" alt="Nurse Station Console LCD Monitor" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Nurse Station Console LCD</h3>
                <p class="product-model">Model: FBXLV01</p>
                <p class="product-description">Centralized LCD monitor with WiFi control and VGA support.</p>
                <a href="device-nurse-station-console.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Pull Chord Button -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-patient-pull-cord-button.jpg" alt="Pull Chord Emergency Button" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Pull Chord Emergency Button</h3>
                <p class="product-model">Model: FBX528A</p>
                <p class="product-description">Waterproof IP65 pull cord for bathrooms and high-risk areas.</p>
                <a href="device-pull-chord-button.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- LED Indicators -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-station-indicator-receiver.jpg" alt="LED Indicators & Door Modules" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">LED Indicators & Door Modules</h3>
                <p class="product-model">Model: FBXCSIxA</p>
                <p class="product-description">7-segment displays and door-mounted LED indicators for corridors.</p>
                <a href="device-receiver-indicators.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Signal Repeater -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-signal-repeater-booster.jpg" alt="Signal Repeater Booster" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Signal Repeater Booster</h3>
                <p class="product-model">Model: FBXCSR01A</p>
                <p class="product-description">Extends wireless range for large facilities and multi-story buildings.</p>
                <a href="device-signal-repeater-booster.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Wired Nurse Call -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/nurse-call/forbix-semicon-wired-nurse-station-indicator-console.jpg" alt="Wired Nurse Call System" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Wired Nurse Call System</h3>
                <p class="product-model">Model: FBXCWNCS10</p>
                <p class="product-description">Traditional wired system for permanent installations. Zero signal loss.</p>
                <a href="device-wired-nurse-call.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Panic Button -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-button.jpg" alt="Wireless Panic Button" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Wireless Panic Button</h3>
                <p class="product-model">Security Remote</p>
                <p class="product-description">One-touch emergency alert for banks, gated communities, security.</p>
                <a href="device-panic-button.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Wireless Siren -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-wireless-code-red.jpg" alt="Wireless Siren & Code Red" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Wireless Siren & Code Red</h3>
                <p class="product-model">Alert System</p>
                <p class="product-description">108dB siren with Code Red/Blue alerts for hospitals and offices.</p>
                <a href="device-wireless-siren.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Foot Switch Panic -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-foot-button-wireless-metal.jpg" alt="Foot Switch Panic Alarm" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Foot Switch Panic Alarm</h3>
                <p class="product-model">Concealed Alert</p>
                <p class="product-description">Under-desk foot pedal for banks and jewelry stores. Hands-free.</p>
                <a href="device-foot-switch-panic-alarm.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Elevator Panic -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/panic-alarm/forbix-semicon-lift-elevator-panic-alarm-3.jpg" alt="Lift Elevator Panic Alarm" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Lift & Elevator Panic Alarm</h3>
                <p class="product-model">Elevator SOS</p>
                <p class="product-description">Stuck elevator emergency alerts. Repeater technology for high-rise.</p>
                <a href="device-lift-elevator-panic-alarm.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Automatic Timer -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-programmable-timer.jpg" alt="Automatic Timer Alarm" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Automatic Timer Alarm</h3>
                <p class="product-model">RTC Programmable</p>
                <p class="product-description">Scheduled alarms for schools, factories, prayer times. 20+ schedules.</p>
                <a href="device-automatic-timer-alarm.php" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Wireless RF Transmitter Receiver -->
        <div class="product-card">
            <div class="product-image-container">
                <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg" alt="Wireless RF Transmitter Receiver Systems" loading="lazy">
            </div>
            <div class="product-info">
                <h3 class="product-title">Wireless RF Transmitter Receiver Systems</h3>
                <p class="product-model">Multi-Channel Control</p>
                <p class="product-description">Professional wireless RF transmitter and receiver systems. Free ISM band 380-480MHz, 1-4 channels, relay control for automation.</p>
                <a href="device-wireless-rf-transmitter-receiver.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Contact us for custom solutions and bulk pricing</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn btn-primary">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    Contact Us
                </a>
                <a href="buy.php" class="btn btn-secondary">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor"><path d="M7 18a2 2 0 100 4 2 2 0 000-4zm10 0a2 2 0 100 4 2 2 0 000-4zM7.16 14l.84-2h8.45l1.2 3H7.16zM6 6h14l-1 4H7L6 6z"/></svg>
                    Buy Now
                </a>
            </div>
        </div>
    </section>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
