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
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" required>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tgl Lahir</label>
                                        <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control" autocomplete="off" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" required>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">No. HP / WA</label>
                                        <input type="text" name="no_hp" class="form-control" required>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" readonly required>
                                    </div>
                                  </div>
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
                                                <input type="text" class="form-control" name="berat_badan" required>
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
                                        <div class="card">
                                          <div class="card-body">
                                            @php
                                              $jabatanygdilamar = Auth::user()->id_jabatan;
                                              $minimalpendidikan = DB::table('jabatan')->where('id', $jabatanygdilamar)->get('minimal_pendidikan');
                                              foreach($minimalpendidikan as $rowminimalpendidikan){
                                                if($rowminimalpendidikan->minimal_pendidikan == 'SD'){
                                                  $required = (int)'1';
                                                }else if($rowminimalpendidikan->minimal_pendidikan == 'SMP'){
                                                  $required = (int)'2';
                                                }else if($rowminimalpendidikan->minimal_pendidikan == 'SMA'){
                                                  $required = (int)'3';
                                                }else if($rowminimalpendidikan->minimal_pendidikan == 'D1'){
                                                  $required = (int)'4';
                                                }else if($rowminimalpendidikan->minimal_pendidikan == 'D2'){
                                                  $required = (int)'5';
                                                }else if($rowminimalpendidikan->minimal_pendidikan == 'D3'){
                                                  $required = (int)'6';
                                                }else if($rowminimalpendidikan->minimal_pendidikan == 'S1'){
                                                  $required = (int)'7';
                                                }else if($rowminimalpendidikan->minimal_pendidikan == 'S2'){
                                                  $required = (int)'8';
                                                }else if($rowminimalpendidikan->minimal_pendidikan == 'S3'){
                                                  $required = (int)'9';
                                                }else{
                                                  $required = (int)'0';
                                                }
                                              }
                                              
                                            @endphp
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">SD</label>
                                                  <input type="text" name="sd" class="form-control" @if($required >= 1) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="sd_tahun_lulus" class="form-control" @if($required >= 1) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="sd_nilai_akhir" class="form-control" @if($required >= 1) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="file" name="sd_berkas" class="form-control" @if($required >= 1) required @endif>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">SMP</label>
                                                  <input type="text" name="smp" class="form-control" @if($required >= 2) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="smp_tahun_lulus" class="form-control" @if($required >= 2) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="smp_nilai_akhir" class="form-control" @if($required >= 2) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="file" name="smp_berkas" class="form-control" @if($required >= 2) required @endif>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">SMA</label>
                                                  <input type="text" name="sma" class="form-control" @if($required >= 3) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="sma_jurusan" class="form-control" @if($required >= 3) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="sma_tahun_lulus" class="form-control" @if($required >= 3) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="sma_nilai_akhir" class="form-control" @if($required >= 3) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="file" name="sma_berkas" class="form-control" @if($required >= 3) required @endif>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">D1</label>
                                                  <input type="text" name="dsatu" class="form-control" @if($required >= 4) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="dsatu_jurusan" class="form-control" @if($required >= 4) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="dsatu_tahun_lulus" class="form-control" @if($required >= 4) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="dsatu_nilai_akhir" class="form-control" @if($required >= 4) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="file" name="dsatu_berkas" class="form-control" @if($required >= 4) required @endif>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">D2</label>
                                                  <input type="text" name="ddua" class="form-control" @if($required >= 5) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="ddua_jurusan" class="form-control" @if($required >= 5) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="ddua_tahun_lulus" class="form-control" @if($required >= 5) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="ddua_nilai_akhir" class="form-control" @if($required >= 5) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="file" name="ddua_berkas" class="form-control" @if($required >= 5) required @endif>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">D3</label>
                                                  <input type="text" name="dtiga" class="form-control" @if($required >= 6) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="dtiga_jurusan" class="form-control" @if($required >= 6) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="dtiga_tahun_lulus" class="form-control" @if($required >= 6) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="dtiga_nilai_akhir" class="form-control" @if($required >= 6) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="file" name="dtiga_berkas" class="form-control" @if($required >= 6) required @endif>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">S1</label>
                                                  <input type="text" name="ssatu" class="form-control" @if($required >= 7) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="ssatu_jurusan" class="form-control" @if($required >= 7) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="ssatu_tahun_lulus" class="form-control" @if($required >= 7) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="ssatu_nilai_akhir" class="form-control" @if($required >= 7) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="file" name="ssatu_berkas" class="form-control" @if($required >= 7) required @endif>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">S2</label>
                                                  <input type="text" name="sdua" class="form-control" @if($required >= 8) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="sdua_jurusan" class="form-control" @if($required >= 8) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="sdua_tahun_lulus" class="form-control" @if($required >= 8) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="sdua_nilai_akhir" class="form-control" @if($required >= 8) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="file" name="sdua_berkas" class="form-control" @if($required >= 8) required @endif>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">S3</label>
                                                  <input type="text" name="stiga" class="form-control" @if($required >= 9) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="stiga_jurusan" class="form-control" @if($required >= 9) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="stiga_tahun_lulus" class="form-control" @if($required >= 9) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="stiga_nilai_akhir" class="form-control" @if($required >= 9) required @endif>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="file" name="stiga_berkas" class="form-control" @if($required >= 9) required @endif>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="">Nonakademik</label>
                                                <table class="table table-bordered" id="tabelnonakademik">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                              <input type="text" class="form-control" name="nonakademik_satu[]">
                                                            </td>
                                                            <td>
                                                              <input type="text" class="form-control" name="nonakademik_dua[]">
                                                            </td>
                                                            <td>
                                                              <input type="text" class="form-control" name="nonakademik_tiga[]">
                                                            </td>
                                                            <td>
                                                              <select name="nonakademik_level[]" id="nonakademik_level[]" class="form-control">
                                                                <option value="Basic">Basic</option>
                                                                <option value="Intermediate">Intermediate</option>
                                                                <option value="Advance">Advance</option>
                                                              </select>
                                                            </td>
                                                            <td>
                                                              <input type="file" class="form-control" name="nonakademik_berkas[]">
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-sm float-right btn-info" id="add_tr"
                                                                type="button"><i class="fa fa-plus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                              <label for="">Bahasa Asing</label>
                                                <div class="form-row align-items-center">
                                                  <div class="col-auto my-1">
                                                    <div class="form-check">
                                                      <input class="form-check-input" name="bahasa_asing[]" type="checkbox" value="Inggris" id="Inggris">
                                                      <label class="form-check-label" for="Inggris">
                                                        Inggris
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-3 my-1" id="divinggris">
                                                    
                                                  </div>
                                                </div>
                                                <div class="form-row align-items-center">
                                                  <div class="col-auto my-1">
                                                    <div class="form-check">
                                                      <input class="form-check-input" name="bahasa_asing[]" type="checkbox" value="Mandarin" id="Mandarin">
                                                      <label class="form-check-label" for="Mandarin">
                                                          Mandarin
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-3 my-1" id="divmandarin">
                                                    
                                                  </div>
                                                </div>
                                                <div class="form-row align-items-center">
                                                  <div class="col-auto my-1">
                                                    <div class="form-check">
                                                      <input class="form-check-input" name="bahasa_asing[]" type="checkbox" value="Korea" id="Korea">
                                                      <label class="form-check-label" for="Korea">
                                                          Korea
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-3 my-1" id="divkorea">
                                                    
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="">Pengalaman Kerja</label>
                                                <table class="table table-bordered" id="tabelpengalamankerja">
                                                    <thead>
                                                      <tr>
                                                        <th>Nama Perusahaan</th>
                                                        <th>Jabatan</th>
                                                        <th>Lama Bekerja</th>
                                                        <th>Tahun</th>
                                                        <th>Berkas</th>
                                                        <th>#</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" name="nama_perusahaan[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="jabatan[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="lama_bekerja[]">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="tahun[]">
                                                            </td>
                                                            <td>
                                                                <input type="file" class="form-control" name="pengalaman_berkas[]">
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-sm float-right btn-info" id="add_tr2"
                                                                type="button"><i class="fa fa-plus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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
                                  <form method="POST" role="form" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="user" value="user" readonly>
                                    <div class="form-group">
                                        <!-- <label for="">Akun</label> -->
                                        <input type="hidden" class="form-control" name="akun" value="{{Auth::user()->name}}" readonly required>
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control" value="{{$data->nama_lengkap}}" readonly required>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" value="{{$data->tempat_lahir}}" readonly required>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tgl Lahir</label>
                                            <input type="text" id="" name="tgl_lahir" class="form-control" autocomplete="off" value="{{$data->tgl_lahir}}" readonly required>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" readonly required>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">No. HP / WA</label>
                                            <input type="text" name="no_hp" class="form-control" value="{{$data->no_hp}}" readonly required>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{$data->email}}" readonly required>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nikah</label>
                                        <select name="nikah" id="nikah" class="form-control" readonly>
                                            <option @if($data->nikah == 'Nikah') selected @endif>Nikah</option>
                                            <option @if($data->nikah == 'Belum') selected @endif>Belum</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Anak ke</label>
                                                <input type="text" name="anak_ke" class="form-control" value="{{$data->anak_ke}}" readonly required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Jumlah Saudara</label>
                                                <input type="text" name="jumlah_saudara" class="form-control" value="{{$data->jumlah_saudara}}" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Tinggi</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="tinggi" value="{{$data->tinggi}}" readonly required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">CM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Berat Badan</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="berat_badan" value="{{$data->berat_badan}}" readonly required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">KG</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Riwayat Penyakit</label>
                                        <select name="riwayat_penyakit" id="riwayat_penyakit" class="form-control" readonly>
                                            <option @if($data->riwayat_penyakit == 'Tidak Menular') selected @endif>Tidak Menular</option>
                                            <option @if($data->riwayat_penyakit == 'Menular') selected @endif>Menular</option>
                                        </select>
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

                                        <input type="hidden" name="user" value="user" readonly required>
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly required>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">SD</label>
                                                  <input type="text" name="sd" value="{{$data->sd}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="sd_tahun_lulus" value="{{$data->sd_tahun_lulus}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="sd_nilai_akhir" value="{{$data->sd_nilai_akhir}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="text" name="sd_berkas" value="{{$data->sd_berkas}}" class="form-control" readonly>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">SMP</label>
                                                  <input type="text" name="smp" value="{{$data->smp}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="smp_tahun_lulus" value="{{$data->smp_tahun_lulus}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="smp_nilai_akhir" value="{{$data->smp_nilai_akhir}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="text" name="smp_berkas" value="{{$data->smp_berkas}}" class="form-control" readonly>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">SMA</label>
                                                  <input type="text" name="sma" value="{{$data->sma}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="sma_jurusan" value="{{$data->sma_jurusan}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="sma_tahun_lulus" value="{{$data->sma_tahun_lulus}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="sma_nilai_akhir" value="{{$data->sma_nilai_akhir}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="text" name="sma_berkas" value="{{$data->sma_berkas}}" class="form-control" readonly>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">D1</label>
                                                  <input type="text" name="dsatu" value="{{$data->dsatu}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="dsatu_jurusan" value="{{$data->dsatu_jurusan}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="dsatu_tahun_lulus" value="{{$data->dsatu_tahun_lulus}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="dsatu_nilai_akhir" value="{{$data->dsatu_nilai_akhir}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="text" name="dsatu_berkas" value="{{$data->dsatu_berkas}}" class="form-control" readonly>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">D2</label>
                                                  <input type="text" name="ddua" value="{{$data->ddua}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="ddua_jurusan" value="{{$data->ddua_jurusan}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="ddua_tahun_lulus" value="{{$data->ddua_tahun_lulus}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="ddua_nilai_akhir" value="{{$data->ddua_nilai_akhir}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="text" name="ddua_berkas" value="{{$data->ddua_berkas}}" class="form-control" readonly>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">D3</label>
                                                  <input type="text" name="dtiga" value="{{$data->dtiga}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="dtiga_jurusan" value="{{$data->dtiga_jurusan}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="dtiga_tahun_lulus" value="{{$data->dtiga_tahun_lulus}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="dtiga_nilai_akhir" value="{{$data->dtiga_nilai_akhir}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="text" name="dtiga_berkas" value="{{$data->dtiga_berkas}}" class="form-control" readonly>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">S1</label>
                                                  <input type="text" name="ssatu" value="{{$data->ssatu}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="ssatu_jurusan" value="{{$data->ssatu_jurusan}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="ssatu_tahun_lulus" value="{{$data->ssatu_tahun_lulus}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="ssatu_nilai_akhir" value="{{$data->ssatu_nilai_akhir}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="text" name="ssatu_berkas" value="{{$data->ssatu_berkas}}" class="form-control" readonly>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">S2</label>
                                                  <input type="text" name="sdua" value="{{$data->sdua}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="sdua_jurusan" value="{{$data->sdua_jurusan}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="sdua_tahun_lulus" value="{{$data->sdua_tahun_lulus}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="sdua_nilai_akhir" value="{{$data->sdua_nilai_akhir}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="text" name="sdua_berkas" value="{{$data->sdua_berkas}}" class="form-control" readonly>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label for="">S3</label>
                                                  <input type="text" name="stiga" value="{{$data->stiga}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Jurusan</label>
                                                  <input type="text" name="stiga_jurusan" value="{{$data->stiga_jurusan}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Tahun Lulus</label>
                                                  <input type="text" name="stiga_tahun_lulus" value="{{$data->stiga_tahun_lulus}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Nilai Akhir</label>
                                                  <input type="text" name="stiga_nilai_akhir" value="{{$data->stiga_nilai_akhir}}" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                  <label for="">Berkas</label>
                                                  <input type="text" name="stiga_berkas" value="{{$data->stiga_berkas}}" class="form-control" readonly>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="">Nonakademik</label>
                                                <table class="table table-bordered" id="tabelnonakademik">
                                                  @php
                                                    $nonakademik = DB::table('nonakademik')->where('user_id', $data->user_id)->get();
                                                  @endphp
                                                  @foreach($nonakademik as $rownonakademik)
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" value="{{$rownonakademik->nonakademik_satu}}" name="nonakademik_satu[]" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" value="{{$rownonakademik->nonakademik_dua }}" name="nonakademik_dua[]" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" value="{{$rownonakademik->nonakademik_tiga}}" name="nonakademik_tiga[]" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" value="{{$rownonakademik->nonakademik_berkas}}" name="nonakademik_berkas[]" readonly>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                  @endforeach
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-body">
                                              <label for="">Bahasa Asing</label>
                                              <div class="form-check">
                                                  <input class="form-check-input" name="bahasa_asing" type="checkbox" value="Inggris" id="Inggris" @if($data->bahasa_asing == 'Inggris') checked @endif readonly>
                                                  <label class="form-check-label" for="Inggris">
                                                      Inggris
                                                  </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-check-input" name="bahasa_asing" type="checkbox" value="Mandarin" id="Mandarin" @if($data->bahasa_asing == 'Mandarin') checked @endif readonly>
                                                  <label class="form-check-label" for="Mandarin">
                                                      Mandarin
                                                  </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-check-input" name="bahasa_asing" type="checkbox" value="Korea" id="Korea" @if($data->bahasa_asing == 'Korea') checked @endif readonly>
                                                  <label class="form-check-label" for="Korea">
                                                      Korea
                                                  </label>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="">Pengalaman Kerja</label>
                                                <table class="table table-bordered" id="tabelpengalamankerja">
                                                    <thead>
                                                      <tr>
                                                        <th>Nama Perusahaan</th>
                                                        <th>Jabatan</th>
                                                        <th>Lama Bekerja</th>
                                                        <th>Tahun</th>
                                                        <th>Berkas</th>
                                                      </tr>
                                                    </thead>
                                                    @php
                                                      $pengalamankerja = DB::table('pengalaman_kerja')->where('user_id', $data->user_id)->get();
                                                    @endphp
                                                    @foreach($pengalamankerja as $rowpengalamankerja)
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" value="{{$rowpengalamankerja->nama_perusahaan}}" name="nama_perusahaan[]" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" value="{{$rowpengalamankerja->jabatan}}" name="jabatan[]" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" value="{{$rowpengalamankerja->lama_bekerja}}" name="lama_bekerja[]" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" value="{{$rowpengalamankerja->tahun}}" name="tahun[]" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" value="{{$rowpengalamankerja->pengalaman_berkas}}" name="pengalaman_berkas[]" readonly>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    @endforeach
                                                </table>
                                            </div>
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
                                  <form method="POST" action="{{ route('data-berkas.storeUser') }}" role="form" enctype="multipart/form-data">
                                  @csrf

                                  <input type="hidden" name="user" value="user" readonly required>
                                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}" readonly required>
                                  <div class="form-group">
                                      {{ Form::label('Surat Lamaran') }}
                                      <input type="text" class="form-control" name="surat_lamaran" id="surat_lamaran" value="{{$data->surat_lamaran}}" readonly required>
                                  </div>
                                  <div class="form-group">
                                      {{ Form::label('Curriculum Vitae (CV)') }}
                                      <input type="text" class="form-control" name="cv" id="cv" value="{{$data->cv}}" readonly required>
                                  </div>
                                  <div class="form-group">
                                      {{ Form::label('Pengalaman Kerja') }}
                                      <input type="text" class="form-control" name="pengalaman_kerja" id="pengalaman_kerja" value="{{$data->pengalaman_kerja}}" readonly required>
                                  </div>
                                  <div class="form-group">
                                      {{ Form::label('Portofolio') }}
                                      <input type="text" class="form-control" name="portofolio" id="portofolio" value="{{$data->portofolio}}" readonly required>
                                  </div>
                                  <div class="form-group">
                                      {{ Form::label('KK') }}
                                      <input type="text" class="form-control" name="kk" id="kk" value="{{$data->kk}}" readonly required>
                                  </div>
                                  <div class="form-group">
                                      {{ Form::label('KTP') }}
                                      <input type="text" class="form-control" name="ktp" id="ktp" value="{{$data->ktp}}" readonly required>
                                  </div>
                                  <div class="form-group">
                                      {{ Form::label('SKCK') }}
                                      <input type="text" class="form-control" name="skck" id="skck" value="{{$data->skck}}" readonly required>
                                  </div>
                                  <div class="form-group">
                                      {{ Form::label('Foto Terbaru') }}
                                      <input type="text" class="form-control" name="foto" id="foto" value="{{$data->foto}}" readonly required>
                                  </div>
                              </div>

                              <div class="card-footer text-right">
                                <button type="button" onclick="kembali_databerkas()" class="btn btn-danger float-left">Kembali</button>
                                <a href="{{url('/test')}}" class="btn btn-warning">Lanjut Test</a>
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
    <script>
        $('#add_tr').on('click', function (e) {
            var newRowContent =
                `<tr id="tr_` + ($("#tabelnonakademik > tbody > tr").length + 1) + `">` +
                `<td>` +
                    `<input type="text" class="form-control" name="nonakademik_satu[]">` +
                `</td>` +
                `<td>` +
                    `<input type="text" class="form-control" name="nonakademik_dua[]">` +
                `</td>` +
                `<td>` +
                    `<input type="text" class="form-control" name="nonakademik_tiga[]">` +
                `</td>` +
                `<td>` +
                  `<select name="nonakademik_level[]" id="nonakademik_level[]" class="form-control">` +
                    `<option value="Basic">Basic</option>` +
                    `<option value="Intermediate">Intermediate</option>` +
                    `<option value="Advance">Advance</option>` +
                  `</select>` +
                `</td>` +
                `<td>` +
                    `<input type="file" class="form-control" name="nonakademik_berkas[]">` +
                `</td>` +
                `<td class="text-center">` +
                `<button class="btn btn-sm btn-danger" onclick="deletetr(` + ($("#tabelnonakademik > tbody > tr").length + 1) + `)" type="button"><i class="fa fa-minus"></i></button>` +
                `</td>` +
                `</tr>`;
            $("#tabelnonakademik tbody").append(newRowContent);
        });
        function deletetr(id) {
            document.getElementById("tr_" + id).remove();
        }

        $('#add_tr2').on('click', function (e) {
            var newRowContent =
                `<tr id="tr2_` + ($("#tabelpengalamankerja > tbody > tr").length + 1) + `">` +
                `<td>` +
                    `<input type="text" class="form-control" name="nama_perusahaan[]">` +
                `</td>` +
                `<td>` +
                    `<input type="text" class="form-control" name="jabatan[]">` +
                `</td>` +
                `<td>` +
                    `<input type="text" class="form-control" name="lama_bekerja[]">` +
                `</td>` +
                `<td>` +
                    `<input type="text" class="form-control" name="tahun[]">` +
                `</td>` +
                `<td>` +
                    `<input type="file" class="form-control" name="pengalaman_berkas[]">` +
                `</td>` +
                `<td class="text-center">` +
                `<button class="btn btn-sm btn-danger" onclick="deletetr2(` + ($("#tabelpengalamankerja > tbody > tr").length + 1) + `)" type="button"><i class="fa fa-minus"></i></button>` +
                `</td>` +
                `</tr>`;
            $("#tabelpengalamankerja tbody").append(newRowContent);
        });
        function deletetr2(id) {
            document.getElementById("tr2_" + id).remove();
        }
    </script>
    <script>
      $('#Inggris').change(function(){
        if($(this).prop('checked')){
          var SelectInggris = 
          `<select name="level_bahasa_asing[]" id="inggris" class="form-control">` +
            `<option value="Basic">Basic</option>` +
            `<option value="Intermediate">Intermediate</option>` +
            `<option value="Advance">Advance</option>` +
          `</select>`;
          $('#divinggris').append(SelectInggris);
        }else{
          $('#inggris').remove();
        }
      });
      $('#Mandarin').change(function(){
        if($(this).prop('checked')){
          var SelectMandarin =
          `<select name="level_bahasa_asing[]" id="mandarin" class="form-control">` +
            `<option value="Basic">Basic</option>` +
            `<option value="Intermediate">Intermediate</option>` +
            `<option value="Advance">Advance</option>` +
          `</select>`;
          $('#divmandarin').append(SelectMandarin);
        }else{
          $('#mandarin').remove();
        }
      });
      $('#Korea').change(function(){
        if($(this).prop('checked')){
          var SelectKorea =
          `<select name="level_bahasa_asing[]" id="korea" class="form-control">` +
            `<option value="Basic">Basic</option>` +
            `<option value="Intermediate">Intermediate</option>` +
            `<option value="Advance">Advance</option>` +
          `</select>`;
          $('#divkorea').append(SelectKorea);
        }else{
          $('#korea').remove();
        }
      });
    </script>
@endpush
