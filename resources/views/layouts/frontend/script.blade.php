
  <!-- Vendor JS Files -->
  <script src="{{ asset('/frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  {{-- <script src="{{ asset('/frontend/assets/vendor/php-email-form/validate.js') }}"></script> --}}
  <!-- Template Main JS File -->
  <script src="{{ asset('/frontend/assets/js/main.js') }}"></script>

  <script>
    var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
  </script>