@extends('layouts.admin-master')

@section('title')
    Kesekretariatan | WEBORM
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kesekretariatan</h1>
        </div>
        <div class="container-fluid">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                    @endforeach
                </div>
            @endif
            <form action="/kesekretariatan/upload/proses" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <div class="callout callout-info">
                            <h5>Informasi</h5>
                            <p>
                                Unggah File Proposal Kegiatan yang akan diajukan. Ukuran maksimum file: 25 MB.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Unggah File Proposal Kegiatan </h3>
                    </div>
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/Sign/Create"
                        novalidate="novalidate">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="PasswordSertifikat">Nama Organisasi
                                    Mahasiswa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" autocomplete="new-password" minlength="4"
                                        data-val="true" data-val-required="The PasswordSertifikat field is required."
                                        id="PasswordSertifikat" name="PasswordSertifikat"
                                        placeholder="Masukan nama orgasisasi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="PasswordSertifikat">Nama Kegiatan
                                    Organisasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" autocomplete="new-password" minlength="4"
                                        data-val="true" data-val-required="The PasswordSertifikat field is required."
                                        id="keterangan" name="keterangan"
                                        placeholder="Unggah file proposal yang akan diajukan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="PasswordSertifikat">Jenis Kegiatan</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Proposal RKAT</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Proposal Non-RKAT</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="PasswordSertifikat">Tanggal Kegiatan</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" autocomplete="new-password" minlength="4"
                                        data-val="true" data-val-required="The PasswordSertifikat field is required."
                                        id="PasswordSertifikat" name="PasswordSertifikat"
                                        placeholder="Unggah file proposal yang akan diajukan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="File">Proposal</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file" accept="application/pdf" data-val="true"
                                        data-val-required="The File field is required." id="file" name="file">
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama File</label>
                            <div class="col-sm-10">
                                <span class="text-muted" id="JudulFile">(otomatis berdasarkan nama file)</span>
                                <input type="hidden" data-val="true"
                                    data-val-required="The NomorHalamanTtd field is required." id="NomorHalamanTtd"
                                    name="NomorHalamanTtd" value="1">
                            </div>
                        </div> --}}
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-angle-double-right"></i>
                                Unggah Proposal
                            </button>
                        </div>
                        <!-- /.card-footer -->
                        {{-- <input name="__RequestVerificationToken" type="hidden"
                        value="CfDJ8AwUZWNvh05ItjDzOB9O2kGg1DbGFRPYEaK47gH8USQ2CYGH2CNgyoum0e6SHfMt01noF6dER4ROOtq-r6PDWtQT7DYJ9GVqL8lLGe828BXFYWZh2U9_ojvtiaChnsOdyi1VVG2ncv860cnvmhfqw1-JIoMLqsqDaty2NncnCErt8hPSD52nzX7I2L7w246ypQ"> --}}
                    </form>
                </div>
        </div>
        <div class="section-body">
        </div>
    </section>
@endsection
