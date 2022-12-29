function next(){
    $('#divdua').show();
    $('#divsatu').hide();

    // var abc = $('#jumlah_soal_abc').val();
    // var yt = $('#jumlah_soal_yt').val();
    // if(abc != '' &&  yt != ''){
    //   $('#divdua').show();
    //   var jumlah_soal_abc = parseFloat($('#jumlah_soal_abc').val());
    //   var jumlah_soal_yt = parseFloat($('#jumlah_soal_yt').val());
    //   var foo_abc = new Array(jumlah_soal_abc);//create a 45 element array
    //   var foo_yt = new Array(jumlah_soal_yt);//create a 45 element array
    
    //   for(var i=0;i<foo_abc.length;i++){
    //     var soal_abc = '<div class="card card-primary"><div class="card-header">Soal ABC</div><div class="card-body"><div class="row"><input type="hidden" name="tipe_soal[]" id="tipe_soal" value="Abc" class="form-control"><div class="col-md-12"><label for="">Soal ' + (i+1) + '</label><textarea name="soal[]" id="soal" rows="2" class="form-control"></textarea></div><br><div class="col-md-6"><label for="">A.</label><textarea name="a[]" id="a" rows="1" class="form-control"></textarea></div><div class="col-md-6"><label for="">B.</label><textarea name="b[]" id="b" rows="1" class="form-control"></textarea></div><div class="col-md-6"><label for="">C.</label><textarea name="c[]" id="c" rows="1" class="form-control"></textarea></div><div class="col-md-6"><label for="">D.</label><textarea name="d[]" id="d" rows="1" class="form-control"></textarea></div><div class="col-md-12"><br><p style="margin-bottom:2px;">Jawaban :</p></div><div class="col-md-1"><input type="radio" name="jawaban[' + (i-1+1) + ']" id="a[' + (i-1+1) + ']" value="A"> <label for="a[' + (i-1+1) + ']">A</label></div><div class="col-md-1"><input type="radio" name="jawaban[' + (i-1+1) + ']" id="b[' + (i-1+1) + ']" value="B"> <label for="b[' + (i-1+1) + ']">B</label></div><div class="col-md-1"><input type="radio" name="jawaban[' + (i-1+1) + ']" id="c[' + (i-1+1) + ']" value="C"> <label for="c[' + (i-1+1) + ']">C</label></div><div class="col-md-1"><input type="radio" name="jawaban[' + (i-1+1) + ']" id="d[' + (i-1+1) + ']" value="D"> <label for="d[' + (i-1+1) + ']">D</label></div></div></div></div>'; 
    //     $("#divbody").append(soal_abc);
    //   }
    //   for(var j=0;j<foo_yt.length;j++){
    //     var soal_yt = '<div class="card card-warning"><div class="card-header">Soal Ya/Tidak</div><div class="card-body"><div class="row"><input type="hidden" name="tipe_soal[]" id="tipe_soal" value="YaTidak" class="form-control"><div class="col-md-12"><label for="">Soal ' + (j+jumlah_soal_abc+1) + '</label><textarea name="soal[]" id="soal[]" rows="2" class="form-control"></textarea></div><br><div class="col-md-12"><br><p style="margin-bottom:2px;">Jawaban :</p></div><div class="col-md-1"><input type="radio" name="jawaban['+ (j-1+jumlah_soal_abc+1) +']" id="ya['+ (j-1+jumlah_soal_abc+1) +']" value="Ya"> <label for="ya['+ (j-1+jumlah_soal_abc+1) +']">Ya</label></div><div class="col-md-1"><input type="radio" name="jawaban['+ (j-1+jumlah_soal_abc+1) +']" id="tidak['+ (j-1+jumlah_soal_abc+1) +']" value="Tidak"> <label for="tidak['+ (j-1+jumlah_soal_abc+1) +']">Tidak</label></div></div></div></div>'; 
    //     $("#divbody").append(soal_yt);
    //   }
    //   $('#divsatu').hide();
    // }else{
    //   alert('jumlah harus diisi');
    // }
    
  }

  function back(){
    $('#divdua').hide();
    // $('#divbody').empty();
    $('#divsatu').show();
  }