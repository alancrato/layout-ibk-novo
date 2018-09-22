(function($){
  $(function(){
    $('.sidenav').sidenav();
      $('.carousel.carousel-slider').carousel({
          fullWidth: true,
          indicators: true,
          duration: 400
      });
      $(document).ready(function(){
          $('.materialboxed').materialbox();
      });
      $(".dropdown-trigger").dropdown();
  }); // end of document ready
})(jQuery); // end of jQuery name space
