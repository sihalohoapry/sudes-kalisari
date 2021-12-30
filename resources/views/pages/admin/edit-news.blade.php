@extends('layouts.layanan')
@section('content')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Berita Desa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <p class="dashboard-subtitle">Edit Berita desa Kalisari</p>
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
                                <form action="{{ route('berita.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Judul Berita</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ $data->title }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Berita Dibuat</label>
                                                <input type="date" name="date" class="form-control"
                                                    value="{{ $data->date }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <label>Isi Berita</label>
                                                <textarea name="news_content" id="editor">
                                                    {!! $data->news_content !!}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <img src="{{ Storage::url($data->photo) }}" style="max-height: 200px"
                                                alt="">
                                            <div class="form-group">
                                                <label>Ganti Foto</label>
                                                <input type="file" name="photo" class="form-control"
                                                    value="{{ $data->photo }}" placeholder="Photo">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success px-5">Edit Berita</button>
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
    CKEDITOR.replace( 'editor' );
</script>
@endpush