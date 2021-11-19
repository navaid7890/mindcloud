
<?php 

    echo "Pay fort <br/>";
    $service_command = 'TOKENIZATION';
    $access_code = 'zx0IPmPy5jp1vAz8Kpg7';
    $merchant_identifier = 'CycHZxVj';
    $merchant_reference = 'XYZ9239-yu898'; // user_id
    $language = 'en';
    $signature = '';
    $token_name = '';
    $return_url = 'https://temp-prod.mindcloud.tk/?wc-api=wc_gateway_payfort_process_response';
    $req_pass_phrase = '$2y$10$NzvIh4AsW';
    // $merchant_reference = '5000-'.time();

    // generate signature

    $sorted_params = $req_pass_phrase.'access_code='.$access_code.'language='.$language.
    'merchant_identifier='.$merchant_identifier.'merchant_reference'.$merchant_reference.
    'return_url='.$return_url.'service_command='.$service_command.
    'signature='.$signature.'token_name='.$token_name.$req_pass_phrase;
    $signature_generated = hash('sha256', $sorted_params);
    $signature = $signature_generated;
    echo $sorted_params."<br/>";

?>



<form action="https://sbcheckout.payfort.com/FortAPI/paymentPage" method="post">
    <input name="service_command" type="hidden" value="<?= $service_command ?>">
    <input name="access_code" type="hidden" value="<?= $access_code ?>">
    <input name="merchant_identifier" type="hidden" value="<?= $merchant_identifier ?>">
    <input name="merchant_reference" type="hidden" value="<?= $merchant_reference ?>">    
    <input name="language" type="hidden" value="<?= $language ?>"><!-- en/ar -->
    <input name="signature" type="hidden" value="<?= $signature ?>">
    <input name="token_name"  type="hidden" id="settoken" value="<?= $token_name ?>">
    <input name="return_url" type="hidden" value="<?= $return_url ?>">
    <input type="submit" onclick="return get_token();" value="submit">
</form>
<input id="expiry_date" name="expiry_date" placeholder="expiry_date" type="text"><br/>
<input id="card_number" name="card_number" placeholder="card_number" type="text"><br/>
<input id="card_security_code" name="card_security_code" placeholder="card_security_code" type="text"><br/>
<input id="card_holder_name" name="card_holder_name" placeholder="card_holder_name" type="text"><br/>


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
async function get_token(){
    payload.expiry_date = document.getElementById("expiry_date").value;
    payload.card_number = document.getElementById("card_number").value;
    payload.card_security_code = document.getElementById("card_security_code").value;
    payload.card_holder_name = document.getElementById("card_holder_name").value;

let method = 'POST';
let headers = { "Content-type": "application/json" };
const fetchParams = { method, headers };
const endPoint= `https://sbcheckout.PayFort.com/FortAPI/paymentPage?service_command=${payload.service_command}&access_code=${payload.access_code}&merchant_identifier=${payload.merchant_identifier}&merchant_reference=${payload.merchant_reference}&language=${payload.language}&signature=${payload.signature}&expiry_date=${payload.expiry_date}&card_number=${payload.card_number}&card_security_code=${payload.card_security_code}&card_holder_name=${payload.card_holder_name}`
const fetchPromise = fetch(endPoint, fetchParams);
const timeOutPromise = new Promise((resolve, reject) => {
  setTimeout(() => {
    reject("Request Timeout");
  }, 30000);
});
const response = await Promise.race([fetchPromise, timeOutPromise]);
console.log('card response token'.response)
return false;
document.getElementById('settoken').value = response;
return response;
}
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