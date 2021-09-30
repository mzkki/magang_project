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
              <h5 class="mt-4">Daftar Akun</h5>
            </div>
            <?= view('Myth\Auth\Views\_message_block') ?>

            <form class="form-box px-3" action="<?= route_to('register') ?>" method="post">
            <?= csrf_field() ?>
              <div class="form-input mb-4">
                <span class="material-icons">email</span>
                <input
                  class="<?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                  type="email"
                  name="email"
                  placeholder="Email"
                  tabindex="10"
                  required
                  value="<?= old('email') ?>"
                  autocomplete="off"
                />
                <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
              </div>
              <div class="form-input mb-4">
                <span class="material-icons">person</span>
                <input
                  class="<?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"
                  type="text"
                  name="username"
                  placeholder="Username"
                  tabindex="10"
                  required
                  value="<?= old('username'); ?>"
                  autocomplete="off"
                />
              </div>
              <div class="row form-pass">
                <div class="col pass">
                  <span class="material-icons">lock</span>
                  <input
                    class="<?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                    type="password"
                    name="password"
                    placeholder="Password"
                    tabindex="10"
                    required
                    autocomplete="off"
                  />
                </div>
                <div class="col repass">
                  <input
                    class="<?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                    type="password"
                    name="pass_confirm"
                    placeholder="Re Enter Pass"
                    tabindex="10"
                    required
                    autocomplete="off"
                  />
                </div>
              </div>
              <div class="mb-3 mt-4 text-center">
                <button type="submit" class="btn btn-block text-uppercase">
                  Sign Up
                </button>
              </div>
              <div class="text-center text-muted mb-2">
                Sudah punya akun ?
                <a href="<?= route_to('login') ?>" class="register-link">Sign in !</a>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
<?= $this->endSection(); ?>