<style>
    .card-body {
        padding: .75rem 1.25rem;
    }

    .tab-content {
        margin-top: 30px;
    }

    .tabsArea .nav-tabs {
        border: 0px;
    }

    .tabsArea .nav-tabs a {
        padding: 10px;
    }

    #Profile .card-body h3 {
        line-height: 23px;
        color: #908f8f;
    }

    div#Profile h2 {
        margin-top: 30px;
    }
    .ExpertTextArea h1{
        font-weight: 700;
        font-size: 22px;
    }
</style>

<!-- $profile['user_username'] -->
<section class="myjoin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="ExpertImg">
                                    <img src="<?= get_image($profile['ui_profile_image'], $profile['ui_profile_image_path']) ?>" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <div class="ExpertTextArea">
                                    <h1><?= $profile['user_firstname'] ?> <?= $profile['user_lastname'] ?></h1>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card-body">
                        <div class="row tabsArea">
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" class="topTabs" href="#Profile">Profile</a></li>
                                    <li><a data-toggle="tab" class="topTabs" href="#Timeline">Timeline</a></li>
                                    <li><a data-toggle="tab" class="topTabs" href="#Connections">Connections</a></li>
                                    <li><a data-toggle="tab" href="#Group">Group</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
        <div class="row ">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div id="Profile" class="tab-pane fade in active show card">
                        <div class="card-header">View Profile</div>
                        <div class="card-body">
                            <h2>Experience</h2>
                            <hr />
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Title</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3><?= $profile['ui_exp_title'] ?></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Company</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3><?= $profile['ui_exp_company'] ?></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Description</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3> <?= $profile['ui_exp_desc'] ?></h3>
                                </div>
                            </div>
                            <h2>Details</h2>
                            <hr />
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>First Name</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3><?= $profile['user_firstname'] ?></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Last Name</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3> <?= $profile['user_lastname'] ?></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>User Name</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3><?= $profile['user_username'] ?> </h3>
                                </div>
                            </div>
                            <h2>Education</h2>
                            <hr />
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>School</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3><?= $profile['ui_exp_school'] ?> </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Degree</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3> <?= $profile['ui_exp_degree'] ?></h3>
                                </div>
                            </div>
                            <!-- $profile['user_username'] -->

                        </div>
                    </div>
                    <!-- $profile['user_username'] -->
                    <div id="Timeline" class="tab-pane fade card">
                        <div class="card-header">View Time Line</div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div id="Connections" class="tab-pane fade card">
                        <div class="card-header">View Connections</div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div id="Group" class="tab-pane fade card">
                        <div class="card-header">View Groups</div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<? $this->load->view('widgets/_clients'); ?>