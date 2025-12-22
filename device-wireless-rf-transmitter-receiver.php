<?php
$pageTitle = "Wireless RF Transmitter & Receiver Systems | FORBIX SEMICON® | Free ISM Band 380-480MHz Remote Control";
$pageDescription = "Professional wireless RF transmitter and receiver systems for remote control applications. Multi-channel free ISM band 380-480MHz solutions, relay control modules, and reliable wireless communication for industrial automation, home automation, and commercial use. Operating range 100-120 meters.";
$pageKeywords = "wireless RF transmitter, RF receiver, free ISM band 380-480MHz transmitter receiver, wireless relay control, multi-channel transmitter, remote control system, RF communication module, industrial automation, home automation, wireless relay switch";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Wireless RF Transmitter & Receiver Systems",
    "image" => "https://www.forbixindia.com/assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg",
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
        "availability" => "https://schema.org/InStock"
    )
);

$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/device-wireless-rf-transmitter-receiver.php" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="https://www.forbixindia.com/device-wireless-rf-transmitter-receiver.php" />
    <meta property="og:title" content="' . htmlspecialchars($pageTitle) . '" />
    <meta property="og:description" content="' . htmlspecialchars($pageDescription) . '" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/transmitter-receiver/forbix-semicon-1-channel-wireless-transmitter-receiver.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Wireless RF Transmitter and Receiver Systems" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json">' . json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
';

include __DIR__ . '/includes/header.php';
?>

<style>
    html, body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
    }
    
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
    
    main {
        max-width: 1400px;
        margin: 0 auto;
        padding: 1.5rem;
        margin-top: 4rem;
    }
    
    .header-section {
        background: linear-gradient(135deg, var(--bg-secondary), var(--bg-primary));
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 1.5rem;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 12px var(--shadow-light);
    }
    .header-section h1 {
        margin: 0 0 0.75rem 0;
        color: var(--text-primary);
        font-size: 2.25rem;
        font-weight: 700;
        line-height: 1.2;
    }
    .header-section hr {
        margin: 0.75rem 0 1rem 0;
        border: none;
        border-top: 3px solid var(--accent-color);
        width: 80px;
    }
    .header-section p {
        margin: 0;
        line-height: 1.7;
        color: var(--text-secondary);
        font-size: 1.05rem;
    }
    
    .products-section {
        background: var(--bg-card);
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 1.5rem;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 12px var(--shadow-light);
        overflow-x: auto;
    }
    
    .products-section h2 {
        color: var(--accent-color);
        margin: 0 0 1.25rem 0;
        font-size: 1.75rem;
        font-weight: 700;
    }
    
    .products-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
    }
    
    .products-table thead {
        background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
        color: white;
    }
    
    .products-table th {
        padding: 0.875rem 0.75rem;
        text-align: left;
        font-weight: 600;
        font-size: 1rem;
        border-bottom: 2px solid var(--accent-hover);
    }
    
    .products-table th:first-child {
        width: 280px;
    }
    
    .products-table th:nth-child(2) {
        width: 180px;
    }
    
    .products-table tbody tr {
        border-bottom: 1px solid var(--border-color);
        transition: background-color 0.2s ease;
    }
    
    .products-table tbody tr:hover {
        background-color: var(--bg-secondary);
    }
    
    .products-table tbody tr:last-child {
        border-bottom: none;
    }
    
    .products-table td {
        padding: 1rem 0.75rem;
        vertical-align: top;
        color: var(--text-primary);
    }
    
    .product-images-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        width: 100%;
        max-width: 280px;
        margin: 0;
        box-sizing: border-box;
    }
    
    .product-main-image {
        width: 100%;
        max-width: 100%;
        height: auto;
        max-height: 280px;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 3px 10px var(--shadow-medium);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
        background: var(--bg-secondary);
        padding: 8px;
        box-sizing: border-box;
        display: block;
        margin: 0;
        border: 2px solid var(--border-color);
    }
    
    .product-main-image:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 16px var(--shadow-heavy);
        border-color: var(--accent-color);
    }
    
    .product-gallery-thumbnails {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(75px, 1fr));
        gap: 0.5rem;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        justify-items: center;
    }
    
    .product-gallery-thumbnail {
        aspect-ratio: 1;
        border-radius: 6px;
        overflow: hidden;
        cursor: pointer;
        border: 2px solid var(--border-color);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 2px 6px var(--shadow-light);
        position: relative;
        background: var(--bg-secondary);
        width: 100%;
        max-width: 90px;
        min-width: 70px;
    }
    
    .product-gallery-thumbnail:hover {
        border-color: var(--accent-color);
        transform: translateY(-2px) scale(1.05);
        box-shadow: 0 4px 12px rgba(13, 148, 136, 0.25);
        z-index: 1;
    }
    
    .product-gallery-thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
        padding: 4px;
        box-sizing: border-box;
    }
    
    .product-image {
        width: 100%;
        max-width: 100%;
        height: auto;
        max-height: 220px;
        object-fit: contain;
        border-radius: 6px;
        box-shadow: 0 2px 8px var(--shadow-medium);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
        background: var(--bg-secondary);
        padding: 6px;
        box-sizing: border-box;
        display: block;
        margin: 0;
        border: 2px solid var(--border-color);
    }
    
    .product-image:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 14px var(--shadow-heavy);
        border-color: var(--accent-color);
    }
    
    .model-number {
        font-weight: 700;
        color: var(--accent-color);
        font-size: 1.1rem;
        margin: 0;
        text-align: center;
        padding: 0.5rem 0.75rem;
        background: linear-gradient(135deg, rgba(13, 148, 136, 0.1) 0%, rgba(13, 148, 136, 0.05) 100%);
        border-radius: 6px;
        border: 1px solid rgba(13, 148, 136, 0.2);
        display: inline-block;
    }
    
    .features-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .features-list li {
        padding: 0.35rem 0;
        padding-left: 1.5rem;
        position: relative;
        color: var(--text-secondary);
        line-height: 1.5;
        font-size: 0.95rem;
    }
    
    .features-list li:before {
        content: "✓";
        position: absolute;
        left: 0;
        color: var(--accent-color);
        font-weight: bold;
        font-size: 1.1rem;
    }
    
    .lightbox {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.92);
        justify-content: center;
        align-items: center;
        animation: fadeIn 0.3s ease;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .lightbox.active {
        display: flex;
    }
    
    .lightbox-content {
        position: relative;
        max-width: 95%;
        max-height: 95%;
        width: auto;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        box-sizing: border-box;
    }
    
    .lightbox-content img {
        max-width: 100%;
        max-height: 90vh;
        width: auto;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.6);
        display: block;
        animation: zoomIn 0.3s ease;
    }
    
    @keyframes zoomIn {
        from { transform: scale(0.9); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    
    .lightbox-close {
        position: absolute;
        top: -45px;
        right: 0;
        color: white;
        font-size: 2.25rem;
        font-weight: 300;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        cursor: pointer;
        padding: 0;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        line-height: 1;
    }
    
    .lightbox-close:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.5);
        transform: rotate(90deg);
    }
    
    .lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.95);
        border: none;
        color: var(--text-primary);
        font-size: 1.75rem;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        font-weight: 300;
    }
    
    .lightbox-nav:hover:not(:disabled) {
        background: white;
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
    }
    
    .lightbox-nav:active:not(:disabled) {
        transform: translateY(-50%) scale(0.95);
    }
    
    .lightbox-nav.prev {
        left: 20px;
    }
    
    .lightbox-nav.next {
        right: 20px;
    }
    
    .lightbox-nav:disabled {
        opacity: 0.3;
        cursor: not-allowed;
    }
    
    .lightbox-nav:disabled:hover {
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.95);
    }
    
    .lightbox-counter {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.75);
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        z-index: 10000;
    }
    
    .info-section {
        background: var(--bg-card);
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 1.5rem;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 12px var(--shadow-light);
    }
    
    .info-section h2 {
        color: var(--accent-color);
        margin: 0 0 1.25rem 0;
        font-size: 1.75rem;
        font-weight: 700;
    }
    
    .info-section h3 {
        color: var(--accent-color);
        margin: 1.5rem 0 0.75rem 0;
        font-size: 1.25rem;
        font-weight: 600;
    }
    
    .info-section h3:first-child {
        margin-top: 0;
    }
    
    .info-section p {
        color: var(--text-secondary);
        line-height: 1.7;
        margin: 0 0 1rem 0;
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        margin-top: 1.25rem;
    }
    
    .info-card {
        padding: 0;
    }
    
    .info-card h3 {
        margin-top: 0;
    }
    
    .demo-video-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.625rem 1.25rem;
        margin-top: 0.75rem;
        background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(13, 148, 136, 0.3);
    }
    
    .demo-video-button:hover {
        background: linear-gradient(135deg, var(--accent-hover), var(--accent-color));
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(13, 148, 136, 0.4);
        color: white;
        text-decoration: none;
    }
    
    .demo-video-button:active {
        transform: translateY(0);
    }
    
    .demo-video-button::before {
        content: "▶";
        font-size: 0.85rem;
    }
    
    .frequency-note {
        background: linear-gradient(135deg, rgba(13, 148, 136, 0.08), rgba(13, 148, 136, 0.04));
        border-left: 3px solid var(--accent-color);
        padding: 1rem 1.25rem;
        border-radius: 6px;
        margin-top: 1.5rem;
    }
    
    .frequency-note h3 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        color: var(--accent-color);
        font-size: 1.15rem;
    }
    
    .frequency-note p {
        margin: 0;
        color: var(--text-secondary);
        line-height: 1.6;
    }
    
    .btn-group {
        display: flex;
        gap: 1rem;
        margin: 1rem 0;
        flex-wrap: wrap;
    }
    .btn-primary, .btn-secondary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .btn-primary {
        background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
        color: white;
        box-shadow: 0 4px 15px rgba(13, 148, 136, 0.3);
    }
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(13, 148, 136, 0.4);
        text-decoration: none;
        color: white;
    }
    .btn-secondary {
        background: var(--bg-card);
        color: var(--text-primary);
        border: 2px solid var(--border-color);
    }
    .btn-secondary:hover {
        background: var(--accent-color);
        color: white;
        border-color: var(--accent-color);
        text-decoration: none;
    }
    
    @media (max-width: 1024px) {
        main {
            padding: 1rem;
            margin-top: 4rem;
        }
        .products-table th:first-child {
            width: 240px;
        }
        .product-images-container {
            max-width: 240px;
        }
        .product-image, .product-main-image {
            max-height: 200px;
        }
        .product-gallery-thumbnail {
            max-width: 80px;
            min-width: 65px;
        }
    }
    
    @media (max-width: 768px) {
        .header-section {
            padding: 1.5rem;
        }
        .header-section h1 {
            font-size: 1.75rem;
        }
        .products-section, .info-section {
            padding: 1.5rem;
        }
        .products-section h2, .info-section h2 {
            font-size: 1.5rem;
        }
        .products-table {
            font-size: 0.9rem;
        }
        .products-table th:first-child {
            width: 200px;
        }
        .products-table th,
        .products-table td {
            padding: 0.75rem 0.5rem;
        }
        .product-images-container {
            max-width: 200px;
        }
        .product-image, .product-main-image {
            max-height: 180px;
        }
        .product-gallery-thumbnail {
            max-width: 70px;
            min-width: 55px;
        }
        .product-gallery-thumbnails {
            grid-template-columns: repeat(auto-fit, minmax(55px, 1fr));
        }
        .model-number {
            font-size: 1rem;
        }
        .features-list li {
            font-size: 0.9rem;
            padding-left: 1.25rem;
        }
        .demo-video-button {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }
        .lightbox-nav {
            width: 40px;
            height: 40px;
            font-size: 1.5rem;
        }
        .lightbox-nav.prev {
            left: 10px;
        }
        .lightbox-nav.next {
            right: 10px;
        }
        .lightbox-close {
            top: -35px;
            width: 35px;
            height: 35px;
            font-size: 1.75rem;
        }
    }
    
    @media (max-width: 600px) {
        .products-table {
            display: block;
        }
        .products-table thead {
            display: none;
        }
        .products-table tbody,
        .products-table tr,
        .products-table td {
            display: block;
            width: 100%;
        }
        .products-table tr {
            margin-bottom: 1.5rem;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 1rem;
            background: var(--bg-card);
            box-shadow: 0 2px 8px var(--shadow-light);
        }
        .products-table td {
            padding: 0.75rem 0;
            border: none;
        }
        .products-table td:first-child {
            padding-bottom: 1rem;
        }
        .products-table td:before {
            content: attr(data-label);
            font-weight: 700;
            color: var(--accent-color);
            display: block;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }
        .product-images-container {
            max-width: 100%;
        }
        .product-image, .product-main-image {
            max-height: 200px;
        }
        .product-gallery-thumbnail {
            max-width: 75px;
            min-width: 60px;
        }
        .header-section h1 {
            font-size: 1.5rem;
        }
        .header-section p {
            font-size: 0.95rem;
        }
        .products-section h2, .info-section h2 {
            font-size: 1.25rem;
        }
        .info-section h3 {
            font-size: 1.1rem;
        }
        .demo-video-button {
            font-size: 0.85rem;
            padding: 0.5rem 0.875rem;
        }
        .frequency-note {
            padding: 0.875rem 1rem;
        }
        .frequency-note h3 {
            font-size: 1.05rem;
        }
    }
    
    @media (max-width: 480px) {
        main {
            padding: 0.75rem;
            margin-top: 4rem;
        }
        .header-section, .products-section, .info-section {
            padding: 1.25rem;
        }
        .product-image, .product-main-image {
            max-height: 180px;
        }
        .product-gallery-thumbnail {
            max-width: 65px;
            min-width: 55px;
        }
        .product-gallery-thumbnails {
            grid-template-columns: repeat(auto-fit, minmax(55px, 1fr));
            gap: 0.4rem;
        }
        .lightbox-content {
            padding: 10px;
        }
        .lightbox-content img {
            max-height: 80vh;
        }
    }
</style>

<main>
    <div class="header-section">
        <h1>Wireless RF Transmitter & Receiver Systems</h1>
        <hr>
        <p>Professional wireless RF transmitter and receiver systems for reliable remote control applications. Our comprehensive range includes single and multi-channel free ISM band 380-480MHz solutions with relay control capabilities, designed for industrial automation, home automation, and commercial applications with an operating range of 100-120 meters.</p>
        
        <div class="btn-group">
            <a href="wireless-transceiver.php" class="btn-primary">
                <span>↩️</span> Back to Wireless Transceiver
            </a>
        </div>
    </div>

    <div class="products-section">
        <h2>Product Catalog & Specifications</h2>
        <table class="products-table">
            <thead>
                <tr>
                    <th>Product Images</th>
                    <th>Model Number</th>
                    <th>Key Features</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Product Images">
                        <div class="product-images-container">
                            <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-1-channel-wireless-transmitter-receiver.jpg" 
                                 alt="1 Channel Wireless RF Transmitter Receiver" 
                                 class="product-main-image"
                                 onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-1-channel-wireless-transmitter-receiver.jpg', 0)">
                            <div class="product-gallery-thumbnails">
                                <div class="product-gallery-thumbnail" onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-1-channel-wireless-transmitter-receiver-wiring.jpg', 1)">
                                    <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-1-channel-wireless-transmitter-receiver-wiring.jpg" alt="1 Channel Transmitter Receiver Wiring Diagram">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Model Number">
                        <div class="model-number">FBXTR01</div>
                    </td>
                    <td data-label="Key Features">
                        <ul class="features-list">
                            <li>Single channel wireless RF transmitter receiver</li>
                            <li>Free ISM band 380-480MHz RF frequency operation</li>
                            <li>100-120 meters operating range (open space)</li>
                            <li>5A @ 220VAC relay output</li>
                            <li>12VDC power supply included</li>
                            <li>Compact and durable design</li>
                            <li>Easy installation and configuration</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td data-label="Product Images">
                        <div class="product-images-container">
                            <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-2-channel-transmitter-receiver.jpg" 
                                 alt="2 Channel Wireless RF Transmitter Receiver" 
                                 class="product-main-image"
                                 onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-2-channel-transmitter-receiver.jpg', 0)">
                            <div class="product-gallery-thumbnails">
                                <div class="product-gallery-thumbnail" onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-2-channel-transmitter-receiver-wiring.jpg', 1)">
                                    <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-2-channel-transmitter-receiver-wiring.jpg" alt="2 Channel Transmitter Receiver Wiring Diagram">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Model Number">
                        <div class="model-number">FBXTR02</div>
                    </td>
                    <td data-label="Key Features">
                        <ul class="features-list">
                            <li>Dual channel wireless RF transmitter receiver</li>
                            <li>Independent control of two devices</li>
                            <li>Free ISM band 380-480MHz RF communication protocol</li>
                            <li>100-120 meters operating range</li>
                            <li>Two relay outputs: 5A each @ 220VAC</li>
                            <li>LED status indicators for each channel</li>
                            <li>12VDC power supply</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td data-label="Product Images">
                        <div class="product-images-container">
                            <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-3-port-transmitter-receiver.jpg" 
                                 alt="3 Port Wireless RF Transmitter Receiver" 
                                 class="product-main-image"
                                 onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-3-port-transmitter-receiver.jpg', 0)">
                            <a href="https://youtu.be/kUfGJqK9y7M" target="_blank" rel="noopener noreferrer" class="demo-video-button">Watch Demo Video</a>
                        </div>
                    </td>
                    <td data-label="Model Number">
                        <div class="model-number">FBXTR03</div>
                    </td>
                    <td data-label="Key Features">
                        <ul class="features-list">
                            <li>Three channel wireless RF transmitter receiver</li>
                            <li>Multi-device control capability</li>
                            <li>Free ISM band 380-480MHz RF frequency operation</li>
                            <li>100-120 meters operating range</li>
                            <li>Three independent relay outputs</li>
                            <li>Individual channel control buttons</li>
                            <li>Compact wall-mountable design</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td data-label="Product Images">
                        <div class="product-images-container">
                            <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg" 
                                 alt="4 Channel Button Transmitter Receiver" 
                                 class="product-main-image"
                                 onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg', 0)">
                            <div class="product-gallery-thumbnails">
                                <div class="product-gallery-thumbnail" onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver-wiring.jpg', 1)">
                                    <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver-wiring.jpg" alt="4 Channel Transmitter Receiver Wiring">
                                </div>
                                <div class="product-gallery-thumbnail" onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-transmitter-receiver-operation.jpg', 2)">
                                    <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-transmitter-receiver-operation.jpg" alt="4 Channel Transmitter Receiver Operation">
                                </div>
                                <div class="product-gallery-thumbnail" onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-transmitter-receiver.jpg', 3)">
                                    <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-transmitter-receiver.jpg" alt="4 Channel Transmitter Receiver Base Model">
                                </div>
                            </div>
                            <a href="https://youtu.be/5kwk8I6J4_w" target="_blank" rel="noopener noreferrer" class="demo-video-button">Watch Demo Video</a>
                        </div>
                    </td>
                    <td data-label="Model Number">
                        <div class="model-number">FBXTR04</div>
                    </td>
                    <td data-label="Key Features">
                        <ul class="features-list">
                            <li>Four channel wireless RF transmitter receiver</li>
                            <li>Four-button transmitter for channel selection</li>
                            <li>Free ISM band 380-480MHz RF communication protocol</li>
                            <li>100-120 meters operating range</li>
                            <li>Four relay outputs: 5A each @ 220VAC</li>
                            <li>LED indicators for each channel status</li>
                            <li>Synchronized transmitter-receiver operation</li>
                            <li>Weather-resistant housing option available</li>
                            <li>Ideal for complex automation systems</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td data-label="Product Images">
                        <div class="product-images-container">
                            <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-solution.jpg" 
                                 alt="4 Channel Wireless RF Solution" 
                                 class="product-main-image"
                                 onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-solution.jpg', 0)">
                            <a href="https://youtu.be/dIX2Fpm9T5o" target="_blank" rel="noopener noreferrer" class="demo-video-button">Watch Demo Video</a>
                        </div>
                    </td>
                    <td data-label="Model Number">
                        <div class="model-number">FBXTR04S</div>
                    </td>
                    <td data-label="Key Features">
                        <ul class="features-list">
                            <li>Complete 4-channel wireless solution package</li>
                            <li>Transmitter with 4-button remote control</li>
                            <li>Receiver with 4 independent relay outputs</li>
                            <li>Free ISM band 380-480MHz RF frequency band</li>
                            <li>100-120 meters operating range</li>
                            <li>Expandable system architecture</li>
                            <li>Professional installation ready</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td data-label="Product Images">
                        <div class="product-images-container">
                            <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-1-transmitter-multiple-handheld-receivers.jpg" 
                                 alt="1 Transmitter Multiple Handheld Receivers" 
                                 class="product-main-image"
                                 onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-1-transmitter-multiple-handheld-receivers.jpg', 0)">
                            <a href="https://youtu.be/dIX2Fpm9T5o" target="_blank" rel="noopener noreferrer" class="demo-video-button">Watch Demo Video</a>
                        </div>
                    </td>
                    <td data-label="Model Number">
                        <div class="model-number">FBXTR1M</div>
                    </td>
                    <td data-label="Key Features">
                        <ul class="features-list">
                            <li>Single transmitter with multiple receivers</li>
                            <li>One-to-many communication system</li>
                            <li>Free ISM band 380-480MHz RF frequency operation</li>
                            <li>100-120 meters operating range per receiver</li>
                            <li>Handheld receiver units</li>
                            <li>Expandable receiver network</li>
                            <li>Ideal for notification and alert systems</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td data-label="Product Images">
                        <div class="product-images-container">
                            <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-wireless-remote-1port-relay.jpg" 
                                 alt="Wireless Remote Single Port Relay" 
                                 class="product-main-image"
                                 onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-wireless-remote-1port-relay.jpg', 0)">
                            <div class="product-gallery-thumbnails">
                                <div class="product-gallery-thumbnail" onclick="openLightbox('assets/images/gallery/transmitter-receiver/forbix-semicon-wireless-remote-1port-relay-set.jpg', 1)">
                                    <img src="assets/images/gallery/transmitter-receiver/forbix-semicon-wireless-remote-1port-relay-set.jpg" alt="Wireless Remote Relay Complete Set">
                                </div>
                            </div>
                            <a href="https://youtu.be/Z1A1BEFV4L4" target="_blank" rel="noopener noreferrer" class="demo-video-button">Watch Demo Video</a>
                        </div>
                    </td>
                    <td data-label="Model Number">
                        <div class="model-number">FBXRRL01</div>
                    </td>
                    <td data-label="Key Features">
                        <ul class="features-list">
                            <li>Single port wireless relay receiver</li>
                            <li>Complete wireless relay set with remote transmitter</li>
                            <li>Free ISM band 380-480MHz RF receiver communication</li>
                            <li>100-120 meters operating range</li>
                            <li>5A @ 220VAC relay output</li>
                            <li>Battery-operated remote control included</li>
                            <li>12VDC power supply</li>
                            <li>Ready-to-use installation kit</li>
                            <li>Easy integration with existing systems</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="info-section">
        <h2>Applications & Use Cases</h2>
        <div class="info-grid">
            <div class="info-card">
                <h3>Industrial Automation</h3>
                <p>Control motors, pumps, lighting systems, and industrial equipment remotely. Ideal for factory automation, warehouse management, manufacturing processes, and equipment control applications requiring reliable wireless communication.</p>
            </div>
            <div class="info-card">
                <h3>Home Automation</h3>
                <p>Wireless control of home appliances, lighting systems, gates, security devices, and smart home integrations. Convenient remote operation without complex wiring, perfect for retrofitting existing homes and new installations.</p>
            </div>
            <div class="info-card">
                <h3>Commercial Applications</h3>
                <p>Office automation, retail store lighting control, gate automation, access control systems, and business operations. Reliable wireless communication solutions for commercial environments requiring efficient remote control capabilities.</p>
            </div>
        </div>
    </div>

    <div class="info-section">
        <h2>Technical Specifications</h2>
        <h3>Communication Specifications</h3>
        <ul class="features-list">
            <li>Frequency: Free ISM band 380-480MHz (license-free operation)</li>
            <li>Operating Range: 100-120 meters in open space</li>
            <li>Transmission Power: Compliant with regulatory standards</li>
            <li>Signal Modulation: GFSK (Frequency Shift Keying)</li>
            <li>Communication Protocol: Reliable wireless data transmission</li>
        </ul>
        
        <h3>Power Supply Requirements</h3>
        <ul class="features-list">
            <li>Receiver: 12VDC adapter (included with product)</li>
            <li>Transmitter: 12VDC adapter (included with product)</li>
            <li>Power Consumption: Low power design for energy efficiency</li>
            <li>Standby Power: Minimal power consumption in idle mode</li>
        </ul>
        
        <h3>Relay Output Specifications</h3>
        <ul class="features-list">
            <li>Contact Rating: 5A @ 220VAC per relay</li>
            <li>Contact Type: SPDT (Single Pole Double Throw)</li>
            <li>Electrical Isolation: 4000V between coil and contact</li>
            <li>Life Expectancy: 100,000+ operations minimum</li>
            <li>Switching Speed: Fast response time for immediate control</li>
        </ul>
        
        <div class="frequency-note">
            <h3>Frequency Programming & Regulatory Compliance</h3>
            <p>Our wireless RF transmitter and receiver systems operate in the free ISM band 380-480MHz range. The specific frequency within this band will be programmed according to the license-free regulations and requirements of the country where the product is to be supplied and used. We ensure full compliance with local regulatory standards to provide reliable and legal wireless communication solutions for all our international customers.</p>
        </div>
    </div>
</main>

<div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
    <div class="lightbox-content" onclick="event.stopPropagation()">
        <button class="lightbox-close" onclick="closeLightbox(event)" aria-label="Close lightbox">&times;</button>
        <button class="lightbox-nav prev" id="lightbox-prev" onclick="event.stopPropagation(); navigateLightbox(-1)" aria-label="Previous image">&#8249;</button>
        <button class="lightbox-nav next" id="lightbox-next" onclick="event.stopPropagation(); navigateLightbox(1)" aria-label="Next image">&#8250;</button>
        <img id="lightbox-image" src="" alt="Product Image">
        <div class="lightbox-counter" id="lightbox-counter"></div>
    </div>
</div>

<script>
// Gallery images organized by product
const galleryImages = {
    'fbxtr01': [
        'assets/images/gallery/transmitter-receiver/forbix-semicon-1-channel-wireless-transmitter-receiver.jpg',
        'assets/images/gallery/transmitter-receiver/forbix-semicon-1-channel-wireless-transmitter-receiver-wiring.jpg'
    ],
    'fbxtr02': [
        'assets/images/gallery/transmitter-receiver/forbix-semicon-2-channel-transmitter-receiver.jpg',
        'assets/images/gallery/transmitter-receiver/forbix-semicon-2-channel-transmitter-receiver-wiring.jpg'
    ],
    'fbxtr03': [
        'assets/images/gallery/transmitter-receiver/forbix-semicon-3-port-transmitter-receiver.jpg'
    ],
    'fbxtr04': [
        'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg',
        'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver-wiring.jpg',
        'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-transmitter-receiver-operation.jpg',
        'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-transmitter-receiver.jpg'
    ],
    'fbxtr04s': [
        'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-solution.jpg'
    ],
    'fbxtr1m': [
        'assets/images/gallery/transmitter-receiver/forbix-semicon-1-transmitter-multiple-handheld-receivers.jpg'
    ],
    'fbxrrl01': [
        'assets/images/gallery/transmitter-receiver/forbix-semicon-wireless-remote-1port-relay.jpg',
        'assets/images/gallery/transmitter-receiver/forbix-semicon-wireless-remote-1port-relay-set.jpg'
    ]
};

// All images array for navigation across all products
const allImages = [
    'assets/images/gallery/transmitter-receiver/forbix-semicon-1-channel-wireless-transmitter-receiver.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-1-channel-wireless-transmitter-receiver-wiring.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-2-channel-transmitter-receiver.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-2-channel-transmitter-receiver-wiring.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-3-port-transmitter-receiver.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-button-transmitter-receiver-wiring.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-transmitter-receiver-operation.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-transmitter-receiver.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-4-channel-solution.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-1-transmitter-multiple-handheld-receivers.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-wireless-remote-1port-relay.jpg',
    'assets/images/gallery/transmitter-receiver/forbix-semicon-wireless-remote-1port-relay-set.jpg'
];

// Lightbox state
let currentLightboxState = {
    galleryId: null,
    currentIndex: -1,
    images: []
};

function openLightbox(imageSrc, startIndex = 0) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    
    // Find which gallery this image belongs to
    let galleryId = null;
    let imageIndex = startIndex;
    let images = [];
    
    // Check if image is in a gallery
    for (const [id, imgArray] of Object.entries(galleryImages)) {
        const index = imgArray.indexOf(imageSrc);
        if (index !== -1) {
            galleryId = id;
            imageIndex = startIndex >= 0 && startIndex < imgArray.length ? startIndex : index;
            images = imgArray;
            break;
        }
    }
    
    // If not in gallery, use all images for navigation
    if (galleryId === null) {
        const globalIndex = allImages.indexOf(imageSrc);
        images = allImages;
        imageIndex = globalIndex >= 0 ? globalIndex : 0;
    }
    
    // Update state
    currentLightboxState = {
        galleryId: galleryId,
        currentIndex: imageIndex,
        images: images
    };
    
    // Update image
    lightboxImage.src = images[imageIndex];
    lightboxImage.alt = imageSrc.split('/').pop().replace(/-/g, ' ').replace(/\.jpg$/, '');
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    // Update navigation
    updateLightboxNavigation();
    updateLightboxCounter();
}

function updateLightboxNavigation() {
    const prevBtn = document.getElementById('lightbox-prev');
    const nextBtn = document.getElementById('lightbox-next');
    const { images, currentIndex } = currentLightboxState;
    
    if (images.length <= 1) {
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
    } else {
        prevBtn.style.display = 'flex';
        nextBtn.style.display = 'flex';
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === images.length - 1;
    }
}

function updateLightboxCounter() {
    const counter = document.getElementById('lightbox-counter');
    const { images, currentIndex } = currentLightboxState;
    
    if (images.length > 1) {
        counter.textContent = `${currentIndex + 1} / ${images.length}`;
        counter.style.display = 'block';
    } else {
        counter.style.display = 'none';
    }
}

function navigateLightbox(direction) {
    const { images, currentIndex } = currentLightboxState;
    
    if (images.length <= 1) return;
    
    let newIndex = currentIndex + direction;
    
    if (newIndex < 0 || newIndex >= images.length) return;
    
    currentLightboxState.currentIndex = newIndex;
    
    const lightboxImage = document.getElementById('lightbox-image');
    lightboxImage.src = images[newIndex];
    lightboxImage.alt = images[newIndex].split('/').pop().replace(/-/g, ' ').replace(/\.jpg$/, '');
    
    updateLightboxNavigation();
    updateLightboxCounter();
}

function closeLightbox(event) {
    if (event.target.classList.contains('lightbox') || event.target.classList.contains('lightbox-close')) {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
        
        currentLightboxState = {
            galleryId: null,
            currentIndex: -1,
            images: []
        };
    }
}

// Keyboard navigation
document.addEventListener('keydown', function(event) {
    const lightbox = document.getElementById('lightbox');
    if (!lightbox.classList.contains('active')) return;
    
    if (event.key === 'Escape') {
        closeLightbox({ target: { classList: { contains: () => true } } });
    } else if (event.key === 'ArrowLeft') {
        event.preventDefault();
        navigateLightbox(-1);
    } else if (event.key === 'ArrowRight') {
        event.preventDefault();
        navigateLightbox(1);
    }
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
