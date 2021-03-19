<style type="text/css">
	/***
Invoice page
***/
.invoice {padding:12px;}
.invoice table {
	margin: 30px 0 30px 0;
}
.invoice .product_img_thumb{max-height: 40px;}
.invoice .invoice-logo {
	margin-bottom: 20px;
}
.invoice .invoice-logo p {
	padding: 5px 0;
	font-size: 26px;
	line-height: 28px;
	text-align: right;
}
.invoice .invoice-logo p span {
	display: block;
	font-size: 14px;
}
.invoice .invoice-logo-space {
	margin-bottom: 15px;
}
.invoice .invoice-payment strong {
	margin-right: 5px;
}
.invoice .invoice-block {
	text-align: right;
}
.invoice .invoice-block .amounts {
	margin-top: 20px;
	font-size: 14px;
}
.fa-id-badge{
	font-size: 22px;
    color: #F23035;
}
</style>
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN VALIDATION STATES-->
		<div class="tabbable tabbable-custom boxless tabbable-reversed">
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#tab_0">Details</a>
				</li>
			</ul>

			<div class="tab-content">
				<div id="tab_0" class="tab-pane active">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-shopping-cart"></i>
								<strong>#<?=order_no($ads_id)?></strong>
								<small> / <?=date('d-m-Y' , strtotime($ads_date))?></small>
							</div>
							<div class="tools">
							</div>
						</div>

						<div class="portlet-body form">

							<!-- BEGIN FORM-->
							<div class="invoice">
								<div class="row invoice-logo">
									<div class="col-xs-6 invoice-logo-space">
										<img src="<?=get_image($logo['logo_image'] , $logo['logo_image_path'])?>" class="img-responsive" alt="">
									</div>
									<div class="col-xs-6">
										<p>
											#<?=order_no($ads_id)?> <span class="muted">
											On: <?=date('d-m-Y' , strtotime($ads_date))?>  </span>
										</p>
									</div>
								</div>
								<hr>

								<div class="row">

								<div class="col-xs-6">
									<h3>CUSTOMER INFORMATION: <a href="<?=la('user/add/').$u_id?>" target="_blank"><i class="fa fa-id-badge" aria-hidden="true" ></i></a></h3>
									<ul class="list-unstyled">
									<?php if (empty($u_email)): ?>
										<div class="alert alert-warning" role="alert">
										  Request is incomplete.
										</div>
									<?php endif ?>
										<li>First Name : <strong><?=$u_firstname?></strong></li>
										<li>Last Name : <strong><?=$u_lastname?></strong></li>
										<li>Email : <strong><?=$u_email?></strong></li>
										<li>Address : <strong><?=$u_address?></strong></li>
										<li>Phone : <strong><?=$u_phone?></strong></li>
										<li>Zipcode : <strong><?=$u_uzipcode?></strong></li>
										<li>Country : <strong><?=$u_ucountry?></strong></li>
										<li>State : <strong><?=$u_ustate?></strong></li>
										<li>About User : <strong><?=$u_aboutme?></strong></li>
									</ul>
								</div>
								
								<div class="col-xs-6">
									<h3>PAYMENT DETAILS</h3>
									<ul class="list-unstyled">
									<?php if (empty($pay_date)): ?>
										<div class="alert alert-warning" role="alert">
										  Payment is not attempt.
										</div>
									<?php endif ?>
										<li><strong>Total Amount</strong> : <?=$pkg_price?></li>
										<li><strong> Payment Method </strong> : <?=$pay_type?></li>
										<li><strong> Payment Status </strong> :<?=$pay_status?> </li>
										<li><strong> Payment Date </strong> :<?=$pay_date?> </li>
										<li><strong> Payment Message </strong> :<?=$pay_msg?> </li>
									
										<li>

											<?php if (!empty($data['order_paypal_ipn_track_id'])): ?>
												<li><strong> Paypal Invoice Id </strong> : <?=$data['order_paypal_ipn_track_id']?></li>	
											<?php endif ?>

											<li><strong> Paypal Transaction ID </strong> : <?=$data['order_payment_txn_id']?></li>

										</ul>
									</div>
								</div>

								<div class="row">

									<div class="col-xs-12">
										<div class="panel-group">
											<div class="panel panel-default">
												<div class="panel-heading"><h2>PACKAGE DETAILS:</h2></div>
												<div class="panel-body">	
													<ul class="list-unstyled">

												<?php if ($pkg_id < 1): ?>
													<div class="alert alert-warning" role="alert">
												Package is not selected
													</div>
												<?php endif ?>
													    <li>Package Title : <?=$pkg_title?></li>
														<li>Time Period :  <?=$pkg_type.' '.$pkg_ads_time?></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

									</div>

		<div class="row" id="row_linkgenerated" style=";">	
			<div class="col-xs-12">
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading"><h2></h2><h2>BILLING DETAILS:</h2></div>
						<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										
										<table class="bill_info table-bordered table">
								<tbody><tr>
									<td>Advertisment Title</td>
									<td><?=$ads_title?></td>
								</tr>
								<tr>
									<td>Advertisment Country</td>
									<td><?=$ads_country?></td>
								</tr>
								<tr>
									<td>State</td>
									<td><?=$ads_state?></td>
								</tr>
								<tr>
									<td>City</td>
									<td><?=$ads_city?></td>
								</tr>

								<tr>
									<td>Miles</td>
									<td><?=$ads_miles?></td>
								</tr>

								<tr>
									<td>Advertiment Email</td>
									<td><?=$ads_ad_email?></td>
								</tr>
								<tr>
									<td>Advertiment Link</td>
									<td><?=$ads_url?></td>
								</tr>
								<tr>
									<td>Posting Date</td>
									<td><?=$ads_date?></td>
								</tr>
								<tr>
									<td>Description</td>
									<td><?=html_entity_decode($ads_desc)?></td>
								</tr>
							</tbody>
							</table>

									</div>
									<div class="col-md-6">
										<img src="<?=$ads_image?>">
									</div>
								</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">

		$(document).ready(function(){
			$('#order_delivery_status').change(function(){
				var order_id = $(this).attr('data-order-id');
				var order_delivery_status = $(this).val();
				ajax_order_delivery_status(order_id , order_delivery_status);
			});


			function ajax_order_delivery_status(order_id , order_delivery_status)
			{
				$.ajax({
					type: "POST",
					url: "<?=la('shop_order/order_delivery_status_change')?>",
					data:  "order_id="+order_id+'&order_delivery_status='+order_delivery_status,
					dataType: "html",

					success: function(msg)
					{
						if(msg == true)
							AdminToastr.success('Order status changed');
						else
							AdminToastr.warning('Error found please try again');
					},
					beforeSend: function()
					{
					//show_preload();
				}
			});
				return false;
			}
		});
	</script>