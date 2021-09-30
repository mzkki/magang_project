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
            <div class="header">
              <h2>Edit Akun</h2>
              <div class="profile">
                <img src="<?= base_url(); ?>/assets/img/bxs-user-circle.png" alt="Profile" />
              </div>
              <a href="">Ubah Profile</a>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 info">
                  <h4>Informasi Akun</h4>
                  <form action="<?= base_url('/pelajar/ubah'); ?>" method="post">
                    <input type="hidden" name="id_pelajar" value="<?= $pelajar['id_pelajar']; ?>"/>
                    <div class="username item-list">
                      <label for="pusername">Username</label>
                      <br />
                      <input
                        type="text"
                        class="form-control"
                        id="pusername"
                        name="pusername"
                        placeholder="08zakki"
                        autocomplete="off"
                        value="<?= $pelajar['username']; ?>"
                      />
                    </div>
                    <div class="email item-list">
                      <label for="pemail">Email</label>
                      <br />
                      <input
                        type="email"
                        class="form-control"
                        id="pemail"
                        name="pemail"
                        placeholder="exmaple@contoh.com"
                        autocomplete="off"
                        value="<?= $pelajar['email']; ?>"
                        disabled
                      />
                    </div>
                    <div class="pphone item-list">
                      <label for="pphone">No. Hp</label>
                      <br />
                      <input
                        type="number"
                        class="form-control"
                        id="pphone"
                        name="pphone"
                        placeholder="08115430120"
                        autocomplete="off"
                        value="<?= $pelajar['hp']; ?>"
                      />
                    </div>
                    <div class="password item-list">
                      <a href="../reset.html">Reset Password</a>
                    </div>
                </div>
                <div class="col-md-6 info">
                  <h4>Informasi Sekolah</h4>
                  <div class="orschool item-list">
                    <label for="orschool">Asal Sekolah</label>
                    <br />
                    <select name="orschool" class="form-control" id="orschool" disabled>
                      <?php foreach($sekolah as $sch): ?>
                        <?php if($sch['id'] == $pelajar['scid']) : ?>
                        <option value="<?= $sch['id']; ?>" selected><?= $sch['nama_sekolah']; ?></option>
                        <?php else : ?>
                          <option value="<?= $sch['id']; ?>" ><?= $sch['nama_sekolah']; ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select> 
                  </div>
                  <div class="kelas item-list">
                    <label for="kelas">Kelas</label>
                    <br />
                    <select name="kelas" class="form-control" id="kelas">
                      <?php foreach($kelas as $kls): ?>
                        <?php if($kls == $pelajar['kelas']) : ?>
                        <option value="<?= $kls; ?>" selected><?= $kls; ?></option>
                        <?php else : ?>
                          <option value="<?= $kls; ?>" ><?= $kls; ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select> 
                  </div>
                  <div class="jurusan item-list">
                    <label for="jurusan">Jurusan</label>
                    <br />
                    <input
                      type="text"
                      class="form-control"
                      id="jurusan"
                      name="jurusan"
                      placeholder="Rekayasa Perangkat Lunak (RPL)"
                      autocomplete="off"
                      value="<?= $pelajar['jurusan']; ?>"
                    />
                  </div>
                </div>
              </div>
                  <div class="row">
                  <div class="col-md-6 info">
                    <h4>Biodata Pelajar</h4>
                    <div class="name item-list">
                      <label for="pname">Nama</label>
                      <br />
                      <input
                        type="text"
                        class="form-control"
                        id="pname"
                        name="pname"
                        placeholder="Haris Muzakki"
                        autocomplete="off"
                        value="<?= $pelajar['full_name']; ?>"
                      />
                    </div>
                    <div class="nis item-list">
                      <label for="pnis">NIS</label>
                      <br />
                      <input
                        type="number"
                        class="form-control"
                        id="pnis"
                        name="pnis"
                        placeholder="400082737"
                        autocomplete="off"
                        value="<?= $pelajar['nis']; ?>"
                      />
                    </div>
                    <div class="agama item-list">
                      <label for="preligion">Agama</label>
                      <br />
                      <input
                        type="text"
                        class="form-control"
                        id="preligion"
                        name="preligion"
                        placeholder="Islam"
                        autocomplete="off"
                        value="<?= $pelajar['agama']; ?>"
                      />
                    </div>
                    <div class="gender item-list">
                      <label for="pgender">Jenis Kelamin</label>
                      <br />
                      <select name="pgender" class="form-control" id="pgender">
                        <?php foreach($gender as $gdr): ?>
                          <?php if($gdr == $pelajar['jenis_kelamin']) : ?>
                          <option value="<?= $gdr; ?>" selected><?= $gdr; ?></option>
                          <?php else : ?>
                            <option value="<?= $gdr; ?>" ><?= $gdr; ?></option>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </select> 
                    </div>
                    <div class="alamat item-list">
                      <label for="paddress">Alamat</label>
                      <br />
                      <textarea
                        name="paddress"
                        class="form-control"
                        id="paddress"
                        cols="24"
                        rows="5"
                        placeholder="Jln. S. Parman RT.45 No. 23"
                      ><?= $pelajar['palamat']; ?></textarea>
                    </div>

                    <h5>Kelahiran</h5>
                    <div class="tempat item-list">
                      <label for="pbirthplace">Tempat</label>
                      <br />
                      <input
                        type="text"
                        class="form-control"
                        id="pbirthplace"
                        name="pbirthplace"
                        placeholder="Balikpapan"
                        autocomplete="off"
                        value="<?= $pelajar['tempat']; ?>"
                      />
                    </div>
                    <div class="tanggal item-list">
                      <label for="pbirthday">Tanggal</label>
                      <br />
                      <input
                        type="date"
                        class="form-control"
                        id="pbirthday"
                        name="pbirthday"
                        value="<?= $pelajar['waktu']; ?>"
                      />
                    </div>
                  </div>
                  <div class="col-md-6 info">
                    <div class="perusahaan mt-3">
                      <h4>Informasi Perusahaan</h4>
                      <div class="item-list">
                        <label for="perusahaan">Nama Perusahaan</label>
                        <br />
                        <select name="perusahaan" class="form-control" id="perusahaan" disabled>
                          <?php foreach($perusahaan as $pt): ?>
                            <?php if($pt['id'] == $pelajar['pid']) : ?>
                            <option value="<?= $pt['id']; ?>" selected><?= $pt['nama_pt']; ?></option>
                            <?php else : ?>
                              <option value="<?= $pt['id']; ?>" ><?= $pt['nama_pt']; ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </select> 
                      </div>
                      <div class="item-list">
                        <label for="addressperusahaan">Alamat</label>
                        <br />
                        <textarea
                          name="addressperusahaan"
                          id="addressperusahaan"
                          cols="24"
                          rows="5"
                          class="form-control"
                          placeholder="MT. Haryono Komp. Pertokoan Balikpapan Baru STO 3"
                          disabled
                        ><?= $pelajar['alamat']; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="pengaturan">
                    <button class="button btn" type="submit">Save</button>
                    <a href="laporan.html">
                      <button class="button btn btn-danger" type="button">
                        Back
                      </button>
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
</div>
<?= $this->endSection(); ?>