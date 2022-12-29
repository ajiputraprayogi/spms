@extends('layouts.app')

@section('template_title')
    {{ $dataPendidikan->name ?? 'Show Data Pendidikan' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Data Pendidikan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('data-pendidikan.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $dataPendidikan->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pendidikan Terakhir:</strong>
                            {{ $dataPendidikan->pendidikan_terakhir }}
                        </div>
                        <div class="form-group">
                            <strong>Asal Sekolah:</strong>
                            {{ $dataPendidikan->asal_sekolah }}
                        </div>
                        <div class="form-group">
                            <strong>Jurusan:</strong>
                            {{ $dataPendidikan->jurusan }}
                        </div>
                        <div class="form-group">
                            <strong>Nilai Akhir:</strong>
                            {{ $dataPendidikan->nilai_akhir }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
