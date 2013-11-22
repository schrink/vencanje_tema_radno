<?php
/**
 * The template for displaying all pages.
 *
 * Template name: Forma Guestbook
 */

get_header(); ?>


		<?php while ( have_posts() ) : the_post(); ?>
 <!-- BEFORE CONTENT -->
		<div id="outerbeforecontent">
            <div class="container">
            	<div class="row">
                <div id="beforecontent" class="twelve columns">
                    <div id="pagetitle-container">
                    	<h1 class="pagetitle"><?php the_title(); ?></h1>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->

        
        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                
                    <section id="maincontent" class="nine columns positionleft">

                            <section class="content">
								<?php the_content(); ?>
                <form action="<?php bloginfo( 'url'); ?>/thank-you" method="POST" enctype="multipart/form-data">
                    Ime: <input type="text" name="ime"><br><br>
                    Slika: <input type="file" name="slika"><br><br>
                    Poruka: <textarea name="poruka" id="" cols="30" rows="10"></textarea><br>
                    <input type="submit" value="Posalji">

                </form>


                            </section>

                    </section>
                    <?php endwhile; // end of the loop. ?>

                     <aside class="three columns">
                     	<div class="sidebar">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    	</div>
					<!-- SIDEBAR -->
					</aside>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

        	





<?php get_footer(); ?>