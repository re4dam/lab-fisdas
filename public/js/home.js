document.addEventListener('DOMContentLoaded', function() {
  // Handle product card clicks
  const productCards = document.querySelectorAll('.product-card');
  
  productCards.forEach(card => {
    card.addEventListener('click', function() {
      // Add click animation
      this.style.transform = 'scale(0.95)';
      setTimeout(() => {
        this.style.transform = '';
      }, 150);
      
      // You can add navigation logic here
      console.log('Product selected:', this.querySelector('.product-label').textContent);
    });
  });

  // Handle search input
  const searchInput = document.querySelector('.search-input');
  
  searchInput.addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    
    productCards.forEach(card => {
      const label = card.querySelector('.product-label').textContent.toLowerCase();
      if (label.includes(searchTerm)) {
        card.style.display = 'block';
      } else {
        card.style.display = searchTerm === '' ? 'block' : 'none';
      }
    });
  });

  // Handle menu button
  const menuButton = document.querySelector('.menu-button');
  
  menuButton.addEventListener('click', function() {
    // Add menu functionality here
    console.log('Menu clicked');
    
    // Simple animation feedback
    this.style.transform = 'scale(0.9)';
    setTimeout(() => {
      this.style.transform = '';
    }, 150);
  });

  // Add touch feedback for mobile
  if ('ontouchstart' in window) {
    productCards.forEach(card => {
      card.addEventListener('touchstart', function() {
        this.style.opacity = '0.8';
      });
      
      card.addEventListener('touchend', function() {
        this.style.opacity = '1';
      });
    });
  }
});

document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('category-button');
    const popup = document.getElementById('category-popup');

    button.addEventListener('click', () => {
        popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
    });

    // klik di luar popup untuk menutup
    document.addEventListener('click', function(e) {
        if (!button.contains(e.target) && !popup.contains(e.target)) {
            popup.style.display = 'none';
        }
    });
});
