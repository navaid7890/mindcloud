<style>
    @page {
        size: 600pt 500pt;
    }
</style>




<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');
    @page {
        size: 600pt 480pt;
        font-family: 'Open Sans';
    }
    
</style>
<div style="margin:0;font-family: 'Open Sans';text-align: center;">
    <div style="margin:0;font-family: 'Open Sans';padding: 20px 20px 35px;margin-bottom: 15px;text-align: center;background: #f3f7fb;border: 10px solid #71c2fd;">
        <div>
            <h2 style="margin:0;font-family: 'Open Sans';font-size: 26px;color: #4b647a;font-weight: 400;text-transform: uppercase;">certificate of completion</h2>
            <div class="space"><br></div>
            <h3 style="margin:0;font-family: 'Open Sans';color: #425c73; font-weight: 700;text-transform: uppercase;font-size: 32px;"><?= $this->session_data['username'] ?></h3>
            <div class="space"><br></div>
            <p style="margin:0;font-family: 'Open Sans';font-size: 14px;color: #4b647a;">has successfully completed on the <?= date("jS \of F Y") ?> the tutorial</p>
            <div class="space"><br></div>
            <h3 style="margin:0;font-family: 'Open Sans';color: #425c73; font-weight: 700;text-transform: capitalize;font-size: 32px;">"<?= $course_title ?>"</h3>
            <div class="space"><br></div>
            <h6 style="margin:0;font-family: 'Open Sans';font-style: italic;font-size: 18px;color: #4b647a;">by Expert <span> <?= $expert_name ?></span></h6>
            <div class="space"><br><br></div>
            <div class="space"><br><br></div>
            
            <table style=" margin:0;width: 100%;vertical-align:midle;">
                    <tbody style=" margin:0;width: 100%;text-align:center;">
                        <tr style="align-items:center;vertical-align:midle;">
                            <td style=" margin:0;width: 33.3%;vertical-align:midle;padding-top:30px;"><span><img src="<?= $logo ?>" style='width:170px;margin-left:25px;margin-top: 50px;text-align: center;'></span></td>
                            <td style=" margin:0;width: 33.3%;vertical-align:midle;"><span><img src="<?= $certificate ?>" style='width:70px;margin-top: 50px;text-align: center;'></span></td>
                            
                            <td style=" margin:0;width: 33.3%;text-align:left;vertical-align:midle;padding-top:60px;">
                                <div>
                                <span><img src="<?= $signature ?>" style='width:102px;text-align: left; mix-blend-mode: darken;'></span>
                                    <h6 style=" margin:0;font-weight: 600;padding-bottom: 4px;text-transform: capitalize;font-size: 16px;text-align: left;">genny ghanimeh</h6>
                                    <p style=" margin:0;font-style: italic;text-transform: capitalize;font-size: 13px;font-weight: 300;text-align: left;">founder mind cloud tribe</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>

    <!-- <div>
        <br><br>
        <h6 style="margin:0;font-family: 'Open Sans';font-size: 18px;font-weight: 700;color: #425C73;">Basics of Customer Experience</h6>
    </div> -->
</div>