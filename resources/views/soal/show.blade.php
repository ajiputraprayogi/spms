@extends('layouts.app')

@section('template_title')
    {{ $soal->name ?? 'Show Soal' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Soal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('soal.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Jenis Soal:</strong>
                            {{ $soal->jenis_soal }}
                        </div>
                        <div class="form-group">
                            <strong>Jumlah Soal:</strong>
                            {{ $soal->jumlah_soal }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $soal->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
