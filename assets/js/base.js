/**
 * Base JavaScript
 * 
 * Grundlegende JavaScript-Funktionen die auf allen Seiten geladen werden
 * Enthält: Mobile Navigation, Header Scroll Effect, Smooth Scrolling
 * 
 * @package EvaKoller
 * @version 1.0
 */

document.addEventListener('DOMContentLoaded', function() {
    
    /* ============================================
       MOBILE NAVIGATION TOGGLE
       ============================================ */
    
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Toggle Mobile Menu
    if (navToggle) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
        });
    }
    
    // Close mobile menu when clicking on a link
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navMenu.classList.remove('active');
            navToggle.classList.remove('active');
        });
    });
    
    /* ============================================
       HEADER SCROLL EFFECT
       ============================================ */
    
    const header = document.querySelector('.header');
    let lastScroll = 0;
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        // Add shadow when scrolled
        if (currentScroll > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
    });
    
    /* ============================================
       SMOOTH SCROLLING FOR ANCHOR LINKS
       ============================================ */
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip empty or just hash links
            if (href !== '#' && href !== '') {
                e.preventDefault();
                const target = document.querySelector(href);
                
                if (target) {
                    const headerHeight = header.offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    /* ============================================
       ACTIVE NAVIGATION LINK MANAGEMENT
       ============================================ */
    
    function setActiveNavLink() {
        // Get current page
        const currentPage = window.location.pathname.split('/').pop() || 'index.php';
        const currentHash = window.location.hash;
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            
            const href = link.getAttribute('href');
            
            // Check for exact page match
            if (href === currentPage) {
                link.classList.add('active');
            }
            // Check for index.php or root
            else if ((currentPage === 'index.php' || currentPage === '') && 
                     (href === 'index.php' || href === '/' || href === '')) {
                link.classList.add('active');
            }
            // Check for hash links on current page
            else if (href.startsWith('#') && currentHash === href) {
                link.classList.add('active');
            }
            // Check for page with hash (e.g., index.php#kontakt)
            else if (href.includes('#')) {
                const [page, hash] = href.split('#');
                if ((page === currentPage || page === 'index.php' && currentPage === '') && 
                    currentHash === '#' + hash) {
                    link.classList.add('active');
                }
            }
        });
    }
    
    // Set active link on page load
    setActiveNavLink();
    
    // Update active link on hash change (for single page navigation)
    window.addEventListener('hashchange', setActiveNavLink);
    
    /* ============================================
       SCROLL ANIMATIONS (Fade In) - Smooth & Ruhig
       ============================================ */

    const observerOptions = {
        threshold: 0.08,
        rootMargin: '0px 0px -80px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe sections for fade-in animation
    const animatedElements = document.querySelectorAll('.section');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 1.2s cubic-bezier(0.4, 0, 0.2, 1), transform 1.2s cubic-bezier(0.4, 0, 0.2, 1)';
        observer.observe(el);
    });
    
});
