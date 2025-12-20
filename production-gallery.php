<?php
$pageTitle = "Production Gallery Electronic Automation | FORBIX SEMICON®";
$pageDescription = "Browse our bulk production gallery showcasing wireless automation products manufacturing. View nurse call systems, panic alarms, and other electronic devices in production.";
$pageKeywords = "production gallery, manufacturing, bulk production, wireless automation, nurse call system, panic alarm, FORBIX SEMICON®";

// Gallery Schema
$gallerySchema = [
    "@context" => "https://schema.org",
    "@type" => "ImageGallery",
    "name" => "FORBIX SEMICON Production Gallery",
    "description" => $pageDescription,
    "publisher" => [
        "@type" => "Organization",
        "name" => "FORBIX SEMICON®",
        "url" => "https://www.forbixindia.com"
    ]
];

// Breadcrumb Schema
$breadcrumbSchema = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => "https://www.forbixindia.com"
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Production Gallery",
            "item" => "https://www.forbixindia.com/production-gallery.php"
        ]
    ]
];

$additionalHeadTags = '
<link rel="canonical" href="https://www.forbixindia.com/production-gallery.php" />
<meta property="og:url" content="https://www.forbixindia.com/production-gallery.php" />
<meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/production/wireless-nurse-call-system-manufacturers.jpg" />
<meta property="og:image:alt" content="FORBIX SEMICON Production Gallery" />
<script type="application/ld+json">' . json_encode($gallerySchema, JSON_UNESCAPED_SLASHES) . '</script>
<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES) . '</script>
<style>
:root{--bg:#f8fafc;--card:#ffffff;--text:#0f172a;--text-muted:#64748b;--accent:#0D8F84;--accent-hover:#0a7269;--accent-light:rgba(13,143,132,0.08);--border:#e2e8f0;--shadow:0 4px 20px rgba(15,23,42,0.08);--shadow-hover:0 16px 40px rgba(15,23,42,0.15);--radius:16px;--radius-sm:10px}
*{box-sizing:border-box;margin:0;padding:0}
.gallery-page{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;-webkit-font-smoothing:antialiased;background:var(--bg);min-height:100vh}
.gallery-container{max-width:1400px;margin:0 auto;padding:24px 16px 80px}
.gallery-hero{background:linear-gradient(135deg,#0D8F84 0%,#0a6b63 50%,#085751 100%);border-radius:var(--radius);padding:clamp(32px,6vw,56px);margin-bottom:40px;position:relative;overflow:hidden;text-align:center}
.gallery-hero::before{content:"";position:absolute;top:-60%;right:-30%;width:80%;height:220%;background:radial-gradient(ellipse,rgba(255,255,255,0.1) 0%,transparent 60%);pointer-events:none}
.gallery-hero::after{content:"";position:absolute;bottom:-60%;left:-30%;width:80%;height:220%;background:radial-gradient(ellipse,rgba(255,255,255,0.06) 0%,transparent 60%);pointer-events:none}
.hero-content{position:relative;z-index:1}
.hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.15);backdrop-filter:blur(8px);padding:10px 20px;border-radius:50px;font-size:14px;font-weight:600;color:#fff;margin-bottom:20px;border:1px solid rgba(255,255,255,0.1)}
.hero-badge svg{width:18px;height:18px}
.hero-title{font-size:clamp(26px,4.5vw,44px);font-weight:700;color:#fff;margin:0 0 16px;line-height:1.2;letter-spacing:-0.5px}
.hero-subtitle{font-size:clamp(15px,2vw,18px);color:rgba(255,255,255,0.92);margin:0 auto;max-width:700px;line-height:1.7}
.gallery-stats{display:flex;justify-content:center;gap:32px;margin-top:28px;flex-wrap:wrap}
.stat-item{text-align:center}
.stat-number{font-size:28px;font-weight:700;color:#fff}
.stat-label{font-size:13px;color:rgba(255,255,255,0.8);margin-top:4px}
.gallery-section{margin-top:16px}
.section-header{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;margin-bottom:28px}
.section-title{font-size:clamp(20px,3vw,28px);font-weight:700;color:var(--text);display:flex;align-items:center;gap:12px}
.section-title svg{width:28px;height:28px;color:var(--accent)}
.image-count{font-size:14px;color:var(--text-muted);background:var(--accent-light);padding:8px 16px;border-radius:50px;font-weight:500}
.gallery-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(min(100%,280px),1fr));gap:24px}
.gallery-item{position:relative;background:var(--card);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow);transition:all .4s cubic-bezier(0.4,0,0.2,1);cursor:pointer;border:1px solid var(--border)}
.gallery-item:hover{transform:translateY(-8px) scale(1.02);box-shadow:var(--shadow-hover)}
.gallery-item:focus{outline:3px solid var(--accent);outline-offset:3px}
.image-wrapper{position:relative;aspect-ratio:4/3;overflow:hidden;background:linear-gradient(180deg,#f1f5f9 0%,#e2e8f0 100%)}
.image-wrapper img{width:100%;height:100%;object-fit:cover;transition:transform .6s cubic-bezier(0.4,0,0.2,1)}
.gallery-item:hover .image-wrapper img{transform:scale(1.1)}
.image-overlay{position:absolute;inset:0;background:linear-gradient(180deg,transparent 40%,rgba(15,23,42,0.8) 100%);opacity:0;transition:opacity .3s ease;display:flex;align-items:flex-end;justify-content:center;padding:20px}
.gallery-item:hover .image-overlay{opacity:1}
.overlay-icon{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%) scale(0.8);width:56px;height:56px;background:rgba(255,255,255,0.95);border-radius:50%;display:flex;align-items:center;justify-content:center;opacity:0;transition:all .3s ease;box-shadow:0 8px 24px rgba(0,0,0,0.2)}
.overlay-icon svg{width:24px;height:24px;color:var(--accent)}
.gallery-item:hover .overlay-icon{opacity:1;transform:translate(-50%,-50%) scale(1)}
.item-info{padding:16px 18px}
.item-title{font-size:15px;font-weight:600;color:var(--text);margin:0 0 6px;line-height:1.4}
.item-desc{font-size:13px;color:var(--text-muted);line-height:1.5;margin:0}
.lightbox{position:fixed;inset:0;z-index:9999;background:rgba(0,0,0,0.95);display:none;align-items:center;justify-content:center;opacity:0;transition:opacity .3s ease}
.lightbox.active{display:flex;opacity:1}
.lightbox-content{position:relative;max-width:90vw;max-height:90vh;display:flex;flex-direction:column;align-items:center}
.lightbox-image{max-width:100%;max-height:75vh;object-fit:contain;border-radius:8px;box-shadow:0 24px 64px rgba(0,0,0,0.5);opacity:0;transform:scale(0.95);transition:all .3s ease}
.lightbox.active .lightbox-image{opacity:1;transform:scale(1)}
.lightbox-caption{margin-top:20px;text-align:center;color:#fff;max-width:600px;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif}
.lightbox-title{font-size:18px;font-weight:600;margin:0 0 8px}
.lightbox-desc{font-size:14px;color:rgba(255,255,255,0.8);margin:0;line-height:1.6}
.lightbox-close{position:absolute;top:-48px;right:0;width:40px;height:40px;background:rgba(255,255,255,0.1);border:none;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all .2s}
.lightbox-close:hover{background:rgba(255,255,255,0.2);transform:rotate(90deg)}
.lightbox-close svg{width:24px;height:24px;color:#fff}
.lightbox-nav{position:absolute;top:50%;transform:translateY(-50%);width:52px;height:52px;background:rgba(255,255,255,0.1);border:none;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all .2s;backdrop-filter:blur(8px)}
.lightbox-nav:hover{background:rgba(255,255,255,0.25);transform:translateY(-50%) scale(1.1)}
.lightbox-nav:disabled{opacity:0.3;cursor:not-allowed}
.lightbox-nav:disabled:hover{transform:translateY(-50%) scale(1)}
.lightbox-nav svg{width:28px;height:28px;color:#fff}
.lightbox-prev{left:20px}
.lightbox-next{right:20px}
.lightbox-counter{position:absolute;bottom:-48px;left:50%;transform:translateX(-50%);font-size:14px;color:rgba(255,255,255,0.7);background:rgba(255,255,255,0.1);padding:8px 16px;border-radius:20px}
.lightbox-thumbnails{position:absolute;bottom:20px;left:50%;transform:translateX(-50%);display:flex;gap:8px;max-width:90vw;overflow-x:auto;padding:8px;background:rgba(0,0,0,0.5);border-radius:8px;scrollbar-width:none}
.lightbox-thumbnails::-webkit-scrollbar{display:none}
.thumb-item{width:60px;height:45px;border-radius:4px;overflow:hidden;cursor:pointer;opacity:0.5;transition:all .2s;flex-shrink:0;border:2px solid transparent}
.thumb-item:hover,.thumb-item.active{opacity:1;border-color:var(--accent)}
.thumb-item img{width:100%;height:100%;object-fit:cover}
[data-theme="dark"]{--bg:#1e293b;--card:#0f172a;--text:#e2e8f0;--text-muted:#94a3b8;--border:#334155;--shadow:0 4px 20px rgba(0,0,0,0.3);--shadow-hover:0 16px 40px rgba(0,0,0,0.5);--accent-light:rgba(13,143,132,0.2)}
[data-theme="dark"] .gallery-page{background:var(--bg)}
[data-theme="dark"] .image-wrapper{background:linear-gradient(180deg,#1e293b 0%,#0f172a 100%)}
@media(min-width:640px){.gallery-grid{grid-template-columns:repeat(2,1fr)}}
@media(min-width:900px){.gallery-grid{grid-template-columns:repeat(3,1fr)}}
@media(min-width:1200px){.gallery-grid{grid-template-columns:repeat(4,1fr);gap:28px}}
@media(max-width:640px){.gallery-container{padding:16px 12px 60px}.lightbox-nav{width:44px;height:44px}.lightbox-prev{left:10px}.lightbox-next{right:10px}.lightbox-thumbnails{display:none}.gallery-stats{gap:20px}.stat-number{font-size:24px}}
</style>
';

$skipCommonCss = true;
include __DIR__ . '/includes/header.php';

// Gallery data with descriptions
$gallery = [
    [
        'src' => 'assets/images/gallery/production/code-red-beacon-light-patient-pill-chord-nurse-station-console.jpg',
        'alt' => 'Code Red Beacon Light and Pull Chords',
        'title' => 'Code Red Beacon Light & Pull Chords',
        'desc' => 'Emergency beacon lights and patient pull chord buttons ready for hospital deployment. These critical components ensure rapid emergency response in healthcare facilities.'
    ],
    [
        'src' => 'assets/images/gallery/production/nurse-call-bell-pull-chords.jpg',
        'alt' => 'Nurse Call Bell Pull Cords',
        'title' => 'Nurse Call Bell Pull Cords',
        'desc' => 'Waterproof pull cord assemblies designed for bathroom and wet area installations. Features easy-grip handles and reliable wireless transmission.'
    ],
    [
        'src' => 'assets/images/gallery/production/7xx-receiver-bulk-manufacturing.jpg',
        'alt' => 'Wireless Long Range 7xx Receivers',
        'title' => 'Long Range 7xx Receivers',
        'desc' => 'High-performance 7xx series wireless receivers in bulk production. These units offer extended range coverage up to 300 meters in open areas.'
    ],
    [
        'src' => 'assets/images/gallery/production/722-remote-controller-production.jpg',
        'alt' => '722 Long Range Remote Controllers',
        'title' => '722 Remote Controllers',
        'desc' => 'Precision-manufactured 722 series remote controllers featuring long battery life and robust RF transmission for industrial applications.'
    ],
    [
        'src' => 'assets/images/gallery/production/water-pump-controller-production.jpg',
        'alt' => 'Wireless Water Pump Motor Controllers',
        'title' => 'Water Pump Motor Controllers',
        'desc' => 'Wireless motor control units for water pump automation. Enables remote operation of agricultural and industrial pumping systems.'
    ],
    [
        'src' => 'assets/images/gallery/production/remote-console-bulk-production.jpg',
        'alt' => 'Nurse Station Receiver Displays',
        'title' => 'Nurse Station Displays',
        'desc' => 'Centralized nurse station receiver displays with LCD screens showing room numbers and real-time alerts. Features built-in WiFi and data logging.'
    ],
    [
        'src' => 'assets/images/gallery/production/wireless-nurse-call-system-manufacturers.jpg',
        'alt' => 'Nurse Call System - Set',
        'title' => 'Complete Nurse Call System Sets',
        'desc' => 'Full nurse call system packages ready for shipping. Each set includes patient call buttons, nurse station console, and all necessary accessories.'
    ],
    [
        'src' => 'assets/images/gallery/production/remote-indicator-door-modules.jpg',
        'alt' => 'Door Modules and Indicator Receivers',
        'title' => 'Door Modules & Indicators',
        'desc' => 'Corridor door indicator modules with LED displays and 7-segment room numbers. Provides visual alerts for staff passing by patient rooms.'
    ],
    [
        'src' => 'assets/images/gallery/production/door-modules-panic-button.jpg',
        'alt' => 'Wireless Panic Buttons and Door Indicator Modules',
        'title' => 'Panic Buttons & Door Modules',
        'desc' => 'Emergency panic buttons paired with door indicator modules. Essential components for comprehensive hospital safety and communication systems.'
    ],
    [
        'src' => 'assets/images/gallery/production/wireless-attendant-calling-system-production.jpg',
        'alt' => 'Wireless Attendant Calling System',
        'title' => 'Attendant Calling System',
        'desc' => 'Multi-zone wireless attendant calling systems for offices and service centers. Features numbered remotes and centralized display console.'
    ]
];
?>

<div class="gallery-page">
    <div class="gallery-container">
        <!-- Hero Section -->
        <section class="gallery-hero">
            <div class="hero-content">
                <div class="hero-badge">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-5-7l-3 3.72L9 13l-3 4h12l-4-5z"/></svg>
                    Manufacturing Excellence
                </div>
                <h1 class="hero-title">Production Gallery</h1>
                <p class="hero-subtitle">
                    Step inside our state-of-the-art manufacturing facility and witness the precision engineering behind FORBIX SEMICON® wireless automation products. Every component is crafted with quality and reliability in mind.
                </p>
                <div class="gallery-stats">
                    <div class="stat-item">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Units Produced</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">10+</div>
                        <div class="stat-label">Product Lines</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Quality Tested</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="section-header">
                <h2 class="section-title">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 16V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2zm-11-4l2.03 2.71L16 11l4 5H8l3-4zM2 6v14c0 1.1.9 2 2 2h14v-2H4V6H2z"/></svg>
                    Manufacturing Process
                </h2>
                <span class="image-count"><?php echo count($gallery); ?> Images</span>
            </div>

            <div class="gallery-grid">
                <?php foreach ($gallery as $index => $img): ?>
                <article class="gallery-item" tabindex="0" data-index="<?php echo $index; ?>" onclick="openLightbox(<?php echo $index; ?>)" onkeypress="if(event.key==='Enter')openLightbox(<?php echo $index; ?>)">
                    <div class="image-wrapper">
                        <img src="<?php echo htmlspecialchars($img['src']); ?>" 
                             alt="<?php echo htmlspecialchars($img['alt']); ?>"
                             loading="lazy"
                             width="400"
                             height="300">
                        <div class="image-overlay">
                            <div class="overlay-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35M11 8v6M8 11h6"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-info">
                        <h3 class="item-title"><?php echo htmlspecialchars($img['title']); ?></h3>
                        <p class="item-desc"><?php echo htmlspecialchars(substr($img['desc'], 0, 80)); ?>...</p>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</div>

<!-- Lightbox Modal -->
<div class="lightbox" id="lightbox" onclick="closeLightboxOnBackdrop(event)">
    <div class="lightbox-content">
        <button class="lightbox-close" onclick="closeLightbox()" aria-label="Close lightbox">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
        
        <button class="lightbox-nav lightbox-prev" onclick="event.stopPropagation();navigateLightbox(-1)" aria-label="Previous image">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        
        <img class="lightbox-image" id="lightbox-img" src="" alt="">
        
        <button class="lightbox-nav lightbox-next" onclick="event.stopPropagation();navigateLightbox(1)" aria-label="Next image">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
        </button>
        
        <div class="lightbox-caption">
            <h4 class="lightbox-title" id="lightbox-title"></h4>
            <p class="lightbox-desc" id="lightbox-desc"></p>
        </div>
        
        <div class="lightbox-counter" id="lightbox-counter"></div>
    </div>
    
    <div class="lightbox-thumbnails" id="lightbox-thumbs">
        <?php foreach ($gallery as $index => $img): ?>
        <div class="thumb-item" data-index="<?php echo $index; ?>" onclick="event.stopPropagation();goToImage(<?php echo $index; ?>)">
            <img src="<?php echo htmlspecialchars($img['src']); ?>" alt="Thumbnail">
        </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
// Gallery data for lightbox
const galleryData = <?php echo json_encode($gallery); ?>;
let currentIndex = 0;

function openLightbox(index) {
    currentIndex = index;
    updateLightbox();
    document.getElementById('lightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightbox').classList.remove('active');
    document.body.style.overflow = '';
}

function closeLightboxOnBackdrop(e) {
    if (e.target.id === 'lightbox') {
        closeLightbox();
    }
}

function navigateLightbox(direction) {
    currentIndex += direction;
    if (currentIndex < 0) currentIndex = galleryData.length - 1;
    if (currentIndex >= galleryData.length) currentIndex = 0;
    updateLightbox();
}

function goToImage(index) {
    currentIndex = index;
    updateLightbox();
}

function updateLightbox() {
    const img = galleryData[currentIndex];
    const lightboxImg = document.getElementById('lightbox-img');
    
    // Fade out effect
    lightboxImg.style.opacity = '0';
    
    setTimeout(() => {
        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;
        document.getElementById('lightbox-title').textContent = img.title;
        document.getElementById('lightbox-desc').textContent = img.desc;
        document.getElementById('lightbox-counter').textContent = `${currentIndex + 1} / ${galleryData.length}`;
        
        // Update thumbnails
        document.querySelectorAll('.thumb-item').forEach((thumb, i) => {
            thumb.classList.toggle('active', i === currentIndex);
        });
        
        // Scroll active thumbnail into view
        const activeThumb = document.querySelector('.thumb-item.active');
        if (activeThumb) {
            activeThumb.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        }
        
        // Fade in effect
        lightboxImg.style.opacity = '1';
    }, 150);
}

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    const lightbox = document.getElementById('lightbox');
    if (!lightbox.classList.contains('active')) return;
    
    switch(e.key) {
        case 'Escape':
            closeLightbox();
            break;
        case 'ArrowLeft':
            navigateLightbox(-1);
            break;
        case 'ArrowRight':
            navigateLightbox(1);
            break;
    }
});

// Touch swipe support
let touchStartX = 0;
let touchEndX = 0;

document.getElementById('lightbox').addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
}, { passive: true });

document.getElementById('lightbox').addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
}, { passive: true });

function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;
    
    if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
            navigateLightbox(1); // Swipe left = next
        } else {
            navigateLightbox(-1); // Swipe right = prev
        }
    }
}

// Preload adjacent images for smoother navigation
function preloadImages() {
    const prevIndex = currentIndex === 0 ? galleryData.length - 1 : currentIndex - 1;
    const nextIndex = currentIndex === galleryData.length - 1 ? 0 : currentIndex + 1;
    
    new Image().src = galleryData[prevIndex].src;
    new Image().src = galleryData[nextIndex].src;
}
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
