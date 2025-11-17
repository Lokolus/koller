<?php
/**
 * Physiotherapie Seite
 * 
 * Detaillierte Informationen zur Physiotherapie-Praxis
 * 
 * @package EvaKoller
 * @version 1.0
 */

// Seiten-spezifische Meta-Informationen
$page_title = 'Physiotherapie';
$page_description = 'Professionelle Physiotherapie von Eva Koller. Individuelle Behandlungen für mehr Beweglichkeit und Lebensqualität.';
$page_css = 'physiotherapie.css';
$page_js = null; // Keine seiten-spezifischen JS-Funktionen

// Header einbinden
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-title">Physiotherapie</h1>
            <p class="page-subtitle">Ihr Körper im Mittelpunkt</p>
        </div>
    </div>
</section>

<!-- INTRO -->
<section class="section">
    <div class="container">
        <div class="intro-text">
            <p class="lead">Bewegung ist Leben. Als Physiotherapeutin begleite ich Sie auf Ihrem individuellen Weg zu mehr Gesundheit, Mobilität und Wohlbefinden. Mit fundiertem Fachwissen und ganzheitlichem Ansatz entwickle ich für jeden Patienten maßgeschneiderte Behandlungskonzepte.</p>
        </div>
    </div>
</section>

<!-- LEISTUNGSSPEKTRUM -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Leistungsspektrum</h2>
            <div class="section-line"></div>
        </div>
        <div class="services-detailed">
            <!-- Manuelle Therapie -->
            <div class="service-card">
                <div class="service-card-header">
                    <h3>Manuelle Therapie</h3>
                </div>
                <div class="service-card-body">
                    <p>Gezielte Mobilisationstechniken zur Behandlung von Funktionsstörungen des Bewegungsapparates. Durch sanfte Handgriffe werden Gelenke, Muskeln und Nerven behandelt, um Schmerzen zu lindern und die Beweglichkeit zu verbessern.</p>
                    <ul class="detail-list">
                        <li>Gelenksmobilisation</li>
                        <li>Weichteiltechniken</li>
                        <li>Faszienbehandlung</li>
                        <li>Triggerpunkt-Therapie</li>
                    </ul>
                </div>
            </div>

            <!-- Krankengymnastik -->
            <div class="service-card">
                <div class="service-card-header">
                    <h3>Krankengymnastik</h3>
                </div>
                <div class="service-card-body">
                    <p>Aktive und passive Bewegungstherapie zur Wiederherstellung, Erhaltung und Förderung der körperlichen Funktionsfähigkeit. Individuell abgestimmte Übungsprogramme für nachhaltige Erfolge.</p>
                    <ul class="detail-list">
                        <li>Funktionstraining</li>
                        <li>Koordinationsschulung</li>
                        <li>Gleichgewichtstraining</li>
                        <li>Haltungskorrektur</li>
                    </ul>
                </div>
            </div>

            <!-- Schmerztherapie -->
            <div class="service-card">
                <div class="service-card-header">
                    <h3>Schmerztherapie</h3>
                </div>
                <div class="service-card-body">
                    <p>Multimodale Behandlung chronischer und akuter Schmerzzustände. Kombination verschiedener Therapieformen für eine ganzheitliche Schmerzreduktion und verbesserte Lebensqualität.</p>
                    <ul class="detail-list">
                        <li>Akute Schmerzen</li>
                        <li>Chronische Beschwerden</li>
                        <li>Rückenschmerzen</li>
                        <li>Kopfschmerzen und Migräne</li>
                    </ul>
                </div>
            </div>

            <!-- Rehabilitation -->
            <div class="service-card">
                <div class="service-card-header">
                    <h3>Rehabilitation</h3>
                </div>
                <div class="service-card-body">
                    <p>Begleitung nach Operationen, Verletzungen oder bei chronischen Erkrankungen. Stufenweise Wiederherstellung der körperlichen Leistungsfähigkeit mit individuellen Therapieplänen.</p>
                    <ul class="detail-list">
                        <li>Post-operative Nachsorge</li>
                        <li>Sportverletzungen</li>
                        <li>Neurologische Rehabilitation</li>
                        <li>Orthopädische Rehabilitation</li>
                    </ul>
                </div>
            </div>

            <!-- Prävention & Training -->
            <div class="service-card">
                <div class="service-card-header">
                    <h3>Prävention & Training</h3>
                </div>
                <div class="service-card-body">
                    <p>Vorbeugende Maßnahmen zur Vermeidung von Beschwerden und Verletzungen. Bewegungsanalyse und maßgeschneiderte Trainingsprogramme für Gesundheit und Leistungsfähigkeit.</p>
                    <ul class="detail-list">
                        <li>Haltungsanalyse</li>
                        <li>Bewegungsschulung</li>
                        <li>Arbeitsplatzergonomie</li>
                        <li>Sportler-Betreuung</li>
                    </ul>
                </div>
            </div>

            <!-- Spezielle Behandlungen -->
            <div class="service-card">
                <div class="service-card-header">
                    <h3>Spezielle Behandlungen</h3>
                </div>
                <div class="service-card-body">
                    <p>Zusätzliche therapeutische Verfahren für spezifische Beschwerdebilder. Ergänzende Behandlungsmethoden für optimale Therapieergebnisse.</p>
                    <ul class="detail-list">
                        <li>Lymphdrainage</li>
                        <li>Atemtherapie</li>
                        <li>Beckenbodentraining</li>
                        <li>Kiefergelenkbehandlung</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BEHANDLUNGSANSATZ -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Mein Behandlungsansatz</h2>
            <div class="section-line"></div>
        </div>
        <div class="content-two-col">
            <div class="content-col">
                <h3 class="content-subtitle">Ganzheitlich & Individuell</h3>
                <p>Jeder Mensch ist einzigartig – das gilt auch für körperliche Beschwerden und deren Behandlung. Ich nehme mir Zeit für eine ausführliche Anamnese und Befundung, um die Ursachen Ihrer Beschwerden zu verstehen.</p>
                <p>Meine Therapie berücksichtigt nicht nur die akuten Symptome, sondern auch Ihren Alltag, Ihre Gewohnheiten und Ihre persönlichen Ziele. So entwickeln wir gemeinsam einen Behandlungsplan, der zu Ihnen passt.</p>
            </div>
            <div class="content-col">
                <h3 class="content-subtitle">Evidenzbasiert & Modern</h3>
                <p>Ich verbinde bewährte physiotherapeutische Methoden mit aktuellen wissenschaftlichen Erkenntnissen. Regelmäßige Fortbildungen garantieren, dass Sie von den neuesten Behandlungstechniken profitieren.</p>
                <p>Gleichzeitig ist mir der persönliche Kontakt wichtig: Physiotherapie ist Vertrauenssache. In einer angenehmen Atmosphäre arbeiten wir gemeinsam an Ihrer Genesung.</p>
            </div>
        </div>
    </div>
</section>

<!-- BEHANDLUNGSABLAUF -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Behandlungsablauf</h2>
            <div class="section-line"></div>
        </div>
        <div class="process-steps">
            <div class="process-step">
                <div class="process-number">01</div>
                <h3>Erstgespräch</h3>
                <p>Ausführliche Anamnese und Befragung zu Ihren Beschwerden, Ihrer Krankengeschichte und Ihren Zielen.</p>
            </div>
            <div class="process-step">
                <div class="process-number">02</div>
                <h3>Befundung</h3>
                <p>Körperliche Untersuchung, Bewegungsanalyse und funktionelle Tests zur Diagnosestellung.</p>
            </div>
            <div class="process-step">
                <div class="process-number">03</div>
                <h3>Therapieplan</h3>
                <p>Gemeinsame Entwicklung eines individuellen Behandlungskonzepts mit klaren Zielen.</p>
            </div>
            <div class="process-step">
                <div class="process-number">04</div>
                <h3>Behandlung</h3>
                <p>Durchführung der Therapie mit regelmäßiger Anpassung an Ihren Fortschritt.</p>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Bereit für den ersten Schritt?</h2>
            <p>Vereinbaren Sie einen Termin und starten Sie Ihren Weg zu mehr Beweglichkeit und Lebensqualität.</p>
            <a href="index.php#kontakt" class="btn btn-primary">Jetzt Termin vereinbaren</a>
        </div>
    </div>
</section>

<?php
// Footer einbinden
include 'includes/footer.php';
?>
