/*$(document).ready(function(){
      
      $('.carousel').carousel();
      $('.carousel').carousel('next',3);
});*/
    
$('.carousel.carousel-slider').carousel({full_width: true});
$('.carousel').carousel({padding: 200});
autoplay();
function autoplay(){
    $('.carousel').carousel('next');
    setTimeout(autoplay,7000);
}
