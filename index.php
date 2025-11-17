<?php
/**
 * Startseite / Homepage
 * 
 * Landing Page mit Hero, Physiotherapie, Fotografie, Über mich und Kontakt Sections
 * 
 * @package EvaKoller
 * @version 1.0
 */

// Seiten-spezifische Meta-Informationen
$page_title = 'Startseite';
$page_description = 'Eva Koller – Physiotherapeutin und Fotografin. Professionelle Physiotherapie und kreative Fotografie mit Herz und Expertise.';
$page_css = 'home.css';
$page_js = 'home.js';

// Header einbinden
include 'includes/header.php';
?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Eva Koller</h1>
            <p class="hero-subtitle">Physiotherapeutin & Fotografin</p>
            <p class="hero-text">Bewegung verstehen. Momente festhalten. Mit Fachwissen, Feingefühl und kreativer Leidenschaft.</p>
            <a href="#kontakt" class="btn btn-primary">Termin anfragen</a>
        </div>
    </div>
</section>

<!-- PHYSIOTHERAPIE SECTION -->
<section id="physiotherapie" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Physiotherapie</h2>
            <div class="section-line"></div>
        </div>
        <div class="content-grid">
            <div class="content-text">
                <p>Mit fundierter Ausbildung und langjähriger Erfahrung begleite ich Sie auf Ihrem Weg zu mehr Beweglichkeit, Schmerzfreiheit und Lebensqualität.</p>
                <p>Mein Ansatz ist ganzheitlich und individuell – ich nehme mir Zeit für Sie, Ihre Bedürfnisse und Ihre persönlichen Ziele.</p>
                <ul class="service-list">
                    <li>Manuelle Therapie</li>
                    <li>Bewegungstherapie</li>
                    <li>Schmerzbehandlung</li>
                    <li>Rehabilitation</li>
                    <li>Präventive Maßnahmen</li>
                </ul>
            </div>
            <div class="content-image">
                <div class="placeholder-image" style="background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);">
                    <span>Physiotherapie Bild</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOTOGRAFIE SECTION -->
<section id="fotografie" class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Fotografie</h2>
            <div class="section-line"></div>
        </div>
        <div class="content-grid content-grid-reverse">
            <div class="content-image">
                <div class="placeholder-image" style="background: linear-gradient(135deg, #e8e8e8 0%, #f5f5f5 100%);">
                    <span>Fotografie Bild</span>
                </div>
            </div>
            <div class="content-text">
                <p>Neben meiner therapeutischen Arbeit lebe ich meine kreative Seite durch die Fotografie aus. Ich halte besondere Momente fest – authentisch, gefühlvoll und mit Blick für Details.</p>
                <p>Ob Portraits, Events oder künstlerische Projekte: Jede Aufnahme erzählt eine Geschichte.</p>
                <ul class="service-list">
                    <li>Portraitfotografie</li>
                    <li>Event-Fotografie</li>
                    <li>Künstlerische Projekte</li>
                    <li>Naturfotografie</li>
                    <li>Individuelle Shootings</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ÜBER MICH SECTION -->
<section id="ueber-mich" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Über mich</h2>
            <div class="section-line"></div>
        </div>
        <div class="about-content">
            <p class="about-text">Zwei Leidenschaften prägen mein Leben: die Arbeit mit Menschen in der Physiotherapie und die kreative Ausdrucksform der Fotografie. Beide Bereiche verbindet die Aufmerksamkeit für Details, das Einfühlungsvermögen und der Wunsch, etwas Positives zu bewirken.</p>
            <p class="about-text">In meiner Praxis schaffe ich Raum für Heilung und Entwicklung. Mit der Kamera halte ich die Schönheit des Augenblicks fest. Beides erfüllt mich mit tiefer Zufriedenheit.</p>
        </div>
    </div>
</section>

<!-- KONTAKT SECTION -->
<section id="kontakt" class="section section-contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Kontakt</h2>
            <div class="section-line"></div>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Lassen Sie uns sprechen</h3>
                <p>Ob Sie einen Termin für Physiotherapie vereinbaren möchten – ich freue mich auf Ihre Nachricht.</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <strong>Praxis</strong>
                        <span>Schlossbergpraxis</span>
                        <span>Schinitzgasse 13</span>
                        <span>8605 Kapfenberg</span>
                    </div>
                    <div class="contact-item">
                        <strong>Telefon</strong>
                        <a href="tel:+436647514899​2">0664 75148992</a>
                    </div>
                    <div class="contact-item">
                        <strong>E-Mail</strong>
                        <a href="mailto:evakoller@physio.at">evakoller@physio.at</a>
                    </div>
                    <div class="contact-item">
                        <strong>Website</strong>
                        <a href="https://www.evakoller.at" target="_blank" rel="noopener">www.evakoller.at</a>
                    </div>
                </div>
            </div>
            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-Mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="service">Betreff *</label>
                    <select id="service" name="service" required>
                        <option value="">Bitte wählen</option>
                        <option value="physiotherapie">Physiotherapie-Termin</option>
                        <option value="fotografie">Fotografie-Anfrage</option>
                        <option value="sonstiges">Sonstiges</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Nachricht *</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Nachricht senden</button>
                <div class="form-message" id="formMessage"></div>
            </form>
        </div>
    </div>
</section>

<?php
// Footer einbinden
include 'includes/footer.php';
?>
