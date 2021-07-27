<style>
.InnerBanner {
    background-image: url(<?= g('db.admin.bucketimg') . "cms_image/" . $con1['cms_page_image'] ?>);
}

.stepContent strong {
      font-weight: 700;
   }
</style>
<div class="becomeExpert-page">
            
            <section class="InnerBanner hding-1 para">
               <div class="container">
                  <div class="bannerContent">
                     <h1><?= html_entity_decode($con1['cms_page_title']) ?></h1>  
                     <div class="space"><br><br></div>
                     <?= html_entity_decode($con1['cms_page_content']) ?>
                  </div>   
               </div>   
            </section>
   
           <section class="stepSec hding-1 hding-2 para bg-white pt-100">
             <div class="container">
               <h1>Join us with easy <strong>Four Steps</strong></h1>
               <div class="space"><br><br><bR><br></div>
   
               <ul>
                 <li>
                   <div class="stepBox">
                     <div class="stepContent">
                       <h2><?= html_entity_decode($con2['cms_page_title']) ?></h2>
                       <div class="space"><br></div>
                       <?= html_entity_decode($con2['cms_page_content']) ?>
                     </div>
                   </div>
                 </li>
   
                 <li>
                   <div class="stepBox">
                     <div class="stepContent">
                       <h2><?= html_entity_decode($con3['cms_page_title']) ?></h2>
                       <div class="space"><br></div>
   
                       <?= html_entity_decode($con3['cms_page_content']) ?>
                     </div>
                   </div>
                 </li>
   
                 <li>
                   <div class="stepBox">
                     <div class="stepContent">
                       <h2><?= html_entity_decode($con4['cms_page_title']) ?></h2>
                       <div class="space"><br></div>
   
                       <?= html_entity_decode($con4['cms_page_content']) ?>
                     </div>
                   </div>
                 </li>
   
                 <li>
                   <div class="stepBox">
                     <div class="stepContent">
                       <h2><?= html_entity_decode($con5['cms_page_title']) ?></h2>
                       <div class="space"><br></div>
   
                       <?= html_entity_decode($con5['cms_page_content']) ?>
                     </div>
                   </div>
                 </li>
               </ul>
               <div class="space"><bR><br><br></div>
   
               <a href="#" class="btn-theme btn-hover">Download Expert Agreement</a>
               
   
             </div>
           </section>
   
           <? $this->load->view('widgets/_clients'); ?>
         
         </div>
