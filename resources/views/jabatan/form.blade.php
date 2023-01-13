<div class="box box-info padding-1">
    <div class="box-body">
        
        <!-- <div class="form-group">
            {{ Form::label('kode') }}
            {{ Form::text('kode', $jabatan->kode, ['class' => 'form-control' . ($errors->has('kode') ? ' is-invalid' : ''), 'placeholder' => 'Kode']) }}
            {!! $errors->first('kode', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            <label for="">Kode</label>
            <input type="text" class="form-control" placeholder="Kode" name="kode" value="{{$finalkode}}" readonly>
        </div>
        <div class="form-group">
            <label for="">Perusahaan</label>
            <select class="form-control" name="id_perusahaan">
                @foreach($perusahaan as $rowperusahaan)
                <option value="{{$rowperusahaan->id}}">{{$rowperusahaan->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('jabatan') }}
            {{ Form::text('nama', $jabatan->nama, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : ''), 'placeholder' => 'Nama']) }}
            {!! $errors->first('nama', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="">Minimal Pendidikan</label>
            <select name="minimal_pendidikan" id="minimal_pendidikan" class="form-control">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA/SMK">SMA/SMK</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>