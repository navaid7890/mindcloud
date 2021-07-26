<?global $config;
$dt_params['dt_headings'] = $dt_params['dt_headings'] ? $dt_params['dt_headings'] : $model_obj->pagination_params['fields'] ;
$model_heads = explode("," , $dt_params['dt_headings'] );
echo create_modal_html("view_product" , "Detail");
?>
<div class="row">
	<div class="col-md-12">
		<!-- Begin: life time stats -->
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-list"></i><?=humanize($class_name)?> Listing
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<div class="table-actions-wrapper">
						<span>
						</span>
						<select class="table-group-action-input form-control input-inline input-small input-sm" data-update-uri="update_status" data-model="<?=$model_name?>">
							<option value="">Select...</option>
							<option value="<?=STATUS_ACTIVE?>">Activate Selected</option>
							<option value="<?=STATUS_INACTIVE?>">DeActivate Selected</option>
                            <?if($dt_params['action']['show_delete']){?>
							    <option value="<?=STATUS_DELETE?>">Delete Selected</option>
                            <?}?>
						</select>
						<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
					</div>
					


					<div class="table-scrollable">
					<table class="table table-hover">
					<tbody>
					<tr><th>id #</th><td><?=$appointment['si_id'] ?></td></tr>
					<tr><th>FULL NAME</th><td><?=$appointment['si_name'] ?></td></tr>
					<tr><th>AVAILABLE FOR A CALL BACK</th><td><?=$appointment['si_date'] ?></td></tr>
					<tr><th>SESSION STARTS</th><td><?=$appointment['si_time'] ?></td></tr>
					<tr><th>SESSION OVER</th><td><?=$appointment['si_time2'] ?></td></tr>
					<tr><th>EMAIL ADDRESS</th><td><?=$appointment['si_email'] ?></td></tr>
					<tr><th>CONTACT NUMBER</th><td><?=$appointment['si_phone'] ?></td></tr>
					<tr><th>COMMENTS</th><td><?=$appointment['si_message'] ?></td></tr>
					<tr><th>DATE</th><td><?=$appointment['si_createdon'] ?></td></tr>
					</tbody>
					</table>
					</div>


				</div>
			</div>
		</div>
		<!-- End: life time stats -->
	</div>
</div>
<script>
    $(document).ready(function() {    
       	Metronic.init(); // init metronic core components
		QuickSidebar.init(); // init quick sidebar
		Demo.init(); // init demo features
        TableAjax.init(); //DataTable API
        UIAlertDialogApi.init(); //UI Alert API


    });

    // $(function() {
    // 	$("#btn_view_product11").trigger("click");
    // });
    
</script>