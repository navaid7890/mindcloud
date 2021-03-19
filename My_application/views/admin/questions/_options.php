<style type="text/css">
	.radio input[type=radio]{
		margin-left: -11px !important;
	}
</style>
<?
// $prodata = $form_data['qs_options'];
$prodata = $this->model_questions->get_options($id);
// debug($prodata);
function check($dataid=0){
	if ($dataid) {
		return "checked";
	}
}
?>
<div class="container-fluid">
<?php if (!count($prodata)){ ?>
	<h1>No Option added</h1>
<?}else{?>

	<form id="forms-setting" action="<?=la('questions/save_answer')?>">
		<input type="hidden" name="question_id" value="<?=$id?>">
		<div class="row"><br></div>
		<div class="row">
			<div class="col-md-10">
				<ul>
					<?php if (isset($prodata) && array_filled($prodata)): ?>
						<?php foreach ($prodata as $key => $value): ?>
					<li>
			<input type="radio" name="qo_id" value="<?=$value['qo_id']?>" <?=check($value['qo_correct_answer'])?> required ><?=$value['options_name']?> 
				</li>
						<?php endforeach ?>
					<?php endif ?>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-4">
				<div class="form-group">
				<button type="submit" class="btn btn-success form-control" id="prosetting">Save</button>
				</div>
			</div>
		</div>
	</form>

	<?}?>
</div>
<script type="text/javascript">


	$("#prosetting").click(function () {
		
		// var b = $("input:checkbox:not(:checked)");
		// $(b).each(function () {
  //       $(this).val(0); //Set whatever value you need for 'not checked'
  //       $(this).attr("checked", true);
  //   });
		var url = $("#forms-setting").attr("action");
		var data = new FormData(document.getElementById("forms-setting"));
		$.ajax({
			url: url,
			type: "POST",
			data: data,
	            dataType: "json",  // Has to be false to be able to return response
	            processData: false,
	            contentType: false,
	            success: function(response) 
	            {
	            	if(response.status == true){
	            		AdminToastr.success(response.txt);
	                    // location.reload(); 
	                }
	                else{
	                	AdminToastr.error(response.txt);
	                }
	            }
	        });  // JQUERY Native Ajax End*/
		return false;
	});

</script>