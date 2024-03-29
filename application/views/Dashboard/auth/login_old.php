<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        Qdesign
                        <br>
                        Digital Printing
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <?php if ($this->session->flashdata('message')) : ?>
                            <script>
                                swal.fire({
                                    position: 'top-end',
                                    title: "",
                                    text: "<?= $this->session->flashdata('message'); ?>",
                                        timer: 2000,
                                        showConfirmButton: false,
                                        type: 'success'
                                    });
                                </script>
                                    <?php endif; ?>



                        <div class="card-body">
                            <form method="POST" action="<?= base_url('auth') ?>" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" value="<?= set_value('email'); ?>" required autofocus>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <div class=" invalid-feedback">
                                        Isikan email anda
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="d-block">Password
                                        <div class="float-right">
                                            <a href="forgot.html">
                                                Lupa Password?
                                            </a>
                                        </div>
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <div class="invalid-feedback">
                                        silahkan masukkan password anda
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Ingat saya</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Tidak memiliki akun? <a href="<?= base_url(''); ?>auth/registration">Buat akun </a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Qdesign 2019
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>