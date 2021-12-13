@extends('layout.main')

@section('navbarku')


       
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-5 .btn:focus,
      .content-3-5 .btn:active {
        outline: none !important;
      }

      .content-3-5 .width-left {
        width: 0%;
      }

      .content-3-5 .width-right {
        width: 100%;
        height: 100%;
        padding: 10rem 4rem;
        background-color: #fcfdff;
      }

      .content-3-5 .centered {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }

      .content-3-5 .right {
        width: 100%;
      }

      .content-3-5 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 0.75rem;
      }

      .content-3-5 .caption-text {
        font: 400 0.875rem/1.75rem Poppins, sans-serif;
        color: #a8adb7;
      }

      .content-3-5 .input-label {
        font: 500 1.125rem/1.75rem Poppins, sans-serif;
        color: #39465b;
      }

      .content-3-5 .div-input {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.25rem;
        margin-top: 0.75rem;
        border-radius: 0.75rem;
        border: 1px solid #cacbce;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-3-5 .div-input:focus-within {
        border: 1px solid #2ec49c;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-3-5 .div-input input::placeholder {
        color: #cacbce;
        transition: 0.3s;
      }

      .content-3-5 .div-input:focus-within input::placeholder {
        color: #2a3240;
        outline: none;
        transition: 0.3s;
      }

      .content-3-5 .div-input .icon-toggle-empty-3-5 path,
      .content-3-5 .div-input:focus-within .icon path {
        transition: 0.3;
        fill: #2ec49c;
        transition: 0.3s;
      }

      .content-3-5 .input-field {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        width: 100%;
        background-color: #fcfdff;
        transition: 0.3s;
      }

      .content-3-5 .input-field:focus {
        outline: none;
        transition: 0.3s;
      }

      .content-3-5 .forgot-password {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        color: #cacbce;
        transition: 0.3s;
        text-decoration: none;
      }

      .content-3-5 .forgot-password:hover {
        color: #2a3240;
      }

      .content-3-5 .btn-fill {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        background-image: linear-gradient(rgba(91, 203, 173, 1),
            rgba(39, 194, 153, 1));
        padding: 0.75rem 1rem;
        margin-top: 2.25rem;
        border-radius: 0.75rem;
        transition: 0.5s;
      }

      .content-3-5 .btn-fill:hover {
        background-image: linear-gradient(#2ec49c, #2ec49c);
        transition: 0.5s;
      }

      .content-3-5 .bottom-caption {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        margin-top: 2rem;
        color: #2a3240;
      }

      .content-3-5 .green-bottom-caption {
        color: #2ec49c;
        font-weight: 500;
      }

      .content-3-5 .green-bottom-caption:hover {
        color: #2ec49c;
        cursor: pointer;
        text-decoration: underline;
      }

      @media (min-width: 576px) {
        .content-3-5 .width-right {
          padding: 8rem 4rem;
        }

        .content-3-5 .right {
          width: 58.333333%;
        }
      }

      @media (min-width: 768px) {
        .content-3-5 .right {
          width: 66.666667%;
        }
      }

      @media (min-width: 992px) {
        .content-3-5 .width-left {
          width: 48%;
        }

        .content-3-5 .width-right {
          width: 52%;
        }

        .content-3-5 .right {
          width: 75%;
        }
      }

      @media (min-width: 1200px) {
        .content-3-5 .right {
          width: 58.333333%;
        }
      }
    </style>
    <br>
    <br>
    <div class="row justify-content-center">
    <div class="col-md-6">
          <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Daftar</h1>
            
          <form action="/register" method="post">
            @csrf
            <div class="form-floating mb-3">
              <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
              <label for="floatingInput">Nama Lengkap</label>
              @error('name')
              <div class="invalid-feedback">
            {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="username" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
              <label for="floatingInput">Username</label>
              @error('username')
              <div class="invalid-feedback">
            {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="floatingInput">Email address</label>
              @error('email')
              <div class="invalid-feedback">
            {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" id="password-content-3-5" placeholder="Password" required>
              <label for="floatingPassword">Password</label>
              @error('password')
              <div class="invalid-feedback">
            {{ $message }}
              </div>
              @enderror
              <div onclick="togglePassword()">
                <div class="form-check form-switch" style="margin-left: 520px; margin-bottom:10px">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                  
                </div>
              </div>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check" value="" id="check" required>
                <label class="form-check-label" for="flexCheckDefault">
                  Dengan mendaftar di Delina anda menyetujui persyaratan <a href="/trems/privacy-policy">Privacy Policy</a>&<a href="/trems/trems-of-service">Trems of Service</a>
                </label>
              </div>
              <button class="btn btn-fill text-white d-block w-100 mb-3" type="submit">
                Register Now 
              </button>
              <p class=" bottom-caption">
                Sudah Mempunyai Akun?
                <a href="/login">
                <span class="green-bottom-caption">Login Disini</span></a>
              </p>
            </div>
            </div>
          </form>
        </main>
        </div>
      </div>

          {{-- <form style="margin-top: 1.5rem" action="/register" method="post"> 
            @csrf 
            <div style="margin-bottom: 1.75rem"> 
              <label for="" class="d-block input-label">Nama Lengkap</label> 
              <div class="d-flex w-100 div-input"> 
                <i class="bi bi-person-fill"></i> 
                <input class="input-field border-0 @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Nama"/> 
              </div> 
            </div> 
            @error('name') 
              <div class="invalid-feedback"> 
                Mohon Isi Semua 
              </div> 
              @enderror 
            <div style="margin-bottom: 1.75rem"> 
              <label for="" class="d-block input-label"> Username</label> 
              <div class="d-flex w-100 div-input"> 
                <i class="bi bi-person-fill"></i> 
                <input class="input-field border-0" type="username" name="User" id="User" placeholder="Username" 
                  autocomplete="on" /> 
              </div> 
            </div> 

            <div style="margin-bottom: 1.75rem"> 
              <label for="" class="d-block input-label">Email Address</label> 
              <div class="d-flex w-100 div-input"> 
                <i class="bi bi-envelope-fill"></i> 
                <input class="input-field border-0" type="email" name="email" id="email" placeholder="Email" 
                  autocomplete="on" /> 
              </div> 
            </div> 

            <div style="margin-top: 1rem"> 
              <label for="" class="d-block input-label">Password</label> 
              <div class="d-flex w-100 div-input">
                <i class="bi bi-key-fill"></i>
                <input class="input-field border-0" type="password" name="Password" id="password-content-3-5"
                  placeholder="Your Password" minlength="6" />

                <div onclick="togglePassword()">
                  <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd"
                      d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                      fill="#CACBCE" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end" style="margin-top: 0.75rem">
              <a href="#" class="forgot-password fst-italic">Forgot Password?</a>
            </div>
            <button class="btn btn-fill text-white d-block w-100" type="submit">
              Register Now 
            </button>
          </form>
          <p class="text-center bottom-caption">
            Sudah Mempunyai Akun?
            <a href="/login">
            <span class="green-bottom-caption">Login Disini</span></a>
          </p>
        </div>
      </div>
    </div>  --}}

    <!-- Password toggle -->
    <script>
      function togglePassword() {
        var x = document.getElementById("password-content-3-5");
        if (x.type === "password") {
          x.type = "text";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#2ec49c");
        } else {
          x.type = "password";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#CACBCE");
        }
      }
    </script>
  
    
@endsection