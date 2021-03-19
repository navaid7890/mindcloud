<style type="text/css">
	.opt{
		list-style: none;
	}
	.opt li input[type="radio"] {
		height: auto !important;
    	margin-right: 10px;
	}
  input[type="radio"]{
    height: auto !important;
  }

</style>
<div class="ban">
      <h2>COURSE EVALUATION FORM</h2>
    </div>

    <section class="evalutionForm">
      <div class="container"> 
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <form class="row formStyle" id="forms-evaluation">
            <input type="hidden" name="token" value="<?=$token?>">
            <input type="hidden" name="evaluation[evaluation_user_id]" value="<?=$this->userid?>">
            <input type="hidden" name="evaluation[evaluation_quiz_id]" value="<?=$quizid?>">
            <input type="hidden" name="evaluation[evaluation_course_id]" value="<?=$courseid?>">
              <label>Course Title:  <?=$course_title?> 
					<br>
              <span>Date:</span><?=$quizdate?> 
              </label>
              <label>Participant's Name: <?=$username?></label>
              <div class="content">
                <h3 class="text-center">Advance Healthcare CE’s EVALUATION TOOL</h3>
                <p>We appreciate your help in evaluating this course. Please indicate your rating of the presentation in the categories below by clicking the appropriate number, using a scale of 1 (low) through 5 (high).</p>
                <h3>OBJECTIVES</h3>
                <p>1. Were the objectives of this course met <span class="pull-right">
                <span></span>
                <input type="radio" name="evaluation[evaluation_objectives]" value="1" required="">1
                <input type="radio" name="evaluation[evaluation_objectives]" value="2" required="">2 
                <input type="radio" name="evaluation[evaluation_objectives]" value="3" required="">3 
                <input type="radio" name="evaluation[evaluation_objectives]" value="4" required="">4 
                <input type="radio" name="evaluation[evaluation_objectives]" value="5" required="">5 
                </span></p>
                <h3>CONTENT</h3>
                <p>1. Appropriate for intended audience<span class="pull-right">
                <input type="radio" name="evaluation[evaluation_appropriate]" value="1" required>1
                <input type="radio" name="evaluation[evaluation_appropriate]" value="2" required>2 
                <input type="radio" name="evaluation[evaluation_appropriate]" value="3" required>3 
                <input type="radio" name="evaluation[evaluation_appropriate]" value="4" required>4 
                <input type="radio" name="evaluation[evaluation_appropriate]" value="5" required>5 </span></p>
                <p>2. Consistent with stated objectives<span class="pull-right">
                <input type="radio" name="evaluation[evaluation_consistent]" value="1" required>1
                <input type="radio" name="evaluation[evaluation_consistent]" value="2" required>2 
                <input type="radio" name="evaluation[evaluation_consistent]" value="3" required>3 
                <input type="radio" name="evaluation[evaluation_consistent]" value="4" required>4 
                <input type="radio" name="evaluation[evaluation_consistent]" value="5" required>5 </span></p>
                <h3>RELEVANCY</h3>
                <p>1. Information could be applied to practice<span class="pull-right">
                <input type="radio" name="evaluation[evaluation_information]" value="1" required>1
                <input type="radio" name="evaluation[evaluation_information]" value="2" required>2 
                <input type="radio" name="evaluation[evaluation_information]" value="3" required>3 
                <input type="radio" name="evaluation[evaluation_information]" value="4" required>4 
                <input type="radio" name="evaluation[evaluation_information]" value="5" required>5 </span></p>
                <p>2. Information could contribute to achieving personal, professional goals<span class="pull-right">
                <input type="radio" name="evaluation[evaluation_goals]" value="1" required>1
                <input type="radio" name="evaluation[evaluation_goals]" value="2" required>2 
                <input type="radio" name="evaluation[evaluation_goals]" value="3" required>3 
                <input type="radio" name="evaluation[evaluation_goals]" value="4" required>4 
                <input type="radio" name="evaluation[evaluation_goals]" value="5" required>5 </span></p>
              </div>
              <label>This course enhanced my professional expertise </label>

              <label>
              <ul class="opt">
              <li><input type="radio" name="evaluation[evaluation_expertise]" required>Substantially</li>
              <li><input type="radio" name="evaluation[evaluation_expertise]" required>Somewhat</li>
              <li><input type="radio" name="evaluation[evaluation_expertise]" required>Not at all </li>
              </ul>
              
             <label>I would recommend this
              <ul class="opt">
              <li><input type="radio" name="evaluation[evaluation_recommend]" required>Yes</li>
              <li><input type="radio" name="evaluation[evaluation_recommend]" required>No</li>
              <li><input type="radio" name="evaluation[evaluation_recommend]" required>Not Sure course to others</li>
              </ul>
              <button class="btnStyle" id="forms-evaluation-btn">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    