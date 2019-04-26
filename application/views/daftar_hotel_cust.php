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
    <link rel="stylesheet" href="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/css/jquery.datetimepicker.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/styleHotel.css'?>">

    <title>Daftar Hotel</title>
</head>
<body>
    <p class="text-1">Select Hotel</p>
    <p class="text-2">Hotel in Bandung, Indonesia</p>
<br>

<?php foreach($data_ke_view as $data):?>
<!-- HOTEL 1 -->
<form method="POST" action="<?php echo site_url('c_main_page')?>">

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
                        <button class="btn btn-default" type="button" id="opendepartureDate"><span class="fas fa-calendar-week"></span></button>
                            <!-- <i class='fas fa-calendar-alt'></i> -->
                            cek in
                        </p>
                    </li>
                    <li>
                        <input type="text" class="form-control" id="departureDate" name="departureDate" required="" data-bv-notempty-message="Required." autocomplete="off">
                        <!-- <p class="text-4">Sat, May 18</p> -->
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
                        <button class="btn btn-default" type="button" id="checkout"><span class="fas fa-calendar-week"></span></button>
                            <!-- <i class='fas fa-calendar-alt'></i> -->
                            cek out
                        </p>
                    </li>
                    <li>
                        <input type="text" class="form-control" id="checkoutdate" name="checkout" required="" data-bv-notempty-message="Required." autocomplete="off">
                        <!-- <p class="text-4">Sat, May 18</p> -->
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
        <div class="col">
            <div class="kotak2">
                <ul class="listKotak">
                    <li>
                        <p class="text-6">IDR 2.500.000</p>
                    </li>
                    <li>
                        <p class="text-4">IDR 1.875.500</p>
                    </li>
                    <li>
                        <i class='fas fa-map-marker-alt' class="text-7">Buah Batu, Bandung</i>
                    </li>
                    <li>
                        <p class="text-5">Premier Room</p>
                    </li>
                    <li>
                        <input type="hidden" name="id_penerbangan" value=""/>
                        <input type="hidden" name="no_penerbangan" value=""/>
                        <input type="hidden" name="no_booking" value=""/>
                    </li>
                </ul>
            </div>
        </div>

    <section class="noborder">
    <table >
    <tr><td><button name="button" class="btnSelect" >Select</button></td></tr>

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
</form>

<?php endforeach;?>

<script>
    function order(){
     


    }
    function klik() {
    var x = document.getElementById("klik");
    x.style.display = "flex";  
    }
</script>
    
    <script type="text/javascript" language="javascript" src="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/js/jquery.datetimepicker.js"></script>
    <script type="text/javascript">
        $('#departureDate').datetimepicker({
            timepicker:false,
            format:'d-m-Y'
        });

        $('#checkoutdate').datetimepicker({
            timepicker:false,
            format:'d-m-Y'
        });


        $('#opendepartureDate').click(function(){
            $('#departureDate').datetimepicker('show');
        });

        $('#checkout').click(function(){
            $('#checkoutdate').datetimepicker('show');
        });
        $(document).ready(function() {
            /*window.setTimeout(function() {
                $(".alert-danger").slideUp(500, function(){
                    $(this).remove();
                });
            }, 3000);*/
            $('#departureDate').change(function() {
                $('#formCheckin').bootstrapValidator('revalidateField', 'departureDate');
            });


            $('#formCheckin').bootstrapValidator({
                message : 'This value is not valid',
                feedbackIcons : {
                    valid : 'glyphicon glyphicon-ok',
                    invalid : 'glyphicon glyphicon-remove',
                    validating : 'glyphicon glyphicon-refresh'
                },
                submitButtons: 'button[type="submit"]',
                fields : {
                    departureDate : {
                        validators : {
                            validators: {
                                date: {
                                    format: 'DD-MM-YYYY',
                                    message: 'The format is dd-mm-yyyy.'
                                }
                            }
                        }
                    },
                    bookingCode : {
                        validators : {
                            callback : {
                                callback : function(value, validator, $field) {
                                    if (value.length != 6) {
                                        return {
                                            valid: false,
                                            message: '6 Digits Alphabets.'
                                    }
                                }else{
                                    return true;
                                }
                            }
                        }
                    }
                },
                agree: {
                    validators : {
                        callback : {
                            callback : function(value, validator, $field) {
                                alert(value.val());
                                if (value.val() != 'yes') {
                                    return {
                                        valid: false
                                    }
                                }else{
                                    return true;
                                }
                            }
                        }
                    }
                }
            }
        }).on('status.field.bv', function(e, data) {

            data.bv.disableSubmitButtons(false);


        }).on('success.form.bv', function(e) {
            if($("#agree").val()!='yes'){
                e.preventDefault();
                $(".alert-danger").remove();
                $("#termsModal").modal('show');
            }
        });
        // Update the value of "agree" input when clicking the Agree/Disagree button
        $('#agreeButton, #disagreeButton').on('click', function() {
            var whichButton = $(this).attr('id');
            if(whichButton === 'agreeButton' ){
                $("#agree").val('yes');
                $("#formCheckin").submit();
            }else{
                $('#formCheckin').bootstrapValidator('revalidateField', 'departureDate');
            }
        });
        $('#termsModal').on('hide.bs.modal', function(e) {
            $('#formCheckin').bootstrapValidator('revalidateField', 'departureDate');
            $('#formCheckin').bootstrapValidator('revalidateField', 'bookingCode');
        })

    });
</script>    
</body>
</html>