@extends('layouts.app')

@section('template_title')
    {{ $jabatan->name ?? 'Show Jabatan' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Jabatan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('jabatan.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Kode:</strong>
                            {{ $jabatan->kode }}
                        </div>
                        <div class="form-group">
                            <strong>Perusahaan:</strong>
                            @php
                                foreach($perusahaan as $rowperusahaan){
                                    $newperusahaan = DB::table('perusahaan')->where('id', $jabatan->id_perusahaan)->first();
                                    //dd($newperusahaan);
                                }
                            @endphp
                            @if($newperusahaan != null)
                                {{ $newperusahaan->nama }}
                            @else
                                Tidak Tersedia
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Jabatan:</strong>
                            {{ $jabatan->nama }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
