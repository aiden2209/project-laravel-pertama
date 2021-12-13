@extends('layout.main')
@section('navbarku')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://gamesaiden.000webhostapp.com/img/baner.png" class="d-block w-100" alt="mobile legends">
    </div>
    <div class="carousel-item">
      <img src="https://gamesaiden.000webhostapp.com/img/prm.png" class="d-block w-100" alt="top up game murah">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br><br>




<div class="container">
    <div class="row justify-content-center">
      <h2 class="judul" style="text-align: center; margin-bottom:20px">Layananan</h2>
      <hr>
      {{-- Pulsa Seluler --}}
      
      <div class="col-3 col-lg-2">
        <li class="nav">
          <div class="dropdown as-dropdown-menu">
          <div class="as-navbar__dropdown-button" style="margin-top: 10px">
              <img src="https://thumbs.dreamstime.com/b/stock-illustration-176710166.jpg" style="width: 50px; margin-left:-px" alt="pulsa seluler">
              <br>
              <br>
              <p class="text" style="margin-left: -px; font-size:15px">Pulsa Seluler</p></div>
          <div class="as-navbar__dropdown-container">
          <div class="as-navbar__dropdown-content">
          <a href="/layanan/pulsa-seluler"  class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/telkom.png" class="as-navbar__icon img-fluid" height="100px" width="100px" loading="lazy" alt="icon menu" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">Telkomsel</p>
          
          </div>
          </div>
          </a>
          <a href="/layanan/game" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/axis.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu cloud vps hosting" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">Axis</p>
          
          </div>
          </div>
          </a>
          <a href="/layanan/voucher-game" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/indosat.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">Indosat</p>
          
          </div>
          </div>
          </a>
          <a href="/layanan/aplikasi-premium" onclick="trackingClickCTA('CTA Click', 'Homepage_ManagedWordPress_Clicked')" class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/xl.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu managed wordpress" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">XL</p>
          
          </div>
          </div>
          </a>
          </div>
          </div>
          </div>
          </li> 
      </div>
   
      {{-- Paket Data --}}
      
      <div class="col-3 col-lg-2">
        <li class="nav">
          <div class="dropdown as-dropdown-menu">
          <div class="as-navbar__dropdown-button" style="margin-top: 10px">
              <img src="https://s2.bukalapak.com/dope/1581555577452/original/hp_menu_icon_82b331ed-a7b4-4959-9cbc-9df5a94c5e9a.jpg" style="width: 50px; margin-left:-px" alt="pulsa seluler">
              <br>
              <br>
              <p class="text" style="margin-left: -px; font-size:15px">Paket Data</p></div>
          <div class="as-navbar__dropdown-container">
          <div class="as-navbar__dropdown-content">
          <a href="/layanan/pulsa-seluler"  class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/telkom.png" class="as-navbar__icon img-fluid" height="100px" width="100px" loading="lazy" alt="icon menu" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">Telkomsel</p>
          
          </div>
          </div>
          </a>
          <a href="/layanan/game" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/axis.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu cloud vps hosting" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">Axis</p>
          
          </div>
          </div>
          </a>
          <a href="/layanan/voucher-game" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/indosat.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">Indosat</p>
          
          </div>
          </div>
          </a>
          <a href="/layanan/aplikasi-premium" onclick="trackingClickCTA('CTA Click', 'Homepage_ManagedWordPress_Clicked')" class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/xl.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu managed wordpress" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">XL</p>
          
          </div>
          </div>
          </a>
          </div>
          </div>
          </div>
          </li>   
      </div>
   
      {{-- Game Mobile --}}
     
      <div class="col-3 col-lg-2">
        <li class="nav">
          <div class="dropdown as-dropdown-menu">
          <div class="as-navbar__dropdown-button" style="margin-top: 10px">
              <img src="https://i.ibb.co/fnKYq6b/gm.png" style="width: 70px; margin-left:-px" alt="game">
              <br>
              <br>
              <p class="text" style="margin-left: -px; font-size:15px">Game Mobile</p></div>
          <div class="as-navbar__dropdown-container">
          <div class="as-navbar__dropdown-content">
          <a href="/order/mobile-legends"  class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/ml.png" class="as-navbar__icon img-fluid" height="100px" width="100px" loading="lazy" alt="icon mobile legends" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">Mobile Legends</p>
          
          </div>
          </div>
          </a>
          <a href="/layanan/game" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/ff.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon free fire" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">Free Fire</p>
          
          </div>
          </div>
          </a>
          <a href="/layanan/voucher-game" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/sausage.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon sausage" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">Sausage Man</p>
          
          </div>
          </div>
          </a>
          <a href="/layanan/aplikasi-premium" onclick="trackingClickCTA('CTA Click', 'Homepage_ManagedWordPress_Clicked')" class="as-navbar__dropdown-link">
          <div class="as-navbar__container">
          <img src="https://gamesaiden.000webhostapp.com/img/pubg.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon pubg mobile" />
          <div class="as-navbar__content">
          <p class="as-navbar__title">PUBG Mobile</p>
          
          </div>
          </div>
          </a>
          </div>
          </div>
          </div>
          </li> 
        </div>
   
      {{-- Token Listrik --}}
      
      <div class="col-3 col-lg-2">
        <li class="nav">
          <div class="dropdown as-dropdown-menu">
          <div class="as-navbar__dropdown-button" style="margin-top: 10px">
              <img src="https://cloudfront.gotomalls.com/themes/default/images/icons/token-listrik-icon.png" style="width: 55px; margin-left:-px" alt="game">
              <br>
              <br>
              <p class="text" style="margin-left: -px; font-size:15px">Listrik</p></div>
          <div class="as-navbar__dropdown-container">
          <div class="as-navbar__dropdown-content">
            
          <a href="/layanan/pulsa-seluler"  class="as-navbar__dropdown-link">
          <p class="as-navbar__title">Prabayar</p>
          </a>
          <a href="/layanan/game" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
          
          <p class="as-navbar__title">Pascabayar</p>
          </a>
        
          </div>
          </div>
          </div>
          </li> 
      </div>
    </div>
  </div> 

<hr>


    
  
  <div class="container">
    <div class="row">
      <h2 class="judul" style="text-align: center; margin-top:30px; margin-bottom:20px">Yang Sering Di Ajukan</h2>
    
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Kenapa Harus Delina??
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Adalah sebuah platform bisnis yang menyediakan berbagai layanan PPOB & Voucher yang bergerak terutama di Indonesia, tidak kalah murah dengan platform lainnya kualitasnya oke.

        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Tersedia Layanan Apa Saja?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Delina menyediakan berbagai layanan<br>
          1. Pulsa Seluler<br>
          2. Paket Data<br>
          3. Voucher Game<br>
          4. Token Listrik<br>
          5. Dan beberapa Item yang belum kami Publikasikan
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Bagaimana Cara Order?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">

          1. Pilih paket atau layanan yang anda mau.<br>
          2. Pilih nominal yang anda inginkan.<br>
          3. Lakukan pembayaran dengan metode pembayaranyang tersedia.<br>
          4. Lakukan pembayaran sesuai nominal yang sudah di tentukan.<br>
          5. Setelah melakukan pembayaran konfirmasikan ke admin agar mempercepat proses.<br>
          6. Tunggu 1-10 menit setelah pembayaran dikonfirmasi.
          
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Ada Metode Pembayaran Apa Saja??
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">

          Delina mendukung bergbagai macam pembayaran.<br><br>

          Perbank-an :<br>
          BCA, BRI, Mandiri, Permata, Maybank, CIMB Niaga Bank, OCBNISP.<br><br>

          E-Wallet :<br>
          OVO, Dana, Gopay, Link Aja, dan Shopeepay.<br><br>

          Scan :<br>

          QRIS.

 
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  @endsection