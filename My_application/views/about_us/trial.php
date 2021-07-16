<style>
.trial-page .t-profile h5, .trial-page .t-profile h5>span {
color: #5C677D;

}
.trial-page .t-content h2 {
    color: #5C677D;
}
.trial-page .t-content p {
    color: #5C677D;
    font-style: italic;
    font-weight: 500;
    line-height: 34px;
}

</style>

    <div class="trial-page"> 
    
      <div class="mainBanner home-banner hding-2 para" style="background-image:url('assets/images/banner/2.png');">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-12 col-md-12">
                  <div>
                     <h2>Select your learning journey for your <strong> 1-week free trial</strong>. Learn anywhere, cancel anytime. </h2>
                     <div class="space"><br><br></div>

                     <div class="t-bannerBox text-center">
                        <div class="bannerHead">
                            <h2>Annually</h2>
                            <div class="space"><br></div>
                            <p>One week free trial,<br> then $20/month</p>
                            <div class="space"><br><br></div>
                            <a href="#" data-fancybox data-src="#trial-popup" class="btn-hover">Subscribe Now <span></span></a>
                        </div>
                        
                        <div class="banner-down">
                            <ul class="t-banner-list">
                                <li>Learn on your mobile or computer.</li>
                                <li>Access to Mind Cloud Experts tutorials.</li> 
                                <li>Personalized Course Recommendations. </li>
                                <li>Earn Certification at completion. </li>
                                <li>Access to Expert-led business tools. </li>
                                <li>Practice with exercise files.</li>
                            </ul>
                        </div>
                    
                        <div class="space"><br><br></div><br>
                        <p>Are you looking to train your team? <a href="#">Learn more</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

    
      <section class="faqSec trial-faq-sec hding-2 para">
         <div class="container">
            <h2>FAQs</h2>
            
            <div class="space"><br><br></div>

            <div class="faq-tabBox">
            <ul class="colasebar">
            <? if (isset($faq) and array_filled($faq)) : ?>
            <? foreach ($faq as $key => $value) : ?>
                <li>
                  <div class="faqBar">
                     <span><?= $value['faq_question'] ?>  <i class="fal fa-angle-down"></i></span>
                     <div class="expandable">
                     <?= html_entity_decode($value['faq_answer']) ?>
                     </div>
                  </div>
               </li>
               <? endforeach; ?>
         <? endif; ?>


            </ul>

            <a href="<?=l('faq')?>">See more</a>
            </div>
         </div>
      </section>

      <? $this->load->view('widgets/_testimonials'); ?>

      <? $this->load->view('widgets/_clients'); ?>

      </div>

   
