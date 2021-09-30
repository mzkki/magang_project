<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
    <div class="container">
      <div class="row px-3">
        <div class="col-lg-10 card flex-row mx-auto" style="width: 530px">
          <div class="card-body">
            <div class="title text-center">
              <img
                src="<?= base_url(); ?>/assets/img/bxs-user-circle.png"
                alt="Login"
                class="center-block"
              />
              <h5 class="mt-4">Login</h5>
            </div>
            <?= view('Myth\Auth\Views\_message_block') ?>

					  <form class="form-box px-3" action="<?= route_to('login') ?>" method="post">
						<?= csrf_field() ?>
            <?php if ($config->validFields === ['email']): ?>
              <div class="form-input mb-4">
                <span class="material-icons">person</span>
                <input
                  class="<?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                  type="text"
                  name="login"
                  placeholder="<?=lang('Auth.email')?>"
                  tabindex="10"
                  required
                  autocomplete="off"
                />
                <div class="invalid-feedback">
								  <?= session('errors.login') ?>
							  </div>
              </div>
<?php else: ?>
              <div class="form-input mb-4">
                <span class="material-icons">person</span>
                <input
                  class="<?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                  type="text"
                  name="login"
                  placeholder="<?=lang('Auth.emailOrUsername')?>"
                  tabindex="10"
                  required
                  autocomplete="off"
                />
                <div class="invalid-feedback">
								  <?= session('errors.login') ?>
							  </div>
              </div>
<?php endif; ?>

              <div class="form-input">
                <span class="material-icons">lock</span>
                <input
                  class="<?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                  type="password"
                  name="password"
                  placeholder="<?=lang('Auth.password')?>"
                  tabindex="10"
                  required
                />
                <div class="invalid-feedback">
                  <?= session('errors.password') ?>
                </div>
              </div>

<?php if ($config->allowRemembering): ?>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
                  <?=lang('Auth.rememberMe')?>
                </label>
              </div>
<?php endif; ?>

<?php if ($config->activeResetter): ?>
              <div class="d-flex flex-row-reverse mb-4">
                <a href="<?= route_to('forgot') ?>" class="forget-link text-form">
                  Reset Password
                </a>
              </div>
<?php endif; ?>
              <div class="mb-3 text-center">
                <button type="submit" class="btn btn-block text-uppercase">
                  Sign in
                </button>
              </div>
<?php if ($config->allowRegistration) : ?>
              <div class="text-center text-muted mb-2">
                Gapunya Akun ?
                <a href="<?= route_to('register') ?>" class="register-link">Daftar disini</a>
              </div>
<?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
<?= $this->endSection(); ?>
