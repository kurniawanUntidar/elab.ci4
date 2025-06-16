
<!-- CONTENT -->

<?= $this->extend('guest/Template') ?> 
<?= $this->section('content') ?> 
<div class="container-fluid">
    <h2 class=""><?= $title ?></h2>
    <?php foreach ($article as $article){?>
        <br>
        <div class="card">
        <h4 class="card-header"><?= $article['judul'] ?></h4>
            <div class="card-body">
                <h5 class="card-title"><?= $article['penulis']?></h5>
                <h6 class="card-subtitle"><?= date('d-F-Y',$article['created']); ?></h6>
                <p class="card-text"><?= $article['isi'] ?></p>
            <a href="#" class="">Go somewhere</a>
            </div>
        </div>
    <?php }; ?>
</div>

<?= $this->endSection() ?>