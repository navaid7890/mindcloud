<?
global $config;

?>

<form class="cmxform horizontal-form tasi-form" id="uploadpptimage" method="POST" action="<?= $config['base_url'] ?>admin/videos/upload_image">
    <div class="form-body">

        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            You have some form errors. Please check below.
        </div>
        <div class="alert alert-success display-hide">
            <button class="close" data-close="alert"></button>
            Your form validation is successful!
        </div>

        <input type="hidden" value="<?= $form_data['videos']['videos_id'] ?>" name="videos[videos_id]" />

        <div class="row item_set">

            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="form-group ">
                    <div class="">
                        <div data-provides="uploadfile" class="uploadfile uploadfile-new">
                            <div style="max-width: 200px; max-height: 100%;" class="uploadfile-new thumbnail">
                                <?php
                                if (!empty($form_data['videos']['videos_ppt'])) {
                                ?>
                                    <figure>
                                        <img src="<?= g('admin_images_root') . "general-icon.png" ?>" alt="" style="height: 50px">
                                        <figcaption><?= $form_data['videos']['videos_ppt'] ?></figcaption>
                                    </figure>
                                <?php
                                } else {
                                ?>
                                   <img alt="" src="<?= g('admin_images_root') . "general-icon.png" ?>">
                                <?php
                                }
                                ?>

                            </div>
                            <!-- <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="uploadfile-preview uploadfile-exists thumbnail">
            </div> -->
                            <div>
                                <span class="btn btn-file blue">
                                    <span class="uploadfile-new"><i class="fa fa-paper-clip"></i> Select File</span>
                                    <span class="uploadfile-exists"><i class="fa fa-undo"></i> Change</span>
                                    <input type="file" name="ok" class="default">
                                </span>
                                <a data-dismiss="uploadfile" class="btn btn-danger uploadfile-exists" href="#"><i class="fa fa-trash"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- //image 2 -->
            <?
            $i = 2;
            $max_images = 4;
            for ($i; $i <= $max_images; $i++) { ?>

                <?php if ($form_data['videos']['videos_is_image' . $i]  == 1) : ?>



                    <!-- <div class="col-md-3">
                        <div class="">
                            <div class="uploadfile uploadfile-new" data-provides="uploadfile">
                                <div class="uploadfile-new thumbnail" style="max-width: 150px; max-height: 150px;">

                                    <figure>
                                        <img src="http://localhost/cloud/assets/admin/img/general-icon.png" alt="" style="height: 50px">
                                        <figcaption>98006_test.ppt</figcaption>
                                    </figure>

                                </div>
                                <div class="uploadfile-preview uploadfile-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                    98006_test.ppt </div>
                                <div>
                                    <span class="btn btn-file blue">

                                        <span class="uploadfile-new"><i class="fa fa-paper-clip"></i> Select File</span>
                                        <span class="uploadfile-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" class="default " name="videos[videos_ppt]">

                                    </span>
                                    <a href="#" class="btn btn-danger uploadfile-exists" data-dismiss="uploadfile"><i class="fa fa-trash"></i> Remove</a>

                                </div>
                                <span style="font-size: 10px;color:red;">
                                    Allow Ext: ppt|pptx </span>
                                <br>
                            </div>
                        </div>
                    </div> -->



                    <div class="col-md-4">
                        <div class="form-group ">
                            <div class="">
                                <div data-provides="uploadfile" class="uploadfile uploadfile-new">
                                    <div style="max-width: 200px; max-height: 150px;" class="uploadfile-new thumbnail">

                                        <?php
                                        if (!empty($form_data['videos']['videos_ppt' . $i])) {
                                        ?>
                                            <figure>
                                                <img src="<?= g('admin_images_root') . "general-icon.png" ?>" alt="" style="height: 50px">
                                                <figcaption><?= $form_data['videos']['videos_ppt'] ?></figcaption>
                                            </figure>
                                        <?php
                                        } else {
                                        ?>
                                            <img alt="" src="<?= g('admin_images_root') . "general-icon.png" ?>">
                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="uploadfile-preview uploadfile-exists thumbnail">
                                    </div>
                                    <div>
                                        <span class="btn btn-file blue">
                                            <span class="uploadfile-new"><i class="fa fa-paper-clip"></i> Select PPT</span>
                                            <span class="uploadfile-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="ok" class="default">
                                        </span>
                                        <a data-dismiss="uploadfile" class="btn btn-danger uploadfile-exists" href="#"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>


            <? } ?>


        </div>

    </div>

    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="button" class="btn sub-btn green" id="savepptCms">Save</button>
                <div id="loading-image" style="display: none;">
                    <img src="https://mindcloud-assets.s3.amazonaws.com/assets/images/loader.gif">
                </div>
            </div>
        </div>
    </div>
</form>
<style>
    div#loading-image img {
        position: fixed;
        z-index: 999;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }
</style>

<script>
    $(document).ready(function() {

        $("#savepptCms").click(function() {

            var data = new FormData(document.getElementById("uploadpptimage"));
            var url = "<?= $config['base_url'] ?>admin/videos/upload_ppt/";
            $('#loading-image').bind('ajaxStart', function() {
                $(this).show();
            }).bind('ajaxStop', function() {
                $(this).hide();
            });
            $.ajax({
                url: url,
                type: "POST",
                data: data,
                dataType: "json", // Has to be false to be able to return response
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == 1) {
                        AdminToastr.success(response.message, "Success");
                        // alert(response.message);
                    } else {
                        AdminToastr.error(response.message, "Error");
                        alert(response.message);
                    }
                }
            }); // JQUERY Native Ajax End*/
            return false;
        });

    });
</script>