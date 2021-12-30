@extends('layouts.layanan')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-subtitle">Pengajuan Surat Izin Usaha Mu</h2>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('create-surat-izin-usaha') }}" class="btn btn-primary mb-3">
                                    + Buat Surat
                                </a>
                                <h4>List Pengajuan Surat</h4>
                                <h6 class="mb-3">Silahkan ambil surat di kantor desa jika status <span
                                        class="text-bold text-blue">TELAH JADI</span>. <br>
                                    Cek berkala status pengajuanmu.</h6>

                                <div class="table-responsive">
                                    <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                        <thead>
                                            <tr>
                                                <th>ID Surat</th>
                                                <th>Nama Lengkap</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Bentuk Usaha</th>
                                                <th>Alamat Usaha</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
@endsection


@push('addon-script')
<script>
    var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide:true,
            ordering:true,
            ajax:{
                url: '{!! url()->current() !!}',
            },
            columns:[
                {data:'id', name: 'id'},
                {data:'user.name', name: 'user.name'},
                {data:'business_name', name: 'business_name'},
                {data:'business_type', name: 'business_type'},
                {data:'business_address', name: 'business_address'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        });
</script>
@endpush