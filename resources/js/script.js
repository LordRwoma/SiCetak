// public/js/script.js

// Smooth Scroll untuk navigasi
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const headerOffset = 80;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Header scroll effect
let lastScroll = 0;
const header = document.querySelector('.header-fixed');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.08)';
    }
    
    lastScroll = currentScroll;
});

// Testimonial Slider
class TestimonialSlider {
    constructor() {
        this.currentSlide = 0;
        this.slides = [
            {
                text: "Layanan sibok jadi membantu banget atas penjelasan yang diberikan. aplikasi yang mudah digunakan, dari segi user interface dan user experience juga friendly.",
                author: "Kefin Rico",
                role: "Mahasiswa"
            },
            {
                text: "Aplikasi yang sangat membantu! Tidak perlu lagi antre panjang di fotokopi. Tinggal upload file, transfer, dan dokumen langsung dicetak. Mantap!",
                author: "Siti Nurhaliza",
                role: "Mahasiswa"
            },
            {
                text: "Fitur chatbot-nya sangat responsif dan membantu. Customer service yang ramah dan cepat tanggap. Highly recommended untuk mahasiswa yang sibuk!",
                author: "Budi Santoso",
                role: "Dosen"
            }
        ];
        
        this.init();
    }
    
    init() {
        this.createDots();
        this.attachEventListeners();
        this.startAutoSlide();
    }
    
    createDots() {
        const dotsContainer = document.querySelector('.testimonial-dots');
        if (!dotsContainer) return;
        
        dotsContainer.innerHTML = '';
        this.slides.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => this.goToSlide(index));
            dotsContainer.appendChild(dot);
        });
    }
    
    attachEventListeners() {
        const dots = document.querySelectorAll('.testimonial-dots .dot');
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });
    }
    
    updateSlide() {
        const testimonialCard = document.querySelector('.testimonial-card');
        if (!testimonialCard) return;
        
        const slide = this.slides[this.currentSlide];
        
        // Fade out
        testimonialCard.style.opacity = '0';
        testimonialCard.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            // Update content
            testimonialCard.querySelector('.testimonial-text').textContent = slide.text;
            testimonialCard.querySelector('.testimonial-author strong').textContent = slide.author;
            testimonialCard.querySelector('.testimonial-author span').textContent = slide.role;
            
            // Fade in
            testimonialCard.style.opacity = '1';
            testimonialCard.style.transform = 'translateY(0)';
        }, 300);
        
        // Update dots
        document.querySelectorAll('.testimonial-dots .dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === this.currentSlide);
        });
    }
    
    goToSlide(index) {
        this.currentSlide = index;
        this.updateSlide();
        this.resetAutoSlide();
    }
    
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        this.updateSlide();
    }
    
    startAutoSlide() {
        this.autoSlideInterval = setInterval(() => {
            this.nextSlide();
        }, 5000);
    }
    
    resetAutoSlide() {
        clearInterval(this.autoSlideInterval);
        this.startAutoSlide();
    }
}

// Fungsi untuk masuk dashboard dari landing page
function masukDashboard() {
    sessionStorage.setItem('isDashboard', 'true');
    window.location.href = '/dashboard';
}

// Fungsi lihat fitur
function lihatFitur() {
    sessionStorage.setItem('isDashboard', 'true');
    window.location.href = '/dashboard/katalog';
}

// Fungsi hubungi kami
function hubungiKami() {
    // Bisa redirect ke WhatsApp atau section contact
    window.open('https://wa.me/6285755173739', '_blank');
}

// Smooth Scroll untuk navigasi
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const headerOffset = 80;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Initialize testimonial slider when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const testimonialSection = document.querySelector('.testimonial-section');
    if (testimonialSection) {
        new TestimonialSlider();
    }
    
    // Add transition to testimonial card
    const testimonialCard = document.querySelector('.testimonial-card');
    if (testimonialCard) {
        testimonialCard.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    }
});

// Animate on scroll
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

// Observe elements for animation
document.addEventListener('DOMContentLoaded', () => {
    const animateElements = document.querySelectorAll('.feature-card, .testimonial-card, .hero-content, .chatbot-content');
    
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// Button hover effects
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.btn, .btn-masuk-app');
    
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});

// Feature cards hover effect
document.addEventListener('DOMContentLoaded', () => {
    const featureCards = document.querySelectorAll('.feature-card');
    
    featureCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});

// Social media links (contoh implementasi)
document.addEventListener('DOMContentLoaded', () => {
    const socialLinks = document.querySelectorAll('.social-link, .social-icon');
    
    socialLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const platform = link.textContent || link.getAttribute('aria-label');
            console.log(`Navigating to ${platform}...`);
            // Tambahkan URL social media yang sebenarnya di sini
        });
    });
});

// Form validation (jika ada form di masa depan)
function validateForm(formElement) {
    const inputs = formElement.querySelectorAll('input[required], textarea[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            isValid = false;
            input.classList.add('error');
        } else {
            input.classList.remove('error');
        }
    });
    
    return isValid;
}

// Loading state untuk buttons
function setButtonLoading(button, isLoading) {
    if (isLoading) {
        button.disabled = true;
        button.dataset.originalText = button.textContent;
        button.textContent = 'Memuat...';
        button.style.opacity = '0.7';
    } else {
        button.disabled = false;
        button.textContent = button.dataset.originalText;
        button.style.opacity = '1';
    }
}

// Lazy loading untuk images
document.addEventListener('DOMContentLoaded', () => {
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
});

// Mobile menu toggle (untuk implementasi future)
function toggleMobileMenu() {
    const mobileMenu = document.querySelector('.mobile-menu');
    if (mobileMenu) {
        mobileMenu.classList.toggle('active');
    }
}

// Scroll to top button (optional)
function createScrollToTop() {
    const scrollBtn = document.createElement('button');
    scrollBtn.innerHTML = '↑';
    scrollBtn.className = 'scroll-to-top';
    scrollBtn.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        border: none;
        font-size: 24px;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 999;
        box-shadow: 0 4px 12px rgba(74, 123, 167, 0.3);
    `;
    
    document.body.appendChild(scrollBtn);
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.visibility = 'visible';
        } else {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.visibility = 'hidden';
        }
    });
    
    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Initialize scroll to top button
document.addEventListener('DOMContentLoaded', createScrollToTop);

// Performance optimization: Debounce function
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

// Optimized scroll handler
const handleScroll = debounce(() => {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    parallaxElements.forEach(el => {
        const speed = el.dataset.parallax || 0.5;
        el.style.transform = `translateY(${scrolled * speed}px)`;
    });
}, 10);

window.addEventListener('scroll', handleScroll);

// Console message
console.log('%cSiRoma Application', 'color: #4A7BA7; font-size: 24px; font-weight: bold;');
console.log('%cDeveloped with ❤️ for Fotocopy Roma', 'color: #666; font-size: 12px;');