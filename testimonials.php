<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

  <img src="admin/<?php echo $testibg['testimonials_img']; ?>" class="testimonials-bg" alt="">

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
        }
      }
    </script>
      <div class="swiper-wrapper">

        <?php foreach ($testip as $row) { ?>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="admin/<?php echo$row['img']; ?>" class="testimonial-img" alt="">
              <h3><?php echo$row['name']; ?></h3>
              <h4><?php echo$row['post']; ?></h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span><?php echo$row['des']; ?>.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
        <?php } ?>


      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->