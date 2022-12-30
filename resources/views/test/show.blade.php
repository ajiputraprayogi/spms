@extends('layouts.app')

@section('template_title')
    {{ $test->name ?? 'Show Test' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Test</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('test.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $test->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Jenis Soal:</strong>
                            {{ $test->jenis_soal }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $test->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
