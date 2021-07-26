<style>
.form-control {
    font-size: 14px;
    border-radius: 2px;
    border: 1px solid #ccc;
    margin-top: 10px;
}


</style>
<div class="col-md-12 col-xs-12 col-sm-12 center contactFormSec portlet-body form">
<?
 $vacation_data = $this->model_expert->find_all_active();
 $category = $this->model_category->find_all_active();

?>
    <form action="<?=la('home/ajax-save-on-vacation')?>" class='cmxform form-horizontal tasi-form' id='on_vacation_form'>
 

        <div class="col-md-4 col-xs-12 col-sm-4">
          <input type="text" id="date_timepicker_start" class="form-control" name="vacation[v_start_date]" required placeholder="Date">
        </div>

        <div class="col-md-4 col-xs-12 col-sm-4">
          <select name="vacation[v_user_id]" class="form-control" required>
            <option value="">Select Expert</option>
    
        <? if(isset($vacation_data) AND array_filled($vacation_data)) { ?>
        <? foreach($vacation_data as $id=>$value){?>


          <option value="<?=$value['expert_id']?>"><?=$value['expert_name']?></option>
       <? } ?>
       <? } ?>

          </select>
        </div>

        <div class="col-md-4 col-xs-12 col-sm-4">
          <select name="vacation[v_cat_id]" class="form-control" required>
            <option value="">Select Category</option>
    
        <? if(isset($category) AND array_filled($category)) { ?>
        <? foreach($category as $id=>$value){?>


          <option value="<?=$value['category_id']?>"><?=$value['category_name']?></option>
       <? } ?>
       <? } ?>

          </select>
        </div>

        <div class="col-md-4 col-xs-12 col-sm-4">
          <select id="ba_reserve_time2" name="vacation[v_start_time]" class="form-control" required>
            <option value="">Select Reserve Time</option>
            <? for( $i=$open_time; $i<$close_time; $i+=3600):
                  $output = date("h:i A",$i);
            ?>
                <option value="<?=$output?>"><?=$output?></option>
              <? 
              endfor;?>
          </select>
        </div>


        <div class="col-md-4 col-xs-12 col-sm-4">
          <select id="ba_arrive_time"  name="vacation[v_end_time]" class="form-control">
            <option value="">Select Time</option>
          </select>
        </div>


        <div class="col-md-12 col-xs-12 col-sm-12">
            <textarea class="form-control" name="vacation[v_description]" placeholder="Description" style="margin:5px 0;" required></textarea>
        </div>



        <div id="time_container">
            <div class="col-md-12 col-xs-12 col-sm-12">
            	<button type="submit" class='btn btn-primary' id="on_vacation_form-btn">Submit</button>
            </div>
        </div>
    </form>
</div>
    <div class="clearfix"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">

    jQuery(function(){
      var theDate = new Date();
      jQuery('#date_timepicker_start').datetimepicker({
      format:'Y-m-d',
      timepicker:false,
      minDate: theDate,
     });

      /*
     jQuery('#date_timepicker_start').datetimepicker({
      format:'Y-m-d H:i:s',
      onShow:function( ct ){
       this.setOptions({
        maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false
       })
      },
      // timepicker:true
     });
     jQuery('#date_timepicker_end').datetimepicker({
      format:'Y-m-d H:i:s',
      onShow:function( ct ){
       this.setOptions({
        minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
       })
      },
      // timepicker:true
     });
     */
    });



    $(function() {
        var $form = $('#on_vacation_form');
        $form.submit(function(event) {

            $.ajax({ 
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                dataType: "json",

                success: function (response)
                {
                    Modal.reset();
                    $("#preloader").hide();
                    if(response.status) {
                     
                      alert("Vacations Added");
                    // toastr.success('Vacations Added');
                     // return false;
                        setTimeout(function(){ location.reload(); }, 1000);
                    }
                    else {
                        toastr.error('Error Found Please try again');
                    }
                },
                beforeSend: function(response)
                {
                    //$("#preloader").show();
                }
            });
            return false;
        });
    });
</script>