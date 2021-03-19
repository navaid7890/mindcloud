<div class="ban">
      <h2><?=$course['course_name']?></h2>
    </div>

    <section class="lecture">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <div class="title">
              <h4><?=$lecture['lecture_name']?><span>Duration:<?=$course['course_duration']?></span></h4>
            </div>
            <div class="lecDetl">
              <h2><?=$lecture['lecture_sub_title']?></h2>
              <?=html_entity_decode($lecture['lecture_desc'])?>
            </div>
            <a href="" class="btnStyle">Previous</a>
            <a href="" class="btnStyle">Next</a>
          </div>
        </div>
      </div>
    </section>