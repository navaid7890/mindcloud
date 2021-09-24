<style>
   /* .toolBuild1 ul.dropdown-box {
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
            <div class="toolBuild1">
               <? $this->load->view("widgets/course-box"); ?>
            </div>
         </li>
         <li>
            <div class="tutorial-box">
               <div class="tutorial-scroll-content">
                  <div class="tutorial-content">
                     <div class="tutorial-head">
                        <div class="row align-items-center">
                           <div class="col-md-12">
                              <ul class="bredcum-links">
                                 <li><a href="#">Learning Journey</a></li>
                                 <li><a href="#">Business Model Canvas</a></li>
                                 <li><a href="#">Tool and Tool Builder</a></li>
                              </ul>
                           </div>
                           <!-- <div class="col-md-5 text-right">
                              <div class="bredcum-right">
                                 <a href="#" class="btn-round btn-hover">In progress <span></span></a>

                                 <ul class="indicator-links">
                                    <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                                 </ul>
                              </div>
                           </div> -->
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
                                 <a href="<?= base_url() ?>account/profile/dl_tools" class=""><img src="<?= base_url() ?>/assets/front_assets/images/dashboard/home/icons/dl.svg" alt=""></a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="tutorial-footer tool-footer vid-tran para">
                        <div class="tutorial-footer-content">

                           <?
                           $param = array();
                           $param['order'] = "tool_builder_id DESC";
                           $param['where']['tool_builder_user_id'] = $this->userid;
                           $tool = $this->model_tool_builder->find_one_active($param);
                           ?>

                           <div class="box-1 showfirst" style="">
                              <div class="fld-html">
                                 <ul class="fld-progress">
                                    <li class="step">
                                       <p>Customer Segments</p>
                                    </li>
                                    <li class="step">
                                       <p>Value Propositions</p>
                                    </li>
                                    <li class="step">
                                       <p>Channels</p>
                                    </li>
                                    <li class="step">
                                       <p>Customer Relationships</p>
                                    </li>
                                    <li class="step">
                                       <p>Revenue Stream</p>
                                    </li>
                                    <li class="step">
                                       <p>Key Resources </p>
                                    </li>
                                    <li class="step">
                                       <p>Key Activities</p>
                                    </li>
                                    <li class="step">
                                       <p>Key Partners</p>
                                    </li>
                                    <li class="step">
                                       <p>Cost Structure</p>
                                    </li>
                                 </ul>
                              </div>

                              <div id="radio1" class="multi-fld">
                                 <div class="tab">

                                    <ul class="form-tabing">
                                       <div class="fld-html">
                                          <p>Do you have a <strong>Single</strong> or <strong>Multi-Sided Market</strong>?</p>
                                       </div>
                                       <li data-targetit="box-1" class=" singlemarket"><a href="#">Single Market</a></li>
                                       <li data-targetit="box-2" class="multiMarket"><a href="#">Multi-Sided Market</a></li>
                                    </ul>


                                    <form id="form-send_us1">
                                       <input type="hidden" id="toolBuilderId" name="tool_builder[tool_builder_user_id]" value="<?= ($this->userid) ?>">
                                       <input type="hidden" name="tool_builder[tool_builder_percent]" value="1">
                                       <div class="singlemarketdiv" style="display: none;">
                                          <div class="fld-textarea">
                                             <label for="">List all customer segments and define them by personas, characteristics, gender, demographics, or etc.</label>
                                             <div class="space"><br></div>
                                             <textarea id="singlemarketval" oninput="this.className = ''" name="tool_builder[tool_builder_customer_segments]"><?= $tool['tool_builder_customer_segments'] ?></textarea>
                                          </div>
                                       </div>
                                       <div class="multiMarketdiv" style="display: none;">
                                          <div class="fld-text">
                                             <input type="text" id="multimarketval1" name="tool_builder[tool_builder_side_one]" value="<?= $tool['tool_builder_side_one'] ?>" placeholder="Side One">
                                          </div>

                                          <div class="fld-text">
                                             <input type="text" id="multimarketval2" name="tool_builder[tool_builder_side_two]" value="<?= $tool['tool_builder_side_two'] ?>" placeholder="Side Two">
                                          </div>

                                          <div class="fld-textarea">
                                             <label for="">Side One: List all customer segments and define them by personas, characteristics, gender, demographics, or etc.</label>
                                             <div class="space"><br></div>
                                             <textarea id="multimarketval3" name="tool_builder[tool_builder_side_one_list]" oninput="this.className = ''"><?= $tool['tool_builder_side_one_list'] ?></textarea>
                                          </div>

                                          <div class="fld-textarea">
                                             <label for="">Side Two: List all customer segments and define them by personas, characteristics, gender, demographics, or etc.</label>
                                             <div class="space"><br></div>
                                             <textarea id="multimarketval4" name="tool_builder[tool_builder_side_two_list]" oninput="this.className = ''"><?= $tool['tool_builder_side_two_list'] ?></textarea>
                                          </div>
                                       </div>

                                       <div style="display:none">
                                          <button type="submit" id="forms-tool_builder-btn1">SUBMIT</button>
                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab">


                                    <form id="form-send_us2" class="next-prevBtn">


                                       <div class="fld-textarea">
                                          <label for="">What are your Value Propositions?</label>
                                          <div class="space"><br></div>
                                          <p>List out the different Value Propositions ranked by order of importance and connected to each of the Customer Segments you have.</p>
                                          <div class="space"><br></div>


                                          <textarea oninput="this.className = ''" name="tool_builder[tool_builder_value_proposition]"><?= $tool['tool_builder_value_proposition'] ?></textarea>
                                       </div>
                                       <div style="display:none">
                                          <button type="submit" id="forms-tool_builder-btn2">SUBMIT</button>
                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab">
                                    <form id="form-send_us3" class="next-prevBtn">
                                       <div class="fld-textarea">
                                          <label for="">What are your Channels?</label>
                                          <div class="space"><br></div>
                                          <p>List all the important Channels linked to the different Customer Segments for the value proposition to reach them. Make sure you cover all the steps from promotion, sales, service, etc.</p>
                                          <div class="space"><br></div>
                                          <textarea oninput="this.className = ''" name="tool_builder[tool_builder_channels]"><?= $tool['tool_builder_channels'] ?></textarea>
                                       </div>
                                       <div style="display:none">
                                          <button type="submit" id="forms-tool_builder-btn3">SUBMIT</button>
                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab">
                                    <form id="form-send_us4" class="next-prevBtn">
                                       <div class="fld-textarea">
                                          <label for="">What are your Customer Relationships?</label>
                                          <div class="space"><br></div>
                                          <p>List your Customer Relationships according to the different segments and across the customer journey, from acquisition, through growth, to retention.</p>
                                          <div class="space"><br></div>
                                          <textarea oninput="this.className = ''" name="tool_builder[tool_builder_customer_relationship]"><?= $tool['tool_builder_customer_relationship'] ?></textarea>
                                       </div>
                                       <div style="display:none">
                                          <button type="submit" id="forms-tool_builder-btn4">SUBMIT</button>
                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab">
                                    <form id="form-send_us5" class="next-prevBtn">
                                       <div class="fld-textarea">
                                          <label for="">What are your Revenue Models?</label>
                                          <div class="space"><br></div>
                                          <p>Describe the different Revenue Models you have to capture value from the different Customer Segments. Example (Freemium, Subscription, Transactional, Affiliate, Advertising, etc.)</p>
                                          <div class="space"><br></div>
                                          <textarea oninput="this.className = ''" name="tool_builder[tool_builder_revenue_model]"><?= $tool['tool_builder_revenue_model'] ?></textarea>
                                       </div>
                                       <div style="display:none">
                                          <button type="submit" id="forms-tool_builder-btn5">SUBMIT</button>
                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab">
                                    <form id="form-send_us6" class="next-prevBtn">
                                       <div class="fld-textarea">
                                          <label for="">What are your Key Resources?</label>
                                          <div class="space"><br></div>
                                          <p>List all your Key Resources from financial, physical, intellectual, to human resources</p>
                                          <div class="space"><br></div>
                                          <textarea oninput="this.className = ''" name="tool_builder[tool_builder_key_resources]"><?= $tool['tool_builder_key_resources'] ?></textarea>
                                       </div>
                                       <div style="display:none">
                                          <button type="submit" id="forms-tool_builder-btn6">SUBMIT</button>
                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab">
                                    <form id="form-send_us7" class="next-prevBtn">
                                       <div class="fld-textarea">
                                          <label for="">What are your Key Activities?</label>
                                          <div class="space"><br></div>
                                          <p>List all the Key Activities you must do to make your business model work</p>
                                          <div class="space"><br></div>
                                          <textarea oninput="this.className = ''" name="tool_builder[tool_builder_key_activities]"><?= $tool['tool_builder_key_activities'] ?></textarea>
                                       </div>
                                       <div style="display:none">
                                          <button type="submit" id="forms-tool_builder-btn7">SUBMIT</button>
                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab">
                                    <form id="form-send_us8" class="next-prevBtn">
                                       <div class="fld-textarea">
                                          <label for="">Who are your Key Partners?</label>
                                          <div class="space"><br></div>
                                          <p>List all the partners that have Key Resources that you need, or perform Key Activities on your behalf (make sure to never compromise on the value you are delivering)</p>
                                          <div class="space"><br></div>
                                          <textarea oninput="this.className = ''" name="tool_builder[tool_builder_key_partners]"><?= $tool['tool_builder_key_partners'] ?></textarea>
                                       </div>
                                       <div style="display:none">
                                          <button type="submit" id="forms-tool_builder-btn8">SUBMIT</button>
                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab">
                                    <form id="form-send_us9" class="next-prevBtn">
                                       <div class="fld-textarea">
                                          <label for="">What is your Cost Structure?</label>
                                          <div class="space"><br></div>
                                          <p>List the most important costs, from expensive resources, expensive activities, fixed costs, to variable costs, etc. Note: Check for economies of scale.</p>
                                          <div class="space"><br></div>
                                          <textarea oninput="this.className = ''" name="tool_builder[tool_builder_cost_structure]"><?= $tool['tool_builder_cost_structure'] ?></textarea>
                                       </div>
                                       <div style="display:none">
                                          <button type="submit" id="forms-tool_builder-btn9">SUBMIT</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>


                              <div class="next-prevBtn" style="overflow:auto;">
                                 <div style="float:right;">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1,'your_work?tool=0&cat=11')">Back</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1,'your_work?tool=0&cat=11')">Next</button>
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


<script>
   $(".singlemarket").click(function() {
      $(".singlemarketdiv").toggle();
      $(".multiMarketdiv").hide();

      $("#multimarketval1").val('');
      $("#multimarketval2").val('');
      $("#multimarketval3").val('');
      $("#multimarketval4").val('');
      // location.reload();
   });
   $(".multiMarket").click(function() {
      $(".multiMarketdiv").toggle();
      $(".singlemarketdiv").hide();
      $("#singlemarketval").val('');

      // location.reload();
   });
</script>