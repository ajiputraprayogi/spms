@extends('layouts.appUser')

@section('css')
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('assets/plugins/datepicker/css/datepicker.css')}}">
<style>
    @-webkit-keyframes myanimation {
  from {
    left: 0%;
  }
  to {
    left: 50%;
  }
}
h1 {
  text-align: center;
  font-family: "PT Sans Caption", sans-serif;
  font-weight: 400;
  font-size: 30px;
  padding: 20px 0;
  color: #777;
}

.checkout-wrap {
  color: #444;
  font-family: "PT Sans Caption", sans-serif;
  margin: 40px auto;
  max-width: 1200px;
  position: relative;
}

ul.checkout-bar {
  margin: 0 20px;
}
ul.checkout-bar li {
  color: #ccc;
  display: block;
  font-size: 16px;
  font-weight: 600;
  padding: 14px 20px 14px 80px;
  position: relative;
}
ul.checkout-bar li:before {
  -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
  box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
  background: #ddd;
  border: 2px solid #fff;
  border-radius: 50%;
  color: #fff;
  font-size: 16px;
  font-weight: 700;
  left: 20px;
  line-height: 37px;
  height: 35px;
  position: absolute;
  text-align: center;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
  top: 4px;
  width: 35px;
  z-index: 999;
}
ul.checkout-bar li.active {
  color: #8bc53f;
  font-weight: bold;
}
ul.checkout-bar li.active:before {
  background: #8bc53f;
  z-index: 99999;
}
ul.checkout-bar li.visited {
  background: #ececec;
  color: #57aed1;
  z-index: 99999;
}
ul.checkout-bar li.visited:before {
  background: #57aed1;
  z-index: 99999;
}
ul.checkout-bar li:nth-child(1):before {
  content: "1";
}
ul.checkout-bar li:nth-child(2):before {
  content: "2";
}
ul.checkout-bar li:nth-child(3):before {
  content: "3";
}
ul.checkout-bar li:nth-child(4):before {
  content: "4";
}
ul.checkout-bar li:nth-child(5):before {
  content: "5";
}
ul.checkout-bar li:nth-child(6):before {
  content: "6";
}
ul.checkout-bar a {
  color: #57aed1;
  font-size: 16px;
  font-weight: 600;
  text-decoration: none;
}

@media all and (min-width: 800px) {
  .checkout-bar li.active:after {
    -webkit-animation: myanimation 3s 0;
    background-size: 35px 35px;
    background-color: #8bc53f;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    content: "";
    height: 15px;
    width: 100%;
    left: 50%;
    position: absolute;
    top: -50px;
    z-index: 0;
  }

  .checkout-wrap {
    margin: 80px auto;
  }

  ul.checkout-bar {
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    background-size: 35px 35px;
    background-color: #ececec;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
    border-radius: 15px;
    height: 15px;
    margin: 0 auto;
    padding: 0;
    position: absolute;
    width: 100%;
  }
  ul.checkout-bar:before {
    background-size: 35px 35px;
    background-color: #57aed1;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    content: " ";
    height: 15px;
    left: 0;
    position: absolute;
    width: 10%;
  }
  ul.checkout-bar li {
    display: inline-block;
    margin: 50px 0 0;
    padding: 0;
    text-align: center;
    width: 19%;
  }
  ul.checkout-bar li:before {
    height: 45px;
    left: 40%;
    line-height: 45px;
    position: absolute;
    top: -65px;
    width: 45px;
    z-index: 99;
  }
  ul.checkout-bar li.visited {
    background: none;
  }
  ul.checkout-bar li.visited:after {
    background-size: 35px 35px;
    background-color: #57aed1;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    content: "";
    height: 15px;
    left: 50%;
    position: absolute;
    top: -50px;
    width: 100%;
    z-index: 99;
  }
}

</style>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @if (session('status'))
                    <div class="col-lg-12 mt-2">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4>Info!</h4>
                            {{ session('status') }}
                        </div>
                    </div>
                @endif
                @php
                  $iduser = Auth::user()->id;
                  $datadiri = DB::table('data_diri')->where('user_id', $iduser)->count();
                  $datapendidikan = DB::table('data_pendidikan')->where('user_id', $iduser)->count();
                  $databerkas = DB::table('upload_berkas')->where('user_id', $iduser)->count();
                @endphp
                @if(!$datadiri > 0 && !$datapendidikan > 0 && !$databerkas > 0)
                <div class="col-md-12">
                    <! -- To test add 'active' class and 'visited' class to different li elements -->

                  <div class="checkout-wrap mt-0">
                    <ul class="checkout-bar">

                      <li class="previus visited">Register & Login</li>

                      <li class="active">Data Diri</li>

                      <li class="next">Data Pendidikan</li>

                      <li class="">Upload Berkas</li>

                      <li class="">Complete</li>

                    </ul>
                  </div>
                </div>
                <div class="col-md-12 mt-4">
                  <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                      <div class="card card-secondary">
                          <div class="card-header">
                              <h3 class="card-title">
                                  Input Data Diri
                              </h3>
                          </div>
                          <div class="card-body">
                            <form method="POST" action="{{ route('data-diri.storeUser') }}" role="form" enctype="multipart/form-data">
                                  @csrf

                                <input type="hidden" name="user" value="user" readonly>
                                <div class="form-group">
                                    <!-- <label for="">Akun</label> -->
                                    <input type="hidden" class="form-control" name="akun" value="{{Auth::user()->name}}" readonly required>
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" value="{{Auth::user()->name}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tgl Lahir</label>
                                    <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">No. HP / WA</label>
                                    <input type="text" name="no_hp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nikah</label>
                                    <select name="nikah" id="nikah" class="form-control">
                                        <option>Nikah</option>
                                        <option>Belum</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Anak ke</label>
                                            <input type="text" name="anak_ke" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Jumlah Saudara</label>
                                            <input type="text" name="jumlah_saudara" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Tinggi</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="tinggi" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">CM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Berat Badan</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="tinggi" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">KG</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Riwayat Penyakit</label>
                                    <select name="riwayat_penyakit" id="riwayat_penyakit" class="form-control">
                                        <option>Tidak Menular</option>
                                        <option>Menular</option>
                                    </select>
                                </div>
                              </div>

                              <div class="card-footer text-right">
                                  <button type="submit" class="btn btn-primary">Simpan & lanjut</button>
                              </div>
                            </form>
                      </div>
                    </div>
                    <div class="col-md-1"></div>
                  </div>
                </div>
                @endif
                @if($datadiri > 0 && !$datapendidikan > 0 && !$databerkas > 0)
                <div class="col-md-12">
                    <! -- To test add 'active' class and 'visited' class to different li elements -->

                  <div class="checkout-wrap mt-0">
                    <ul class="checkout-bar">

                      <li class="previus visited">Register & Login</li>

                      <li class="previous visited">Data Diri</li>

                      <li class="active">Data Pendidikan</li>

                      <li class="next">Upload Berkas</li>

                      <li class="">Complete</li>

                    </ul>
                  </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Input Data Pendidikan
                                    </h3>
                                </div>
                                <div class="card-body">
                                  <form method="POST" action="{{ route('data-pendidikan.storeUser') }}" role="form" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="user" value="user" readonly required>
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly required>
                                        <div class="form-group">
                                            {{ Form::label('Pendidikan Terakhir') }}
                                            <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Asal Sekolah / Universitas') }}
                                            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" required>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Jurusan / Program Studi') }}
                                            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" required>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Nilai Akhir / IPK') }}
                                            <input type="text" class="form-control" name="nilai_akhir" id="nilai_akhir" placeholder="Nilai Akhir" required>
                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Simpan & lanjut</button>
                                    </div>
                                  </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                @endif
                @if($datadiri > 0 && $datapendidikan > 0 && !$databerkas > 0)
                <div class="col-md-12">
                    <! -- To test add 'active' class and 'visited' class to different li elements -->

                  <div class="checkout-wrap mt-0">
                    <ul class="checkout-bar">

                      <li class="previus visited">Register & Login</li>

                      <li class="previous visited">Data Diri</li>

                      <li class="previous visited">Data Pendidikan</li>

                      <li class="active">Upload Berkas</li>

                      <li class="next">Complete</li>

                    </ul>
                  </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Input Data Berkas
                            </h3>
                        </div>
                        <div class="card-body">
                          <form method="POST" action="{{ route('data-berkas.storeUser') }}" role="form" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="user" value="user" readonly required>
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly required>
                                <div class="form-group">
                                    {{ Form::label('Surat Lamaran') }}
                                    <input type="file" class="form-control" name="surat_lamaran" id="surat_lamaran" required>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Curriculum Vitae (CV)') }}
                                    <input type="file" class="form-control" name="cv" id="cv" required>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Pengalaman Kerja') }}
                                    <input type="file" class="form-control" name="pengalaman_kerja" id="pengalaman_kerja" required>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Portofolio') }}
                                    <input type="file" class="form-control" name="portofolio" id="portofolio" required>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('KK') }}
                                    <input type="file" class="form-control" name="kk" id="kk" required>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('KTP') }}
                                    <input type="file" class="form-control" name="ktp" id="ktp" required>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Ijazah Terakhir') }}
                                    <input type="file" class="form-control" name="ijazah_terakhir" id="ijazah_terakhir" required>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Transkrip Nilai') }}
                                    <input type="file" class="form-control" name="transkrip_nilai" id="transkrip_nilai" required>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('SKCK') }}
                                    <input type="file" class="form-control" name="skck" id="skck" required>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Foto Terbaru') }}
                                    <input type="file" class="form-control" name="foto" id="foto" required>
                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Simpan & lanjut</button>
                            </div>
                          </form>
                    </div>
                </div>
                @endif
                @if($databerkas > 0 && $datapendidikan > 0 && $databerkas > 0)
                @section('menu')
                <li class="nav-item">
                    <a href="{{ url('/test') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Test Soal
                        </p>
                    </a>
                </li>
                @endsection
                <div class="col-md-12">
                    <! -- To test add 'active' class and 'visited' class to different li elements -->

                  <div class="checkout-wrap mt-0">
                    <ul class="checkout-bar">

                      <li class="previus visited">Register & Login</li>

                      <li class="previous visited">Data Diri</li>

                      <li class="previous visited">Data Pendidikan</li>

                      <li class="previous visited">Upload Berkas</li>

                      <li class="active">Complete</li>

                    </ul>

                  </div>
                </div>
                @php
                  $data = DB::table('data_diri')
                  ->leftjoin('data_pendidikan','data_pendidikan.fk','=','data_diri.fk')
                  ->leftjoin('upload_berkas','upload_berkas.fk','=','data_diri.fk')
                  ->where('data_diri.user_id', Auth::user()->id)
                  ->first();
                @endphp
                <div class="col-md-12 mt-4" id="data_diri" style="display:none">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Data Diri
                                    </h3>
                                </div>
                                <div class="card-body">
                                  <form method="POST" action="" role="form" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="user" value="user" readonly>
                                        <div class="form-group">
                                            <label for="">Akun</label>
                                            <input type="text" class="form-control" name="akun" value="{{Auth::user()->name}}" readonly>
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" class="form-control" value="{{$data->nama_lengkap}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" value="{{$data->tempat_lahir}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tgl Lahir</label>
                                            <input type="text" id="" name="tgl_lahir" class="form-control" value="{{$data->tgl_lahir}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">No. HP / WA</label>
                                            <input type="text" name="no_hp" class="form-control" value="{{$data->no_hp}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{$data->email}}" readonly>
                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <button type="button" onclick="lanjut_datadiri()" class="btn btn-primary">Lanjut</button>
                                    </div>
                                  </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-12 mt-4" id="data_pendidikan" style="display:none">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Data Pendidikan
                                    </h3>
                                </div>
                                <div class="card-body">
                                  <form method="POST" action="" role="form" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="user" value="user" readonly>
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly>
                                        <div class="form-group">
                                            {{ Form::label('Pendidikan Terakhir') }}
                                            <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" value="{{$data->pendidikan_terakhir}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Asal Sekolah / Universitas') }}
                                            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" value="{{$data->asal_sekolah}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Jurusan / Program Studi') }}
                                            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="{{$data->jurusan}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Nilai Akhir / IPK') }}
                                            <input type="text" class="form-control" name="nilai_akhir" id="nilai_akhir" placeholder="Nilai Akhir" value="{{$data->nilai_akhir}}" readonly>
                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <button type="button" onclick="kembali_datapendidikan()" class="btn btn-danger float-left">Kembali</button>
                                        <button type="button" onclick="lanjut_datapendidikan()" class="btn btn-primary">Lanjut</button>
                                    </div>
                                  </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-12 mt-4" id="data_berkas" style="display:show">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Data Berkas
                                    </h3>
                                </div>
                                <div class="card-body">
                                  <form method="POST" action="" role="form" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="user" value="user" readonly>
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly>
                                        <div class="form-group">
                                            {{ Form::label('Surat Lamaran') }}
                                            <input type="text" class="form-control" name="surat_lamaran" id="surat_lamaran" value="{{$data->surat_lamaran}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Curriculum Vitae (CV)') }}
                                            <input type="text" class="form-control" name="cv" id="cv" value="{{$data->cv}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Pengalaman Kerja') }}
                                            <input type="text" class="form-control" name="pengalaman_kerja" id="pengalaman_kerja" value="{{$data->pengalaman_kerja}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Portofolio') }}
                                            <input type="text" class="form-control" name="portofolio" id="portofolio" value="{{$data->portofolio}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('KK') }}
                                            <input type="text" class="form-control" name="kk" id="kk" value="{{$data->kk}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('KTP') }}
                                            <input type="text" class="form-control" name="ktp" id="ktp" value="{{$data->ktp}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Ijazah Terakhir') }}
                                            <input type="text" class="form-control" name="ijazah_terakhir" id="ijazah_terakhir" value="{{$data->ijazah_terakhir}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Transkrip Nilai') }}
                                            <input type="text" class="form-control" name="transkrip_nilai" id="transkrip_nilai" value="{{$data->transkrip_nilai}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('SKCK') }}
                                            <input type="text" class="form-control" name="skck" id="skck" value="{{$data->skck}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Foto Terbaru') }}
                                            <input type="text" class="form-control" name="foto" id="foto" value="{{$data->foto}}" readonly>
                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <button type="button" onclick="kembali_databerkas()" class="btn btn-danger float-left">Kembali</button>
                                    </div>
                                  </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                @endif
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
    <script>
      function lanjut_datadiri(){
        $('#data_diri').hide();
        $('#data_pendidikan').show();
      }

      function lanjut_datapendidikan(){
        $('#data_pendidikan').hide();
        $('#data_berkas').show();
      }

      function kembali_datapendidikan(){
        $('#data_pendidikan').hide();
        $('#data_diri').show();
      }

      function kembali_databerkas(){
        $('#data_berkas').hide();
        $('#data_pendidikan').show();
      }
    </script>
@endpush
