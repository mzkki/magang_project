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
                  <form action="" method="post">
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
                      />
                    </div>
                    <div class="password item-list">
                      <a href="../reset.html">Reset Password</a>
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