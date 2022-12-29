<div class="box box-info padding-1">
    <div class="box-body">

        <input type="hidden" name="fk" id="fk" class="form-control" value="{{$dataDiri->fk}}">
        <input type="hidden" class="form-control" name="id" id="id" value="{{$dataDiri->idd}}">
        <div class="form-group">
            {{ Form::label('User') }}
            <select class="form-control" name="user_id" id="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}" @if($user->id == $dataDiri->user_id) selected @endif>{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('nama_lengkap') }}
            {{ Form::text('nama_lengkap', $dataDiri->nama_lengkap, ['class' => 'form-control' . ($errors->has('nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
            {!! $errors->first('nama_lengkap', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tempat_lahir') }}
            {{ Form::text('tempat_lahir', $dataDiri->tempat_lahir, ['class' => 'form-control' . ($errors->has('tempat_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
            {!! $errors->first('tempat_lahir', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tgl_lahir') }}
            <input class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{$dataDiri->tgl_lahir}}">
        </div>
        <div class="form-group">
            {{ Form::label('alamat') }}
            {{ Form::text('alamat', $dataDiri->alamat, ['class' => 'form-control' . ($errors->has('alamat') ? ' is-invalid' : ''), 'placeholder' => 'Alamat']) }}
            {!! $errors->first('alamat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_hp') }}
            {{ Form::text('no_hp', $dataDiri->no_hp, ['class' => 'form-control' . ($errors->has('no_hp') ? ' is-invalid' : ''), 'placeholder' => 'No Hp']) }}
            {!! $errors->first('no_hp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $dataDiri->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pendidikan Terakhir') }}
            <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" value="{{$dataDiri->pendidikan_terakhir}}" placeholder="Pendidikan Terakhir">
        </div>
        <div class="form-group">
            {{ Form::label('Asal Sekolah / Universitas') }}
            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" value="{{$dataDiri->asal_sekolah}}" placeholder="Asal Sekolah">
        </div>
        <div class="form-group">
            {{ Form::label('Jurusan / Program Studi') }}
            <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{$dataDiri->jurusan}}" placeholder="Jurusan">
        </div>
        <div class="form-group">
            {{ Form::label('Nilai Akhir / IPK') }}
            <input type="text" class="form-control" name="nilai_akhir" id="nilai_akhir" value="{{$dataDiri->nilai_akhir}}" placeholder="Nilai Akhir">
        </div>
        <div class="form-group">
            {{ Form::label('Surat Lamaran') }}
            <input type="file" class="form-control" name="surat_lamaran" id="surat_lamaran">
            <input type="hidden" name="surat_lamaran_old" class="form-control" id="surat_lamaran_old" value="{{$dataDiri->surat_lamaran}}">
        </div>
        <div class="form-group">
            {{ Form::label('Curriculum Vitae (CV)') }}
            <input type="file" class="form-control" name="cv" id="cv">
            <input type="hidden" name="cv_old" class="form-control" id="cv_old" value="{{$dataDiri->cv}}">
        </div>
        <div class="form-group">
            {{ Form::label('Pengalaman Kerja') }}
            <input type="file" class="form-control" name="pengalaman_kerja" id="pengalaman_kerja">
            <input type="hidden" name="pengalaman_kerja_old" class="form-control" id="pengalaman_kerja_old" value="{{$dataDiri->pengalaman_kerja}}">
        </div>
        <div class="form-group">
            {{ Form::label('Portofolio') }}
            <input type="file" class="form-control" name="portofolio" id="portofolio">
            <input type="hidden" name="portofolio_old" class="form-control" id="portofolio_old" value="{{$dataDiri->portofolio}}">
        </div>
        <div class="form-group">
            {{ Form::label('KK') }}
            <input type="file" class="form-control" name="kk" id="kk">
            <input type="hidden" name="kk_old" class="form-control" id="kk_old" value="{{$dataDiri->kk}}">
        </div>
        <div class="form-group">
            {{ Form::label('KTP') }}
            <input type="file" class="form-control" name="ktp" id="ktp">
            <input type="hidden" name="ktp_old" class="form-control" id="ktp_old" value="{{$dataDiri->ktp}}">
        </div>
        <div class="form-group">
            {{ Form::label('Ijazah Terakhir') }}
            <input type="file" class="form-control" name="ijazah_terakhir" id="ijazah_terakhir">
            <input type="hidden" name="ijazah_terakhir_old" class="form-control" id="ijazah_terakhir_old" value="{{$dataDiri->ijazah_terakhir}}">
        </div>
        <div class="form-group">
            {{ Form::label('Transkrip Nilai') }}
            <input type="file" class="form-control" name="transkrip_nilai" id="transkrip_nilai">
            <input type="hidden" name="transkrip_nilai_old" class="form-control" id="transkrip_nilai_old" value="{{$dataDiri->transkrip_nilai}}">
        </div>
        <div class="form-group">
            {{ Form::label('SKCK') }}
            <input type="file" class="form-control" name="skck" id="skck">
            <input type="hidden" name="skck_old" class="form-control" id="skck_old" value="{{$dataDiri->skck}}">
        </div>
        <div class="form-group">
            {{ Form::label('Foto Terbaru') }}
            <input type="file" class="form-control" name="foto" id="foto">
            <input type="hidden" name="foto_old" class="form-control" id="foto_old" value="{{$dataDiri->foto}}">
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>