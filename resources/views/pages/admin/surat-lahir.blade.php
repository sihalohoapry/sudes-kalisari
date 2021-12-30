@extends('layouts.admin')
@section('title')
Penyuratan
@endsection

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
                                <div class="table-responsive">
                                    <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                        <thead>
                                            <tr>
                                                <th>ID Surat</th>
                                                <th>Nama Anak</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Ibu</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Status Pengajuan</th>
                                                <th>Aksi</th>
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
                {data:'name_son', name: 'name_son'},
                {data:'name_father', name: 'name_father'},
                {data:'name_mother', name: 'name_mother'},
                {data:'born', name: 'born'},
                {data:'status', name: 'status'},
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