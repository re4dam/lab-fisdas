// Smooth Scroll untuk navigasi
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        // Hapus active class dari semua link
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        // Tambah active class ke link yang diklik
        this.classList.add('active');
    });
});

// Interactive Points - Highlight bagian yang sesuai saat point diklik
const points = document.querySelectorAll('.point');
const partItems = document.querySelectorAll('.part-item');

points.forEach((point, index) => {
    point.addEventListener('click', function() {
        // Remove highlight dari semua part items
        partItems.forEach(item => item.classList.remove('highlight'));
        
        // Tambah highlight ke part item yang sesuai
        if (partItems[index]) {
            partItems[index].classList.add('highlight');
            
            // Smooth scroll ke bagian detail
            partItems[index].scrollIntoView({ 
                behavior: 'smooth', 
                block: 'nearest' 
            });
            
            // Hapus highlight setelah 3 detik
            setTimeout(() => {
                partItems[index].classList.remove('highlight');
            }, 3000);
        }
    });

    // Hover effect untuk point
    point.addEventListener('mouseenter', function() {
        if (partItems[index]) {
            partItems[index].style.opacity = '0.8';
        }
    });

    point.addEventListener('mouseleave', function() {
        if (partItems[index]) {
            partItems[index].style.opacity = '1';
        }
    });
});

// Tambah style untuk highlight effect
const style = document.createElement('style');
style.textContent = `
    .part-item {
        transition: all 0.3s ease;
    }
    
    .part-item.highlight {
        background-color: rgba(255, 255, 255, 0.15);
        padding: 15px;
        border-radius: 10px;
        transform: scale(1.02);
    }
`;
document.head.appendChild(style);

// Intersection Observer untuk animasi saat scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe semua elemen yang perlu animasi
document.querySelectorAll('.part-item').forEach(item => {
    observer.observe(item);
});

// Parallax effect untuk gambar neraca (optional)
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const neraca = document.querySelector('.neraca-image');
    
    if (neraca) {
        const rate = scrolled * 0.3;
        neraca.style.transform = `translateY(${rate}px)`;
    }
});

// Prevent default behavior untuk smooth experience
document.querySelectorAll('a[href="#"]').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
    });
});

// Console log untuk development
console.log('Neraca Detail Page - Loaded Successfully');
console.log('Interactive points:', points.length);
console.log('Part items:', partItems.length);