@extends('layout.admin')

@section('title', 'Tambah Siswa')

@section('header')
    <a href="{{ url('siswa') }}">Data Siswa</a>
    <a href="#">|</a>
    <a href="#">Tambah Siswa</a> 
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-12 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Tambah Siswa</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('siswa/create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nisn" class="form-label mb-2">NISN</label>
                            <input type="number" name="nisn" id="nisn" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nis" class="form-label mb-2">NIS</label>
                            <input type="text" name="nis" id="nis" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label mb-2">Nama Siswa</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="kelas" class="form-label mb-2">Kelas</label>
                            <input type="text" name="kelas" id="kelas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="text" class="form-label mb-2">Alamat Siswa</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tl" class="form-label mb-2">Tempat Lahir</label>
                            <input type="text" name="tl" id="tl" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl" class="form-label mb-2">Tanggal Lahir</label>
                            <input type="date" name="tgl" id="tgl" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="kontak" class="form-label mb-2">No Hp. Siswa</label>
                            <input type="number" name="kontak" id="kontak" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="jk" class="form-label mb-2">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="select2 form-select form-select-l" data-allow-clear="true">
                                <option value="jk" selected>Pilih Jenis Kelamin</option>
                                <option value="L" >Laki-Laki</option>
                                <option value="P" >Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status" class="form-label mb-2">Status</label>
                            <select name="status" id="status" class="select2 form-select form-select-l" data-allow-clear="true">
                                <option value="status" selected>Pilih Status</option>
                                <option value="A">Aktif</option>
                                <option value="TA">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label mt-2" for="password">Kata Sandi</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        <div class="form-group">
                            <label for="foto" class="form-label">Foto Siswa</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                            <small class="text-danger">ukuran foto 1 : 1</small>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" style="width: 100%">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection