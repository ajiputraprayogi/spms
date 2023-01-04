<div class="box box-info padding-1">
    <div class="box-body">

        <input type="hidden" name="fk" id="fk" class="form-control" value="{{$finalkode}}">
        <div class="form-group">
            {{ Form::label('User') }}
            <select class="form-control" name="user_id" id="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
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
            <!-- <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="{{date('d-m-Y', strtotime($user->from_date))}}"> -->
            <!-- <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div> -->
            <input class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="{{date('d-m-Y')}}" autocomplete="off">
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
            <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir">
        </div>
        <div class="form-group">
            {{ Form::label('Asal Sekolah / Universitas') }}
            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah">
        </div>
        <div class="form-group">
            {{ Form::label('Jurusan / Program Studi') }}
            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan">
        </div>
        <div class="form-group">
            {{ Form::label('Nilai Akhir / IPK') }}
            <input type="text" class="form-control" name="nilai_akhir" id="nilai_akhir" placeholder="Nilai Akhir">
        </div>
        <div class="form-group">
            {{ Form::label('Surat Lamaran') }}
            <input type="file" class="form-control" name="surat_lamaran" id="surat_lamaran">
        </div>
        <div class="form-group">
            {{ Form::label('Curriculum Vitae (CV)') }}
            <input type="file" class="form-control" name="cv" id="cv">
        </div>
        <div class="form-group">
            {{ Form::label('Pengalaman Kerja') }}
            <input type="file" class="form-control" name="pengalaman_kerja" id="pengalaman_kerja">
        </div>
        <div class="form-group">
            {{ Form::label('Portofolio') }}
            <input type="file" class="form-control" name="portofolio" id="portofolio">
        </div>
        <div class="form-group">
            {{ Form::label('KK') }}
            <input type="file" class="form-control" name="kk" id="kk">
        </div>
        <div class="form-group">
            {{ Form::label('KTP') }}
            <input type="file" class="form-control" name="ktp" id="ktp">
        </div>
        <div class="form-group">
            {{ Form::label('Ijazah Terakhir') }}
            <input type="file" class="form-control" name="ijazah_terakhir" id="ijazah_terakhir">
        </div>
        <div class="form-group">
            {{ Form::label('Transkrip Nilai') }}
            <input type="file" class="form-control" name="transkrip_nilai" id="transkrip_nilai">
        </div>
        <div class="form-group">
            {{ Form::label('SKCK') }}
            <input type="file" class="form-control" name="skck" id="skck">
        </div>
        <div class="form-group">
            {{ Form::label('Foto Terbaru') }}
            <input type="file" class="form-control" name="foto" id="foto">
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>