 <!-- Clients Section -->
 <section id="clients" class="clients section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 2,
            "spaceBetween": 40
          },
          "480": {
            "slidesPerView": 3,
            "spaceBetween": 60
          },
          "640": {
            "slidesPerView": 4,
            "spaceBetween": 80
          },
          "992": {
            "slidesPerView": 6,
            "spaceBetween": 120
          }
        }
      }
    </script>
    <div class="swiper-wrapper align-items-center">
      <?php   foreach($clients as $row){ ?>
      <div class="swiper-slide"><img src="admin/<?php echo$row['clients_img']; ?>" class="img-fluid" alt=""></div>
     <?php } ?>
      
    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- /Clients Section -->