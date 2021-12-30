@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Keterangan Menikah</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <p class="dashboard-subtitle">Detail Surat Keterangan Menikah</p>
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
                                <form action="{{ route('surat-menikah.update', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" class="form-control" disabled id="name"
                                                    value="{{ $item->user->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="place_of_born">Tempat Lahir</label>
                                                <input type="place_of_born" class="form-control" disabled
                                                    id="place_of_born" value="{{ $item->user->place_of_born }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="born">Tanggal Lahir</label>
                                                <input type="text" class="form-control" disabled id="born"
                                                    value="{{ $item->user->born }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Jenis Kelamin</label>
                                                <input type="text" class="form-control" disabled id="gender"
                                                    value="{{ $item->user->gender }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="job">Pekerjaan</label>
                                                    <input type="text" class="form-control" disabled id="job"
                                                        value="{{ $item->user->job }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <select name="religion" class="form-control" disabled id="">
                                                    <option value="{{ $item->user->religion }}">
                                                        {{ $item->user->religion }}</option>
                                                    <option value="ISLAM">Islam</option>
                                                    <option value="KRISTEN">Kristen</option>
                                                    <option value="KATOLIK">Katolik</option>
                                                    <option value="HINDU">Hindu</option>
                                                    <option value="BUDDHA">Buddha</option>
                                                    <option value="KONGHUCU">Konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="nik">NIK</label>
                                                    <input type="text" class="form-control" disabled id="nik"
                                                        value="{{ $item->user->nik }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="address">Alamat Terakhir</label>
                                                    <input type="text" class="form-control" disabled id="address"
                                                        value="{{ $item->user->address }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="status_marry">Status Pernikahan</label>
                                                    <input type="text" class="form-control" disabled id="status_marry"
                                                        value="{{ $item->status_marry }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name_marry">Nama Lengkap</label>
                                                <input type="text" class="form-control" disabled id="name_marry"
                                                    value="{{ $item->name_marry }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="place_of_born_marry">Tempat Lahir</label>
                                                <input type="text" class="form-control" disabled
                                                    id="place_of_born_marry" value="{{ $item->place_of_born_marry }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="born_marry">Tanggal Lahir</label>
                                                <input type="text" class="form-control" disabled id="born_marry"
                                                    value="{{ $item->born_marry }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gander_marry">Jenis Kelamin</label>
                                                <input type="text" class="form-control" disabled id="gander_marry"
                                                    value="{{ $item->gander_marry }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="job_marry">Pekerjaan</label>
                                                    <input type="text" class="form-control" disabled id="job_marry"
                                                        value="{{ $item->job_marry }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="religion_marry">Pekerjaan</label>
                                                    <input type="text" class="form-control" disabled id="religion_marry"
                                                        value="{{ $item->religion_marry }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="nik_marry">NIK</label>
                                                    <input type="text" class="form-control" disabled id="nik_marry"
                                                        value="{{ $item->nik_marry }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="address_marry">Alamat Terakhir</label>
                                                    <input type="text" class="form-control" disabled id="address_marry"
                                                        value="{{ $item->address_marry }}" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div>
                                            <label for="">Foto KTP Pria</label>
                                        </div>
                                        <img src="{{ Storage::url($item->photo_ktp) }}" style="max-height: 400px;"
                                            alt="">
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div>
                                            <label for="">Foto KTP Wanita</label>
                                        </div>
                                        <img src="{{ Storage::url($item->photo_ktp_marry) }}" style="max-height: 400px;"
                                            alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Ubah Status Pengaduan</label>
                                            <select name="status_pengajuan" class="form-control" id="">
                                                <option value="{{ $item->status_pengajuan }}">
                                                    {{ $item->status_pengajuan }}</option>
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

{{-- @section('title')
Pengaduan
@endsection

@section('content')
<!-- Page Content -->
<div class="content-wrapper">
    <div class="content">
        <div class="content-fluid">
            <div class="dashboard-content">
                <div class="page-content page-details">
                    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/">Pengaduan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Detail Pengaduan
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="store-gallery" id="gallery">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8" data-aos="zoom-in">
                                    <transition name="slide-fade" mode="out-in">
                                        <img src="{{ Storage::url($pengaduan->photo) }}" width="100%" alt="">
</transition>
</div>
</div>
</div>
</section>
<div class="store-details-container" data-aos="fade-up">
    <section class="store-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-4">
                    <h1>{{ $pengaduan->title }}</h1>
                    <div class="owner"> Pengaduan dari warga <span class="text-bold">{{ $pengaduan->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="store-description">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mb-5">
                    {!! $pengaduan->content !!}
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5">
                    <form action="{{ route('pengaduan.update',$pengaduan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ubah Status Pengaduan</label>
                                <select name="status" class="form-control" id="">
                                    <option value="{{ $pengaduan->status }}">
                                        {{ $pengaduan->status }}</option>
                                    <option value="SMP">SUDAH DIBACA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class=" text-right">
                                <button type="submit" class="btn btn-success px-5 text-right">Simpan
                                    Perubahan</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
</div>

</div>
</div>
</div>

</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endpush
@endpush --}}