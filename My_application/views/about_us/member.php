<style>
    .myjoin {
        padding: 5% 3%;
    }

    .myjoin h2 {
        border-bottom: 8px solid #F4C150;
        display: inline;
        padding-bottom: 12px;
        position: relative;
        margin-bottom: 33px;
        display: inline-block;
        font-size: 50px;
    }


    .myjoin p {
        font-size: 15px;
        line-height: 30px;
    }

    .smyjoin input[type=text] {
        background: #ffffff00;
        /* border: none; */
        border-radius: 0px;
        font-family: 'Open Sans';
        font-weight: 400;
        color: #000;
        border: 1px solid rgba(0, 0, 0, .15);
    }

    .single-item {
        border: 1px solid #c7c7c7;
        padding: 10px 10px;
        margin-bottom: 20px;
        display: inline-block;
        background: #fff;
        min-height: 260px;
        position: relative;
        width: 100%;
    }

    .product-img-home {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 155px;
        margin: 0;
        text-align: center;
        width: 155px;
        margin-bottom: 5%;
        border-radius: 50%;
        margin-top: 10px;
        margin: 0 auto;
    }

    .membersBox a {
        width: 100%;
        text-align: center;
    }

    .auctions .pro-name {
        font-size: 16px;
        margin-bottom: 5px;
    }

    p.pro-info {
        color: #9b9b9b;
        margin: 0px 0px 10px;
        font-size: 13px;
    }

    p.pro-name {
        font-size: 18px;
        padding-top: 10px;
        color: #33415C;
    }

    .pad-sec {
        padding: 0px;

    }
    .box {
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }

    .fld-login {
        float: right;
    }
</style>

<section class="myjoin">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fld-login">
                    <select class="form-control form-group">
                        <option>Filter By</option>
                        <option value="red">Expert</option>
                        <option value="green">User</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 red box pb-0">
                <div class="row">
                    <? if (isset($exp) and array_filled($exp)) : ?>
                        <? foreach ($exp as $key => $value) : ?>

                            <div class="col-lg-3 col-md-4 col-xs-12 membersBox">
                                <a href="<?= l('expert-detail') . '/' . $value['expert_id'] ?> ">
                                    <div class="single-item">
                                        <div class="product-img-home">
                                            <img src="https://mindcloud-bucket.s3.amazonaws.com/assets/images/<?= $value['expert_image'] ?>" class="img-responsive">
                                        </div>

                                        <p class="pro-name"><b><?= $value['expert_name'] ?></b></p>
                                        <p class="pro-info">Expert</p>
                                    </div>
                                </a>
                            </div>
                        <? endforeach; ?>
                    <? endif; ?>
                </div>
            </div>
            <div class="col-md-12 green box pt-0">
                <div class="row">
                    <? if (isset($user) and array_filled($user)) : ?>
                        <? foreach ($user as $key => $value) : ?>
                            <div class="col-lg-3 col-md-4 col-xs-12 membersBox">
                                <a href="<?= l('user-detail') . '/' . $value['user_id'] ?> ">
                                    <div class="single-item">

                                        <div class="product-img-home">
                                            <img src="<?= get_image($value['ui_profile_image'], $value['ui_profile_image_path']) ?>" class="img-responsive">
                                        </div>

                                        <p class="pro-name"><b><?= $value['user_firstname'] ?></b></p>
                                        <p class="pro-info">User</p>
                                    </div>
                                </a>
                            </div>
                        <? endforeach; ?>
                    <? endif; ?>
                </div>
            </div>

        </div>
    </div>


</section>

<? $this->load->view('widgets/_clients'); ?>


<script>
    $(document).ready(function() {
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").show();
                }
            });
        }).change();
    });
</script>