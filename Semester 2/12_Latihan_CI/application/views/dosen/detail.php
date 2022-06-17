<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen - Detail</title>
</head>

<body>
    <div id="body" class="col-md-12">
        <h3>
            Detail Dosen
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>NIDN</th>
                    <th>Pendidikan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $dosen->id ?></td>
                    <td><?= $dosen->nama ?></td>
                    <td><?= $dosen->tmp_lahir ?></td>
                    <td><?= $dosen->tgl_lahir ?></td>
                    <td><?= $dosen->nidn ?></td>
                    <td><?= $dosen->pendidikan ?></td>
                </tr>
            </tbody>
        </table>
        <div class="col-md-5 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="align-items-center text-center">
                        <img src="<?= base_url() ?>uploads/photos/dosen/<?= $dosen->id ?>.jpg" alt="dosen" width="300">
                        <div class="mt-4">
                            <h4><?= $dosen->nama ?></h4>
                            <p>Foto Dosen</p>
                            <?= $error ?>
                            <br>
                            <a href="https://www.instagram.com/irsal_f.f/" target="_blank"><button class="btn btn-outline-info my-3">Instagram</button></a>
                            <?= form_open_multipart('dosen/upload') ?>
                            <input type="file" name="foto" id="foto" size="300">
                            <input type="hidden" name="iddosen" value="<?= $dosen->id ?>">
                            <input type="submit" value="Upload Foto" class="btn btn-primary">
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>