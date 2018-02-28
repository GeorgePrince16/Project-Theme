/*

// Assumes that you're using jQuery and Bootstrap
// The `ajaxurl` variable, should be declared in 
// header.php like so:
// ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

var $button = $('#fixture-button');
var $modal = $('#fixture-modal');
var $modal_target = $('#fixture-modal_target');

$button.click(function() {

  var id = $(this).data('id');

  $.ajax({
    url: ajaxurl,
    data: {
      'action' : 'fetch_modal_content',
      'id' : id
      },
    success:function(data) {
      $modal_target.html(data);
      $modal.modal('show');
    }
  });

}); */