<?php
$pageTitle = "Industrial Wireless Transmitter Receiver | FORBIX SEMICON®";
$pageDescription = "Industrial wireless transmitter/receiver system with long range and multi-channel support. Perfect for automation and remote control applications.";
$pageKeywords = "wireless transmitter receiver, industrial automation, remote control system, multi-channel wireless, RF transmitter";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Wireless RF Transmitter Receiver, FORBIX SEMICON®",
    "image" => "https://www.forbixindia.com/assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg",
    "description" => "Industrial wireless communication modules for long-range data transmission. Features robust RF communication, multiple channel support, and industrial-grade reliability. Perfect for remote monitoring, data collection, and wireless communication applications.",
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
        "url" => "https://www.forbixindia.com/wireless-transceiver.php",
        "priceCurrency" => "USD",
        "price" => "180.00",
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
    "category" => "Communication Equipment",
    "keywords" => "wireless transceiver, RF communication, industrial wireless, data transmission, remote monitoring, wireless modules",
    "featureList" => array(
        "Long-Range Communication - Extended wireless data transmission",
        "Industrial Grade - Robust design for harsh environments",
        "Multiple Channels - Support for various communication protocols",
        "Remote Monitoring - Perfect for data collection applications",
        "Low Power Consumption - Energy-efficient operation",
        "Easy Integration - Simple interface for custom applications",
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
            "name" => "What is a wireless transceiver used for?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our wireless transceivers are used for industrial communication, remote monitoring, data collection, sensor networks, and any application requiring reliable wireless data transmission. They can transmit and receive data over long distances without the need for physical cables."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What is the range of the wireless transceiver?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The communication range varies from 500 meters to several kilometers depending on the model, antenna configuration, and environmental conditions. In industrial settings, typical range is 1-3 kilometers with line-of-sight communication."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What applications are wireless transceivers suitable for?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Wireless transceivers are ideal for industrial automation, remote monitoring systems, sensor networks, telemetry applications, SCADA systems, environmental monitoring, and any application requiring wireless data communication over extended distances."
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
            "telephone" => "+91  9742159846",
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
            "name" => "Wireless Transmitter/Receiver System",
            "item" => "https://www.forbixindia.com/wireless-transceiver.php"
        )
    )
);

$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/wireless-transceiver.php" />
    <meta property="og:type" content="product" />
    <meta property="og:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta property="og:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta property="og:url" content="https://www.forbixindia.com/wireless-transceiver.php" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Industrial Wireless Transmitter Receiver" />
    <meta property="og:site_name" content="FORBIX SEMICON®" />
    <meta property="product:price:amount" content="180.00" />
    <meta property="product:price:currency" content="USD" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta name="twitter:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta name="twitter:image" content="https://www.forbixindia.com/assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg" />
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
    .applications-content p{margin:8px 0;color:var(--muted);line-height:1.6}
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
    [data-theme="dark"] .feature-card li,
    [data-theme="dark"] .applications-content p{color:var(--muted)}
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
    <script type="application/ld+json">' . json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
    <script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
';

$skipCommonCss = true;
include __DIR__ . '/includes/header.php';
?>

<div class="page-container">
    <h1>Wireless RF Transmitter Receiver Solutions, FORBIX SEMICON</h1>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <p class="hero-subtitle">Manufactured by FORBIX SEMICON®</p>
            <p class="hero-description">
                Professional-grade wireless communication system with <strong>multi-channel support</strong> and <strong>long-range capability</strong>. Perfect for industrial automation, remote control applications, and system integration.
            </p>

            <p class="hero-description">
                Industrial wireless communication modules for long-range data transmission with robust RF communication, multiple channel support, and industrial-grade reliability. Perfect for remote monitoring, data collection, and wireless communication applications.
            </p>
            
            <!--
            <div class="hero-links">
                <a href="https://youtu.be/kUfGJqK9y7M" class="hero-link">
                    <span class="material-icons">play_circle</span>
                    System Demo Video
                </a>
                <a href="/docs/FBX5XT4-FBX5XR4-spec-4channel-transmitter-receiver.pdf" class="hero-link">
                    <span class="material-icons">description</span>
                    4 Channel Datasheet
                </a>
                <a href="/docs/FBX3T-FBX3R05-3-port-transmitter-receiver.pdf" class="hero-link">
                    <span class="material-icons">description</span>
                    3 Channel Datasheet
                </a>
                <a href="#applications" class="hero-link">
                    <span class="material-icons">business</span>
                    Applications
                </a>
            </div>
            -->
        </div>
    </section>

    <!-- Product Components Grid -->
    <section class="products-grid">
        <!-- 1. Multi Channel Wireless Transmitter Receiver -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg" alt="FORBIX SEMICON Multi Channel Wireless Transmitter Receiver">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Multi Channel Wireless Transmitter Receiver</h3>
                <p class="product-model">Model: FBXTR1-4CH | Range: 100-120 meters</p>
                <p class="product-description">
                    Multi-channel wireless communication system (1-4 channels) with easy integration for existing automation systems. 
                    Robust construction for harsh industrial environments with multiple transmitter configurations available. 
                    Features one-to-many and many-to-one communication modes with relay outputs for motor and equipment control. 
                    Includes digital and analog input/output options, encrypted wireless communication, and low power consumption with battery backup.
                </p>
                <h4>Setup Instructions:</h4>
                <p class="product-description">
                    Connect power supply (12V DC) to receiver unit<br>
                    Connect load devices to relay outputs<br>
                    Power on transmitter and receiver units<br>
                    Verify proper operation before final installation
                </p>
                <a href="device-wireless-rf-transmitter-receiver.php" class="btn btn-primary" aria-label="Read more about Multi Channel Wireless Transmitter Receiver">
                    Read More
                </a>
            </div>
        </div>

        <!-- 2. Remote Control Relay -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-wireless-remote-1port-relay.jpg" alt="FORBIX SEMICON Remote Control Relay">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Remote Control Relay</h3>
                <p class="product-model">Model: FBXRCR1 | Single Port Relay Control</p>
                <p class="product-description">
                    Single channel wireless remote control relay system for simple ON/OFF control applications. 
                    Perfect for controlling lights, motors, pumps, and other electrical equipment remotely. 
                    Features robust relay contacts rated for high current loads with wireless range up to 500 meters. 
                    Easy installation with plug-and-play operation, ideal for home automation and industrial control applications.
                </p>
                <a href="device-wireless-rf-transmitter-receiver.php" class="btn btn-primary" aria-label="Read more about Remote Control Relay">
                    Read More
                </a>
            </div>
        </div>

        <!-- 3. Single Transmitter Multiple Handheld Receivers -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-1-transmitter-multiple-handheld-receivers.jpg" alt="FORBIX SEMICON Single Transmitter Multiple Handheld Receivers">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Single Transmitter Multiple Handheld Receivers</h3>
                <p class="product-model">Model: FBXTR1M | One-to-Many Communication System</p>
                <p class="product-description">
                    Single transmitter with multiple handheld receiver units for one-to-many communication systems. 
                    Perfect for notification and alert systems where one transmitter needs to communicate with multiple receiver units simultaneously. 
                    Features expandable receiver network with 100-120 meters operating range per receiver. 
                    Free ISM band 380-480MHz RF frequency operation with reliable wireless communication for industrial and commercial applications.
                </p>
                <a href="device-wireless-rf-transmitter-receiver.php" class="btn btn-primary" aria-label="Read more about Single Transmitter Multiple Handheld Receivers">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <h2 class="section-title">Industrial Wireless Transmitter Receiver Specifications</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h3>Communication Range</h3>
                <ul>
                    <li>Multi-channel: 1-3 kilometers</li>
                    <li>Single relay: Up to 500 meters</li>
                    <li>Line-of-sight communication</li>
                    <li>Obstacle penetration capability</li>
                </ul>
            </div>
            <div class="feature-card">
                <h3>Power & Control</h3>
                <ul>
                    <li>12V DC power supply</li>
                    <li>Low power consumption</li>
                    <li>Battery backup support</li>
                    <li>High current relay contacts</li>
                </ul>
            </div>
            <div class="feature-card">
                <h3>Features</h3>
                <ul>
                    <li>Encrypted wireless communication</li>
                    <li>Multiple channel configurations</li>
                    <li>Easy pairing and setup</li>
                    <li>Industrial grade construction</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Applications Section -->
    <section class="features-section" id="applications">
        <h2 class="section-title">Wireless RF Transmitter Receiver Applications for Automation</h2>
        <div class="applications-content">
            <p><strong>Industrial automation, remote monitoring systems, sensor networks, telemetry applications</strong></p>
            <p>Wireless transceivers are ideal for industrial automation, remote monitoring systems, sensor networks, telemetry applications, SCADA systems, environmental monitoring, and any application requiring wireless data communication over extended distances.</p>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Implement Wireless Communication?</h2>
            <p>Contact our technical team for customized solutions and system integration support</p>
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