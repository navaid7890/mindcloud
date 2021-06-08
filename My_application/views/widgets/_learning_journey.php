<style>
    .mainBanner strong {
    font-weight: 700;
}
.mainBanner h1 {
    display: inline-block;
}
</style>
<section class="lrnjSec">
    <div class="mainBanner hding-1 para">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-8 col-md-12">
                    <div>
                    <h1><?=html_entity_decode($cont7['cms_page_title'])?></h1>
                    <div class="space"><br><br><br><br></div>

                    <?=html_entity_decode($cont7['cms_page_content'])?> 
                    <div class="space"><br><br></div>

                    <a href="<?= l('learning-journey') ?>" class="btn-theme btn-hover">Start your Learning Journey <span></span></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="video-card">
                    <a href="<?=get_image($cont8['tutorial_video'],$cont8['tutorial_video_path'])?>" data-fancybox="media">
                        <div class="video-box">
                            <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $cont8['cms_page_image'] ?>" />
                            <span><i class="fas fa-play"></i></span>
                        </div>
                    </a>   
                    <div class="video-content">
                        <div>
                            <span><?= $cont8['cms_page_duration'] ?></span> 
                            <?=html_entity_decode($cont8['cms_page_content'])?> 
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>