<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        Qdesign
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Buat akun</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="<?= base_url('auth/registration'); ?>">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="nama">Nama</label>
                                        <input id="nama" type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" autofocus>
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                </div>

                                <div class=" form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password1" type="password" class="form-control" name="password1">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" name="password2">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" onclick="">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="d-block" href="forgot-password.html">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="d-block" href="<?= base_url(''); ?>auth">Sudah punya account? Login!</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>