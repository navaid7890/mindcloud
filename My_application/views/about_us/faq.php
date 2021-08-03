<style>
   .joinSec {
      background-image: linear-gradient(to left, rgba(8, 74, 147, 0.8), rgba(8, 74, 147, 0.8)), url(<?= g('db.admin.bucketimg') . "cms_image/" . $cont['cms_page_image'] ?> !important);
      text-align: center;
      padding: 80px 0 90px;
      background-size: cover;
      background-position: center center;
   }
</style>

<? $this->load->view('widgets/inner_banner'); ?>

<section class="faqSec hding-2 para">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <h2>All FAQs</h2>
         </div>

         <div class="col-md-5">
            <div class="search-form">
               <form action="" method="GET">
                  <div class="fld-search">
                     <input type="text" placeholder="Search" name="search">
                     <button type="submit"><i class="fal fa-search"></i></button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="space"><br><br><br><br></div>

      <div class="faq-tabBox">

         <div class="faq-tab-head">
            <ul class="">
               <li data-targetit="box-1" class="current"><a href="#">General</a></li>
               <li data-targetit="box-2"><a href="#">Learning Journey</a></li>
               <li data-targetit="box-3"><a href="#">Experts Tutorials</a></li>
               <!-- <li data-targetit="box-4"><a href="#">Consult with an Expert</a></li> -->
            </ul>
         </div>

         <div class="box-1 showfirst" style="">
            <div class="faq-tab-content hding-3">
               <h3>General</h3>
               <div class="space"><br><br></div>
               <ul class="colasebar">
                  <!-- General -->
                  <? if (isset($gene) and array_filled($gene)) : ?>
                     <? foreach ($gene as $key => $value) : ?>
                        <li>
                           <div class="faqBar">
                              <span> <?= $value['faq_question'] ?> <i class="fal fa-angle-down"></i></span>
                              <div class="expandable">
                                 <?= html_entity_decode($value['faq_answer']) ?>
                              </div>
                           </div>
                        </li>
                     <? endforeach; ?>
                  <? endif; ?>
                  <!-- Learning Journey -->
                  <? if (isset($le) and array_filled($le)) : ?>
                     <? foreach ($le as $key => $value) : ?>
                        <li>
                           <div class="faqBar">
                              <span> <?= $value['faq_question'] ?> <i class="fal fa-angle-down"></i></span>
                              <div class="expandable">
                                 <?= html_entity_decode($value['faq_answer']) ?>
                              </div>
                           </div>
                        </li>
                     <? endforeach; ?>
                  <? endif; ?>
                  <!-- Experts Tutorials -->
                  <? if (isset($ex) and array_filled($ex)) : ?>
                     <? foreach ($ex as $key => $value) : ?>
                        <li>
                           <div class="faqBar">
                              <span> <?= $value['faq_question'] ?> <i class="fal fa-angle-down"></i></span>
                              <div class="expandable">
                                 <?= html_entity_decode($value['faq_answer']) ?>
                              </div>
                           </div>
                        </li>
                     <? endforeach; ?>
                  <? endif; ?>
               </ul>
            </div>
         </div>

         <div class="box-2" style="">
            <div class="faq-tab-content hding-3">
               <h3>Learning Journey</h3>
               <div class="space"><br><br></div>
               <ul class="colasebar">
                  <? if (isset($le) and array_filled($le)) : ?>
                     <? foreach ($le as $key => $value) : ?>
                        <li>
                           <div class="faqBar">
                              <span> <?= $value['faq_question'] ?> <i class="fal fa-angle-down"></i></span>
                              <div class="expandable">
                                 <?= html_entity_decode($value['faq_answer']) ?>
                              </div>
                           </div>
                        </li>
                     <? endforeach; ?>
                  <? endif; ?>
               </ul>
            </div>
         </div>

         <div class="box-3" style="">
            <div class="faq-tab-content hding-3">
               <h3>Experts Tutorials</h3>
               <div class="space"><br><br></div>
               <ul class="colasebar">
                  <? if (isset($ex) and array_filled($ex)) : ?>
                     <? foreach ($ex as $key => $value) : ?>
                        <li>
                           <div class="faqBar">
                              <span> <?= $value['faq_question'] ?> <i class="fal fa-angle-down"></i></span>
                              <div class="expandable">
                                 <?= html_entity_decode($value['faq_answer']) ?>
                              </div>
                           </div>
                        </li>
                     <? endforeach; ?>
                  <? endif; ?>
               </ul>
            </div>
         </div>

         <!-- <div class="box-4" style="">
                  <div class="faq-tab-content hding-3">
                     <h3>Consult with an Expert</h3>
                     <div class="space"><br><br></div>
         <ul class="colasebar">   
         <? // if (isset($cons) and array_filled($cons)) : 
         ?>
         <? // foreach ($cons as $key => $value) : 
         ?>
         
                  <li>
                     <div class="faqBar">
                        <span> <? //= $value['faq_question'] 
                                 ?>  <i class="fal fa-angle-down"></i></span>
                        <div class="expandable">
                        <? //= html_entity_decode($value['faq_answer']) 
                        ?>
                        </div>
                     </div>
                  </li>
          <? // endforeach; 
            ?>
          <? // endif; 
            ?>
         </ul>
                  </div>
                </div> -->



      </div>
   </div>
</section>


<section class="joinSec hding-2 para">
   <div class="joinContent">
      <?= html_entity_decode($cont1['cms_page_title']) ?>
      <div class="space"><br></div>
      <?= html_entity_decode($cont1['cms_page_content']) ?>
      <div class="space"><br><br></div>
      <a href="<?=l('contact_us')?>" class="btn-theme btn-hover">Contact Us <span></span></a>
   </div>
</section>