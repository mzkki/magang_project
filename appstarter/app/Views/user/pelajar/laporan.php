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
            <div class="container-fluid">
              <div class="row">
                <div class="col-8 heading">
                  <h3>Laporan Magang</h3>
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
              <?php if($laporanku == null) :?>
                  <h6 class="text-center">Data laporan belum ada</h6>
                  <p class="text-center">Silahkan tambahkan laporan anda <a class="text-decoration-none" href="<?= base_url('pelajar/insert'); ?>">disini !</a></p>
                  <?php else : ?>
              <table
                style="width: 100%"
                class="table table-borderless table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Hari/Tanggal</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Addons</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($laporanku as $key=>$value) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['hari']; ?>, <?= date('d F Y', strtotime($value['tanggal'])); ?></td>
                    <td><?= $value['kegiatan']; ?></td>
                    <td><?= $value['keterangan']; ?></td>
                    <td>
                      <span class="badge <?= $value['approve_guru'] == 1 && $value['approve_pembimbing'] == 1 ? 'bg-success': 'bg-danger'; ?>"><?= $value['approve_guru'] == 1 && $value['approve_pembimbing'] == 1 ? 'Chekced' : 'Pending'; ?></span>
                    </td>
                    <td>
                      <a href="<?= base_url('detail/laporan'); ?>/<?= $value['id']; ?>">
                        <span class="badge bg-primary">Detail</span>
                      </a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              
              <?php endif; ?>
            </div>
          </main>
        </div>
      </div>
    </div>
</div>
<?= $this->endSection(); ?>