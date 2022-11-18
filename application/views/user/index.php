                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-user"></i> <?= $title; ?></h1>

                    <div class="card mb-3" style="max-width: 700px;">
                        <div class="row-g-0">
                            <div class="col-md-7">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-fw fa-user"></i> <?= $user['name']; ?></h5>
                                    <p class="card-text"><i class="fas fa-fw fa-at"></i> <?= $user['email']; ?></p>
                                    <p class="card-text"><i class="fas fa-fw fa-user-tie"></i> <small class="text-muted">anggota sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->