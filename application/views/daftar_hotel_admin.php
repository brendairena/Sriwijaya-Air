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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="<?php echo base_url().'assets/styleHotel.css'?>">
    <title>Daftar Hotel</title>
</head>
<body>
    <div class="container-fluid">
    <p class="text-1">Select Hotel</p>
        <p>
            <small>
            <a class="popup-text btn btn-info" style="position:relative;left:8px;bottom:8px;" href="<?php echo site_url("c_main_page/addHotel")?>" id="cari_rute" data-effect="mfp-zoom-out" style="float: right;">
            <b style="font-size:16px;" id="changeSearch">Tambah Hotel</b>
            </a>
            </small>
        </p>
<br>

<!-- HOTEL 1 -->

<?php foreach ($data_ke_view as $data): ?>
<div class="jumbotron">
    <!-- BARIS 1 -->
    <div class="row">
        <!-- COLOUMN 1 -->
        <div class="col">
            <div class="kotak1">
                <ul class="listKotak">
                    <li>
                        <img src="<?php echo base_url().'assets/AssetsHotel/luxury.png'?>" alt="" width="100px">
                    </li>
                    <li>
                        <p class="text-3"><?php echo $data['nama_hotel']?></p>
                    </li>
                </ul>
            </div>
        </div>    
        <!-- COLOUMN 2 -->
        <div class="col">
            <div class="kotak2">
                <ul class="listKotak">
                    <li>
                        <p class="text-5">
                            <i class='fas fa-calendar-alt'></i>
                            check in
                        </p>
                    </li>
                    <li>
                        <p class="text-4">Sat, May 18</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- COLOUMN 3 -->
        <div class="col">
            <div class="kotak2">
                <ul class="listKotak">
                    <li>
                        <p class="text-5">
                            <i class='far fa-calendar-alt'></i>
                            check out
                        </p>
                    </li>
                    <li>
                        <p class="text-4">Sun, May 19</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- COLOUMN 4 -->
        <div class="col">
                <div class="kotak2">
                        <ul class="listKotak">
                            <li>
                                <i class='fas fa-star' style='font-size:15px;color:yellow'></i>
                                <i class='fas fa-star' style='font-size:15px;color:yellow'></i>
                                <i class='fas fa-star' style='font-size:15px;color:yellow'></i>
                                <i class='fas fa-star' style='font-size:15px;color:yellow'></i>
                                <i class='fas fa-star' style='font-size:15px;color:yellow'></i>
                            </li>
                        </ul>
                    </div>
        </div>
        <!-- COLUMN 5 -->
        <form method="POST" action="">
        <div class="col">
            <div class="kotak2">
                <ul class="listKotak">
                    <li>
                        <p class="text-4">IDR <?php echo $data['harga']?></p>
                    </li>
                    <li>
                        <i class='fas fa-map-marker-alt' class="text-7"><?php echo $data['lokasi']?></i>
                    </li>
                    <li>
                        <p class="text-5"><?php echo $data['jenis_kamar']?></p>
                    </li>
                    <!-- <li>
                        <input type="hidden" name="id_penerbangan" value=""/>
                        <input type="hidden" name="no_penerbangan" value=""/>
                        <input type="hidden" name="no_booking" value=""/>
                    </li> -->
                </ul>
            </div>
        </div>
    </form>

    <section class="noborder">
    <table >
    <tr><td><button  onclick="klik()" name="button" class="btnSelect" >Select</button></td></tr>
    <tr><td><button onClick='window.location.replace("<?php echo site_url("c_main_page/edithotel/").$data['id_hotel']?>")'name="button" class="btnSelect">Edit</button></td></tr>
    <tr><td><button onClick='window.location.replace("<?php echo site_url("c_main_page/deleteDataHotel/").$data['id_hotel']?>")' name="button" class="btnSelect">Delete</button></td></tr>
    </table>
    </section>

    </div>
    <!-- BARIS 2 -->
    <div class="row">
        <div class="col">
            <div id="klik" class="tableSelect" style="display: none;">
                <table>
                    <tr class="tr1">
                        <th>Nama Hotel</th>
                        <th>Check in</th>
                        <th>Check out</th>
                        <th>Lokasi</th>
                        <th>Rating</th>
                    </tr>
                    <tr class="tr2">
                        <th>The Luxury Hotel</th>
                        <th>18-MAY-19</th>
                        <th>19-MAY-19</th>
                        <th>Buah Batu, Bandung</th>
                        <th><i class='fas fa-star' style='font-size:15px;color:yellow'></i>
                            <i class='fas fa-star' style='font-size:15px;color:yellow'></i>
                            <i class='fas fa-star' style='font-size:15px;color:yellow'></i>
                            <i class='fas fa-star' style='font-size:15px;color:yellow'></i>
                            <i class='fas fa-star' style='font-size:15px;color:yellow'></i></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>




<script>
    function klik() {
    var x = document.getElementById("klik");
    x.style.display = "flex";  
    }

    function klik1() {
    var x = document.getElementById("klik1");
    x.style.display = "flex";  
    }

    function klik2() {
    var x = document.getElementById("klik2");
    x.style.display = "flex";  
    }
</script>   
</body>
</html>