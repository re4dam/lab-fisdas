// Panduan Penggunaan JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // ========================================
    // 1. SMOOTH SCROLL FOR NAVIGATION
    // ========================================
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Jika link menuju section di halaman yang sama
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetId = href.substring(1);
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ========================================
    // 2. SCROLL ANIMATION - Reveal on Scroll
    // ========================================
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Optional: stop observing after animation
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all section containers
    const sectionContainers = document.querySelectorAll('.section-container');
    sectionContainers.forEach(section => {
        section.classList.add('fade-in-on-scroll');
        observer.observe(section);
    });

    // Observe all step cards
    const stepCards = document.querySelectorAll('.step-card');
    stepCards.forEach(card => {
        card.classList.add('fade-in-on-scroll');
        observer.observe(card);
    });

    // ========================================
    // 3. PARALLAX EFFECT ON HERO SECTION
    // ========================================
    const heroSection = document.querySelector('.hero-section');
    
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxSpeed = 0.5;
            
            if (scrolled < heroSection.offsetHeight) {
                heroSection.style.backgroundPositionY = (scrolled * parallaxSpeed) + 'px';
            }
        });
    }

    // ========================================
    // 4. CARD HOVER EFFECT ENHANCEMENT
    // ========================================
    const cards = document.querySelectorAll('.step-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // ========================================
    // 5. ACTIVE SECTION INDICATOR
    // ========================================
    const sections = document.querySelectorAll('.guide-section');
    
    window.addEventListener('scroll', function() {
        let current = '';
        const scrollPosition = window.pageYOffset + 200;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });

        // Update active nav link if sections have IDs
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    });

    // ========================================
    // 6. NUMBER COUNTER ANIMATION
    // ========================================
    function animateCounter(element) {
        const target = parseInt(element.textContent);
        const duration = 1000;
        const step = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }

    // Animate step numbers when they come into view
    const stepNumbers = document.querySelectorAll('.step-number');
    const numberObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                entry.target.classList.add('counted');
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.5 });

    stepNumbers.forEach(number => {
        numberObserver.observe(number);
    });

    // ========================================
    // 7. MOBILE MENU HANDLING (if needed)
    // ========================================
    const handleResize = () => {
        const width = window.innerWidth;
        
        if (width <= 768) {
            // Mobile specific adjustments
            cards.forEach(card => {
                card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
            });
        } else {
            // Desktop adjustments
            cards.forEach(card => {
                card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
            });
        }
    };

    window.addEventListener('resize', handleResize);
    handleResize(); // Initial call

    // ========================================
    // 8. PREVENT FLASH ON PAGE LOAD
    // ========================================
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });

    // ========================================
    // 9. SMOOTH SCROLL TO TOP BUTTON (Optional)
    // ========================================
    let scrollToTopBtn = document.querySelector('.scroll-to-top');
    
    if (!scrollToTopBtn) {
        // Create button if it doesn't exist
        scrollToTopBtn = document.createElement('button');
        scrollToTopBtn.classList.add('scroll-to-top');
        scrollToTopBtn.innerHTML = '↑';
        scrollToTopBtn.setAttribute('aria-label', 'Scroll to top');
        document.body.appendChild(scrollToTopBtn);
    }

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });

    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // ========================================
    // 10. LAZY LOADING IMAGES
    // ========================================
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));

    // ========================================
    // 11. CONSOLE LOG - Development Info
    // ========================================
    console.log('🎯 Panduan Penggunaan Neraca - Loaded Successfully');
    console.log('📊 Total Sections:', sections.length);
    console.log('📋 Total Step Cards:', stepCards.length);
});

// ========================================
// 12. UTILITY FUNCTIONS
// ========================================

// Debounce function for performance
function debounce(func, wait) {
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

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function(...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}