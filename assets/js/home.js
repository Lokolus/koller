/**
 * Home/Index Page JavaScript
 * 
 * JavaScript speziell für die Startseite
 * Enthält: Scroll-basierte Navigation, Kontaktformular
 * 
 * @package EvaKoller
 * @version 1.0
 */

document.addEventListener('DOMContentLoaded', function() {
    
    /* ============================================
       SCROLL-BASIERTE NAVIGATION (nur auf Index-Seite)
       ============================================ */
    
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    
    function updateActiveNavOnScroll() {
        // Only run this on the index page
        const currentPage = window.location.pathname.split('/').pop() || 'index.php';
        if (currentPage !== 'index.php' && currentPage !== '') {
            return;
        }
        
        const scrollPosition = window.pageYOffset + 200;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            const navLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
            
            if (navLink && scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    // Only remove active from hash links
                    if (link.getAttribute('href').startsWith('#')) {
                        link.classList.remove('active');
                    }
                });
                navLink.classList.add('active');
            }
        });
    }
    
    // Listen to scroll events
    window.addEventListener('scroll', updateActiveNavOnScroll);
    
    /* ============================================
       CONTACT FORM HANDLING
       ============================================ */
    
    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            const name = formData.get('name');
            const email = formData.get('email');
            const service = formData.get('service');
            const message = formData.get('message');
            
            // Basic validation
            if (!name || !email || !service || !message) {
                showFormMessage('Bitte füllen Sie alle Pflichtfelder aus.', 'error');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showFormMessage('Bitte geben Sie eine gültige E-Mail-Adresse ein.', 'error');
                return;
            }
            
            // Simulate form submission (replace with actual AJAX call to PHP backend)
            setTimeout(function() {
                showFormMessage('Vielen Dank für Ihre Nachricht! Ich melde mich in Kürze bei Ihnen.', 'success');
                contactForm.reset();
                
                // Hide message after 5 seconds
                setTimeout(function() {
                    formMessage.style.display = 'none';
                    formMessage.className = 'form-message';
                }, 5000);
            }, 1000);
            
            /* 
            // UNCOMMENT FOR ACTUAL AJAX SUBMISSION TO PHP BACKEND
            
            fetch('process-form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showFormMessage(data.message, 'success');
                    contactForm.reset();
                } else {
                    showFormMessage(data.message, 'error');
                }
            })
            .catch(error => {
                showFormMessage('Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.', 'error');
            });
            */
        });
    }
    
    /**
     * Show form message
     * @param {string} message - Message text
     * @param {string} type - Message type (success/error)
     */
    function showFormMessage(message, type) {
        formMessage.textContent = message;
        formMessage.className = 'form-message ' + type;
        formMessage.style.display = 'block';
    }
    
});
