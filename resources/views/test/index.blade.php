@extends('layouts.appUser')

@section('template_title')
    Test
@endsection

@section('content')
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
        @php
        $cek = DB::table('test')->where('id_user', Auth::user()->id)->get();
        if(count($cek) == 0){
            $test = DB::table('soal')->inRandomOrder()->groupby('jenis_soal')->limit(4)->get();
            foreach($test as $rowtest){
                DB::table('test')->insert([
                    'id_user' => Auth::user()->id,
                    'jenis_soal' => $rowtest->jenis_soal,
                    'status' => 'Belum'
                ]);
            }
            header("Refresh:0");
        }else{

        }
        @endphp
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('test.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                @php
                                    $ceksoal = DB::table('test')->where([['id_user', Auth::user()->id],['status','Belum']])->first();
                                    $tahap = DB::table('test')->where([['id_user', Auth::user()->id],['status','!=','Belum']])->count();
                                @endphp
                                @if(!empty($ceksoal))
                                    <h5 class="text-bold">Tahap {{$tahap+1}}</h5>
                                    <div class="box box-info padding-1">
                                        <div class="box-body">
                                            @foreach($tests as $rowtests)
                                                @php
                                                    $soaljenis = DB::table('soal')->where('jenis_soal', $rowtests->jenis_soal)->get();
                                                    foreach($soaljenis as $rowsoaljenis){
                                                        $jumlahsoalabc = $rowsoaljenis->jumlah_soal_abc;
                                                    }
                                                @endphp
                                                <?php $no = 1; ?>

                                                @foreach($soaljenis as $rowsoaljenis)
                                                @if($rowsoaljenis->tipe_soal == 'Abc')
                                                <div class="card card-primary">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <input type="hidden" name="id_soal[{{$rowsoaljenis->id}}]" value="{{$rowsoaljenis->id}}">
                                                            <input type="hidden" name="tipe_soal[{{$rowsoaljenis->id}}]" id="tipe_soal" value="Abc" class="form-control">
                                                            <div class="col-md-12">
                                                                <p name="soal[{{$rowsoaljenis->id}}]" id="soal">{{$no++}}. {{$rowsoaljenis->soal}}</p>
                                                            </div><br>
                                                            <div class="col-md-6">
                                                                <p name="a[{{$rowsoaljenis->id}}]" id="a">A. {{$rowsoaljenis->a}}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p name="b[{{$rowsoaljenis->id}}]" id="b">B. {{$rowsoaljenis->b}}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p name="c[{{$rowsoaljenis->id}}]" id="c">C. {{$rowsoaljenis->c}}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p name="d[{{$rowsoaljenis->id}}]" id="d">D. {{$rowsoaljenis->d}}</p>
                                                            </div>
                                                            <div class="col-md-12"><br>
                                                                <p style="margin-bottom:2px;">Jawab :</p>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="a[{{$rowsoaljenis->id}}]" value="A">
                                                                <label for="a[{{$rowsoaljenis->id}}]">A</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="b[{{$rowsoaljenis->id}}]" value="B">
                                                                <label for="b[{{$rowsoaljenis->id}}]">B</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="c[{{$rowsoaljenis->id}}]" value="C">
                                                                <label for="c[{{$rowsoaljenis->id}}]">C</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="d[{{$rowsoaljenis->id}}]" value="D">
                                                                <label for="d[{{$rowsoaljenis->id}}]">D</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach


                                                @foreach($soaljenis as $rowsoaljenis)
                                                @if($rowsoaljenis->tipe_soal == 'YaTidak')
                                                <div class="card card-warning">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <input type="hidden" name="id_soal[{{$rowsoaljenis->id}}]" value="{{$rowsoaljenis->id}}">
                                                            <input type="hidden" name="tipe_soal[{{$rowsoaljenis->id}}]" id="tipe_soal" value="YaTidak" class="form-control">
                                                            <div class="col-md-12">
                                                                <p name="soal[{{$rowsoaljenis->id}}]" id="soal[{{$rowsoaljenis->id}}]">{{$no++}}. {{$rowsoaljenis->soal}}</p>
                                                            </div><br>
                                                            <div class="col-md-12"><br>
                                                                <p style="margin-bottom:2px;">Jawab :</p>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="ya[{{$rowsoaljenis->id}}]" value="Ya">
                                                                <label for="ya[{{$rowsoaljenis->id}}]">Ya</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="tidak[{{$rowsoaljenis->id}}]" value="Tidak">
                                                                <label for="tidak[{{$rowsoaljenis->id}}]">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                        <div class="box-footer mt20">
                                            <button id="btn_simpan" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                @else
                                    <div class="box">
                                        @php
                                        $hasil = DB::table('test')->where('id_user', Auth::user()->id)->get();
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
                                                    <td>{{$no++}}</td>
                                                    <td>{{$rowhasil->nilai}}</td>
                                                    <td>{{$rowhasil->status}}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                @endif

                            </form>
                        </div>
                        <p id="demo"></p>
                    </div>
                </div>
            </div>
        </div>
    <!-- <div class="container-fluid">
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ $message }}
                    </div>
                </div>
            @endif
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Test') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('test.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <form method="get">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="search" class="form-control">
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-info btn-flat">Search</button>
                                            <a href="{{ route('test.index') }}" class="btn btn-secondary btn-flat">Reset</a>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Id User</th>
										<th>Jenis Soal</th>
										<th>Status</th>

                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tests as $test)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $test->id_user }}</td>
											<td>{{ $test->jenis_soal }}</td>
											<td>{{ $test->status }}</td>

                                            <td class="text-center">
                                                <form action="{{ route('test.destroy',$test->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('test.show',$test->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('test.edit',$test->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tests->links() !!}
            </div>
        </div>
    </div> -->
@endsection
<script>
    // Mengatur waktu akhir perhitungan mundur
    var countDownDate = new Date(new Date().setMinutes(new Date().getMinutes() + 1));

    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {

      // Untuk mendapatkan tanggal dan waktu hari ini
      var now = new Date().getTime();

      // Temukan jarak antara sekarang dan tanggal hitung mundur
      var distance = countDownDate - now;

      // Perhitungan waktu untuk hari, jam, menit dan detik
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Keluarkan hasil dalam elemen dengan id = "demo"
      document.getElementById("demo").innerHTML = hours + "h "
      + minutes + "m " + seconds + "s ";

      // Jika hitungan mundur selesai, tulis beberapa teks
      if (distance < 0) {
        document.getElementById("btn_simpan").click();
      }
    }, 1000);
    </script>
