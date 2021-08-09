<script src='https://cdnjs.cloudflare.com/ajax/libs/Readmore.js/2.0.2/readmore.min.js'></script>
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
                                <!-- <div class="disp-cont" style="display:block;">
                                    <p>
                                        <?//= short_text($value['testimonials_desc'], 130) ?>
                                    </p>
                                </div> -->
                                <article>
                                    <?= html_entity_decode($value['testimonials_desc']) ?>
                                </article>
                                <!-- <a href="#" class="more">more</a> -->
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

    // $(".slick-next").click(function(e) {
    //     $(".disp-cont").toggle();
    // });

    // $('article').readmore({ speed: 75, lessLink: '<a href="#">Read less</a>' });



    $('article').readmore({
            speed: 100,
            collapsedHeight: 180,
            heightMargin: 16,
            moreLink: '<a href="#" class="">Read More</a>',
            lessLink: '<a href="#" class="">Read Less</a>',
            embedCSS: true,
            blockCSS: 'display: block; width: 100%;',
            startOpen: false,
            
            // callbacks
            blockProcessed: function() {},
            beforeToggle: function(){
            },
            afterToggle: function(){}
    });
    
    // $('.more').click(function(e) {
    //     $(".disp-cont").toggle();
    //     e.preventDefault();
    //     $(this).text(function(i, t) {
    //         return t == 'close' ? 'more' : 'close';
    //     }).prev('.more-cont').slideToggle()
    // });




</script>