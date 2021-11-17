@extends('layouts.admin-master')

@section('title')
    Acara | WEBORM
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Acara</h1>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="callout callout-info">
                            <h5>Informasi</h5>
                            <p>
                                Unggah Dokumen LPJ Kegiatan yang akan diajukan. Ukuran maksimum dokumen: 25 MB.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Unggah Dokumen LPJ Kegiatan </h3>
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
                                        id="PasswordSertifikat" name="PasswordSertifikat"
                                        placeholder="Unggah dokumen LPJ yang akan diajukan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="PasswordSertifikat">Jenis Kegiatan</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Dokumen LPJ RKAT</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Dokumen LPJ Non-RKAT</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="Dokumen">Dokumen LPJ</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file" accept="application/pdf" data-val="true"
                                        data-val-required="The Dokumen field is required." id="Dokumen" name="Dokumen">
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Dokumen</label>
                            <div class="col-sm-10">
                                <span class="text-muted" id="JudulDokumen">(otomatis berdasarkan nama file)</span>
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
                                Unggah LPJ
                            </button>
                        </div>
                        <!-- /.card-footer -->
                        {{-- <input name="__RequestVerificationToken" type="hidden"
                        value="CfDJ8AwUZWNvh05ItjDzOB9O2kGg1DbGFRPYEaK47gH8USQ2CYGH2CNgyoum0e6SHfMt01noF6dER4ROOtq-r6PDWtQT7DYJ9GVqL8lLGe828BXFYWZh2U9_ojvtiaChnsOdyi1VVG2ncv860cnvmhfqw1-JIoMLqsqDaty2NncnCErt8hPSD52nzX7I2L7w246ypQ"> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
