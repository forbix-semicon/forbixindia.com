<?php
$pageTitle = "FORBIX SEMICON Wireless Nurse Call Panic Alarm Manufacturer";
$pageDescription = "FORBIX SEMICON® Wireless Nurse call System, Panic Alarms, Token Display, Peon Call Bell, Traffic Lights, India's Leading Indigenous Manufacturer";
$canonicalUrl = "https://www.forbixindia.com";
$additionalHeadTags = '';
include __DIR__ . '/includes/header.php';
?>

<style>
    /* Font Family - Matching nurse-call.php */
    html, body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
    }
    
    /* Main Container */
    main {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }
    @media (max-width: 768px) {
        main {
            padding: 15px;
        }
    }
    
    /* Dark Mode Background */
    [data-theme="dark"] body {
        background: #2a2a2a !important;
        color: #e0e0e0;
    }
    [data-theme="dark"] main {
        background: transparent;
    }
    [data-theme="dark"] html {
        background: #2a2a2a;
    }
    
    /* Hero/Header Section */
    .hero-slider-container {
        display: none;
    }
    .header-section {
        background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
        border-radius: 24px;
        padding: 3rem 2.5rem;
        margin: 2rem 0 0;
        box-shadow: 0 8px 32px rgba(0,0,0,0.08);
        border: 1px solid rgba(226,232,240,0.8);
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .header-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #0d9488, #14b8a6, #0d9488);
        background-size: 200% 100%;
        animation: shimmer 3s ease-in-out infinite;
    }
    @keyframes shimmer {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    @media (max-width: 768px) {
        .header-section {
            padding: 2rem 1.5rem;
            border-radius: 20px;
        }
    }
    .header-section img {
        max-width: 240px;
        width: 100%;
        height: auto;
        aspect-ratio: 5/1;
        margin-bottom: 1.5rem;
        display: inline-block;
        object-fit: contain;
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
    }
    @media (max-width: 768px) {
        .header-section img {
            max-width: 180px;
            margin-bottom: 1rem;
        }
    }
    .header-section h1 {
        color: #1e293b;
        margin: 0 0 1rem;
        font-size: 2.25rem;
        font-weight: 700;
        line-height: 1.2;
    }
    @media (max-width: 768px) {
        .header-section h1 {
            font-size: 1.75rem;
        }
    }
    .header-section hr {
        margin: 1.5rem auto;
        border: none;
        border-top: 3px solid #0d9488;
        width: 120px;
        border-radius: 2px;
    }
    .header-section h2 {
        color: #0d9488;
        margin: 0 0 1.5rem;
        font-size: 1.5rem;
        font-weight: 600;
    }
    @media (max-width: 768px) {
        .header-section h2 {
            font-size: 1.25rem;
        }
    }
    .header-section p {
        color: #334155;
        margin: 0 0 1.5rem;
        font-size: 1.1rem;
        line-height: 1.7;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }
    @media (max-width: 768px) {
        .header-section p {
            font-size: 1rem;
        }
    }
    
    /* Button Styles */
    .btn-group {
        display: flex;
        gap: 1rem;
        margin: 2rem 0 0;
        flex-wrap: wrap;
        justify-content: center;
    }
    .btn-primary, .btn-secondary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 14px 28px;
        border: none;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    @media (max-width: 640px) {
        .btn-primary, .btn-secondary {
            padding: 12px 24px;
            font-size: 0.95rem;
            width: 100%;
            justify-content: center;
        }
    }
    .btn-primary {
        background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
        color: #fff;
        box-shadow: 0 4px 16px rgba(13,148,136,0.25);
    }
    .btn-primary:hover {
        background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
        box-shadow: 0 8px 24px rgba(13,148,136,0.35);
        transform: translateY(-2px);
        color: #fff;
    }
    .btn-primary:active {
        transform: translateY(0);
    }
    .btn-secondary {
        background: #fff;
        color: #0d9488;
        border: 2px solid #0d9488;
    }
    .btn-secondary:hover {
        background: #f0fdfa;
        color: #0f766e;
        border-color: #14b8a6;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(13,148,136,0.15);
    }
    .btn-secondary:active {
        transform: translateY(0);
    }
    
    /* Content Cards */
    .comp-card {
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        padding: 2.5rem;
        margin: 2.5rem 0;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    @media (max-width: 768px) {
        .comp-card {
            padding: 1.5rem;
            border-radius: 16px;
        }
    }
    .comp-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 40px rgba(0,0,0,0.12);
    }
    .comp-card h2 {
        color: #0d9488;
        margin: 0 0 1.5rem;
        font-size: 2rem;
        font-weight: 700;
    }
    @media (max-width: 768px) {
        .comp-card h2 {
            font-size: 1.5rem;
        }
    }
    .comp-card h3 {
        color: #1e293b;
        margin: 0 0 0.75rem;
        font-size: 1.25rem;
        font-weight: 600;
    }
    @media (max-width: 768px) {
        .comp-card h3 {
            font-size: 1.1rem;
        }
    }
    .comp-card p, .comp-card blockquote {
        color: #334155;
        margin: 0 0 1rem;
        font-size: 1rem;
        line-height: 1.7;
    }
    .comp-card blockquote {
        font-style: italic;
        border-left: 4px solid #0d9488;
        padding-left: 1rem;
        margin-left: 0;
    }
    
    /* Solutions Grid */
    .solutions-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }
    @media (max-width: 768px) {
        .solutions-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
    }
    .solution-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.1);
        overflow: hidden;
        border: 1px solid #e2e8f0;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
        min-height: 440px;
    }
    .solution-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 40px rgba(13,148,136,0.2);
        border-color: #0d9488;
    }
    .solution-img {
        width: 100%;
        height: auto;
        aspect-ratio: 4/3;
        object-fit: contain;
        background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
        display: block;
        margin: 0 auto;
        border-bottom: 1px solid #e2e8f0;
        max-height: 240px;
        padding: 1rem;
    }
    @media (max-width: 768px) {
        .solution-img {
            max-height: 180px;
            padding: 0.75rem;
        }
    }
    @media (max-width: 480px) {
        .solution-img {
            max-height: 160px;
        }
    }
    .solution-content {
        padding: 1.75rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    @media (max-width: 768px) {
        .solution-content {
            padding: 1.5rem;
        }
    }
    .solution-title {
        font-size: 1.35rem;
        font-weight: 700;
        color: #0d9488;
        margin: 0 0 0.75rem;
        line-height: 1.3;
    }
    @media (max-width: 768px) {
        .solution-title {
            font-size: 1.2rem;
        }
    }
    .solution-desc {
        color: #334155;
        font-size: 1rem;
        margin: 0 0 1.5rem;
        flex: 1;
        line-height: 1.6;
    }
    .solution-link {
        align-self: flex-start;
        background: linear-gradient(135deg, #0d9488, #0f766e);
        color: #fff;
        padding: 0.75rem 1.75rem;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(13,148,136,0.2);
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }
    .solution-link:hover {
        background: linear-gradient(135deg, #14b8a6, #0d9488);
        box-shadow: 0 6px 20px rgba(13,148,136,0.3);
        color: #fff;
        transform: translateY(-2px);
    }
    
    /* Technology Section - Professional Design */
    .tech-section {
        background: linear-gradient(135deg, #0d9488 0%, #1e40af 100%);
        border-radius: 24px;
        box-shadow: 0 12px 48px rgba(13,148,136,0.25), 0 4px 16px rgba(30,64,175,0.15);
        padding: 3rem 2.5rem;
        margin: 3rem 0;
        color: #fff;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    @media (max-width: 768px) {
        .tech-section {
            padding: 2rem 1.5rem;
            border-radius: 20px;
        }
    }
    .tech-section::before {
        content: "";
        position: absolute;
        top: -60px;
        left: -60px;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(20,184,166,0.3) 0%, transparent 70%);
        z-index: 0;
    }
    .tech-section::after {
        content: "";
        position: absolute;
        bottom: -60px;
        right: -60px;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(30,64,175,0.25) 0%, transparent 70%);
        z-index: 0;
    }
    .tech-section-header {
        text-align: center;
        margin-bottom: 2.5rem;
        position: relative;
        z-index: 1;
    }
    .tech-section h2 {
        color: #fff;
        font-weight: 700;
        margin: 0 0 1rem;
        position: relative;
        z-index: 1;
        font-size: 2.25rem;
        letter-spacing: -0.02em;
        line-height: 1.2;
    }
    @media (max-width: 768px) {
        .tech-section h2 {
            font-size: 1.75rem;
        }
    }
    .tech-section h2::after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: rgba(255,255,255,0.4);
        margin: 1.5rem auto 0;
        border-radius: 2px;
    }
    .tech-section p {
        color: #e0f2fe;
        font-size: 1.2rem;
        margin: 0;
        position: relative;
        z-index: 1;
        line-height: 1.7;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    @media (max-width: 768px) {
        .tech-section p {
            font-size: 1.1rem;
        }
    }
    .tech-features {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        justify-items: center;
        align-items: stretch;
        position: relative;
        z-index: 1;
    }
    @media (max-width: 1024px) {
        .tech-features {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 640px) {
        .tech-features {
            grid-template-columns: 1fr;
            gap: 1.25rem;
        }
    }
    .tech-feature-card {
        background: rgba(255,255,255,0.12);
        border-radius: 16px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        padding: 1.5rem 1rem;
        width: 100%;
        max-width: 220px;
        text-align: center;
        color: #fff;
        position: relative;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 2px solid rgba(20,184,166,0.25);
        backdrop-filter: blur(4px);
    }
    @media (max-width: 1024px) {
        .tech-feature-card {
            max-width: 100%;
        }
    }
    .tech-feature-card:hover {
        transform: translateY(-8px) scale(1.05);
        box-shadow: 0 12px 40px rgba(13,148,136,0.3);
        background: rgba(255,255,255,0.2);
        border-color: #14b8a6;
    }
    .tech-feature-icon {
        font-size: 2.5rem;
        margin: 0 0 0.75rem;
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        width: 64px;
        height: 64px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    .tech-feature-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin: 0 0 0.5rem;
        color: #fff;
    }
    .tech-feature-desc {
        font-size: 0.95rem;
        color: #e0f2fe;
        margin: 0;
        line-height: 1.5;
    }
    
    /* Process/Features Grid */
    .process-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        justify-content: center;
        margin-top: 1rem;
    }
    @media (max-width: 768px) {
        .process-grid {
            flex-direction: column;
            gap: 1.5rem;
        }
    }
    .process-item {
        flex: 1;
        min-width: 240px;
        max-width: 300px;
    }
    @media (max-width: 768px) {
        .process-item {
            max-width: 100%;
        }
    }
    
    /* Testimonials Grid */
    .testimonials-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        justify-content: center;
        margin-top: 1rem;
    }
    @media (max-width: 768px) {
        .testimonials-grid {
            flex-direction: column;
            gap: 1.5rem;
        }
    }
    .testimonial-item {
        flex: 1;
        min-width: 280px;
        max-width: 350px;
    }
    @media (max-width: 768px) {
        .testimonial-item {
            max-width: 100%;
        }
    }
    
    /* Dark Theme Styles */
    [data-theme="dark"] .header-section {
        background: linear-gradient(135deg, #1e293b 0%, #23272f 100%);
        border-color: #374151;
        box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    }
    [data-theme="dark"] .header-section h1 {
        color: #f1f5f9;
    }
    [data-theme="dark"] .header-section h2 {
        color: #14b8a6;
    }
    [data-theme="dark"] .header-section p {
        color: #cbd5e1;
    }
    [data-theme="dark"] .header-section hr {
        border-top-color: #14b8a6;
    }
    [data-theme="dark"] .btn-secondary {
        background: #1e293b;
        color: #14b8a6;
        border-color: #14b8a6;
    }
    [data-theme="dark"] .btn-secondary:hover {
        background: #23272f;
        color: #20d9c7;
        border-color: #20d9c7;
    }
    [data-theme="dark"] .comp-card,
    [data-theme="dark"] .solution-card {
        background: #1e293b;
        border-color: #374151;
        box-shadow: 0 4px 24px rgba(0,0,0,0.3);
    }
    [data-theme="dark"] .comp-card h2,
    [data-theme="dark"] .solution-title {
        color: #14b8a6;
    }
    [data-theme="dark"] .comp-card h3 {
        color: #e2e8f0;
    }
    [data-theme="dark"] .comp-card p,
    [data-theme="dark"] .comp-card blockquote,
    [data-theme="dark"] .solution-desc {
        color: #cbd5e1;
    }
    [data-theme="dark"] .solution-img {
        background: linear-gradient(135deg, #1e293b 0%, #23272f 100%);
        border-bottom-color: #374151;
    }
    [data-theme="dark"] .comp-card blockquote {
        border-left-color: #14b8a6;
    }
</style>

<main>
    <!-- Introduction Section -->
    <section class="header-section">
        <img src="assets/images/FORBIX-SEMICON-logo.png" alt="FORBIX SEMICON®" />
        <h1>Wireless Nurse Call, Panic Alarm Manufacturer | FORBIX SEMICON®</h1>
        <hr />
        <h2>Pioneering Indigenous Electronic Products & Wireless Automation</h2>
        <p>At FORBIX SEMICON® we manufacture Wireless Nurse Call, Panic Alarm, Token Display Systems, Automatic Traffic Light Controllers, Long Range RF Transmitter Receiver, Wireless Calling Solutions</p>
        <p>Specializing in wireless automation technology, we transform concepts into world-class innovations, meticulously crafted at our state-of-the-art facility in Bangalore, India. Setting new benchmarks in electronic manufacturing excellence, FORBIX SEMICON® empowers clients worldwide with transformative solutions.</p>
        <div class="btn-group">
            <a href="contact.php" class="btn-primary">Get Free Consultation</a>
            <a href="tel:+919742159846" class="btn-secondary">Call Now</a>
            <a href="products.php" class="btn-primary">Products at a Glance</a>
            <a href="https://www.youtube.com/user/forbixsemicon/videos" target="_blank" class="btn-secondary">Watch Videos</a>
        </div>
    </section>

    <!-- Our Solutions Section -->
    <section>
        <div class="comp-card">
            <h2>Our Solutions</h2>
            <div class="solutions-grid">
                <div class="solution-card">
                    <img src="assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system.jpg" alt="Wireless Nurse Call" class="solution-img" />
                    <div class="solution-content">
                        <div>
                            <div class="solution-title">Wireless Nurse Call Systems</div>
                            <div class="solution-desc">Advanced wireless nurse call solutions for hospitals and senior care facilities. Reliable, scalable, and easy to install.</div>
                        </div>
                        <a href="nurse-call.php" class="solution-link">Explore Nurse Call</a>
                    </div>
                </div>
                <div class="solution-card">
                    <img src="assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-products.jpg" alt="Wireless Panic Alarm" class="solution-img" />
                    <div class="solution-content">
                        <div>
                            <div class="solution-title">Wireless Panic Alarm Solutions</div>
                            <div class="solution-desc">Instant alert systems for offices, factories, oil fields, and residential communities. Secure and robust wireless technology.</div>
                        </div>
                        <a href="panic-alarm.php" class="solution-link">Explore Panic Alarm</a>
                    </div>
                </div>
                <div class="solution-card">
                    <img src="assets/images/gallery/peon-call-bell/forbix-semicon-wireless-peon-call-bell-system.jpg" alt="Wireless Attendant Calling" class="solution-img" />
                    <div class="solution-content">
                        <div>
                            <div class="solution-title">Wireless Attendant Calling Systems</div>
                            <div class="solution-desc">Efficient calling solutions for guest houses, elderly care, and hospitality. Enhance service and response times.</div>
                        </div>
                        <a href="peon-call.php" class="solution-link">Explore Attendant Call</a>
                    </div>
                </div>
                <div class="solution-card">
                    <img src="assets/images/gallery/token-display/forbix-semicon-Queue-Mamangement-System-Token-Display.jpg" alt="Queue Management" class="solution-img" />
                    <div class="solution-content">
                        <div>
                            <div class="solution-title">Queue Management Systems</div>
                            <div class="solution-desc">Digital token display and dispensers for banks, hospitals, and service centers. Streamline customer flow.</div>
                        </div>
                        <a href="token-display.php" class="solution-link">Explore Token Display</a>
                    </div>
                </div>
                <div class="solution-card">
                    <img src="assets/images/gallery/long-range/forbix-semicon-long-range-alarm.jpg" alt="Long Range Wireless RF" class="solution-img" />
                    <div class="solution-content">
                        <div>
                            <div class="solution-title">Long Range Wireless RF</div>
                            <div class="solution-desc">Industrial automation, motor and conveyor control, and alerting over 2-3Kms range.</div>
                        </div>
                        <a href="long-range.php" class="solution-link">Explore Long Range RF</a>
                    </div>
                </div>
                <div class="solution-card">
                    <img src="assets/images/gallery/traffic-light-controller/forbix-semicon-wireless-traffic-light-controller.jpg" alt="Traffic Light Controllers" class="solution-img" />
                    <div class="solution-content">
                        <div>
                            <div class="solution-title">Traffic Light Controllers</div>
                            <div class="solution-desc">Smart intersections, pedestrian crossings, parking lots, and emergency vehicle priority.</div>
                        </div>
                        <a href="traffic-light.php" class="solution-link">Explore Traffic Light</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Innovation Section -->
    <section class="tech-section">
        <div class="tech-section-header">
            <h2>Revolutionizing Wireless Technology</h2>
            <p>Setting new standards in electronic innovation with our indigenous design and manufacturing expertise.</p>
        </div>
        <div class="tech-features">
            <div class="tech-feature-card">
                <span class="material-icons tech-feature-icon">wifi</span>
                <div class="tech-feature-title">Wireless Technology</div>
                <div class="tech-feature-desc">No wiring or complex installation required. Easy setup and maintenance-free operation.</div>
            </div>
            <div class="tech-feature-card">
                <span class="material-icons tech-feature-icon">shield</span>
                <div class="tech-feature-title">Reliable Security</div>
                <div class="tech-feature-desc">Advanced security features with encrypted communication and fail-safe mechanisms.</div>
            </div>
            <div class="tech-feature-card">
                <span class="material-icons tech-feature-icon">sync_alt</span>
                <div class="tech-feature-title">Customizable Solutions</div>
                <div class="tech-feature-desc">Tailor-made systems designed to fit your exact requirements with flexible configuration options.</div>
            </div>
            <div class="tech-feature-card">
                <span class="material-icons tech-feature-icon">payments</span>
                <div class="tech-feature-title">Competitive Pricing</div>
                <div class="tech-feature-desc">Industry-leading value with transparent pricing and no hidden costs. Excellent ROI for businesses.</div>
            </div>
        </div>
    </section>

    <!-- Development Process Showcase -->
    <section>
        <div class="comp-card">
            <h2>Design & Manufacturing Excellence</h2>
            <div class="process-grid">
                <div class="process-item">
                    <h3>Design Innovation</h3>
                    <p>From conceptual sketches to detailed schematics, our expert engineers transform ideas into innovative designs.</p>
                </div>
                <div class="process-item">
                    <h3>Advanced R&D Lab</h3>
                    <p>State-of-the-art research facility equipped with cutting-edge tools for prototyping and development.</p>
                </div>
                <div class="process-item">
                    <h3>Quality Assurance</h3>
                    <p>Rigorous testing protocols ensuring world-class reliability and performance standards.</p>
                </div>
                <div class="process-item">
                    <h3>Manufacturing Excellence</h3>
                    <p>Complete in-house production with advanced SMT line and precision assembly processes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section>
        <div class="comp-card">
            <h2>Trusted by Industry Leaders</h2>
            <div class="testimonials-grid">
                <div class="testimonial-item">
                    <h3>Saudi Arabian Ministry of Defence</h3>
                    <blockquote>"The long-range alarm systems from FORBIX SEMICON have proven invaluable for our security infrastructure. Their exceptional range of up to 10km and military-grade reliability perfectly meets our stringent defense requirements."</blockquote>
                </div>
                <div class="testimonial-item">
                    <h3>CK Loosbrock, Netherlands</h3>
                    <blockquote>"FORBIX SEMICON's long-range sensor systems have exceeded our expectations. The 5km+ coverage and robust signal strength even in challenging weather conditions have made them our trusted choice for industrial applications."</blockquote>
                </div>
                <div class="testimonial-item">
                    <h3>Shirdi Airport Authority</h3>
                    <blockquote>"Implementing FORBIX's long-range alarm systems has significantly enhanced our airport security infrastructure. The systems operate flawlessly across our extensive premises, providing reliable coverage crucial for aviation safety."</blockquote>
                </div>
            </div>
            <div style="text-align:center; margin-top:2rem;">
                <a href="sitemap.xml" class="btn-primary">Sitemap</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

