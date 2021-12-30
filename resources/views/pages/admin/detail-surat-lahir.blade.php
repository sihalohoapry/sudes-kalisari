@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Keterangan Lahir</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <p class="dashboard-subtitle">Detail Surat Keterangan Lahir</p>
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
                                <form action="{{ route('surat-lahir.update', $item->id) }}" method="POST"
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
                                                <label for="name_father">Nama Ayah</label>
                                                <input type="name_father" class="form-control" disabled id="name_father"
                                                    value="{{ $item->name_father }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name_mother">Nama Ibu</label>
                                                <input type="name_mother" class="form-control" disabled id="name_mother"
                                                    value="{{ $item->name_mother }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name_son">Nama Anak</label>
                                                <input type="text" class="form-control" disabled id="name_son"
                                                    value="{{ $item->name_son }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="born">Tanggal Lahir</label>
                                                    <input type="text" class="form-control" disabled id="born"
                                                        value="{{ $item->born }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="time_of_born">Jam Lahir</label>
                                                    <input type="text" class="form-control" disabled id="time_of_born"
                                                        value="{{ $item->time_of_born }} WIB" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="day_of_born">Hari Lahir</label>
                                                    <input type="text" class="form-control" disabled id="day_of_born"
                                                        value="{{ $item->day_of_born }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="place_of_born">Tempat Lahir</label>
                                                    <input type="text" class="form-control" disabled id="place_of_born"
                                                        value="{{ $item->place_of_born }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="son_of">Anak Ke</label>
                                                    <input type="text" class="form-control" disabled id="son_of"
                                                        value="{{ $item->son_of }}" />
                                                </div>
                                            </div>
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
                                    <div class="col-md-12 mb-4">
                                        <div>
                                            <label for="">Foto KTP Ayah</label>
                                        </div>
                                        <img src="{{ Storage::url($item->photo_ktp_father) }}"
                                            style="max-height: 400px;" alt="">
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div>
                                            <label for="">Foto KTP Ibu</label>
                                        </div>
                                        <img src="{{ Storage::url($item->photo_ktp_mother) }}"
                                            style="max-height: 400px;" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Ubah Status Pengaduan</label>
                                            <select name="letter_status" class="form-control" id="">
                                                <option value="{{ $item->status }}">{{ $item->status }}</option>
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