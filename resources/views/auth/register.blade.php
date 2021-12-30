@extends('layouts.auth')

@section('content')

<div class="text-center p-4" style="background-color: gainsboro;">
    <div class="d-inline-flex">
        <div>
            <img src="images/logo_lampung_selatan.png" class="mr-3" style="max-height: 150px; margin-top: 0; !important"
                alt="">
        </div>
        <div>

            <h1 class=" ml-3 mt-3 text-center">Sistem Informasi Penduduk
                Kantor Desa Kalisari <br>
                Kabupaten Lampung Selatan</h1>
        </div>
    </div>

</div>
<div class="page-content page-auth mt-0" id="register">
    <div class="section-store-auth" data-aos="fade-up">
        <div class="container">

            <div class="row align-items-center justify-content-center row-login mt-5">
                <div class="col-lg-4">
                    <h2 class="text-center">
                        Mohon Isi <br />
                        Data Diri Dengan Benar
                    </h2>
                    <form class="mt-3" method="POST" action="{{ route('register') }} " enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input id="name" v-model="name" type="text" class="form-control @error('name') is-valid
                            @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" v-model="email" @change="checkEmailForAvailabality()" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                :class="{'is-invalid' : this.email_unavailable}" name="email" value="{{ old('email') }}"
                                required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sandi</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Sandi</label>
                            <input id="password-confirmation" type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" required autocomplete="new-password">

                            @error('password_confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">NIK</label>
                            <input id="nik" v-model="nik" type="text" class="form-control @error('nik') is-valid
                            @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>
                            @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input id="born" v-model="born" type="date" class="form-control @error('born') is-valid
                            @enderror" name="born" value="{{ old('born') }}" required autocomplete="born" autofocus>
                            @error('born')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input id="place_of_born" v-model="place_of_born" type="text" class="form-control @error('place_of_born') is-valid
                            @enderror" name="place_of_born" value="{{ old('place_of_born') }}" required
                                autocomplete="place_of_born" autofocus>
                            @error('place_of_born')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="gender" class="form-control" id="">
                                <option value=""></option>
                                <option value="PRIA">Pria</option>
                                <option value="WANITA">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input id="address" v-model="address" type="text" class="form-control @error('address') is-valid
                            @enderror" name="address" value="{{ old('address') }}" required autocomplete="address"
                                autofocus>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">RT</label>
                            <input id="rt" v-model="rt" type="text" class="form-control @error('rt') is-valid
                            @enderror" name="rt" value="{{ old('rt') }}" required autocomplete="rt" autofocus>
                            @error('rt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" id="">
                                <option value=""></option>
                                <option value="MENIKAH">MENIKAH</option>
                                <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Foto KTP</label>
                            <input type="file" name="photo_ktp" class="form-control" placeholder="Photo" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-5" :disabled="this.email_unavailable">
                            Sign Up Now</button>
                        <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-2"> Back to Sign In</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="vendor/vue/vue.js"></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    Vue.use(Toasted);
  var register = new Vue({
    el: "#register",
    mounted() {
      AOS.init();
    },

    methods:{
        checkEmailForAvailabality: function(){
            var self = this;
            axios.get('{{ route('api-register-check') }}', {
                params:{
                    email: this.email
                }
            })
            .then(function (response) {
                if(response.data == 'Available'){
                    self.$toasted.show("Email tersedia, silahkan lanjut langkah selanjutnya", {
                    position: "top-center",
                    className: "rounded",
                    duration: 2000,
                    });
                    self.email_unavailable =false;

                }else{
                    self.$toasted.error("Maaf, email sudah terdaftar pada sistem kami", {
                    position: "top-center",
                    className: "rounded",
                    duration: 2000,
                    });
                    self.email_unavailable =true;
                }
            // handle success
            console.log(response);
            })
        }
    },
  });
</script>
@endpush