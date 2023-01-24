@extends('layouts.general')

@section('sub-title', 'Pendaftaran Kandidat')


@section('content')

<div class="row">
    <div class="col-md-12 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex justify-content-end">
                        <a href="" class="btn btn-warning">
                            Daftar manual
                            <span class="btn-icon-right">
                                <i class="fa fa-edit"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>Tanggal Pendaftaran</th>
                            <th>Golongan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Henadra Sandes</td>
                                <td>20 Mei 2022</td>
                                <td>IPNU</td>
                                <td>
                                    <span class="badge badge-success badge-rounded">Diterima</span>
                                </td>
                                <td>
                                    <a href="" class="badge badge-info">Lihat detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Amalia Yuliati</td>
                                <td>20 Mei 2022</td>
                                <td>IPPNU</td>
                                <td>
                                    <span class="badge badge-danger badge-rounded">Ditolak</span>
                                </td>
                                <td>
                                    <a href="" class="badge badge-info">Lihat detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
