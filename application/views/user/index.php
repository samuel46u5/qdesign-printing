            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>User Profile</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>User Report <small>Activity report</small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                        <div class="profile_img">
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <img class="img-responsive avatar-view" src="<?= base_url('assets'); ?>/img/profile/<?= $user['image'] ?>" alt="Avatar" title="Change the avatar">
                                            </div>
                                        </div>
                                        <h3><?= $user['nama']; ?></h3>

                                        <ul class="list-unstyled user_data">
                                            <li><i class="fa fa-envelope user-profile-icon"></i>
                                                <?= $user['email']; ?>
                                            </li>

                                            <li>
                                                <i class="fa fa-calendar user-profile-icon"></i> Member since : <?= date('d F Y', $user['date_created']); ?>
                                            </li>

                                        </ul>

                                        <a class="btn btn-success" href="<?= base_url('user/edit'); ?>"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                        <br />


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /page content -->