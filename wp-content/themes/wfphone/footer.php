<!-- Pied de page -->
    <footer>

        <?php
            wp_nav_menu(array(
                "theme_location" => "menu-footer",
                "menu_class" => "list-inline link-list", // ajouter une ou plusieurs classes de l'élément ul du menu
                "container" => "span" // je ne veux pas de container car il faut inline avec les icone de droite
            ));
        ?>

        
        <!-- remplacé par le php au dessus 
            <ul class="list-inline link-list">
            <li class="link"><a href="#">About WebForce Phone</a></li>
            <li class="link"><a href="#">Careers</a></li>
            <li class="link"><a href="#">Press</a></li>
            <li class="link"><a href="#">Privacy and Legal</a></li>
        </ul> -->

        <?php
            wp_nav_menu(array(
                "theme_location" => "menu-footer-dte",
                "menu_class" => "list-inline social-media-list", // ajouter une ou plusieurs classes de l'élément ul du menu
                "container" => "span" // je ne veux pas de container car il faut inline avec les icone de droite
            ));
        ?>
        <ul class="list-inline social-media-list">
            <li class="support"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Support: <a class="text-primary" href="tel:+33 612345678">+33 612345678</a></li>
            <li class="social-media"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li class="social-media"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="social-media"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        </ul>
    </footer>
    </body>
</html>