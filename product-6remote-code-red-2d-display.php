<?php
$pageTitle = "Buy 6 Remotes Code Red Digital Display | FORBIX SEMICON®";
$pageDescription = "FORBIX SEMICON's Wireless Code Red System with 6 remotes & digital display. Ensure instant, reliable emergency alerts for enhanced safety & control.";

// Define products and their prices
$products = [
    'code-red-6remote' => [
        'name' => '6 Remote Code Red 2-Digit Display System',
        'base_price' => 38500,
        'images' => [
            [
                'url' => 'assets/images/gallery/panic-alarm/forbix-semicon-code-red-2d-display-6remotes.jpg',
                'caption' => '6 Remote Code Red 2D Display System'
            ],
            [
                'url' => 'assets/images/gallery/panic-alarm/forbix-semicon-code-red-2d-display-6remotes-adapter.jpg',
                'caption' => '6 Remote with Adapter Set'
            ],
            [
                'url' => 'assets/images/gallery/panic-alarm/forbix-semicon-code-red-2d-display.jpg',
                'caption' => 'Code Red 2D Display Unit'
            ],
            [
                'url' => 'assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-gated-community-6-houses.jpg',
                'caption' => 'Code Red 2D Display Unit'
            ],
            [
                'url' => 'assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-gated-community-system.jpg',
                'caption' => 'Code Red 2D Display Unit'
            ]  
        ],
        'description' => 'Enhance your security with our reliable Wireless Panic Alarm System. Perfect for homes, offices, and commercial spaces.

• Complete Emergency System: Includes 6 wireless remote controllers and 1 advanced 2D display unit
• Clear Visual Display: High-contrast 2D display shows emergency status and remote ID
• Multi-Remote Support: Handles up to 6 remote controllers simultaneously
• Code Red Technology: Dedicated emergency alert system for critical situations
• Long Range Operation: Up to 150-meter range in open space
• Advanced RF Technology: Latest wireless technology ensures reliable communication
• Easy Installation: No complex wiring needed - fully wireless operation
• Durable Design: Industrial-grade components suitable for professional environments
• Battery Operated Remotes: Long-lasting batteries included for all remotes
• Instant Response: Immediate alert display upon button press
• Real-time Monitoring: Display shows which remote triggered the alert
• Expandable System: Can add more remotes or displays (contact for custom requirements)

• Free Technical Support
• 1-Year Warranty
• Installation Guide Included
• All Accessories Included'
    ]
];

// Shipping rates per region
$shipping_rates = [
    'india' => 15.00,
    'international' => 100.00 // Flat rate for all international shipping
];

// Prepare per-page head tags (canonical, Open Graph, structured data)
$product = $products['code-red-6remote'];

// Product schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => $product['name'],
    "image" => isset($product['images'][0]['url']) ? 'https://www.forbixindia.com/' . ltrim($product['images'][0]['url'], '/') : 'https://www.forbixindia.com/assets/images/gallery/panic-alarm/forbix-semicon-code-red-2d-display-6remotes.jpg',
    "description" => $product['description'],
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
        "url" => "https://www.forbixindia.com/product-6remote-code-red-2d-display.php",
        "priceCurrency" => "INR",
        "price" => $product['base_price'],
        "availability" => "https://schema.org/InStock",
        "shippingDetails" => array(
            "@type" => "OfferShippingDetails",
            "shippingDestination" => array(
                "@type" => "DefinedRegion",
                "addressCountry" => "IN"
            ),
            "shippingRate" => array(
                "@type" => "MonetaryAmount",
                "value" => $shipping_rates['india'],
                "currency" => "INR"
            ),
            "deliveryTime" => array(
                "@type" => "ShippingDeliveryTime",
                "handlingTime" => array(
                    "@type" => "QuantitativeValue",
                    "minValue" => 1,
                    "maxValue" => 2,
                    "unitCode" => "DAY"
                ),
                "transitTime" => array(
                    "@type" => "QuantitativeValue",
                    "minValue" => 3,
                    "maxValue" => 5,
                    "unitCode" => "DAY"
                )
            )
        ),
        "hasMerchantReturnPolicy" => array(
            "@type" => "MerchantReturnPolicy",
            "returnPolicyCategory" => "MerchantReturnFiniteReturnWindow",
            "merchantReturnDays" => 30,
            "returnMethod" => "https://schema.org/ReturnByMail",
            "returnFees" => "https://schema.org/FreeReturn",
            "returnPolicyCountry" => "IN",
            "applicableCountry" => "IN",
            "refundType" => "ExchangeRefund"
        )
    )
);

$faqSchema = array(
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array(
        array(
            "@type" => "Question",
            "name" => "What is a Code Red emergency alert system?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "A Code Red system is a dedicated emergency alert system designed for critical situations. When activated, it immediately displays the emergency status on a high-contrast 2-digit display, showing which remote triggered the alert. This allows staff to quickly identify the location of an emergency and respond appropriately."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "How does the 2-digit display show which remote was activated?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Each of the 6 wireless remotes has a unique identifier. When a remote is pressed, the 2-digit display unit shows the specific remote number (1-6) that triggered the alert. This real-time monitoring feature helps staff quickly identify the exact location of the emergency."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "What is the wireless range of the system?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The system has a typical open-area range of up to 150 meters. However, actual range depends on site conditions, building materials, and obstructions. For larger facilities, the range can be extended with signal repeaters to ensure reliable communication across the entire property."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Where is this Code Red system typically used?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "This system is ideal for gated communities, residential complexes, offices, schools, hospitals, and any facility where multiple emergency alert points are needed. It's particularly useful in situations where you need to quickly identify which location triggered an emergency alert."
            )
        ),
        array(
            "@type" => "Question",
            "name" => "Can the system handle more than 6 remotes?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The base system is designed for 6 remotes, but it can be expanded to support additional remotes or displays. If you need more than 6 emergency alert points, contact us for custom requirements and we can configure a system to meet your specific needs."
            )
        )
    )
);

$breadcrumbSchema = array(
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => array(
        array(
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => "https://www.forbixindia.com/"
        ),
        array(
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Buy",
            "item" => "https://www.forbixindia.com/buy.php"
        ),
        array(
            "@type" => "ListItem",
            "position" => 3,
            "name" => $product['name'],
            "item" => "https://www.forbixindia.com/product-6remote-code-red-2d-display.php"
        )
    )
);

$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/product-6remote-code-red-2d-display.php" />
    <meta property="og:url" content="https://www.forbixindia.com/product-6remote-code-red-2d-display.php" />
    <meta property="og:image" content="https://www.forbixindia.com/' . ltrim($product['images'][0]['url'], '/') . '" />
    <meta property="og:image:alt" content="' . htmlspecialchars($product['images'][0]['caption'] ?? $product['name'], ENT_QUOTES) . '" />
    <meta property="og:title" content="' . htmlspecialchars($pageTitle, ENT_QUOTES) . '" />
    <meta property="og:type" content="product" />
    <meta property="og:description" content="' . htmlspecialchars($pageDescription, ENT_QUOTES) . '" />
    <meta property="og:site_name" content="FORBIX SEMICON®" />
    <meta property="product:price:amount" content="' . $product['base_price'] . '" />
    <meta property="product:price:currency" content="INR" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="' . htmlspecialchars($pageTitle, ENT_QUOTES) . '" />
    <meta name="twitter:description" content="' . htmlspecialchars($pageDescription, ENT_QUOTES) . '" />
    <meta name="twitter:image" content="https://www.forbixindia.com/' . ltrim($product['images'][0]['url'], '/') . '" />
    <script type="application/ld+json">' . json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
    <script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
    <script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
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
    
    /* Product Hero Section */
    .product-hero {
        background: linear-gradient(135deg, #0d9488, #0f766e);
        color: white;
        padding: 2rem 1rem;
        text-align: center;
        margin-bottom: 2rem;
    }
    .hero-content h1 {
        font-size: clamp(1.5rem, 4vw, 2rem);
        margin: 0 0 0.5rem;
        font-weight: 700;
    }
    .hero-content p {
        margin: 0;
        font-size: clamp(0.9rem, 2vw, 1.1rem);
        opacity: 0.95;
    }
    
    /* Main Container */
    main {
        max-width: 1200px;
        margin: 0 auto;
        padding: 1rem;
    }
    
    /* Back Button */
    .back-button {
        margin-bottom: 1.5rem;
    }
    .back-button a {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1.5rem;
        background: var(--bg-card);
        color: var(--text-primary);
        text-decoration: none;
        border-radius: 8px;
        border: 1px solid var(--border-color);
        transition: all 0.3s ease;
        font-weight: 500;
    }
    .back-button a:hover {
        background: var(--accent-color);
        color: white;
        border-color: var(--accent-color);
        transform: translateX(-3px);
    }
    
    /* Product Section */
    .product-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        align-items: start;
        margin: 2rem 0;
        padding: 2rem;
        background: var(--bg-card);
        border-radius: 20px;
        box-shadow: 0 8px 25px var(--shadow-light);
        border: 1px solid var(--border-color);
    }
    @media (max-width: 900px) {
        .product-section {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }
    @media (max-width: 768px) {
        .product-section {
            padding: 1.5rem;
        }
    }
    
    /* Image Gallery */
    .image-gallery {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .featured-image {
        width: 100%;
        height: 400px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 25px var(--shadow-medium);
        cursor: pointer;
        transition: transform 0.3s ease;
        position: relative;
    }
    .featured-image:hover {
        transform: scale(1.02);
    }
    .featured-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .image-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        color: white;
        padding: 1rem;
        font-size: 0.9rem;
        text-align: center;
    }
    @media (max-width: 768px) {
        .featured-image {
            height: 300px;
        }
    }
    @media (max-width: 480px) {
        .featured-image {
            height: 250px;
        }
    }
    
    /* Thumbnail Grid */
    .thumbnail-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
        gap: 8px;
        margin-top: 1rem;
    }
    .thumbnail {
        aspect-ratio: 1;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px var(--shadow-light);
    }
    .thumbnail:hover {
        border-color: var(--accent-color);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px var(--shadow-medium);
    }
    .thumbnail.active {
        border-color: var(--accent-color);
        box-shadow: 0 0 0 2px var(--accent-color);
    }
    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    @media (max-width: 768px) {
        .thumbnail-grid {
            grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
            gap: 6px;
        }
    }
    @media (max-width: 480px) {
        .thumbnail-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }
    
    /* Watch Demo Button */
    .action-buttons {
        margin-top: 1.5rem;
    }
    .watch-demo-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem 1.5rem;
        background: linear-gradient(135deg, var(--accent-color), #0f766e);
        color: white;
        text-decoration: none;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(13, 148, 136, 0.3);
    }
    .watch-demo-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(13, 148, 136, 0.4);
        text-decoration: none;
        color: white;
    }
    .play-icon {
        font-size: 1.2rem;
    }
    
    /* Product Info */
    .product-info {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    .product-header {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding-bottom: 1.5rem;
        border-bottom: 2px solid var(--border-color);
    }
    .product-model {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        font-size: 0.95rem;
        color: var(--text-secondary);
    }
    .product-price {
        font-size: 2rem;
        font-weight: 700;
        color: var(--accent-color);
        margin: 0.5rem 0;
    }
    .product-stock-info {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        margin-top: 1rem;
    }
    .stock-badge {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
    }
    .stock-badge.in-stock {
        background: #10b981;
        color: white;
    }
    .stock-badge.info {
        background: var(--bg-secondary);
        color: var(--text-primary);
        border: 1px solid var(--border-color);
    }
    
    /* Content Sections */
    .content-section {
        margin-bottom: 2rem;
    }
    .content-section h3 {
        color: var(--accent-color);
        font-size: 1.5rem;
        margin-bottom: 1rem;
        border-bottom: 2px solid var(--accent-color);
        padding-bottom: 0.5rem;
    }
    .content-section ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .content-section li {
        padding: 0.75rem 0;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        color: var(--text-secondary);
        line-height: 1.6;
    }
    .content-section li:last-child {
        border-bottom: none;
    }
    .content-section li::before {
        content: "•";
        color: var(--accent-color);
        font-weight: bold;
        font-size: 1.5rem;
        line-height: 1;
        margin-top: 0.2rem;
    }
    
    /* Additional Offerings */
    .offerings-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    .offering-item {
        background: var(--bg-secondary);
        padding: 1rem;
        border-radius: 10px;
        text-align: center;
        border: 1px solid var(--border-color);
        transition: all 0.3s ease;
    }
    .offering-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px var(--shadow-light);
    }
    .offering-item span {
        color: var(--text-primary);
        font-weight: 600;
        font-size: 0.95rem;
    }
    
    /* Lightbox Styles */
    .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 10000;
        justify-content: center;
        align-items: center;
    }
    .lightbox.active {
        display: flex;
    }
    .lightbox-content {
        position: relative;
        max-width: 90vw;
        max-height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .lightbox img {
        max-width: 100%;
        max-height: 100%;
        border-radius: 10px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }
    .lightbox-close, .lightbox-prev, .lightbox-next {
        position: absolute;
        background: rgba(255, 255, 255, 0.9);
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 1.5rem;
        color: var(--text-primary);
        transition: all 0.3s ease;
        z-index: 10001;
    }
    .lightbox-close:hover, .lightbox-prev:hover, .lightbox-next:hover {
        background: white;
        transform: scale(1.1);
    }
    .lightbox-close {
        top: -60px;
        right: -10px;
    }
    .lightbox-prev {
        left: -60px;
        top: 50%;
        transform: translateY(-50%);
    }
    .lightbox-next {
        right: -60px;
        top: 50%;
        transform: translateY(-50%);
    }
    .lightbox-counter {
        position: absolute;
        bottom: -50px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(255, 255, 255, 0.9);
        padding: 8px 16px;
        border-radius: 20px;
        color: var(--text-primary);
        font-weight: 500;
    }
    [data-theme="dark"] .lightbox-close,
    [data-theme="dark"] .lightbox-prev,
    [data-theme="dark"] .lightbox-next {
        background: rgba(60, 60, 60, 0.9);
        color: #fff;
    }
    [data-theme="dark"] .lightbox-close:hover,
    [data-theme="dark"] .lightbox-prev:hover,
    [data-theme="dark"] .lightbox-next:hover {
        background: rgba(80, 80, 80, 0.95);
    }
    [data-theme="dark"] .lightbox-counter {
        background: rgba(60, 60, 60, 0.9);
        color: #fff;
    }
    @media (max-width: 768px) {
        .lightbox-prev, .lightbox-next {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }
        .lightbox-prev {
            left: -50px;
        }
        .lightbox-next {
            right: -50px;
        }
        .lightbox-close {
            top: -50px;
            right: -5px;
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }
    }
    @media (max-width: 480px) {
        .lightbox-prev {
            left: 10px;
        }
        .lightbox-next {
            right: 10px;
        }
        .lightbox-close {
            top: 10px;
            right: 10px;
        }
        .lightbox-counter {
            bottom: 10px;
        }
    }
    </style>
';

$skipCommonCss = true;
include __DIR__ . '/includes/header.php';
?>

<main>
    <!-- Product Hero Section -->
    <section class="product-hero">
        <h1>Wireless Code Red Alert System with 6 Remotes | FORBIX SEMICON®</h1>
        <div class="hero-content">
            <p>Advanced Emergency Alert System with 2D Display Technology for Critical Situations</p>
        </div>
    </section>

    <!-- Back to Buy Page Button -->
    <div class="back-button">
        <a href="buy.php">← Back to Buy Page</a>
    </div>

    <!-- Product Display -->
    <div class="product-section">
        <?php $product = $products['code-red-6remote']; ?>
        
        <!-- Image Gallery Section -->
        <div class="image-gallery">
            <div class="featured-image" onclick="openLightbox(0)">
                <img src="<?php echo htmlspecialchars($product['images'][0]['url']); ?>" 
                     alt="<?php echo htmlspecialchars($product['images'][0]['caption']); ?>" 
                     id="main-image">
                <div class="image-caption">
                    <?php echo htmlspecialchars($product['images'][0]['caption']); ?>
                </div>
            </div>
            
            <!-- Thumbnail Navigation -->
            <div class="thumbnail-grid">
                <?php foreach ($product['images'] as $index => $image): ?>
                    <div class="thumbnail <?php echo $index === 0 ? 'active' : ''; ?>" 
                         onclick="showImage(<?php echo $index; ?>)">
                        <img src="<?php echo htmlspecialchars($image['url']); ?>" 
                             alt="<?php echo htmlspecialchars($image['caption']); ?>">
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Watch Demo Video Button -->
            <div class="action-buttons">
                <a href="https://youtu.be/AY1z7h5m99E" target="_blank" class="watch-demo-btn">
                    <span class="play-icon">▶</span>
                    Watch Product Demo
                </a>
            </div>
        </div>
        
        <!-- Product Details Section -->
        <div class="product-info">
            <div class="product-header">
                <div class="product-model">
                    <div>Model: FBXA01</div>
                    <div>Brand: FORBIX SEMICON®</div>
                </div>
                
                <div class="product-price">
                    ₹<?php echo number_format($product['base_price'], 0); ?>
                </div>
                
                <div class="product-stock-info">
                    <span class="stock-badge in-stock">In Stock</span>
                    <span class="stock-badge info">Qty: 5 nos.</span>
                    <span class="stock-badge info">MOQ: 1 set</span>
                </div>
                
                <div class="product-actions" style="margin-top: 1.5rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                    <button onclick="addProductToCart('6remote-code-red-2d-display', '<?php echo htmlspecialchars($product['name'], ENT_QUOTES); ?>', <?php echo $product['base_price']; ?>, '<?php echo htmlspecialchars($product['images'][0]['url'], ENT_QUOTES); ?>', 'FBXA01')" 
                            class="btn-add-to-cart" 
                            style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 14px 28px; background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%); color: #fff; border: none; border-radius: 12px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 16px rgba(13,148,136,0.25);">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 20px; height: 20px;"><path d="M9 22a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2zM1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg>
                        Add to Cart
                    </button>
                    <a href="buy.php" class="btn-view-cart" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 14px 28px; background: #fff; color: #0d9488; border: 2px solid #0d9488; border-radius: 12px; font-weight: 600; font-size: 1rem; text-decoration: none; transition: all 0.3s ease;">
                        View Cart
                    </a>
                </div>
            </div>

            <div>
                <!-- Product Specifications Section -->
                <div class="content-section">
                    <h2>6 Remotes Code Red Digital Display System Specifications</h2>
                </div>
                
                <!-- Set Contains Section -->
                <div class="content-section">
                    <h3>Set Contains:</h3>
                    <ul>
                        <li>6 no. wireless remote controllers (with A23 batteries)</li>
                        <li>1 no. Code Red 2D display unit</li>
                        <li>1 no. 12VDC power adapter for display unit</li>
                    </ul>
                </div>

                <!-- Features Section -->
                <div class="content-section">
                    <h2>Wireless Code Red System Features for Emergency Alerts & Safety</h2>
                </div>
                
                <div class="content-section">
                    <h3>Features:</h3>
                    <ul>
                        <li>Complete Emergency System: Includes 6 wireless remote controllers and 1 advanced 2D display unit</li>
                        <li>Clear Visual Display: High-contrast 2D display shows emergency status and remote ID</li>
                        <li>Multi-Remote Support: Handles up to 6 remote controllers simultaneously</li>
                        <li>Code Red Technology: Dedicated emergency alert system for critical situations</li>
                        <li>Long Range Operation: Up to 150-meter range in open space</li>
                        <li>Advanced RF Technology: Latest wireless technology ensures reliable communication</li>
                        <li>Easy Installation: No complex wiring needed - fully wireless operation</li>
                        <li>Durable Design: Industrial-grade components suitable for professional environments</li>
                        <li>Battery Operated Remotes: Long-lasting batteries included for all remotes</li>
                        <li>Instant Response: Immediate alert display upon button press</li>
                        <li>Real-time Monitoring: Display shows which remote triggered the alert</li>
                        <li>Expandable System: Can add more remotes or displays (contact for custom requirements)</li>
                    </ul>
                </div>

                <!-- Additional Offerings Section -->
                <div class="content-section">
                    <h3>Additional Offerings:</h3>
                    <div class="offerings-grid">
                        <div class="offering-item">
                            <span>Free Technical Support</span>
                        </div>
                        <div class="offering-item">
                            <span>1-Year Warranty</span>
                        </div>
                        <div class="offering-item">
                            <span>Installation Guide Included</span>
                        </div>
                        <div class="offering-item">
                            <span>All Accessories Included</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox">
    <div class="lightbox-content">
        <button class="lightbox-close">&times;</button>
        <button class="lightbox-prev">&#8592;</button>
        <img id="lightbox-image" src="" alt="Product Image">
        <button class="lightbox-next">&#8594;</button>
        <div class="lightbox-counter">
            <span id="lightbox-counter">1 / <?php echo count($product['images']); ?></span>
        </div>
    </div>
</div>

<script>
// Product images array
const productImages = <?php echo json_encode($product['images']); ?>;
let currentLightboxIndex = 0;

// Show image in main display
function showImage(index) {
    const mainImage = document.getElementById('main-image');
    const mainCaption = document.querySelector('.image-caption');
    const thumbnails = document.querySelectorAll('.thumbnail');
    
    if (mainImage && productImages[index]) {
        mainImage.src = productImages[index].url;
        mainImage.alt = productImages[index].caption;
        if (mainCaption) {
            mainCaption.textContent = productImages[index].caption;
        }
    }
    
    // Update active thumbnail
    thumbnails.forEach((thumb, i) => {
        thumb.classList.toggle('active', i === index);
    });
}

// Lightbox functions
function openLightbox(index) {
    currentLightboxIndex = index;
    updateLightbox();
    document.getElementById('lightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightbox').classList.remove('active');
    document.body.style.overflow = '';
}

function updateLightbox() {
    const img = productImages[currentLightboxIndex];
    document.getElementById('lightbox-image').src = img.url;
    document.getElementById('lightbox-image').alt = img.caption;
    document.getElementById('lightbox-counter').textContent = `${currentLightboxIndex + 1} / ${productImages.length}`;
}

function lightboxPrev() {
    currentLightboxIndex = (currentLightboxIndex - 1 + productImages.length) % productImages.length;
    updateLightbox();
}

function lightboxNext() {
    currentLightboxIndex = (currentLightboxIndex + 1) % productImages.length;
    updateLightbox();
}

// Event listeners for lightbox
document.querySelector('.lightbox-close').onclick = closeLightbox;
document.querySelector('.lightbox-prev').onclick = lightboxPrev;
document.querySelector('.lightbox-next').onclick = lightboxNext;

// Click outside to close
document.getElementById('lightbox').onclick = function(e) {
    if (e.target === this) {
        closeLightbox();
    }
};

// Keyboard navigation for lightbox
document.addEventListener('keydown', function(e) {
    const modal = document.getElementById('lightbox');
    if (modal.classList.contains('active')) {
        if (e.key === 'ArrowLeft') {
            lightboxPrev();
        } else if (e.key === 'ArrowRight') {
            lightboxNext();
        } else if (e.key === 'Escape') {
            closeLightbox();
        }
    }
});
</script>

<?php include __DIR__ . '/includes/cart-script.php'; ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.btn-add-to-cart');
    if (btn) {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 8px 24px rgba(13,148,136,0.35)';
        });
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 4px 16px rgba(13,148,136,0.25)';
        });
    }
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
