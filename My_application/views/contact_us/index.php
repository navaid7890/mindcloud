    <style>
    .social a{
        display: contents !important;
    }

    .fld-contact input  {
    /* height: 70px; */
    /* background: #6b6e72 0% 0% no-repeat padding-box; */
    border-radius: 8px;
    width: 100%;
    padding: 15px 25px;
    resize: none;
    border: 1px solid #ccc;
}

.fld-contact textarea
{

  height: 150px;
  border: 1px solid #ccc;
  background:transparent;
}

.ban h2 {
    padding: 30px;
    font-size: 50px;
    font-weight: 600;
}

.pad-sec {
    padding: 30px 0;
}

.fld-contact-half:nth-child(2n) {
    margin-left: 0px;
}
.criteriaHead p {
    padding-bottom: 15px;
}

form#forms-contact_us {
    padding: 10% 0 0 0;
}

.contact-info ul {
    margin-bottom: 30px;
}

.contact-info ul li {
    margin-bottom: 35px;
}

.contact-info ul li a {
    color: hsl(220, 29%, 28%);
    font-size: 17px;
    border-bottom: 1px solid transparent;
}

.contact-info {
    padding: 15% 0;
}
.contact-info ul li a i
{
margin-right: 10px;

}
    </style>
    <!-- Begin: Crousel -->

    <!-- END: Crousel -->
    <section class="contactSec pad-sec hding-1 para">
      <div class="container">
      <div class="criteriaHead">
        <h1><p><span style="font-size:36px;">Contact&nbsp;<strong>Us</strong></span></p></h1>

      </div>

      <div class="row">
        <div class="col-md-6">

            <form id="forms-contact_us">
              <div class="fld-contact fld-contact-half">
                <label>Your Name</label>
                <input type="text" name="inquiry[inquiry_name]" required="">
              </div>

              <!-- <div class="fld-contact fld-contact-half">
                <label>Last name</label>
                <input type="text" name="inquiry[inquiry_lastname]">
              </div> -->

              <div class="fld-contact fld-contact-half">
                <label>Your Email Address</label>
                <input type="text" name="inquiry[inquiry_email]">
              </div>

              <div class="fld-contact fld-contact-half">
                <label>Subject</label>
                <input type="text" name="inquiry[inquiry_subject]">
              </div>

     

              <div class="fld-contact">
                <label>Your Message </label>
                <textarea name="inquiry[inquiry_message]"></textarea>
              </div>

              <div class="row pt-70 align-items-center">
             

                <div class="col-lg-2 col-md-4">
                  <div class="fld-btn">
                    <input type="submit" id="forms-contact_us-btn" value="Submit">
                  </div>
                </div>
              </div>

            </form>

        </div>

        <div class="col-md-6">
        <div class="contact-info">
        <ul>
                            <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i><?=g('db.admin.company_address')?> </a></li>
                            <li><a href="tel:<?=g('db.admin.phone')?>"><i class="fa fa-phone" aria-hidden="true"></i><?=g('db.admin.phone')?></a></li>
                            <li><a href="mailto:<?=g('db.admin.email_contact_us')?>"><i class="fa fa-envelope" aria-hidden=" true"></i><?=g('db.admin.email_contact_us')?></a></li>

                        </ul>
        </div>



        </div>
      </div>
      </div>
    </section>

