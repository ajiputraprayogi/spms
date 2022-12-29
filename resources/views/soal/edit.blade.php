@extends('layouts.app')

@section('template_title')
    Update Soal
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Soal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('soal.update', $soal->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('soal.form_edit')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/customjs/soal/edit_soal.js')}}"></script>
@endsection
