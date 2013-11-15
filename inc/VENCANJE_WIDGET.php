<?php
/**
 * Example Widget Class
 */
class vencanje_widget extends WP_Widget {
 
 
    /** constructor -- name this the same as the class above */
    function vencanje_widget() {
        parent::WP_Widget(false, $name = 'Tekst, slika i naslov');	
    }
 
    /** @see WP_Widget::widget -- do not rename this */
    function widget($args, $instance) {	
        extract( $args );
        $title 		= apply_filters('widget_title', $instance['title']);
        $message 	= $instance['message'];
        $slika 	= $instance['slika'];
        ?>

 		<?php echo $before_widget; ?>

        <img src="<?php echo $slika; ?>" alt="" />
        <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
       	<p><?php echo $message; ?></p>
  		<?php echo $after_widget; ?>
       
            
        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {		
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['message'] = strip_tags($new_instance['message']);
		$instance['slika'] = strip_tags($new_instance['slika']);
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {	
 
        $title 		= esc_attr($instance['title']);
        $message	= esc_attr($instance['message']);
        $slika	= esc_attr($instance['slika']);
        ?>
         <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Naslov:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>



       	<p>
          <label for="<?php echo $this->get_field_id('slika'); ?>"><?php _e('Slika'); ?></label> 
          <input class="widefat hidden" id="<?php echo $this->get_field_id('slika'); ?>" name="<?php echo $this->get_field_name('slika'); ?>" type="text" value="<?php echo $slika; ?>" />
          <input class="upload_image_button" type="button" value="Upload Image" />
        </p>


        <script>
jQuery(document).ready(function() {
  var kliknuto;

  jQuery('.upload_image_button').on('click', function(e) {
    kliknuto = this;

  formfield = jQuery("#<?php echo $this->get_field_id('slika'); ?>").attr('name');
  tb_show('', 'media-upload.php?type=image&TB_iframe=true');
  return false;
  });

  window.send_to_editor = function(html) {
  imgurl = jQuery('img',html).attr('src');
 
  jQuery(kliknuto).prev('input').val(imgurl);
  tb_remove();
  }

});

        </script>
		<p>
          <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Poruka'); ?></label> 
          <textarea class="widefat" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>"><?php echo $message; ?></textarea>

        </p>



        <?php 
    }
 
 
} // end class example_widget

add_action('widgets_init', create_function('', 'return register_widget("vencanje_widget");'));

