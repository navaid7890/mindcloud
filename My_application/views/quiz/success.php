<style type="text/css">
   .certi span.name{
    font-size: 36px;
    font-weight: 900;
    text-transform: capitalize;
    color: #8F0728;
    display: table;
    position: absolute;
    top: 666px;
    left: 500px;
  }
  .certi span.course_title{
    font-size: 36px;
    font-weight: 900;
    text-transform: capitalize;
    color: #0B2769;
    display: table;
    position: absolute;
    top: 829px;
    left: 177px;
  }
  .certi span.completion_date{
     font-size: 19px;
    text-transform: capitalize;
    color: #353535;
    display: table;
    position: absolute;
    top: 46em;
    left: 41em;
}
.certi span.completion_date{
     font-size: 19px;
    text-transform: capitalize;
    color: #353535;
    display: table;
    position: absolute;
    top: 55em;
    left: 41em;
  }

   .certi span.course_tracking_number{
       font-size: 16px;
    text-transform: capitalize;
    color: #353535;
    display: table;
    position: absolute;
    top: 1181px;
    left: 656px;
  } 
 .certi span.ce_provider{
    font-size: 16px;
    text-transform: capitalize;
    color: #353535;
    display: table;
    position: absolute;
    top: 1209px;
    left: 634px;
  } 

  .certi span.certificate_number{
    font-size: 16px;
    text-transform: capitalize;
    color: #353535;
    display: table;
    position: absolute;
    top: 520px;
    left: 869px;
  } 
</style>
<div class="ban">
      <h2>Quiz Result</h2>
    </div>
    <section class="quizResult">
      <div class="container"> 
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <?php/* if ($call != "certificate"){ ?>
              <div class="title text-center">
              <h3>Quiz Result</h3>
              <h2><?=$course['course_name']?></h2>
            </div>
            <p class="green"><i class="fa fa-check"></i> Wow! Your are brilliant!</p>
            <ul class="list-unstyled result">
               <li>
                <p>Total Score <span class="pull-right"><?=$quiz['quiz_total']?></span></p>
              </li>
              <li>
                <p>Your Score <span class="pull-right"><?=$quiz['quiz_marks']?></span></p>
              </li>
              <li>
                <p>Your Percentage: <span class="pull-right"><?=$quiz['quiz_percentage']?>%</span></p>
              </li>
              <li>
                <p>Minimum Passing Score: <span class="pull-right">80%</span></p>
              </li>
            </ul>

            <?php }else{?>
            
            <div class="title text-center">
              <h3>CERTIFICATE</h3>
              <h2><?=$course['course_name']?></h2>
            </div>
            <?} */?>

            <div class="title text-center">
              <h3>Quiz Result</h3>
              <h2><?=$course['course_name']?></h2>
            </div>

          <p class="green"><i class="fa fa-check"></i> Wow! Your are brilliant!</p>
            <ul class="list-unstyled result">
               <li>
                <p>Total Score <span class="pull-right"><?=$quiz['quiz_total']?></span></p>
              </li>
              <li>
                <p>Your Score <span class="pull-right"><?=$quiz['quiz_marks']?></span></p>
              </li>
              <li>
                <p>Your Percentage: <span class="pull-right"><?=$quiz['quiz_percentage']?>%</span></p>
              </li>
              <li>
                <p>Minimum Passing Score: <span class="pull-right">80%</span></p>
              </li>
            </ul>


            <a href="<?=l('completion-certificate/').$quiz['quiz_id'].'?id='.md5($quiz['quiz_id'])?>" class="btnStyle">Download Certificate</a> 

          </div>
        </div>
      </div>
    </section>