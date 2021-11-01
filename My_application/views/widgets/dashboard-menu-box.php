<!-- <a href="#" class="menu-dash">MENU<i class="fal fa-bars"></i></a> -->
<div class="dashboard-menu-box open">
   <div class="dashboar-menu">
      <div class="dashboard-links">
         <ul class="dashboard-nav dash-scroll">
            <li>
               <a href="<?= l('account-area') ?>" class="active">
                  <span><img src="<?= i('') ?>dashboard/menu/1.svg"></span>
                  Dashboard
               </a>
            </li>
            <li>
               <a href="<?= l('account/profile/expert') ?>">
                  <span><img src="<?= i('') ?>dashboard/menu/Group73.svg"></span>
                  My Experts Tutorials
               </a>
            </li>
            <!-- <li>
               <a href="<? //= l('booking') 
                        ?>">
                  <span><img src="<?= i('') ?>dashboard/menu/Group516.svg"></span>
                  Consult with Experts
               </a>
            </li> -->
            <!-- <li>
               <a href="<? //= l('consult-advisors') 
                        ?>">
                  <span><img src="<?= i('') ?>dashboard/menu/Group547.svg"></span>
                  Advisory
               </a>
            </li> -->
            <li>
               <a href="<?= l('account/profile/learning') ?>">
                  <span><img src="<?= i('') ?>dashboard/menu/2.svg"></span>
                  My Learning Journey
               </a>
            </li>
            <li>
               <?
               $startup = array();
               $startup['where']['startup_user_id'] = $this->userid;
               $startupdata = $this->model_startup->find_all_active($startup);
               // debug($startupdata[0]['startup_name']);
               ?>
               <a href="<?= l('account/profile/startup') ?>">
                  <span><img src="<?= i('') ?>dashboard/menu/3.svg"></span>
                  My Startup:
                  <? if (!empty($startupdata)) : ?>
                     <?= $startupdata[0]['startup_name'] ?>
                  <? else : ?>
                     -- -- --
                  <? endif; ?>
               </a>
            </li>


            <!-- <li class="dropdown-toggle">
               <a href="<? //= l('account/profile/learning') 
                        ?>">
                  <span><img src="<?= i('') ?>dashboard/menu/2.svg"></span>
                  My Learning Journey
               </a>

               <div class="dashboard-child-links">
                  <ul>
                     <?
                     // $startup = array();
                     // $startup['where']['startup_user_id'] = $this->userid;
                     // $startupdata = $this->model_startup->find_all_active($startup);
                     ?>

                     <li><a href="<? //= l('account/profile/startup') 
                                    ?>"> <span><img src="<? //= i('') 
                                                                                          ?>dashboard/menu/3.svg"></span> My Startup:
                           <? // if (!empty($startupdata)) : 
                           ?>
                              <? //= $startupdata[0]['startup_name'] 
                              ?>
                           <? // else : 
                           ?>
                              -- -- --
                           <? // endif; 
                           ?>
                        </a>
                     </li>
                  </ul>
               </div>
            </li> -->

            <li class="dropdown-toggle">
               <a href="<?= l('account-area/profile/edit') ?>">
                  <span><img src="<?= i('') ?>dashboard/menu/user.svg"></span>
                  My Profile
               </a>
<!-- 
               <div class="dashboard-child-links">
                  <ul> -->
                     <!-- <li>
                        <a href="<?= l('account-area/change-password') ?>">
                           <span><img src="<?= i('') ?>dashboard/menu/dot.png" style="width: 60%;"></span>
                           Password Change
                        </a>
                     </li> -->
                     <!-- <li>
                        <a href="<?= l('account-area/address-info') ?>">
                           <span><img src="<?= i('') ?>dashboard/menu/dot.png" style="width: 60%;"></span>
                           Address Info
                        </a>
                     </li> -->

                     <!-- <li>
                        <a href="<?= l('account-area/change-profile') ?>">
                           <span><img src="<?= i('') ?>dashboard/menu/dot.png" style="width: 60%;"></span>
                           About My Startup
                        </a>
                     </li> -->
<!-- 
                  </ul>
               </div> -->
            </li>
            <li>
               <a href="<?= l('account-area/change-password') ?>">
                  <span><img src="<?= i('') ?>dashboard/menu/dot.png" style="width: 60%;"></span>
                  Password Change
               </a>
            </li>
            <!-- <li>
                        <a href="<?= l('account-area/address-info') ?>">
                           <span><img src="<?= i('') ?>dashboard/menu/dot.png" style="width: 60%;"></span>
                           Address Info
                        </a>
                     </li> -->

            <li>
               <a href="<?= l('account-area/change-profile') ?>">
                  <span><img src="<?= i('') ?>dashboard/menu/dot.png" style="width: 60%;"></span>
                  About My Startup
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>