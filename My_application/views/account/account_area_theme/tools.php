   <div class="business-page">
      <section class="dashboard">
         <ul class="dashboard-layout">
            <li>
               <? $this->load->view("widgets/dashboard-menu-box");?>
            </li>

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
                                          
                                             <? $this->load->view("widgets/multistep.php");?>
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
                                          
                                             <? $this->load->view("widgets/multistep2.php");?>
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