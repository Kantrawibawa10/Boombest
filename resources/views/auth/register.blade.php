@extends('layouts.app')

@section('content')
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1">

      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3"><h5>Selamat Datang Member Baru</h5></div>
                <div class="btn-wrapper text-center justify-content-center d-flex">
                  <img src="/assets/img/logo.png" class="fa-3x logo" style="width: 80px; height: 80px;" alt="">
                  <h1 class="mt-3">BOOMBEST</h1>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <form action="{{ route('register') }}" method="post">
                  @csrf

                  <input type="hidden" name="img_user" value="{{asset('assets/img/member/profile.png')}}" accept="image/jpeg, image/png">

                  <div class="d-flex pt-3">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                          </div>
                          <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('nama_user') border-red-500 @enderror"
                          value="{{ old('nama_user') }}" placeholder="Nama" type="text" name="nama_user" id="nama_user" required>
                          @error('nama_user')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                          </div>
                          <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror"
                          value="{{ old('username') }}" placeholder="Username" type="text" name="username" id="username" required>
                          @error('username')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                          value="{{ old('email') }}" placeholder="Email" type="text" name="email" id="email">
                          @error('email')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group focused">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                          value="{{ old('password') }}" placeholder="Password" type="password" name="password" id="password">
                          @error('password')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group focused">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror"
                          value="{{ old('password_confirmation') }}" placeholder="Confirm password" type="password" name="password_confirmation" id="password_confirmation">
                          @error('password_confirmation')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                          </div>
                          <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('kode') border-red-500 @enderror"
                          value="{{ old('kode') }}" placeholder="Kode Member" type="text" name="kode" id="kode" required>
                          @error('kode')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                          </div>
                          <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('notelpon') border-red-500 @enderror"
                          value="{{ old('notelpon') }}" placeholder="No Telpon" type="text" name="notelpon" id="notelpon" required>
                          @error('notelpon')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('nowa') border-red-500 @enderror"
                          value="{{ old('nowa') }}" placeholder="No whatsapp" type="text" name="nowa" id="nowa">
                          @error('nowa')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group focused">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('alamat') border-red-500 @enderror"
                          value="{{ old('alamat') }}" placeholder="Alamat" type="text" name="alamat" id="alamat">
                          @error('alamat')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group focused">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <select type="text" id="kelamin" name="kelamin" class="form-control dropdown-toggle pl-3" value="" required>
                              <option selected disabled value=" " class="dropdown-menu " aria-labelledby="dropdownMenuButton1">Jenis kelamin</option>
                              <option value="Laki-laki" class="dropdown-item">Laki-laki</option>
                              <option value="Perempuan" class="dropdown-item">Perempuan</option>
                          </select>
                          @error('kelamin')
                              <div class="text-red-500 mt-2 text-sm">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>
                      <input type="hidden" name="level" value="Member">
                    </div>
                  </div>


                  <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Create account</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
