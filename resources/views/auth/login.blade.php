<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/login.css">
  <link rel="shortcut icon" href="/assets/img/logo.png">
</head>
<body>
  @if(session()->get('gagal'))
    <div class="alert alert-danger alert-block col-lg-12 pt-3 py-1" style="position: absolute;">
        <button type="button" class="close" data-dismiss="alert" style="margin-top: -3px;"><i class="fa fa-times" aria-hidden="true"></i></button>
        <p class="text-center"><strong>{{ session()->get('gagal') }}!!!</strong></p>
    </div>
    @endif

  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/img/login.jpeg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper d-flex">
                <img src="assets/img/logo/logo.png" alt="logo" width="50" height="50">
                <span style="font-size: 30px; margin-top: 5px;">BOOMBEST</span>
              </div>
              <p class="login-card-description">Login menggunakan akun anda</p>
              <form action="{{ route('login') }}" method="post">
                @csrf
                  <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="username" name="username" id="username" class="form-control" placeholder="Username" autocomplete="off" required>
		    @if(session()->get('gagal'))
                        <p class="text-danger" style="margin-top: -15px; font-size: 12px;">*mungkin username yang anda masukan salah!!!</p>
                    @endif
                  </div>

                  <div class="form-group mb-4">
                        <div class="d-flex">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off" required>
                        <div class="eye" onclick="myFunction()" style="margin-top: -20px;">
                            <span class="input-group-text mt-3 bg-transparent" style="height: 57px; position: absolute; margin-left: -45px; border: none;">
                            <svg id="openeye" style="display: none; fill: gray;" width="20px" height="20px" viewBox="0 0 98.48 98.48" style="enable-background:new 0 0 98.48 98.48;">
                                <path d="M97.204,45.788c-0.865-1.02-21.537-24.945-47.963-24.945c-26.427,0-47.098,23.925-47.965,24.946
                                    c-1.701,2-1.701,4.902,0.001,6.904c0.866,1.02,21.537,24.944,47.964,24.944c26.426,0,47.098-23.926,47.964-24.946
                                    C98.906,50.691,98.906,47.789,97.204,45.788z M57.313,35.215c1.777-0.97,4.255,0.143,5.534,2.485
                                    c1.279,2.343,0.875,5.029-0.902,5.999c-1.776,0.971-4.255-0.143-5.535-2.485C55.132,38.871,55.535,36.185,57.313,35.215z
                                    M49.241,68.969c-18.46,0-33.995-14.177-39.372-19.729c3.631-3.75,11.898-11.429,22.567-16.021
                                    c-2.081,3.166-3.301,6.949-3.301,11.021c0,11.104,9.001,20.105,20.105,20.105s20.106-9.001,20.106-20.105
                                    c0-4.072-1.219-7.855-3.3-11.021C76.715,37.812,84.981,45.49,88.612,49.24C83.235,54.795,67.7,68.969,49.241,68.969z"/>
                            </svg>
                            <svg id="slasheye" width="20px" height="20px" viewBox="0 0 98.48 98.481" style="enable-background:new 0 0 98.48 98.481; fill: gray;">

                                <path d="M69.322,44.716L49.715,64.323C60.438,64.072,69.071,55.438,69.322,44.716z"/>
                                <path d="M97.204,45.789c-0.449-0.529-6.245-7.23-15.402-13.554l-6.2,6.2c5.99,3.954,10.559,8.275,13.011,10.806
                                    C83.235,54.795,67.7,68.969,49.241,68.969c-1.334,0-2.651-0.082-3.952-0.222l-7.439,7.438c3.639,0.91,7.449,1.451,11.391,1.451
                                    c26.426,0,47.098-23.927,47.964-24.946C98.906,50.692,98.906,47.79,97.204,45.789z"/>
                                <path d="M90.651,15.901c0-0.266-0.104-0.52-0.293-0.707l-7.071-7.07c-0.391-0.391-1.022-0.391-1.414,0L66.045,23.952
                                    c-5.202-1.893-10.855-3.108-16.804-3.108c-26.427,0-47.098,23.926-47.965,24.946c-1.701,2-1.701,4.902,0.001,6.903
                                    c0.517,0.606,8.083,9.354,19.707,16.319l-12.86,12.86c-0.188,0.188-0.293,0.441-0.293,0.707c0,0.267,0.105,0.521,0.293,0.707
                                    l7.071,7.07c0.195,0.194,0.451,0.293,0.707,0.293c0.256,0,0.512-0.099,0.707-0.293l73.75-73.75
                                    C90.546,16.421,90.651,16.167,90.651,15.901z M9.869,49.241C13.5,45.49,21.767,37.812,32.436,33.22
                                    c-2.081,3.166-3.301,6.949-3.301,11.021c0,4.665,1.601,8.945,4.27,12.352l-6.124,6.123C19.129,58.196,12.89,52.361,9.869,49.241z"/>

                            </svg>
                            </span>

                        </div>
                    </div>
		    @if(session()->get('gagal'))
                        <p class="text-danger" style="margin-top: -15px; font-size: 12px;">*mungkin password yang anda masukan salah!!!</p>
                    @endif
                  </div>

                  <button name="login" id="login" class="btn btn-block login-btn mb-4" style="margin-top: -5px;" type="submit">Login</button>
                </form>
                {{--<a href="#!" class="forgot-password-link">Lupa Password?</a>--}}
                <nav class="login-card-footer-nav mt-2" style="line-height: 1px;">
		  <span style="font-size: 14px;" class="text-secondary">Belum punya akun?</span>	
                  <a href="http://member.boombest.net?referal={{app('request')->input('referal')}}"><span style="color: blue;">Daftar di sini!!</span></a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script>
    function myFunction() {
        var x = document.getElementById("password");
        var y = document.getElementById("openeye");
        var z = document.getElementById("slasheye");

        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
