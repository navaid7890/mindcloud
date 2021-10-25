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
                                    <img src="https://mindcloud-bucket.s3.amazonaws.com/assets/images/<?=$profile['expert_image']?>" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <div class="ExpertTextArea">
                                    <h1><?= $profile['expert_name'] ?></h1>
                                    <br/>
                                    <h3 class="badge btn btn-danger">Expert</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row ">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div id="Profile" class="tab-pane fade in active show card">
                        <div class="card-header">View Profile</div>
                        <div class="card-body">
                        <h2>Details</h2>
                            <hr />
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3> Name</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3><?= $profile['expert_name'] ?></h3>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Surname</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3>Ghanimeh <?= $profile['user_lastname'] ?></h3>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Short Bio</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3> <?= html_entity_decode($profile['expert_desc']) ?></h3>
                                </div>
                            </div>
                            <h2>Experience</h2>
                            <hr />
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Experties</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3> <?= html_entity_decode($profile['expert_experties']) ?></h3>
                                </div>
                            </div>
                            
                            <h2>Education</h2>
                            <hr />
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>School</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3><?= html_entity_decode($profile['expert_school']) ?> </h3>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Degree</h3>
                                </div>
                                <div class="col-lg-9 col-md-8 col-6">
                                    <h3> <?= html_entity_decode($profile['expert_degree']) ?></h3>
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