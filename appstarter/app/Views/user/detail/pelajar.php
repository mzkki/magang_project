<?= $this->extend('user/templates/index'); ?>

<?= $this->section('page-content'); ?>
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
            <div class="header">
              <h2>Detail Pelajar</h2>
              <div class="profile">
                <img src="<?= base_url(); ?>/assets/img/bxs-user-circle.png" alt="Profile" />
              </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 info mb-5">
                        <h4>Informasi Akun</h4>
                        <div class="row value">
                            <label for="username" class="col-sm-4 col-form-label">Username </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="username" name="username" value="<?= $data_pelajar['username']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="email" class="col-sm-4 col-form-label">Email </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="email" name="email" value="<?= $data_pelajar['email']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="pphone" class="col-sm-4 col-form-label">No. Hp </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pphone" name="pphone" value="<?= $data_pelajar['no_hp']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 info mb-5">
                        <h4>Informasi Sekolah</h4>
                        <div class="row value">
                            <label for="orschool" class="col-sm-4 col-form-label">Asal Sekolah</label>
                            <div class="col-sm-8  item-value">
                                <input type="text" readonly class="form-control-plaintext" id="orschool" name="orschool" value="<?= $data_pelajar['nama_sekolah']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="kelas" class="col-sm-4 col-form-label">Kelas </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="kelas" name="kelas" value="<?= $data_pelajar['kelas']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="jurusan" class="col-sm-4 col-form-label">Jurusan </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="jurusan" name="jurusan" value="<?= $data_pelajar['jurusan']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 info">
                        <h4>Biodata Pelajar</h4>
                        <div class="row value">
                            <label for="pname" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pname" name="pname" value="<?= $data_pelajar['nama_pelajar']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="pgender" class="col-sm-4 col-form-label">Jenis Kelamin </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pgender" nasme="pgender" value="<?= $data_pelajar['jenis_kelamin']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="pnis" class="col-sm-4 col-form-label">NIS </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pnis" name="pnis" value="<?= $data_pelajar['nis']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="preligion" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="preligion" name="preligion" value="<?= $data_pelajar['agama']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="paddress" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8 item-value">
                                <textarea name="paddress" class="form-control-plaintext" readonly id="paddress" cols="24" rows="2"><?= $data_pelajar['alamat']; ?></textarea>
                            </div>
                        </div>
                        <h5>Kelahiran</h5>
                        <div class="row">
                            <label for="pbirthplace" class="col-sm-4 col-form-label">Tempat</label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pbirthplace" name="pbirthplace" value="<?= $data_pelajar['tempat']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="pbirthday" class="col-sm-4 col-form-label">Tanggal</label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pbirthday" name="pbirthday" value="<?= date("d Y F", strtotime($data_pelajar['waktu'])); ?>">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="pengaturan">
                  <a href="<?= in_groups('admin') ? base_url('admin/pelajar') : (in_groups('guru') ? base_url('guru/pelajar') : (in_groups('pembimbing') ? base_url('pembimbing/pelajar') : '' )); ?>">
                    <button class="button btn btn-danger" type="button">Back</button>
                  </a>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
<?= $this->endSection(); ?>