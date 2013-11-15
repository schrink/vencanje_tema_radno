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
                                <div class="one_half columns">
                                    <div class="frame10 circle">
                                    <img src="images/content/avatar5.jpg" alt="" class=" " />
                                    </div>
                                    <div class="indentleft">
                                    <h3 class="title">About Miranda</h3>
                                    <p>Etiam vitae urna nec ipsum gravida cursus dapibus et eros. Vivamus vel pellentesque nisl. Etiam eu sodales justo. Donec vitae faucibus tellus, at lacinia orci. Aliquam blandit tellus ut porttitor eleifend. Sed ornare tincidunt...</p>
                                    <a href="#" class="button">Read more <span></span></a>
                                    </div>
                                </div>
                                <div class="one_half columns">
                                    <div class="frame10 circle">
                                    <img src="images/content/avatar6.jpg" alt="" />
                                    </div>
                                    <div class="indentleft">
                                    <h3 class="title">About Michael</h3>
                                    <p>Etiam vitae urna nec ipsum gravida cursus dapibus et eros. Vivamus vel pellentesque nisl. Etiam eu sodales justo. Donec vitae faucibus tellus, at lacinia orci. Aliquam blandit tellus ut porttitor eleifend. Sed ornare tincidunt...</p>
                                    <a href="#" class="button">Read more <span></span></a>
                                    </div>
                                </div>
                            </div> 
                             
                            
                        </section>
                    
                    </section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

<?php get_footer(); ?>
