

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script> -->
  <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('assets/js/nice-select-with-search.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.filterizr.min.js') }}"></script> -->

  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
   <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
         
   <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script> -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{ asset('assets/js/myscript.js') }}"></script>
  <script src="{{ asset('assets/js/navscript.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/plugin.js') }}"></script> -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  {{-- <script src="{{ asset('assets/js/lozad.min.js')}}"></script> --}}
  <script>
    $.each(document.images, function () {
      
  var this_image = this;
  var lsrc = $(this_image).attr('data-src') || '';

  if (lsrc.length > 0) {
      $(this_image).attr('data-src', '');
      var img = new Image();
      img.src = lsrc;
      $(img).on('load', function () {
          this_image.src = this.src;
          $(this_image).removeClass("banner_slider_img");
      });
  }
});
    $('.nice-select').niceSelect();
    // const observer = lozad();
    // observer.observe();

 </script>
  @yield('script')

