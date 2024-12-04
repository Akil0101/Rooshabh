<!-- About Section -->
<section id="about" class="about section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">
    <div class="col-lg-6 order-1 order-lg-2">
      <img src="admin/<?php echo$about['img'] ?>" class="img-fluid" alt="">
    </div>
    <div class="col-lg-6 order-2 order-lg-1 content">
      <h3><?php echo$about['title'] ?></h3>
      <p class="fst-italic">
      <?php echo$about['1para'] ?>
      </p>
      <ul>
        <?php foreach($aboutpoint as $row){ ?>
        <li><i class="bi bi-check2-all"></i> <span><?php echo$row['point']; ?></span></li>
        <?php } ?>
      </ul>
      <p>
      <?php echo$about['2para'] ?>
      </p>
    </div>
  </div>

</div>

</section><!-- /About Section -->