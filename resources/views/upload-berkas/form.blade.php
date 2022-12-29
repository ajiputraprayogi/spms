<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $uploadBerkas->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surat_lamaran') }}
            {{ Form::text('surat_lamaran', $uploadBerkas->surat_lamaran, ['class' => 'form-control' . ($errors->has('surat_lamaran') ? ' is-invalid' : ''), 'placeholder' => 'Surat Lamaran']) }}
            {!! $errors->first('surat_lamaran', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cv') }}
            {{ Form::text('cv', $uploadBerkas->cv, ['class' => 'form-control' . ($errors->has('cv') ? ' is-invalid' : ''), 'placeholder' => 'Cv']) }}
            {!! $errors->first('cv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pengalaman_kerja') }}
            {{ Form::text('pengalaman_kerja', $uploadBerkas->pengalaman_kerja, ['class' => 'form-control' . ($errors->has('pengalaman_kerja') ? ' is-invalid' : ''), 'placeholder' => 'Pengalaman Kerja']) }}
            {!! $errors->first('pengalaman_kerja', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('portofolio') }}
            {{ Form::text('portofolio', $uploadBerkas->portofolio, ['class' => 'form-control' . ($errors->has('portofolio') ? ' is-invalid' : ''), 'placeholder' => 'Portofolio']) }}
            {!! $errors->first('portofolio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ktp') }}
            {{ Form::text('ktp', $uploadBerkas->ktp, ['class' => 'form-control' . ($errors->has('ktp') ? ' is-invalid' : ''), 'placeholder' => 'Ktp']) }}
            {!! $errors->first('ktp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kk') }}
            {{ Form::text('kk', $uploadBerkas->kk, ['class' => 'form-control' . ($errors->has('kk') ? ' is-invalid' : ''), 'placeholder' => 'Kk']) }}
            {!! $errors->first('kk', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ijazah_terakhir') }}
            {{ Form::text('ijazah_terakhir', $uploadBerkas->ijazah_terakhir, ['class' => 'form-control' . ($errors->has('ijazah_terakhir') ? ' is-invalid' : ''), 'placeholder' => 'Ijazah Terakhir']) }}
            {!! $errors->first('ijazah_terakhir', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transkrip_nilai') }}
            {{ Form::text('transkrip_nilai', $uploadBerkas->transkrip_nilai, ['class' => 'form-control' . ($errors->has('transkrip_nilai') ? ' is-invalid' : ''), 'placeholder' => 'Transkrip Nilai']) }}
            {!! $errors->first('transkrip_nilai', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skck') }}
            {{ Form::text('skck', $uploadBerkas->skck, ['class' => 'form-control' . ($errors->has('skck') ? ' is-invalid' : ''), 'placeholder' => 'Skck']) }}
            {!! $errors->first('skck', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto') }}
            {{ Form::text('foto', $uploadBerkas->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>