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
              <h5 class="mt-4">Pilih role kamu !</h5>
            </div>
            <div class="select">
                <form class="form-box px-3" action="<?= base_url(); ?>/user/role" method="get" required>
                    <div class="row">
                        <div class="form-check col mb-5">
                            <input type="radio" class="btn-check" name="role" id="guru" value="guru" autocomplete="off"> 
                            <label class="btn btn-outline-primary" for="guru">Guru</label>
                        </div>
                        <div class="form-check col mb-5">
                            <input type="radio" class="btn-check" name="role" id="pelajar" value="pelajar" autocomplete="off">
                            <label class="btn btn-outline-primary" for="pelajar">Pelajar</label>
                        </div>
                        <div class="form-check col mb-5">
                            <input type="radio" class="btn-check" name="role" id="pembimbing" value="pembimbing">
                            <label class="btn btn-outline-primary" for="pembimbing">Pembimbing</label>
                        </div>
                        <div class="mb-4 text-center">
                          <button type="submit" class="btn btn-block text-uppercase">
                            Pilih
                          </button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
</div>

<?= $this->endSection(); ?>