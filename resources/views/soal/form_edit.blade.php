<div id="divsatu" class="box box-info padding-1">
    <div class="box-body">

        <!-- <div class="form-group">
            {{ Form::label('jenis_soal') }}
            {{ Form::text('jenis_soal', $soal->jenis_soal, ['class' => 'form-control' . ($errors->has('jenis_soal') ? ' is-invalid' : ''), 'placeholder' => 'Jenis Soal']) }}
            {!! $errors->first('jenis_soal', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            <label for="">Jenis Soal</label>
            <input type="text" name="jenis_soal" id="jenis_soal" value="{{$soal->jenis_soal}}" placeholder="Jenis Soal" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Jumlah Soal ABC</label>
            <input type="number" name="jumlah_soal_abc" id="jumlah_soal_abc" value="{{$soal->jumlah_soal_abc}}" placeholder="Jumlah Soal ABC" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Jumlah Soal Ya/Tidak</label>
            <input type="number" name="jumlah_soal_yt" id="jumlah_soal_yt" value="{{$soal->jumlah_soal_yt}}" placeholder="Jumlah Soal Ya/Tidak" class="form-control">
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            <select name="status" id="" class="form-control">
                <option @if($soal->status == 'Aktif')selected @endif>Aktif</option>
                <option @if($soal->status == 'Nonaktif')selected @endif>Nonaktif</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Minimal Score</label>
            <input type="number" name="minimal_score" id="minimal_score" value="{{$soal->minimal_score}}" placeholder="Minimal Score" class="form-control">
        </div>

    </div>
    <div class="box-footer mt20">
        <button id="buttonsatu" type="button" onclick="next()" class="btn btn-primary">Next</button>
    </div>
</div>
<div id="divdua" style="display:none;" class="box box-info padding-1">
    <div id="divbody" class="box-body">

        @php
            $soaljenis = DB::table('soal')->where('jenis_soal', $soal->jenis_soal)->get();
            $jumlahsoalabc = $soal->jumlah_soal_abc;
        @endphp
        <?php $no = 1; ?>
        @foreach($soaljenis as $rowsoaljenis)
        @if($rowsoaljenis->tipe_soal == 'Abc')
        <div class="card card-primary">
            <div class="card-header">
                Soal ABC
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id_soal[{{$rowsoaljenis->id}}]" value="{{$rowsoaljenis->id}}">
                    <input type="hidden" name="tipe_soal[{{$rowsoaljenis->id}}]" id="tipe_soal" value="Abc" class="form-control">
                    <div class="col-md-12">
                        <label for="">Soal {{$no++}}</label>
                        <textarea name="soal[{{$rowsoaljenis->id}}]" id="soal" rows="2" class="form-control">{{$rowsoaljenis->soal}}</textarea>
                    </div><br>
                    <div class="col-md-6">
                        <label for="">A.</label>
                        <textarea name="a[{{$rowsoaljenis->id}}]" id="a" rows="1" class="form-control">{{$rowsoaljenis->a}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">B.</label>
                        <textarea name="b[{{$rowsoaljenis->id}}]" id="b" rows="1" class="form-control">{{$rowsoaljenis->b}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">C.</label>
                        <textarea name="c[{{$rowsoaljenis->id}}]" id="c" rows="1" class="form-control">{{$rowsoaljenis->c}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">D.</label>
                        <textarea name="d[{{$rowsoaljenis->id}}]" id="d" rows="1" class="form-control">{{$rowsoaljenis->d}}</textarea>
                    </div>
                    <div class="col-md-12"><br>
                        <p style="margin-bottom:2px;">Jawaban :</p>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="a[{{$rowsoaljenis->id}}]" value="A" @if($rowsoaljenis->jawaban == 'A') checked @endif>
                        <label for="a[{{$rowsoaljenis->id}}]">A</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="b[{{$rowsoaljenis->id}}]" value="B" @if($rowsoaljenis->jawaban == 'B') checked @endif>
                        <label for="b[{{$rowsoaljenis->id}}]">B</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="c[{{$rowsoaljenis->id}}]" value="C" @if($rowsoaljenis->jawaban == 'C') checked @endif>
                        <label for="c[{{$rowsoaljenis->id}}]">C</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="d[{{$rowsoaljenis->id}}]" value="D" @if($rowsoaljenis->jawaban == 'D') checked @endif>
                        <label for="d[{{$rowsoaljenis->id}}]">D</label>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach


        @foreach($soaljenis as $rowsoaljenis)
        @if($rowsoaljenis->tipe_soal == 'YaTidak')
        <div class="card card-warning">
            <div class="card-header">
                Soal Ya/Tidak
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id_soal[{{$rowsoaljenis->id}}]" value="{{$rowsoaljenis->id}}">
                    <input type="hidden" name="tipe_soal[{{$rowsoaljenis->id}}]" id="tipe_soal" value="YaTidak" class="form-control">
                    <div class="col-md-12">
                        <label for="">Soal {{$no++}}</label>
                        <textarea name="soal[{{$rowsoaljenis->id}}]" id="soal[{{$rowsoaljenis->id}}]" rows="2" class="form-control">{{$rowsoaljenis->soal}}</textarea>
                    </div><br>
                    <div class="col-md-12"><br>
                        <p style="margin-bottom:2px;">Jawaban :</p>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="ya[{{$rowsoaljenis->id}}]" value="Ya" @if($rowsoaljenis->jawaban == 'Ya') checked @endif>
                        <label for="ya[{{$rowsoaljenis->id}}]">Ya</label>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jawaban[{{$rowsoaljenis->id}}]" id="tidak[{{$rowsoaljenis->id}}]" value="Tidak" @if($rowsoaljenis->jawaban == 'Tidak') checked @endif>
                        <label for="tidak[{{$rowsoaljenis->id}}]">Tidak</label>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach

    </div>
    <div class="box-footer mt20">
        <button type="button" onclick="back()" class="btn btn-danger">Back</button>
        <button id="buttondua" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
