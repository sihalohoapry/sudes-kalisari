@extends('layouts.layanan')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Menikah</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" id="suratMenikah">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <p class="dashboard-subtitle">Pengajuan Surat Menikah</p>
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
                                <form action="{{ route('surat-menikah-store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Warga</label>
                                                <input type="text" name="name" value="{{ $data->name }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tempat lahir</label>
                                                <input type="text" name="place_of_born"
                                                    value="{{ $data->place_of_born }}" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal lahir</label>
                                                <input type="date" name="born" value="{{ $data->born }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Jenis kelamin</label>
                                                <select name="gander" class="form-control" disabled id="">
                                                    <option value="{{ $data->gender }}">{{ $data->gender }}</option>
                                                    <option value="perempuan">Perempuan</option>
                                                    <option value="laki">Laki-lagi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="job" value="{{ $data->job }}"
                                                    class="form-control" disabled required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <select name="religion" class="form-control" disabled id="">
                                                    <option value="{{ $data->religion }}">{{ $data->religion }}</option>
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
                                                <label>Alamat</label>
                                                <input type="text" name="address" value="{{ $data->address }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="number" name="nik" value="{{ $data->nik }}"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Foto KTP</label>
                                                <input type="file" name="photo_ktp" class="form-control"
                                                    placeholder="Photo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" name="is_marry"
                                                        id="openStoreFalse" v-model="is_marry" :value="false" />
                                                    <label for="openStoreFalse" class="custom-control-label"> Belum
                                                        Kawin </label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" name="is_marry"
                                                        id="openStoreTrue" v-model="is_marry" :value="true" />
                                                    <label for="openStoreTrue" class="custom-control-label"> Kawin
                                                        (dengan)
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" v-if="is_marry">
                                                    <label>Nama</label>
                                                    <input type="text" name="name_marry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" v-if="is_marry">
                                                    <label>Tempat lahir</label>
                                                    <input type="text" name="place_of_born_marry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" v-if="is_marry">
                                                    <label>Tanggal lahir</label>
                                                    <input type="date" name="born_marry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" v-if="is_marry">
                                                    <label>Jenis kelamin</label>
                                                    <select name="gander_marry" class="form-control" id="">
                                                        <option value=""></option>
                                                        <option value="perempuan">Perempuan</option>
                                                        <option value="laki">Laki-lagi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" v-if="is_marry">
                                                    <label>Pekerjaan</label>
                                                    <input type="text" name="job_marry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" v-if="is_marry">
                                                    <label>Agama</label>
                                                    <select name="religion_marry" class="form-control" id="">
                                                        <option value=""></option>
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
                                                <div class="form-group" v-if="is_marry">
                                                    <label>Alamat</label>
                                                    <input type="text" name="address_marry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" v-if="is_marry">
                                                    <label>NIK</label>
                                                    <input type="number" name="nik_marry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" v-if="is_marry">
                                                    <label>Foto KTP </label>
                                                    <input type="file" name="photo_ktp_marry" class="form-control"
                                                        placeholder="Photo" required>
                                                </div>
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
@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    Vue.use(Toasted);
  var register = new Vue({
    el: "#suratMenikah",
    mounted() {
      AOS.init();
    },


    data(){
        return{
            is_marry: false,
        }
    },
  });
</script>
@endpush