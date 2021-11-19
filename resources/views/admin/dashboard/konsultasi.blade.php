@extends('layouts.admin-master')

@section('title')
    Konsultasi | WEBORM
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Konsultasi</h1>
        </div>

        <div class="section-body">
            <div class="card chat-box" id="mychatbox">
                <div class="card-header">
                    <h4>Pembimbing</h4>
                </div>
                <div class="card-body chat-content">
                </div>
                <div class="card-footer chat-form">
                    <form>
                        <input type="text" class="form-control" placeholder="Type a message">
                        <button class="btn btn-primary">
                            <i class="far fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
