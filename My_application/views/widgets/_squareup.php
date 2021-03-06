<style type="text/css">
  .payment_div input{
    border: 1px solid #cacaca;
    height: 53px;
    border-radius: 0;
    padding: 0 0px 0 61px;
    box-shadow: none;
    display: block;
    width: 100%;
    font-size: 14px;
    line-height: 1.42857143;
  }
  .payment_div input[type="submit"]{
    background: #7dbb2d;
    color: #fff;
    border: 0;
    width: 100%;
    padding: 15px 0;
    font-size: 20px;
    border-radius: 0px;
    text-transform: uppercase;
  }
  .modal-title{
      text-align: center;
    color: #101954;
    font-size: 35px;
    display: block;
  }
</style>
<!-- <script type="text/javascript" src="https://js.squareupsandbox.com/v2/paymentform"></script> -->
<script type="text/javascript" src="<?=SQUARE_URL?>"></script>

<script>

  var applicationId = '<?=SQUARE_APPLICATION_ID?>'; // <-- Add your application's ID here
  var locationId = 'CBASEGNoVBNkbr7CZqL_f1ZAqkcgAQ';
  
  // You can delete this 'if' statement. It's here to notify you that you need
  // to provide your application ID.
  if (applicationId == '') {
    alert('You need to provide a value for the applicationId variable.');
  }

  // Initializes the payment form. See the documentation for descriptions of
  // each of these parameters.
  var paymentForm = new SqPaymentForm({
    applicationId: applicationId,
    inputClass: 'sq-input',
    inputStyles: [
      {
        fontSize: '15px'
      }
    ],
    cardNumber: {
      elementId: 'sq-card-number',
      placeholder: '•••• •••• •••• ••••'
    },
    cvv: {
      elementId: 'sq-cvv',
      placeholder: 'CVV'
    },
    expirationDate: {
      elementId: 'sq-expiration-date',
      placeholder: 'MM/YY'
    },
    postalCode: {
      elementId: 'sq-postal-code',
      placeholder: '••••'
    },
    callbacks: {

      // Called when the SqPaymentForm completes a request to generate a card
      // nonce, even if the request failed because of an error.
      cardNonceResponseReceived: function(errors, nonce, cardData) {
        if (errors) {
          //console.log("Encountered errors:");

          // This logs all errors encountered during nonce generation to the
          // Javascript console.
          errors.forEach(function(error) {
            Toastr.error(error.message);
            //console.log('  ' + error.message);
          });

        // No errors occurred. Extract the card nonce.
        } else {

          // Delete this line and uncomment the lines below when you're ready
          // to start submitting nonces to your server.
          //alert('Nonce received: ' + nonce);


          document.getElementById("nonceID").value = nonce;
          document.getElementById("order_id").value = '<?=$oid?>';
          document.getElementById("amount").value = '<?=$total_amount?>';
          document.getElementById("type").value = '<?=$type?>';
          document.getElementById("chargepayment").submit();// Form submission
       
       




          /*
            These lines assign the generated card nonce to a hidden input
            field, then submit that field to your server.
            Uncomment them when you're ready to test out submitting nonces.

            You'll also need to set the action attribute of the form element
            at the bottom of this sample, to correspond to the URL you want to
            submit the nonce to.
          */
          // document.getElementById('card-nonce').value = nonce;
          // document.getElementById('nonce-form').submit();

        }
      },

      unsupportedBrowserDetected: function() {
        // Fill in this callback to alert buyers when their browser is not supported.
      },

      // Fill in these cases to respond to various events that can occur while a
      // buyer is using the payment form.
      inputEventReceived: function(inputEvent) {
        switch (inputEvent.eventType) {
          case 'focusClassAdded':
            // Handle as desired
            break;
          case 'focusClassRemoved':
            // Handle as desired
            break;
          case 'errorClassAdded':
            // Handle as desired
            break;
          case 'errorClassRemoved':
            // Handle as desired
            break;
          case 'cardBrandChanged':
            // Handle as desired
            break;
          case 'postalCodeChanged':
            // Handle as desired
            break;
        }
      },

      paymentFormLoaded: function() {
        // Fill in this callback to perform actions after the payment form is
        // done loading (such as setting the postal code field programmatically).
        //paymentForm.setPostalCode('94103');
      }
    }
  });

  // This function is called when a buyer clicks the Submit button on the webpage
  // to charge their card.
  function requestCardNonce(event) {

    // This prevents the Submit button from submitting its associated form.
    // Instead, clicking the Submit button should tell the SqPaymentForm to generate
    // a card nonce, which the next line does.
    event.preventDefault();

    paymentForm.requestCardNonce();
  }
  </script>




<div class="payment_div" role="document">
  <div class="" style="">

    <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Pay for <?=ucfirst($subscriptiontype)?> Now</h4>
    </div>
    <div class="modal-body">
      <label>Card Number</label>
      <div id="sq-card-number"></div>
      <label>CVV</label>
      <div id="sq-cvv"></div>
      <label>Expiration Date</label>
      <div id="sq-expiration-date"></div>
      <label>Postal Code</label>
      <div id="sq-postal-code"></div>
      <!--
      After the SqPaymentForm generates a card nonce, *this* form POSTs the generated
      card nonce to your application's server.

      You should replace the action attribute of the form with the path of
      the URL you want to POST the nonce to (for example, "/process-card")
      -->
      <form id="nonce-form" novalidate action="" method="post">

      <!--
      Whenever a nonce is generated, it's assigned as the value of this hidden
      input field.
      -->
      <input type="hidden" id="card-nonce" name="nonce">

      <!--
      Clicking this Submit button kicks off the process to generate a card nonce
      from the buyer's card information.
      -->
      <input type="submit" onclick="requestCardNonce(event)" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>


<form id="chargepayment" method="post" action="<?=$merchant_link?>">
  <input type="hidden" name="nonce" id="nonceID">
  <input type="hidden" name="order_id" id="order_id">
  <input type="hidden" name="amount" id="amount" >
  <input type="hidden" name="type" id="type" >
</form>



<script type="text/javascript">
// jQuery(".paynow").click(function(){
//   jQuery('#payment_form_submit').submit();
// });
$("body").on("click",'.paynow',function(){
  $('#payment_form_submit').submit();  
});
</script>