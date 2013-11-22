<?php

/**
 * The template for displaying Archive pages.
 * Template name: Galerija
 */

get_header(); ?>


     <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                
                    <section id="maincontent" class="nine columns positionleft">

                            <section class="content">
				
				<?php
                    $args = array (
                        'post_type' => 'post', 
                        'category_name' => 'galerija',
                    );

                    // The Query
                    $query = new WP_Query( $args );



                ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $query->have_posts() ) {
                            $query->the_post();

        ?>
				<?php  


				$datum = get_the_date('Y-m-d'); 

				$ts = strtotime($datum);

				?>
			<article class="post">
                    <div class="date-wrapper"> 
                        <div class="line-date"></div>
                        <div class="date-value"><?php echo date('d', $ts); ?>
</div>
                        <div class="month-value"><?php echo date('F', $ts); ?>
</div>
                    </div>
                    <div class="postimg">
                      
                        <?php the_post_thumbnail( 'medium', array('class' => 'frame')); ?>
                    </div>

                    <div class="entry-content">
                        <h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-utility">
                            Posted by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                        </div>
                       <p><?php 
                       $izmenjen_content =  izbaci_tekst_posle_more(get_the_content());
                       echo do_shortcode( $izmenjen_content) ;

                        ?></p>
						<a href="<?php the_permalink(); ?>" class="button">Read more <span></span></a>
                    </div>
                   
                    <div class="clear"></div>
                </article>



			<?php }?>

			<div class="wp-pagenavi">
                                	<div class="pages">Page 1 of 3</div><a class="page" href="#">1</a><span class="current"><span>2</span></span><a class="page" href="#">3</a>
                            	</div>
                            </section>
                         
                    </section>


 				<aside class="three columns">
                     	<div class="sidebar">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    	</div>
					<!-- SIDEBAR -->
					</aside>
                </div>
            </div>
        </div>


<?php get_footer(); ?>
