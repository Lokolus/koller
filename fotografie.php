<?php
/**
 * Fotografie Seite
 * 
 * Portfolio und Leistungen im Bereich Fotografie
 * 
 * @package EvaKoller
 * @version 1.0
 */

// Seiten-spezifische Meta-Informationen
$page_title = 'Fotografie';
$page_description = 'Kreative Fotografie von Eva Koller. Portraits, Events und künstlerische Projekte mit Gefühl und Authentizität.';
$page_css = 'fotografie.css';
$page_js = 'fotografie.js'; // Scroll-Animationen und Interaktionen

// Header einbinden
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-title">Fotografie</h1>
            <p class="page-subtitle">Momente, die bleiben</p>
        </div>
    </div>
</section>

<!-- INTRO -->
<section class="section">
    <div class="container">
        <div class="intro-text">
            <p class="lead">Fotografie ist für mich mehr als das Festhalten von Bildern – es ist das Einfangen von Emotionen, Geschichten und besonderen Augenblicken. Mit Feingefühl und kreativem Blick bringe ich die Schönheit des Moments zu Papier.</p>
        </div>
    </div>
</section>

<!-- MEINE FOTOGRAFIE -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Meine Fotografie</h2>
            <div class="section-line"></div>
        </div>
        <div class="photo-services">
            <!-- Portraitfotografie -->
            <div class="photo-service-card">
                <div class="photo-service-image">
                    <div class="placeholder-image" style="background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);">
                        <span>Portrait</span>
                    </div>
                </div>
                <div class="photo-service-content">
                    <h3>Portraitfotografie</h3>
                    <p>Authentische Portraits, die Ihre Persönlichkeit zum Ausdruck bringen. Ob professionelle Business-Aufnahmen oder persönliche Charakterstudien – ich setze Sie gekonnt in Szene.</p>
                    <ul class="photo-detail-list">
                        <li>Business-Portraits</li>
                        <li>Persönliche Portraits</li>
                        <li>Familien-Shootings</li>
                        <li>Paar-Fotografie</li>
                    </ul>
                </div>
            </div>

            <!-- Event-Fotografie -->
            <div class="photo-service-card photo-service-card-reverse">
                <div class="photo-service-image">
                    <div class="placeholder-image" style="background: linear-gradient(135deg, #e8e8e8 0%, #f5f5f5 100%);">
                        <span>Event</span>
                    </div>
                </div>
                <div class="photo-service-content">
                    <h3>Event-Fotografie</h3>
                    <p>Vom Firmenevent bis zur privaten Feier – ich halte die besonderen Momente Ihrer Veranstaltung diskret und professionell fest. Lebendige Bilder, die die Atmosphäre einfangen.</p>
                    <ul class="photo-detail-list">
                        <li>Firmenevents</li>
                        <li>Hochzeiten</li>
                        <li>Geburtstagsfeiern</li>
                        <li>Kulturelle Veranstaltungen</li>
                    </ul>
                </div>
            </div>

            <!-- Künstlerische Projekte -->
            <div class="photo-service-card">
                <div class="photo-service-image">
                    <div class="placeholder-image" style="background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);">
                        <span>Kunst</span>
                    </div>
                </div>
                <div class="photo-service-content">
                    <h3>Künstlerische Projekte</h3>
                    <p>Experimentelle und konzeptionelle Fotografie für besondere Projekte. Von der Idee bis zur finalen Umsetzung – gemeinsam realisieren wir Ihre kreative Vision.</p>
                    <ul class="photo-detail-list">
                        <li>Konzept-Shootings</li>
                        <li>Editorials</li>
                        <li>Fine Art Photography</li>
                        <li>Freie Projekte</li>
                    </ul>
                </div>
            </div>

            <!-- Natur & Landschaft -->
            <div class="photo-service-card photo-service-card-reverse">
                <div class="photo-service-image">
                    <div class="placeholder-image" style="background: linear-gradient(135deg, #e8e8e8 0%, #f5f5f5 100%);">
                        <span>Natur</span>
                    </div>
                </div>
                <div class="photo-service-content">
                    <h3>Natur & Landschaft</h3>
                    <p>Die Schönheit der Natur in eindrucksvollen Bildern. Stimmungsvolle Landschaftsaufnahmen und Details, die den Blick für das Wesentliche schärfen.</p>
                    <ul class="photo-detail-list">
                        <li>Landschaftsfotografie</li>
                        <li>Naturfotografie</li>
                        <li>Jahreszeiten-Serien</li>
                        <li>Architektur im Kontext</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ARBEITSWEISE -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Meine Arbeitsweise</h2>
            <div class="section-line"></div>
        </div>
        <div class="content-two-col">
            <div class="content-col">
                <h3 class="content-subtitle">Persönlich & Authentisch</h3>
                <p>Gute Fotografie entsteht durch Vertrauen. Ich nehme mir Zeit, Sie kennenzulernen und eine entspannte Atmosphäre zu schaffen, in der Sie sich wohlfühlen können.</p>
                <p>Mein Ziel ist es, authentische Bilder zu kreieren, die Ihre Geschichte erzählen – ohne Verstellung, dafür mit echten Emotionen und natürlicher Ausstrahlung.</p>
            </div>
            <div class="content-col">
                <h3 class="content-subtitle">Durchdacht & Kreativ</h3>
                <p>Jedes Shooting wird sorgfältig geplant: Von der Location-Auswahl über Lichtsetzung bis zum perfekten Timing. Gleichzeitig bleibe ich flexibel für spontane Momente.</p>
                <p>Die Nachbearbeitung erfolgt mit Sorgfalt und Stilgefühl – für Bilder, die Ihre Erwartungen übertreffen und die Sie gerne zeigen werden.</p>
            </div>
        </div>
    </div>
</section>

<!-- SHOOTING-ABLAUF -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Shooting-Ablauf</h2>
            <div class="section-line"></div>
        </div>
        <div class="process-steps">
            <div class="process-step">
                <div class="process-number">01</div>
                <h3>Vorgespräch</h3>
                <p>Wir besprechen Ihre Vorstellungen, Wünsche und das Konzept für Ihr Shooting. Gemeinsam planen wir Location, Stil und Details.</p>
            </div>
            <div class="process-step">
                <div class="process-number">02</div>
                <h3>Vorbereitung</h3>
                <p>Ich kümmere mich um die technische Planung und gebe Ihnen Tipps zur optimalen Vorbereitung auf das Shooting.</p>
            </div>
            <div class="process-step">
                <div class="process-number">03</div>
                <h3>Shooting</h3>
                <p>In entspannter Atmosphäre entstehen Ihre Bilder. Ich leite Sie professionell an, damit Sie sich vor der Kamera wohlfühlen.</p>
            </div>
            <div class="process-step">
                <div class="process-number">04</div>
                <h3>Bildauswahl & Bearbeitung</h3>
                <p>Sie erhalten eine Vorauswahl zur Durchsicht. Die finalen Bilder werden professionell bearbeitet und in gewünschter Form geliefert.</p>
            </div>
        </div>
    </div>
</section>

<!-- PORTFOLIO -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Portfolio-Auszug</h2>
            <div class="section-line"></div>
        </div>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <div class="placeholder-image portfolio-image" style="background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);">
                    <span>Portfolio 1</span>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="placeholder-image portfolio-image" style="background: linear-gradient(135deg, #e8e8e8 0%, #f5f5f5 100%);">
                    <span>Portfolio 2</span>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="placeholder-image portfolio-image" style="background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);">
                    <span>Portfolio 3</span>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="placeholder-image portfolio-image" style="background: linear-gradient(135deg, #e0e0e0 0%, #f5f5f5 100%);">
                    <span>Portfolio 4</span>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="placeholder-image portfolio-image" style="background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);">
                    <span>Portfolio 5</span>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="placeholder-image portfolio-image" style="background: linear-gradient(135deg, #e8e8e8 0%, #e0e0e0 100%);">
                    <span>Portfolio 6</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Lassen Sie uns Ihre Geschichte erzählen</h2>
            <p>Kontaktieren Sie mich für ein unverbindliches Erstgespräch über Ihr Fotoprojekt.</p>
            <a href="index.php#kontakt" class="btn btn-primary">Shooting anfragen</a>
        </div>
    </div>
</section>

<?php
// Footer einbinden
include 'includes/footer.php';
?>
