<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-smile"></i> <?= $title; ?></h1>

    <a href="" class="btn btn-dark mb-3" data-toggle="modal" data-target="#newUserModal">
        <i class=""></i> New User</a>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">role id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($admin as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $a['id']; ?></td>
                            <td><?= $a['nama_user']; ?></td>
                            <td><?= $a['role_id']; ?></td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="newUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newUserModalLabel">New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/welcome'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="user" name="user" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="role id" name="role id" placeholder="Role Id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-fw fa-exclamation"></i>Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-check"></i>Add</button>
                </div>
            </form>
        </div>
    </div>
</div>