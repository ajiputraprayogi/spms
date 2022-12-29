@extends('layouts.app')

@section('template_title')
    Upload Berkas
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
                                {{ __('Upload Berkas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('upload-berkas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                            <a href="{{ route('upload-berkas.index') }}" class="btn btn-secondary btn-flat">Reset</a>
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
										<th>Surat Lamaran</th>
										<th>Cv</th>
										<th>Pengalaman Kerja</th>
										<th>Portofolio</th>
										<th>Ktp</th>
										<th>Kk</th>
										<th>Ijazah Terakhir</th>
										<th>Transkrip Nilai</th>
										<th>Skck</th>
										<th>Foto</th>

                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($uploadBerkass as $uploadBerkas)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $uploadBerkas->user_id }}</td>
											<td>{{ $uploadBerkas->surat_lamaran }}</td>
											<td>{{ $uploadBerkas->cv }}</td>
											<td>{{ $uploadBerkas->pengalaman_kerja }}</td>
											<td>{{ $uploadBerkas->portofolio }}</td>
											<td>{{ $uploadBerkas->ktp }}</td>
											<td>{{ $uploadBerkas->kk }}</td>
											<td>{{ $uploadBerkas->ijazah_terakhir }}</td>
											<td>{{ $uploadBerkas->transkrip_nilai }}</td>
											<td>{{ $uploadBerkas->skck }}</td>
											<td>{{ $uploadBerkas->foto }}</td>

                                            <td class="text-center">
                                                <form action="{{ route('upload-berkas.destroy',$uploadBerkas->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('upload-berkas.show',$uploadBerkas->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('upload-berkas.edit',$uploadBerkas->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $uploadBerkass->links() !!}
            </div>
        </div>
    </div>
@endsection
