<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url().'assets/styleJadwal.css'?>">
    <title>Jadwal Penerbangan</title>
    <style type="text/css">
        .noborder table,tr,td {
            border-style: none;
        }
    </style>
</head>
<body>
    <p class="text-1">Select Departure</p>
    <p class="text-2">Jakarta (CGK) / Soekarno Hatta International Airport  Ujung Pandang (UPG) 
        <span class="glyphicon glyphicon-arrow-right"></span>
        Makassar - Sultan Hasanuddin</p>

        <p>
                    18 May 2019 for 1 Adult 0 Child 0 Infant
        </p>
<br>
<p class="text-2">Flights Departure
</p>
<!-- PENERBANGAN 1 -->
<div class="jumbotron">
    <!-- BARIS 1 -->
    <div class="row">
        <!-- COLOUMN 1 -->
        <div class="col">
            <div class="kotak1">
                <ul class="listKotak">
                    <li>
                        <img src="<?php echo base_url().'assets/AssetsJadwal/sj_flight_result.png'?>" alt="">
                    </li>
                    <li>
                        <p class="text-3">SJ590 Non Stop</p>
                    </li>
                </ul>
            </div>
        </div>    
        <!-- COLOUMN 2 -->
        <div class="col">
            <div class="kotak2">
                <ul class="listKotak">
                    <li>
                        <p class="text-4">
                            <img src="<?php echo base_url().'assets/AssetsJadwal/takeoff.png'?>" alt="" style="width:32px;">
                            05.00
                        </p>
                    </li>
                    <li>
                        <p class="text-5">Sat, May 18</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- COLOUMN 3 -->
        <div class="col">
            <div class="kotak2">
                <ul class="listKotak">
                    <li>
                        <p class="text-4">
                            <img src="<?php echo base_url().'assets/AssetsJadwal/landing.png'?>" alt="" style="width:32px;">
                            08.20
                        </p>
                    </li>
                    <li>
                        <p class="text-5">Sat, May 18</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- COLOUMN 4 -->
        <div class="col">
                <div class="kotak2">
                        <ul class="listKotak">
                            <li>
                                <p class="text-4">
                                02.20
                                </p>
                            </li>
                        </ul>
                    </div>
        </div>
        <!-- COLUMN 5 -->
        <form method="POST" action="<?php echo site_url("c_main_page/")?>" >
        <div class="col">
            <div class="kotak2">
                <ul class="listKotak">
                    <li>
                        <p class="text-6">IDR 2.211.900</p>
                    </li>
                    <li>
                        <p class="text-4">IDR 1.817.000</p>
                    </li>
                    <li>
                        <p class="text-7">/passenger</p>
                    </li>
                    <li>
                        <p class="text-5">Economy Class</p>
                    </li>
                    <li>
                        <input type="hidden" name="id_penerbangan" value=""/>
                        <input type="hidden" name="no_penerbangan" value=""/>
                        <input type="hidden" name="no_booking" value=""/>

                    </li>
                </ul>
            </div>
        </div>
    </form>

    <section class="noborder">
    <table >
    <tr><td><button  onclick="klik()" name="button" class="btnSelect" >Select</button></td></tr>
    </table>
    </section>

    </div>
    <!-- BARIS 2 -->
    <div class="row">
        <div class="col">
            <div id="klik" class="tableSelect" style="display: none;">
                <table>
                    <tr class="tr1">
                        <th>Flight No</th>
                        <th>Date</th>
                        <th>Route</th>
                        <th>STD</th>
                        <th>STA</th>
                        <th>Duration</th>
                        <th>Transit</th>
                    </tr>
                    <tr class="tr2">
                        <th>SJ590</th>
                        <th>18-MAY-19</th>
                        <th>CGK-UPG</th>
                        <th>05:00</th>
                        <th>08:20</th>
                        <th>02:20</th>
                        <th>0</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function order(){
     


    }

    function klik() {
    var x = document.getElementById("klik");
    x.style.display = "flex";  
    }
    </script>
   
    
    
    
</body>
</html>