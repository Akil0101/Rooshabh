<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Check our Services</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">


    <?php if(isset($service)){ foreach($service as $row){?>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi"><img src="admin/<?php echo $row['icon'] ?>" height="64px" width="64px" alt=""></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3><?php echo $row['name']; ?></h3>
          </a>
          <p><?php echo $row['des']; ?></p>
        </div>
      </div><!-- End Service Item -->
      <?php }}?>

     

    </div>

  </div>

</section><!-- /Services Section -->