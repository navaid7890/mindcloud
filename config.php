<?php

    // Be sure your webserver is configured to never display the contents of this file under any circumstances.
    // The secret_key value below should be protected and never shared with anyone.


    $amazonpay_config = array(
        'merchant_id'   => 'vHgjzRkl', // Merchant/SellerID
        'access_key'    => 'j0EDelL8zOwb9bZEwpsr', // MWS Access Key
        'secret_key'    => 'rGTZr4GbBC6s+c1F7wUY4FsfBnP+ewea5qNVzWne', // MWS Secret Key
        'client_id'     => 'amzn1.application-oa2-client.12aacd6441274cf0a658552a4afc523a', // Login With Amazon Client ID
        'region'        => 'uk',  // us, de, uk, jp
        'currency_code' => 'GBP', // USD, EUR, GBP, JPY
        'sandbox'       => true); // Use sandbox test mode

    // $amazonpay_config = array(
    //     'merchant_id'   => 'A1RX1ZEKJGE93B', // Merchant/SellerID
    //     'access_key'    => 'AKIAI5D4Z5GAWA3HD43A', // MWS Access Key
    //     'secret_key'    => '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', // MWS Secret Key
    //     'client_id'     => 'amzn1.application-oa2-client.12aacd6441274cf0a658552a4afc523a', // Login With Amazon Client ID
    //     'region'        => 'uk',  // us, de, uk, jp
    //     'currency_code' => 'GBP', // USD, EUR, GBP, JPY
    //     'sandbox'       => true); // Use sandbox test mode

function getWidgetsJsURL($config)
{
    if ($config['sandbox'])
        $sandbox = "sandbox/";
    else
        $sandbox = "";

    switch (strtolower($config['region'])) {
        case "us":
            return "https://static-na.payments-amazon.com/OffAmazonPayments/us/" . $sandbox . "js/Widgets.js";
            break;
        case "uk":
            return "https://static-eu.payments-amazon.com/OffAmazonPayments/gbp/" . $sandbox . "lpa/js/Widgets.js";
            break;
        case "jp":
            return "https://static-fe.payments-amazon.com/OffAmazonPayments/jp/" . $sandbox . "lpa/js/Widgets.js";
            break;
        default:
            return "https://static-eu.payments-amazon.com/OffAmazonPayments/eur/" . $sandbox . "lpa/js/Widgets.js";
            break;
    }
}

?>
