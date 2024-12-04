<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Portfolio</h2>
  <p>Check our Portfolio</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <?php foreach($portcat as $row){ ?>
      <li data-filter=".filter-<?php echo$row['port_cat']; ?>"><?php echo$row['port_cat']; ?></li>
      <?php } ?>
      <!-- <li data-filter=".filter-product">Card</li>
      <li data-filter=".filter-branding">Web</li> -->
    </ul><!-- End Portfolio Filters -->


    <?php foreach($portpro as $row){ ?>
    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?php echo$row['p_category']; ?>">
        <img src="admin/<?php echo$row['p_img']; ?>" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4><?php echo$row['p_name']; ?></h4>
          <p><?php echo$row['p_des']; ?></p>
          <a href="admin/<?php echo$row['p_img']; ?>" title="<?php echo$row['p_name']; ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

<?php } ?>

    

    </div><!-- End Portfolio Container -->

  </div>

</div>

</section><!-- /Portfolio Section -->