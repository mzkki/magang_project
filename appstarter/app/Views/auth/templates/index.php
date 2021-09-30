<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $ttl = isset($title) ? $title : 'Magang Yuk'; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  </head>
  <body>
      <?= $this->renderSection('content'); ?>
  </body>
  <script src="<?= base_url(); ?>/js/bootstrap.bundle.min.js"></script>
</html>
