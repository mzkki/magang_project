<?= $this->extend('user/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="wrapper">
    <div class="collapser">
            <?= $this->include('user/templates/topbar'); ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-2 left">
            <?= $this->include('user/templates/sidebar'); ?>
        </div>
        <div class="col-10" id="right">
          <main>
            <div class="container-fluid px-4">
              <div class="row">
                <div class="col-8 heading">
                  <h3>Data Guru</h3>
                </div>
                <div class="col-sm-4 search">
                  <form action="" method="post" class="form-group">
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search..."
                        aria-describedby="button-addon2"
                      />
                      <button
                        class="btn btn-outline-secondary"
                        type="submit"
                        aria-describedby="button-addon2"
                      >
                        <span class="material-icons">search</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <table
                style="width: 100%"
                class="table table-borderless table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Alamat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($datasekolah as $key => $value) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['id']; ?></td>
                    <td><?= $value['nama_sekolah']; ?></td>
                    <td><?= $value['kategori']; ?></td>
                    <td><?= $value['alamat']; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div>
    </div>
</div>
<?= $this->endSection(); ?>