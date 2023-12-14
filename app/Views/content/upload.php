<?= $this->extend('templates/index'); ?>

<?= $this->section('main'); ?>

<!-- <div class="container-fluid"> -->


<div class=" container-fluid">
    <!-- <h3>Approved Document</h3> -->


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="mulai">Mulai </label>
            <input type="date" class="form-control" id="mulai" aria-describedby="mulai" name="mulai" required>
        </div>
        <div class="form-group">
            <label for="pilih">Kepada :</label>
            <select class="selectpicker form-control" name="profile" multiple>
                <?php foreach ($profile as $value) { ?>
                    <option value="" selected><?php echo $value['full_name'] ?></option>
                <?php } ?>
            </select>

        </div>
        <div class="form-group">
            <label for="alasan">Keterangan</label>
            <textarea class="form-control" id="alasan" rows="3" name="alasan" required></textarea>
        </div>

        <div class="mb-3">

            <?php if ($errors) { ?>
                <?php foreach ($errors as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            <?php } ?>

            <?= form_open_multipart('upload/upload') ?>
            <input type="file" name="userfile" size="20">
            <br><br>
            <!-- <input type="submit" value="upload"> -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <input type="text" name="id" hidden>






    </form>


</div>
<?= $this->endSection(); ?>