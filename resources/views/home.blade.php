
@extends('layout.main')

@section('navbarku')

<!-- Jika Login Berhasil -->
@if (session()->has('success'))
<div class="container">
<div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 10px;
position: absolute;
border-bottom: solid;
border-left: solid;
margin: 45px;
padding: 35px;
margin: 35px;">
     <i class="bi bi-check-circle-fill"></i>
     <strong>Login Berhasil !</strong>@auth Hello, {{ auth()->user()->name }} @endauth 
     <button type="button" class="button btn-success"data-bs-dismiss="alert" aria-label="Close" style=" font-size: 15px;
     font-weight: 50;
     border-radius: 10px;
     border: none;
     outline: none;
     background: rgb(1, 82, 21);
     color: rgb(255, 255, 255);
     position: absolute;
     right: -40px;
     top: -40%;
     margin: 20px"> <strong>Close</strong>
           </button>
</div>
</div>
@endif



          <div class="mx-auto d-flex flex-lg-row flex-column hero">
            
            <!-- Left Column -->
            <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
              <h2 class="title-text-big" style="font-size: 30px">
                @auth <h2 class="title-text-big" style="font-size: 30px">Haii, {{ auth()->user()->name }} Selamat</h2> <h2 class="title-text-big" style="font-size: 30px">Datang Di Delina</h2> @else SELAMAT DATANG DI DELIANA 
              </h2><h2 class="title-text-big" style="font-size: 30px">
                PAYTRUZ
              </h2> @endauth
              
            <p>Nikmati diskon 30% hanya berlaku untuk member baru saja</p>
            <p>ambil sekarang juga dan ambil produk yang kamu inginkan.</p>
            <p></p>
              <br>




              @auth
              <a href="/order">
              <button type="button" class="btn btn-primary">Berangkat</button></a>

                        @else
                        
                          <div class="row">
                            <div class="col">
                              <a href="/login">
                                <button class="btn btn-primary">Login</button></a>
                            </div>
                            <div class="col">
                              <a href="/register">
                                <button class="btn btn-primary">Register</button></a>
                            </div>
                          </div>
                        

             
            
                    @endauth




              
            </div>
            <!-- Right Column -->
            <div class="right-column text-center d-flex justify-content-center pe-0">
              <img id="img-fluid" class="h-auto mw-100" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png" alt="" />
            </div>
          </div>
      </div>
    </section>
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
      <div class="content-2-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="text-center title-text">
          <h1 class="text-title text-white">Daftar Reseller</h1>
          <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">Jika anda sebagai reseller daftar disini untuk memperoleh harga lebih murah lagi</p>
        </div>

        <div class="grid-padding text-center">
          <div class="row">
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-8.png" alt="" />
              </div>
              <h3 class="icon-title text-white">Harga Lebih Murah</h3>
              <p class="icon-caption">
                Perbandingan harga lebih murah dari harga non reseller.
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-9.png" alt="" />
              </div>
              <h3 class="icon-title text-white">Grup Private</h3>
              <p class="icon-caption">
                Jika join Reseller akan di invite ke grup private untuk menanyakan hal yang menurut anda sulut
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-10.png" alt="" />
              </div>
              <h3 class="icon-title text-white">Hanya 150.000</h3>
              <p class="icon-caption">
                Hanya Rp. 150.000 anda sudah bisa mendapatkan keuntungan lebih besar nantiya
              </p>
            </div>
          </div>
        </div>

        <div class="card-block">
          <div class="card">
            <div class="d-flex flex-lg-row flex-column align-items-center">
              <div class="me-lg-3">
                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png" alt="" />
              </div>
              <div class="flex-grow-1 text-lg-start text-center card-text">
                <h3 class="card-title text-white">Buruan Join Tunggu apa Lagi!</h3>
                <p class="card-caption">
                  Harga tersebut termasuk harga promo jadi harga bisa berubah sewaktu-waktu.
                </p>
              </div>
              <div class="card-btn-space">
                <button class="btn btn-card text-white">Join Sekarang</button>
                <button class="btn btn-outline">Versi Gratis</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- footer --}}
    
@endsection