<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Program Studi Teknik Informatika</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="ti.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Praktikum</a></li>
                        <li class="breadcrumb-item"><a href="#">Praktikum 2</a></li>
                        <li class="breadcrumb-item active">nilai_siswa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Nilai Siswa</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                            $submit = $_POST['submit'];
                            $nama_siswa = $_POST['fname'];
                            $mata_kuliah = $_POST['matkul'];
                            $nilai_uts = $_POST['uts'];
                            $nilai_uas = $_POST['uas'];
                            $nilai_tugas = $_POST['tugas'];

                            if (!empty($submit)) {
                                echo 'Proses : ' . $submit;
                                echo '</br>Nama : ' . $nama_siswa;
                                echo '</br>Mata Kuliah : ' . $mata_kuliah;
                                echo '</br>Nilai UTS : ' . $nilai_uts;
                                echo '</br>Nilai UAS : ' . $nilai_uas;
                                echo '</br>Nilai Tugas Praktikum: ' . $nilai_tugas;
                            }


                            if (!empty($nilai_uts & $nilai_uas & $nilai_tugas)) {
                                $lulus = $nilai_uts * 30 / 100 + $nilai_uas * 35 / 100 + $nilai_tugas * 35 / 100;
                                if ($lulus > 55) {
                                    echo '</br>Dinyatakan : Lulus';
                                } else {
                                    echo '</br>Dinyatakan : Tidak Lulus';
                                }

                                if ($lulus >= 0 && $lulus <= 35) {
                                    echo '</br>Grade : ' . $grade = 'E';
                                } elseif ($lulus >= 36 && $lulus <= 55) {
                                    echo '</br>Grade : ' . $grade = 'D';
                                } elseif ($lulus >= 56 && $lulus <= 69) {
                                    echo '</br>Grade : ' . $grade = 'C';
                                } elseif ($lulus >= 70 && $lulus <= 84) {
                                    echo '</br>Grade : ' . $grade = 'B';
                                } elseif ($lulus >= 85 && $lulus <= 100) {
                                    echo '</br>Grade : ' . $grade = 'A';
                                } else {
                                    echo '</br>Grade : ' . $grade = 'I';
                                }

                                switch ($grade) {
                                    case 'E':
                                        echo '</br>Predikat : ' . $predikat = 'Sangat Kurang';
                                        break;
                                    case 'D':
                                        echo '</br>Predikat : ' . $predikat = 'Kurang';
                                        break;
                                    case 'C':
                                        echo '</br>Predikat : ' . $predikat = 'Cukup';
                                        break;
                                    case 'B':
                                        echo '</br>Predikat : ' . $predikat = 'Memuaskan';
                                        break;
                                    case 'A':
                                        echo '</br>Predikat : ' . $predikat = 'Sangat Memuaskan';
                                        break;
                                    default:
                                        echo '</br>Predikat : ' . $predikat = 'Tidak Ada';
                                        break;
                                }
                            } else {
                                echo '</br>Dinyatakan : ';
                                echo '</br>Grade : ';
                                echo '</br>Predikat : ';
                            }
                            ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>