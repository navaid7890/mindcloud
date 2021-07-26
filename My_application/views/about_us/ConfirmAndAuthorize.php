<?php

session_start();

//include '../../amazon-pay.phar';



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

// Create the parameters array to set the order
$requestParameters                                = array();
$requestParameters['amazon_billing_agreement_id'] = $_SESSION['amazon_billing_agreement_id'];
$requestParameters['mws_auth_token']              = null;

// Confirm the order by making the ConfirmOrderReference API call
if ($_POST['action'] == 'confirm') {
    $response = $client->confirmBillingAgreement($requestParameters);
    $json     = json_decode($response->toJson());
    echo json_encode($json, JSON_PRETTY_PRINT);
}

if ($_POST['action'] == 'authorize') {
    // Create the parameters array to set the order
    $requestParameters = array();
    
    // Required parameters
    $requestParameters['amazon_billing_agreement_id'] = $_SESSION['amazon_billing_agreement_id'];
    $requestParameters['mws_auth_token']              = null;
    $requestParameters['authorization_amount']        = '150.00';
    $requestParameters['authorization_reference_id']  = uniqid('A01_REF_');
    
    // Optional parameters
    $requestParameters['seller_authorization_note'] = 'Authorizing and capturing the payment';
    $requestParameters['transaction_timeout']       = 0;
    $requestParameters['capture_now']               = true;
    $requestParameters['inherit_shipping_address']  = true;
    $requestParameters['seller_note']               = 'sample for Recurring Payment';
    $requestParameters['seller_order_id']           = '1234-RecExample-Order';
    $requestParameters['store_name']                = 'PHP SDK Sample';
    $requestParameters['custom_information']        = 'Awesome Sample';
    $requestParameters['soft_descriptor']           = null;
    $requestParameters['platform_id']               = null;
    $requestParameters['mws_auth_token']            = null;
    
    $response = $client->authorizeOnBillingAgreement($requestParameters);
    $responsearray['authorize'] = json_decode($response->toJson());

    // Display the Billing Agreement Details Result with the below parameters
    $requestParameters = array();
    $requestParameters['amazon_billing_agreement_id'] = $_SESSION['amazon_billing_agreement_id'];
    $requestParameters['address_consent_token']       = $_SESSION['access_token'];
    
    $response = $client->getBillingAgreementDetails($requestParameters);
    $responsearray['details'] = json_decode($response->toJson());
    
    // Echo the Json encoded array for the Ajax success
    echo json_encode($responsearray);
}
