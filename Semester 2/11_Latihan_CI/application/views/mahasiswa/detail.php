<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - Detail</title>
</head>

<body>
    <div id="body" class="col-md-12">
        <h3>
            Detail Mahasiswa
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $mahasiswa->id ?></td>
                    <td><?= $mahasiswa->nim ?></td>
                    <td><?= $mahasiswa->nama ?></td>
                    <td><?= $mahasiswa->gender ?></td>
                    <td><?= $mahasiswa->tmp_lahir ?></td>
                    <td><?= $mahasiswa->tgl_lahir ?></td>
                    <td><?= $mahasiswa->ipk ?></td>
                </tr>
            </tbody>
        </table>
        <div class="col-md-5 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="align-items-center text-center">
                        <img src="<?= base_url() ?>uploads/photos/mahasiswa/<?= $mahasiswa->id ?>.jpg" alt="mahasiswa" width="300">
                        <div class="mt-4">
                            <h4><?= $mahasiswa->nama ?></h4>
                            <p>Foto Mahasiswa</p>
                            <?= $error ?>
                            <br>
                            <a href="https://www.instagram.com/irsal_f.f/" target="_blank"><button class="btn btn-outline-info my-3">Instagram</button></a>
                            <?= form_open_multipart('Mahasiswa/upload') ?>
                            <input type="file" name="foto" id="foto" size="300">
                            <input type="hidden" name="idmahasiswa" value="<?= $mahasiswa->id ?>">
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