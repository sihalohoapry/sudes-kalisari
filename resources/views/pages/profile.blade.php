@extends('layouts.layanan')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <p class="dashboard-subtitle">Ubah Profile</p>
                <p class="dashboard-subtitle"><span class="text-bold">Pastikan data diri anda lengkap sebelum mengajukan
                        surat.</span></p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="name"
                                                    value="{{ $user->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="text" class="form-control" id="nik"
                                                    value="{{ $user->nik }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Alamat</label>
                                                <input type="email" class="form-control" id="email"
                                                    value="{{ $user->address }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rt">RT</label>
                                                <input type="text" class="form-control" id="rt"
                                                    value="{{ $user->rt }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" class="form-control" id="">
                                                    <option value="{{ $user->status }}">{{ $user->status }}</option>
                                                    <option value="MENIKAH">Menikah</option>
                                                    <option value="BELUM MENIKAH">Belum Menikah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="gender" class="form-control" id="">
                                                    <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                                                    <option value="pria">Pria</option>
                                                    <option value="wanita">Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="place_of_born">Tempat lahir</label>
                                                <input type="text" class="form-control" id="place_of_born"
                                                    value="{{ $user->place_of_born }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Tanggal Lahir</label>
                                                <input id="born" v-model="born" type="date" class="form-control @error('born') is-valid
                                                @enderror" name="born" value="{{ $user->born }}" required
                                                    autocomplete="born" autofocus>
                                                @error('born')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <a href="{{ route('detail', $user->id) }}"
                                                class="btn btn-success px-5">Lengkapi
                                                Data</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection