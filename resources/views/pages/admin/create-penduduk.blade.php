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
            <p class="dashboard-subtitle">Tambah akun penduduk</p>
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
                            <form action="{{ route('penduduk.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>No. KTP</label>
                                            <input type="number" name="no_ktp" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama </label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select name="religion" class="form-control" id="">
                                                <option value=""></option>
                                                <option value="ISLAM">Islam</option>
                                                <option value="KRISTEN">Kristen</option>
                                                <option value="KATOLIK">Katolik</option>
                                                <option value="HINDU">Hindu</option>
                                                <option value="BUDDHA">Buddha</option>
                                                <option value="KONGHUCU">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tempat Lahir </label>
                                            <input type="text" name="place_of_born" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tanggal Lahir </label>
                                            <input type="date" name="born" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Jenis kelamin</label>
                                            <select name="gender" class="form-control" id="">
                                                <option value=""></option>
                                                <option value="PRIA">PRIA</option>
                                                <option value="WANITA">WANITA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <select name="blood_type" class="form-control" id="">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="AB">AB</option>
                                                <option value="o">O</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pendidikan</label>
                                            <select name="education" class="form-control" id="">
                                                <option value=""></option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP/Sederajat</option>
                                                <option value="SMA">SMA/Sederajat</option>
                                                <option value="SARJANA">S1</option>
                                                <option value="PASCA SARJANA">S2</option>
                                                <option value="DOKTORAL">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pekerjaan </label>
                                            <input type="text" name="job" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-success px-5">Simpan</button>
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