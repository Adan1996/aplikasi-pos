<div class="container d-flex align-items-center">
    <div class="form-holder has-shadow">
        <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
                <div class="info d-flex align-items-center">
                    <div class="content">
                        <div class="logo">
                            <h1>POS App</h1>
                        </div>
                        <p>control your assets everywhere</p>
                    </div>
                </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
                <div class="form d-flex align-items-center">
                    <div class="content">
                        <?= $this->session->flashdata('message'); ?>
                        <form method="post" class="form-validate">
                            <div class="form-group">
                                <input id="email" type="text" name="email" class="input-material" value="<?= set_value('email'); ?>">
                                <label for="email" class="label-material">Email</label>
                                <?= form_error('email', '<small id="emailHelp" class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password" class="input-material">
                                <label for="password" class="label-material">Password</label>
                                <?= form_error('password', '<small id="emailHelp" class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <button id="login" href="index.html" class="btn btn-primary" type="submit">Login</button>
                            <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                        </form>
                        <a href="#" class="forgot-pass">Forgot Password?</a>
                        <br>
                        <small>Do not have an account? </small><a href="<?= base_url('auth/registration'); ?>" class="signup">Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyrights text-center">
    <p>Design by <a href="<?= base_url(); ?>" class="external">Adan's Corp</a>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
    </p>
</div>