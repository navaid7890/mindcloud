<?php
    session_start();

    //include '../../amazon-pay.phar';


?>

<?
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
?>



            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand start-over" href="#">Pay with Amazon PHP SDK Simple Recurring Payment</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="start-over" href="#">Logout and Start Over</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="jumbotron jumbotroncolor" style="padding-top:25px;" id="api-content">
                <div id="section-content">
                
                    <h2>Recurring Simulation</h2>
                    <p style="margin-top:40px;">This will make authorizations on the billing agreement every <strong>10</strong> seconds. We will authorize <strong>150.00</strong> to simulate the recurring charge.</p>
                    <div class="text-center" style="margin-top:10px;">
                        <button id="pause-cycle" class="btn btn-danger">Pause</button>
                    </div>
                    <div class="text-center" style="height:140px; padding-top:20px;">
                        <input type="text" data-width="100" value="50" class="dial" data-fgColor="#222222" data-bgColor="#fafafa" style="padding:0; margin:0;" />
                    </div>

                    <div id="details-result"></div>
                    <div id="authorize-result"></div>

                    <h3>GetBillingAgreementDetails Response</h3>
                    <div id="details-response"><pre><code>Waiting for details...</code></pre></div>
                    <h3>Authorize Response</h3>
                    <div id="authorize-response"><pre><code>Waiting for authorization...</code></pre></div>
                    <h3>Confirm Response</h3>
                    <div id="confirm-response"><pre><code></code></pre></div>
                    <script type="text/javascript">
                        function confirm() {
                            $.post("<?=l('about_us/ConfirmAndAuthorize.php')?>", {
                                action: 'confirm'
                            }).done(function (data) {
                                $("#confirm-response").html('<pre><code>'+data+'</pre></code>');
                            });
                        }

                        confirm();

                        var countdown = 0;
                        $(function() {
                            $('.dial').knob({
                               'min': 0,
                               'max': 10,
                               'val': 0,
                               'readOnly': true
                            });
                        });

                        tick();

                        function tick() {
                            $('.dial').val(countdown).trigger('change');
                            timeout = setTimeout('tick()', 1000);
                            countdown++;
                            if (countdown > 10) {
                                $.notify('Authorizing', {
                                    className: 'success',
                                    autoHide: true,
                                    globalPosition: 'top center',
                                    autoHideDelay: 3000
                                });
                                clearTimeout(timeout);
                                $.post("<?=l('about_us/ConfirmAndAuthorize.php')?>", {
                                    action: 'authorize',
                                }).done(function (data) {
                                    $("#authorize-result").html('');
                                    $("#details-result").html('');

                                    try {
                                        var obj = jQuery.parseJSON(data);
                                        $.each(obj, function(key, value) {
                                            if (key == 'authorize') {
                                                authorizeResponse = value;
                                                var str = JSON.stringify(value, null, 2);
                                                $("#authorize-response").html('<pre><code>' + str + '</pre></code>');
                                            } else if (key == 'details') {
                                                detailsResponse = value;
                                                var str = JSON.stringify(value, null, 2);
                                                $("#details-response").html('<pre><code>' + str + '</pre></code>');
                                            }
                                        });

                                        if (detailsResponse) {
                                            if (detailsResponse.Error) {
                                                $("#details-result").html("<font color='red'><strong>GetBillingAgreementDetails API call failed</strong></font>");
                                            } else {
                                                try {
                                                    $("#details-result").html("<font color='blue'><strong>Remaining balance for this month: "
                                                        + detailsResponse.GetBillingAgreementDetailsResult.BillingAgreementDetails.BillingAgreementLimits.CurrentRemainingBalance.Amount
                                                        + " " + detailsResponse.GetBillingAgreementDetailsResult.BillingAgreementDetails.BillingAgreementLimits.CurrentRemainingBalance.CurrencyCode
                                                        + "</strong></font>");
                                                } catch (err) {
                                                    console.log(err);
                                                }
                                            }
                                        }

                                        // Normally, you would do these decline checks on the back-end instead of in the browser

                                        if (authorizeResponse) {
                                            if (authorizeResponse.Error) {
                                                $("#authorize-result").html("<font color='red'><strong>Authorize API call failed:<br>"
                                                    + authorizeResponse.Error.Code + ": " + authorizeResponse.Error.Message
                                                    + "</strong></font>");
                                            } else {
                                                if (authorizeResponse.AuthorizeOnBillingAgreementResult.AuthorizationDetails.AuthorizationStatus.State === "Declined") {
                                                    $("#authorize-result").html("<font color='red'><strong>The authorization was Declined with Reason Code "
                                                        + authorizeResponse.AuthorizeOnBillingAgreementResult.AuthorizationDetails.AuthorizationStatus.ReasonCode + "</strong></font>");
                                                }
                                            }
                                        }

                                    } catch (err) {
                                        $("#authorize-response").html(data);
                                        console.log(data);
                                        console.log(err);
                                    }

                                    timeout = setTimeout('tick()', 1000);
                                });
                                countdown = 0;
                            }
                        }

                        $('#pause-cycle').on('click', function () {
                            if ($(this).hasClass('btn-danger')) {
                                $(this).removeClass('btn-danger').addClass('btn-success');
                                $(this).text('Continue');
                                clearTimeout(timeout);
                            } else {
                                $(this).removeClass('btn-success').addClass('btn-danger');
                                $(this).text('Pause');
                                timeout = setTimeout('tick()', 1000);
                            }
                        });
                    </script>

                </div>
            </div>


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

        <script type='text/javascript'>
        $(document).ready(function() {
            $('.start-over').on('click', function() {
                amazon.Login.logout();
                document.cookie = "amazon_Login_accessToken=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
                window.location = 'index.php';
            });
        });
        </script>

        <script async="async" type='text/javascript' src="<?php echo getWidgetsJsURL($amazonpay_config); ?>"></script>

    </body>
</html>
