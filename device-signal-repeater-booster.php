<?php
$pageTitle = "Signal Repeater Booster - FORBIX SEMICON® Healthcare Technology";
$pageDescription = "Professional signal repeater booster for hospitals and healthcare facilities. Extends wireless coverage in large facilities, increases communication range, and ensures no patient call is missed across multiple floors.";
$pageKeywords = "signal repeater booster, wireless range extender, hospital signal booster, healthcare communication repeater, nurse call range enhancement";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Signal Repeater Booster",
    "image" => "https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-nurse-call-signal-repeater-booster.jpg",
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
    <link rel="canonical" href="https://www.forbixindia.com/device-signal-repeater-booster.php" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="https://www.forbixindia.com/device-signal-repeater-booster.php" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-nurse-call-signal-repeater-booster.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Signal Repeater Booster" />
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
          <h1>Signal Repeater Booster for Healthcare</h1>
          <hr>
          <p>
            Experience next-generation <strong>signal repeater booster technology</strong> designed for large healthcare facilities. 
            Our <strong>wireless range extension system</strong> ensures comprehensive coverage across multi-story buildings and 
            extended campus environments, eliminating dead zones and guaranteeing no patient call is ever missed. Perfect for 
            hospitals, nursing homes, and medical complexes requiring extended communication range.
          </p>
          
          <div class="brand-info">
            <h3>FORBIX SEMICON® Signal Repeater Booster System</h3>
            <p>Extended Range Communication for Large Healthcare Facilities</p>
            <div class="model-info">
              <span><strong>Model:</strong> FBXCSR01A </span>
              <span><strong>Brand:</strong> FORBIX SEMICON®</span>
            </div>
          </div>
        </div>
      </div>

      <div class="comp-card">
        <h2>Signal Repeater Booster Documentation</h2>
        <p>
          Explore comprehensive resources including product demonstrations, technical specifications, and detailed documentation. 
          Our signal repeater technology eliminates coverage gaps and extends communication range throughout large facilities 
          with simple installation and reliable performance.
        </p>
        
        <div class="btn-group">
          <a href="nurse-call.php" class="btn-primary">
            <span>↩️</span> Back to Nurse Call System
          </a>
          <a href="https://youtu.be/DlZpK9NJPug" target="_blank" class="btn-secondary">
            <span>▶️</span> Video: Signal Repeater Booster
          </a>
          <a href="docs/FBXCSRPT01C-spec-repeater-booster.pdf" target="_blank" class="btn-secondary">
            <span>📋</span> Technical Specification
          </a>
        </div>
      </div>

      <div class="product-section">
        <div class="image-gallery">
          <div class="featured-image">
            <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-signal-repeater-booster.jpg" 
                 alt="FORBIX SEMICON® Signal Repeater Booster" />
          </div>
          <div class="thumbnail-grid">
            <div class="thumbnail active">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-signal-repeater-booster.jpg" 
                   alt="FORBIX SEMICON® Signal Repeater Booster" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-nurse-call-signal-repeater.jpg" 
                   alt="FORBIX SEMICON® Signal Repeater" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-wireless-repeater-signal-booster.jpg" 
                   alt="FORBIX SEMICON® Wireless Repeater Signal Booster" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system-architecture.jpg" 
                   alt="FORBIX SEMICON® Wireless System Architecture" />
            </div>
          </div>
        </div>

        <div class="product-info">
          <div class="info-section">
            <h3>Key Features</h3>
            <ul class="info-list">
              <li>Signal Repeater Booster</li>
              <li>Repeater helps in increasing the range of communication</li>
              <li>It catches feeble remote signals and forwards</li>
              <li>Gives best results if installed in corridors</li>
              <li>The device is capable of sending signals across floors</li>
              <li>Runs on 220AC/12VDC adapter power supply</li>
              <li>Range enhancement: 30-40m indoors, 100-120m outdoors</li>
            </ul>
          </div>
          
          <div class="info-section">
            <h3>Technical Specifications</h3>
            <ul class="info-list">
              <li>Model: FBXCSR01A</li>
              <li>Frequency: 433MHz ISM band</li>
              <li>Power supply: 220AC/12VDC adapter</li>
              <li>Indoor range extension: Additional 30-40 meters</li>
              <li>Outdoor range extension: Additional 100-120 meters</li>
              <li>Multi-floor signal transmission capability</li>
              <li>Applications: Extends wireless coverage in large facilities to ensure no call is missed</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="comp-card">
        <h2>Wireless Range Extender & Healthcare Communication Repeater</h2>
        <div class="tech-grid">
          <div class="tech-item">
            <h4>Advanced Signal Amplification</h4>
            <p>Sophisticated signal repeater technology captures weak remote signals and amplifies them for retransmission, effectively doubling the communication range and eliminating dead zones in large healthcare facilities with complex architectural layouts.</p>
          </div>
          <div class="tech-item">
            <h4>Multi-Floor Coverage Extension</h4>
            <p>Powerful signal transmission capability enables communication across multiple floors and building levels, ensuring vertical coverage in high-rise hospitals and medical centers where traditional wireless signals would be blocked by concrete and steel structures.</p>
          </div>
          <div class="tech-item">
            <h4>Corridor Optimization Strategy</h4>
            <p>Strategic corridor placement maximizes signal propagation efficiency by utilizing natural building pathways for optimal signal distribution, providing comprehensive coverage throughout hospital wings, departments, and interconnected facility areas.</p>
          </div>
          <div class="tech-item">
            <h4>Indoor Range Enhancement</h4>
            <p>Extends indoor wireless communication range by an additional 30-40 meters, effectively covering large hospital wards, extended corridors, cafeterias, and administrative areas where standard wireless signals would typically weaken or fail completely.</p>
          </div>
          <div class="tech-item">
            <h4>Outdoor Coverage Expansion</h4>
            <p>Provides exceptional outdoor range enhancement of 100-120 additional meters, enabling communication across hospital campuses, parking areas, external pavilions, and outdoor patient care facilities while maintaining reliable signal strength.</p>
          </div>
          <div class="tech-item">
            <h4>Seamless Signal Forwarding</h4>
            <p>Intelligent signal forwarding system automatically detects, captures, and retransmits feeble remote signals without delay or distortion, ensuring critical patient calls reach nursing stations even from the most remote facility locations.</p>
          </div>
          <div class="tech-item">
            <h4>Large Facility Coverage Solutions</h4>
            <p>Specifically engineered for expansive healthcare facilities including multi-building hospital complexes, extended care campuses, rehabilitation centers, and medical universities requiring comprehensive wireless communication coverage across vast areas.</p>
          </div>
          <div class="tech-item">
            <h4>Signal Quality Preservation</h4>
            <p>Advanced amplification technology maintains original signal integrity while boosting strength, ensuring clear communication without noise, interference, or signal degradation that could compromise critical patient care communications.</p>
          </div>
          <div class="tech-item">
            <h4>Zero Dead Zone Architecture</h4>
            <p>Strategic repeater deployment creates overlapping coverage zones that eliminate communication dead spots, ensuring every patient room, corridor, basement level, and remote facility area maintains reliable wireless connectivity for emergency calls.</p>
          </div>
          <div class="tech-item">
            <h4>Scalable Network Expansion</h4>
            <p>Multiple repeater units can be interconnected to create extensive coverage networks spanning entire hospital campuses, with each unit extending range by 30-40m indoors and 100-120m outdoors for unlimited facility expansion possibilities.</p>
          </div>
          <div class="tech-item">
            <h4>Mission-Critical Reliability</h4>
            <p>Hospital-grade reliability ensures 24/7 operation with minimal maintenance requirements, featuring robust construction that withstands healthcare environment demands while providing consistent signal amplification for life-critical communication systems.</p>
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
