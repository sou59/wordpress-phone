       
       <?php get_header(); ?>
        <!-- Corps de ma page -->
        <main>
            <div class="jumbotron" style="background-image: url(<?php echo get_background_image();  ?>)">
                <h1><?php echo get_bloginfo("name"); ?></h1>
                <h2><?php echo get_bloginfo("description"); ?></h2>
                <a href="index.html" class="btn">Learn more</a>
            </div>

            <div class="container">

                <?php
                   $args = array(
                    "post_type" => "items_media", // quel type je souhaite récupérer ?
                    "posts_per_page" => 3   // nombre d'éléments retourné par la requête

                   );

                     // requête personnalisé pour récupérer des items media
                    $items = new WP_Query($args);

                    // boucle sur cette variable : 

                    if($items->have_posts()) {
                        while($items->have_posts()) {
                            // il fautr iétere sur un post de $items sinon boucle infinie
                            $items->the_post();
                            ?>

                            <div class="col media">
                                <?php
                                // solution 2 avec plus de liberté pour l'affichage et la mise en page
                                    $thumbnailId = get_post_thumbnail_id($post->ID);
                                    $image = wp_get_attachment_image_src($thumbnailId, "medium"); // 2e paramètre pour que l'image s'affiche entièrement
                                    //var_dump($thumbnailId);

                                ?>  
                                
                                <figure>
                                    <?php
                                    // solution un mais on n'a pas la main sur la balise img et style
                                    // the_post_thumbnail(); ?>  

                                    <img src="<?php echo $image[0]; ?>" class="img-media" alt="Logo de <?php the_title(); ?>">
                                </figure>
                                <!-- affichage du contenu texte -->
                                <?php the_content(); ?>  

                            </div>

                            <?php
                        }
                    }

                ?>

                
                <!-- <div class="col media media-verge">
                    <figure></figure>
                    <p>"The WebForce Phone is the rare kind of phone I can recommend."</p>
                    <a href="index.html"><i class="fa fa-external-link" aria-hidden="true"></i> Learn more</a>
                </div>
                <div class="col media media-mashable">
                    <figure></figure>
                    <p>"WebForce phone is practically the perfect smartphone."</p>
                    <a href="index.html"><i class="fa fa-external-link" aria-hidden="true"></i> Learn more</a>
                </div> -->
            </div>

            <div class="container">
                <div class="col">
                    <img class="col-img" src="<?php echo get_template_directory_uri();  ?>/img/img1.png"/>
                </div>
                <div class="col">
                    <img class="col-img" src="<?php echo get_bloginfo("template_directory");  ?>/img/img2.png"/>
                </div>
                <div class="col">
                    <img class="col-img" src="<?php echo get_template_directory_uri();  ?>/img/img3.png"/>
                    <div class="col-img-description">
                        <p>Power Bundle</p>
                        <a href="index.html">Learn more</a>
                        <div class="circle-icon">
                            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Encart newsletter -->
            <div class="container">
                <div id="contact">
                    <h3>Always be the first to know</h3>
                    <p>Sign up for our newsletter!</p>
                    <form>
                        <input type="text" name="email" placeholder="Email address"/>
                        <input type="submit" value="Subscribe now"/>
                    </form>
                </div>
            </div>
        </main>

        
<?php get_footer(); ?>