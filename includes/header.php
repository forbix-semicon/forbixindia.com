<?php
// Set default base path if not defined (for pages in root directory)
$basePath = $basePath ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'FORBIX SEMICON® - Wireless Nurse Call, Panic Alarm, Token Display'; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'FORBIX SEMICON® specializes in wireless electronic automation, panic alarms, nurse call systems, traffic controllers, and RF transmitter receivers.'; ?>">
    <meta name="robots" content="index, follow">

    <!-- Preconnect for critical external resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--<link rel="preconnect" href="https://cdnjs.cloudflare.com">-->

    <link rel="icon" href="<?php echo $basePath; ?>favicon.ico" type="image/x-icon">
    <?php
    // Allow child pages to add additional head tags. If a canonical is provided there,
    // capture it and print a single canonical tag from the header (prefer explicit $canonicalUrl).
    if (isset($additionalHeadTags) && !empty($additionalHeadTags)) {
        $canonicalFromAdditional = null;

        // If the child included a canonical link, capture its href
        if (preg_match('/<link[^>]*rel=["\']canonical["\'][^>]*href=["\']([^"\']+)["\'][^>]*>/i', $additionalHeadTags, $m)) {
            $canonicalFromAdditional = $m[1];
        }

        // Decide which canonical to print: explicit $canonicalUrl takes precedence,
        // otherwise use the canonical found inside $additionalHeadTags
        $canonicalToEcho = null;
        if (!empty($canonicalUrl)) {
            $canonicalToEcho = $canonicalUrl;
        } elseif (!empty($canonicalFromAdditional)) {
            $canonicalToEcho = $canonicalFromAdditional;
        }

        if (!empty($canonicalToEcho)) {
            // Sanitize output and print a single canonical tag in the head
            $safeCanon = htmlspecialchars($canonicalToEcho, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            echo '<link rel="canonical" href="' . $safeCanon . '" />' . PHP_EOL;
        }

        // Remove any canonical link tags from additionalHeadTags to avoid duplicates
        $additionalHeadTags = preg_replace('/<link[^>]*rel=["\']canonical["\'][^>]*>/i', '', $additionalHeadTags);

        // Print the remaining additional head tags
        echo $additionalHeadTags;
    } elseif (!empty($canonicalUrl)) {
        // No additional head tags but page supplied a canonicalUrl variable
        $safeCanon = htmlspecialchars($canonicalUrl, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        echo '<link rel="canonical" href="' . $safeCanon . '" />' . PHP_EOL;
    }
    ?>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google Search Console -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10777354408">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'AW-10777354408');
    </script>
    
    <!-- Google Analytics -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WPT55W6ESQ">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'G-WPT55W6ESQ');
    </script>
</head>

<body>
    <!-- Elegant Responsive Navigation -->
    <style>
        /* Base font for navigation */
        #main-nav, #main-nav * {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        
        /* Navigation Base Styles */
        #main-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 1000;
            background: linear-gradient(180deg, #ffffff 0%, #fafbfc 100%);
            box-shadow: 0 1px 0 rgba(0,0,0,0.05), 0 4px 20px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(0,0,0,0.04);
        }
        [data-theme="dark"] #main-nav {
            background: linear-gradient(180deg, #1a1f2e 0%, #151922 100%);
            box-shadow: 0 1px 0 rgba(255,255,255,0.03), 0 4px 20px rgba(0,0,0,0.4);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        
        /* Nav Container */
        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 72px;
        }
        
        /* Logo Styles */
        .logo-container {
            flex-shrink: 0;
            display: flex;
            align-items: center;
        }
        .logo-container a {
            display: block;
            line-height: 0;
            transition: opacity 0.2s ease;
        }
        .logo-container a:hover {
            opacity: 0.85;
        }
        .logo-container img {
            height: auto;
            max-height: 46px;
            width: auto;
            max-width: 180px;
            object-fit: contain;
            transition: all 0.3s ease;
        }
        @media (max-width: 768px) {
            .logo-container img {
                max-height: 40px;
                max-width: 150px;
            }
        }
        @media (max-width: 480px) {
            .logo-container img {
                max-height: 35px;
                max-width: 120px;
            }
        }
        .logo-light { display: block; }
        .logo-dark { display: none; }
        [data-theme="dark"] .logo-light { display: none !important; }
        [data-theme="dark"] .logo-dark { display: block !important; }
        
        /* Desktop Menu */
        .desktop-menu {
            display: none;
            flex: 1;
            justify-content: center;
            align-items: center;
            margin: 0 40px;
        }
        @media (min-width: 992px) {
            .desktop-menu {
                display: flex;
            }
        }
        .desktop-menu ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 4px;
            align-items: center;
        }
        .desktop-menu li {
            position: relative;
        }
        
        /* Menu Items - Refined styling */
        .desktop-menu > ul > li > a,
        .desktop-menu > ul > li > button {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 10px 18px;
            color: #3d4852;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.01em;
            border-radius: 8px;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            background: transparent;
            border: none;
            cursor: pointer;
            font-family: inherit;
            position: relative;
            white-space: nowrap;
        }
        
        /* Underline indicator for hover */
        .desktop-menu > ul > li > a::after,
        .desktop-menu > ul > li > button::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            width: 24px;
            height: 2px;
            background: linear-gradient(90deg, #0D8F84, #10b981);
            border-radius: 2px;
            transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        [data-theme="dark"] .desktop-menu > ul > li > a,
        [data-theme="dark"] .desktop-menu > ul > li > button {
            color: #e2e8f0;
        }
        
        .desktop-menu > ul > li > a:hover,
        .desktop-menu > ul > li > button:hover {
            background: rgba(13, 143, 132, 0.06);
            color: #0D8F84;
        }
        
        .desktop-menu > ul > li > a:hover::after,
        .desktop-menu > ul > li > button:hover::after,
        .desktop-menu > ul > li.active > a::after,
        .desktop-menu > ul > li.active > button::after {
            transform: translateX(-50%) scaleX(1);
        }
        
        [data-theme="dark"] .desktop-menu > ul > li > a:hover,
        [data-theme="dark"] .desktop-menu > ul > li > button:hover {
            background: rgba(16, 185, 129, 0.1);
            color: #34d399;
        }
        
        [data-theme="dark"] .desktop-menu > ul > li > a::after,
        [data-theme="dark"] .desktop-menu > ul > li > button::after {
            background: linear-gradient(90deg, #34d399, #10b981);
        }
        
        /* Dropdown arrow for buttons */
        .desktop-menu > ul > li.dropdown > button {
            padding-right: 28px;
        }
        .desktop-menu > ul > li.dropdown > button::before {
            content: '';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 5px solid currentColor;
            opacity: 0.5;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }
        
        .desktop-menu > ul > li.dropdown.active > button::before {
            transform: translateY(-50%) rotate(180deg);
            opacity: 0.8;
        }
        
        /* Dropdown Menu - Elevated card design */
        .desktop-menu .dropdown-menu {
            position: absolute;
            top: calc(100% + 4px);
            left: 50%;
            transform: translateX(-50%) translateY(-8px);
            margin-top: 8px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05),
                        0 10px 15px -3px rgba(0,0,0,0.08),
                        0 20px 25px -5px rgba(0,0,0,0.05),
                        0 0 0 1px rgba(0,0,0,0.03);
            min-width: 240px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            list-style: none;
            padding: 10px;
            z-index: 1001;
        }
        
        /* Dropdown arrow pointer */
        .desktop-menu .dropdown-menu::before {
            content: '';
            position: absolute;
            top: -6px;
            left: 50%;
            transform: translateX(-50%);
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 6px solid #ffffff;
            filter: drop-shadow(0 -1px 1px rgba(0,0,0,0.03));
        }
        
        [data-theme="dark"] .desktop-menu .dropdown-menu {
            background: #1e293b;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.2),
                        0 10px 15px -3px rgba(0,0,0,0.3),
                        0 20px 25px -5px rgba(0,0,0,0.2),
                        0 0 0 1px rgba(255,255,255,0.05);
        }
        
        [data-theme="dark"] .desktop-menu .dropdown-menu::before {
            border-bottom-color: #1e293b;
        }
        
        .desktop-menu .dropdown.active .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }
        
        .desktop-menu .dropdown-menu li {
            margin: 0;
        }
        
        .desktop-menu .dropdown-menu a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            color: #475569;
            text-decoration: none;
            font-size: 14px;
            font-weight: 450;
            border-radius: 10px;
            transition: all 0.15s ease;
            position: relative;
        }
        
        /* Subtle left border indicator on hover */
        .desktop-menu .dropdown-menu a::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 0;
            background: linear-gradient(180deg, #0D8F84, #10b981);
            border-radius: 2px;
            transition: height 0.2s ease;
        }
        
        [data-theme="dark"] .desktop-menu .dropdown-menu a {
            color: #cbd5e1;
        }
        
        .desktop-menu .dropdown-menu a:hover {
            background: linear-gradient(90deg, rgba(13, 143, 132, 0.08), rgba(13, 143, 132, 0.03));
            color: #0D8F84;
            padding-left: 20px;
        }
        
        .desktop-menu .dropdown-menu a:hover::before {
            height: 20px;
        }
        
        [data-theme="dark"] .desktop-menu .dropdown-menu a:hover {
            background: linear-gradient(90deg, rgba(52, 211, 153, 0.12), rgba(52, 211, 153, 0.04));
            color: #34d399;
        }
        
        [data-theme="dark"] .desktop-menu .dropdown-menu a::before {
            background: linear-gradient(180deg, #34d399, #10b981);
        }
        
        /* Right Side Controls */
        .nav-controls {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-shrink: 0;
        }
        
        /* Theme Toggle - Premium pill design */
        #theme-toggle {
            position: relative;
            width: 52px;
            height: 28px;
            background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
            border-radius: 999px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            padding: 0;
            flex-shrink: 0;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
        }
        
        #theme-toggle:hover {
            background: linear-gradient(135deg, #cbd5e1 0%, #94a3b8 100%);
        }
        
        [data-theme="dark"] #theme-toggle {
            background: linear-gradient(135deg, #334155 0%, #1e293b 100%);
        }
        
        [data-theme="dark"] #theme-toggle:hover {
            background: linear-gradient(135deg, #475569 0%, #334155 100%);
        }
        
        @media (max-width: 768px) {
            #theme-toggle {
                width: 48px;
                height: 24px;
            }
        }
        @media (max-width: 480px) {
            #theme-toggle {
                width: 44px;
                height: 22px;
            }
        }
        
        #toggle-dot {
            position: absolute;
            top: 3px;
            left: 3px;
            width: 22px;
            height: 22px;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 999px;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 1px 3px rgba(0,0,0,0.15), 0 2px 6px rgba(0,0,0,0.1);
        }
        
        @media (max-width: 768px) {
            #toggle-dot {
                width: 18px;
                height: 18px;
            }
        }
        @media (max-width: 480px) {
            #toggle-dot {
                width: 16px;
                height: 16px;
            }
        }
        
        [data-theme="dark"] #toggle-dot {
            transform: translateX(24px);
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        }
        
        @media (max-width: 768px) {
            [data-theme="dark"] #toggle-dot {
                transform: translateX(24px);
            }
        }
        @media (max-width: 480px) {
            [data-theme="dark"] #toggle-dot {
                transform: translateX(22px);
            }
        }
        
        /* Mobile Menu Button */
        #mobile-menu-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0;
            border-radius: 8px;
            transition: background 0.2s ease;
        }
        @media (min-width: 992px) {
            #mobile-menu-button {
                display: none;
            }
        }
        #mobile-menu-button:hover {
            background: rgba(0,0,0,0.05);
        }
        [data-theme="dark"] #mobile-menu-button:hover {
            background: rgba(255,255,255,0.1);
        }
        .hamburger {
            display: flex;
            flex-direction: column;
            gap: 5px;
            width: 24px;
        }
        .hamburger-line {
            width: 100%;
            height: 2.5px;
            background: #333;
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        [data-theme="dark"] .hamburger-line {
            background: #e0e0e0;
        }
        #mobile-menu-button.active .hamburger-line:nth-child(1) {
            transform: rotate(45deg) translate(7px, 7px);
        }
        #mobile-menu-button.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }
        #mobile-menu-button.active .hamburger-line:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }
        
        /* Mobile Menu */
        #mobile-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-height: calc(100vh - 70px);
            overflow-y: auto;
            z-index: 999;
        }
        [data-theme="dark"] #mobile-menu {
            background: #1a1a1a;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        #mobile-menu:not(.hidden) {
            display: block;
        }
        .mobile-menu-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        #mobile-menu a,
        #mobile-menu button {
            display: block;
            padding: 14px 16px;
            color: #333;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.2s ease;
            background: transparent;
            border: none;
            text-align: left;
            width: 100%;
            cursor: pointer;
            font-family: inherit;
        }
        [data-theme="dark"] #mobile-menu a,
        [data-theme="dark"] #mobile-menu button {
            color: #e0e0e0;
        }
        #mobile-menu a:hover,
        #mobile-menu button:hover {
            background: rgba(13, 143, 132, 0.1);
            color: #0D8F84;
        }
        [data-theme="dark"] #mobile-menu a:hover,
        [data-theme="dark"] #mobile-menu button:hover {
            background: rgba(52, 211, 153, 0.15);
            color: #34d399;
        }
        .mobile-submenu {
            display: none;
            flex-direction: column;
            padding-left: 20px;
            gap: 2px;
            margin-top: 4px;
        }
        .mobile-submenu:not(.hidden) {
            display: flex;
        }
        .mobile-submenu a {
            padding: 12px 16px;
            font-size: 15px;
            font-weight: 400;
        }
    </style>
    
    <nav id="main-nav" role="navigation" aria-label="Main navigation">
        <div class="nav-container">
            <!-- Logo -->
            <div class="logo-container">
                <a href="<?php echo $basePath; ?>index.php" aria-label="Home">
                    <img src="<?php echo $basePath; ?>assets/images/FORBIX-SEMICON-logo.png" alt="FORBIX SEMICON®" class="logo-light" />
                    <img src="<?php echo $basePath; ?>assets/images/FORBIX-SEMICON-logo-white.png" alt="FORBIX SEMICON®" class="logo-dark" />
                </a>
            </div>

            <!-- Desktop Navigation Menu -->
            <div class="desktop-menu" aria-hidden="false">
                <ul role="menubar">
                    <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>index.php">Home</a></li>
                    <li role="none" class="dropdown">
                        <button role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="products-menu">Products</button>
                        <ul role="menu" class="dropdown-menu" id="products-menu">
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>nurse-call.php">Nurse Call System</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>panic-alarm.php">Wireless Panic Alarm</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>peon-call.php">Peon Call Bell</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>token-display.php">Queue Management</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>motor-control.php">Motor Control</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>long-range.php">Long Range Radios</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>traffic-light.php">Traffic Light Controller</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>wireless-transceiver.php">Wireless Transceiver</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>air-quality.php">Air Quality Monitor</a></li>
                        </ul>
                    </li>
                    <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>buy.php">Buy</a></li>
                    <li role="none" class="dropdown">
                        <button role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="customer-menu">Customer</button>
                        <ul role="menu" class="dropdown-menu" id="customer-menu">
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>clients.php">Clients</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>testimonials.php">Testimonials</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>installation.php">Installation Gallery</a></li>
                        </ul>
                    </li>
                    <li role="none" class="dropdown">
                        <button role="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="offerings-menu">Offerings</button>
                        <ul role="menu" class="dropdown-menu" id="offerings-menu">
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>blog/">Blog</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>production-gallery.php">Production Gallery</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>technical-docs.php">Technical Documents</a></li>
                            <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>credentials.php">Credentials</a></li>
                        </ul>
                    </li>
                    <li role="none"><a role="menuitem" href="<?php echo $basePath; ?>contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Right Side Controls -->
            <div class="nav-controls">
                <!-- Theme Toggle -->
                <div id="theme-toggle" role="switch" aria-checked="false" aria-label="Toggle theme" tabindex="0">
                    <div id="toggle-dot"></div>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open mobile menu">
                    <div class="hamburger">
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden" role="menu" aria-labelledby="mobile-menu-button">
            <div class="mobile-menu-content">
                <a role="menuitem" href="<?php echo $basePath; ?>index.php">Home</a>

                <button id="mobile-products-button" role="menuitem" aria-expanded="false">Products</button>
                <div id="mobile-products-menu" class="mobile-submenu hidden" role="menu">
                    <a role="menuitem" href="<?php echo $basePath; ?>nurse-call.php">Nurse Call System</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>panic-alarm.php">Wireless Panic Alarm</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>peon-call.php">Peon Call Bell</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>token-display.php">Queue Management</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>motor-control.php">Motor Control</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>long-range.php">Long Range Radios</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>traffic-light.php">Traffic Light Controller</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>wireless-transceiver.php">Wireless Transceiver</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>air-quality.php">Air Quality Monitor</a>
                </div>

                <a role="menuitem" href="<?php echo $basePath; ?>buy.php">Buy</a>

                <button id="mobile-customer-button" role="menuitem" aria-expanded="false">Customer</button>
                <div id="mobile-customer-menu" class="mobile-submenu hidden" role="menu">
                    <a role="menuitem" href="<?php echo $basePath; ?>clients.php">Clients</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>testimonials.php">Testimonials</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>installation.php">Installation Gallery</a>
                </div>

                <button id="mobile-offerings-button" role="menuitem" aria-expanded="false">Offerings</button>
                <div id="mobile-offerings-menu" class="mobile-submenu hidden" role="menu">
                    <a role="menuitem" href="<?php echo $basePath; ?>blog/">Blog</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>production-gallery.php">Production Gallery</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>technical-docs.php">Technical Documents</a>
                    <a role="menuitem" href="<?php echo $basePath; ?>credentials.php">Credentials</a>
                </div>

                <a role="menuitem" href="<?php echo $basePath; ?>contact.php">Contact</a>
            </div>
        </div>
    </nav>

    <!-- JavaScript for theme toggle and mobile menu -->
    <script>
        // Theme management
        function initTheme() {
            const savedTheme = localStorage.getItem('theme');
            const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            
            if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
                document.documentElement.setAttribute('data-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
            }
        }
        
        function toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const themeToggle = document.getElementById('theme-toggle');
            
            // Add click animation
            if (themeToggle) {
                themeToggle.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    themeToggle.style.transform = '';
                }, 150);
            }
            
            if (currentTheme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
            }
        }
        
        // Initialize theme and interactions on page load
        document.addEventListener('DOMContentLoaded', function() {
            initTheme();
            
            // Theme toggle event listener
            const themeToggle = document.getElementById('theme-toggle');
            if (themeToggle) {
                themeToggle.addEventListener('click', toggleTheme);
                themeToggle.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        toggleTheme();
                    }
                });
            }
            
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                    mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
                    mobileMenu.classList.toggle('hidden');
                    mobileMenuButton.classList.toggle('active');
                });
            }
            
            // Mobile submenu toggles
            const mobileProductsButton = document.getElementById('mobile-products-button');
            const mobileProductsMenu = document.getElementById('mobile-products-menu');
            if (mobileProductsButton && mobileProductsMenu) {
                mobileProductsButton.addEventListener('click', () => {
                    const isExpanded = mobileProductsButton.getAttribute('aria-expanded') === 'true';
                    mobileProductsButton.setAttribute('aria-expanded', !isExpanded);
                    mobileProductsMenu.classList.toggle('hidden');
                });
            }
            
            const mobileCustomerButton = document.getElementById('mobile-customer-button');
            const mobileCustomerMenu = document.getElementById('mobile-customer-menu');
            if (mobileCustomerButton && mobileCustomerMenu) {
                mobileCustomerButton.addEventListener('click', () => {
                    const isExpanded = mobileCustomerButton.getAttribute('aria-expanded') === 'true';
                    mobileCustomerButton.setAttribute('aria-expanded', !isExpanded);
                    mobileCustomerMenu.classList.toggle('hidden');
                });
            }
            
            const mobileOfferingsButton = document.getElementById('mobile-offerings-button');
            const mobileOfferingsMenu = document.getElementById('mobile-offerings-menu');
            if (mobileOfferingsButton && mobileOfferingsMenu) {
                mobileOfferingsButton.addEventListener('click', () => {
                    const isExpanded = mobileOfferingsButton.getAttribute('aria-expanded') === 'true';
                    mobileOfferingsButton.setAttribute('aria-expanded', !isExpanded);
                    mobileOfferingsMenu.classList.toggle('hidden');
                });
            }
            
            // Desktop dropdown handlers
            function handleDropdownClick(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const dropdown = this.closest('.dropdown');
                const isActive = dropdown.classList.contains('active');
                
                // Close all dropdowns first
                document.querySelectorAll('.desktop-menu .dropdown').forEach(dd => {
                    dd.classList.remove('active');
                    const btn = dd.querySelector('button');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                });
                
                // Toggle current dropdown
                if (!isActive) {
                    dropdown.classList.add('active');
                    this.setAttribute('aria-expanded', 'true');
                }
            }
            
            // Attach desktop dropdown handlers
            const desktopDropdowns = document.querySelectorAll('.desktop-menu .dropdown button');
            desktopDropdowns.forEach(button => {
                button.addEventListener('click', handleDropdownClick);
            });
            
            // Close dropdowns when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.dropdown')) {
                    document.querySelectorAll('.desktop-menu .dropdown').forEach(dropdown => {
                        dropdown.classList.remove('active');
                        const btn = dropdown.querySelector('button');
                        if (btn) btn.setAttribute('aria-expanded', 'false');
                    });
                }
            });
        });
        
        // Listen for system theme changes
        window.matchMedia('(prefers-color-scheme: dark)').addListener(function(e) {
            if (!localStorage.getItem('theme')) {
                if (e.matches) {
                    document.documentElement.setAttribute('data-theme', 'dark');
                } else {
                    document.documentElement.setAttribute('data-theme', 'light');
                }
            }
        });
    </script>
</body>
</html>