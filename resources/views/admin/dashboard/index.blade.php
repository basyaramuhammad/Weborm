@extends('layouts.admin-master')

@section('title')
    Dashboard | WEBORM
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Beranda</h1>
        </div>

        <div class="section-body">
            <div class="content-wrapper" style="min-height: 1200.88px;">

                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Dokumen</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Pembekalan PKL</td>
                                        <td>2021-20-11</td>
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                        <td><a href="#" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                    {{-- <tr>
                                        <td>2</td>
                                        <td>Hasan Basri</td>
                                        <td>2017-01-09</td>
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                        <td><a href="#" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Kusnadi</td>
                                        <td>2017-01-11</td>
                                        <td>
                                            <div class="badge badge-warning">Not Active</div>
                                        </td>
                                        <td><a href="#" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Rizal Fakhri</td>
                                        <td>2017-01-11</td>
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                        <td><a href="#" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Isnap Kiswandi</td>
                                        <td>2017-01-17</td>
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                        <td><a href="#" class="btn btn-danger">Hapus</a></td>
                                    </tr> --}}
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span
                                                class="sr-only">(current)</span></a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
    </section>
@endsection
