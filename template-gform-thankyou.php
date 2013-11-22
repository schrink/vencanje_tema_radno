<?php
/**
 * The template for displaying all pages.
 *
 * Template name: Forma Thank you
 */


if ($_POST) {




    // Create post object
    $my_post = array(
      'post_title'    => 'Novi unos u guestbook od - ' . $_POST['ime'] ,
      'post_content'  =>  $_POST['poruka'],
      'post_type' => 'guestbook', 
      'post_status' => 'publish'
    );

    // Insert the post into the database
    $post_id = wp_insert_post( $my_post );


    require_once(ABSPATH . "wp-admin" . '/includes/image.php');
    require_once(ABSPATH . "wp-admin" . '/includes/file.php');
    require_once(ABSPATH . "wp-admin" . '/includes/media.php');

    if ($_FILES) {
        foreach ($_FILES as $file => $array) {
            if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                echo "upload error : " . $_FILES[$file]['error'];
                die();
            }
            $attach_id = media_handle_upload( $file, $post_id );
        }   
    }


    //update_post_meta($post_id, '_thumbnail_id', $attach_id);

    
}

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