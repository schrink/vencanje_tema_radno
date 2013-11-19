<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vencanje
 */

get_header(); ?>


		<?php while ( have_posts() ) : the_post(); ?>


<?php $autor = get_the_author();  ?>

        <!-- BEFORE CONTENT -->
		<div id="outerbeforecontent">
            <div class="container">
            	<div class="row">
                <div id="beforecontent" class="twelve columns">
                    <div id="pagetitle-container">
                    	<h1 class="pagetitle"><?php the_title(); ?></h1>
                        <span class="pagedesc">Posted by <?php echo $author; ?></span>
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

<?php 
$datum = get_the_date('Y-m-d'); 
$ts = strtotime($datum);


 ?>
								<article class="post">
                                    <div class="date-wrapper"> 
                                        <div class="line-date"></div>
                                        <div class="date-value"><?php echo date('d', $ts); ?></div>
                                        <div class="month-value"><?php echo date('F', $ts); ?></div>
                                    </div>
       
                                    <div class="entry-content">
									<?php the_content( ); ?>
                                    </div>
                                   
                                    <div class="clear"></div>
                                </article>
                                
                                <h3>About Author</h3>
                                <div class="author">
                                    <div class="avatar1 circle"><?php echo get_avatar( get_the_author_meta( 'ID' ), 62 ); ?></div>
                                    <cite class="fn"><?php echo $autor; ?></cite>
                                   <?php echo get_the_author_meta('description')  ?>
                                </div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					//comments_template();
			?>
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
<?php get_footer(); ?>