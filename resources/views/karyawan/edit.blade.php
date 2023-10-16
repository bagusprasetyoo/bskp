<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Karyawan</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{  route('karyawan.update', $karyawan->id) }}" method="POST">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ ( $karyawan->nik) }}" placeholder="Masukkan NIK" readonly>
                                    @error('nik')<small class="text-danger pl-2">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $karyawan->nama) }}" placeholder="Masukkan Nama">
                                    @error('nama')<small class="text-danger pl-2">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Posisi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" value="{{ old('posisi', $karyawan->posisi) }}" placeholder="Masukkan Posisi">
                                    @error('posisi')<small class="text-danger pl-2">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan', $karyawan->jabatan) }}" placeholder="Masukkan Jabatan">
                                    @error('jabatan')<small class="text-danger pl-2">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jumlah Gaji</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('jumlah_gaji') is-invalid @enderror" name="jumlah_gaji" value="{{ old('jumlah_gaji', $karyawan->jumlah_gaji) }}" placeholder="Masukkan Jumlah Gaji">
                                    @error('jumlah_gaji')<small class="text-danger pl-2">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <a class="btn btn-md btn-secondary" href="/karyawan">BATAL</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>