<style>
    h1 {
        text-align: center;
        font-size: 29px;
        color: red;
        padding: 100px 0px;
    }

    header {
        display: none;
    }

    footer {
        display: none;
    }

    .copyright-top {
        display: none;
    }

    .copyright {
        display: none;
    }
</style>
<pre>
<!-- Array ( [response_code] => 18000 [amount] => 180 
[card_number] => **************** [card_holder_name] => *** 
[signature] => ef811f224821e9d620ae3fc70c36376724e7b8acaa0ab9e49590af351849c61d 
[merchant_identifier] => WZQlGZWY [expiry_date] => **** 
[access_code] => z9c9eXaLZqJ6aa5h9PRV [language] => en 
[service_command] => TOKENIZATION [response_message] => Success 
[merchant_reference] => 61c98f47e3eb3 [token_name] => 212abb840d994ff6a108249423415a40 
[return_url] => http://localhost/cloud/about_us/payfortresponsce 
    [currency] => AED [card_bin] => 400555 [status] => 18 ) -->


<?php

//$response_message = $_GET['response_message'];

// var_dump($_GET['response_code']) ;
// var_dump($_POST);
//  print_r($_GET);
// $newstring = substr($_GET['response_code'], -3);

// https://paymentservices-reference.payfort.com/docs/api/build/index.html#standard-merchant-page-integration-operations

$token = $_GET['token_name'];
$signature = $_GET['signature'];
$merchant_identifier = $_GET['merchant_identifier'];
$access_code = $_GET['access_code'];
$service_command = $_GET['service_command'];
$merchant_reference = $_GET['merchant_reference'];
$currency = $_GET['currency'];
$card_bin = $_GET['card_bin'];
$access_code = $_GET['access_code'];
$status =  $_GET['status'];
$amount =  $_GET['amount'];
$amount = $amount;
$user_email = "fazal.mamoon@gmail.com";
$user_ip = $_SERVER['REMOTE_ADDR'];


$payment_repsone =  json_decode(get_response($token , $signature , $merchant_identifier ,$access_code, $service_command , 
$merchant_reference , $currency , $card_bin , $status , $amount , $user_email , $user_ip) , TRUE);

$third_url = $payment_repsone['3ds_url'];

// echo $third_url;

// debug($newstring);
?>

<script>
         location.href = '<?= $third_url;?>';
   </script>

<?php
if ($newstring == "000") :

?>
    <script>
        // location.href = '<?//= l('thankyou') ?>';
    </script>
<? elseif ($newstring == "093") : ?>

    <h1>Service inactive.</h1>

<? else : ?>
    <h1><?= $_GET['response_message'] ?></h1>
<? endif; ?>

<?php 

function get_response($token , $signature , $merchant_identifier ,$access_code, $service_command ,
$merchant_reference , $currency , $card_bin , $status , $amount , $user_email , $user_ip ){

    // $return_url = l('thankyou');
    // $sorted_params = "PASSaccess_code=".$access_code."amount=".$amount."command=PURCHASEcurrency=".$currency."customer_email=".$user_email."language=enmerchant_identifier=".$merchant_identifier."merchant_reference=$merchant_reference";

    // $signature_generated = hash('sha256', $sorted_params);
    // $signature = $signature_generated;

    $sorted_params = '$2y$10$zrHXx7sETaccess_code='.$access_code."amount=".$amount."command=PURCHASEcurrency=".$currency."customer_email=".$user_email."customer_ip=".$user_ip."language=enmerchant_identifier=".$merchant_identifier."merchant_reference=".$merchant_reference."token_name=".$token.'$2y$10$zrHXx7sET';

$signature_generated = hash('sha256', $sorted_params);
$signature = $signature_generated;



    $data = array(
        'command'  => 'PURCHASE',
        // 'return_url'    => $return_url,
        'token_name'    => $token,
        'signature' => $signature,
        'currency' => $currency,
        'amount' => $amount,
        'language' => 'en',
        'customer_email' => $user_email,
        'customer_ip' => $user_ip,
        'access_code' => $access_code,
        'merchant_reference' => $merchant_reference,
        'merchant_identifier' => $merchant_identifier
    );

    // print_r($data);


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://sbpaymentservices.payfort.com/FortAPI/paymentApi");
    // curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'amazoncookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'amazoncookie.txt');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $server_output = curl_exec($ch);
    curl_close ($ch);
    
    
    
    return $server_output;


}



?>