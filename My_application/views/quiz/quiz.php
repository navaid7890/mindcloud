<div class="ban">
      <h2>COURSE EVALUATION FORM</h2>
    </div>

    <section class="quiz">
      <div class="container"> 
       <input type="hidden" value="<?=$course['course_quiz_time']?>" name="course_quiz_time" id="course_quiz_timer">
        <div class="row">
        	<form id="form-quiz">
            <input type="hidden" value="<?=$course_id?>" name="course">
            <input type="hidden" value="<?=$order_item_id?>" name="itemid">
          <div class="col-md-12 col-sm-12">
            <div class="title text-center">
              <h3><?=$course['course_name']?> <div>Quiz ends in <span id="timer" style="color:red"></span> minutes!</div></h3>
              <p><em>(Each student must obtain a grade of <?=g('db.admin.passing_percentage')?>% or better to pass) <br>This quiz consist of <?=count($questions)?> questions </em></p>
              <h3>Total Time : <?=$course['course_quiz_time']?> minutes</h3>	
            </div>
            <?php if (isset($questions) && array_filled($questions)): ?>
            	<?php foreach ($questions as $key => $value): ?>
            		
            <div class="question">
              <h4>Question <?=$key+1?></h4>
              <p><?=$value['questions_name']?> </p>
              <ul>
              	<?php if (isset($value['options']) && array_filled($value['options'])): ?>
              		<?php foreach ($value['options'] as $key => $option): ?>
              <li><p><input type="radio" value="<?=$option['qo_id']?>" name="qs[<?=$value['questions_id']?>]" required> <?=$option['options_name']?></p></li>
              		<?php endforeach ?>
              	<?php endif ?>
             
              </ul>
              
            </div>

            	<?php endforeach ?>
            <?php endif ?>
            
            
            <div class="text-center">
              <button type="submit" class="btnStyle" id="forms-quiz-btn">See Result</button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </section>
    
    <script>
//     $(document).keydown(function (event) {
//     if (event.keyCode == 123) { // Prevent F12
//         return false;
//     } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
//         return false;
//     }
// });
    </script>

   


