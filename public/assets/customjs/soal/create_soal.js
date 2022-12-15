function next(){
    $('#divdua').show();
    var jumlah = parseFloat($('#jumlah_soal').val());
    var foo = new Array(jumlah);//create a 45 element array
  
    for(var i=0;i<foo.length;i++){
        //   var coba = 'soal ' + (i+1) + ' <input type="text" name="nama[]"></br>'; 
      var coba = '<div class="card card-primary"><div class="card-header">Pilihan Ganda</div><div class="card-body"><div class="row"><div class="col-md-12"><label for="">Soal ' + (i+1) + '</label><textarea name="" id="" rows="2" class="form-control"></textarea></div><br><div class="col-md-6"><label for="">A</label><textarea name="" id="" rows="1" class="form-control"></textarea></div><div class="col-md-6"><label for="">B</label><textarea name="" id="" rows="1" class="form-control"></textarea></div><div class="col-md-6"><label for="">C</label><textarea name="" id="" rows="1" class="form-control"></textarea></div><div class="col-md-6"><label for="">D</label><textarea name="" id="" rows="1" class="form-control"></textarea></div><div class="col-md-12"><br><p style="margin-bottom:2px;">Jawaban :</p></div><div class="col-md-1"><input type="radio" name="jawaban" id="a" value="A"> <label for="a">A</label></div><div class="col-md-1"><input type="radio" name="jawaban" id="b" value="B"> <label for="b">B</label></div><div class="col-md-1"><input type="radio" name="jawaban" id="c" value="C"> <label for="c">C</label></div><div class="col-md-1"><input type="radio" name="jawaban" id="d" value="D"> <label for="d">D</label></div></div></div></div>'; 
      $("#divbody").append(coba);
    }
    $('#divsatu').hide();
  }