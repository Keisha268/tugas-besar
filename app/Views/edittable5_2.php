<?= $this->extend('layout/admin/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">

            <div class="card shadow-lg border-0">
                <div class="card-body">

                    <h3 class="text-center text-primary mb-3">Edit Data Prasarana</h3>
                    <p class="text-center text-sm text-muted">Perbarui data prasarana di formulir berikut</p>

                    <form action="<?= base_url('table/table5_2/'.$prasarana['id'].'/update') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label class="form-label">Nama Prasarana</label>
                            <input type="text" class="form-control" name="nama_prasarana" 
                                value="<?= $prasarana['nama_prasarana'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Daya Tampung</label>
                            <input type="text" class="form-control" name="daya_tampung"
                                value="<?= $prasarana['daya_tampung'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Luas Ruang</label>
                            <input type="text" class="form-control" name="luas_ruang"
                                value="<?= $prasarana['luas_ruang'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status Kepemilikan</label>
                            <input type="text" class="form-control" name="status_kepemilikan"
                                value="<?= $prasarana['status_kepemilikan'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status Lisensi</label>
                            <input type="text" class="form-control" name="status_lisensi"
                                value="<?= $prasarana['status_lisensi'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Perangkat</label>
                            <input type="text" class="form-control" name="perangkat"
                                value="<?= $prasarana['perangkat'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kolom7</label>
                            <input type="text" class="form-control" name="kolom7"
                                value="<?= $prasarana['kolom7'] ?? '' ?>">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link Bukti</label>
                            <input type="text" class="form-control" name="link_bukti"
                                value="<?= $prasarana['link_bukti'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary w-100"
                            style="background: linear-gradient(90deg, #6a11cb, #2575fc); border:none;">
                            Simpan Perubahan
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
