<?php
$pageTitle = "Token Display & Queue Management System | FORBIX SEMICON®";
$pageDescription = "Advanced token display & queue management system for banks, hospitals, service centers, and government offices. Wireless and wired options with LED displays and audio announcements.";
$pageKeywords = "token display system, queue management, digital queue, bank token system, hospital queue display, wireless token printer";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Token Display & Queue Management System, FORBIX SEMICON®",
    "image" => "https://www.forbixindia.com/assets/images/gallery/token-display/forbix-semicon-Queue-Mamangement-System-Token-Display.jpg",
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
        "url" => "https://www.forbixindia.com/token-display.php",
        "priceCurrency" => "USD",
        "price" => "145.00",
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
    "category" => "Business Equipment",
    "keywords" => "queue management system, token display, digital queue, customer flow management, wireless token dispenser",
    "featureList" => array(
        "LCD TV Monitor Display - Clear digital token display",
        "Wireless Token Dispensers - No wiring between dispensers and display",
        "Customer Flow Management - Efficient queue organization",
        "Multi-counter Support - Manage multiple service counters",
        "Bank & Hospital Ready - Perfect for service centers",
        "Easy Installation - Plug-and-play setup",
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
            "name" => "How does the wireless queue management system work?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our wireless queue management system uses token dispensers that communicate wirelessly with LCD TV displays. Customers take a token from the dispenser, and their number appears on the display screen. Staff can call the next customer using a wireless remote, updating the display instantly without any wiring."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What is the range of the token display system?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The wireless communication range is typically 30-50 meters indoors, which is sufficient for most banks, hospitals, and service centers. The range can be extended with signal repeaters for larger facilities."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Where can queue management systems be used?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Our queue management systems are ideal for banks, hospitals, government offices, service centers, retail stores, restaurants, and any business that needs to manage customer queues efficiently. The system helps reduce waiting time and improves customer satisfaction."
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
            "telephone" => "+91 974259846",
            "contactType" => "sales",
            "availableLanguage" => "English"
        ),
        array(
            "@type" => "ContactPoint",
            "telephone" => "+91 974259846",
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
            "name" => "Token Display & Queue Management System",
            "item" => "https://www.forbixindia.com/token-display.php"
        )
    )
);

$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/token-display.php" />
    <meta property="og:type" content="product" />
    <meta property="og:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta property="og:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta property="og:url" content="https://www.forbixindia.com/token-display.php" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/token-display/forbix-semicon-queue-management-token-display-wireless.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Token Display & Queue Management System" />
    <meta property="og:site_name" content="FORBIX SEMICON®" />
    <meta property="product:price:amount" content="145.00" />
    <meta property="product:price:currency" content="USD" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta name="twitter:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta name="twitter:image" content="https://www.forbixindia.com/assets/images/gallery/token-display/forbix-semicon-queue-management-token-display-wireless.jpg" />
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
    <script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
';

$skipCommonCss = true;
include __DIR__ . '/includes/header.php';
?>

<div class="page-container">
    <h1>Token Display & Queue Management System, FORBIX SEMICON</h1>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <p class="hero-subtitle">Manufactured by FORBIX SEMICON®</p>
            <p class="hero-description">
                Advanced wireless and wired queue management solutions designed for banks, hospitals, service centers, and government offices. 
                Our token display systems feature large LED displays, configurable queue numbers, audio-visual announcements, and easy setup 
                for efficient customer flow management and reduced waiting times.
            </p>
        </div>
    </section>

    <!-- Product Components Grid -->
    <section class="products-grid">


        <!-- 1. 6 Queue Token Display Device -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/token-display/forbix-semicon-queue-management-token-display-wireless.jpg" alt="FORBIX SEMICON 6 Queue Token Display Device">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">6 Queue Token Display Device</h3>
                <p class="product-model">Model: FBXQTD-06</p>
                <p class="product-description">
                    Advanced wireless token display device supporting up to 6 queue management systems simultaneously. 
                    Features large LED display with configurable queue numbers, audio-visual announcements, and remote control operation. 
                    Perfect for banks, hospitals, and service centers requiring multiple queue coordination and efficient customer flow management.
                </p>
                <a href="product-token-display-6-queue.php" class="btn btn-primary" aria-label="Read more about 6 Queue Token Display Device">
                    Read More
                </a>
            </div>
        </div>

        <!-- 2. 6 Button Token Printer -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="image-gallery">
                    <div class="featured-image">
                        <img src="assets/images/gallery/token-display/forbix-semicon-token-printer-6-queues.jpg" alt="FORBIX SEMICON 6 Button Token Printer">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-title">6 Button Token Printer</h3>
                <p class="product-model">Model: FBXTP-06</p>
                <p class="product-description">
                    Professional thermal token printer with 6-button interface for multiple queue management. 
                    Features high-quality thermal paper printing, customizable token formats, fast printing speed, and easy paper loading. 
                    Ideal for government offices, DMV centers, and large service facilities requiring organized token dispensing and queue control.
                </p>
                <a href="buy.php" class="btn btn-primary" aria-label="Read more about 6 Button Token Printer">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- System Features Section -->
    <section class="features-section">
        <h2 class="section-title">Token Display & Queue Management System Features</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Display Options</h4>
                <ul>
                    <li>Large LED display</li>
                    <li>Remote control operation</li>
                    <li>Multiple queue support</li>
                    <li>High visibility numbers</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Wireless and Wired Options</h4>
                <ul>
                    <li>Wireless communication available</li>
                    <li>Wired options for reliability</li>
                    <li>Flexible installation methods</li>
                    <li>No complex wiring required</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Configurable Settings</h4>
                <ul>
                    <li>Configurable queue numbers</li>
                    <li>Custom announcements</li>
                    <li>Programmable display messages</li>
                    <li>Multiple language support</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Multiple Token Management</h4>
                <ul>
                    <li>Multiple token management</li>
                    <li>Queue priority settings</li>
                    <li>Token tracking system</li>
                    <li>Real-time queue monitoring</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Audio-Visual Features</h4>
                <ul>
                    <li>Audio-visual announcements</li>
                    <li>Voice call notifications</li>
                    <li>Visual indicator lights</li>
                    <li>Sound level controls</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Easy Operation</h4>
                <ul>
                    <li>Easy setup and operation</li>
                    <li>User-friendly interface</li>
                    <li>Minimal training required</li>
                    <li>Reliable performance</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Applications Section -->
    <section class="features-section">
        <h2 class="section-title">Queue Management System Applications for Banks & Hospitals</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h4>Hospitals</h4>
                <ul>
                    <li>Patient queue management</li>
                    <li>OPD counters</li>
                    <li>Laboratory services</li>
                    <li>Emergency department</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Banks</h4>
                <ul>
                    <li>Customer queue management</li>
                    <li>Multi-counter operations</li>
                    <li>Priority banking services</li>
                    <li>Cash counter management</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Service Centers</h4>
                <ul>
                    <li>Customer service management</li>
                    <li>Technical support queues</li>
                    <li>Retail service counters</li>
                    <li>Warranty claim centers</li>
                </ul>
            </div>
            <div class="feature-card">
                <h4>Government Offices</h4>
                <ul>
                    <li>Public queue management</li>
                    <li>Document processing</li>
                    <li>License services</li>
                    <li>Registration counters</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Streamline Your Queue Management?</h2>
            <p>Contact us today for a customized token display and queue management system solution</p>
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