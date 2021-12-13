<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
  <div class="container-xxl mx-auto p-0 position-relative header-2-2" style="font-family: 'Poppins', sans-serif">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a href="/">
        <img style="margin-right: 0.75rem" src="https://gamesaiden.000webhostapp.com/img/logo.png" width="180px" alt="pulsa murah" />
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-white border-0">
            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
              <a class="modal-title" id="targetModalLabel">
                <img style="margin-top: 0.5rem" src="https://gamesaiden.000webhostapp.com/img/logo.png" width="150px" alt="" />
              </a>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
              <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <!-- mobile-->

                  {{-- <a href="/">
                    <li class="nav-item">
                        <div class="dropdown as-dropdown-menu">
                        <div class="as-navbar">
                        Home</div></a> 
                    </div>
                    </li>  
                  <a href="/blog">
                    <li class="nav-item">
                        <div class="dropdown as-dropdown-menu">
                        <div class="as-navbar">
                        Blog</div> </a> 
                    </div>
                    </li>   --}}
                    
                <li class="nav-item">
                    <div class="dropdown as-dropdown-menu">
                    <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px;">
                   Saya<i class="bi bi-caret-down-fill"></i></i></div>
                    <div class="as-navbar__dropdown-container">
                    <div class="as-navbar__dropdown-content">
                   
                    
                      @auth
                      <p class="as-navbar__title">Haii, {{ auth()->user()->name }} </p>
                      <hr class="dropdown-divider">
                       
                          <a href="/order">
                        <p class="as-navbar__title" style="margin-left:17px"><i class="bi bi-cart3"></i>  Order</p></a>
                        
                        <form action="/logout" method="POST">
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>

                        @else
            <div class="modal-footer border-0 gap-3" style="padding: 1rem; padding-top: 0.75rem">
              <p>Tidak ada data!</p>
              <a href="/login">
              <button class="btn btn-primary">Masuk</button></a>
            </div>
                    
                    </div>
                    </div>
                    </div>
                    </li> 
                    @endauth
                    <!-- Harga -->
                    <li class="nav-item">
                        <div class="dropdown as-dropdown-menu">
                        <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px;">
                        Harga</div>
                        <div class="as-navbar__dropdown-container">
                        <div class="as-navbar__dropdown-content">
                        <a href="/harga/tsel"  class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/unlimited-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Telkomsel</p>
                        </div>
                        </div>
                        </a>
                        <a href="/harga/indosat" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/cloud-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu cloud vps hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Indosat</p>
                        </div>
                        </div>
                        </a>
                        <a href="/harga/xl" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">XL</p>
                        
                        </div>
                        </div>
                        </a>
                        <a href="/harga/axis" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Axis</p>
                        
                        </div>
                        </div>
                        </a>
                        <a href="/harga/smartfren" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Smartfren</p>
                        
                        </div>
                        </div>
                        </a>
                        <a href="/harga/mobile-legends"  class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Mobile Legends</p>
                        
                        </div>
                        </div>
                        </a>
                        <a href="/belum-tau-kemana" onclick="trackingClickCTA('CTA Click', 'Homepage_ManagedWordPress_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/managed-wordpress.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu managed wordpress" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Lihat Semuanya</p>
                       
                        </div>
                        </div>
                        </a>
                        <li class="nav-item">
                          <div class="dropdown as-dropdown-menu">
                          <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px;">
                          Layanan</div>
                          <div class="as-navbar__dropdown-container">
                          <div class="as-navbar__dropdown-content">
                          <a href="/layanan/pulsa-seluler"  class="as-navbar__dropdown-link">
                          <div class="as-navbar__container">
                          <img src="https://gamesaiden.000webhostapp.com/img/Pulsa.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu" />
                          <div class="as-navbar__content">
                          <p class="as-navbar__title">Pulsa Seluler</p>
                          <p class="as-navbar__description">Tersedia Pulsa All Operator & Termurah</p>
                          </div>
                          </div>
                          </a>
                          <a href="/layanan/game" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
                          <div class="as-navbar__container">
                          <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/cloud-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu cloud vps hosting" />
                          <div class="as-navbar__content">
                          <p class="as-navbar__title">Game</p>
                          <p class="as-navbar__description">Tersedia Item Game Termurah & 100% Aman</p>
                          </div>
                          </div>
                          </a>
                          <a href="/layanan/voucher-game" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                          <div class="as-navbar__container">
                          <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                          <div class="as-navbar__content">
                          <p class="as-navbar__title">Voucher Game</p>
                          <p class="as-navbar__description">Voucher Google Play Untuk Belanja Buku & Voucher Lainnya</p>
                          </div>
                          </div>
                          </a>
                          <a href="/layanan/aplikasi-premium" onclick="trackingClickCTA('CTA Click', 'Homepage_ManagedWordPress_Clicked')" class="as-navbar__dropdown-link">
                          <div class="as-navbar__container">
                          <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/managed-wordpress.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu managed wordpress" />
                          <div class="as-navbar__content">
                          <p class="as-navbar__title">Aplikasi Premium</p>
                          <p class="as-navbar__description">Dapatkan Aplikasi Premium Favorit Anda</p>
                          </div>
                          </div>
                          </a>
                          </div>
                          </div>
                          </div>
                          </li>

                          <li class="nav-item">
                            <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px;">
                           Contact</div>
                            <a href="/contact"  class="as-navbar__dropdown-link">
                            </li> 
                         
              </ul>
            </div>


               
              </li>
              @auth
                @else
            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
              <a href="/login">
              <button class="btn btn-primary">Login / Register</button></a>
            </div>
            @endauth
          </div>
        </div>
      </div>

      
      
      <!-- Dekstop -->

      <div class="collapse navbar-collapse" id="navbarTogglerDemo">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          
      <a href="/">
        <li class="nav-item">
            <div class="dropdown as-dropdown-menu">
            <div class="as-navbar__dropdown-button" style="margin-top: 10px">
            Home</div> </a> 
        </div>
        </li>  
      <a href="/blog">
        <li class="nav-item">
            <div class="dropdown as-dropdown-menu">
            <div class="as-navbar__dropdown-button" style="margin-top: 10px">
            Blog</div></a> 
        </div>
        </li> 
        @auth
          <li class="nav-item">
            <div class="dropdown as-dropdown-menu">
              
            <div class="as-navbar__dropdown-button" style="margin-top: 10px; font-size:15px">
            Layanan <i class="bi bi-caret-down-fill"></i></div>
            <div class="as-navbar__dropdown-container">
            <div class="as-navbar__dropdown-content">
            <a href="/layanan/pulsa-seluler"  class="as-navbar__dropdown-link">
            <div class="as-navbar__container">
            <img src="https://gamesaiden.000webhostapp.com/img/Pulsa.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu" />
            <div class="as-navbar__content">
            <p class="as-navbar__title">Pulsa Seluler</p>
            <p class="as-navbar__description">Tersedia Pulsa All Operator & Termurah</p>
            </div>
            </div>
            </a>
            <a href="/layanan/game" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
            <div class="as-navbar__container">
            <img src="https://gamesaiden.000webhostapp.com/img/Game.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu cloud vps hosting" />
            <div class="as-navbar__content">
            <p class="as-navbar__title">Game</p>
            <p class="as-navbar__description">Tersedia Item Game Termurah & 100% Aman</p>
            </div>
            </div>
            </a>
            <a href="/layanan/voucher-game" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
            <div class="as-navbar__container">
            <img src="https://gamesaiden.000webhostapp.com/img/giftcard.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
            <div class="as-navbar__content">
            <p class="as-navbar__title">Voucher Game</p>
            <p class="as-navbar__description">Voucher Google Play Untuk Belanja Buku & Voucher Lainnya</p>
            </div>
            </div>
            </a>
            <a href="/layanan/aplikasi-premium" onclick="trackingClickCTA('CTA Click', 'Homepage_ManagedWordPress_Clicked')" class="as-navbar__dropdown-link">
            <div class="as-navbar__container">
            <img src="https://gamesaiden.000webhostapp.com/img/netflix.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu managed wordpress" />
            <div class="as-navbar__content">
            <p class="as-navbar__title">Aplikasi Premium</p>
            <p class="as-navbar__description">Dapatkan Aplikasi Premium Favorit Anda</p>
            </div>
            </div>
            </a>
            </div>
            </div>
            </div>
            </li>   
            @endauth
          
            <!-- Harga -->
            <li class="nav-item">
                <div class="dropdown as-dropdown-menu">
                  <a>
                <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px;">
                Harga<i class="bi bi-caret-down-fill"></i></div></a>
                <div class="as-navbar__dropdown-container">
                <div class="as-navbar__dropdown-content">
                <a href="/harga/tsel"  class="as-navbar__dropdown-link">
                <div class="as-navbar__container">
                <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/unlimited-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu" />
                <div class="as-navbar__content">
                <p class="as-navbar__title">Telkomsel</p>
                </div>
                </div>
                </a>
                <a href="/harga/indosat" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
                <div class="as-navbar__container">
                <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/cloud-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu cloud vps hosting" />
                <div class="as-navbar__content">
                <p class="as-navbar__title">Indosat</p>
                
                </div>
                </div>
                </a>
                <a href="/harga/xl" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                <div class="as-navbar__container">
                <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                <div class="as-navbar__content">
                <p class="as-navbar__title">XL</p>
                
                </div>
                </div>
                </a>
                <a href="/harga/axis" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                <div class="as-navbar__container">
                <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                <div class="as-navbar__content">
                <p class="as-navbar__title">Axis</p>
                
                </div>
                </div>
                </a>
                <a href="/harga/smartfren" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                <div class="as-navbar__container">
                <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                <div class="as-navbar__content">
                <p class="as-navbar__title">Smartfren</p>
                
                </div>
                </div>
                </a>
                <a href="/harga/mobile-legends" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                <div class="as-navbar__container">
                <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                <div class="as-navbar__content">
                <p class="as-navbar__title">Mobile Legends</p>
                
                </div>
                </div>
                </a>
                <a href="/belum-tau-kemana" onclick="trackingClickCTA('CTA Click', 'Homepage_ManagedWordPress_Clicked')" class="as-navbar__dropdown-link">
                <div class="as-navbar__container">
                <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/managed-wordpress.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu managed wordpress" />
                <div class="as-navbar__content">
                <p class="as-navbar__title">Lihat Semuanya</p>
               
                </div>
                </div>
                </a>
                </div>
                </div>
                </div>
                </li>
                <a href="/about">
                <li class="nav-item">
                    <div class="dropdown as-dropdown-menu">
                    <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px;">
                    About</div> </a> 
                </div>
                </li>  
                <a href="/faq">
                <li class="nav-item">
                    <div class="dropdown as-dropdown-menu">
                    <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px;">
                    FAQ</div> </a> 
                </div>
                </li>  
              </ul> 
              @auth
              <li class="nav">
                <div class="dropdown as-dropdown-menu">
                 <a href="#">
                  <i class="bi bi-person-fill" style="font-size: 25px"></i></a>
                <div class="as-navbar__dropdown-container">
                <div class="as-navbar__dropdown-content">
                <p class="as-navbar__title">Haii, {{ auth()->user()->name }} </p>
                
                <hr class="dropdown-divider">
                <a href="/order"  class="as-navbar__dropdown-link">
                <p class="as-navbar__title"><i class="bi bi-cart3"></i>  Order</p>
                </a>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
                </div>
              </li>
              
                
                @else
                <div class="gap-3">
                  <a href="/login">
                  <button class="btn btn-primary">Login / Register</button></a>
                </div>
                @endauth
        

      </div>
    </nav>
   <div class="container mt-4">
     @yield('navbarku')
    



















{{-- <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-primary">
  <div class="container">
    <a href="/">
      <img style="margin-right: 0.75rem" src="https://gamesaiden.000webhostapp.com/img/logo.png" width="180px" alt="pulsa murah" />
    </a>
   
              <!-- Ke 2 -->
       
              <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                  
              <a href="/">
                <li class="nav-item">
                    <div class="dropdown as-dropdown-menu">
                    <div class="as-navbar__dropdown-button" style="margin-top: 10px; color:white">
                    Home</div> </a> 
                </div>
                </li>  
              <a href="blog">
                <li class="nav-item">
                    <div class="dropdown as-dropdown-menu">
                    <div class="as-navbar__dropdown-button" style="margin-top: 10px; color:white">
                    Blog</div></a> 
                </div>
                </li> 
                 
                  <li class="nav-item">
                    <div class="dropdown as-dropdown-menu">
                      <a href="">
                    <div class="as-navbar__dropdown-button" style="margin-top: 10px; color:white">
                    Layanan</div></a>
                    <div class="as-navbar__dropdown-container">
                    <div class="as-navbar__dropdown-content">
                    <a href="/layanan/pulsa-seluler"  class="as-navbar__dropdown-link">
                    <div class="as-navbar__container">
                    <img src="https://gamesaiden.000webhostapp.com/img/Pulsa.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu" />
                    <div class="as-navbar__content">
                    <p class="as-navbar__title">Pulsa Seluler</p>
                    <p class="as-navbar__description">Tersedia Pulsa All Operator & Termurah</p>
                    </div>
                    </div>
                    </a>
                    <a href="/layanan/game" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
                    <div class="as-navbar__container">
                    <img src="https://gamesaiden.000webhostapp.com/img/Game.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu cloud vps hosting" />
                    <div class="as-navbar__content">
                    <p class="as-navbar__title">Game</p>
                    <p class="as-navbar__description">Tersedia Item Game Termurah & 100% Aman</p>
                    </div>
                    </div>
                    </a>
                    <a href="/layanan/voucher-game" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                    <div class="as-navbar__container">
                    <img src="https://gamesaiden.000webhostapp.com/img/giftcard.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                    <div class="as-navbar__content">
                    <p class="as-navbar__title">Voucher Game</p>
                    <p class="as-navbar__description">Voucher Google Play Untuk Belanja Buku & Voucher Lainnya</p>
                    </div>
                    </div>
                    </a>
                    <a href="/layanan/aplikasi-premium" onclick="trackingClickCTA('CTA Click', 'Homepage_ManagedWordPress_Clicked')" class="as-navbar__dropdown-link">
                    <div class="as-navbar__container">
                    <img src="https://gamesaiden.000webhostapp.com/img/netflix.png" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu managed wordpress" />
                    <div class="as-navbar__content">
                    <p class="as-navbar__title">Aplikasi Premium</p>
                    <p class="as-navbar__description">Dapatkan Aplikasi Premium Favorit Anda</p>
                    </div>
                    </div>
                    </a>
                    </div>
                    </div>
                    </div>
                    </li>
                  
                    <!-- Harga -->
                    <li class="nav-item">
                        <div class="dropdown as-dropdown-menu">
                          <a>
                        <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px; color:white">
                        Harga</div></a>
                        <div class="as-navbar__dropdown-container">
                        <div class="as-navbar__dropdown-content">
                        <a href="/harga/tsel"  class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/unlimited-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Telkomsel</p>
                        </div>
                        </div>
                        </a>
                        <a href="/harga/indosat" onclick="trackingClickCTA('CTA Click', 'Homepage_CloudHost_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/cloud-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu cloud vps hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Indosat</p>
                        
                        </div>
                        </div>
                        </a>
                        <a href="/harga/xl" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">XL</p>
                        
                        </div>
                        </div>
                        </a>
                        <a href="/harga/axis" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Axis</p>
                        
                        </div>
                        </div>
                        </a>
                        <a href="/harga/smartfren" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Smartfren</p>
                        
                        </div>
                        </div>
                        </a>
                        <a href="/harga/mobile-legends" onclick="trackingClickCTA('CTA Click', 'Homepage_WordpressHost_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/wordpress-hosting.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu wordpress hosting" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Mobile Legends</p>
                        
                        </div>
                        </div>
                        </a>
                        <a href="/belum-tau-kemana" onclick="trackingClickCTA('CTA Click', 'Homepage_ManagedWordPress_Clicked')" class="as-navbar__dropdown-link">
                        <div class="as-navbar__container">
                        <img src="https://www.niagahoster.co.id/assets/images/2021/arunika/navbar/managed-wordpress.svg" class="as-navbar__icon img-fluid" height="50" width="50" loading="lazy" alt="icon menu managed wordpress" />
                        <div class="as-navbar__content">
                        <p class="as-navbar__title">Lihat Semuanya</p>
                       
                        </div>
                        </div>
                        </a>
                        </div>
                        </div>
                        </div>
                        </li>
                        <a href="/about">
                        <li class="nav-item">
                            <div class="dropdown as-dropdown-menu">
                            <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px; color:white">
                            About</div> </a> 
                        </div>
                        </li>  
                        <a href="/faq">
                        <li class="nav-item">
                            <div class="dropdown as-dropdown-menu">
                            <div class="as-navbar__dropdown-button" style="margin-top: 10px; margin-left: px; color:white">
                            FAQ</div> </a> 
                        </div>
                        </li>
                      </ul>
                        
                        @auth
                        <li class="nav-item">
                          <div class="dropdown as-dropdown-menu">
                            <a href="">
                          <div class="as-navbar__dropdown-button" style="margin-top: 10px">
                            <i class="bi bi-person-fill" style="font-size: 25px"></i></div></a>
                          <div class="as-navbar__dropdown-container">
                          <div class="as-navbar__dropdown-content">
                          <a class="as-navbar__dropdown-link">
                          <p class="as-navbar__title">Haii, {{ auth()->user()->name }} </p>
                          </a>
                          <a href="/layanan/pulsa-seluler"  class="as-navbar__dropdown-link">
                          <p class="as-navbar__title"><i class="bi bi-cart3"></i>  Order</p>
                          </a>
                          <a href="/layanan/pulsa-seluler"  class="as-navbar__dropdown-link">
                          <p class="as-navbar__title"><i class="bi bi-box-arrow-right"></i>  Logout</p>
                          </a>
                          @else
                          <div class="gap-3">
                            <a href="/login">
                            <button class="btn btn-primary">Login / Register</button></a>
                          </div>
                          @endauth    
              </div>
            </nav>

            <div class="container mt-4">
             @yield('navbarku')
            
        --}}
       
    