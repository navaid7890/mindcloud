<style>
  .InnerBanner {
    background-image: url(<?= g('db.admin.bucketimg') . "cms_image/" . $con1['cms_page_image'] ?>);
  }

  .hding-1 strong {
    font-weight: 700;
  }
  .fld-contact textarea {
    background: #F3F6FA;
}
</style>
<div class="advisory-page">
            
         <section class="InnerBanner hding-1 para">
            <div class="container">
               <div class="bannerContent">
                  <h1><?= html_entity_decode($con1['cms_page_title']) ?> </h1>  
                  <div class="space"><br><br></div>

                  <?= html_entity_decode($con1['cms_page_content']) ?>
                  <div class="space"><br><br></div>

                  <a href="#" class="btn-theme btn-hover">Get in Touch <span></span></a>
               </div>   
            </div>   
         </section>


          <section class="advisSec advisSec-1 hding-2 para">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <div class="advis-mdl">
                    <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con2['cms_page_image'] ?>">
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="advis-content">
                    <h2><?= html_entity_decode($con2['cms_page_title']) ?></h2>
                    <div class="space"><bR><bR></div>
                    <?= html_entity_decode($con2['cms_page_content']) ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="advisSec advisSec-2 hding-2 para bg-white">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-2">
                  <div class="advis-content">
                    <h2><?= html_entity_decode($con3['cms_page_title']) ?></h2>
                    <div class="space"><bR><bR></div>
                    <?= html_entity_decode($con3['cms_page_content']) ?>

                  </div>
                </div>

                <div class="col-lg-6 col-md-12 order-1">
                  <div class="advis-mdl">
                    <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con3['cms_page_image'] ?>">
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="advisSec advisSec-2 hding-2 para">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                  <div class="advis-mdl">
                    <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>">
                  </div>
                </div>

                <div class="col-lg-8 col-md-12">
                  <div class="advis-content">
                    <h2><?= html_entity_decode($con4['cms_page_title']) ?></h2>
                    <div class="space"><bR><bR></div>
                    <?= html_entity_decode($con4['cms_page_content']) ?>
                  </div>
                </div>

              </div>
            </div>
          </section> 

          <section class="advisSec advisSec-3 hding-2 para bg-white">
            <div class="container">
              <div class="row align-items-center">
                

                <div class="col-lg-8 col-md-12 order-2">
                  <div class="advis-content">
                    <h2><?= html_entity_decode($con5['cms_page_title']) ?></h2>
                    <div class="space"><bR><bR></div>
                    <?= html_entity_decode($con5['cms_page_content']) ?>
                  </div>
                </div>

                <div class="col-lg-4 col-md-12 order-1">
                  <div class="advis-mdl">
                    <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con5['cms_page_image'] ?>">
                  </div>
                </div>

              </div>
            </div>
          </section>          

        <section class="joinSec hding-2 para">
         <div class="joinContent">
            <h2><?= html_entity_decode($con6['cms_page_title']) ?></h2>
            <div class="space"><br></div>
            <?= html_entity_decode($con6['cms_page_content']) ?>
         </div>
      </section>

      <section class="contactSec pad-sec hding-1 para bg-white">
        <div class="container">
          <div class="contactHead text-center">
            <h1>contact <strong>us</strong></h1>
            <div class="space"><br><br></div>
            <p>By filling this form, we will get back to you as soon as possible.</p>
          </div>

          <? $this->load->view('widgets/_contact_us'); ?>
        </div>
      </section>

      <section class="quoteSec pad-sec">
        <div class="container">
        <?= html_entity_decode($con7['cms_page_content']) ?>
        </div>
      </section>

      <? $this->load->view('widgets/_clients'); ?>
      
      </div>
