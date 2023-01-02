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
                                    <div class="card-header">
                                        Soal ABC
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <input type="hidden" name="id_soal[{{$rowsoaljenis->id}}]" value="{{$rowsoaljenis->id}}">
                                            <input type="hidden" name="tipe_soal[{{$rowsoaljenis->id}}]" id="tipe_soal" value="Abc" class="form-control">
                                            <div class="col-md-12">
                                                <label for="">Soal {{$no++}}</label>
                                                <textarea name="soal[{{$rowsoaljenis->id}}]" id="soal" rows="2" class="form-control">{{$rowsoaljenis->soal}}</textarea>
                                            </div><br>
                                            <div class="col-md-6">
                                                <label for="">A.</label>
                                                <textarea name="a[{{$rowsoaljenis->id}}]" id="a" rows="1" class="form-control">{{$rowsoaljenis->a}}</textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">B.</label>
                                                <textarea name="b[{{$rowsoaljenis->id}}]" id="b" rows="1" class="form-control">{{$rowsoaljenis->b}}</textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">C.</label>
                                                <textarea name="c[{{$rowsoaljenis->id}}]" id="c" rows="1" class="form-control">{{$rowsoaljenis->c}}</textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">D.</label>
                                                <textarea name="d[{{$rowsoaljenis->id}}]" id="d" rows="1" class="form-control">{{$rowsoaljenis->d}}</textarea>
                                            </div>
                                            <div class="col-md-12"><br>
                                                <p style="margin-bottom:2px;">Jawaban :</p>
                                            </div>
                                            <div class="col-md-1">
                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="a[{{$rowsoaljenis->id}}]" value="A" @if($rowsoaljenis->jawaban == 'A') checked @endif>
                                                <label for="a[{{$rowsoaljenis->id}}]">A</label>
                                            </div>
                                            <div class="col-md-1">
                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="b[{{$rowsoaljenis->id}}]" value="B" @if($rowsoaljenis->jawaban == 'B') checked @endif>
                                                <label for="b[{{$rowsoaljenis->id}}]">B</label>
                                            </div>
                                            <div class="col-md-1">
                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="c[{{$rowsoaljenis->id}}]" value="C" @if($rowsoaljenis->jawaban == 'C') checked @endif>
                                                <label for="c[{{$rowsoaljenis->id}}]">C</label>
                                            </div>
                                            <div class="col-md-1">
                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="d[{{$rowsoaljenis->id}}]" value="D" @if($rowsoaljenis->jawaban == 'D') checked @endif>
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
                                    <div class="card-header">
                                        Soal Ya/Tidak
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <input type="hidden" name="id_soal[{{$rowsoaljenis->id}}]" value="{{$rowsoaljenis->id}}">
                                            <input type="hidden" name="tipe_soal[{{$rowsoaljenis->id}}]" id="tipe_soal" value="YaTidak" class="form-control">
                                            <div class="col-md-12">
                                                <label for="">Soal {{$no++}}</label>
                                                <textarea name="soal[{{$rowsoaljenis->id}}]" id="soal[{{$rowsoaljenis->id}}]" rows="2" class="form-control">{{$rowsoaljenis->soal}}</textarea>
                                            </div><br>
                                            <div class="col-md-12"><br>
                                                <p style="margin-bottom:2px;">Jawaban :</p>
                                            </div>
                                            <div class="col-md-1">
                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="ya[{{$rowsoaljenis->id}}]" value="Ya" @if($rowsoaljenis->jawaban == 'Ya') checked @endif>
                                                <label for="ya[{{$rowsoaljenis->id}}]">Ya</label>
                                            </div>
                                            <div class="col-md-1">
                                                <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="tidak[{{$rowsoaljenis->id}}]" value="Tidak" @if($rowsoaljenis->jawaban == 'Tidak') checked @endif>
                                                <label for="tidak[{{$rowsoaljenis->id}}]">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            @endforeach
                        </div>
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
