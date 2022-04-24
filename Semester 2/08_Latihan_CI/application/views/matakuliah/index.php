<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Matakuliah</title>
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