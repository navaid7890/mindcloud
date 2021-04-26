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
                           <div class="tutorial-footer-content" style="padding: 0;">
                                    

                                    <ul class="form-tabing">
                                       <div class="fld-html">
                                          <p>Strategic Marketing Plan</p>
                                       </div>
                                    </ul>      

                                    <div class="box-1 showfirst" style="">      

                                          <div id="radio1" class="multi-fld">

                                             <div class="tab">
                                                 <form id="regForm" class="next-prevBtn">
                                                     <div class="fld-textarea">
                                                        <label for="">1. Situational Analysis <span>List all your internal strengths/weaknesses, and your external opportunities/threats.</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">2. Mission <span>State your company’s mission statement as per goals, ethics, values, and culture. Make sure you answer to these questions: what the company does for its customers, employees, and its owners. </span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">3. Objectives <span>State your long-term results, so you can list them down into specific objectives. These objectives should be measurable over a period of time. Example, gaining 3000 followers on Instagram in 3 months. </span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">4. Strategy & Implementation <span>(Here we have 2 essential elements to develop)</span> 4.A. Target Market: <span>Research and validate your target customers, their segments and their personas based on gender, age, likes, dislikes, social behavior, hangout places, social status, etc. </span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">4.B. Implementation Tactics / Positioning / Marketing Mix: <span> We expanded a lot on Positioning and Marketing Mix in a previous tutorial. List your Marketing Mix tactics based on the 7 P’s (Product, People, Place, Price, Promotion, Process, Physical Evidence). Example of tactics: phone call, text, email, Facebook Ads, etc.</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div class="fld-textarea">
                                                        <label for="">5. Evaluation <span>Have in place process for evaluation of tactics and strategies based on results, who is in charge to do that job and what is the frequency of that evaluation, assess budgets (of cost of acquisition) for better future planning.</span></label>
                                                        <div class="space"><br></div>
                                                        <textarea oninput="this.className = ''"></textarea>
                                                     </div>

                                                     <div>
                                                         <button type="submit">SUBMIT</button>
                                                     </div>
                                                 </form>  
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