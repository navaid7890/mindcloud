<style>
  .InnerBanner {
    background-image: url(<?= g('db.admin.bucketimg') . "cms_image/" . $con1['cms_page_image'] ?>);
  }

  .advisory-page strong {
    font-weight: 700;
  }
  .criteriaHead p {
    padding-bottom: 0px !important;
}
  
</style>


<div class="advisory-page advisory2-page">
  <section class="InnerBanner hding-1 para">
    <div class="container">
      <div class="bannerContent">
        <h1><?= html_entity_decode($con1['cms_page_title']) ?></h1>
        <div class="space"><br><br></div>

        <?= html_entity_decode($con1['cms_page_content']) ?>
        <div class="space"><br><br></div>
        <a href="#" class="btn-theme btn-hover">Get in Touch <span></span></a>
      </div>
    </div>
  </section>
  <section class="advisSec advisSec-1 hding-2 para">
    <div class="container">
      <div class="row align-items-center pb-100">
        <div class="col-lg-6 col-md-12 order-2">
          <div class="advis-content">
            <h2><?= html_entity_decode($con2['cms_page_title']) ?></h2>
            <div class="space"><bR><bR></div>
            <?= html_entity_decode($con2['cms_page_content']) ?>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 order-1">
          <div class="advis-mdl">
            <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con2['cms_page_image'] ?>">
          </div>
        </div>

      </div>

      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <div class="advis-mdl">
          <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con3['cms_page_image'] ?>">
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="advis-content">
          <?= html_entity_decode($con3['cms_page_content']) ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="programSec hding-1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>"></span>
        </div>

        <div class="col-md-6">
          <div class="program-content">
            <h1><?= html_entity_decode($con4['cms_page_title']) ?></h1>
            <h3><?= html_entity_decode($con4['cms_page_content']) ?></h3>

            <div class="row align-items-center">
              <div class="col-md-3">
                <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con5['cms_page_image'] ?>"></span>
              </div>
              <div class="col-md-9">
              <?= html_entity_decode($con5['cms_page_content']) ?>
              </div>
            </div>

            <div class="space"><br><br></div>

            <div class="row align-items-center">

              <div class="col-md-9 text-right order-2">
              <?= html_entity_decode($con6['cms_page_content']) ?>
              </div>

              <div class="col-md-3 order-1">
                <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con6['cms_page_image'] ?>"></span>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="programOverSec hding-1 para pad-sec">
    <div class="container">
      <h1>Programe <strong>Overview</strong></h1>
      <div class="space"><br><br></div>
      <p>The Programme’s mission is to help aspiring entrepreneurs develop their skills and launch their businesses in the UAE. <strong> Mind Cloud Academy will choose 10 teams of 2 participants each to take part in the accelerator program me.</strong> The 10 week KHDA-Certified Program me will take place every Saturday starting Q1 2021 and will help participants develop 10 essential startup related skills:</p>
      <div class="mostcateSec">

        <div class="space"><br><br></div>
        <ul class="cate-list">
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Business Model (4)</p>
            </a></li>
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Digital marketing (12)</p>
            </a></li>
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Finance and Valuation (6)</p>
            </a></li>
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Leadership (9)</p>
            </a></li>
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Human resources (14)</p>
            </a></li>
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Customer Acquisition (12)</p>
            </a></li>
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Marketing & Sales (10)</p>
            </a></li>
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Branding (4)</p>
            </a></li>
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Business Model (4)</p>
            </a></li>
          <li><a href="#">
              <p><span><img src="<?=l()?>assets/front_assets/images/icons/category/1.svg"></span> Marketing & Sales (10)</p>
            </a></li>
        </ul>

        <p>At the end of the program me, all participants will present their business ideas to a panel of judges (VCs and Angel Investors) for final feedback and the possibility of financing. Up to 3 business ideas will be rewarded with a free 1-year trade license and the winning idea will receive up to <strong> USD 25,000</strong> in cash. <strong>Additionally, we will provide a 20% discount on the company setup fees for all accelerator participants.</strong></p>

      </div>

    </div>
  </section>

  <section class="criteriaSec hding-1 para bg-white pad-sec">
    <div class="container">
      <div class="criteriaHead">
        <h1><?= html_entity_decode($con7['cms_page_title']) ?></h1>
        <div class="space"><br><br></div>
        <div style="padding-bottom: 75px !important;"><?= html_entity_decode($con7['cms_page_content']) ?></div>
        <h6><?= html_entity_decode($con10['cms_page_content']) ?></h6>
      </div>
      <div class="space"><br><br></div>

      <div class="row criteriaContent align-items-center">
        <div class="col-md-3">
          <p class="text-right"><?= html_entity_decode($con9['cms_page_content']) ?></p>
          <div class="space"><bR><br><br><Br><Br></div>
          <p class="text-left"><?= html_entity_decode($con8['cms_page_content']) ?></p>
        </div>

        <div class="col-md-6">
          <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con7['cms_page_image'] ?>"></span>
        </div>

        <div class="col-md-3">
          <p class="text-left"> <?= html_entity_decode($con11['cms_page_content']) ?></p>
          <div class="space"><bR><br><br><Br><Br></div>
          <p class="text-right"> <?= html_entity_decode($con12['cms_page_content']) ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="contactSec pad-sec hding-1 para">
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
    <?= html_entity_decode($con13['cms_page_content']) ?>
    </div>
  </section>

  <? $this->load->view('widgets/_clients'); ?>

</div>