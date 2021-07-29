    <style>
      .social a {
        display: contents !important;
      }

      .fld-contact input {
        /* height: 70px; */
        /* background: #6b6e72 0% 0% no-repeat padding-box; */
        border-radius: 8px;
        width: 100%;
        padding: 15px 25px;
        resize: none;
        border: 1px solid #ccc;
      }

      .fld-contact textarea {

        height: 150px;
        border: 1px solid #ccc;
        background: transparent;
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
        padding: 0% 0 0 0;
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
        padding: 5% 0;
      }

      .contact-info ul li a i {
        margin-right: 10px;

      }

      .redyContent.text-center {
        background: #f3f7fb;
        padding-bottom: 5px;
      }

      .readySec {
        background: #f3f7fb;
        padding-bottom: 15px;
      }

      .redyContent h1 {
        border-bottom: 8px solid #F4C150;
        display: inline;
        padding-bottom: 12px;
        position: relative;
        margin-bottom: 33px;
        display: inline-block;
        margin-top: 45px;
      }
    </style>
    <!-- Begin: Crousel -->

    <!-- END: Crousel -->
    <section class="contactSec pad-sec hding-1 para">
      <div class="container">


        <div class="row">

          <div class="col-md-12">

            <div class="readySec para hding-1 n">

              <div class="redyContent text-center">
                <h1><?= html_entity_decode($con1['cms_page_title']) ?></h1>
                <?= html_entity_decode($con1['cms_page_content']) ?>


              </div>

            </div>
          </div>


          <div class="col-md-12">

            <div class="readySec para hding-1 n">

              <div class="redyContent text-center">
                <h1>Contact Us</h1>


              </div>

            </div>
          </div>



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
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i><?= g('db.admin.company_address') ?> </a></li>
                <li><a href="tel:<?= g('db.admin.phone') ?>"><i class="fa fa-phone" aria-hidden="true"></i><?= g('db.admin.phone') ?></a></li>
                <li><a href="mailto:<?= g('db.admin.email_contact_us') ?>"><i class="fa fa-envelope" aria-hidden=" true"></i><?= g('db.admin.email_contact_us') ?></a></li>

              </ul>
            </div>
            <div class="mapArea">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.5689640906635!2d55.28068991544912!3d25.21775463705354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43e958c735a9%3A0x392043236fe0c351!2sAREA%202071!5e0!3m2!1sen!2s!4v1627551606135!5m2!1sen!2s" width="100%" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>