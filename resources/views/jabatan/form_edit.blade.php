<div class="box box-info padding-1">
    <div class="box-body">
        
        <!-- <div class="form-group">
            {{ Form::label('kode') }}
            {{ Form::text('kode', $jabatan->kode, ['class' => 'form-control' . ($errors->has('kode') ? ' is-invalid' : ''), 'placeholder' => 'Kode']) }}
            {!! $errors->first('kode', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            <label for="">Kode</label>
            <input type="text" class="form-control" placeholder="Kode" name="kode" value="{{$jabatan->kode}}" readonly>
        </div>
        <div class="form-group">
            <label for="">Perusahaan</label>
            <select class="form-control" name="id_perusahaan">
                @foreach($perusahaan as $rowperusahaan)
                <option value="{{$rowperusahaan->id}}" @if($rowperusahaan->id == $jabatan->id_perusahaan) selected @endif>{{$rowperusahaan->nama}}</option>
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
                <option value="SD" @if($jabatan->minimal_pendidikan=='SD') selected @endif>SD</option>
                <option value="SMP" @if($jabatan->minimal_pendidikan=='SMP') selected @endif>SMP</option>
                <option value="SMA/SMK" @if($jabatan->minimal_pendidikan=='SMA/SMK') selected @endif>SMA/SMK</option>
                <option value="D1" @if($jabatan->minimal_pendidikan=='D1') selected @endif>D1</option>
                <option value="D2" @if($jabatan->minimal_pendidikan=='D2') selected @endif>D2</option>
                <option value="D3" @if($jabatan->minimal_pendidikan=='D3') selected @endif>D3</option>
                <option value="S1" @if($jabatan->minimal_pendidikan=='S1') selected @endif>S1</option>
                <option value="S2" @if($jabatan->minimal_pendidikan=='S2') selected @endif>S2</option>
                <option value="S3" @if($jabatan->minimal_pendidikan=='S3') selected @endif>S3</option>
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>