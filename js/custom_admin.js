jQuery(document).ready(function() {

jQuery('#upload_image_button').on('click', function(e) {


  formfield = jQuery('#<?php echo $this->get_field_id("slika"); ?>').attr('name');
  tb_show('', 'media-upload.php?type=image&TB_iframe=true');
  return false;
  });

  window.send_to_editor = function(html) {
  imgurl = jQuery('img',html).attr('src');
  jQuery('#<?php echo $this->get_field_id("slika"); ?>').val(imgurl);
  tb_remove();
  }

});