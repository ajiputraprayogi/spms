@extends('layouts.app')

@section('template_title')
    Create Soal
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Soal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('soal.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('soal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/customjs/soal/create_soal.js')}}"></script>
@endsection
