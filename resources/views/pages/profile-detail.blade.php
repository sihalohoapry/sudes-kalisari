@extends('layouts.layanan')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Profile</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <p class="dashboard-subtitle">Lengkapi Profile Anda</p>
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
                                <form action="{{ route('update-user', $user->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama User</label>
                                                <input type="text" name="name" class="form-control" required
                                                    value="{{ $user->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nik</label>
                                                <input type="text" name="nik" class="form-control" required
                                                    value="{{ $user->nik }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No KTP</label>
                                                <input type="text" name="no_ktp" class="form-control" required
                                                    value="{{ $user->no_ktp }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="job" class="form-control" required
                                                    value="{{ $user->job }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="address" class="form-control" required
                                                    value="{{ $user->address }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>RT</label>
                                                <input type="text" name="rt" class="form-control" required
                                                    value="{{ $user->rt }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <select name="religion" class="form-control" id="">
                                                    <option value="{{ $user->religion }}">{{ $user->religion }}</option>
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
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="place_of_born" class="form-control" required
                                                    value="{{ $user->place_of_born }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="born" class="form-control" required
                                                    value="{{ $user->born }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="gender" class="form-control" id="">
                                                    <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                                                    <option value="pria">Pria</option>
                                                    <option value="wanita">Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Golongan Darah</label>
                                                <select name="blood_type" class="form-control" id="">
                                                    <option value="{{ $user->blood_type }}">{{ $user->blood_type }}
                                                    </option>
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
                                                    <option value="{{ $user->education }}">{{ $user->education }}
                                                    </option>
                                                    <option value="sd">SD</option>
                                                    <option value="smp">SMP/Sederajat</option>
                                                    <option value="sma">SMA/Sederajat</option>
                                                    <option value="sarjana">S1</option>
                                                    <option value="pasca_sarjana">S2</option>
                                                    <option value="doktoral">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" class="form-control" id="">
                                                    <option value="{{ $user->status }}">{{ $user->status }}</option>
                                                    <option value="MENIKAH">Menikah</option>
                                                    <option value="BELUM MENIKAH">Lajang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <img src="{{ Storage::url($user->photo_ktp) }}" style="max-height: 200px"
                                                alt="">
                                            <div class="form-group">
                                                <label>Ganti Foto KTP</label>
                                                <input type="file" name="photo_ktp" class="form-control"
                                                    value="{{ $user->photo_ktp }}" placeholder="Photo">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email User</label>
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
    </section>
    <!-- /.content -->
</div>
@endsection