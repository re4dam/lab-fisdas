// Panduan Keselamatan JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // ===== SMOOTH SCROLL FOR NAVIGATION =====
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Jika link memiliki hash (#), aktifkan smooth scroll
            if (this.getAttribute('href').startsWith('#')) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ===== CARD INTERACTION EFFECTS =====
    const cards = document.querySelectorAll('.card');
    
    cards.forEach((card, index) => {
        // Add click effect
        card.addEventListener('click', function() {
            // Add pulse effect
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = 'translateY(-5px)';
            }, 100);
        });

        // Add parallax effect on mouse move
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;
            
            this.style.transform = `translateY(-5px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        // Reset transform on mouse leave
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotateX(0) rotateY(0)';
        });
    });

    // ===== SCROLL REVEAL ANIMATION =====
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all cards
    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(card);
    });

    // ===== NERACA IMAGE INTERACTION =====
    const neracaImage = document.querySelector('.neraca-image');
    
    if (neracaImage) {
        // Add floating animation on hover
        neracaImage.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.transition = 'transform 0.3s ease';
        });

        neracaImage.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });

        // Add click to zoom effect
        neracaImage.addEventListener('click', function() {
            this.classList.toggle('zoomed');
            
            if (this.classList.contains('zoomed')) {
                this.style.transform = 'scale(1.2)';
                this.style.cursor = 'zoom-out';
            } else {
                this.style.transform = 'scale(1)';
                this.style.cursor = 'pointer';
            }
        });

        neracaImage.style.cursor = 'pointer';
        neracaImage.style.transition = 'transform 0.3s ease';
    }

    // ===== CARD ICON ROTATION ON HOVER =====
    const cardIcons = document.querySelectorAll('.card-icon');
    
    cardIcons.forEach(icon => {
        const card = icon.closest('.card');
        
        card.addEventListener('mouseenter', function() {
            icon.style.transform = 'rotate(15deg) scale(1.1)';
            icon.style.transition = 'transform 0.3s ease';
        });

        card.addEventListener('mouseleave', function() {
            icon.style.transform = 'rotate(0) scale(1)';
        });
    });

    // ===== LAZY LOADING FOR IMAGES =====
    const images = document.querySelectorAll('img');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.5s ease';
                
                setTimeout(() => {
                    img.style.opacity = '1';
                }, 100);
                
                observer.unobserve(img);
            }
        });
    });

    images.forEach(img => {
        imageObserver.observe(img);
    });

    // ===== ACTIVE NAV LINK HIGHLIGHT =====
    function setActiveNavLink() {
        const currentPath = window.location.pathname;
        navLinks.forEach(link => {
            const linkPath = link.getAttribute('href');
            if (currentPath.includes(linkPath) && linkPath !== '#') {
                link.classList.add('active');
            }
        });
    }
    
    setActiveNavLink();

    // ===== SCROLL TO TOP ON PAGE LOAD =====
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });

    // ===== CARD COUNTER ANIMATION =====
    const cardTitles = document.querySelectorAll('.card-title');
    let hasAnimated = false;

    function animateCardNumbers() {
        if (hasAnimated) return;
        
        cardTitles.forEach((title, index) => {
            setTimeout(() => {
                title.style.transform = 'scale(1.1)';
                setTimeout(() => {
                    title.style.transform = 'scale(1)';
                }, 200);
            }, index * 100);
        });
        
        hasAnimated = true;
    }

    // Trigger animation when cards section is visible
    const cardsSection = document.querySelector('.cards-section');
    if (cardsSection) {
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCardNumbers();
                }
            });
        }, { threshold: 0.3 });

        sectionObserver.observe(cardsSection);
    }

    // ===== CONSOLE MESSAGE =====
    console.log('🔧 Panduan Keselamatan - JavaScript Loaded Successfully!');
    console.log('📋 Total Cards:', cards.length);
    console.log('🎨 Animations: Active');
    
});

// ===== PREVENT CONTEXT MENU ON IMAGES (Optional) =====
document.addEventListener('contextmenu', function(e) {
    if (e.target.tagName === 'IMG') {
        e.preventDefault();
        return false;
    }
});

// ===== KEYBOARD NAVIGATION =====
document.addEventListener('keydown', function(e) {
    const cards = document.querySelectorAll('.card');
    let currentFocus = document.activeElement;
    let currentIndex = Array.from(cards).indexOf(currentFocus);

    // Arrow key navigation for cards
    if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
        e.preventDefault();
        if (currentIndex < cards.length - 1) {
            cards[currentIndex + 1].focus();
        }
    } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
        e.preventDefault();
        if (currentIndex > 0) {
            cards[currentIndex - 1].focus();
        }
    }
});

// Make cards focusable
document.querySelectorAll('.card').forEach(card => {
    card.setAttribute('tabindex', '0');
});