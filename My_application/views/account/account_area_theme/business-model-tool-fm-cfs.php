<div class="business-page">
  <section class="dashboard">

    <ul class="dashboard-layout">
      <li>
        <div class="front-dashboard open">
          <!-- <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a> -->
          <? $this->load->view("widgets/dashboard-menu-box"); ?>
        </div>
      </li>

      <li class="open">
        <? $this->load->view("widgets/course-box"); ?>
      </li>
      <li class="open">
        <div class="tutorial-box">
          <div class="tutorial-scroll-content">
            <div class="tutorial-content">
              <div class="tutorial-head">
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <ul class="bredcum-links">
                      <li><a href="#">Learning Journey</a></li>
                      <li><a href="#">Cash Flow Statement</a></li>
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
                      <h4>Tool and Tool Builder - Cash Flow Statement</h4>
                      <div class="space"><br></div>
                      <p>Complete these steps to build your <strong> Cash Flow Statement. </strong></p>
                    </div>
                    <?
                    $param = array();
                    $param['order'] = "tool_builder_id DESC";
                    $param['where']['tool_builder_user_id'] = $this->userid;
                    $tool = $this->model_tool_builder_fm_cfs->find_one_active($param);
                    ?>
                    <? if ($tool == "") : ?>
                      <div class="col-lg-3 col-md-12 text-right">
                        <a href="#" onClick='alert("Please fill-out the fields at Toolbuilder in order to download the document")'><img src="<?= base_url() ?>/assets/front_assets/images/dashboard/home/icons/dl.svg" alt=""></a>
                      </div>
                    <? else : ?>
                      <div class="col-lg-3 col-md-12 text-right">
                        <a href="<?= base_url() ?>quiz/cash"><img src="<?= base_url() ?>/assets/front_assets/images/dashboard/home/icons/dl.svg" alt=""></a>
                      </div>
                    <? endif; ?>
                  </div>
                </div>
              </div>

              <div class="tutorial-footer tool-footer vid-tran para">
                <div class="tutorial-footer-content" style="padding: 0;">
                  <ul class="form-tabing">
                    <div class="fld-html">
                      <p>Cash Flow Statement</p>
                    </div>
                  </ul>
                  <div class="box-1 showfirst" style="">
                    <div id="radio1" class="multi-fld">
                      <div class="tab">


                        <form id="form-cfs" class="next-prevBtn">
                          <input type="hidden" name="tool_builder_fm_cfs[tool_builder_user_id]" value="<?= ($this->userid) ?>">
                          <input type="hidden" name="tool_builder_fm_cfs[tool_builder_percent]" value="1">
                          <div class="fld-text">
                            <input type="text" name="tool_builder_fm_cfs[tool_builder_currency]" value="<?= $tool['tool_builder_currency'] ?>" placeholder="Currency">
                          </div>

                          <div class="fld-textarea">
                            <label for="">Step 1: Start with the cash on hand, and add all the cash received from sales, receivables, loans, shareholders cash injection, etc.</label>
                          </div>

                          <table class="table table-responsive-md">
                            <thead>
                              <tr>
                                <th scope="col">Current Period</th>
                                <th scope="col">Previous Period</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="align-items-center">
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="text" name="tool_builder_fm_cfs[tool_builder_begin_current_period]" value="<?= $tool['tool_builder_begin_current_period'] ?>" placeholder="What is your Begin Current Period ?">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="text" name="tool_builder_fm_cfs[tool_builder_begin_previous_period]" value="<?= $tool['tool_builder_begin_previous_period'] ?>" name="" placeholder="What is your Begin Previous Period ?">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="text" name="tool_builder_fm_cfs[tool_builder_end_current_period]" value="<?= $tool['tool_builder_end_current_period'] ?>" name="" placeholder="What is your End Current Period ?">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="text" name="tool_builder_fm_cfs[tool_builder_end_previous_period]" value="<?= $tool['tool_builder_end_previous_period'] ?>" name="" placeholder="What is your End Previous Period ?">
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>

                          <table class="table table-responsive-md">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">Current Period</th>
                                <th scope="col">Previous Period</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="align-items-center">
                                <th>Beginning Balance | Cash On Hand</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="cash_on_hand1" class="c_o_h_c" onkeyup="calc_cfs_values('cash_on_hand', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_cash_on_hand_1]" value="<?= $tool['tool_builder_cash_on_hand_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="cash_on_hand2" class="c_o_h_p" onkeyup="calc_cfs_values('cash_on_hand', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_cash_on_hand_2]" value="<?= $tool['tool_builder_cash_on_hand_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="cash_on_hand3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_cash_on_hand_3]" value="<?= $tool['tool_builder_cash_on_hand_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                            </tbody>
                          </table>

                          <table class="table table-responsive-md">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="align-items-center">
                                <th>Cash Receipts</th>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>

                            </tbody>
                          </table>

                          <table class="table table-responsive-md">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">Current Period</th>
                                <th scope="col">Previous Period</th>
                                <th scope="col">INCREASE (or DECREASE)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="align-items-center">
                                <th>CASH SALES</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="cash_sales1" class="c_o_h_c" onkeyup="calc_cfs_values('cash_sales', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_cash_sales_current]" value="<?= $tool['tool_builder_cash_sales_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="cash_sales2" class="c_o_h_p" onkeyup="calc_cfs_values('cash_sales', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_cash_sales_previous]" value="<?= $tool['tool_builder_cash_sales_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="cash_sales3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_cash_sales_increase]" value="<?= $tool['tool_builder_cash_sales_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>CUSTOMER ACCOUNT COLLECTIONS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="customer_collection1" class="c_o_h_c" onkeyup="calc_cfs_values('customer_collection', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_account_collection_current]" value="<?= $tool['tool_builder_account_collection_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="customer_collection2" class="c_o_h_p" onkeyup="calc_cfs_values('customer_collection', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_account_collection_previous]" value="<?= $tool['tool_builder_account_collection_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="customer_collection3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_account_collection_increase]" value="<?= $tool['tool_builder_account_collection_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>LOAN / CASH INJECTION </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="cash_injection1" class="c_o_h_c" onkeyup="calc_cfs_values('cash_injection', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_cash_injection_current]" value="<?= $tool['tool_builder_cash_injection_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="cash_injection2" class="c_o_h_p" onkeyup="calc_cfs_values('cash_injection', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_cash_injection_previous]" value="<?= $tool['tool_builder_cash_injection_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="cash_injection3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_cash_injection_increase]" value="<?= $tool['tool_builder_cash_injection_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>INTEREST INCOME </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="interest_income1" class="c_o_h_c" onkeyup="calc_cfs_values('interest_income', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_interest_income_current]" value="<?= $tool['tool_builder_interest_income_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="interest_income2" class="c_o_h_p" onkeyup="calc_cfs_values('interest_income', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_interest_income_previous]" value="<?= $tool['tool_builder_interest_income_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="interest_income3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_interest_income_increase]" value="<?= $tool['tool_builder_interest_income_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>TAX REFUND </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="tax_refund1" class="c_o_h_c" onkeyup="calc_cfs_values('tax_refund', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_tax_refund_current]" value="<?= $tool['tool_builder_tax_refund_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="tax_refund2" class="c_o_h_p" onkeyup="calc_cfs_values('tax_refund', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_tax_refund_previous]" value="<?= $tool['tool_builder_tax_refund_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="tax_refund3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_tax_refund_increase]" value="<?= $tool['tool_builder_tax_refund_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER CASH RECEIPTS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other_cash_receipts1" class="c_o_h_c" onkeyup="calc_cfs_values('other_cash_receipts', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_1]" value="<?= $tool['tool_builder_other_cash_receipts_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other_cash_receipts2" class="c_o_h_p" onkeyup="calc_cfs_values('other_cash_receipts', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_2]" value="<?= $tool['tool_builder_other_cash_receipts_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="other_cash_receipts3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_3]" value="<?= $tool['tool_builder_other_cash_receipts_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER CASH RECEIPTS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other2_cash_receipts1" class="c_o_h_c" onkeyup="calc_cfs_values('other2_cash_receipts', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_4]" value="<?= $tool['tool_builder_other_cash_receipts_4'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other2_cash_receipts2" class="c_o_h_p" onkeyup="calc_cfs_values('other2_cash_receipts', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_5]" value="<?= $tool['tool_builder_other_cash_receipts_5'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="other2_cash_receipts3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_6]" value="<?= $tool['tool_builder_other_cash_receipts_6'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER CASH RECEIPTS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other3_cash_receipts1" class="c_o_h_c" onkeyup="calc_cfs_values('other3_cash_receipts', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_7]" value="<?= $tool['tool_builder_other_cash_receipts_7'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other3_cash_receipts2" class="c_o_h_p" onkeyup="calc_cfs_values('other3_cash_receipts', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_8]" value="<?= $tool['tool_builder_other_cash_receipts_8'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="other3_cash_receipts3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_9]" value="<?= $tool['tool_builder_other_cash_receipts_9'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER CASH RECEIPTS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other4_cash_receipts1" class="c_o_h_c" onkeyup="calc_cfs_values('other4_cash_receipts', 'c_o_h_c', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_10]" value="<?= $tool['tool_builder_other_cash_receipts_10'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other4_cash_receipts2" class="c_o_h_p" onkeyup="calc_cfs_values('other4_cash_receipts', 'c_o_h_p', 'c_o_h_i')" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_11]" value="<?= $tool['tool_builder_other_cash_receipts_11'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="other4_cash_receipts3" class="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_other_cash_receipts_12]" value="<?= $tool['tool_builder_other_cash_receipts_12'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>Total CASH RECEIPTS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="c_o_h_c" name="tool_builder_fm_cfs[tool_builder_total_cash_receipts_1]" value="<?= $tool['tool_builder_total_cash_receipts_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="c_o_h_p" name="tool_builder_fm_cfs[tool_builder_total_cash_receipts_2]" value="<?= $tool['tool_builder_total_cash_receipts_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="c_o_h_i" name="tool_builder_fm_cfs[tool_builder_total_cash_receipts_3]" value="<?= $tool['tool_builder_total_cash_receipts_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                            </tbody>
                          </table>



                          <div class="fld-textarea">
                            <label for="">Step 2: List all your expenses <span>from COGS (cost of goods sold), Operating Expenses (rent, salaries, marketing, etc), Tax, Depreciation, Amortization, Stock-Based Compensation, Interest, Losses, Write-Downs, Other Expenses (remember that it doesn’t include Accounts Payables). Sum all expenses together.</span> <br>CASH PAYMENTS <br> Cost Of Goods Sold</label>
                          </div>

                          <table class="table table-responsive-md">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">Current Period</th>
                                <th scope="col">Previous Period</th>
                                <th scope="col">INCREASE (or DECREASE)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="align-items-center">
                                <th>DIRECT PRODUCT / SERVICE COSTS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="direct_product1" class="c_o_g_c" onkeyup="calc_cfs_values('direct_product', 'c_o_g_c', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_service_costs_current]" value="<?= $tool['tool_builder_service_costs_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="direct_product2" class="c_o_g_p" onkeyup="calc_cfs_values('direct_product', 'c_o_g_p', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_service_costs_previous]" value="<?= $tool['tool_builder_service_costs_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="direct_product3" class="c_o_g_i" name="tool_builder_fm_cfs[tool_builder_service_costs_increase]" value="<?= $tool['tool_builder_service_costs_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>PAYROLL BENEFITS – DIRECT </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="payroll_benefits1" class="c_o_g_c" onkeyup="calc_cfs_values('payroll_benefits', 'c_o_g_c', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_payroll_benefits_current]" value="<?= $tool['tool_builder_payroll_benefits_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="payroll_benefits2" class="c_o_g_p" onkeyup="calc_cfs_values('payroll_benefits', 'c_o_g_p', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_payroll_benefits_previous]" value="<?= $tool['tool_builder_payroll_benefits_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="payroll_benefits3" class="c_o_g_i" name="tool_builder_fm_cfs[tool_builder_payroll_benefits_increase]" value="<?= $tool['tool_builder_payroll_benefits_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>SALARIES – DIRECT </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="salaries1" class="c_o_g_c" onkeyup="calc_cfs_values('salaries', 'c_o_g_c', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_salaries_current]" value="<?= $tool['tool_builder_salaries_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="salaries2" class="c_o_g_p" onkeyup="calc_cfs_values('salaries', 'c_o_g_p', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_salaries_previous]" value="<?= $tool['tool_builder_salaries_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="salaries3" class="c_o_g_i" name="tool_builder_fm_cfs[tool_builder_salaries_increase]" value="<?= $tool['tool_builder_salaries_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>SUPPLIES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="supplies1" class="c_o_g_c" onkeyup="calc_cfs_values('supplies', 'c_o_g_c', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_supplies_current]" value="<?= $tool['tool_builder_supplies_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="supplies2" class="c_o_g_p" onkeyup="calc_cfs_values('supplies', 'c_o_g_p', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_supplies_previous]" value="<?= $tool['tool_builder_supplies_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="supplies3" class="c_o_g_i" name="tool_builder_fm_cfs[tool_builder_supplies_increase]" value="<?= $tool['tool_builder_supplies_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER COST OF GOODS SOLD</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other_cost1" class="c_o_g_c" onkeyup="calc_cfs_values('other_cost', 'c_o_g_c', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_current_1]" value="<?= $tool['tool_builder_other_cost_of_goods_current_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other_cost2" class="c_o_g_p" onkeyup="calc_cfs_values('other_cost', 'c_o_g_p', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_previous_1]" value="<?= $tool['tool_builder_other_cost_of_goods_previous_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="other_cost3" class="c_o_g_i" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_increase_1]" value="<?= $tool['tool_builder_other_cost_of_goods_increase_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER COST OF GOODS SOLD</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other1_cost1" class="c_o_g_c" onkeyup="calc_cfs_values('other1_cost', 'c_o_g_c', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_current_2]" value="<?= $tool['tool_builder_other_cost_of_goods_current_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other1_cost2" class="c_o_g_p" onkeyup="calc_cfs_values('other1_cost', 'c_o_g_p', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_previous_2]" value="<?= $tool['tool_builder_other_cost_of_goods_previous_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="other1_cost3" class="c_o_g_i" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_increase_2]" value="<?= $tool['tool_builder_other_cost_of_goods_increase_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER COST OF GOODS SOLD</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other2_cost1" class="c_o_g_c" onkeyup="calc_cfs_values('other2_cost', 'c_o_g_c', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_current_3]" value="<?= $tool['tool_builder_other_cost_of_goods_current_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other2_cost2" class="c_o_g_p" onkeyup="calc_cfs_values('other2_cost', 'c_o_g_p', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_previous_3]" value="<?= $tool['tool_builder_other_cost_of_goods_previous_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="other2_cost3" class="c_o_g_i" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_increase_3]" value="<?= $tool['tool_builder_other_cost_of_goods_increase_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER COST OF GOODS SOLD</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other3_cost1" class="c_o_g_c" onkeyup="calc_cfs_values('other3_cost', 'c_o_g_c', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_current_4]" value="<?= $tool['tool_builder_other_cost_of_goods_current_4'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="other3_cost2" class="c_o_g_p" onkeyup="calc_cfs_values('other3_cost', 'c_o_g_p', 'c_o_g_i')" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_previous_4]" value="<?= $tool['tool_builder_other_cost_of_goods_previous_4'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="other3_cost3" class="c_o_g_i" name="tool_builder_fm_cfs[tool_builder_other_cost_of_goods_increase_4]" value="<?= $tool['tool_builder_other_cost_of_goods_increase_4'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>Total COST OF GOODS SOLD </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="c_o_g_c" name="tool_builder_fm_cfs[tool_builder_total_cost_of_goods_current]" value="<?= $tool['tool_builder_total_cost_of_goods_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="c_o_g_p" name="tool_builder_fm_cfs[tool_builder_total_cost_of_goods_previous]" value="<?= $tool['tool_builder_total_cost_of_goods_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="c_o_g_i" name="tool_builder_fm_cfs[tool_builder_total_cost_of_goods_increase]" value="<?= $tool['tool_builder_total_cost_of_goods_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>


                            </tbody>
                          </table>

                          <div class="fld-textarea">
                            <label for="">Operating Expenses</label>
                          </div>

                          <table class="table table-responsive-md">
                            <thead>
                              <tr>
                                <th scope="col"> </th>
                                <th scope="col">Current Period</th>
                                <th scope="col">Previous Period</th>
                                <th scope="col">INCREASE (or DECREASE)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="align-items-center">
                                <th>ACCOUNT FEES</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="account_fees1" class="o_e_c" onkeyup="calc_cfs_values('account_fees', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_account_fees_current]" value="<?= $tool['tool_builder_account_fees_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="account_fees2" class="o_e_p" onkeyup="calc_cfs_values('account_fees', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_account_fees_previous]" value="<?= $tool['tool_builder_account_fees_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="account_fees3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_account_fees_increase]" value="<?= $tool['tool_builder_account_fees_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>


                              <tr class="align-items-center">
                                <th>ADVERTISING</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="cfs_advertising1" class="o_e_c" onkeyup="calc_cfs_values('cfs_advertising', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_advertising_current]" value="<?= $tool['tool_builder_advertising_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="cfs_advertising2" class="o_e_p" onkeyup="calc_cfs_values('cfs_advertising', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_advertising_previous]" value="<?= $tool['tool_builder_advertising_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="cfs_advertising3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_advertising_increase]" value="<?= $tool['tool_builder_advertising_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>


                              <tr class="align-items-center">
                                <th>BANK FEES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="bank_fees1" class="o_e_c" onkeyup="calc_cfs_values('bank_fees', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_bank_fees_current]" value="<?= $tool['tool_builder_bank_fees_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="bank_fees2" class="o_e_p" onkeyup="calc_cfs_values('bank_fees', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_bank_fees_previous]" value="<?= $tool['tool_builder_bank_fees_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="bank_fees3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_bank_fees_increase]" value="<?= $tool['tool_builder_bank_fees_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>CONTINUING EDUCATION </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="education1" class="o_e_c" onkeyup="calc_cfs_values('education', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_continuing_education_current]" value="<?= $tool['tool_builder_continuing_education_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="education2" class="o_e_p" onkeyup="calc_cfs_values('education', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_continuing_education_previous]" value="<?= $tool['tool_builder_continuing_education_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="education3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_continuing_education_increase]" value="<?= $tool['tool_builder_continuing_education_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>DUES / SUBSCRIPTIONS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="dues1" class="o_e_c" onkeyup="calc_cfs_values('dues', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_dues_current]" value="<?= $tool['tool_builder_dues_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="dues2" class="o_e_p" onkeyup="calc_cfs_values('dues', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_dues_previous]" value="<?= $tool['tool_builder_dues_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="dues3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_dues_increase]" value="<?= $tool['tool_builder_dues_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>INSURANCE </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="insurance1" class="o_e_c" onkeyup="calc_cfs_values('insurance', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_insurance_current]" value="<?= $tool['tool_builder_insurance_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="insurance2" class="o_e_p" onkeyup="calc_cfs_values('insurance', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_insurance_previous]" value="<?= $tool['tool_builder_insurance_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="insurance3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_insurance_increase]" value="<?= $tool['tool_builder_insurance_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>INTERNET </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="internet1" class="o_e_c" onkeyup="calc_cfs_values('internet', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_internet_current]" value="<?= $tool['tool_builder_internet_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="internet2" class="o_e_p" onkeyup="calc_cfs_values('internet', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_internet_previous]" value="<?= $tool['tool_builder_internet_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="internet3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_internet_increase]" value="<?= $tool['tool_builder_internet_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>LICENSES / PERMITS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="licenses1" class="o_e_c" onkeyup="calc_cfs_values('licenses', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_licenses_current]" value="<?= $tool['tool_builder_licenses_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="licenses2" class="o_e_p" onkeyup="calc_cfs_values('licenses', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_licenses_previous]" value="<?= $tool['tool_builder_licenses_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="licenses3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_licenses_increase]" value="<?= $tool['tool_builder_licenses_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>MEALS / ENTERTAINMENT </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="meals1" class="o_e_c" onkeyup="calc_cfs_values('meals', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_meals_current]" value="<?= $tool['tool_builder_meals_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="meals2" class="o_e_p" onkeyup="calc_cfs_values('meals', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_meals_previous]" value="<?= $tool['tool_builder_meals_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="meals3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_meals_increase]" value="<?= $tool['tool_builder_meals_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OFFICE SUPPLIES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="office_supplies1" class="o_e_c" onkeyup="calc_cfs_values('office_supplies', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_office_supplies_current]" value="<?= $tool['tool_builder_office_supplies_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="office_supplies2" class="o_e_p" onkeyup="calc_cfs_values('office_supplies', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_office_supplies_previous]" value="<?= $tool['tool_builder_office_supplies_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="office_supplies3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_office_supplies_increase]" value="<?= $tool['tool_builder_office_supplies_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>PAYROLL PROCESSING </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="payroll1" class="o_e_c" onkeyup="calc_cfs_values('payroll', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_payroll_processing_current]" value="<?= $tool['tool_builder_payroll_processing_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="payroll2" class="o_e_p" onkeyup="calc_cfs_values('office_supplies', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_payroll_processing_previous]" value="<?= $tool['tool_builder_payroll_processing_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="payroll3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_payroll_processing_increase]" value="<?= $tool['tool_builder_payroll_processing_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>PAYROLL BENEFITS – INDIRECT </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="payroll1_benefits1" class="o_e_c" onkeyup="calc_cfs_values('payroll1_benefits', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_payroll_benefits_indirect_current]" value="<?= $tool['tool_builder_payroll_benefits_indirect_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="payroll1_benefits2" class="o_e_p" onkeyup="calc_cfs_values('payroll1_benefits', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_payroll_benefits_indirect_previous]" value="<?= $tool['tool_builder_payroll_benefits_indirect_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="payroll1_benefits3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_payroll_benefits_indirect_increase]" value="<?= $tool['tool_builder_payroll_benefits_indirect_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>POSTAGE / SHIPPING </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="postage1" class="o_e_c" onkeyup="calc_cfs_values('postage', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_postage_current]" value="<?= $tool['tool_builder_postage_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="postage2" class="o_e_p" onkeyup="calc_cfs_values('postage', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_postage_previous]" value="<?= $tool['tool_builder_postage_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="postage3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_postage_increase]" value="<?= $tool['tool_builder_postage_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>PRINTING</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="printing1" class="o_e_c" onkeyup="calc_cfs_values('printing', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_printing_current]" value="<?= $tool['tool_builder_printing_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="printing2" class="o_e_p" onkeyup="calc_cfs_values('printing', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_printing_previous]" value="<?= $tool['tool_builder_printing_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="printing3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_printing_increase]" value="<?= $tool['tool_builder_printing_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>PROFESSIONAL SVCS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="professional1" class="o_e_c" onkeyup="calc_cfs_values('professional', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_professional_svcs_current]" value="<?= $tool['tool_builder_professional_svcs_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="professional2" class="o_e_p" onkeyup="calc_cfs_values('professional', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_professional_svcs_previous]" value="<?= $tool['tool_builder_professional_svcs_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="professional3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_professional_svcs_increase]" value="<?= $tool['tool_builder_professional_svcs_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OCCUPANCY </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="occupancy1" class="o_e_c" onkeyup="calc_cfs_values('occupancy', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_occupancy_current]" value="<?= $tool['tool_builder_occupancy_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="occupancy2" class="o_e_p" onkeyup="calc_cfs_values('occupancy', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_occupancy_previous]" value="<?= $tool['tool_builder_occupancy_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="occupancy3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_occupancy_increase]" value="<?= $tool['tool_builder_occupancy_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>RENTAL FEES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="rental1" class="o_e_c" onkeyup="calc_cfs_values('rental', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_rental_fees_current]" value="<?= $tool['tool_builder_rental_fees_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="rental2" class="o_e_p" onkeyup="calc_cfs_values('rental', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_rental_fees_previous]" value="<?= $tool['tool_builder_rental_fees_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="rental3" class="o_e_i" name="tool_builder_fm_cfs[tool_builder_rental_fees_increase]" value="<?= $tool['tool_builder_rental_fees_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>SALARIES – INDIRECT </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="salaries_indirect1" class="o_e_c" onkeyup="calc_cfs_values('salaries_indirect', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_salaries_indirect_current]" value="<?= $tool['tool_builder_salaries_indirect_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="salaries_indirect2" class="o_e_p" onkeyup="calc_cfs_values('salaries_indirect', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_salaries_indirect_previous]" value="<?= $tool['tool_builder_salaries_indirect_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="salaries_indirect3" name="tool_builder_fm_cfs[tool_builder_salaries_indirect_increase]" value="<?= $tool['tool_builder_salaries_indirect_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>SUBCONTRACTORS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="subcontractors1" class="o_e_c" onkeyup="calc_cfs_values('subcontractors', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_subcontractors_current]" value="<?= $tool['tool_builder_subcontractors_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="subcontractors2" class="o_e_p" onkeyup="calc_cfs_values('subcontractors', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_subcontractors_previous]" value="<?= $tool['tool_builder_subcontractors_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="subcontractors3" name="tool_builder_fm_cfs[tool_builder_subcontractors_increase]" value="<?= $tool['tool_builder_subcontractors_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>TELEPHONE </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="telephone1" class="o_e_c" onkeyup="calc_cfs_values('telephone', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_telephone_current]" value="<?= $tool['tool_builder_telephone_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="telephone2" class="o_e_p" onkeyup="calc_cfs_values('telephone', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_telephone_previous]" value="<?= $tool['tool_builder_telephone_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="telephone3" name="tool_builder_fm_cfs[tool_builder_telephone_increase]" value="<?= $tool['tool_builder_telephone_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>TRANSPORTATION </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="transportation1" class="o_e_c" onkeyup="calc_cfs_values('transportation', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_transportation_current]" value="<?= $tool['tool_builder_transportation_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="transportation2" class="o_e_p" onkeyup="calc_cfs_values('transportation', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_transportation_previous]" value="<?= $tool['tool_builder_transportation_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="transportation3" name="tool_builder_fm_cfs[tool_builder_transportation_increase]" value="<?= $tool['tool_builder_transportation_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>TRAVEL </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="travel1" class="o_e_c" onkeyup="calc_cfs_values('travel', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_travel_current]" value="<?= $tool['tool_builder_travel_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="travel2" class="o_e_p" onkeyup="calc_cfs_values('travel', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_travel_previous]" value="<?= $tool['tool_builder_travel_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="travel3" name="tool_builder_fm_cfs[tool_builder_travel_increase]" value="<?= $tool['tool_builder_travel_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>UTILITIES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="utilities1" class="o_e_c" onkeyup="calc_cfs_values('utilities', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_utilities_current]" value="<?= $tool['tool_builder_utilities_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="utilities2" class="o_e_p" onkeyup="calc_cfs_values('utilities', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_utilities_previous]" value="<?= $tool['tool_builder_utilities_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="utilities3" name="tool_builder_fm_cfs[tool_builder_utilities_increase]" value="<?= $tool['tool_builder_utilities_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>WEB DEVELOPMENT </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="development1" class="o_e_c" onkeyup="calc_cfs_values('development', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_web_development_current]" value="<?= $tool['tool_builder_web_development_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="development2" class="o_e_p" onkeyup="calc_cfs_values('development', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_web_development_previous]" value="<?= $tool['tool_builder_web_development_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="development3" name="tool_builder_fm_cfs[tool_builder_web_development_increase]" value="<?= $tool['tool_builder_web_development_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>WEB DOMAIN AND HOSTING </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="hosting1" class="o_e_c" onkeyup="calc_cfs_values('hosting', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_web_domain_current]" value="<?= $tool['tool_builder_web_domain_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="hosting2" class="o_e_p" onkeyup="calc_cfs_values('hosting', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_web_domain_previous]" value="<?= $tool['tool_builder_web_domain_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="hosting3" name="tool_builder_fm_cfs[tool_builder_web_domain_increase]" value="<?= $tool['tool_builder_web_domain_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER OPERATING EXPENSES</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="operating1" class="o_e_c" onkeyup="calc_cfs_values('operating', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_other_operating_expenses_current_1]" value="<?= $tool['tool_builder_other_operating_expenses_current_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="operating2" class="o_e_p" onkeyup="calc_cfs_values('operating', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_other_operating_expenses_previous_1]" value="<?= $tool['tool_builder_other_operating_expenses_previous_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="operating3" name="tool_builder_fm_cfs[tool_builder_other_operating_expenses_increase_1]" value="<?= $tool['tool_builder_other_operating_expenses_increase_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER OPERATING EXPENSES</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="operating_expenses1" class="o_e_c" onkeyup="calc_cfs_values('operating_expenses', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_other_operating_expenses_current_2]" value="<?= $tool['tool_builder_other_operating_expenses_current_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="operating_expenses2" class="o_e_p" onkeyup="calc_cfs_values('operating_expenses', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_other_operating_expenses_previous_2]" value="<?= $tool['tool_builder_other_operating_expenses_previous_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="operating_expenses3" name="tool_builder_fm_cfs[tool_builder_other_operating_expenses_increase_2]" value="<?= $tool['tool_builder_other_operating_expenses_increase_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER OPERATING EXPENSES</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="operating1_expenses1" class="o_e_c" onkeyup="calc_cfs_values('operating1_expenses', 'o_e_c', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_other_operating_expenses_current_3]" value="<?= $tool['tool_builder_other_operating_expenses_current_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="operating1_expenses2" class="o_e_p" onkeyup="calc_cfs_values('operating1_expenses', 'o_e_p', 'o_e_i')" name="tool_builder_fm_cfs[tool_builder_other_operating_expenses_previous_3]" value="<?= $tool['tool_builder_other_operating_expenses_previous_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="operating1_expenses3" name="tool_builder_fm_cfs[tool_builder_other_operating_expenses_increase_3]" value="<?= $tool['tool_builder_other_operating_expenses_increase_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>TOTAL OPERATING EXPENSES</th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="o_e_c" name="tool_builder_fm_cfs[tool_builder_total_operating_expenses_current]" value="<?= $tool['tool_builder_total_operating_expenses_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="o_e_p" name="tool_builder_fm_cfs[tool_builder_total_operating_expenses_previous]" value="<?= $tool['tool_builder_total_operating_expenses_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="o_e_i" name="tool_builder_fm_cfs[tool_builder_total_operating_expenses_increase]" value="<?= $tool['tool_builder_total_operating_expenses_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                            </tbody>
                          </table>

                          <div class="fld-textarea">
                            <label for="">Additional Expenses</label>
                          </div>

                          <table class="table table-responsive-md">
                            <thead>
                              <tr>
                                <th scope="col"> </th>
                                <th scope="col">Current Period</th>
                                <th scope="col">Previous Period</th>
                                <th scope="col">INCREASE (or DECREASE)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="align-items-center">
                                <th>CASH DISBURSEMENTS TO OWNERS </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="disbursements1" class="a_e_c" onkeyup="calc_cfs_values('disbursements', 'a_e_c', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_cash_disbursements_current]" value="<?= $tool['tool_builder_cash_disbursements_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="disbursements2" class="a_e_p" onkeyup="calc_cfs_values('disbursements', 'a_e_p', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_cash_disbursements_previous]" value="<?= $tool['tool_builder_cash_disbursements_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="disbursements3" class="a_e_i" name="tool_builder_fm_cfs[tool_builder_cash_disbursements_increase]" value="<?= $tool['tool_builder_cash_disbursements_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>INTEREST EXPENSE </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="interest_expense1" class="a_e_c" onkeyup="calc_cfs_values('interest_expense', 'a_e_c', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_interest_expense_current]" value="<?= $tool['tool_builder_interest_expense_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="interest_expense2" class="a_e_p" onkeyup="calc_cfs_values('interest_expense', 'a_e_p', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_interest_expense_previous]" value="<?= $tool['tool_builder_interest_expense_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="interest_expense3" class="a_e_i" name="tool_builder_fm_cfs[tool_builder_interest_expense_increase]" value="<?= $tool['tool_builder_interest_expense_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>INCOME TAX EXPENSE </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="income_expense1" class="a_e_c" onkeyup="calc_cfs_values('income_expense', 'a_e_c', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_income_tax_expense_current]" value="<?= $tool['tool_builder_income_tax_expense_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="income_expense2" class="a_e_p" onkeyup="calc_cfs_values('income_expense', 'a_e_p', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_income_tax_expense_previous]" value="<?= $tool['tool_builder_income_tax_expense_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="income_expense3" class="a_e_i" name="tool_builder_fm_cfs[tool_builder_income_tax_expense_increase]" value="<?= $tool['tool_builder_income_tax_expense_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER ADDITIONAL EXPENSES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="additional_expense1" class="a_e_c" onkeyup="calc_cfs_values('additional_expense', 'a_e_c', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_current_1]" value="<?= $tool['tool_builder_other_additional_expense_current_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="additional_expense2" class="a_e_p" onkeyup="calc_cfs_values('additional_expense', 'a_e_p', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_previous_1]" value="<?= $tool['tool_builder_other_additional_expense_previous_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="additional_expense3" class="a_e_i" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_increase_1]" value="<?= $tool['tool_builder_other_additional_expense_increase_1'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER ADDITIONAL EXPENSES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="additional1_expense1" class="a_e_c" onkeyup="calc_cfs_values('additional1_expense', 'a_e_c', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_current_2]" value="<?= $tool['tool_builder_other_additional_expense_current_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="additional1_expense2" class="a_e_p" onkeyup="calc_cfs_values('additional1_expense', 'a_e_p', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_previous_2]" value="<?= $tool['tool_builder_other_additional_expense_previous_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="additional1_expense3" class="a_e_i" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_increase_2]" value="<?= $tool['tool_builder_other_additional_expense_increase_2'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER ADDITIONAL EXPENSES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="additional2_expense1" class="a_e_c" onkeyup="calc_cfs_values('additional2_expense', 'a_e_c', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_current_3]" value="<?= $tool['tool_builder_other_additional_expense_current_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="additional2_expense2" class="a_e_p" onkeyup="calc_cfs_values('additional2_expense', 'a_e_p', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_previous_3]" value="<?= $tool['tool_builder_other_additional_expense_previous_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="additional2_expense3" class="a_e_i" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_increase_3]" value="<?= $tool['tool_builder_other_additional_expense_increase_3'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>OTHER ADDITIONAL EXPENSES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="additional3_expense1" class="a_e_c" onkeyup="calc_cfs_values('additional3_expense', 'a_e_c', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_current_4]" value="<?= $tool['tool_builder_other_additional_expense_current_4'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" id="additional3_expense2" class="a_e_p" onkeyup="calc_cfs_values('additional3_expense', 'a_e_p', 'a_e_i')" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_previous_4]" value="<?= $tool['tool_builder_other_additional_expense_previous_4'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="additional3_expense3" class="a_e_i" name="tool_builder_fm_cfs[tool_builder_other_additional_expense_increase_4]" value="<?= $tool['tool_builder_other_additional_expense_increase_4'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>

                              <tr class="align-items-center">
                                <th>Total ADDITIONAL EXPENSES </th>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="a_e_c" name="tool_builder_fm_cfs[tool_builder_total_additional_expense_current]" value="<?= $tool['tool_builder_total_additional_expense_current'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="a_e_p" name="tool_builder_fm_cfs[tool_builder_total_additional_expense_previous]" value="<?= $tool['tool_builder_total_additional_expense_previous'] ?>" placeholder="0">
                                  </div>
                                </td>
                                <td>
                                  <div class="fld-text mb-0">
                                    <input type="number" readonly id="a_e_i" name="tool_builder_fm_cfs[tool_builder_total_additional_expense_increase]" value="<?= $tool['tool_builder_total_additional_expense_increase'] ?>" placeholder="0">
                                  </div>
                                </td>
                              </tr>


                              <input type="hidden" id="tool_builder_total_cash_payments_current" name="tool_builder_fm_cfs[tool_builder_total_cash_payments_current]" value="<?= $tool['tool_builder_total_cash_payments_current'] ?>" placeholder="0">
                              <input type="hidden" id="tool_builder_total_cash_payments_previous" name="tool_builder_fm_cfs[tool_builder_total_cash_payments_previous]" value="<?= $tool['tool_builder_total_cash_payments_previous'] ?>" placeholder="0">
                              <input type="hidden" id="tool_builder_total_cash_payments_increase" name="tool_builder_fm_cfs[tool_builder_total_cash_payments_increase]" value="<?= $tool['tool_builder_total_cash_payments_increase'] ?>" placeholder="0">

                              <input type="hidden" id="tool_builder_net_cash_change_current" name="tool_builder_fm_cfs[tool_builder_net_cash_change_current]" value="<?= $tool['tool_builder_net_cash_change_current'] ?>" placeholder="0">
                              <input type="hidden" id="tool_builder_net_cash_change_previous" name="tool_builder_fm_cfs[tool_builder_net_cash_change_previous]" value="<?= $tool['tool_builder_net_cash_change_previous'] ?>" placeholder="0">
                              <input type="hidden" id="tool_builder_net_cash_change_increase" name="tool_builder_fm_cfs[tool_builder_net_cash_change_increase]" value="<?= $tool['tool_builder_net_cash_change_increase'] ?>" placeholder="0">

                              <input type="hidden" id="tool_builder_month_ending_current" name="tool_builder_fm_cfs[tool_builder_month_ending_current]" value="<?= $tool['tool_builder_month_ending_current'] ?>" placeholder="0">
                              <input type="hidden" id="tool_builder_month_ending_previous" name="tool_builder_fm_cfs[tool_builder_month_ending_previous]" value="<?= $tool['tool_builder_month_ending_previous'] ?>" placeholder="0">
                              <input type="hidden" id="tool_builder_month_ending_increase" name="tool_builder_fm_cfs[tool_builder_month_ending_increase]" value="<?= $tool['tool_builder_month_ending_increase'] ?>" placeholder="0">

                            </tbody>
                          </table>




                          <div style="display:none;">
                            <button id="forms-tool_builder-btn1" type="submit">SUBMIT</button>
                          </div>
                        </form>
                      </div>
                      <div style="overflow:auto;">
                        <div class="next-prevBtn" style="float:right;">
                          <button type="button" id="nextBtn1" onclick="nextPrev(1,'your_work?tool=12&cat=22')">Submit</button>
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