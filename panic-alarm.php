<?php
$pageTitle = "Wireless Panic Alarm System, Programmable, FORBIX SEMICON®";
$pageDescription = "Advanced wireless panic alarm system for residential security, bank protection, border security. No wiring required, instant emergency alerts.";
$pageKeywords = "wireless panic alarm, security alarm system, emergency alert, bank security, residential protection";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Wireless Panic Alarm System, FORBIX SEMICON",
    "image" => "https://www.forbixindia.com/assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-products.jpg",
    "description" => $pageDescription,
    "brand" => array(
        "@type" => "Brand",
        "name" => "FORBIX SEMICON®"
    ),
    "manufacturer" => array(
        "@type" => "Organization",
        "name" => "FORBIX SEMICON® Technologies Pvt Ltd",
        "url" => "https://www.forbixindia.com"
    ),
    "offers" => array(
        "@type" => "Offer",
        "url" => "https://www.forbixindia.com/panic-alarm.php",
        "priceCurrency" => "USD",
        "price" => "135.00",
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
    "category" => "Security Equipment"
);

// FAQ Schema
$faqSchema = array(
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array(
        array(
            "@type" => "Question",
            "name" => "How does a wireless panic button work?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The wireless panic button system operates on secure RF communication in free unlicensed ISM bands. When activated: 1) The panic button sends encrypted wireless signals to the central control panel. 2) The panel triggers audible sirens (110dB+), visual strobe lights, and digital notifications simultaneously. 3) Pre-programmed emergency protocols execute based on facility requirements. The system requires no wiring between buttons and receivers."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What is the communication range of the panic alarm system?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our wireless panic alarm system offers dual-range capabilities: Short Range - 30-40m indoors, 100-300m outdoors (expandable with signal repeaters). Long Range - 2-3km line-of-sight (extendable via mesh networking). Actual range varies based on building materials and environmental interference. Military-grade encryption ensures signal security at all ranges."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Where can panic alarm systems be used?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our panic alarm systems are suitable for banks, offices, residential apartments, gated communities, retail stores, educational institutions, healthcare facilities, and industrial complexes. The system is designed for both indoor and outdoor applications with weather-resistant components."
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
            "name" => "Wireless Panic Alarm System",
            "item" => "https://www.forbixindia.com/panic-alarm.php"
        )
    )
);

$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/panic-alarm.php" />
    <meta property="og:type" content="product" />
    <meta property="og:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta property="og:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta property="og:url" content="https://www.forbixindia.com/panic-alarm.php" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/panic-alarm/forbix-semicon-wireless-panic-alarm-system.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Wireless Panic Alarm System" />
    <meta property="og:site_name" content="FORBIX SEMICON®" />
    <meta property="product:price:amount" content="135.00" />
    <meta property="product:price:currency" content="USD" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta name="twitter:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta name="twitter:image" content="https://www.forbixindia.com/assets/images/gallery/panic-alarm/forbix-semicon-wireless-panic-alarm-system.jpg" />
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
    .feature-card h3,.feature-card h4{margin:0}
    .feature-card p{margin:6px 0 0;color:var(--muted)}
    .feature-card ul{margin:0;padding-left:20px;color:var(--muted)}
    .feature-card li{margin:4px 0;line-height:1.5}
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
    <script type="application/ld+json">' . json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
    <script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
    <script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
';

$skipCommonCss = true;
include __DIR__ . '/includes/header.php';
?>

<div class="page-container">
    <h1>Best Technology Wireless Panic Alarm System, FORBIX SEMICON</h1>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <p class="hero-subtitle">Manufactured by FORBIX SEMICON®</p>
            <p class="hero-description">
              Advanced wireless panic alarm system for residential security, bank protection, border security, and emergency response. Our panic alarm systems provide instant wireless communication during emergencies without requiring any complex wiring or installation.
            </p>

            <div class="hero-links">
                <a href="https://youtu.be/MI9_AF2VhdQ" target="_blank" class="hero-link" aria-label="1 Remote 1 Siren Demo">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                    1 Remote 1 Siren Demo
                </a>
                <a href="https://youtu.be/CphkZjHcvKY" target="_blank" class="hero-link" aria-label="Factory Installation">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                    Factory Installation
                </a>
                <a href="https://youtu.be/9Woq6MnZIuk" target="_blank" class="hero-link" aria-label="Wireless Siren Demo">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                    Wireless Siren Demo
                </a>
                <a href="docs/Brochure-2024-FORBIX-SEMICON.pdf" class="hero-link" aria-label="Product Catalog">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16h12a2 2 0 0 0 2-2V8l-6-6zM13 9V3.5L18.5 9H13z"/></svg>
                    Product Catalog
                </a>
            </div>

            <div class="separator-line"></div>

            <p class="hero-description">
              Perfect for hospitals, banks, offices, residential complexes, and industrial facilities. Features include programmable timer alarms, concealed foot switches, elevator emergency systems, and code red/blue medical alerts with reliable wireless transmission up to 3-4 kilometers range.
            </p>

            <p class="hero-description">
              Applications: Hospital emergencies, elevator safety, office security, elderly care, domestic violence protection. Our systems ensure rapid emergency response with encrypted wireless technology and tamper-proof operation.
            </p>
            
        </div>
    </section>

    <!-- Product Components Grid -->
    <section class="products-grid">
        <!-- 1. Panic Alarm Button -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-button.jpg" alt="FORBIX SEMICON Wireless Panic Alarm Button">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Panic Alarm Button</h3>
                <p class="product-model">Model: FBX521A</p>
                <p class="product-description">
                    Compact wireless panic button for instant emergency alerts in residential, commercial, and industrial settings. 
                    Features one-touch activation, long-range RF transmission, and tamper-proof design. 
                    Perfect for personal safety, security guard alerts, and emergency response scenarios.
                </p>
                <a href="device-panic-button.php" class="btn btn-primary" aria-label="Read more about Panic Alarm Button">
                    Read More
                </a>
            </div>
        </div>

        <!-- 2. Sirens with Indicators -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/panic-alarm/forbix-semicon-15-indicator-siren-receiver.jpg" alt="FORBIX SEMICON 15-Indicator Siren Receiver">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Sirens with Indicators</h3>
                <p class="product-model">Model: FBX522M</p>
                <p class="product-description">
                    Multi-zone siren receiver with 15 individual indicators for comprehensive facility monitoring. 
                    Features high-volume 108dB alerts, visual LED indicators, and zone-specific identification. 
                    Ideal for large facilities requiring multi-point panic alarm coverage and response coordination.
                </p>
                <a href="device-wireless-siren.php" class="btn btn-primary" aria-label="Read more about Sirens with Indicators">
                    Read More
                </a>
            </div>
        </div>

        <!-- 3. Code Red Alarms and Displays -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/panic-alarm/forbix-semicon-code-red-2d-display.jpg" alt="FORBIX SEMICON Code Red 2D Display System">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Code Red Alarms and Displays</h3>
                <p class="product-model">Model: FBXCR2D</p>
                <p class="product-description">
                    Advanced code red emergency display system for hospitals and medical facilities. 
                    Features digital room number displays, beacon lights, and automated alert protocols. 
                    Provides instant visual and audible notifications for medical emergencies and critical situations.
                </p>
                <a href="buy.php" class="btn btn-primary" aria-label="Read more about Code Red Alarms and Displays">
                    Read More
                </a>
            </div>
        </div>

        <!-- 4. Concealed Footbutton Panic Button for Banks -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-foot-button-wireless-metal.jpg" alt="FORBIX SEMICON Concealed Foot Button for Banks">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Concealed Footbutton Panic Button for Banks</h3>
                <p class="product-model">Model: FBXFB01</p>
                <p class="product-description">
                    Discreet under-desk foot-operated panic button designed specifically for banking and financial institutions. 
                    Features silent activation, wireless transmission, and robust metal construction. 
                    Enables staff to trigger security alerts without drawing attention during robbery or threat situations.
                </p>
                <a href="device-foot-switch-panic-alarm.php" class="btn btn-primary" aria-label="Read more about Concealed Footbutton Panic Button">
                    Read More
                </a>
            </div>
        </div>

        <!-- 5. Stuck Elevator Panic Alarm -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-elevator-system.jpg" alt="FORBIX SEMICON Elevator Panic Alarm System">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Stuck Elevator Panic Alarm</h3>
                <p class="product-model">Model: FBXEAS01</p>
                <p class="product-description">
                    Specialized wireless panic alarm system for elevator emergencies in high-rise buildings. 
                    Provides instant communication from elevator cars to building security during breakdowns. 
                    Features signal penetration through elevator shafts and multi-floor wireless coverage for reliable emergency response.
                </p>
                <a href="device-lift-elevator-panic-alarm.php" class="btn btn-primary" aria-label="Read more about Stuck Elevator Panic Alarm">
                    Read More
                </a>
            </div>
        </div>

        <!-- 6. Automatic Programmable Timer Alarm -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-programmable-timer.jpg" alt="FORBIX SEMICON Programmable Timer Alarm">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Automatic Programmable Timer Alarm</h3>
                <p class="product-model">Model: FBXPTA01</p>
                <p class="product-description">
                    Intelligent wireless panic alarm with built-in programmable timer and Real-Time Clock functionality. 
                    Automatically triggers alerts at predetermined times for security drills and safety protocols. 
                    Perfect for industrial facilities requiring automated emergency procedures and scheduled safety alerts.
                </p>
                <a href="device-automatic-timer-alarm.php" class="btn btn-primary" aria-label="Read more about Automatic Programmable Timer Alarm">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- System Features Section -->
    <section class="features-section system-features">
        <h2 class="section-title">Wireless Panic Alarm System Features & Specifications</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Signal Range</h4>
                <ul>
                    <li>Indoor: 30-100 meters</li>
                    <li>Outdoor: up to 3-4 kilometers</li>
                    <li>Repeater support for range extension</li>
                    <li>Signal penetration through walls</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Alert Options</h4>
                <ul>
                    <li>108dB/118dB siren volume</li>
                    <li>Beacon lights (Code Red/Blue)</li>
                    <li>SMS/Email notifications</li>
                    <li>Relay output for external sirens</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>System Architecture</h4>
                <ul>
                    <li>1-to-1 (unicasting)</li>
                    <li>1-to-many (broadcasting)</li>
                    <li>Group-to-group (multicasting)</li>
                    <li>Logical zone creation</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Power Options</h4>
                <ul>
                    <li>Battery operated transmitters</li>
                    <li>220V AC powered receivers</li>
                    <li>12V DC backup options</li>
                    <li>Long battery life (3-5 years)</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Security Features</h4>
                <ul>
                    <li>Encrypted RF transmission</li>
                    <li>Rolling code technology</li>
                    <li>Tamper-proof design</li>
                    <li>Interference immunity</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Installation</h4>
                <ul>
                    <li>Zero wiring required</li>
                    <li>Plug and play setup</li>
                    <li>Wall/table mounting options</li>
                    <li>Flexible placement</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Applications Section -->
    <section class="features-section">
        <h2 class="section-title">Wireless Panic Alarm Applications for Security & Emergency Alerts</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Banks</h4>
                <ul>
                    <li>Emergency alerts, security systems</li>
                    <li>Silent alarm activation</li>
                    <li>Staff protection during threats</li>
                    <li>Robbery response protocols</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Residential Security</h4>
                <ul>
                    <li>Home protection, elderly care</li>
                    <li>Gated communities</li>
                    <li>Personal safety alerts</li>
                    <li>Neighborhood watch systems</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Office Buildings</h4>
                <ul>
                    <li>Staff safety, intrusion alerts</li>
                    <li>Emergency response</li>
                    <li>Workplace violence prevention</li>
                    <li>Security desk notifications</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Healthcare</h4>
                <ul>
                    <li>Code Red/Blue alerts</li>
                    <li>Elevator safety, patient care</li>
                    <li>Medical emergency response</li>
                    <li>Hospital security systems</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Border Security</h4>
                <ul>
                    <li>Guard post alarms</li>
                    <li>Perimeter protection</li>
                    <li>Checkpoint security</li>
                    <li>Border patrol alerts</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Industrial</h4>
                <ul>
                    <li>Worker safety monitoring</li>
                    <li>Equipment emergency stops</li>
                    <li>Hazard area alerts</li>
                    <li>Factory security systems</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Educational</h4>
                <ul>
                    <li>School safety, lockdown procedures</li>
                    <li>Campus security</li>
                    <li>Classroom emergency alerts</li>
                    <li>Student protection systems</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Retail & Commercial</h4>
                <ul>
                    <li>Store security, staff protection</li>
                    <li>Theft prevention</li>
                    <li>Customer safety alerts</li>
                    <li>Shopping center security</li>
                </ul>
            </div>
        </div>
    </section>

    
    <!-- Call to Action -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Enhance Security?</h2>
            <p>Contact us today for a customized panic alarm system solution</p>
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
