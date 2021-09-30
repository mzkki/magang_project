<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

    <div class="container">
      <div class="row px-3">
        <div
          class="col-lg-10 col-xl-9 card flex-row mx-auto px-0"
          style="width: 530px"
        >
          <div class="card-body">
            <div class="title text-center">
              <h5 class="mt-4">Ayoo Dikit lagii!</h5>
            </div>
            <form class="form-box px-3" action="<?= base_url();?>/user/PelajarDone" method="post">
            <?= csrf_field() ?>
            <input type="hidden" value="<?= $pelajarid; ?>" name="pelajarid"/>
            <div class="form-floating form-role mb-2">
                <select class="form-select" name="kelas" id="floatingSelect">
                    <option selected>Pilih Kelas</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
                <label for="floatingSelect">Kelas</label>
            </div>
            <div class="form-floating form-role mb-2">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    name="jurusan"
                    placeholder="jurusan"
                    tabindex="10"
                    required
                    value="<?= old('jurusan') ?>"
                    autocomplete="off"
                    />
                    <label for="floatingInput">Jurusan</label>
                </div>
                <div class="form-floating form-role mb-2">
                    <select class="form-select" name="perusahaan" id="floatingSelect">
                        <option selected> Pilih Perusahaan</option>
                        <?php foreach($perusahaan as $pt) : ?>
                        <option value="<?= $pt['id']; ?>"><?= $pt['nama_pt']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="floatingSelect">Perusahaan</label>
                </div>
                <div class="form-floating form-role mb-2">
                    <select class="form-select" name="sekolah" id="floatingSelect">
                        <option selected>Pilih Sekolah</option>
                        <?php foreach($sekolah as $sch) :?>
                        <option value="<?= $sch['id']; ?>"><?= $sch['nama_sekolah']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="floatingSelect">Sekolah</label>
                </div>

                <div class="mb-3 mt-4 text-center">
                    <button type="submit" class="btn btn-block text-uppercase">
                    Sign Up
                    </button>
                </div>
            </form>
          </div>
        </div>
      </div>
</div>

<?= $this->endSection(); ?>
