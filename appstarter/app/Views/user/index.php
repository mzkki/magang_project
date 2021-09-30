<?= $this->extend('user/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="wrapper">
    <div class="collapser">
      <?= $this->include('user/templates/topbar'); ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-10" id="right">
          <main>
              <h2>Welcome Aboard <?= user()->username; ?></h2>
          </main>
        </div>
      </div>
    </div>
</div>
<?= $this->endSection(); ?>