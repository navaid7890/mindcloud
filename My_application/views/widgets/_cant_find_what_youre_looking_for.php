<!-- <section class="joinSec hding-2 para">
    <div class="joinContent">
    <h2><?//=$cont15['cms_page_title']?></h2>
    <div class="space"><br></div>
        <?//=html_entity_decode($cont15['cms_page_content'])?>
    <div class="space"><br><br></div>
    <a href="#" class="btn-theme btn-hover">Start Free Trial <span></span></a>
    </div>
</section> -->

<style>
.joinContent strong {
    font-weight: 700;
}
.joinSec {
   background-image: linear-gradient(to left, rgba(8, 74, 147, 0.8), rgba(8, 74, 147, 0.8)), url(<?= g('db.admin.bucketimg') . "cms_image/" . $cont3['cms_page_image'] ?>);
   }
</style>
<section class="joinSec hding-2 para">
        <div class="joinContent">
            <?= html_entity_decode($cont3['cms_page_title'])?>
            <div class="space"><br></div>
            <p><?=html_entity_decode($cont3['cms_page_content'])?></p>
            <div class="space"><br><br></div>
            <a href="#" class="btn-theme btn-hover">Post your Requirement <span></span></a>
        </div>
    </section>