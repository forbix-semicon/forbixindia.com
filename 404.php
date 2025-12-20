<?php
// Handle blog URL redirects first
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($requestUri, 'blog') !== false) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /');
    exit();
}

// Force 404 status code - this MUST return 404
// Use multiple methods for maximum compatibility
if (!headers_sent()) {
    // Method 1: Direct protocol header
    $protocol = isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.1';
    header($protocol . ' 404 Not Found', true, 404);
    
    // Method 2: Status header (for CGI/FastCGI)
    header('Status: 404 Not Found', true, 404);
    
    // Method 3: PHP function
    http_response_code(404);
}

$pageTitle = "Page Not Found - FORBIX SEMICON®";
$pageDescription = "The page you're looking for might have been moved. Explore our wireless electronic products.";

$additionalHeadTags = '<style>
.e404{min-height:calc(100vh - 160px);display:flex;align-items:center;justify-content:center;padding:50px 20px;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;-webkit-font-smoothing:antialiased;position:relative;overflow:hidden;background:linear-gradient(160deg,#ecfdf5 0%,#f0fdfa 30%,#f8fafc 100%)}
[data-theme="dark"] .e404{background:linear-gradient(160deg,#134e4a 0%,#0f172a 40%,#020617 100%)}
.e404::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(13,143,132,.03) 1px,transparent 1px),linear-gradient(90deg,rgba(13,143,132,.03) 1px,transparent 1px);background-size:50px 50px}
[data-theme="dark"] .e404::before{background-image:linear-gradient(rgba(45,212,191,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(45,212,191,.04) 1px,transparent 1px)}
.e404-orb{position:absolute;border-radius:50%;filter:blur(80px);opacity:.6;pointer-events:none}
.e404-orb-1{width:500px;height:500px;background:linear-gradient(135deg,#0d8f84,#10b981);top:-200px;right:-150px}
.e404-orb-2{width:400px;height:400px;background:linear-gradient(135deg,#06b6d4,#0d8f84);bottom:-150px;left:-150px}
[data-theme="dark"] .e404-orb{opacity:.25}
.e404-wrap{max-width:640px;width:100%;text-align:center;position:relative;z-index:1}
.e404-visual{position:relative;margin-bottom:24px;height:260px;display:flex;align-items:center;justify-content:center}
.e404-num{font-size:clamp(150px,35vw,240px);font-weight:900;line-height:1;letter-spacing:-10px;background:linear-gradient(180deg,#0d8f84 0%,#10b981 50%,#34d399 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;position:relative;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;animation:numFloat 4s ease-in-out infinite}
@keyframes numFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}
.e404-num::after{content:"404";position:absolute;left:5px;top:5px;background:linear-gradient(180deg,rgba(13,143,132,.12) 0%,rgba(16,185,129,.08) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;z-index:-1}
.e404-ring{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:220px;height:220px;border-radius:50%;border:2px dashed rgba(13,143,132,.3);animation:ringSpin 30s linear infinite}
@keyframes ringSpin{to{transform:translate(-50%,-50%) rotate(360deg)}}
[data-theme="dark"] .e404-ring{border-color:rgba(45,212,191,.25)}
.e404-face{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:90px;height:90px;background:linear-gradient(145deg,#fff,#f8fafc);border-radius:22px;display:flex;align-items:center;justify-content:center;box-shadow:0 15px 50px rgba(13,143,132,.18),inset 0 1px 0 rgba(255,255,255,.9);animation:faceBounce 2.5s ease-in-out infinite}
[data-theme="dark"] .e404-face{background:linear-gradient(145deg,#1e293b,#0f172a);box-shadow:0 15px 50px rgba(0,0,0,.4),inset 0 1px 0 rgba(255,255,255,.05)}
@keyframes faceBounce{0%,100%{transform:translate(-50%,-50%) translateY(0)}50%{transform:translate(-50%,-50%) translateY(-6px)}}
.e404-face svg{width:50px;height:50px;stroke:#0d8f84;stroke-width:1.5}
[data-theme="dark"] .e404-face svg{stroke:#2dd4bf}
.e404-title{font-size:clamp(26px,5vw,38px);font-weight:700;color:#0f172a;margin:0 0 14px;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif}
[data-theme="dark"] .e404-title{color:#f1f5f9}
.e404-desc{font-size:clamp(15px,2.5vw,18px);color:#475569;margin:0 0 36px;line-height:1.7;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif}
[data-theme="dark"] .e404-desc{color:#94a3b8}
.e404-btns{display:flex;flex-wrap:wrap;gap:14px;justify-content:center;margin-bottom:48px}
.e404-btn{display:inline-flex;align-items:center;gap:10px;padding:15px 30px;border-radius:14px;font-size:15px;font-weight:600;text-decoration:none;transition:all .25s ease;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;border:none;cursor:pointer}
.e404-btn svg{width:20px;height:20px;flex-shrink:0}
.e404-btn-p{background:linear-gradient(135deg,#0d8f84,#10b981);color:#fff;box-shadow:0 6px 24px rgba(13,143,132,.35)}
.e404-btn-p:hover{transform:translateY(-3px);box-shadow:0 10px 32px rgba(13,143,132,.45)}
.e404-btn-s{background:rgba(255,255,255,.85);color:#1e293b;box-shadow:0 2px 16px rgba(0,0,0,.06);backdrop-filter:blur(8px);border:1px solid rgba(0,0,0,.04)}
[data-theme="dark"] .e404-btn-s{background:rgba(30,41,59,.85);color:#e2e8f0;border-color:rgba(255,255,255,.06)}
.e404-btn-s:hover{transform:translateY(-3px);color:#0d8f84;border-color:rgba(13,143,132,.3)}
[data-theme="dark"] .e404-btn-s:hover{color:#2dd4bf;border-color:rgba(45,212,191,.4)}
.e404-links{background:rgba(255,255,255,.75);backdrop-filter:blur(16px);border-radius:20px;padding:28px;box-shadow:0 4px 24px rgba(0,0,0,.04)}
[data-theme="dark"] .e404-links{background:rgba(15,23,42,.75);box-shadow:0 4px 24px rgba(0,0,0,.25)}
.e404-links-title{font-size:12px;font-weight:700;color:#0d8f84;text-transform:uppercase;letter-spacing:1.5px;margin:0 0 20px;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif}
[data-theme="dark"] .e404-links-title{color:#2dd4bf}
.e404-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:10px}
@media(max-width:480px){.e404-grid{grid-template-columns:1fr}}
.e404-link{display:flex;align-items:center;gap:12px;padding:14px 16px;background:linear-gradient(135deg,#fff,#f8fafc);border-radius:12px;text-decoration:none;color:#1e293b;font-size:14px;font-weight:500;transition:all .2s ease;border:1px solid rgba(0,0,0,.03);font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif}
[data-theme="dark"] .e404-link{background:linear-gradient(135deg,#1e293b,#0f172a);color:#e2e8f0;border-color:rgba(255,255,255,.04)}
.e404-link:hover{transform:translateX(4px);color:#0d8f84;border-color:rgba(13,143,132,.25);box-shadow:0 4px 16px rgba(13,143,132,.1)}
[data-theme="dark"] .e404-link:hover{color:#2dd4bf;border-color:rgba(45,212,191,.3)}
.e404-ico{width:38px;height:38px;background:linear-gradient(135deg,#ecfdf5,#d1fae5);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
[data-theme="dark"] .e404-ico{background:linear-gradient(135deg,rgba(45,212,191,.12),rgba(16,185,129,.08))}
.e404-ico svg{width:18px;height:18px;stroke:#0d8f84;stroke-width:2}
[data-theme="dark"] .e404-ico svg{stroke:#2dd4bf}
.e404-help{margin-top:24px;padding-top:20px;border-top:1px solid rgba(0,0,0,.05);display:flex;flex-wrap:wrap;justify-content:center;gap:20px;font-size:13px;color:#64748b;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif}
[data-theme="dark"] .e404-help{border-color:rgba(255,255,255,.05);color:#94a3b8}
.e404-help a{color:#0d8f84;text-decoration:none;font-weight:600}
[data-theme="dark"] .e404-help a{color:#2dd4bf}
.e404-help a:hover{text-decoration:underline}
.e404-help svg{width:14px;height:14px;stroke:#0d8f84;vertical-align:middle;margin-right:6px}
[data-theme="dark"] .e404-help svg{stroke:#2dd4bf}
</style>';

$skipCommonCss = true;
include 'includes/header.php';
?>

<main class="e404">
    <div class="e404-orb e404-orb-1"></div>
    <div class="e404-orb e404-orb-2"></div>
    
    <div class="e404-wrap">
        <div class="e404-visual">
            <div class="e404-ring"></div>
            <div class="e404-num">404</div>
            <div class="e404-face">
                <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M8 15s1.5 2 4 2 4-2 4-2"/>
                    <line x1="9" y1="9" x2="9.01" y2="9" stroke-width="3"/>
                    <line x1="15" y1="9" x2="15.01" y2="9" stroke-width="3"/>
                </svg>
            </div>
        </div>

        <h1 class="e404-title">Oops! Page Not Found</h1>
        <p class="e404-desc">The page you're looking for has wandered off. It may have been moved, renamed, or no longer exists. Let's get you back on track!</p>

        <div class="e404-btns">
            <a href="/" class="e404-btn e404-btn-p">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                Back to Home
            </a>
            <a href="contact.php" class="e404-btn e404-btn-s">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Contact Us
            </a>
        </div>

        <div class="e404-links">
            <h2 class="e404-links-title">Popular Products</h2>
            <div class="e404-grid">
                <a href="nurse-call.php" class="e404-link">
                    <span class="e404-ico"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span>
                    Nurse Call System
                </a>
                <a href="panic-alarm.php" class="e404-link">
                    <span class="e404-ico"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg></span>
                    Panic Alarm
                </a>
                <a href="token-display.php" class="e404-link">
                    <span class="e404-ico"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></span>
                    Token Display
                </a>
                <a href="peon-call.php" class="e404-link">
                    <span class="e404-ico"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"/><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"/><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"/><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"/></svg></span>
                    Peon Call Bell
                </a>
            </div>
            
            <div class="e404-help">
                <span><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.88.37 1.74.7 2.56a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.82.33 1.68.57 2.56.7A2 2 0 0 1 22 16.92z"/></svg><a href="tel:+919742159846">+91-9742159846</a></span>
                <span><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><a href="mailto:forbix.semicon.sales4@gmail.com">forbix.semicon.sales4@gmail.com</a></span>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
