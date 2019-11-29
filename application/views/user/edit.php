<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Edit</h2>
    </div>
</header>
<!-- Dashboard Counts Section-->
<section>
    <div class="container-fluid">
        <form action="">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Edit Data</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-sm-10">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="rounded" width="200px">
                    </div>
                    <div class="col-sm-10">
                        <div class="custom-file mt-2">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>