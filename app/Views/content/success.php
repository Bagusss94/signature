<?= $this->extend('templates/index'); ?>

<?= $this->section('main'); ?>
<style>
    .card {
        width: 18rem;
        margin-left: 30px;
    }
</style>
<div class="card">
    <div class="card-body">
        <h3>Your file was successfully uploaded!</h3>

        <ul>
            <li>name: <?= esc($uploaded_fileinfo->getBasename()) ?></li>
            <li>size: <?= esc($uploaded_fileinfo->getSizeByUnit('kb')) ?> KB</li>
            <li>extension: <?= esc($uploaded_fileinfo->guessExtension()) ?></li>
        </ul>
    </div>
</div>

<p><?= anchor('upload', 'Upload Another File!') ?></p>
<?= $this->endSection(); ?>