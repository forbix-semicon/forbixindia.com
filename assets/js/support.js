/**
 * Support.js - Generic JavaScript utilities for professional web pages
 * Features: Theme switching, smooth scrolling, animations, responsive utilities
 */

class SupportJS {
  constructor() {
    this.init();
  }

  init() {
    this.setupThemeToggle();
    this.setupSmoothScrolling();
    this.setupAnimations();
    this.setupInteractiveElements();
    this.setupResponsiveUtilities();
  }

  // Theme Management - Don't interfere with existing theme system
  setupThemeToggle() {
    // This method is kept for compatibility but does nothing to avoid conflicts
    console.log('Theme system already initialized in header.php');
  }

  setTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('theme', theme);
  }

  toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    this.setTheme(newTheme);
  }

  getThemeIcon(theme = null) {
    const currentTheme = theme || document.documentElement.getAttribute('data-theme');
    return currentTheme === 'dark' 
      ? '☀️' // Sun for switching to light
      : '🌙'; // Moon for switching to dark
  }

  // Smooth Scrolling
  setupSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }

  // Animation on Scroll
  setupAnimations() {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('fade-in');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.card, .stat-card, .industry-card, .client-region').forEach(el => {
      observer.observe(el);
    });
  }

  // Interactive Elements
  setupInteractiveElements() {
    // Card hover effects
    document.querySelectorAll('.card, .stat-card, .industry-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-4px) scale(1.02)';
      });
      
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
      });
    });

    // Button ripple effect
    document.querySelectorAll('.btn').forEach(btn => {
      btn.addEventListener('click', this.createRipple.bind(this));
    });

    // Statistics counter animation
    this.animateCounters();
  }

  createRipple(e) {
    const button = e.currentTarget;
    const ripple = document.createElement('span');
    const rect = button.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    const x = e.clientX - rect.left - size / 2;
    const y = e.clientY - rect.top - size / 2;
    
    ripple.style.cssText = `
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.3);
      width: ${size}px;
      height: ${size}px;
      left: ${x}px;
      top: ${y}px;
      animation: ripple 0.6s ease-out;
      pointer-events: none;
    `;
    
    button.style.position = 'relative';
    button.style.overflow = 'hidden';
    button.appendChild(ripple);
    
    setTimeout(() => ripple.remove(), 600);
  }

  animateCounters() {
    const counters = document.querySelectorAll('.stat-number');
    
    counters.forEach(counter => {
      const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
      const suffix = counter.textContent.replace(/[\d]/g, '');
      let current = 0;
      const increment = target / 100;
      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          counter.textContent = target + suffix;
          clearInterval(timer);
        } else {
          counter.textContent = Math.floor(current) + suffix;
        }
      }, 20);
    });
  }

  // Responsive Utilities
  setupResponsiveUtilities() {
    // Mobile menu handling
    this.setupMobileMenu();
    
    // Responsive image loading
    this.setupLazyLoading();
    
    // Handle window resize
    window.addEventListener('resize', this.debounce(() => {
      this.handleResize();
    }, 250));
  }

  setupMobileMenu() {
    // Mobile menu is already handled by the header navigation system
    // This method is kept for compatibility but disabled to avoid conflicts
    // The header.php already includes a proper mobile menu toggle
    console.log('Mobile menu system handled by header.php navigation');
  }

  setupLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.remove('lazy');
          imageObserver.unobserve(img);
        }
      });
    });
    
    images.forEach(img => imageObserver.observe(img));
  }

  handleResize() {
    // Recalculate grid layouts if needed
    const grids = document.querySelectorAll('.grid, .stats-grid, .industry-grid');
    grids.forEach(grid => {
      grid.style.display = 'none';
      grid.offsetHeight; // Force reflow
      grid.style.display = '';
    });
  }

  // Utility Functions
  debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  }

  // Search functionality
  setupSearch() {
    const searchInput = document.querySelector('#search');
    if (searchInput) {
      searchInput.addEventListener('input', this.debounce((e) => {
        this.performSearch(e.target.value);
      }, 300));
    }
  }

  performSearch(query) {
    const searchableElements = document.querySelectorAll('[data-searchable]');
    
    searchableElements.forEach(element => {
      const text = element.textContent.toLowerCase();
      const isVisible = text.includes(query.toLowerCase());
      element.style.display = isVisible || query === '' ? '' : 'none';
    });
  }

  // Notification system
  showNotification(message, type = 'info', duration = 3000) {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    notification.style.cssText = `
      position: fixed;
      top: 2rem;
      right: 2rem;
      z-index: 1002;
      padding: 1rem 1.5rem;
      border-radius: 6px;
      color: white;
      font-weight: 500;
      box-shadow: var(--shadow-lg);
      animation: slideIn 0.3s ease-out;
      background: ${this.getNotificationColor(type)};
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
      notification.style.animation = 'slideIn 0.3s ease-out reverse';
      setTimeout(() => notification.remove(), 300);
    }, duration);
  }

  getNotificationColor(type) {
    const colors = {
      info: 'var(--primary)',
      success: 'var(--success)',
      warning: 'var(--warning)',
      error: 'var(--error)'
    };
    return colors[type] || colors.info;
  }

  // Loading state management
  showLoading(element) {
    if (typeof element === 'string') {
      element = document.querySelector(element);
    }
    
    if (element) {
      element.style.position = 'relative';
      const loader = document.createElement('div');
      loader.className = 'loading-overlay';
      loader.innerHTML = '<div class="spinner"></div>';
      loader.style.cssText = `
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
      `;
      
      const spinner = loader.querySelector('.spinner');
      spinner.style.cssText = `
        width: 2rem;
        height: 2rem;
        border: 2px solid var(--border);
        border-top: 2px solid var(--primary);
        border-radius: 50%;
        animation: spin 1s linear infinite;
      `;
      
      element.appendChild(loader);
    }
  }

  hideLoading(element) {
    if (typeof element === 'string') {
      element = document.querySelector(element);
    }
    
    const loader = element?.querySelector('.loading-overlay');
    if (loader) {
      loader.remove();
    }
  }

  // Form utilities
  validateForm(formSelector) {
    const form = document.querySelector(formSelector);
    if (!form) return false;
    
    const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;
    
    inputs.forEach(input => {
      if (!input.value.trim()) {
        input.classList.add('error');
        isValid = false;
      } else {
        input.classList.remove('error');
      }
    });
    
    return isValid;
  }

  // Storage utilities
  saveToStorage(key, data) {
    try {
      localStorage.setItem(key, JSON.stringify(data));
      return true;
    } catch (e) {
      console.error('Storage error:', e);
      return false;
    }
  }

  loadFromStorage(key, defaultValue = null) {
    try {
      const item = localStorage.getItem(key);
      return item ? JSON.parse(item) : defaultValue;
    } catch (e) {
      console.error('Storage error:', e);
      return defaultValue;
    }
  }
}

// CSS Animations (injected dynamically)
const injectCSS = () => {
  const style = document.createElement('style');
  style.textContent = `
    @keyframes ripple {
      to {
        transform: scale(4);
        opacity: 0;
      }
    }
    
    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }
    
    .notification {
      transform: translateX(100%);
    }
    
    .notification.show {
      transform: translateX(0);
    }
    
    input.error, select.error, textarea.error {
      border-color: var(--error) !important;
      box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.1) !important;
    }
  `;
  document.head.appendChild(style);
};

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  injectCSS();
  window.supportJS = new SupportJS();
});

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
  module.exports = SupportJS;
}