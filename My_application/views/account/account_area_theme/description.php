<style>
   /* .descPage ul.dropdown-box {
      display: block !important;
   } */
</style>
<div class="business-page">
   <section class="dashboard">
      <ul class="dashboard-layout">
         <li>
            <div class="front-dashboard">
               <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
               <? $this->load->view("widgets/dashboard-menu-box"); ?>
            </div>
         </li>
         <li>
            <div class="descPage">
            <? $this->load->view("widgets/course-box"); ?>
            </div>
         </li>
         <li>
            <div class="tutorial-box">
               <div class="tutorial-scroll-content">
                  <div class="tutorial-content">
                     <div class="tutorial-head">
                        <div class="row align-items-center">
                           <div class="col-md-7">
                              <ul class="bredcum-links">
                                 <li><a href="#">Learning Journey</a></li>
                                 <li><a href="#">Introduction</a></li>
                              </ul>
                           </div>
                           <div class="col-md-5 text-right">
                              <div class="bredcum-right">
                                 <a href="#" class="btn-round btn-hover">In progress <span></span></a>

                                 <ul class="indicator-links">
                                    <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="tutorial-mid hding-4 hding-3 para">
                        <div class="tutorial-mid-content">
                           <h4>Tutorial Contents:</h4>
                        </div>
                        <div class="space"><br><br></div>

                        <ul class="tutorial-box-list">
                           <li>
                              <a href="#">
                                 <div class="tutorial-list-box">
                                    <div class="tutorial-box-content">
                                       <span><img src="<?= i('') ?>dashboard/home/icons/2.svg"></span>
                                       <div class="space"><br></div>
                                       <h3>Video and <br> Transcript</h3>
                                    </div>
                                 </div>
                              </a>
                           </li>

                           <li>
                              <a href="#">
                                 <div class="tutorial-list-box">
                                    <div class="tutorial-box-content">
                                       <span><img src="<?= i('') ?>dashboard/home/icons/1.svg"></span>
                                       <div class="space"><br></div>
                                       <h3>Tool and <br>Tool-builder</h3>
                                    </div>
                                 </div>
                              </a>
                           </li>

                           <li>
                              <a href="#">
                                 <div class="tutorial-list-box">
                                    <div class="tutorial-box-content">
                                       <span><img src="<?= i('') ?>dashboard/home/icons/3.svg"></span>
                                       <div class="space"><br></div>
                                       <h3>My<br> Work</h3>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                        <div class="space"><br></div>
                        <? //debug($learn_content)
                        ?>
                        <p><?= html_entity_decode($learn_content[0]['learning_journey_content_desc']) ?></p>

                        <!-- <p>We have designed a practical, step-by-step journey of video-tutorials<br> and tool-builders to guide you through building your business plan. </p>
                           <div class="space"><br><br></div>   
                           <p> What is a Business Model? </p>
                           <p> What is a Business Model Canvas? </p>
                           <div class="space"><br></div>
                           <p>We will go through the nine boxes of Business Model,<br> what they are and how to build them.</p>
                           <div class="space"><br><br></div>

                           <ul class="mid-list">
                              <li>Customer Segments</li>
                              <li>Value Proposition</li>
                              <li>Channels</li>
                              <li>Customer Relationship </li>
                              <li>Revenue Stream </li>
                              <li>Key Resources </li>
                              <li>Key Activities </li>
                              <li>Key Partners </li>
                              <li>Cost Structure</li>
                           </ul> -->
                        <div class="space"><br><br></div>

                        <a href="video?cat=<?= $_GET['cat'] ?>" class="btn-dashboard btn-hover">Next <span></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </li>
      </ul>
   </section>
</div>

<style>
   * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
   }

   *:before,
   *:after {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
   }


   .text-center {
      text-align: center;
   }


   /* Rating Star Widgets Style */
   .rating-stars ul {
      list-style-type: none;
      padding: 0;

      -moz-user-select: none;
      -webkit-user-select: none;
   }

   .rating-stars ul>li.star {
      display: inline-block;

   }

   /* Idle State of the stars */
   .rating-stars ul>li.star>i.fa {
      font-size: 18px;
      /* Change the size of the stars */
      color: #ccc;
      /* Color on idle state */
   }

   /* Hover state of the stars */
   .rating-stars ul>li.star.hover>i.fa {
      color: #FFCC36;
   }

   /* Selected state of the stars */
   .rating-stars ul>li.star.selected>i.fa {
      color: #FF912C;
   }
</style>

<script>
   $(document).ready(function() {


      // $(".catLj"+id).addClass('active');
      // url = new URL(window.location.href);
      // if (url.searchParams.get('cat')) {
      //    var xyz = url.searchParams.get('cat');
      //    var abc = "catLj" + xyz;
      //    $("." + abc).addClass('active');
      //    $("." + abc + " ul").attr("style", "display:block");
      //    <? //if ($tool['tool_builder_percent'] == 1) : ?>
      //       if ("toolbuilder-11") {
      //          var tool = "toolbuilder-11";
      //          $("." + tool).addClass('active');
      //       }
      //    <?// endif; ?>
      //    
      // }


      // $(".catLj"+id).addClass('active');
      //   urlb = new URL(window.location.href);
      // if (urlb.searchParams.get('cat')) {
      //    var toolb = url.searchParams.get('cat');
      //    var tool = "activeId-"+toolb;
      //    $("."+tool).addClass('active');
      // }






   });


   function responseMessage(msg) {
      $('.success-box').fadeIn(200);
      $('.success-box div.text-message').html("<span>" + msg + "</span>");
   }
</script>