
<style>

span#abt
{

    color: #196aa5 !important;
    text-align: center;
 
    padding-bottom: 10px;
    font-size: 17px;

    
}
    .trial-page .t-profile h5,
    .trial-page .t-profile h5>span {
        color: #5C677D;

    }

    .trial-page .t-content h2 {
        color: #5C677D;
    }

    .trial-page .t-content p {
        color: #5C677D;
        font-style: italic;
        font-weight: 500;
        line-height: 34px;
    }

    a.btn-promo {
        background: #FDBE41;
        padding: 15px 20px;
        border-radius: 12px;
        font-size: 20px;
        font-weight: 600;
        color: #fff;
        box-shadow: 0px 12px 24px #1d90d942;
        border: 2px solid transparent;
        text-align: center;
    }

    a.btn-promo:hover {
        transform: scale(1.05);
        background: #1D90D9;
    }

    .AllBtnArea {
        display: flex;
    }

    .promoBtnArea {
        width: 284px;
        height: 250px;
        margin-right: auto;
        align-items: center;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    input[type=text] {
        background: #ffffff00;
        /* border: none; */
        border-radius: 0px;
        font-family: 'Open Sans';
        font-weight: 400;
        color: #000;
        border: 1px solid rgba(0, 0, 0, .15);
    }
</style>
<script source="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
<?php

session_start();
include 'config.php';

$_COOKIE['user_name'];
//include 'db/db.php';

//     $amazonpay_config = array(
//         'merchant_id'   => 'A1RX1ZEKJGE93B', // Merchant/SellerID
//         'access_key'    => 'AKIAI5D4Z5GAWA3HD43A', // MWS Access Key
//         'secret_key'    => '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', // MWS Secret Key
//         'client_id'     => 'amzn1.application-oa2-client.12aacd6441274cf0a658552a4afc523a', // Login With Amazon Client ID
//         'region'        => 'uk',  // us, de, uk, jp
//         'currency_code' => 'GBP', // USD, EUR, GBP, JPY
//         'sandbox'       => true); // Use sandbox test mode

// function getWidgetsJsURL($config)
// {
//     if ($config['sandbox'])
//         $sandbox = "sandbox/";
//     else
//         $sandbox = "";

//     switch (strtolower($config['region'])) {
//         case "us":
//             return "https://static-na.payments-amazon.com/OffAmazonPayments/us/" . $sandbox . "js/Widgets.js";
//             break;
//         case "uk":
//             return "https://static-eu.payments-amazon.com/OffAmazonPayments/gbp/" . $sandbox . "lpa/js/Widgets.js";
//             break;
//         case "jp":
//             return "https://static-fe.payments-amazon.com/OffAmazonPayments/jp/" . $sandbox . "lpa/js/Widgets.js";
//             break;
//         default:
//             return "https://static-eu.payments-amazon.com/OffAmazonPayments/eur/" . $sandbox . "lpa/js/Widgets.js";
//             break;
//     }
// }


?>


<div class="trial-page">

    <div class="mainBanner home-banner hding-2 para" style="background-image:url('assets/images/banner/2.png');">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div>
                        <h2> Learn anywhere, cancel anytime. </h2>
                        <div class="space"><br><br></div>

                        <div class="t-bannerBox text-center">
                            <div class="AllBtnArea">
                                <div class="promoBtnArea">
                                    <a href="#" class="btn-promo btn-hover" data-toggle="modal" data-target="#promoModal">Do you have a Promo Code?</a>
                                </div>
                                <div class="bannerHead">
                                    <h2>Annually</h2><br>

                                    <p>One year full access,<br>
                                        only at $15/month.<br>
                                        Charged annually<br> $180/year</p><br>
                                        <span id="abt"></span>
                                        <button type="button" class="btn btn-primary" id="con">Confirm Subscription</button>

                                    <div class="text-center" id="AmazonPayButton"></div>
                                    <!-- <a href="#" id="AmazonPayButton" data-fancybox data-src="#trial-popup" class="btn-hover">Subscribe Now <span></span></a> -->
                              
                              <br><br>
                                </div>
                            </div>
                            <div class="banner-down">
                                <ul class="t-banner-list">
                                    <li>Learn on your mobile or computer.</li>
                                    <li>Access to Mind Cloud Experts tutorials.</li>
                                    <li>Personalized Course Recommendations. </li>
                                    <li>Earn Certification at completion. </li>
                                    <li>Access to Expert-led business tools. </li>
                                    <li>Practice with exercise files.</li>
                                </ul>
                            </div>

                            <div class="space"><br><br></div><br>
                            <p>Are you looking to train your team? <a href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="faqSec trial-faq-sec hding-2 para">
        <div class="container">
            <h2>FAQs</h2>

            <div class="space"><br><br></div>

            <div class="faq-tabBox">
                <ul class="colasebar">
                    <? if (isset($faq) and array_filled($faq)) : ?>
                        <? foreach ($faq as $key => $value) : ?>
                            <li>
                                <div class="faqBar">
                                    <span><?= $value['faq_question'] ?> <i class="fal fa-angle-down"></i></span>
                                    <div class="expandable">
                                        <?= html_entity_decode($value['faq_answer']) ?>
                                    </div>
                                </div>
                            </li>
                        <? endforeach; ?>
                    <? endif; ?>


                </ul>

                <a href="<?= l('faq') ?>">See more</a>
            </div>
        </div>
    </section>

    <? $this->load->view('widgets/_testimonials'); ?>

    <? $this->load->view('widgets/_clients'); ?>

</div>
<section>
    <div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-expert_us">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Enter PromoCode :</label>
                            <input type="text" class="form-control" id="udt">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                        <button type="button" class="btn btn-primary" id="stdt">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type='text/javascript'>
    window.onAmazonLoginReady = function() {
        try {
            amazon.Login.setClientId("<?php echo $amazonpay_config['client_id']; ?>");
            amazon.Login.setUseCookie(true);
        } catch (err) {
            alert(err);
        }
    };

    window.onAmazonPaymentsReady = function() {
        var authRequest;
        OffAmazonPayments.Button("AmazonPayButton", "<?php echo $amazonpay_config['merchant_id']; ?>", {
            type: "PwA", // PwA, Pay, A, LwA, Login
            color: "DarkGray", // Gold, LightGray, DarkGray
            size: "medium", // small, medium, large, x-large
            language: "en-GB", // for Europe/UK regions only: en-GB, de-DE, fr-FR, it-IT, es-ES
            authorization: function() {
                loginOptions = {
                    scope: "profile postal_code payments:widget payments:shipping_address",
                    popup: true
                };
                authRequest = amazon.Login.authorize(loginOptions, "SetPaymentDetails.php");
            },
            onError: function(error) {
                // something bad happened
            }
        });

        document.getElementById('Logout').onclick = function() {
            amazon.Login.logout();
            document.cookie = "amazon_Login_accessToken=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
            window.location = 'index.php';
        };

    };
</script>
<script async="async" type='text/javascript' src="<?php echo getWidgetsJsURL($amazonpay_config); ?>"></script>


<script>

$( document ).ready(function() {
    localStorage.setItem('user_name', '');
    $("#con").hide();
});

$("#stdt").click(function(e) {
    e.preventDefault();
    var a= $('#udt').val();

    if ($('#udt').val() == ''){
        Toastr.error('Enter Promo Code', 'Error');

    }

    else{
    //alert(a);
    $.ajax({
        type: "GET",
        url: "<?=l('cart/get_coupon_discount')?>?coupon="+a,
        // data: { 
        //     id: $(this).val(), // < note use of 'this' here
        //     access_token: $("#access_token").val() 
        // },
        success: function(result) {

           document.cookie='u='+result; 
            localStorage.setItem('user_name', result);
            Toastr.success('Promo Code Accepted', 'Success');
            $('#promoModal').modal('hide'); 
            $("#abt").text("Total Savings:    "+'$' +result);
            $('#udt').val('');
            if(result=="180")
            {
                $("#con").show();
                $("img#OffAmazonPaymentsWidgets0").hide();

            }
            else
            {

                $("#con").hide();
                $("img#OffAmazonPaymentsWidgets0").show();
            }

        },
        error: function(result) {
            alert('error');
        }
    })
 }

});



$("#con").click(function(e) {
    e.preventDefault();
    setTimeout(function(){
              window.location = 'thankyou';
          },000);

});



</script>