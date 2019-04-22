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
    <link rel="stylesheet" href="<?php echo base_url().'assets/styleHotel.css'?>">
    <title>Jadwal Penerbangan</title>
</head>
<body>
    <p class="text-1">Select Hotel</p>
    <p class="text-2">Hotel in Bandung, Indonesia</p>
        <p>
                                                                                                                                                              
                                                                            <small>
                                                            <a class="popup-text btn btn-info" style="position:relative;left:8px;bottom:8px;" href="<?php echo site_url("c_main_page/addFlight")?>" id="cari_rute" data-effect="mfp-zoom-out" style="float: right;">
                                                                <b style="font-size:16px;" id="changeSearch">Tambah Hotel</b>
                                                            </a>
                                                        </small>
        </p>
<br>

<!-- HOTEL 1 -->
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

                        <button type="submit" name="button" class="btnSelect">Select</button>
                        <button type="submit" name="button" class="btnSelect">Edit</button>
                        <button type="submit" name="button" class="btnSelect">Delete</button>
                    </li>
                </ul>
            </div>
        </div>
    </form>
    </div>
    <!-- BARIS 2 -->
    <div class="row">
        <div class="col">
            <div class="tableSelect">
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

<!-- PENERBANGAN 2 -->
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
                        <p class="text-3">SJ582 Non Stop</p>
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
                            10.00
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
                            13.20
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
                        <p class="text-4">IDR 1.938.000</p>
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

                        <button type="submit" name="button" class="btnSelect">Select</button>
                        <button type="submit" name="button" class="btnSelect">Edit</button>
                        <button type="submit" name="button" class="btnSelect">Delete</button>
                    </li>
                </ul>
            </div>
        </div>
    </form>
    </div>
    <!-- BARIS 2 -->
    <div class="row">
        <div class="col">
            <div class="tableSelect">
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
                        <th>SJ582</th>
                        <th>18-MAY-19</th>
                        <th>CGK-UPG</th>
                        <th>10:00</th>
                        <th>13:20</th>
                        <th>02:20</th>
                        <th>0</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- PENERBANGAN 2 -->
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
                        <p class="text-3">SJ588 Non Stop</p>
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
                            15.30
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
                            18.50
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
                        <p class="text-6">IDR 2.947.900</p>
                    </li>
                    <li>
                        <p class="text-4">IDR 2.474.000</p>
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

                        <button type="submit" name="button" class="btnSelect">Select</button>
                        <button type="submit" name="button" class="btnSelect">Edit</button>
                        <button type="submit" name="button" class="btnSelect">Delete</button>
                    </li>
                </ul>
            </div>
        </div>
    </form>
    </div>
    <!-- BARIS 2 -->
    <div class="row">
        <div class="col">
            <div class="tableSelect">
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
                        <th>SJ588</th>
                        <th>18-MAY-19</th>
                        <th>CGK-UPG</th>
                        <th>15:30</th>
                        <th>18:50</th>
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
    </script>
   
    
    
    
</body>
</html>