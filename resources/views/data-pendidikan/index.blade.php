@extends('layouts.app')

@section('template_title')
    Data Pendidikan
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
                                {{ __('Data Pendidikan') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('data-pendidikan.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                            <a href="{{ route('data-pendidikan.index') }}" class="btn btn-secondary btn-flat">Reset</a>
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
                                        
										<th>User Id</th>
										<th>Pendidikan Terakhir</th>
										<th>Asal Sekolah</th>
										<th>Jurusan</th>
										<th>Nilai Akhir</th>

                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataPendidikans as $dataPendidikan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dataPendidikan->user_id }}</td>
											<td>{{ $dataPendidikan->pendidikan_terakhir }}</td>
											<td>{{ $dataPendidikan->asal_sekolah }}</td>
											<td>{{ $dataPendidikan->jurusan }}</td>
											<td>{{ $dataPendidikan->nilai_akhir }}</td>

                                            <td class="text-center">
                                                <form action="{{ route('data-pendidikan.destroy',$dataPendidikan->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('data-pendidikan.show',$dataPendidikan->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('data-pendidikan.edit',$dataPendidikan->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $dataPendidikans->links() !!}
            </div>
        </div>
    </div>
@endsection
