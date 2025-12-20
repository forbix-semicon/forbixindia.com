<?php
$pageTitle = "LED Indicators & 7-Segment Displays for Healthcare | FORBIX SEMICON®";
$pageDescription = "Professional LED indicators, 7-segment displays and door modules for hospitals and healthcare facilities. Visual call identification, room status indicators, and corridor navigation systems for efficient staff response.";
$pageKeywords = "LED indicators, 7-segment display, door modules, corridor indicators, room status display, healthcare visual alerts";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "LED Indicators, 7-Segment Displays & Door Modules",
    "image" => "https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-nurse-station-indicator-receiver.jpg",
    "description" => $pageDescription,
    "brand" => array(
        "@type" => "Brand",
        "name" => "FORBIX SEMICON®"
    ),
    "manufacturer" => array(
        "@type" => "Organization",
        "name" => "FORBIX SEMICON® Technologies Pvt Ltd",
        "url" => "https://www.forbixindia.com"
    )
);

$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/device-receiver-indicators.php" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="https://www.forbixindia.com/device-receiver-indicators.php" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-nurse-station-indicator-receiver.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON LED Indicators and Door Modules" />
    <script type="application/ld+json">' . json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
';

include __DIR__ . '/includes/header.php';
?>

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
    
    /* Main Header Section */
    .header-section {
        background: linear-gradient(135deg, var(--bg-secondary), var(--bg-primary));
        border-radius: 16px;
        padding: 2rem;
        margin: 1rem 0;
        border: 1px solid var(--border-color);
        box-shadow: 0 4px 20px var(--shadow-light);
    }
    .header-section h1 {
        margin-bottom: 1rem;
        color: var(--text-primary);
    }
    .header-section hr {
        margin: 1rem 0;
        border: none;
        border-top: 2px solid var(--accent-color);
        width: 100px;
    }
    .header-section p {
        margin-bottom: 1.5rem;
        line-height: 1.6;
        color: var(--text-secondary);
    }
    
    /* Brand Info */
    .brand-info {
        background: linear-gradient(135deg, var(--bg-secondary), var(--bg-primary));
        border-radius: 16px;
        padding: 1.5rem;
        text-align: center;
        margin: 1rem 0;
        border: 1px solid var(--border-color);
        box-shadow: 0 4px 15px var(--shadow-light);
    }
    .brand-info h3 {
        color: var(--accent-color);
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
    .brand-info p {
        color: var(--text-secondary);
        margin-bottom: 1rem;
    }
    .model-info {
        display: inline-flex;
        align-items: center;
        gap: 1rem;
        background: var(--bg-card);
        padding: 1rem 1.5rem;
        border-radius: 12px;
        border: 2px solid var(--accent-color);
        margin-top: 1rem;
    }
    .model-info span {
        color: var(--text-primary);
    }
    
    /* Component Cards */
    .comp-card {
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: 2rem;
        margin: 1rem 0;
        box-shadow: 0 4px 20px var(--shadow-light);
        transition: all 0.3s ease;
    }
    .comp-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 30px var(--shadow-medium);
    }
    .comp-card h2 {
        color: var(--accent-color);
        margin-bottom: 1rem;
    }
    .comp-card p {
        color: var(--text-secondary);
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }
    
    /* Buttons */
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
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .btn-primary {
        background: linear-gradient(135deg, var(--accent-color), #0f766e);
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
    
    /* Product Section */
    .product-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        align-items: start;
        margin: 3rem 0;
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
        height: 300px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 25px var(--shadow-medium);
        cursor: pointer;
        transition: transform 0.3s ease;
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
    @media (max-width: 768px) {
        .featured-image {
            height: 250px;
        }
    }
    @media (max-width: 480px) {
        .featured-image {
            height: 200px;
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
    
    /* Product Info */
    .product-info {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin: 1rem 0;
    }
    @media (max-width: 768px) {
        .product-info {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }
    .info-section h3 {
        color: var(--accent-color);
        border-bottom: 2px solid var(--accent-color);
        padding-bottom: 0.5rem;
        margin-bottom: 1.5rem;
    }
    .info-list {
        list-style: none;
        padding: 0;
    }
    .info-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: var(--text-secondary);
    }
    .info-list li:last-child {
        border-bottom: none;
    }
    .info-list li::before {
        content: '✓';
        color: var(--accent-color);
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    /* Tech Grid */
    .tech-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        margin: 1rem 0;
    }
    @media (max-width: 768px) {
        .tech-grid {
            grid-template-columns: 1fr;
        }
    }
    .tech-item {
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 1.5rem;
        transition: all 0.3s ease;
    }
    .tech-item:hover {
        border-color: var(--accent-color);
        transform: translateY(-2px);
    }
    .tech-item h4 {
        color: var(--accent-color);
        margin-bottom: 0.5rem;
        font-size: 1.1rem;
    }
    .tech-item p {
        margin: 0;
        font-size: 0.95rem;
        line-height: 1.5;
        color: var(--text-secondary);
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

    <main>
      <div class="header-section">
        <div>
          <h1>LED Indicators & 7-Segment Displays for Healthcare</h1>
          <hr>
          <p>
            Experience next-generation <strong>visual indicator technology</strong> designed for comprehensive healthcare facility navigation. 
            Our <strong>LED indicators and door modules</strong> provide instant visual identification of active calls and room status, 
            enabling rapid staff response and efficient patient care coordination. Perfect for hospitals, nursing homes, and medical centers 
            requiring clear visual communication systems.
          </p>
          
          <div class="brand-info">
            <h3>FORBIX SEMICON® Visual Indicator & Door Module System</h3>
            <p>Advanced Visual Communication for Healthcare Facilities</p>
            <div class="model-info">
              <span><strong>Model:</strong> FBXCSIxA/FBXCSL04A/FBXDM01 </span>
              <span><strong>Brand:</strong> FORBIX SEMICON®</span>
            </div>
          </div>
        </div>
      </div>

      <div class="comp-card">
        <h2>LED Indicators & 7-Segment Display Documentation</h2>
        <p>
          Explore comprehensive resources including product demonstrations, technical specifications, and detailed documentation. 
          Our visual indicator systems ensure clear communication and quick identification of patient calls with versatile 
          installation options for any healthcare facility layout.
        </p>
        
        <div class="btn-group">
          <a href="nurse-call.php" class="btn-primary">
            <span>↩️</span> Back to Nurse Call System
          </a>
          <a href="https://youtu.be/iod49mQkY1A" target="_blank" class="btn-secondary">
            <span>▶️</span> Indicator Model Video
          </a>
          <a href="https://youtu.be/1hGptB2pZE0" target="_blank" class="btn-secondary">
            <span>▶️</span> 7-Seg Model Video
          </a>
          <a href="https://youtu.be/If7hgp5mXNE" target="_blank" class="btn-secondary">
            <span>▶️</span> Door Module Video
          </a>
          <a href="docs/FBXCSI20-20-indicator-receiver.pdf" target="_blank" class="btn-secondary">
            <span>📋</span> Technical Specification
          </a>
        </div>
      </div>

      <div class="product-section">
        <div class="image-gallery">
          <div class="featured-image">
            <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-station-indicator-receiver.jpg" 
                 alt="FORBIX SEMICON® Nurse Station Indicator Receiver" />
          </div>
          <div class="thumbnail-grid">
            <div class="thumbnail active">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-station-indicator-receiver.jpg" 
                   alt="FORBIX SEMICON® Nurse Station Indicator Receiver" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-indicator-receiver-in-hospitals.jpg" 
                   alt="FORBIX SEMICON® Indicator Receiver in Hospitals" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-station-4digit-display.jpg" 
                   alt="FORBIX SEMICON® 4-Digit Display Station" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-station-receiver-indicator.jpg" 
                   alt="FORBIX SEMICON® Station Receiver Indicator" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-station-installation.jpg" 
                   alt="FORBIX SEMICON® Nurse Station Installation" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-hospital-corridor-indicator.jpg" 
                   alt="FORBIX SEMICON® Hospital Corridor Indicator" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-door-module-indicator.jpg" 
                   alt="FORBIX SEMICON® Door Module Indicator" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-room-indicator-module.jpg" 
                   alt="FORBIX SEMICON® Room Indicator Module" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-door-indicator-module.jpg" 
                   alt="FORBIX SEMICON® Door Indicator Module" />
            </div>
          </div>
        </div>

        <div class="product-info">
          <div class="info-section">
            <h3>Key Features</h3>
            <ul class="info-list">
              <li>LED Indicators, 7-Segment Displays & Door Modules</li>
              <li>Indicator receiver in 10-32 calling point models</li>
              <li>7-segment in 2/3/4 digit display models</li>
              <li>Shows alpha-numeric nos: 401, 312A, 78, 12E...</li>
              <li>Round-robin display on 7-seg for more than 1 call</li>
              <li>Door modules with bright LED that glows outside a room</li>
              <li>Continuous buzzing sound with volume control</li>
            </ul>
          </div>
          
          <div class="info-section">
            <h3>Technical Specifications</h3>
            <ul class="info-list">
              <li>Model: FBXCSIxA/FBXCSL04A/FBXDM01</li>
              <li>Runs on 220AC/12VDC adapter power supply</li>
              <li>Multiple calling point capacity (10-32 points)</li>
              <li>Alpha-numeric display capability</li>
              <li>Adjustable volume control for audio alerts</li>
              <li>Bright LED indicators for room identification</li>
              <li>Applications: Visually identifies active calls and room status for quick staff navigation</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="comp-card">
        <h2>Healthcare Visual Alerts & Room Status Display Systems</h2>
        <div class="tech-grid">
          <div class="tech-item">
            <h4>Multi-Point Indicator System</h4>
            <p>Comprehensive indicator receivers supporting 10-32 calling points enable centralized monitoring of entire hospital floors or wings, providing staff with instant visual awareness of all active patient calls across multiple rooms simultaneously.</p>
          </div>
          <div class="tech-item">
            <h4>Alpha-Numeric Display Technology</h4>
            <p>Advanced 7-segment displays show detailed room identifiers including alpha-numeric combinations (401, 312A, 78, 12E) enabling precise location identification for complex facility layouts with multiple buildings, floors, and room designations.</p>
          </div>
          <div class="tech-item">
            <h4>Round-Robin Call Management</h4>
            <p>Intelligent round-robin display system cycles through multiple simultaneous calls on 7-segment displays, ensuring no patient call is missed even during high-activity periods when multiple rooms require attention simultaneously.</p>
          </div>
          <div class="tech-item">
            <h4>Corridor Module Navigation</h4>
            <p>Strategic corridor module placement throughout healthcare facilities provides continuous visual guidance for staff navigation, enabling quick identification of active call zones and efficient routing to patient locations during emergency situations.</p>
          </div>
          <div class="tech-item">
            <h4>Room Indicator Module System</h4>
            <p>Bright LED door modules positioned outside patient rooms provide immediate visual identification of call status, allowing staff to quickly assess room priority from a distance and respond appropriately to urgent situations without delay.</p>
          </div>
          <div class="tech-item">
            <h4>Audio-Visual Alert Integration</h4>
            <p>Continuous buzzing sound system with adjustable volume control complements visual indicators, ensuring staff awareness even in noisy hospital environments while maintaining appropriate sound levels for patient comfort and facility regulations.</p>
          </div>
          <div class="tech-item">
            <h4>Flexible Display Configuration</h4>
            <p>Multiple 7-segment display options (2, 3, or 4 digits) accommodate facilities of varying sizes and complexity, from small clinics with simple room numbers to large hospital complexes with detailed location coding systems.</p>
          </div>
          <div class="tech-item">
            <h4>Corridor Traffic Management</h4>
            <p>Strategically positioned corridor indicators help manage staff traffic flow by clearly identifying which areas require attention, reducing congestion in hallways and ensuring efficient distribution of healthcare personnel throughout the facility.</p>
          </div>
          <div class="tech-item">
            <h4>Room Status Communication</h4>
            <p>Door-mounted LED modules provide instant room status communication to all passing staff, visitors, and support personnel, creating a facility-wide awareness system that improves overall coordination and patient care efficiency.</p>
          </div>
          <div class="tech-item">
            <h4>Dual Power Supply Reliability</h4>
            <p>Flexible 220AC/12VDC power options ensure continuous operation during power fluctuations, with backup power compatibility maintaining critical visual communication systems during emergency situations or facility maintenance periods.</p>
          </div>
          <div class="tech-item">
            <h4>Corridor Module Advantages</h4>
            <p>Corridor modules offer superior visibility from long distances, weather-resistant construction for various environments, energy-efficient LED technology, easy installation without complex wiring, and scalable deployment across unlimited facility zones for comprehensive coverage.</p>
          </div>
          <div class="tech-item">
            <h4>Room Indicator Benefits</h4>
            <p>Room indicator modules provide instant call identification, priority-based color coding, silent visual alerts for patient privacy, maintenance-free operation, universal mounting compatibility, and integration with existing nurse call infrastructure for seamless facility-wide communication.</p>
          </div>
        </div>
      </div>

    </main>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox">
    <div class="lightbox-content">
        <button class="lightbox-close">&times;</button>
        <button class="lightbox-prev">&#8592;</button>
        <img id="lightbox-img" src="" alt="">
        <button class="lightbox-next">&#8594;</button>
        <div class="lightbox-counter">
            <span id="lightbox-current">1</span> / <span id="lightbox-total">1</span>
        </div>
    </div>
</div>

<script>
// Image Lightbox Functionality
class ImageLightbox {
    constructor() {
        this.images = [];
        this.currentIndex = 0;
        this.lightbox = null;
        this.init();
    }

    init() {
        this.createLightbox();
        this.bindEvents();
        this.collectImages();
    }

    createLightbox() {
        // Lightbox HTML is already in the page
        this.lightbox = document.getElementById('lightbox');
    }

    collectImages() {
        // Collect all gallery images
        const galleries = document.querySelectorAll('.thumbnail-grid');
        galleries.forEach(gallery => {
            const images = gallery.querySelectorAll('img');
            images.forEach((img, index) => {
                img.addEventListener('click', () => {
                    this.openLightbox(img.src, img.alt, index, gallery);
                });
            });
        });

        // Also make featured images clickable
        const featuredImages = document.querySelectorAll('.featured-image img');
        featuredImages.forEach(img => {
            img.addEventListener('click', () => {
                const gallery = img.closest('.image-gallery').querySelector('.thumbnail-grid');
                if (gallery) {
                    const firstImg = gallery.querySelector('img');
                    if (firstImg) {
                        this.openLightbox(firstImg.src, firstImg.alt, 0, gallery);
                    }
                }
            });
        });
    }

    openLightbox(src, alt, index, gallery) {
        // Collect images from the current gallery
        this.images = Array.from(gallery.querySelectorAll('img')).map(img => ({
            src: img.src,
            alt: img.alt
        }));
        
        this.currentIndex = index;
        this.showImage();
        this.lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    showImage() {
        const img = document.getElementById('lightbox-img');
        const current = document.getElementById('lightbox-current');
        const total = document.getElementById('lightbox-total');
        
        if (img && this.images[this.currentIndex]) {
            img.src = this.images[this.currentIndex].src;
            img.alt = this.images[this.currentIndex].alt;
            if (current) current.textContent = this.currentIndex + 1;
            if (total) total.textContent = this.images.length;
        }
    }

    next() {
        this.currentIndex = (this.currentIndex + 1) % this.images.length;
        this.showImage();
    }

    prev() {
        this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
        this.showImage();
    }

    close() {
        this.lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    bindEvents() {
        // Button events
        const closeBtn = document.querySelector('.lightbox-close');
        const prevBtn = document.querySelector('.lightbox-prev');
        const nextBtn = document.querySelector('.lightbox-next');
        
        if (closeBtn) closeBtn.addEventListener('click', () => this.close());
        if (prevBtn) prevBtn.addEventListener('click', () => this.prev());
        if (nextBtn) nextBtn.addEventListener('click', () => this.next());
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!this.lightbox.classList.contains('active')) return;
            
            switch(e.key) {
                case 'Escape':
                    this.close();
                    break;
                case 'ArrowLeft':
                    this.prev();
                    break;
                case 'ArrowRight':
                    this.next();
                    break;
            }
        });

        // Close on background click
        if (this.lightbox) {
            this.lightbox.addEventListener('click', (e) => {
                if (e.target === this.lightbox) {
                    this.close();
                }
            });
        }
    }
}

// Gallery Functionality - Thumbnail to Featured Image
function initializeGalleries() {
    document.querySelectorAll('.thumbnail-grid').forEach(grid => {
        const featuredImg = grid.closest('.image-gallery').querySelector('.featured-image img');
        const thumbnails = grid.querySelectorAll('.thumbnail');
        
        thumbnails.forEach((thumb, index) => {
            thumb.addEventListener('click', () => {
                // Update featured image
                if (featuredImg) {
                    featuredImg.src = thumb.querySelector('img').src;
                    featuredImg.alt = thumb.querySelector('img').alt;
                }
                
                // Update active thumbnail
                thumbnails.forEach(t => t.classList.remove('active'));
                thumb.classList.add('active');
            });
        });
        
        // Set first thumbnail as active initially
        if (thumbnails.length > 0) {
            thumbnails[0].classList.add('active');
        }
    });
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize gallery functionality
    initializeGalleries();
    
    // Initialize lightbox
    window.lightbox = new ImageLightbox();
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
