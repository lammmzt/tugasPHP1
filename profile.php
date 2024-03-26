<?php
$nama = "M. Nurul Alam";
$email = "m.nurulalam1978@gmail.com";
$no_hp = "0895703024454";
$alamat = "JL. Jaya Bakti No. 178, Kel. Medono, Kec. Pekalongan Barat, Kota Pekalongan, Jawa Tengah";
$pekerjaan = "Mahasiswa";
$universitas = "STMIK Widya Pratama Pekalongan";
$prodi = "Teknik Informatika";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        MY PROFILE
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="https://avatars.githubusercontent.com/u/106385066?v=4" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="col-md-9">
                                <table class="table">
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td><?= $nama ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?= $email ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. HP</td>
                                        <td>:</td>
                                        <td><?= $no_hp ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><?= $alamat ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan</td>
                                        <td>:</td>
                                        <td><?= $pekerjaan ?></td>
                                    </tr>
                                    <tr>
                                        <td>Universitas</td>
                                        <td>:</td>
                                        <td><?= $universitas ?></td>
                                    </tr>
                                    <tr>
                                        <td>Prodi</td>
                                        <td>:</td>
                                        <td><?= $prodi ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>