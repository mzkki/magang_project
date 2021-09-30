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
              <h5 class="mt-4">Sebentar lagi selesai nih !</h5>
            </div>
            <?php $action = $role == 'pelajar' ? '/user/pelajar' : ( $role == 'guru' ? '/user/guru' : ($role == 'pembimbing' ? '/user/pembimbing' : 'error')); ?>
            <form class="form-box px-3" action="<?= base_url(); echo $action;?>" method="post">
            <?= csrf_field() ?>
                <div class="form-floating form-role mb-2">
                    <input
                    type="number"
                    class="form-control"
                    id="floatingInput"
                    name="no_induk"
                    placeholder="no_induk"
                    tabindex="10"
                    required
                    value="<?= old('no_induk'); ?>"
                    autocomplete="off"
                    />
                    <label for="floatingInput">NIS/NIP</label>
                </div>
                <div class="form-floating form-role mb-2">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    name="fullname"
                    placeholder="fullname"
                    tabindex="10"
                    required
                    value="<?= old('fullname') ?>"
                    autocomplete="off"
                    />
                    <label for="floatingInput">Full Name</label>
                </div>
                <div class="form-floating form-role mb-2">
                    <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    name="agama"
                    placeholder="Agama"
                    tabindex="10"
                    required
                    value="<?= old('agama'); ?>"
                    autocomplete="off"
                    />
                    <label for="floatingInput">Agama</label>
                </div>
                <div class="row form-box kelahiran">
                    <div class="col lahir form-floating form-role mb-2">
                        <input
                        type="text"
                        class="form-control"
                        id="floatingInput"
                        name="tempatlahir"
                        placeholder="tempatlahir"
                        tabindex="10"
                        required
                        value="<?= old('tempatlahir'); ?>"
                        autocomplete="off"
                        />
                        <label for="floatingInput">Tempat Lahir</label>
                    </div>
                    <div class="col lahir form-floating form-role mb-2">
                        <input
                        type="date"
                        class="form-control"
                        id="floatingInput"
                        name="tanggallahir"
                        placeholder="tanggallahir"
                        tabindex="10"
                        required
                        value="<?= old('tanggallahir'); ?>"
                        autocomplete="off"
                        />
                        <label for="floatingInput">Tanggal Lahir</label>
                    </div>
                </div>
                <div class="form-floating form-role mb-2">
                    <input
                    type="number"
                    class="form-control"
                    id="floatingInput"
                    name="phone"
                    placeholder="phone"
                    tabindex="10"
                    required
                    value="<?= old('phone'); ?>"
                    autocomplete="off"
                    />
                    <label for="floatingInput">No. Hp</label>
                </div>
                <div class="form-floating form-role mb-2">
                    <select class="form-select" name="gender" id="floatingSelect">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <label for="floatingSelect">Jenis Kelamin</label>
                </div>
                <div class="mb-2">
                    <input
                    type="hidden"
                    name="role"
                    value="<?= $role; ?>"
                    />
                </div>
                <div class="form-floating form-role mb-2">
                    <textarea class="form-control" name="alamat" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Alamat</label>
                </div>
                <div class="mb-3 mt-4 text-center">
                    <button type="submit" class="btn btn-block text-uppercase">
                        Lanjutkan
                    </button>
                </div>
            </form>
          </div>
        </div>
      </div>
</div>

<?= $this->endSection(); ?>