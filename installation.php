<?php
$pageTitle = "Customer Installation Gallery | FORBIX SEMICON®";
$pageDescription = "Explore real-world installations of FORBIX SEMICON wireless nurse call systems, panic alarms, and automation products across hospitals, factories, offices, and residential buildings.";
$pageKeywords = "nurse call installation, wireless alarm installation, hospital equipment installation, FORBIX SEMICON gallery";

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
            "name" => "Installation Gallery",
            "item" => "https://www.forbixindia.com/installation.php"
        )
    )
);

$additionalHeadTags = '<link rel="canonical" href="https://www.forbixindia.com/installation.php" />
    <meta property="og:url" content="https://www.forbixindia.com/installation.php" />
    <meta property="og:title" content="Customer Installation Gallery | FORBIX SEMICON" />
    <meta property="og:description" content="Explore real-world installations of FORBIX SEMICON wireless systems across hospitals, factories, and offices." />
    <script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
    <style>
    :root {
        --gallery-bg: #f8fafc;
        --gallery-card: #ffffff;
        --gallery-text: #1e293b;
        --gallery-muted: #64748b;
        --gallery-accent: #0D8F84;
        --gallery-accent-light: rgba(13, 143, 132, 0.1);
        --gallery-accent-dark: #0a7269;
        --gallery-border: #e2e8f0;
        --gallery-shadow: 0 4px 6px -1px rgba(0,0,0,0.07), 0 2px 4px -2px rgba(0,0,0,0.05);
        --gallery-shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.08), 0 4px 6px -4px rgba(0,0,0,0.05);
        --gallery-radius: 16px;
    }
    [data-theme="dark"] {
        --gallery-bg: #0f172a;
        --gallery-card: #1e293b;
        --gallery-text: #f1f5f9;
        --gallery-muted: #94a3b8;
        --gallery-accent: #2dd4bf;
        --gallery-accent-light: rgba(45, 212, 191, 0.15);
        --gallery-accent-dark: #14b8a6;
        --gallery-border: #334155;
        --gallery-shadow: 0 4px 6px -1px rgba(0,0,0,0.3), 0 2px 4px -2px rgba(0,0,0,0.2);
        --gallery-shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.4), 0 4px 6px -4px rgba(0,0,0,0.3);
    }
    .gallery-page, .gallery-page * {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
    }
    .gallery-page {
        max-width: 1400px;
        margin: 0 auto;
        padding: 24px 20px 60px;
        background: var(--gallery-bg);
        color: var(--gallery-text);
        line-height: 1.6;
    }
    @media (min-width: 768px) {
        .gallery-page { padding: 32px 32px 80px; }
    }
    .gallery-hero {
        text-align: center;
        padding: 48px 20px 56px;
        background: linear-gradient(135deg, #0D8F84 0%, #10b981 50%, #0D8F84 100%);
        border-radius: var(--gallery-radius);
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
    }
    .gallery-hero::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
        background-size: 20px 20px;
        opacity: 0.5;
    }
    .gallery-hero h1 {
        font-size: clamp(28px, 5vw, 42px);
        font-weight: 700;
        color: #ffffff;
        margin: 0 0 16px;
        position: relative;
        z-index: 1;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .gallery-hero p {
        font-size: clamp(15px, 2vw, 18px);
        color: rgba(255,255,255,0.92);
        margin: 0 auto;
        max-width: 700px;
        position: relative;
        z-index: 1;
        line-height: 1.7;
    }
    .gallery-stats {
        display: flex;
        justify-content: center;
        gap: 32px;
        margin-top: 28px;
        position: relative;
        z-index: 1;
    }
    .stat-item { text-align: center; }
    .stat-number {
        display: block;
        font-size: 32px;
        font-weight: 700;
        color: #ffffff;
    }
    .stat-label {
        font-size: 13px;
        color: rgba(255,255,255,0.8);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .category-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-bottom: 32px;
        padding: 0 10px;
    }
    .filter-btn {
        padding: 10px 20px;
        border: 1px solid var(--gallery-border);
        background: var(--gallery-card);
        color: var(--gallery-muted);
        border-radius: 999px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
        font-family: inherit;
    }
    .filter-btn:hover {
        border-color: var(--gallery-accent);
        color: var(--gallery-accent);
    }
    .filter-btn.active {
        background: var(--gallery-accent);
        border-color: var(--gallery-accent);
        color: #ffffff;
    }
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }
    @media (min-width: 640px) {
        .gallery-grid { grid-template-columns: repeat(3, 1fr); gap: 20px; }
    }
    @media (min-width: 1024px) {
        .gallery-grid { grid-template-columns: repeat(4, 1fr); gap: 24px; }
    }
    .gallery-item {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        background: var(--gallery-card);
        box-shadow: var(--gallery-shadow);
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        aspect-ratio: 4/3;
    }
    .gallery-item:hover {
        transform: translateY(-4px);
        box-shadow: var(--gallery-shadow-lg);
    }
    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .gallery-item:hover img { transform: scale(1.05); }
    .gallery-item-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.2) 50%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 16px;
    }
    .gallery-item:hover .gallery-item-overlay { opacity: 1; }
    .gallery-item-title {
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        margin: 0 0 4px;
        transform: translateY(10px);
        transition: transform 0.3s ease;
    }
    .gallery-item:hover .gallery-item-title { transform: translateY(0); }
    .gallery-item-category {
        color: rgba(255,255,255,0.75);
        font-size: 12px;
        margin: 0;
        transform: translateY(10px);
        transition: transform 0.3s ease 0.05s;
    }
    .gallery-item:hover .gallery-item-category { transform: translateY(0); }
    .gallery-item-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.8);
        width: 48px;
        height: 48px;
        background: rgba(255,255,255,0.95);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
    }
    .gallery-item:hover .gallery-item-icon {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
    .gallery-item-icon svg {
        width: 24px;
        height: 24px;
        fill: var(--gallery-accent);
    }
    .lightbox {
        position: fixed;
        inset: 0;
        z-index: 9999;
        background: rgba(0,0,0,0.95);
        display: none;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
    }
    .lightbox.active { display: flex; opacity: 1; }
    .lightbox-content {
        position: relative;
        max-width: 90vw;
        max-height: 85vh;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .lightbox-image-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        max-height: 70vh;
    }
    .lightbox-image {
        max-width: 90vw;
        max-height: 70vh;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
        transition: opacity 0.3s ease;
    }
    .lightbox-caption {
        text-align: center;
        padding: 20px;
        max-width: 600px;
    }
    .lightbox-title {
        color: #ffffff;
        font-size: 20px;
        font-weight: 600;
        margin: 0 0 8px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }
    .lightbox-description {
        color: rgba(255,255,255,0.7);
        font-size: 15px;
        margin: 0;
        line-height: 1.6;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }
    .lightbox-counter {
        color: rgba(255,255,255,0.5);
        font-size: 13px;
        margin-top: 12px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }
    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 44px;
        height: 44px;
        background: rgba(255,255,255,0.1);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
        z-index: 10;
    }
    .lightbox-close:hover {
        background: rgba(255,255,255,0.2);
        transform: rotate(90deg);
    }
    .lightbox-close svg {
        width: 24px;
        height: 24px;
        stroke: #ffffff;
    }
    .lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 52px;
        height: 52px;
        background: rgba(255,255,255,0.1);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
        z-index: 10;
    }
    .lightbox-nav:hover { background: rgba(255,255,255,0.2); }
    .lightbox-nav svg { width: 28px; height: 28px; stroke: #ffffff; }
    .lightbox-prev { left: 20px; }
    .lightbox-next { right: 20px; }
    @media (max-width: 768px) {
        .lightbox-nav { width: 44px; height: 44px; }
        .lightbox-prev { left: 10px; }
        .lightbox-next { right: 10px; }
        .lightbox-close { top: 10px; right: 10px; }
    }
    .lightbox-thumbnails {
        display: flex;
        gap: 8px;
        margin-top: 16px;
        padding: 12px;
        background: rgba(255,255,255,0.05);
        border-radius: 12px;
        max-width: 90vw;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .lightbox-thumb {
        width: 60px;
        height: 45px;
        border-radius: 6px;
        overflow: hidden;
        cursor: pointer;
        opacity: 0.5;
        transition: all 0.2s ease;
        flex-shrink: 0;
        border: 2px solid transparent;
    }
    .lightbox-thumb:hover { opacity: 0.8; }
    .lightbox-thumb.active { opacity: 1; border-color: #2dd4bf; }
    .lightbox-thumb img { width: 100%; height: 100%; object-fit: cover; }
    .loading-spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40px;
        height: 40px;
        border: 3px solid rgba(255,255,255,0.2);
        border-top-color: #2dd4bf;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
        display: none;
    }
    @keyframes spin { to { transform: translate(-50%, -50%) rotate(360deg); } }
    .scroll-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 48px;
        height: 48px;
        background: var(--gallery-accent);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: var(--gallery-shadow-lg);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 100;
    }
    .scroll-top.visible { opacity: 1; visibility: visible; }
    .scroll-top:hover { transform: translateY(-3px); background: var(--gallery-accent-dark); }
    .scroll-top svg { width: 24px; height: 24px; stroke: #ffffff; }
    </style>';

$skipCommonCss = true;
include 'includes/header.php';

// Enhanced image data with categories and detailed descriptions
$images = [
    ['file' => 'FORBIX-SEMICON-Nurse-Station.jpg', 'title' => 'Nurse Station Console', 'category' => 'Healthcare', 'description' => 'Centralized nurse station display monitoring multiple patient rooms with real-time call alerts and room status indicators.'],
    ['file' => 'FORBIX-SEMICON-Nurse-Station-1.jpg', 'title' => 'Advanced Nurse Station Setup', 'category' => 'Healthcare', 'description' => 'Complete nurse station installation featuring LCD monitor display with WiFi connectivity for hospital-wide patient monitoring.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-nurse-station.jpg', 'title' => 'Hospital Nurse Station', 'category' => 'Healthcare', 'description' => 'Professional installation of wireless nurse call system at a multi-specialty hospital nursing station.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-hospital-patient-bed-button.jpg', 'title' => 'Patient Bed Call Button', 'category' => 'Healthcare', 'description' => 'Ergonomic patient call button installed at bedside for easy one-touch emergency assistance in hospital rooms.'],
    ['file' => 'FORBIX-SEMICON-remote-patient-button-in-hospitals-1.jpg', 'title' => 'Hospital Patient Remote', 'category' => 'Healthcare', 'description' => 'Wireless patient remote control with large buttons for easy access, installed in intensive care unit.'],
    ['file' => 'FORBIX-SEMICON-remote-patient-button-in-hospitals-2.jpg', 'title' => 'ICU Patient Call System', 'category' => 'Healthcare', 'description' => 'Patient call button installation in ICU setting with waterproof design and extended battery life.'],
    ['file' => 'FORBIX-SEMICON-call-button-near-beds.jpeg', 'title' => 'Bedside Call Button', 'category' => 'Healthcare', 'description' => 'Wall-mounted call button positioned within easy reach of patients for immediate nurse assistance.'],
    ['file' => 'FORBIX-SEMICON-call-button-near-resting-area.jpeg', 'title' => 'Rest Area Call Button', 'category' => 'Healthcare', 'description' => 'Call button installed in patient rest area providing 24/7 emergency access to nursing staff.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-remotes-on-beds.jpg', 'title' => 'Multi-Bed Remote Installation', 'category' => 'Healthcare', 'description' => 'Multiple patient remotes deployed across ward beds with unique room number programming.'],
    ['file' => 'FORBIX-SEMICON-remotes.jpg', 'title' => 'Patient Remote Controllers', 'category' => 'Healthcare', 'description' => 'Collection of wireless patient call remotes ready for deployment in hospital wards.'],
    ['file' => 'FORBIX-SEMICON-emergency-pull-chord.jpg', 'title' => 'Emergency Pull Chord', 'category' => 'Healthcare', 'description' => 'Pull chord emergency button installation for bathroom safety, waterproof design for wet environments.'],
    ['file' => 'FORBIX-SEMICON-pull-chord-in-washrooms.jpg', 'title' => 'Washroom Pull Chord', 'category' => 'Healthcare', 'description' => 'Pull chord system installed in hospital washroom for patient safety and emergency alerts.'],
    ['file' => 'FORBIX-SEMICON-signal-boosters.jpg', 'title' => 'Signal Booster Units', 'category' => 'Signal Equipment', 'description' => 'High-power signal repeater units for extending wireless coverage across large healthcare facilities.'],
    ['file' => 'FORBIX-SEMICON-signal-booster-for-range-enhancement.jpg', 'title' => 'Range Enhancement Booster', 'category' => 'Signal Equipment', 'description' => 'Signal booster installation for extending communication range in multi-story buildings.'],
    ['file' => 'FORBIX-SEMICON-signal-booster-repeater-in-corridor-1.jpg', 'title' => 'Corridor Signal Repeater', 'category' => 'Signal Equipment', 'description' => 'Strategically placed repeater in hospital corridor ensuring seamless signal coverage.'],
    ['file' => 'FORBIX-SEMICON-signal-repeater-in corridor.jpg', 'title' => 'Hallway Signal Booster', 'category' => 'Signal Equipment', 'description' => 'Signal repeater mounted in hallway to eliminate dead zones and ensure reliable communication.'],
    ['file' => 'FORBIX-SEMICON-repeater-signal-booster-in-apartment-building.jpg', 'title' => 'Apartment Building Repeater', 'category' => 'Signal Equipment', 'description' => 'Signal booster installation in residential apartment building for elderly care system.'],
    ['file' => 'FORBIX-SEMICON-repeater-signal-booster-in-apartment.jpg', 'title' => 'Residential Signal Booster', 'category' => 'Signal Equipment', 'description' => 'Compact signal booster installed in apartment complex for wireless alarm coverage.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-reepater-in-balcony.jpg', 'title' => 'Balcony Repeater Setup', 'category' => 'Signal Equipment', 'description' => 'Outdoor-rated repeater mounted on balcony for extended range to adjacent buildings.'],
    ['file' => 'FORBIX-SEMICON-repeater-installation-in-balcony.jpg', 'title' => 'Outdoor Repeater Installation', 'category' => 'Signal Equipment', 'description' => 'Weather-resistant signal repeater installed in outdoor location for campus-wide coverage.'],
    ['file' => 'FORBIX-SEMICON-repeater-near-staircases.jpg', 'title' => 'Staircase Repeater', 'category' => 'Signal Equipment', 'description' => 'Signal repeater positioned near staircase to ensure coverage across multiple floors.'],
    ['file' => 'FORBIX-SEMICON-repeater-installation-for-elevator-alarm.jpg', 'title' => 'Elevator Alarm Repeater', 'category' => 'Signal Equipment', 'description' => 'Specialized repeater installation for elevator emergency alarm system connectivity.'],
    ['file' => 'FORBIX-SEMICON-signal-range-long-distance-radio.jpg', 'title' => 'Long Distance Radio', 'category' => 'Signal Equipment', 'description' => 'Long-range radio transmitter for industrial applications requiring extended communication distance.'],
    ['file' => 'FORBIX-SEMICON-receiver-indicator.jpg', 'title' => 'LED Receiver Indicator', 'category' => 'Receivers', 'description' => 'Visual LED indicator receiver displaying active call alerts with room number identification.'],
    ['file' => 'FORBIX-SEMICON-receiver-console-display-in-apartment-building.jpg', 'title' => 'Apartment Console Display', 'category' => 'Receivers', 'description' => 'Receiver console installed in apartment building security station for emergency monitoring.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-repeater-door-indicator.jpg', 'title' => 'Door Indicator Module', 'category' => 'Receivers', 'description' => 'Door-mounted indicator showing patient call status visible from corridor for quick response.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-revolving-light.jpg', 'title' => 'Revolving Alert Light', 'category' => 'Receivers', 'description' => 'High-visibility revolving light indicator for emergency alerts in noisy environments.'],
    ['file' => 'FORBIX-SEMICON-display-in-in hall.jpg', 'title' => 'Hall Display Monitor', 'category' => 'Receivers', 'description' => 'Large display screen in hospital hall showing real-time patient call status and queue information.'],
    ['file' => 'FORBIX-SEMICON-pantry-alarm-receiver.jpg', 'title' => 'Pantry Alarm Receiver', 'category' => 'Receivers', 'description' => 'Alarm receiver installed in pantry area for staff notification of patient requests.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-alarm-in-factory.jpg', 'title' => 'Factory Alarm System', 'category' => 'Industrial', 'description' => 'Industrial wireless alarm installation in manufacturing facility for worker safety alerts.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-panic-button-in-factory.jpg', 'title' => 'Factory Panic Button', 'category' => 'Industrial', 'description' => 'Emergency panic button installed on factory floor for immediate security response.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-wireless-receiver-in factory.jpg', 'title' => 'Factory Wireless Receiver', 'category' => 'Industrial', 'description' => 'Industrial-grade wireless receiver installed in factory control room for alarm monitoring.'],
    ['file' => 'FORBIX-SEMICON-transmitter-in-oil-pump.jpg', 'title' => 'Oil Pump Transmitter', 'category' => 'Industrial', 'description' => 'Rugged transmitter installed on oil pump machinery for remote status monitoring and alerts.'],
    ['file' => 'FORBIX-SEMICON-transmitter-installation.jpg', 'title' => 'Industrial Transmitter Setup', 'category' => 'Industrial', 'description' => 'Professional transmitter installation in industrial environment with weatherproof enclosure.'],
    ['file' => 'FORBIX-SEMICON-long-range-transmitter.jpg', 'title' => 'Long Range Transmitter', 'category' => 'Industrial', 'description' => 'High-power long-range transmitter for communication across large industrial complexes.'],
    ['file' => 'FORBIX-SEMICON-call-bell-in-office.jpg', 'title' => 'Office Call Bell', 'category' => 'Commercial', 'description' => 'Wireless call bell system installed in corporate office for reception and meeting room notifications.'],
    ['file' => 'FORBIX-SEMICON-call-button-in-hotels.jpg', 'title' => 'Hotel Call Button', 'category' => 'Commercial', 'description' => 'Guest service call button installation in hotel rooms for housekeeping and room service requests.'],
    ['file' => 'FORBIX-SEMICON-alert-device-for-dispensary.jpg', 'title' => 'Dispensary Alert Device', 'category' => 'Commercial', 'description' => 'Alert notification device installed in medical dispensary for queue management and patient calling.'],
    ['file' => 'FORBIX-SEMICON-outdoor-siren-defence-area.jpg', 'title' => 'Defense Area Siren', 'category' => 'Outdoor', 'description' => 'High-decibel outdoor siren installed in defense area perimeter for security breach alerts.'],
    ['file' => 'FORBIX-SEMICON-outdoor-wireless-siren-installation.jpg', 'title' => 'Outdoor Wireless Siren', 'category' => 'Outdoor', 'description' => 'Weather-resistant wireless siren installation for outdoor emergency notification system.'],
    ['file' => 'FORBIX-SEMICON-Siren-Outdoor.jpeg', 'title' => 'Perimeter Alert Siren', 'category' => 'Outdoor', 'description' => 'Outdoor perimeter siren with 120dB output for maximum alert coverage in open areas.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-36.jpg', 'title' => 'Customer Installation', 'category' => 'General', 'description' => 'Professional installation showcasing integrated wireless system deployment.'],
    ['file' => 'FORBIX-SEMICON-customer-installation-50.jpeg', 'title' => 'Complete System Setup', 'category' => 'General', 'description' => 'Comprehensive wireless automation system installation demonstrating full deployment capabilities.']
];

$categories = array_unique(array_column($images, 'category'));
sort($categories);
?>

<div class="gallery-page">
    <section class="gallery-hero">
        <h1>Customer Installation Gallery</h1>
        <p>Explore real-world deployments of FORBIX SEMICON wireless systems across hospitals, factories, offices, and residential buildings worldwide.</p>
        <div class="gallery-stats">
            <div class="stat-item">
                <span class="stat-number"><?php echo count($images); ?>+</span>
                <span class="stat-label">Installations</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">50K+</span>
                <span class="stat-label">Customers</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">15+</span>
                <span class="stat-label">Countries</span>
            </div>
        </div>
    </section>

    <div class="category-filter">
        <button class="filter-btn active" data-category="all">All</button>
        <?php foreach ($categories as $cat): ?>
            <button class="filter-btn" data-category="<?php echo htmlspecialchars(strtolower(str_replace(' ', '-', $cat))); ?>"><?php echo htmlspecialchars($cat); ?></button>
        <?php endforeach; ?>
    </div>

    <section class="gallery-grid" aria-label="Installation gallery">
        <?php foreach ($images as $index => $img): ?>
            <?php $src = 'assets/images/customer_installation_gallery/' . $img['file']; ?>
            <article class="gallery-item" 
                     data-index="<?php echo $index; ?>" 
                     data-category="<?php echo htmlspecialchars(strtolower(str_replace(' ', '-', $img['category']))); ?>"
                     data-src="<?php echo htmlspecialchars($src); ?>"
                     data-title="<?php echo htmlspecialchars($img['title']); ?>"
                     data-description="<?php echo htmlspecialchars($img['description']); ?>"
                     role="button" tabindex="0">
                <img src="<?php echo htmlspecialchars($src); ?>" 
                     alt="<?php echo htmlspecialchars($img['title'] . ' - ' . $img['description']); ?>" 
                     loading="lazy" decoding="async" />
                <div class="gallery-item-overlay">
                    <h3 class="gallery-item-title"><?php echo htmlspecialchars($img['title']); ?></h3>
                    <p class="gallery-item-category"><?php echo htmlspecialchars($img['category']); ?></p>
                </div>
                <div class="gallery-item-icon">
                    <svg viewBox="0 0 24 24"><path d="M15 3l2.3 2.3-2.89 2.87 1.42 1.42L18.7 6.7 21 9V3h-6zM3 9l2.3-2.3 2.87 2.89 1.42-1.42L6.7 5.3 9 3H3v6zm6 12l-2.3-2.3 2.89-2.87-1.42-1.42L5.3 17.3 3 15v6h6zm12-6l-2.3 2.3-2.87-2.89-1.42 1.42 2.89 2.87L15 21h6v-6z"/></svg>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</div>

<div class="lightbox" id="lightbox" role="dialog" aria-modal="true">
    <button class="lightbox-close" aria-label="Close">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>
    <button class="lightbox-nav lightbox-prev" aria-label="Previous">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
    </button>
    <div class="lightbox-content">
        <div class="lightbox-image-container">
            <div class="loading-spinner" id="lightbox-loader"></div>
            <img class="lightbox-image" id="lightbox-image" src="" alt="" />
        </div>
        <div class="lightbox-caption">
            <h2 class="lightbox-title" id="lightbox-title"></h2>
            <p class="lightbox-description" id="lightbox-description"></p>
            <p class="lightbox-counter" id="lightbox-counter"></p>
        </div>
        <div class="lightbox-thumbnails" id="lightbox-thumbnails"></div>
    </div>
    <button class="lightbox-nav lightbox-next" aria-label="Next">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>
</div>

<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">
    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
</button>

<script>
(function() {
    var galleryItems = document.querySelectorAll('.gallery-item');
    var lightbox = document.getElementById('lightbox');
    var lightboxImage = document.getElementById('lightbox-image');
    var lightboxTitle = document.getElementById('lightbox-title');
    var lightboxDescription = document.getElementById('lightbox-description');
    var lightboxCounter = document.getElementById('lightbox-counter');
    var lightboxThumbnails = document.getElementById('lightbox-thumbnails');
    var lightboxLoader = document.getElementById('lightbox-loader');
    var filterButtons = document.querySelectorAll('.filter-btn');
    var scrollTopBtn = document.getElementById('scroll-top');
    var currentIndex = 0;
    var visibleItems = Array.prototype.slice.call(galleryItems);

    filterButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var category = this.getAttribute('data-category');
            filterButtons.forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            galleryItems.forEach(function(item) {
                item.style.display = (category === 'all' || item.getAttribute('data-category') === category) ? '' : 'none';
            });
            visibleItems = Array.prototype.slice.call(galleryItems).filter(function(item) {
                return item.style.display !== 'none';
            });
        });
    });

    function openLightbox(index) {
        currentIndex = index;
        updateLightbox();
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
        buildThumbnails();
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    function updateLightbox() {
        var item = visibleItems[currentIndex];
        if (!item) return;
        lightboxLoader.style.display = 'block';
        lightboxImage.style.opacity = '0';
        var img = new Image();
        img.onload = function() {
            lightboxImage.src = item.getAttribute('data-src');
            lightboxImage.alt = item.getAttribute('data-title');
            lightboxImage.style.opacity = '1';
            lightboxLoader.style.display = 'none';
        };
        img.src = item.getAttribute('data-src');
        lightboxTitle.textContent = item.getAttribute('data-title');
        lightboxDescription.textContent = item.getAttribute('data-description');
        lightboxCounter.textContent = (currentIndex + 1) + ' / ' + visibleItems.length;
        document.querySelectorAll('.lightbox-thumb').forEach(function(thumb, i) {
            thumb.classList.toggle('active', i === currentIndex);
        });
        var activeThumb = document.querySelector('.lightbox-thumb.active');
        if (activeThumb) activeThumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    }

    function buildThumbnails() {
        lightboxThumbnails.innerHTML = '';
        visibleItems.forEach(function(item, i) {
            var thumb = document.createElement('div');
            thumb.className = 'lightbox-thumb' + (i === currentIndex ? ' active' : '');
            thumb.innerHTML = '<img src="' + item.getAttribute('data-src') + '" alt="" loading="lazy" />';
            thumb.addEventListener('click', function() { currentIndex = i; updateLightbox(); });
            lightboxThumbnails.appendChild(thumb);
        });
    }

    function navigate(dir) {
        currentIndex += dir;
        if (currentIndex < 0) currentIndex = visibleItems.length - 1;
        if (currentIndex >= visibleItems.length) currentIndex = 0;
        updateLightbox();
    }

    galleryItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var idx = visibleItems.indexOf(item);
            if (idx !== -1) openLightbox(idx);
        });
        item.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                var idx = visibleItems.indexOf(item);
                if (idx !== -1) openLightbox(idx);
            }
        });
    });

    document.querySelector('.lightbox-close').addEventListener('click', closeLightbox);
    document.querySelector('.lightbox-prev').addEventListener('click', function() { navigate(-1); });
    document.querySelector('.lightbox-next').addEventListener('click', function() { navigate(1); });

    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') navigate(-1);
        if (e.key === 'ArrowRight') navigate(1);
    });

    lightbox.addEventListener('click', function(e) { if (e.target === lightbox) closeLightbox(); });

    var touchStartX = 0;
    lightbox.addEventListener('touchstart', function(e) { touchStartX = e.changedTouches[0].screenX; }, { passive: true });
    lightbox.addEventListener('touchend', function(e) {
        var diff = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) > 50) navigate(diff > 0 ? 1 : -1);
    }, { passive: true });

    window.addEventListener('scroll', function() {
        scrollTopBtn.classList.toggle('visible', window.scrollY > 500);
    }, { passive: true });

    scrollTopBtn.addEventListener('click', function() { window.scrollTo({ top: 0, behavior: 'smooth' }); });
})();
</script>

<?php include 'includes/footer.php'; ?>
