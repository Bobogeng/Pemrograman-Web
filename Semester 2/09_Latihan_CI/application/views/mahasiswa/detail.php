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
    </div>
</body>

</html>