<?php
$logo = $this->model_logo->find_one(
    array('where' => array('logo_status' => 1))
);
?>

<html>

<body>
    <div align="center">
        <div style="max-width: 680px; min-width: 500px; border: 2px solid #e3e3e3; border-radius:5px; margin-top: 20px">
            <div style="background: #f3f3f3">
                <img src="<?= i('') ?>test1.png" width="250" alt="<?= g('site_title') ?>" border="0" style='width: 25%; padding: 15px; margin: 0px auto; display: table;' />
            </div>
            <div style="background-color: #fbfcfd; border-top: thick double #cccccc; text-align: left;">
                <div style="margin: 30px;">
                    <p>
                        <?php

                        $a = $form_input['booking_user_id'];
                        $b = $form_input['booking_expert_id'];
                        if (isset($msg)) {
                            echo $msg;
                        } else {
                        ?>
                            Hi <?= $this->session->userdata['logged_in_front']['first_name'] ?>,<br> <br>
                            Thank you for the booking on date  <?= $form_input['booking_date'] ?> and time <?= $form_input['booking_time'] ?> with expert <?= $form_input['Full Name'] ?> <br> <br>

                            We have sent an email to the expert and awaiting a confirmation email from him/her.<br><br> As soon as it is confirmed, the expert will send you an email, and give you instructions on the call. <br><br>

                            See you soon,<br><br>
                        <?php
                        }
                        ?>
                    </p>


                


                    Genny Ghanimeh<br><br>
                    Mind Cloud Tribe Founder.

            
                </div>
            </div>
        </div>
    </div>

</body>

</html>