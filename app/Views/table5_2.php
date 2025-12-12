<?= $this->extend('layout/admin/layout') ?>

<?= $this->section('content') ?>

<main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-sm text-white active">Prasarana</li>
          </ol>
          <h3 class="font-weight-bolder text-white mb-0">Prasarana</h3>
        </nav>

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <form id="searchForm">
                <span class="input-group-text text-body">
                  <input type="search" id="searchInput" name="search" placeholder="Cari nama prasarana.." />
                  <i class="fas fa-search"></i>
                </span>
              </form>
            </div>
          </div>
        </div>

      </div>
    </nav>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-0">
            <div class="card-header pb-0">
              <h5>Data Prasarana</h5>

              <button type="button" class="btn bg-gradient-success mb-3" data-bs-toggle="modal" data-bs-target="#modalCreate">
                <i class="fas fa-plus"></i> Tambah Data
              </button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-secondary text-xxs font-weight-bolder">No</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder">Nama Prasarana</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder">Daya Tampung</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder">Luas Ruang</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder">Status Kepemilikan</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder">Status Lisensi</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder">Perangkat</th>
                      <!-- <th class="text-center text-secondary text-xxs font-weight-bolder">Kolom7</th> -->
                      <th class="text-center text-secondary text-xxs font-weight-bolder">Link Bukti</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $no=1; foreach($prasarana as $p): ?>
                    <tr>
                      <td class="text-center"><p class="mb-0 text-sm"><?= $no ?></p></td>
                      <td class="text-center"><p class="mb-0 text-sm"><?= $p['nama_prasarana'] ?></p></td>
                      <td class="text-center"><p class="mb-0 text-sm"><?= $p['daya_tampung'] ?></p></td>
                      <td class="text-center"><p class="mb-0 text-sm"><?= $p['luas_ruang'] ?></p></td>
                      <td class="text-center"><p class="mb-0 text-sm"><?= $p['status_kepemilikan'] ?></p></td>
                      <td class="text-center"><p class="mb-0 text-sm"><?= $p['status_lisensi'] ?></p></td>
                      <td class="text-center"><p class="mb-0 text-sm"><?= $p['perangkat'] ?></p></td>
                      <!-- <td class="text-center">
                        <p class="mb-0 text-sm"><?= $p['kolom7'] ?? '-' ?></p>
                      </td> -->
                      <td class="text-center">
                        <a href="<?= $p['link_bukti'] ?>" target="_blank" class="text-primary text-sm">
                          Lihat
                        </a>
                      </td>

                      <td class="text-center">
                        <a href="<?= base_url('table/table5_2/'.$p['id'].'/edit') ?>" class="btn bg-gradient-info btn-sm">Edit</a> 
                        
                        <a href="javascript:;" data-href="<?= base_url('table/table5_2/'.$p['id'].'/delete') ?>"
                           onclick="confirmToDelete(this)"
                           class="btn btn-outline-danger btn-sm"
                           data-bs-toggle="modal"
                           data-bs-target="#confirm-dialog">
                          Hapus
                        </a>
                      </td>
                    </tr>
                    <?php $no++; endforeach ?>
                  </tbody>
                </table>

                <div id="resultMessage" class="text-center mt-2"></div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</main>

<!-- Modal Delete -->
<div class="modal fade" id="confirm-dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" onclick="deleteData()">Hapus</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="modalCreate" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h3 class="font-weight-bolder text-primary text-gradient">Tambah Prasarana</h3>
            <p class="mb-0">Isi data prasarana</p>
          </div>

          <div class="card-body pb-3">
            <form action="<?= base_url('table/table5_2/new') ?>" method="post"> 

              <label>Nama Prasarana</label>
              <input type="text" class="form-control mb-3" name="nama_prasarana">

              <label>Daya Tampung</label>
              <input type="text" class="form-control mb-3" name="daya_tampung">

              <label>Luas Ruang</label>
              <input type="text" class="form-control mb-3" name="luas_ruang">

              <label>Status Kepemilikan</label>
              <select class="form-control mb-3" name="status_kepemilikan">
                  <option value="M">Milik Sendiri (M)</option>
                  <option value="W">Sewa/Kontrak/Kerjasama (W)</option>
              </select>

              <label>Status Lisensi</label>
              <select class="form-control mb-3" name="status_lisensi">
                  <option value="L">Lisensi (L)</option>
                  <option value="P">Paten (P)</option>
                  <option value="T">Tidak Berlisensi (T)</option>
              </select>

              <label>Perangkat</label>
              <input type="text" class="form-control mb-3" name="perangkat">

              <label>Link Bukti</label>
              <input type="text" class="form-control mb-3" name="link_bukti">

              <button type="submit" class="btn bg-gradient-primary w-100 mt-3">Tambah</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function confirmToDelete(element) {
    var deleteButton = document.querySelector('#confirm-dialog .btn-danger');
    deleteButton.setAttribute('data-href', element.getAttribute('data-href'));
  }

  function deleteData() {
    var deleteUrl = document.querySelector('#confirm-dialog .btn-danger').getAttribute('data-href');
    window.location.href = deleteUrl;
  }

  document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const resultMessage = document.getElementById("resultMessage");
    const tableBody = document.querySelector("table tbody");

    function filterRows() {
      const searchText = searchInput.value.toLowerCase();
      let found = 0;

      tableBody.querySelectorAll("tr").forEach(row => {
        // Nama prasarana is in the 2nd column (index 1)
        const nama = row.children[1].textContent.toLowerCase(); 

        if (nama.includes(searchText)) {
          row.style.display = "";
          found++;
        } else {
          row.style.display = "none";
        }
      });

      resultMessage.textContent = found === 0 ? "Data tidak ditemukan" : "";
    }

    if(searchInput) {
        searchInput.addEventListener("input", filterRows);
    }
  });
</script>

<?= $this->endSection() ?>