<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Pendataan</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body" style="background-color:darkcyan">
                        <h3>Formulir Pendataan Kesehatan Mahasiswa ITS</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>NRP / NIDN</td>
                                <td>{{ $data->nrp }}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{ $data->usia }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin (L/P)</td>
                                <td>{{ $data->jeniskelamin }}</td>
                            </tr>
                            <tr>
                                <td>Tinggi Badan (cm)</td>
                                <td>{{ $data->tinggibadan }}</td>
                            </tr>
                            <tr>
                                <td>Berat Badan (kg)</td>
                                <td>{{ $data->beratbadan }}</td>
                            </tr>
                            <tr>
                                <td style="width:200px">KTM</td>
                                <td><img src="{{ $data->ktm }}" alt="Foto KTM" width="200px"></td>
                            </tr>
                        </table>

                        <a href="/form" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@include('sweetalert::alert')
</html> 