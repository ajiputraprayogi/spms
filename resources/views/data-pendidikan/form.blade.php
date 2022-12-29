<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $dataPendidikan->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pendidikan_terakhir') }}
            {{ Form::text('pendidikan_terakhir', $dataPendidikan->pendidikan_terakhir, ['class' => 'form-control' . ($errors->has('pendidikan_terakhir') ? ' is-invalid' : ''), 'placeholder' => 'Pendidikan Terakhir']) }}
            {!! $errors->first('pendidikan_terakhir', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asal_sekolah') }}
            {{ Form::text('asal_sekolah', $dataPendidikan->asal_sekolah, ['class' => 'form-control' . ($errors->has('asal_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'Asal Sekolah']) }}
            {!! $errors->first('asal_sekolah', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('jurusan') }}
            {{ Form::text('jurusan', $dataPendidikan->jurusan, ['class' => 'form-control' . ($errors->has('jurusan') ? ' is-invalid' : ''), 'placeholder' => 'Jurusan']) }}
            {!! $errors->first('jurusan', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nilai_akhir') }}
            {{ Form::text('nilai_akhir', $dataPendidikan->nilai_akhir, ['class' => 'form-control' . ($errors->has('nilai_akhir') ? ' is-invalid' : ''), 'placeholder' => 'Nilai Akhir']) }}
            {!! $errors->first('nilai_akhir', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>