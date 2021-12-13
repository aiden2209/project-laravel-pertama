@extends('layout.main')
@section('navbarku')
    

<?php

    
    $UserID=$_GET['UserID'];
    $ServerID=$_GET['ServerID'];
    $Nominal=$_GET['Nominal'];
    $Payment=$_GET['Payment'];
    $WhatsApp=$_GET['WhatsApp'];
    

    


    // if ( !isset ($_GET["UserID"]) ||
    //      !isset ($_GET["ServerID"]) ||
    //      !isset ($_GET["Nominal"]) ||
    //      !isset ($_GET["Payment"]) ||
    //      !isset ($_GET["WhatsApp"])) {}
       
            
    
    
    

//     if(isset($_GET['save'])){
//         $id = $_GET['id'];
//         $zone = $_GET['zone'];
//         $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, "https://api-xyz.com/trueid/mobilelegends/?id="
//     .$id."&zone=".$zone."&token=NguyenThuWan");
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
//    $hasil = curl_exec($ch);
//    curl_close($ch);
//    $hasil = json_decode($hasil,true);
//     }
    
    ?>
<div class="container">
            <table
                class="table table-bordered border-2"
                cellpadding="15"
                cellspacing="0"
            >
                <tr>
                    <th>User ID</th>
                    <th>Server ID</th>
                    <th>Nominal</th>
                    <th>Nomor WhatsApp</th>
                    
                </tr>

                <tr>
                    <td> {{ $UserID }}</td>
                    <td> {{ $ServerID }}</td>
                    <td>{{ $Nominal }}</td>
                    <td>{{ $WhatsApp }}</td>
                   
                </tr>
            </table>

            <div class="container">
                <div class="row">
                  <div class="col">
                    <strong>Payment</strong> 
                    <p class="text"> 
                        <input class="id" type="text" value="{{ $Payment }}" id="CopyFromInput" readonly></p>
                            <i style="font:italic">Klik Tombol ini<button class="btn" onclick="jscopy('CopyFromInput')"> 
                                <i class="bi bi-clipboard"></i></button>Untuk Menyalin Rekening </i><br>
                                <a href="https://gamesaiden.000webhostapp.com/img/DLN3986%20(1).png">
                                <button class="btn btn-primary btn-sm">Bayar Dengan QRIS</button></a>

                                
                            
                  </div>
                  <div class="col">
                   <strong> Detail Pesanan</strong>
                   <p>Harga : <strong>Rp. 2.072.000</strong></p>
                   <p>Biaya Admin : <strong>Rp. 4.500</strong></p>
                   <p>Jumlah : <strong>Rp. 2.076.500</strong></p>
                  </div>
                </div><hr>
                <button class="btn btn-primary" style="margin-top: -150px;
                    margin-right: -20px;
                    margin-left: auto; margin-bottom: -100px;">konfirmasi</button>

              </div>
              <!-- ini btn konfirmasi -->
     

       
          

            <script>
            function jscopy(elementID) {
              var jsCopy = document.getElementById(elementID);
              
              jsCopy.select();
              jsCopy.setSelectionRange(0, 99999)
              document.execCommand("copy");
              document.getElementById("PesanCopy").innerHTML = msg+jsCopy.value+'</p>';
            }
            </script><br><br>
            <div id="PesanCopy"></div>
            <style>
                
                .id{
                    box-sizing: border-box;
                    border: solid;
                    border-width: 0;
                    text-overflow: clip;
                    margin-top: -5px;
                    padding-left: -40px;
                    font-size: 20px;
                    font-weight: 700;
                }
                
               
            </style>
        </div>

        @endsection
  
     