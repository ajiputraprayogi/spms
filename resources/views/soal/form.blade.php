<div id="divsatu" class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('jenis_soal') }}
            {{ Form::text('jenis_soal', $soal->jenis_soal, ['class' => 'form-control' . ($errors->has('jenis_soal') ? ' is-invalid' : ''), 'placeholder' => 'Jenis Soal']) }}
            {!! $errors->first('jenis_soal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('jumlah_soal') }}
            {{ Form::text('jumlah_soal', $soal->jumlah_soal, ['class' => 'form-control' . ($errors->has('jumlah_soal') ? ' is-invalid' : ''), 'placeholder' => 'Jumlah Soal']) }}
            {!! $errors->first('jumlah_soal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            <select name="status" id="" class="form-control">
                <option>Aktif</option>
                <option>Nonaktif</option>
            </select>
        </div>
        <!-- <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $soal->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->

        @php
            $a = array_fill(0, 2, 'soal');

        @endphp
        @foreach($a as $rowa)
        @endforeach

    </div>
    <div class="box-footer mt20">
        <button id="buttonsatu" type="button" onclick="next()" class="btn btn-primary">Next</button>
    </div>
</div>
<div id="divdua" style="display:none;" class="box box-info padding-1">
    <div id="divbody" class="box-body">
        
        <!-- <div class="card card-primary">
            <div class="card-header">
                Soal
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Soal</label>
                        <textarea name="" id="" rows="2" class="form-control"></textarea>
                    </div><br>
                    <div class="col-md-6">
                        <label for="">A</label>
                        <textarea name="" id="" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">B</label>
                        <textarea name="" id="" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">C</label>
                        <textarea name="" id="" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">D</label>
                        <textarea name="" id="" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12"><br>
                        <p style="margin-bottom:2px;">Jawaban :</p>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban" id="a" value="A">
                        <label for="a">A</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban" id="b" value="B">
                        <label for="b">B</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban" id="c" value="C">
                        <label for="c">C</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban" id="d" value="D">
                        <label for="d">D</label>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
    <div class="box-footer mt20">
        <button id="buttondua" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>