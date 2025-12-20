<?php
$pageTitle = "Buy Electronic Wireless Automation Products, FORBIX SEMICON®";
$pageDescription = "Purchase FORBIX SEMICON wireless nurse call, panic alarm, peon call bell, attendant calling system, token display, air monitor, traffic light controller.";

// Product data array
$products = [
    [
        'id' => 'nurse-call-10beds',
        'name' => '10-Bed Wireless Nurse Call System',
        'model' => 'FBXWNCS10-LCD',
        'brand' => 'FORBIX SEMICON®',
        'price' => 51200,
        'image' => 'assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system-3.jpg',
        'description' => 'Transform your healthcare facility with our premium wireless nurse call system. Perfect for hospitals, clinics, and care homes.',
        'link' => 'product-nurse-call-10bed-lcd-monitor.php',
        'inStock' => true,
        'freeShipping' => true
    ],
    [
        'id' => 'panic-alarm-1remote-1siren',
        'name' => '1 Remote 1 Siren Wireless Panic Alarm System',
        'model' => 'FBXWAS01-108',
        'brand' => 'FORBIX SEMICON®',
        'price' => 9800,
        'image' => 'assets/images/gallery/panic-alarm/forbix-semicon-panic-alarm-1remote-1siren-set.jpg',
        'description' => 'Enhance your security with our reliable Wireless Panic Alarm System. Perfect for homes, offices, and commercial spaces.',
        'link' => 'product-panic-alarm-1remote-1siren.php',
        'inStock' => true,
        'freeShipping' => true
    ],
    [
        'id' => 'peon-call-bell-6remotes',
        'name' => '6 Remote Wireless Peon Call Bell System',
        'model' => 'FBXWACS06',
        'brand' => 'FORBIX SEMICON®',
        'price' => 26904,
        'image' => 'assets/images/gallery/peon-call-bell/forbix-semicon-wireless-attendant-calling-system-6-remotes.jpg',
        'description' => 'Streamline your office communication with our advanced 6-Remote Wireless Peon Call Bell System. Perfect for offices, businesses, and institutional environments.',
        'link' => 'product-peon-call-bell-6remotes.php',
        'inStock' => true,
        'freeShipping' => true
    ],
    [
        'id' => 'wireless-attendant-10remotes',
        'name' => '10 Remote Wireless Attendant Calling System',
        'model' => 'FBXWACS10',
        'brand' => 'FORBIX SEMICON®',
        'price' => 49850,
        'image' => 'assets/images/gallery/peon-call-bell/forbix-semicon-attendant-calling-system.jpg',
        'description' => 'Advanced 10-remote wireless attendant calling system for offices and institutions. Reliable long-range operation and easy installation.',
        'link' => 'product-wireless-attendant-calling-system-10remotes.php',
        'inStock' => true,
        'freeShipping' => true
    ],
    [
        'id' => 'token-display-6-queue',
        'name' => 'Token Display 6 Queue Management System',
        'model' => 'FBXQMS6',
        'brand' => 'FORBIX SEMICON®',
        'price' => 35600,
        'image' => 'assets/images/gallery/token-display/forbix-semicon-queue-management-token-display-wireless.jpg',
        'description' => 'Efficient wireless token display system for queue management. Includes 6 wireless dispensers and LCD monitor. Ideal for banks, hospitals, and service centers.',
        'link' => 'product-token-display-6-queue.php',
        'inStock' => true,
        'freeShipping' => true
    ],
    [
        'id' => 'air-quality-monitor-voc',
        'name' => 'Air Quality Monitor — VOC & Formaldehyde Meter',
        'model' => 'FBXYF03',
        'brand' => 'FORBIX SEMICON®',
        'price' => 46500,
        'image' => 'assets/images/gallery/air-monitor/forbix-semicon-air-quality-monitor-voc-meter-1.jpg',
        'description' => 'Continuous VOC and formaldehyde monitoring with network capability and data logging for indoor environments.',
        'link' => 'product-air-quality-monitor-voc-meter.php',
        'inStock' => true,
        'freeShipping' => true
    ],
    [
        'id' => '6remote-code-red-2d-display',
        'name' => '6 Remote Code Red 2D Display System',
        'model' => 'FBXA01',
        'brand' => 'FORBIX SEMICON®',
        'price' => 38500,
        'image' => 'assets/images/gallery/panic-alarm/forbix-semicon-code-red-2d-display-6remotes.jpg',
        'description' => 'Advanced wireless emergency alert system with 2D display technology for critical situations. Perfect for hospitals, offices, industrial facilities.',
        'link' => 'product-6remote-code-red-2d-display.php',
        'inStock' => true,
        'freeShipping' => true
    ],
    [
        'id' => 'remote-traffic-light-controller',
        'name' => 'Remote Wireless Traffic Light Controller',
        'model' => 'FBXTLC01A',
        'brand' => 'FORBIX SEMICON®',
        'price' => 48750,
        'image' => 'assets/images/gallery/traffic-light-controller/forbix-semicon-remote-traffic-light-controller-4.jpg',
        'description' => 'Remote wireless traffic light controller with 200mm LED heads, visor and bright LEDs. Remote range 100–120 meters (open area). Includes 220VAC→12VDC adapter for 12VDC operation.',
        'link' => 'product-remote-wireless-traffic-light-controller.php',
        'inStock' => true,
        'freeShipping' => true
    ]
];

$additionalHeadTags = '
<link rel="canonical" href="https://www.forbixindia.com/buy.php" />
<meta property="og:url" content="https://www.forbixindia.com/buy.php" />
<meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/nurse-call/forbix-semicon-wireless-nurse-call-system-3.jpg" />
<meta property="og:image:alt" content="FORBIX SEMICON Products" />
<style>
:root{--bg:#f8fafc;--card:#ffffff;--text:#0f172a;--text-muted:#64748b;--accent:#0D8F84;--accent-hover:#0a7269;--accent-light:rgba(13,143,132,0.08);--border:#e2e8f0;--shadow:0 4px 24px rgba(15,23,42,0.06);--shadow-hover:0 12px 40px rgba(15,23,42,0.12);--radius:16px;--radius-sm:10px}
*{box-sizing:border-box}
.buy-page{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;-webkit-font-smoothing:antialiased;background:var(--bg);min-height:100vh}
.buy-container{max-width:1280px;margin:0 auto;padding:24px 16px 60px}
.buy-hero{background:linear-gradient(135deg,#0D8F84 0%,#0a6b63 50%,#085751 100%);border-radius:var(--radius);padding:clamp(28px,5vw,48px);margin-bottom:32px;position:relative;overflow:hidden}
.buy-hero::before{content:"";position:absolute;top:-50%;right:-20%;width:60%;height:200%;background:radial-gradient(ellipse,rgba(255,255,255,0.08) 0%,transparent 70%);pointer-events:none}
.buy-hero::after{content:"";position:absolute;bottom:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.2),transparent)}
.hero-content{position:relative;z-index:1;text-align:center}
.hero-badge{display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,0.15);backdrop-filter:blur(8px);padding:8px 16px;border-radius:50px;font-size:13px;font-weight:600;color:#fff;margin-bottom:16px;border:1px solid rgba(255,255,255,0.1)}
.hero-badge svg{width:16px;height:16px}
.hero-title{font-size:clamp(24px,4vw,40px);font-weight:700;color:#fff;margin:0 0 12px;line-height:1.2;letter-spacing:-0.5px}
.hero-subtitle{font-size:clamp(14px,2vw,18px);color:rgba(255,255,255,0.9);margin:0;max-width:600px;margin-inline:auto;line-height:1.6}
.products-section{margin-top:8px}
.section-header{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;margin-bottom:24px}
.section-title{font-size:clamp(18px,3vw,24px);font-weight:700;color:var(--text);margin:0;display:flex;align-items:center;gap:10px}
.section-title svg{width:24px;height:24px;color:var(--accent)}
.product-count{font-size:14px;color:var(--text-muted);background:var(--accent-light);padding:6px 14px;border-radius:50px;font-weight:500}
.products-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(min(100%,300px),1fr));gap:24px}
.product-card{background:var(--card);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow);transition:transform .3s ease,box-shadow .3s ease;display:flex;flex-direction:column;border:1px solid var(--border)}
.product-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-hover)}
.product-image-wrap{position:relative;background:linear-gradient(180deg,#f1f5f9 0%,#fff 100%);padding:20px;display:flex;align-items:center;justify-content:center;aspect-ratio:4/3;overflow:hidden}
.product-image-wrap img{max-width:100%;max-height:100%;object-fit:contain;border-radius:var(--radius-sm);transition:transform .4s ease}
.product-card:hover .product-image-wrap img{transform:scale(1.05)}
.stock-badge{position:absolute;top:16px;left:16px;display:flex;align-items:center;gap:5px;background:#10b981;color:#fff;padding:6px 12px;border-radius:50px;font-size:12px;font-weight:600;box-shadow:0 2px 8px rgba(16,185,129,0.3)}
.stock-badge::before{content:"";width:6px;height:6px;background:#fff;border-radius:50%;animation:pulse 2s infinite}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.5}}
.product-body{padding:20px;flex:1;display:flex;flex-direction:column}
.product-name{font-size:16px;font-weight:700;color:var(--text);margin:0 0 8px;line-height:1.4;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
.product-name a{color:inherit;text-decoration:none}
.product-name a:hover{color:var(--accent)}
.product-meta{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:12px}
.meta-tag{font-size:12px;color:var(--text-muted);background:var(--bg);padding:4px 10px;border-radius:6px}
.product-desc{font-size:14px;color:var(--text-muted);line-height:1.6;margin:0 0 16px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;flex:1}
.product-footer{margin-top:auto;padding-top:16px;border-top:1px solid var(--border)}
.price-row{display:flex;align-items:baseline;justify-content:space-between;flex-wrap:wrap;gap:8px;margin-bottom:16px}
.product-price{font-size:24px;font-weight:700;color:var(--accent)}
.gst-tag{font-size:12px;color:var(--text-muted);background:var(--accent-light);padding:4px 10px;border-radius:6px}
.qty-row{display:flex;align-items:center;gap:12px;margin-bottom:16px}
.qty-label{font-size:13px;color:var(--text-muted);font-weight:500}
.qty-select{padding:8px 32px 8px 12px;border:1px solid var(--border);border-radius:var(--radius-sm);font-size:14px;background:#fff url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2712%27 height=%2712%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%2364748b%27 stroke-width=%272%27%3E%3Cpath d=%27M6 9l6 6 6-6%27/%3E%3C/svg%3E") no-repeat right 12px center;appearance:none;cursor:pointer;transition:border-color .2s}
.qty-select:focus{outline:none;border-color:var(--accent)}
.btn-group{display:flex;gap:10px}
.btn{flex:1;display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:12px 16px;border-radius:var(--radius-sm);font-size:14px;font-weight:600;cursor:pointer;transition:all .2s ease;border:none;text-decoration:none}
.btn-cart{background:var(--accent);color:#fff}
.btn-cart:hover{background:var(--accent-hover);transform:translateY(-1px)}
.btn-cart svg{width:18px;height:18px}
.btn-details{background:transparent;color:var(--text);border:1px solid var(--border)}
.btn-details:hover{border-color:var(--accent);color:var(--accent);background:var(--accent-light)}
#cart-summary{position:fixed;bottom:24px;right:24px;z-index:1000}
.cart-fab{display:flex;align-items:center;justify-content:center;width:60px;height:60px;background:linear-gradient(135deg,var(--accent),var(--accent-hover));border-radius:50%;border:none;cursor:pointer;box-shadow:0 8px 24px rgba(13,143,132,0.35);transition:all .3s ease;position:relative}
.cart-fab:hover{transform:scale(1.08);box-shadow:0 12px 32px rgba(13,143,132,0.45)}
.cart-fab svg{width:26px;height:26px;color:#fff}
.cart-count{position:absolute;top:-4px;right:-4px;min-width:22px;height:22px;background:#ef4444;color:#fff;font-size:12px;font-weight:700;border-radius:50%;display:flex;align-items:center;justify-content:center;padding:0 6px;border:2px solid #fff;box-shadow:0 2px 8px rgba(239,68,68,0.4)}
.notification{position:fixed;bottom:100px;right:24px;background:#fff;border-radius:var(--radius);box-shadow:0 12px 40px rgba(15,23,42,0.15);padding:16px 20px;z-index:1001;transition:transform .3s ease;border-left:4px solid #10b981;max-width:320px}
.notification-content{display:flex;align-items:center;gap:12px}
.notification-content svg{width:24px;height:24px;color:#10b981;flex-shrink:0}
.notification-content h4{margin:0;font-size:14px;font-weight:600;color:var(--text)}
.notification-content p{margin:4px 0 0;font-size:13px;color:var(--text-muted)}
.cart-modal-overlay{position:fixed;inset:0;z-index:2000;display:none;align-items:center;justify-content:flex-end;opacity:0;transition:opacity .3s}
.cart-modal-backdrop{position:absolute;inset:0;background:rgba(15,23,42,0.5);backdrop-filter:blur(4px)}
.cart-modal-container{position:relative;width:100%;max-width:480px;height:100%;background:#fff;box-shadow:-8px 0 40px rgba(15,23,42,0.15);display:flex;flex-direction:column;transform:translateX(100%);transition:transform .3s ease}
.cart-modal-overlay.active{display:flex;opacity:1}
.cart-modal-overlay.active .cart-modal-container{transform:translateX(0)}
.cart-modal-header{display:flex;align-items:center;justify-content:space-between;padding:20px 24px;border-bottom:1px solid var(--border);background:linear-gradient(180deg,#fff,#f8fafc)}
.cart-header-content{display:flex;align-items:center;gap:14px}
.cart-icon-wrapper{width:44px;height:44px;background:var(--accent-light);border-radius:12px;display:flex;align-items:center;justify-content:center}
.cart-icon-wrapper .material-icons{font-size:22px;color:var(--accent)}
.cart-header-text h3{margin:0;font-size:18px;font-weight:700;color:var(--text)}
.cart-header-text p{margin:4px 0 0;font-size:13px;color:var(--text-muted)}
.cart-modal-close{width:36px;height:36px;border:none;background:transparent;cursor:pointer;border-radius:8px;display:flex;align-items:center;justify-content:center;transition:background .2s}
.cart-modal-close:hover{background:var(--bg)}
.cart-modal-close .material-icons{font-size:22px;color:var(--text-muted)}
.cart-modal-body{flex:1;overflow-y:auto;padding:20px 24px}
.cart-items-container{display:flex;flex-direction:column;gap:16px}
.cart-item{display:grid;grid-template-columns:70px 1fr auto;gap:14px;padding:16px;background:var(--bg);border-radius:var(--radius-sm);align-items:start}
.cart-item-image{width:70px;height:70px;object-fit:cover;border-radius:8px;background:#fff}
.cart-item-details h4{margin:0 0 4px;font-size:14px;font-weight:600;color:var(--text);line-height:1.3}
.cart-item-model{margin:0 0 6px;font-size:12px;color:var(--text-muted)}
.cart-item-price{margin:0;font-size:13px;color:var(--accent);font-weight:600}
.cart-item-controls{display:flex;flex-direction:column;align-items:flex-end;gap:8px}
.cart-item-controls .qty-label{font-size:11px}
.cart-item-controls .qty-select{padding:6px 28px 6px 10px;font-size:13px}
.remove-btn{width:28px;height:28px;border:none;background:rgba(239,68,68,0.1);border-radius:6px;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all .2s}
.remove-btn:hover{background:#ef4444}
.remove-btn:hover .material-icons{color:#fff}
.remove-btn .material-icons{font-size:16px;color:#ef4444}
.cart-total{text-align:right;font-weight:700;color:var(--text);font-size:14px;white-space:nowrap}
.cart-empty{text-align:center;padding:60px 20px;color:var(--text-muted)}
.cart-empty svg{width:64px;height:64px;margin-bottom:16px;opacity:.4}
.cart-modal-footer{padding:20px 24px;border-top:1px solid var(--border);background:#fff}
.cart-summary-section{margin-bottom:20px}
.cart-summary-row{display:flex;justify-content:space-between;align-items:center;padding:8px 0;font-size:14px}
.cart-summary-label{color:var(--text-muted)}
.cart-summary-value{font-weight:600;color:var(--text)}
.cart-free-shipping{color:#10b981;font-weight:600}
.cart-summary-divider{height:1px;background:var(--border);margin:8px 0}
.cart-summary-total .cart-summary-label,.cart-summary-total .cart-summary-value{font-size:16px;font-weight:700;color:var(--text)}
.cart-action-buttons{display:flex;flex-direction:column;gap:10px}
.cart-btn-checkout{width:100%;padding:14px 20px;background:linear-gradient(135deg,var(--accent),var(--accent-hover));color:#fff;border:none;border-radius:var(--radius-sm);font-size:15px;font-weight:600;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:all .2s;position:relative;overflow:hidden}
.cart-btn-checkout:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(13,143,132,0.3)}
.cart-btn-checkout .material-icons{font-size:20px}
.btn-shine{position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.2),transparent);animation:shine 3s infinite}
@keyframes shine{0%{left:-100%}50%,100%{left:100%}}
.cart-btn-continue{width:100%;padding:12px 20px;background:transparent;color:var(--text);border:1px solid var(--border);border-radius:var(--radius-sm);font-size:14px;font-weight:500;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:8px;transition:all .2s}
.cart-btn-continue:hover{border-color:var(--accent);color:var(--accent)}
.cart-btn-continue .material-icons{font-size:18px}
#checkout-modal{position:fixed;inset:0;z-index:2001;display:none;align-items:center;justify-content:center;padding:16px;background:rgba(15,23,42,0.6);backdrop-filter:blur(4px);opacity:0;transition:opacity .3s}
#checkout-modal:not(.hidden){display:flex}
.checkout-modal-container{width:100%;max-width:800px;max-height:90vh;background:#fff;border-radius:var(--radius);overflow:hidden;display:flex;flex-direction:column;box-shadow:0 24px 64px rgba(15,23,42,0.2)}
.checkout-modal-header{display:flex;align-items:center;justify-content:space-between;padding:20px 24px;border-bottom:1px solid var(--border);background:linear-gradient(180deg,#fff,#f8fafc)}
.checkout-header-content{display:flex;align-items:center;gap:14px}
.checkout-icon-wrapper{width:44px;height:44px;background:var(--accent-light);border-radius:12px;display:flex;align-items:center;justify-content:center}
.checkout-icon-wrapper .material-icons{font-size:22px;color:var(--accent)}
.checkout-header-text h3{margin:0;font-size:18px;font-weight:700;color:var(--text)}
.checkout-modal-close{width:36px;height:36px;border:none;background:transparent;cursor:pointer;border-radius:8px;display:flex;align-items:center;justify-content:center;transition:background .2s}
.checkout-modal-close:hover{background:var(--bg)}
.checkout-modal-close .material-icons{font-size:22px;color:var(--text-muted)}
.checkout-form-container{flex:1;overflow-y:auto;padding:24px}
.checkout-form-grid{display:grid;grid-template-columns:1fr;gap:24px}
.checkout-section{background:var(--bg);padding:20px;border-radius:var(--radius-sm)}
.checkout-section-title{display:flex;align-items:center;gap:10px;margin:0 0 16px;font-size:15px;font-weight:600;color:var(--text)}
.checkout-section-title .material-icons{font-size:20px;color:var(--accent)}
.checkout-form-group{margin-bottom:14px}
.checkout-form-group:last-child{margin-bottom:0}
.checkout-label{display:block;margin-bottom:6px;font-size:13px;font-weight:500;color:var(--text)}
.checkout-label.required::after{content:" *";color:#ef4444}
.checkout-input-wrapper{position:relative}
.checkout-input-wrapper .material-icons{position:absolute;right:12px;top:50%;transform:translateY(-50%);font-size:18px;color:var(--text-muted);pointer-events:none}
.checkout-input,.checkout-select{width:100%;padding:12px 40px 12px 14px;border:1px solid var(--border);border-radius:8px;font-size:14px;background:#fff;transition:all .2s}
.checkout-input:focus,.checkout-select:focus{outline:none;border-color:var(--accent);box-shadow:0 0 0 3px var(--accent-light)}
.checkout-form-row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.checkout-form-error{font-size:12px;color:#ef4444;margin-top:4px}
.has-error .checkout-input,.has-error .checkout-select{border-color:#ef4444}
.checkout-order-summary{background:var(--bg);padding:20px;border-radius:var(--radius-sm);margin-top:20px}
.checkout-order-title{display:flex;align-items:center;gap:10px;margin:0 0 16px;font-size:15px;font-weight:600;color:var(--text)}
.checkout-order-title .material-icons{font-size:20px;color:var(--accent)}
.checkout-items-list{max-height:160px;overflow-y:auto;margin-bottom:16px}
.checkout-item{display:flex;justify-content:space-between;align-items:center;padding:10px 0;border-bottom:1px solid var(--border)}
.checkout-item:last-child{border-bottom:none}
.checkout-item-info{display:flex;align-items:center;gap:6px}
.checkout-item-name{font-size:13px;color:var(--text);font-weight:500}
.checkout-item-qty{font-size:13px;color:var(--text-muted)}
.checkout-item-price{font-size:14px;font-weight:600;color:var(--text)}
.checkout-summary-totals{border-top:1px solid var(--border);padding-top:12px}
.checkout-summary-row{display:flex;justify-content:space-between;padding:6px 0;font-size:14px}
.checkout-summary-label{color:var(--text-muted)}
.checkout-summary-value{font-weight:600;color:var(--text)}
.checkout-free-shipping{color:#10b981;font-weight:600}
.checkout-summary-divider{height:1px;background:var(--border);margin:6px 0}
.checkout-summary-total .checkout-summary-label,.checkout-summary-total .checkout-summary-value{font-weight:700;color:var(--text);font-size:16px}
.checkout-security-info{display:flex;align-items:center;gap:8px;margin-top:16px;padding:12px;background:rgba(16,185,129,0.08);border-radius:8px}
.checkout-security-info .material-icons{font-size:18px;color:#10b981}
.checkout-security-text{font-size:12px;color:#10b981;font-weight:500}
.checkout-payment-buttons{display:flex;flex-direction:column;gap:12px;margin-top:20px}
.checkout-payment-btn{width:100%;padding:14px 20px;border:none;border-radius:var(--radius-sm);font-size:15px;font-weight:600;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:all .2s}
.checkout-btn-razorpay{background:linear-gradient(135deg,#3b82f6,#2563eb);color:#fff}
.checkout-btn-razorpay:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(37,99,235,0.3)}
.checkout-btn-paypal{background:linear-gradient(135deg,#f59e0b,#d97706);color:#fff}
.checkout-btn-paypal:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(217,119,6,0.3)}
.checkout-payment-btn .material-icons{font-size:20px}
[data-theme="dark"]{--bg:#1e293b;--card:#0f172a;--text:#e2e8f0;--text-muted:#94a3b8;--border:#334155;--shadow:0 4px 24px rgba(0,0,0,0.3);--shadow-hover:0 12px 40px rgba(0,0,0,0.4);--accent-light:rgba(13,143,132,0.15)}
[data-theme="dark"] .buy-page{background:var(--bg)}
[data-theme="dark"] .product-image-wrap{background:linear-gradient(180deg,#1e293b 0%,#0f172a 100%)}
[data-theme="dark"] .stock-badge{box-shadow:0 2px 8px rgba(16,185,129,0.2)}
[data-theme="dark"] .cart-modal-container,[data-theme="dark"] .checkout-modal-container{background:var(--card)}
[data-theme="dark"] .cart-modal-header,[data-theme="dark"] .checkout-modal-header{background:linear-gradient(180deg,#1e293b,#0f172a)}
[data-theme="dark"] .cart-modal-footer{background:var(--card)}
[data-theme="dark"] .notification{background:var(--card);border-left-color:#10b981}
[data-theme="dark"] .qty-select,.checkout-input,.checkout-select{background:var(--bg);color:var(--text)}
[data-theme="dark"] .cart-item,[data-theme="dark"] .checkout-section,[data-theme="dark"] .checkout-order-summary{background:#1e293b}
@media(min-width:640px){.checkout-form-grid{grid-template-columns:repeat(2,1fr)}}
@media(min-width:768px){.buy-container{padding:32px 24px 80px}.products-grid{gap:28px}}
@media(min-width:1024px){.buy-container{padding:40px 32px 100px}}
@media(max-width:480px){.btn-group{flex-direction:column}.cart-modal-container{max-width:100%}.checkout-form-row{grid-template-columns:1fr}}
</style>
';

$skipCommonCss = true;
include __DIR__ . '/includes/header.php';
?>

<div class="buy-page">
    <div class="buy-container">
        <!-- Hero Section -->
        <section class="buy-hero">
            <div class="hero-content">
                <div class="hero-badge">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    Official FORBIX SEMICON® Store
                </div>
                <h1 class="hero-title">Buy Wireless Nurse Call, Panic Alarm, Token Display</h1>
                <p class="hero-subtitle">Premium quality wireless automation products for hospitals, offices, and industrial environments. Free shipping across India with GST included.</p>
            </div>
        </section>

        <!-- Products Section -->
        <section class="products-section">
            <div class="section-header">
                <h2 class="section-title">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4v2h16V4zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6h1zm-9 4H6v-4h6v4z"/></svg>
                    Our Products
                </h2>
                <span class="product-count"><?php echo count($products); ?> Products</span>
            </div>

            <div class="products-grid">
                <?php foreach ($products as $product): ?>
                <article class="product-card">
                    <div class="product-image-wrap">
                        <a href="<?php echo htmlspecialchars($product['link']); ?>">
                            <img src="<?php echo htmlspecialchars($product['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($product['name']); ?>"
                                 loading="lazy"
                                 width="280"
                                 height="210">
                        </a>
                        <?php if ($product['inStock']): ?>
                        <div class="stock-badge">In Stock</div>
                        <?php endif; ?>
                    </div>
                    <div class="product-body">
                        <h3 class="product-name">
                            <a href="<?php echo htmlspecialchars($product['link']); ?>">
                                <?php echo htmlspecialchars($product['name']); ?>
                            </a>
                        </h3>
                        <div class="product-meta">
                            <span class="meta-tag">Model: <?php echo htmlspecialchars($product['model']); ?></span>
                            <span class="meta-tag"><?php echo htmlspecialchars($product['brand']); ?></span>
                        </div>
                        <p class="product-desc"><?php echo htmlspecialchars($product['description']); ?></p>
                        <div class="product-footer">
                            <div class="price-row">
                                <span class="product-price">₹<?php echo number_format($product['price'], 0); ?></span>
                                <?php if ($product['freeShipping']): ?>
                                <span class="gst-tag">Incl. GST</span>
                                <?php endif; ?>
                            </div>
                            <div class="qty-row">
                                <label class="qty-label">Qty:</label>
                                <select class="qty-select" id="quantity-<?php echo $product['id']; ?>">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-cart" onclick="try { gtag_report_conversion(); } catch(e) {} addToCart('<?php echo $product['id']; ?>')">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 22a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2zM1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg>
                                    Add to Cart
                                </button>
                                <a class="btn btn-details" href="<?php echo htmlspecialchars($product['link']); ?>" onclick="try { gtag_report_conversion('<?php echo htmlspecialchars($product['link']); ?>'); } catch(e) {} return true;">
                                    Details
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</div>

<!-- Floating Cart Button -->
<div id="cart-summary" style="display: none;">
    <button class="cart-fab" onclick="openCartModal()" aria-label="View Cart">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 22a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2zM1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg>
        <span id="cart-count" class="cart-count">0</span>
    </button>
</div>

<?php include 'includes/cart-modal.php'; ?>
<?php include 'includes/checkout-form.php'; ?>

<script>
// Cart functionality
let cart = {};
let products = <?php echo json_encode($products); ?>;

// Convert products array to object for easy lookup
let productsData = {};
products.forEach(product => {
    productsData[product.id] = product;
});

function addToCart(productId) {
    const quantity = parseInt(document.getElementById(`quantity-${productId}`).value);
    
    if (cart[productId]) {
        cart[productId] += quantity;
    } else {
        cart[productId] = quantity;
    }
    
    updateCartDisplay();
    showCartNotification(productsData[productId].name, quantity);
}

function removeFromCart(productId) {
    delete cart[productId];
    updateCartDisplay();
}

function updateCartQuantity(productId, quantity) {
    if (quantity <= 0) {
        removeFromCart(productId);
    } else {
        cart[productId] = parseInt(quantity);
        updateCartDisplay();
    }
}

function updateCartDisplay() {
    const cartCount = Object.values(cart).reduce((total, quantity) => total + quantity, 0);
    const cartSummary = document.getElementById('cart-summary');
    const cartCountElement = document.getElementById('cart-count');
    const cartItemCountElement = document.getElementById('cart-item-count');
    
    if (cartCount > 0) {
        cartSummary.style.display = 'block';
        cartCountElement.textContent = cartCount;
        if (cartItemCountElement) {
            cartItemCountElement.textContent = cartCount === 1 ? '1 item selected' : `${cartCount} items selected`;
        }
    } else {
        cartSummary.style.display = 'none';
        if (cartItemCountElement) {
            cartItemCountElement.textContent = '0 items selected';
        }
    }
    
    updateCartModal();
}

function updateCartModal() {
    const cartItems = document.getElementById('cart-items');
    const cartSubtotal = document.getElementById('cart-subtotal');
    const cartTotal = document.getElementById('cart-total');
    let subtotal = 0;
    let html = '';
    
    if (Object.keys(cart).length === 0) {
        html = `<div class="cart-empty">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 22a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2zM1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg>
            <p>Your cart is empty</p>
            <small>Add some products to get started</small>
        </div>`;
    } else {
        for (const [productId, quantity] of Object.entries(cart)) {
            const product = productsData[productId];
            const itemTotal = product.price * quantity;
            subtotal += itemTotal;
            
            html += `
                <div class="cart-item">
                    <img class="cart-item-image" src="${product.image}" alt="${product.name}">
                    <div class="cart-item-details">
                        <h4 class="cart-item-name">${product.name}</h4>
                        <p class="cart-item-model">Model: ${product.model}</p>
                        <p class="cart-item-price">₹${product.price.toLocaleString()} each</p>
                    </div>
                    <div class="cart-item-controls">
                        <label class="qty-label">Qty:</label>
                        <select class="qty-select" onchange="updateCartQuantity('${productId}', this.value)">
                            ${[1,2,3,4,5].map(i => `<option value="${i}" ${i === quantity ? 'selected' : ''}>${i}</option>`).join('')}
                        </select>
                        <button class="remove-btn" onclick="removeFromCart('${productId}')" title="Remove item">
                            <span class="material-icons">delete</span>
                        </button>
                    </div>
                    <div class="cart-total">
                        <p>₹${itemTotal.toLocaleString()}</p>
                    </div>
                </div>
            `;
        }
    }
    
    cartItems.innerHTML = html;
    cartSubtotal.textContent = `₹${subtotal.toLocaleString()}`;
    if (cartTotal) {
        cartTotal.textContent = `₹${subtotal.toLocaleString()}`;
    }
    
    updateCheckoutModal();
}

function updateCheckoutModal() {
    const checkoutItems = document.getElementById('checkout-items');
    const checkoutSubtotal = document.getElementById('checkout-subtotal');
    const checkoutShipping = document.getElementById('checkout-shipping');
    const checkoutTotal = document.getElementById('checkout-total');
    
    let subtotal = 0;
    let html = '';
    
    for (const [productId, quantity] of Object.entries(cart)) {
        const product = productsData[productId];
        const itemTotal = product.price * quantity;
        subtotal += itemTotal;
        
        html += `
            <div class="checkout-item">
                <div class="checkout-item-info">
                    <span class="checkout-item-name">${product.name}</span>
                    <span class="checkout-item-qty"> x ${quantity}</span>
                </div>
                <span class="checkout-item-price">₹${itemTotal.toLocaleString()}</span>
            </div>
        `;
    }
    
    const shipping = 0;
    const total = subtotal + shipping;
    
    checkoutItems.innerHTML = html;
    checkoutSubtotal.textContent = `₹${subtotal.toLocaleString()}`;
    checkoutShipping.textContent = shipping === 0 ? 'Free' : `₹${shipping.toLocaleString()}`;
    checkoutTotal.textContent = `₹${total.toLocaleString()}`;
}

function showCartNotification(productName, quantity) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.style.transform = 'translateX(120%)';
    notification.innerHTML = `
        <div class="notification-content">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            <div>
                <h4>Added to Cart!</h4>
                <p>${quantity}x ${productName}</p>
            </div>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    requestAnimationFrame(() => {
        notification.style.transform = 'translateX(0)';
    });
    
    setTimeout(() => {
        notification.style.transform = 'translateX(120%)';
        setTimeout(() => {
            if (notification.parentNode) {
                document.body.removeChild(notification);
            }
        }, 300);
    }, 3000);
}

function openCartModal() {
    updateCartModal();
    const modal = document.getElementById('cart-modal');
    modal.classList.remove('hidden');
    modal.classList.add('active');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeCartModal() {
    const modal = document.getElementById('cart-modal');
    modal.classList.remove('active');
    
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.style.display = 'none';
        document.body.style.overflow = '';
    }, 300);
}

function showCheckoutForm() {
    if (Object.keys(cart).length === 0) {
        alert('Your cart is empty!');
        return;
    }
    
    closeCartModal();
    updateCheckoutModal();
    const modal = document.getElementById('checkout-modal');
    modal.classList.remove('hidden');
    modal.style.display = 'flex';
    modal.style.opacity = '1';
    document.body.style.overflow = 'hidden';
}

function closeCheckoutModal() {
    const modal = document.getElementById('checkout-modal');
    modal.style.opacity = '0';
    
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.style.display = 'none';
        document.body.style.overflow = '';
    }, 300);
}

function initializePayPal() {
    let total = 0;
    for (const [productId, quantity] of Object.entries(cart)) {
        const product = productsData[productId];
        total += product.price * quantity;
    }
    
    const totalUSD = (total / 83).toFixed(2);
    return totalUSD;
}

function initializeCheckoutForm() {
    const checkoutForm = document.getElementById('checkout-form');
    const inputs = checkoutForm.querySelectorAll('.checkout-input, .checkout-select');
    
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            validateField(this);
        });
        
        input.addEventListener('blur', function() {
            validateField(this);
        });
    });
    
    const phoneInput = checkoutForm.querySelector('input[name="phone"]');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 10) {
                value = value.substring(0, 10);
                e.target.value = '+91 ' + value.substring(0, 5) + ' ' + value.substring(5);
            }
        });
    }
    
    const pincodeInput = checkoutForm.querySelector('input[name="pincode"]');
    if (pincodeInput) {
        pincodeInput.addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/\D/g, '').substring(0, 6);
        });
    }
}

function validateField(field) {
    const formGroup = field.closest('.checkout-form-group');
    let errorElement = formGroup.querySelector('.checkout-form-error');
    
    if (!errorElement) {
        errorElement = document.createElement('div');
        errorElement.className = 'checkout-form-error';
        formGroup.appendChild(errorElement);
    }
    
    formGroup.classList.remove('has-error');
    errorElement.textContent = '';
    
    if (field.hasAttribute('required') && !field.value.trim()) {
        showFieldError(formGroup, errorElement, 'This field is required');
        return false;
    }
    
    if (field.type === 'email' && field.value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(field.value)) {
            showFieldError(formGroup, errorElement, 'Please enter a valid email address');
            return false;
        }
    }
    
    if (field.name === 'phone' && field.value) {
        const phoneRegex = /^(\+91\s?)?\d{10}$/;
        const cleanPhone = field.value.replace(/\s/g, '').replace('+91', '');
        if (!phoneRegex.test(cleanPhone)) {
            showFieldError(formGroup, errorElement, 'Please enter a valid 10-digit phone number');
            return false;
        }
    }
    
    if (field.name === 'pincode' && field.value) {
        if (field.value.length !== 6) {
            showFieldError(formGroup, errorElement, 'PIN code must be 6 digits');
            return false;
        }
    }
    
    return true;
}

function showFieldError(formGroup, errorElement, message) {
    formGroup.classList.add('has-error');
    errorElement.textContent = message;
}

function validateCheckoutForm() {
    const checkoutForm = document.getElementById('checkout-form');
    const inputs = checkoutForm.querySelectorAll('.checkout-input[required], .checkout-select[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!validateField(input)) {
            isValid = false;
        }
    });
    
    return isValid;
}

document.addEventListener('DOMContentLoaded', function() {
    const checkoutForm = document.getElementById('checkout-form');
    
    initializeCheckoutForm();
    
    document.getElementById('paypal-button').addEventListener('click', function(e) {
        e.preventDefault();
        
        if (!validateCheckoutForm()) {
            return;
        }
        
        const totalUSD = initializePayPal();
        
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'https://www.paypal.com/cgi-bin/webscr';
        form.target = '_blank';
        
        const fields = {
            'cmd': '_xclick',
            'business': 'sales@forbixindia.com', 
            'item_name': 'FORBIX SEMICON Products',
            'amount': totalUSD,
            'currency_code': 'USD',
            'return': window.location.origin + '/thank-you.php',
            'cancel_return': window.location.origin + '/buy.php',
            'notify_url': window.location.origin + '/paypal-ipn.php'
        };
        
        for (const [key, value] of Object.entries(fields)) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = key;
            input.value = value;
            form.appendChild(input);
        }
        
        document.body.appendChild(form);
        form.submit();
        document.body.removeChild(form);
    });
    
    document.getElementById('razorpay-button').addEventListener('click', function(e) {
        e.preventDefault();
        
        if (!validateCheckoutForm()) {
            return;
        }
        
        let total = 0;
        for (const [productId, quantity] of Object.entries(cart)) {
            const product = productsData[productId];
            total += product.price * quantity;
        }
        if(total === 0){
            alert('Your cart is empty!');
            return;
        }
        payWithRazorpay(total);
    });
});

document.addEventListener('click', function(e) {
    if (e.target.id === 'cart-modal' || e.target.classList.contains('cart-modal-backdrop')) {
        closeCartModal();
    }
    if (e.target.id === 'checkout-modal') {
        closeCheckoutModal();
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeCartModal();
        closeCheckoutModal();
    }
});
</script>

<script>
function gtag_report_conversion(url) {
    try {
        var sendTo = 'AW-10777354408/4zHiCOX747AbEKjBhZMo';

        if (typeof window.gtag === 'function') {
            window.gtag('event', 'conversion', {
                'send_to': sendTo
            });

            if (url) {
                setTimeout(function() { 
                    try {
                        window.location = url; 
                    } catch(e) {
                        console.warn('Navigation error:', e);
                    }
                }, 100);
                return false;
            }
        } else {
            console.warn('gtag not available for conversion tracking');
        }

        return true;
    } catch (e) {
        console.warn('gtag_report_conversion error:', e);
        return true;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        try {
            gtag_report_conversion();
        } catch (e) {
            console.warn('buy.php conversion report failed', e);
        }
    }, 100);
});
</script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
function payWithRazorpay(totalAmount) {
    var options = {
    "key": "rzp_live_RPICAz0jT118MU",
        "amount": totalAmount * 100,
        "currency": "INR",
        "name": "Forbix Semicon",
        "description": "Product Purchase",
        "handler": function (response){
            fetch('verify-razorpay.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({ payment_id: response.razorpay_payment_id, amount: totalAmount })
            })
            .then(res => res.json())
            .then(data => {
                if(data.success){
                    alert('Payment successful! Order confirmed.');
                    window.location.href = '/thank-you.php';
                } else {
                    alert('Payment verification failed.');
                }
            });
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
}

document.getElementById('razorpay-button').addEventListener('click', function(e) {
    e.preventDefault();
    let total = 0;
    for (const [productId, quantity] of Object.entries(cart)) {
        const product = productsData[productId];
        total += product.price * quantity;
    }
    if(total === 0){
        alert('Your cart is empty!');
        return;
    }
    payWithRazorpay(total);
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
