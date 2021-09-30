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
                  <form action="<?= base_url('/pembimbing/ubah'); ?>" method="post">
                    <input type="hidden" name="id_pembimbing" value="<?= $pembimbing['id_pembimbing']; ?>" />
                    <div class="username item-list">
                      <label for="username">Username</label>
                      <br />
                      <input
                        type="text"
                        class="form-control"
                        id="username"
                        name="username"
                        placeholder="08zakki"
                        autocomplete="off"
                        value="<?= $pembimbing['username']; ?>"
                      />
                    </div>
                    <div class="email item-list">
                      <label for="email">Email</label>
                      <br />
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="exmaple@contoh.com"
                        autocomplete="off"
                        value="<?= $pembimbing['email']; ?>"
                        disabled
                      />
                    </div>
                    <div class="phone item-list">
                      <label for="phone">No. Hp</label>
                      <br />
                      <input
                        type="number"
                        class="form-control"
                        id="phone"
                        name="phone"
                        placeholder="08115430120"
                        autocomplete="off"
                        value="<?= $pembimbing['no_hp']; ?>"
                      />
                    </div>
                    <div class="password item-list">
                      <a href="../reset.html">Reset Password</a>
                    </div>
                </div>
                <div class="col-md-6 info">
                  <h4>Informasi Perusahaan</h4>
                  <div class="orpt item-list">
                    <label for="orpt">Asal Perusahaan</label>
                    <br />
                    <select name="orpt" class="form-control" id="orpt" disabled>
                      <?php foreach($perusahaan as $asl) : ?>
                        <?php if($asl['id'] == $pembimbing['pid']) : ?>
                          <option value="<?= $asl['id']; ?>" selected><?= $asl['nama_pt']; ?></option>
                            <?php else : ?>
                          <option value="<?= $asl['id']; ?>"><?= $asl['nama_pt']; ?></option>
                          <?php endif; ?>
                      <?php endforeach; ?>>
                    </select>
                  </div>
                  <div class="jabatan item-list">
                    <label for="jabatan">Jabatan</label>
                    <br />
                    <input
                      type="text"
                      class="form-control"
                      id="jabatan"
                      name="jabatan"
                      placeholder="Pembimbing"
                      autocomplete="off"
                      value="<?= $pembimbing['jabatan']; ?>"
                    />
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-sm-6 info">
                    <h4>Biodata Pembimbing</h4>
                    <div class="name item-list">
                      <label for="tname">Nama</label>
                      <br />
                      <input
                        type="text"
                        class="form-control"
                        id="tname"
                        name="tname"
                        placeholder="Aldino"
                        autocomplete="off"
                        value="<?= $pembimbing['full_name']; ?>"
                      />
                    </div>
                    <div class="nis item-list">
                      <label for="tnis">NIP</label>
                      <br />
                      <input
                        type="number"
                        class="form-control"
                        id="tnis"
                        name="tnis"
                        placeholder="400082737"
                        autocomplete="off"
                        value="<?= $pembimbing['no_induk']; ?>"
                      />
                    </div>
                    <div class="agama item-list">
                      <label for="treligion">Agama</label>
                      <br />
                      <input
                        type="text"
                        class="form-control"
                        id="treligion"
                        name="treligion"
                        placeholder="Islam"
                        autocomplete="off"
                        value="<?= $pembimbing['agama']; ?>"
                      />
                    </div>
                    <div class="gender item-list">
                      <label for="tgender">Jenis Kelamin</label>
                      <br />
                      <select name="tgender" class="form-control" id="tgender">
                          <?php foreach($gender as $gdr): ?>
                            <?php if($gdr == $pembimbing['jenis_kelamin']) : ?>
                            <option value="<?= $gdr; ?>" selected><?= $gdr; ?></option>
                            <?php else : ?>
                              <option value="<?= $gdr; ?>" ><?= $gdr; ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </select> 
                    </div>
                    <div class="alamat item-list">
                      <label for="taddress">Alamat</label>
                      <br />
                      <textarea
                        name="taddress"
                        class="form-control"
                        id="taddress"
                        cols="24"
                        rows="5"
                        placeholder="Jln. S. Parman RT.45 No. 23"
                      ><?= $pembimbing['alamat']; ?></textarea>
                    </div>

                    <h5>Kelahiran</h5>
                    <div class="tempat item-list">
                      <label for="tbirthplace">Tempat</label>
                      <br />
                      <input
                        type="text"
                        class="form-control"
                        id="tbirthplace"
                        name="tbirthplace"
                        placeholder="Balikpapan"
                        autocomplete="off"
                        value="<?= $pembimbing['tempat']; ?>"
                      />
                    </div>
                    <div class="tanggal item-list">
                      <label for="tbirthday">Tanggal</label>
                      <br />
                      <input
                        type="date"
                        class="form-control"
                        id="tbirthday"
                        name="tbirthday"
                        value="<?= $pembimbing['waktu']; ?>"
                      />
                    </div>
                    <div class="pengaturan">
                      <button class="button btn" type="submit">Save</button>
                      <a href="laporan.html">
                        <button class="button btn btn-danger" type="button">
                          Back
                        </button>
                      </a>
                    </div>
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