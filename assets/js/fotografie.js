/**
 * Fotografie Page JavaScript
 *
 * JavaScript speziell für die Fotografie-Seite
 * Enthält: Scroll-basierte Animationen, Intersection Observer
 *
 * @package EvaKoller
 * @version 1.0
 */

document.addEventListener('DOMContentLoaded', function() {

    /* ============================================
       INTERSECTION OBSERVER FÜR SCROLL ANIMATIONEN
       ============================================ */

    // Konfiguration für Intersection Observer
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    // Callback-Funktion wenn Element ins Viewport kommt
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                // Optional: Observer stoppen nach Animation
                // observer.unobserve(entry.target);
            }
        });
    };

    // Observer erstellen
    const observer = new IntersectionObserver(observerCallback, observerOptions);

    /* ============================================
       PHOTO SERVICE CARDS ANIMIEREN
       ============================================ */

    const photoServiceCards = document.querySelectorAll('.photo-service-card');
    photoServiceCards.forEach((card, index) => {
        // Stagger-Effekt: Jede Karte mit leichter Verzögerung
        card.style.transitionDelay = `${index * 0.15}s`;
        observer.observe(card);
    });

    /* ============================================
       CONTENT COLUMNS ANIMIEREN
       ============================================ */

    const contentCols = document.querySelectorAll('.content-col');
    contentCols.forEach((col, index) => {
        col.style.transitionDelay = `${index * 0.2}s`;
        observer.observe(col);
    });

    /* ============================================
       PROCESS STEPS ANIMIEREN
       ============================================ */

    const processSteps = document.querySelectorAll('.process-step');
    processSteps.forEach((step, index) => {
        // Stagger-Effekt für Steps
        step.style.transitionDelay = `${index * 0.1}s`;
        observer.observe(step);
    });

    /* ============================================
       PORTFOLIO ITEMS ANIMIEREN
       ============================================ */

    const portfolioItems = document.querySelectorAll('.portfolio-item');
    portfolioItems.forEach((item, index) => {
        // Stagger-Effekt für Portfolio Grid
        item.style.transitionDelay = `${index * 0.08}s`;
        observer.observe(item);
    });

    /* ============================================
       SECTION HEADERS ANIMIEREN
       ============================================ */

    const sectionHeaders = document.querySelectorAll('.section-header');
    sectionHeaders.forEach(header => {
        observer.observe(header);
    });

    /* ============================================
       PARALLAX EFFEKT FÜR BILDER (OPTIONAL)
       ============================================ */

    const photoServiceImages = document.querySelectorAll('.photo-service-image');

    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;

        photoServiceImages.forEach((image, index) => {
            const rect = image.getBoundingClientRect();
            const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

            if (isVisible) {
                // Leichter Parallax-Effekt
                const speed = 0.15;
                const yPos = -(rect.top * speed);
                image.style.transform = `translateY(${yPos}px)`;
            }
        });
    });

    /* ============================================
       SMOOTH SCROLL FÜR INTERNE LINKS
       ============================================ */

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            // Ignoriere leere Hashes
            if (href === '#' || href === '#!') {
                return;
            }

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    /* ============================================
       HOVER SOUND EFFECTS (OPTIONAL - DEAKTIVIERT)
       ============================================ */

    /*
    // Optional: Subtile Hover-Feedback-Sounds
    const hoverElements = document.querySelectorAll('.portfolio-item, .process-step');
    hoverElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            // Hier könnte ein subtiler Hover-Sound abgespielt werden
            // const audio = new Audio('path/to/hover-sound.mp3');
            // audio.volume = 0.1;
            // audio.play();
        });
    });
    */

    /* ============================================
       LAZY LOADING FÜR BILDER (WENN ECHTE BILDER VORHANDEN)
       ============================================ */

    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.classList.add('loaded');
                        observer.unobserve(img);
                    }
                }
            });
        });

        // Alle Bilder mit data-src Attribut beobachten
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    /* ============================================
       PERFORMANCE: REDUCE MOTION FÜR BARRIEREFREIHEIT
       ============================================ */

    // Respektiere User-Präferenz für reduzierte Animationen
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    if (prefersReducedMotion.matches) {
        // Deaktiviere komplexe Animationen
        document.body.style.setProperty('--transition', 'none');
        document.body.style.setProperty('--transition-slow', 'none');

        // Füge alle Elemente sofort hinzu ohne Animation
        const allAnimatedElements = document.querySelectorAll(
            '.photo-service-card, .content-col, .process-step, .portfolio-item'
        );
        allAnimatedElements.forEach(element => {
            element.classList.add('animate-in');
            element.style.transitionDelay = '0s';
        });
    }

    /* ============================================
       DEBUG: LOG INITIALIZATION
       ============================================ */

    console.log('Fotografie page initialized');
    console.log(`Observing ${photoServiceCards.length} service cards`);
    console.log(`Observing ${processSteps.length} process steps`);
    console.log(`Observing ${portfolioItems.length} portfolio items`);

});
