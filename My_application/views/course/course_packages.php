 <!-- Begin: Crousel -->
    <div class="ban">
      <h2>Continuing Education State Requirements</h2>
    </div>
    <div class="requirementFilter">
      <form action="post" class="filterForm">
        <select>
          <option>Profession</option>
        </select>
        <select>
          <option>Columbia</option>
        </select>
      </form>
    </div>
    <section class="courseDetail">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">

            <?php if (isset($packages) && array_filled($packages)): ?>
              <?php foreach ($packages as $key => $value): ?>
                <div class="requirement coursePackages">
              <div class="left">
                <div class="title">
                  <h4>PACAKAGE NAME</h4>
                </div>
                <!-- <h4>Florida - Certified Nursing Assistant 24-hour Package</h4> -->
                <h4><?=$value['package_name']?></h4>
                <img src="<?=get_image($value['package_image'],$value['package_image_path'])?>" alt="" class="img-responsive">
              </div>
              <div class="center">
                <div class="title">
                  <h4>Mandatory Courses</h4>
                </div>
                <ul class="list-unstyled list">
                  <?php if (isset($value['courses']) && array_filled($value['courses'])): ?>
                    <?php foreach ($value['courses'] as $key => $cour): ?>
                    <li><p><?=$cour['course_name']?></p></li>    
                    <?php endforeach ?>
                  <?php endif ?>
                </ul>
                <h5>General Hours</h5>
                <!-- <ul class="list-unstyled list">
                  <li><p>HIV/AIDS  2 hours</p></li>
                  <li><p>Human Trafficking 2 hours</p></li>
                  <li><p>Human Trafficking 2 hours</p></li>
                  <li><p>Phlebotomy 3 hours</p></li>
                </ul> -->
                <ul class="list-unstyled list">
                  <?=html_entity_decode($value['package_desc'])?>
                </ul>
              </div>
              <div class="right">
                <div class="title">
                  <h4>Price</h4>
                </div>
                <h2>
                  <?php if ($value['package_basic_price'] > 0): ?>
                  <del><?=price($value['package_basic_price'])?></del>
                  <?php endif ?>
                <?=price($value['package_price'])?></h2>
              </div>
              <!-- <a href="javascript:void(0)" class="btnStyle btn-block cpackage" data-link-pakage="<?=l('package-payment').'?item-id='.$value['package_id'].'&token='.md5($value['package_id']).'&type=package'?>" >PURCHASE</a> -->
        <a href="javascript:void(0)" class="btnStyle btn-block cpackage" data-id="<?=$value['package_id']?>" data-type="package">PURCHASE</a>
            </div>

              <?php endforeach ?>
            <?php endif ?>

          
          </div>
        </div>
      </div>
    </section>




    
    <?
    $this->load->view('widgets/-widget_paymentMethodModal')
    ?>

