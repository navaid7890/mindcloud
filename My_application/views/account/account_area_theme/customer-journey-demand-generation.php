<style>
ul.dashboard-layout>li:nth-child(1) {
    width: 30%;
}
ul.dashboard-layout>li:nth-child(2) {
    width: 70%;
}
ul.dashboard-layout {
        margin-top: 80px;
    }
.front-dashboard .dashboard-menu-box {
        left: -20%;
        transition: 0.5s;
    }
    

    a.menu-dash-front {
        display: block;
        padding: 20px 25px;
        font-size: 20px;
        font-weight: 700;
        background: #33415c;
        vertical-align: middle;
        color: #fff;
        position: fixed;
        top: 112px;
        z-index: 3;
        width: 100%;
    }

    a.menu-dash-front i {
        position: absolute;
        right: 20px;
        font-size: 26px;
        vertical-align: middle;
        line-height: 16px;
    }

</style>
   <div class="business-page">
      <section class="dashboard">
      <div class="front-dashboard">
         <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
         <? $this->load->view("widgets/dashboard-menu-box");?>
      </div>
         <ul class="dashboard-layout">
            <!-- <li>
               <? // $this->load->view("widgets/dashboard-menu-box");?>
            </li> -->

            <li>
               <? $this->load->view("widgets/course-box");?>
            </li>
            <li>
            <div class="tutorial-box">
                  <div class="tutorial-scroll-content">
                     <div class="tutorial-content">
                        <div class="tutorial-head">
                           <div class="row align-items-center">
                              <div class="col-md-7">
                                 <ul class="bredcum-links">
                                    <li><a href ="#">Learning Journey</a></li>
                                    <li><a href="#">Business Model Canvas</a></li>
                                    <li><a href="#">Tool and Tool Builder</a></li>
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

                        <div class="tutorial-mid tool-mid hding-4 hding-3 para">
                              <div class="tutorial-mid-content">
                                 <div class="row align-items-center">
                                    <div class="col-lg-9 col-md-12">
                                       <h4>Tool and Tool Builder - Business Model Canvas</h4>
                                       <div class="space"><br></div>
                                       <p>Complete these steps to build your <strong> Business Model Canvas. </strong></p>
                                    </div>
                                    <div class="col-lg-3 col-md-12 text-right">
                                       <a href="#"> <img src="assets/images/dashboard/home/icons/4.svg" alt=""></a>
                                    </div>
                                 </div>
                              </div>
                        </div>

                        <div class="tutorial-footer tool-footer vid-tran para">
                           <div class="tutorial-footer-content" style="padding-top: 22%;">
                                    

                                    <ul class="form-tabing">
                                       <div class="fld-html">
                                          <p>Customer Journey</p>
                                          <p>Demand Generation</p>
                                       </div>
                                    </ul>      

                                    <div class="box-1 showfirst" style="">      
                                       
                                          <div class="fld-html">
                                             <ul class="fld-progress">
                                                <li class="step"><p>Customer Segments</p></li>
                                                <li class="step"><p>Value Propositions</p></li>
                                                <li class="step"><p>Customer Segments</p></li>
                                             </ul>
                                          </div>
                                          
                                          <div id="radio1" class="multi-fld">

                                             <div class="tab">
                                                 <form id="regForm" class="next-prevBtn">
                                                     <div class="fld-textarea">
                                                        <label for="">1. Awareness & Knowledge Phase <span>How will you attract attention, gain visibility, and show customers how you can help them reach their goals and get what they want and need? Examples are SEO, Interesting Content, YouTube Videos, FB Ads, Influencers Campaigns, Events.</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">2. Engagement or Interest Phase <span>How can you engage further your leads by providing additional information about your products and services? Examples are Communities, Whatsapp/Messenger Chat, Nurturing Emails.</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div>
                                                         <button type="submit">SUBMIT</button>
                                                     </div>
                                                 </form>  
                                             </div>

                                             <div class="tab">
                                                 <form id="regForm2" class="next-prevBtn">
                                                     <div class="fld-textarea">
                                                        <label for="">3. Consideration, Evaluation or Intent Phases <span>What key differentiators and competitive advantages will be used to educate your potential leads further on your offering? Examples are Emails, Videos or material showing results, outcomes, and benefits of your solution</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">4. Purchase Phase (mid way!)<span>What tools, processes, and paths will you use to support your customers to make their purchase?</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">5. Activation Phase<span>Formalize further the relationship with your actual buyers or users by developing trust.  Examples are Excellent customer service after sale, Product/services integrity, ethical standards and consistency, show your customers that they are important to you through emails, follow-up, etc.</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">6. Repeat Phase<span>How will you capitalize on the trust gained with your customer? Examples are Add-Ons, Upsells, Bundles, Experience Enhancers, Membership</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div>
                                                         <button type="submit">SUBMIT</button>
                                                     </div>
                                                 </form>  
                                             </div>


                                             <div class="tab">
                                                 <form id="regForm2" class="next-prevBtn">
                                                     <div class="fld-textarea">
                                                        <label for="">7.  Loyalty Phase <span>How will you further reward your loyal customers? Examples are Loyalty coupons, easy payment plans, special offers.</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">8.  Advocacy Phase<span>How can you capitalize on your loyal customers to generate awareness, trust, and credibility with their own audience – which helps you acquire more customers? Examples are Testimonial, Repost, Contest, Affiliate Program</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div>
                                                         <button type="submit">SUBMIT</button>
                                                     </div>
                                                 </form>  
                                             </div>

                                          </div>

                          
                                          <div class="next-prevBtn" style="overflow:auto;">
                                             <div style="float:right;">
                                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Back</button>
                                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                             </div>
                                          </div>
                                   

                                    </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div> 
            </li>

    
         </ul>
      </section>
   </div>