<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
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
                        <td><a href="<?php echo base_url("index.php/dosen/detail/$dsn->id") ?>">Detail</a></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>