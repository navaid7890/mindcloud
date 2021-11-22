<!-- 
Payfort login:

Genny@pi-slice.com
Yinyang2705!






Merchant Identifier:vHgjzRkl
Access Code : j0EDelL8zOwb9bZEwpsr
Sha 1: $2y$10$NzvIh4AsW
Sha 1:$2y$10$NzvIh4AsW -->
<?php


$requestParams = array(
'command' => 'PURCHASE',
'access_code' => 'j0EDelL8zOwb9bZEwpsr',
'merchant_identifier' => 'vHgjzRkl',
'merchant_reference' => rand(),
'amount' => '10000',
'currency' => 'USD',
'language' => 'en',
'customer_email' => 'Genny@pi-slice.com',
'signature' => '7cad05f0212ed933c9a5d5dffa31661acf2c827a',
'order_description' => 'iPhone 6-S',

);
// print_r($requestParams);
// die();

$redirectUrl = 'https://checkout.payfort.com/FortAPI/paymentPage';
echo "<html xmlns='https://www.w3.org/1999/xhtml'>\n<head></head>\n<body>\n";
echo "<form action='$redirectUrl' method='post' name='frm'>\n";
foreach ($requestParams as $a => $b) {
    echo "\t<input type='hidden' name='".htmlentities($a)."' value='".htmlentities($b)."'>\n";
}
echo "\t<script type='text/javascript'>\n";
echo "\t\tdocument.frm.submit();\n";
echo "\t</script>\n";
echo "</form>\n</body>\n</html>";


?>