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
                            Hi <?= $form_input['Full Name'] ?>,<br> <br>
                            A Mind Cloud Tribe User has requested an expert booking on date <?= $form_input['booking_date'] ?> and time <?= $form_input['booking_time'] ?><br><br>
                            Please respond to the user via email <?= $form_input['booking_email'] ?> for booking confirmation and send them a zoom/google meet link accordingly.<br><br>
                            If the date and time are not suitable for you, please email the user with a suggested date and time.

                            <br> <br>



                        <?php
                        }
                        ?>
                    </p>



                    See you soon,<br><br>
                    Genny Ghanimeh<br><br>
                    Mind Cloud Tribe Founder.

                  
                </div>
            </div>
        </div>
    </div>

</body>

</html>