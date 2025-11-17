    </main>
    <!-- MAIN CONTENT END -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; <?php echo date('Y'); ?> Eva Koller. Alle Rechte vorbehalten.</p>
                <div class="footer-links">
                    <a href="impressum.php">Impressum</a>
                    <a href="datenschutz.php">Datenschutz</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Basis JavaScript - wird auf allen Seiten geladen -->
    <script src="assets/js/base.js"></script>
    
    <!-- Seiten-spezifisches JavaScript wird von der jeweiligen Seite geladen -->
    <?php if(isset($page_js)): ?>
        <script src="assets/js/<?php echo $page_js; ?>"></script>
    <?php endif; ?>
</body>
</html>
