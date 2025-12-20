<?php
$pageTitle = "Automatic Timer Alarm System - FORBIX SEMICON® Programmable RTC Siren";
$pageDescription = "Professional automatic timer alarm system with RTC programmable scheduling. Wireless, reliable timer-controlled sirens for schools, factories, hospitals, and industrial facilities.";
$pageKeywords = "automatic timer alarm, programmable timer siren, RTC alarm system, scheduled alarm, wireless timer alarm, school bell system, factory shift alarm, prayer time alarm";

// Product Schema
$productSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Automatic Timer Alarm System",
    "image" => "https://www.forbixindia.com/assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-timer-automatic.jpg",
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
    <link rel="canonical" href="https://www.forbixindia.com/device-automatic-timer-alarm.php" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="https://www.forbixindia.com/device-automatic-timer-alarm.php" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-timer-automatic.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Automatic Timer Alarm System" />
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

    /* Video Links Section */
    .video-links {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        margin: 1.5rem 0;
    }
    .video-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 10px 20px;
        background: var(--bg-card);
        border: 2px solid var(--accent-color);
        border-radius: 25px;
        color: var(--accent-color);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        width: fit-content;
    }
    .video-link:hover {
        background: var(--accent-color);
        color: white;
        transform: translateX(5px);
    }
    .video-link .material-icons {
        font-size: 1.2rem;
    }

    /* Applications Badge */
    .applications-badge {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 1rem;
    }
    .app-tag {
        display: inline-block;
        padding: 6px 14px;
        background: linear-gradient(135deg, var(--accent-color), #0f766e);
        color: white;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
    [data-theme="dark"] .app-tag {
        background: linear-gradient(135deg, #14b8a6, #0d9488);
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
          <h1>Automatic Timer Alarm System with RTC</h1>
          <hr>
          <p>
            Experience precision-engineered <strong>automatic timer alarm technology</strong> designed for scheduled alert systems. 
            Our <strong>wireless programmable timer siren</strong> features built-in Real Time Clock (RTC) for accurate, 
            automated alarm activation at preset times. Perfect for schools, factories, hospitals, religious institutions, and industrial facilities.
          </p>
          
          <div class="brand-info">
            <h3>FORBIX SEMICON® Wireless Timer Alarm System</h3>
            <p>Advanced Time-Based Automation with Reliable Wireless Alert Technology</p>
            <div class="model-info">
              <span><strong>Model:</strong> FBXPTA01 </span>
              <span><strong>Brand:</strong> FORBIX SEMICON®</span>
            </div>
          </div>
        </div>
      </div>

      <div class="comp-card">
        <h2>Automatic Timer Alarm System Documentation</h2>
        <p>
          Explore comprehensive resources including product demonstrations, technical specifications, and detailed documentation. 
          Our wireless timer alarm system ensures precise scheduling with hassle-free installation for any facility requiring automated alerts.
        </p>
        
        <div class="btn-group">
          <a href="panic-alarm.php" class="btn-primary">
            <span>↩️</span> Back to Panic Alarm System
          </a>
        </div>

      </div>

      <div class="product-section">
        <div class="image-gallery">
          <div class="featured-image">
            <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-programmable-timer.jpg" 
                 alt="FORBIX SEMICON® Automatic Timer Panic Alarm with RTC Programmable Scheduling" />
          </div>
          <div class="thumbnail-grid">
            <div class="thumbnail">
              <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-timer-automatic.jpg" 
                   alt="FORBIX SEMICON® Automatic Timer Panic Alarm with RTC Programmable Scheduling" />
            </div>
            <div class="thumbnail">
              <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-programmable-timer.jpg" 
                   alt="FORBIX SEMICON® Programmable Timer Panic Alarm for Scheduled Security Alerts" />
            </div>
          </div>
        </div>

        <div class="product-info">
          <div class="info-section">
            <h3>Key Features</h3>
            <ul class="info-list">
              <li>Built-in Real Time Clock (RTC) module</li>
              <li>Multiple programmable alarm schedules</li>
              <li>Daily, weekly, and custom timing modes</li>
              <li>Adjustable alarm duration (5 sec to 60 min)</li>
              <li>Battery backup maintains time during power outage</li>
              <li>Wireless range: 100-150 meters outdoor</li>
              <li>Compatible with revolving lights & loud sirens</li>
            </ul>
          </div>
          
          <div class="info-section">
            <h3>Technical Specifications</h3>
            <ul class="info-list">
              <li>Frequency: 433MHz ISM band</li>
              <li>RTC accuracy: ±2 seconds/day</li>
              <li>Up to 20 programmable time slots</li>
              <li>Operating voltage: 12V DC / 220V AC</li>
              <li>Operating temperature: -10°C to 60°C</li>
              <li>Easy push-button programming</li>
              <li>LED status indicators for time & alarm</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="comp-card">
        <h2>Programmable Timer Siren & RTC Alarm Applications</h2>
        <div class="tech-grid">
          <div class="tech-item">
            <h4>School Bell Systems</h4>
            <p>Automate class period bells, lunch breaks, and assembly calls with precision timing. No manual intervention required once programmed.</p>
          </div>
          <div class="tech-item">
            <h4>Factory Shift Alerts</h4>
            <p>Signal shift changes, break times, and emergency drills automatically. Perfect for manufacturing plants and industrial facilities.</p>
          </div>
          <div class="tech-item">
            <h4>Prayer Time Notifications</h4>
            <p>Automated alerts for mosques, temples, and churches. Programmable for different prayer times with adjustable volume levels.</p>
          </div>
          <div class="tech-item">
            <h4>Hospital Medication Reminders</h4>
            <p>Schedule regular medication alerts for patients in healthcare facilities. Ensures timely medical interventions.</p>
          </div>
          <div class="tech-item">
            <h4>Office Hour Announcements</h4>
            <p>Automated start/end of day signals, meeting reminders, and evacuation drill alerts for corporate buildings.</p>
          </div>
          <div class="tech-item">
            <h4>Warehouse & Logistics</h4>
            <p>Coordinate shift rotations, loading/unloading schedules, and safety break reminders for warehouse operations.</p>
          </div>
        </div>

        <div style="margin-top: 2rem;">
          <p style="color: var(--text-secondary); margin-bottom: 0.75rem;"><strong>Applications:</strong></p>
          <div class="applications-badge">
            <span class="app-tag">School Bells</span>
            <span class="app-tag">Factory Shifts</span>
            <span class="app-tag">Prayer Times</span>
            <span class="app-tag">Hospital Alerts</span>
            <span class="app-tag">Office Hours</span>
            <span class="app-tag">Emergency Drills</span>
            <span class="app-tag">Warehouse Operations</span>
          </div>
        </div>
      </div>

      <div class="comp-card">
        <h2>Advanced Timer Alarm Technology</h2>
        <div class="tech-grid">
          <div class="tech-item">
            <h4>Precision RTC Module</h4>
            <p>High-accuracy Real Time Clock ensures alarms trigger within ±2 seconds of scheduled time, even after extended use.</p>
          </div>
          <div class="tech-item">
            <h4>Multiple Time Slots</h4>
            <p>Program up to 20 different alarm times for complex daily schedules with individual duration and output settings.</p>
          </div>
          <div class="tech-item">
            <h4>Battery Backup System</h4>
            <p>Internal battery maintains accurate time during power outages, ensuring schedules are never lost or disrupted.</p>
          </div>
          <div class="tech-item">
            <h4>Wireless Siren Integration</h4>
            <p>Seamlessly connects with wireless sirens, revolving lights, and LED displays for comprehensive alert systems.</p>
          </div>
          <div class="tech-item">
            <h4>Flexible Duration Control</h4>
            <p>Set alarm duration from 5 seconds to 60 minutes per event, accommodating various alert requirements.</p>
          </div>
          <div class="tech-item">
            <h4>Easy Programming Interface</h4>
            <p>Intuitive push-button setup with LED feedback makes programming straightforward without technical expertise.</p>
          </div>
        </div>
      </div>

    </main>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox">
    <div class="lightbox-content">
        <button class="lightbox-close">&times;</button>
        <button class="lightbox-prev">‹</button>
        <img id="lightbox-img" src="" alt="">
        <button class="lightbox-next">›</button>
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
