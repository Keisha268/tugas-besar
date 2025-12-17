<?= $this->extend('layout/admin/layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-8">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit User</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('users/' . $user->username . '/update') ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" value="<?= $user->username ?>" disabled>
                            <input type="hidden" name="username" value="<?= $user->username ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password (Kosongkan jika tidak ingin mengubah)</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $user->name ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role">
                                <option value="staff" <?= ($user->role == 'staff') ? 'selected' : '' ?>>Staff</option>
                                <option value="manajer" <?= ($user->role == 'manajer') ? 'selected' : '' ?>>Manajer</option>
                                <option value="admin" <?= ($user->role == 'admin') ? 'selected' : '' ?>>Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                        <a href="<?= base_url('users') ?>" class="btn btn-secondary mt-3">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
