<div class="row bg-light">
                <div class="col-md-3 col-xs-12 padding-0 navbar-sidebar">

                    <nav class="navbar navbar-expand-lg navbar-light dashboard-setting navbar-static-side">
                        <button class="navbar-toggler text-white mr-auto h4" type="button" data-toggle="collapse" data-target="#navbarDashboardContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <!-- <span class="navbar-toggler-icon bg-light"></span>  -->
                                <span class="pl-3 pr-3"><img src="<?=i('')?>dashboard-icons/icons8-user_menu_male.svg"></span>Dashboard
                            </button>


                        <div class="collapse navbar-collapse navi" id="navbarDashboardContent">
                            <ul class="navbar-nav dashboard-ul nav">
                                <li>
                                    <a href="<?=l('account-area/')?>"> <img src="<?=i('')?>dashboard-icons/icons8-user_menu_male.svg" /> Dashboard</a>
                                </li>
                                <li>
                                    <a href="<?=l('account-area/expert-tutorial')?>" class="active "> <img src="<?=i('')?>dashboard-icons/icons8-physics.svg" /> My Experts Tutorials</a>
                                </li>
                                <li>
                                    <a href="#0"> <img src="<?=i('')?>dashboard-icons/icons8-user_menu_male.svg" /> Consult with Experts</a>
                                </li>
                                <li>
                                    <a href="#0"> <img src="<?=i('')?>dashboard-icons/icons8-physics.svg" /> Advisory</a>
                                </li>

                                <li>
                                    <a href="#0"> <img src="<?=i('')?>dashboard-icons/icons8-user_menu_male.svg" /> My Learning Journey</a>
                                </li>
                                    <!-- <ul class="mt-4 inner-ul"> -->
                                        <li class="pl-4 last-li-items">
                                            <a href="my-startup.html"> <img src="<?=i('')?>dashboard-icons/icons8-rocket.svg" /> My Startup: App Monster</a>
                                        </li>
                                        <li class="pl-4 last-li-items">
                                            <a href="#0"> <img src="<?=i('')?>dashboard-icons/icons8-rocket.svg" /> New Startup</a>
                                        </li>
                                    <!-- </ul> -->
                                
                            </ul>

                        </div>
                    </nav>
                </div>
                <!-- end of Dashboard -->

                <!-- dashboard right material start here -->
                <div class="col-md-9 col-xs-12 padding-0 my-expert-page-mble">
                    <main class="mobile-screen-padding">

                        <div class="col-md-12 col-xs-12 mt-50">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 p-3 what-learn-zero-mble">
                                    <div class="fullwidth">
                                        <strong class="uppercase">What do you want to learn?</strong>
                                        <div class="card form-card mt-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search Expert Tutorials">
                                                <span class="input-group-addon"><i class="fa fa-search fa-lg fa-fw"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fullwidth mt-50">
                                        <strong class="uppercase">Select by Expert</strong>
                                        <div class="card form-card mt-10">
                                            <div class="input-group">
                                                <select id="selectoptions">
                                                    <option>All Experts</option>
                                                    <option>Some Experts</option>
                                                    <option>No Experts</option>
                                                </select>
                                                <span class="input-group-addon" for="selectoptions"><i class="fa fa-chevron-down fa-lg fa-fw"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                <?php if (isset($category) && array_filled($category)): ?> 

                                    <div class="fullwidth mt-50">
                                        <strong class="uppercase">Select by Category</strong>
                                        <div class="card cat-card mt-10">
                                            <ul class="categories-listing mt-20">
                                                <li><strong class="color-blue uppercase bold-font">All Categories</strong></li>
                                                
                                                <?php foreach ($category as $key => $value): ?>
                                                <?
                                                $category=$value['category_id'];     
                                               ?>

                                                    <li> <a href="<?=l('account-area/expert-tutorial')?>?cat=<?=$category?>">  <?=$value['category_name']?> (12) </a> </li> 

                                                <?php endforeach ?>

                                            </ul>
                                        </div>
                                    </div>

                                
                                <?php endif ?>

                                </div>
    
                                <div class="incard-phase col-md-8 pr-5 pl-5 pt-0 what-learn-zero-mble">
                                    <h4 class="">What to Learn next in <b>Experts Tutorials</b></h4>
                                    <div class="mt-20">

                                        
            <?php if (isset($tutorial) && array_filled($tutorial)): ?>
            <?php foreach ($tutorial as $key => $value): ?>

                <?if($key%2==0)
                {?>
                <div class="clearfix"></div>
                <?}?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="card ">
                                                <div class="thumb">
                                                    <img class="img-responsive" src="<?=get_image($value['course_image'],$value['course_image_path'])?>" alt="Experts Tutorials">
                                                    <div class="play-tutorial">
                                                        <a data-fancybox="media" href="<?=get_image($value['course_video'],$value['course_video_path'])?>"> <img src="<?=i('')?>icons8-play.svg"> </a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="cat-tag text-right">
                                                        <a href="#" class="btn btn-sm categ-tag"><?=$value['course_name']?> category_name</a>
                                                    </div>
                                                    <h3 class="card-title my-expert-card-title"><?=$value['course_name']?> </h3>
                                                    <div class="fullwidth row">
                                                        <div class="col-md-8" style="margin-top:4px;">
                                                            <div class="rating rating-star">
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="d-flex card-bottom-dp">
                                                            <img src="<?=i('')?>dp.png" width="30px">Kenneth Wong
                                                            <div class="icon-right-arrow">
                                                                <img src="<?=i('')?>icons8-right_arrow.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                           
            <?php endforeach ?>
          <?php endif ?>
    
                                        <div class="col-md-12 text-center">
                                            <a href="#0" class="link text-center mt-50"> See more Experts Tutorials </a>
                                        </div>
    
                                    </div>
                                </div>
    
                            </div>
                        </div>

                        <!-- modal body -->
                        <div id="id01" class="modal" style="z-index: 2;">
      
                            <form class="modal-content animate" action="/action_page.php" method="post">
                              <div class="">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                
                                    <video width="850" id="video" controls>
                                    
                                    </video> 
                                
                              </div>
                            </form>
                          </div>
                        <!-- modal body end -->
    
                        <section class="watch-popular-margin">
                            <!-- most watched tutorial -->
                            <div class="col-md-12">
                                <div class="col-md-12 col-xs-12 mb-20">
                                    <h1 class="two-weight medium my-expert-page-most-watched">Most watched <strong> Tutorials</strong></h1>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12">
                                            <div class="card ">
                                                <div class="thumb">
                                                    <img class="img-responsive" src="<?=i('')?>Image_shape-1.png" alt="Experts Tutorials">
                                                    <div class="play-tutorial" onclick="document.getElementById('id01').style.display='block'">
                                                        <a href="#0"> <img src="<?=i('')?>icons8-play.svg"> </a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="cat-tag text-right">
                                                        <a href="#" class="btn btn-sm categ-tag">Business Model</a>
                                                    </div>
                                                    <h3 class="card-title my-expert-card-title">Building the Right <br> Team</h3>
                                                    <div class="fullwidth row">
                                                        <div class="col-md-8" style="margin-top:4px;">
                                                            <div class="rating rating-star">
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="d-flex card-bottom-dp">
                                                            <img src="<?=i('')?>dp.png" width="30px">Kenneth Wong
                                                            <div class="icon-right-arrow">
                                                                <img src="<?=i('')?>icons8-right_arrow.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <div class="card ">
                                                <div class="thumb">
                                                    <img class="img-responsive" src="<?=i('')?>Image_shape-2.png" alt="Experts Tutorials">
                                                    <div class="play-tutorial" onclick="document.getElementById('id01').style.display='block'">
                                                        <a href="#0"> <img src="<?=i('')?>icons8-play.svg"> </a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="cat-tag text-right">
                                                        <a href="#" class="btn btn-sm categ-tag">Marketing</a>
                                                    </div>
                                                    <h3 class="card-title my-expert-card-title">Business Protection for Entrepreneurs</h3>
                                                    <div class="fullwidth row">
                                                        <div class="col-md-8" style="margin-top:4px;">
                                                            <div class="rating rating-star">
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="d-flex card-bottom-dp">
                                                            <img src="<?=i('')?>dp.png" width="30px">Kenneth Wong
                                                            <div class="icon-right-arrow">
                                                                <img src="<?=i('')?>icons8-right_arrow.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <div class="card ">
                                                <div class="thumb">
                                                    <img class="img-responsive" src="<?=i('')?>Image_shape-3.png" alt="Experts Tutorials">
                                                    <div class="play-tutorial" onclick="document.getElementById('id01').style.display='block'">
                                                        <a href="#0"> <img src="<?=i('')?>icons8-play.svg"> </a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="cat-tag text-right">
                                                        <a href="#" class="btn btn-sm categ-tag">Marketing</a>
                                                    </div>
                                                    <h3 class="card-title my-expert-card-title">Basics of Brands and
                                                        <br> Branding</h3>
                                                    <div class="fullwidth row">
                                                        <div class="col-md-8" style="margin-top:4px;">
                                                            <div class="rating rating-star">
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="d-flex card-bottom-dp">
                                                            <img src="<?=i('')?>dp.png" width="30px">Kenneth Wong
                                                            <div class="icon-right-arrow">
                                                                <img src="<?=i('')?>icons8-right_arrow.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- most popular categoru -->
                            <div class="mt-5">
                                <div class="col-md-12 col-xs-12 mb-20 ml-4">
                                    <h1 class="two-weight medium my-expert-page-most-popular">Most popular <strong> categories</strong></h1>
                                </div>


                              
                                <div class="col-md-12 col-xs-12">
                                    <div class="row p-3">
                                    <?php foreach ($dt as $key => $values): ?>
                                        <div class="col-md-4 col-xs-12">
                                            <div class="card cat-card   border-0">
                                                <span class="cat-title dashboard-cat-title-txt "><img src="<?=i('')?>icons/leader.svg " class="mr-2 mt-2 cat-img" />
                                                       <?=$values['category_name']?> </span>
                                            </div>
                                        </div>
                   
                                        <?php endforeach ?>
                                    

                                        
                                    </div>
                                    
                                </div>
                               </div>
                                <!-- end of most popular categories -->

                            </div>

                            
    
                        </section>
    
                    </main>
                </div>
            </div>
        </div>

        <!-- end of dashboard -->
        
        <!-- consult with expert -->
        <section class="white-bg">
            <div class="container my-expert-page-select-topic">
                <div class="col-md-3 col-xs-12"></div>
                <div class="col-md-9 col-xs-12 mb-20 ">
                    <h1 class="two-weight medium ">Consult with <strong> Experts</strong></h1>
                    <p class="three-q-width ">Our portal of Experts will give you access to a universe of Experts, allowing you to work with them on an individual, one-on-one basis, relative to the area of expertise corresponding to your particular need.</p>
                </div>
                <!-- start of select topic -->
                <div class="col-md-10 dashboard-card-select-topic">
                    <div class="select--cats ">
                        <div class="col-md-4 col-xs-12 full-height pagination-only sec__1 "style="background-color: #F3F7FB !important;">
                            <div class="slick_demo_1 ">
                                <div>
                                    <h1 class="two-weight medium ">Select <strong> Experts Category</strong></h1>
                                    <p>From the menu on the right, choose the expertise topic you are interested in.</p>
                                </div>
                                <div>
                                    <h1 class="two-weight medium ">Select <strong> Experts Category</strong></h1>
                                    <p>From the menu on the right, choose the expertise topic you are interested in.</p>
                                </div>
                            </div>
                        </div>

                       <!-- select topic -->
                       <div class="col-md-8 col-xs-12  full-height sec__2 " style="background-color: #F9F9F9 !important;">
                        <h1 class="two-weight small pt-5">Select<strong> Topic</strong></h1>
                        <div class="col-md-12 col-xs-12 mt-20 ">
                            <div class="row ">
                                <div class="col-md-6 col-xs-12 ">
                                    <div class="card cat-card   border-0">
                                        <span class="cat-title dashboard-cat-title-txt"> <img src="<?=i('')?>icons/management.svg " class="mr-2 cat-img"/>
                                                 Business Model (4) </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 ">
                                    <div class="card cat-card  border-0">
                                        <span class="cat-title dashboard-cat-title-txt "> <img src="<?=i('')?>icons/multichannel.svg " class="mr-2 cat-img" />
                                                 Digital marketing (12) </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 ">
                                    <div class="card cat-card border-0 ">
                                        <span class="cat-title  dashboard-cat-title-txt"> <img src="<?=i('')?>icons/management.svg " class="mr-2 cat-img" />
                                                Finance and Valuation (6) </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 ">
                                    <div class="card cat-card   border-0">
                                        <span class="cat-title dashboard-cat-title-txt "><img src="<?=i('')?>icons/leader.svg " class="mr-2 mt-2 cat-img" />
                                                Leadership (9) </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 ">
                                    <div class="card cat-card  border-0">
                                        <span class="cat-title dashboard-cat-title-txt "> <img src="<?=i('')?>icons/add_user_male.svg " class="mr-2 mt-2 cat-img" />
                                                 Human resources (14) </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 ">
                                    <div class="card cat-card  border-0 ">
                                        <span class="cat-title dashboard-cat-title-txt "> <img src="<?=i('')?>icons/person_growth.svg " class="mr-2 cat-img" />
                                                 General management (4) </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 ">
                                    <div class="card cat-card border-0">
                                        <span class="cat-title dashboard-cat-title-txt ">  <img src="<?=i('')?>icons/add_user_male.svg " class="mr-2 mt-2 cat-img" />
                                                 Customer Acquisition(4) </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 ">
                                    <div class="card cat-card border-0">
                                        <span class="cat-title dashboard-cat-title-txt ">  <img src="<?=i('')?>icons/reseller.svg " class="mr-2 mt-2 cat-img" />
                                                Marketing & Sales (10) </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 ">
                                    <div class="card cat-card border-0">
                                        <span class="cat-title dashboard-cat-title-txt "> <img src="<?=i('')?>icons/multichannel.svg " class="mr-2 cat-img" />
                                                 Branding (4)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                        <!-- end of select topic -->



                    </div>
                </div>
                 <!-- end of select topic -->
            </div>
        </section>


          <!-- blue banner -->
          <section class="img-bg padding-0" style="background: url('<?=i('')?>icons/business-executive.png'); background-position: center !important;">
            <div class="banner-inner">
                <div class="container">
                    <div class="col-md-12 col-xs-12 mb-20 text-center  pb-4 pt-3">
                        <h1 class="two-weight color-white access-all-tutorials"> <strong> Can’t find </strong> what you’re looking for?</h1>
                        <p class="h4 color-white ">Tell us what you need and we will get back to you.</p>
                        <a href="#0" class="btn btn-secondary desp-btn"> Post your Requirement</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- FAQS & About -->
        <section class="accordion-section white-bg" aria-label="Question Accordions">
            <div class="container">
                <h1 class="two-weight medium mb-50">FAQs about <strong> Experts Tutorials</strong></h1>
                <div class="panel-group three-q-width" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What do Mind Cloud Tribe Expert tutorials include?
                            </a>
                            </h3>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body px-3 mb-4">
                                <p>Building a website is extremely easy. With a working knowledge of HTML and CSS you will be able to have a site up and running in no time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                        How do I enroll in a Mind Cloud Tribe tutorial?
                            </a>
                            </h3>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body px-3 mb-4">
                                <p>Using Amazon AWS technology which is an industry leader for reliability you will be able to experience an uptime in the vicinity of 99.95%.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                        How long do I have to complete my tutorials?
                            </a>
                            </h3>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body px-3 mb-4">
                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12  mt-20">
                    <a href="#0" class="link row"> See more </a>
                </div>
            </div>
        </section>
</div>