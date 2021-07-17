<div class="mostcateSec">
    <div class="mostHead">
        <h2>Most Popular <strong> Categories </strong></h2>
    </div>
    <div class="space"><br><br></div>
    
    <ul class="cate-list">
    <? if (isset($main_categories) and array_filled($main_categories)) : ?>
                              <? foreach ($main_categories as $key => $value) : ?>
                                 <?
                                 $a = $value['category_id'];

                                 ?>
        <li>        
            <p><span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $value['category_image'] ?>"></span> <?= $value['category_name'] ?> (<?= $value['tutorials'] ?>)</p>
        </li>
        <? endforeach; ?>
    <? endif; ?>
    </ul>
    
    <a href="<?= l('expert-tutorial') ?>" class="btn-theme btn-hover">View all Tutorials <span></span></a>
</div>