@extends('layouts.app')

@section('template_title')
    {{ $dataDiri->name ?? 'Show Data Pelamar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Data Pelamar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('data-diri.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Pribadi</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <strong>User Id:</strong>
                                            @php
                                                $user = DB::table('users')->where('id', $dataDiri->user_id)->first();
                                            @endphp
                                            @if($user != null)
                                                {{$user->name}}
                                            @else
                                                Tidak Ada
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <strong>Nama Lengkap:</strong>
                                            {{ $dataDiri->nama_lengkap }}
                                        </div>
                                        <div class="form-group">
                                            <strong>Tempat Lahir:</strong>
                                            {{ $dataDiri->tempat_lahir }}
                                        </div>
                                        <div class="form-group">
                                            <strong>Tgl Lahir:</strong>
                                            {{ $dataDiri->tgl_lahir }}
                                        </div>
                                        <div class="form-group">
                                            <strong>Alamat:</strong>
                                            {{ $dataDiri->alamat }}
                                        </div>
                                        <div class="form-group">
                                            <strong>No Hp:</strong>
                                            {{ $dataDiri->no_hp }}
                                        </div>
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            {{ $dataDiri->email }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger">
                                    <div class="card-header">
                                        <h3 class="card-title">Foto</h3>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <img src="{{asset('img/foto/'.$dataDiri->foto)}}" style="width: 280px" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Pendidikan Terakhir</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pendidikan Terakhir</th>
                                                    <th>Asal Sekolah / Universitas:</th>
                                                    <th>Jurusan / Program Studi</th>
                                                    <th>Nilai Akhir / IPK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{$dataDiri->pendidikan_terakhir}}</td>
                                                    <td>{{$dataDiri->asal_sekolah}}</td>
                                                    <td>{{$dataDiri->jurusan}}</td>
                                                    <td>{{$dataDiri->nilai_akhir}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">Berkas</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Surat Lamaran</th>
                                                    <th>Curriculum Vitae (CV)</th>
                                                    <th>Pengalaman Kerja</th>
                                                    <th>Portofolio</th>
                                                    <th>KTP</th>
                                                    <th>KK</th>
                                                    <th>Ijazah Terakhir</th>
                                                    <th>Transkrip Nilai</th>
                                                    <th>SKCK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        @if($dataDiri->surat_lamaran !='' or $dataDiri->surat_lamaran != null)
                                                            {{$dataDiri->surat_lamaran}}
                                                        @else
                                                            Belum ada
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($dataDiri->cv !='' or $dataDiri->cv != null)
                                                            {{$dataDiri->cv}}
                                                        @else
                                                            Belum ada
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($dataDiri->pengalaman_kerja !='' or $dataDiri->pengalaman_kerja != null)
                                                            {{$dataDiri->pengalaman_kerja}}
                                                        @else
                                                            Belum ada
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($dataDiri->portofolio !='' or $dataDiri->portofolio != null)
                                                            {{$dataDiri->portofolio}}
                                                        @else
                                                            Belum ada
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($dataDiri->ktp !='' or $dataDiri->ktp != null)
                                                            {{$dataDiri->ktp}}
                                                        @else
                                                            Belum ada
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($dataDiri->kk !='' or $dataDiri->kk != null)
                                                            {{$dataDiri->kk}}
                                                        @else
                                                            Belum ada
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($dataDiri->ijazah_terakhir !='' or $dataDiri->ijazah_terakhir != null)
                                                            {{$dataDiri->ijazah_terakhir}}
                                                        @else
                                                            Belum ada
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($dataDiri->transkrip_nilai !='' or $dataDiri->transkrip_nilai != null)
                                                            {{$dataDiri->transkrip_nilai}}
                                                        @else
                                                            Belum ada
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($dataDiri->skck !='' or $dataDiri->skck != null)
                                                            {{$dataDiri->skck}}
                                                        @else
                                                            Belum ada
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <strong>Example:</strong>
                            Example
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
