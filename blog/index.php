<?php
// Base path for subdirectory - used by header and footer for correct asset paths
$basePath = '../';

$pageTitle = "Blog - Insights & Articles | FORBIX SEMICON®";
$pageDescription = "Explore the latest insights, guides, and articles on wireless nurse call systems, traffic management solutions, panic alarms, and industrial automation from FORBIX SEMICON®.";
$pageKeywords = "FORBIX blog, nurse call system articles, traffic light controller guide, wireless technology insights, industrial automation blog, healthcare technology";
$canonicalUrl = "https://www.forbixindia.com/blog/";

// Blog Schema
$blogSchema = array(
    "@context" => "https://schema.org",
    "@type" => "Blog",
    "name" => "FORBIX SEMICON® Blog",
    "description" => $pageDescription,
    "url" => "https://www.forbixindia.com/blog/",
    "publisher" => array(
        "@type" => "Organization",
        "name" => "FORBIX SEMICON® Technologies Pvt Ltd",
        "logo" => array(
            "@type" => "ImageObject",
            "url" => "https://www.forbixindia.com/assets/images/logo.png"
        )
    )
);

$additionalHeadTags = '
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.forbixindia.com/blog/" />
    <meta property="og:image" content="https://www.forbixindia.com/assets/images/gallery/blog/runway-incursion-warning-system-with-long-range-radio-transceivers.jpg" />
    <meta property="og:image:alt" content="FORBIX SEMICON Blog" />
    <script type="application/ld+json">' . json_encode($blogSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>
';

include __DIR__ . '/../includes/header.php';

// Function to extract blog post metadata from PHP file
function extractBlogMeta($filePath) {
    $content = file_get_contents($filePath);
    $meta = array();
    
    // Extract page title - use a more permissive regex
    if (preg_match('/\$pageTitle\s*=\s*"([^"]+)"/', $content, $matches)) {
        // Clean up title - remove " | FORBIX SEMICON®" suffix
        $meta['title'] = preg_replace('/\s*\|.*$/', '', $matches[1]);
    } elseif (preg_match("/\\\$pageTitle\s*=\s*'([^']+)'/", $content, $matches)) {
        $meta['title'] = preg_replace('/\s*\|.*$/', '', $matches[1]);
    }
    
    // Extract page description
    if (preg_match('/\$pageDescription\s*=\s*["\']([^"\']+)["\']/', $content, $matches)) {
        $meta['description'] = $matches[1];
    }
    
    // Extract date published from schema
    if (preg_match('/"datePublished"\s*=>\s*["\']([^"\']+)["\']/', $content, $matches)) {
        $meta['date'] = $matches[1];
    }
    
    // Extract category from article-category class
    if (preg_match('/class="article-category">([^<]+)</', $content, $matches)) {
        $meta['category'] = trim($matches[1]);
    }
    
    // Extract read time
    if (preg_match('/(\d+)\s*min read/', $content, $matches)) {
        $meta['readTime'] = $matches[1];
    }
    
    // Extract hero image
    if (preg_match('/hero-image[^>]*>[\s\S]*?<img[^>]*src=["\']([^"\']+)["\']/', $content, $matches)) {
        $meta['image'] = $matches[1];
    }
    
    // Get filename for URL - links are relative since we're in the blog directory
    $meta['filename'] = basename(str_replace('\\', '/', $filePath));
    $meta['url'] = './' . $meta['filename'];
    
    return $meta;
}

// Scan current blog directory for posts (excluding index.php)
$blogDir = __DIR__;
$blogPosts = array();

if (is_dir($blogDir)) {
    // Scan directory for PHP files
    $files = scandir($blogDir);
    foreach ($files as $file) {
        // Skip non-PHP files and index.php
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'php' || $file === 'index.php') {
            continue;
        }
        $filePath = $blogDir . DIRECTORY_SEPARATOR . $file;
        $meta = extractBlogMeta($filePath);
        if (!empty($meta['title'])) {
            $blogPosts[] = $meta;
        }
    }
    
    // Sort by date (newest first)
    usort($blogPosts, function($a, $b) {
        return strtotime($b['date'] ?? '2024-01-01') - strtotime($a['date'] ?? '2024-01-01');
    });
}
?>

<style>
    /* Blog Listing Page Styles */
    :root {
        --blog-bg: #f8fafc;
        --blog-card: #ffffff;
        --blog-text: #0f172a;
        --blog-text-secondary: #475569;
        --blog-text-muted: #64748b;
        --blog-accent: #0ea5a4;
        --blog-accent-light: #14b8a6;
        --blog-accent-hover: #0d9488;
        --blog-border: #e2e8f0;
        --blog-shadow: rgba(0, 0, 0, 0.08);
        --blog-gradient-start: #0ea5a4;
        --blog-gradient-end: #0f766e;
    }
    
    [data-theme="dark"] {
        --blog-bg: #0f172a;
        --blog-card: #1e293b;
        --blog-text: #f1f5f9;
        --blog-text-secondary: #cbd5e1;
        --blog-text-muted: #94a3b8;
        --blog-accent: #2dd4bf;
        --blog-accent-light: #5eead4;
        --blog-accent-hover: #14b8a6;
        --blog-border: #334155;
        --blog-shadow: rgba(0, 0, 0, 0.4);
        --blog-gradient-start: #14b8a6;
        --blog-gradient-end: #0d9488;
    }
    
    /* Page Base */
    .blog-listing-page {
        background: var(--blog-bg);
        min-height: 100vh;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
    }
    
    /* Hero Section */
    .blog-hero {
        background: linear-gradient(135deg, var(--blog-gradient-start), var(--blog-gradient-end));
        padding: 80px 20px 100px;
        position: relative;
        overflow: hidden;
    }
    
    .blog-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        pointer-events: none;
    }
    
    .blog-hero::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 0;
        height: 80px;
        background: var(--blog-bg);
        clip-path: ellipse(75% 100% at 50% 100%);
    }
    
    .blog-hero-content {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    
    .blog-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 8px 20px;
        border-radius: 50px;
        color: white;
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 0.5px;
        margin-bottom: 24px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .blog-hero-badge svg {
        width: 16px;
        height: 16px;
        fill: currentColor;
    }
    
    .blog-hero h1 {
        font-size: clamp(32px, 5vw, 52px);
        font-weight: 700;
        color: white;
        margin: 0 0 20px;
        line-height: 1.2;
        text-shadow: 0 2px 20px rgba(0, 0, 0, 0.15);
    }
    
    .blog-hero p {
        font-size: clamp(16px, 2vw, 19px);
        color: rgba(255, 255, 255, 0.9);
        margin: 0;
        max-width: 650px;
        margin: 0 auto;
        line-height: 1.7;
    }
    
    /* Main Content */
    .blog-main {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px 80px;
    }
    
    /* Section Headers */
    .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 32px;
        flex-wrap: wrap;
        gap: 16px;
    }
    
    .section-title {
        font-size: 28px;
        font-weight: 700;
        color: var(--blog-text);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .section-title::before {
        content: '';
        width: 4px;
        height: 28px;
        background: linear-gradient(180deg, var(--blog-accent), var(--blog-accent-light));
        border-radius: 4px;
    }
    
    .article-count {
        font-size: 14px;
        color: var(--blog-text-muted);
        font-weight: 500;
    }
    
    /* Blog Grid */
    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 32px;
    }
    
    @media (max-width: 480px) {
        .blog-grid {
            grid-template-columns: 1fr;
        }
    }
    
    /* Blog Card */
    .blog-card {
        background: var(--blog-card);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 20px var(--blog-shadow);
        border: 1px solid var(--blog-border);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
    }
    
    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px var(--blog-shadow);
        border-color: var(--blog-accent);
    }
    
    .blog-card-image {
        position: relative;
        height: 220px;
        overflow: hidden;
    }
    
    .blog-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .blog-card:hover .blog-card-image img {
        transform: scale(1.08);
    }
    
    .blog-card-category {
        position: absolute;
        top: 16px;
        left: 16px;
        background: var(--blog-accent);
        color: white;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 6px 14px;
        border-radius: 6px;
        box-shadow: 0 4px 12px rgba(14, 165, 164, 0.3);
    }
    
    .blog-card-content {
        padding: 28px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    
    .blog-card-title {
        font-size: 20px;
        font-weight: 700;
        color: var(--blog-text);
        margin: 0 0 14px;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .blog-card-title a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .blog-card-title a:hover {
        color: var(--blog-accent);
    }
    
    .blog-card-excerpt {
        font-size: 15px;
        color: var(--blog-text-secondary);
        line-height: 1.7;
        margin: 0 0 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex-grow: 1;
    }
    
    .blog-card-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 18px;
        border-top: 1px solid var(--blog-border);
    }
    
    .blog-card-date {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        color: var(--blog-text-muted);
    }
    
    .blog-card-date svg {
        width: 14px;
        height: 14px;
        fill: currentColor;
    }
    
    .blog-card-read-time {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        color: var(--blog-text-muted);
    }
    
    .blog-card-read-time svg {
        width: 14px;
        height: 14px;
        fill: currentColor;
    }
    
    .blog-card-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--blog-accent);
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        margin-top: 20px;
        transition: all 0.3s ease;
    }
    
    .blog-card-link svg {
        width: 18px;
        height: 18px;
        fill: currentColor;
        transition: transform 0.3s ease;
    }
    
    .blog-card-link:hover {
        color: var(--blog-accent-hover);
    }
    
    .blog-card-link:hover svg {
        transform: translateX(4px);
    }
    
    /* Featured Card - First blog post */
    .blog-grid .blog-card:first-child {
        grid-column: 1 / -1;
    }
    
    @media (min-width: 768px) {
        .blog-grid .blog-card:first-child {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        
        .blog-grid .blog-card:first-child .blog-card-image {
            height: 100%;
            min-height: 320px;
        }
        
        .blog-grid .blog-card:first-child .blog-card-content {
            padding: 40px;
        }
        
        .blog-grid .blog-card:first-child .blog-card-title {
            font-size: 26px;
        }
        
        .blog-grid .blog-card:first-child .blog-card-excerpt {
            -webkit-line-clamp: 4;
        }
    }
    
    /* Empty State */
    .blog-empty {
        text-align: center;
        padding: 80px 20px;
        background: var(--blog-card);
        border-radius: 20px;
        border: 2px dashed var(--blog-border);
    }
    
    .blog-empty-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 24px;
        background: linear-gradient(135deg, var(--blog-accent), var(--blog-accent-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .blog-empty-icon svg {
        width: 40px;
        height: 40px;
        fill: white;
    }
    
    .blog-empty h3 {
        font-size: 24px;
        color: var(--blog-text);
        margin: 0 0 12px;
    }
    
    .blog-empty p {
        font-size: 16px;
        color: var(--blog-text-muted);
        margin: 0;
    }
    
    /* Newsletter Section */
    .blog-newsletter {
        margin-top: 80px;
        background: linear-gradient(135deg, var(--blog-card) 0%, rgba(14, 165, 164, 0.05) 100%);
        border-radius: 24px;
        padding: 60px 40px;
        text-align: center;
        border: 1px solid var(--blog-border);
        position: relative;
        overflow: hidden;
    }
    
    .blog-newsletter::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(14, 165, 164, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }
    
    .blog-newsletter::after {
        content: '';
        position: absolute;
        bottom: -50%;
        left: -10%;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(14, 165, 164, 0.08) 0%, transparent 70%);
        pointer-events: none;
    }
    
    .blog-newsletter-content {
        position: relative;
        z-index: 1;
        max-width: 550px;
        margin: 0 auto;
    }
    
    .blog-newsletter h3 {
        font-size: 28px;
        font-weight: 700;
        color: var(--blog-text);
        margin: 0 0 12px;
    }
    
    .blog-newsletter p {
        font-size: 16px;
        color: var(--blog-text-secondary);
        margin: 0 0 30px;
        line-height: 1.7;
    }
    
    .blog-newsletter form {
        display: flex;
        gap: 12px;
        max-width: 450px;
        margin: 0 auto;
    }
    
    @media (max-width: 500px) {
        .blog-newsletter form {
            flex-direction: column;
        }
    }
    
    .blog-newsletter input[type="email"] {
        flex: 1;
        padding: 16px 20px;
        font-size: 15px;
        border: 2px solid var(--blog-border);
        border-radius: 12px;
        background: var(--blog-bg);
        color: var(--blog-text);
        outline: none;
        transition: all 0.3s ease;
    }
    
    .blog-newsletter input[type="email"]::placeholder {
        color: var(--blog-text-muted);
    }
    
    .blog-newsletter input[type="email"]:focus {
        border-color: var(--blog-accent);
        box-shadow: 0 0 0 4px rgba(14, 165, 164, 0.1);
    }
    
    .blog-newsletter button {
        padding: 16px 32px;
        font-size: 15px;
        font-weight: 600;
        background: linear-gradient(135deg, var(--blog-accent), var(--blog-accent-hover));
        color: white;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
    }
    
    .blog-newsletter button:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(14, 165, 164, 0.35);
    }
    
    .blog-newsletter button:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }
    
    #blogSubscribeMessage {
        margin-top: 16px;
        font-size: 14px;
        min-height: 20px;
    }
    
    #blogSubscribeMessage.hidden {
        display: none;
    }
    
    .blog-message-success {
        color: #10b981;
    }
    
    .blog-message-error {
        color: #ef4444;
    }
    
    [data-theme="dark"] .blog-message-success {
        color: #34d399;
    }
    
    [data-theme="dark"] .blog-message-error {
        color: #f87171;
    }
    
    /* Breadcrumb */
    .blog-breadcrumb {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px 20px 0;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: var(--blog-text-muted);
    }
    
    .blog-breadcrumb a {
        color: var(--blog-accent);
        text-decoration: none;
        transition: color 0.2s;
    }
    
    .blog-breadcrumb a:hover {
        text-decoration: underline;
    }
    
    /* Placeholder image for cards without images */
    .placeholder-image {
        background: linear-gradient(135deg, var(--blog-accent) 0%, var(--blog-accent-hover) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }
    
    .placeholder-image svg {
        width: 60px;
        height: 60px;
        fill: white;
        opacity: 0.6;
    }
</style>

<div class="blog-listing-page">
    <!-- Hero Section -->
    <section class="blog-hero">
        <div class="blog-hero-content">
            <div class="blog-hero-badge">
                <svg viewBox="0 0 24 24"><path d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                Knowledge Hub
            </div>
            <h1>Insights & Articles</h1>
            <p>Discover expert guides, industry insights, and innovative solutions for wireless automation, healthcare technology, and traffic management systems.</p>
        </div>
    </section>
    
    <!-- Breadcrumb -->
    <nav class="blog-breadcrumb" aria-label="Breadcrumb">
        <a href="../index.php">Home</a>
        <span>»</span>
        <span>Blog</span>
    </nav>
    
    <!-- Main Content -->
    <main class="blog-main">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title">Latest Articles</h2>
            <span class="article-count"><?php echo count($blogPosts); ?> Article<?php echo count($blogPosts) !== 1 ? 's' : ''; ?></span>
        </div>
        
        <?php if (count($blogPosts) > 0): ?>
        <!-- Blog Grid -->
        <div class="blog-grid">
            <?php foreach ($blogPosts as $index => $post): ?>
            <article class="blog-card">
                <div class="blog-card-image">
                    <?php if (!empty($post['image'])): ?>
                        <?php 
                        // Image paths from blog articles use ../ which is correct for this location
                        $imagePath = $post['image'];
                        ?>
                        <img src="<?php echo htmlspecialchars($imagePath); ?>" 
                             alt="<?php echo htmlspecialchars($post['title'] ?? 'Blog post'); ?>"
                             loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>">
                    <?php else: ?>
                        <div class="placeholder-image">
                            <svg viewBox="0 0 24 24"><path d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($post['category'])): ?>
                        <span class="blog-card-category"><?php echo htmlspecialchars($post['category']); ?></span>
                    <?php endif; ?>
                </div>
                <div class="blog-card-content">
                    <h3 class="blog-card-title">
                        <a href="<?php echo htmlspecialchars($post['url']); ?>">
                            <?php echo htmlspecialchars($post['title'] ?? 'Untitled Post'); ?>
                        </a>
                    </h3>
                    <?php if (!empty($post['description'])): ?>
                        <p class="blog-card-excerpt"><?php echo htmlspecialchars($post['description']); ?></p>
                    <?php endif; ?>
                    <div class="blog-card-meta">
                        <?php if (!empty($post['date'])): ?>
                        <span class="blog-card-date">
                            <svg viewBox="0 0 24 24"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/></svg>
                            <?php echo date('M j, Y', strtotime($post['date'])); ?>
                        </span>
                        <?php endif; ?>
                        <?php if (!empty($post['readTime'])): ?>
                        <span class="blog-card-read-time">
                            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                            <?php echo htmlspecialchars($post['readTime']); ?> min read
                        </span>
                        <?php endif; ?>
                    </div>
                    <a href="<?php echo htmlspecialchars($post['url']); ?>" class="blog-card-link">
                        Read Article
                        <svg viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <!-- Empty State -->
        <div class="blog-empty">
            <div class="blog-empty-icon">
                <svg viewBox="0 0 24 24"><path d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
            </div>
            <h3>No Articles Yet</h3>
            <p>We're working on creating valuable content for you. Check back soon!</p>
        </div>
        <?php endif; ?>
        
        <!-- Newsletter Section -->
        <section class="blog-newsletter">
            <div class="blog-newsletter-content">
                <h3>Stay Updated</h3>
                <p>Subscribe to our newsletter for the latest articles, product updates, and industry insights delivered straight to your inbox.</p>
                <form id="blogNewsletterForm">
                    <input type="email" name="email" required placeholder="Enter your email address">
                    <button type="submit" id="blogSubscribeBtn">Subscribe</button>
                </form>
                <div id="blogSubscribeMessage" class="hidden"></div>
            </div>
        </section>
    </main>
</div>

<!-- Newsletter Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('blogNewsletterForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = this.email.value;
            const button = document.getElementById('blogSubscribeBtn');
            const messageDiv = document.getElementById('blogSubscribeMessage');
            
            // Disable button and show loading state
            button.disabled = true;
            button.innerHTML = 'Subscribing...';
            messageDiv.classList.add('hidden');
            
            fetch('../subscribe-handler.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'email=' + encodeURIComponent(email)
            })
            .then(response => response.json())
            .then(data => {
                messageDiv.classList.remove('hidden');
                if (data.success) {
                    messageDiv.className = 'blog-message-success';
                    messageDiv.textContent = data.message;
                    form.reset();
                } else {
                    messageDiv.className = 'blog-message-error';
                    messageDiv.textContent = data.message;
                }
            })
            .catch(error => {
                messageDiv.classList.remove('hidden');
                messageDiv.className = 'blog-message-error';
                messageDiv.textContent = 'An error occurred. Please try again.';
            })
            .finally(() => {
                button.disabled = false;
                button.innerHTML = 'Subscribe';
            });
        });
    }
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
