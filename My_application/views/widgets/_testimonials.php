<section class="testimonial-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-4 col-xs-12 centerCol">
        <h3>Testimonials</h3>
      </div>
    </div>
    <div class="row">
      <div class="testimonial-slide">
  
  <?php if (isset($testi) && array_filled($testi)): ?>
    <?php foreach ($testi as $key => $value): ?>
      <div>
      <div class="col-md-7 col-sm-7 col-xs-12 centerCol">
        <div class="testimonial-item">
          <img alt="" src="<?=get_image($value['reviews_image'],$value['reviews_image_path'])?>">
          <?=html_entity_decode($value['reviews_desc'])?>
          <h4><?=$value['reviews_title']?></h4>
          <h6><?=$value['reviews_other']?></h6>
        </div>
      </div>
    </div>
          <?php endforeach ?>
        <?php endif ?>
    
    
  </div>
    </div>
  </div>
</section>