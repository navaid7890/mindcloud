
<?php 

    $service_command = 'TOKENIZATION';//AUTHORIZATION
    $access_code = 'z9c9eXaLZqJ6aa5h9PRV';
    $merchant_identifier = 'WZQlGZWY';
    $merchant_reference = 'XZ9239-yux898sss'; // user_id
    $language = 'en';
    $signature = '';
    $return_url = 'https://temp-prod.mindcloud.tk/payresponce';
    $req_pass_phrase = '$2y$10$zrHXx7sET';
    $res_pass_phrase = '$2y$10$ajGktfU4F';
   
    $sorted_params = $req_pass_phrase.'access_code='.$access_code.'language='.$language.
    'merchant_identifier='.$merchant_identifier.'merchant_reference='.$merchant_reference.
    'return_url='.$return_url.'service_command='.$service_command.$req_pass_phrase;
    $signature_generated = hash('sha256', $sorted_params);
    $signature = $signature_generated;
    // echo $sorted_params."<br/>";

?>
<form action="https://sbcheckout.payfort.com/FortAPI/paymentPage" method="post" target="payfortsss">
    <input name="service_command" type="hidden" value="<?= $service_command ?>">
    <input name="access_code" type="hidden" value="<?= $access_code ?>">
    <input name="merchant_identifier" type="hidden" value="<?= $merchant_identifier ?>">
    <input name="merchant_reference" type="hidden" value="<?= $merchant_reference ?>">    
    <input name="language" type="hidden" value="<?= $language ?>"><!-- en/ar -->
    <input name="signature" type="hidden" value="<?= $signature ?>">
    <input name="return_url" type="hidden" value="<?= $return_url ?>">
    <input type="submit"  value="submit">
</form>
<iframe width="100%" height="600" id="payfortsss" name="payfortsss" ></iframe>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var payload = {
        service_command:'<?= $service_command ?>',
        access_code:'<?= $access_code ?>',
        merchant_identifier:'<?= $merchant_identifier ?>',
        merchant_reference:'<?= $merchant_reference ?>',
        language:'<?= $language ?>',
        signature:'<?= $signature ?>',
        expiry_date:'',
        card_number:'',
        card_security_code:'',
        card_holder_name:'',
    };

</script>




<!-- user: genny@pi-slice.com
Pw: Yinyang27!A! (we changed it)

Yinyang2705!

Merchant Identifier
vHgjzRkl

Access Code
j0EDelL8zOwb9bZEwpsr
Regards,


https://paymentservices-reference.payfort.com//docs/api/build/index.html?php#standard-merchant-page-integration-request
https://medium.com/@osamakhann118/react-native-payfort-amazon-payment-service-in-react-native-fafeb316ec3f



Test Environment URL:

https://sbcheckout.PayFort.com/FortAPI/paymentPage

Production Environment URL:

https://checkout.PayFort.com/FortAPI/paymentPage



Visa	4005550000000001	05/25	123
MasterCard	5123456789012346	05/25	123
AMEX	345678901234564	05/25	1234-->