<?php
$pageTitle = "Wireless Attendant Peon Call Bell| FORBIX SEMICON®";
$pageDescription = "Advanced wireless peon call bell system for offices, restaurants, hotels, and cafes. No wiring required, instant staff communication with multi-zone support.";
$pageKeywords = "wireless peon call bell, office call system, restaurant pager, staff call button, wireless waiter call";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Wireless Peon Call Bell System, FORBIX SEMICON®",
    "image" => "https://www.forbixindia.com/assets/images/gallery/peon-call-bell/forbix-semicon-wireless-peon-call-bell-system.jpg",
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
        "url" => "https://www.forbixindia.com/peon-call.php",
        "priceCurrency" => "USD",
        "price" => "85.00",
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
    "category" => "Office Equipment"
);

// FAQ Schema
$faqSchema = array(
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array(
        array(
            "@type" => "Question",
            "name" => "How does a wireless peon call bell work?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The system uses encrypted RF signals in ISM band to transmit alerts wirelessly. When a call button is pressed: 1) The signal is sent to the central receiver; 2) An audible alarm and visual indicator activate instantly; 3) Staff can respond without physical wiring or delays. The system operates on battery power with no maintenance required."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What is the communication range of the peon call bell?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Standard range: 30-40m indoors (100-300m outdoors). Signals penetrate walls and multiple floors effectively. Range can be extended further with optional signal repeaters for large facilities or multi-story buildings."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Where can peon call bell systems be used?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our peon call bell systems are ideal for offices, hospitals, restaurants, hotels, senior living facilities, and any workplace requiring efficient staff communication. The system is suitable for both small offices and large corporate environments."
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
            "name" => "Wireless Peon Call Bell System",
            "item" => "https://www.forbixindia.com/peon-call.php"
        )
    )
);

$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/peon-call.php" />
    <meta property="og:type" content="product" />
    <meta property="og:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta property="og:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta property="og:url" content="https://www.forbixindia.com/peon-call.php" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/peon-call/forbix-semicon-wireless-peon-call-bell-system.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Wireless Peon Call Bell System" />
    <meta property="og:site_name" content="FORBIX SEMICON®" />
    <meta property="product:price:amount" content="85.00" />
    <meta property="product:price:currency" content="USD" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta name="twitter:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta name="twitter:image" content="https://www.forbixindia.com/assets/images/gallery/peon-call/forbix-semicon-wireless-peon-call-bell-system.jpg" />
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
    <h1>Reliable Affordable Wireless Peon Call Bell, FORBIX SEMICON</h1>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <p class="hero-subtitle">Manufactured by FORBIX SEMICON®</p>
            <p class="hero-description">
              Advanced wireless peon call bell system for offices, restaurants, hotels, and cafes. Our attendant calling systems provide instant staff communication without requiring any complex wiring or installation.
            </p>

            <div class="hero-links">
                <a href="https://youtu.be/1mbOSIlU7Hs" target="_blank" class="hero-link" aria-label="System Demo">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                    System Demo
                </a>
                <a href="installation.php" class="hero-link" aria-label="Office Installation">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20 6h-4V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2H4v14h16V6zm-10 0V4h4v2h-4z"/></svg>
                    Office Installation
                </a>
                <a href="https://youtu.be/uOxzpqVs9AY" target="_blank" class="hero-link" aria-label="Restaurant Setup">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                    Restaurant Setup
                </a>
                <a href="docs/Brochure-2024-FORBIX-SEMICON.pdf" target="_blank" class="hero-link" aria-label="Product Catalog">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16h12a2 2 0 0 0 2-2V8l-6-6zM13 9V3.5L18.5 9H13z"/></svg>
                    Product Catalog
                </a>
            </div>

            <div class="separator-line"></div>

            <p class="hero-description">
              Perfect for office buildings, senior living facilities, restaurants, and hotels. Features buzzing sound with volume control, extended antenna, cross-floor signal capability, and customized configurations with TFT displays and digital alpha-numeric indicators.
            </p>

            <p class="hero-description">
              Signal range: 30-40 meters indoors, over 100 meters outdoors. Supports 1-20 indicator sets with customized names and multi-color status indicators for efficient staff coordination.
            </p>
            
        </div>
    </section>

    <!-- Product Components Grid -->
    <section class="products-grid">
        <!-- 1. Caregiver Call System -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/peon-call-bell/forbix-semicon-wireless-attendant-calling-system-6-remotes.jpg" alt="FORBIX SEMICON Caregiver Call System">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Caregiver Call System</h3>
                <p class="product-model">Model: FBXWACS01-06</p>
                <p class="product-description">
                    Compact 1-6 remote call bell devices designed for caregiver and patient communication systems. 
                    Features wireless transmission, battery-operated remotes, and instant alert capabilities. 
                    Perfect for healthcare facilities, senior living, and assisted care environments requiring reliable staff coordination.
                </p>
                <a href="buy.php" class="btn btn-primary" aria-label="Read more about Caregiver Call System">
                    Read More
                </a>
            </div>
        </div>

        <!-- 2. Peon Call Bell -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/peon-call-bell/forbix-semicon-peon-call-bell-8-remotes-system.jpg" alt="FORBIX SEMICON Peon Call Bell System">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Peon Call Bell</h3>
                <p class="product-model">Model: FBXWACS07-09</p>
                <p class="product-description">
                    Advanced 7-9 calling point sets for office and commercial environments. 
                    Features extended range, multiple calling points, and reliable wireless communication. 
                    Ideal for offices, hotels, and businesses requiring efficient manager-to-staff coordination and instant response systems.
                </p>
                <a href="buy.php" class="btn btn-primary" aria-label="Read more about Peon Call Bell">
                    Read More
                </a>
            </div>
        </div>

        <!-- 3. Wireless Attendant Call Bell System -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/peon-call-bell/forbix-semicon-attendant-calling-system.jpg" alt="FORBIX SEMICON Wireless Attendant Call Bell System">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Wireless Attendant Call Bell System</h3>
                <p class="product-model">Model: FBXWACS10-20</p>
                <p class="product-description">
                    Comprehensive 10-20 indicator sets for large facilities and multi-zone environments. 
                    Features color-coded indicators, buzzing alerts with volume control, and cross-floor signal capability. 
                    Perfect for large offices, hospitals, hotels, and commercial facilities requiring extensive staff communication networks.
                </p>
                <a href="buy.php" class="btn btn-primary" aria-label="Read more about Wireless Attendant Call Bell System">
                    Read More
                </a>
            </div>
        </div>

        <!-- 4. Customized Calling System -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/peon-call-bell/forbix-semicon-peon-call-bell-3-remote-battery-operated-receiver.jpg" alt="FORBIX SEMICON Customized Calling System">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Customized Calling System</h3>
                <p class="product-model">Model: FBXTWACS, FBXHWACS, FBXSCS</p>
                <p class="product-description">
                    Specialized systems with TFT displays, multiple staff calling devices, and handheld pagers for restaurants and hotels. 
                    Features digital alpha-numeric displays, customized names for indications, portable receivers, and flexible configurations. 
                    Ideal for restaurants, hotels, and specialized environments requiring tailored communication solutions.
                </p>
                <a href="buy.php" class="btn btn-primary" aria-label="Read more about Customized Calling System">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- System Features Section -->
    <section class="features-section">
        <h2 class="section-title">Wireless Peon Call Bell System Features & Specifications</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Signal Range</h4>
                <ul>
                    <li>Indoor: 30-40 meters</li>
                    <li>Outdoor: over 100 meters</li>
                    <li>Cross-floor signal capability</li>
                    <li>Repeater support for enhancement</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Device Options</h4>
                <ul>
                    <li>1-6 remote call bell devices</li>
                    <li>7-9 calling point sets</li>
                    <li>10-20 indicator sets</li>
                    <li>Customized configurations</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Alert Features</h4>
                <ul>
                    <li>LED color indicators</li>
                    <li>Buzzing sound with volume control</li>
                    <li>Digital alpha-numeric display</li>
                    <li>Cancellation remotes</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Power Options</h4>
                <ul>
                    <li>220AC/12VDC adapter power</li>
                    <li>Battery operated transmitters</li>
                    <li>Portable handheld receivers</li>
                    <li>Long battery life remotes</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Installation</h4>
                <ul>
                    <li>No wiring required</li>
                    <li>Table top or wall mounting</li>
                    <li>Easy setup & configuration</li>
                    <li>Extended antenna options</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Customization</h4>
                <ul>
                    <li>Custom names for indications</li>
                    <li>Multi-color status indicators</li>
                    <li>TFT display receivers</li>
                    <li>Flexible configurations</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Applications Section -->
    <section class="features-section">
        <h2 class="section-title">Wireless Attendant Call System Applications & Use Cases</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Office Buildings</h4>
                <ul>
                    <li>Manager-peon communication</li>
                    <li>Supervisor calling staff</li>
                    <li>Inter-department coordination</li>
                    <li>Meeting room assistance</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Senior Living</h4>
                <ul>
                    <li>Elderly care assistance</li>
                    <li>Assisted living facilities</li>
                    <li>Emergency response systems</li>
                    <li>Caregiver coordination</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Restaurants</h4>
                <ul>
                    <li>Waiter paging systems</li>
                    <li>Kitchen-staff communication</li>
                    <li>Table service coordination</li>
                    <li>Order ready notifications</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Hotels</h4>
                <ul>
                    <li>Room service coordination</li>
                    <li>Housekeeping management</li>
                    <li>Guest assistance systems</li>
                    <li>Front desk communication</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Salient Features Section -->
    <section class="features-section">
        <h2 class="section-title">System Capabilities</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Advanced Features</h4>
                <ul>
                    <li>Buzzing sound with volume control and extended antenna</li>
                    <li>3 color status indicator (one for each remote button)</li>
                    <li>Portable receiver for 3 managers and 1 peon</li>
                    <li>Device capable of sending signals across floors</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Professional Applications</h4>
                <ul>
                    <li>Doctor at OPD calling nurse or next patient</li>
                    <li>Supervisor can call 3-8 different staff attendants</li>
                    <li>Wireless paging system for restaurant waiters</li>
                    <li>TFT receivers with digital alpha-numeric display</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Enhanced Functionality</h4>
                <ul>
                    <li>Peon call bell with additional cancellation remotes</li>
                    <li>Signal booster range and range enhancer</li>
                    <li>Customized names for every indication on demand</li>
                    <li>Multiple handheld pager devices</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Power & Installation</h4>
                <ul>
                    <li>Runs on 220AC/12VDC adapter power supply</li>
                    <li>Remote and Pull Chord call buttons (battery operated)</li>
                    <li>Signal range can be increased with repeaters</li>
                    <li>Easy setup with no wiring requirements</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Improve Staff Communication?</h2>
            <p>Contact us today for a customized peon call bell system solution</p>
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
