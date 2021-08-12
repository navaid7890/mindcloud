<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
    }
    
    function send(){
    
        $this->load->library('phpmailer_lib');
        
        $mail = $this->phpmailer_lib->load();
        
      
        $mail->isSMTP();
        $mail->Host     = 'email-smtp.us-east-1.amazonaws.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'AKIAXQ4HYQNYTHYB6C5I';
        $mail->Password = 'BHUn7SOdDMSo2cqV5AoRhYkUlt9TABFgi88ViJdLyOXi';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('madiha@alphacandy.com', 'Madiha');
        $mail->addReplyTo('madiha@alphacandy.com', 'Madiha');

        $mail->addAddress('navaid@manageglobally.io');
        
   
        // $mail->addCC('madiha@alphacandy.com');
        // $mail->addBCC('madiha@alphacandy.com');
        

        $mail->Subject = 'Send Email in CodeIgniter';
        
        
        $mail->isHTML(true);
        
     
        $mailContent = "<h1>Send HTML Email in CodeIgniter</h1>
            <p>This is a test email sending.</p>";
        $mail->Body = $mailContent;
 
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
    
}