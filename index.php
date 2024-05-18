<?php
require_once('./layouts/header.php');
?>

  <body>
    <?php 
require_once('./layouts/navbar.php');
?>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <?php require_once('./home.php'); ?>
                </div>
              </div>
</div>

<?php
require_once('./layouts/footer.php');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false, // Nonaktifkan tombol next dan previous
            dots: false, // Nonaktifkan indikator
            autoplay:true,
            autoplayTimeout:5000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                // 1000: {
                //     items: 3
                // }
            }
        });

        // Tambahkan event handler untuk tombol next dan previous
        $(".next").click(function() {
            $(".owl-carousel").trigger("next.owl.carousel");
        });
        $(".prev").click(function() {
            $(".owl-carousel").trigger("prev.owl.carousel");
        });
    });
</script>