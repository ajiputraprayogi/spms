@extends('layouts.app')

@section('template_title')
    Update Data Pelamar
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/datepicker/css/datepicker.css')}}">
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Data Pelamar</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('data-diri.update', $dataDiri->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('data-diri.form_edit')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{asset('assets/plugins/datepicker/js/bootstrap-datepicker.js')}}"></script>
@endsection

@push('js_in')
    <script>
        $('#tgl_lahir').datepicker({
            format: 'dd-mm-yyyy'
        });
    </script>
@endpush
