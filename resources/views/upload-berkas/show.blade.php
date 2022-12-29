@extends('layouts.app')

@section('template_title')
    {{ $uploadBerkas->name ?? 'Show Upload Berkas' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Upload Berkas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('upload-berkas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $uploadBerkas->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Surat Lamaran:</strong>
                            {{ $uploadBerkas->surat_lamaran }}
                        </div>
                        <div class="form-group">
                            <strong>Cv:</strong>
                            {{ $uploadBerkas->cv }}
                        </div>
                        <div class="form-group">
                            <strong>Pengalaman Kerja:</strong>
                            {{ $uploadBerkas->pengalaman_kerja }}
                        </div>
                        <div class="form-group">
                            <strong>Portofolio:</strong>
                            {{ $uploadBerkas->portofolio }}
                        </div>
                        <div class="form-group">
                            <strong>Ktp:</strong>
                            {{ $uploadBerkas->ktp }}
                        </div>
                        <div class="form-group">
                            <strong>Kk:</strong>
                            {{ $uploadBerkas->kk }}
                        </div>
                        <div class="form-group">
                            <strong>Ijazah Terakhir:</strong>
                            {{ $uploadBerkas->ijazah_terakhir }}
                        </div>
                        <div class="form-group">
                            <strong>Transkrip Nilai:</strong>
                            {{ $uploadBerkas->transkrip_nilai }}
                        </div>
                        <div class="form-group">
                            <strong>Skck:</strong>
                            {{ $uploadBerkas->skck }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $uploadBerkas->foto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
