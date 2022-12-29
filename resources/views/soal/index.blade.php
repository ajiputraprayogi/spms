@extends('layouts.app')

@section('template_title')
    Soal
@endsection

@section('content')
    <div class="container-fluid">
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
                                {{ __('Soal') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('soal.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                            <a href="{{ route('soal.index') }}" class="btn btn-secondary btn-flat">Reset</a>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            @if($cari != '')
                            <p>Search jenis soal <b>"{{$cari}}"</b></p>
                            @endif
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Jenis Soal</th>
										<th>Jumlah Soal ABC</th>
										<th>Jumlah Soal Ya/Tidak</th>
										<th>Status</th>
                                        <th>Minimal Score</th>

                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($soals as $soal)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $soal->jenis_soal }}</td>
											<td>{{ $soal->jumlah_soal_abc }}</td>
											<td>{{ $soal->jumlah_soal_yt }}</td>
											<td>{{ $soal->status }}</td>
											<td>{{ $soal->minimal_score }}</td>

                                            <td class="text-center">
                                                <form action="{{ route('soal.destroy',$soal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('soal.show',$soal->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('soal.edit',$soal->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $soals->links() !!}
            </div>
        </div>
    </div>
@endsection
