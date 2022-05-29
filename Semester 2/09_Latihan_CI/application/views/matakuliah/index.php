<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Matakuliah</title>
    <script>
        function deleteMatakuliah(message) {
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
            Daftar Matakuliah
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>SKS</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($matakuliah as $mtk) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $mtk->kode ?></td>
                        <td><?= $mtk->nama ?></td>
                        <td><?= $mtk->sks ?></td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo base_url("index.php/matakuliah/edit/$mtk->id") ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo base_url("index.php/matakuliah/delete/$mtk->id") ?>" onclick="return deleteMatakuliah('Anda yakin ingin menghapus mahasiswa yang bernama <?php echo $mtk->nama ?>?')">Delete</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="<?php echo base_url("index.php/matakuliah/form") ?>">Tambah</a>
    </div>
</body>

</html>