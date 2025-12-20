// FORBIX SEMICON® Page JavaScript - Interactive Functionality for Nurse Call System

// Initialize page functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeAnimations();
    initializeImageGallery();
    initializeLightbox();
    initializeScrollEffects();
    initializeSmoothScrolling();
});

// Animation on scroll
function initializeAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe product cards for animation
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        observer.observe(card);
    });

    // Observe feature cards
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach(card => {
        observer.observe(card);
    });
}

// Enhanced image gallery functionality
function initializeImageGallery() {
    const galleries = document.querySelectorAll('.image-gallery');
    
    galleries.forEach(gallery => {
        const featuredImg = gallery.querySelector('.featured-image img');
        const thumbnails = gallery.querySelectorAll('.thumbnail');
        
        if (featuredImg) {
            // Add click handler to featured image for lightbox
            featuredImg.addEventListener('click', function() {
                openLightbox(this.src, this.alt, 0, [this]);
            });
            
            // Add hover effects
            featuredImg.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });
            
            featuredImg.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        }
    });
}

// Enhanced lightbox functionality
function initializeLightbox() {
    // Create lightbox if it doesn't exist
    if (!document.getElementById('image-lightbox')) {
        createLightboxModal();
    }
    
    // Add click handlers to all gallery images
    const galleryImages = document.querySelectorAll('.featured-image img, .thumbnail img');
    galleryImages.forEach(img => {
        img.addEventListener('click', function(e) {
            e.preventDefault();
            openLightbox(this.src, this.alt, 0, [this]);
        });
    });
}

// Create lightbox modal
function createLightboxModal() {
    const lightboxHTML = `
        <div id="image-lightbox" class="lightbox-modal">
            <div class="lightbox-backdrop"></div>
            <div class="lightbox-container">
                <button class="lightbox-close" onclick="closeLightbox()">
                    <span class="material-icons">close</span>
                </button>
                <div class="lightbox-content">
                    <img id="lightbox-image" src="" alt="">
                </div>
            </div>
        </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', lightboxHTML);
    
    // Add CSS for lightbox
    const lightboxCSS = `
        <style>
        .lightbox-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10000;
            justify-content: center;
            align-items: center;
        }
        
        .lightbox-modal.active {
            display: flex;
        }
        
        .lightbox-backdrop {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
        }
        
        .lightbox-container {
            position: relative;
            max-width: 90vw;
            max-height: 90vh;
            z-index: 10001;
        }
        
        .lightbox-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .lightbox-content img {
            max-width: 100%;
            max-height: 90vh;
            border-radius: 10px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }
        
        .lightbox-close {
            position: absolute;
            top: -60px;
            right: -10px;
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
            z-index: 10002;
        }
        
        .lightbox-close:hover {
            background: white;
            transform: scale(1.1);
        }
        
        @media (max-width: 768px) {
            .lightbox-close {
                top: 10px;
                right: 10px;
                width: 40px;
                height: 40px;
            }
        }
        </style>
    `;
    
    document.head.insertAdjacentHTML('beforeend', lightboxCSS);
}

// Open lightbox
function openLightbox(src, alt, index, images) {
    const lightbox = document.getElementById('image-lightbox');
    const lightboxImg = document.getElementById('lightbox-image');
    
    if (lightbox && lightboxImg) {
        lightboxImg.src = src;
        lightboxImg.alt = alt;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        // Add keyboard navigation
        document.addEventListener('keydown', lightboxKeyHandler);
        
        // Close on backdrop click
        const backdrop = lightbox.querySelector('.lightbox-backdrop');
        backdrop.addEventListener('click', closeLightbox);
    }
}

// Close lightbox
function closeLightbox() {
    const lightbox = document.getElementById('image-lightbox');
    if (lightbox) {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
        document.removeEventListener('keydown', lightboxKeyHandler);
    }
}

// Lightbox keyboard handler
function lightboxKeyHandler(e) {
    if (e.key === 'Escape') {
        closeLightbox();
    }
}

// Scroll effects
function initializeScrollEffects() {
    let lastScrollTop = 0;
    const heroSection = document.querySelector('.hero-section');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Parallax effect for hero section
        if (heroSection) {
            const scrolled = scrollTop * 0.5;
            heroSection.style.transform = `translateY(${scrolled}px)`;
        }
        
        lastScrollTop = scrollTop;
    }, { passive: true });
}

// Smooth scrolling for anchor links
function initializeSmoothScrolling() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Product card hover effects
function initializeProductHovers() {
    const productCards = document.querySelectorAll('.product-card');
    
    productCards.forEach(card => {
        const img = card.querySelector('.product-image-container img');
        
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
            if (img) {
                img.style.transform = 'scale(1.05)';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            if (img) {
                img.style.transform = 'scale(1)';
            }
        });
    });
}

// Button ripple effect
function createRippleEffect(button, event) {
    const ripple = document.createElement('span');
    const rect = button.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    const x = event.clientX - rect.left - size / 2;
    const y = event.clientY - rect.top - size / 2;
    
    ripple.style.cssText = `
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: ripple 0.6s linear;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
        pointer-events: none;
    `;
    
    button.appendChild(ripple);
    
    setTimeout(() => {
        ripple.remove();
    }, 600);
}

// Add ripple effect CSS
const rippleCSS = `
    <style>
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    .btn {
        position: relative;
        overflow: hidden;
    }
    </style>
`;
document.head.insertAdjacentHTML('beforeend', rippleCSS);

// Add ripple effect to buttons
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('btn') || e.target.closest('.btn')) {
        const button = e.target.classList.contains('btn') ? e.target : e.target.closest('.btn');
        createRippleEffect(button, e);
    }
});

// Performance optimization: Lazy loading for images
function initializeLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Theme-aware color adjustments
function initializeThemeSupport() {
    const themeObserver = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.type === 'attributes' && mutation.attributeName === 'data-theme') {
                // Update any theme-specific functionality
                updateThemeColors();
            }
        });
    });
    
    themeObserver.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['data-theme']
    });
}

function updateThemeColors() {
    // Update dynamic colors based on current theme
    const theme = document.documentElement.getAttribute('data-theme');
    // Implementation for theme-specific updates if needed
}

// Initialize all enhancements
document.addEventListener('DOMContentLoaded', function() {
    initializeProductHovers();
    initializeLazyLoading();
    initializeThemeSupport();
});

// Global lightbox function for external access
window.openLightbox = openLightbox;
window.closeLightbox = closeLightbox;
