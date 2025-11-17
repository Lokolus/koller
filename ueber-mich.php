<?php
/**
 * Über mich Seite
 * 
 * Persönliche Vorstellung, Werdegang und Qualifikationen
 * 
 * @package EvaKoller
 * @version 1.0
 */

// Seiten-spezifische Meta-Informationen
$page_title = 'Über mich';
$page_description = 'Lernen Sie Eva Koller kennen – Physiotherapeutin und Fotografin mit Leidenschaft für Menschen und Momente.';
$page_css = 'ueber-mich.css';
$page_js = null; // Keine seiten-spezifischen JS-Funktionen

// Header einbinden
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-title">Über mich</h1>
            <p class="page-subtitle">Zwei Leidenschaften, ein Herz</p>
        </div>
    </div>
</section>

<!-- ABOUT INTRO -->
<section class="section">
    <div class="container">
        <div class="about-intro">
            <div class="about-intro-image">
                <div class="placeholder-image" style="background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%); aspect-ratio: 3/4;">
                    <span>Portraitfoto Eva Koller</span>
                </div>
            </div>
            <div class="about-intro-text">
                <h2>Eva Koller</h2>
                <p class="intro-subtitle">Physiotherapeutin & Fotografin</p>
                <p>Mein Leben wird von zwei großen Leidenschaften geprägt: der Arbeit mit Menschen als Physiotherapeutin und dem kreativen Ausdruck durch die Fotografie. Beide Bereiche scheinen auf den ersten Blick unterschiedlich, doch sie verbindet mehr, als man denkt.</p>
                <p>In beiden Feldern geht es um Aufmerksamkeit, Einfühlungsvermögen und den Blick für Details. Ob ich einen Patienten behandle oder den perfekten Moment durch die Linse einfange – immer steht der Mensch im Mittelpunkt.</p>
            </div>
        </div>
    </div>
</section>

<!-- MEIN WEG -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Mein Weg</h2>
            <div class="section-line"></div>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>Ausbildung zur Physiotherapeutin</h3>
                    <p>Nach meiner Matura entschied ich mich bewusst für die Physiotherapie – ein Beruf, der Wissenschaft, praktische Fähigkeiten und den direkten Kontakt mit Menschen vereint. Die fundierte Ausbildung legte den Grundstein für mein therapeutisches Verständnis.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>Berufserfahrung & Spezialisierung</h3>
                    <p>In verschiedenen Praxen und Kliniken sammelte ich wertvolle Erfahrungen und spezialisierte mich in mehreren Bereichen. Fortbildungen in manueller Therapie, Schmerztherapie und funktioneller Bewegungsanalyse erweiterten mein Können kontinuierlich.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>Entdeckung der Fotografie</h3>
                    <p>Parallel zu meiner therapeutischen Tätigkeit entwickelte sich meine Begeisterung für die Fotografie. Was als Hobby begann, wurde zu einer zweiten Berufung. Ich bildete mich autodidaktisch weiter und wagte schließlich den Schritt in die professionelle Fotografie.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>Die perfekte Verbindung</h3>
                    <p>Heute lebe ich beide Leidenschaften gleichberechtigt. In der Physiotherapie helfe ich Menschen, sich wieder wohl in ihrem Körper zu fühlen. Mit der Fotografie halte ich kostbare Momente fest. Beide Tätigkeiten bereichern sich gegenseitig und machen mich zu der Person, die ich heute bin.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WAS MICH AUSMACHT -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Was mich ausmacht</h2>
            <div class="section-line"></div>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <h3>Empathie</h3>
                <p>Ob in der Behandlung oder vor der Kamera – ich begegne jedem Menschen mit Respekt und Einfühlungsvermögen. Vertrauen ist die Basis jeder guten Zusammenarbeit.</p>
            </div>
            <div class="value-card">
                <h3>Präzision</h3>
                <p>Details machen den Unterschied. Als Therapeutin achte ich auf kleinste Bewegungsmuster, als Fotografin auf den perfekten Lichtfall. Diese Genauigkeit prägt meine Arbeit.</p>
            </div>
            <div class="value-card">
                <h3>Ganzheitlichkeit</h3>
                <p>Ich sehe immer das große Ganze. In der Therapie bedeutet das, nicht nur Symptome zu behandeln, sondern Ursachen zu verstehen. In der Fotografie, die Geschichte hinter dem Bild zu erzählen.</p>
            </div>
            <div class="value-card">
                <h3>Kreativität</h3>
                <p>Standardlösungen gibt es bei mir nicht. Jeder Mensch, jede Situation ist einzigartig und verdient einen individuellen, kreativen Ansatz.</p>
            </div>
            <div class="value-card">
                <h3>Kontinuität</h3>
                <p>Stillstand bedeutet Rückschritt. Ich bilde mich ständig weiter, sowohl therapeutisch als auch fotografisch, um Ihnen stets das Beste bieten zu können.</p>
            </div>
            <div class="value-card">
                <h3>Authentizität</h3>
                <p>Ich bin, wer ich bin – ohne Verstellung. Diese Ehrlichkeit spiegelt sich in meiner Arbeit wider und schafft echte, vertrauensvolle Beziehungen.</p>
            </div>
        </div>
    </div>
</section>

<!-- PRIVAT -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Privat</h2>
            <div class="section-line"></div>
        </div>
        <div class="personal-content">
            <p>Wenn ich nicht gerade in der Praxis oder mit der Kamera unterwegs bin, findet man mich meist in der Natur. Wandern, Radfahren und die Ruhe der Berge helfen mir, Kraft zu tanken und neue Perspektiven zu gewinnen.</p>
            <p>Ich lebe und arbeite in Linz, einer Stadt, die ich für ihre Lebensqualität und ihr kulturelles Angebot schätze. Die Donau, die Parks und die lebendige Kunstszene bieten unzählige Inspirationsquellen für meine Fotografie.</p>
            <p>In meiner Freizeit lese ich gerne, interessiere mich für Psychologie und Körperarbeit und treffe mich mit Freunden. Ausgeglichenheit ist mir wichtig – denn nur wer selbst im Gleichgewicht ist, kann anderen dabei helfen, es zu finden.</p>
        </div>
    </div>
</section>

<!-- QUALIFIKATIONEN -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Qualifikationen & Weiterbildungen</h2>
            <div class="section-line"></div>
        </div>
        <div class="qualifications">
            <div class="qualification-category">
                <h3>Physiotherapie</h3>
                <ul class="qualification-list">
                    <li>Diplom Physiotherapie, [Ausbildungsstätte]</li>
                    <li>Manuelle Therapie nach Maitland</li>
                    <li>Triggerpunkt-Therapie</li>
                    <li>Funktionelle Bewegungsanalyse</li>
                    <li>Medizinische Trainingstherapie</li>
                    <li>Schmerztherapie & Schmerz-Management</li>
                    <li>Lymphdrainage</li>
                    <li>Fortlaufende Fortbildungen in verschiedenen Bereichen</li>
                </ul>
            </div>
            <div class="qualification-category">
                <h3>Fotografie</h3>
                <ul class="qualification-list">
                    <li>Autodidaktische Ausbildung mit Fokus auf Portrait- und Event-Fotografie</li>
                    <li>Workshops bei renommierten Fotografen</li>
                    <li>Spezialisierung auf natürliches Licht</li>
                    <li>Digitale Bildbearbeitung & Farbmanagement</li>
                    <li>Regelmäßige Teilnahme an Foto-Workshops und Fachseminaren</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Lassen Sie uns kennenlernen</h2>
            <p>Ob Sie einen Physiotherapie-Termin vereinbaren oder mehr über meine Fotografie erfahren möchten – ich freue mich auf Ihre Nachricht.</p>
            <a href="index.php#kontakt" class="btn btn-primary">Kontakt aufnehmen</a>
        </div>
    </div>
</section>

<?php
// Footer einbinden
include 'includes/footer.php';
?>
