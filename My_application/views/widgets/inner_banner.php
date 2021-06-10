<style>
.inner p
{
color: #fff;
}


</style>

<div class="mainBanner home-banner para inner" style="background-image:url('<?=get_image($contd['cms_page_image'],$contd['cms_page_image_path'])?>');">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12 col-md-12">
                  <div>
                     <h1><?=$inner['inner_banner_title']?></h1>
                     <div class="space"><br><br></div>

                     <div class="row">
                        <div class="col-lg-6 col-md-12">
                        <?=html_entity_decode($contd['cms_page_title'])?>
                        </div>
                     </div>
                     <div class="space"><br></div>
                     <?=html_entity_decode($contd['cms_page_content'])?>
                     <div class="space"><br><br></div>

                     <a href="#" class="btn-theme btn-hover">Contact Us <span></span></a>
                  </div>
               </div>


            </div>
         </div>
      </div>



