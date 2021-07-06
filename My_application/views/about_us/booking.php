<section class="myjoin">
    <div class="container">
        <div class="row">
            <div class="col-md-3 topicTitle">
                <div class="navigatorWrap">
                    <div class="navigator">
                        <ul>
                            <li data-toggle="tooltip" data-placement="top" title="Select Expert Topic" class="active"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Select An Expert"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Select Date & Time"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Enter Your Information"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Verify Booking Detail"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Appointment Confirmation"></li>
                        </ul>
                    </div>

                    <div class="expertTopic">

                        <ul>
                            <li style="display: block;">
                                <img src="assets/images/services.png" alt="">
                                <h3>Select Expert Topic</h3>
                                <p>From the menu on the right, choose the expertise topic you are interested in.</p>
                            </li>

                            <li>
                                <img src="assets/images/agents.png" alt="">
                                <h3>Select An Expert</h3>
                                <p>From the menu on the right, choose the expert you’d like to work with, corresponding to the expertise of your interest.</p>
                            </li>

                            <li>
                                <img src="assets/images/datepicker.png" alt="">
                                <h3>Select Date & Time</h3>
                                <p>Check the expert’s available time & date to book an appointment that works for you. The hourly rate is 300 AED.</p>
                            </li>

                            <li>
                                <img src="assets/images/contact.png" alt="">
                                <h3>Enter your Information</h3>
                                <p>Fill the fields on the right with your name, email, phone number. You can also add any comment relevant for the expert to read.</p>
                            </li>

                            <li>
                                <h3>Verify Booking Detail</h3>
                                <p>Your booking is now received. Please wait to receive an email from your expert to confirm your booking and send you an invoice for the payment of 300 AED for one-hour session. Good luck!</p>
                            </li>


                        </ul>

                    </div>

                    <div class="fQuesContact">
                        <h5>Questions? <br><span> Email : <a href="mailto:info@mindcloudtribe.com">info@mindcloudtribe.com</a> <br> Call (971) 506508595 for help</span> </h5>
                    </div>
                </div>
            </div><!-- // Col // -->
            <div class="col-md-5 selectAreaBox">
                <div class="selectAreaBoxInner">
                    <h4>Select Topic</h4>
                    <h4>Select Expert</h4>
                    <h4>Select Date & Time</h4>
                    <h4>Enter Information</h4>
                    <div id="topics">
                        <ul class="tSelectBtn">
                            <? if (isset($category) and array_filled($category)) : ?>
                                <? foreach ($category as $key => $value) : ?>
                                    <li class="selectTopicBtn" onclick="get_expert('<?= $value['category_id'] ?>')"><span><?= $value['category_name'] ?></span></li>
                                <? endforeach; ?>
                            <? endif; ?>
                        </ul>
                    </div>
                    <div id="experts">
                        <ul class="expertlist tSelectBtn">

                        </ul>
                        <div class="bbtn backBtn_1">
                            <p><i class="fal fa-long-arrow-left"></i> Back </p>
                        </div>
                    </div>

                    <div id="selectT_D">

                        <div id="demo">
                            <div id="one"></div>
                        </div>

                        <div class="selectTimeSlot">
                            <ul>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="08:00 am - 09:00 am"></label>
                                    <p>8<span>AM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="08:15 am - 09:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="08:30 am - 09:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="08:45 am - 09:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="09:00 am - 10:00 am"></label>
                                    <p>9<span>AM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="09:15 am - 10:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="09:30 am - 10:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="09:45 am - 10:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="10:00 am - 11:00 am"></label>
                                    <p>10<span>AM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="10:15 am - 11:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="10:30 am - 11:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="10:45 am - 11:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="11:00 am - 12:00 am"></label>
                                    <p>11<span>AM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="11:15 am - 12:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="11:30 am - 12:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="11:45 am - 12:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="12:00 am - 01:00 am"></label>
                                    <p>12<span>PM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="12:15 am - 01:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="12:30 am - 01:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="12:45 am - 01:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="01:00 am - 02:00 am"></label>
                                    <p>1<span>PM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="01:15 am - 02:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="01:30 am - 02:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="01:45 am - 02:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="02:00 am - 03:00 am"></label>
                                    <p>2<span>PM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="02:15 am - 03:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="02:30 am - 03:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="02:45 am - 03:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="03:00 am - 04:00 am"></label>
                                    <p>3<span>PM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="03:15 am - 04:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="03:30 am - 04:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="03:45 am - 04:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="04:00 am - 05:00 am"></label>
                                    <p>4<span>PM</span></p>
                                </li>
                            </ul>

                        </div>
                        <div class="btnHolders">
                            <div class="bbtn backBtn_2">
                                <p><i class="fal fa-long-arrow-left"></i> Back </p>
                            </div>
                            <div class="nbtn nextBtn_1">
                                <p> Next <i class="fal fa-long-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>

                    <div id="information">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">New Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1">Already have an account?</a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" onkeyup="getName(this.value)" name="name" placeholder="Your First Name"></div>
                                        <div class="col-md-6"><input type="text" onkeyup="getLastName(this.value)" name="last-name" placeholder="Your Last Name"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" onkeyup="getPhone(this.value)" name="phone" placeholder="Your Phone Number"></div>
                                        <div class="col-md-6"><input type="text" onkeyup="getEmail(this.value)" name="email" placeholder="Your Email Address"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><textarea name="comment" id="" placeholder="Add Comment"></textarea></div>

                                    </div>
                                </form>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-12"><input type="text" name="name" placeholder="Your Email Address"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12"><input type="password" name="pwd" placeholder="Your Password"></div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-md-6 text-left">
                                            <input type="submit" name="" value="Log Me In">
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="#"> Forgot Password?</a>
                                        </div>
                                    </div>


                                </form>
                            </div>

                        </div>

                        <div class="btnHolders">
                            <div class="bbtn backBtn_3">
                                <p><i class="fal fa-long-arrow-left"></i> Back </p>
                            </div>
                            <div class="nbtn nextBtn_2">
                                <p> Next <i class="fal fa-long-arrow-right"></i></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="finalResult">
                    <h5>Verify Booking Details</h5>
                    <p>Double check your booking information, you can go back to edit it or click submit button to confirm your booking.</p>

                    <div class="userInformation">
                        <h3>Appointment Info</h3>
                        <ul>
                            <li>
                                <label>Date:</label>
                                <span class="calDate"></span>
                            </li>
                            <li>
                                <label>Time:</label>
                                <span class="calTime"></span>
                            </li>
                            <li>
                                <label>Agent:</label>
                                <span class="agentName"></span>
                            </li>
                            <li>
                                <label>Service:</label>
                                <span class="serv"></span>
                            </li>
                        </ul>

                        <h3>Customer Info</h3>
                        <ul>
                            <li>
                                <label>Name:</label>
                                <span id="firstName2"></span> <span id="lastName2"></span>
                            </li>
                            <li>
                                <label>Phone:</label>
                                <span id="phoneNumber"></span>
                            </li>
                            <li>
                                <label>Email:</label>
                                <span id="emailAdress"></span>
                            </li>

                        </ul>


                    </div>
                    <div class="btnHolders">
                        <div class="bbtn backBtn_4">
                            <p><i class="fal fa-long-arrow-left"></i> Back </p>
                        </div>
                        <div class="nbtn nextBtn_3">
                            <p> Submit <i class="fal fa-long-arrow-right"></i></p>
                        </div>
                    </div>
                </div>


            </div><!-- // Col // -->

            <div class="col-md-4 resultMain" style="background: white;">
                <div class="fResult">
                    <ul>
                        <li>
                            <p>Service<br> <span class="serv"></span></p>
                        </li>
                        <li>
                            <p>Agent <br><span class="agentName"></span></p>
                        </li>
                        <li>
                            <p>Date <br><span class="calDate"></span></p>
                        </li>
                        <li>
                            <p>Time <br><span class="calTime"></span></p>
                        </li>
                        <li>
                            <p>Customer <br><span id="firstName"></span> <span id="lastName"></span></p>
                        </li>
                        <li>
                            <p>Total Price <br><span class="price"></span></p>
                        </li>
                    </ul>
                </div>
            </div><!-- // Col // -->


        </div>
    </div>


</section>

<? $this->load->view('widgets/_clients'); ?>



<script type="text/javascript">
    function getName(id) {
        document.getElementById('firstName').innerHTML = id;
        document.getElementById('firstName2').innerHTML = id;
    }

    function getLastName(id) {
        document.getElementById('lastName').innerHTML = id;
        document.getElementById('lastName2').innerHTML = id;
    }

    function getPhone(id) {
        document.getElementById('phoneNumber').innerHTML = id;
    }

    function getEmail(id) {
        document.getElementById('emailAdress').innerHTML = id;
    }

    function get_expert(category_id) {
        var my_url = base_url + "about_us/get_experts_by_category_id/" + category_id
        // console.log('url', my_url)
        $.ajax({
            url: my_url,
            method: 'get',
            success: function(res) {
                var experts = '';
                res = $.parseJSON(res);
                for (var i = 0; i < res.length; i++) {
                    // console.log('res', res[i])
                    experts = experts + get_expert_html(res[i]);
                }
                // console.log('res', experts)
                // console.log('res', experts)
                $('.expertlist').html(experts);
            }
        })
    }


    function show_detail(expert_name, category_name) {
        // expert = JSON.parse(expert);
        // console.log('expert',expert)
        $('h4:nth-child(1)').hide();
        $('h4:nth-child(2)').hide();
        $('h4:nth-child(3)').show();

        $('.fResult ul li:nth-child(2)').show();
        $('.fResult ul li:nth-child(6)').show();

        $('#experts').slideUp();
        $('#selectT_D').slideDown();

        $('.navigator ul li:nth-child(3)').addClass('active');

        var target_price = $(this).attr('data-price');
        $('span.price').text(target_price);

        $('.expertTopic ul li:nth-child(2)').hide();
        $('.expertTopic ul li:nth-child(3)').show();

        $('.serv').html(category_name);
        $('.agentName').html(expert_name);



    };

    var path = '<?= g('db.admin.bucketimg') ?>'
    //category_name
    function get_expert_html(expert) {
        var s_e = JSON.stringify(expert);
        console.log('s_e', s_e);
        return `
        <li class="selectTopicBtn" data-price="AED 300" onclick="show_detail('` + expert.expert_name + `','` + expert.category_name + `')" id=` +
            expert.expert_id + `>
            <img src="` + path + expert.expert_image + `" alt="">
            <span>` + expert.expert_name + `</span>
        </li>
        `;
    }
</script>


<script src="<?= l('') ?>assets/front_assets/js/account/slick.js"></script>
<script src="<?= l('') ?>assets/front_assets/js/account/custombooking.js"></script>