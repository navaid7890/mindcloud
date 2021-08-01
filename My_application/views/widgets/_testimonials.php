<section class="testiSec hding-2 para bg-white pad-sec">
    <div class="container">
        <ul class="testi-slider">

            <?php foreach ($testimonial as $key => $value) : ?>
                <li>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="t-profile">
                                <div class="t-image">
                                    <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $value['testimonials_image'] ?>">
                                </div>
                                <div class="space"><br><br><br></div>

                                <h5><?= $value['testimonials_title'] ?><span><?= $value['testimonials_position'] ?></span></h5>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="t-content">
                                <h2><?= $value['testimonials_heading'] ?></h2>
                                <div class="space"><br><br></div>
                                <div class="disp-cont" style="display:block;">
                                    <p>
                                        <?= short_text($value['testimonials_desc'], 130) ?>
                                    </p>
                                </div>
                                <div class="more-cont" style="display:none;">
                                    <?= html_entity_decode($value['testimonials_desc']) ?>
                                </div>
                                <a href="#" class="more">more</a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>

<script>
    // $( document ).ready(function() {    
    //     $(".two").hide();
    // $(".dt").click(function(){
    //   $(".one").hide();
    //   $(".two").show();
    // });
    // });

    $(".slick-next").click(function(e) {
        $(".disp-cont").toggle();
    });

    $('.more').click(function(e) {
        $(".disp-cont").toggle();
        e.preventDefault();
        $(this).text(function(i, t) {
            return t == 'close' ? 'more' : 'close';
        }).prev('.more-cont').slideToggle()
    });
</script>