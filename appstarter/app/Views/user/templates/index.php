<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/sidebar.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Icons"
    />
    <script
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesom/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
      <?= $this->renderSection('page-content'); ?>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"
  ></script>
  <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url(); ?>/assets/js/sidebar.js"></script>
</html>
