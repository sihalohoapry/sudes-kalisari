@extends('layouts.layanan')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Keterangan Izin Usaha</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <p class="dashboard-subtitle">Pengajuan Surat Izin Usaha</p>
                <p class="dashboard-subtitle">Silahkan isi form dengan benar</p>
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
                                <form action="{{ route('surat-izin-usaha-store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Warga</label>
                                                <input type="text" name="name" value="{{ $user->name }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tempat, Tanggal Lahir</label>
                                                <input type="text" name="ttl"
                                                    value=" {{ $user->place_of_born }}, {{ $user->born }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" name="gender" value="{{ $user->gender }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="job" value="{{ $user->job }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input type="text" name="religion" value="{{ $user->religion }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="text" name="nik" value="{{ $user->nik }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Status Perkawinan</label>
                                                <input type="text" name="status" value="{{ $user->status }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="address" value="{{ $user->address }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Usaha</label>
                                                <input type="text" name="business_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Bentuk Usaha</label>
                                                <input type="text" name="business_type" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kegiatan Usaha</label>
                                                <input type="text" name="business_activity" class="form-control"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat Usaha</label>
                                                <input type="text" name="business_address" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Foto KTP</label>
                                                <input type="file" name="photo_ktp" class="form-control"
                                                    placeholder="Photo" required>
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