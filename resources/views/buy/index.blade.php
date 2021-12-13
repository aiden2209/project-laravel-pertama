@extends('layout.main')
@section('navbarku')
<div class="col-md-12 col-sm-12 col-lg-8">
    <form action="/order/proses"  method="get"  >
      @csrf
    <div class="row">                 
    <div class="col-12 mb-3">
    <div class="card">
    <div class="card-body">
    <div class="text-white text-center position-absolute circle-primary"></div><h5 style="margin-bottom: -50px">Lengkapi data</h5>
    <hr><div class="form-row mt-4">
    <div class="col" style="margin-top: -50px; margin-bottom: -50px">
  <input type="number" class="form-control @error ('UserID') is-invalid @enderror" name="UserID" placeholder="Masukan UserID" required value="{{ old('UserID') }}">
  @error('UserID')
  <div class="ivalid-feedback">
   <p class="text-danger"> User ID minimal 5 Karakter!</p>
  </div>
  @enderror
      </div>
      <div class="col" style="margin-top: -50px">
          <input type="number" class="form-control @error ('ServerID') is-invalid @enderror" name="ServerID" placeholder="Masukan ServerID" value="{{ old('ServerID') }}" required>
          @error('ServerID')
          <div class="ivalid-feedback">
            <p class="text-danger"> Server ID minimal 4 Karakter!</p>
          </div>
          @enderror
      </div>
  </div>
 
       </div>
        </div>
        
    </div>
             <div id="note"></div>
  <div class="col-12 mb-3">
  <div class="card">
          <div class="card-body">
          <div class="text-white text-center position-absolute circle-primary"></div>
          <h5 style="margin-bottom: -50px">Pilih Nominal</h5>
              <hr><div class="mt-4">
                  <div class="panel-topup" style="margin-top:-50px ">
                    @error('Nominal')
                    <div class="ivalid-feedback">
                     <p class="text-danger"> Pilih Nominal!</p>
                    </div>
                    @enderror
                      <input class="@error ('Nominal') is-invalid @enderror" type="radio" id="Nominal0" name="Nominal" value="Diamonds 86" required>
        <label for="Nominal0">86 Diamonds</label><input type="radio" id="Nominal1" name="Nominal" value="Diamonds 172">
        <label for="Nominal1">172 Diamonds</label><input type="radio" id="Nominal2" name="Nominal" value="Diamonds 257">
        <label for="Nominal2">257 Diamonds</label><input type="radio" id="Nominal3" name="Nominal" value="Diamonds 344">
        <label for="Nominal3">344 Diamonds</label><input type="radio" id="Nominal4" name="Nominal" value="Diamonds 429">
        <label for="Nominal4">429 Diamonds</label><input type="radio" id="Nominal5" name="Nominal" value="Diamonds 514">
        <label for="Nominal5">514 Diamonds</label><input type="radio" id="Nominal6" name="Nominal" value="Diamonds 706">
        <label for="Nominal6">706 Diamonds</label><input type="radio" id="Nominal7" name="Nominal" value="Diamonds 878">
        <label for="Nominal7">878 Diamonds</label><input type="radio" id="Nominal8" name="Nominal" value="Diamonds 963">
        <label for="Nominal8">963 Diamonds</label><input type="radio" id="Nominal9" name="Nominal" value="Diamonds 1412">
        <label for="Nominal9">1412 Diamonds</label><input type="radio" id="Nominal10" name="Nominal" value="Diamonds 2195">
        <label for="Nominal10">2195 Diamonds</label><input type="radio" id="Nominal11" name="Nominal" value="Diamonds 3688">
        <label for="Nominal11">3688 Diamonds</label><input type="radio" id="Nominal12" name="Nominal" value="Diamonds 5532">
        <label for="Nominal12">5532 Diamonds</label><input type="radio" id="Nominal13" name="Nominal" value="Diamonds 9288">
        <label for="Nominal13">9288 Diamonds</label><input type="radio" id="Nominal14" name="Nominal" value="Twilight Pass">
        <label for="Nominal14">Twilight Pass</label><input type="radio" id="Nominal15" name="Nominal" value="Starlight Member">
        <label for="Nominal15">Starlight Member</label><input type="radio" id="Nominal16" name="Nominal" value="Starlight Member Plus">
        <label for="Nominal16">Starlight Member Plus</label><input type="radio" id="Nominal17" name="Nominal" value="Starlight Member Plus">
        </div>
        </div>
        </div>
        </div>
        </div>




        <div class="col-12 mb-3">
          <div class="card">
                  <div class="card-body">
                  <div class="text-white text-center position-absolute circle-primary"></div>
                  <h5 >Pilih metode pembayaran</h5>
                      <hr><div class="mt-4">
                          <div class="methods">
                              <input class="mtdbtn" type="radio" id="Payment0" name="Payment" value="BCA : 243234113" required>
<label class="mtdlabel" for="Payment0"><img src="https://xcashshop.com/assets/images/1623472818.png
" class="img-fluid">
<p class="float-right">
<span class="badge badge-success" id="TRANSFER_BANK_BCA"></span>
</p>
</label>
<input class="mtdbtn" type="radio" id="Payment3" name="Payment" value="VA BNI : 9863491238612631">
<label class="mtdlabel" for="Payment3"><img src="https://xcashshop.com/assets/images/1623472929.png" class="img-fluid">
<p class="float-right">
<span class="badge badge-success" id="VA_BNI"></span>
</p>
</label>
<input class="mtdbtn" type="radio" id="Payment2" name="Payment" value="VA MANDIRI : 981237641273612">
<label class="mtdlabel" for="Payment2"><img src="https://xcashshop.com/assets/images/1623472949.png" class="img-fluid">
<p class="float-right">
<span class="badge badge-success" id="VA_MANDIRI"></span>
</p>
</label>  
<input class="mtdbtn" type="radio" id="Payment1" name="Payment" value="Copy Untuk Menampilkan">
<label class="mtdlabel" for="Payment1"><img src="https://xcashshop.com/assets/images/1625996778.png" class="img-fluid">
<p class="float-right">
<span class="badge badge-success" id="QRIS"></span>
</p>
</label>                                     </div>
                      </div>
                  </div>
              </div>
          </div>


                            {{-- <div class="col-12 mb-3">
                            <div class="card">
     <div class="card-body">
    <div class="text-white text-center position-absolute circle-primary"></div>
     <h5 style="margin-bottom: -50px">Pilih metode pembayaran</h5>
           <hr><div class="mt-4">
           <div class="methods" style="margin-top: -50px">
            @error('Payment')
            <div class="ivalid-feedback">
             <p class="text-danger"> Pilih Metode Pembayaran!</p>
            </div>
            @enderror
           <input class="mtdbtn @error ('Payment') is-invalid @enderror" type="radio" id="Payment" name="Payment" value="Ewalet okkk" >
           <label class="mtdlabel" for="Payment"><img src="https://xcashshop.com/assets/images/1625996778.png" class="img-fluid">
            
        <p class="float-right">
       <span class="badge badge-success" id="QRIS"></span>
                   </p>

               </label>
                 </div>
                </div>
               </div>
            </div>
           </div> --}}
           <div class="col-12 mb-3">
               <div class="card">
  <div class="card-body">
  <div class="text-white text-center position-absolute circle-primary"></div>
  <h5 style="margin-bottom:-50px ">Masukan nomor WhatsApp</h5>
      <hr><div class="mt-4">
          <input  style="margin-top: -50px" type="number" class="form-control @error ('WhatsApp') is-invalid @enderror" id="WhatsApp" name="WhatsApp" placeholder="08xxxxxxxxx"
              required>
              @error('WhatsApp')
              <div class="ivalid-feedback">
               <p class="text-danger"> Nomor Whats App minimal 10 Karakter!</p>
              </div>
              @enderror
                       </div>
     </div>
      </div>
   </div>
      <div class="col-12 mb-3">
   <!-- button 1 -->
   <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
   <!-- button 2 -->
   <button class="btn btn-primary btn-loading d-none" type="button" disabled>
     <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
     Loading...
   </button>     
      </div> 
        </div>   
          </div>
      </form>
    </body> 

    


    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbxlU57eFJz8BGu8BXa70Y6wUf6ghfyceVeunFKnEYZ2XuoM4x_XaGdc1Sxi1FRDN2QFjg/exec'
      const form = document.forms['wpu-contact-form'];
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');
      const myAlert = document.querySelector('.my-alert')
    
      form.addEventListener('submit', e => {
        e.preventDefault()
        // ketika tombol submit diklik
        // tampilkan tombol loading, hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, { method: 'post', body: new FormData(form)})
          .then(response => {
            // tampilkan tombol kirim, hilangkan loading
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
             // tampilkan alert
             myAlert.classList.toggle('d-none');
            //  reset formnya
            form.reset();
            console.log('Success!', response);
           
          })
          .catch(error => console.error('Error!', error.message))
      })
    </script>
        <style>


        
 /* ini strip */
 .strip-primary {
  background-color: #0061fd;
  position: absolute;
  width: 40px;
  height: 5px;
  border-radius: 10px;
 }
 /* ini radio */
 input[type="radio"] {
  color: white;
  display: none;
  margin: 20px;
  cursor: pointer;
 }
 
 input[type="radio"]:checked + label {
  text-align: center;
  background-image: none;
  background-color: #0061fd;
  color: white;
  cursor: pointer;
  border-radius: 5px;
  width: 49%;
  font-size: 14px;
 }
 
 input[type="radio"] + label {
  text-align: center;
  color: #292929;
  display: inline-block;
  padding: 5px;
  background-color: #fdfdfd;
  border-color: #0061fd;
  border: 2px solid #0061fd;
  cursor: pointer;
  border-radius: 5px;
  width: 49%;
  font-size: 14px;
 }
 
 /* ini style radio */
 @media (min-width: 576px) {
  input[type="radio"]:checked + label {
    width: 210px;
    font-size: 14px;
    padding: 5px;
  }
 
  input[type="radio"] + label {
    width: 210px;
    font-size: 14px;
    padding: 5px;
  }
 }
 
 /* ini payment */
 .mtdbtn:checked + .mtdlabel {
  text-align: left;
  background-color: #0066ff;
  -webkit-filter: grayscale(0%);
  /* Safari 6.0 - 9.0 */
  filter: grayscale(0%);
  cursor: pointer;
  padding: 14px;
  border: 0px;
 }
    </style>


@endsection