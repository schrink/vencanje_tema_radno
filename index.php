<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vencanje
 */

get_header(); ?>

  <!-- SLIDER -->
        <div id="outerslider">
        	<div class="container">
            <div class="row">
        	<div id="slidercontainer" class="twelve columns">
            
				<div class="slides margina"><?php putRevSlider("naslovna"); ?></div>
                
            </div>
            </div>
            </div>
        </div>
        <!-- END SLIDER -->


        <!-- MAIN CONTENT -->
        <div id="outermain" class="margina">
            <div class="container">
                <div class="row">
                    <section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                        
                            <div class="highlight-content">
                               <h1> <?php the_field('home_poruka', 'option'); ?></h1>
                            </div>
                        
                            <div id="featured" class="row">
                                
                                <?php dynamic_sidebar( "home-1" ); ?> 
                            </div>

                                
                            <div class="separator"></div>
                            
                            <div class="row">
                                

                                <?php 



                                // WP_Query arguments
                                $args = array ( 
                                    'post_type' => 'mladenci',
                                    'order' => 'ASC',
                                    'orderby' => 'id',
                                    'posts_per_page'         => '2',
                                );

                                // The Query
                                $query = new WP_Query( $args );

                                // The Loop
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                       ?>


                                <!--- LOOP -->
                                <div class="one_half columns">
                                    <div class="frame10 circle">
                                        <?php 
                                            $post_id = get_the_ID();
                                            $thum_id = get_post_thumbnail_id($post_id);
                                            $src = wp_get_attachment_image_src($thum_id);

                                         ?>
                                    <?php the_post_thumbnail('full', array('class' => 'neka_klasa') ); ?>
                                   <!--  <img src="<?php echo $src[0]; ?>" > -->
                                    </div>
                                    <div class="indentleft">
                                    <h3 class="title"><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="button">Read more <span></span></a>
                                    </div>
                                </div>
                                <!--- LOOP -->



                                        <?php
                                    }
                                } else {
                                    echo "No post found";
                                }

                                // Restore original Post Data
                                wp_reset_postdata();


                                 ?>

                            </div> 
                             
                            
                        </section>
                    
                    </section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

<?php get_footer(); ?>
