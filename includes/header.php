<?php
/**
 * Header Template
 * 
 * Enthält die Navigation und wird auf allen Seiten eingebunden
 * 
 * @package EvaKoller
 * @version 1.0
 */

// Aktuelle Seite ermitteln für aktive Navigation
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags werden von der jeweiligen Seite gesetzt -->
    <?php if(isset($page_title)): ?>
        <title><?php echo $page_title; ?> – Eva Koller</title>
    <?php else: ?>
        <title>Eva Koller – Physiotherapeutin & Fotografin</title>
    <?php endif; ?>
    
    <?php if(isset($page_description)): ?>
        <meta name="description" content="<?php echo $page_description; ?>">
    <?php endif; ?>
    
    <!-- Basis CSS - wird auf allen Seiten geladen -->
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/header.css">
    
    <!-- Seiten-spezifisches CSS wird von der jeweiligen Seite geladen -->
    <?php if(isset($page_css)): ?>
        <link rel="stylesheet" href="assets/css/<?php echo $page_css; ?>">
    <?php endif; ?>
</head>
<body>
    <!-- HEADER & NAVIGATION -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <!-- Logo als Text -->
                <a href="index.php" class="logo">
                    <div class="logo-text">
                        <span class="logo-name">Eva Koller</span> <span class="logo-subtitle">BSc.</span>
                    </div>
                </a>
                
                <!-- Desktop Navigation -->
                
                <!-- Desktop Navigation -->
                <ul class="nav-menu">
                    <li>
                        <a href="physiotherapie.php" 
                           class="nav-link <?php echo ($current_page == 'physiotherapie.php') ? 'active' : ''; ?>">
                            Physiotherapie
                        </a>
                    </li>
                    <li>
                        <a href="fotografie.php" 
                           class="nav-link <?php echo ($current_page == 'fotografie.php') ? 'active' : ''; ?>">
                            Fotografie
                        </a>
                    </li>
                    <li>
                        <a href="ueber-mich.php" 
                           class="nav-link <?php echo ($current_page == 'ueber-mich.php') ? 'active' : ''; ?>">
                            Über mich
                        </a>
                    </li>
                    <li>
                        <a href="index.php#kontakt" 
                           class="nav-link <?php echo ($current_page == 'index.php' && isset($_GET['section']) && $_GET['section'] == 'kontakt') ? 'active' : ''; ?>">
                            Kontakt
                        </a>
                    </li>
                </ul>
                
                <!-- Mobile Navigation Toggle -->
                <button class="nav-toggle" aria-label="Navigation öffnen">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <!-- MAIN CONTENT START -->
    <main>
