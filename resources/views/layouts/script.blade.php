  <!----back to top----->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>

  <!-- Vendor JS Files -->
  <script src="{{URL::asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  {{-- <script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script> --}}

  @yield('js')
  <!-- Template Main JS File -->
  <script src="{{URL::asset('assets/js/main.js')}}"></script>

@toastr_js
@toastr_render
