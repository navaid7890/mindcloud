<section class="learSec bg-white hding-2 pad-sec">
    <div class="container">
        <div class="learnHead"> 
            <h2>Learning Journey <strong> Content </strong></h2>
        </div>
        <div class="space"><br><br></div>

        <ul class="learn-process">
            <li><?//= g('db.admin.bucketimg') . "cms_image/" . $learning['0']['learning_image'] ?>
                <div class="learnContentBox">
                    <i><img src="<?= g('db.admin.bucketimg') . $learning[0]['learning_image'] ?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['0']['learning_name']?></h3>
                </div>
                <div class="space"><br><br><br></div>
                
                <div class="learnContentBox arrow-position">
                    <i><img src="<?= g('db.admin.bucketimg') . $learning[1]['learning_image'] ?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['1']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['1']['learning_desc'])?>
                </div>
            </li>

            <li>
                <div class="learnContentBox">
                    <i><img src="<?= g('db.admin.bucketimg') . $learning[2]['learning_image'] ?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['2']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['2']['learning_desc'])?>
                </div>
            </li>

            <li>
                <div class="learnContentBox">
                    <i><img src="<?= g('db.admin.bucketimg') . $learning[3]['learning_image'] ?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['3']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['3']['learning_desc'])?>
                </div>
            </li>

            <li>
                <div class="learnContentBox">
                    <i><img src="<?= g('db.admin.bucketimg') . $learning[4]['learning_image'] ?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['4']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['4']['learning_desc'])?>
                </div>
                <div class="space"><br><br><br></div>

                <div class="learnContentBox arrow-hide">
                    <i><img src="<?= g('db.admin.bucketimg') . $learning[5]['learning_image'] ?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['5']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['5']['learning_desc'])?>
                </div>
            </li>
        </ul>
    </div>
</section>