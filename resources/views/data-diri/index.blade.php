@extends('layouts.app')

@section('template_title')
    Data Pelamar
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
                                {{ __('Data Pelamar') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('data-diri.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                            <a href="{{ route('data-diri.index') }}" class="btn btn-secondary btn-flat">Reset</a>
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
										<th>Nama Lengkap</th>
										<th>Tempat Lahir</th>
										<th>Tgl Lahir</th>
										<th>Alamat</th>
										<th>No Hp</th>
										<th>Email</th>

                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataDiris as $dataDiri)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dataDiri->user_id }}</td>
											<td>{{ $dataDiri->nama_lengkap }}</td>
											<td>{{ $dataDiri->tempat_lahir }}</td>
											<td>{{ $dataDiri->tgl_lahir }}</td>
											<td>{{ $dataDiri->alamat }}</td>
											<td>{{ $dataDiri->no_hp }}</td>
											<td>{{ $dataDiri->email }}</td>

                                            <td class="text-center">
                                                <form action="{{ route('data-diri.destroy',$dataDiri->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('data-diri.show',$dataDiri->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <!-- <a class="btn btn-sm btn-success" href="{{ route('data-diri.edit',$dataDiri->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> -->
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
                {!! $dataDiris->links() !!}
            </div>
        </div>
    </div>
@endsection

