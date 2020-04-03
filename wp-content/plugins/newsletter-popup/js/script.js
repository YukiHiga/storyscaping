// lukke knap til nyhedsbrev. Dette gør at man kan trykke på krydset og lukke nyhedsbrevet.
//jQuery.noConflict();
jQuery(document).ready(function( $ ) {
  $('.popupCloseButton').on('click', function() {
    $('.login-form').hide();
  })
	
});
