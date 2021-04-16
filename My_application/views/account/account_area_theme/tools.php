<style>
ul.dashboard-layout>li:nth-child(1) {
    width: 30%;
}
ul.dashboard-layout>li:nth-child(2) {
    width: 70%;
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
                                       <a href="#"> <img src="<?=i('')?>dashboard/home/icons/4.svg" alt=""></a>
                                    </div>
                                 </div>
                              </div>
                        </div>

                        <div class="tutorial-footer tool-footer vid-tran para">
                           <div class="tutorial-footer-content">
                                    

                                    <ul class="form-tabing">
                                       <div class="fld-html">
                                          <p>Do you have a <strong>Single</strong> or <strong>Multi-Sided Market</strong>?</p>
                                       </div>
                                       <li data-targetit="box-1" class="current"><a href="#">Single Market</a></li>
                                       <li data-targetit="box-2"><a href="#">Multi-Sided Market</a></li>
                                    </ul>      

                                    <div class="box-1 showfirst" style="">      
                                       
                                       <form id="regForm" action="">

                                          <div class="fld-html">
                                             <ul class="fld-progress">
                                                <li class="step"><p>Customer Segments</p></li>
                                                <li class="step"><p>Value Propositions</p></li>
                                                <li class="step"><p>Channels and Customer Relationship</p></li>
                                                <li class="step"><p>Key Resources, Activities and Partners</p></li>
                                                <li class="step"><p>Revenue Models and Cost Structures</p></li>
                                                <li class="step"><p>Revenue Models and Cost Structures</p></li>
                                                <li class="step"><p>Key Resources, Activities and Partners</p></li>
                                                <li class="step"><p>Revenue Models and Cost Structures</p></li>
                                                <li class="step"><p>Revenue Models and Cost Structures</p></li>
                                             </ul>
                                          </div>
                                          
                                          <div id="radio1" class="multi-fld">
                                             <div class="tab">
                                                <div class="fld-textarea">
                                                <label for="">List all customer segments and define them by personas, characteristics, gender, demographics, or etc.</label>
                                                <div class="space"><br></div>
                                                <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                             </div>

                                             <div class="tab">
                                                <div class="fld-textarea">
                                                <label for="">What are your Value Propositions?</label>
                                                <div class="space"><br></div>
                                                <p>List out the different Value Propositions ranked by order of importance and connected to each of the Customer Segments you have.</p>
                                                <div class="space"><br></div>
                                                <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                             </div>

                                             <div class="tab">
                                                <div class="fld-textarea">
                                                <label for="">What are your Channels?</label>
                                                <div class="space"><br></div>
                                                <p>List all the important Channels linked to the different Customer Segments for the value proposition to reach them.  Make sure you cover all the steps from promotion, sales, service, etc.</p>
                                                <div class="space"><br></div>
                                                <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                             </div>

                                             <div class="tab">
                                                <div class="fld-textarea">
                                                <label for="">What are your Customer Relationships?</label>
                                                <div class="space"><br></div>
                                                <p>List your Customer Relationships according to the different segments and across the customer journey, from acquisition, through growth, to retention.</p>
                                                <div class="space"><br></div>
                                                <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                             </div>

                                             <div class="tab">
                                                <div class="fld-textarea">
                                                <label for="">What are your Revenue Models?</label>
                                                <div class="space"><br></div>
                                                <p>Describe the different Revenue Models you have to capture value from the different Customer Segments. Example (Freemium, Subscription, Transactional, Affiliate, Advertising, etc.)</p>
                                                <div class="space"><br></div>
                                                <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                             </div>

                                             <div class="tab">
                                                <div class="fld-textarea">
                                                <label for="">What are your Key Resources?</label>
                                                <div class="space"><br></div>
                                                <p>List all your Key Resources from financial, physical, intellectual, to human resources</p>
                                                <div class="space"><br></div>
                                                <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                             </div>

                                             <div class="tab">
                                                <div class="fld-textarea">
                                                <label for="">What are your Key Activities?</label>
                                                <div class="space"><br></div>
                                                <p>List all the Key Activities you must do to make your business model work</p>
                                                <div class="space"><br></div>
                                                <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                             </div>

                                             <div class="tab">
                                                <div class="fld-textarea">
                                                <label for="">Who are your Key Partners?</label>
                                                <div class="space"><br></div>
                                                <p>List all the partners that have Key Resources that you need, or perform Key Activities on your behalf (make sure to never compromise on the value you are delivering)</p>
                                                <div class="space"><br></div>
                                                <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                             </div>

                                             <div class="tab">
                                                <div class="fld-textarea">
                                                <label for="">What is your Cost Structure?</label>
                                                <div class="space"><br></div>
                                                <p>List the most important costs, from expensive resources, expensive activities, fixed costs, to variable costs, etc.  Note: Check for economies of scale.</p>
                                                <div class="space"><br></div>
                                                <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                             </div>
                                          </div>

                          
                                          <div style="overflow:auto;">
                                             <div style="float:right;">
                                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Back</button>
                                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                             </div>
                                          </div>
                                       </form>

                                    </div>

                                    <div class="box-2" style="">  
                                       <form id="regForm1" action="">
                                          
                                          <div class="fld-html">
                                             <ul class="fld-progress">
                                                <li class="step1"><p>Customer Segments</p></li>
                                                <li class="step1"><p>Value Propositions</p></li>
                                                <li class="step1"><p>Channels and Customer Relationship</p></li>
                                                <li class="step1"><p>Key Resources, Activities and Partners</p></li>
                                                <li class="step1"><p>Revenue Models and Cost Structures</p></li>
                                                <li class="step1"><p>Revenue Models and Cost Structures</p></li>
                                                <li class="step1"><p>Key Resources, Activities and Partners</p></li>
                                                <li class="step1"><p>Revenue Models and Cost Structures</p></li>
                                                <li class="step1"><p>Revenue Models and Cost Structures</p></li>
                                             </ul>
                                          </div>
                                    
                                          <div id="radio2" class="multi-fld">
                                             <div class="tab1">
                                                <div class="fld-text">
                                                   <input type="text" placeholder="Side One" oninput="this.className = ''">
                                                </div>  

                                                <div class="fld-text">
                                                   <input type="text" placeholder="Side Two" oninput="this.className = ''">
                                                </div>

                                                <div class="fld-textarea">
                                                   <label for="">Side One: List all customer segments and define them by personas, characteristics, gender, demographics, or etc.</label>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  

                                                <div class="fld-textarea">
                                                   <label for="">Side Two: List all customer segments and define them by personas, characteristics, gender, demographics, or etc.</label>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                                
                                             </div>

                                             <div class="tab1">

                                                <div class="fld-textarea">
                                                   <label for="">What are your Value Propositions?</label>
                                                   <div class="space"><br></div>
                                                   <p>List out the different Value Propositions ranked by order of importance and connected to each of the Customer Segments you have.</p>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                                
                                             </div>

                                             <div class="tab1">

                                                <div class="fld-textarea">
                                                   <label for="">What are your Channels?</label>
                                                   <div class="space"><br></div>
                                                   <p>List all the important Channels linked to the different Customer Segments for the value proposition to reach them.  Make sure you cover all the steps from promotion, sales, service, etc.</p>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                                
                                             </div>


                                             <div class="tab1">

                                                <div class="fld-textarea">
                                                   <label for="">What are your Customer Relationships?</label>
                                                   <div class="space"><br></div>
                                                   <p>List your Customer Relationships according to the different segments and across the customer journey, from acquisition, through growth, to retention.</p>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                                
                                             </div>


                                             <div class="tab1">

                                                <div class="fld-textarea">
                                                   <label for="">What are your Revenue Models?</label>
                                                   <div class="space"><br></div>
                                                   <p>Describe the different Revenue Models you have to capture value from the different Customer Segments. Example (Freemium, Subscription, Transactional, Affiliate, Advertising, etc.)</p>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                                
                                             </div>

                                             <div class="tab1">

                                                <div class="fld-textarea">
                                                   <label for="">What are your Key Resources?</label>
                                                   <div class="space"><br></div>
                                                   <p>List all your Key Resources from financial, physical, intellectual, to human resources</p>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                                
                                             </div>


                                             <div class="tab1">

                                                <div class="fld-textarea">
                                                   <label for="">What are your Key Activities?</label>
                                                   <div class="space"><br></div>
                                                   <p>List all the Key Activities you must do to make your business model work</p>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                                
                                             </div>



                                             <div class="tab1">

                                                <div class="fld-textarea">
                                                   <label for="">Who are your Key Partners?</label>
                                                   <div class="space"><br></div>
                                                   <p>List all the partners that have Key Resources that you need, or perform Key Activities on your behalf (make sure to never compromise on the value you are delivering)</p>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                                
                                             </div>


                                             <div class="tab1">

                                                <div class="fld-textarea">
                                                   <label for="">What is your Cost Structure?</label>
                                                   <div class="space"><br></div>
                                                   <p>List the most important costs, from expensive resources, expensive activities, fixed costs, to variable costs, etc.  Note: Check for economies of scale.</p>
                                                   <div class="space"><br></div>
                                                   <textarea oninput="this.className = ''"></textarea>
                                                </div>  
                                                
                                             </div>

                                          </div>

                          
                                          <div style="overflow:auto;">
                                             <div style="float:right;">
                                                <button type="button" id="prevBtn1" onclick="nextPrev1(-1)">Back</button>
                                                <button type="button" id="nextBtn1" onclick="nextPrev1(1)">Next</button>
                                             </div>
                                          </div>
                                       </form>
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