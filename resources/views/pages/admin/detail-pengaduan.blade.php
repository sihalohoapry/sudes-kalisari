@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengaduan Warga</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <p class="dashboard-subtitle">Detail Pengaduan Warga</p>
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
                                <form action="{{ route('pengaduan.update', $pengaduan->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group mb-0">
                                                <label>Judul</label>
                                            </div>
                                            <div class="mb-3">{{ $pengaduan->title }}</div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group mb-0">
                                                <label>Tanggal Terjadi</label>
                                            </div>
                                            <div class="mb-3">{{ $pengaduan->date }}</div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label>Pengaduan</label>
                                                {!! $pengaduan->content !!}
                                                {{-- <input type="text" name="content" class="form-control"
                                                    value="{!! $pengaduan->content !!}" required> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <label>Gambar</label>

                                            </div>
                                            <div><img src="{{ Storage::url($pengaduan->photo) }}"
                                                    style="max-height: 500px" alt=""></div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-5">
                                            <label>Ubah Status Pengaduan</label>
                                            <select name="letter_status" class="form-control" id="">
                                                <option value="{{ $pengaduan->letter_status }}">
                                                    {{ $pengaduan->letter_status }}
                                                </option>
                                                <option value="MENUNGGU">MENUNGGU</option>
                                                <option value="DIBACA">DIBACA</option>
                                                <option value="DIPROSES">DIPROSES</option>
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