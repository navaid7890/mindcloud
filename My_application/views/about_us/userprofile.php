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
</style>
<?=debug($profile)?>

<!-- $profile['user_firstname'] -->
<section class="myjoin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="ExpertImg">
                                    <img src="http://localhost/cloud/assets/uploads/user/profile.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <div class="ExpertTextArea">
                                    <h1>Genny Ghanimeh</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row tabsArea">
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" class="topTabs" href="#Profile">Profile</a></li>
                                    <li><a data-toggle="tab" class="topTabs" href="#menu1">Timeline</a></li>
                                    <li><a data-toggle="tab" class="topTabs" href="#menu2">Connections</a></li>
                                    <li><a data-toggle="tab" href="#menu3">Group</a></li>
                                </ul>
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
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>First Name</h3>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3><?=$profile['user_firstname']?></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Last Name</h3>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3> Ghanimeh</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>User Name</h3>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Genny </h3>
                                </div>
                            </div>
                            <h2>Education</h2>
                            <hr />
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>School</h3>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>School </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Degree</h3>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3> Degree</h3>
                                </div>
                            </div>

                            <h2>Experience</h2>
                            <hr />
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Title</h3>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>School </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Company</h3>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3> Company</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3>Description</h3>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <h3> Description</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade card">
                        <div class="card-header">View Time Line</div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade card">
                        <div class="card-header">View Connections</div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade card">
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