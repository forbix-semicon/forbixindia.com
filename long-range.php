<?php
$pageTitle = "Long Range RF Wireless Alarms 3-4Kms | FORBIX SEMICON®";
$pageDescription = "Industrial long range wireless alarm system with 1-4km range. Perfect for defense, perimeter security, and industrial automation applications.";
$pageKeywords = "long range wireless alarm, industrial remote control, perimeter security, defense alarm system, wireless transmitter";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Long Range Wireless Remote Control System, FORBIX SEMICON®",
    "image" => "https://www.forbixindia.com/assets/images/2024/08/Wireless-Long-Range-Remote-Control-1000x400-1.jpg",
    "description" => "Extended range wireless remote control system for industrial and agricultural applications. Features up to 2km communication range, multiple channel control, and robust industrial-grade design. Perfect for remote equipment control and automation.",
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
        "url" => "https://www.forbixindia.com/long-range.php",
        "priceCurrency" => "USD",
        "price" => "380.00",
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
    "keywords" => "long range remote control, wireless industrial control, agricultural automation, remote equipment control, extended range wireless",
    "featureList" => array(
        "Extended Range - Up to 2km communication distance",
        "Multiple Channels - Control multiple devices independently",
        "Industrial Grade - Weather-resistant and durable design",
        "Agricultural Applications - Perfect for farm equipment control",
        "Secure Communication - Encrypted RF signals",
        "Battery Operated - Long-lasting remote control battery",
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
            "name" => "What is the maximum range of the long range remote control?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our long range wireless remote control system can achieve up to 2 kilometers range in open areas with line-of-sight communication. The actual range depends on terrain, obstacles, and environmental conditions. In industrial settings, typical range is 500m to 1km."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What applications is the long range system suitable for?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The long range remote control system is ideal for agricultural equipment, industrial machinery, water pumps, irrigation systems, gates and barriers, mining equipment, and any application requiring remote control over extended distances."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "How many devices can be controlled simultaneously?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our long range system supports multiple channels, allowing you to control several devices independently from a single remote. The exact number of channels depends on the specific model, with options for 2, 4, 8, or more channels."
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
            "name" => "Long Range Wireless Remote Control System",
            "item" => "https://www.forbixindia.com/long-range.php"
        )
    )
);

$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/long-range.php" />
    <meta property="og:type" content="product" />
    <meta property="og:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta property="og:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta property="og:url" content="https://www.forbixindia.com/long-range.php" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/2024/08/Wireless-Long-Range-Remote-Control-1000x400-1.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Long Range Wireless Remote Control" />
    <meta property="og:site_name" content="FORBIX SEMICON®" />
    <meta property="product:price:amount" content="380.00" />
    <meta property="product:price:currency" content="USD" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta name="twitter:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta name="twitter:image" content="https://www.forbixindia.com/assets/images/2024/08/Wireless-Long-Range-Remote-Control-1000x400-1.jpg" />
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
        .hero-content{text-align:center}
        .hero-title{font-size:clamp(20px,3.6vw,34px);margin:0;color:#ffffff}
        .hero-subtitle{margin:0;color:rgba(255,255,255,0.92);font-weight:600}
        .hero-description{margin:0;color:rgba(255,255,255,0.95);line-height:1.5}
        .hero-links{display:flex;flex-wrap:wrap;gap:10px;margin-top:8px;justify-content:center}
        .hero-link{display:inline-flex;align-items:center;gap:8px;padding:8px 12px;border-radius:999px;background:rgba(255,255,255,0.12);font-weight:600;color:#ffffff;border:1px solid rgba(255,255,255,0.12)}
        .hero-link .material-icons,.hero-link .icon{background:rgba(255,255,255,0.12);color:#ffffff}
        .separator-line{height:1px;background:linear-gradient(90deg,#e6eef2,transparent);margin:12px 0;border-radius:2px}
        .products-grid{display:grid;grid-template-columns:repeat(1,1fr);gap:18px;margin-top:20px}
        .product-card{display:flex;flex-direction:column;background:var(--card);border-radius:12px;overflow:hidden;box-shadow:0 6px 18px rgba(16,24,40,0.06)}
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
        .section-title{font-size:20px;margin:6px 0 12px}
        .features-grid{display:grid;grid-template-columns:repeat(1,1fr);gap:12px}
        .feature-card{background:var(--card);padding:12px;border-radius:10px;display:flex;gap:12px;align-items:flex-start;flex-direction:column}
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
        .material-icons,.icon{display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:6px;background:rgba(2,6,23,0.03);font-size:16px}
        [data-theme="dark"]{
            --bg:#374151;
            --card:#1f2937;
            --muted:#cbd5e1;
            --accent:#7dd3fc;
            --card-contrast:rgba(255,255,255,0.04);
        }
        [data-theme="dark"] html,[data-theme="dark"] body{background:var(--bg) !important;color:#e6eef6 !important}
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
        [data-theme="dark"] .material-icons,[data-theme="dark"] .icon{background:var(--card-contrast);color:#e6eef6}
        [data-theme="dark"] h1,[data-theme="dark"] h2,[data-theme="dark"] h3,[data-theme="dark"] h4,[data-theme="dark"] .section-title,[data-theme="dark"] .product-title{color:#e6eef6}
        [data-theme="dark"] .btn.btn-primary{background:#e6eef2 !important;color:#04203a !important}
        [data-theme="dark"] .btn.btn-primary .icon{color:#04203a !important;fill:currentColor}
        [data-theme="dark"] .btn.btn-secondary{background:transparent !important;border-color:#7dd3fc !important;color:#7dd3fc !important}
        [data-theme="dark"] .btn.btn-secondary .icon{color:#7dd3fc !important;fill:currentColor}
        </style>
        <script type="application/ld+json">' . json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
        <script type="application/ld+json">' . json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
        <script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
';

$skipCommonCss = true;
include __DIR__ . '/includes/header.php';
?>

<div class="page-container">
    <h1>Advanced Wireless RF Long Range Solutions, FORBIX SEMICON</h1>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <p class="hero-subtitle">Manufactured by FORBIX SEMICON®</p>
            <p class="hero-description">
                Industrial-grade wireless alarm system with <strong>1-4km signal range</strong>. Perfect for defense, perimeter security, industrial automation, and remote monitoring applications.
                Extended range wireless remote control system for industrial and agricultural applications with multiple channel control and robust industrial-grade design.
            </p>

            <div class="hero-links">
                <a href="https://youtu.be/w6JSvwHKgpE" target="_blank" class="hero-link" aria-label="Watch Video">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                    Watch Video
                </a>
                <a href="docs/Brochure-2024-FORBIX-SEMICON.pdf" class="hero-link" aria-label="Product Catalog">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16h12a2 2 0 0 0 2-2V8l-6-6zM13 9V3.5L18.5 9H13z"/></svg>
                    Product Catalog
                </a>
            </div>

            <div class="separator-line"></div>

            <p class="hero-description">
                The long range remote control system is ideal for agricultural equipment, industrial machinery, water pumps, irrigation systems, gates and barriers, mining equipment, and any application requiring remote control over extended distances. Our systems feature encrypted wireless communication and weatherproof design for harsh environments.
            </p>
        </div>
    </section>

    <!-- Product Components Grid -->
    <section class="products-grid">
        <!-- 1. Long Range Remote Controller -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/long-range/forbix-semicon-long-range-remote-controller.jpg" alt="FORBIX SEMICON Long Range Remote Controller">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Long Range Remote Controller</h3>
                <p class="product-model">Model: FBX7xx Series | Range: 1-4 Kilometers</p>
                <p class="product-description">
                    Wireless alarm system with 1-4km range for industrial grade construction and harsh environments. 
                    Multiple transmitter/receiver configurations with battery and AC powered models available. 
                    Ideal for defense and perimeter security applications with weatherproof and tamper-resistant design. 
                    Features configurable alarm patterns, encrypted wireless communication, and low power consumption with long battery life.
                </p>
            </div>
        </div>

        <!-- 2. Long Range Alarm Configuration -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/long-range/forbix-semicon-long-range-alarm-configuration.jpg" alt="FORBIX SEMICON Long Range Alarm Configuration">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">Long Range Alarm Configuration System</h3>
                <p class="product-model">Model: FBX7xx Series | Range: 1-4 Kilometers</p>
                <p class="product-description">
                    Advanced alarm configuration system for remote motor and pump control applications with weatherproof and tamper-resistant design. 
                    Features configurable alarm patterns and timing with encrypted wireless communication for secure operation. 
                    Perfect for defense systems, perimeter security, and industrial automation with ultra long range capabilities up to 4 kilometers.
                </p>
            </div>
        </div>
    </section>

    <!-- System Features Section -->
    <section class="features-section system-features">
        <h2 class="section-title">Long Range Wireless Alarm System Features</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h3>Ultra Long Range</h3>
                <p>1-4 kilometers communication distance with line-of-sight</p>
            </div>
            <div class="feature-card">
                <h3>Industrial Grade</h3>
                <p>IP65 weatherproof rating for harsh environments</p>
            </div>
            <div class="feature-card">
                <h3>Multiple Channels</h3>
                <p>Control multiple devices independently from single remote</p>
            </div>
            <div class="feature-card">
                <h3>Long Battery Life</h3>
                <p>2-5 years battery life with low power consumption</p>
            </div>
            <div class="feature-card">
                <h3>Secure Communication</h3>
                <p>Encrypted RF signals for secure operation</p>
            </div>
            <div class="feature-card">
                <h3>CE Certified</h3>
                <p>Quality assured product with international certification</p>
            </div>
        </div>
    </section>

    <!-- Key Features & Specifications Section -->
    <section class="features-section">
        <h2 class="section-title">Long Range RF Wireless Control Specifications</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Signal Range</h4>
                <ul>
                    <li>Ultra long range: 1-4 kilometers</li>
                    <li>Line of sight communication</li>
                    <li>Obstacle penetration capability</li>
                    <li>Repeater support for extended range</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Power Options</h4>
                <ul>
                    <li>220V AC powered receivers</li>
                    <li>12V DC backup options</li>
                    <li>Solar panel compatibility</li>
                    <li>Battery life: 2-5 years</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Environmental</h4>
                <ul>
                    <li>IP65 weatherproof rating</li>
                    <li>Operating temp: -40°C to +85°C</li>
                    <li>Shock and vibration resistant</li>
                    <li>UV and corrosion protection</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Applications</h4>
                <ul>
                    <li>Defense &amp; perimeter security</li>
                    <li>Industrial automation</li>
                    <li>Agricultural equipment control</li>
                    <li>Remote monitoring systems</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Implement Long Range Control?</h2>
            <p>Contact our technical team for customized solutions and installation support.</p>
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
