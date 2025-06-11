<!-- <?= $this->extend('Template/Main') ?> -->

<?= $this->section('content') ?>
   
    <h1><?= esc($title) ?></h1>

    <?php if (empty($records)): ?>
        <p>Tidak ada data yang ditemukan dari tabel.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>User Id</th>
                    </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                    <tr>
                        <td><?= esc($record['id']) ?></td>
                        <td><?= esc($record['name']) ?></td>
                        <td><?= esc($record['user_id']) ?></td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <p><a href="<?= base_url() ?>">Kembali ke Beranda</a></p>

<?= $this->endSection() ?>