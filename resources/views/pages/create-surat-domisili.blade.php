@extends('layouts.layanan')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Domisili</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <p class="dashboard-subtitle">Pengajuan Surat Keterangan Domisili</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())
                        <div class="alert alert-danger ">
                            <ul>
                                @foreach ($errors->all() as $error )
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <small>Silahkan update profil ada jika datang kurang tepat</small>
                                <form class="mt-3" action="{{ route('domisili-store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="name" class="form-control" disabled
                                                    value="{{ $user->name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Jenis kelamin</label>
                                                <select name="gender" class="form-control" disabled id="">
                                                    <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                                                    <option value="perempuan">Perempuan</option>
                                                    <option value="laki">Laki-lagi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="place_of_born" class="form-control" disabled
                                                    value="{{ $user->place_of_born }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="date" name="born" class="form-control" disabled
                                                    value="{{ $user->born }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Warga Negara</label>
                                                <input type="text" name="citizen" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Status Perkawinan</label>
                                                <select name="status" class="form-control" disabled id="">
                                                    <option value="{{ $user->status }}">{{ $user->status }}</option>
                                                    <option value="perempuan">Kawin</option>
                                                    <option value="laki">Belum Kawin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <select name="religion" class="form-control" disabled id="">
                                                    <option value="{{ $user->religion }}">{{ $user->religion }}</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="kristen">Kristen</option>
                                                    <option value="katolik">Katolik</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="buddha">Buddha</option>
                                                    <option value="konghucu">Konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="number" name="nik" class="form-control" disabled
                                                    value="{{ $user->nik }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pekerjaan </label>
                                                <input type="text" name="job" disabled class="form-control"
                                                    value="{{ $user->job }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat Tempat Tinggal </label>
                                                <input type="text" name="address" class="form-control" disabled
                                                    value="{{ $user->address }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Foto KK</label>
                                                <input type="file" name="photo_kk" class="form-control"
                                                    placeholder="Photo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kepentingan membuat surat</label>
                                                <input type="text" name="letter_interests" class="form-control"
                                                    required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success px-5">Ajukan Surat</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection