<style type="text/css">
#uploadFile {
  background: green none repeat scroll 0 0;
  color: white;
  display: table;
  float: left;
  margin-right: 5px;
  padding: 7px 5%;
}

#filelist > li {
    background: #017ac7;
    color: white;
    list-style: outside none none;
    margin-bottom: 5px;
    padding: 3px 10px;
    width: 50%;
}


.position {border: 1px solid;height: 30px;padding: 5px;}
</style>

<?global $config;
$model_heads = explode("," , $dt_params['dt_headings'] );

//debug(,1);
?>
<div class="row">
  <div class="col-md-12">
    <!-- BEGIN VALIDATION STATES-->
      <div class="tabbable tabbable-custom boxless tabbable-reversed">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#tab_0" data-toggle="tab">
            <?=humanize($page_title)?> </a>
          </li>

          <?if($form_data){?>
          <li>
            <a href="#tab_3" data-toggle="tab">Answer</a>
          </li>
          <?}?>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="tab_0">
            <div class="portlet box green">
              <div class="portlet-title">
                <div class="caption">
                  <i class="fa fa-shopping-cart"></i><?=humanize($page_title)?>
                      <small>Add Details to <?=humanize($page_title)?></small>
                </div>
                <div class="tools">
                  <a href="javascript:;" class="collapse">
                  </a>
                  <a href="javascript:;" class="reload">
                  </a>
                </div>
              </div>
              <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <? $this->load->view("admin/widget/form_generator");?>
                <!-- END FORM-->
              </div>
              <!-- END VALIDATION STATES-->
            </div>
          </div>
            
            <?php
            
            // Images only in edit mode.  
              if($form_data){?>

                <div class="tab-pane" id="tab_3">
                    <div class="portlet box green">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="fa fa-shopping-cart"></i>
                          <small>Mark correct answer</small>
                    </div>
                  </div>
                  <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <? $this->load->view("admin/questions/_options");?>
                    <!-- END FORM-->
                  </div>
                  <!-- END VALIDATION STATES-->
                </div>
              </div>

              <?
              }
            ?>
          </div>
      </div>
  </div>
</div>
<script>
  $(document).ready(function() {    
      Metronic.init(); // init metronic core components
      QuickSidebar.init(); // init quick sidebar
      Demo.init(); // init demo features
      UIAlertDialogApi.init(); //UI Alert API
      FormFileUpload.init();

      $("#example").DataTable({
        "order": [[ 0, "DESC" ]],
      });


      
    if(!<?=$id?>) // when add product detail, disabled images and item set tab
    {
    $('.tabbable li a[href=\#tab_1]').css({"background-color": "#CFD1CF",
                        "color": "#fff"
                        });
    $('.tabbable li a[href=\#tab_2]').css({"background-color": "#CFD1CF",
    "color": "#fff"
    });
    $('.tabbable li a[href=\#tab_1]').click(false);
    $('.tabbable li a[href=\#tab_2]').click(false);
    } 
    if('<?=$_GET["msgtype"]?>' == 'success'){ // when add/edit product detail, switched to images tab
    $('.tabbable li a[href=\#tab_1]').click();
    }
    
      <?if($error)
          echo "AdminToastr.error('".str_replace("\n","",validation_errors('<div>', '</div></br>'))."');";
      ?>
  });




</script>
