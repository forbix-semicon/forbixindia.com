<?php
$pageTitle = "Wireless Remote Motor Control System, FORBIX SEMICON®";
$pageDescription = "Advanced wireless remote motor control systems for pump control, water management, and industrial automation. Long range and short range solutions available.";
$pageKeywords = "wireless motor control, remote pump control, motor automation, GSM pump controller, water pump remote";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Wireless Motor Control System, FORBIX SEMICON®",
    "image" => "https://www.forbixindia.com/assets/images/2021/07/forbix-semicon-remote-pump-control-800x600.jpg",
    "description" => "Advanced wireless motor control system for pumps, industrial equipment, and automation. Features remote ON/OFF control, status monitoring, and emergency stop functionality. No wiring required, easy installation, perfect for water pumps and industrial motors.",
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
        "url" => "https://www.forbixindia.com/motor-control.php",
        "priceCurrency" => "USD",
        "price" => "75.00",
        "priceValidUntil" => "2026-12-31",
        "availability" => "https://schema.org/InStock",
        "seller" => array(
            "@type" => "Organization",
            "name" => "FORBIX SEMICON® Technologies Pvt Ltd",
            "url" => "https://www.forbixindia.com"
        ),
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
    "category" => "Industrial Equipment",
    "keywords" => "wireless motor control, pump control system, industrial automation, remote motor control, wireless switch",
    "featureList" => array(
        "Wireless Remote Control - Control motors from up to 300m away",
        "Emergency Stop Function - Instant motor shutdown capability",
        "Status Monitoring - Real-time motor operation feedback",
        "Water Pump Applications - Perfect for agricultural and residential pumps",
        "Industrial Grade - Suitable for harsh industrial environments",
        "No Wiring Required - Eliminates complex electrical installations",
        "CE Certified - Quality assured product"
    )
);

// FAQ Schema
$faqSchema = array(
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array(
        array(
            "@type" => "Question",
            "name" => "How does wireless motor control work?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our wireless motor control system uses secure RF communication to remotely control motors and pumps. The system includes a wireless transmitter (remote control) and receiver unit connected to the motor starter. When you press the remote button, it sends an encrypted signal to start or stop the motor instantly."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What is the range of the motor control system?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The wireless motor control system provides up to 300 meters range in open areas and 30-50 meters indoors. The range can be extended using signal repeaters for larger industrial facilities or agricultural applications."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What types of motors can be controlled?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our system can control various types of motors including water pumps, industrial motors, agricultural equipment, and any motor that uses standard contactors or motor starters. It's suitable for single-phase and three-phase motors up to specified power ratings."
            )
        )
    )
);

// Organization Schema
$organizationSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Organization",
    "name" => "FORBIX SEMICON® Technologies Pvt Ltd",
    "url" => "https://www.forbixindia.com",
    "logo" => "https://www.forbixindia.com/assets/images/2024/08/FORBIX-SEMICON-logo-1000x500-1.png",
    "contactPoint" => array(
        array(
            "@type" => "ContactPoint",
            "telephone" => "+91 9742159846",
            "contactType" => "sales",
            "availableLanguage" => "English"
        ),
        array(
            "@type" => "ContactPoint",
            "telephone" => "+91 9742159846",
            "contactType" => "customer service",
            "availableLanguage" => "English"
        )
    ),
    "address" => array(
        "@type" => "PostalAddress",
        "streetAddress" => "Building no. 118/4, KNO 40/326/74/87 & 41/74/86/327, 1st Cross, Bazaar Street, Uday Nagar (near Tin Factory)",
        "addressLocality" => "Bangalore",
        "addressRegion" => "Karnataka",
        "addressCountry" => "India",
        "postalCode" => "560016"
    ),
    "sameAs" => array(
        "https://www.forbixindia.com"
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
            "name" => "Wireless Motor Control System",
            "item" => "https://www.forbixindia.com/motor-control.php"
        )
    )
);

$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/motor-control.php" />
    <meta property="og:type" content="product" />
    <meta property="og:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta property="og:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta property="og:url" content="https://www.forbixindia.com/motor-control.php" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/2021/07/forbix-semicon-remote-pump-control-800x600.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Wireless Motor Control and Pump Controller" />
    <meta property="og:site_name" content="FORBIX SEMICON®" />
    <meta property="product:price:amount" content="75.00" />
    <meta property="product:price:currency" content="USD" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta name="twitter:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta name="twitter:image" content="https://www.forbixindia.com/assets/images/2021/07/forbix-semicon-remote-pump-control-800x600.jpg" />
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
    .hero-links{display:flex;flex-wrap:wrap;gap:10px;margin-top:8px}
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
    <h1>Wireless Remote Automatic Motor Controllers, FORBIX SEMICON</h1>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <p class="hero-subtitle">Manufactured by FORBIX SEMICON®</p>
            <p class="hero-description">
                Advanced wireless remote motor control systems for pump control, water management, and industrial automation. 
                Features long range and short range solutions with emergency stop functionality, GSM control capabilities, and automatic water level management. 
                Perfect for agricultural irrigation, industrial applications, and residential water supply systems.
            </p>
        </div>
    </section>

    <!-- Product Components Grid -->
    <section class="products-grid">
        <!-- 1. Short Range Direct Drive Motor Control -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/2021/05/forbix-semicon-remote-pump-controller-800x600.jpg" alt="FORBIX SEMICON Short Range Direct Drive Motor Control">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Short Range Direct Drive Motor Control</h3>
                <p class="product-model">Model: FBXNPS / FBXDPS | Range: 100-150m</p>
                <p class="product-description">
                    Remote control to turn ON/OFF the motor pump with range of 20-30 meters indoors and 100-120m outdoors. 
                    Features 1 relay contactor points for series connection, 30 Amps @ 220VAC potential free contactor points output. 
                    Advisable to connect load not more than 1-1.8KW with external 12volt supply and manual operation possible with RED button. 
                    Receiver directly drives motor through 30Amps internal relay for direct motor pump control applications.
                </p>
            </div>
        </div>

        <!-- 2. Automatic Water Level Controller -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/2021/05/forbix-semicon-automatic-wireless-pump-controller-1-800x600.jpg" alt="FORBIX SEMICON Automatic Water Level Controller">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Automatic Water Level Controller</h3>
                <p class="product-model">Model: FBXNAS / FBXDAS | Range: 100-150m</p>
                <p class="product-description">
                    Transmitter monitors water level in tank and keeps informing receiver at regular intervals for automatic pump start when tank is empty and automatic pump stop when tank is full. 
                    Receiver decides pump on/off based on water level with continuous monitoring and control process. 
                    Features upper and lower water mark detection for automatic water tank filling systems and overhead tank management.
                </p>
            </div>
        </div>

        <!-- 3. Motor Forward Reverse Control -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/2024/12/motor-forward-reverse-800x600-1.jpg" alt="FORBIX SEMICON Motor Forward Reverse Control">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Motor Forward Reverse Control</h3>
                <p class="product-model">Model: FBXFRC | Range: 100-150m, AC/DC Compatible</p>
                <p class="product-description">
                    Wireless RF Remote Control for direction control with range of 100-150m outdoors and 30-40m indoors. 
                    Compatible with both AC motors (230VAC) and DC motors, suitable for motors up to 2 HP power rating. 
                    Features 30-ampere relays handling up to 230VAC, robust and reliable for driving small and medium motors. 
                    Perfect for conveyor belts, gate mechanisms, hoists, and reversible motor applications.
                </p>
            </div>
        </div>

        <!-- 4. GSM SMS Pump Controller -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/2021/08/forbix-semicon-gsm-pump-controller-800x600.jpg" alt="FORBIX SEMICON GSM SMS Pump Controller">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">GSM SMS Pump Controller</h3>
                <p class="product-model">Model: FBXBG1 | Unlimited Range via GSM Network</p>
                <p class="product-description">
                    Control motor pump from any distance via SMS using GSM technology, bounded by network availability. 
                    Supports both DOL starter (more than 2HP) and direct drive (less than 2HP) with no prior configuration needed. 
                    SMS commands include start motor, stop motor, and check status with acknowledgement SMS sent back to user. 
                    Features real-time feedback and transparency with 12 volt power supply operation for remote agricultural irrigation and industrial pump monitoring.
                </p>
            </div>
        </div>

        <!-- 5. Long Range Wireless Pump Control -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/2021/05/forbix-semicon-long-range-pump-controller-800x600.jpg" alt="FORBIX SEMICON Long Range Wireless Pump Control">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Long Range Wireless Pump Control</h3>
                <p class="product-model">Model: FBXDAL | Range: 3-4 Kilometers</p>
                <p class="product-description">
                    Remarkable signal range of 3 to 4 kilometers with handheld remote control that triggers transmitter unit using advanced RF communication technology. 
                    Features robust signal transmission in challenging terrains with receiver positioned near motor pump. 
                    Controls motor operations including start, stop, and adjust settings, efficient for agricultural and industrial applications. 
                    Perfect for long-distance agricultural irrigation, remote industrial sites, and distant water supply systems.
                </p>
            </div>
        </div>
    </section>

    <!-- System Features Section -->
    <section class="features-section">
        <h2 class="section-title">Wireless Remote Motor Control System Features</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Remote Control Range</h4>
                <ul>
                    <li>Short range: 100-150m outdoors</li>
                    <li>Long range: 3-4 kilometers</li>
                    <li>GSM: Unlimited range</li>
                    <li>Indoor: 20-40 meters</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Control Options</h4>
                <ul>
                    <li>Wireless RF remote control</li>
                    <li>GSM SMS commands</li>
                    <li>Manual operation buttons</li>
                    <li>Automatic level control</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Motor Compatibility</h4>
                <ul>
                    <li>AC motors (230VAC)</li>
                    <li>DC motors</li>
                    <li>Up to 2HP power rating</li>
                    <li>30-ampere relay capacity</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Advanced Features</h4>
                <ul>
                    <li>Emergency stop function</li>
                    <li>Status monitoring</li>
                    <li>Water level detection</li>
                    <li>Forward/reverse control</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Power & Installation</h4>
                <ul>
                    <li>12V power supply operation</li>
                    <li>No complex wiring required</li>
                    <li>Industrial grade components</li>
                    <li>Easy installation setup</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Applications</h4>
                <ul>
                    <li>Agricultural irrigation</li>
                    <li>Industrial automation</li>
                    <li>Water supply systems</li>
                    <li>Pump control systems</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Applications Section -->
    <section class="features-section">
        <h2 class="section-title">Remote Motor Control Applications for Pump & Water Management</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Agricultural Applications</h4>
                <ul>
                    <li>Irrigation pump control</li>
                    <li>Remote field water management</li>
                    <li>Automated watering systems</li>
                    <li>Crop irrigation scheduling</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Industrial Automation</h4>
                <ul>
                    <li>Motor control systems</li>
                    <li>Conveyor belt control</li>
                    <li>Automated gate mechanisms</li>
                    <li>Hoisting equipment control</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Water Supply Systems</h4>
                <ul>
                    <li>Residential water pumps</li>
                    <li>Overhead tank management</li>
                    <li>Water level automation</li>
                    <li>Commercial water supply</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Remote Monitoring</h4>
                <ul>
                    <li>GSM-based remote control</li>
                    <li>Long-distance applications</li>
                    <li>Status feedback systems</li>
                    <li>Emergency stop capabilities</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Automate Your Motor Control?</h2>
            <p>Contact us today for a customized wireless motor control solution</p>
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
