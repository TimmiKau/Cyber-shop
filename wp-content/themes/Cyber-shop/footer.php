
<footer>

<section class="container">

<div class="column">
<span id="logo">

<a href="http://cyber-shop.test/home">
    <img src='http://Cyber-shop.test/wp-content/uploads/2024/03/Logo-1.png'; class="logo" />
</a>

<p>We are a residential interior design firm located in Portland. <br> Our boutique-studio offers more than</p>

<div class="social_media">

<div class="column" id="socialMedia"><span class="category" ></span><?php
        
        // Define parameters for the navigation menu
                $menu = array(
                    'theme_location' => 'Footer_Social_Media',
                    'menu_id' => 'Footer_Social_Media',
                    'container' => 'nav',
                    'container_class' => 'menu'
                );
        
        // Generate and display the navigation menu
                wp_nav_menu($menu);
                ?></div></div>
                
</div>

</span>
</div>
<div class="column"><span class="category"> Services </span><?php
        
        // Define parameters for the navigation menu
                $menu = array(
                    'theme_location' => 'footer_information',
                    'menu_id' => 'footer_information',
                    'container' => 'nav',
                    'container_class' => 'menu'
                );
        
        // Generate and display the navigation menu
                wp_nav_menu($menu);
                ?></div>

<div class="column"><span class="category"> Assistance to the buyer </span>
        
<?php
        
        // Define parameters for the navigation menu
                $menu = array(
                    'theme_location' => 'footer_information',
                    'menu_id' => 'footer_information',
                    'container' => 'nav',
                    'container_class' => 'menu'
                );
        
        // Generate and display the navigation menu
                wp_nav_menu($menu);
                ?></div>

        
        </div>

                

</section >




</footer>
</body
</html>