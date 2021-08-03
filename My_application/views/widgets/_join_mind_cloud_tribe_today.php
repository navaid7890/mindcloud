<style>
.joinContent strong {
    font-weight: 700;
}
</style>
<section class="joinSec hding-2 para">
    <div class="joinContent">
    <?=html_entity_decode($cont15['cms_page_title'])?>
    <div class="space"><br></div>
        <?=html_entity_decode($cont15['cms_page_content'])?>
    <div class="space"><br><br></div>

    <?if ($this->userid > 0) {
$usdata = $this->layout_data['user_data'];
}?>
 <? if($usdata['user_paid']==0){?>
    <a href="<?= l('expert-tutorial') ?>" class="btn-theme btn-hover">Start Free Trial <span></span></a>
        
    <? }?>
    </div>
</section>