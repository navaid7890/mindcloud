<?php

session_start();



$amazonpay_config = array(
	'merchant_id'   => 'A1RX1ZEKJGE93B', // Merchant/SellerID
	'access_key'    => 'AKIAI5D4Z5GAWA3HD43A', // MWS Access Key
	'secret_key'    => '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', // MWS Secret Key
	'client_id'     => 'amzn1.application-oa2-client.12aacd6441274cf0a658552a4afc523a', // Login With Amazon Client ID
	'region'        => 'uk',  // us, de, uk, jp
	'currency_code' => 'GBP', // USD, EUR, GBP, JPY
	'sandbox'       => true); // Use sandbox test mode

  // debug($amazonpay_config);

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

require_once APPPATH.'third_party/amazon-pay.phar';

// Instantiate the client object with the configuration
$client = new AmazonPay\Client($amazonpay_config);
$requestParameters = array();

// Required parameters
$requestParameters['amazon_billing_agreement_id'] = $_POST['amazon_billing_agreement_id'];

// Optional parameters
$requestParameters['seller_note']       = 'Testing PHP SDK Recurring Samples';
$requestParameters['seller_order_id']   = '001abc-TestOrder-abcdef';
$requestParameters['store_name']        = 'SDK Sample Store Name';
$requestParameters['seller_billing_agreement_id']   = '5678-example-order';
$requestParameters['custom_information']= 'any custom information';
$requestParameters['merchant_id']       = null;
$requestParameters['platform_id']       = null;
$requestParameters['mws_auth_token']    = null;

// Make SetBillingAgreementDetails API call
$response = $client->setBillingAgreementDetails($requestParameters);

// If the API call was a success, make the GetBillingAgreementDetails API call
if ($client->success)
{
//    $requestParameters['access_token'] = $_POST['accessToken'];
    $requestParameters['address_consent_token'] = $_POST['accessToken'];
    $response = $client->getBillingAgreementDetails($requestParameters);
}
// Adding the Amazon Billing Agreement ID to the session so that we can use it in ConfirmAndAuthorize.php
$_SESSION['amazon_billing_agreement_id'] = $_POST['amazon_billing_agreement_id'];

// Pretty print the Json and then echo it for the Ajax success to take in
$json = json_decode($response->toJson());
echo json_encode($json, JSON_PRETTY_PRINT);

?>
