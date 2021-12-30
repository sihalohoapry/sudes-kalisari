@extends('layouts.admin')
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
                <p class="dashboard-subtitle">Detail Surat Domisili</p>
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
                                <form action="{{ route('surat-domisili.update', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nama Pengaju</label>
                                                <input type="text" class="form-control" disabled id="name"
                                                    value="{{ $item->user->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Jenis Klamin</label>
                                                <input type="gender" class="form-control" disabled id="gender"
                                                    value="{{ $item->user->gender }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ttl">Tempat, Tanggal Lahir</label>
                                                <input type="ttl" class="form-control" disabled id="ttl"
                                                    value="{{ $item->user->place_of_born }}, {{ $item->user->born }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="citizen">Negara</label>
                                                <input type="text" class="form-control" disabled id="citizen"
                                                    value="{{ $item->citizen }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="status">Status Perkawinan</label>
                                                    <input type="text" class="form-control" disabled id="status"
                                                        value="{{ $item->user->status }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="religion">Agama</label>
                                                    <input type="text" class="form-control" disabled id="religion"
                                                        value="{{ $item->user->religion }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="nik">NIK</label>
                                                    <input type="text" class="form-control" disabled id="nik"
                                                        value="{{ $item->user->nik }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="job">Pekerjaan</label>
                                                    <input type="text" class="form-control" disabled id="job"
                                                        value="{{ $item->user->job }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <input type="text" class="form-control" disabled id="address"
                                                        value="{{ $item->user->address }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div>
                                                <label for="">Foto KK</label>
                                            </div>
                                            <img src="{{ Storage::url($item->photo_kk) }}" style="max-height: 400px;"
                                                alt="">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="letter_interests">Kepentingan Surat</label>
                                                    <input type="text" class="form-control" disabled
                                                        id="letter_interests" value="{{ $item->letter_interests }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Ubah Status Pengaduan</label>
                                            <select name="status_letter" class="form-control" id="">
                                                <option value="{{ $item->status_letter }}">{{ $item->status_letter }}
                                                </option>
                                                <option value="MENUNGGU">MENUNGGU</option>
                                                <option value="DITOLAK">DITOLAK</option>
                                                <option value="DITERIMA">DITERIMA</option>
                                                <option value="TELAH JADI">TELAH JADI</option>
                                            </select>
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
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor_pengaduan' );
</script>
@endpush