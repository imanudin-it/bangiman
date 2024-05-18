<footer class="footer text-muted bg-dark p-0 mb-0">
    <div align="center" class="p-4">
        
        <h2
          class="footer-text text-muted fw-bolder mt-3 mb-4"
          >Bang Iman</h2
        > <small> &copy; <?php echo date('Y') ?> &bull; Made With 💖 www.bangiman.my.id </small>
      </div>
      <div>
        
        
      </div>
    </div>
  </footer>
   
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>

    <script src="./assets/vendor/js/menu.js"></script>
    <script src="./assets/js/main.js"></script>

    <script src="./assets/owlcarousel/vendors/jquery.min.js"></script>
<script src="./assets/owlcarousel/owlcarousel/owl.carousel.min.js"></script>

<script>
  $('.loop').owlCarousel({
    lazyLoad:true,
    center: true,
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        600:{
            items:2
        }
    }
});
</script>