@extends('layouts.app')

@section('template_title')
    {{ $perusahaan->name ?? 'Show Perusahaan' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Perusahaan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('perusahaan.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Kode:</strong>
                            {{ $perusahaan->kode }}
                        </div>
                        <div class="form-group">
                            <strong>Nama:</strong>
                            {{ $perusahaan->nama }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
