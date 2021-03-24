<style>
.joinSec {
    background-image: linear-gradient(to left, rgba(8, 74, 147, 0.8), rgba(8, 74, 147, 0.8)), url(<?=get_image($cont15['cms_page_image'],$cont15['cms_page_image_path'])?>);
}
</style>
<div class="mainBanner home-banner hding-1 hding-2" style="background-image:url('<?=i('')?>banner/2.png');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <div>
                    <h1>Step into your Vision</h1>
                    <div class="space"><br><br></div>

                    <ul>
                    <li>Advance your Business Skills</li>
                    <li>Build your Investment Deck</li>
                    <li>Consult with Experts</li>
                    </ul>
                    <div class="space"><br><br></div>

                    <a href="#" class="btn-links" data-fancybox="media"><i class="fas fa-play-circle"></i> watch how it works</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="form-card">
                    <div>
                    <h2>Get <strong>Started</strong></h2>
                    <div class="space"><br></div>
                    <form action="">
                        <div class="fld-input">
                            <input type="email" placeholder="Enter email address" required="">
                        </div>
                        <div class="space"><br><br></div>
                        <div class="fld-html">
                            <p>Gain <strong> 7-day free </strong> limited access to Learning Journey and Experts Tutorials.</p>
                        </div>
                        <div class="space"><br></div>
                        <div class="fld-btn">
                            <input type="submit" value="Proceed to Free Trial">
                        </div>
                    </form>
                    </div>   
                </div>
            </div>
        </div>
        </div>
    </div>

    <section class="iconSec hding-3 para pad-sec">
        <div class="container">
        <div class="row">
        <div class="col-md-4">
                <div class="iconBox">
                    <span><img src="<?=get_image($cont1['cms_page_image'],$cont1['cms_page_image_path'])?>"></span>
                    <div class="space"><br></div>
                    <h3 class="home-h3"><?=$cont1['cms_page_title']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($cont1['cms_page_content'])?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="iconBox">
                    <span><img src="<?=get_image($cont2['cms_page_image'],$cont2['cms_page_image_path'])?>"></span>
                    <div class="space"><br></div>
                    <h3 class="home-h3"><?=$cont2['cms_page_title']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($cont2['cms_page_content'])?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="iconBox">
                    <span><img src="<?=get_image($cont3['cms_page_image'],$cont3['cms_page_image_path'])?>"></span>
                    <div class="space"><br></div>
                    <h3 class="home-h3"><?=$cont3['cms_page_title']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($cont3['cms_page_content'])?> 
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="readySec para hding-1">
        <div class="container">
        <div class="redyContent text-center">
            <h1><?=$cont4['cms_page_title']?></h1>
            <?=html_entity_decode($cont4['cms_page_content'])?>
            <div class="space"><br><br></div> 
            <a href="javascript:void(0)" class="btn-theme btn-hover">About Mind Cloud Tribe <span></span></a>
        </div>
        </div>
    </section>


    <section class="whoSec hding-2 para pad-sec">
        <div class="container">

        <div class="expertSec hding-1 para">
            <div class="expertHead">
                <h1><?=$cont5['cms_page_title']?></strong></h1>
            </div>
            <div class="space"><br><br></div>

            <div class="row">
                <div class="col-md-6">
                    <?=html_entity_decode($cont5['cms_page_content'])?>
                </div>
                <div class="col-md-6">
                    <?=html_entity_decode($cont6['cms_page_content'])?>
                </div>
            </div>
        </div>
        
        <div class="whoHead">
            <h2>Most watched  <strong> Tutorials</strong></h2>
            <div class="space"><br></div>
        </div>
        <div class="space"><br><br><br></div>

        <ul class="who-list tut-list pb-100">
        <li>
                <div class="vid-box">
                    <a href="https://www.youtube.com/watch?v=XIMLoLxmTDw" data-fancybox="media">
                    <div class="video-box">
                        <img src="<?=i('')?>whoSec/1.png">
                        <span><i class="fas fa-play"></i>  <p>Preview Course</p> </span>
                    </div>
                    </a>
                    <a href="#" class="cate-tag">business model</a>

                    <div class="vid-content">
                    <h4>Building the Right<br> Team</h4>
                    <div class="row align-items-center pt-70">
                        <div class="col-md-9">
                            <ul class="rating">
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-l.svg"></li>
                            </ul>
                        </div>

                        <div class="col-md-3 text-right">
                            <h6>$15</h6>      
                        </div>
                    </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="vid-box">
                    <a href="https://www.youtube.com/watch?v=XIMLoLxmTDw" data-fancybox="media">
                    <div class="video-box">
                        <img src="<?=i('')?>whoSec/2.png">
                        <span><i class="fas fa-play"></i>  <p>Preview Course</p> </span>
                    </div>
                    </a>
                    <a href="#" class="cate-tag">business model</a>

                    <div class="vid-content">
                    <h4>Business Protection for Entrepreneurs </h4>
                    <div class="row align-items-center pt-70">
                        <div class="col-md-9">
                            <ul class="rating">
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-l.svg"></li>
                            </ul>
                        </div>

                        <div class="col-md-3 text-right">
                            <h6>$15</h6>      
                        </div>
                    </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="vid-box">
                    <a href="https://www.youtube.com/watch?v=XIMLoLxmTDw" data-fancybox="media">
                    <div class="video-box">
                        <img src="<?=i('')?>whoSec/3.png">
                        <span><i class="fas fa-play"></i> <p>Preview Course</p></span>
                    </div>
                    </a>
                    <a href="#" class="cate-tag">business model</a>

                    <div class="vid-content">
                    <h4>Basics of Brands and Branding</h4>

                    <div class="row align-items-center pt-70">
                        <div class="col-md-9">
                            <ul class="rating">
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-d.svg"></li>
                                <li><img src="<?=i('')?>icons/rat-l.svg"></li>
                            </ul>
                        </div>

                        <div class="col-md-3 text-right">
                            <h6>$15</h6>      
                        </div>
                    </div>
                    </div>
                </div>
            </li>
        </ul>
        
        <div class="mostcateSec">
            <div class="mostHead">
                <h2>Most Popular <strong> Categories </strong></h2>
            </div>
            <div class="space"><br><br></div>
            
            <ul class="cate-list">
                <li><p><span><img src="<?=i('')?>icons/category/1.svg"></span> Business Model (4)</p></li>
                <li><p><span><img src="<?=i('')?>icons/category/1.svg"></span> Digital marketing (12)</p></li>
                <li><p><span><img src="<?=i('')?>icons/category/1.svg"></span> Finance and Valuation (6)</p></li>
                <li><p><span><img src="<?=i('')?>icons/category/1.svg"></span> Leadership (9)</p></li>
                <li><p><span><img src="<?=i('')?>icons/category/1.svg"></span> Human resources (14)</p></li>
                <li><p><span><img src="<?=i('')?>icons/category/1.svg"></span> Customer Acquisition (12)</p></li>
                <li><p><span><img src="<?=i('')?>icons/category/1.svg"></span> Marketing & Sales (10)</p></li>
                <li><p><span><img src="<?=i('')?>icons/category/1.svg"></span> Branding (4)</p></li>
                <li><p><span><img src="<?=i('')?>icons/category/1.svg"></span> Business Model (4)</p></li>
            </ul>
            
            <a href="#" class="btn-theme btn-hover">View all Tutorials <span></span></a>
        </div>
        </div>
    </section>  

    <section class="lrnjSec">
        <div class="mainBanner hding-1 para">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-8 col-md-12">
                    <div>
                    <h1><?=$cont7['cms_page_title']?></h1>
                    <div class="space"><br><br><br><br></div>

                    <?=html_entity_decode($cont7['cms_page_content'])?> 
                    <div class="space"><br><br></div>

                    <a href="#" class="btn-theme btn-hover">Start your Free Trial <span></span></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="video-card">
                    <a href="<?=get_image($cont8['tutorial_video'],$cont8['tutorial_video_path'])?>" data-fancybox="media">
                        <div class="video-box">
                            <img src="<?=get_image($cont8['cms_page_image'],$cont8['cms_page_image_path'])?>" />
                            <span><i class="fas fa-play"></i></span>
                        </div>
                    </a>   
                    <div class="video-content">
                        <div>
                            <!-- <span>2h 6min</span>  -->
                            <?=html_entity_decode($cont8['cms_page_content'])?> 
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="learSec bg-white hding-2 pad-sec">
        <div class="container">
        <div class="learnHead"> 
            <h2>Learning Journey <strong> Content </strong></h2>
        </div>
        <div class="space"><br><br></div>

        <ul class="learn-process">
        <li>
                <div class="learnContentBox">
                    <i><img src="<?=get_image($learning['0']['learning_image'],$learning['0']['learning_image_path'])?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['0']['learning_name']?></h3>
                </div>
                <div class="space"><br><br><br></div>
                
                <div class="learnContentBox arrow-position">
                    <i><img src="<?=get_image($learning['1']['learning_image'],$learning['1']['learning_image_path'])?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['1']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['1']['learning_desc'])?>
                </div>
            </li>

            <li>
                <div class="learnContentBox">
                    <i><img src="<?=get_image($learning['2']['learning_image'],$learning['2']['learning_image_path'])?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['2']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['2']['learning_desc'])?>
                </div>
            </li>

            <li>
                <div class="learnContentBox">
                    <i><img src="<?=get_image($learning['3']['learning_image'],$learning['3']['learning_image_path'])?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['3']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['3']['learning_desc'])?>
                </div>
            </li>

            <li>
                <div class="learnContentBox">
                    <i><img src="<?=get_image($learning['4']['learning_image'],$learning['4']['learning_image_path'])?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['4']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['4']['learning_desc'])?>
                </div>
                <div class="space"><br><br><br></div>

                <div class="learnContentBox arrow-hide">
                    <i><img src="<?=get_image($learning['5']['learning_image'],$learning['5']['learning_image_path'])?>"></i>
                    <div class="space"><br></div>
                    <h3><?=$learning['5']['learning_name']?></h3>
                    <div class="space"><br></div>
                    <?=html_entity_decode($learning['5']['learning_desc'])?>
                </div>
            </li>
        </ul>
        </div>
    </section>

    <section class="whoSec bg-white hding-2 para">
        <div class="container">
        <div class="whoHead">
            <h2><?=$cont9['cms_page_title']?></h2>
            <div class="space"><br></div>
            <?=html_entity_decode($cont9['cms_page_content'])?>
        </div>
        <div class="space"><br><br><br></div>

        <ul class="who-list">
            <li>
                <div class="vid-box">
                    <a href="<?=get_image($cont10['tutorial_video'],$cont10['tutorial_video_path'])?>" data-fancybox="media">
                    <div class="video-box">
                        <img src="<?=get_image($cont10['cms_page_image'],$cont10['cms_page_image_path'])?>">
                        <span><i class="fas fa-play"></i></span>
                    </div>
                    </a>

                    <div class="vid-content">
                    <h4><?=$cont10['cms_page_title']?></h4>
                    <?=html_entity_decode($cont10['cms_page_content'])?>
                    </div>
                </div>
            </li>

            <li>
                <div class="vid-box">
                    <a href="<?=get_image($cont11['tutorial_video'],$cont11['tutorial_video_path'])?>" data-fancybox="media">
                    <div class="video-box">
                        <img src="<?=get_image($cont11['cms_page_image'],$cont11['cms_page_image_path'])?>">
                        <span><i class="fas fa-play"></i></span>
                    </div>
                    </a>

                    <div class="vid-content">
                    <h4><?=$cont11['cms_page_title']?></h4>
                    <?=html_entity_decode($cont11['cms_page_content'])?>
                    </div>
                </div>
            </li>

            <li>
                <div class="vid-box">
                    <a href="<?=get_image($cont12['tutorial_video'],$cont12['tutorial_video_path'])?>" data-fancybox="media">
                    <div class="video-box">
                        <img src="<?=get_image($cont12['cms_page_image'],$cont12['cms_page_image_path'])?>">
                        <span><i class="fas fa-play"></i></span>
                    </div>
                    </a>

                    <div class="vid-content">
                    <h4><?=$cont12['cms_page_title']?></h4>
                    <?=html_entity_decode($cont12['cms_page_content'])?>
                    </div>
                </div>
            </li>
        </ul>
        </div>
    </section>  

    <section class="whyjoinSec hding-1 para">
        <div class="container">
        <div class="whyHead">
            <h1><?=$cont13['cms_page_title']?></h1>
        </div>
        <div class="space"><br><br></div>
        <div class="row">
            <div class="col-md-6">
                <?=html_entity_decode($cont13['cms_page_content'])?>
            </div>

            <div class="col-md-6">
                <?=html_entity_decode($cont14['cms_page_content'])?>
            </div>
        </div>
        <div class="space"><br><br><br><br></div>

        <a href="<?=get_image($cont13['tutorial_video'],$cont13['tutorial_video_path'])?>" data-fancybox="media">
            <div class="video-box">
                <img src="<?=get_image($cont13['cms_page_image'],$cont13['cms_page_image_path'])?>" />
                <span><i class="fas fa-play"></i></span>
            </div>
        </a>  
        </div>
    </section>

    <section class="joinSec hding-2 para">
        <div class="joinContent">
        <h2><?=$cont15['cms_page_title']?></h2>
        <div class="space"><br></div>
            <?=html_entity_decode($cont15['cms_page_content'])?>
        <div class="space"><br><br></div>
        <a href="#" class="btn-theme btn-hover">Start Free Trial <span></span></a>
        </div>
    </section>

    <section class="testiSec hding-2 para bg-white pad-sec">
        <div class="container">
        <ul class="testi-slider">
        
            <?php foreach ($testimonial as $key => $value): ?>
                <li>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="t-profile">
                                <div class="t-image">
                                    <img src="<?=get_image($value['testimonials_image'],$value['testimonials_image_path'])?>">
                                </div>
                                <div class="space"><br><br><br></div>

                                <h5><?=$value['testimonials_title']?></h5>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="t-content">
                                <h2><?=$value['testimonials_heading']?></h2>
                                <div class="space"><br><br><br></div>
                                <div class="space"><br><br></div>

                                <?=html_entity_decode($value['testimonials_desc'])?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach ?> 
        </ul>
        </div>
    </section>


    <section class="clientSec hding-2 pad-sec">
        <div class="container">
        <div class="c1">
            <div class="clientHead">
                <h2>Our <strong>Corporate Clients</strong></h2>
            </div>
            <div class="space"><br><br></div>
            <ul class="client-logo">
                <?php foreach ($client as $key => $value): ?>
                    <li><a href="#"><img src="<?=get_image($value['client_image'],$value['client_image_path'])?>" alt=""></a></li> 
                <?php endforeach ?> 
            </ul>
        </div>

        <div class="c2">
            <div class="clientHead">
                <h2>Our <strong>Strategic Partners</strong></h2>
            </div>
            <div class="space"><br><br></div>
            <ul class="client-logo">
                <li><a href="#"><img src="<?=i('')?>client/3.png" alt=""></a></li>
                <li><a href="#"><img src="<?=i('')?>client/4.png" alt=""></a></li>
            </ul>
        </div>
        </div>
    </section>

    <section class="doxSec hding-3 para pad-sec bg-white">
        <div class="container">
        <div class="row">
        <div class="col-md-6">
                <div class="dox-content">
                    <h3>Consult with Experts</h3>
                    <div class="space"><br><br></div>
                    <p>Feeling stuck? Book one-on-one video<br> meetings with our panel of top business<br> Experts.</p>
                    <div class="space"><br><br></div>
                    <a href="#" class="btn-theme btn-hover">Book a Consultation<span></span></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dox-content">
                    <h3>Join our Tribe of Experts</h3>
                    <div class="space"><br><br></div>
                    <p>Join our tribe as an Expert if you love to share <br>your knowledge. We will connect you with an<br> audience eager for your expertise.</p>
                    <div class="space"><br><br></div>
                    <a href="#" class="btn-theme btn-hover">Join as an Expert<span></span></a>
                </div>
            </div>
        </div>
        </div>
    </section>