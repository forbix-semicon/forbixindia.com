<?php
$pageTitle = "Wireless Nurse Call System for Hospitals, FORBIX SEMICON";
$pageDescription = "Advanced wireless nurse call system for hospitals and healthcare facilities. No wiring required, instant patient-nurse communication with configurable settings";
$pageKeywords = "wireless nurse call system, patient call button, hospital communication, healthcare technology, medical alert system";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Wireless Nurse Call System for Hospitals, FORBIX SEMICON",
    "description" => $pageDescription,
    "image" => "https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system.jpg",
    "brand" => array(
        "@type" => "Brand",
        "name" => "FORBIX SEMICON"
    ),
    "manufacturer" => array(
        "@type" => "Organization",
        "name" => "FORBIX SEMICON Technologies Pvt Ltd",
        "url" => "https://www.forbixindia.com"
    ),
    "offers" => array(
        "@type" => "Offer",
        "url" => "https://www.forbixindia.com/nurse-call.php",
        "priceCurrency" => "USD",
        "price" => "199.00",
        "priceValidUntil" => "2026-12-31",
        "availability" => "https://schema.org/InStock",
        "shippingDetails" => array(
            "@type" => "OfferShippingDetails",
            "shippingRate" => array(
                "@type" => "MonetaryAmount",
                "value" => "0",
                "currency" => "USD"
            ),
            "shippingDestination" => array(
                "@type" => "DefinedRegion",
                "addressCountry" => "IN",
                "postalCode" => "560066"
            ),
            "deliveryTime" => array(
                "@type" => "ShippingDeliveryTime",
                "handlingTime" => array(
                    "@type" => "QuantitativeValue",
                    "minValue" => "1",
                    "maxValue" => "2",
                    "unitCode" => "DAY"
                ),
                "transitTime" => array(
                    "@type" => "QuantitativeValue",
                    "minValue" => "3",
                    "maxValue" => "5",
                    "unitCode" => "DAY"
                )
            )
        ),
        "hasMerchantReturnPolicy" => array(
            "@type" => "MerchantReturnPolicy",
            "returnPolicyCategory" => "https://schema.org/MerchantReturnFiniteReturnWindow",
            "merchantReturnDays" => 30,
            "returnMethod" => "https://schema.org/ReturnByMail",
            "returnFees" => "https://schema.org/FreeReturn",
            "returnPolicyCountry" => "IN",
            "applicableCountry" => "IN",
            "refundType" => "ExchangeRefund"
        )
    ),
    "category" => "Healthcare Equipment"
);

// FAQ Schema
$faqSchema = array(
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array(
        array(
            "@type" => "Question",
            "name" => "How does the wireless nurse call system work without any wiring?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Each patient receives a wireless remote button that communicates via RF (radio frequency) signals. When pressed, the signal travels through walls, furniture, and floors to reach the nurse station display. The LCD monitor instantly shows the room or bed number that triggered the call, along with an audible alert. No cables run between patient rooms and the nurse station — you simply place the remotes at bedsides and power on the central display."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What happens if the signal cannot reach from a distant room?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "For large facilities or multi-story buildings, we provide signal repeater boosters (Model FBXCSR01A) that extend coverage. A single repeater can relay signals across an entire floor or wing. In practice, the base system covers 30-40 meters indoors through walls; adding repeaters eliminates dead zones and allows coverage for facilities with 6,000+ beds across multiple buildings."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Can we customize the room or bed numbers shown on the display?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes. The nurse station display has built-in WiFi that lets you configure alphanumeric room identifiers through a web interface — for example, 'ICU-3', 'Room 204', or 'Ward-B Bed 5'. These names are stored in internal memory and persist through power cycles, so you never need to reconfigure after a restart."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "How long do the batteries last in the patient call buttons?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Under normal usage (a few presses per day), the batteries in patient remotes typically last 2-4 years. The buttons use standard cell batteries that are inexpensive and easy to replace. There's no recurring maintenance cost beyond occasional battery replacement — no firmware updates, calibration, or professional servicing required."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Is there a wired option for new hospital construction projects?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes. We offer a wired nurse call system for new construction where cables can be installed during building. The wired system provides the same functionality with hardwired reliability and zero battery maintenance. Many facilities use a hybrid approach — wired for permanent patient rooms and wireless for temporary or overflow areas."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What visual indicators are available outside patient rooms?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "We offer door-mounted LED indicator modules and 7-segment displays that mount above or beside room doors. When a patient presses their call button, the corridor indicator lights up immediately — allowing nurses to identify the calling room from down the hallway without checking the central console. Different colors can indicate call priority or type."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Can the system work in wet areas like bathrooms?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes. For bathrooms and wet areas, we provide waterproof pull-cord emergency buttons (Model FBX528A/FBX528). Patients simply pull the cord to trigger an alert — no need to find or press a button during an emergency. The pull-cord units are designed for humid environments and can be wall-mounted at accessible heights."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "How quickly does the nurse station receive an alert after a patient presses the button?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Alerts are transmitted in under one second. The moment a patient presses their call button, the RF signal reaches the nurse station display almost instantaneously, triggering both a visual indicator (showing the room/bed number) and an audible tone. This sub-second response ensures nursing staff can react immediately to patient needs."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Does the system keep a log of all calls for compliance or analysis?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes. The nurse station display includes a data logger with internal SD card storage and real-time clock (RTC). Every call is timestamped and recorded — showing which room called and when. This data can be exported for compliance reporting, response time analysis, or quality improvement initiatives."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Can we display the nurse station screen on multiple monitors?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes. The system supports screen replication via WiFi, so you can mirror the nurse station display on additional monitors throughout the facility — at secondary nurse stations, break rooms, or supervisor offices. This ensures staff can monitor patient calls from multiple locations without crowding around a single screen."
            )
        )
    )
);

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
        ),
        array(
            "@type" => "ListItem",
            "position" => 3,
            "name" => "Wireless Nurse Call System",
            "item" => "https://www.forbixindia.com/nurse-call.php"
        )
    )
);

$additionalHeadTags = '
        <link rel="canonical" href="https://www.forbixindia.com/nurse-call.php" />
        <meta property="og:type" content="product" />
        <meta property="og:title" content="' . htmlspecialchars($pageTitle) . '" />
        <meta property="og:description" content="' . htmlspecialchars($pageDescription) . '" />
        <meta property="og:url" content="https://www.forbixindia.com/nurse-call.php" />
        <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system.jpg" />
        <meta property="og:image:alt" content="FORBIX SEMICON Wireless Nurse Call System" />
        <meta property="og:site_name" content="FORBIX SEMICON" />
        <meta property="product:price:amount" content="199.00" />
        <meta property="product:price:currency" content="USD" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="' . htmlspecialchars($pageTitle) . '" />
        <meta name="twitter:description" content="' . htmlspecialchars($pageDescription) . '" />
        <meta name="twitter:image" content="https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system.jpg" />
        <script type="application/ld+json">' . json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
        <script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
        <script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
        <style>
        :root{--bg:#fbfdff;--card:#ffffff;--muted:#64748b;--accent:#0ea5a4;--accent-600:#089e99;--accent-700:#057a77;--radius:12px}
        html,body{height:100%;margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;-webkit-font-smoothing:antialiased;background:var(--bg);color:#07203a}
        a{color:var(--accent);text-decoration:none}
        .page-container{max-width:1200px;margin:22px auto;padding:18px}
        .page-container > h1{margin-top:clamp(40px,6vw,48px);margin-bottom:clamp(28px,6vw,48px);font-size:clamp(24px,4vw,36px);text-align:center;color:#07203a}
        .hero-section{background:#0D8F84;border-radius:var(--radius);padding:28px;display:flex;flex-direction:column;gap:18px;color:#ffffff;text-align:center;align-items:center}
        .hero-content{ text-align: center }
        .hero-title{font-size:clamp(20px,3.6vw,34px);margin:0;color:#ffffff}
        .hero-subtitle{margin:0;color:rgba(255,255,255,0.92);font-weight:600}
        .hero-description{margin:0;color:rgba(255,255,255,0.95);line-height:1.5}
        .hero-links{display:flex;flex-wrap:wrap;gap:10px;margin-top:8px;justify-content:center}
        .hero-link{display:inline-flex;align-items:center;gap:8px;padding:8px 12px;border-radius:999px;background:rgba(255,255,255,0.12);font-weight:600;color:#ffffff;border:1px solid rgba(255,255,255,0.12)}
        .hero-link .material-icons, .hero-link .icon{background:rgba(255,255,255,0.12);color:#ffffff}
        .separator-line{height:1px;background:linear-gradient(90deg,#e6eef2,transparent);margin:12px 0;border-radius:2px}
        .products-grid{display:grid;grid-template-columns:repeat(1,1fr);gap:18px;margin-top:20px}
        .product-card{Display:flex;flex-direction:column;background:var(--card);border-radius:12px;overflow:hidden;box-shadow:0 6px 18px rgba(16,24,40,0.06)}
        .product-image-container{background:linear-gradient(180deg,rgba(2,6,23,0.03),transparent);padding:14px;display:flex;justify-content:center;align-items:center}
        .product-image-container img{max-width:100%;height:auto;border-radius:8px;display:block}
        .product-info{padding:14px}
        .product-title{margin:0;font-size:18px}
        .product-model{margin:6px 0;color:var(--muted);font-size:13px}
        .product-description{margin:8px 0;color:#324149}
        .btn{display:inline-flex;align-items:center;gap:8px;padding:8px 12px;border-radius:8px;border:none;cursor:pointer;background:var(--accent);color:#fff;font-weight:700}
        .btn.btn-secondary{background:#fff;border:1px solid #dbeafe;color:#0f172a}
        .btn:focus{outline:3px solid rgba(14,165,164,0.18)}
        .features-section{margin-top:22px}
        /* System Features section uses default styling (no special background) */
        .section-title{font-size:20px;margin:6px 0 12px}
        .features-grid{display:grid;grid-template-columns:repeat(1,1fr);gap:12px}
        .feature-card{background:var(--card);padding:12px;border-radius:10px;display:flex;flex-direction:column;gap:8px;align-items:flex-start}
        .feature-card ul{margin:0;padding-left:20px;color:var(--muted)}
        .feature-card li{margin:4px 0;line-height:1.5}
        .feature-card h3,.feature-card h4{margin:0}
        .feature-card p{margin:6px 0 0;color:var(--muted)}
        .cta-section{margin:22px 0;padding:18px;border-radius:12px;background:linear-gradient(90deg,rgba(14,165,164,0.06),transparent)}
        .cta-buttons{display:flex;gap:12px;margin-top:12px}
        @media(min-width:720px){
            .hero-section{flex-direction:row;align-items:center}
            .hero-content{flex:1}
            .products-grid{grid-template-columns:repeat(2,1fr)}
            .features-grid{grid-template-columns:repeat(2,1fr)}
        }
        @media(min-width:1024px){
            .products-grid{grid-template-columns:repeat(3,1fr)}
            .features-grid{grid-template-columns:repeat(4,1fr)}
            .page-container{padding:28px}
        }
        /* utility */
        .material-icons, .icon{display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:6px;background:rgba(2,6,23,0.03);font-size:16px}

        /* Dark theme overrides for this page: set CSS variables so all elements using var() adapt */
        [data-theme="dark"]{
            --bg: #374151;
            --card: #1f2937;
            --muted: #cbd5e1;
            --accent: #7dd3fc;
            --card-contrast: rgba(255,255,255,0.04);
        }
        [data-theme="dark"] html, [data-theme="dark"] body {
            background: var(--bg) !important;
            color: #e6eef6 !important;
        }
        /* Ensure page container and cards use dark card background and cannot revert to white */
        [data-theme="dark"] .page-container{background:transparent}
        [data-theme="dark"] .product-card,
        [data-theme="dark"] .feature-card,
        [data-theme="dark"] .cta-section{background:var(--card);color:#e6eef6;box-shadow:none}
        [data-theme="dark"] .product-model,
        [data-theme="dark"] .product-description,
        [data-theme="dark"] .feature-card p,
        [data-theme="dark"] .feature-card ul,
        [data-theme="dark"] .feature-card li{color:var(--muted)}
        [data-theme="dark"] a{color:var(--accent)}
        [data-theme="dark"] .hero-link{background:rgba(255,255,255,0.06);border-color:rgba(255,255,255,0.08);color:#ffffff}
        [data-theme="dark"] .material-icons, [data-theme="dark"] .icon{background:var(--card-contrast);color:#e6eef6}
        /* No special dark-mode overrides for System Features section; it uses default card styles */
        /* Dark mode button and heading adjustments */
        [data-theme="dark"] h1, [data-theme="dark"] h2, [data-theme="dark"] h3, [data-theme="dark"] h4, [data-theme="dark"] .section-title, [data-theme="dark"] .product-title { color: #e6eef6 }
        [data-theme="dark"] .btn.btn-primary { background: #e6eef2 !important; color: #04203a !important }
        [data-theme="dark"] .btn.btn-primary .icon { color: #04203a !important; fill: currentColor }
        [data-theme="dark"] .btn.btn-secondary { background: transparent !important; border-color: #7dd3fc !important; color: #7dd3fc !important }
        [data-theme="dark"] .btn.btn-secondary .icon { color: #7dd3fc !important; fill: currentColor }
        </style>
';

// Prevent the global `common.css` from being loaded for this page so
// the inline styles above are authoritative and no external CSS overrides them.
$skipCommonCss = true;
include __DIR__ . '/includes/header.php';
?>

<div class="page-container">
    <h1>Advanced Nurse Call System for Hospitals, FORBIX SEMICON</h1>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <!--<h1 class="hero-title">Wireless Nurse Call System</h1>-->
            <p class="hero-subtitle">Manufactured by FORBIX SEMICON®</p>
            <p class="hero-description">
              Looking for the most advanced wireless nurse call system for small nursing homes or large hospitals?
              At FORBIX SEMICON® we design and manufacture Patient Nurse Call Button, Nurse Station LCD Monitor Display, Pull Chord Emergency Call Button.
            </p>

            <div class="hero-links">
                <a href="https://youtu.be/1mbOSIlU7Hs" target="_blank" class="hero-link" aria-label="Explanation Video">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                    Explanation Video
                </a>
                <a href="installation.php" class="hero-link">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20 6h-4V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2H4v14h16V6zm-10 0V4h4v2h-4z"/></svg>
                    Hospital Installation
                </a>
                <a href="product-nurse-call-10bed-lcd-monitor.php" class="hero-link" aria-label="Nurse Station VGA">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M21 3H3v12h18V3zm-1 11H4V4h16v10zM8 20h8v1H8z"/></svg>
                    Nurse Station VGA
                </a>
                <a href="docs/Brochure-2024-FORBIX-SEMICON.pdf" class="hero-link" aria-label="Product Catalog">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16h12a2 2 0 0 0 2-2V8l-6-6zM13 9V3.5L18.5 9H13z"/></svg>
                    Product Catalog
                </a>
            </div>

            <div class="separator-line"></div>

            <p class="hero-description">
              Wondering how much does a nurse call system cost for a 50-bed facility? We provide affordable solutions and custom quotes for every need. Our nurse call system with staff duress buttons ensures safety for both patients and staff, making it an ideal emergency call system for healthcare environments.
            </p>

            <p class="hero-description">
              The FORBIX SEMICON® hospital call bell system and nursing home call system are trusted for monitoring patients in assisted living, elderly alert system for care homes, and assisted living communication system for seniors. Experience seamless wireless nurse call system installation, instant alerts, and reliable performance for every healthcare setting.
            </p>
            
        </div>
    </section>

    <h2 class="section-title">Components of Wireless Nurse Call System</h2>
    <!-- Product Components Grid -->
    <section class="products-grid">
        <!-- 1. Patient Nurse Call Button -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-patient-remote-control.jpg" alt="Patient Nurse Call Button FBX521">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Patient Nurse Call Button</h3>
                <p class="product-model">Model: FBX521</p>
                <p class="product-description">
                    Advanced wireless patient call button with ergonomic design for maximum comfort. 
                    Features one-touch emergency calling, long battery life, and reliable signal transmission 
                    up to 100 meters. Perfect for bedside use in hospitals and nursing homes.
                </p>
                <a href="device-patient-call-button.php" class="btn btn-primary" aria-label="Read more about Patient Nurse Call Button">
                    Read More
                </a>
            </div>
        </div>

        <!-- 2. Nurse Station LCD Monitor Display -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-system-display-ready.jpg" alt="Nurse Station LCD Monitor Display FBX522">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Nurse Station LCD Monitor Display</h3>
                <p class="product-model">Model: FBXLV01</p>
                <p class="product-description">
                    LCD monitor with VGA display, WiFi connection to replicate the screen, shows room numbers with real-time clock (RTC). 
                    Centralized monitoring station provides instant visual alerts for healthcare staff with comprehensive 
                    patient call management and efficient response coordination across medical facilities.
                </p>
                <a href="device-nurse-station-console.php" class="btn btn-primary" aria-label="Read more about Nurse Station LCD Monitor Display">
                    Read More
                </a>
            </div>
        </div>

        <!-- 3. Pull Chord Emergency Call Button -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-patient-pull-cord-button.jpg" alt="Pull Chord Emergency Call Button">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Pull Chord Emergency Call Button</h3>
                <p class="product-model">Model: FBX528A/FBX528</p>
                <p class="product-description">
                    Easy-to-use pull cord emergency system for instant assistance alerts. 
                    Waterproof design suitable for bathrooms and wet areas. Simple pull activation 
                    sends immediate alerts to nursing stations for rapid emergency response.
                </p>
                <a href="device-pull-chord-button.php" class="btn btn-primary" aria-label="Read more about Pull Chord Emergency Call Button">
                    Read More
                </a>
            </div>
        </div>

        <!-- 4. LED Indicators, 7-Segment Displays & Door Modules -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-station-indicator-receiver.jpg" alt="LED Indicators & Door Modules FBX524">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">LED Indicators, 7-Segment Displays & Door Modules</h3>
                <p class="product-model">Model: FBXCSIxA/FBXCSL04A/FBXDM01</p>
                <p class="product-description">
                    Comprehensive visual indicator system with bright LED displays and 7-segment room numbers. 
                    Door-mounted modules provide instant visual alerts for corridor staff. 
                    Color-coded priority system ensures immediate identification of emergency calls.
                </p>
                <a href="device-receiver-indicators.php" class="btn btn-primary" aria-label="Read more about LED Indicators, 7-Segment Displays & Door Modules">
                    Read More
                </a>
            </div>
        </div>

        <!-- 5. Signal Repeater Booster -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-signal-repeater-booster.jpg" alt="Signal Repeater Booster">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Signal Repeater Booster</h3>
                <p class="product-model">Model: FBXCSR01A</p>
                <p class="product-description">
                    High-power signal repeater extends wireless range throughout large facilities. 
                    Eliminates dead zones and ensures reliable communication in multi-story buildings. 
                    Seamless integration with existing systems for enhanced coverage and reliability.
                </p>
                <a href="device-signal-repeater-booster.php" class="btn btn-primary" aria-label="Read more about Signal Repeater Booster">
                    Read More
                </a>
            </div>
        </div>

        <!-- 6. Wired Nurse Call System -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/nurse-call/forbix-semicon-wired-nurse-station-indicator-console.jpg" alt="Wired Nurse Call System">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Wired Nurse Call System</h3>
                <p class="product-model">Model: FBXCWNCS10</p>
                <p class="product-description">
                    Traditional wired nurse call system for permanent installations. 
                    Hardwired connectivity ensures uninterrupted service with integrated console display. 
                    Perfect for new construction projects requiring reliable, maintenance-free operation.
                </p>
                <a href="device-wired-nurse-call.php" class="btn btn-primary" aria-label="Read more about Wired Nurse Call System">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- Key Features & Specifications Section -->
    <section class="features-section system-features">
        <h2 class="section-title">Nurse Call System, Key Features & Specifications</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Signal Range</h4>
                <ul>
                    <li>Indoor: 30-40 meters through walls</li>
                    <li>Outdoor: 100+ meters line-of-sight</li>
                    <li>Repeater support for range extension</li>
                    <li>Signals pass through walls, wood, glass</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Wireless Technology</h4>
                <ul>
                    <li>Complete wireless solution</li>
                    <li>Latest RF (Radio Frequency) technology</li>
                    <li>No wiring, No installation required</li>
                    <li>Sub-second alert transmission</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>System Architecture</h4>
                <ul>
                    <li>Modular and scalable architecture</li>
                    <li>Supports over 6000 patient beds</li>
                    <li>No signal range limitation</li>
                    <li>Plug and play units</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Power Options</h4>
                <ul>
                    <li>Battery operated patient remotes</li>
                    <li>220V AC powered displays</li>
                    <li>2-4 years battery life</li>
                    <li>Standard cell batteries</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Advanced Features</h4>
                <ul>
                    <li>Data logger nurse station</li>
                    <li>Inbuilt SDCard/WiFi/RTC</li>
                    <li>User configurable bed number</li>
                    <li>Screen replication via WiFi</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Installation</h4>
                <ul>
                    <li>Zero wiring required</li>
                    <li>Plug and play setup</li>
                    <li>Wall/bedside mounting options</li>
                    <li>No prerequisite of site inspection</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Security & Reliability</h4>
                <ul>
                    <li>Encrypted communication</li>
                    <li>Fail-safe operation</li>
                    <li>CE certified equipment</li>
                    <li>No future maintenance required</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Customer Trust</h4>
                <ul>
                    <li>50,000+ customers worldwide</li>
                    <li>Cost effective solution</li>
                    <li>Instant visual and audible alerts</li>
                    <li>Comprehensive patient call management</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Enhance Patient Care?</h2>
            <p>Contact us today for a customized nurse call system solution</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn btn-primary btn-large" aria-label="Contact Us">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.7 5.1 6.5 6.5l1.6-1.6c.2-.2.5-.3.8-.2 1 .3 2.1.5 3.3.5.5 0 .9.4.9.9V20c0 .5-.4.9-.9.9C9.2 20.9 3 14.7 3 7.9 3 7.4 3.4 7 3.9 7H5c.5 0 .9.2 1.2.5l.4.3c.3.3.6.7.5 1.1-.1 1.2.2 2.3.5 3.3.1.3 0 .6-.2.8L6.6 10.8z"/></svg>
                    Contact Us
                </a>
                <a href="buy.php" class="btn btn-secondary btn-large" aria-label="Buy Now">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7 18a2 2 0 100 4 2 2 0 000-4zm10 0a2 2 0 100 4 2 2 0 000-4zM7.16 14l.84-2h8.45l1.2 3H7.16zM6 6h14l-1 4H7L6 6z"/></svg>
                    Buy Now
                </a>
            </div>
        </div>
    </section>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
