<?= $this->extend('templates/index'); ?>

<?= $this->section('main'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>First_name</th>
                            <th>Last_name</th>
                            <th>Email</th>
                            <th>University</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataKaryawan as $value) { ?>
                            <tr>
                                <td>
                                    <?php echo $value['id'] ?>
                                </td>
                                <td>
                                    <?php echo $value['first_name'] ?>
                                </td>
                                <td>
                                    <?php echo $value['last_name'] ?>
                                </td>
                                <td>
                                    <?php echo $value['email'] ?>
                                </td>
                                <td>
                                    <?php echo $value['university'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>