<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">
    
                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                </div>
    
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form style="width: 23rem;" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Reset Password</h3>
            
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus />
                            <label class="form-label" for="form2Example18">Email address</label>
                        </div>
            
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example28" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example28">Password</label>
                        </div>
            
                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="button">Login</button>
                        </div>
                    </form>
        
                </div>
    
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
  </section>