    <!-- Begin: Crousel -->
    <div class="ban">
      <h2>Quiz Result</h2>
    </div>
    <!-- END: Crousel -->
    <section class="quizResult">
      <div class="container"> 
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="title text-center">
              <h3>Quiz Result</h3>
              <h2><?=$course['course_name']?></h2>
            </div>
            <p class="red">Sorry! You have Failed the Test</p>
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
            <!-- <a href="#" class="btnStyle">Try Again Test</a> -->
          </div>
        </div>
      </div>
    </section>