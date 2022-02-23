<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form-Kesehatan</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Formulir Pendataan Kesehatan Mahasiswa ITS</h3>
                            <br/>

                            {{-- @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif --}}
 
                            <br/>
                              <!-- form validasi -->
                              <form action="/valid" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="nrp">NRP</label>
                                               <input class="form-control" type="text" name="nrp" value="{{ old('nrp') }}" class="@error('nrp') is-invalid @enderror">
                                                @error('nrp')
                                                         <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="usia">Usia</label>
                                               <input class="form-control" type="text" name="usia" value="{{ old('usia') }}" class="@error('usia') is-invalid @enderror">
                                               @error('usia')
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="jeniskelamin">Jenis Kelamin (L/P)</label>
                                            <input class="form-control" type="text" name="jeniskelamin" value="{{ old('jeniskelamin') }}" class="@error('jeniskelamin') is-invalid @enderror">
                                            @error('jeniskelamin')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="tinggibadan">Tinggi Badan (cm)</label>
                                            <input class="form-control" type="text" name="tinggibadan" value="{{ old('tinggibadan') }}" class="@error('tinggibadan') is-invalid @enderror">
                                            @error('tinggibadan')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="beratbadan">Berat Badan (kg)</label>
                                            <input class="form-control" type="text" name="beratbadan" value="{{ old('beratbadan') }}" class="@error('beratbadan') is-invalid @enderror">
                                            @error('beratbadan')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">KTM</label>
                                            <input type="file" class="form-control-file" id="ktm" name="ktm" value="{{ old('ktm') }}" accept= "image/png, image/jpeg, image/jpg" class="@error('ktm') is-invalid @enderror">
                                            @error('ktm')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                         <div class="form-group">
                                               <input class="btn btn-primary" type="submit" value="Valid">
                                         </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>