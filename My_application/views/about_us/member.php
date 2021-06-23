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
        min-height: 365px;
        position: relative;
        width: 100%;
        text-align: center;
    }

    .product-img-home {
        text-align: center;
        margin-bottom: 5%;
        border-radius: 50%;
        margin-top: 10px;
    }

    .product-img-home img {
        border-radius: 59%;
        border: 1px solid #ccc;
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
    }

    .pad-sec {
        padding: 0px;
    }

    section.myjoin a {
        width: 100%;
        text-align: center;
    }
</style>

<section class="myjoin">
    <div class="container">
        <div class="row">
            
            <? if (isset($exp) and array_filled($exp)) : ?>
                <? foreach ($exp as $key => $value) : ?>
                    <div class="col-lg-3 col-md-4 col-xs-12">
                        <a href="<?=l('user-detail').'/'.$value['user_id']?> ">
                            <div class="single-item">

                                <div class="product-img-home">
                                    <img src="<?= get_image($value['ui_profile_image'], $value['ui_profile_image_path']) ?>" class="img-responsive">
                                </div>

                                <p class="pro-name"><b><?= $value['user_firstname'] ?></b></p>
                                <? if ($value['user_type'] == 0) { ?>
                                    <p class="pro-info">User</p>
                                <? } else { ?>
                                    <p class="pro-info">Expert</p>
                                <? } ?>
                            </div>
                        </a>
                    </div>
                <? endforeach; ?>
            <? endif; ?>

        </div>
    </div>


</section>

<? $this->load->view('widgets/_clients'); ?>