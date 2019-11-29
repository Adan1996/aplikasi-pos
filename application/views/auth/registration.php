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
                        <p>access your assets everywhere</p>
                    </div>
                </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
                <div class="form d-flex align-items-center">
                    <div class="content">
                        <form class="form-validate" method="post">
                            <div class="form-group">
                                <input id="name" type="text" name="name" class="input-material" value="<?= set_value('name'); ?>">
                                <label for="name" class="label-material">Full Name</label>
                                <?= form_error('name', '<small id="emailHelp" class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input id="email" type="text" name="email" class="input-material" value="<?= set_value('email'); ?>">
                                <label for="email" class="label-material">Email Address </label>
                                <?= form_error('email', '<small id="emailHelp" class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input id="password1" type="password" name="password1" class="input-material" value="<?= set_value('name'); ?>">
                                <label for="password1" class="label-material">Password </label>
                                <?= form_error('password1', '<small id="emailHelp" class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input id="password2" type="password" name="password2" class="input-material">
                                <label for="password2" class="label-material">Confirm Password </label>
                                <?= form_error('password2', '<small id="emailHelp" class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <button id="regidter" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                        <small>Already have an account? </small><a href="<?= base_url('auth'); ?>" class="signup">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyrights text-center">
    <p>Design by <a href="https://bootstrapious.com" class="external">Adan's Corp</a>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
    </p>
</div>