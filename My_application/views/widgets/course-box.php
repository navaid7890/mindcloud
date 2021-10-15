<style>
    .course-scroll h5:first-child {
        display: none;
    }

    li.dropdown-toggle.b-child.catLj19 ul {
        /* display: none !important; */
    }

    .course-list ul li.dropdown-toggle.catLj19>a:after {
        /* content: ""; */
    }

    li.toolbuilder-19 {
        display: none;
    }

    li.mywork-19 {
        display: none;
    }



    .catLj19 #activeBorder,
    .catLj19 small {
        display: none;
    }

    strong.locked {
        display: none;
    }


   #d a.active {
    background: #33415C;
    display: block;
    color:#fff;
}

#d a{

    color: #33415C;
}
</style>

<div class="course-box hding-3 CboxLJ">
    <div class="course-box-content">
        <div class="course-box-head">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3>Learning Journey</h3>
                </div>
                <div class="col-md-4 text-right">
                    <!-- <div id="activeBorder" class="active-border">
                        <div id="circle" class="circle">
                            <span class="prec allpercent">0</span>
                            <span id="startDeg" class="180"></span>
                        </div>
                    </div> -->

                    <div class="topCircle">
                        <div class="percent2">
                            <p style="display:none;"><span class="prec allpercent">0</span></p>
                        </div>

                    </div>

                </div>
            </div>
            <div class="space"><br><br><br></div>

            <div class="course-user-info">
                <?
                $startup = array();
                $startup['where']['startup_user_id'] = $this->userid;
                $startupdata = $this->model_startup->find_all_active($startup);
                // debug($startupdata[0]['startup_name']);
                ?>
                <ul class="startUpname">
                    <li>
                        <? if (!empty($startupdata)) : ?>
                            <?= $startupdata[0]['startup_name'] ?>
                        <? else : ?>
                            -- -- --
                        <? endif; ?>
                        <? //=$this->session->userdata['logged_in_front']['first_name']
                        ?>

                    </li>
                </ul>
            </div>
        </div>
        <ul>
           
            <li id="d"  style="text-align: left;"><a href="<?= l('account/profile/learning') ?>" class="<?= ($this->uri->segment(3) == 'learning')  ? 'active' : '' ?>"  style="font-size: 15px;font-weight: 700;padding: 18px 15px;">Intro to Learning Journey </a></li>
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
                                <li id="<?= $a ?>" class="dropdown-toggle b-child catLj<?= $a ?> subclass">
                                    <a href="javascript:;"><?= $value['learning_journey_content_name'] ?>
                                        <div class="percent" id="played<?= $a ?>">
                                            <p style="display:none;"></p>
                                        </div>

                                        <!-- <small>0/3</small> -->
                                    </a>
                                    <ul class="dropdown-box">
                                        <li>
                                            <a href="description?cat=<?= $a ?>#<?= $a ?>">
                                                <i class="fas fa-info-circle"></i>Intro<strong class="locked"><i class="fas fa-lock"></i></strong><span><i class="far fa-check"></i></span>
                                            </a>
                                        </li>
                                        <li class="videoScript-<?= $a ?>">
                                            <a href="<?= l('account/profile/video') ?>?cat=<?= $a ?>#<?= $a ?>"><i class="fad fa-video"></i> Tutorial Video & Transcript <strong class="locked"><i class="fas fa-lock"></i></strong><span><i class="far fa-check"></i></span>
                                            </a>
                                        </li>
                                        <li class="toolbuilder-<?= $a ?>">
                                            <a href="<?= l('account/profile/') ?><?= $dt[$dt_index] ?>?cat=<?= $a ?>#<?= $a ?>"><i class="fas fa-tools"></i> Tool & Tool Builder <strong class="locked"><i class="fas fa-lock"></i></strong> <span><i class="far fa-check"></i></span
                                            ></a>
                                        </li>
                                        <li class="mywork-<?= $a ?>">
                                            <a href="your_work?tool=<?= $dt_index ?>&cat=<?= $a ?>#<?= $a ?>"><i class="fas fa-briefcase"></i> My Work <strong class="locked"><i class="fas fa-lock"></i></strong><span><i class="far fa-check"></i></span>
                                            </a>
                                        </li>
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


$param = array();
// $param['order'] = "learning_journey_transcript_id DESC";
$param['where']['learning_journey_transcript_user_id'] = $this->userid;
$param['where']['learning_journey_transcript_percent'] = 1;
// $param['where']['learning_journey_transcript_content_id'] = $_GET['cat'];
$videoTranscript = $this->model_learning_journey_transcript->find_all_active($param);


$upaid = array();
$upaid['where']['user_id'] = $this->userid;
$datapaid = $this->model_user->find_all_active($upaid);

// debug($datapaid[0]['user_paid']);

?>

<? if ($datapaid[0]['user_paid'] == 0) : ?>
    <style>
        .catLj12 strong.locked,
        .catLj13 strong.locked,
        .catLj14 strong.locked,
        .catLj15 strong.locked,
        .catLj16 strong.locked,
        .catLj17 strong.locked,
        .catLj18 strong.locked,
        .catLj19 strong.locked,
        .catLj20 strong.locked,
        .catLj21 strong.locked,
        .catLj22 strong.locked,
        .catLj23 strong.locked,
        .catLj24 strong.locked,
        .catLj25 strong.locked,
        .catLj26 strong.locked {
            margin-left: 5px;
            display: initial;
        }
    </style>
    <script>
        var newUrl = "<?= l('subscription') ?>";


        $(".catLj12 a").attr('href', newUrl);

        // $('.catLj13').click(false);
        $(".catLj13 a").attr('href', newUrl);
        // $('.catLj14').click(false);
        $(".catLj14 a").attr('href', newUrl);
        // $('.catLj15').click(false);
        $(".catLj15 a").attr('href', newUrl);
        // $('.catLj16').click(false);
        $(".catLj16 a").attr('href', newUrl);
        // $('.catLj17').click(false);
        $(".catLj17 a").attr('href', newUrl);
        // $('.catLj18').click(false);
        $(".catLj18 a").attr('href', newUrl);
        $(".catLj19 a").attr('href', newUrl);
        // $('.catLj20').click(false);
        $(".catLj20 a").attr('href', newUrl);
        // $('.catLj21').click(false);
        $(".catLj21 a").attr('href', newUrl);
        // $('.catLj22').click(false);
        $(".catLj22 a").attr('href', newUrl);
        // $('.catLj23').click(false);
        $(".catLj23 a").attr('href', newUrl);
        // $('.catLj24').click(false);
        $(".catLj24 a").attr('href', newUrl);
        // $('.catLj25').click(false);
        $(".catLj25 a").attr('href', newUrl);
        // $('.catLj26').click(false);
        $(".catLj26 a").attr('href', newUrl);
        $(".subclass>a").click(false);
    </script>

<? endif; ?>

<script>
    $(document).ready(function() {


        // $('.catLj12').click(false);

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
            // $(".catLj11 #played11").html('66');
            var percVal = parseInt('66');
            $(".catLj11 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('1', totalseprate);
        <? else : ?>
            var percVal = parseInt('0');
            $(".catLj11 .percent p").html(percVal);
            var totalseprate = percVal;
        <? endif; ?>
        <? if ($toolvp['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-12").addClass('active');
            $(".mywork-12").addClass('active');
            // $(".catLj12 #played12").html('66');
            var percVal = parseInt('66');
            $(".catLj12 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('2', totalseprate);
        <? else : ?>
            $(".catLj12 #played12 p").html('0');
        <? endif; ?>
        <? if ($toolswot['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-13").addClass('active');
            $(".mywork-13").addClass('active');
            // $(".catLj13 #played13").html('66');
            var percVal = parseInt('66');
            $(".catLj13 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('3', totalseprate);
        <? else : ?>
            $(".catLj13 #played13 p").html('0');
        <? endif; ?>
        <? if ($toolpmmt['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-14").addClass('active');
            $(".mywork-14").addClass('active');
            // $(".catLj14 #played14").html('66');
            var percVal = parseInt('66');
            $(".catLj14 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('4', totalseprate);
        <? else : ?>
            $(".catLj14 #played14 p").html('0');
        <? endif; ?>
        <? if ($tool_strg_mkt['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-15").addClass('active');
            $(".mywork-15").addClass('active');
            // $(".catLj15 #played15").html('66');
            var percVal = parseInt('66');
            $(".catLj15 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('5', totalseprate);
        <? else : ?>
            $(".catLj15 #played15 p").html('0');
        <? endif; ?>
        <? if ($tool_cj_dg['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-16").addClass('active');
            $(".mywork-16").addClass('active');
            // $(".catLj16 #played16").html('66');
            var percVal = parseInt('66');
            $(".catLj16 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('6', totalseprate);
        <? else : ?>
            $(".catLj16 #played16 p").html('0');
        <? endif; ?>
        <? if ($tool_mc_mc['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-17").addClass('active');
            $(".mywork-17").addClass('active');
            // $(".catLj17 #played17").html('66');
            var percVal = parseInt('66');
            $(".catLj17 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('7', totalseprate);
        <? else : ?>
            $(".catLj17 #played17 p").html('0');
        <? endif; ?>
        <? if ($tool_osf['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-18").addClass('active');
            $(".mywork-18").addClass('active');
            // $(".catLj18 #played18").html('66');
            var percVal = parseInt('66');
            $(".catLj18 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('8', totalseprate);
        <? else : ?>
            $(".catLj18 #played18 p").html('0');
        <? endif; ?>
       
        <? if ($tool_lts['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-25").addClass('active');
            $(".mywork-25").addClass('active');
            // $(".catLj25 #played25").html('66');
            var percVal = parseInt('66');
            $(".catLj25 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('9', totalseprate);
        <? else : ?>
            $(".catLj25 #played25 p").html('0');
        <? endif; ?>
        <? if ($tool_fm_income['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-20").addClass('active');
            $(".mywork-20").addClass('active');
            // $(".catLj20 #played20").html('66');
            var percVal = parseInt('66');
            $(".catLj20 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('10', totalseprate);
        <? else : ?>
            $(".catLj20 #played20 p").html('0');
        <? endif; ?>
        <? if ($tool_fm_bss['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-21").addClass('active');
            $(".mywork-21").addClass('active');
            // $(".catLj21 #played21").html('66');
            var percVal = parseInt('66');
            $(".catLj21 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('11', totalseprate);
        <? else : ?>
            $(".catLj21 #played21 p").html('0');
        <? endif; ?>
        <? if ($tool_fm_cfs['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-22").addClass('active');
            $(".mywork-22").addClass('active');
            // $(".catLj22 #played22").html('66');
            var percVal = parseInt('66');
            $(".catLj22 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('12', totalseprate);

        <? else : ?>
            $(".catLj22 #played22 p").html('0');
        <? endif; ?>
        <? if ($tool_fm_beps['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-23").addClass('active');
            $(".mywork-23").addClass('active');
            // $(".catLj23 #played23").html('66');
            var percVal = parseInt('66');
            $(".catLj23 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('13', totalseprate);
        <? else : ?>
            $(".catLj23 #played23 p").html('0');
        <? endif; ?>
        <? if ($tool_fm_dcvm['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-24").addClass('active');
            $(".mywork-24").addClass('active');
            // $(".catLj24 #played24").html('66');
            var percVal = parseInt('66');
            $(".catLj24 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('14', totalseprate);
        <? else : ?>
            $(".catLj24 #played24 p").html('0');
        <? endif; ?>
        <? if ($tool_ids['tool_builder_percent'] == 1) : ?>
            $(".toolbuilder-26").addClass('active');
            $(".mywork-26").addClass('active');
            // $(".catLj26 #played26").html('66');
            var percVal = parseInt('66');
            $(".catLj26 .percent p").html(percVal);
            var totalseprate = percVal;
            console.log('15', totalseprate);
        <? else : ?>
            $(".catLj26 #played26 p").html('0');
        <? endif; ?>

        $("#played19 p").html('0');
        <? foreach ($videoTranscript as $vt => $value) : ?>
            <? // if ($value['learning_journey_transcript_content_id'] == 1) : 
            ?>
            <? $a = $value['learning_journey_transcript_content_id'] ?>
            var transcriptTotalcheck = parseInt($(".catLj<?= $a ?> #played<?= $a ?> p").html());
            var transcriptTotal = 0;
            console.log("financial Percentage",transcriptTotalcheck );
            <? if ($a == "19") : ?>
                $(".videoScript-<?= $a ?>").addClass('active');
                    var transcriptTotal = 0;
                    var transcriptTotal = parseInt($(".catLj19 #played19 p").html())+100;
                    $("#played19 p").html(transcriptTotal);
                    console.log("financial Percentage",transcriptTotal );
                    
            <? else : ?>
                if (transcriptTotalcheck < 100) {

                    $(".videoScript-<?= $a ?>").addClass('active');
                    var transcriptTotal = 0;
                    var transcriptTotal = parseInt($(".catLj<?= $a ?> #played<?= $a ?> p").html()) + 34;
                    $("#played<?= $a ?> p").html(transcriptTotal);

                    // console.log("financial Percentage",transcriptTotal );

                }
            <? endif; ?>


            // else {
            //     $("#forms-mark-complete-btn").attr("disabled", "disabled");
            // }

            <? //endif; 
            ?>
        <? endforeach; ?>


        

        var sum = totalseprate;
        
        $('.percent p').each(function() {
            sum += +$(this).text() || 0;
        });
        console.log('all value of percentage', sum);
        var total = Math.round((sum / 1666) * 100);

        $('.allpercent').text(total);


        localStorage.setItem("learingPercent", $(".allpercent").text());
        //    
        // }


        // $(".catLj"+id).addClass('active');
        //   urlb = new URL(window.location.href);
        // if (urlb.searchParams.get('cat')) {
        //    var toolb = url.searchParams.get('cat');
        //    var tool = "activeId-"+toolb;
        //    $("."+tool).addClass('active');
        // }

        // BUSINESS MODEL CANVAS Percentage
        var businessPercent = $("#played11").html();
        var businessPercent1 = $("#played12").html();
        var businessTotal = parseInt(businessPercent) + parseInt(businessPercent1)
        var TotalbusinessPercent = Math.round((businessTotal / 200) * 100);

        //console.log("businessPercent", parseInt($(".catLj11 .percent p").html()));

        localStorage.setItem("businessPercent", parseInt($(".catLj11 .percent p").html()));

        // GO-TO MARKET STRATEGIES
        var gtms1 = $("#played13 p").html();
        var gtms2 = $("#played14 p").html();
        var gtms3 = $("#played15 p").html();
        var gtms4 = $("#played16 p").html();
        var gtms5 = $("#played17 p").html();
        var gtms6 = $("#played18 p").html();
        var gtmsTotal = parseInt(gtms1) + parseInt(gtms2) + parseInt(gtms3) + parseInt(gtms4) + parseInt(gtms5) + parseInt(gtms6);
        var TotalgtmsPercent = Math.round((gtmsTotal / 600) * 100);
        localStorage.setItem("GO_TO_MARKET_STRATEGIES", parseInt(TotalgtmsPercent));

        console.log("This is test", parseInt(TotalgtmsPercent));


        // Financial management
        // var fm1 = $("#played19 p").html();
        var fm2 = $("#played20 p").html();
        var fm3 = $("#played21 p").html();
        var fm4 = $("#played22 p").html();
        var fm5 = $("#played23 p").html();
        var fm6 = $("#played24 p").html();
        var fmTotal = parseInt(fm2) + parseInt(fm3) + parseInt(fm4) + parseInt(fm5) + parseInt(fm6);
        // var fmTotal = fm2 + fm3 + fm4 + fm5 + fm6;
        var TotalfmPercent = Math.round((fmTotal / 500) * 100);
        localStorage.setItem("Financial_management", parseInt(TotalfmPercent));

          console.log("Financial management", parseInt(TotalfmPercent));


        // Legal Structure
        var ls = $("#played25 p").html();
        var lsTotal = parseInt(ls);
        localStorage.setItem("Legal_Structure", parseInt(lsTotal));

        // Investment / Pitch Deck
        var Idesk = $("#played26 p").html();
        var IdeskTotal = parseInt(Idesk);
        localStorage.setItem("Investment_Desk", parseInt(IdeskTotal));




    });
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js'></script>

