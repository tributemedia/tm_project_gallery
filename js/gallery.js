(function ($, Drupal) {

  // When a project gallery thumbnail is clicked, switch the main image to the image clicked.
  
  $('.thumb-img img').click(function() {
    var mainImage = $('#main-img img');
    var mainImagePath = mainImage.attr('src').substring(0,mainImage.attr('src').lastIndexOf('/') +1);
    console.log(mainImagePath);
    var imgName = $(this).attr('src').substring($(this).attr('src').lastIndexOf('/') +1);
    console.log(imgName);
    mainImage.attr('src', mainImagePath + imgName);
  });
    
})(jQuery, Drupal);