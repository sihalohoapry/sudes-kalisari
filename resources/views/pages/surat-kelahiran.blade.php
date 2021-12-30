@extends('layouts.layanan')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-subtitle">List Pengajuan Surat Lahir</h2>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('create-surat-kelahiran') }}" class="btn btn-primary mb-3">
                                    + Buat Surat
                                </a>
                                <h4>List Pengajuan Surat Keterangan Lahir</h4>
                                <h6 class="mb-3">Silahkan ambil surat di kantor desa jika status <span
                                        class="text-bold text-blue">TELAH JADI</span>. <br>
                                    Cek berkala status pengajuanmu.</h6>
                                <div class="table-responsive">
                                    <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                        <thead>
                                            <tr>
                                                <th>Nama Anak</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Ibu</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Tempat Lahir</th>
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
                {data:'name_son', name: 'name_son'},
                {data:'name_father', name: 'name_father'},
                {data:'name_mother', name: 'name_mother'},
                {data:'born', name: 'born'},
                {data:'place_of_born', name: 'place_of_born'},
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