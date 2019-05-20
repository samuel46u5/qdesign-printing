<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">

            <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                <div class="wd-100p">
                    <h3 class="tx-color-01 mg-b-5 text-center">Sign In</h3>
                    <!-- <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p> -->
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?= base_url('auth') ?>">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                            <!-- <input type="email" class="form-control" placeholder="yourname@yourmail.com"> -->
                        </div>
                        <div class="form-group">
                            <!-- <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">Password</label>
                                <a href="" class="tx-13">Forgot password?</a>
                            </div>
                            <input type="password" class="form-control" placeholder="Enter your password"> -->
                            <label>Password</label>
                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button class="btn btn-brand-02 btn-block">Sign In</button>
                        <div class="divider-text">or</div>
                        <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="<?= base_url('auth/registration'); ?>"> Create an Account</a></div>
                        <div class="tx-13 mg-t-20 tx-center">Go to <a href="<?= base_url(''); ?>"> <i data-feather="home"></i></a></div>
                    </form>
                </div>
            </div><!-- sign-wrapper -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->