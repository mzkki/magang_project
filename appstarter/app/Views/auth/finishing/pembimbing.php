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
            <form class="form-box px-3" action="<?= base_url();?>/user/PembimbingDone" method="post">
            <?= csrf_field() ?>
               <input type="hidden" name="pembimbingid" value="<?= $pembimbingid; ?>" />
                <div class="form-floating form-role mb-2">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    name="jabatan"
                    placeholder="jabatan"
                    tabindex="10"
                    required
                    value="<?= old('jabatan') ?>"
                    autocomplete="off"
                    />
                    <label for="floatingInput">Jabatan</label>
                </div>
            
                <div class="form-floating form-role mb-2">
                    <select class="form-select" name="perusahaan" id="floatingSelect">
                        <option selected>Pilih Perusahaan</option>
                        <?php foreach($perusahaan as $pt) :?>
                        <option value="<?= $pt['id']; ?>"><?= $pt['nama_pt']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="floatingSelect">Perusahaan</label>
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
