<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
    <script>
        function deleteDosen(message) {
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
            Daftar Dosen
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>NIDN</th>
                    <th>Pendidikan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($dosen as $dsn) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $dsn->nama ?></td>
                        <td><?= $dsn->nidn ?></td>
                        <td><?= $dsn->pendidikan ?></td>
                        <td>
                            <a href="<?php echo base_url("index.php/dosen/detail/$dsn->id") ?>">Detail</a>
                            <a class="btn btn-warning" href="<?php echo base_url("index.php/dosen/edit/$dsn->id") ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo base_url("index.php/dosen/delete/$dsn->id") ?>" onclick="return deleteDosen('Anda yakin ingin menghapus mahasiswa yang bernama <?php echo $dsn->nama ?>?')">Delete</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="<?php echo base_url("index.php/dosen/form") ?>">Tambah</a>
    </div>
</body>

</html>