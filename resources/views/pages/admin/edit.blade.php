@extends('layouts.admin')
@section('title')
Admin | Sudes Kalisari
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Penduduk</h2>
            <p class="dashboard-subtitle">Edit Warga</p>
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
                            <form action="{{ route('penduduk.update', $item->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>No. KTP</label>
                                            <input type="number" name="no_ktp" class="form-control"
                                                value="{{ $item->no_ktp }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama </label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $item->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select name="religion" class="form-control" id="">
                                                <option value="{{ $item->religion }}">{{ $item->religion }}</option>
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
                                            <label>Tempat Lahir </label>
                                            <input type="text" name="place_of_born" value="{{ $item->place_of_born }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tanggal Lahir </label>
                                            <input type="date" name="born" value="{{ $item->born }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Jenis kelamin</label>
                                            <select name="gender" class="form-control" id="">
                                                <option value="{{ $item->gender }}">{{ $item->gender }}</option>
                                                <option value="perempuan">Perempuan</option>
                                                <option value="laki">Laki-lagi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <select name="blood_type" class="form-control" id="">
                                                <option value="{{ $item->blo0d_type }}">{{ $item->blood_type }}</option>
                                                <option value="A">A</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pendidikan</label>
                                            <select name="education" class="form-control" id="">
                                                <option value="{{ $item->education }}">{{ $item->education }}</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP/Sederajat</option>
                                                <option value="SMA">SMA/Sederajat</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pekerjaan </label>
                                            <input type="text" name="job" value="{{ $item->job }}" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control">
                                            <small>kosongkan jika tidak ingin mengganti email</small>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password baru</label>
                                            <input type="password" name="password" class="form-control">
                                            <small>kosongkan jika tidak ingin mengganti password</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-success px-5">Ubah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection