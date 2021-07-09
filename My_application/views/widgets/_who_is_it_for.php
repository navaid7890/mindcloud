<style>
.whoHead strong {
    font-weight: 700;
}
.vid-content h4 p {
    font-size: 20px;
    font-weight: 700;
    color: #33415C;
}
</style>
<section class="whoSec bg-white hding-2 para">
    <div class="container">
        <div class="whoHead">
            <h2><?=html_entity_decode($cont9['cms_page_title'])?></h2>
            <div class="space"><br></div>
            <?=html_entity_decode($cont9['cms_page_content'])?>
        </div>
        <div class="space"><br><br><br></div>

        <ul class="who-list">
            <li>
                <div class="vid-box">
                    <a href="<?= g('db.admin.bucket') . $cont10['tutorial_video'] ?>" data-fancybox="media">
                    <div class="video-box">
                        <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $cont10['cms_page_image'] ?>">
                        <span><i class="fas fa-play"></i></span>
                    </div>
                    </a>

                    <div class="vid-content">
                    <h4><?=html_entity_decode($cont10['cms_page_title'])?></h4>
                    <?=html_entity_decode($cont10['cms_page_content'])?>
                    </div>
                </div>
            </li>

            <li>
                <div class="vid-box">
                    <a href="<?= g('db.admin.bucket') . $cont11['tutorial_video'] ?>" data-fancybox="media">
                    <div class="video-box">
                        <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $cont11['cms_page_image'] ?>">
                        <span><i class="fas fa-play"></i></span>
                    </div>
                    </a>

                    <div class="vid-content">
                    <h4><?=html_entity_decode($cont11['cms_page_title'])?></h4>
                    <?=html_entity_decode($cont11['cms_page_content'])?>
                    </div>
                </div>
            </li>

            <li>
                <div class="vid-box">
                    <a href="<?= g('db.admin.bucket') . $cont12['tutorial_video'] ?>" data-fancybox="media">
                    <div class="video-box">
                        <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $cont12['cms_page_image'] ?>">
                        <span><i class="fas fa-play"></i></span>
                    </div>
                    </a>

                    <div class="vid-content">
                    <h4><?=html_entity_decode($cont12['cms_page_title'])?></h4>
                    <?=html_entity_decode($cont12['cms_page_content'])?>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>  