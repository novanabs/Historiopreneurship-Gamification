<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container p-3">
            <h1 class="text-center">Registrasi Pengguna Baru</h1>
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    <div class="form">
                        <form method="post" action="{{ route('register.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="namaInput" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('namaInput') is-invalid @enderror" id="namaInput" name="namaInput" value="{{ old('namaInput') }}">
                                @error('namaInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="no_hpInput" class="form-label">No HP</label>
                                <input type="text" class="form-control @error('no_hpInput') is-invalid @enderror" id="no_hpInput" name="no_hpInput" value="{{ old('no_hpInput') }}">
                                @error('no_hpInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email</label>
                                <input type="text" class="form-control @error('emailInput') is-invalid @enderror" id="emailInput" name="emailInput" value="{{ old('emailInput') }}">
                                @error('emailInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="alamatInput" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamatInput') is-invalid @enderror" id="alamatInput" name="alamatInput" value="{{ old('alamatInput') }}">
                                @error('alamatInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>

                            
                            <div class="mb-3">
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control @error('passwordInput') is-invalid @enderror" id="passwordInput" name="passwordInput">
                                @error('passwordInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="passwordInput_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control @error('passwordInput_confirmation') is-invalid @enderror" id="passwordInput_confirmation" name="passwordInput_confirmation">
                                @error('passwordInput_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="peranInput" class="form-label">Peran</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="peranInput" id="flexRadioDefault1" value="guru">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Guru
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="peranInput" id="flexRadioDefault2" value="siswa">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Siswa
                                    </label>
                                  </div>
                                @error('peranInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>

                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
