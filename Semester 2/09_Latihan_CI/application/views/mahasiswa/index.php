<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <script>
        function deleteMahasiswa(message) {
            if(confirm(message)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>

<body>
    <div id="body" class="col-md-12">
        <h3>
            Daftar Mahasiswa
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>IPK</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($mahasiswa as $mhs) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $mhs->nim ?></td>
                        <td><?= $mhs->nama ?></td>
                        <td><?= $mhs->gender ?></td>
                        <td><?= $mhs->ipk ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id") ?>">Detail</a>
                            <a class="btn btn-warning" href="<?php echo base_url("index.php/mahasiswa/edit/$mhs->id") ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo base_url("index.php/mahasiswa/delete/$mhs->id") ?>" onclick="return deleteMahasiswa('Anda yakin ingin menghapus mahasiswa yang bernama <?php echo $mhs->nama ?>?')">Delete</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="<?php echo base_url("index.php/mahasiswa/form") ?>">Tambah</a>
    </div>
</body>

</html>