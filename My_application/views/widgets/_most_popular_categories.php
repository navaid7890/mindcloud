<div class="mostcateSec">
    <div class="mostHead">
        <h2>Most Popular <strong> Categories </strong></h2>
    </div>
    <div class="space"><br><br></div>
    
    <ul class="cate-list">
        <? foreach ( $category as $value ) : ?>
            <li><p><span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $value['category_image'] ?>"></span> <?= $value['category_name'] ?> (4)</p></li>
        <? endforeach ?>
    </ul>
    
    <a href="<?= l('expert-tutorial') ?>" class="btn-theme btn-hover">View all Tutorials <span></span></a>
</div>