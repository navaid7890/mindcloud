<style>
.joinContents {
    padding: 5% 3%;
}

.joinContents h2 {
    border-bottom: 8px solid #F4C150;
    display: inline;
    padding-bottom: 12px;
    position: relative;
    margin-bottom: 33px;
    display: inline-block;
    font-size: 50px;
}

 
.joinContents p {
    font-size: 15px;
    line-height: 30px;
}

input[type=text] {
    background: #ffffff00;
    /* border: none; */
    border-radius: 0px;
    font-family: 'Open Sans';
    font-weight: 400;
    color: #000;
    border: 1px solid rgba(0,0,0,.15);
}


</style>


<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="form-expert_us">
      <div class="modal-body">

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Your Full Name (Required):</label>
            <input type="text" class="form-control" id="recipient-name" name="inquiry[inquiry_name]" required="">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Your Email (Required):</label>
            <input type="text" class="form-control" id="recipient-name" name="inquiry[inquiry_email]" required="">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Your Mobile (Required):</label>
            <input type="text" class="form-control" id="recipient-name" name="inquiry[inquiry_phone]" required="">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Your Address:</label>
            <textarea class="form-control" id="message-text" name="inquiry[inquiry_address]" required=""></textarea>
          </div>
      


          <div class="mb-3">
            <label for="message-text" class="col-form-label">Upload Expert Agreement:</label>
            <input type="file" class="form-control" id="recipient-name" name="inquiry[inquiry_image]" required=""> 
          </div>
          <div class="mb-3">
          <?$this->load->view("widgets/google_captcha")?>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="forms-contact_us-btn">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>
<section class="myjoin">
   <div class="joinContents">
   <?=html_entity_decode($con1['cms_page_title'])?>
      <div class="space"><br></div>
      <?=html_entity_decode($con1['cms_page_content'])?>
      <div class="space"><br><br></div>

      <a href="#" class="btn-theme btn-hover"  data-toggle="modal" data-target="#exampleModal1">Join Now</a>
   </div>
</section>

<? $this->load->view('widgets/_clients'); ?>


