<div id="divsatu" class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('jenis_soal') }}
            {{ Form::text('jenis_soal', $soal->jenis_soal, ['class' => 'form-control' . ($errors->has('jenis_soal') ? ' is-invalid' : ''), 'placeholder' => 'Jenis Soal']) }}
            {!! $errors->first('jenis_soal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="">Jumlah Soal ABC</label>
            <input type="number" name="jumlah_soal_abc" id="jumlah_soal_abc" placeholder="Jumlah Soal ABC" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Jumlah Soal Ya/Tidak</label>
            <input type="number" name="jumlah_soal_yt" id="jumlah_soal_yt" placeholder="Jumlah Soal Ya/Tidak" class="form-control">
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            <select name="status" id="" class="form-control">
                <option>Aktif</option>
                <option>Nonaktif</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Minimal Score</label>
            <input type="number" name="minimal_score" id="minimal_score" placeholder="Minimal Score" class="form-control">
        </div>

    </div>
    <div class="box-footer mt20">
        <button id="buttonsatu" type="button" onclick="next()" class="btn btn-primary">Next</button>
    </div>
</div>
<div id="divdua" style="display:none;" class="box box-info padding-1">
    <div id="divbody" class="box-body">
        
        <!-- <div class="card card-primary">
            <div class="card-header">
                Soal ABC
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="tipe_soal[]" id="tipe_soal" value="Abc" class="form-control">
                    <div class="col-md-12">
                        <label for="">Soal</label>
                        <textarea name="soal[]" id="soal" rows="2" class="form-control"></textarea>
                    </div><br>
                    <div class="col-md-6">
                        <label for="">A.</label>
                        <textarea name="a[]" id="a" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">B.</label>
                        <textarea name="b[]" id="b" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">C.</label>
                        <textarea name="c[]" id="c" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">D.</label>
                        <textarea name="d[]" id="d" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12"><br>
                        <p style="margin-bottom:2px;">Jawaban :</p>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[]" id="a" value="A">
                        <label for="a">A</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[]" id="b" value="B">
                        <label for="b">B</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[]" id="c" value="C">
                        <label for="c">C</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[]" id="d" value="D">
                        <label for="d">D</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-warning">
            <div class="card-header">
                Soal Ya/Tidak
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="tipe_soal[]" id="tipe_soal" value="YaTidak" class="form-control">
                    <div class="col-md-12">
                        <label for="">Soal</label>
                        <textarea name="soal[]" id="soal[]" rows="2" class="form-control"></textarea>
                    </div><br>
                    <div class="col-md-12"><br>
                        <p style="margin-bottom:2px;">Jawaban :</p>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[]" id="ya" value="Ya">
                        <label for="ya">Ya</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[]" id="tidak" value="Tidak">
                        <label for="tidak">Tidak</label>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
    <div class="box-footer mt20">
        <button type="button" onclick="back()" class="btn btn-danger">Back</button>
        <button id="buttondua" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>