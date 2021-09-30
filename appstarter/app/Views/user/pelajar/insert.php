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
            <div class="header mb-5">
              <h2>Tambah data laporan magang</h2>
            </div>
            <div class="container-fluid">
              <form action="<?= base_url('/pelajar/AttemptInsert'); ?>" method="post">
                <div class="row">
                  <div class="col-md-6 info">
                    <h4>Informasi Laporan</h4>
                    <input type="hidden" value="<?= $id_pelajar['id_pelajar']; ?>" name="id_pelajar" />
                    <div class="item-list">
                      <label for="hari">Hari</label>
                      <br />
                      <select name="hari" class="form-control" id="hari">
                        <option selected>Pilih Hari </option>
                      <?php foreach($hari as $day) : ?>
                          <option value="<?= $day; ?>"><?= $day; ?></option>
                      <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="item-list">
                      <label for="tanggal">Tanggal</label>
                      <br />
                      <input
                        type="date"
                        class="form-control"
                        id="tanggal"
                        name="tanggal"
                      />
                    </div>
                    <div class="item-list">
                      <label for="kegiatan">Kegiatan</label>
                      <br />
                      <textarea
                        name="kegiatan"
                        id="kegiatan"
                        cols="24"
                        rows="5"
                        class="form-control"
                        placeholder="Ketikkan Kegiatan kamu hari ini !"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-md-6 info">
                    <h4>Kehadiran</h4>
                    <div class="item-list">
                      <label for="jam_masuk">Jam Masuk</label>
                      <br />
                      <input
                        type="time"
                        class="form-control"
                        id="jam_masuk"
                        name="jam_masuk"
                      />
                    </div>
                    <div class="item-list">
                      <label for="jam_keluar">Jam Pulang</label>
                      <br />
                      <input
                        type="time"
                        class="form-control"
                        id="jam_keluar"
                        name="jam_keluar"
                      />
                    </div>
                    <div class="item-list">
                      <label for="keterangan">Keterangan</label>
                      <br />
                      <select name="keterangan" class="form-control" id="keterangan">
                        <option selected>Pilih Keterangan </option>
                      <?php foreach($keterangan as $ket) : ?>
                          <option value="<?= $ket; ?>"><?= $ket; ?></option>
                      <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="submit mt-5">
                      <button class="button btn" type="submit">Save</button>
                      <button class="button btn btn-warning" type="reset">
                        Reset
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </main>
        </div>
      </div>
    </div>
</div>
<?= $this->endSection(); ?>