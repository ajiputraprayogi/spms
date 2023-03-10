<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Register </b>Page</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Register new user</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-0">
                            <label>Nama</label>
                            <input id="name" type="text" class="mt-0 form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- <div class="col-md-12 mb-3">
                            <label>Username</label>
                            <input id="username" type="text"
                                class="mt-0 form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" required>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> -->
                        <div class="col-md-12 mb-0">
                            <label>Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-0">
                            <label>Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-0">
                            <label>Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <!-- test -->
                        <div class="col-md-12 mb-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Kode Perusahaan</label>
                                    <select name="perusahaan" id="perusahaan" class="form-control"></select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nama Jabatan</label>
                                    <select name="jabatan" id="jabatan" class="form-control"></select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="social-auth-links text-center mb-3">
                                <button type="submit" class="btn btn-block btn-primary">
                                    Register
                                </button>
                                <a href="{{url('/')}}" class="btn btn-block btn-danger">
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script>
        $(function(){
            $('#perusahaan').select2({
                ajax: {
                    url: '/cari-perusahaan',
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data){
                        return{
                            results: $.map(data, function(item){
                                return{
                                    id: item.id,
                                    text: item.kode
                                }
                            })
                        }
                    },
                    cache: true
                }
            });
            $('#perusahaan').on('select2:select', function(e){
                var kode = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: '/cari-perusahaan-hasil/'+kode,
                    success: function(data){
                        $.each(data.data, function (key, value) {
                            var newOption = new Option(value.nama, value.id, false, false);
                            $('#jabatan').empty().append(newOption).trigger("change");
                        });
                    },
                    complete: function () {
                        $('#jabatan').val(null).trigger('change');
                    }
                })
            })
            $('#jabatan').select2();
        })
    </script>
</body>
</html>
