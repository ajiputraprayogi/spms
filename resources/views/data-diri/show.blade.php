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
                                                    <th>Pendidikan</th>
                                                    <th>Nama Sekolah</th>
                                                    <th>Jurusan</th>
                                                    <th>Tahun Lulus</th>
                                                    <th>Nilai Akhir</th>
                                                    <th>Berkas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($dataDiri->sd !='')
                                                <tr>
                                                    <td>SD</td>
                                                    <td>{{$dataDiri->sd}}</td>
                                                    <td class="text-center">-</td>
                                                    <td>{{$dataDiri->sd_tahun_lulus}}</td>
                                                    <td>{{$dataDiri->sd_nilai_akhir}}</td>
                                                    <td>{{$dataDiri->sd_berkas}}</td>
                                                </tr>
                                                @endif
                                                @if($dataDiri->smp !='')
                                                <tr>
                                                    <td>SMP</td>
                                                    <td>{{$dataDiri->smp}}</td>
                                                    <td class="text-center">-</td>
                                                    <td>{{$dataDiri->smp_tahun_lulus}}</td>
                                                    <td>{{$dataDiri->smp_nilai_akhir}}</td>
                                                    <td>{{$dataDiri->smp_berkas}}</td>
                                                </tr>
                                                @endif
                                                @if($dataDiri->sma !='')
                                                <tr>
                                                    <td>SMA/SMK</td>
                                                    <td>{{$dataDiri->sma}}</td>
                                                    <td>{{$dataDiri->sma_jurusan}}</td>
                                                    <td>{{$dataDiri->sma_tahun_lulus}}</td>
                                                    <td>{{$dataDiri->sma_nilai_akhir}}</td>
                                                    <td>{{$dataDiri->sma_berkas}}</td>
                                                </tr>
                                                @endif
                                                @if($dataDiri->dsatu !='')
                                                <tr>
                                                    <td>D1</td>
                                                    <td>{{$dataDiri->dsatu}}</td>
                                                    <td>{{$dataDiri->dsatu_jurusan}}</td>
                                                    <td>{{$dataDiri->dsatu_tahun_lulus}}</td>
                                                    <td>{{$dataDiri->dsatu_nilai_akhir}}</td>
                                                    <td>{{$dataDiri->dsatu_berkas}}</td>
                                                </tr>
                                                @endif
                                                @if($dataDiri->ddua !='')
                                                <tr>
                                                    <td>D2</td>
                                                    <td>{{$dataDiri->ddua}}</td>
                                                    <td>{{$dataDiri->ddua_jurusan}}</td>
                                                    <td>{{$dataDiri->ddua_tahun_lulus}}</td>
                                                    <td>{{$dataDiri->ddua_nilai_akhir}}</td>
                                                    <td>{{$dataDiri->ddua_berkas}}</td>
                                                </tr>
                                                @endif
                                                @if($dataDiri->dtiga !='')
                                                <tr>
                                                    <td>D3</td>
                                                    <td>{{$dataDiri->dtiga}}</td>
                                                    <td>{{$dataDiri->dtiga_jurusan}}</td>
                                                    <td>{{$dataDiri->dtiga_tahun_lulus}}</td>
                                                    <td>{{$dataDiri->dtiga_nilai_akhir}}</td>
                                                    <td>{{$dataDiri->dtiga_berkas}}</td>
                                                </tr>
                                                @endif
                                                @if($dataDiri->ssatu !='')
                                                <tr>
                                                    <td>S1</td>
                                                    <td>{{$dataDiri->ssatu}}</td>
                                                    <td>{{$dataDiri->ssatu_jurusan}}</td>
                                                    <td>{{$dataDiri->ssatu_tahun_lulus}}</td>
                                                    <td>{{$dataDiri->ssatu_nilai_akhir}}</td>
                                                    <td>{{$dataDiri->ssatu_berkas}}</td>
                                                </tr>
                                                @endif
                                                @if($dataDiri->sdua !='')
                                                <tr>
                                                    <td>S2</td>
                                                    <td>{{$dataDiri->sdua}}</td>
                                                    <td>{{$dataDiri->sdua_jurusan}}</td>
                                                    <td>{{$dataDiri->sdua_tahun_lulus}}</td>
                                                    <td>{{$dataDiri->sdua_nilai_akhir}}</td>
                                                    <td>{{$dataDiri->sdua_berkas}}</td>
                                                </tr>
                                                @endif
                                                @if($dataDiri->stiga !='')
                                                <tr>
                                                    <td>S3</td>
                                                    <td>{{$dataDiri->stiga}}</td>
                                                    <td>{{$dataDiri->stiga_jurusan}}</td>
                                                    <td>{{$dataDiri->stiga_tahun_lulus}}</td>
                                                    <td>{{$dataDiri->stiga_nilai_akhir}}</td>
                                                    <td>{{$dataDiri->stiga_berkas}}</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Bahasa Asing</h3>
                                    </div>
                                    <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Bahasa Asing</th>
                                            <th>Level</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $bahasaasing = explode(',', $dataDiri->bahasa_asing);
                                        @endphp
                                        @foreach($bahasaasing as $rowbahasaasing)
                                        @php
                                            $newbahasaasing = explode(' Level ', $rowbahasaasing);
                                        @endphp
                                        <tr>
                                            <td>{{$newbahasaasing[0]}}</td>
                                            <td>{{$newbahasaasing[1]}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-dark">
                                    <div class="card-header">
                                        <h3 class="card-title">Nonakademik</h3>
                                    </div>
                                    <div class="card-body">
                                    <table class="table table-bordered" id="tabelnonakademik">
                                        @php
                                        $nonakademik = DB::table('nonakademik')->where('user_id', $dataDiri->user_id)->get();
                                        @endphp
                                        @foreach($nonakademik as $rownonakademik)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{$rownonakademik->nonakademik_satu}}
                                                </td>
                                                <td>
                                                    {{$rownonakademik->nonakademik_dua }}
                                                </td>
                                                <td>
                                                    {{$rownonakademik->nonakademik_tiga}}
                                                </td>
                                                <td>
                                                    {{$rownonakademik->nonakademik_berkas}}
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
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
                            <div class="col-md-12">
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h3 class="card-title">Hasil Test</h3>
                                    </div>
                                    <div class="card-body">
                                    @php
                                        $hasil = DB::table('test')->where('id_user', $dataDiri->user_id)->get();
                                        @endphp
                                        <?php $no=1; ?>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tahapan</th>
                                                    <th>Nilai</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            @foreach($hasil as $rowhasil)
                                            <tbody>
                                                <tr>
                                                    <td>{{'Tahap ' . $no++}}</td>
                                                    <td>
                                                        @if($rowhasil->nilai != '')
                                                            {{$rowhasil->nilai}} 
                                                        @else
                                                            - 
                                                        @endif
                                                    </td>
                                                    <td>{{$rowhasil->status}}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
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
