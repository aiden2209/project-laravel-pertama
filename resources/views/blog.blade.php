@extends('layout.2')
@section('container')
    


<div class="bottom-header front-page">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1>Murah<span class="span-dot">.</span>Aman<span class="span-dot">.</span>Cepat</h1>
</div>
<div class="col-sm-8 col-sm-offset-2">
<div class="section-description">Delina adalah website Top Up Game dan Agen PPOB Termurah</div>
@auth
<a href="/login" title="Download" class="header-button-two">Order Sekarang</a>  
@else
<a href="/login" title="Download" class="header-button-two">Login</a>
@endauth
</div>
</div>
</div>
</div>
</header>
<section id="about" class="front-page-section" style="">
<div class="section-header">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>Delina Adalah</h3>
</div>
<div class="col-sm-10 col-sm-offset-1">
<div class="section-description">Delina Adalah sebuah platform bisnis yang menyediakan berbagai layanan Item Game dan PPOB termurah.
    Dengan bergabung bersama kami, Anda dapat menjadi penjual Pulsa, Item Game, Token Listrik dan raih keuntungan yang besar.
    Saat ini tersedia berbagai layanan untuk Pulsa Seluler, Paket Data, Mobile Legends, Free Fire, Call of Duty, dll.
    </div>
</div>
</div>
</div>
</div>
</section>
<section id="latest-news" class="front-page-section">
<div class="section-header">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>Post Terbaru</h3>
</div>
<div class="col-sm-10 col-sm-offset-1">
<div class="section-description">Baca juga berita-berita menarik yang kami unggah di blog website ini.</div>
</div>
</div>
</div>
</div>
<a href="/posts/all-post" title="See blog" class="latest-news-button"><i class="fa fa-chevron-circle-right"></i>Lihat Semua </a>
<div class="section-content">
<div class="container">
<div class="row blog-carousel">
<div class="illdy-blog-post col-md-4 col-sm-6 col-xs-12">
<div class="post" style="
								">
<div class="post-image" style="background-image: url('https://demo.colorlib.com/illdy/wp-content/uploads/sites/58/2016/02/photo-1449168013943-3a15804bb41c-360x213.jpg');"></div>
<h5><a href="https://demo.colorlib.com/illdy/we-have-made-illdy-theme-seo-friendly/" title="We Have Made Illdy Theme SEO Friendly" class="post-title">We Have Made Illdy Theme SEO Friendly</a></h5>
<div class="post-entry">
Illdy One Page WordPress theme is fully SEO friendly and is ready to help you to achieve the highest rankings&hellip; </div>
<a href="#" title="Read more" class="post-button"><i class="fa fa-chevron-circle-right"></i>Read more </a>
</div>
</div>
<div class="illdy-blog-post col-md-4 col-sm-6 col-xs-12">
<div class="post" style="
								">
<div class="post-image" style="background-image: url('https://demo.colorlib.com/illdy/wp-content/uploads/sites/58/2016/02/photo-1450101215322-bf5cd27642fc-360x213.jpg');"></div>
<h5><a href="https://demo.colorlib.com/illdy/stunning-one-page-wordpress-theme-masses/" title="Stunning One Page WordPress Theme For Masses" class="post-title">Stunning One Page WordPress Theme For Masses</a></h5>
<div class="post-entry">
This theme is not just free, it is free for private and commercial use since it is licensed under GPL&hellip; </div>
<a href="#" title="Read more" class="post-button"><i class="fa fa-chevron-circle-right"></i>Read more </a>
 </div>
</div>
<div class="illdy-blog-post col-md-4 col-sm-6 col-xs-12">
<div class="post" style="
								">
<div class="post-image" style="background-image: url('https://demo.colorlib.com/illdy/wp-content/uploads/sites/58/2016/02/photo-1447687643809-e05fd462f350-360x213.jpg');"></div>
<h5><a href="https://demo.colorlib.com/illdy/hello-world/" title="Hello world!" class="post-title">Hello world!</a></h5>
<div class="post-entry">
Welcome to colorlib.com. This is our first post around Illdy WordPress theme. Now show that you can make out of it.&hellip; </div>
<a href="#" title="Read more" class="post-button"><i class="fa fa-chevron-circle-right"></i>Read more </a>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="counter" class="front-page-section" style="background-image: url(https://gamesaiden.000webhostapp.com/img/alexey.jpg);background-color:#000000;">
<div class="counter-overlay"></div>
<div class="container">
<div class="row inline-columns">
<div id="illdy_counter-4" class="col-sm-4 col-xs-12 widget_illdy_counter">
    <span class="counter-number">12.826.163</span>
    <span class="counter-description">Total Transaksi</span>
</div>
<div id="illdy_counter-3" class="col-sm-4 col-xs-12 widget_illdy_counter">
    <span class="counter-number">2332</span>
    <span class="counter-description">Klien</span>
</div>
</div>
</section>
<section id="team" class="front-page-section">
<div class="section-header">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>Tim Kami</h3>
</div>
<div class="col-sm-10 col-sm-offset-1">
<div class="section-description">Beberapa anggota tim kami.</div>
</div>
</div>
</div>
</div>

<div class="section-content">
<div class="container">
<div class="row inline-columns">
<div id="illdy_person-5" class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 widget_illdy_person">
    <div class="person clearfix" data-person-color="#f18b6d">
             <div class="person-image">
                      <img src="https://gamesaiden.000webhostapp.com/img/vabell.jpg" alt="Mark Lawrance" title="Mark Lawrance" style="display:none;visibility:hidden;" />
                      
               </div>
               <div class="person-content">
                      <h6>Vabell</h6>
                      <p class="person-position">Owner</p>
                      
                      <ul class="person-content-social clearfix">
                             <li><a href="#" title="Facebook" target="_blank" rel="nofollow">
                                   <i class="fa fa-facebook"></i>
                             </a>
                      </li>
                      <li><a href="#" title="Twitter">
                             <i class="fa fa-twitter" target="_blank" rel="nofollow"></i>
                      </a>
               </li>
               <li><a href="#" title="LinkedIn">
                      <i class="fa fa-linkedin" target="_blank" rel="nofollow"></i>
                   </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="illdy_person-4" class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 widget_illdy_person">
    <div class="person clearfix" data-person-color="#f1d204">
        <div class="person-image">
            <img src="https://gamesaiden.000webhostapp.com/img/resa.jpg" class="rounded-circle" alt="Jane Stenton" title="Jane Stenton" />
            
        </div>
        <div class="person-content">
            <h6>Resyaani</h6>
            <p class="person-position">Marketing</p>
            <ul class="person-content-social clearfix">
                <li>
                    <a href="#" title="Facebook" target="_blank" rel="nofollow">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li><a href="#" title="Twitter">
                    <i class="fa fa-twitter" target="_blank" rel="nofollow">
                        </i>
                    </a>
                </li>
                <li><a href="#" title="LinkedIn">
                    <i class="fa fa-linkedin" target="_blank" rel="nofollow">
                        </i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

</div>
</div>
</div>

</section>
<section id="contact-us" class="front-page-section">
<div class="section-header">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>Hubungi Kami</h3>
</div>
</div>
</div>
</div>
<div class="section-content">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row" style="margin-bottom: 45px;">
<div class="col-sm-4">
<div class="contact-us-box">
<div class="box-left" data-customizer="box-left-address-title">
Alamat </div>
<div class="box-right">
<span class="box-right-row" data-customizer="contact-us-address-1">Jl.Merdeka Pangandaran No.20 Wonoharjo, </span>
<span class="box-right-row" data-customizer="contact-us-address-2">Indonesia, Jawa Barat</span>
</div>
</div>
</div>
<div class="col-sm-5">
<div class="contact-us-box">
<div class="box-left" data-customizer="box-left-customer-support-title">
Dukungan Pelanggan</div>
<div class="box-right">
<span class="box-right-row">E-mail: <a href="mailto:suport@delina.densproid.xyz" title="suport@delina.densproid.xyz"><span>[email&#160;protected]

</span>
</a>
</span>
<a href="tel:083112685315">
<span class="box-right-row" data-customizer="contact-us-phone">Telepon: 0831 1268 5315</span>
</a>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="contact-us-social">
<a href="https://twitter.com/colorlib" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="https://www.facebook.com/colorlib" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div role="form" class="wpcf7" id="wpcf7-f128-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true">
    </p> 
</div>

</div> 
</div>
</div>
</div>
</div>
</section>
@endsection




   
  
