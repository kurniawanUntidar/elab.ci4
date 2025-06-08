<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elab [<?= $title; ?>]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?= base_url('assets/css/');?>paper-dashboard.css">


    <!-- <link rel="shortcut icon" href="<?= base_url('assets/'); ?>/img/Logo.png"> -->

</head>

<body>

    <?= $this->include('Template/Header') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('Template/Footer') ?>

</body>
</html>