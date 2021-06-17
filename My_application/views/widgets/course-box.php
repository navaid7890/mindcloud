<style>
    .course-scroll h5:first-child {
        display: none;
    }

    li.dropdown-toggle.b-child.catLj19 ul {
        display: none !important;
    }

    .course-list ul li.dropdown-toggle.catLj19>a:after {
        content: "";
    }

    .catLj19 #activeBorder,
    .catLj19 small {
        display: none;
    }
</style>
<div class="course-box hding-3">
    <div class="course-box-content">
        <div class="course-box-head">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3>Learning Journey</h3>
                </div>
                <div class="col-md-4 text-right">
                    <div id="activeBorder" class="active-border">
                        <div id="circle" class="circle">
                            <span class="prec allpercent">0</span>
                            <span id="startDeg" class="180"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space"><br><br><br></div>

            <div class="course-user-info">
                <? // print_r($this->session->userdata); 
                ?>
                <ul class="login-btn">
                    <li><a href="#"><span><img src="<?= i('') ?><?= $this->session_data['profile_image'] ?>"></span> <?= $this->session_data['username'] ?> </a></li>
                </ul>
            </div>
        </div>
        <ul>
            <li style="text-align: left;"><a href="<?= l('account/profile/learning') ?>" class="active" style="font-size: 15px;color: #122B46;font-weight: 700;padding: 18px 15px;">Intro to Learning Journey </a></li>
        </ul>
        <?
        $dt = array(
            'tools',
            'tools_vp',
            'tools_swot',
            'tools_pmmt',
            'tools_smp',
            'tools_cjdg',
            'tools_mc',
            'tools_osf',
            'tools_lts',
            '',
            'tools_fm_income',
            'tools_fm_bss',
            'tools_fm_cfs',
            'tools_fm_beps',
            'tools_fm_dcvm',
            'tools_ids'
        );
        ?>
        <div class="course-list">
            <ul class="course-scroll">
                <!-- <li><a href="javascript:void(0)" class="active">Introduction <span><i class="far fa-check"></i></span> </a></li> -->
                <? if (isset($learn_cat) and array_filled($learn_cat)) : ?>
                    <?php $dt_index = 0; ?>
                    <? foreach ($learn_cat as $keynew => $value) : ?>
                        <h5><?= $value['learning_journey_category_name'] ?></h5>
                        <?
                        $al = array();
                        $al['where']['learning_journey_cat_id'] = $value['learning_journey_category_id'];

                        $ck = $this->model_learning_journey_content->find_all_active($al);
                        //  debug($ck);
                        ?>
                        <? if (isset($ck) and array_filled($ck)) : ?>
                            <? foreach ($ck as $keytwo => $value) :
                                // debug($value); 
                                $a = $value['learning_journey_content_id'];
                            ?>
                                <li class="dropdown-toggle b-child catLj<?= $a ?>">
                                    <a href="#"><?= $value['learning_journey_content_name'] ?>

                                        <div id="activeBorder" class="active-border">
                                            <div id="circle" class="circle">
                                                <span class="prec" id="played<?= $a ?>">0</span>
                                                <span id="startDeg" class="90"></span>
                                            </div>
                                        </div>

                                        <small>0/3</small>
                                    </a>
                                    <ul class="dropdown-box" style="display: none;">
                                        <li><a href="description?cat=<?= $a ?>"><i class="fad fa-video"></i>Intro<span><i class="far fa-check"></i></span></a></li>
                                        <li><a href="<?= l('account/profile/video') ?>?cat=<?= $a ?>"><i class="fad fa-video"></i> Tutorial Video & Transcript <span><i class="far fa-check"></i></span></a></li>
                                        <li class="toolbuilder-<?= $a ?>"><a href="<?= l('account/profile/') ?><?= $dt[$dt_index] ?>"><i class="fad fa-video"></i> Tool & Tool Builder <span><i class="far fa-check"></i></span></a></li>
                                        <li class="mywork-<?= $a ?>"><a href="your_work?tool=<?= $dt_index ?>"><i class="fad fa-video"></i> My Work<span><i class="far fa-check"></i></span></a></li>
                                        <?php $dt_index = $dt_index + 1; ?>
                                    </ul>
                                </li>
                            <? endforeach; ?>
                        <? endif; ?>
                    <? endforeach; ?>
                <? endif; ?>
            </ul>
        </div>
    </div>
</div>

<!--  -->
<?

$param = array();
$param['order'] = "tool_builder_id DESC";
$param['where']['tool_builder_user_id'] = $this->userid;
$tool = $this->model_tool_builder->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_vp_id DESC";
$param['where']['tool_builder_vp_user_id'] = $this->userid;
$toolvp = $this->model_tool_builder_vp->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_id DESC";
$param['where']['tool_builder_user_id'] = $this->userid;
$toolswot = $this->model_tool_builder_swot->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_id DESC";
$param['where']['tool_builder_user_id'] = $this->userid;
$toolpmmt = $this->model_tool_builder_pmmt->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_strg_mkt_id DESC";
$param['where']['tool_builder_strg_mkt_user_id'] = $this->userid;
$tool_strg_mkt = $this->model_tool_builder_strg_mkt->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_cj_dg_id DESC";
$param['where']['tool_builder_cj_dg_user_id'] = $this->userid;
$tool_cj_dg = $this->model_tool_builder_cj_dg->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_mc_mc_id DESC";
$param['where']['tool_builder_mc_mc_user_id'] = $this->userid;
$tool_mc_mc = $this->model_tool_builder_mc_mc->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_osf_id DESC";
$param['where']['tool_builder_osf_user_id'] = $this->userid;
$tool_osf = $this->model_tool_builder_osf->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_lts_id DESC";
$param['where']['tool_builder_lts_user_id'] = $this->userid;
$tool_lts = $this->model_tool_builder_lts->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_id DESC";
$param['where']['tool_builder_user_id'] = $this->userid;
$tool_fm_income = $this->model_tool_builder_fm_income->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_id DESC";
$param['where']['tool_builder_user_id'] = $this->userid;
$tool_fm_bss = $this->model_tool_builder_fm_bss->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_id DESC";
$param['where']['tool_builder_user_id'] = $this->userid;
$tool_fm_cfs = $this->model_tool_builder_fm_cfs->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_id DESC";
$param['where']['tool_builder_user_id'] = $this->userid;
$tool_fm_beps = $this->model_tool_builder_fm_beps->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_id DESC";
$param['where']['tool_builder_user_id'] = $this->userid;
$tool_fm_dcvm = $this->model_tool_builder_fm_dcvm->find_one_active($param);
$param = array();
$param['order'] = "tool_builder_ids_id DESC";
$param['where']['tool_builder_ids_user_id'] = $this->userid;
$tool_ids = $this->model_tool_builder_ids->find_one_active($param);
?>

<script>
    $(document).ready(function() {

        // $(".catLj"+id).addClass('active');
        // url = new URL(window.location.href);
        // if (url.searchParams.get('cat')) {
        //    var xyz = url.searchParams.get('cat');
        //    var abc = "catLj" + xyz;
        //    $("." + abc).addClass('active');
        //    $("." + abc + " ul").attr("style", "display:block");
        <? if ($tool['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-11").addClass('active');
            $(".mywork-11").addClass('active');
            $(".catLj11 #played11").html('66');
        <? endif; ?>
        <? if ($toolvp['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-12").addClass('active');
            $(".mywork-12").addClass('active');
            $(".catLj12 #played12").html('66');
        <? endif; ?>
        <? if ($toolswot['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-13").addClass('active');
            $(".mywork-13").addClass('active');
            $(".catLj13 #played13").html('66');
        <? endif; ?>
        <? if ($toolpmmt['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-14").addClass('active');
            $(".mywork-14").addClass('active');
            $(".catLj14 #played14").html('66');
        <? endif; ?>
        <? if ($tool_strg_mkt['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-15").addClass('active');
            $(".mywork-15").addClass('active');
            $(".catLj15 #played15").html('66');
        <? endif; ?>
        <? if ($tool_cj_dg['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-16").addClass('active');
            $(".mywork-16").addClass('active');
            $(".catLj16 #played16").html('66');
        <? endif; ?>
        <? if ($tool_mc_mc['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-17").addClass('active');
            $(".mywork-17").addClass('active');
            $(".catLj17 #played17").html('66');
        <? endif; ?>
        <? if ($tool_osf['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-18").addClass('active');
            $(".mywork-18").addClass('active');
            $(".catLj18 #played18").html('66');
        <? endif; ?>
        <? if ($tool_lts['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-25").addClass('active');
            $(".mywork-25").addClass('active');
            $(".catLj25 #played25").html('66');
        <? endif; ?>
        <? if ($tool_fm_income['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-20").addClass('active');
            $(".mywork-20").addClass('active');
            $(".catLj20 #played20").html('66');
        <? endif; ?>
        <? if ($tool_fm_bss['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-21").addClass('active');
            $(".mywork-21").addClass('active');
            $(".catLj21 #played21").html('66');
        <? endif; ?>
        <? if ($tool_fm_cfs['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-22").addClass('active');
            $(".mywork-22").addClass('active');
            $(".catLj22 #played22").html('66');
        <? endif; ?>
        <? if ($tool_fm_beps['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-23").addClass('active');
            $(".mywork-23").addClass('active');
            $(".catLj23 #played23").html('66');
        <? endif; ?>
        <? if ($tool_fm_dcvm['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-24").addClass('active');
            $(".mywork-24").addClass('active');
            $(".catLj24 #played24").html('66');
        <? endif; ?>
        <? if ($tool_ids['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-26").addClass('active');
            $(".mywork-26").addClass('active');
            $(".catLj26 #played26").html('66');
        <? endif; ?>



        var sum = 0;
        $('.prec').each(function() {
            sum += +$(this).text() || 0;
        });
        var total = Math.round((sum / 1500) * 100);

        $(".allpercent").text(total);
        //    
        // }


        // $(".catLj"+id).addClass('active');
        //   urlb = new URL(window.location.href);
        // if (urlb.searchParams.get('cat')) {
        //    var toolb = url.searchParams.get('cat');
        //    var tool = "activeId-"+toolb;
        //    $("."+tool).addClass('active');
        // }






    });
</script>