<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">User</h2>
    </div>
</header>
<!-- Dashboard Counts Section-->
<section>
    <div class="container-fluid">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" style="width:193px;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['name']; ?></h5>
                        <p class="card-text"><?= $user['email']; ?></p>
                        <p class="card-text"><small class="text-muted">Joined <?= date('d-M-Y', $user['date_created']); ?></small></p>
                        <a href="<?= base_url('user/edit'); ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>