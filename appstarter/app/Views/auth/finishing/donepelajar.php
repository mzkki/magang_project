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
            <form class="form-box px-3" action="<?= base_url();?>/user/PelajarDoneagain" method="post">
            <?= csrf_field() ?>
            <input type="hidden" value="<?= $pelajarid; ?>" name="pelajarid"/>
                <div class="form-floating form-role mb-2">
                    <select class="form-select" name="pembimbing" id="floatingSelect">
                        <option selected>Pilih Pembimbing</option>
                        <?php foreach($pembimbing as $pmb) : ?>
                        <option value="<?= $pmb['id']; ?>"><?= $pmb['full_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="floatingSelect">Pembimbing</label>
                </div>
                <div class="form-floating form-role mb-2">
                    <select class="form-select" name="guru" id="floatingSelect">
                        <option selected>Pilih Guru Pembimbing</option>
                        <?php foreach($guru as $tch) : ?>
                        <option value="<?= $tch['id']; ?>"><?= $tch['full_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="floatingSelect">Guru Pembimbing</label>
                </div>
                
                <div class="mb-3 mt-4 text-center">
                    <button type="submit" class="btn btn-block text-uppercase">
                    Confirm
                    </button>
                </div>
            </form>
          </div>
        </div>
      </div>
</div>

<?= $this->endSection(); ?>
