<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package vencanje
 */
?>
        <!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER SIDEBAR -->
            <div id="outerfootersidebar">
                <div class="container">
                       <div id="footersidebar" class="row"> 
                    <?php 

                        dynamic_sidebar('footersidebar');
                     ?>
                

                        <div class="clear"></div>
                 
                    </div>  
                </div>
            </div>
            <!-- END FOOTER SIDEBAR -->
            
        </footer>
        <!-- END FOOTER -->
        <div class="clear"></div><!-- clear float --> 
	</div><!-- end outercontainer -->
</div><!-- end bodychild -->

<!-- COPYRIGHT -->
<div id="outercopyright">
    <div class="container">
        <div id="copyright">
            Copyright © 2013 Michael&amp;Miranda. Designed by <a href="http://templatesquare.com">TemplateSquare.com</a>.
        </div>
    </div>
</div>
<!-- END COPYRIGHT -->


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->


<!-- jQuery Superfish -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/hoverIntent.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/superfish.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/supersubs.js"></script>


<!-- jQuery Dropdown Mobile -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tinynav.min.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<!-- jQuery Flexslider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
          animation: "fade",              //String: Select your animation type, "fade" or "slide"
		  directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
		  controlNav: false  //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        });
		
});
</script>

<?php wp_footer(); ?>

</body>
</html>