<?php

use App\Controllers\Admin;
?>
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
              <h2>Detail Laporan</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 info mb-5">
                        <h4>Informasi Pelajar</h4>
                        <div class="row value">
                            <label for="pname" class="col-sm-4 col-form-label">Nama Pelajar </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pname" name="pname" placeholder="<?= $laporans['nama_pelajar']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="pnis" class="col-sm-4 col-form-label">NIS </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pnis" name="pnis" placeholder="<?= $laporans['nis']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="pgender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pgender" name="pgender" placeholder="<?= $laporans['jenis_kelamin']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="pphone" class="col-sm-4 col-form-label">No. Hp</label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pphone" name="pphone" placeholder="<?= $laporans['no_hp']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 info mb-5">
                        <h4>Informasi Magang</h4>
                        <div class="row value">
                            <label for="perusahaan" class="col-sm-4 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-8  item-value">
                                <input type="text" readonly class="form-control-plaintext" id="perusahaan" name="perusahaan" placeholder="<?= $laporans['nama_pt']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="pembimbing" class="col-sm-4 col-form-label">Pembimbing </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="pembimbing" name="pembimbing" placeholder="<?= $laporans['nama_pembimbing']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="orschool" class="col-sm-4 col-form-label">Nama Sekolah </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="orschool" name="orschool" placeholder="<?= $laporans['nama_sekolah']; ?>">
                            </div>
                        </div>
                        <div class="row value">
                            <label for="tpembimbing" class="col-sm-4 col-form-label">Guru Pembimbing </label>
                            <div class="col-sm-8 item-value">
                                <input type="text" readonly class="form-control-plaintext" id="tpembimbing" name="tpembimbing" placeholder="<?= $laporans['nama_guru']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                
                <form action="<?= in_groups('pembimbing') ? base_url('detail/pembimbing') : (in_groups('guru') ? base_url('detail/guru') : ''); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6 info">
                            <h4>Informasi Laporan</h4>
                            <div class="row value">
                                <input type="hidden" name="id_laporan" value="<?= $laporans['id']; ?>" >
                                <label for="reporttime" class="col-sm-4 col-form-label">Hari/Tanggal</label>
                                <div class="col-sm-8 item-value">
                                    <input type="text" readonly class="form-control-plaintext" id="reporttime" name="reporttime" placeholder="<?= $laporans['hari']; ?>, <?= date('d F Y', strtotime($laporans['tanggal'])); ?>">
                                </div>
                            </div>
                            <div class="row value">
                                <label for="kegiatan" class="col-sm-4 col-form-label">Kegiatan </label>
                                <div class="col-sm-8 item-value">
                                    <input type="text" readonly class="form-control-plaintext" id="kegiatan" name="kegiatan" placeholder="<?= $laporans['kegiatan']; ?>">
                                </div>
                            </div>
                            <div class="row value">
                                <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                                <div class="col-sm-8 item-value">
                                    <input type="text" readonly class="form-control-plaintext" id="keterangan" name="keterangan" placeholder="<?= $laporans['keterangan']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-8 item-value">
                                    <div class="form-check">
                                        <input type="checkbox"
                                        value="1"
                                        id="gurupembimbing" class="form-check-input
                                        "name="gurupembimbing" <?= $laporans['status_guru'] == 1 ? 'checked' : ''; ?> <?= in_groups('guru') ? '' : 'disabled'; ?>>
                                        <label for="gurupembimbing"class="form-check-label">Guru Pembimbing</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox"
                                        value="1"
                                        id="pembimbing" class="form-check-input"
                                        name="pembimbing" <?= $laporans['status_pembimbing'] == 1 ? 'checked' : ''; ?> <?= in_groups('pembimbing') ? '' : 'disabled' ; ?>>
                                        <label for="pembimbing"class="form-check-label">Pembimbing</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <div class="pengaturan">
                                <?php if(in_groups('guru') || in_groups('admin') || in_groups('pembimbing')): ?>
                                    <button class="button btn" type="submit"> Save
                                    </button>
                                <?php endif; ?>
                                <a href="<?= in_groups('pembimbing') ? base_url('pembimbing/laporan') : (in_groups('guru') ? base_url('guru/laporan') : (in_groups('pelajar') ? base_url('pelajar/laporan') : (in_groups('admin') ? base_url('admin/laporan') : '' )));  ?>"><button class="button btn btn-warning" type="button">Back</button></a>
                            </div>
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