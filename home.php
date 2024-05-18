<style>
  .animated-img {
  transition: transform 0.3s ease; /* Efek transisi untuk perubahan */
}

.animated-img:hover {
  animation: moveSideToSide 0.5s infinite alternate; /* Animasi saat kursor di atas gambar */
}

@keyframes moveSideToSide {
  0% {
    transform: translateX(0); /* Posisi awal */
  }
  100% {
    transform: translateX(20px); /* Posisi akhir, geser ke kanan 20px */
  }
}

</style>
<div class="mb-3">
                    <div class="d-flex align-items-center row">
                      <div class="col-sm-7">
                        <div class="text-center">
                         <img src="./assets/img/logo.png" width="95%" class="mb-0 animated-img">
                         <cite> <smal class="text-light fw-semibold pt-0 p-3">Seorang pengembang web yang masih terus belajar dan berkembang. Berusaha untuk selalu memberikan yang terbaik dalam setiap proyek yang dikerjakan.</smal></cite>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body px-md-4">
                          <!-- <img src="./assets/img/pg.jpg" height="220" alt="BangIman" data-app-dark-img="./assets/img/pg.jpg" data-app-light-img="./assets/img/pg.jpg"> -->
                          <h5 class="card-header m-0 me-2 pb-3" style="line-height: 1.5;">  <img src="./assets/img/imanudin3.png" alt="" width="80%" class="animated-img rounded-circle mb-2"> 
                          <p class="card-text"><div class="btn-group" role="group" aria-label="Basic example">
                              <a href="//facebook.com/imanudin.it" class="btn btn-primary"><i class='bx bxl-facebook'></i></a>
                              <button type="button" class="btn btn-secondary"><i class='bx bxl-github' ></i></button>
                              <a href="https://api.whatsapp.com/send?phone=082350730631"  class="btn btn-success"><i class='bx bxl-whatsapp' ></i> 082350730631</a>
                            </div> </p>
                        </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="divider mb-3" id="services">
                        <div class="divider-text">  <h4 class="fw-bold py-3"><small class="text-muted fw-light"> M Y </small> <br>   S E R V I C E S </h4></div>
                      </div>
                      <div class="row">
                    <?php 
      $services = json_decode(file_get_contents('./json/services.json'), TRUE);
      //var_dump($services);
      foreach($services['services'] as $service) { ?>
        <div class="col-lg-4 col-md-4">
                  
            <div class="card bl-primary mb-3">
              <div class="card-body text-center">
              <h1 > <i class="<?=$service['icon'];?>"style="font-size: 50px;"></i> </h1>
              <h4> <?=$service['title'];?></h4>
              <p> <?=$service['description'];?></p>
          </div>
            </div>
        </div>
        <?php } ?>
                      </div>
    <div class="divider mb-2" id="portofolio">
                        <div class="divider-text">  <h4 class="fw-bold py-3"><small class="text-muted fw-light"> M Y </small> <br>   P O R T O F O L I O S </h4></div>
                      </div>
  <div class="owl-carousel owl-theme mb-3">
    <?php
    // Read the JSON file
    $json = file_get_contents('./json/portofolios.json');
    $data = json_decode($json, true);

    // Check if data is not empty
    if (!empty($data['portfolio'])) {
        foreach ($data['portfolio'] as $item) {
            echo '<div class="item">
            <div class="card">
            ';
            echo '
            <div class="card-header p-1 mb-3">
            <img src="' . $item['image'] . '" class="img-fluid d-block w-100" alt="' . htmlspecialchars($item['title']) . '">
            </div>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title mb-3"><a href="'.$item['url'].'" >' . htmlspecialchars($item['title']) . '</a></h5>';
            echo '<p class="text-justify">' . htmlspecialchars($item['description']) . '</p>
            <div class="demo-inline-spacing text-center mb-0">';
            foreach ($item['tag'] as $tag) {
              echo '
              <span class="badge bg-label-warning badge-md animated-img"><cite>'.$tag.'</cite></span>
              ';
          }echo '</div></div>';
            echo '</div>
            </div>';
        }
    }
    ?>
</div>
<div align="center" class="mb-4">
<div class="btn-group" role="group" aria-label="Basic example">
                              <button type="button" class="prev btn btn-secondary">&laquo; Prev</button>
                              <a href="./portofolios/" class="btn btn-outline-secondary">✨ All Porto..</a>
                              <button type="button" class="next btn btn-secondary">Next &raquo; </button>
                            </div>
</div>
<div class="divider mb-1" id="contact">
                        <div class="divider-text">  <h4 class="fw-bold py-3"><small class="text-muted fw-light"> M Y </small> <br> C O N T A C T </h4></div>
                      </div>
                      <div class="alert alert-secondary mt-1" align="center"> Jika Anda tertarik untuk menggunakan jasa pembuatan website kami, silahkan hubungi kami untuk informasi lebih lanjut.</div>
  <div class="row">
    <div class="col-lg-6">
            
    <div class="card mb-3"> 
              <div class="card-body p-0"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.900013209415!2d109.14389487329004!3d1.229315561954931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e498dbcc1e8e03%3A0x286650f4db3bd0cc!2sJl.%20Raya%20Tebas%2022-5%2C%20Tebas%20Sungai%2C%20Kec.%20Tebas%2C%20Kabupaten%20Sambas%2C%20Kalimantan%20Barat%2079461!5e0!3m2!1sid!2sid!4v1693141352551!5m2!1sid!2sid" width="100%" height="325" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            </div>
    </div>
    <div class="col-lg-6">
    <div class="card mb-3"> 
              <div class="card-body form-floating"> 
              <form id="whatsapp-form" action="https://api.whatsapp.com/send" method="get">
                <div class="row">
                  <div class="col-lg-6 col-12 mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Nama Kamu" id="name">
                  </div>

                  <div class="col-lg-6 col-12 mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12 mb-3">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Pesan"></textarea>
                  </div>

                  <div align="right">
                    <input type="hidden" name="phone" value="082350730631">
                    <input type="hidden" name="text" value="">
                    <button type="submit" class="form-control submit-btn btn-success" onclick="prepareWhatsAppMessage()"><i class='bx bxl-whatsapp' ></i> Kirim Pesan </button>
    </div>
                </div>
              </form>
            </div>
            </div>
  </div>
  
  </div>
  <script>
            function prepareWhatsAppMessage() {
              var name = document.getElementById("name").value;
              var message = document.getElementById("message").value;
              var formattedMessage = "Hi, Saya " + name + ". " + message;
              
              document.getElementById("whatsapp-form").elements.namedItem("text").value = formattedMessage;
            }
            </script>