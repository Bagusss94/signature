<?= $this->extend('templates/index'); ?>

<?= $this->section('main'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Data Cuti</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Data Cuti Masuk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Menunggu Konfirmasi
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Data Cuti Ditolak</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <a href="#"> <i class="fas fa-comments fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>Syarat Pengambilan Cuti</h1>
    <!-- <div class="card text-bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Cuti Sakit</div>
        <div class="card-body">
            <h5 class="card-title">Cuti Sakit : 3 hari</h5>
            <p class="card-text">Bila PNS jatuh sakit dan tidak memungkinkan untuk melakukan pekerjaan, yang bersangkutan berhak atas cuti sakit. Aturan cuti PNS yang sakit diberikan 1 hari atau 2 hari kerja dengan ketentuan bahwa ia harus memberitahukan kepada atasannya dan melampirkan surat keterangan dokter.</p>
        </div>
    </div> -->
    <div class="row">

        <div class="col-lg-6">

            <!-- Default Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Cuti Sakit</h6>
                </div>
                <div class="card-body">
                    Bila PNS jatuh sakit dan tidak memungkinkan untuk melakukan pekerjaan, yang bersangkutan berhak atas cuti sakit. Aturan cuti PNS yang sakit diberikan 1 hari atau 2 hari kerja dengan ketentuan bahwa ia harus memberitahukan kepada atasannya dan melampirkan surat keterangan dokter.
                </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Cuti Alasan Penting</h6>
                </div>
                <div class="card-body">
                    Cuti alasan penting ini diberikan ketika ibu, bapak, istri, suami, anak, adik, kakak, mertua, atau menantu yang sedang sakit keras atau meninggal dunia.
                </div>
            </div>

        </div>

        <div class="col-lg-6">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Cuti Besar</h6>
                </div>
                <div class="card-body">
                    Jenis cuti ini diberikan kepada mereka yang telah mengabdikan dirinya sekurang-kurangnya 6 tahun secara terus menerus. Durasi cuti besar yang boleh diambil adalah 3 bulan.
                </div>
            </div>

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Cuti Melahirkan</h6>
                </div>
                <div class="card-body">
                    Untuk persalinan anak yang pertama, kedua, dan ketiga, wanita berhak atas cuti melahirkan. Namun, untuk persalinan anak keempat dan seterusnya, diberikan cuti di luar tanggungan negara. Ketentuan lamanya cuti melahirkan adalah 1 bulan sebelum dan 2 bulan sesudah persalinan. Cuti ini diajukan secara tertulis dan selama menjalankan cuti ini, wanita masih berhak mendapatkan penghasilannya.
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>