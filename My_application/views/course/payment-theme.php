 
    <!-- Begin: Crousel -->
    <div class="ban">
      <h2>Payment</h2>
    </div>
    <!-- END: Crousel -->
<section class="quizResult">
      <div class="container"> 
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="title text-center">
              <h3><?=$item_title?></h3>
            </div>
            <p style="text-transform: uppercase;"><?=$type?></p>
            <p class="red"> <?=$item_price?></p>
            <ul class="list-unstyled result">
              <li style="text-align:  center;">

                <?php if (isset($package_courses) && array_filled($package_courses)){ ?>
                  <?php foreach ($package_courses as $key => $value): ?>
                    <p><?=$value['course_name']?></p>
                  <?php endforeach ?>
                <?php }else{?>
                <p>Id # <?=$item_code?></p>
                  <?} ?>

              </li>
            </ul>
            <!-- <a href="#" class="btnStyle">Try Again Test</a> -->
                <?php if ($payment == 1){
                $this->load->view('widgets/_squareup');
            }else{
                $this->load->view('widgets/_paypal');
            }?>

          </div>
        </div>
      </div>
    </section>