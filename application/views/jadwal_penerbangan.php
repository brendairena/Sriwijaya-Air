<!DOCTYPE html>
<html class="js no-touch backgroundsize csstransforms3d csstransitions" style="overflow-y: hidden;"><!--<head> FLIGHT VIEW--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sriwijaya Air</title>
    
    <link href="<?php echo base_url().'assets/AssetsJadwal/jquery-ui.css'?>" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/font-googleapi-open-sans.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assetsJadwal/font-googleapi-open-sans_2.css'?>">
    <link id="bs-css" rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/bootstrap.css'?>">
	<link id="bs-css" rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/bootstrap-switch.css'?>">
	<!-- link rel="stylesheet" href="https://www.sriwijayaair.co.id/SJ/assets/css/bootstrap-datepicker.1.6.1.min.css" -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/font-awesome.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/flag-icon.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/icomoon.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/styles.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/mystyles.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/bootstrapValidator.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/hippie-blue.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/bootstrap-select.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/sweetalert.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/AssetsJadwal/jquery.fancybox.css'?>" media="screen">
        <div class="fit-vids-style" id="fit-vids-style" style="display: none;">­
            <style>                 .fluid-width-video-wrapper {                   width: 100%;                                position: relative;                         padding: 0;                              }                                                                                       .fluid-width-video-wrapper iframe,          .fluid-width-video-wrapper object,          .fluid-width-video-wrapper embed {             position: absolute;                         top: 0;                                     left: 0;                                    width: 100%;                                height: 100%;                            }          </style>
        </div>
        <script async="" src="<?php echo base_url().'assets/AssetsJadwal/analytics.js.download'?>"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-55574965-1', 'auto');
        ga('send', 'pageview');

</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://www.sriwijayaair.co.id",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+62-2129279777",
    "contactType": "call centre"
  }]
}
</script>
<link href="<?php echo base_url().'assets/AssetsJadwal/jquery-ui.css'?>" rel="stylesheet"><style>
        .fixedContainer {
            background-color:#ddd;
            position: fixed;
            padding: 2em;
            left: 19%;
            top: 75%;
            transform: translateX(-50%);
        }

        button#submitDate:focus
        {
            color:#00F;
        }

        select::-ms-expand {	display: none; }
        select{
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
        }
        /* IE 6 doesn't support max-height
        * we use height instead, but this forces the menu to always be this tall
        */
        * html .ui-autocomplete {
            height: 200px;
        }


        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track
        {
            background: rgba(0, 0, 0, 0.1);
        }

        ::-webkit-scrollbar-thumb
        {
            background: rgba(0, 0, 0, 0.5);
        }

        .img-responsive {
            background:center;
            width:60%;
            height:60%;
            opacity:0.80 !important;
        }

        .text-disc {
            text-decoration: line-through;
            color:#F00;
        }
        .text-save-disc {
            color:#F00;
        }

        .material-icons
        {
            font-size: 22px;
            line-height: 0;
            color: dimgray;
        }

        .icon-seat{
            width: 25px;
            height: 25px;
        }

    </style><style type="text/css"></style>
    <style type="text/css">.fancybox-margin{margin-right:0px;}</style></head>    

    

    <!--</head>-->
    <body style="overflow: scroll;">

        <!--Loading-->
        <div id="my-modal" class="modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="text-align:center;vertical-align:middle;margin-top:8%">
                <!--<div class="modal-content">
                    <div class="tab-content">-->
                <center>
                    

                    <img src="<?php echo base_url().'assets/AssetsJadwal/loading_en.gif'?>" class="img-responsive">
                        
                </center>
                <br>
                <!--</div>
            </div>-->
            </div>
        </div>

        <!--Refresh-->
        <div id="refresh-modal" class="modal" style="margin-top: 150px;" tabindex="-1" role="dialog" aria-labelledby="myModal_Label" aria-hidden="true">
            <div class="modal-dialog" id="refresh-modal-dialog">
                <div class="modal-content" id="refresh-modal-content">
                    <div class="modal-body" id="refresh-modal-body">
                        <div class="row">
                            <center>
                                <img src="<?php echo base_url().'assets/AssetsJadwal/plane_cloud.gif'?>">
                                <br>
                                <p>Your page is expired.</p>
                            </center>
                            <br>
                            <div class="col-md-6" style="text-align:left">
                                <a href="<?php echo base_url();?>" class="btn btn-danger" id="backToHome" name="backToHome">Back</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="global-wrap">
                <nav class="navbar navbar-default navbar-fixed-top shadow example6">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand text-hide" href="<?php echo base_url();?>">Official Website</a>  
                        </div>
                        <div id="navbar6" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="https://www.sriwijayaair.co.id/SJ/Flights#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-gb shadow"></span> English<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="https://www.sriwijayaair.co.id/SJ/language/set/indonesia"><span class="flag-icon flag-icon-id shadow"></span> Indonesia</a></li>
                                        <li><a href="https://www.sriwijayaair.co.id/SJ/language/set/english"><span class="flag-icon flag-icon-gb shadow"></span> English</a></li>
                                    </ul>
                                </li>
                            </ul>
                                                    </div>
                        <!--/.nav-collapse -->

                    </div>
                    <!--/.container-fluid -->
                </nav>
                        <div class="gap"></div>
            

                                <form id="dataPost" name="dataPost" action="https://www.sriwijayaair.co.id/SJ/Flights" method="post">
                                    <input type="hidden" id="param" name="param" value="">
                                </form>


                                <div class="container">
                                    <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
                                        <form id="searchFlightForm" name="searchFlightForm" method="post" action="https://www.sriwijayaair.co.id/SJ/Flights">
                                            <h3>Search for Flight</h3>
                                            <div class="tabbable">
                                                <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                                    <li id="roundTrip_"><a href="https://www.sriwijayaair.co.id/SJ/Flights#flight-search-1" id="round_trip" data-toggle="tab">Return </a>
                                                    </li>
                                                    <li id="oneWay" class="btn-info text-white"><a href="https://www.sriwijayaair.co.id/SJ/Flights#flight-search-2" data-toggle="tab" id="one_way">One Way</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="flight-search-1">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-search input-icon input-icon-highlight"></i>
                                                                    <label>From</label>
                                                                    <input class="form-control ui-autocomplete-input" type="text" id="fromSrc2_search" name="fromSrc2_search" value="CGK" autocomplete="off" placeholder="Please Select" onkeyup="this.value = this.value.toUpperCase();" data-bv-notempty="true" data-bv-notempty-message="Departure is required" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                                                                    <input type="hidden" id="fromSrc_search" name="fromSrc_search" value="CGK">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-search input-icon input-icon-highlight"></i>
                                                                    <label>To</label>
                                                                    <input class="form-control ui-autocomplete-input" placeholder="Please Select" type="text" id="toSrc2_search" name="toSrc2_search" value="UPG" onkeyup="this.value = this.value.toUpperCase();" data-bv-notempty="true" data-bv-notempty-message="Arrival is required" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                                                                    <input type="hidden" id="toSrc_search" name="toSrc_search" value="UPG">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>Departure Date</label>
                                                                    <input class="form-control" type="text" placeholder="17-Apr-2019" id="departureDate_search" name="departureDate_search" value="18-May-2019" readonly="" style="background:#FFF">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3" id="returnBox" style="display:none;">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>Return Date</label>
                                                                    <input class="form-control" type="text" placeholder="17-Apr-2019" id="returnDate_search" name="returnDate_search" value="" readonly="" style="background:#FFF">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="input-daterange">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="form-group form-group-icon-right">
                                                                                <label>Promo Code</label>
                                                                                <i class="input-icon fa fa-ticket tx-blue"></i>
                                                                                <input type="text" class="form-control tx-blue ronly ronlyff" id="PromoCode_search" name="PromoCode_search" onkeyup="this.value = this.value.toUpperCase();" placeholder="Optional" value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label style="margin-bottom:10px">Number of Passengers</label>
                                                                            <ul class="list-inline">
                                                                                <li>
                                                                                    <img alt="Image Alternative text" src="./Sriwijaya Air_files/adult_.png" title="Adult" style="width:30px;">
                                                                                </li>
                                                                                <li data-placement="bottom" rel="tooltip" data-original-title="Adults (&gt;12years)">
                                                                                    <select class="form-control ronly ronlyff" id="AdultSrc_search" name="AdultSrc_search" onchange="return revalidPaxAmount(this.value, this.name);" required="">
                                                                                        <option value="1" selected="">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="6">6</option>
                                                                                        <option value="7">7</option>
                                                                                        <option value="8">8</option>
                                                                                        <option value="9">9</option>
                                                                                    </select>
                                                                                </li>
                                                                                <li>
                                                                                    <img alt="Image Alternative text" src="./Sriwijaya Air_files/child_.png" title="Child" style="width:30px;">
                                                                                </li>
                                                                                <li data-placement="bottom" rel="tooltip" data-original-title="Child (2-12years)">
                                                                                    <select class="form-control ronly ronlyff" id="ChildSrc_search" name="ChildSrc_search" onchange="return revalidPaxAmount(this.value, this.name);" required="">
                                                                                        <option value="0" selected="">0</option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="6">6</option>
                                                                                        <option value="7">7</option>
                                                                                        <option value="8">8</option>
                                                                                    </select>
                                                                                </li>
                                                                                <li>
                                                                                    <img alt="Image Alternative text" src="./Sriwijaya Air_files/infant_.png" title="Infant" style="width:30px;margin-bottom:-27%;">
                                                                                </li>
                                                                                <li data-placement="bottom" rel="tooltip" data-original-title="Infant (7 days - 23 months)">
                                                                                    <select class="form-control ronly ronlyff" id="InfantSrc_search" name="InfantSrc_search" onchange="return revalidPaxAmount(this.value, this.name);" required="">
                                                                                        <option value="0" selected="">0</option>                          <option value="1">1</option>
                                                                                    </select>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button class="btn btn-info text-white btn-lg" type="button" id="searchFlight" name="searchFlight" onclick="search_flight();">Search for Flight</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
        
                                                <!--HEADER RESULT SEARCH FLIGHT-->
                                                <h5 class="booking-title"></h5>
                                                <h4 id="selDept"><b>Select Departure</b></h4>
                                                <h5><b>Jakarta (CGK) / Soekarno Hatta International Airport <i class="fa fa-arrow-right"></i> Ujung Pandang (UPG) / Makassar - Sultan Hasanuddin</b></h5>
                                                <p>18 May 2019 for 1 Adult 0 Child 0 Infant                                  <small>
                                                        <a class="popup-text btn btn-info" href="https://www.sriwijayaair.co.id/SJ/Flights#search-dialog" id="cari_rute" data-effect="mfp-zoom-out" style="float: right;">
                                                                <b style="font-size:16px;" id="changeSearch">Change search</b>
                                                        </a>
                                                    </small>
                                                </p>
                                                <br>
                                                <div id="changeDate">
                                                </div>
                                                <br>
                                                <div class="nav-drop booking-sort">
                                                    <h5 class="booking-sort-title"> Flights Departure</h5>
                                                </div>
                                                <!--RESULT SEARCH FLIGTH-->
                                                <ul class="booking-list" id="spy-select">
                                                    <li>
                                                        <div class="booking-item-container">
                                                            <!-- sini  -->
                                                            <div class="booking-item" style="background-color:#EBF6FC">
                                                                <div class="flight_detail">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <div class="booking-item-airline-logo" style="text-align:center;">
                                                                                <img alt="Image Alternative text" src="<?php echo base_url().'assets/AssetsJadwal/sj_flight_result.png'?>" title="Image Title">
                                                                                <p>SJ590<br></p>
                                                                                <p class="booking-item-flight-class">Non Stop< /p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="booking-item-flight-details">
                                                                                <div class="booking-item-departure">
                                                                                    <h5>
                                                                                        <img alt="Image Departure" src="<?php echo base_url().'assets/AssetsJadwal/takeoff.png'?>" title="Departure" style="width:30px;height:30px">05:00               <p class="booking-item-flight-class" align="left" style="padding-top:10px;">
                                                                                                Sat, May 18          
                                                                                        </p>
                                                                                    </h5>
                                                                                </div>
                                                                                <div class="booking-item-arrival">
                                                                                    <h5>
                                                                                        <img alt="Image Arrival" src="<?php echo base_url().'assets/AssetsJadwal/landing.png'?>" title="Departure" style="width:30px;height:30px">08:20
                                                                                        <p class="booking-item-flight-class"align="left" style="padding-top:10px;">
                                                                                                Sat, May 18</p>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2" style="text-align:center">
                                                                            <h5>02:20</h5>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="booking-item-flight-details">
                                                                                <div class="booking-item-departure">
                                                                                    <h5>
                                                                                        <div class="text-disc">IDR 2.211.900</div>IDR 1.817.000<br></h5>
                                                                                    <span>/passenger</span>
                                                                                    <p class="booking-item-flight-class" style="line-height:3">Economy Class</p>
                                                                                                <button type="button" class="btn btn-info btn_price_ec" id="btn_price_ec0" name="btn_price_ec" onclick=""" title="Click for more details" style="">
                                                                                                    Select</button>
                                                                                        </div>
                                                                                        <div class="booking-item-arrival">
                                                                                            <h5></h5>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Start Detail -->
                                                                        <div class="booking-item-payment detail-flight-1" id="detailFlight_1_0" style="display:none;">
                                                                            <div class="row">
                                                                                <div class="col-md-10 col-md-offset-2" style="font-size:14px;line-height:1.6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <table class="table table-striped table-bordered table-responsive">
                                                                                                <thead>
                                                                                                    <tr>
															                                            <th>Flight No</th>
															                                            <th>Date</th>
															                                            <th>Route</th>
															                                            <th>STD</th>
															                                            <th>STA</th>
															                                            <th>Duration</th>
															                                            <th>Transit</th>
														                                            </tr>
													                                            </thead>
													                                            <tbody>
                                                                                                    <tr>
                                                                                                        <td style="vertical-align: middle;" class="text-center">
                                                                                                            <img alt="SJ" src="./Sriwijaya Air_files/sj_w_icon.png" title="Image Title" style="width:20px;height:20px"> SJ590</td>
														                                                <td style="vertical-align: middle;" class="text-center">18-MAY-19</td>
														                                                <td style="vertical-align: middle;" class="text-center">CGK-UPG</td>
														                                                <td style="vertical-align: middle;" class="text-center">05:00</td>
														                                                <td style="vertical-align: middle;" class="text-center">08:20</td>
														                                                <td style="vertical-align: middle;" class="text-center">02:20</td>
														                                                <td style="vertical-align: middle;" class="text-center">0</td>
                                                                                                    </tr>
                                                                                                </tbody>
												                                            </table>
													                                    </div>
                                                                                    </div>
                                                                                    <p style="color:#1B3682"></p>
                                                                                    <div id="tripTransitA0" style="display:none;">
                                                                                        <table class="table table-striped table-bordered table-responsive">
													                                        <thead>
														                                        <tr>
															                                        <th rowspan="2" style="vertical-align: middle;">Flight No</th>
															                                        <th colspan="2" style="vertical-align: middle;">Station</th>
															                                        <th colspan="2" style="vertical-align: middle;">Time</th>
														                                        </tr>
														                                        <tr>
															                                        <th style="vertical-align: middle;">Departure</th>
															                                        <th style="vertical-align: middle;">Arrival</th>
															                                        <th style="vertical-align: middle;">Departure</th>
															                                        <th style="vertical-align: middle;">Arrival</th>
														                                        </tr>
													                                        </thead>
													                                        <tbody>
                                                                                                <tr>
                                                                                                    <td style="vertical-align: middle; text-align:center;">
                                                                                                        <img alt="SJ" src="./Sriwijaya Air_files/sj_w_icon.png" title="Image Title" style="width:20px;height:20px"> SJ590</td>
																                                    <td style="vertical-align: middle; text-align:center;">
	                              									                                    <div>Jakarta, Soekarno Hatta </div>
	                              								                                    </td>
																                                    <td style="vertical-align: middle; text-align:center;">
	                              									                                    <div>Ujung Pandang, Makassar - Sultan Hasanuddin</div>
	                              								                                    </td>
																                                    <td style="vertical-align: middle; text-align:center;">
	                              									                                    <div>18-May-19 05:00 LT</div>
	                              								                                    </td>
																                                    <td style="vertical-align: middle; text-align:center;">
	                              									                                    <div>18-May-19 08:20 LT</div>
	                              								                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Detail -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <ul class="booking-list" id="spy-select">
                                                    <li>
                                                        <div class="booking-item-container">
                                                            <!-- sini  -->
                                                            <div class="booking-item" style="background-color:#C9ECFF">
                                                                <div class="flight_detail">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <div class="booking-item-airline-logo" style="text-align:center;">
                                                                                <img alt="Image Alternative text" src="<?php echo base_url().'assets/AssetsJadwal/sj_flight_result.png'?>" title="Image Title">
                                                                                <p>SJ582<br></p>
                                                                                <p class="booking-item-flight-class">Non Stop</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="booking-item-flight-details">
                                                                                <div class="booking-item-departure">
                                                                                    <h5>
                                                                                        <img alt="Image Departure" src="<?php echo base_url().'assets/AssetsJadwal/takeoff.png'?>" title="Departure" style="width:30px;height:30px">21:45               <p class="booking-item-flight-class" align="left" style="padding-top:10px;">
                                                                                                Sat, May 18          
                                                                                        </p>
                                                                                    </h5>
                                                                                </div>
                                                                                <div class="booking-item-arrival">
                                                                                    <h5>
                                                                                        <img alt="Image Arrival" src="<?php echo base_url().'assets/AssetsJadwal/landing.png'?>" title="Departure" style="width:30px;height:30px">01:05
                                                                                        <p class="booking-item-flight-class"align="left" style="padding-top:10px;">
                                                                                                Sun, May 19</p>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2" style="text-align:center">
                                                                            <h5>02:20</h5>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="booking-item-flight-details">
                                                                                <div class="booking-item-departure">
                                                                                    <h5>
                                                                                        <div class="text-disc">IDR 2.211.900</div>IDR 1.938.000<br></h5>
                                                                                    <span>/passenger</span>
                                                                                    <p class="booking-item-flight-class" style="line-height:3">Economy Class</p>
                                                                                                <button type="button" class="btn btn-info btn_price_ec" id="btn_price_ec0" name="btn_price_ec" onclick=""" title="Click for more details" style="">
                                                                                                    Select</button>
                                                                                        </div>
                                                                                        <div class="booking-item-arrival">
                                                                                            <h5></h5>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Start Detail -->
                                                                        <div class="booking-item-payment detail-flight-1" id="detailFlight_1_0" style="display:none;">
                                                                            <div class="row">
                                                                                <div class="col-md-10 col-md-offset-2" style="font-size:14px;line-height:1.6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <table class="table table-striped table-bordered table-responsive">
                                                                                                <thead>
                                                                                                    <tr>
															                                            <th>Flight No</th>
															                                            <th>Date</th>
															                                            <th>Route</th>
															                                            <th>STD</th>
															                                            <th>STA</th>
															                                            <th>Duration</th>
															                                            <th>Transit</th>
														                                            </tr>
													                                            </thead>
													                                            <tbody>
                                                                                                    <tr>
                                                                                                        <td style="vertical-align: middle;" class="text-center">
                                                                                                            <img alt="SJ" src="./Sriwijaya Air_files/sj_w_icon.png" title="Image Title" style="width:20px;height:20px"> SJ582</td>
														                                                <td style="vertical-align: middle;" class="text-center">18-MAY-19</td>
														                                                <td style="vertical-align: middle;" class="text-center">CGK-UPG</td>
														                                                <td style="vertical-align: middle;" class="text-center">21:45</td>
														                                                <td style="vertical-align: middle;" class="text-center">01:05</td>
														                                                <td style="vertical-align: middle;" class="text-center">02:20</td>
														                                                <td style="vertical-align: middle;" class="text-center">0</td>
                                                                                                    </tr>
                                                                                                </tbody>
												                                            </table>
													                                    </div>
                                                                                    </div>
                                                                                    <p style="color:#1B3682"></p>
                                                                                    <div id="tripTransitA0" style="display:none;">
                                                                                        <table class="table table-striped table-bordered table-responsive">
													                                        <thead>
														                                        <tr>
															                                        <th rowspan="2" style="vertical-align: middle;">Flight No</th>
															                                        <th colspan="2" style="vertical-align: middle;">Station</th>
															                                        <th colspan="2" style="vertical-align: middle;">Time</th>
														                                        </tr>
														                                        <tr>
															                                        <th style="vertical-align: middle;">Departure</th>
															                                        <th style="vertical-align: middle;">Arrival</th>
															                                        <th style="vertical-align: middle;">Departure</th>
															                                        <th style="vertical-align: middle;">Arrival</th>
														                                        </tr>
													                                        </thead>
													                                        <tbody>
                                                                                                <tr>
                                                                                                    <td style="vertical-align: middle; text-align:center;">
                                                                                                        <img alt="SJ" src="./Sriwijaya Air_files/sj_w_icon.png" title="Image Title" style="width:20px;height:20px"> SJ582</td>
																                                    <td style="vertical-align: middle; text-align:center;">
	                              									                                    <div>Jakarta, Soekarno Hatta </div>
	                              								                                    </td>
																                                    <td style="vertical-align: middle; text-align:center;">
	                              									                                    <div>Ujung Pandang, Makassar - Sultan Hasanuddin</div>
	                              								                                    </td>
																                                    <td style="vertical-align: middle; text-align:center;">
	                              									                                    <div>18-May-19 21:45 LT</div>
	                              								                                    </td>
																                                    <td style="vertical-align: middle; text-align:center;">
	                              									                                    <div>19-May-19 01:05 LT</div>
                                                                                                          </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Detail -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                    <!-- END OF RESULT SEARCH FLIGHT -->
                                                    <div class="col-md-12">
                                                        <ul class="list-inline">
                                                            <li>&nbsp;&nbsp;<input type="checkbox" id="insuranceSelected" name="insuranceSelected" value="1"> I agree to use extra cover insurance. 
                                                            <a href="https://www.sriwijayaair.co.id/SJ/assets/images/CIU.jpg" target="_blank">Terms and Condition</a>
                                                            </li>
                                                        </ul>    
                                                    </div>

                                                    <div class="col-md-12">
                                                        <ul class="list-inline">
                                                            <li>&nbsp;&nbsp;<input type="checkbox" id="ebtSelected" name="ebtSelected" value="0"> I agree to show extra baggage. <a href="https://www.sriwijayaair.co.id/SJ/download/EBT/PREPAID_EXCESS_BAGGAGE_CONDITION_2017.pdf" target="_blank">Terms and Condition</a></li>
                                                        </ul>    
                                                    </div>
                                                    <p class="text-right">Not finding what are you looking for ? <a class="popup-text" href="https://www.sriwijayaair.co.id/SJ/Flights#search-dialog" data-effect="mfp-zoom-out">Try another search</a></p>
                                                    <div class="gap gap-small"></div>

                                            <!--GUEST PAYMENT-->
                                            <div id="bookingForm" tabindex="-1">
                                                <div class="booking-item">
                                                    <div class="panel-group" id="accordion">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="https://www.sriwijayaair.co.id/SJ/Flights#collapse-1" id="passColapse">
                                                                        Passenger Details                                <span class="alert-danger badge" id="status-pax-detail">Uncompleted</span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="panel-collapse collapse collapse" id="collapse-1"> 
                                                                <div class="panel-body">
                                                                    <p>Availability or price is not guaranteed until you receive a booking confirmation containing a booking code.</p>
                                                                    <hr>
                                                                    <p class="text-small">Passenger name must match the identity card. For passengers who have only one name, please enter your name two times in the name fields<br>
                e.g: First name: Toni; Last name: Toni</p>
                                                                    <hr>
                                                                    <br>
                                                                        

                                                                    <div id="passengerDetail">
                                                                        <div class="col-md-12">
                                                                            <h4><b>Adult 1</b></h4>
                                                                            <ul class="list-inline">
                                                                                <li>
                                                                                    <div class="form-group">
                                                                                         <label>Title *</label>
                                                                                        <pd>
                                                                                            <select class="form-control ronly ronlyff" width="6px" name="titleNameAdultPax1" id="titleNameAdultPax1" data-bv-notempty="true" data-bv-notempty-message="The title is required">
                                                                                                <option value="Mr">Mr</option>
                                                                                                <option value="Mrs">Mrs</option>
                                                                                                <option value="Ms">Ms</option>
                                                                                            </select>
                                                                                        </pd>
                                                                                   </div>
                                                                                </li>	
                                                                                <li>
                                                                                    <div class="form-group">
                                                                                        <label>First Name *</label>
                                                                                        <pd>                         <!--Finda Ancill-->
                                                                                            <input class="form-control firstNamePsgrAdult ui-autocomplete-input ronly ronlyff" autocomplete="off" placeholder="xxxx" type="text" name="firstNameAdultPax1" id="firstNameAdultPax1" onkeyup="this.value = this.value.toUpperCase();" data-bv-notempty="true" data-bv-notempty-message="The first name is required" maxlength="30" onkeypress="return onlyAlphabets(event);" value="" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                                                                                        </pd>
                                                                                    </div>
                                                                                </li>	
                                                                                <li>                                         <div class="form-group">
                                                                                        <label>Last Name *</label>
                                                                                        <pd>
                                                                                            <input class="form-control lastNamePsgrAdult ui-autocomplete-input ronly ronlyff" autocomplete="off" placeholder="xxxx" type="text" name="lastNameAdultPax1" id="lastNameAdultPax1" onkeyup="this.value = this.value.toUpperCase();" data-bv-notempty="true" data-bv-notempty-message="The last name is required" maxlength="30" onkeypress="return onlyAlphabets(event);" value="" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                                                                                        </pd>
                                                                                    </div>
                                                                                </li>	
                                                                                <li>
                                                                                    <label>Special Request *</label>
                                                                                    <select class="form-control" name="specReqAdultPax1" id="specReqAdultPax1" data-bv-notempty="true" data-bv-notempty-message="The special request is required">
                                                                                        <option value="None">None</option>
                                                                                        <option value="WHCR">Wheel chair</option>
                                                                                    </select>
                                                                                </li>	
                                                                            </ul>
                                                                            <ul class="list-inline div_ebt" style="display:none">
                                                                                <li>
                                                                                    <div class="form-group" data-toggle="tooltip" data-placement="right" title="" data-original-title="Extra Baggage Departure">
                                                                                        <label><h5><b>Buy Extra Baggage 1</b></h5></label>
                                                                                        <label>
                                                                                        <h5 style="color:#559BC1">
                                                                                            <b>CGK&nbsp;&nbsp;<img alt="Image Departure" src="<?php echo base_url().'assets/AssetsJadwal/landing.png'?>" title="Departure" style="width:30px;height:30px">&nbsp;&nbsp;UPG </b></h5>
                                                                                        </label>
                                                                                        <select class="form-control bag" width="6px" name="EBT_D_A1" id="EBT_D_A1" onchange="getEBT(this.value, &#39;D&#39;, &#39;A&#39;,1)">
                                                                                            <option value="">No Thanks</option>
                                                                                            <option value="BAG05">5 Kg </option>
                                                                                            <option value="BAG10">10 Kg </option>
                                                                                            <option value="BAG15">15 Kg </option>
                                                                                            <option value="BAG20">20 Kg </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                    <div class="col-md-12">
                                                                        <hr>
                                                                        <p style="color:#F00">Important notice :</p>
                                                                        <ol>
                                                                            <li>When the ticket has been issued, the name on the ticket still can be changed (charge applied).</li>
                                                                            <li>Passenger's name must match the identity card or passport.</li>
                                                                            <li>If you have special request, We will do our best to provide it.</li>
                                                                            <li>Safety procedures apply to all children and infants. Sriwijaya Air has the right to refuse and cancel the reservation any time when we find any violation to existing rules.</li>
                                                                            <li>Infant's waist is not more than 40cm and the infant's head position is not higher than the person's nose who sit with the baby.</li>
                                                                            <li>Must enters valid phone numbers and email addresses to inform you about flight information updates.</li>
                                                                        </ol> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 style="color:#F00">(*) must be filled</h6>
                                            <br>
                                            <div class="col-md-12">
                                                <ul class="list-inline">
                                                    <li>
                                                        <div class="form-group">
                                                            <input type="checkbox" name="formAgree" id="formAgree" value=""> &nbsp; 
                I HAVE READ AND AGREED TO ALL                                                                
                                                            <button type="button" data-toggle="modal" data-target="#termsTransport" style="border:none;background:none;padding:0">
                                                                <font color="#0066FF">TERMS AND CONDITIONS</font>
                                                            </button>
                THAT ARE DETERMINED BY SRIWIJAYA AIR.  
                                                                &nbsp;
                                                        </div>
                                                    </li>
                                                </ul> 
                                                <div class="row" id="alertFormAgree" style="display:none">
                                                    <p style="color:#F00">*Please check the checkbox for agree all terms and conditions</p>
                                                </div>
                                            </div>
                                                <br><br>
                                                <div class="col-md-6" style="padding-left:1px">
                                                    <a href="https://www.sriwijayaair.co.id/" class="btn btn-danger">Back</a> 
                                                </div>
                                                <div class="col-md-6" align="right">
                                                    <div class="form-group">
                                                        <input class="btn btn-info" type="button" value="Process" style="text-align:right;" id="submitAll" name="submitAll" onclick="process_ticket();">
                                                    </div>
                                                </div>
                                                
                                                <div class="gap"></div>
                                                <div class="gap"></div>
                                                <div class="gap"></div>
                                                <div class="gap"></div>
                                                <div class="gap"></div>
                                                <div class="gap"></div>
                                                <div class="gap"></div>
                                                <div class="gap"></div>

                                            </div>
            
                                    </div><!--End col-md-9-->
                                    <!-- END LEFT COLOUMN-->

                                    <!--SUMMARY RESERVATION-->            
                                    <div class="col-md-3">
                                        <div id="sidebar-right">

                                            <!-- #sidebar-left style="position:fixed;width:20%;height:30%;overflow:auto" -->
                                            <aside class="panel panel-info affix fixed-summary shadow" id="sumPanel">
                                                <div id="sumRest">
                                                    <div class="bg-blue-sj text-center" style="padding: 5px 0px;">
                                                        <div class="tx-white tx-bold">Step For Booking</div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <ol type="1">
                                                            <li>Choose Flight</li>
                                                            <li>Fill the Form</li>
                                                            <li>Click Process</li>
                                                        </ol>
                                                    </div>
                                                </div>

                                                <input type="hidden" id="redeemPointVal" name="redeemPointVal" value="">
                                                <input type="hidden" id="stiVal" name="stiVal" value="">
                                            </aside>
                                        </div>
                                    </div>
                                    <!--END OFSUMMARY RESERVATION--> 

                                </div><!--End row-->
                            </form>     
                        </div><!--End Container-->


                        <!-- Modal -->
                        <div class="modal fade" id="priceDetailDialog" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div id="priceDetailBox">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-info" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <!-- Modal Fare Rules-->
                        <div class="modal fade" id="fareRulesDialog" role="dialog">
                            <div class="modal-dialog" style="width:90%">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div id="fareDetailBox">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-info" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="modal fade" id="viewSeat" role="dialog" data-keyboard="false" data-backdrop="static">
                            <div class="modal-dialog" style="width:95%">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div id="detailSeat">
                                    </div>
                                </div>
                            </div> 
                        </div>
               
</div>         


<!-- Modal Terms and Condition Transporatation-->
<div class="modal fade" id="termsTransport" role="dialog">
    <div class="modal-dialog" style="width:90%">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Terms and Condition Transportation</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="text-align:justify;padding-right:50px;padding-left:20px">
                        <p><b>Tiket anda tersimpan di system reservasi Sriwijaya Air dan ini adalah data tiket elektronik anda.</b></p>
                        <p><i>Your airline ticket is electronically stored in Sriwijaya Air computer reservation system and is your record of your electronic ticket.</i></p>

                        <p><b>Anda harus menunjukan tiket elektronik dan tanda pengenal anda di check-in counter dan untuk masuk ke Airport dan / atau untuk membuktikan perjalanan kembali atau perjalanan lanjutan kepada petugas bea cukai dan imigrasi.</b></p>
                        <p><i>You should be needed to show this electronic ticket and identity card at check-in counter and to enter the airport and/ or to prove return or onward travel to customs and immigration officials.</i></p>

                        <p><b>Pengangkut dan layanan lain yang disediakan oleh perusahaan penerbangan tunduk pada syarat syarat pengangkutan/syarat syarat perjanjian peraturan dalam negeri yang dalam hal ini digabung sesuai referensi kondisi ini dapat diperoleh dari perusahaan penerbangan penerbit tiket.</b></p>
                        <p><i>Carriage and other services provided by the carrier are subject to the conditions of carriage/condition of contract which are hereby incorporated by reference.These conditions may be obtained from the issuing carrier.</i></p>

                        <p><b>Khusus rute Denpasar - Dili untuk penumpang yang baru pertama kali masuk ke Dili (Timor Leste) harus dilengkapi Guarantee Letter yang diterbitkan oleh konsulat Jenderal Timor Leste.</b></p>
                        <p><i>Special route Denpasar - Dili for passengers entering Dili (Timor Leste) for the first time must be completed with Guarantee Letter issued by Consulate General of Timor Leste.</i></p>

                        <p><b>Tariff berlaku dengan ketentuan dan kondisi tariff yang menyertainya.</b></p>
                        <p><i>Fares are issued subject to conditions apply.</i></p>

                        <p><b>Dimohon melapor 1½ jam sebelum keberangkatan.</b></p>
                        <p><i>Please check in 1½ prior to flight departure.</i></p>

                        <p><b>Anda harus melapor di boarding gate paling lambat 30 menit sebelum pesawat anda berangkat atau kami akan meninggalkan anda untuk menghindari keterlambatan jadwal penerbangan.</b></p>
                        <p><i>Please be at the boarding gate at least 30 minutes before your flight departs or we will leave without you to avoid unnecessary delays.</i></p>

                        <p><b>Barang barang berbahaya untuk alasan keselamatan penerbangan benda benda berbahaya seperti gas terkompresi ( benda mudah terbakar dan beracun ), benda yang dapat menimbulkan karat ( asam, alkalis dan aki ) etiologic agents ( bakteri, virus dll ), bahan peledak ( munitions, kembang api, flares ) radio aktif dan oxidizing material dan material berbahaya lainnya tidak diperbolehkan dibawa dalam kabin bagasi penumpang.</b></p>
                        <p><i>Dangerous Goods for safety reason, dangerous articles such as compressed gases ( Flammable, Non-Flammable and Poisonous ), Corrosives ( Acids, Alkalis and wet cell batteries ), Etiologic Agents ( Bacteria, Viruses Etc ), Explosives ( Munitions, Fireworks, Flares ) , Radioactive and oxidizing materials or other dangerous goods article must not be carried in passengers baggage.</i></p>

                        <div class="col-md-12" style="text-align:center;margin-top:20px">
                            <p><b>PT. SRIWIJAYA AIR</b></p>
                            <p><b>Jl. Marsekal Suryadarma No. 1, Bandara Soekarno-Hatta, M I</b></p>
                            <p><b>Tangerang, Indonesia</b></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12" style="text-align:right">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>                 

    </div> 
</div>
<form id="dataUser" name="dataUser" action="https://www.sriwijayaair.co.id/SJ/home/register" method="post">
    <input type="hidden" id="param_user" name="param_user" value="">
</form>


<div style="display:none"> 
    <!--<footer>-->
<div class="container-full" style="background:#EEF1F9">
    <div class="container" id="main-footer">
        <br>
            <div class="col-md-12">
            	<div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="https://www.sriwijayaair.co.id/SJ/PromoMenu/specialPricePromo">Promotion</a><br>
                                <a href="https://www.sriwijayaair.co.id/SJ/Services/Cargo">Services</a><br>
                                <a href="https://www.sriwijayaair.co.id/SJ/TravelInfo/Destination">Travel Info</a><br>
                                <!--<a onClick="getHeader('Events');" style="cursor:pointer">News</a><br/>
                                <!-- <a onClick="getHeader('Career');" style="cursor:pointer">Career</a><br/>-->
                                <a href="https://www.sriwijayaair.co.id/SJ/News/NewsHeader/Events">News</a><br>
                                <a href="https://sriwijayaair.co.id/career/Resume">Career</a><br>
                                <a href="https://www.sriwijayaair.co.id/SJ/TravelInfo/Guide">Help</a><br>
                                <a href="https://member.sriwijayaair.co.id/user/RegisBenefit">SJ Travel Pass</a><br>
                            </div>
                            <div class="col-md-6">
                            	<a href="https://www.sriwijayaair.co.id/SJ/AboutUs/AboutUsPage">About Us</a><br>
                                <a href="https://www.sriwijayaair.co.id/SJ/Offices">Offices</a><br>
                                <a href="https://www.sriwijayaair.co.id/SJ/Termcondition">Term &amp; Conditions</a><br>
                                <a href="https://www.sriwijayaair.co.id/SJ/Privacy">Privacy</a><br>
                                <a href="http://www.sriwijayaair.co.id/SJ/RouteMap">Route Map</a><br>
                                <a href="https://www.sriwijayaair.co.id/SJ/SiteMap">Site Map</a><br>
                                <a href="https://www.sriwijayaair.co.id/SJ/Offices">Contact Us</a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div><font color="#666666">Newsletter</font></div>
                                <div>
                                    <form id="newsltr" class="bv-form" action="https://www.sriwijayaair.co.id/SJ/Flights" method="post" name="newsltr" novalidate="novalidate">
                                        <div class="form-group form-group-icon-right" style="width:195px">
                                            <label><small>Enter your E-mail Address</small></label>
                                            <i class="input-icon fa fa-envelope"></i>
                                            <input type="email" name="email_s" id="email_s" class="form-control" data-bv-notempty="true" data-bv-notempty-message="Email address is required">
                                            <!--<p class="mt5"><small>*We Never Send Spam</small></p>-->
                                        </div>
                                        <div class="form-group">
                                            <input type="button" onclick="subscribe();" name="btnSubscribe" id="btnSubscribe" class="btn btn-info" value="Subscribe">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="col-md-12" style="">
                                <div>
                                    <a style="cursor: pointer;" href="https://goo.gl/g8PnzC" target="_blank"><img style="width: 85%;cursor: pointer;" align="middle" src="./Sriwijaya Air_files/Google-Play-B2C.PNG.png"></a>
                                </div>
                                <div>
                                    <a style="cursor: pointer;" href="https://itunes.apple.com/id/app/sriwijaya-air-mobile/id1328755672?mt=8" target="_blank"><img style="width: 85%;cursor: pointer;" align="middle" src="./Sriwijaya Air_files/App-Store-B2C.PNG.png"></a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="col-md-12" style="text-align: right;"> 
                                <div>
                                    <img style="width: 100%;" align="middle" src="./Sriwijaya Air_files/callcenter_home.png">
                                </div> 
                                <div>
                                    <a style="cursor: pointer;" href="https://www.facebook.com/sriwijayaair" target="_blank"><img style="cursor: pointer;width:17%;" src="./Sriwijaya Air_files/fb.png"></a>
                                    <a style="cursor: pointer;" href="https://twitter.com/intent/follow?source=followbutton&amp;variant=1.0&amp;screen_name=sriwijayaair" target="_blank"><img style="cursor: pointer;width:17%;" src="./Sriwijaya Air_files/twt.png"></a>
                                    <a style="cursor: pointer;" href="https://plus.google.com/112676586964708881357/posts" target="_blank"><img style="cursor: pointer;width:17%;" src="./Sriwijaya Air_files/G+.png"></a>
                                    <a style="cursor: pointer;" href="http://instagram.com/sriwijayaair" target="_blank"><img style="cursor: pointer;width:17%;" src="./Sriwijaya Air_files/insta.png"></a>
                                    <a style="cursor: pointer;" href="http://www.youtube.com/user/SriwijayaAirChannel?sub_confirmation=1" target="_blank"><img style="cursor: pointer;width:17%;" src="./Sriwijaya Air_files/youtube.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="gap"></div>
    </div>
</div>
<div id="goto"></div>



<footer class="footer">
	<div class="container-full">
    	<div class="row" style="margin:0 !important">
	        <div class="col-lg-6 col-lg-offset-3 text-center">
	            © 2019 Sriwijaya Air. All Rights Reserved.
	        </div>
        </div>
	        <!--<div class="col-lg-6 col-lg-offset-3 text-center">
	            13.53MB 0.8678
	        </div>-->
	</div>
</footer>

<script type="text/javascript">
    function subscribe() {
    	$("#newsltr").bootstrapValidator().on('success.form.bv', function(e) {		
    		e.preventDefault();
        	e.stopImmediatePropagation();	
	    	$.ajax({
	        	url: 'https://www.sriwijayaair.co.id/SJ/Newsletter',
	            type: "POST",
	            data: {
	            	EMAIL: $('#email_s').val()
				},
				success: function(data) {
	                loadingHideSubs();
					if (typeof data !== 'undefined') {
						$('#email_s').parents('div').removeClass('has-error');
						$('#email_s').val('');
	                   	swal('',data);
					} else {
	                   	swal('','fail to subscribe');
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
	                loadingHideSubs();
					swal('','fail to subscribe');
				},
				beforeSend: function(d) {
// 					var string = $('#email_s').val();
// 					var re = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$");
// 					if (re.test(string)) {
						loadingShowSubs();
// 					} else {
// 						$('#email_s').parents('div').addClass('has-error');
// 					    swal('',"Invalid email address");
// 					    return false;
// 					}
				}
	 		});
    	}).submit();
	}
    

    function loadingShowSubs() {
        $('#search-dialog').hide();
        $('#my-modal').show();
        var bd = $('<div class="modal-backdrop fade in" id="backdrop"></div>');
        bd.appendTo(document.body);
    }

    function loadingHideSubs() {
        $('#backdrop').remove();
        $('#my-modal').hide();
        $('#search-dialog').hide();
    }
	
	function getHeader(V1){
		gotoheader.call(this, V1);
	}
	
	var gotoheader = function (rowid) {
		keys = ['id'];
		values = [rowid];
		openWindowWithPost('https://www.sriwijayaair.co.id/SJ/News/NewsHeader','',keys,values)
	};
	
	function openWindowWithPost(url,name,keys,values)
	{
		var html = "";
		html += "<html><head></head><body><form id='formid' method='post' action='" + url + "'>";
		if (keys && values && (keys.length == values.length))
		for (var i=0; i < keys.length; i++)
		html += "<input type='hidden' name='id' value='" + values[i] + "'/>";
		html += "<input type='hidden' name='action' value='NewsHeader'/>";
		html += "</form><script type='text/javascript'>document.getElementById(\"formid\").submit()</" + "script></body></html>";
		$('#goto').html(html);
	
	}
	
	
	
</script>



    <!--</footer>-->
</div>

<script src="./Sriwijaya Air_files/jquery.js.download"></script>
<script src="./Sriwijaya Air_files/jquery-ui.min.js.download"></script>
<script src="./Sriwijaya Air_files/bootstrap.js.download"></script>
<script src="./Sriwijaya Air_files/slimmenu.js.download"></script>
<script src="./Sriwijaya Air_files/bootstrap-datepicker.js.download"></script> 
<script src="./Sriwijaya Air_files/bootstrap-select.min.js.download"></script>
<script src="./Sriwijaya Air_files/bootstrap-switch.js.download"></script>
<script src="./Sriwijaya Air_files/bootstrap-timepicker.js.download"></script>
<script src="./Sriwijaya Air_files/nicescroll.js.download"></script>
<script src="./Sriwijaya Air_files/dropit.js.download"></script>
<script src="./Sriwijaya Air_files/ionrangeslider.js.download"></script> 
<script src="./Sriwijaya Air_files/icheck.js.download"></script>
<script src="./Sriwijaya Air_files/fotorama.js.download"></script>
<script src="./Sriwijaya Air_files/typeahead.js.download"></script>
<script src="./Sriwijaya Air_files/card-payment.js.download"></script>
<script src="./Sriwijaya Air_files/magnific.js.download"></script>
<script src="./Sriwijaya Air_files/owl-carousel.js.download"></script>
<script src="./Sriwijaya Air_files/fitvids.js.download"></script>
<script src="./Sriwijaya Air_files/tweet.js.download"></script>
<script src="./Sriwijaya Air_files/countdown.js.download"></script>
<script src="./Sriwijaya Air_files/gridrotator.js.download"></script>
<script src="./Sriwijaya Air_files/custom.js.download"></script>
<script src="./Sriwijaya Air_files/bootstrapValidator.min.js.download"></script>
<script src="./Sriwijaya Air_files/modernizr.js.download"></script>
<script src="./Sriwijaya Air_files/moment.min.js.download"></script>
<script src="./Sriwijaya Air_files/sweetalert.min.js.download"></script>
<script src="./Sriwijaya Air_files/jquery.newsTicker.min.js.download"></script>
<script src="./Sriwijaya Air_files/veritrans.min.js.download"></script>
<script src="./Sriwijaya Air_files/jquery.fancybox.pack.js.download"></script>



<script type="text/javascript">
    $('#val_min_redeem').click(function () {
        $('#values_choose_redeem').val('');
        $('#form_values_choose_redeem').hide(1000);
    });

    $('#val_max_redeem').click(function () {
        $('#values_choose_redeem').val('');
        $('#form_values_choose_redeem').hide(1000);
    });

    $('#choose_redeem').click(function () {
        $('#form_values_choose_redeem').show(1000);
    });



    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('#ebtSelected').on('click', function () {
            if ($('#price_detail').val() == '')
            {
                $(".bag").val("");
                $(".bagReff").val("");
                $(".bagVal").val(0);

                swal('', 'Please choose departure flight');
                return false;
            }


            var curr;
            curr = 'IDR';
            if (curr == 'IDR')
            {
                var limit_bg;
                limit_bg = '50000';

                if ($('#EBT_A10_D').val() <= parseInt(limit_bg) || $('#EBT_A15_D').val() <= parseInt(limit_bg) || $('#EBT_A20_D').val() <= parseInt(limit_bg))
                {
                    $(".div_ebt").hide('slow');
                    $(".bag").val("");
                    $(".bagReff").val("");
                    $(".bagVal").val(0);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Extra baggage is not available right now.'
                    });
                    return false;
                }


            }

            if ($("#ebtSelected").is(':checked')) {

                $("#ebtSelected").val('1');
                $(".div_ebt").show('slow');
            } else {
                $(".div_ebt").hide('slow');
                $(".bag").val("");
                $(".bagReff").val("");
                $(".bagVal").val(0);
                $("#AgreeFOP").prop("checked", false);
                $('#smiles_redeem_points').hide();
                $('.rpoint').prop('checked', false);
                $('#redeemPointVal').val('');
                $('#form_values_choose_redeem').hide();
                $('#values_choose_redeem').val('');
                $('#convertPoint').hide();

                var dataGS = $("#formGS").serializeArray();
                $('#flagClassA').val($('#flagA').val());
                $('#flagClassAR').val($('#flagAR').val());
                if ($('#flagClassA').val() != '' || $('#flagClassAR').val() != '')
                {
                    dataGS = '';
                }

                $.ajax({
                    type: "POST",
                    url: "https://www.sriwijayaair.co.id/SJ/Flights/summary_resv",
                    data: {
                        SUMMARY_REST: $('#price_detail_return').val(),
                        DATA_DEPARTURE: $('#price_detail').val(),
                        RETURN: 'NO',
                        POINT_IDR_REDEEM: 0,
                        TYPE_ACTION: $('#typeAction').val(),
                        status_sti: value_sti,
                        PRICE_OF_BAG: $('#totalPriceBag').val(),
                        GS: dataGS //finda ancill
                    },
                    success: function (data) {
                        $('#sumRest').html(data);
                        $('#stiVal').val(value_sti);
                        $('#GrandTotal').val($('#grand_total_val').val());
                        $('#GrandTotalORI').val($('#grand_total_ori').val());
                        $('#grandTotal1').html($('#grand_Total').html());
                        $('#grandTotal2').html($('#grand_Total').html());
                        $('#searchKeyDep').val($('#search_key_dep').val());
                        $('#travelDetailDep').val($('#travel_detail_dep').val());

                        $('#flagClassA').val($('#flagA').val());
                        $('#flagClassAR').val($('#flagAR').val());
                        if ($('#flagClassA').val() != '' || $('#flagClassAR').val() != '')
                        {
                            $('#TPriceGSD').val(0);
                            $('#TPriceGSR').val(0);
                        }

                        var pricetotal_ = $('#grandTotal1').html();
                        var pricetotal__ = pricetotal_.toString().replace(/\./g, '');
                        var pricetotal = parseInt(pricetotal__);

                        bni_instll();
                        mndr_instll();
                        bni_bw(); //finda bniwow

                    },
                    beforeSend: function (d) {
                        $('#sumRest').html('<div class="text-center bg-blue-sj" style="padding: 5px 0px;"><div class="tx-white tx-bold">Please wait...</div></div>');
                    }
                });
            }
        });

    });


    var startDate = null;
    var endDate = null;
    $('#departureDate_search').datepicker({
        startDate: '-0d',
        format: 'dd-M-yyyy',
        autoclose: true
    }).on('show', function (e) {
        if (e.date) {
            $(this).data('stickyDate', e.date);
        } else if ($(this).val()) {
            /**auto-populate existing selection*/
            $(this).data('stickyDate', new Date($(this).val()));
            $(this).datepicker('setDate', new Date($(this).val()));
        } else {
            $(this).data('stickyDate', null);
        }
    }).on('hide', function (e) {
        var stickyDate = $(this).data('stickyDate');
        if (!e.date && stickyDate) {
            $(this).datepicker('setDate', stickyDate);
            $(this).data('stickyDate', null);
        }
    }).on('changeDate', function (event) {
        startDate = new Date(event.date.getFullYear(), event.date.getMonth(), event.date.getDate(), 0, 0, 0);
        var error = 0;

        if ($('#roundTrip').val() == "YES")
        {
            if (error === 0) {
                if (endDate == null)
                {
                    $('#returnDate_search').val($('#departureDate_search').val());
                }

            }
            if (endDate != null && endDate != 'undefined') {
                if (endDate < startDate) {
                    alert("Return Date is less than Departure Date");
                    $('#returnDate_search').val("");
                    error = 1;
                }
            }

        }
    });

    $('#returnDate_search').datepicker({
        startDate: '-0d',
        format: 'dd-M-yyyy',
        autoclose: true
    }).on('show', function (e) {
        if (e.date) {
            $(this).data('stickyDate', e.date);
        } else if ($(this).val()) {
            /**auto-populate existing selection*/
            $(this).data('stickyDate', new Date($(this).val()));
            $(this).datepicker('setDate', new Date($(this).val()));
        } else {
            $(this).data('stickyDate', null);
        }
    }).on('hide', function (e) {
        var stickyDate = $(this).data('stickyDate');
        if (!e.date && stickyDate) {
            $(this).datepicker('setDate', stickyDate);
            $(this).data('stickyDate', null);
        }
    }).on('changeDate', function (event) {
        endDate = new Date(event.date.getFullYear(), event.date.getMonth(), event.date.getDate(), 0, 0, 0);
        var error = 0;
        if (startDate == null) {
            if ($('#departureDate_search').val() != '') {
                startDate = new Date($('#departureDate_search').val().replace(/-/g, "/"));
            }
        }
        if ($('#roundTrip').val() == "YES")
        {
            if (startDate != null && startDate != 'undefined') {
                if (endDate < startDate) {
                    alert("Return Date is less than Departure Date");
                    $('#returnDate_search').val('');
                    error = 1;
                }
            }
        }

    });

    $('body').scrollspy({target: '#testx'})
    //// set the date we're counting down to
    var target_date = new Date().getTime() + 900 * 1000;
    warning_date = 180 * 1000;
    warning_date = (target_date - warning_date);
    //console.log(target_date);
    //console.log(warning_date);




    // variables for time units
    var days, hours, minutes, seconds;

    // update the tag with id "countdown" every 1 second
    var ival = null;
    ival = setInterval(function () {

        // find the amount of "seconds" between now and target
        var current_date = new Date().getTime();
        var seconds_left = (target_date - current_date) / 1000;



        // do some time calculations
        minutes = parseInt(seconds_left / 60);
        seconds = parseInt(seconds_left % 60);
        // format countdown string + set tag value
        
    }, 1000);
    //end counterdown

    $(document).ready(function () {
        history.pushState(null, null, document.URL);
        window.addEventListener('popstate', function () {
            history.pushState(null, null, document.URL);
        });
        $('#tripTransitDialog').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('whatever');
            var modal = $(this);
            var html = $('#' + recipient).html();
            modal.find('.modal-body').html(html);
        });
    });

    //AUTOCOMPLETE PASSENGER

            $("#firstNameAdultPax1").autocomplete({
                source: function (request, response) {
                    $.ajax({

                        url: "https://www.sriwijayaair.co.id/SJ/Flights/getHistoryPsgr",
                        dataType: "json",
                        type: 'POST',
                        data: {
                            STATUS: "ADULT",
                            TYPE: "FIRST_NAME",

                            DATA: $("#firstNameAdultPax1").val()
                        },
                        success: function (data) {
                            response(data);



                            //$('#passengerDetail').html(data);
                        }
                    });
                },
                minLength: 1,
                select: function (event, ui) {
                    $('#firstNameAdultPax1').val(ui.item.FIRST_NAME);
                    $('#lastNameAdultPax1').val(ui.item.LAST_NAME);
                    $('#titleNameAdultPax1 option:contains(' + ui.item.SUFFIX + ')').each(function () {
                        if ($(this).text() == ui.item.SUFFIX) {
                            $(this).attr('selected', 'selected');
                            return false;
                        }
                        return true;
                    });
                    $('#FFNoAdultPax1').val(ui.item.FFNO);

                },
                open: function () {
                    $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
                },
                close: function (event, ui) {
                    $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
                }

            });



            $("#lastNameAdultPax1").autocomplete({
                source: function (request, response) {
                    $.ajax({

                        url: "https://www.sriwijayaair.co.id/SJ/Flights/getHistoryPsgr",
                        dataType: "json",
                        type: 'POST',
                        data: {
                            STATUS: "ADULT",
                            TYPE: "LAST_NAME",

                            DATA: $("#lastNameAdultPax1").val()
                        },
                        success: function (data) {
                            response(data);
                            //$('#passengerDetail').html(data);
                        }
                    });
                },
                minLength: 1,
                select: function (event, ui) {
                    $('#firstNameAdultPax1').val(ui.item.FIRST_NAME);
                    $('#lastNameAdultPax1').val(ui.item.LAST_NAME);
                    $('#titleNameAdultPax1 option:contains(' + ui.item.SUFFIX + ')').each(function () {
                        if ($(this).text() == ui.item.SUFFIX) {
                            $(this).attr('selected', 'selected');
                            return false;
                        }
                        return true;
                    });
                    $('#FFNoAdultPax1').val(ui.item.FFNO);
                },
                open: function () {
                    $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
                },
                close: function (event, ui) {
                    $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
                }
            });


        

    //POINTER STEP PROCESS


    $('#btnSearch').click(function () {
        $("#btnSearch").removeClass("btn-info").addClass('btn-danger').css("background-color", "");
        $("#btnSelect").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnRedeem").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnPsgrDet").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnPayment").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
    });



    $('#btnSelect').click(function () {
        $('html,body').animate({

            scrollTop: $("#selDept").offset().top},
                'slow');


        $("#btnSearch").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnSelect").removeClass("btn-info").addClass('btn-danger').css("background-color", "");
        $("#btnRedeem").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnPsgrDet").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnPayment").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
    });



    $('#btnRedeem').click(function () {
        $('html,body').animate({

            scrollTop: $("#smiles_redeem_points").offset().top},
                'slow');


        $("#btnSearch").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnSelect").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnRedeem").removeClass("btn-info").addClass('btn-danger').css("background-color", "");
        $("#btnPsgrDet").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnPayment").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
    });




    $('#btnPsgrDet').click(function () {
        $('html,body').animate({scrollTop: $("#status-contact-detail").offset().top}, 'slow');
        $("#collapseContact").removeClass();
        $("#collapse-contact").addClass('collapse in');
        $("#passColapse").removeClass();
        $("#collapse-1").addClass('collapse in');
        $("#btnSearch").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnSelect").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnRedeem").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnPsgrDet").removeClass("btn-info").addClass('btn-danger').css("background-color", "");
        $("#btnPayment").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
    });



    $('#btnPayment').click(function () {
        $('html,body').animate({scrollTop: $("#status-payment").offset().top}, 'slow');
        $("#collapsePayment").removeClass();
        $("#collapse-2").addClass('collapse in');
        $("#btnSearch").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnSelect").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnRedeem").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnPsgrDet").removeClass("btn-danger").addClass('btn-info').css("background-color", "#1b3682");
        $("#btnPayment").removeClass("btn-info").addClass('btn-danger').css("background-color", "");
    });



    //STATUS COMPLETE FIELD


    if (($('#firstName').val() == "") || ($('#lastName').val() == "") || ($('#address').val() == "") || ($('#city').val() == "") || ($('#province').val() == "") || ($('#originPhone1').val() == "") || ($('#originPhone2').val() == "") || ($('#originPhone3').val() == "") || ($('#mobilePhone1').val() == "") || ($('#mobilePhone2').val() == "") || ($('#mobilePhone3').val() == "") || ($('#emailAddress').val() == "") || ($('#REemailAddress').val() == ""))
    {


        $("#status-contact-detail").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
    } else {


        $("#status-contact-detail").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
    }



    if (($('.firstNamePsgrAdult').val() == "") || ($('.lastNamePsgrAdult').val() == "")) {
        $("#status-pax-detail").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
    } else {


        $("#status-pax-detail").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
    }





    $("pd")
            .focusout(function () {
                if (($('.firstNamePsgrAdult').val() == "") || ($('.lastNamePsgrAdult').val() == "")) {
                    $("#status-pax-detail").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                } else {
                    $("#status-pax-detail").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                }
            });


    $("cd")
            .focusout(function () {



                if (($('#firstName').val() == "") || ($('#lastName').val() == "") || ($('#address').val() == "") || ($('#city').val() == "") || ($('#province').val() == "") || ($('#originPhone1').val() == "") || ($('#originPhone2').val() == "") || ($('#originPhone3').val() == "") || ($('#mobilePhone1').val() == "") || ($('#mobilePhone2').val() == "") || ($('#mobilePhone3').val() == "") || ($('#emailAddress').val() == "") || ($('#REemailAddress').val() == "")) {
                    $("#status-contact-detail").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                } else {

                    $("#status-contact-detail").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                }
            });



    if ($('input[name=mystrokeRadioList]:checked').length <= 0) {
        $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
    } else {
        $("#status-payment").text("Complete").removeClass("alert-danger badge").addClass("alert-success badge");
    }

    //END STATUS COMPLETE FIELD
    $('#checkBoxAgreePass').click(function () {
        var value_pd = '';

        if ($('#email').val() == "" || $('#password').val() == "" || $('#checkMeOut').prop('checked') == false || $('#titleName').val() == "" || $('#firstName').val() == "" || $('#lastName').val() == "" || $('#address').val() == "" || $('#countryName').val() == "" || $('#city').val() == "" || $('#province').val() == "" || $('#originPhone1').val() == "" || $('#originPhone2').val() == "" || $('#originPhone3').val() == "" || $('#mobilePhone1').val() == "" || $('#mobilePhone2').val() == "" || $('#mobilePhone3').val() == "" || $('#emailAddress').val() == "" || $('#REemailAddress').val() == "")
        {


            swal('', 'Please filled the empty field in Contact Detail');
            $('#checkBoxAgreePass').prop('checked', false);
        } else {

            if ($('#emailAddress').val() != "")
            {
                var email = $('#emailAddress').val();
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!filter.test(email)) {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Plese enter valid email address'
                    });
                    return false;
                }

                if ($('#emailAddress').val() != $('#REemailAddress').val())
                {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Plese enter email address same with re-email address'
                    });
                    return false;
                }

            }

            if ($('#checkBoxAgreePass').is(':checked')) {
                alert('Are you sure to add in my passenger detail ?');
                value_pd = 1;

            } else {
                swal('', 'Are you sure to add in my passenger detail ?');

                value_pd = 0;
            }



            if (value_pd == 1)
            {
                $.ajax({
                    type: "POST",
                    url: "https://www.sriwijayaair.co.id/SJ/Flights/addPassDetail",
                    data: {
                        ADULT_PAX: $('#AdultSrc').val(),
                        CHILD_PAX: $('#ChildSrc').val(),
                        INFANT_PAX: $('#InfantSrc').val(),
                        CITY_FROM: 'CGK',
                        CITY_TO: 'UPG',
                        RETURN_STATUS: 'NO',
                        EBT_TYPE: '{"EBT_TYPE":[{"EBT_TYPE_CODE":"BAG05","EBT_TYPE_NAME":"5 Kg"},{"EBT_TYPE_CODE":"BAG10","EBT_TYPE_NAME":"10 Kg"},{"EBT_TYPE_CODE":"BAG15","EBT_TYPE_NAME":"15 Kg"},{"EBT_TYPE_CODE":"BAG20","EBT_TYPE_NAME":"20 Kg"}]}',
                        agreepassdet: value_pd,
                        MEMBERSHIP: $('#membership').val()

                    },
                    success: function (data) {
                        $('#passengerDetail').html(data);
                        $('#checkBoxAgreePass').val(value_pd);
                        $("#passColapse").removeClass();
                        $("#collapse-1").addClass('collapse in');
                    }
                });


            } else {
                $('#firstNameAdultPax').val('');
                $('#lastNameAdultPax').val('');
            }
        }

    });


    //CASH AND SMILES
    $('#AgreeFOP').click(function () {
        if ($('#AgreeFOP').is(':checked'))
        {
            if ($('#usernameCheck').val() == '')
            {
                swal('', 'Please Login First!');
                return false;
            } else if ($('#FFNoCheck').val() == '')
            {

                swal('', 'Please Register FrequentFlyer SriwijayaMiles!');
                return false;
            } else if ($('#pointCheck').val() == '' && $('#pointCheck').val() <= 0)
            {

                swal('', 'Your poin is not enough to use Smiles');
                return false;
            } else {
                //GET REDEEM
                value_sti = 0;

                if ($('#insuranceSelected').is(':checked')) {
                    value_sti = 1;
                }

                    if ($('#price_detail').val() != '')
                    {
                        //GET REDEEM
                        showRedeem();
                        //END GET REDEEM
                    } else {

                        $("#smiles_redeem_points").hide('slow');
                        swal('', 'Please Choose Departure Flight');
                        return false;
                    }
                }
        } else {


            $("#smiles_redeem_points").hide('slow');
            $('#redeemPointVal').val('');
            $('.rpoint').prop('checked', false);
            $('#values_choose_redeem').val('');
            $('#form_values_choose_redeem').hide(1000);
        }
    });
    /*END OF CASH AND SMILES*/


    if ($("input[name='mystrokeRadioList']#VISA_MC_CC_VER")) {
        $("input[name='mystrokeRadioList']#VISA_MC_CC_VER").click(function () {
            $("#formCC").hide('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").show('slow');

            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
        });
    }

    if ($("input[name='mystrokeRadioList']#VISA_MC_CC")) {
        $("input[name='mystrokeRadioList']#VISA_MC_CC").click(function () {
            $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/doku.png').height(50).width(50);
            $("#txtcc").html("Important: You will be redirected to Doku's website to secure your payment.");
            $("#formCC").show('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();

            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            //STATUS COMPLETE FIELD
            if (($('#cardHolderName').val() == "") || ($('#emailCC').val() == "")) {
                $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
            } else {
                $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
            }

            $("pym")
                    .focusout(function () {
                        if (($('#cardHolderName').val() == "") || ($('#emailCC').val() == "")) {
                            $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                        } else {
                            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                        }

                    });
            //END STATUS COMPLETE FIELD

        });
    }
    
    //finda bniwow
    $("input[name='mystrokeRadioList']#VISA_MC_CC_BW").click(function () {
        
        var pricetotal = parseInt($('#GrandTotal').val());
        if(pricetotal < 1500000)
        {
            $('#VISA_MC_CC_BW').attr('disabled', true);
            swal('','Oops, minimum Rp 1.500.000 for using this payment.');
            return false;
        }else{
            $('#VISA_MC_CC_BW').attr('disabled', false);
        }
        
        //finda bniwow
        var d = new Date();
        var n = d.getDay();
        var start_date = new Date().getTime();
        //var end_date = new Date('').getTime();
        /*if(start_date <= end_date)
        {*/
            if(n == 3)
            {
                swal('','Use your BNI Credit Card Now to get 100K Discount !');
            }
        //}
        

        $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/doku.png').height(50).width(50);
        $("#formCC").show('slow');
        $("#klikBCA").hide();
        $("#formCCVeritrans").hide('slow');

        $('#CC_NAME').val('');
        $('#CC_EMAIL').val('');
        $('#TENOR').val('');
        $("#CC-INFO-USER").hide('slow');
        $("#CC-CICILAN").hide('slow');
        $(".div-cc-mndr").hide(); //finda mandiri 
        //finda ovo
        $(".OvoHP").hide();
        $(".OvoHP").val('');
        $("#tAndCconditionOVO").hide();

        //STATUS COMPLETE FIELD
        if (($('#cardHolderName').val() == "") || ($('#emailCC').val() == "")) {
            $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
        } else {
            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
        }

        $("pym")
                .focusout(function () {
                    if (($('#cardHolderName').val() == "") || ($('#emailCC').val() == "")) {
                        $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                    } else {
                        $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                    }
                });
        //END STATUS COMPLETE FIELD

    });
    
    //finda wowbni
    $("input[name='mystrokeRadioList']#VISA_MC_CC_WB").click(function () {
        
        var pricetotal = parseInt($('#GrandTotal').val());
        if(pricetotal < 1500000)
        {
            $('#VISA_MC_CC_WB').attr('disabled', true);
            swal('','Oops, minimum Rp 1.500.000 for using this payment.');
            return false;
        }else{
            $('#VISA_MC_CC_WB').attr('disabled', false);
        }
        
        //finda bniwow
        var d = new Date();
        var n = d.getDay();
        var start_date = new Date().getTime();
        //var end_date = new Date('').getTime();
        /*if(start_date <= end_date)
        {*/
            if(n == 3)
            {
                swal('','Use your BNI Debit Card Now to get 100K Discount !');
            }
        //}
        

        $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/doku.png').height(50).width(50);
        $("#formCC").show('slow');
        $("#klikBCA").hide();
        $("#formCCVeritrans").hide('slow');

        $('#CC_NAME').val('');
        $('#CC_EMAIL').val('');
        $('#TENOR').val('');
        $("#CC-INFO-USER").hide('slow');
        $("#CC-CICILAN").hide('slow');
        $(".div-cc-mndr").hide(); //finda mandiri 
        //finda ovo
        $(".OvoHP").hide();
        $(".OvoHP").val('');
        $("#tAndCconditionOVO").hide();

        //STATUS COMPLETE FIELD
        if (($('#cardHolderName').val() == "") || ($('#emailCC').val() == "")) {
            $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
        } else {
            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
        }

        $("pym")
                .focusout(function () {
                    if (($('#cardHolderName').val() == "") || ($('#emailCC').val() == "")) {
                        $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                    } else {
                        $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                    }
                });
        //END STATUS COMPLETE FIELD

    });

    if ($("input[name='mystrokeRadioList']#CREDIT-REDDOT")) {
        $("input[name='mystrokeRadioList']#CREDIT-REDDOT").click(function () {

                $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/small_logo/atm_border/reddot.png').height(50).width(100);
                $("#txtcc").hide();
                $("#formCC").show('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');

            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide('slow');

            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            //STATUS COMPLETE FIELD
                if (($('#cardHolderName').val() == "") || ($('#emailCC').val() == "")) {
                    $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                } else {
                    $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                }


                $("pym")
                        .focusout(function () {
                            if (($('#cardHolderName').val() == "") || ($('#emailCC').val() == "")) {
                                $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                            } else {
                                $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                            }



                        });
            //END STATUS COMPLETE FIELD

        });
    }

    if ($("input[name='mystrokeRadioList']#CREDIT-BNI")) {
        $("input[name='mystrokeRadioList']#CREDIT-BNI").click(function () {
            $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/doku.png').height(50).width(50);
            $("#txtcc").html("Important: You will be redirected to Doku's website to secure your payment.");
            $("#formCC").show('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").show('slow');
            $(".div-cc-mndr").hide('slow');
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $("pym")
                    .focusout(function () {
                        //STATUS COMPLETE FIELD
                        if ($('#cardHolderName').val() == "" || $('#emailCC').val() == "" || $('#TENOR').val() == "") {
                            $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                        } else {
                            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                        }
                        //END STATUS COMPLETE FIELD
                    });
        });
    }

    if ($("input[name='mystrokeRadioList']#CREDIT-MANDIRI")) {
        $("input[name='mystrokeRadioList']#CREDIT-MANDIRI").click(function () {
            $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/doku.png').height(50).width(50);
            $("#formCC").show('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');

            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").show('slow'); //finda mandiri

            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();


            $("pym")
                    .focusout(function () {
                        //STATUS COMPLETE FIELD
                        if ($('#cardHolderName').val() == "" || $('#emailCC').val() == "" || $('#TENOR').val() == "") {
                            $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                        } else {
                            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                        }
                        //END STATUS COMPLETE FIELD
                    });
        });
    }

    if ($("input[name='mystrokeRadioList']#cimbKlik")) {
        $("input[name='mystrokeRadioList']#cimbKlik").click(function () {
            $("#formCC").hide('slow');
            $('#cardHolderName').val('');
            $('#emailCC').val('');
            $("#klikBCA").hide('slow');
            $("#tAndCcondition").hide('slow');
            $("#tAndCconditionATM").hide('slow');
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").show('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();


            $("pym")
                    .focusout(function () {
                        //STATUS COMPLETE FIELD
                        if (($('#CC_NAME').val() == "") || ($('#CC_EMAIL').val() == "")) {
                            $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                        } else {
                            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                        }
                        //END STATUS COMPLETE FIELD
                    });

        });
    }

    if ($("input[name='mystrokeRadioList']#ATM"))
    {
        $("input[name='mystrokeRadioList']#ATM").click(function () {
            var promoCode = '';

            $("#formCC").hide('slow');
            $('#cardHolderName').val('');
            $('#emailCC').val('');
            $("#klikBCA").hide();
            $("#tAndCconditionATM").show('slow');
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $.ajax({
                type: "POST",
                url: "https://www.sriwijayaair.co.id/SJ/Flights/termConditionbank",
                data: {
                    bank_value: $('#ATM').val(),
                    promoCode: promoCode
                },
                success: function (data) {
                    $('#tAndCconditionATM').html(data);
                }
            });
        });
    }

    if ($("input[name='mystrokeRadioList']#RETAIL")) {
        $("input[name='mystrokeRadioList']#RETAIL").click(function () {
            $("#formCC").hide('slow');
            $('#cardHolderName').val('');
            $('#emailCC').val('');
            $("#klikBCA").hide();
            //$("#formCC")[0].reset();
            $("#tAndCconditionATM").hide('slow');
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionRetail").show('slow');
            $("#tAndCconditionIndomaret").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');

            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();

            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $.ajax({
                type: "POST",
                url: "https://www.sriwijayaair.co.id/SJ/Flights/termConditionbank",
                data: {
                    bank_value: $('#RETAIL').val()
                },
                success: function (data) {
                    $('#tAndCconditionRetail').html(data);
                }
            });
        });
    }



    if ($("input[name='mystrokeRadioList']#INDOMARET")) {

        $("input[name='mystrokeRadioList']#INDOMARET").click(function () {
            $("#formCC").hide('slow');

            $('#cardHolderName').val('');
            $('#emailCC').val('');
            $("#klikBCA").hide();
            $("#tAndCconditionATM").hide('slow');
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionRetail").hide('slow');
            $("#tAndCconditionIndomaret").show('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $.ajax({
                type: "POST",

                url: "https://www.sriwijayaair.co.id/SJ/Flights/termConditionbank",
                data: {
                    bank_value: $('#INDOMARET').val()
                },
                success: function (data) {
                    $('#tAndCconditionIndomaret').html(data);
                }
            });
        });
    }

    if ($("input[name='mystrokeRadioList']#ELECTRONIC")) {
        $("input[name='mystrokeRadioList']#ELECTRONIC").click(function () {
            $("#formCC").hide('slow');

            $('#cardHolderName').val('');
            $('#emailCC').val('');
            $("#klikBCA").hide();
            $("#tAndCconditionATM").hide('slow');
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionRetail").hide('slow');
            $("#tAndCconditionIndomaret").hide('slow');
            $("#tAndCconditionDokuWallet").show('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $.ajax({
                type: "POST",
                url: "https://www.sriwijayaair.co.id/SJ/Flights/termConditionbank",
                data: {
                    bank_value: $('#ELECTRONIC').val()
                },
                success: function (data) {
                    $('#tAndCconditionDokuWallet').html(data);
                }
            });
        });
    }

    //finda ovo
    if ($("input[name='mystrokeRadioList']#OVO")) {
        $("input[name='mystrokeRadioList']#OVO").click(function () {
            $("#formCC").hide('slow');
            $('#cardHolderName').val('');
            $('#emailCC').val('');
            $("#klikBCA").hide();
            //$("#formCC")[0].reset();
            $("#tAndCconditionATM").hide('slow');
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionRetail").hide('slow');
            $("#tAndCconditionIndomaret").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $("#tAndCconditionOVO").show('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide(); //finda mandiri
            $(".OvoHP").show('slow');
            $(".OvoHP").val('');


            $.ajax({
                type: "POST",
                url: "https://www.sriwijayaair.co.id/SJ/Flights/termConditionbank",
                data: {
                    bank_value: $('#OVO').val(),
                },
                success: function (data) {
                    $('#tAndCconditionOVO').html(data);
                }
            });


            if (($('.OvoHP').val() == "")) {
                $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
            } else {
                $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
            }
            $("pym")
                    .focusout(function () {
                        if ($('.OvoHP').val() == "") {
                            $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                        } else {
                            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                        }
                    });

        });
    }

    if ($("input[name='mystrokeRadioList']#Permata"))
    {
        $("input[name='mystrokeRadioList']#Permata").click(function () {
            $("#formCC").hide('slow');
            $('#cardHolderName').val('');
            $('#emailCC').val('');
            //$("#formCC")[0].reset();
            $("#tAndCcondition").hide('slow');
            $("#tAndCconditionATM").hide('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');

            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
        });
    }

    if ($("input[name='mystrokeRadioList']#bcaVA"))
    {
        $("input[name='mystrokeRadioList']#bcaVA").click(function () {
            $("#formCC").hide('slow');
            $('#cardHolderName').val('');
            $('#emailCC').val('');
            //$("#formCC")[0].reset();
            $("#tAndCcondition").hide('slow');
            $("#tAndCconditionATM").hide('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
        });
    }

    if ($("input[name='mystrokeRadioList']#BRI-VA"))
    {
        $("input[name='mystrokeRadioList']#BRI-VA").click(function () {

            $("#formCC").hide('slow');
            $('#cardHolderName').val('');
            $('#emailCC').val('');
            //$("#formCC")[0].reset();
            $("#tAndCcondition").hide('slow');
            $("#tAndCconditionATM").hide('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();
            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
        });
    }

    if ($("input[name='mystrokeRadioList']#bniVA"))
    {
        $("input[name='mystrokeRadioList']#bniVA").click(function () {
            $("#formCC").hide('slow');

            $('#cardHolderName').val('');
            $('#emailCC').val('');
            //$("#formCC")[0].reset();
            $("#tAndCcondition").hide('slow');
            $("#tAndCconditionATM").hide('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
        });
    }





    /* if ($("input[name='mystrokeRadioList']#bniVA"))
     {
     
     
     $("input[name='mystrokeRadioList']#bniVA").click(function () {
     $("#formCC").hide('slow');
     
     $('#cardHolderName').val('');
     $('#emailCC').val('');
     //$("#formCC")[0].reset();
     
     
     
     
     
     
     $("#tAndCcondition").hide('slow');
     $("#tAndCconditionATM").hide('slow');
     $("#klikBCA").hide();
     
     
     $("#formCCVeritrans").hide('slow');
     $("#tAndCconditionDokuWallet").hide('slow');
     
     $('#CC_NAME').val('');
     $('#CC_EMAIL').val('');
     $('#TENOR').val('');
     
     
     
     
     
     
     $("#CC-INFO-USER").hide('slow');
     $("#CC-CICILAN").hide('slow');
     $(".div-cc-mndr").hide();
     
     $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
     });
     }
     */




    if ($("input[name='mystrokeRadioList']#danamonVA"))
    {
        $("input[name='mystrokeRadioList']#danamonVA").click(function () {
            $("#formCC").hide('slow');

            $('#cardHolderName').val('');
            $('#emailCC').val('');
            //$("#formCC")[0].reset();
            $("#tAndCcondition").hide('slow');
            $("#tAndCconditionATM").hide('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
        });
    }


    if ($("input[name='mystrokeRadioList']#IBMUAMALAT"))
    {
        $("input[name='mystrokeRadioList']#IBMUAMALAT").click(function () {
            $("#formCC").hide('slow');

            $('#cardHolderName').val('');
            $('#emailCC').val('');
            //$("#formCC")[0].reset();
            $("#tAndCcondition").hide('slow');
            $("#tAndCconditionATM").hide('slow');
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $("#tAndCconditionDokuWallet").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
        });
    }





    if ($("input[name='mystrokeRadioList']#Klik_BCA"))
    {
        $("input[name='mystrokeRadioList']#Klik_BCA").click(function () {
            $("#formCC").hide('slow');

            $('#cardHolderName').val('');
            $('#emailCC').val('');
            $("#tAndCcondition").show();
            $("#tAndCconditionATM").hide();
            $("#formCCVeritrans").hide('slow');
            $(".div-cc-mndr").hide();
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").hide('slow');
            $("#CC-CICILAN").hide('slow');
            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();

            $("#klikBCA").show();
            $.ajax({
                type: "POST",
                url: "https://www.sriwijayaair.co.id/SJ/Flights/termConditionbank",
                data: {
                    bank_value: $('#Klik_BCA').val()
                },
                success: function (data) {
                    $('#tAndCcondition').html(data);
                }
            });
            $("pym")
                    .focusout(function () {
                        if ($('#IDKlikBCA').val() == "") {
                            $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                        } else {
                            $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
                        }



                    });

































        });
    }
    if ($("input[name='mystrokeRadioList']#KLIKDANAMON"))
    {
        $("input[name='mystrokeRadioList']#KLIKDANAMON").click(function () {
            $("#formCC").hide('slow');
            $('#cardHolderName').val('');
            $('#emailCC').val('');
            //$("#formCC")[0].reset();
            $("#tAndCcondition").hide();
            $("#tAndCconditionATM").hide();
            $("#klikBCA").hide();
            $("#formCCVeritrans").hide('slow');
            $('#CC_NAME').val('');
            $('#CC_EMAIL').val('');
            $('#TENOR').val('');
            $("#CC-INFO-USER").show('slow');
            $("#CC-CICILAN").hide('slow');
            $(".div-cc-mndr").hide();

            //finda ovo
            $(".OvoHP").hide();
            $(".OvoHP").val('');
            $("#tAndCconditionOVO").hide();


            //STATUS COMPLETE FIELD
            if (($('#CC_NAME').val() == "") || ($('#CC_EMAIL').val() == "")) {
                $("#status-payment").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
            } else {
                $("#status-payment").text("Complete").removeClass("alert-danger bage").addClass("alert-success badge");
            }
            //END STATUS COMPLETE FIELD

        });
    }

    $('#one_way').click(function () {
        $('#returnBox').hide();
        $('#gapSpace').show();
        $('#returnDate_search').val('');
        $('#roundTrip').val('NO');
        $('#roundTrip_').removeClass("btn-info text-white");
        $('#oneWay').addClass("btn-info text-white").removeClass("active");

















    });
    $('#round_trip').click(function () {
        $('#returnBox').show();
        $('#gapSpace').hide();
        $('#roundTrip').val('YES');
        $('#oneWay').removeClass("btn-info text-white");
        $('#roundTrip_').addClass("btn-info text-white").removeClass("active");
    });












    $("#btn_price_bus").click(function () {
        $("#detailFlight").show('slow');
    });
    $("#fromSrc2_search").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "https://www.sriwijayaair.co.id/SJ/Home/getRouteFrom",
                dataType: "json",
                type: 'POST',
                data: {
                    "fromSrc": $("#fromSrc2_search").val(),
                    "ROUTE_FROM": 'ZXlKQlVrUWlPbnNpUTA5RVJTSTZJa0ZTUkNJc0lrNUJUVVVpT2lKQmJHOXlJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSk5ZV3hwSW4wc0lrRk5VU0k2ZXlKRFQwUkZJam9pUVUxUklpd2lUa0ZOUlNJNklrRnRZbTl1SWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpRWVhSMGFXMTFjbUVpZlN3aVFsQk9JanA3SWtOUFJFVWlPaUpDVUU0aUxDSk9RVTFGSWpvaVFtRnNhV3R3WVhCaGJpSXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVUzVnNkR0Z1SUVGcWFTQk5kV2hoYlcxaFpDQlRkV3hoYVcxaGJpSjlMQ0pDUkU4aU9uc2lRMDlFUlNJNklrSkVUeUlzSWs1QlRVVWlPaUpDWVc1a2RXNW5JaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSklkWE5sYVc0Z1UyRnpkSEpoYm1WbllYSmhJbjBzSWtKRVNpSTZleUpEVDBSRklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVGVXRnRjM1ZrYVc0Z1RtOXZjaUo5TENKQ1YxZ2lPbnNpUTA5RVJTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKQ2JHbHRZbWx1WjNOaGNta2lmU3dpUWxSSUlqcDdJa05QUkVVaU9pSkNWRWdpTENKT1FVMUZJam9pUW1GMFlXMGlMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklraGhibWNnVG1Ga2FXMGlmU3dpUWt0VElqcDdJa05QUkVVaU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJa1poZEcxaGQyRjBhU0JUYjJWcllYSnVieUo5TENKQ1JVb2lPbnNpUTA5RVJTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lTMkZzYVcxaGNtRjFJbjBzSWtKSlN5STZleUpEVDBSRklqb2lRa2xMSWl3aVRrRk5SU0k2SWtKcFlXc2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrWnlZVzV6SUV0aGFYTnBaWEJ2SW4wc0lrSk5WU0k2ZXlKRFQwUkZJam9pUWsxVklpd2lUa0ZOUlNJNklrSnBiV0VpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJbE4xYkhSaGJpQk5kV2hoYlcxaFpDQlRZV3hoYUhWa2FXNGlmU3dpUTFOWUlqcDdJa05QUkVVaU9pSkRVMWdpTENKT1FVMUZJam9pUTJoaGJtZHphR0VpTENKRGIzVnVkSEo1SWpvaVEyaHBibUVpTENKQmNHOU9ZVzFsSWpvaVNIVmhibWRvZFdFaWZTd2lRMDFDSWpwN0lrTlBSRVVpT2lKRFRVSWlMQ0pPUVUxRklqb2lRMjlzYjIxaWJ5SXNJa052ZFc1MGNua2lPaUpUY21rZ1RHRnVhMkVpTENKQmNHOU9ZVzFsSWpvaVFtRnVaR0Z5WVc1aGFXdGxJRWx1ZEdWeWJtRjBhVzl1WVd3Z1EyOXNiMjFpYnlCQmFYSndiM0owSW4wc0lrUkJSQ0k2ZXlKRFQwUkZJam9pUkVGRUlpd2lUa0ZOUlNJNklrUmhJRTVoYm1jaUxDSkRiM1Z1ZEhKNUlqb2lWbWxsZEc1aGJTSXNJa0Z3YjA1aGJXVWlPaUprWVNCT1FVNUhJRWxPVkVWU1RrRlVTVTlPUVV3Z1FVbFNVRTlTVkNKOUxDSkVSVmdpT25zaVEwOUVSU0k2SWtSRldDSXNJazVCVFVVaU9pSkVaV3RoYVNJc0lrTnZkVzUwY25raU9pSkpibVJ2Ym1WemFXRWlMQ0pCY0c5T1lXMWxJam9pVG05d0lFZHZiR2xoZENCRVpXdGhhU0JCYVhKd2IzSjBJbjBzSWtSUVV5STZleUpEVDBSRklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpDWVd4cElDMGdUbWQxY21Gb0lGSmhhU0JKYm5SbGNtNWhkR2x2Ym1Gc0lFRnBjbkJ2Y25RaWZTd2lSRWxNSWpwN0lrTlBSRVVpT2lKRVNVd2lMQ0pPUVUxRklqb2lSR2xzYVNJc0lrTnZkVzUwY25raU9pSlVhVzF2Y2kxTVpYTjBaU0lzSWtGd2IwNWhiV1VpT2lKUWNtVnphV1JsYm5SbElFNXBZMjlzWVhVZ1RHOWlZWFJ2SUVsdWRHVnlibUYwYVc5dVlXd2dRV2x5Y0c5eWRDSjlMQ0pGVGtVaU9uc2lRMDlFUlNJNklrVk9SU0lzSWs1QlRVVWlPaUpGYm1SbElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKSUxpQklZWE5oYmlCQmNtOWxZbTlsYzIxaGJpSjlMQ0pHUzFFaU9uc2lRMDlFUlNJNklrWkxVU0lzSWs1QlRVVWlPaUpHWVd0bVlXc2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrWmhhMlpoYXlCVWIzSmxZU0JCYVhKd2IzSjBJbjBzSWtaUFF5STZleUpEVDBSRklqb2lSazlESWl3aVRrRk5SU0k2SWtaMWVtaHZkU0lzSWtOdmRXNTBjbmtpT2lKRGFHbHVZU0lzSWtGd2IwNWhiV1VpT2lKR2RYcG9iM1VnUTJoaGJtZHNaU0JKYm5SbGNtNWhkR2x2Ym1Gc0lFRnBjbkJ2Y25RaWZTd2lSMVJQSWpwN0lrTlBSRVVpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSktZV3hoYkhWa1pHbHVJbjBzSWtOQlRpSTZleUpEVDBSRklqb2lRMEZPSWl3aVRrRk5SU0k2SWtkMVlXNW5lbWh2ZFNJc0lrTnZkVzUwY25raU9pSkRhR2x1WVNJc0lrRndiMDVoYldVaU9pSkhkV0Z1WjNwb2IzVWdTVzUwSUVGcGNuQnZjblFpZlN3aVNFRkxJanA3SWtOUFJFVWlPaUpJUVVzaUxDSk9RVTFGSWpvaVNHRnBhMjkxSWl3aVEyOTFiblJ5ZVNJNklrTm9hVzVoSWl3aVFYQnZUbUZ0WlNJNklraGhhV3R2ZFNCTlpXbHNZVzRnU1c1MFpYSnVZWE5wYjI1aGJDSjlMQ0pJVEZBaU9uc2lRMDlFUlNJNklraE1VQ0lzSWs1QlRVVWlPaUpJWVd4cGJTQlFaWEprWVc1aElFc2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklraGhiR2x0SUZCbGNtUmhibUVnUzNWemRXMWhJbjBzSWtoSFNDSTZleUpEVDBSRklqb2lTRWRJSWl3aVRrRk5SU0k2SWtoaGJtZDZhRzkxSWl3aVEyOTFiblJ5ZVNJNklrTm9hVzVoSWl3aVFYQnZUbUZ0WlNJNklraGhibWQ2YUc5MUlGaHBZVzl6YUdGdUlFbHVkR1Z5Ym1GMGFXOXVZV3dnUVdseWNHOXlkQ0o5TENKSVJrVWlPbnNpUTA5RVJTSTZJa2hHUlNJc0lrNUJUVVVpT2lKSVpXWmxhU0lzSWtOdmRXNTBjbmtpT2lKRGFHbHVZU0lzSWtGd2IwNWhiV1VpT2lKSVpXWmxhU0JZYVc1eGFXRnZJRWx1ZEdWeWJtRjBhVzl1WVd3Z1FXbHljRzl5ZENKOUxDSkRSMHNpT25zaVEwOUVSU0k2SWtOSFN5SXNJazVCVFVVaU9pSktZV3RoY25SaElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVGIyVnJZWEp1YnlCSVlYUjBZU0JKYm5SbGNtNWhkR2x2Ym1Gc0lFRnBjbkJ2Y25RaWZTd2lSRXBDSWpwN0lrTlBSRVVpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWxOMWJIUmhiaUJVYUdGb1lTSjlMQ0pFU2tvaU9uc2lRMDlFUlNJNklrUktTaUlzSWs1QlRVVWlPaUpLWVhsaGNIVnlZU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lVMlZ1ZEdGdWFTSjlMQ0pUVjBFaU9uc2lRMDlFUlNJNklsTlhRU0lzSWs1QlRVVWlPaUpLYVdWNVlXNW5JaXdpUTI5MWJuUnllU0k2SWtOb2FXNWhJaXdpUVhCdlRtRnRaU0k2SWtwcFpYbGhibWNnUTJoaGIzTm9ZVzRnU1c1MFpYSnVZWFJwYjI1aGJDQkJhWEp3YjNKMEluMHNJa3BLVGlJNmV5SkRUMFJGSWpvaVNrcE9JaXdpVGtGTlJTSTZJa3BwYm1wcFlXNW5JaXdpUTI5MWJuUnllU0k2SWtOb2FXNWhJaXdpUVhCdlRtRnRaU0k2SWxGMVlXNTZhRzkxSUVsdWRDQkJhWEp3YjNKMEluMHNJa3RFU1NJNmV5SkRUMFJGSWpvaVMwUkpJaXdpVGtGTlJTSTZJa3RsYm1SaGNta2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklraGhiSFZ2YkdWdkluMHNJa3RVUnlJNmV5SkRUMFJGSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlNZV2hoWkdrZ1QyVnpiV0Z1SW4wc0lrdENWU0k2ZXlKRFQwUkZJam9pUzBKVklpd2lUa0ZOUlNJNklrdHZkR0ZpWVhKMUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKSGRYTjBhU0JUZVdGdGMybHlJRUZzWVcwaWZTd2lTMVZNSWpwN0lrTlBSRVVpT2lKTFZVd2lMQ0pPUVUxRklqb2lTM1ZoYkdFZ1RIVnRjSFZ5SWl3aVEyOTFiblJ5ZVNJNklrMWhiR0Y1YzJsaElpd2lRWEJ2VG1GdFpTSTZJa3QxWVd4aElFeDFiWEIxY2lCSmJuUmxjbTVoZEdsdmJtRnNJRUZwY25CdmNuUWlmU3dpUzAxSElqcDdJa05QUkVVaU9pSkxUVWNpTENKT1FVMUZJam9pUzNWdWJXbHVaeUlzSWtOdmRXNTBjbmtpT2lKRGFHbHVZU0lzSWtGd2IwNWhiV1VpT2lKTGRXNXRhVzVuSUVOb1lXNW5jM1ZwSUVsdWRHVnlibUYwYVc5dVlXd2dRV2x5Y0c5eWRDSjlMQ0pMVDBVaU9uc2lRMDlFUlNJNklrdFBSU0lzSWs1QlRVVWlPaUpMZFhCaGJtY2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrVnNJRlJoY21raWZTd2lURUpLSWpwN0lrTlBSRVVpT2lKTVFrb2lMQ0pPUVUxRklqb2lUR0ZpZFdGdUlFSmhhbThpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJa3R2Ylc5a2J5QkpjMnhoYm1RZ0xTQkxiMjF2Wkc4Z1FXbHljRzl5ZENKOUxDSlVTMGNpT25zaVEwOUVSU0k2SWxSTFJ5SXNJazVCVFVVaU9pSk1ZVzF3ZFc1bklpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVVlXNXFkVzVuSUV0aGNtRnVaeUF0SUZKaFpHVnVJRWx1ZEdWdUlFbEpJbjBzSWt4TFFTSTZleUpEVDBSRklqb2lURXRCSWl3aVRrRk5SU0k2SWt4aGNtRnVkSFZyWVNJc0lrTnZkVzUwY25raU9pSkpibVJ2Ym1WemFXRWlMQ0pCY0c5T1lXMWxJam9pUjJWM1lYbGhiblJoYm1FaWZTd2lURTlRSWpwN0lrTlBSRVVpT2lKTVQxQWlMQ0pPUVUxRklqb2lURzl0WW05cklpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKTWIyMWliMnNpZlN3aVRFeEtJanA3SWtOUFJFVWlPaUpNVEVvaUxDSk9RVTFGSWpvaVRIVmlkV3NnVEdsdVoyZGhkU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lVMmxzWVcxd1lYSnBJbjBzSWt4VlZ5STZleUpEVDBSRklqb2lURlZYSWl3aVRrRk5SU0k2SWt4MWQzVnJJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlRlWFZyZFhKaGJpQkJiV2x1ZFdSa2FXNGdRVzFwY2lKOUxDSk5URWNpT25zaVEwOUVSU0k2SWsxTVJ5SXNJazVCVFVVaU9pSk5ZV3hoYm1jaUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWtGaVpIVnNJRkpoYUcxaGJpQlRZV3hsYUNKOUxDSk1UbFVpT25zaVEwOUVSU0k2SWt4T1ZTSXNJazVCVFVVaU9pSk5ZV3hwYm1GMUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKQ1lXNWtZWEpoSUhKdlltVnlkQ0JoZEhSNUlHSmxjM05wYm1jaWZTd2lUVXBWSWpwN0lrTlBSRVVpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVVlXMXdZU0JRWVdSaGJtY2lmU3dpVFVSRElqcDdJa05QUkVVaU9pSk5SRU1pTENKT1FVMUZJam9pVFdGdVlXUnZJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlRZVzBnVW1GMGRXeGhibWRwSW4wc0lrMUxWeUk2ZXlKRFQwUkZJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVVtVnVaR0Z1YVNKOUxDSk5UMFlpT25zaVEwOUVSU0k2SWsxUFJpSXNJazVCVFVVaU9pSk5ZWFZ0WlhKbElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKR2NtRnVjeUJUWldSaEluMHNJa3RPVHlJNmV5SkRUMFJGSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKTGRXRnNZVzVoYlhVZ0luMHNJazFMVVNJNmV5SkRUMFJGSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrMXZjR0ZvSW4wc0lrMVNWeUk2ZXlKRFQwUkZJam9pVFZKWElpd2lUa0ZOUlNJNklrMXZjbTkzWVd4cElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVmJXSmxiR1VnVFc5eWIzZGhiR2tpZlN3aVFsVlZJanA3SWtOUFJFVWlPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrMTFZWEpoSUdKMWJtZHZJR0ZwY25CdmNuUWlmU3dpVGtKWUlqcDdJa05QUkVVaU9pSk9RbGdpTENKT1FVMUZJam9pVG1GaWFYSmxJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSk9ZV0pwY21VZ1FXbHljRzl5ZENKOUxDSk9TMGNpT25zaVEwOUVSU0k2SWs1TFJ5SXNJazVCVFVVaU9pSk9ZVzVxYVc1bklpd2lRMjkxYm5SeWVTSTZJa05vYVc1aElpd2lRWEJ2VG1GdFpTSTZJa3gxYTI5MUlFNWhibXBwYm1jZ1NXNTBaWEp1WVhScGIyNWhiQ0o5TENKT1ZGZ2lPbnNpUTA5RVJTSTZJazVVV0NJc0lrNUJUVVVpT2lKT1lYUjFibUVpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJbEpoYm1GcEluMHNJbEJFUnlJNmV5SkRUMFJGSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVRXbHVZVzVuYTJGaVlYVWlmU3dpVUV4TklqcDdJa05QUkVVaU9pSlFURTBpTENKT1FVMUZJam9pVUdGc1pXMWlZVzVuSWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpUZFd4MFlXNGdUV0ZvYlhWa0lFSmhaR0Z5ZFdSa2FXNGdTVWtpZlN3aVVFeFhJanA3SWtOUFJFVWlPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lUWFYwYVdGeVlTSjlMQ0pRUjBzaU9uc2lRMDlFUlNJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVFtRnVaMnRoSUMwZ1JHVndZWFJwSUVGdGFYSWlmU3dpVUV0T0lqcDdJa05QUkVVaU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVNYTnJZVzVrWVhJaWZTd2lVRXRWSWpwN0lrTlBSRVVpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlRkV3gwWVc0Z1UzbGhjbWxtSUV0aGMybHRJRWxKSW4wc0lsQkZUaUk2ZXlKRFQwUkZJam9pVUVWT0lpd2lUa0ZOUlNJNklsQmxibUZ1WnlJc0lrTnZkVzUwY25raU9pSk5ZV3hoZVhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpRWlc1aGJtY2dTVzUwWlhKdVlYUnBiMjVoYkNCQmFYSndiM0owSW4wc0lsQk9TeUk2ZXlKRFQwUkZJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVUzVndZV1JwYnlKOUxDSlFWa2NpT25zaVEwOUVSU0k2SWxCV1J5SXNJazVCVFVVaU9pSlFkV1J2Ym1jaUxDSkRiM1Z1ZEhKNUlqb2lRMmhwYm1FaUxDSkJjRzlPWVcxbElqb2lVSFZrYjI1bklGTm9ZVzVuYUdGcElFbHVkR1Z5Ym1GMGFXOXVZV3dnUVdseWNHOXlkQ0o5TENKUVUxVWlPbnNpUTA5RVJTSTZJbEJUVlNJc0lrNUJUVVVpT2lKUWRYUjFjM05wWW1GMUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKUVlXNW5jM1Z0WVNKOUxDSlNTazBpT25zaVEwOUVSU0k2SWxKS1RTSXNJazVCVFVVaU9pSlNZV3BoSUVGdGNHRjBJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSk5ZWEpwYm1SaElFRnBjbkJ2Y25RaWZTd2lRVUZRSWpwN0lrTlBSRVVpT2lKQlFWQWlMQ0pPUVUxRklqb2lVMkZ0WVhKcGJtUmhJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSkJVRlFnVUhKaGJtOTBieUJCYVhKd2IzSjBJbjBzSWxOTlVTSTZleUpEVDBSRklqb2lVMDFSSWl3aVRrRk5SU0k2SWxOaGJYQnBkQ0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lTQ0JCYzJGdUlGTmhiWEJwZENCQmFYSndiM0owSW4wc0lsaFRVQ0k2ZXlKRFQwUkZJam9pV0ZOUUlpd2lUa0ZOUlNJNklsTmxiR1YwWVhJaUxDSkRiM1Z1ZEhKNUlqb2lVMmx1WjJGd2IzSmxJaXdpUVhCdlRtRnRaU0k2SWxObGJHVjBZWElpZlN3aVUxSkhJanA3SWtOUFJFVWlPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWtGb2JXRmtJRmxoYm1raWZTd2lVMXBZSWpwN0lrTlBSRVVpT2lKVFdsZ2lMQ0pPUVUxRklqb2lVMmhsYm5wb1pXNGlMQ0pEYjNWdWRISjVJam9pUTJocGJtRWlMQ0pCY0c5T1lXMWxJam9pVTJobGJucG9aVzRnUW1GdllXNGdTVzUwWlhKdVlYUnBiMjVoYkNCQmFYSndiM0owSW4wc0lrUlVRaUk2ZXlKRFQwUkZJam9pUkZSQ0lpd2lUa0ZOUlNJNklsTnBiR0Z1WjJsMElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVWIySmhJRXhoYTJVZ0xTQlRhV3hoYm1kcGRDQkJhWEp3YjNKMEluMHNJbE5SUnlJNmV5SkRUMFJGSWpvaVUxRkhJaXdpVGtGTlJTSTZJbE5wYm5SaGJtY2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklsTjFjMmxzYnlKOUxDSlRUME1pT25zaVEwOUVSU0k2SWxOUFF5SXNJazVCVFVVaU9pSlRiMnh2SWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpCWkdrZ1UzVnRZWEp0YnlKOUxDSlRUMUVpT25zaVEwOUVSU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWtSdmJXbHVhWEYxWlNCRlpIZGhjbVFnVDNOdmF5SjlMQ0pUVlVJaU9uc2lRMDlFUlNJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lTblZoYm1SaEluMHNJbFJOUXlJNmV5SkRUMFJGSWpvaVZFMURJaXdpVGtGTlJTSTZJbFJoYldKdmJHRnJZU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lWMkZwYTJGaWRXSmhheUo5TENKVVNsRWlPbnNpUTA5RVJTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lRbVZzYVhSMWJtY2dMU0JJTGtFdVV5QklZVzVoYm1ScWIyVmtaR2x1SW4wc0lsUk9TaUk2ZXlKRFQwUkZJam9pVkU1S0lpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHbHVZVzVuSWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpDYVc1MFlXNGdMU0JTWVdwaElFaGhhbWtnUm1sellXSnBiR2xzYkdGb0luMHNJbFJLVXlJNmV5SkRUMFJGSWpvaVZFcFRJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVMlZzYjNJaUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWtKaGJtUmhjbUVnVkdGdWFuVnVaeUJJWVhKaGNHRnVJbjBzSWxSU1N5STZleUpEVDBSRklqb2lWRkpMSWl3aVRrRk5SU0k2SWxSaGNtRnJZVzRpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJa3AxZDJGMFlTSjlMQ0pVVkVVaU9uc2lRMDlFUlNJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlRkV3gwWVc0Z1FtRmlkV3hzWVdnaWZTd2lWRWxOSWpwN0lrTlBSRVVpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKTmIzTmxjeUJMYVd4aGJtZHBiaUo5TENKVlVFY2lPbnNpUTA5RVJTSTZJbFZRUnlJc0lrNUJUVVVpT2lKVmFuVnVaeUJRWVc1a1lXNW5JaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSk5ZV3RoYzNOaGNpQXRJRk4xYkhSaGJpQklZWE5oYm5Wa1pHbHVJbjBzSWxkSFVDSTZleUpEVDBSRklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpWYldKMUlFMWxhR0Z1WnlCTGRXNWtZU0o5TENKWFRWZ2lPbnNpUTA5RVJTSTZJbGROV0NJc0lrNUJUVVVpT2lKWFlXMWxibUVpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJbGRoYldWdVlTSjlMQ0pYVlVnaU9uc2lRMDlFUlNJNklsZFZTQ0lzSWs1QlRVVWlPaUpYZFdoaGJpSXNJa052ZFc1MGNua2lPaUpEYUdsdVlTSXNJa0Z3YjA1aGJXVWlPaUpYZFdoaGJpQkpiblJsY201aGRHbHZibUZzSUVGcGNuQnZjblFpZlN3aVdFMU9JanA3SWtOUFJFVWlPaUpZVFU0aUxDSk9RVTFGSWpvaVdHbGhibTFsYmlJc0lrTnZkVzUwY25raU9pSkRhR2x1WVNJc0lrRndiMDVoYldVaU9pSllhV0Z1YldWdUlFZGhiM0ZwSUVsdWRHVnlibUYwYVc5dVlXd2dRV2x5Y0c5eWRDSjlMQ0pLVDBjaU9uc2lRMDlFUlNJNklrcFBSeUlzSWs1QlRVVWlPaUpaYjJkNVlXdGhjblJoSWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpCWkdrZ1UzVmphWEIwYnlKOUxDSkRSMDhpT25zaVEwOUVSU0k2SWtOSFR5SXNJazVCVFVVaU9pSmFhR1Z1WjNwb2IzVWlMQ0pEYjNWdWRISjVJam9pUTJocGJtRWlMQ0pCY0c5T1lXMWxJam9pV21obGJtZDZhRzkxSUZocGJucG9aVzVuSUVsdWRHVnlibUYwYVc5dVlXd2dRV2x5Y0c5eWRDSjlmUT09'
                },
                success: function (data) {
                    response(data);
                }
            });
        },
        minLength: 1,
        search: function () {
            $('#fromSrc_search').val('');
        },
        select: function (event, ui) {
            event.preventDefault();
            $('#fromSrc_search').val(ui.item.CODE);
            $('#fromSrc2_search').val(ui.item.CODE);
            $('#toSrc_search').val('');
            $('#toSrc2_search').val('');
        },
        open: function () {
            $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            $('#fromSrc_search').val('');
        },
        close: function (event, ui) {
            $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            var resultCity = $('#fromSrc_search').val();
            if (resultCity == "")
            {
                $('#fromSrc2_search').val('');
            }
        }
    }).click(function () {
        //Use the below line instead of triggering keydown
        if ($('#fromSrc2_search').val() == "") {
            $(this).data("autocomplete").search($(this).val());
        }









    }).blur(function () {
        var resultCity = $('#fromSrc2_search').val();
        if (resultCity == "")
        {
            $('#fromSrc2_search').val('');
            $('#fromSrc_search').val('');

        }
    });

    $("#toSrc2_search").autocomplete({

        source: function (request, response) {
            var to_ = "https://www.sriwijayaair.co.id/SJ/Home/getRouteTo";
            if ($("#fromSrc2_search").val() == "") {
                to_ = "https://www.sriwijayaair.co.id/SJ/Home/getRouteFrom";
            }
































































































            $.ajax({
                url: to_,
                dataType: "json",
                type: 'POST',
                data: {
                    "TOSRC": $("#toSrc2_search").val(),
                    "FROMSRC": $("#fromSrc_search").val(),
                    "ROUTE_FROM": 'ZXlKQlVrUWlPbnNpUTA5RVJTSTZJa0ZTUkNJc0lrNUJUVVVpT2lKQmJHOXlJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSk5ZV3hwSW4wc0lrRk5VU0k2ZXlKRFQwUkZJam9pUVUxUklpd2lUa0ZOUlNJNklrRnRZbTl1SWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpRWVhSMGFXMTFjbUVpZlN3aVFsQk9JanA3SWtOUFJFVWlPaUpDVUU0aUxDSk9RVTFGSWpvaVFtRnNhV3R3WVhCaGJpSXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVUzVnNkR0Z1SUVGcWFTQk5kV2hoYlcxaFpDQlRkV3hoYVcxaGJpSjlMQ0pDUkU4aU9uc2lRMDlFUlNJNklrSkVUeUlzSWs1QlRVVWlPaUpDWVc1a2RXNW5JaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSklkWE5sYVc0Z1UyRnpkSEpoYm1WbllYSmhJbjBzSWtKRVNpSTZleUpEVDBSRklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVGVXRnRjM1ZrYVc0Z1RtOXZjaUo5TENKQ1YxZ2lPbnNpUTA5RVJTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKQ2JHbHRZbWx1WjNOaGNta2lmU3dpUWxSSUlqcDdJa05QUkVVaU9pSkNWRWdpTENKT1FVMUZJam9pUW1GMFlXMGlMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklraGhibWNnVG1Ga2FXMGlmU3dpUWt0VElqcDdJa05QUkVVaU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJa1poZEcxaGQyRjBhU0JUYjJWcllYSnVieUo5TENKQ1JVb2lPbnNpUTA5RVJTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lTMkZzYVcxaGNtRjFJbjBzSWtKSlN5STZleUpEVDBSRklqb2lRa2xMSWl3aVRrRk5SU0k2SWtKcFlXc2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrWnlZVzV6SUV0aGFYTnBaWEJ2SW4wc0lrSk5WU0k2ZXlKRFQwUkZJam9pUWsxVklpd2lUa0ZOUlNJNklrSnBiV0VpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJbE4xYkhSaGJpQk5kV2hoYlcxaFpDQlRZV3hoYUhWa2FXNGlmU3dpUTFOWUlqcDdJa05QUkVVaU9pSkRVMWdpTENKT1FVMUZJam9pUTJoaGJtZHphR0VpTENKRGIzVnVkSEo1SWpvaVEyaHBibUVpTENKQmNHOU9ZVzFsSWpvaVNIVmhibWRvZFdFaWZTd2lRMDFDSWpwN0lrTlBSRVVpT2lKRFRVSWlMQ0pPUVUxRklqb2lRMjlzYjIxaWJ5SXNJa052ZFc1MGNua2lPaUpUY21rZ1RHRnVhMkVpTENKQmNHOU9ZVzFsSWpvaVFtRnVaR0Z5WVc1aGFXdGxJRWx1ZEdWeWJtRjBhVzl1WVd3Z1EyOXNiMjFpYnlCQmFYSndiM0owSW4wc0lrUkJSQ0k2ZXlKRFQwUkZJam9pUkVGRUlpd2lUa0ZOUlNJNklrUmhJRTVoYm1jaUxDSkRiM1Z1ZEhKNUlqb2lWbWxsZEc1aGJTSXNJa0Z3YjA1aGJXVWlPaUprWVNCT1FVNUhJRWxPVkVWU1RrRlVTVTlPUVV3Z1FVbFNVRTlTVkNKOUxDSkVSVmdpT25zaVEwOUVSU0k2SWtSRldDSXNJazVCVFVVaU9pSkVaV3RoYVNJc0lrTnZkVzUwY25raU9pSkpibVJ2Ym1WemFXRWlMQ0pCY0c5T1lXMWxJam9pVG05d0lFZHZiR2xoZENCRVpXdGhhU0JCYVhKd2IzSjBJbjBzSWtSUVV5STZleUpEVDBSRklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpDWVd4cElDMGdUbWQxY21Gb0lGSmhhU0JKYm5SbGNtNWhkR2x2Ym1Gc0lFRnBjbkJ2Y25RaWZTd2lSRWxNSWpwN0lrTlBSRVVpT2lKRVNVd2lMQ0pPUVUxRklqb2lSR2xzYVNJc0lrTnZkVzUwY25raU9pSlVhVzF2Y2kxTVpYTjBaU0lzSWtGd2IwNWhiV1VpT2lKUWNtVnphV1JsYm5SbElFNXBZMjlzWVhVZ1RHOWlZWFJ2SUVsdWRHVnlibUYwYVc5dVlXd2dRV2x5Y0c5eWRDSjlMQ0pGVGtVaU9uc2lRMDlFUlNJNklrVk9SU0lzSWs1QlRVVWlPaUpGYm1SbElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKSUxpQklZWE5oYmlCQmNtOWxZbTlsYzIxaGJpSjlMQ0pHUzFFaU9uc2lRMDlFUlNJNklrWkxVU0lzSWs1QlRVVWlPaUpHWVd0bVlXc2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrWmhhMlpoYXlCVWIzSmxZU0JCYVhKd2IzSjBJbjBzSWtaUFF5STZleUpEVDBSRklqb2lSazlESWl3aVRrRk5SU0k2SWtaMWVtaHZkU0lzSWtOdmRXNTBjbmtpT2lKRGFHbHVZU0lzSWtGd2IwNWhiV1VpT2lKR2RYcG9iM1VnUTJoaGJtZHNaU0JKYm5SbGNtNWhkR2x2Ym1Gc0lFRnBjbkJ2Y25RaWZTd2lSMVJQSWpwN0lrTlBSRVVpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSktZV3hoYkhWa1pHbHVJbjBzSWtOQlRpSTZleUpEVDBSRklqb2lRMEZPSWl3aVRrRk5SU0k2SWtkMVlXNW5lbWh2ZFNJc0lrTnZkVzUwY25raU9pSkRhR2x1WVNJc0lrRndiMDVoYldVaU9pSkhkV0Z1WjNwb2IzVWdTVzUwSUVGcGNuQnZjblFpZlN3aVNFRkxJanA3SWtOUFJFVWlPaUpJUVVzaUxDSk9RVTFGSWpvaVNHRnBhMjkxSWl3aVEyOTFiblJ5ZVNJNklrTm9hVzVoSWl3aVFYQnZUbUZ0WlNJNklraGhhV3R2ZFNCTlpXbHNZVzRnU1c1MFpYSnVZWE5wYjI1aGJDSjlMQ0pJVEZBaU9uc2lRMDlFUlNJNklraE1VQ0lzSWs1QlRVVWlPaUpJWVd4cGJTQlFaWEprWVc1aElFc2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklraGhiR2x0SUZCbGNtUmhibUVnUzNWemRXMWhJbjBzSWtoSFNDSTZleUpEVDBSRklqb2lTRWRJSWl3aVRrRk5SU0k2SWtoaGJtZDZhRzkxSWl3aVEyOTFiblJ5ZVNJNklrTm9hVzVoSWl3aVFYQnZUbUZ0WlNJNklraGhibWQ2YUc5MUlGaHBZVzl6YUdGdUlFbHVkR1Z5Ym1GMGFXOXVZV3dnUVdseWNHOXlkQ0o5TENKSVJrVWlPbnNpUTA5RVJTSTZJa2hHUlNJc0lrNUJUVVVpT2lKSVpXWmxhU0lzSWtOdmRXNTBjbmtpT2lKRGFHbHVZU0lzSWtGd2IwNWhiV1VpT2lKSVpXWmxhU0JZYVc1eGFXRnZJRWx1ZEdWeWJtRjBhVzl1WVd3Z1FXbHljRzl5ZENKOUxDSkRSMHNpT25zaVEwOUVSU0k2SWtOSFN5SXNJazVCVFVVaU9pSktZV3RoY25SaElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVGIyVnJZWEp1YnlCSVlYUjBZU0JKYm5SbGNtNWhkR2x2Ym1Gc0lFRnBjbkJ2Y25RaWZTd2lSRXBDSWpwN0lrTlBSRVVpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWxOMWJIUmhiaUJVYUdGb1lTSjlMQ0pFU2tvaU9uc2lRMDlFUlNJNklrUktTaUlzSWs1QlRVVWlPaUpLWVhsaGNIVnlZU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lVMlZ1ZEdGdWFTSjlMQ0pUVjBFaU9uc2lRMDlFUlNJNklsTlhRU0lzSWs1QlRVVWlPaUpLYVdWNVlXNW5JaXdpUTI5MWJuUnllU0k2SWtOb2FXNWhJaXdpUVhCdlRtRnRaU0k2SWtwcFpYbGhibWNnUTJoaGIzTm9ZVzRnU1c1MFpYSnVZWFJwYjI1aGJDQkJhWEp3YjNKMEluMHNJa3BLVGlJNmV5SkRUMFJGSWpvaVNrcE9JaXdpVGtGTlJTSTZJa3BwYm1wcFlXNW5JaXdpUTI5MWJuUnllU0k2SWtOb2FXNWhJaXdpUVhCdlRtRnRaU0k2SWxGMVlXNTZhRzkxSUVsdWRDQkJhWEp3YjNKMEluMHNJa3RFU1NJNmV5SkRUMFJGSWpvaVMwUkpJaXdpVGtGTlJTSTZJa3RsYm1SaGNta2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklraGhiSFZ2YkdWdkluMHNJa3RVUnlJNmV5SkRUMFJGSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlNZV2hoWkdrZ1QyVnpiV0Z1SW4wc0lrdENWU0k2ZXlKRFQwUkZJam9pUzBKVklpd2lUa0ZOUlNJNklrdHZkR0ZpWVhKMUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKSGRYTjBhU0JUZVdGdGMybHlJRUZzWVcwaWZTd2lTMVZNSWpwN0lrTlBSRVVpT2lKTFZVd2lMQ0pPUVUxRklqb2lTM1ZoYkdFZ1RIVnRjSFZ5SWl3aVEyOTFiblJ5ZVNJNklrMWhiR0Y1YzJsaElpd2lRWEJ2VG1GdFpTSTZJa3QxWVd4aElFeDFiWEIxY2lCSmJuUmxjbTVoZEdsdmJtRnNJRUZwY25CdmNuUWlmU3dpUzAxSElqcDdJa05QUkVVaU9pSkxUVWNpTENKT1FVMUZJam9pUzNWdWJXbHVaeUlzSWtOdmRXNTBjbmtpT2lKRGFHbHVZU0lzSWtGd2IwNWhiV1VpT2lKTGRXNXRhVzVuSUVOb1lXNW5jM1ZwSUVsdWRHVnlibUYwYVc5dVlXd2dRV2x5Y0c5eWRDSjlMQ0pMVDBVaU9uc2lRMDlFUlNJNklrdFBSU0lzSWs1QlRVVWlPaUpMZFhCaGJtY2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrVnNJRlJoY21raWZTd2lURUpLSWpwN0lrTlBSRVVpT2lKTVFrb2lMQ0pPUVUxRklqb2lUR0ZpZFdGdUlFSmhhbThpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJa3R2Ylc5a2J5QkpjMnhoYm1RZ0xTQkxiMjF2Wkc4Z1FXbHljRzl5ZENKOUxDSlVTMGNpT25zaVEwOUVSU0k2SWxSTFJ5SXNJazVCVFVVaU9pSk1ZVzF3ZFc1bklpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVVlXNXFkVzVuSUV0aGNtRnVaeUF0SUZKaFpHVnVJRWx1ZEdWdUlFbEpJbjBzSWt4TFFTSTZleUpEVDBSRklqb2lURXRCSWl3aVRrRk5SU0k2SWt4aGNtRnVkSFZyWVNJc0lrTnZkVzUwY25raU9pSkpibVJ2Ym1WemFXRWlMQ0pCY0c5T1lXMWxJam9pUjJWM1lYbGhiblJoYm1FaWZTd2lURTlRSWpwN0lrTlBSRVVpT2lKTVQxQWlMQ0pPUVUxRklqb2lURzl0WW05cklpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKTWIyMWliMnNpZlN3aVRFeEtJanA3SWtOUFJFVWlPaUpNVEVvaUxDSk9RVTFGSWpvaVRIVmlkV3NnVEdsdVoyZGhkU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lVMmxzWVcxd1lYSnBJbjBzSWt4VlZ5STZleUpEVDBSRklqb2lURlZYSWl3aVRrRk5SU0k2SWt4MWQzVnJJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlRlWFZyZFhKaGJpQkJiV2x1ZFdSa2FXNGdRVzFwY2lKOUxDSk5URWNpT25zaVEwOUVSU0k2SWsxTVJ5SXNJazVCVFVVaU9pSk5ZV3hoYm1jaUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWtGaVpIVnNJRkpoYUcxaGJpQlRZV3hsYUNKOUxDSk1UbFVpT25zaVEwOUVSU0k2SWt4T1ZTSXNJazVCVFVVaU9pSk5ZV3hwYm1GMUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKQ1lXNWtZWEpoSUhKdlltVnlkQ0JoZEhSNUlHSmxjM05wYm1jaWZTd2lUVXBWSWpwN0lrTlBSRVVpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVVlXMXdZU0JRWVdSaGJtY2lmU3dpVFVSRElqcDdJa05QUkVVaU9pSk5SRU1pTENKT1FVMUZJam9pVFdGdVlXUnZJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlRZVzBnVW1GMGRXeGhibWRwSW4wc0lrMUxWeUk2ZXlKRFQwUkZJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVVtVnVaR0Z1YVNKOUxDSk5UMFlpT25zaVEwOUVSU0k2SWsxUFJpSXNJazVCVFVVaU9pSk5ZWFZ0WlhKbElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKR2NtRnVjeUJUWldSaEluMHNJa3RPVHlJNmV5SkRUMFJGSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKTGRXRnNZVzVoYlhVZ0luMHNJazFMVVNJNmV5SkRUMFJGSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrMXZjR0ZvSW4wc0lrMVNWeUk2ZXlKRFQwUkZJam9pVFZKWElpd2lUa0ZOUlNJNklrMXZjbTkzWVd4cElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVmJXSmxiR1VnVFc5eWIzZGhiR2tpZlN3aVFsVlZJanA3SWtOUFJFVWlPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklrMTFZWEpoSUdKMWJtZHZJR0ZwY25CdmNuUWlmU3dpVGtKWUlqcDdJa05QUkVVaU9pSk9RbGdpTENKT1FVMUZJam9pVG1GaWFYSmxJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSk9ZV0pwY21VZ1FXbHljRzl5ZENKOUxDSk9TMGNpT25zaVEwOUVSU0k2SWs1TFJ5SXNJazVCVFVVaU9pSk9ZVzVxYVc1bklpd2lRMjkxYm5SeWVTSTZJa05vYVc1aElpd2lRWEJ2VG1GdFpTSTZJa3gxYTI5MUlFNWhibXBwYm1jZ1NXNTBaWEp1WVhScGIyNWhiQ0o5TENKT1ZGZ2lPbnNpUTA5RVJTSTZJazVVV0NJc0lrNUJUVVVpT2lKT1lYUjFibUVpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJbEpoYm1GcEluMHNJbEJFUnlJNmV5SkRUMFJGSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVRXbHVZVzVuYTJGaVlYVWlmU3dpVUV4TklqcDdJa05QUkVVaU9pSlFURTBpTENKT1FVMUZJam9pVUdGc1pXMWlZVzVuSWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpUZFd4MFlXNGdUV0ZvYlhWa0lFSmhaR0Z5ZFdSa2FXNGdTVWtpZlN3aVVFeFhJanA3SWtOUFJFVWlPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lUWFYwYVdGeVlTSjlMQ0pRUjBzaU9uc2lRMDlFUlNJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVFtRnVaMnRoSUMwZ1JHVndZWFJwSUVGdGFYSWlmU3dpVUV0T0lqcDdJa05QUkVVaU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVNYTnJZVzVrWVhJaWZTd2lVRXRWSWpwN0lrTlBSRVVpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlRkV3gwWVc0Z1UzbGhjbWxtSUV0aGMybHRJRWxKSW4wc0lsQkZUaUk2ZXlKRFQwUkZJam9pVUVWT0lpd2lUa0ZOUlNJNklsQmxibUZ1WnlJc0lrTnZkVzUwY25raU9pSk5ZV3hoZVhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpRWlc1aGJtY2dTVzUwWlhKdVlYUnBiMjVoYkNCQmFYSndiM0owSW4wc0lsQk9TeUk2ZXlKRFQwUkZJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJa052ZFc1MGNua2lPaUpKYm1SdmJtVnphV0VpTENKQmNHOU9ZVzFsSWpvaVUzVndZV1JwYnlKOUxDSlFWa2NpT25zaVEwOUVSU0k2SWxCV1J5SXNJazVCVFVVaU9pSlFkV1J2Ym1jaUxDSkRiM1Z1ZEhKNUlqb2lRMmhwYm1FaUxDSkJjRzlPWVcxbElqb2lVSFZrYjI1bklGTm9ZVzVuYUdGcElFbHVkR1Z5Ym1GMGFXOXVZV3dnUVdseWNHOXlkQ0o5TENKUVUxVWlPbnNpUTA5RVJTSTZJbEJUVlNJc0lrNUJUVVVpT2lKUWRYUjFjM05wWW1GMUlpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKUVlXNW5jM1Z0WVNKOUxDSlNTazBpT25zaVEwOUVSU0k2SWxKS1RTSXNJazVCVFVVaU9pSlNZV3BoSUVGdGNHRjBJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSk5ZWEpwYm1SaElFRnBjbkJ2Y25RaWZTd2lRVUZRSWpwN0lrTlBSRVVpT2lKQlFWQWlMQ0pPUVUxRklqb2lVMkZ0WVhKcGJtUmhJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSkJVRlFnVUhKaGJtOTBieUJCYVhKd2IzSjBJbjBzSWxOTlVTSTZleUpEVDBSRklqb2lVMDFSSWl3aVRrRk5SU0k2SWxOaGJYQnBkQ0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lTQ0JCYzJGdUlGTmhiWEJwZENCQmFYSndiM0owSW4wc0lsaFRVQ0k2ZXlKRFQwUkZJam9pV0ZOUUlpd2lUa0ZOUlNJNklsTmxiR1YwWVhJaUxDSkRiM1Z1ZEhKNUlqb2lVMmx1WjJGd2IzSmxJaXdpUVhCdlRtRnRaU0k2SWxObGJHVjBZWElpZlN3aVUxSkhJanA3SWtOUFJFVWlPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWtGb2JXRmtJRmxoYm1raWZTd2lVMXBZSWpwN0lrTlBSRVVpT2lKVFdsZ2lMQ0pPUVUxRklqb2lVMmhsYm5wb1pXNGlMQ0pEYjNWdWRISjVJam9pUTJocGJtRWlMQ0pCY0c5T1lXMWxJam9pVTJobGJucG9aVzRnUW1GdllXNGdTVzUwWlhKdVlYUnBiMjVoYkNCQmFYSndiM0owSW4wc0lrUlVRaUk2ZXlKRFQwUkZJam9pUkZSQ0lpd2lUa0ZOUlNJNklsTnBiR0Z1WjJsMElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKVWIySmhJRXhoYTJVZ0xTQlRhV3hoYm1kcGRDQkJhWEp3YjNKMEluMHNJbE5SUnlJNmV5SkRUMFJGSWpvaVUxRkhJaXdpVGtGTlJTSTZJbE5wYm5SaGJtY2lMQ0pEYjNWdWRISjVJam9pU1c1a2IyNWxjMmxoSWl3aVFYQnZUbUZ0WlNJNklsTjFjMmxzYnlKOUxDSlRUME1pT25zaVEwOUVSU0k2SWxOUFF5SXNJazVCVFVVaU9pSlRiMnh2SWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpCWkdrZ1UzVnRZWEp0YnlKOUxDSlRUMUVpT25zaVEwOUVSU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWtSdmJXbHVhWEYxWlNCRlpIZGhjbVFnVDNOdmF5SjlMQ0pUVlVJaU9uc2lRMDlFUlNJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lTblZoYm1SaEluMHNJbFJOUXlJNmV5SkRUMFJGSWpvaVZFMURJaXdpVGtGTlJTSTZJbFJoYldKdmJHRnJZU0lzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lWMkZwYTJGaWRXSmhheUo5TENKVVNsRWlPbnNpUTA5RVJTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWtOdmRXNTBjbmtpT2lKSmJtUnZibVZ6YVdFaUxDSkJjRzlPWVcxbElqb2lRbVZzYVhSMWJtY2dMU0JJTGtFdVV5QklZVzVoYm1ScWIyVmtaR2x1SW4wc0lsUk9TaUk2ZXlKRFQwUkZJam9pVkU1S0lpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHbHVZVzVuSWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpDYVc1MFlXNGdMU0JTWVdwaElFaGhhbWtnUm1sellXSnBiR2xzYkdGb0luMHNJbFJLVXlJNmV5SkRUMFJGSWpvaVZFcFRJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVMlZzYjNJaUxDSkRiM1Z1ZEhKNUlqb2lTVzVrYjI1bGMybGhJaXdpUVhCdlRtRnRaU0k2SWtKaGJtUmhjbUVnVkdGdWFuVnVaeUJJWVhKaGNHRnVJbjBzSWxSU1N5STZleUpEVDBSRklqb2lWRkpMSWl3aVRrRk5SU0k2SWxSaGNtRnJZVzRpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJa3AxZDJGMFlTSjlMQ0pVVkVVaU9uc2lRMDlFUlNJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSlRkV3gwWVc0Z1FtRmlkV3hzWVdnaWZTd2lWRWxOSWpwN0lrTlBSRVVpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lRMjkxYm5SeWVTSTZJa2x1Wkc5dVpYTnBZU0lzSWtGd2IwNWhiV1VpT2lKTmIzTmxjeUJMYVd4aGJtZHBiaUo5TENKVlVFY2lPbnNpUTA5RVJTSTZJbFZRUnlJc0lrNUJUVVVpT2lKVmFuVnVaeUJRWVc1a1lXNW5JaXdpUTI5MWJuUnllU0k2SWtsdVpHOXVaWE5wWVNJc0lrRndiMDVoYldVaU9pSk5ZV3RoYzNOaGNpQXRJRk4xYkhSaGJpQklZWE5oYm5Wa1pHbHVJbjBzSWxkSFVDSTZleUpEVDBSRklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpWYldKMUlFMWxhR0Z1WnlCTGRXNWtZU0o5TENKWFRWZ2lPbnNpUTA5RVJTSTZJbGROV0NJc0lrNUJUVVVpT2lKWFlXMWxibUVpTENKRGIzVnVkSEo1SWpvaVNXNWtiMjVsYzJsaElpd2lRWEJ2VG1GdFpTSTZJbGRoYldWdVlTSjlMQ0pYVlVnaU9uc2lRMDlFUlNJNklsZFZTQ0lzSWs1QlRVVWlPaUpYZFdoaGJpSXNJa052ZFc1MGNua2lPaUpEYUdsdVlTSXNJa0Z3YjA1aGJXVWlPaUpYZFdoaGJpQkpiblJsY201aGRHbHZibUZzSUVGcGNuQnZjblFpZlN3aVdFMU9JanA3SWtOUFJFVWlPaUpZVFU0aUxDSk9RVTFGSWpvaVdHbGhibTFsYmlJc0lrTnZkVzUwY25raU9pSkRhR2x1WVNJc0lrRndiMDVoYldVaU9pSllhV0Z1YldWdUlFZGhiM0ZwSUVsdWRHVnlibUYwYVc5dVlXd2dRV2x5Y0c5eWRDSjlMQ0pLVDBjaU9uc2lRMDlFUlNJNklrcFBSeUlzSWs1QlRVVWlPaUpaYjJkNVlXdGhjblJoSWl3aVEyOTFiblJ5ZVNJNklrbHVaRzl1WlhOcFlTSXNJa0Z3YjA1aGJXVWlPaUpCWkdrZ1UzVmphWEIwYnlKOUxDSkRSMDhpT25zaVEwOUVSU0k2SWtOSFR5SXNJazVCVFVVaU9pSmFhR1Z1WjNwb2IzVWlMQ0pEYjNWdWRISjVJam9pUTJocGJtRWlMQ0pCY0c5T1lXMWxJam9pV21obGJtZDZhRzkxSUZocGJucG9aVzVuSUVsdWRHVnlibUYwYVc5dVlXd2dRV2x5Y0c5eWRDSjlmUT09',
                    "ROUTE_TO": 'ZXlKRVFVUWlPbHQ3SWtOSlZGa2lPaUpEUjBzaUxDSk9RVTFGSWpvaVNtRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZWMHNJa2hHUlNJNlczc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlYwc0lrNUxSeUk2VzNzaVEwbFVXU0k2SWtSUVV5SXNJazVCVFVVaU9pSkVaVzV3WVhOaGNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmVjBzSWxkVlNDSTZXM3NpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZWMHNJbE5YUVNJNlczc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlYwc0lsQldSeUk2VzNzaVEwbFVXU0k2SWtSUVV5SXNJazVCVFVVaU9pSkVaVzV3WVhOaGNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmVjBzSWt0TlJ5STZXM3NpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZWMHNJbGhOVGlJNlczc2lRMGxVV1NJNklrMUVReUlzSWs1QlRVVWlPaUpOWVc1aFpHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjFkTENKRFIwOGlPbHQ3SWtOSlZGa2lPaUpVVGtvaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4xZExDSk5VbGNpT2x0N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZWMHNJbGhUVUNJNlczc2lRMGxVV1NJNklsVlFSeUlzSWs1QlRVVWlPaUpWYW5WdVp5QlFZVzVrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlYU3dpUTFOWUlqcGJleUpEU1ZSWklqb2lRMGRMSWl3aVRrRk5SU0k2SWtwaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5WFN3aVNFRkxJanBiZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOVhTd2lTa3BPSWpwYmV5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWsxRVF5SXNJazVCVFVVaU9pSk5ZVzVoWkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMWRMQ0pHVDBNaU9sdDdJa05KVkZraU9pSkVVRk1pTENKT1FVMUZJam9pUkdWdWNHRnpZWElpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmVjBzSWxOYVdDSTZXM3NpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlVUVU1pTENKT1FVMUZJam9pVkdGdFltOXNZV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOVhTd2lTRXhRSWpwYmV5SkRTVlJaSWpvaVEwZExJaXdpVGtGTlJTSTZJa3BoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkZSQ0lpd2lUa0ZOUlNJNklsTnBiR0Z1WjJsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJMUnlJc0lrNUJUVVVpT2lKTVlXMXdkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOVhTd2lTRWRJSWpwYmV5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWsxRVF5SXNJazVCVFVVaU9pSk5ZVzVoWkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lWRTVLSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5WFN3aVEwMUNJanBiZXlKRFNWUlpJam9pUzA1UElpd2lUa0ZOUlNJNklrMWxaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQkVSeUlzSWs1QlRVVWlPaUpRWVdSaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVUV0Vklpd2lUa0ZOUlNJNklsQmxhMkZ1WW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmVjBzSWtOQlRpSTZXM3NpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lUVVJESWl3aVRrRk5SU0k2SWsxaGJtRmtieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKVVRVTWlMQ0pPUVUxRklqb2lWR0Z0WW05c1lXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5WFN3aVMxVk1JanBiZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRVJISWl3aVRrRk5SU0k2SWxCaFpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKUVIwc2lMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJDQlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRXhOSWl3aVRrRk5SU0k2SWxCaGJHVnRZbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlVTbEVpTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRWVc1a1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjFkTENKT1ZGZ2lPbHQ3SWtOSlZGa2lPaUpDVkVnaUxDSk9RVTFGSWpvaVFtRjBZVzBpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVEwZExJaXdpVGtGTlJTSTZJa3BoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pU2s5SElpd2lUa0ZOUlNJNklsbHZaM2xoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFGSElpd2lUa0ZOUlNJNklsTnBiblJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUpISWl3aVRrRk5SU0k2SWxObGJXRnlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlYwc0lrRkJVQ0k2VzNzaVEwbFVXU0k2SWtKRVNpSXNJazVCVFVVaU9pSkNZVzVxWVhKdFlYTnBiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JFOGlMQ0pPUVUxRklqb2lRbUZ1WkhWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUlVvaUxDSk9RVTFGSWpvaVFtVnlZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVEwZExJaXdpVGtGTlJTSTZJa3BoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwS0lpd2lUa0ZOUlNJNklrcGhlV0Z3ZFhKaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSktUMGNpTENKT1FVMUZJam9pV1c5bmVXRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUazhpTENKT1FVMUZJam9pVFdWa1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QVVNJc0lrNUJUVVVpT2lKVGIzSnZibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxSkhJaXdpVGtGTlJTSTZJbE5sYldGeVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOVlFpSXNJazVCVFVVaU9pSlRkWEpoWW1GNVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU1UwaUxDSk9RVTFGSWpvaVZHbHRhV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlNTeUlzSWs1QlRVVWlPaUpVWVhKaGEyRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSVVJTSXNJazVCVFVVaU9pSlVaWEp1WVhSbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFZRUnlJc0lrNUJUVVVpT2lKVmFuVnVaeUJRWVc1a1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5WFN3aVRFNVZJanBiZXlKRFNWUlpJam9pUVUxUklpd2lUa0ZOUlNJNklrRnRZbTl1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRThpTENKT1FVMUZJam9pUW1GdVpIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JVb2lMQ0pPUVUxRklqb2lRbVZ5WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa2xMSWl3aVRrRk5SU0k2SWtKcFlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxCT0lpd2lUa0ZOUlNJNklrSmhiR2xyY0dGd1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrcFBSeUlzSWs1QlRVVWlPaUpaYjJkNVlXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdEVTU0lzSWs1QlRVVWlPaUpMWlc1a1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0T1R5SXNJazVCVFVVaU9pSk5aV1JoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1UMUFpTENKT1FVMUZJam9pVEc5dFltOXJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4VlZ5SXNJazVCVFVVaU9pSk1kWGQxYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5SRU1pTENKT1FVMUZJam9pVFdGdVlXUnZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFZExJaXdpVGtGTlJTSTZJbEJoYm1kcllXd2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhYSWl3aVRrRk5SU0k2SWxCaGJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDFFaUxDSk9RVTFGSWpvaVUyOXliMjVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlNSeUlzSWs1QlRVVWlPaUpUWlcxaGNtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFZVSWlMQ0pPUVUxRklqb2lVM1Z5WVdKaGVXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVsTklpd2lUa0ZOUlNJNklsUnBiV2xyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbEVpTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRWVc1a1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTVLSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSU1N5SXNJazVCVFVVaU9pSlVZWEpoYTJGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJVUlNJc0lrNUJUVVVpT2lKVVpYSnVZWFJsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsVlFSeUlzSWs1QlRVVWlPaUpWYW5WdVp5QlFZVzVrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlYU3dpVEU5UUlqcGJleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFVHlJc0lrNUJUVVVpT2lKQ1lXNWtkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkZTaUlzSWs1QlRVVWlPaUpDWlhKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDU1VzaUxDSk9RVTFGSWpvaVFtbGhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1RWVWlMQ0pPUVUxRklqb2lRbWx0WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNVRTRpTENKT1FVMUZJam9pUW1Gc2FXdHdZWEJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWRWdpTENKT1FVMUZJam9pUW1GMFlXMGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFSktJaXdpVGtGTlJTSTZJa3hoWW5WaGJpQkNZV3B2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE1TaUlzSWs1QlRVVWlPaUpNZFdKMWF5Qk1hVzVuWjJGMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hWVnlJc0lrNUJUVVVpT2lKTWRYZDFheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxRWlMQ0pPUVUxRklqb2lUV1Z5WVhWclpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFjaUxDSk9RVTFGSWpvaVRXRnViMnQzWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFQUmlJc0lrNUJUVVVpT2lKTllYVnRaWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkVSeUlzSWs1QlRVVWlPaUpRWVdSaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVkTElpd2lUa0ZOUlNJNklsQmhibWRyWVd3Z1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkxUaUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNZVzRnUW5WdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRTVMSWl3aVRrRk5SU0k2SWxCdmJuUnBZVzVoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUVkVpTENKT1FVMUZJam9pVTJGdGNHbDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUpISWl3aVRrRk5SU0k2SWxObGJXRnlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVFVNaUxDSk9RVTFGSWpvaVZHRnRZbTlzWVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVZFVWlMQ0pPUVUxRklqb2lWR1Z5Ym1GMFpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpWVUVjaUxDSk9RVTFGSWpvaVZXcDFibWNnVUdGdVpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFIxQWlMQ0pPUVUxRklqb2lWMkZwYm1kaGNIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKUVUxVWlPbHQ3SWtOSlZGa2lPaUpDUkU4aUxDSk9RVTFGSWpvaVFtRnVaSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTVXNpTENKT1FVMUZJam9pUW1saGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUzFNaUxDSk9RVTFGSWpvaVFtVnVaMnQxYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1YxZ2lMQ0pPUVUxRklqb2lRbUZ1ZVhWM1lXNW5hU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFIwc2lMQ0pPUVUxRklqb2lTbUZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU2tJaUxDSk9RVTFGSWpvaVNtRnRZbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFcEtJaXdpVGtGTlJTSTZJa3BoZVdGd2RYSmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSUVV5SXNJazVCVFVVaU9pSkVaVzV3WVhOaGNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVkVJaUxDSk9RVTFGSWpvaVUybHNZVzVuYVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDVQSWl3aVRrRk5SU0k2SWsxbFpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0VVJ5SXNJazVCVFVVaU9pSkxaWFJoY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNUWtvaUxDSk9RVTFGSWpvaVRHRmlkV0Z1SUVKaGFtOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVEVjaUxDSk9RVTFGSWpvaVRXRnNZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMVBSaUlzSWs1QlRVVWlPaUpOWVhWdFpYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWs1Q1dDSXNJazVCVFVVaU9pSk9ZV0pwY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVJISWl3aVRrRk5SU0k2SWxCaFpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVIwc2lMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJDQlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhOSWl3aVRrRk5SU0k2SWxCaGJHVnRZbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURmNpTENKT1FVMUZJam9pVUdGc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVGtzaUxDSk9RVTFGSWpvaVVHOXVkR2xoYm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUZISWl3aVRrRk5SU0k2SWxOcGJuUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxSkhJaXdpVGtGTlJTSTZJbE5sYldGeVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOVlFpSXNJazVCVFVVaU9pSlRkWEpoWW1GNVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU1UwaUxDSk9RVTFGSWpvaVZHbHRhV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVU0lzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJoYm1SaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVUzBjaUxDSk9RVTFGSWpvaVRHRnRjSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZSRklpd2lUa0ZOUlNJNklsUmxjbTVoZEdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWVkJISWl3aVRrRk5SU0k2SWxWcWRXNW5JRkJoYm1SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKVVNsTWlPbHQ3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrUktJaXdpVGtGTlJTSTZJa0poYm1waGNtMWhjMmx1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVUeUlzSWs1QlRVVWlPaUpDWVc1a2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRlNpSXNJazVCVFVVaU9pSkNaWEpoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTVXNpTENKT1FVMUZJam9pUW1saGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVUU0aUxDSk9RVTFGSWpvaVFtRnNhV3R3WVhCaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVkVnaUxDSk9RVTFGSWpvaVFtRjBZVzBpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsVlZJaXdpVGtGTlJTSTZJazExWVhKaElFSjFibWR2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlhXQ0lzSWs1QlRVVWlPaUpDWVc1NWRYZGhibWRwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrTkhTeUlzSWs1QlRVVWlPaUpLWVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1FpSXNJazVCVFVVaU9pSktZVzFpYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTa29pTENKT1FVMUZJam9pU21GNVlYQjFjbUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSVVFpSXNJazVCVFVVaU9pSlRhV3hoYm1kcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RFU1NJc0lrNUJUVVVpT2lKTFpXNWtZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdE9UeUlzSWs1QlRVVWlPaUpOWldSaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNUWtvaUxDSk9RVTFGSWpvaVRHRmlkV0Z1SUVKaGFtOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRGVlhJaXdpVGtGTlJTSTZJa3gxZDNWcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFFUXlJc0lrNUJUVVVpT2lKTllXNWhaRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVEVjaUxDSk9RVTFGSWpvaVRXRnNZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNUNXQ0lzSWs1QlRVVWlPaUpPWVdKcGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSMHNpTENKT1FVMUZJam9pVUdGdVoydGhiQ0JRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4Tklpd2lUa0ZOUlNJNklsQmhiR1Z0WW1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRrc2lMQ0pPUVUxRklqb2lVRzl1ZEdsaGJtRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOTlVTSXNJazVCVFVVaU9pSlRZVzF3YVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlESWl3aVRrRk5SU0k2SWxOdmJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5Uklpd2lUa0ZOUlNJNklsTnZjbTl1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVa2NpTENKT1FVMUZJam9pVTJWdFlYSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxVkNJaXdpVGtGTlJTSTZJbE4xY21GaVlYbGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSSlRTSXNJazVCVFVVaU9pSlVhVzFwYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBSSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdGdVpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSTFJ5SXNJazVCVFVVaU9pSk1ZVzF3ZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYVFZnaUxDSk9RVTFGSWpvaVYyRnRaVzVoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOVhTd2lSVTVGSWpwYmV5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVUU0aUxDSk9RVTFGSWpvaVFtRnNhV3R3WVhCaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVkVnaUxDSk9RVTFGSWpvaVFtRjBZVzBpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsVlZJaXdpVGtGTlJTSTZJazExWVhKaElFSjFibWR2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlhXQ0lzSWs1QlRVVWlPaUpDWVc1NWRYZGhibWRwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrTkhTeUlzSWs1QlRVVWlPaUpLWVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1FpSXNJazVCVFVVaU9pSktZVzFpYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTa29pTENKT1FVMUZJam9pU21GNVlYQjFjbUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSVVFpSXNJazVCVFVVaU9pSlRhV3hoYm1kcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpHUzFFaUxDSk9RVTFGSWpvaVJtRnJabUZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrZFVUeUlzSWs1QlRVVWlPaUpIYjNKdmJuUmhiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVNrOUhJaXdpVGtGTlJTSTZJbGx2WjNsaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwUkpJaXdpVGtGTlJTSTZJa3RsYm1SaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzA1UElpd2lUa0ZOUlNJNklrMWxaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdFBSU0lzSWs1QlRVVWlPaUpMZFhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEZWWElpd2lUa0ZOUlNJNklreDFkM1ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUVReUlzSWs1QlRVVWlPaUpOWVc1aFpHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVwVklpd2lUa0ZOUlNJNklrMWhiWFZxZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TMUVpTENKT1FVMUZJam9pVFdWeVlYVnJaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxY2lMQ0pPUVUxRklqb2lUV0Z1YjJ0M1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTVJ5SXNJazVCVFVVaU9pSk5ZV3hoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVTlHSWl3aVRrRk5SU0k2SWsxaGRXMWxjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUjBzaUxDSk9RVTFGSWpvaVVHRnVaMnRoYkNCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdE9JaXdpVGtGTlJTSTZJbEJoYm1kcllXeGhiaUJDZFc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhOSWl3aVRrRk5SU0k2SWxCaGJHVnRZbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFUa3NpTENKT1FVMUZJam9pVUc5dWRHbGhibUZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsSktUU0lzSWs1QlRVVWlPaUpTWVdwaElFRnRjR0YwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTk5VU0lzSWs1QlRVVWlPaUpUWVcxd2FYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5RElpd2lUa0ZOUlNJNklsTnZiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOVJJaXdpVGtGTlJTSTZJbE52Y205dVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMVZDSWl3aVRrRk5SU0k2SWxOMWNtRmlZWGxoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkpUU0lzSWs1QlRVVWlPaUpVYVcxcGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVwUklpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHRnVaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkxSeUlzSWs1QlRVVWlPaUpNWVcxd2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSVVJTSXNJazVCVFVVaU9pSlVaWEp1WVhSbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFZRUnlJc0lrNUJUVVVpT2lKVmFuVnVaeUJRWVc1a1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxkSFVDSXNJazVCVFVVaU9pSlhZV2x1WjJGd2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmVjBzSWt4TVNpSTZXM3NpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNUVlVpTENKT1FVMUZJam9pUW1sdFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVUU0aUxDSk9RVTFGSWpvaVFtRnNhV3R3WVhCaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVkVnaUxDSk9RVTFGSWpvaVFtRjBZVzBpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsZFlJaXdpVGtGTlJTSTZJa0poYm5sMWQyRnVaMmtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVEwZExJaXdpVGtGTlJTSTZJa3BoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwS0lpd2lUa0ZOUlNJNklrcGhlV0Z3ZFhKaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVWRUlpTENKT1FVMUZJam9pVTJsc1lXNW5hWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpLVDBjaUxDSk9RVTFGSWpvaVdXOW5lV0ZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUWxVaUxDSk9RVTFGSWpvaVMyOTBZV0poY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RVUnlJc0lrNUJUVVVpT2lKTFpYUmhjR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1Ra29pTENKT1FVMUZJam9pVEdGaWRXRnVJRUpoYW04aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURTlRSWl3aVRrRk5SU0k2SWt4dmJXSnZheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVZWY2lMQ0pPUVUxRklqb2lUSFYzZFdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRSSWl3aVRrRk5SU0k2SWsxbGNtRjFhMlVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFhJaXdpVGtGTlJTSTZJazFoYm05cmQyRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlRFY2lMQ0pPUVUxRklqb2lUV0ZzWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFQUmlJc0lrNUJUVVVpT2lKTllYVnRaWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNUNXQ0lzSWs1QlRVVWlPaUpPWVdKcGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSMHNpTENKT1FVMUZJam9pVUdGdVoydGhiQ0JRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0T0lpd2lUa0ZOUlNJNklsQmhibWRyWVd4aGJpQkNkVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFeE5JaXdpVGtGTlJTSTZJbEJoYkdWdFltRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRGY2lMQ0pPUVUxRklqb2lVR0ZzZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFUa3NpTENKT1FVMUZJam9pVUc5dWRHbGhibUZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQlRWU0lzSWs1QlRVVWlPaUpRZFhSMWMzTnBZbUYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsSktUU0lzSWs1QlRVVWlPaUpTWVdwaElFRnRjR0YwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBReUlzSWs1QlRVVWlPaUpUYjJ4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QVVNJc0lrNUJUVVVpT2lKVGIzSnZibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxRkhJaXdpVGtGTlJTSTZJbE5wYm5SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFKSElpd2lUa0ZOUlNJNklsTmxiV0Z5WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5WUWlJc0lrNUJUVVVpT2lKVGRYSmhZbUY1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTVTBpTENKT1FVMUZJam9pVkdsdGFXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1VTSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQmhibVJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbE1pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJUWld4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVUzBjaUxDSk9RVTFGSWpvaVRHRnRjSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUVU1pTENKT1FVMUZJam9pVkdGdFltOXNZV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk9TaUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZWMHNJbEJGVGlJNlczc2lRMGxVV1NJNklrRk5VU0lzSWs1QlRVVWlPaUpCYldKdmJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpDU1VzaUxDSk9RVTFGSWpvaVFtbGhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKQ1MxTWlMQ0pPUVUxRklqb2lRbVZ1WjJ0MWJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pUWxSSUlpd2lUa0ZOUlNJNklrSmhkR0Z0SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrSlZWU0lzSWs1QlRVVWlPaUpOZFdGeVlTQkNkVzVuYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkNWMWdpTENKT1FVMUZJam9pUW1GdWVYVjNZVzVuYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkRSMHNpTENKT1FVMUZJam9pU21GcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVJWZ2lMQ0pPUVUxRklqb2lSR1ZyWVdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRWxNSWl3aVRrRk5SU0k2SWtScGJHa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pUkVwQ0lpd2lUa0ZOUlNJNklrcGhiV0pwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUktTaUlzSWs1QlRVVWlPaUpLWVhsaGNIVnlZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVVGTWlMQ0pPUVUxRklqb2lSR1Z1Y0dGellYSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pUkZSQ0lpd2lUa0ZOUlNJNklsTnBiR0Z1WjJsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa1pMVVNJc0lrNUJUVVVpT2lKR1lXdG1ZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVIxUlBJaXdpVGtGTlJTSTZJa2R2Y205dWRHRnNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKS1QwY2lMQ0pPUVUxRklqb2lXVzluZVdGcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKTFJFa2lMQ0pPUVUxRklqb2lTMlZ1WkdGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpMVGs4aUxDSk9RVTFGSWpvaVRXVmtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVMwOUZJaXdpVGtGTlJTSTZJa3QxY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpNUWtvaUxDSk9RVTFGSWpvaVRHRmlkV0Z1SUVKaGFtOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVEZWWElpd2lUa0ZOUlNJNklreDFkM1ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrMUVReUlzSWs1QlRVVWlPaUpOWVc1aFpHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVFVwVklpd2lUa0ZOUlNJNklrMWhiWFZxZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSk5TMWNpTENKT1FVMUZJam9pVFdGdWIydDNZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrMU1SeUlzSWs1QlRVVWlPaUpOWVd4aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVFU5R0lpd2lUa0ZOUlNJNklrMWhkVzFsY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lUa0pZSWl3aVRrRk5SU0k2SWs1aFltbHlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKUVJFY2lMQ0pPUVUxRklqb2lVR0ZrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJbEJIU3lJc0lrNUJUVVVpT2lKUVlXNW5hMkZzSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKUVMwNGlMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJHRnVJRUoxYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlFTMVVpTENKT1FVMUZJam9pVUdWcllXNWlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQk1UU0lzSWs1QlRVVWlPaUpRWVd4bGJXSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVVFeFhJaXdpVGtGTlJTSTZJbEJoYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRTVMSWl3aVRrRk5SU0k2SWxCdmJuUnBZVzVoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlNTazBpTENKT1FVMUZJam9pVW1GcVlTQkJiWEJoZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlRUVkVpTENKT1FVMUZJam9pVTJGdGNHbDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxOUFF5SXNJazVCVFVVaU9pSlRiMnh2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsTlBVU0lzSWs1QlRVVWlPaUpUYjNKdmJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVTFKSElpd2lUa0ZOUlNJNklsTmxiV0Z5WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJbE5WUWlJc0lrNUJUVVVpT2lKVGRYSmhZbUY1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlVTVTBpTENKT1FVMUZJam9pVkdsdGFXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxSS1VTSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQmhibVJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlVTMGNpTENKT1FVMUZJam9pVEdGdGNIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKVVRrb2lMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOVhTd2lTMEpWSWpwYmV5SkRTVlJaSWpvaVFrUktJaXdpVGtGTlJTSTZJa0poYm1waGNtMWhjMmx1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVUeUlzSWs1QlRVVWlPaUpDWVc1a2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRlNpSXNJazVCVFVVaU9pSkNaWEpoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTVXNpTENKT1FVMUZJam9pUW1saGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUzFNaUxDSk9RVTFGSWpvaVFtVnVaMnQxYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRazFWSWl3aVRrRk5SU0k2SWtKcGJXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxCT0lpd2lUa0ZOUlNJNklrSmhiR2xyY0dGd1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxSSUlpd2lUa0ZOUlNJNklrSmhkR0Z0SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlZWU0lzSWs1QlRVVWlPaUpOZFdGeVlTQkNkVzVuYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWMWdpTENKT1FVMUZJam9pUW1GdWVYVjNZVzVuYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkRSMHNpTENKT1FVMUZJam9pU21GcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUjFSUElpd2lUa0ZOUlNJNklrZHZjbTl1ZEdGc2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpLVDBjaUxDSk9RVTFGSWpvaVdXOW5lV0ZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUkVraUxDSk9RVTFGSWpvaVMyVnVaR0Z5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUazhpTENKT1FVMUZJam9pVFdWa1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzA5Rklpd2lUa0ZOUlNJNklrdDFjR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxWRWNpTENKT1FVMUZJam9pUzJWMFlYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFSktJaXdpVGtGTlJTSTZJa3hoWW5WaGJpQkNZV3B2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE1TaUlzSWs1QlRVVWlPaUpNZFdKMWF5Qk1hVzVuWjJGMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hWVnlJc0lrNUJUVVVpT2lKTWRYZDFheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlJFTWlMQ0pPUVUxRklqb2lUV0Z1WVdSdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFLVlNJc0lrNUJUVVVpT2lKTllXMTFhblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVEVjaUxDSk9RVTFGSWpvaVRXRnNZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMVBSaUlzSWs1QlRVVWlPaUpOWVhWdFpYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWs1Q1dDSXNJazVCVFVVaU9pSk9ZV0pwY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVJISWl3aVRrRk5SU0k2SWxCaFpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVIwc2lMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJDQlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRPSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3hoYmlCQ2RXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4Tklpd2lUa0ZOUlNJNklsQmhiR1Z0WW1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUpISWl3aVRrRk5SU0k2SWxObGJXRnlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4xZExDSkJVa1FpT2x0N0lrTkpWRmtpT2lKQ1JFOGlMQ0pPUVUxRklqb2lRbUZ1WkhWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUlVvaUxDSk9RVTFGSWpvaVFtVnlZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrbExJaXdpVGtGTlJTSTZJa0pwWVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa3RUSWl3aVRrRk5SU0k2SWtKbGJtZHJkV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlFUaUlzSWs1QlRVVWlPaUpDWVd4cGEzQmhjR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlVTQ0lzSWs1QlRVVWlPaUpDWVhSaGJTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxkWUlpd2lUa0ZOUlNJNklrSmhibmwxZDJGdVoya2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRWxNSWl3aVRrRk5SU0k2SWtScGJHa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pUkVwQ0lpd2lUa0ZOUlNJNklrcGhiV0pwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUktTaUlzSWs1QlRVVWlPaUpLWVhsaGNIVnlZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVVGTWlMQ0pPUVUxRklqb2lSR1Z1Y0dGellYSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkZSQ0lpd2lUa0ZOUlNJNklsTnBiR0Z1WjJsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1ZPUlNJc0lrNUJUVVVpT2lKRmJtUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtaTFVTSXNJazVCVFVVaU9pSkdZV3RtWVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSMVJQSWl3aVRrRk5SU0k2SWtkdmNtOXVkR0ZzYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSktUMGNpTENKT1FVMUZJam9pV1c5bmVXRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVFrb2lMQ0pPUVUxRklqb2lUR0ZpZFdGdUlFSmhhbThpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFdEJJaXdpVGtGTlJTSTZJa3hoY21GdWRIVnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVZWY2lMQ0pPUVUxRklqb2lUSFYzZFdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVVJESWl3aVRrRk5SU0k2SWsxaGJtRmtieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVVNJc0lrNUJUVVVpT2lKTlpYSmhkV3RsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxWeUlzSWs1QlRVVWlPaUpOWVc1dmEzZGhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVeEhJaXdpVGtGTlJTSTZJazFoYkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVDBZaUxDSk9RVTFGSWpvaVRXRjFiV1Z5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSRWNpTENKT1FVMUZJam9pVUdGa1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCSFN5SXNJazVCVFVVaU9pSlFZVzVuYTJGc0lGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzFVaUxDSk9RVTFGSWpvaVVHVnJZVzVpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRTVMSWl3aVRrRk5SU0k2SWxCdmJuUnBZVzVoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlNTazBpTENKT1FVMUZJam9pVW1GcVlTQkJiWEJoZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUVkVpTENKT1FVMUZJam9pVTJGdGNHbDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFF5SXNJazVCVFVVaU9pSlRiMnh2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBVU0lzSWs1QlRVVWlPaUpUYjNKdmJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFKSElpd2lUa0ZOUlNJNklsTmxiV0Z5WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5WUWlJc0lrNUJUVVVpT2lKVGRYSmhZbUY1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTVTBpTENKT1FVMUZJam9pVkdsdGFXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1VTSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQmhibVJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTMGNpTENKT1FVMUZJam9pVEdGdGNIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVRrb2lMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOVhTd2lURXRCSWpwYmV5SkRTVlJaSWpvaVFVMVJJaXdpVGtGTlJTSTZJa0Z0WW05dUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0ZTUkNJc0lrNUJUVVVpT2lKQmJHOXlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRVR5SXNJazVCVFVVaU9pSkNZVzVrZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsQk9JaXdpVGtGTlJTSTZJa0poYkdscmNHRndZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsUklJaXdpVGtGTlJTSTZJa0poZEdGdElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pWVlNJc0lrNUJUVVVpT2lKTmRXRnlZU0JDZFc1bmJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVjFnaUxDSk9RVTFGSWpvaVFtRnVlWFYzWVc1bmFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpEUjBzaUxDSk9RVTFGSWpvaVNtRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTa0lpTENKT1FVMUZJam9pU21GdFlta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwS0lpd2lUa0ZOUlNJNklrcGhlV0Z3ZFhKaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVWRUlpTENKT1FVMUZJam9pVTJsc1lXNW5hWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJVNUZJaXdpVGtGTlJTSTZJa1Z1WkdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSa3RSSWl3aVRrRk5SU0k2SWtaaGEyWmhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtwUFJ5SXNJazVCVFVVaU9pSlpiMmQ1WVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0RVNTSXNJazVCVFVVaU9pSkxaVzVrWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RPVHlJc0lrNUJUVVVpT2lKTlpXUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFQwVWlMQ0pPUVUxRklqb2lTM1Z3WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hDU2lJc0lrNUJUVVVpT2lKTVlXSjFZVzRnUW1GcWJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJFY2lMQ0pPUVUxRklqb2lVR0ZrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJIU3lJc0lrNUJUVVVpT2lKUVlXNW5hMkZzSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMwNGlMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJHRnVJRUoxYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURTBpTENKT1FVMUZJam9pVUdGc1pXMWlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1WeUlzSWs1QlRVVWlPaUpRWVd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJPU3lJc0lrNUJUVVVpT2lKUWIyNTBhV0Z1WVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVa3BOSWl3aVRrRk5SU0k2SWxKaGFtRWdRVzF3WVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDFSSWl3aVRrRk5SU0k2SWxOaGJYQnBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQwTWlMQ0pPUVUxRklqb2lVMjlzYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUMUVpTENKT1FVMUZJam9pVTI5eWIyNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOU1J5SXNJazVCVFVVaU9pSlRaVzFoY21GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVlVJaUxDSk9RVTFGSWpvaVUzVnlZV0poZVdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRWxOSWl3aVRrRk5SU0k2SWxScGJXbHJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsRWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFZVzVrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXRISWl3aVRrRk5SU0k2SWt4aGJYQjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFNUtJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJTU3lJc0lrNUJUVVVpT2lKVVlYSmhhMkZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxWUVJ5SXNJazVCVFVVaU9pSlZhblZ1WnlCUVlXNWtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZEhVQ0lzSWs1QlRVVWlPaUpYWVdsdVoyRndkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlYwc0lsZE5XQ0k2VzNzaVEwbFVXU0k2SWtGTlVTSXNJazVCVFVVaU9pSkJiV0p2YmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRW9pTENKT1FVMUZJam9pUW1GdWFtRnliV0Z6YVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVUU0aUxDSk9RVTFGSWpvaVFtRnNhV3R3WVhCaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVkVnaUxDSk9RVTFGSWpvaVFtRjBZVzBpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsVlZJaXdpVGtGTlJTSTZJazExWVhKaElFSjFibWR2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlhXQ0lzSWs1QlRVVWlPaUpDWVc1NWRYZGhibWRwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrTkhTeUlzSWs1QlRVVWlPaUpLWVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSSlRDSXNJazVCVFVVaU9pSkVhV3hwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUktRaUlzSWs1QlRVVWlPaUpLWVcxaWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU2tvaUxDSk9RVTFGSWpvaVNtRjVZWEIxY21FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlVRaUlzSWs1QlRVVWlPaUpUYVd4aGJtZHBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtwUFJ5SXNJazVCVFVVaU9pSlpiMmQ1WVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0RVNTSXNJazVCVFVVaU9pSkxaVzVrWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RPVHlJc0lrNUJUVVVpT2lKTlpXUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFQwVWlMQ0pPUVUxRklqb2lTM1Z3WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hDU2lJc0lrNUJUVVVpT2lKTVlXSjFZVzRnUW1GcWJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFZExJaXdpVGtGTlJTSTZJbEJoYm1kcllXd2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVGlJc0lrNUJUVVVpT2lKUVlXNW5hMkZzWVc0Z1FuVnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFZTSXNJazVCVFVVaU9pSlFaV3RoYm1KaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4Tklpd2lUa0ZOUlNJNklsQmhiR1Z0WW1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRrc2lMQ0pPUVUxRklqb2lVRzl1ZEdsaGJtRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOTlVTSXNJazVCVFVVaU9pSlRZVzF3YVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlESWl3aVRrRk5SU0k2SWxOdmJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5Uklpd2lUa0ZOUlNJNklsTnZjbTl1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVa2NpTENKT1FVMUZJam9pVTJWdFlYSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxVkNJaXdpVGtGTlJTSTZJbE4xY21GaVlYbGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSSlRTSXNJazVCVFVVaU9pSlVhVzFwYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBSSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdGdVpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1V5SXNJazVCVFVVaU9pSlVZVzVxZFc1bklGTmxiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkxSeUlzSWs1QlRVVWlPaUpNWVcxd2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxST1NpSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4xZExDSkVSVmdpT2x0N0lrTkpWRmtpT2lKQlRWRWlMQ0pPUVUxRklqb2lRVzFpYjI0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFVHlJc0lrNUJUVVVpT2lKQ1lXNWtkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkZTaUlzSWs1QlRVVWlPaUpDWlhKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDU1VzaUxDSk9RVTFGSWpvaVFtbGhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1MxTWlMQ0pPUVUxRklqb2lRbVZ1WjJ0MWJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxCT0lpd2lUa0ZOUlNJNklrSmhiR2xyY0dGd1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxSSUlpd2lUa0ZOUlNJNklrSmhkR0Z0SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlZWU0lzSWs1QlRVVWlPaUpOZFdGeVlTQkNkVzVuYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWMWdpTENKT1FVMUZJam9pUW1GdWVYVjNZVzVuYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkRSMHNpTENKT1FVMUZJam9pU21GcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNVd2lMQ0pPUVUxRklqb2lSR2xzYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkVTa0lpTENKT1FVMUZJam9pU21GdFlta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwS0lpd2lUa0ZOUlNJNklrcGhlV0Z3ZFhKaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVWRUlpTENKT1FVMUZJam9pVTJsc1lXNW5hWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RFU1NJc0lrNUJUVVVpT2lKTFpXNWtZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdE9UeUlzSWs1QlRVVWlPaUpOWldSaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVDBVaUxDSk9RVTFGSWpvaVMzVndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreENTaUlzSWs1QlRVVWlPaUpNWVdKMVlXNGdRbUZxYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1WVmNpTENKT1FVMUZJam9pVEhWM2RXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVSRElpd2lUa0ZOUlNJNklrMWhibUZrYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TbFVpTENKT1FVMUZJam9pVFdGdGRXcDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVnlJc0lrNUJUVVVpT2lKTllXNXZhM2RoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXhISWl3aVRrRk5SU0k2SWsxaGJHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlQwWWlMQ0pPUVUxRklqb2lUV0YxYldWeVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpPUWxnaUxDSk9RVTFGSWpvaVRtRmlhWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkVSeUlzSWs1QlRVVWlPaUpRWVdSaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVWT0lpd2lUa0ZOUlNJNklsQmxibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlFSMHNpTENKT1FVMUZJam9pVUdGdVoydGhiQ0JRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0T0lpd2lUa0ZOUlNJNklsQmhibWRyWVd4aGJpQkNkVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdFZJaXdpVGtGTlJTSTZJbEJsYTJGdVltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRFMGlMQ0pPUVUxRklqb2lVR0ZzWlcxaVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVZ5SXNJazVCVFVVaU9pSlFZV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk9TeUlzSWs1QlRVVWlPaUpRYjI1MGFXRnVZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwMVJJaXdpVGtGTlJTSTZJbE5oYlhCcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDBNaUxDSk9RVTFGSWpvaVUyOXNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQxRWlMQ0pPUVUxRklqb2lVMjl5YjI1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5TUnlJc0lrNUJUVVVpT2lKVFpXMWhjbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRWVUlpTENKT1FVMUZJam9pVTNWeVlXSmhlV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFbE5JaXdpVGtGTlJTSTZJbFJwYldscllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xFaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUVlXNWtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFdEhJaXdpVGtGTlJTSTZJa3hoYlhCMWJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkU1S0lpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxWUVJ5SXNJazVCVFVVaU9pSlZhblZ1WnlCUVlXNWtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZEhVQ0lzSWs1QlRVVWlPaUpYWVdsdVoyRndkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlYwc0lrSk5WU0k2VzNzaVEwbFVXU0k2SWtGTlVTSXNJazVCVFVVaU9pSkJiV0p2YmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRW9pTENKT1FVMUZJam9pUW1GdWFtRnliV0Z6YVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVUU0aUxDSk9RVTFGSWpvaVFtRnNhV3R3WVhCaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVkVnaUxDSk9RVTFGSWpvaVFtRjBZVzBpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsVlZJaXdpVGtGTlJTSTZJazExWVhKaElFSjFibWR2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlhXQ0lzSWs1QlRVVWlPaUpDWVc1NWRYZGhibWRwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrTkhTeUlzSWs1QlRVVWlPaUpLWVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSSlRDSXNJazVCVFVVaU9pSkVhV3hwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUktRaUlzSWs1QlRVVWlPaUpLWVcxaWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU2tvaUxDSk9RVTFGSWpvaVNtRjVZWEIxY21FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlVRaUlzSWs1QlRVVWlPaUpUYVd4aGJtZHBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtwUFJ5SXNJazVCVFVVaU9pSlpiMmQ1WVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0Q1ZTSXNJazVCVFVVaU9pSkxiM1JoWW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUkVraUxDSk9RVTFGSWpvaVMyVnVaR0Z5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUazhpTENKT1FVMUZJam9pVFdWa1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzA5Rklpd2lUa0ZOUlNJNklrdDFjR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1Ra29pTENKT1FVMUZJam9pVEdGaWRXRnVJRUpoYW04aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURXhLSWl3aVRrRk5SU0k2SWt4MVluVnJJRXhwYm1kbllYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEU5UUlpd2lUa0ZOUlNJNklreHZiV0p2YXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1WVmNpTENKT1FVMUZJam9pVEhWM2RXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVSRElpd2lUa0ZOUlNJNklrMWhibUZrYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TbFVpTENKT1FVMUZJam9pVFdGdGRXcDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVnlJc0lrNUJUVVVpT2lKTllXNXZhM2RoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXhISWl3aVRrRk5SU0k2SWsxaGJHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlQwWWlMQ0pPUVUxRklqb2lUV0YxYldWeVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpPUWxnaUxDSk9RVTFGSWpvaVRtRmlhWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkVSeUlzSWs1QlRVVWlPaUpRWVdSaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVkTElpd2lUa0ZOUlNJNklsQmhibWRyWVd3Z1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkxUaUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNZVzRnUW5WdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVlNJc0lrNUJUVVVpT2lKUVpXdGhibUpoY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhOSWl3aVRrRk5SU0k2SWxCaGJHVnRZbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURmNpTENKT1FVMUZJam9pVUdGc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVGtzaUxDSk9RVTFGSWpvaVVHOXVkR2xoYm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUpISWl3aVRrRk5SU0k2SWxObGJXRnlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVFVNaUxDSk9RVTFGSWpvaVZHRnRZbTlzWVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmVjBzSWtKRVR5STZXM3NpUTBsVVdTSTZJa0ZCVUNJc0lrNUJUVVVpT2lKVFlXMWhjbWx1WkdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRVTFSSWl3aVRrRk5SU0k2SWtGdFltOXVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGU1JDSXNJazVCVFVVaU9pSkJiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSVW9pTENKT1FVMUZJam9pUW1WeVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtsTElpd2lUa0ZOUlNJNklrSnBZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JGV0NJc0lrNUJUVVVpT2lKRVpXdGhhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNVd2lMQ0pPUVUxRklqb2lSR2xzYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkVTa29pTENKT1FVMUZJam9pU21GNVlYQjFjbUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSVVFpSXNJazVCVFVVaU9pSlRhV3hoYm1kcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpGVGtVaUxDSk9RVTFGSWpvaVJXNWtaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKR1MxRWlMQ0pPUVUxRklqb2lSbUZyWm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMEpWSWl3aVRrRk5SU0k2SWt0dmRHRmlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdEVTU0lzSWs1QlRVVWlPaUpMWlc1a1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0UFJTSXNJazVCVFVVaU9pSkxkWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMVJISWl3aVRrRk5SU0k2SWt0bGRHRndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreENTaUlzSWs1QlRVVWlPaUpNWVdKMVlXNGdRbUZxYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1TMEVpTENKT1FVMUZJam9pVEdGeVlXNTBkV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreFBVQ0lzSWs1QlRVVWlPaUpNYjIxaWIyc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEZWWElpd2lUa0ZOUlNJNklreDFkM1ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUVReUlzSWs1QlRVVWlPaUpOWVc1aFpHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVwVklpd2lUa0ZOUlNJNklrMWhiWFZxZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TMUVpTENKT1FVMUZJam9pVFdWeVlYVnJaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxY2lMQ0pPUVUxRklqb2lUV0Z1YjJ0M1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxUFJpSXNJazVCVFVVaU9pSk5ZWFZ0WlhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazVDV0NJc0lrNUJUVVVpT2lKT1lXSnBjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFZExJaXdpVGtGTlJTSTZJbEJoYm1kcllXd2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVGlJc0lrNUJUVVVpT2lKUVlXNW5hMkZzWVc0Z1FuVnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVGTlZJaXdpVGtGTlJTSTZJbEIxZEhWemMybGlZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVrcE5JaXdpVGtGTlJTSTZJbEpoYW1FZ1FXMXdZWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwMVJJaXdpVGtGTlJTSTZJbE5oYlhCcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDFFaUxDSk9RVTFGSWpvaVUyOXliMjVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlJSeUlzSWs1QlRVVWlPaUpUYVc1MFlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOU1J5SXNJazVCVFVVaU9pSlRaVzFoY21GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVlVJaUxDSk9RVTFGSWpvaVUzVnlZV0poZVdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRWxOSWl3aVRrRk5SU0k2SWxScGJXbHJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsRWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFZVzVrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBUSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVTJWc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVVa3NpTENKT1FVMUZJam9pVkdGeVlXdGhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVZFVWlMQ0pPUVUxRklqb2lWR1Z5Ym1GMFpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpWVUVjaUxDSk9RVTFGSWpvaVZXcDFibWNnVUdGdVpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFIxQWlMQ0pPUVUxRklqb2lWMkZwYm1kaGNIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjAxWUlpd2lUa0ZOUlNJNklsZGhiV1Z1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZWMHNJa3RVUnlJNlczc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRThpTENKT1FVMUZJam9pUW1GdVpIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JVb2lMQ0pPUVUxRklqb2lRbVZ5WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa2xMSWl3aVRrRk5SU0k2SWtKcFlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWt0VElpd2lUa0ZOUlNJNklrSmxibWRyZFd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pOVlNJc0lrNUJUVVVpT2lKQ2FXMWhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKUVRpSXNJazVCVFVVaU9pSkNZV3hwYTNCaGNHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVVNDSXNJazVCVFVVaU9pSkNZWFJoYlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWVlVpTENKT1FVMUZJam9pVFhWaGNtRWdRblZ1WjI4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbGRZSWl3aVRrRk5SU0k2SWtKaGJubDFkMkZ1WjJraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRMGRMSWl3aVRrRk5SU0k2SWtwaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrZFVUeUlzSWs1QlRVVWlPaUpIYjNKdmJuUmhiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVNrOUhJaXdpVGtGTlJTSTZJbGx2WjNsaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwSlZJaXdpVGtGTlJTSTZJa3R2ZEdGaVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0RVNTSXNJazVCVFVVaU9pSkxaVzVrWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RPVHlJc0lrNUJUVVVpT2lKTlpXUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFQwVWlMQ0pPUVUxRklqb2lTM1Z3WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hDU2lJc0lrNUJUVVVpT2lKTVlXSjFZVzRnUW1GcWJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVEVvaUxDSk9RVTFGSWpvaVRIVmlkV3NnVEdsdVoyZGhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRsVWlMQ0pPUVUxRklqb2lUV0ZzYVc1aGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFZExJaXdpVGtGTlJTSTZJbEJoYm1kcllXd2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhYSWl3aVRrRk5SU0k2SWxCaGJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVTFVaUxDSk9RVTFGSWpvaVVIVjBkWE56YVdKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpTU2swaUxDSk9RVTFGSWpvaVVtRnFZU0JCYlhCaGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVFZFaUxDSk9RVTFGSWpvaVUyRnRjR2wwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBReUlzSWs1QlRVVWlPaUpUYjJ4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5SUnlJc0lrNUJUVVVpT2lKVGFXNTBZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlNSeUlzSWs1QlRVVWlPaUpUWlcxaGNtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFZVSWlMQ0pPUVUxRklqb2lVM1Z5WVdKaGVXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVsTklpd2lUa0ZOUlNJNklsUnBiV2xyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbEVpTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRWVc1a1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTVLSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSU1N5SXNJazVCVFVVaU9pSlVZWEpoYTJGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJVUlNJc0lrNUJUVVVpT2lKVVpYSnVZWFJsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsVlFSeUlzSWs1QlRVVWlPaUpWYW5WdVp5QlFZVzVrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbGRIVUNJc0lrNUJUVVVpT2lKWFlXbHVaMkZ3ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZWMHNJbE5SUnlJNlczc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRThpTENKT1FVMUZJam9pUW1GdVpIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JVb2lMQ0pPUVUxRklqb2lRbVZ5WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa2xMSWl3aVRrRk5SU0k2SWtKcFlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWt0VElpd2lUa0ZOUlNJNklrSmxibWRyZFd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pRVGlJc0lrNUJUVVVpT2lKQ1lXeHBhM0JoY0dGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pVU0NJc0lrNUJUVVVpT2lKQ1lYUmhiU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZWVWlMQ0pPUVUxRklqb2lUWFZoY21FZ1FuVnVaMjhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsZFlJaXdpVGtGTlJTSTZJa0poYm5sMWQyRnVaMmtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVEwZExJaXdpVGtGTlJTSTZJa3BoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwQ0lpd2lUa0ZOUlNJNklrcGhiV0pwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUktTaUlzSWs1QlRVVWlPaUpLWVhsaGNIVnlZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVVGTWlMQ0pPUVUxRklqb2lSR1Z1Y0dGellYSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkZSQ0lpd2lUa0ZOUlNJNklsTnBiR0Z1WjJsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRFb2lMQ0pPUVUxRklqb2lUSFZpZFdzZ1RHbHVaMmRoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1WVmNpTENKT1FVMUZJam9pVEhWM2RXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVSRElpd2lUa0ZOUlNJNklrMWhibUZrYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TbFVpTENKT1FVMUZJam9pVFdGdGRXcDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVnlJc0lrNUJUVVVpT2lKTllXNXZhM2RoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXhISWl3aVRrRk5SU0k2SWsxaGJHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlQwWWlMQ0pPUVUxRklqb2lUV0YxYldWeVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpPUWxnaUxDSk9RVTFGSWpvaVRtRmlhWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNVVXQ0lzSWs1QlRVVWlPaUpPWVhSMWJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSMHNpTENKT1FVMUZJam9pVUdGdVoydGhiQ0JRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0T0lpd2lUa0ZOUlNJNklsQmhibWRyWVd4aGJpQkNkVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdFZJaXdpVGtGTlJTSTZJbEJsYTJGdVltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRFMGlMQ0pPUVUxRklqb2lVR0ZzWlcxaVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVZ5SXNJazVCVFVVaU9pSlFZV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk9TeUlzSWs1QlRVVWlPaUpRYjI1MGFXRnVZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVGTlZJaXdpVGtGTlJTSTZJbEIxZEhWemMybGlZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwMVJJaXdpVGtGTlJTSTZJbE5oYlhCcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDBNaUxDSk9RVTFGSWpvaVUyOXNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQxRWlMQ0pPUVUxRklqb2lVMjl5YjI1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5TUnlJc0lrNUJUVVVpT2lKVFpXMWhjbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRWVUlpTENKT1FVMUZJam9pVTNWeVlXSmhlV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFbE5JaXdpVGtGTlJTSTZJbFJwYldscllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xFaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUVlXNWtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFdEhJaXdpVGtGTlJTSTZJa3hoYlhCMWJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkUxRElpd2lUa0ZOUlNJNklsUmhiV0p2YkdGcllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVGtvaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZGSkxJaXdpVGtGTlJTSTZJbFJoY21GcllXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZSRklpd2lUa0ZOUlNJNklsUmxjbTVoZEdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWVkJISWl3aVRrRk5SU0k2SWxWcWRXNW5JRkJoYm1SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjBkUUlpd2lUa0ZOUlNJNklsZGhhVzVuWVhCMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlYU3dpVkUxRElqcGJleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFVHlJc0lrNUJUVVVpT2lKQ1lXNWtkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkZTaUlzSWs1QlRVVWlPaUpDWlhKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDU1VzaUxDSk9RVTFGSWpvaVFtbGhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1MxTWlMQ0pPUVUxRklqb2lRbVZ1WjJ0MWJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWsxVklpd2lUa0ZOUlNJNklrSnBiV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsQk9JaXdpVGtGTlJTSTZJa0poYkdscmNHRndZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsUklJaXdpVGtGTlJTSTZJa0poZEdGdElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pWVlNJc0lrNUJUVVVpT2lKTmRXRnlZU0JDZFc1bmJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVjFnaUxDSk9RVTFGSWpvaVFtRnVlWFYzWVc1bmFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpEUVU0aUxDSk9RVTFGSWpvaVIzVmhibWQ2YUc5MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkpUQ0lzSWs1QlRVVWlPaUpFYVd4cElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa1JLUWlJc0lrNUJUVVVpT2lKS1lXMWlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNrb2lMQ0pPUVUxRklqb2lTbUY1WVhCMWNtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkZCVElpd2lUa0ZOUlNJNklrUmxibkJoYzJGeUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JVUWlJc0lrNUJUVVVpT2lKVGFXeGhibWRwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkhWRThpTENKT1FVMUZJam9pUjI5eWIyNTBZV3h2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrcFBSeUlzSWs1QlRVVWlPaUpaYjJkNVlXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdEVTU0lzSWs1QlRVVWlPaUpMWlc1a1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0T1R5SXNJazVCVFVVaU9pSk5aV1JoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUMFVpTENKT1FVMUZJam9pUzNWd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRFb2lMQ0pPUVUxRklqb2lUSFZpZFdzZ1RHbHVaMmRoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1UMUFpTENKT1FVMUZJam9pVEc5dFltOXJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4VlZ5SXNJazVCVFVVaU9pSk1kWGQxYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5SRU1pTENKT1FVMUZJam9pVFdGdVlXUnZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxS1ZTSXNJazVCVFVVaU9pSk5ZVzExYW5VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRSSWl3aVRrRk5SU0k2SWsxbGNtRjFhMlVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFhJaXdpVGtGTlJTSTZJazFoYm05cmQyRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlRFY2lMQ0pPUVUxRklqb2lUV0ZzWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFQUmlJc0lrNUJUVVVpT2lKTllYVnRaWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNUNXQ0lzSWs1QlRVVWlPaUpPWVdKcGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSMHNpTENKT1FVMUZJam9pVUdGdVoydGhiQ0JRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0T0lpd2lUa0ZOUlNJNklsQmhibWRyWVd4aGJpQkNkVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdFZJaXdpVGtGTlJTSTZJbEJsYTJGdVltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRFMGlMQ0pPUVUxRklqb2lVR0ZzWlcxaVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVZ5SXNJazVCVFVVaU9pSlFZV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk9TeUlzSWs1QlRVVWlPaUpRYjI1MGFXRnVZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwMVJJaXdpVGtGTlJTSTZJbE5oYlhCcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDBNaUxDSk9RVTFGSWpvaVUyOXNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQxRWlMQ0pPUVUxRklqb2lVMjl5YjI1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5SUnlJc0lrNUJUVVVpT2lKVGFXNTBZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlNSeUlzSWs1QlRVVWlPaUpUWlcxaGNtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFZVSWlMQ0pPUVUxRklqb2lVM1Z5WVdKaGVXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFwWUlpd2lUa0ZOUlNJNklsTm9aVzU2YUdWdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJKVFNJc0lrNUJUVVVpT2lKVWFXMXBhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFcFJJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR0Z1WkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJMUnlJc0lrNUJUVVVpT2lKTVlXMXdkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk9TaUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4xZExDSkdTMUVpT2x0N0lrTkpWRmtpT2lKQlRWRWlMQ0pPUVUxRklqb2lRVzFpYjI0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRVkpFSWl3aVRrRk5SU0k2SWtGc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSS0lpd2lUa0ZOUlNJNklrSmhibXBoY20xaGMybHVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRVR5SXNJazVCVFVVaU9pSkNZVzVrZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsQk9JaXdpVGtGTlJTSTZJa0poYkdscmNHRndZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsUklJaXdpVGtGTlJTSTZJa0poZEdGdElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pWVlNJc0lrNUJUVVVpT2lKTmRXRnlZU0JDZFc1bmJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVjFnaUxDSk9RVTFGSWpvaVFtRnVlWFYzWVc1bmFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpEUjBzaUxDSk9RVTFGSWpvaVNtRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVSVmdpTENKT1FVMUZJam9pUkdWcllXa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVsTUlpd2lUa0ZOUlNJNklrUnBiR2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVJFcENJaXdpVGtGTlJTSTZJa3BoYldKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JLU2lJc0lrNUJUVVVpT2lKS1lYbGhjSFZ5WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVVRk1pTENKT1FVMUZJam9pUkdWdWNHRnpZWElpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGUkNJaXdpVGtGTlJTSTZJbE5wYkdGdVoybDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtWT1JTSXNJazVCVFVVaU9pSkZibVJsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrZFVUeUlzSWs1QlRVVWlPaUpIYjNKdmJuUmhiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVNrOUhJaXdpVGtGTlJTSTZJbGx2WjNsaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwUkpJaXdpVGtGTlJTSTZJa3RsYm1SaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzA1UElpd2lUa0ZOUlNJNklrMWxaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdFBSU0lzSWs1QlRVVWlPaUpMZFhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRGVlhJaXdpVGtGTlJTSTZJa3gxZDNWcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFFUXlJc0lrNUJUVVVpT2lKTllXNWhaRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVcFZJaXdpVGtGTlJTSTZJazFoYlhWcWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFFaUxDSk9RVTFGSWpvaVRXVnlZWFZyWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TMWNpTENKT1FVMUZJam9pVFdGdWIydDNZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMU1SeUlzSWs1QlRVVWlPaUpOWVd4aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFU5R0lpd2lUa0ZOUlNJNklrMWhkVzFsY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUa0pZSWl3aVRrRk5SU0k2SWs1aFltbHlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJFY2lMQ0pPUVUxRklqb2lVR0ZrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJGVGlJc0lrNUJUVVVpT2lKUVpXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVVFZExJaXdpVGtGTlJTSTZJbEJoYm1kcllXd2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVGlJc0lrNUJUVVVpT2lKUVlXNW5hMkZzWVc0Z1FuVnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFZTSXNJazVCVFVVaU9pSlFaV3RoYm1KaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4Tklpd2lUa0ZOUlNJNklsQmhiR1Z0WW1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRrc2lMQ0pPUVUxRklqb2lVRzl1ZEdsaGJtRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxKS1RTSXNJazVCVFVVaU9pSlNZV3BoSUVGdGNHRjBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOTlVTSXNJazVCVFVVaU9pSlRZVzF3YVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlESWl3aVRrRk5SU0k2SWxOdmJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5Uklpd2lUa0ZOUlNJNklsTnZjbTl1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVa2NpTENKT1FVMUZJam9pVTJWdFlYSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxVkNJaXdpVGtGTlJTSTZJbE4xY21GaVlYbGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSSlRTSXNJazVCVFVVaU9pSlVhVzFwYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBSSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdGdVpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSTFJ5SXNJazVCVFVVaU9pSk1ZVzF3ZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYUjFBaUxDSk9RVTFGSWpvaVYyRnBibWRoY0hVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMWRMQ0pTU2swaU9sdDdJa05KVkZraU9pSkJUVkVpTENKT1FVMUZJam9pUVcxaWIyNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUVZKRUlpd2lUa0ZOUlNJNklrRnNiM0lpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrUktJaXdpVGtGTlJTSTZJa0poYm1waGNtMWhjMmx1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVUeUlzSWs1QlRVVWlPaUpDWVc1a2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRlNpSXNJazVCVFVVaU9pSkNaWEpoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTVXNpTENKT1FVMUZJam9pUW1saGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUzFNaUxDSk9RVTFGSWpvaVFtVnVaMnQxYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1YxZ2lMQ0pPUVUxRklqb2lRbUZ1ZVhWM1lXNW5hU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFIwc2lMQ0pPUVUxRklqb2lTbUZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RFU1NJc0lrNUJUVVVpT2lKTFpXNWtZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdE9UeUlzSWs1QlRVVWlPaUpOWldSaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVDBVaUxDSk9RVTFGSWpvaVMzVndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdFVSeUlzSWs1QlRVVWlPaUpMWlhSaGNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVFrb2lMQ0pPUVUxRklqb2lUR0ZpZFdGdUlFSmhhbThpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFdEJJaXdpVGtGTlJTSTZJa3hoY21GdWRIVnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRFb2lMQ0pPUVUxRklqb2lUSFZpZFdzZ1RHbHVaMmRoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1WVmNpTENKT1FVMUZJam9pVEhWM2RXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVSRElpd2lUa0ZOUlNJNklrMWhibUZrYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TbFVpTENKT1FVMUZJam9pVFdGdGRXcDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVnlJc0lrNUJUVVVpT2lKTllXNXZhM2RoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXhISWl3aVRrRk5SU0k2SWsxaGJHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlQwWWlMQ0pPUVUxRklqb2lUV0YxYldWeVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpPUWxnaUxDSk9RVTFGSWpvaVRtRmlhWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkVSeUlzSWs1QlRVVWlPaUpRWVdSaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVWT0lpd2lUa0ZOUlNJNklsQmxibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlFSMHNpTENKT1FVMUZJam9pVUdGdVoydGhiQ0JRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0T0lpd2lUa0ZOUlNJNklsQmhibWRyWVd4aGJpQkNkVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdFZJaXdpVGtGTlJTSTZJbEJsYTJGdVltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRFMGlMQ0pPUVUxRklqb2lVR0ZzWlcxaVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVZ5SXNJazVCVFVVaU9pSlFZV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk9TeUlzSWs1QlRVVWlPaUpRYjI1MGFXRnVZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwMVJJaXdpVGtGTlJTSTZJbE5oYlhCcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDBNaUxDSk9RVTFGSWpvaVUyOXNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQxRWlMQ0pPUVUxRklqb2lVMjl5YjI1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5TUnlJc0lrNUJUVVVpT2lKVFpXMWhjbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRWVUlpTENKT1FVMUZJam9pVTNWeVlXSmhlV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFbE5JaXdpVGtGTlJTSTZJbFJwYldscllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xFaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUVlXNWtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFdEhJaXdpVGtGTlJTSTZJa3hoYlhCMWJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkU1S0lpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlNTeUlzSWs1QlRVVWlPaUpVWVhKaGEyRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSVVJTSXNJazVCVFVVaU9pSlVaWEp1WVhSbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFZRUnlJc0lrNUJUVVVpT2lKVmFuVnVaeUJRWVc1a1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxkSFVDSXNJazVCVFVVaU9pSlhZV2x1WjJGd2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmVjBzSWtGTlVTSTZXM3NpUTBsVVdTSTZJa0pFU2lJc0lrNUJUVVVpT2lKQ1lXNXFZWEp0WVhOcGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUkU4aUxDSk9RVTFGSWpvaVFtRnVaSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSVW9pTENKT1FVMUZJam9pUW1WeVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtsTElpd2lUa0ZOUlNJNklrSnBZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrdFRJaXdpVGtGTlJTSTZJa0psYm1kcmRXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTlZTSXNJazVCVFVVaU9pSkNhVzFoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlFUaUlzSWs1QlRVVWlPaUpDWVd4cGEzQmhjR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlVTQ0lzSWs1QlRVVWlPaUpDWVhSaGJTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxkWUlpd2lUa0ZOUlNJNklrSmhibmwxZDJGdVoya2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRVZZSWl3aVRrRk5SU0k2SWtSbGEyRnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSSlRDSXNJazVCVFVVaU9pSkVhV3hwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUktRaUlzSWs1QlRVVWlPaUpLWVcxaWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU2tvaUxDSk9RVTFGSWpvaVNtRjVZWEIxY21FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlVRaUlzSWs1QlRVVWlPaUpUYVd4aGJtZHBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKR1MxRWlMQ0pPUVUxRklqb2lSbUZyWm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFSktJaXdpVGtGTlJTSTZJa3hoWW5WaGJpQkNZV3B2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreExRU0lzSWs1QlRVVWlPaUpNWVhKaGJuUjFhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRGVlhJaXdpVGtGTlJTSTZJa3gxZDNWcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFFUXlJc0lrNUJUVVVpT2lKTllXNWhaRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVcFZJaXdpVGtGTlJTSTZJazFoYlhWcWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFFaUxDSk9RVTFGSWpvaVRXVnlZWFZyWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TMWNpTENKT1FVMUZJam9pVFdGdWIydDNZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMU1SeUlzSWs1QlRVVWlPaUpOWVd4aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFU5R0lpd2lUa0ZOUlNJNklrMWhkVzFsY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUa0pZSWl3aVRrRk5SU0k2SWs1aFltbHlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJFY2lMQ0pPUVUxRklqb2lVR0ZrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJGVGlJc0lrNUJUVVVpT2lKUVpXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVVFZExJaXdpVGtGTlJTSTZJbEJoYm1kcllXd2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVGlJc0lrNUJUVVVpT2lKUVlXNW5hMkZzWVc0Z1FuVnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFZTSXNJazVCVFVVaU9pSlFaV3RoYm1KaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4Tklpd2lUa0ZOUlNJNklsQmhiR1Z0WW1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRrc2lMQ0pPUVUxRklqb2lVRzl1ZEdsaGJtRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxKS1RTSXNJazVCVFVVaU9pSlNZV3BoSUVGdGNHRjBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOTlVTSXNJazVCVFVVaU9pSlRZVzF3YVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlESWl3aVRrRk5SU0k2SWxOdmJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5Uklpd2lUa0ZOUlNJNklsTnZjbTl1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVa2NpTENKT1FVMUZJam9pVTJWdFlYSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxVkNJaXdpVGtGTlJTSTZJbE4xY21GaVlYbGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSSlRTSXNJazVCVFVVaU9pSlVhVzFwYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBSSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdGdVpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1V5SXNJazVCVFVVaU9pSlVZVzVxZFc1bklGTmxiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkxSeUlzSWs1QlRVVWlPaUpNWVcxd2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxST1NpSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVVa3NpTENKT1FVMUZJam9pVkdGeVlXdGhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVZFVWlMQ0pPUVUxRklqb2lWR1Z5Ym1GMFpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpWVUVjaUxDSk9RVTFGSWpvaVZXcDFibWNnVUdGdVpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFIxQWlMQ0pPUVUxRklqb2lWMkZwYm1kaGNIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjAxWUlpd2lUa0ZOUlNJNklsZGhiV1Z1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZWMHNJbEJMVlNJNlczc2lRMGxVV1NJNklrRk5VU0lzSWs1QlRVVWlPaUpCYldKdmJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpCVWtRaUxDSk9RVTFGSWpvaVFXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JFb2lMQ0pPUVUxRklqb2lRbUZ1YW1GeWJXRnphVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVFZVaUxDSk9RVTFGSWpvaVFtbHRZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrTk5RaUlzSWs1QlRVVWlPaUpEYjJ4dmJXSnZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWtSRldDSXNJazVCVFVVaU9pSkVaV3RoYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTVXdpTENKT1FVMUZJam9pUkdsc2FTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpFU2tJaUxDSk9RVTFGSWpvaVNtRnRZbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFcEtJaXdpVGtGTlJTSTZJa3BoZVdGd2RYSmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSUVV5SXNJazVCVFVVaU9pSkVaVzV3WVhOaGNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVkVJaUxDSk9RVTFGSWpvaVUybHNZVzVuYVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSa3RSSWl3aVRrRk5SU0k2SWtaaGEyWmhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtwUFJ5SXNJazVCVFVVaU9pSlpiMmQ1WVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0RVNTSXNJazVCVFVVaU9pSkxaVzVrWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RPVHlJc0lrNUJUVVVpT2lKTlpXUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFQwVWlMQ0pPUVUxRklqb2lTM1Z3WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hDU2lJc0lrNUJUVVVpT2lKTVlXSjFZVzRnUW1GcWJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFVk9JaXdpVGtGTlJTSTZJbEJsYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpRUjBzaUxDSk9RVTFGSWpvaVVHRnVaMnRoYkNCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdE9JaXdpVGtGTlJTSTZJbEJoYm1kcllXeGhiaUJDZFc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhOSWl3aVRrRk5SU0k2SWxCaGJHVnRZbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURmNpTENKT1FVMUZJam9pVUdGc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVGtzaUxDSk9RVTFGSWpvaVVHOXVkR2xoYm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEpLVFNJc0lrNUJUVVVpT2lKU1lXcGhJRUZ0Y0dGMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5OVVNJc0lrNUJUVVVpT2lKVFlXMXdhWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOURJaXdpVGtGTlJTSTZJbE52Ykc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlSSWl3aVRrRk5SU0k2SWxOdmNtOXVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVVY2lMQ0pPUVUxRklqb2lVMmx1ZEdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMVZDSWl3aVRrRk5SU0k2SWxOMWNtRmlZWGxoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkpUU0lzSWs1QlRVVWlPaUpVYVcxcGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVwUklpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHRnVaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkxSeUlzSWs1QlRVVWlPaUpNWVcxd2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSTlF5SXNJazVCVFVVaU9pSlVZVzFpYjJ4aGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkU1S0lpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlNTeUlzSWs1QlRVVWlPaUpVWVhKaGEyRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSVVJTSXNJazVCVFVVaU9pSlVaWEp1WVhSbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFZRUnlJc0lrNUJUVVVpT2lKVmFuVnVaeUJRWVc1a1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxkSFVDSXNJazVCVFVVaU9pSlhZV2x1WjJGd2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYVFZnaUxDSk9RVTFGSWpvaVYyRnRaVzVoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOVhTd2lSRWxNSWpwYmV5SkRTVlJaSWpvaVFVMVJJaXdpVGtGTlJTSTZJa0Z0WW05dUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa0ZTUkNJc0lrNUJUVVVpT2lKQmJHOXlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWtKRVNpSXNJazVCVFVVaU9pSkNZVzVxWVhKdFlYTnBiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKQ1JFOGlMQ0pPUVUxRklqb2lRbUZ1WkhWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpDUlVvaUxDSk9RVTFGSWpvaVFtVnlZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVFrbExJaXdpVGtGTlJTSTZJa0pwWVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lRa3RUSWl3aVRrRk5SU0k2SWtKbGJtZHJkV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrSk5WU0lzSWs1QlRVVWlPaUpDYVcxaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa0pRVGlJc0lrNUJUVVVpT2lKQ1lXeHBhM0JoY0dGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa0pVU0NJc0lrNUJUVVVpT2lKQ1lYUmhiU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKQ1ZWVWlMQ0pPUVUxRklqb2lUWFZoY21FZ1FuVnVaMjhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVFsZFlJaXdpVGtGTlJTSTZJa0poYm5sMWQyRnVaMmtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVEwZExJaXdpVGtGTlJTSTZJa3BoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pUkVWWUlpd2lUa0ZOUlNJNklrUmxhMkZwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUktRaUlzSWs1QlRVVWlPaUpLWVcxaWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpFU2tvaUxDSk9RVTFGSWpvaVNtRjVZWEIxY21FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUlVRaUlzSWs1QlRVVWlPaUpUYVd4aGJtZHBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKR1MxRWlMQ0pPUVUxRklqb2lSbUZyWm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKTVZWY2lMQ0pPUVUxRklqb2lUSFYzZFdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lUVVJESWl3aVRrRk5SU0k2SWsxaGJtRmtieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJazFMVVNJc0lrNUJUVVVpT2lKTlpYSmhkV3RsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrMUxWeUlzSWs1QlRVVWlPaUpOWVc1dmEzZGhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVRVeEhJaXdpVGtGTlJTSTZJazFoYkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpOVDBZaUxDSk9RVTFGSWpvaVRXRjFiV1Z5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSk9RbGdpTENKT1FVMUZJam9pVG1GaWFYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxCRVJ5SXNJazVCVFVVaU9pSlFZV1JoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRVZPSWl3aVRrRk5SU0k2SWxCbGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKUVIwc2lMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJDQlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRXRPSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3hoYmlCQ2RXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVUV0Vklpd2lUa0ZOUlNJNklsQmxhMkZ1WW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpRVEUwaUxDSk9RVTFGSWpvaVVHRnNaVzFpWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJbEJNVnlJc0lrNUJUVVVpT2lKUVlXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxCT1N5SXNJazVCVFVVaU9pSlFiMjUwYVdGdVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVWtwTklpd2lUa0ZOUlNJNklsSmhhbUVnUVcxd1lYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVTAxUklpd2lUa0ZOUlNJNklsTmhiWEJwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlRUME1pTENKT1FVMUZJam9pVTI5c2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpUVDFFaUxDSk9RVTFGSWpvaVUyOXliMjVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsTlNSeUlzSWs1QlRVVWlPaUpUWlcxaGNtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKVFZVSWlMQ0pPUVUxRklqb2lVM1Z5WVdKaGVXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVkVsTklpd2lUa0ZOUlNJNklsUnBiV2xyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlVTbEVpTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRWVc1a1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsZE5XQ0lzSWs1QlRVVWlPaUpYWVcxbGJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjFkTENKT1FsZ2lPbHQ3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrUktJaXdpVGtGTlJTSTZJa0poYm1waGNtMWhjMmx1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVUeUlzSWs1QlRVVWlPaUpDWVc1a2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRlNpSXNJazVCVFVVaU9pSkNaWEpoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTVXNpTENKT1FVMUZJam9pUW1saGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUzFNaUxDSk9RVTFGSWpvaVFtVnVaMnQxYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRazFWSWl3aVRrRk5SU0k2SWtKcGJXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxCT0lpd2lUa0ZOUlNJNklrSmhiR2xyY0dGd1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxSSUlpd2lUa0ZOUlNJNklrSmhkR0Z0SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlZWU0lzSWs1QlRVVWlPaUpOZFdGeVlTQkNkVzVuYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWMWdpTENKT1FVMUZJam9pUW1GdWVYVjNZVzVuYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkRSMHNpTENKT1FVMUZJam9pU21GcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVJWZ2lMQ0pPUVUxRklqb2lSR1ZyWVdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRWxNSWl3aVRrRk5SU0k2SWtScGJHa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pUkVwQ0lpd2lUa0ZOUlNJNklrcGhiV0pwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUktTaUlzSWs1QlRVVWlPaUpLWVhsaGNIVnlZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVVGTWlMQ0pPUVUxRklqb2lSR1Z1Y0dGellYSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkZSQ0lpd2lUa0ZOUlNJNklsTnBiR0Z1WjJsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1pMVVNJc0lrNUJUVVVpT2lKR1lXdG1ZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVIxUlBJaXdpVGtGTlJTSTZJa2R2Y205dWRHRnNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKS1QwY2lMQ0pPUVUxRklqb2lXVzluZVdGcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFFsVWlMQ0pPUVUxRklqb2lTMjkwWVdKaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBSSklpd2lUa0ZOUlNJNklrdGxibVJoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDVQSWl3aVRrRk5SU0k2SWsxbFpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0UFJTSXNJazVCVFVVaU9pSkxkWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMVJISWl3aVRrRk5SU0k2SWt0bGRHRndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreENTaUlzSWs1QlRVVWlPaUpNWVdKMVlXNGdRbUZxYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1URW9pTENKT1FVMUZJam9pVEhWaWRXc2dUR2x1WjJkaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJFY2lMQ0pPUVUxRklqb2lVR0ZrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJGVGlJc0lrNUJUVVVpT2lKUVpXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVVFZExJaXdpVGtGTlJTSTZJbEJoYm1kcllXd2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVGlJc0lrNUJUVVVpT2lKUVlXNW5hMkZzWVc0Z1FuVnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFZTSXNJazVCVFVVaU9pSlFaV3RoYm1KaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4Tklpd2lUa0ZOUlNJNklsQmhiR1Z0WW1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRrc2lMQ0pPUVUxRklqb2lVRzl1ZEdsaGJtRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCVFZTSXNJazVCVFVVaU9pSlFkWFIxYzNOcFltRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxKS1RTSXNJazVCVFVVaU9pSlNZV3BoSUVGdGNHRjBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOTlVTSXNJazVCVFVVaU9pSlRZVzF3YVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlESWl3aVRrRk5SU0k2SWxOdmJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5Uklpd2lUa0ZOUlNJNklsTnZjbTl1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVVWNpTENKT1FVMUZJam9pVTJsdWRHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVrY2lMQ0pPUVUxRklqb2lVMlZ0WVhKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFWQ0lpd2lUa0ZOUlNJNklsTjFjbUZpWVhsaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJKVFNJc0lrNUJUVVVpT2lKVWFXMXBhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFcFJJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR0Z1WkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVXlJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZObGJHOXlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSTFJ5SXNJazVCVFVVaU9pSk1ZVzF3ZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJOUXlJc0lrNUJUVVVpT2lKVVlXMWliMnhoYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTVLSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSVVJTSXNJazVCVFVVaU9pSlVaWEp1WVhSbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFZRUnlJc0lrNUJUVVVpT2lKVmFuVnVaeUJRWVc1a1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxkSFVDSXNJazVCVFVVaU9pSlhZV2x1WjJGd2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYVFZnaUxDSk9RVTFGSWpvaVYyRnRaVzVoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOVhTd2lWRkpMSWpwYmV5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVFZVaUxDSk9RVTFGSWpvaVFtbHRZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkpUQ0lzSWs1QlRVVWlPaUpFYVd4cElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa1JLUWlJc0lrNUJUVVVpT2lKS1lXMWlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNrb2lMQ0pPUVUxRklqb2lTbUY1WVhCMWNtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkZCVElpd2lUa0ZOUlNJNklrUmxibkJoYzJGeUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JVUWlJc0lrNUJUVVVpT2lKVGFXeGhibWRwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkdTMUVpTENKT1FVMUZJam9pUm1GclptRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtkVVR5SXNJazVCVFVVaU9pSkhiM0p2Ym5SaGJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pU2s5SElpd2lUa0ZOUlNJNklsbHZaM2xoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBKVklpd2lUa0ZOUlNJNklrdHZkR0ZpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RFU1NJc0lrNUJUVVVpT2lKTFpXNWtZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdE9UeUlzSWs1QlRVVWlPaUpOWldSaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVDBVaUxDSk9RVTFGSWpvaVMzVndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdFVSeUlzSWs1QlRVVWlPaUpMWlhSaGNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVFrb2lMQ0pPUVUxRklqb2lUR0ZpZFdGdUlFSmhhbThpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFdEJJaXdpVGtGTlJTSTZJa3hoY21GdWRIVnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRFb2lMQ0pPUVUxRklqb2lUSFZpZFdzZ1RHbHVaMmRoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1UbFVpTENKT1FVMUZJam9pVFdGc2FXNWhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVZWY2lMQ0pPUVUxRklqb2lUSFYzZFdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVVJESWl3aVRrRk5SU0k2SWsxaGJtRmtieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVVNJc0lrNUJUVVVpT2lKTlpYSmhkV3RsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxWeUlzSWs1QlRVVWlPaUpOWVc1dmEzZGhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVeEhJaXdpVGtGTlJTSTZJazFoYkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVDBZaUxDSk9RVTFGSWpvaVRXRjFiV1Z5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSRWNpTENKT1FVMUZJam9pVUdGa1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCSFN5SXNJazVCVFVVaU9pSlFZVzVuYTJGc0lGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzFVaUxDSk9RVTFGSWpvaVVHVnJZVzVpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhYSWl3aVRrRk5SU0k2SWxCaGJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpTU2swaUxDSk9RVTFGSWpvaVVtRnFZU0JCYlhCaGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVFZFaUxDSk9RVTFGSWpvaVUyRnRjR2wwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBReUlzSWs1QlRVVWlPaUpUYjJ4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QVVNJc0lrNUJUVVVpT2lKVGIzSnZibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxRkhJaXdpVGtGTlJTSTZJbE5wYm5SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFKSElpd2lUa0ZOUlNJNklsTmxiV0Z5WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5WUWlJc0lrNUJUVVVpT2lKVGRYSmhZbUY1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTVTBpTENKT1FVMUZJam9pVkdsdGFXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1VTSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQmhibVJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbE1pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJUWld4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVUzBjaUxDSk9RVTFGSWpvaVRHRnRjSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUVU1pTENKT1FVMUZJam9pVkdGdFltOXNZV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk9TaUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFVRlFJaXdpVGtGTlJTSTZJbE5oYldGeWFXNWtZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlRWRWlMQ0pPUVUxRklqb2lRVzFpYjI0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFVHlJc0lrNUJUVVVpT2lKQ1lXNWtkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOVhTd2lRa1JLSWpwYmV5SkRTVlJaSWpvaVFVRlFJaXdpVGtGTlJTSTZJbE5oYldGeWFXNWtZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlRWRWlMQ0pPUVUxRklqb2lRVzFpYjI0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVFZVaUxDSk9RVTFGSWpvaVFtbHRZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUmt0Uklpd2lUa0ZOUlNJNklrWmhhMlpoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkhWRThpTENKT1FVMUZJam9pUjI5eWIyNTBZV3h2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrcFBSeUlzSWs1QlRVVWlPaUpaYjJkNVlXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdENWU0lzSWs1QlRVVWlPaUpMYjNSaFltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFJFa2lMQ0pPUVUxRklqb2lTMlZ1WkdGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVGs4aUxDSk9RVTFGSWpvaVRXVmtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwOUZJaXdpVGtGTlJTSTZJa3QxY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVkVjaUxDSk9RVTFGSWpvaVMyVjBZWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURUpLSWl3aVRrRk5SU0k2SWt4aFluVmhiaUJDWVdwdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hPVlNJc0lrNUJUVVVpT2lKTllXeHBibUYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreFBVQ0lzSWs1QlRVVWlPaUpNYjIxaWIyc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEZWWElpd2lUa0ZOUlNJNklreDFkM1ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUVReUlzSWs1QlRVVWlPaUpOWVc1aFpHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVwVklpd2lUa0ZOUlNJNklrMWhiWFZxZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TMUVpTENKT1FVMUZJam9pVFdWeVlYVnJaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxY2lMQ0pPUVUxRklqb2lUV0Z1YjJ0M1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTVJ5SXNJazVCVFVVaU9pSk5ZV3hoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVTlHSWl3aVRrRk5SU0k2SWsxaGRXMWxjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRrSllJaXdpVGtGTlJTSTZJazVoWW1seVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUkVjaUxDSk9RVTFGSWpvaVVHRmtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzA0aUxDSk9RVTFGSWpvaVVHRnVaMnRoYkdGdUlFSjFiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFNUxJaXdpVGtGTlJTSTZJbEJ2Ym5ScFlXNWhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKU1NrMGlMQ0pPUVUxRklqb2lVbUZxWVNCQmJYQmhkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUZISWl3aVRrRk5SU0k2SWxOcGJuUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxSkhJaXdpVGtGTlJTSTZJbE5sYldGeVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOVlFpSXNJazVCVFVVaU9pSlRkWEpoWW1GNVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU1UwaUxDSk9RVTFGSWpvaVZHbHRhV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVU0lzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJoYm1SaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xNaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCVFpXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVFVNaUxDSk9RVTFGSWpvaVZHRnRZbTlzWVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYUjFBaUxDSk9RVTFGSWpvaVYyRnBibWRoY0hVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMDFZSWl3aVRrRk5SU0k2SWxkaGJXVnVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlYwc0lrMUtWU0k2VzNzaVEwbFVXU0k2SWtGTlVTSXNJazVCVFVVaU9pSkJiV0p2YmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkJVa1FpTENKT1FVMUZJam9pUVd4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUkVvaUxDSk9RVTFGSWpvaVFtRnVhbUZ5YldGemFXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSUElpd2lUa0ZOUlNJNklrSmhibVIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1ZLSWl3aVRrRk5SU0k2SWtKbGNtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKSlN5SXNJazVCVFVVaU9pSkNhV0ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkxVeUlzSWs1QlRVVWlPaUpDWlc1bmEzVnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1RWVWlMQ0pPUVUxRklqb2lRbWx0WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNVRTRpTENKT1FVMUZJam9pUW1Gc2FXdHdZWEJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWRWdpTENKT1FVMUZJam9pUW1GMFlXMGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxWVklpd2lUa0ZOUlNJNklrMTFZWEpoSUVKMWJtZHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKWFdDSXNJazVCVFVVaU9pSkNZVzU1ZFhkaGJtZHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtOSFN5SXNJazVCVFVVaU9pSktZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JGV0NJc0lrNUJUVVVpT2lKRVpXdGhhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNVd2lMQ0pPUVUxRklqb2lSR2xzYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkVTa0lpTENKT1FVMUZJam9pU21GdFlta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwS0lpd2lUa0ZOUlNJNklrcGhlV0Z3ZFhKaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVWRUlpTENKT1FVMUZJam9pVTJsc1lXNW5hWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJVNUZJaXdpVGtGTlJTSTZJa1Z1WkdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSa3RSSWl3aVRrRk5SU0k2SWtaaGEyWmhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtwUFJ5SXNJazVCVFVVaU9pSlpiMmQ1WVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0Q1ZTSXNJazVCVFVVaU9pSkxiM1JoWW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUkVraUxDSk9RVTFGSWpvaVMyVnVaR0Z5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUazhpTENKT1FVMUZJam9pVFdWa1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzA5Rklpd2lUa0ZOUlNJNklrdDFjR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxWRWNpTENKT1FVMUZJam9pUzJWMFlYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFSktJaXdpVGtGTlJTSTZJa3hoWW5WaGJpQkNZV3B2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreExRU0lzSWs1QlRVVWlPaUpNWVhKaGJuUjFhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRGVlhJaXdpVGtGTlJTSTZJa3gxZDNWcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFFUXlJc0lrNUJUVVVpT2lKTllXNWhaRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVEVjaUxDSk9RVTFGSWpvaVRXRnNZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMVBSaUlzSWs1QlRVVWlPaUpOWVhWdFpYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWs1Q1dDSXNJazVCVFVVaU9pSk9ZV0pwY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVJISWl3aVRrRk5SU0k2SWxCaFpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJVNGlMQ0pPUVUxRklqb2lVR1Z1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJbEJIU3lJc0lrNUJUVVVpT2lKUVlXNW5hMkZzSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMwNGlMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJHRnVJRUoxYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMVVpTENKT1FVMUZJam9pVUdWcllXNWlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1UU0lzSWs1QlRVVWlPaUpRWVd4bGJXSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFeFhJaXdpVGtGTlJTSTZJbEJoYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRTVMSWl3aVRrRk5SU0k2SWxCdmJuUnBZVzVoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlNTazBpTENKT1FVMUZJam9pVW1GcVlTQkJiWEJoZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUVkVpTENKT1FVMUZJam9pVTJGdGNHbDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFF5SXNJazVCVFVVaU9pSlRiMnh2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBVU0lzSWs1QlRVVWlPaUpUYjNKdmJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFGSElpd2lUa0ZOUlNJNklsTnBiblJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUpISWl3aVRrRk5SU0k2SWxObGJXRnlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVFVNaUxDSk9RVTFGSWpvaVZHRnRZbTlzWVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYUjFBaUxDSk9RVTFGSWpvaVYyRnBibWRoY0hVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMDFZSWl3aVRrRk5SU0k2SWxkaGJXVnVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlYwc0lsZEhVQ0k2VzNzaVEwbFVXU0k2SWtGTlVTSXNJazVCVFVVaU9pSkJiV0p2YmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkJVa1FpTENKT1FVMUZJam9pUVd4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUkVvaUxDSk9RVTFGSWpvaVFtRnVhbUZ5YldGemFXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSUElpd2lUa0ZOUlNJNklrSmhibVIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1ZLSWl3aVRrRk5SU0k2SWtKbGNtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKSlN5SXNJazVCVFVVaU9pSkNhV0ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkxVeUlzSWs1QlRVVWlPaUpDWlc1bmEzVnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEU5UUlpd2lUa0ZOUlNJNklreHZiV0p2YXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1WVmNpTENKT1FVMUZJam9pVEhWM2RXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVSRElpd2lUa0ZOUlNJNklrMWhibUZrYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TbFVpTENKT1FVMUZJam9pVFdGdGRXcDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVnlJc0lrNUJUVVVpT2lKTllXNXZhM2RoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXhISWl3aVRrRk5SU0k2SWsxaGJHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlQwWWlMQ0pPUVUxRklqb2lUV0YxYldWeVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpPUWxnaUxDSk9RVTFGSWpvaVRtRmlhWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkVSeUlzSWs1QlRVVWlPaUpRWVdSaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVWT0lpd2lUa0ZOUlNJNklsQmxibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlFSMHNpTENKT1FVMUZJam9pVUdGdVoydGhiQ0JRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0T0lpd2lUa0ZOUlNJNklsQmhibWRyWVd4aGJpQkNkVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdFZJaXdpVGtGTlJTSTZJbEJsYTJGdVltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRFMGlMQ0pPUVUxRklqb2lVR0ZzWlcxaVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVZ5SXNJazVCVFVVaU9pSlFZV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk9TeUlzSWs1QlRVVWlPaUpRYjI1MGFXRnVZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVrcE5JaXdpVGtGTlJTSTZJbEpoYW1FZ1FXMXdZWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwMVJJaXdpVGtGTlJTSTZJbE5oYlhCcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDBNaUxDSk9RVTFGSWpvaVUyOXNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQxRWlMQ0pPUVUxRklqb2lVMjl5YjI1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5SUnlJc0lrNUJUVVVpT2lKVGFXNTBZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlNSeUlzSWs1QlRVVWlPaUpUWlcxaGNtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFZVSWlMQ0pPUVUxRklqb2lVM1Z5WVdKaGVXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVsTklpd2lUa0ZOUlNJNklsUnBiV2xyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbEVpTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRWVc1a1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMDFZSWl3aVRrRk5SU0k2SWxkaGJXVnVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlYwc0lrSkxVeUk2VzNzaVEwbFVXU0k2SWtGTlVTSXNJazVCVFVVaU9pSkJiV0p2YmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkJVa1FpTENKT1FVMUZJam9pUVd4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUkVvaUxDSk9RVTFGSWpvaVFtRnVhbUZ5YldGemFXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtWS0lpd2lUa0ZOUlNJNklrSmxjbUYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkpTeUlzSWs1QlRVVWlPaUpDYVdGcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pOVlNJc0lrNUJUVVVpT2lKQ2FXMWhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKUVRpSXNJazVCVFVVaU9pSkNZV3hwYTNCaGNHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVVNDSXNJazVCVFVVaU9pSkNZWFJoYlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWVlVpTENKT1FVMUZJam9pVFhWaGNtRWdRblZ1WjI4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbGRZSWl3aVRrRk5SU0k2SWtKaGJubDFkMkZ1WjJraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRMGRMSWl3aVRrRk5SU0k2SWtwaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFVllJaXdpVGtGTlJTSTZJa1JsYTJGcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JKVENJc0lrNUJUVVVpT2lKRWFXeHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWtSS1FpSXNJazVCVFVVaU9pSktZVzFpYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTa29pTENKT1FVMUZJam9pU21GNVlYQjFjbUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSVVFpSXNJazVCVFVVaU9pSlRhV3hoYm1kcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpGVGtVaUxDSk9RVTFGSWpvaVJXNWtaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKR1MxRWlMQ0pPUVUxRklqb2lSbUZyWm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMEpWSWl3aVRrRk5SU0k2SWt0dmRHRmlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdEVTU0lzSWs1QlRVVWlPaUpMWlc1a1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0T1R5SXNJazVCVFVVaU9pSk5aV1JoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUMFVpTENKT1FVMUZJam9pUzNWd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0VVJ5SXNJazVCVFVVaU9pSkxaWFJoY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNUWtvaUxDSk9RVTFGSWpvaVRHRmlkV0Z1SUVKaGFtOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV0Qklpd2lUa0ZOUlNJNklreGhjbUZ1ZEhWcllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFVk9JaXdpVGtGTlJTSTZJbEJsYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpRUjBzaUxDSk9RVTFGSWpvaVVHRnVaMnRoYkNCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdE9JaXdpVGtGTlJTSTZJbEJoYm1kcllXeGhiaUJDZFc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRWSWl3aVRrRk5SU0k2SWxCbGEyRnVZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURTBpTENKT1FVMUZJam9pVUdGc1pXMWlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1WeUlzSWs1QlRVVWlPaUpRWVd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJPU3lJc0lrNUJUVVVpT2lKUWIyNTBhV0Z1WVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRk5WSWl3aVRrRk5SU0k2SWxCMWRIVnpjMmxpWVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVa3BOSWl3aVRrRk5SU0k2SWxKaGFtRWdRVzF3WVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDFSSWl3aVRrRk5SU0k2SWxOaGJYQnBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQwTWlMQ0pPUVUxRklqb2lVMjlzYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUMUVpTENKT1FVMUZJam9pVTI5eWIyNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUlJ5SXNJazVCVFVVaU9pSlRhVzUwWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5TUnlJc0lrNUJUVVVpT2lKVFpXMWhjbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRWVUlpTENKT1FVMUZJam9pVTNWeVlXSmhlV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFbE5JaXdpVGtGTlJTSTZJbFJwYldscllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xFaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUVlXNWtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFdEhJaXdpVGtGTlJTSTZJa3hoYlhCMWJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkUxRElpd2lUa0ZOUlNJNklsUmhiV0p2YkdGcllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVGtvaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZGSkxJaXdpVGtGTlJTSTZJbFJoY21GcllXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZSRklpd2lUa0ZOUlNJNklsUmxjbTVoZEdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWVkJISWl3aVRrRk5SU0k2SWxWcWRXNW5JRkJoYm1SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjBkUUlpd2lUa0ZOUlNJNklsZGhhVzVuWVhCMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbGROV0NJc0lrNUJUVVVpT2lKWFlXMWxibUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4xZExDSkxUMFVpT2x0N0lrTkpWRmtpT2lKQlRWRWlMQ0pPUVUxRklqb2lRVzFpYjI0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRVkpFSWl3aVRrRk5SU0k2SWtGc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSS0lpd2lUa0ZOUlNJNklrSmhibXBoY20xaGMybHVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRVR5SXNJazVCVFVVaU9pSkNZVzVrZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1YxZ2lMQ0pPUVUxRklqb2lRbUZ1ZVhWM1lXNW5hU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFIwc2lMQ0pPUVUxRklqb2lTbUZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFUlZnaUxDSk9RVTFGSWpvaVJHVnJZV2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrVk9SU0lzSWs1QlRVVWlPaUpGYm1SbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1pMVVNJc0lrNUJUVVVpT2lKR1lXdG1ZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVIxUlBJaXdpVGtGTlJTSTZJa2R2Y205dWRHRnNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKS1QwY2lMQ0pPUVUxRklqb2lXVzluZVdGcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFFsVWlMQ0pPUVUxRklqb2lTMjkwWVdKaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBSSklpd2lUa0ZOUlNJNklrdGxibVJoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDVQSWl3aVRrRk5SU0k2SWsxbFpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0VVJ5SXNJazVCVFVVaU9pSkxaWFJoY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNUWtvaUxDSk9RVTFGSWpvaVRHRmlkV0Z1SUVKaGFtOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV0Qklpd2lUa0ZOUlNJNklreGhjbUZ1ZEhWcllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVDFBaUxDSk9RVTFGSWpvaVRHOXRZbTlySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreFZWeUlzSWs1QlRVVWlPaUpNZFhkMWF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUkVNaUxDSk9RVTFGSWpvaVRXRnVZV1J2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUtWU0lzSWs1QlRVVWlPaUpOWVcxMWFuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0Uklpd2lUa0ZOUlNJNklrMWxjbUYxYTJVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRYSWl3aVRrRk5SU0k2SWsxaGJtOXJkMkZ5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5URWNpTENKT1FVMUZJam9pVFdGc1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxUFJpSXNJazVCVFVVaU9pSk5ZWFZ0WlhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazVDV0NJc0lrNUJUVVVpT2lKT1lXSnBjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUlU0aUxDSk9RVTFGSWpvaVVHVnVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzA0aUxDSk9RVTFGSWpvaVVHRnVaMnRoYkdGdUlFSjFiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFNUxJaXdpVGtGTlJTSTZJbEJ2Ym5ScFlXNWhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKU1NrMGlMQ0pPUVUxRklqb2lVbUZxWVNCQmJYQmhkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUZISWl3aVRrRk5SU0k2SWxOcGJuUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxSkhJaXdpVGtGTlJTSTZJbE5sYldGeVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOVlFpSXNJazVCVFVVaU9pSlRkWEpoWW1GNVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU1UwaUxDSk9RVTFGSWpvaVZHbHRhV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVU0lzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJoYm1SaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVUzBjaUxDSk9RVTFGSWpvaVRHRnRjSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUVU1pTENKT1FVMUZJam9pVkdGdFltOXNZV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk9TaUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwMVlJaXdpVGtGTlJTSTZJbGRoYldWdVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmVjBzSWtkVVR5STZXM3NpUTBsVVdTSTZJa0ZOVVNJc0lrNUJUVVVpT2lKQmJXSnZiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlVrUWlMQ0pPUVUxRklqb2lRV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRW9pTENKT1FVMUZJam9pUW1GdWFtRnliV0Z6YVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVFZVaUxDSk9RVTFGSWpvaVFtbHRZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpLVDBjaUxDSk9RVTFGSWpvaVdXOW5lV0ZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUWxVaUxDSk9RVTFGSWpvaVMyOTBZV0poY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVMwRWlMQ0pPUVUxRklqb2lUR0Z5WVc1MGRXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4VlZ5SXNJazVCVFVVaU9pSk1kWGQxYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5SRU1pTENKT1FVMUZJam9pVFdGdVlXUnZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxS1ZTSXNJazVCVFVVaU9pSk5ZVzExYW5VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRSSWl3aVRrRk5SU0k2SWsxbGNtRjFhMlVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFhJaXdpVGtGTlJTSTZJazFoYm05cmQyRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlRFY2lMQ0pPUVUxRklqb2lUV0ZzWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFQUmlJc0lrNUJUVVVpT2lKTllYVnRaWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNUNXQ0lzSWs1QlRVVWlPaUpPWVdKcGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSVTRpTENKT1FVMUZJam9pVUdWdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxCSFN5SXNJazVCVFVVaU9pSlFZVzVuYTJGc0lGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzFVaUxDSk9RVTFGSWpvaVVHVnJZVzVpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhYSWl3aVRrRk5SU0k2SWxCaGJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpTU2swaUxDSk9RVTFGSWpvaVVtRnFZU0JCYlhCaGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVFZFaUxDSk9RVTFGSWpvaVUyRnRjR2wwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBReUlzSWs1QlRVVWlPaUpUYjJ4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QVVNJc0lrNUJUVVVpT2lKVGIzSnZibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxRkhJaXdpVGtGTlJTSTZJbE5wYm5SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFKSElpd2lUa0ZOUlNJNklsTmxiV0Z5WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5WUWlJc0lrNUJUVVVpT2lKVGRYSmhZbUY1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTVTBpTENKT1FVMUZJam9pVkdsdGFXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1VTSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQmhibVJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbE1pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJUWld4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVUzBjaUxDSk9RVTFGSWpvaVRHRnRjSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUVU1pTENKT1FVMUZJam9pVkdGdFltOXNZV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk9TaUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwMVlJaXdpVGtGTlJTSTZJbGRoYldWdVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmVjBzSWxCTFRpSTZXM3NpUTBsVVdTSTZJa0ZOVVNJc0lrNUJUVVVpT2lKQmJXSnZiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlVrUWlMQ0pPUVUxRklqb2lRV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRW9pTENKT1FVMUZJam9pUW1GdWFtRnliV0Z6YVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVFZVaUxDSk9RVTFGSWpvaVFtbHRZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFOVFJaXdpVGtGTlJTSTZJa3h2YldKdmF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFVk9JaXdpVGtGTlJTSTZJbEJsYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpRUjBzaUxDSk9RVTFGSWpvaVVHRnVaMnRoYkNCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdFZJaXdpVGtGTlJTSTZJbEJsYTJGdVltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRFMGlMQ0pPUVUxRklqb2lVR0ZzWlcxaVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVZ5SXNJazVCVFVVaU9pSlFZV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk9TeUlzSWs1QlRVVWlPaUpRYjI1MGFXRnVZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVrcE5JaXdpVGtGTlJTSTZJbEpoYW1FZ1FXMXdZWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwMVJJaXdpVGtGTlJTSTZJbE5oYlhCcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDBNaUxDSk9RVTFGSWpvaVUyOXNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQxRWlMQ0pPUVUxRklqb2lVMjl5YjI1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5SUnlJc0lrNUJUVVVpT2lKVGFXNTBZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlNSeUlzSWs1QlRVVWlPaUpUWlcxaGNtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFZVSWlMQ0pPUVUxRklqb2lVM1Z5WVdKaGVXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVsTklpd2lUa0ZOUlNJNklsUnBiV2xyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbEVpTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRWVc1a1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZE5XQ0lzSWs1QlRVVWlPaUpYWVcxbGJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKQ1ZWVWlPbHQ3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFVHlJc0lrNUJUVVVpT2lKQ1lXNWtkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkZTaUlzSWs1QlRVVWlPaUpDWlhKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDU1VzaUxDSk9RVTFGSWpvaVFtbGhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1MxTWlMQ0pPUVUxRklqb2lRbVZ1WjJ0MWJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWsxVklpd2lUa0ZOUlNJNklrSnBiV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsQk9JaXdpVGtGTlJTSTZJa0poYkdscmNHRndZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsUklJaXdpVGtGTlJTSTZJa0poZEdGdElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEZWWElpd2lUa0ZOUlNJNklreDFkM1ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUVReUlzSWs1QlRVVWlPaUpOWVc1aFpHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVwVklpd2lUa0ZOUlNJNklrMWhiWFZxZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TMUVpTENKT1FVMUZJam9pVFdWeVlYVnJaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxY2lMQ0pPUVUxRklqb2lUV0Z1YjJ0M1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTVJ5SXNJazVCVFVVaU9pSk5ZV3hoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVTlHSWl3aVRrRk5SU0k2SWsxaGRXMWxjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRrSllJaXdpVGtGTlJTSTZJazVoWW1seVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUkVjaUxDSk9RVTFGSWpvaVVHRmtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkZUaUlzSWs1QlRVVWlPaUpRWlc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVUVkTElpd2lUa0ZOUlNJNklsQmhibWRyWVd3Z1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkxUaUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNZVzRnUW5WdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVlNJc0lrNUJUVVVpT2lKUVpXdGhibUpoY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhOSWl3aVRrRk5SU0k2SWxCaGJHVnRZbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURmNpTENKT1FVMUZJam9pVUdGc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVGtzaUxDSk9RVTFGSWpvaVVHOXVkR2xoYm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJUVlNJc0lrNUJUVVVpT2lKUWRYUjFjM05wWW1GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEpLVFNJc0lrNUJUVVVpT2lKU1lXcGhJRUZ0Y0dGMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5OVVNJc0lrNUJUVVVpT2lKVFlXMXdhWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOURJaXdpVGtGTlJTSTZJbE52Ykc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlSSWl3aVRrRk5SU0k2SWxOdmNtOXVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVVY2lMQ0pPUVUxRklqb2lVMmx1ZEdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMVZDSWl3aVRrRk5SU0k2SWxOMWNtRmlZWGxoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkpUU0lzSWs1QlRVVWlPaUpVYVcxcGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVwUklpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHRnVaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVeUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRk5sYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJMUnlJc0lrNUJUVVVpT2lKTVlXMXdkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk5ReUlzSWs1QlRVVWlPaUpVWVcxaWIyeGhhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFNUtJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJTU3lJc0lrNUJUVVVpT2lKVVlYSmhhMkZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxWUVJ5SXNJazVCVFVVaU9pSlZhblZ1WnlCUVlXNWtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZEhVQ0lzSWs1QlRVVWlPaUpYWVdsdVoyRndkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFRWZ2lMQ0pPUVUxRklqb2lWMkZ0Wlc1aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlYU3dpVTA5RElqcGJleUpEU1ZSWklqb2lRVTFSSWl3aVRrRk5SU0k2SWtGdFltOXVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGU1JDSXNJazVCVFVVaU9pSkJiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSVW9pTENKT1FVMUZJam9pUW1WeVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtsTElpd2lUa0ZOUlNJNklrSnBZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrdFRJaXdpVGtGTlJTSTZJa0psYm1kcmRXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTlZTSXNJazVCVFVVaU9pSkNhVzFoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlFUaUlzSWs1QlRVVWlPaUpDWVd4cGEzQmhjR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlVTQ0lzSWs1QlRVVWlPaUpDWVhSaGJTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxkWUlpd2lUa0ZOUlNJNklrSmhibmwxZDJGdVoya2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRVZZSWl3aVRrRk5SU0k2SWtSbGEyRnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSSlRDSXNJazVCVFVVaU9pSkVhV3hwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUktRaUlzSWs1QlRVVWlPaUpLWVcxaWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU2tvaUxDSk9RVTFGSWpvaVNtRjVZWEIxY21FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlVRaUlzSWs1QlRVVWlPaUpUYVd4aGJtZHBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRlRrVWlMQ0pPUVUxRklqb2lSVzVrWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkdTMUVpTENKT1FVMUZJam9pUm1GclptRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtkVVR5SXNJazVCVFVVaU9pSkhiM0p2Ym5SaGJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pU2s5SElpd2lUa0ZOUlNJNklsbHZaM2xoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBKVklpd2lUa0ZOUlNJNklrdHZkR0ZpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RFU1NJc0lrNUJUVVVpT2lKTFpXNWtZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdE9UeUlzSWs1QlRVVWlPaUpOWldSaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVDBVaUxDSk9RVTFGSWpvaVMzVndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdFVSeUlzSWs1QlRVVWlPaUpMWlhSaGNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVFrb2lMQ0pPUVUxRklqb2lUR0ZpZFdGdUlFSmhhbThpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFdEJJaXdpVGtGTlJTSTZJa3hoY21GdWRIVnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRFb2lMQ0pPUVUxRklqb2lUSFZpZFdzZ1RHbHVaMmRoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1WVmNpTENKT1FVMUZJam9pVEhWM2RXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVSRElpd2lUa0ZOUlNJNklrMWhibUZrYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TbFVpTENKT1FVMUZJam9pVFdGdGRXcDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVnlJc0lrNUJUVVVpT2lKTllXNXZhM2RoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXhISWl3aVRrRk5SU0k2SWsxaGJHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlQwWWlMQ0pPUVUxRklqb2lUV0YxYldWeVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpPUWxnaUxDSk9RVTFGSWpvaVRtRmlhWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkVSeUlzSWs1QlRVVWlPaUpRWVdSaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVWT0lpd2lUa0ZOUlNJNklsQmxibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlFSMHNpTENKT1FVMUZJam9pVUdGdVoydGhiQ0JRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0T0lpd2lUa0ZOUlNJNklsQmhibWRyWVd4aGJpQkNkVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdFZJaXdpVGtGTlJTSTZJbEJsYTJGdVltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRFMGlMQ0pPUVUxRklqb2lVR0ZzWlcxaVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVZ5SXNJazVCVFVVaU9pSlFZV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk9TeUlzSWs1QlRVVWlPaUpRYjI1MGFXRnVZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVGTlZJaXdpVGtGTlJTSTZJbEIxZEhWemMybGlZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVrcE5JaXdpVGtGTlJTSTZJbEpoYW1FZ1FXMXdZWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwMVJJaXdpVGtGTlJTSTZJbE5oYlhCcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDFFaUxDSk9RVTFGSWpvaVUyOXliMjVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlJSeUlzSWs1QlRVVWlPaUpUYVc1MFlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOU1J5SXNJazVCVFVVaU9pSlRaVzFoY21GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVlVJaUxDSk9RVTFGSWpvaVUzVnlZV0poZVdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRWxOSWl3aVRrRk5SU0k2SWxScGJXbHJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsRWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFZVzVrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBUSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVTJWc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZE5XQ0lzSWs1QlRVVWlPaUpYWVcxbGJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKTlRFY2lPbHQ3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1YxZ2lMQ0pPUVUxRklqb2lRbUZ1ZVhWM1lXNW5hU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFIwc2lMQ0pPUVUxRklqb2lTbUZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFUlZnaUxDSk9RVTFGSWpvaVJHVnJZV2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrVk9SU0lzSWs1QlRVVWlPaUpGYm1SbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1pMVVNJc0lrNUJUVVVpT2lKR1lXdG1ZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVIxUlBJaXdpVGtGTlJTSTZJa2R2Y205dWRHRnNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKS1QwY2lMQ0pPUVUxRklqb2lXVzluZVdGcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFFsVWlMQ0pPUVUxRklqb2lTMjkwWVdKaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBSSklpd2lUa0ZOUlNJNklrdGxibVJoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDVQSWl3aVRrRk5SU0k2SWsxbFpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0UFJTSXNJazVCVFVVaU9pSkxkWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMVJISWl3aVRrRk5SU0k2SWt0bGRHRndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreENTaUlzSWs1QlRVVWlPaUpNWVdKMVlXNGdRbUZxYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1TMEVpTENKT1FVMUZJam9pVEdGeVlXNTBkV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE1TaUlzSWs1QlRVVWlPaUpNZFdKMWF5Qk1hVzVuWjJGMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hWVnlJc0lrNUJUVVVpT2lKTWRYZDFheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlJFTWlMQ0pPUVUxRklqb2lUV0Z1WVdSdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFLVlNJc0lrNUJUVVVpT2lKTllXMTFhblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVDBZaUxDSk9RVTFGSWpvaVRXRjFiV1Z5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk9RbGdpTENKT1FVMUZJam9pVG1GaWFYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCRVJ5SXNJazVCVFVVaU9pSlFZV1JoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVZPSWl3aVRrRk5SU0k2SWxCbGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKUVIwc2lMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJDQlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRPSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3hoYmlCQ2RXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0Vklpd2lUa0ZOUlNJNklsQmxhMkZ1WW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEUwaUxDSk9RVTFGSWpvaVVHRnNaVzFpWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVnlJc0lrNUJUVVVpT2lKUVlXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCT1N5SXNJazVCVFVVaU9pSlFiMjUwYVdGdVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUZOVklpd2lUa0ZOUlNJNklsQjFkSFZ6YzJsaVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVWtwTklpd2lUa0ZOUlNJNklsSmhhbUVnUVcxd1lYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTAxUklpd2lUa0ZOUlNJNklsTmhiWEJwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUME1pTENKT1FVMUZJam9pVTI5c2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDFFaUxDSk9RVTFGSWpvaVUyOXliMjVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlJSeUlzSWs1QlRVVWlPaUpUYVc1MFlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOU1J5SXNJazVCVFVVaU9pSlRaVzFoY21GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVlVJaUxDSk9RVTFGSWpvaVUzVnlZV0poZVdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRWxOSWl3aVRrRk5SU0k2SWxScGJXbHJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsRWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFZVzVrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBUSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVTJWc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZE5XQ0lzSWs1QlRVVWlPaUpYWVcxbGJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKQ1YxZ2lPbHQ3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFIwc2lMQ0pPUVUxRklqb2lTbUZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFUlZnaUxDSk9RVTFGSWpvaVJHVnJZV2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrVk9SU0lzSWs1QlRVVWlPaUpGYm1SbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1pMVVNJc0lrNUJUVVVpT2lKR1lXdG1ZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVIxUlBJaXdpVGtGTlJTSTZJa2R2Y205dWRHRnNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKS1QwY2lMQ0pPUVUxRklqb2lXVzluZVdGcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFFsVWlMQ0pPUVUxRklqb2lTMjkwWVdKaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBSSklpd2lUa0ZOUlNJNklrdGxibVJoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDVQSWl3aVRrRk5SU0k2SWsxbFpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0UFJTSXNJazVCVFVVaU9pSkxkWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMVJISWl3aVRrRk5SU0k2SWt0bGRHRndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreENTaUlzSWs1QlRVVWlPaUpNWVdKMVlXNGdRbUZxYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1TMEVpTENKT1FVMUZJam9pVEdGeVlXNTBkV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE1TaUlzSWs1QlRVVWlPaUpNZFdKMWF5Qk1hVzVuWjJGMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hWVnlJc0lrNUJUVVVpT2lKTWRYZDFheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlJFTWlMQ0pPUVUxRklqb2lUV0Z1WVdSdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFLVlNJc0lrNUJUVVVpT2lKTllXMTFhblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVEVjaUxDSk9RVTFGSWpvaVRXRnNZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMVBSaUlzSWs1QlRVVWlPaUpOWVhWdFpYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWs1Q1dDSXNJazVCVFVVaU9pSk9ZV0pwY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVJISWl3aVRrRk5SU0k2SWxCaFpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJVNGlMQ0pPUVUxRklqb2lVR1Z1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJbEJIU3lJc0lrNUJUVVVpT2lKUVlXNW5hMkZzSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMwNGlMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJHRnVJRUoxYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMVVpTENKT1FVMUZJam9pVUdWcllXNWlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1UU0lzSWs1QlRVVWlPaUpRWVd4bGJXSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFeFhJaXdpVGtGTlJTSTZJbEJoYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRTVMSWl3aVRrRk5SU0k2SWxCdmJuUnBZVzVoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFVMVVpTENKT1FVMUZJam9pVUhWMGRYTnphV0poZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlNTazBpTENKT1FVMUZJam9pVW1GcVlTQkJiWEJoZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUVkVpTENKT1FVMUZJam9pVTJGdGNHbDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFF5SXNJazVCVFVVaU9pSlRiMnh2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBVU0lzSWs1QlRVVWlPaUpUYjNKdmJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFGSElpd2lUa0ZOUlNJNklsTnBiblJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUpISWl3aVRrRk5SU0k2SWxObGJXRnlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsTWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlRaV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTMGNpTENKT1FVMUZJam9pVEdGdGNIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVRVTWlMQ0pPUVUxRklqb2lWR0Z0WW05c1lXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxST1NpSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVVa3NpTENKT1FVMUZJam9pVkdGeVlXdGhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVZFVWlMQ0pPUVUxRklqb2lWR1Z5Ym1GMFpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpWVUVjaUxDSk9RVTFGSWpvaVZXcDFibWNnVUdGdVpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFIxQWlMQ0pPUVUxRklqb2lWMkZwYm1kaGNIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjAxWUlpd2lUa0ZOUlNJNklsZGhiV1Z1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZWMHNJbEJPU3lJNlczc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFVk9JaXdpVGtGTlJTSTZJbEJsYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpRUjBzaUxDSk9RVTFGSWpvaVVHRnVaMnRoYkNCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdE9JaXdpVGtGTlJTSTZJbEJoYm1kcllXeGhiaUJDZFc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRWSWl3aVRrRk5SU0k2SWxCbGEyRnVZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURTBpTENKT1FVMUZJam9pVUdGc1pXMWlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1WeUlzSWs1QlRVVWlPaUpRWVd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJUVlNJc0lrNUJUVVVpT2lKUWRYUjFjM05wWW1GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEpLVFNJc0lrNUJUVVVpT2lKU1lXcGhJRUZ0Y0dGMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5OVVNJc0lrNUJUVVVpT2lKVFlXMXdhWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOURJaXdpVGtGTlJTSTZJbE52Ykc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlSSWl3aVRrRk5SU0k2SWxOdmNtOXVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVVY2lMQ0pPUVUxRklqb2lVMmx1ZEdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMVZDSWl3aVRrRk5SU0k2SWxOMWNtRmlZWGxoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkpUU0lzSWs1QlRVVWlPaUpVYVcxcGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVwUklpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHRnVaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVeUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRk5sYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJMUnlJc0lrNUJUVVVpT2lKTVlXMXdkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk5ReUlzSWs1QlRVVWlPaUpVWVcxaWIyeGhhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFNUtJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJTU3lJc0lrNUJUVVVpT2lKVVlYSmhhMkZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxWUVJ5SXNJazVCVFVVaU9pSlZhblZ1WnlCUVlXNWtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZEhVQ0lzSWs1QlRVVWlPaUpYWVdsdVoyRndkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFRWZ2lMQ0pPUVUxRklqb2lWMkZ0Wlc1aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0ZOVVNJc0lrNUJUVVVpT2lKQmJXSnZiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlVrUWlMQ0pPUVUxRklqb2lRV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRW9pTENKT1FVMUZJam9pUW1GdWFtRnliV0Z6YVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1ZLSWl3aVRrRk5SU0k2SWtKbGNtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKSlN5SXNJazVCVFVVaU9pSkNhV0ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkxVeUlzSWs1QlRVVWlPaUpDWlc1bmEzVnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1RWVWlMQ0pPUVUxRklqb2lRbWx0WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNVRTRpTENKT1FVMUZJam9pUW1Gc2FXdHdZWEJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWRWdpTENKT1FVMUZJam9pUW1GMFlXMGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxWVklpd2lUa0ZOUlNJNklrMTFZWEpoSUVKMWJtZHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKWFdDSXNJazVCVFVVaU9pSkNZVzU1ZFhkaGJtZHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtOSFN5SXNJazVCVFVVaU9pSktZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JGV0NJc0lrNUJUVVVpT2lKRVpXdGhhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNVd2lMQ0pPUVUxRklqb2lSR2xzYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkVTa0lpTENKT1FVMUZJam9pU21GdFlta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwS0lpd2lUa0ZOUlNJNklrcGhlV0Z3ZFhKaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVWRUlpTENKT1FVMUZJam9pVTJsc1lXNW5hWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJVNUZJaXdpVGtGTlJTSTZJa1Z1WkdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSa3RSSWl3aVRrRk5SU0k2SWtaaGEyWmhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtwUFJ5SXNJazVCVFVVaU9pSlpiMmQ1WVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0RVNTSXNJazVCVFVVaU9pSkxaVzVrWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RPVHlJc0lrNUJUVVVpT2lKTlpXUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFQwVWlMQ0pPUVUxRklqb2lTM1Z3WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RVUnlJc0lrNUJUVVVpT2lKTFpYUmhjR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1Ra29pTENKT1FVMUZJam9pVEdGaWRXRnVJRUpoYW04aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURXRCSWl3aVRrRk5SU0k2SWt4aGNtRnVkSFZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1URW9pTENKT1FVMUZJam9pVEhWaWRXc2dUR2x1WjJkaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVDFBaUxDSk9RVTFGSWpvaVRHOXRZbTlySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreFZWeUlzSWs1QlRVVWlPaUpNZFhkMWF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUkVNaUxDSk9RVTFGSWpvaVRXRnVZV1J2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUtWU0lzSWs1QlRVVWlPaUpOWVcxMWFuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKVFRWRWlPbHQ3SWtOSlZGa2lPaUpCUVZBaUxDSk9RVTFGSWpvaVUyRnRZWEpwYm1SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0ZOVVNJc0lrNUJUVVVpT2lKQmJXSnZiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlVrUWlMQ0pPUVUxRklqb2lRV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRW9pTENKT1FVMUZJam9pUW1GdWFtRnliV0Z6YVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVFZVaUxDSk9RVTFGSWpvaVFtbHRZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEU5UUlpd2lUa0ZOUlNJNklreHZiV0p2YXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1WVmNpTENKT1FVMUZJam9pVEhWM2RXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVSRElpd2lUa0ZOUlNJNklrMWhibUZrYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TbFVpTENKT1FVMUZJam9pVFdGdGRXcDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVnlJc0lrNUJUVVVpT2lKTllXNXZhM2RoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXhISWl3aVRrRk5SU0k2SWsxaGJHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlQwWWlMQ0pPUVUxRklqb2lUV0YxYldWeVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpPUWxnaUxDSk9RVTFGSWpvaVRtRmlhWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkVSeUlzSWs1QlRVVWlPaUpRWVdSaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVWT0lpd2lUa0ZOUlNJNklsQmxibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSlFSMHNpTENKT1FVMUZJam9pVUdGdVoydGhiQ0JRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0T0lpd2lUa0ZOUlNJNklsQmhibWRyWVd4aGJpQkNkVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdFZJaXdpVGtGTlJTSTZJbEJsYTJGdVltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRFMGlMQ0pPUVUxRklqb2lVR0ZzWlcxaVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVZ5SXNJazVCVFVVaU9pSlFZV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk9TeUlzSWs1QlRVVWlPaUpRYjI1MGFXRnVZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVrcE5JaXdpVGtGTlJTSTZJbEpoYW1FZ1FXMXdZWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOURJaXdpVGtGTlJTSTZJbE52Ykc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlSSWl3aVRrRk5SU0k2SWxOdmNtOXVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVVY2lMQ0pPUVUxRklqb2lVMmx1ZEdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMVZDSWl3aVRrRk5SU0k2SWxOMWNtRmlZWGxoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkpUU0lzSWs1QlRVVWlPaUpVYVcxcGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVwUklpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHRnVaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVeUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRk5sYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJMUnlJc0lrNUJUVVVpT2lKTVlXMXdkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk5ReUlzSWs1QlRVVWlPaUpVWVcxaWIyeGhhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFNUtJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJTU3lJc0lrNUJUVVVpT2lKVVlYSmhhMkZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxWUVJ5SXNJazVCVFVVaU9pSlZhblZ1WnlCUVlXNWtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZEhVQ0lzSWs1QlRVVWlPaUpYWVdsdVoyRndkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFRWZ2lMQ0pPUVUxRklqb2lWMkZ0Wlc1aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlYU3dpVUV4WElqcGJleUpEU1ZSWklqb2lRVUZRSWl3aVRrRk5SU0k2SWxOaGJXRnlhVzVrWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkJUVkVpTENKT1FVMUZJam9pUVcxaWIyNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSS0lpd2lUa0ZOUlNJNklrSmhibXBoY20xaGMybHVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRVR5SXNJazVCVFVVaU9pSkNZVzVrZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1YxZ2lMQ0pPUVUxRklqb2lRbUZ1ZVhWM1lXNW5hU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFIwc2lMQ0pPUVUxRklqb2lTbUZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFUlZnaUxDSk9RVTFGSWpvaVJHVnJZV2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrWkxVU0lzSWs1QlRVVWlPaUpHWVd0bVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUjFSUElpd2lUa0ZOUlNJNklrZHZjbTl1ZEdGc2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpLVDBjaUxDSk9RVTFGSWpvaVdXOW5lV0ZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUWxVaUxDSk9RVTFGSWpvaVMyOTBZV0poY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVMwRWlMQ0pPUVUxRklqb2lUR0Z5WVc1MGRXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TVNpSXNJazVCVFVVaU9pSk1kV0oxYXlCTWFXNW5aMkYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE9WU0lzSWs1QlRVVWlPaUpOWVd4cGJtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4VlZ5SXNJazVCVFVVaU9pSk1kWGQxYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5SRU1pTENKT1FVMUZJam9pVFdGdVlXUnZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxS1ZTSXNJazVCVFVVaU9pSk5ZVzExYW5VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRSSWl3aVRrRk5SU0k2SWsxbGNtRjFhMlVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFhJaXdpVGtGTlJTSTZJazFoYm05cmQyRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlRFY2lMQ0pPUVUxRklqb2lUV0ZzWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFQUmlJc0lrNUJUVVVpT2lKTllYVnRaWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNUNXQ0lzSWs1QlRVVWlPaUpPWVdKcGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSVTRpTENKT1FVMUZJam9pVUdWdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxCSFN5SXNJazVCVFVVaU9pSlFZVzVuYTJGc0lGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzFVaUxDSk9RVTFGSWpvaVVHVnJZVzVpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRTVMSWl3aVRrRk5SU0k2SWxCdmJuUnBZVzVoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFVMVVpTENKT1FVMUZJam9pVUhWMGRYTnphV0poZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlNTazBpTENKT1FVMUZJam9pVW1GcVlTQkJiWEJoZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUVkVpTENKT1FVMUZJam9pVTJGdGNHbDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFF5SXNJazVCVFVVaU9pSlRiMnh2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBVU0lzSWs1QlRVVWlPaUpUYjNKdmJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFGSElpd2lUa0ZOUlNJNklsTnBiblJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUpISWl3aVRrRk5SU0k2SWxObGJXRnlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsTWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlRaV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTMGNpTENKT1FVMUZJam9pVEdGdGNIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVRVTWlMQ0pPUVUxRklqb2lWR0Z0WW05c1lXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxST1NpSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVVa3NpTENKT1FVMUZJam9pVkdGeVlXdGhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVZFVWlMQ0pPUVUxRklqb2lWR1Z5Ym1GMFpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpWVUVjaUxDSk9RVTFGSWpvaVZXcDFibWNnVUdGdVpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFIxQWlMQ0pPUVUxRklqb2lWMkZwYm1kaGNIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjAxWUlpd2lUa0ZOUlNJNklsZGhiV1Z1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZWMHNJazFQUmlJNlczc2lRMGxVV1NJNklrRk5VU0lzSWs1QlRVVWlPaUpCYldKdmJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpCVWtRaUxDSk9RVTFGSWpvaVFXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JFb2lMQ0pPUVUxRklqb2lRbUZ1YW1GeWJXRnphVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrUlBJaXdpVGtGTlJTSTZJa0poYm1SMWJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtWS0lpd2lUa0ZOUlNJNklrSmxjbUYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkpTeUlzSWs1QlRVVWlPaUpDYVdGcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pMVXlJc0lrNUJUVVVpT2lKQ1pXNW5hM1ZzZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNUVlVpTENKT1FVMUZJam9pUW1sdFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVUU0aUxDSk9RVTFGSWpvaVFtRnNhV3R3WVhCaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVkVnaUxDSk9RVTFGSWpvaVFtRjBZVzBpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsVlZJaXdpVGtGTlJTSTZJazExWVhKaElFSjFibWR2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlhXQ0lzSWs1QlRVVWlPaUpDWVc1NWRYZGhibWRwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrTkhTeUlzSWs1QlRVVWlPaUpLWVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSRldDSXNJazVCVFVVaU9pSkVaV3RoYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTVXdpTENKT1FVMUZJam9pUkdsc2FTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpFU2tJaUxDSk9RVTFGSWpvaVNtRnRZbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFcEtJaXdpVGtGTlJTSTZJa3BoZVdGd2RYSmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSUVV5SXNJazVCVFVVaU9pSkVaVzV3WVhOaGNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVkVJaUxDSk9RVTFGSWpvaVUybHNZVzVuYVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSVTVGSWl3aVRrRk5SU0k2SWtWdVpHVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUmt0Uklpd2lUa0ZOUlNJNklrWmhhMlpoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkhWRThpTENKT1FVMUZJam9pUjI5eWIyNTBZV3h2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrcFBSeUlzSWs1QlRVVWlPaUpaYjJkNVlXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdENWU0lzSWs1QlRVVWlPaUpMYjNSaFltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFJFa2lMQ0pPUVUxRklqb2lTMlZ1WkdGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVGs4aUxDSk9RVTFGSWpvaVRXVmtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwOUZJaXdpVGtGTlJTSTZJa3QxY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVkVjaUxDSk9RVTFGSWpvaVMyVjBZWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURUpLSWl3aVRrRk5SU0k2SWt4aFluVmhiaUJDWVdwdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hMUVNJc0lrNUJUVVVpT2lKTVlYSmhiblIxYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURXhLSWl3aVRrRk5SU0k2SWt4MVluVnJJRXhwYm1kbllYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEU5UUlpd2lUa0ZOUlNJNklreHZiV0p2YXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1WVmNpTENKT1FVMUZJam9pVEhWM2RXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVSRElpd2lUa0ZOUlNJNklrMWhibUZrYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TbFVpTENKT1FVMUZJam9pVFdGdGRXcDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVnlJc0lrNUJUVVVpT2lKTllXNXZhM2RoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXhISWl3aVRrRk5SU0k2SWsxaGJHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFVk9JaXdpVGtGTlJTSTZJbEJsYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpRUjBzaUxDSk9RVTFGSWpvaVVHRnVaMnRoYkNCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdE9JaXdpVGtGTlJTSTZJbEJoYm1kcllXeGhiaUJDZFc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRWSWl3aVRrRk5SU0k2SWxCbGEyRnVZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURTBpTENKT1FVMUZJam9pVUdGc1pXMWlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1WeUlzSWs1QlRVVWlPaUpRWVd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJPU3lJc0lrNUJUVVVpT2lKUWIyNTBhV0Z1WVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRk5WSWl3aVRrRk5SU0k2SWxCMWRIVnpjMmxpWVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVa3BOSWl3aVRrRk5SU0k2SWxKaGFtRWdRVzF3WVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDFSSWl3aVRrRk5SU0k2SWxOaGJYQnBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQwTWlMQ0pPUVUxRklqb2lVMjlzYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUMUVpTENKT1FVMUZJam9pVTI5eWIyNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUlJ5SXNJazVCVFVVaU9pSlRhVzUwWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5TUnlJc0lrNUJUVVVpT2lKVFpXMWhjbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRWVUlpTENKT1FVMUZJam9pVTNWeVlXSmhlV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFbE5JaXdpVGtGTlJTSTZJbFJwYldscllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xFaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUVlXNWtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFdEhJaXdpVGtGTlJTSTZJa3hoYlhCMWJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkUxRElpd2lUa0ZOUlNJNklsUmhiV0p2YkdGcllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVGtvaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZGSkxJaXdpVGtGTlJTSTZJbFJoY21GcllXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZSRklpd2lUa0ZOUlNJNklsUmxjbTVoZEdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWVkJISWl3aVRrRk5SU0k2SWxWcWRXNW5JRkJoYm1SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjBkUUlpd2lUa0ZOUlNJNklsZGhhVzVuWVhCMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbGROV0NJc0lrNUJUVVVpT2lKWFlXMWxibUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4xZExDSk5TMUVpT2x0N0lrTkpWRmtpT2lKQlRWRWlMQ0pPUVUxRklqb2lRVzFpYjI0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRVkpFSWl3aVRrRk5SU0k2SWtGc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSS0lpd2lUa0ZOUlNJNklrSmhibXBoY20xaGMybHVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRVR5SXNJazVCVFVVaU9pSkNZVzVrZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1YxZ2lMQ0pPUVUxRklqb2lRbUZ1ZVhWM1lXNW5hU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFIwc2lMQ0pPUVUxRklqb2lTbUZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFUlZnaUxDSk9RVTFGSWpvaVJHVnJZV2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrVk9SU0lzSWs1QlRVVWlPaUpGYm1SbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1pMVVNJc0lrNUJUVVVpT2lKR1lXdG1ZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVIxUlBJaXdpVGtGTlJTSTZJa2R2Y205dWRHRnNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKS1QwY2lMQ0pPUVUxRklqb2lXVzluZVdGcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFFsVWlMQ0pPUVUxRklqb2lTMjkwWVdKaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBSSklpd2lUa0ZOUlNJNklrdGxibVJoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDVQSWl3aVRrRk5SU0k2SWsxbFpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0UFJTSXNJazVCVFVVaU9pSkxkWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMVJISWl3aVRrRk5SU0k2SWt0bGRHRndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreENTaUlzSWs1QlRVVWlPaUpNWVdKMVlXNGdRbUZxYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1TMEVpTENKT1FVMUZJam9pVEdGeVlXNTBkV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE1TaUlzSWs1QlRVVWlPaUpNZFdKMWF5Qk1hVzVuWjJGMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hQVUNJc0lrNUJUVVVpT2lKTWIyMWliMnNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRGVlhJaXdpVGtGTlJTSTZJa3gxZDNWcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFFUXlJc0lrNUJUVVVpT2lKTllXNWhaRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVcFZJaXdpVGtGTlJTSTZJazFoYlhWcWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFjaUxDSk9RVTFGSWpvaVRXRnViMnQzWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFNUnlJc0lrNUJUVVVpT2lKTllXeGhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVOUdJaXdpVGtGTlJTSTZJazFoZFcxbGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVGtKWUlpd2lUa0ZOUlNJNklrNWhZbWx5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSRWNpTENKT1FVMUZJam9pVUdGa1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCSFN5SXNJazVCVFVVaU9pSlFZVzVuYTJGc0lGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzFVaUxDSk9RVTFGSWpvaVVHVnJZVzVpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhYSWl3aVRrRk5SU0k2SWxCaGJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVTFVaUxDSk9RVTFGSWpvaVVIVjBkWE56YVdKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpTU2swaUxDSk9RVTFGSWpvaVVtRnFZU0JCYlhCaGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVFZFaUxDSk9RVTFGSWpvaVUyRnRjR2wwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBReUlzSWs1QlRVVWlPaUpUYjJ4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QVVNJc0lrNUJUVVVpT2lKVGIzSnZibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxRkhJaXdpVGtGTlJTSTZJbE5wYm5SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFKSElpd2lUa0ZOUlNJNklsTmxiV0Z5WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5WUWlJc0lrNUJUVVVpT2lKVGRYSmhZbUY1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTVTBpTENKT1FVMUZJam9pVkdsdGFXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1VTSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQmhibVJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbE1pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJUWld4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVUzBjaUxDSk9RVTFGSWpvaVRHRnRjSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUVU1pTENKT1FVMUZJam9pVkdGdFltOXNZV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk9TaUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwMVlJaXdpVGtGTlJTSTZJbGRoYldWdVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmVjBzSWt4VlZ5STZXM3NpUTBsVVdTSTZJa0ZOVVNJc0lrNUJUVVVpT2lKQmJXSnZiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlVrUWlMQ0pPUVUxRklqb2lRV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRW9pTENKT1FVMUZJam9pUW1GdWFtRnliV0Z6YVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVFZVaUxDSk9RVTFGSWpvaVFtbHRZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFOVFJaXdpVGtGTlJTSTZJa3h2YldKdmF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUkVNaUxDSk9RVTFGSWpvaVRXRnVZV1J2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUtWU0lzSWs1QlRVVWlPaUpOWVcxMWFuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0Uklpd2lUa0ZOUlNJNklrMWxjbUYxYTJVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRYSWl3aVRrRk5SU0k2SWsxaGJtOXJkMkZ5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5URWNpTENKT1FVMUZJam9pVFdGc1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxUFJpSXNJazVCVFVVaU9pSk5ZWFZ0WlhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazVDV0NJc0lrNUJUVVVpT2lKT1lXSnBjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUlU0aUxDSk9RVTFGSWpvaVVHVnVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzA0aUxDSk9RVTFGSWpvaVVHRnVaMnRoYkdGdUlFSjFiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFNUxJaXdpVGtGTlJTSTZJbEJ2Ym5ScFlXNWhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKU1NrMGlMQ0pPUVUxRklqb2lVbUZxWVNCQmJYQmhkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUZISWl3aVRrRk5SU0k2SWxOcGJuUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxSkhJaXdpVGtGTlJTSTZJbE5sYldGeVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOVlFpSXNJazVCVFVVaU9pSlRkWEpoWW1GNVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU1UwaUxDSk9RVTFGSWpvaVZHbHRhV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVU0lzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJoYm1SaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xNaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCVFpXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVFVNaUxDSk9RVTFGSWpvaVZHRnRZbTlzWVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYUjFBaUxDSk9RVTFGSWpvaVYyRnBibWRoY0hVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMDFZSWl3aVRrRk5SU0k2SWxkaGJXVnVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlYwc0lrdEVTU0k2VzNzaVEwbFVXU0k2SWsxRVF5SXNJazVCVFVVaU9pSk5ZVzVoWkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXBWSWl3aVRrRk5SU0k2SWsxaGJYVnFkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxRWlMQ0pPUVUxRklqb2lUV1Z5WVhWclpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFjaUxDSk9RVTFGSWpvaVRXRnViMnQzWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFNUnlJc0lrNUJUVVVpT2lKTllXeGhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVOUdJaXdpVGtGTlJTSTZJazFoZFcxbGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVGtKWUlpd2lUa0ZOUlNJNklrNWhZbWx5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSRWNpTENKT1FVMUZJam9pVUdGa1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCRlRpSXNJazVCVFVVaU9pSlFaVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRWRMSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3dnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFRpSXNJazVCVFVVaU9pSlFZVzVuYTJGc1lXNGdRblZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkxWU0lzSWs1QlRVVWlPaUpRWld0aGJtSmhjblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFeE5JaXdpVGtGTlJTSTZJbEJoYkdWdFltRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRGY2lMQ0pPUVUxRklqb2lVR0ZzZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFUa3NpTENKT1FVMUZJam9pVUc5dWRHbGhibUZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsSktUU0lzSWs1QlRVVWlPaUpTWVdwaElFRnRjR0YwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTk5VU0lzSWs1QlRVVWlPaUpUWVcxd2FYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5RElpd2lUa0ZOUlNJNklsTnZiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOVJJaXdpVGtGTlJTSTZJbE52Y205dVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVVVjaUxDSk9RVTFGSWpvaVUybHVkR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVa2NpTENKT1FVMUZJam9pVTJWdFlYSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxVkNJaXdpVGtGTlJTSTZJbE4xY21GaVlYbGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSSlRTSXNJazVCVFVVaU9pSlVhVzFwYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBSSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdGdVpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1V5SXNJazVCVFVVaU9pSlVZVzVxZFc1bklGTmxiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkxSeUlzSWs1QlRVVWlPaUpNWVcxd2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSTlF5SXNJazVCVFVVaU9pSlVZVzFpYjJ4aGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkU1S0lpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlNTeUlzSWs1QlRVVWlPaUpVWVhKaGEyRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSVVJTSXNJazVCVFVVaU9pSlVaWEp1WVhSbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFZRUnlJc0lrNUJUVVVpT2lKVmFuVnVaeUJRWVc1a1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxkSFVDSXNJazVCVFVVaU9pSlhZV2x1WjJGd2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYVFZnaUxDSk9RVTFGSWpvaVYyRnRaVzVoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrRk5VU0lzSWs1QlRVVWlPaUpCYldKdmJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpCVWtRaUxDSk9RVTFGSWpvaVFXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JFb2lMQ0pPUVUxRklqb2lRbUZ1YW1GeWJXRnphVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrUlBJaXdpVGtGTlJTSTZJa0poYm1SMWJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtWS0lpd2lUa0ZOUlNJNklrSmxjbUYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkpTeUlzSWs1QlRVVWlPaUpDYVdGcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pMVXlJc0lrNUJUVVVpT2lKQ1pXNW5hM1ZzZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNUVlVpTENKT1FVMUZJam9pUW1sdFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVUU0aUxDSk9RVTFGSWpvaVFtRnNhV3R3WVhCaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVkVnaUxDSk9RVTFGSWpvaVFtRjBZVzBpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsVlZJaXdpVGtGTlJTSTZJazExWVhKaElFSjFibWR2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlhXQ0lzSWs1QlRVVWlPaUpDWVc1NWRYZGhibWRwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrTkhTeUlzSWs1QlRVVWlPaUpLWVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSRldDSXNJazVCVFVVaU9pSkVaV3RoYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTVXdpTENKT1FVMUZJam9pUkdsc2FTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpFU2tJaUxDSk9RVTFGSWpvaVNtRnRZbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFcEtJaXdpVGtGTlJTSTZJa3BoZVdGd2RYSmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSUVV5SXNJazVCVFVVaU9pSkVaVzV3WVhOaGNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVkVJaUxDSk9RVTFGSWpvaVUybHNZVzVuYVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSVTVGSWl3aVRrRk5SU0k2SWtWdVpHVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUmt0Uklpd2lUa0ZOUlNJNklrWmhhMlpoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkhWRThpTENKT1FVMUZJam9pUjI5eWIyNTBZV3h2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrcFBSeUlzSWs1QlRVVWlPaUpaYjJkNVlXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdENWU0lzSWs1QlRVVWlPaUpMYjNSaFltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFOVFJaXdpVGtGTlJTSTZJa3h2YldKdmF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4xZExDSkVTa0lpT2x0N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwMVlJaXdpVGtGTlJTSTZJbGRoYldWdVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1YxZ2lMQ0pPUVUxRklqb2lRbUZ1ZVhWM1lXNW5hU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFIwc2lMQ0pPUVUxRklqb2lTbUZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFUlZnaUxDSk9RVTFGSWpvaVJHVnJZV2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEU1Vklpd2lUa0ZOUlNJNklrMWhiR2x1WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURTlRSWl3aVRrRk5SU0k2SWt4dmJXSnZheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVZWY2lMQ0pPUVUxRklqb2lUSFYzZFdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVVJESWl3aVRrRk5SU0k2SWsxaGJtRmtieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVVNJc0lrNUJUVVVpT2lKTlpYSmhkV3RsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxWeUlzSWs1QlRVVWlPaUpOWVc1dmEzZGhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVeEhJaXdpVGtGTlJTSTZJazFoYkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVDBZaUxDSk9RVTFGSWpvaVRXRjFiV1Z5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk9RbGdpTENKT1FVMUZJam9pVG1GaWFYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCRVJ5SXNJazVCVFVVaU9pSlFZV1JoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVZPSWl3aVRrRk5SU0k2SWxCbGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKUVIwc2lMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJDQlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRPSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3hoYmlCQ2RXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0Vklpd2lUa0ZOUlNJNklsQmxhMkZ1WW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEUwaUxDSk9RVTFGSWpvaVVHRnNaVzFpWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVnlJc0lrNUJUVVVpT2lKUVlXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCT1N5SXNJazVCVFVVaU9pSlFiMjUwYVdGdVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUZOVklpd2lUa0ZOUlNJNklsQjFkSFZ6YzJsaVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVWtwTklpd2lUa0ZOUlNJNklsSmhhbUVnUVcxd1lYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTAxUklpd2lUa0ZOUlNJNklsTmhiWEJwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUME1pTENKT1FVMUZJam9pVTI5c2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDFFaUxDSk9RVTFGSWpvaVUyOXliMjVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlJSeUlzSWs1QlRVVWlPaUpUYVc1MFlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOU1J5SXNJazVCVFVVaU9pSlRaVzFoY21GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVlVJaUxDSk9RVTFGSWpvaVUzVnlZV0poZVdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRWxOSWl3aVRrRk5SU0k2SWxScGJXbHJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsRWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFZVzVrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBUSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVTJWc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4xZExDSlRUMUVpT2x0N0lrTkpWRmtpT2lKQlFWQWlMQ0pPUVUxRklqb2lVMkZ0WVhKcGJtUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGTlVTSXNJazVCVFVVaU9pSkJiV0p2YmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkJVa1FpTENKT1FVMUZJam9pUVd4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUkVvaUxDSk9RVTFGSWpvaVFtRnVhbUZ5YldGemFXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSUElpd2lUa0ZOUlNJNklrSmhibVIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1ZLSWl3aVRrRk5SU0k2SWtKbGNtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKSlN5SXNJazVCVFVVaU9pSkNhV0ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkxVeUlzSWs1QlRVVWlPaUpDWlc1bmEzVnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1RWVWlMQ0pPUVUxRklqb2lRbWx0WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNVRTRpTENKT1FVMUZJam9pUW1Gc2FXdHdZWEJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWRWdpTENKT1FVMUZJam9pUW1GMFlXMGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxWVklpd2lUa0ZOUlNJNklrMTFZWEpoSUVKMWJtZHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKWFdDSXNJazVCVFVVaU9pSkNZVzU1ZFhkaGJtZHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtOSFN5SXNJazVCVFVVaU9pSktZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JGV0NJc0lrNUJUVVVpT2lKRVpXdGhhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNVd2lMQ0pPUVUxRklqb2lSR2xzYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkVTa0lpTENKT1FVMUZJam9pU21GdFlta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwS0lpd2lUa0ZOUlNJNklrcGhlV0Z3ZFhKaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVWRUlpTENKT1FVMUZJam9pVTJsc1lXNW5hWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJVNUZJaXdpVGtGTlJTSTZJa1Z1WkdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSa3RSSWl3aVRrRk5SU0k2SWtaaGEyWmhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtwUFJ5SXNJazVCVFVVaU9pSlpiMmQ1WVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0Q1ZTSXNJazVCVFVVaU9pSkxiM1JoWW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUkVraUxDSk9RVTFGSWpvaVMyVnVaR0Z5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUazhpTENKT1FVMUZJam9pVFdWa1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzA5Rklpd2lUa0ZOUlNJNklrdDFjR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1Ra29pTENKT1FVMUZJam9pVEdGaWRXRnVJRUpoYW04aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURXRCSWl3aVRrRk5SU0k2SWt4aGNtRnVkSFZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1URW9pTENKT1FVMUZJam9pVEhWaWRXc2dUR2x1WjJkaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVDFBaUxDSk9RVTFGSWpvaVRHOXRZbTlySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreFZWeUlzSWs1QlRVVWlPaUpNZFhkMWF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUkVNaUxDSk9RVTFGSWpvaVRXRnVZV1J2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUtWU0lzSWs1QlRVVWlPaUpOWVcxMWFuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0Uklpd2lUa0ZOUlNJNklrMWxjbUYxYTJVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRYSWl3aVRrRk5SU0k2SWsxaGJtOXJkMkZ5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5URWNpTENKT1FVMUZJam9pVFdGc1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxUFJpSXNJazVCVFVVaU9pSk5ZWFZ0WlhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazVDV0NJc0lrNUJUVVVpT2lKT1lXSnBjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUlU0aUxDSk9RVTFGSWpvaVVHVnVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzA0aUxDSk9RVTFGSWpvaVVHRnVaMnRoYkdGdUlFSjFiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFNUxJaXdpVGtGTlJTSTZJbEJ2Ym5ScFlXNWhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVUxVWlMQ0pPUVUxRklqb2lVSFYwZFhOemFXSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKU1NrMGlMQ0pPUVUxRklqb2lVbUZxWVNCQmJYQmhkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUlJ5SXNJazVCVFVVaU9pSlRhVzUwWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5TUnlJc0lrNUJUVVVpT2lKVFpXMWhjbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRWVUlpTENKT1FVMUZJam9pVTNWeVlXSmhlV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFbE5JaXdpVGtGTlJTSTZJbFJwYldscllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xFaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUVlXNWtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFcFRJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVMlZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXRISWl3aVRrRk5SU0k2SWt4aGJYQjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFMURJaXdpVGtGTlJTSTZJbFJoYldKdmJHRnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVRrb2lMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRkpMSWl3aVRrRk5SU0k2SWxSaGNtRnJZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZGUkZJaXdpVGtGTlJTSTZJbFJsY201aGRHVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVlZCSElpd2lUa0ZOUlNJNklsVnFkVzVuSUZCaGJtUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwZFFJaXdpVGtGTlJTSTZJbGRoYVc1bllYQjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxkTldDSXNJazVCVFVVaU9pSlhZVzFsYm1FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMWRMQ0pDUlVvaU9sdDdJa05KVkZraU9pSkJRVkFpTENKT1FVMUZJam9pVTJGdFlYSnBibVJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrRk5VU0lzSWs1QlRVVWlPaUpCYldKdmJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpCVWtRaUxDSk9RVTFGSWpvaVFXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JFb2lMQ0pPUVUxRklqb2lRbUZ1YW1GeWJXRnphVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrUlBJaXdpVGtGTlJTSTZJa0poYm1SMWJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtsTElpd2lUa0ZOUlNJNklrSnBZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrdFRJaXdpVGtGTlJTSTZJa0psYm1kcmRXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTlZTSXNJazVCVFVVaU9pSkNhVzFoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlFUaUlzSWs1QlRVVWlPaUpDWVd4cGEzQmhjR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlVTQ0lzSWs1QlRVVWlPaUpDWVhSaGJTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxkWUlpd2lUa0ZOUlNJNklrSmhibmwxZDJGdVoya2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRVZZSWl3aVRrRk5SU0k2SWtSbGEyRnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSSlRDSXNJazVCVFVVaU9pSkVhV3hwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUktRaUlzSWs1QlRVVWlPaUpLWVcxaWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU2tvaUxDSk9RVTFGSWpvaVNtRjVZWEIxY21FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlVRaUlzSWs1QlRVVWlPaUpUYVd4aGJtZHBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRlRrVWlMQ0pPUVUxRklqb2lSVzVrWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkdTMUVpTENKT1FVMUZJam9pUm1GclptRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtkVVR5SXNJazVCVFVVaU9pSkhiM0p2Ym5SaGJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pU2s5SElpd2lUa0ZOUlNJNklsbHZaM2xoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBKVklpd2lUa0ZOUlNJNklrdHZkR0ZpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RFU1NJc0lrNUJUVVVpT2lKTFpXNWtZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdE9UeUlzSWs1QlRVVWlPaUpOWldSaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVDBVaUxDSk9RVTFGSWpvaVMzVndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdFVSeUlzSWs1QlRVVWlPaUpMWlhSaGNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVFrb2lMQ0pPUVUxRklqb2lUR0ZpZFdGdUlFSmhhbThpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFdEJJaXdpVGtGTlJTSTZJa3hoY21GdWRIVnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRFb2lMQ0pPUVUxRklqb2lUSFZpZFdzZ1RHbHVaMmRoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1UbFVpTENKT1FVMUZJam9pVFdGc2FXNWhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVQxQWlMQ0pPUVUxRklqb2lURzl0WW05cklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hWVnlJc0lrNUJUVVVpT2lKTWRYZDFheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlJFTWlMQ0pPUVUxRklqb2lUV0Z1WVdSdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFLVlNJc0lrNUJUVVVpT2lKTllXMTFhblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVEVjaUxDSk9RVTFGSWpvaVRXRnNZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMVBSaUlzSWs1QlRVVWlPaUpOWVhWdFpYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWs1Q1dDSXNJazVCVFVVaU9pSk9ZV0pwY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVJISWl3aVRrRk5SU0k2SWxCaFpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVIwc2lMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJDQlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRPSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3hoYmlCQ2RXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0Vklpd2lUa0ZOUlNJNklsQmxhMkZ1WW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEUwaUxDSk9RVTFGSWpvaVVHRnNaVzFpWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVnlJc0lrNUJUVVVpT2lKUVlXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCT1N5SXNJazVCVFVVaU9pSlFiMjUwYVdGdVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVWtwTklpd2lUa0ZOUlNJNklsSmhhbUVnUVcxd1lYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTAxUklpd2lUa0ZOUlNJNklsTmhiWEJwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUME1pTENKT1FVMUZJam9pVTI5c2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDFFaUxDSk9RVTFGSWpvaVUyOXliMjVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlJSeUlzSWs1QlRVVWlPaUpUYVc1MFlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOU1J5SXNJazVCVFVVaU9pSlRaVzFoY21GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVlVJaUxDSk9RVTFGSWpvaVUzVnlZV0poZVdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRWxOSWl3aVRrRk5SU0k2SWxScGJXbHJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsRWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFZVzVrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBUSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVTJWc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZE5XQ0lzSWs1QlRVVWlPaUpYWVcxbGJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKTVFrb2lPbHQ3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFVHlJc0lrNUJUVVVpT2lKQ1lXNWtkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkZTaUlzSWs1QlRVVWlPaUpDWlhKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDU1VzaUxDSk9RVTFGSWpvaVFtbGhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1MxTWlMQ0pPUVUxRklqb2lRbVZ1WjJ0MWJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWsxVklpd2lUa0ZOUlNJNklrSnBiV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsQk9JaXdpVGtGTlJTSTZJa0poYkdscmNHRndZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsUklJaXdpVGtGTlJTSTZJa0poZEdGdElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pWVlNJc0lrNUJUVVVpT2lKTmRXRnlZU0JDZFc1bmJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVjFnaUxDSk9RVTFGSWpvaVFtRnVlWFYzWVc1bmFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpEUjBzaUxDSk9RVTFGSWpvaVNtRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVSVmdpTENKT1FVMUZJam9pUkdWcllXa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVsTUlpd2lUa0ZOUlNJNklrUnBiR2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVJFcENJaXdpVGtGTlJTSTZJa3BoYldKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JLU2lJc0lrNUJUVVVpT2lKS1lYbGhjSFZ5WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVVRk1pTENKT1FVMUZJam9pUkdWdWNHRnpZWElpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGUkNJaXdpVGtGTlJTSTZJbE5wYkdGdVoybDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtWT1JTSXNJazVCVFVVaU9pSkZibVJsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrWkxVU0lzSWs1QlRVVWlPaUpHWVd0bVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUjFSUElpd2lUa0ZOUlNJNklrZHZjbTl1ZEdGc2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpLVDBjaUxDSk9RVTFGSWpvaVdXOW5lV0ZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUWxVaUxDSk9RVTFGSWpvaVMyOTBZV0poY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFOVFJaXdpVGtGTlJTSTZJa3h2YldKdmF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFVk9JaXdpVGtGTlJTSTZJbEJsYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpRUjBzaUxDSk9RVTFGSWpvaVVHRnVaMnRoYkNCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdE9JaXdpVGtGTlJTSTZJbEJoYm1kcllXeGhiaUJDZFc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRWSWl3aVRrRk5SU0k2SWxCbGEyRnVZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURTBpTENKT1FVMUZJam9pVUdGc1pXMWlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1WeUlzSWs1QlRVVWlPaUpRWVd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJPU3lJc0lrNUJUVVVpT2lKUWIyNTBhV0Z1WVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRk5WSWl3aVRrRk5SU0k2SWxCMWRIVnpjMmxpWVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVa3BOSWl3aVRrRk5SU0k2SWxKaGFtRWdRVzF3WVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDFSSWl3aVRrRk5SU0k2SWxOaGJYQnBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQwTWlMQ0pPUVUxRklqb2lVMjlzYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUMUVpTENKT1FVMUZJam9pVTI5eWIyNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUlJ5SXNJazVCVFVVaU9pSlRhVzUwWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5TUnlJc0lrNUJUVVVpT2lKVFpXMWhjbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRWVUlpTENKT1FVMUZJam9pVTNWeVlXSmhlV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFbE5JaXdpVGtGTlJTSTZJbFJwYldscllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xFaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUVlXNWtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFcFRJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVMlZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXRISWl3aVRrRk5SU0k2SWt4aGJYQjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFMURJaXdpVGtGTlJTSTZJbFJoYldKdmJHRnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVRrb2lMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRkpMSWl3aVRrRk5SU0k2SWxSaGNtRnJZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZGUkZJaXdpVGtGTlJTSTZJbFJsY201aGRHVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVlZCSElpd2lUa0ZOUlNJNklsVnFkVzVuSUZCaGJtUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwZFFJaXdpVGtGTlJTSTZJbGRoYVc1bllYQjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxkTldDSXNJazVCVFVVaU9pSlhZVzFsYm1FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMWRMQ0pFVkVJaU9sdDdJa05KVkZraU9pSkJUVkVpTENKT1FVMUZJam9pUVcxaWIyNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUVZKRUlpd2lUa0ZOUlNJNklrRnNiM0lpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrUktJaXdpVGtGTlJTSTZJa0poYm1waGNtMWhjMmx1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVUeUlzSWs1QlRVVWlPaUpDWVc1a2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRlNpSXNJazVCVFVVaU9pSkNaWEpoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTVXNpTENKT1FVMUZJam9pUW1saGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUzFNaUxDSk9RVTFGSWpvaVFtVnVaMnQxYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRazFWSWl3aVRrRk5SU0k2SWtKcGJXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxCT0lpd2lUa0ZOUlNJNklrSmhiR2xyY0dGd1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxSSUlpd2lUa0ZOUlNJNklrSmhkR0Z0SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlZWU0lzSWs1QlRVVWlPaUpOZFdGeVlTQkNkVzVuYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWMWdpTENKT1FVMUZJam9pUW1GdWVYVjNZVzVuYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkRSMHNpTENKT1FVMUZJam9pU21GcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVJWZ2lMQ0pPUVUxRklqb2lSR1ZyWVdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRWxNSWl3aVRrRk5SU0k2SWtScGJHa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pUkVwQ0lpd2lUa0ZOUlNJNklrcGhiV0pwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUktTaUlzSWs1QlRVVWlPaUpLWVhsaGNIVnlZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVVGTWlMQ0pPUVUxRklqb2lSR1Z1Y0dGellYSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFNVZJaXdpVGtGTlJTSTZJazFoYkdsdVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEZWWElpd2lUa0ZOUlNJNklreDFkM1ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUVReUlzSWs1QlRVVWlPaUpOWVc1aFpHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVwVklpd2lUa0ZOUlNJNklrMWhiWFZxZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TMUVpTENKT1FVMUZJam9pVFdWeVlYVnJaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxY2lMQ0pPUVUxRklqb2lUV0Z1YjJ0M1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTVJ5SXNJazVCVFVVaU9pSk5ZV3hoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVTlHSWl3aVRrRk5SU0k2SWsxaGRXMWxjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRrSllJaXdpVGtGTlJTSTZJazVoWW1seVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUkVjaUxDSk9RVTFGSWpvaVVHRmtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkZUaUlzSWs1QlRVVWlPaUpRWlc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVUVkTElpd2lUa0ZOUlNJNklsQmhibWRyWVd3Z1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkxUaUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNZVzRnUW5WdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVlNJc0lrNUJUVVVpT2lKUVpXdGhibUpoY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhOSWl3aVRrRk5SU0k2SWxCaGJHVnRZbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURmNpTENKT1FVMUZJam9pVUdGc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVGtzaUxDSk9RVTFGSWpvaVVHOXVkR2xoYm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJUVlNJc0lrNUJUVVVpT2lKUWRYUjFjM05wWW1GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEpLVFNJc0lrNUJUVVVpT2lKU1lXcGhJRUZ0Y0dGMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5OVVNJc0lrNUJUVVVpT2lKVFlXMXdhWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOURJaXdpVGtGTlJTSTZJbE52Ykc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlSSWl3aVRrRk5SU0k2SWxOdmNtOXVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVVY2lMQ0pPUVUxRklqb2lVMmx1ZEdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMVZDSWl3aVRrRk5SU0k2SWxOMWNtRmlZWGxoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkpUU0lzSWs1QlRVVWlPaUpVYVcxcGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVwUklpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHRnVaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVeUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRk5sYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJMUnlJc0lrNUJUVVVpT2lKTVlXMXdkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk5ReUlzSWs1QlRVVWlPaUpVWVcxaWIyeGhhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFNUtJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJTU3lJc0lrNUJUVVVpT2lKVVlYSmhhMkZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxWUVJ5SXNJazVCVFVVaU9pSlZhblZ1WnlCUVlXNWtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZEhVQ0lzSWs1QlRVVWlPaUpYWVdsdVoyRndkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFRWZ2lMQ0pPUVUxRklqb2lWMkZ0Wlc1aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlYU3dpUWxCT0lqcGJleUpEU1ZSWklqb2lRVTFSSWl3aVRrRk5SU0k2SWtGdFltOXVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGU1JDSXNJazVCVFVVaU9pSkJiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRThpTENKT1FVMUZJam9pUW1GdVpIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JVb2lMQ0pPUVUxRklqb2lRbVZ5WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa2xMSWl3aVRrRk5SU0k2SWtKcFlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWt0VElpd2lUa0ZOUlNJNklrSmxibWRyZFd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pOVlNJc0lrNUJUVVVpT2lKQ2FXMWhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVVNDSXNJazVCVFVVaU9pSkNZWFJoYlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWVlVpTENKT1FVMUZJam9pVFhWaGNtRWdRblZ1WjI4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbGRZSWl3aVRrRk5SU0k2SWtKaGJubDFkMkZ1WjJraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRMGRMSWl3aVRrRk5SU0k2SWtwaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFVllJaXdpVGtGTlJTSTZJa1JsYTJGcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JKVENJc0lrNUJUVVVpT2lKRWFXeHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWtSS1FpSXNJazVCVFVVaU9pSktZVzFpYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTa29pTENKT1FVMUZJam9pU21GNVlYQjFjbUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSVVFpSXNJazVCVFVVaU9pSlRhV3hoYm1kcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpGVGtVaUxDSk9RVTFGSWpvaVJXNWtaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKR1MxRWlMQ0pPUVUxRklqb2lSbUZyWm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMEpWSWl3aVRrRk5SU0k2SWt0dmRHRmlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdEVTU0lzSWs1QlRVVWlPaUpMWlc1a1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0T1R5SXNJazVCVFVVaU9pSk5aV1JoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUMFVpTENKT1FVMUZJam9pUzNWd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0VVJ5SXNJazVCVFVVaU9pSkxaWFJoY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNUWtvaUxDSk9RVTFGSWpvaVRHRmlkV0Z1SUVKaGFtOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV0Qklpd2lUa0ZOUlNJNklreGhjbUZ1ZEhWcllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVEVvaUxDSk9RVTFGSWpvaVRIVmlkV3NnVEdsdVoyZGhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRsVWlMQ0pPUVUxRklqb2lUV0ZzYVc1aGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVDFBaUxDSk9RVTFGSWpvaVRHOXRZbTlySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreFZWeUlzSWs1QlRVVWlPaUpNZFhkMWF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUkVNaUxDSk9RVTFGSWpvaVRXRnVZV1J2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUtWU0lzSWs1QlRVVWlPaUpOWVcxMWFuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0Uklpd2lUa0ZOUlNJNklrMWxjbUYxYTJVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRYSWl3aVRrRk5SU0k2SWsxaGJtOXJkMkZ5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5URWNpTENKT1FVMUZJam9pVFdGc1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxUFJpSXNJazVCVFVVaU9pSk5ZWFZ0WlhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazVDV0NJc0lrNUJUVVVpT2lKT1lXSnBjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUjBzaUxDSk9RVTFGSWpvaVVHRnVaMnRoYkNCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdE9JaXdpVGtGTlJTSTZJbEJoYm1kcllXeGhiaUJDZFc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRWSWl3aVRrRk5SU0k2SWxCbGEyRnVZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURTBpTENKT1FVMUZJam9pVUdGc1pXMWlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1WeUlzSWs1QlRVVWlPaUpRWVd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJPU3lJc0lrNUJUVVVpT2lKUWIyNTBhV0Z1WVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRk5WSWl3aVRrRk5SU0k2SWxCMWRIVnpjMmxpWVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVa3BOSWl3aVRrRk5SU0k2SWxKaGFtRWdRVzF3WVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDFSSWl3aVRrRk5SU0k2SWxOaGJYQnBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQwTWlMQ0pPUVUxRklqb2lVMjlzYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUMUVpTENKT1FVMUZJam9pVTI5eWIyNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUlJ5SXNJazVCVFVVaU9pSlRhVzUwWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5TUnlJc0lrNUJUVVVpT2lKVFpXMWhjbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRWVUlpTENKT1FVMUZJam9pVTNWeVlXSmhlV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFbE5JaXdpVGtGTlJTSTZJbFJwYldscllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xFaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUVlXNWtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFcFRJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVMlZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXRISWl3aVRrRk5SU0k2SWt4aGJYQjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFMURJaXdpVGtGTlJTSTZJbFJoYldKdmJHRnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVRrb2lMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRkpMSWl3aVRrRk5SU0k2SWxSaGNtRnJZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZGUkZJaXdpVGtGTlJTSTZJbFJsY201aGRHVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVlZCSElpd2lUa0ZOUlNJNklsVnFkVzVuSUZCaGJtUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwZFFJaXdpVGtGTlJTSTZJbGRoYVc1bllYQjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxkTldDSXNJazVCVFVVaU9pSlhZVzFsYm1FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMWRMQ0pDU1VzaU9sdDdJa05KVkZraU9pSkJUVkVpTENKT1FVMUZJam9pUVcxaWIyNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUVZKRUlpd2lUa0ZOUlNJNklrRnNiM0lpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrUktJaXdpVGtGTlJTSTZJa0poYm1waGNtMWhjMmx1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVUeUlzSWs1QlRVVWlPaUpDWVc1a2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRlNpSXNJazVCVFVVaU9pSkNaWEpoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1YxZ2lMQ0pPUVUxRklqb2lRbUZ1ZVhWM1lXNW5hU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFIwc2lMQ0pPUVUxRklqb2lTbUZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFUlZnaUxDSk9RVTFGSWpvaVJHVnJZV2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrVk9SU0lzSWs1QlRVVWlPaUpGYm1SbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1pMVVNJc0lrNUJUVVVpT2lKR1lXdG1ZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVIxUlBJaXdpVGtGTlJTSTZJa2R2Y205dWRHRnNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKS1QwY2lMQ0pPUVUxRklqb2lXVzluZVdGcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFFsVWlMQ0pPUVUxRklqb2lTMjkwWVdKaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBSSklpd2lUa0ZOUlNJNklrdGxibVJoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDVQSWl3aVRrRk5SU0k2SWsxbFpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0UFJTSXNJazVCVFVVaU9pSkxkWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMVJISWl3aVRrRk5SU0k2SWt0bGRHRndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreENTaUlzSWs1QlRVVWlPaUpNWVdKMVlXNGdRbUZxYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1TMEVpTENKT1FVMUZJam9pVEdGeVlXNTBkV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE1TaUlzSWs1QlRVVWlPaUpNZFdKMWF5Qk1hVzVuWjJGMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hQVUNJc0lrNUJUVVVpT2lKTWIyMWliMnNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRGVlhJaXdpVGtGTlJTSTZJa3gxZDNWcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFFUXlJc0lrNUJUVVVpT2lKTllXNWhaRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVcFZJaXdpVGtGTlJTSTZJazFoYlhWcWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFFaUxDSk9RVTFGSWpvaVRXVnlZWFZyWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TMWNpTENKT1FVMUZJam9pVFdGdWIydDNZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMU1SeUlzSWs1QlRVVWlPaUpOWVd4aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFU5R0lpd2lUa0ZOUlNJNklrMWhkVzFsY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUa0pZSWl3aVRrRk5SU0k2SWs1aFltbHlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJFY2lMQ0pPUVUxRklqb2lVR0ZrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJGVGlJc0lrNUJUVVVpT2lKUVpXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVVFZExJaXdpVGtGTlJTSTZJbEJoYm1kcllXd2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVGlJc0lrNUJUVVVpT2lKUVlXNW5hMkZzWVc0Z1FuVnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFZTSXNJazVCVFVVaU9pSlFaV3RoYm1KaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4Tklpd2lUa0ZOUlNJNklsQmhiR1Z0WW1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRrc2lMQ0pPUVUxRklqb2lVRzl1ZEdsaGJtRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCVFZTSXNJazVCVFVVaU9pSlFkWFIxYzNOcFltRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxKS1RTSXNJazVCVFVVaU9pSlNZV3BoSUVGdGNHRjBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOTlVTSXNJazVCVFVVaU9pSlRZVzF3YVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlESWl3aVRrRk5SU0k2SWxOdmJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5Uklpd2lUa0ZOUlNJNklsTnZjbTl1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVVWNpTENKT1FVMUZJam9pVTJsdWRHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVrY2lMQ0pPUVUxRklqb2lVMlZ0WVhKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFWQ0lpd2lUa0ZOUlNJNklsTjFjbUZpWVhsaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJKVFNJc0lrNUJUVVVpT2lKVWFXMXBhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFcFJJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR0Z1WkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVXlJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZObGJHOXlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSTFJ5SXNJazVCVFVVaU9pSk1ZVzF3ZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJOUXlJc0lrNUJUVVVpT2lKVVlXMWliMnhoYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTVLSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSU1N5SXNJazVCVFVVaU9pSlVZWEpoYTJGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJVUlNJc0lrNUJUVVVpT2lKVVpYSnVZWFJsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsVlFSeUlzSWs1QlRVVWlPaUpWYW5WdVp5QlFZVzVrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbGRIVUNJc0lrNUJUVVVpT2lKWFlXbHVaMkZ3ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhUVmdpTENKT1FVMUZJam9pVjJGdFpXNWhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5WFN3aVZFNUtJanBiZXlKRFNWUlpJam9pUVUxUklpd2lUa0ZOUlNJNklrRnRZbTl1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrRlNSQ0lzSWs1QlRVVWlPaUpCYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFU2lJc0lrNUJUVVVpT2lKQ1lXNXFZWEp0WVhOcGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUlVvaUxDSk9RVTFGSWpvaVFtVnlZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrbExJaXdpVGtGTlJTSTZJa0pwWVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa3RUSWl3aVRrRk5SU0k2SWtKbGJtZHJkV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSk5WU0lzSWs1QlRVVWlPaUpDYVcxaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pRVGlJc0lrNUJUVVVpT2lKQ1lXeHBhM0JoY0dGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pVU0NJc0lrNUJUVVVpT2lKQ1lYUmhiU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZWVWlMQ0pPUVUxRklqb2lUWFZoY21FZ1FuVnVaMjhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsZFlJaXdpVGtGTlJTSTZJa0poYm5sMWQyRnVaMmtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVEwZExJaXdpVGtGTlJTSTZJa3BoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBkUElpd2lUa0ZOUlNJNklscG9aVzVuZW1odmRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpFUlZnaUxDSk9RVTFGSWpvaVJHVnJZV2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrWkxVU0lzSWs1QlRVVWlPaUpHWVd0bVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUjFSUElpd2lUa0ZOUlNJNklrZHZjbTl1ZEdGc2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpJUjBnaUxDSk9RVTFGSWpvaVNHRnVaM3BvYjNVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVMwRWlMQ0pPUVUxRklqb2lUR0Z5WVc1MGRXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TVNpSXNJazVCVFVVaU9pSk1kV0oxYXlCTWFXNW5aMkYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE9WU0lzSWs1QlRVVWlPaUpOWVd4cGJtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4UFVDSXNJazVCVFVVaU9pSk1iMjFpYjJzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURlZYSWl3aVRrRk5SU0k2SWt4MWQzVnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxRVF5SXNJazVCVFVVaU9pSk5ZVzVoWkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXBWSWl3aVRrRk5SU0k2SWsxaGJYVnFkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxRWlMQ0pPUVUxRklqb2lUV1Z5WVhWclpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFjaUxDSk9RVTFGSWpvaVRXRnViMnQzWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFNUnlJc0lrNUJUVVVpT2lKTllXeGhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVOUdJaXdpVGtGTlJTSTZJazFoZFcxbGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVGtKWUlpd2lUa0ZOUlNJNklrNWhZbWx5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSRWNpTENKT1FVMUZJam9pVUdGa1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCRlRpSXNJazVCVFVVaU9pSlFaVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRWRMSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3dnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFRpSXNJazVCVFVVaU9pSlFZVzVuYTJGc1lXNGdRblZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkxWU0lzSWs1QlRVVWlPaUpRWld0aGJtSmhjblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFeE5JaXdpVGtGTlJTSTZJbEJoYkdWdFltRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRGY2lMQ0pPUVUxRklqb2lVR0ZzZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFUa3NpTENKT1FVMUZJam9pVUc5dWRHbGhibUZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQlRWU0lzSWs1QlRVVWlPaUpRZFhSMWMzTnBZbUYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsSktUU0lzSWs1QlRVVWlPaUpTWVdwaElFRnRjR0YwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTk5VU0lzSWs1QlRVVWlPaUpUWVcxd2FYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5RElpd2lUa0ZOUlNJNklsTnZiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOVJJaXdpVGtGTlJTSTZJbE52Y205dVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVVVjaUxDSk9RVTFGSWpvaVUybHVkR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVa2NpTENKT1FVMUZJam9pVTJWdFlYSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxVkNJaXdpVGtGTlJTSTZJbE4xY21GaVlYbGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSSlRTSXNJazVCVFVVaU9pSlVhVzFwYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBSSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdGdVpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1V5SXNJazVCVFVVaU9pSlVZVzVxZFc1bklGTmxiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkxSeUlzSWs1QlRVVWlPaUpNWVcxd2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSTlF5SXNJazVCVFVVaU9pSlVZVzFpYjJ4aGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZE5XQ0lzSWs1QlRVVWlPaUpYWVcxbGJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKQ1ZFZ2lPbHQ3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFOVFJaXdpVGtGTlJTSTZJa3h2YldKdmF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazVVV0NJc0lrNUJUVVVpT2lKT1lYUjFibUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUlU0aUxDSk9RVTFGSWpvaVVHVnVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzA0aUxDSk9RVTFGSWpvaVVHRnVaMnRoYkdGdUlFSjFiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFNUxJaXdpVGtGTlJTSTZJbEJ2Ym5ScFlXNWhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVUxVWlMQ0pPUVUxRklqb2lVSFYwZFhOemFXSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKU1NrMGlMQ0pPUVUxRklqb2lVbUZxWVNCQmJYQmhkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUZISWl3aVRrRk5SU0k2SWxOcGJuUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxSkhJaXdpVGtGTlJTSTZJbE5sYldGeVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOVlFpSXNJazVCVFVVaU9pSlRkWEpoWW1GNVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU1UwaUxDSk9RVTFGSWpvaVZHbHRhV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVU0lzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJoYm1SaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xNaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCVFpXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVFVNaUxDSk9RVTFGSWpvaVZHRnRZbTlzWVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYUjFBaUxDSk9RVTFGSWpvaVYyRnBibWRoY0hVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMDFZSWl3aVRrRk5SU0k2SWxkaGJXVnVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlYwc0lsUlVSU0k2VzNzaVEwbFVXU0k2SWtGQlVDSXNJazVCVFVVaU9pSlRZVzFoY21sdVpHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUVUxUklpd2lUa0ZOUlNJNklrRnRZbTl1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrRlNSQ0lzSWs1QlRVVWlPaUpCYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFU2lJc0lrNUJUVVVpT2lKQ1lXNXFZWEp0WVhOcGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUkU4aUxDSk9RVTFGSWpvaVFtRnVaSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSVW9pTENKT1FVMUZJam9pUW1WeVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtsTElpd2lUa0ZOUlNJNklrSnBZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrdFRJaXdpVGtGTlJTSTZJa0psYm1kcmRXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTlZTSXNJazVCVFVVaU9pSkNhVzFoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlFUaUlzSWs1QlRVVWlPaUpDWVd4cGEzQmhjR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlVTQ0lzSWs1QlRVVWlPaUpDWVhSaGJTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxkWUlpd2lUa0ZOUlNJNklrSmhibmwxZDJGdVoya2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRVZZSWl3aVRrRk5SU0k2SWtSbGEyRnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSSlRDSXNJazVCVFVVaU9pSkVhV3hwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUktRaUlzSWs1QlRVVWlPaUpLWVcxaWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU2tvaUxDSk9RVTFGSWpvaVNtRjVZWEIxY21FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlVRaUlzSWs1QlRVVWlPaUpUYVd4aGJtZHBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRlRrVWlMQ0pPUVUxRklqb2lSVzVrWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkdTMUVpTENKT1FVMUZJam9pUm1GclptRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtkVVR5SXNJazVCVFVVaU9pSkhiM0p2Ym5SaGJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pU2s5SElpd2lUa0ZOUlNJNklsbHZaM2xoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBKVklpd2lUa0ZOUlNJNklrdHZkR0ZpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RFU1NJc0lrNUJUVVVpT2lKTFpXNWtZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdE9UeUlzSWs1QlRVVWlPaUpOWldSaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVDBVaUxDSk9RVTFGSWpvaVMzVndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdFVSeUlzSWs1QlRVVWlPaUpMWlhSaGNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVFrb2lMQ0pPUVUxRklqb2lUR0ZpZFdGdUlFSmhhbThpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFdEJJaXdpVGtGTlJTSTZJa3hoY21GdWRIVnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRFb2lMQ0pPUVUxRklqb2lUSFZpZFdzZ1RHbHVaMmRoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1UMUFpTENKT1FVMUZJam9pVEc5dFltOXJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4VlZ5SXNJazVCVFVVaU9pSk1kWGQxYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5SRU1pTENKT1FVMUZJam9pVFdGdVlXUnZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxS1ZTSXNJazVCVFVVaU9pSk5ZVzExYW5VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRSSWl3aVRrRk5SU0k2SWsxbGNtRjFhMlVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFhJaXdpVGtGTlJTSTZJazFoYm05cmQyRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlRFY2lMQ0pPUVUxRklqb2lUV0ZzWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFQUmlJc0lrNUJUVVVpT2lKTllYVnRaWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNUNXQ0lzSWs1QlRVVWlPaUpPWVdKcGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSVTRpTENKT1FVMUZJam9pVUdWdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxCSFN5SXNJazVCVFVVaU9pSlFZVzVuYTJGc0lGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzFVaUxDSk9RVTFGSWpvaVVHVnJZVzVpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhYSWl3aVRrRk5SU0k2SWxCaGJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVTFVaUxDSk9RVTFGSWpvaVVIVjBkWE56YVdKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpTU2swaUxDSk9RVTFGSWpvaVVtRnFZU0JCYlhCaGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVFZFaUxDSk9RVTFGSWpvaVUyRnRjR2wwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBReUlzSWs1QlRVVWlPaUpUYjJ4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QVVNJc0lrNUJUVVVpT2lKVGIzSnZibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxRkhJaXdpVGtGTlJTSTZJbE5wYm5SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFKSElpd2lUa0ZOUlNJNklsTmxiV0Z5WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5WUWlJc0lrNUJUVVVpT2lKVGRYSmhZbUY1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTVTBpTENKT1FVMUZJam9pVkdsdGFXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1VTSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQmhibVJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbE1pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJUWld4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVUzBjaUxDSk9RVTFGSWpvaVRHRnRjSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUVU1pTENKT1FVMUZJam9pVkdGdFltOXNZV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk9TaUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYUjFBaUxDSk9RVTFGSWpvaVYyRnBibWRoY0hVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMDFZSWl3aVRrRk5SU0k2SWxkaGJXVnVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlYwc0lsUkpUU0k2VzNzaVEwbFVXU0k2SWtGQlVDSXNJazVCVFVVaU9pSlRZVzFoY21sdVpHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUVUxUklpd2lUa0ZOUlNJNklrRnRZbTl1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrRlNSQ0lzSWs1QlRVVWlPaUpCYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFU2lJc0lrNUJUVVVpT2lKQ1lXNXFZWEp0WVhOcGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUkU4aUxDSk9RVTFGSWpvaVFtRnVaSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSVW9pTENKT1FVMUZJam9pUW1WeVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtsTElpd2lUa0ZOUlNJNklrSnBZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrdFRJaXdpVGtGTlJTSTZJa0psYm1kcmRXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTlZTSXNJazVCVFVVaU9pSkNhVzFoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlFUaUlzSWs1QlRVVWlPaUpDWVd4cGEzQmhjR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlVTQ0lzSWs1QlRVVWlPaUpDWVhSaGJTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxkWUlpd2lUa0ZOUlNJNklrSmhibmwxZDJGdVoya2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBkTElpd2lUa0ZOUlNJNklrcGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRVZZSWl3aVRrRk5SU0k2SWtSbGEyRnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSSlRDSXNJazVCVFVVaU9pSkVhV3hwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrUktRaUlzSWs1QlRVVWlPaUpLWVcxaWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU2tvaUxDSk9RVTFGSWpvaVNtRjVZWEIxY21FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRkJUSWl3aVRrRk5SU0k2SWtSbGJuQmhjMkZ5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlVRaUlzSWs1QlRVVWlPaUpUYVd4aGJtZHBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRlRrVWlMQ0pPUVUxRklqb2lSVzVrWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkdTMUVpTENKT1FVMUZJam9pUm1GclptRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtkVVR5SXNJazVCVFVVaU9pSkhiM0p2Ym5SaGJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pU2s5SElpd2lUa0ZOUlNJNklsbHZaM2xoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBKVklpd2lUa0ZOUlNJNklrdHZkR0ZpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RFU1NJc0lrNUJUVVVpT2lKTFpXNWtZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdE9UeUlzSWs1QlRVVWlPaUpOWldSaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVDBVaUxDSk9RVTFGSWpvaVMzVndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdFVSeUlzSWs1QlRVVWlPaUpMWlhSaGNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVFrb2lMQ0pPUVUxRklqb2lUR0ZpZFdGdUlFSmhhbThpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFdEJJaXdpVGtGTlJTSTZJa3hoY21GdWRIVnJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRFb2lMQ0pPUVUxRklqb2lUSFZpZFdzZ1RHbHVaMmRoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1UMUFpTENKT1FVMUZJam9pVEc5dFltOXJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4VlZ5SXNJazVCVFVVaU9pSk1kWGQxYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5SRU1pTENKT1FVMUZJam9pVFdGdVlXUnZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxS1ZTSXNJazVCVFVVaU9pSk5ZVzExYW5VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRSSWl3aVRrRk5SU0k2SWsxbGNtRjFhMlVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFhJaXdpVGtGTlJTSTZJazFoYm05cmQyRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlRFY2lMQ0pPUVUxRklqb2lUV0ZzWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFQUmlJc0lrNUJUVVVpT2lKTllYVnRaWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNUNXQ0lzSWs1QlRVVWlPaUpPWVdKcGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSVTRpTENKT1FVMUZJam9pVUdWdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxCSFN5SXNJazVCVFVVaU9pSlFZVzVuYTJGc0lGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzFVaUxDSk9RVTFGSWpvaVVHVnJZVzVpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhYSWl3aVRrRk5SU0k2SWxCaGJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVTFVaUxDSk9RVTFGSWpvaVVIVjBkWE56YVdKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpTU2swaUxDSk9RVTFGSWpvaVVtRnFZU0JCYlhCaGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVFZFaUxDSk9RVTFGSWpvaVUyRnRjR2wwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBReUlzSWs1QlRVVWlPaUpUYjJ4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QVVNJc0lrNUJUVVVpT2lKVGIzSnZibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxRkhJaXdpVGtGTlJTSTZJbE5wYm5SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFKSElpd2lUa0ZOUlNJNklsTmxiV0Z5WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5WUWlJc0lrNUJUVVVpT2lKVGRYSmhZbUY1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbEVpTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRWVc1a1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVwVElpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1UyVnNiM0lpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFdEhJaXdpVGtGTlJTSTZJa3hoYlhCMWJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkUxRElpd2lUa0ZOUlNJNklsUmhiV0p2YkdGcllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVGtvaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZGSkxJaXdpVGtGTlJTSTZJbFJoY21GcllXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZSRklpd2lUa0ZOUlNJNklsUmxjbTVoZEdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWVkJISWl3aVRrRk5SU0k2SWxWcWRXNW5JRkJoYm1SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjBkUUlpd2lUa0ZOUlNJNklsZGhhVzVuWVhCMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbGROV0NJc0lrNUJUVVVpT2lKWFlXMWxibUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4xZExDSk5TMWNpT2x0N0lrTkpWRmtpT2lKQlFWQWlMQ0pPUVUxRklqb2lVMkZ0WVhKcGJtUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGTlVTSXNJazVCVFVVaU9pSkJiV0p2YmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkJVa1FpTENKT1FVMUZJam9pUVd4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUkVvaUxDSk9RVTFGSWpvaVFtRnVhbUZ5YldGemFXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSUElpd2lUa0ZOUlNJNklrSmhibVIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1ZLSWl3aVRrRk5SU0k2SWtKbGNtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKSlN5SXNJazVCVFVVaU9pSkNhV0ZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkxVeUlzSWs1QlRVVWlPaUpDWlc1bmEzVnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1RWVWlMQ0pPUVUxRklqb2lRbWx0WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNVRTRpTENKT1FVMUZJam9pUW1Gc2FXdHdZWEJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWRWdpTENKT1FVMUZJam9pUW1GMFlXMGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxWVklpd2lUa0ZOUlNJNklrMTFZWEpoSUVKMWJtZHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKWFdDSXNJazVCVFVVaU9pSkNZVzU1ZFhkaGJtZHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtOSFN5SXNJazVCVFVVaU9pSktZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JGV0NJc0lrNUJUVVVpT2lKRVpXdGhhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNVd2lMQ0pPUVUxRklqb2lSR2xzYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkVTa0lpTENKT1FVMUZJam9pU21GdFlta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwS0lpd2lUa0ZOUlNJNklrcGhlV0Z3ZFhKaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVWRUlpTENKT1FVMUZJam9pVTJsc1lXNW5hWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJVNUZJaXdpVGtGTlJTSTZJa1Z1WkdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSa3RSSWl3aVRrRk5SU0k2SWtaaGEyWmhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtwUFJ5SXNJazVCVFVVaU9pSlpiMmQ1WVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0Q1ZTSXNJazVCVFVVaU9pSkxiM1JoWW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUkVraUxDSk9RVTFGSWpvaVMyVnVaR0Z5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUazhpTENKT1FVMUZJam9pVFdWa1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzA5Rklpd2lUa0ZOUlNJNklrdDFjR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxWRWNpTENKT1FVMUZJam9pUzJWMFlYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFSktJaXdpVGtGTlJTSTZJa3hoWW5WaGJpQkNZV3B2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreExRU0lzSWs1QlRVVWlPaUpNWVhKaGJuUjFhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFeEtJaXdpVGtGTlJTSTZJa3gxWW5WcklFeHBibWRuWVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURTlRSWl3aVRrRk5SU0k2SWt4dmJXSnZheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVZWY2lMQ0pPUVUxRklqb2lUSFYzZFdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVVJESWl3aVRrRk5SU0k2SWsxaGJtRmtieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVVNJc0lrNUJUVVVpT2lKTlpYSmhkV3RsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMU1SeUlzSWs1QlRVVWlPaUpOWVd4aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFU5R0lpd2lUa0ZOUlNJNklrMWhkVzFsY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUa0pZSWl3aVRrRk5SU0k2SWs1aFltbHlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJFY2lMQ0pPUVUxRklqb2lVR0ZrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJGVGlJc0lrNUJUVVVpT2lKUVpXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVVFZExJaXdpVGtGTlJTSTZJbEJoYm1kcllXd2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVGlJc0lrNUJUVVVpT2lKUVlXNW5hMkZzWVc0Z1FuVnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFZTSXNJazVCVFVVaU9pSlFaV3RoYm1KaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4Tklpd2lUa0ZOUlNJNklsQmhiR1Z0WW1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEZjaUxDSk9RVTFGSWpvaVVHRnNkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRrc2lMQ0pPUVUxRklqb2lVRzl1ZEdsaGJtRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCVFZTSXNJazVCVFVVaU9pSlFkWFIxYzNOcFltRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxKS1RTSXNJazVCVFVVaU9pSlNZV3BoSUVGdGNHRjBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOTlVTSXNJazVCVFVVaU9pSlRZVzF3YVhRaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlESWl3aVRrRk5SU0k2SWxOdmJHOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5Uklpd2lUa0ZOUlNJNklsTnZjbTl1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVVWNpTENKT1FVMUZJam9pVTJsdWRHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVrY2lMQ0pPUVUxRklqb2lVMlZ0WVhKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFWQ0lpd2lUa0ZOUlNJNklsTjFjbUZpWVhsaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJKVFNJc0lrNUJUVVVpT2lKVWFXMXBhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFcFJJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR0Z1WkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVXlJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZObGJHOXlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSTFJ5SXNJazVCVFVVaU9pSk1ZVzF3ZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJOUXlJc0lrNUJUVVVpT2lKVVlXMWliMnhoYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTVLSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSU1N5SXNJazVCVFVVaU9pSlVZWEpoYTJGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJVUlNJc0lrNUJUVVVpT2lKVVpYSnVZWFJsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsVlFSeUlzSWs1QlRVVWlPaUpWYW5WdVp5QlFZVzVrWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbGRIVUNJc0lrNUJUVVVpT2lKWFlXbHVaMkZ3ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhUVmdpTENKT1FVMUZJam9pVjJGdFpXNWhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5WFN3aVJFcEtJanBiZXlKRFNWUlpJam9pUVVGUUlpd2lUa0ZOUlNJNklsTmhiV0Z5YVc1a1lTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFVHlJc0lrNUJUVVVpT2lKQ1lXNWtkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkZTaUlzSWs1QlRVVWlPaUpDWlhKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDU1VzaUxDSk9RVTFGSWpvaVFtbGhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1MxTWlMQ0pPUVUxRklqb2lRbVZ1WjJ0MWJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWsxVklpd2lUa0ZOUlNJNklrSnBiV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsQk9JaXdpVGtGTlJTSTZJa0poYkdscmNHRndZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsUklJaXdpVGtGTlJTSTZJa0poZEdGdElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pWVlNJc0lrNUJUVVVpT2lKTmRXRnlZU0JDZFc1bmJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVjFnaUxDSk9RVTFGSWpvaVFtRnVlWFYzWVc1bmFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpEUjBzaUxDSk9RVTFGSWpvaVNtRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVSVmdpTENKT1FVMUZJam9pUkdWcllXa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVsTUlpd2lUa0ZOUlNJNklrUnBiR2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVJFcENJaXdpVGtGTlJTSTZJa3BoYldKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVWRUlpTENKT1FVMUZJam9pVTJsc1lXNW5hWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJVNUZJaXdpVGtGTlJTSTZJa1Z1WkdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSa3RSSWl3aVRrRk5SU0k2SWtaaGEyWmhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKSFZFOGlMQ0pPUVUxRklqb2lSMjl5YjI1MFlXeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtwUFJ5SXNJazVCVFVVaU9pSlpiMmQ1WVd0aGNuUmhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0Q1ZTSXNJazVCVFVVaU9pSkxiM1JoWW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUkVraUxDSk9RVTFGSWpvaVMyVnVaR0Z5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUazhpTENKT1FVMUZJam9pVFdWa1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzA5Rklpd2lUa0ZOUlNJNklrdDFjR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxWRWNpTENKT1FVMUZJam9pUzJWMFlYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFSktJaXdpVGtGTlJTSTZJa3hoWW5WaGJpQkNZV3B2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreExRU0lzSWs1QlRVVWlPaUpNWVhKaGJuUjFhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFeEtJaXdpVGtGTlJTSTZJa3gxWW5WcklFeHBibWRuWVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURTlRSWl3aVRrRk5SU0k2SWt4dmJXSnZheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVZWY2lMQ0pPUVUxRklqb2lUSFYzZFdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVVJESWl3aVRrRk5SU0k2SWsxaGJtRmtieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVVNJc0lrNUJUVVVpT2lKTlpYSmhkV3RsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxWeUlzSWs1QlRVVWlPaUpOWVc1dmEzZGhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVeEhJaXdpVGtGTlJTSTZJazFoYkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVDBZaUxDSk9RVTFGSWpvaVRXRjFiV1Z5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk9RbGdpTENKT1FVMUZJam9pVG1GaWFYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCRVJ5SXNJazVCVFVVaU9pSlFZV1JoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVZPSWl3aVRrRk5SU0k2SWxCbGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKUVIwc2lMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJDQlFhVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRPSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3hoYmlCQ2RXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0Vklpd2lUa0ZOUlNJNklsQmxhMkZ1WW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEUwaUxDSk9RVTFGSWpvaVVHRnNaVzFpWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVnlJc0lrNUJUVVVpT2lKUVlXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCT1N5SXNJazVCVFVVaU9pSlFiMjUwYVdGdVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUZOVklpd2lUa0ZOUlNJNklsQjFkSFZ6YzJsaVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVWtwTklpd2lUa0ZOUlNJNklsSmhhbUVnUVcxd1lYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTAxUklpd2lUa0ZOUlNJNklsTmhiWEJwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUME1pTENKT1FVMUZJam9pVTI5c2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDFFaUxDSk9RVTFGSWpvaVUyOXliMjVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlJSeUlzSWs1QlRVVWlPaUpUYVc1MFlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOU1J5SXNJazVCVFVVaU9pSlRaVzFoY21GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVlVJaUxDSk9RVTFGSWpvaVUzVnlZV0poZVdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRWxOSWl3aVRrRk5SU0k2SWxScGJXbHJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsRWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFZVzVrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBUSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVTJWc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZE5XQ0lzSWs1QlRVVWlPaUpYWVcxbGJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKVFVrY2lPbHQ3SWtOSlZGa2lPaUpCUVZBaUxDSk9RVTFGSWpvaVUyRnRZWEpwYm1SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0ZOVVNJc0lrNUJUVVVpT2lKQmJXSnZiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlVrUWlMQ0pPUVUxRklqb2lRV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRW9pTENKT1FVMUZJam9pUW1GdWFtRnliV0Z6YVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVFZVaUxDSk9RVTFGSWpvaVFtbHRZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFOVFJaXdpVGtGTlJTSTZJa3h2YldKdmF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazVVV0NJc0lrNUJUVVVpT2lKT1lYUjFibUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUlU0aUxDSk9RVTFGSWpvaVVHVnVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzA0aUxDSk9RVTFGSWpvaVVHRnVaMnRoYkdGdUlFSjFiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFNUxJaXdpVGtGTlJTSTZJbEJ2Ym5ScFlXNWhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVUxVWlMQ0pPUVUxRklqb2lVSFYwZFhOemFXSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKU1NrMGlMQ0pPUVUxRklqb2lVbUZxWVNCQmJYQmhkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUZISWl3aVRrRk5SU0k2SWxOcGJuUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxVkNJaXdpVGtGTlJTSTZJbE4xY21GaVlYbGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSSlRTSXNJazVCVFVVaU9pSlVhVzFwYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBSSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdGdVpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1V5SXNJazVCVFVVaU9pSlVZVzVxZFc1bklGTmxiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkxSeUlzSWs1QlRVVWlPaUpNWVcxd2RXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSTlF5SXNJazVCVFVVaU9pSlVZVzFpYjJ4aGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkU1S0lpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlNTeUlzSWs1QlRVVWlPaUpVWVhKaGEyRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSVVJTSXNJazVCVFVVaU9pSlVaWEp1WVhSbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFZRUnlJc0lrNUJUVVVpT2lKVmFuVnVaeUJRWVc1a1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxkSFVDSXNJazVCVFVVaU9pSlhZV2x1WjJGd2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYVFZnaUxDSk9RVTFGSWpvaVYyRnRaVzVoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOVhTd2lWRXRISWpwYmV5SkRTVlJaSWpvaVFVMVJJaXdpVGtGTlJTSTZJa0Z0WW05dUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0ZTUkNJc0lrNUJUVVVpT2lKQmJHOXlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRVNpSXNJazVCVFVVaU9pSkNZVzVxWVhKdFlYTnBiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JFOGlMQ0pPUVUxRklqb2lRbUZ1WkhWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUlVvaUxDSk9RVTFGSWpvaVFtVnlZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrbExJaXdpVGtGTlJTSTZJa0pwWVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa3RUSWl3aVRrRk5SU0k2SWtKbGJtZHJkV3gxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSk5WU0lzSWs1QlRVVWlPaUpDYVcxaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pRVGlJc0lrNUJUVVVpT2lKQ1lXeHBhM0JoY0dGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pVU0NJc0lrNUJUVVVpT2lKQ1lYUmhiU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZWVWlMQ0pPUVUxRklqb2lUWFZoY21FZ1FuVnVaMjhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsZFlJaXdpVGtGTlJTSTZJa0poYm5sMWQyRnVaMmtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVEwZExJaXdpVGtGTlJTSTZJa3BoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVWWUlpd2lUa0ZOUlNJNklrUmxhMkZwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkpUQ0lzSWs1QlRVVWlPaUpFYVd4cElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa1JLUWlJc0lrNUJUVVVpT2lKS1lXMWlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNrb2lMQ0pPUVUxRklqb2lTbUY1WVhCMWNtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkZCVElpd2lUa0ZOUlNJNklrUmxibkJoYzJGeUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JVUWlJc0lrNUJUVVVpT2lKVGFXeGhibWRwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkZUa1VpTENKT1FVMUZJam9pUlc1a1pTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpHUzFFaUxDSk9RVTFGSWpvaVJtRnJabUZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrZFVUeUlzSWs1QlRVVWlPaUpIYjNKdmJuUmhiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVNFeFFJaXdpVGtGTlJTSTZJa2hoYkdsdElGQmxjbVJoYm1FZ1N5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpLVDBjaUxDSk9RVTFGSWpvaVdXOW5lV0ZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUWxVaUxDSk9RVTFGSWpvaVMyOTBZV0poY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVMwRWlMQ0pPUVUxRklqb2lUR0Z5WVc1MGRXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TVNpSXNJazVCVFVVaU9pSk1kV0oxYXlCTWFXNW5aMkYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE9WU0lzSWs1QlRVVWlPaUpOWVd4cGJtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4UFVDSXNJazVCVFVVaU9pSk1iMjFpYjJzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURlZYSWl3aVRrRk5SU0k2SWt4MWQzVnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxRVF5SXNJazVCVFVVaU9pSk5ZVzVoWkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXBWSWl3aVRrRk5SU0k2SWsxaGJYVnFkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxRWlMQ0pPUVUxRklqb2lUV1Z5WVhWclpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFjaUxDSk9RVTFGSWpvaVRXRnViMnQzWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFNUnlJc0lrNUJUVVVpT2lKTllXeGhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVOUdJaXdpVGtGTlJTSTZJazFoZFcxbGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVGtKWUlpd2lUa0ZOUlNJNklrNWhZbWx5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSRWNpTENKT1FVMUZJam9pVUdGa1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCRlRpSXNJazVCVFVVaU9pSlFaVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRWRMSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3dnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFRpSXNJazVCVFVVaU9pSlFZVzVuYTJGc1lXNGdRblZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkxWU0lzSWs1QlRVVWlPaUpRWld0aGJtSmhjblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFeE5JaXdpVGtGTlJTSTZJbEJoYkdWdFltRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRGY2lMQ0pPUVUxRklqb2lVR0ZzZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFUa3NpTENKT1FVMUZJam9pVUc5dWRHbGhibUZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQlRWU0lzSWs1QlRVVWlPaUpRZFhSMWMzTnBZbUYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsSktUU0lzSWs1QlRVVWlPaUpTWVdwaElFRnRjR0YwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTk5VU0lzSWs1QlRVVWlPaUpUWVcxd2FYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5RElpd2lUa0ZOUlNJNklsTnZiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOVJJaXdpVGtGTlJTSTZJbE52Y205dVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVVVjaUxDSk9RVTFGSWpvaVUybHVkR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVa2NpTENKT1FVMUZJam9pVTJWdFlYSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxVkNJaXdpVGtGTlJTSTZJbE4xY21GaVlYbGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSSlRTSXNJazVCVFVVaU9pSlVhVzFwYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBSSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVUdGdVpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1V5SXNJazVCVFVVaU9pSlVZVzVxZFc1bklGTmxiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk5ReUlzSWs1QlRVVWlPaUpVWVcxaWIyeGhhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFNUtJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJTU3lJc0lrNUJUVVVpT2lKVVlYSmhhMkZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxWUVJ5SXNJazVCVFVVaU9pSlZhblZ1WnlCUVlXNWtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZEhVQ0lzSWs1QlRVVWlPaUpYWVdsdVoyRndkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFRWZ2lMQ0pPUVUxRklqb2lWMkZ0Wlc1aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlYU3dpVkVwUklqcGJleUpEU1ZSWklqb2lRVTFSSWl3aVRrRk5SU0k2SWtGdFltOXVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGU1JDSXNJazVCVFVVaU9pSkJiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRThpTENKT1FVMUZJam9pUW1GdVpIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JVb2lMQ0pPUVUxRklqb2lRbVZ5WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa2xMSWl3aVRrRk5SU0k2SWtKcFlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWt0VElpd2lUa0ZOUlNJNklrSmxibWRyZFd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pOVlNJc0lrNUJUVVVpT2lKQ2FXMWhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKUVRpSXNJazVCVFVVaU9pSkNZV3hwYTNCaGNHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVVNDSXNJazVCVFVVaU9pSkNZWFJoYlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWVlVpTENKT1FVMUZJam9pVFhWaGNtRWdRblZ1WjI4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbGRZSWl3aVRrRk5SU0k2SWtKaGJubDFkMkZ1WjJraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRMGRMSWl3aVRrRk5SU0k2SWtwaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFVllJaXdpVGtGTlJTSTZJa1JsYTJGcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JKVENJc0lrNUJUVVVpT2lKRWFXeHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWtSS1FpSXNJazVCVFVVaU9pSktZVzFpYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTa29pTENKT1FVMUZJam9pU21GNVlYQjFjbUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSVVFpSXNJazVCVFVVaU9pSlRhV3hoYm1kcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpGVGtVaUxDSk9RVTFGSWpvaVJXNWtaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKR1MxRWlMQ0pPUVUxRklqb2lSbUZyWm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMEpWSWl3aVRrRk5SU0k2SWt0dmRHRmlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdEVTU0lzSWs1QlRVVWlPaUpMWlc1a1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0T1R5SXNJazVCVFVVaU9pSk5aV1JoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUMFVpTENKT1FVMUZJam9pUzNWd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0VVJ5SXNJazVCVFVVaU9pSkxaWFJoY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVlV3aUxDSk9RVTFGSWpvaVMzVmhiR0VnVEhWdGNIVnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVMwRWlMQ0pPUVUxRklqb2lUR0Z5WVc1MGRXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TVNpSXNJazVCVFVVaU9pSk1kV0oxYXlCTWFXNW5aMkYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE9WU0lzSWs1QlRVVWlPaUpOWVd4cGJtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4UFVDSXNJazVCVFVVaU9pSk1iMjFpYjJzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURlZYSWl3aVRrRk5SU0k2SWt4MWQzVnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxRVF5SXNJazVCVFVVaU9pSk5ZVzVoWkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXBWSWl3aVRrRk5SU0k2SWsxaGJYVnFkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxRWlMQ0pPUVUxRklqb2lUV1Z5WVhWclpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFjaUxDSk9RVTFGSWpvaVRXRnViMnQzWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFNUnlJc0lrNUJUVVVpT2lKTllXeGhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVOUdJaXdpVGtGTlJTSTZJazFoZFcxbGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVGtKWUlpd2lUa0ZOUlNJNklrNWhZbWx5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSRWNpTENKT1FVMUZJam9pVUdGa1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCRlRpSXNJazVCVFVVaU9pSlFaVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRWRMSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3dnVUdsdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTFRpSXNJazVCVFVVaU9pSlFZVzVuYTJGc1lXNGdRblZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkxWU0lzSWs1QlRVVWlPaUpRWld0aGJtSmhjblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFeE5JaXdpVGtGTlJTSTZJbEJoYkdWdFltRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVRGY2lMQ0pPUVUxRklqb2lVR0ZzZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFUa3NpTENKT1FVMUZJam9pVUc5dWRHbGhibUZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQlRWU0lzSWs1QlRVVWlPaUpRZFhSMWMzTnBZbUYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsSktUU0lzSWs1QlRVVWlPaUpTWVdwaElFRnRjR0YwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTk5VU0lzSWs1QlRVVWlPaUpUWVcxd2FYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTA5RElpd2lUa0ZOUlNJNklsTnZiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOVJJaXdpVGtGTlJTSTZJbE52Y205dVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVVVjaUxDSk9RVTFGSWpvaVUybHVkR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRVa2NpTENKT1FVMUZJam9pVTJWdFlYSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxVkNJaXdpVGtGTlJTSTZJbE4xY21GaVlYbGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSSlRTSXNJazVCVFVVaU9pSlVhVzFwYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBUSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVTJWc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZE5XQ0lzSWs1QlRVVWlPaUpYWVcxbGJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKUVRFMGlPbHQ3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFVHlJc0lrNUJUVVVpT2lKQ1lXNWtkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkZTaUlzSWs1QlRVVWlPaUpDWlhKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDU1VzaUxDSk9RVTFGSWpvaVFtbGhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1MxTWlMQ0pPUVUxRklqb2lRbVZ1WjJ0MWJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWsxVklpd2lUa0ZOUlNJNklrSnBiV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsQk9JaXdpVGtGTlJTSTZJa0poYkdscmNHRndZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsUklJaXdpVGtGTlJTSTZJa0poZEdGdElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pWVlNJc0lrNUJUVVVpT2lKTmRXRnlZU0JDZFc1bmJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVjFnaUxDSk9RVTFGSWpvaVFtRnVlWFYzWVc1bmFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpEUjBzaUxDSk9RVTFGSWpvaVNtRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVSVmdpTENKT1FVMUZJam9pUkdWcllXa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVsTUlpd2lUa0ZOUlNJNklrUnBiR2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVJFcENJaXdpVGtGTlJTSTZJa3BoYldKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JLU2lJc0lrNUJUVVVpT2lKS1lYbGhjSFZ5WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVVRk1pTENKT1FVMUZJam9pUkdWdWNHRnpZWElpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGUkNJaXdpVGtGTlJTSTZJbE5wYkdGdVoybDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtWT1JTSXNJazVCVFVVaU9pSkZibVJsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrWkxVU0lzSWs1QlRVVWlPaUpHWVd0bVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUjFSUElpd2lUa0ZOUlNJNklrZHZjbTl1ZEdGc2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpLVDBjaUxDSk9RVTFGSWpvaVdXOW5lV0ZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUWxVaUxDSk9RVTFGSWpvaVMyOTBZV0poY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0VlRDSXNJazVCVFVVaU9pSkxkV0ZzWVNCTWRXMXdkWElpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVRFSktJaXdpVGtGTlJTSTZJa3hoWW5WaGJpQkNZV3B2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreExRU0lzSWs1QlRVVWlPaUpNWVhKaGJuUjFhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFeEtJaXdpVGtGTlJTSTZJa3gxWW5WcklFeHBibWRuWVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURTVWSWl3aVRrRk5SU0k2SWsxaGJHbHVZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFOVFJaXdpVGtGTlJTSTZJa3h2YldKdmF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVlZjaUxDSk9RVTFGSWpvaVRIVjNkV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVUkRJaXdpVGtGTlJTSTZJazFoYm1Ga2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV4SElpd2lUa0ZOUlNJNklrMWhiR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5UMFlpTENKT1FVMUZJam9pVFdGMWJXVnlaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKT1FsZ2lMQ0pPUVUxRklqb2lUbUZpYVhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJFUnlJc0lrNUJUVVVpT2lKUVlXUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFVk9JaXdpVGtGTlJTSTZJbEJsYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpRUjBzaUxDSk9RVTFGSWpvaVVHRnVaMnRoYkNCUWFXNWhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFdE9JaXdpVGtGTlJTSTZJbEJoYm1kcllXeGhiaUJDZFc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXRWSWl3aVRrRk5SU0k2SWxCbGEyRnVZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURmNpTENKT1FVMUZJam9pVUdGc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVGtzaUxDSk9RVTFGSWpvaVVHOXVkR2xoYm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJUVlNJc0lrNUJUVVVpT2lKUWRYUjFjM05wWW1GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEpLVFNJc0lrNUJUVVVpT2lKU1lXcGhJRUZ0Y0dGMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5OVVNJc0lrNUJUVVVpT2lKVFlXMXdhWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOURJaXdpVGtGTlJTSTZJbE52Ykc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlSSWl3aVRrRk5SU0k2SWxOdmNtOXVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVVY2lMQ0pPUVUxRklqb2lVMmx1ZEdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMVZDSWl3aVRrRk5SU0k2SWxOMWNtRmlZWGxoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkpUU0lzSWs1QlRVVWlPaUpVYVcxcGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVwUklpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHRnVaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVeUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRk5sYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJMUnlJc0lrNUJUVVVpT2lKTVlXMXdkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk5ReUlzSWs1QlRVVWlPaUpVWVcxaWIyeGhhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFNUtJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJTU3lJc0lrNUJUVVVpT2lKVVlYSmhhMkZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxWUVJ5SXNJazVCVFVVaU9pSlZhblZ1WnlCUVlXNWtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZEhVQ0lzSWs1QlRVVWlPaUpYWVdsdVoyRndkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFRWZ2lMQ0pPUVUxRklqb2lWMkZ0Wlc1aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlYU3dpVUVkTElqcGJleUpEU1ZSWklqb2lRVTFSSWl3aVRrRk5SU0k2SWtGdFltOXVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGU1JDSXNJazVCVFVVaU9pSkJiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRThpTENKT1FVMUZJam9pUW1GdVpIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JVb2lMQ0pPUVUxRklqb2lRbVZ5WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa2xMSWl3aVRrRk5SU0k2SWtKcFlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWt0VElpd2lUa0ZOUlNJNklrSmxibWRyZFd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pOVlNJc0lrNUJUVVVpT2lKQ2FXMWhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKUVRpSXNJazVCVFVVaU9pSkNZV3hwYTNCaGNHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVVNDSXNJazVCVFVVaU9pSkNZWFJoYlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWVlVpTENKT1FVMUZJam9pVFhWaGNtRWdRblZ1WjI4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbGRZSWl3aVRrRk5SU0k2SWtKaGJubDFkMkZ1WjJraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRMGRMSWl3aVRrRk5SU0k2SWtwaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFVllJaXdpVGtGTlJTSTZJa1JsYTJGcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JKVENJc0lrNUJUVVVpT2lKRWFXeHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWtSS1FpSXNJazVCVFVVaU9pSktZVzFpYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTa29pTENKT1FVMUZJam9pU21GNVlYQjFjbUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSVVFpSXNJazVCVFVVaU9pSlRhV3hoYm1kcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpGVGtVaUxDSk9RVTFGSWpvaVJXNWtaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKR1MxRWlMQ0pPUVUxRklqb2lSbUZyWm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTazlISWl3aVRrRk5SU0k2SWxsdlozbGhhMkZ5ZEdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMEpWSWl3aVRrRk5SU0k2SWt0dmRHRmlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdEVTU0lzSWs1QlRVVWlPaUpMWlc1a1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0T1R5SXNJazVCVFVVaU9pSk5aV1JoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUMFVpTENKT1FVMUZJam9pUzNWd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0VVJ5SXNJazVCVFVVaU9pSkxaWFJoY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVlV3aUxDSk9RVTFGSWpvaVMzVmhiR0VnVEhWdGNIVnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVMwRWlMQ0pPUVUxRklqb2lUR0Z5WVc1MGRXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TVNpSXNJazVCVFVVaU9pSk1kV0oxYXlCTWFXNW5aMkYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE9WU0lzSWs1QlRVVWlPaUpOWVd4cGJtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4UFVDSXNJazVCVFVVaU9pSk1iMjFpYjJzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURlZYSWl3aVRrRk5SU0k2SWt4MWQzVnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxRVF5SXNJazVCVFVVaU9pSk5ZVzVoWkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXBWSWl3aVRrRk5SU0k2SWsxaGJYVnFkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxRWlMQ0pPUVUxRklqb2lUV1Z5WVhWclpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFjaUxDSk9RVTFGSWpvaVRXRnViMnQzWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFNUnlJc0lrNUJUVVVpT2lKTllXeGhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVOUdJaXdpVGtGTlJTSTZJazFoZFcxbGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVGtKWUlpd2lUa0ZOUlNJNklrNWhZbWx5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSRWNpTENKT1FVMUZJam9pVUdGa1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCRlRpSXNJazVCVFVVaU9pSlFaVzVoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lVRXRPSWl3aVRrRk5SU0k2SWxCaGJtZHJZV3hoYmlCQ2RXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV0Vklpd2lUa0ZOUlNJNklsQmxhMkZ1WW1GeWRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVEUwaUxDSk9RVTFGSWpvaVVHRnNaVzFpWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVnlJc0lrNUJUVVVpT2lKUVlXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCT1N5SXNJazVCVFVVaU9pSlFiMjUwYVdGdVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUZOVklpd2lUa0ZOUlNJNklsQjFkSFZ6YzJsaVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVWtwTklpd2lUa0ZOUlNJNklsSmhhbUVnUVcxd1lYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTAxUklpd2lUa0ZOUlNJNklsTmhiWEJwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUME1pTENKT1FVMUZJam9pVTI5c2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVDFFaUxDSk9RVTFGSWpvaVUyOXliMjVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlJSeUlzSWs1QlRVVWlPaUpUYVc1MFlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOU1J5SXNJazVCVFVVaU9pSlRaVzFoY21GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVlVJaUxDSk9RVTFGSWpvaVUzVnlZV0poZVdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRWxOSWl3aVRrRk5SU0k2SWxScGJXbHJZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsRWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlFZVzVrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRXBUSWl3aVRrRk5SU0k2SWxSaGJtcDFibWNnVTJWc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkV0SElpd2lUa0ZOUlNJNklreGhiWEIxYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRTFESWl3aVRrRk5SU0k2SWxSaGJXSnZiR0ZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUa29pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJRYVc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkZKTElpd2lUa0ZOUlNJNklsUmhjbUZyWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWRlJGSWl3aVRrRk5SU0k2SWxSbGNtNWhkR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZWQkhJaXdpVGtGTlJTSTZJbFZxZFc1bklGQmhibVJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMGRRSWl3aVRrRk5SU0k2SWxkaGFXNW5ZWEIxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZE5XQ0lzSWs1QlRVVWlPaUpYWVcxbGJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKTlJFTWlPbHQ3SWtOSlZGa2lPaUpOVEVjaUxDSk9RVTFGSWpvaVRXRnNZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMVBSaUlzSWs1QlRVVWlPaUpOWVhWdFpYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWs1Q1dDSXNJazVCVFVVaU9pSk9ZV0pwY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVJISWl3aVRrRk5SU0k2SWxCaFpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJVNGlMQ0pPUVUxRklqb2lVR1Z1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJbEJIU3lJc0lrNUJUVVVpT2lKUVlXNW5hMkZzSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMwNGlMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJHRnVJRUoxYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMVVpTENKT1FVMUZJam9pVUdWcllXNWlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1UU0lzSWs1QlRVVWlPaUpRWVd4bGJXSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFeFhJaXdpVGtGTlJTSTZJbEJoYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRTVMSWl3aVRrRk5SU0k2SWxCdmJuUnBZVzVoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlNTazBpTENKT1FVMUZJam9pVW1GcVlTQkJiWEJoZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUVkVpTENKT1FVMUZJam9pVTJGdGNHbDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFF5SXNJazVCVFVVaU9pSlRiMnh2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBVU0lzSWs1QlRVVWlPaUpUYjNKdmJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFGSElpd2lUa0ZOUlNJNklsTnBiblJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUpISWl3aVRrRk5SU0k2SWxObGJXRnlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsTWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlRaV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTMGNpTENKT1FVMUZJam9pVEdGdGNIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVRVTWlMQ0pPUVUxRklqb2lWR0Z0WW05c1lXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxST1NpSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVVa3NpTENKT1FVMUZJam9pVkdGeVlXdGhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVZFVWlMQ0pPUVUxRklqb2lWR1Z5Ym1GMFpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpWVUVjaUxDSk9RVTFGSWpvaVZXcDFibWNnVUdGdVpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFIxQWlMQ0pPUVUxRklqb2lWMkZwYm1kaGNIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjAxWUlpd2lUa0ZOUlNJNklsZGhiV1Z1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSllUVTRpTENKT1FVMUZJam9pV0dsaGJtMWxiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKQlRWRWlMQ0pPUVUxRklqb2lRVzFpYjI0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRVkpFSWl3aVRrRk5SU0k2SWtGc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSS0lpd2lUa0ZOUlNJNklrSmhibXBoY20xaGMybHVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRVR5SXNJazVCVFVVaU9pSkNZVzVrZFc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pGU2lJc0lrNUJUVVVpT2lKQ1pYSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1NVc2lMQ0pPUVUxRklqb2lRbWxoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTMU1pTENKT1FVMUZJam9pUW1WdVoydDFiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrMVZJaXdpVGtGTlJTSTZJa0pwYldFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbEJPSWl3aVRrRk5SU0k2SWtKaGJHbHJjR0Z3WVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFJJSWl3aVRrRk5SU0k2SWtKaGRHRnRJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVlZTSXNJazVCVFVVaU9pSk5kV0Z5WVNCQ2RXNW5ieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1YxZ2lMQ0pPUVUxRklqb2lRbUZ1ZVhWM1lXNW5hU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFFVNGlMQ0pPUVUxRklqb2lSM1ZoYm1kNmFHOTFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWtOSFN5SXNJazVCVFVVaU9pSktZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JGV0NJc0lrNUJUVVVpT2lKRVpXdGhhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNVd2lMQ0pPUVUxRklqb2lSR2xzYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkVTa0lpTENKT1FVMUZJam9pU21GdFlta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVwS0lpd2lUa0ZOUlNJNklrcGhlV0Z3ZFhKaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JRVXlJc0lrNUJUVVVpT2lKRVpXNXdZWE5oY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVWRUlpTENKT1FVMUZJam9pVTJsc1lXNW5hWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJVNUZJaXdpVGtGTlJTSTZJa1Z1WkdVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSa3RSSWl3aVRrRk5SU0k2SWtaaGEyWmhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKR1QwTWlMQ0pPUVUxRklqb2lSblY2YUc5MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTRWRJSWl3aVRrRk5SU0k2SWtoaGJtZDZhRzkxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklrcEtUaUlzSWs1QlRVVWlPaUpLYVc1cWFXRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKS1QwY2lMQ0pPUVUxRklqb2lXVzluZVdGcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFFsVWlMQ0pPUVUxRklqb2lTMjkwWVdKaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBSSklpd2lUa0ZOUlNJNklrdGxibVJoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDVQSWl3aVRrRk5SU0k2SWsxbFpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0UFJTSXNJazVCVFVVaU9pSkxkWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMVJISWl3aVRrRk5SU0k2SWt0bGRHRndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreENTaUlzSWs1QlRVVWlPaUpNWVdKMVlXNGdRbUZxYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1TMEVpTENKT1FVMUZJam9pVEdGeVlXNTBkV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreFZWeUlzSWs1QlRVVWlPaUpNZFhkMWF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOU2xVaUxDSk9RVTFGSWpvaVRXRnRkV3AxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxVU0lzSWs1QlRVVWlPaUpOWlhKaGRXdGxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFZ5SXNJazVCVFVVaU9pSk5ZVzV2YTNkaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjFkTENKUVJFY2lPbHQ3SWtOSlZGa2lPaUpRUlU0aUxDSk9RVTFGSWpvaVVHVnVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzA0aUxDSk9RVTFGSWpvaVVHRnVaMnRoYkdGdUlFSjFiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFNUxJaXdpVGtGTlJTSTZJbEJ2Ym5ScFlXNWhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVUxVWlMQ0pPUVUxRklqb2lVSFYwZFhOemFXSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKU1NrMGlMQ0pPUVUxRklqb2lVbUZxWVNCQmJYQmhkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUZISWl3aVRrRk5SU0k2SWxOcGJuUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxSkhJaXdpVGtGTlJTSTZJbE5sYldGeVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOVlFpSXNJazVCVFVVaU9pSlRkWEpoWW1GNVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU1UwaUxDSk9RVTFGSWpvaVZHbHRhV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVU0lzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJoYm1SaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xNaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCVFpXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVFVNaUxDSk9RVTFGSWpvaVZHRnRZbTlzWVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYUjFBaUxDSk9RVTFGSWpvaVYyRnBibWRoY0hVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMDFZSWl3aVRrRk5SU0k2SWxkaGJXVnVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlRWRWlMQ0pPUVUxRklqb2lRVzFpYjI0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRVkpFSWl3aVRrRk5SU0k2SWtGc2IzSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtSS0lpd2lUa0ZOUlNJNklrSmhibXBoY20xaGMybHVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKRlNpSXNJazVCVFVVaU9pSkNaWEpoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNTVXNpTENKT1FVMUZJam9pUW1saGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUzFNaUxDSk9RVTFGSWpvaVFtVnVaMnQxYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRazFWSWl3aVRrRk5SU0k2SWtKcGJXRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxCT0lpd2lUa0ZOUlNJNklrSmhiR2xyY0dGd1lXNGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxSSUlpd2lUa0ZOUlNJNklrSmhkR0Z0SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlZWU0lzSWs1QlRVVWlPaUpOZFdGeVlTQkNkVzVuYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWMWdpTENKT1FVMUZJam9pUW1GdWVYVjNZVzVuYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkRSMHNpTENKT1FVMUZJam9pU21GcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRFRVSWlMQ0pPUVUxRklqb2lRMjlzYjIxaWJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpFUlZnaUxDSk9RVTFGSWpvaVJHVnJZV2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFbE1JaXdpVGtGTlJTSTZJa1JwYkdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lSRXBDSWl3aVRrRk5SU0k2SWtwaGJXSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSS1NpSXNJazVCVFVVaU9pSktZWGxoY0hWeVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFVUZNaUxDSk9RVTFGSWpvaVJHVnVjR0Z6WVhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRlJDSWl3aVRrRk5SU0k2SWxOcGJHRnVaMmwwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrVk9SU0lzSWs1QlRVVWlPaUpGYm1SbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1pMVVNJc0lrNUJUVVVpT2lKR1lXdG1ZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVIxUlBJaXdpVGtGTlJTSTZJa2R2Y205dWRHRnNieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKS1QwY2lMQ0pPUVUxRklqb2lXVzluZVdGcllYSjBZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFFsVWlMQ0pPUVUxRklqb2lTMjkwWVdKaGNuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBSSklpd2lUa0ZOUlNJNklrdGxibVJoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDVQSWl3aVRrRk5SU0k2SWsxbFpHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0UFJTSXNJazVCVFVVaU9pSkxkWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMVJISWl3aVRrRk5SU0k2SWt0bGRHRndZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdFZUQ0lzSWs1QlRVVWlPaUpMZFdGc1lTQk1kVzF3ZFhJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMHNleUpEU1ZSWklqb2lURUpLSWl3aVRrRk5SU0k2SWt4aFluVmhiaUJDWVdwdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hMUVNJc0lrNUJUVVVpT2lKTVlYSmhiblIxYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURXhLSWl3aVRrRk5SU0k2SWt4MVluVnJJRXhwYm1kbllYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEU1Vklpd2lUa0ZOUlNJNklrMWhiR2x1WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURTlRSWl3aVRrRk5SU0k2SWt4dmJXSnZheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVZWY2lMQ0pPUVUxRklqb2lUSFYzZFdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVVJESWl3aVRrRk5SU0k2SWsxaGJtRmtieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVVNJc0lrNUJUVVVpT2lKTlpYSmhkV3RsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxWeUlzSWs1QlRVVWlPaUpOWVc1dmEzZGhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVeEhJaXdpVGtGTlJTSTZJazFoYkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVDBZaUxDSk9RVTFGSWpvaVRXRjFiV1Z5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk9RbGdpTENKT1FVMUZJam9pVG1GaWFYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5WFN3aVZWQkhJanBiZXlKRFNWUlpJam9pUVVGUUlpd2lUa0ZOUlNJNklsTmhiV0Z5YVc1a1lTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpCVFZFaUxDSk9RVTFGSWpvaVFXMWliMjRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFWSkVJaXdpVGtGTlJTSTZJa0ZzYjNJaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JLSWl3aVRrRk5SU0k2SWtKaGJtcGhjbTFoYzJsdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFVHlJc0lrNUJUVVVpT2lKQ1lXNWtkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkZTaUlzSWs1QlRVVWlPaUpDWlhKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDU1VzaUxDSk9RVTFGSWpvaVFtbGhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1MxTWlMQ0pPUVUxRklqb2lRbVZ1WjJ0MWJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWsxVklpd2lUa0ZOUlNJNklrSnBiV0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsQk9JaXdpVGtGTlJTSTZJa0poYkdscmNHRndZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFsUklJaXdpVGtGTlJTSTZJa0poZEdGdElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pWVlNJc0lrNUJUVVVpT2lKTmRXRnlZU0JDZFc1bmJ5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVjFnaUxDSk9RVTFGSWpvaVFtRnVlWFYzWVc1bmFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpEUjBzaUxDSk9RVTFGSWpvaVNtRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVSVmdpTENKT1FVMUZJam9pUkdWcllXa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkVsTUlpd2lUa0ZOUlNJNklrUnBiR2tpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVJFcENJaXdpVGtGTlJTSTZJa3BoYldKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JLU2lJc0lrNUJUVVVpT2lKS1lYbGhjSFZ5WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVVRk1pTENKT1FVMUZJam9pUkdWdWNHRnpZWElpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGUkNJaXdpVGtGTlJTSTZJbE5wYkdGdVoybDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtWT1JTSXNJazVCVFVVaU9pSkZibVJsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrWkxVU0lzSWs1QlRVVWlPaUpHWVd0bVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUjFSUElpd2lUa0ZOUlNJNklrZHZjbTl1ZEdGc2J5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpLVDBjaUxDSk9RVTFGSWpvaVdXOW5lV0ZyWVhKMFlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMUWxVaUxDSk9RVTFGSWpvaVMyOTBZV0poY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMFJKSWl3aVRrRk5SU0k2SWt0bGJtUmhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwNVBJaXdpVGtGTlJTSTZJazFsWkdGdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RQUlNJc0lrNUJUVVVpT2lKTGRYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMxUkhJaXdpVGtGTlJTSTZJa3RsZEdGd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4Q1NpSXNJazVCVFVVaU9pSk1ZV0oxWVc0Z1FtRnFieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVMwRWlMQ0pPUVUxRklqb2lUR0Z5WVc1MGRXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TVNpSXNJazVCVFVVaU9pSk1kV0oxYXlCTWFXNW5aMkYxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreE9WU0lzSWs1QlRVVWlPaUpOWVd4cGJtRjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4UFVDSXNJazVCVFVVaU9pSk1iMjFpYjJzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURlZYSWl3aVRrRk5SU0k2SWt4MWQzVnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxRVF5SXNJazVCVFVVaU9pSk5ZVzVoWkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXBWSWl3aVRrRk5SU0k2SWsxaGJYVnFkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlMxRWlMQ0pPUVUxRklqb2lUV1Z5WVhWclpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUzFjaUxDSk9RVTFGSWpvaVRXRnViMnQzWVhKcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFNUnlJc0lrNUJUVVVpT2lKTllXeGhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVOUdJaXdpVGtGTlJTSTZJazFoZFcxbGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFZKWElpd2lUa0ZOUlNJNklrMXZjbTkzWVd4cElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazVDV0NJc0lrNUJUVVVpT2lKT1lXSnBjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUlU0aUxDSk9RVTFGSWpvaVVHVnVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzA0aUxDSk9RVTFGSWpvaVVHRnVaMnRoYkdGdUlFSjFiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFNUxJaXdpVGtGTlJTSTZJbEJ2Ym5ScFlXNWhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVUxVWlMQ0pPUVUxRklqb2lVSFYwZFhOemFXSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKU1NrMGlMQ0pPUVUxRklqb2lVbUZxWVNCQmJYQmhkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFRWRWlMQ0pPUVUxRklqb2lVMkZ0Y0dsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QUXlJc0lrNUJUVVVpT2lKVGIyeHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFVTSXNJazVCVFVVaU9pSlRiM0p2Ym1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUZISWl3aVRrRk5SU0k2SWxOcGJuUmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxSkhJaXdpVGtGTlJTSTZJbE5sYldGeVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOVlFpSXNJazVCVFVVaU9pSlRkWEpoWW1GNVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU1UwaUxDSk9RVTFGSWpvaVZHbHRhV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVU0lzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJoYm1SaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xNaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCVFpXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVFVNaUxDSk9RVTFGSWpvaVZHRnRZbTlzWVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwMVlJaXdpVGtGTlJTSTZJbGRoYldWdVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmVjBzSWtwUFJ5STZXM3NpUTBsVVdTSTZJa0ZCVUNJc0lrNUJUVVVpT2lKVFlXMWhjbWx1WkdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRVTFSSWl3aVRrRk5SU0k2SWtGdFltOXVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGU1JDSXNJazVCVFVVaU9pSkJiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRThpTENKT1FVMUZJam9pUW1GdVpIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1JVb2lMQ0pPUVUxRklqb2lRbVZ5WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa2xMSWl3aVRrRk5SU0k2SWtKcFlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWt0VElpd2lUa0ZOUlNJNklrSmxibWRyZFd4MUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pOVlNJc0lrNUJUVVVpT2lKQ2FXMWhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKUVRpSXNJazVCVFVVaU9pSkNZV3hwYTNCaGNHRnVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKVVNDSXNJazVCVFVVaU9pSkNZWFJoYlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNWVlVpTENKT1FVMUZJam9pVFhWaGNtRWdRblZ1WjI4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbGRZSWl3aVRrRk5SU0k2SWtKaGJubDFkMkZ1WjJraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRMGRMSWl3aVRrRk5SU0k2SWtwaGEyRnlkR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJFVllJaXdpVGtGTlJTSTZJa1JsYTJGcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JKVENJc0lrNUJUVVVpT2lKRWFXeHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWtSS1FpSXNJazVCVFVVaU9pSktZVzFpYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTa29pTENKT1FVMUZJam9pU21GNVlYQjFjbUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGQlRJaXdpVGtGTlJTSTZJa1JsYm5CaGMyRnlJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtSVVFpSXNJazVCVFVVaU9pSlRhV3hoYm1kcGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpGVGtVaUxDSk9RVTFGSWpvaVJXNWtaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKR1MxRWlMQ0pPUVUxRklqb2lSbUZyWm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa2RVVHlJc0lrNUJUVVVpT2lKSGIzSnZiblJoYkc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMEpWSWl3aVRrRk5SU0k2SWt0dmRHRmlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdEVTU0lzSWs1QlRVVWlPaUpMWlc1a1lYSnBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0T1R5SXNJazVCVFVVaU9pSk5aV1JoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUMFVpTENKT1FVMUZJam9pUzNWd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0VVJ5SXNJazVCVFVVaU9pSkxaWFJoY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNUWtvaUxDSk9RVTFGSWpvaVRHRmlkV0Z1SUVKaGFtOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV0Qklpd2lUa0ZOUlNJNklreGhjbUZ1ZEhWcllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVEVvaUxDSk9RVTFGSWpvaVRIVmlkV3NnVEdsdVoyZGhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVRsVWlMQ0pPUVUxRklqb2lUV0ZzYVc1aGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVDFBaUxDSk9RVTFGSWpvaVRHOXRZbTlySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklreFZWeUlzSWs1QlRVVWlPaUpNZFhkMWF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOUkVNaUxDSk9RVTFGSWpvaVRXRnVZV1J2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUtWU0lzSWs1QlRVVWlPaUpOWVcxMWFuVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0Uklpd2lUa0ZOUlNJNklrMWxjbUYxYTJVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRYSWl3aVRrRk5SU0k2SWsxaGJtOXJkMkZ5YVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5URWNpTENKT1FVMUZJam9pVFdGc1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxUFJpSXNJazVCVFVVaU9pSk5ZWFZ0WlhKbElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazVDV0NJc0lrNUJUVVVpT2lKT1lXSnBjbVVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRsUllJaXdpVGtGTlJTSTZJazVoZEhWdVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUkVjaUxDSk9RVTFGSWpvaVVHRmtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkZUaUlzSWs1QlRVVWlPaUpRWlc1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pVUVkTElpd2lUa0ZOUlNJNklsQmhibWRyWVd3Z1VHbHVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQkxUaUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNZVzRnUW5WdUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJMVlNJc0lrNUJUVVVpT2lKUVpXdGhibUpoY25VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhOSWl3aVRrRk5SU0k2SWxCaGJHVnRZbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFURmNpTENKT1FVMUZJam9pVUdGc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVGtzaUxDSk9RVTFGSWpvaVVHOXVkR2xoYm1Gcklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJUVlNJc0lrNUJUVVVpT2lKUWRYUjFjM05wWW1GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEpLVFNJc0lrNUJUVVVpT2lKU1lXcGhJRUZ0Y0dGMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5OVVNJc0lrNUJUVVVpT2lKVFlXMXdhWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOURJaXdpVGtGTlJTSTZJbE52Ykc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlSSWl3aVRrRk5SU0k2SWxOdmNtOXVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVVY2lMQ0pPUVUxRklqb2lVMmx1ZEdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMVZDSWl3aVRrRk5SU0k2SWxOMWNtRmlZWGxoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUkpUU0lzSWs1QlRVVWlPaUpVYVcxcGEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVkVwUklpd2lUa0ZOUlNJNklsUmhibXAxYm1jZ1VHRnVaR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVeUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRk5sYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJMUnlJc0lrNUJUVVVpT2lKTVlXMXdkVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk5ReUlzSWs1QlRVVWlPaUpVWVcxaWIyeGhhMkVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVZFNUtJaXdpVGtGTlJTSTZJbFJoYm1wMWJtY2dVR2x1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJTU3lJc0lrNUJUVVVpT2lKVVlYSmhhMkZ1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUlVSU0lzSWs1QlRVVWlPaUpVWlhKdVlYUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxWUVJ5SXNJazVCVFVVaU9pSlZhblZ1WnlCUVlXNWtZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsZEhVQ0lzSWs1QlRVVWlPaUpYWVdsdVoyRndkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFRWZ2lMQ0pPUVUxRklqb2lWMkZ0Wlc1aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlYU3dpVTFWQ0lqcGJleUpEU1ZSWklqb2lVMDFSSWl3aVRrRk5SU0k2SWxOaGJYQnBkQ0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFQwTWlMQ0pPUVUxRklqb2lVMjlzYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUMUVpTENKT1FVMUZJam9pVTI5eWIyNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUlJ5SXNJazVCVFVVaU9pSlRhVzUwWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5TUnlJc0lrNUJUVVVpT2lKVFpXMWhjbUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTVTBpTENKT1FVMUZJam9pVkdsdGFXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1VTSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQmhibVJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbE1pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJUWld4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVUzBjaUxDSk9RVTFGSWpvaVRHRnRjSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUVU1pTENKT1FVMUZJam9pVkdGdFltOXNZV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk9TaUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTedJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwMVlJaXdpVGtGTlJTSTZJbGRoYldWdVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpCUVZBaUxDSk9RVTFGSWpvaVUyRnRZWEpwYm1SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0ZOVVNJc0lrNUJUVVVpT2lKQmJXSnZiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQlVrUWlMQ0pPUVUxRklqb2lRV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSRW9pTENKT1FVMUZJam9pUW1GdWFtRnliV0Z6YVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRa1JQSWl3aVRrRk5SU0k2SWtKaGJtUjFibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrVktJaXdpVGtGTlJTSTZJa0psY21GMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pKU3lJc0lrNUJUVVVpT2lKQ2FXRnJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTFV5SXNJazVCVFVVaU9pSkNaVzVuYTNWc2RTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVFZVaUxDSk9RVTFGSWpvaVFtbHRZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1VFNGlMQ0pPUVUxRklqb2lRbUZzYVd0d1lYQmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKQ1ZFZ2lMQ0pPUVUxRklqb2lRbUYwWVcwaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRbFZWSWl3aVRrRk5SU0k2SWsxMVlYSmhJRUoxYm1kdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pYV0NJc0lrNUJUVVVpT2lKQ1lXNTVkWGRoYm1kcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa05IU3lJc0lrNUJUVVVpT2lKS1lXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkZXQ0lzSWs1QlRVVWlPaUpFWld0aGFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpFU1V3aUxDSk9RVTFGSWpvaVJHbHNhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVNrSWlMQ0pPUVUxRklqb2lTbUZ0WW1raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRXBLSWl3aVRrRk5SU0k2SWtwaGVXRndkWEpoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUlFVeUlzSWs1QlRVVWlPaUpFWlc1d1lYTmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVZFSWlMQ0pPUVUxRklqb2lVMmxzWVc1bmFYUWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUlU1Rklpd2lUa0ZOUlNJNklrVnVaR1VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJrdFJJaXdpVGtGTlJTSTZJa1poYTJaaGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpIVkU4aUxDSk9RVTFGSWpvaVIyOXliMjUwWVd4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3BQUnlJc0lrNUJUVVVpT2lKWmIyZDVZV3RoY25SaElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RDVlNJc0lrNUJUVVVpT2lKTGIzUmhZbUZ5ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxSRWtpTENKT1FVMUZJam9pUzJWdVpHRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFRrOGlMQ0pPUVUxRklqb2lUV1ZrWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lTMDlGSWl3aVRrRk5SU0k2SWt0MWNHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFZFY2lMQ0pPUVUxRklqb2lTMlYwWVhCaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEVKS0lpd2lUa0ZOUlNJNklreGhZblZoYmlCQ1lXcHZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4TFFTSXNJazVCVFVVaU9pSk1ZWEpoYm5SMWEyRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV4S0lpd2lUa0ZOUlNJNklreDFZblZySUV4cGJtZG5ZWFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRFNVZJaXdpVGtGTlJTSTZJazFoYkdsdVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEU5UUlpd2lUa0ZOUlNJNklreHZiV0p2YXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1WVmNpTENKT1FVMUZJam9pVEhWM2RXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFVSRElpd2lUa0ZOUlNJNklrMWhibUZrYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5TbFVpTENKT1FVMUZJam9pVFdGdGRXcDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxTFVTSXNJazVCVFVVaU9pSk5aWEpoZFd0bElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVnlJc0lrNUJUVVVpT2lKTllXNXZhM2RoY21raUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXhISWl3aVRrRk5SU0k2SWsxaGJHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlQwWWlMQ0pPUVUxRklqb2lUV0YxYldWeVpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpPUWxnaUxDSk9RVTFGSWpvaVRtRmlhWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNVVXQ0lzSWs1QlRVVWlPaUpPWVhSMWJtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSVTRpTENKT1FVMUZJam9pVUdWdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxCSFN5SXNJazVCVFVVaU9pSlFZVzVuYTJGc0lGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzFVaUxDSk9RVTFGSWpvaVVHVnJZVzVpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhYSWl3aVRrRk5SU0k2SWxCaGJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVTFVaUxDSk9RVTFGSWpvaVVIVjBkWE56YVdKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpTU2swaUxDSk9RVTFGSWpvaVVtRnFZU0JCYlhCaGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmVjBzSWt0T1R5STZXM3NpUTBsVVdTSTZJa0ZCVUNJc0lrNUJUVVVpT2lKVFlXMWhjbWx1WkdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRVTFSSWl3aVRrRk5SU0k2SWtGdFltOXVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGU1JDSXNJazVCVFVVaU9pSkJiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSVW9pTENKT1FVMUZJam9pUW1WeVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtsTElpd2lUa0ZOUlNJNklrSnBZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrdFRJaXdpVGtGTlJTSTZJa0psYm1kcmRXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTlZTSXNJazVCVFVVaU9pSkNhVzFoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlFUaUlzSWs1QlRVVWlPaUpDWVd4cGEzQmhjR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlVTQ0lzSWs1QlRVVWlPaUpDWVhSaGJTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxkWUlpd2lUa0ZOUlNJNklrSmhibmwxZDJGdVoya2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBGT0lpd2lUa0ZOUlNJNklrZDFZVzVuZW1odmRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpEUjBzaUxDSk9RVTFGSWpvaVNtRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkRUVUlpTENKT1FVMUZJam9pUTI5c2IyMWlieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKRVJWZ2lMQ0pPUVUxRklqb2lSR1ZyWVdraUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSRWxNSWl3aVRrRk5SU0k2SWtScGJHa2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pUkVwQ0lpd2lUa0ZOUlNJNklrcGhiV0pwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUktTaUlzSWs1QlRVVWlPaUpLWVhsaGNIVnlZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVVGTWlMQ0pPUVUxRklqb2lSR1Z1Y0dGellYSWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkZSQ0lpd2lUa0ZOUlNJNklsTnBiR0Z1WjJsMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1ZPUlNJc0lrNUJUVVVpT2lKRmJtUmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtaTFVTSXNJazVCVFVVaU9pSkdZV3RtWVdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lSMVJQSWl3aVRrRk5SU0k2SWtkdmNtOXVkR0ZzYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSktUMGNpTENKT1FVMUZJam9pV1c5bmVXRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxRbFVpTENKT1FVMUZJam9pUzI5MFlXSmhjblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwUkpJaXdpVGtGTlJTSTZJa3RsYm1SaGNta2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzA5Rklpd2lUa0ZOUlNJNklrdDFjR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxWRWNpTENKT1FVMUZJam9pUzJWMFlYQmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMxVk1JaXdpVGtGTlJTSTZJa3QxWVd4aElFeDFiWEIxY2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSk1Ra29pTENKT1FVMUZJam9pVEdGaWRXRnVJRUpoYW04aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURXRCSWl3aVRrRk5SU0k2SWt4aGNtRnVkSFZyWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1URW9pTENKT1FVMUZJam9pVEhWaWRXc2dUR2x1WjJkaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVGxVaUxDSk9RVTFGSWpvaVRXRnNhVzVoZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk1UMUFpTENKT1FVMUZJam9pVEc5dFltOXJJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt4VlZ5SXNJazVCVFVVaU9pSk1kWGQxYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk5SRU1pTENKT1FVMUZJam9pVFdGdVlXUnZJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWsxS1ZTSXNJazVCVFVVaU9pSk5ZVzExYW5VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVXRSSWl3aVRrRk5SU0k2SWsxbGNtRjFhMlVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFhJaXdpVGtGTlJTSTZJazFoYm05cmQyRnlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlRFY2lMQ0pPUVUxRklqb2lUV0ZzWVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFQUmlJc0lrNUJUVVVpT2lKTllYVnRaWEpsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrNUNXQ0lzSWs1QlRVVWlPaUpPWVdKcGNtVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUVSSElpd2lUa0ZOUlNJNklsQmhaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFSVTRpTENKT1FVMUZJam9pVUdWdVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxCSFN5SXNJazVCVFVVaU9pSlFZVzVuYTJGc0lGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMDRpTENKT1FVMUZJam9pVUdGdVoydGhiR0Z1SUVKMWJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzFVaUxDSk9RVTFGSWpvaVVHVnJZVzVpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbEJNVFNJc0lrNUJUVVVpT2lKUVlXeGxiV0poYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRXhYSWl3aVRrRk5SU0k2SWxCaGJIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUU1TElpd2lUa0ZOUlNJNklsQnZiblJwWVc1aGF5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRVTFVaUxDSk9RVTFGSWpvaVVIVjBkWE56YVdKaGRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpTU2swaUxDSk9RVTFGSWpvaVVtRnFZU0JCYlhCaGRDSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVFZFaUxDSk9RVTFGSWpvaVUyRnRjR2wwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBReUlzSWs1QlRVVWlPaUpUYjJ4dklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5QVVNJc0lrNUJUVVVpT2lKVGIzSnZibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUxRkhJaXdpVGtGTlJTSTZJbE5wYm5SaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFKSElpd2lUa0ZOUlNJNklsTmxiV0Z5WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5WUWlJc0lrNUJUVVVpT2lKVGRYSmhZbUY1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTVTBpTENKT1FVMUZJam9pVkdsdGFXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxSS1VTSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQmhibVJoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTbE1pTENKT1FVMUZJam9pVkdGdWFuVnVaeUJUWld4dmNpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVUzBjaUxDSk9RVTFGSWpvaVRHRnRjSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVUVU1pTENKT1FVMUZJam9pVkdGdFltOXNZV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUk9TaUlzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVWtzaUxDSk9RVTFGSWpvaVZHRnlZV3RoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVWRVVpTENKT1FVMUZJam9pVkdWeWJtRjBaU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVlVFY2lMQ0pPUVUxRklqb2lWV3AxYm1jZ1VHRnVaR0Z1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlhSMUFpTENKT1FVMUZJam9pVjJGcGJtZGhjSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVYwMVlJaXdpVGtGTlJTSTZJbGRoYldWdVlTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmVjBzSWtOSFN5STZXM3NpUTBsVVdTSTZJa0ZCVUNJc0lrNUJUVVVpT2lKVFlXMWhjbWx1WkdFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lRVTFSSWl3aVRrRk5SU0k2SWtGdFltOXVJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtGU1JDSXNJazVCVFVVaU9pSkJiRzl5SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSkVTaUlzSWs1QlRVVWlPaUpDWVc1cVlYSnRZWE5wYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSVW9pTENKT1FVMUZJam9pUW1WeVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtsTElpd2lUa0ZOUlNJNklrSnBZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrdFRJaXdpVGtGTlJTSTZJa0psYm1kcmRXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTlZTSXNJazVCVFVVaU9pSkNhVzFoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlFUaUlzSWs1QlRVVWlPaUpDWVd4cGEzQmhjR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlVTQ0lzSWs1QlRVVWlPaUpDWVhSaGJTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxkWUlpd2lUa0ZOUlNJNklrSmhibmwxZDJGdVoya2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBGT0lpd2lUa0ZOUlNJNklrZDFZVzVuZW1odmRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpEVFVJaUxDSk9RVTFGSWpvaVEyOXNiMjFpYnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkRVMWdpTENKT1FVMUZJam9pUTJoaGJtZHphR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVJFRkVJaXdpVGtGTlJTSTZJa1JoSUU1aGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pUkVWWUlpd2lUa0ZOUlNJNklrUmxhMkZwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrUkpUQ0lzSWs1QlRVVWlPaUpFYVd4cElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJa1JLUWlJc0lrNUJUVVVpT2lKS1lXMWlhU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKRVNrb2lMQ0pPUVUxRklqb2lTbUY1WVhCMWNtRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUkZCVElpd2lUa0ZOUlNJNklrUmxibkJoYzJGeUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JVUWlJc0lrNUJUVVVpT2lKVGFXeGhibWRwZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkZUa1VpTENKT1FVMUZJam9pUlc1a1pTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpHUzFFaUxDSk9RVTFGSWpvaVJtRnJabUZySWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrZFVUeUlzSWs1QlRVVWlPaUpIYjNKdmJuUmhiRzhpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVNFRkxJaXdpVGtGTlJTSTZJa2hoYVd0dmRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpJVEZBaUxDSk9RVTFGSWpvaVNHRnNhVzBnVUdWeVpHRnVZU0JMSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrcFBSeUlzSWs1QlRVVWlPaUpaYjJkNVlXdGhjblJoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdENWU0lzSWs1QlRVVWlPaUpMYjNSaFltRnlkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTFJFa2lMQ0pPUVUxRklqb2lTMlZ1WkdGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVGs4aUxDSk9RVTFGSWpvaVRXVmtZVzRpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVMwOUZJaXdpVGtGTlJTSTZJa3QxY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpMVkVjaUxDSk9RVTFGSWpvaVMyVjBZWEJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURUpLSWl3aVRrRk5SU0k2SWt4aFluVmhiaUJDWVdwdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hMUVNJc0lrNUJUVVVpT2lKTVlYSmhiblIxYTJFaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURXhLSWl3aVRrRk5SU0k2SWt4MVluVnJJRXhwYm1kbllYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEU1Vklpd2lUa0ZOUlNJNklrMWhiR2x1WVhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lURTlRSWl3aVRrRk5SU0k2SWt4dmJXSnZheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVZWY2lMQ0pPUVUxRklqb2lUSFYzZFdzaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUVVJESWl3aVRrRk5SU0k2SWsxaGJtRmtieUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlNsVWlMQ0pPUVUxRklqb2lUV0Z0ZFdwMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFMVVNJc0lrNUJUVVVpT2lKTlpYSmhkV3RsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMUxWeUlzSWs1QlRVVWlPaUpOWVc1dmEzZGhjbWtpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVeEhJaXdpVGtGTlJTSTZJazFoYkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVDBZaUxDSk9RVTFGSWpvaVRXRjFiV1Z5WlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSk9RbGdpTENKT1FVMUZJam9pVG1GaWFYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWs1VVdDSXNJazVCVFVVaU9pSk9ZWFIxYm1FaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRVJISWl3aVRrRk5SU0k2SWxCaFpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVJVNGlMQ0pPUVUxRklqb2lVR1Z1WVc1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJbEJIU3lJc0lrNUJUVVVpT2lKUVlXNW5hMkZzSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMwNGlMQ0pPUVUxRklqb2lVR0Z1WjJ0aGJHRnVJRUoxYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFTMVVpTENKT1FVMUZJam9pVUdWcllXNWlZWEoxSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsQk1UU0lzSWs1QlRVVWlPaUpRWVd4bGJXSmhibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFeFhJaXdpVGtGTlJTSTZJbEJoYkhVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVRTVMSWl3aVRrRk5SU0k2SWxCdmJuUnBZVzVoYXlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlFVMVVpTENKT1FVMUZJam9pVUhWMGRYTnphV0poZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlNTazBpTENKT1FVMUZJam9pVW1GcVlTQkJiWEJoZENJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlRUVkVpTENKT1FVMUZJam9pVTJGdGNHbDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxOUFF5SXNJazVCVFVVaU9pSlRiMnh2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlBVU0lzSWs1QlRVVWlPaUpUYjNKdmJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVTFGSElpd2lUa0ZOUlNJNklsTnBiblJoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMUpISWl3aVRrRk5SU0k2SWxObGJXRnlZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlZRaUlzSWs1QlRVVWlPaUpUZFhKaFltRjVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNVMGlMQ0pPUVUxRklqb2lWR2x0YVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJLVVNJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCaGJtUmhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVNsTWlMQ0pPUVUxRklqb2lWR0Z1YW5WdVp5QlRaV3h2Y2lJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVTMGNpTENKT1FVMUZJam9pVEdGdGNIVnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVRVTWlMQ0pPUVUxRklqb2lWR0Z0WW05c1lXdGhJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxST1NpSXNJazVCVFVVaU9pSlVZVzVxZFc1bklGQnBibUZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlVVa3NpTENKT1FVMUZJam9pVkdGeVlXdGhiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVZFVWlMQ0pPUVUxRklqb2lWR1Z5Ym1GMFpTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpWVUVjaUxDSk9RVTFGSWpvaVZXcDFibWNnVUdGdVpHRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFIxQWlMQ0pPUVUxRklqb2lWMkZwYm1kaGNIVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVjAxWUlpd2lUa0ZOUlNJNklsZGhiV1Z1WVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSllVMUFpTENKT1FVMUZJam9pVTJWc1pYUmhjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlYwc0lrUlFVeUk2VzNzaVEwbFVXU0k2SWtGQlVDSXNJazVCVFVVaU9pSlRZVzFoY21sdVpHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUVUxUklpd2lUa0ZOUlNJNklrRnRZbTl1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrRlNSQ0lzSWs1QlRVVWlPaUpCYkc5eUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa0pFU2lJc0lrNUJUVVVpT2lKQ1lXNXFZWEp0WVhOcGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDUkU4aUxDSk9RVTFGSWpvaVFtRnVaSFZ1WnlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkNSVW9pTENKT1FVMUZJam9pUW1WeVlYVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWtsTElpd2lUa0ZOUlNJNklrSnBZV3NpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVFrdFRJaXdpVGtGTlJTSTZJa0psYm1kcmRXeDFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtKTlZTSXNJazVCVFVVaU9pSkNhVzFoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlFUaUlzSWs1QlRVVWlPaUpDWVd4cGEzQmhjR0Z1SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrSlVTQ0lzSWs1QlRVVWlPaUpDWVhSaGJTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpDVlZVaUxDSk9RVTFGSWpvaVRYVmhjbUVnUW5WdVoyOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUWxkWUlpd2lUa0ZOUlNJNklrSmhibmwxZDJGdVoya2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUTBGT0lpd2lUa0ZOUlNJNklrZDFZVzVuZW1odmRTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpEUjBzaUxDSk9RVTFGSWpvaVNtRnJZWEowWVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkRVMWdpTENKT1FVMUZJam9pUTJoaGJtZHphR0VpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVJFVllJaXdpVGtGTlJTSTZJa1JsYTJGcElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa1JKVENJc0lrNUJUVVVpT2lKRWFXeHBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWtSS1FpSXNJazVCVFVVaU9pSktZVzFpYVNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkVTa29pTENKT1FVMUZJam9pU21GNVlYQjFjbUVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVJGUkNJaXdpVGtGTlJTSTZJbE5wYkdGdVoybDBJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWtWT1JTSXNJazVCVFVVaU9pSkZibVJsSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrWkxVU0lzSWs1QlRVVWlPaUpHWVd0bVlXc2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUms5RElpd2lUa0ZOUlNJNklrWjFlbWh2ZFNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtraWZTeDdJa05KVkZraU9pSkhWRThpTENKT1FVMUZJam9pUjI5eWIyNTBZV3h2SWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklraEJTeUlzSWs1QlRVVWlPaUpJWVdscmIzVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pU0VaRklpd2lUa0ZOUlNJNklraGxabVZwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklraEhTQ0lzSWs1QlRVVWlPaUpJWVc1bmVtaHZkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa2tpZlN4N0lrTkpWRmtpT2lKS1NrNGlMQ0pPUVUxRklqb2lTbWx1YW1saGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkpJbjBzZXlKRFNWUlpJam9pU2s5SElpd2lUa0ZOUlNJNklsbHZaM2xoYTJGeWRHRWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pUzBKVklpd2lUa0ZOUlNJNklrdHZkR0ZpWVhKMUlpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3RFU1NJc0lrNUJUVVVpT2lKTFpXNWtZWEpwSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrdE5SeUlzSWs1QlRVVWlPaUpMZFc1dGFXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWt0T1R5SXNJazVCVFVVaU9pSk5aV1JoYmlJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSkxUMFVpTENKT1FVMUZJam9pUzNWd1lXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWt0VVJ5SXNJazVCVFVVaU9pSkxaWFJoY0dGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNUWtvaUxDSk9RVTFGSWpvaVRHRmlkV0Z1SUVKaGFtOGlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVEV0Qklpd2lUa0ZOUlNJNklreGhjbUZ1ZEhWcllTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpNVEVvaUxDSk9RVTFGSWpvaVRIVmlkV3NnVEdsdVoyZGhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTVQxQWlMQ0pPUVUxRklqb2lURzl0WW05cklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJa3hWVnlJc0lrNUJUVVVpT2lKTWRYZDFheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKTlJFTWlMQ0pPUVUxRklqb2lUV0Z1WVdSdklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJazFLVlNJc0lrNUJUVVVpT2lKTllXMTFhblVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVRVdFJJaXdpVGtGTlJTSTZJazFsY21GMWEyVWlMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVFV0WElpd2lUa0ZOUlNJNklrMWhibTlyZDJGeWFTSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpOVEVjaUxDSk9RVTFGSWpvaVRXRnNZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklrMVBSaUlzSWs1QlRVVWlPaUpOWVhWdFpYSmxJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWs1Q1dDSXNJazVCVFVVaU9pSk9ZV0pwY21VaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lUa3RISWl3aVRrRk5SU0k2SWs1aGJtcHBibWNpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpKSW4wc2V5SkRTVlJaSWpvaVVFUkhJaXdpVGtGTlJTSTZJbEJoWkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUlU0aUxDSk9RVTFGSWpvaVVHVnVZVzVuSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pU1NKOUxIc2lRMGxVV1NJNklsQkhTeUlzSWs1QlRVVWlPaUpRWVc1bmEyRnNJRkJwYm1GdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpRUzA0aUxDSk9RVTFGSWpvaVVHRnVaMnRoYkdGdUlFSjFiaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVMxVWlMQ0pPUVUxRklqb2lVR1ZyWVc1aVlYSjFJaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lSQ0o5TEhzaVEwbFVXU0k2SWxCTVRTSXNJazVCVFVVaU9pSlFZV3hsYldKaGJtY2lMQ0pUVkVGVVZWTmZVazlWVkVVaU9pSkVJbjBzZXlKRFNWUlpJam9pVUV4WElpd2lUa0ZOUlNJNklsQmhiSFVpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVVFNUxJaXdpVGtGTlJTSTZJbEJ2Ym5ScFlXNWhheUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVUxVWlMQ0pPUVUxRklqb2lVSFYwZFhOemFXSmhkU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKUVZrY2lMQ0pPUVUxRklqb2lVSFZrYjI1bklpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVNTSjlMSHNpUTBsVVdTSTZJbEpLVFNJc0lrNUJUVVVpT2lKU1lXcGhJRUZ0Y0dGMElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbE5OVVNJc0lrNUJUVVVpT2lKVFlXMXdhWFFpTENKVFZFRlVWVk5mVWs5VlZFVWlPaUpFSW4wc2V5SkRTVlJaSWpvaVUwOURJaXdpVGtGTlJTSTZJbE52Ykc4aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMDlSSWl3aVRrRk5SU0k2SWxOdmNtOXVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVFVVY2lMQ0pPUVUxRklqb2lVMmx1ZEdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpUVWtjaUxDSk9RVTFGSWpvaVUyVnRZWEpoYm1jaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lVMVZDSWl3aVRrRk5SU0k2SWxOMWNtRmlZWGxoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsTlhRU0lzSWs1QlRVVWlPaUpLYVdWNVlXNW5JaXdpVTFSQlZGVlRYMUpQVlZSRklqb2lTU0o5TEhzaVEwbFVXU0k2SWxOYVdDSXNJazVCVFVVaU9pSlRhR1Z1ZW1obGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklra2lmU3g3SWtOSlZGa2lPaUpVU1UwaUxDSk9RVTFGSWpvaVZHbHRhV3RoSWl3aVUxUkJWRlZUWDFKUFZWUkZJam9pUkNKOUxIc2lRMGxVV1NJNklsUktVU0lzSWs1QlRVVWlPaUpVWVc1cWRXNW5JRkJoYm1SaGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVU2xNaUxDSk9RVTFGSWpvaVZHRnVhblZ1WnlCVFpXeHZjaUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVMwY2lMQ0pPUVUxRklqb2lUR0Z0Y0hWdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVFVNaUxDSk9RVTFGSWpvaVZHRnRZbTlzWVd0aElpd2lVMVJCVkZWVFgxSlBWVlJGSWpvaVJDSjlMSHNpUTBsVVdTSTZJbFJPU2lJc0lrNUJUVVVpT2lKVVlXNXFkVzVuSUZCcGJtRnVaeUlzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKVVVrc2lMQ0pPUVUxRklqb2lWR0Z5WVd0aGJpSXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpVVkVVaUxDSk9RVTFGSWpvaVZHVnlibUYwWlNJc0lsTlVRVlJWVTE5U1QxVlVSU0k2SWtRaWZTeDdJa05KVkZraU9pSlZVRWNpTENKT1FVMUZJam9pVldwMWJtY2dVR0Z1WkdGdVp5SXNJbE5VUVZSVlUxOVNUMVZVUlNJNklrUWlmU3g3SWtOSlZGa2lPaUpYUjFBaUxDSk9RVTFGSWpvaVYyRnBibWRoY0hVaUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKRUluMHNleUpEU1ZSWklqb2lWMDFZSWl3aVRrRk5SU0k2SWxkaGJXVnVZU0lzSWxOVVFWUlZVMTlTVDFWVVJTSTZJa1FpZlN4N0lrTkpWRmtpT2lKWFZVZ2lMQ0pPUVUxRklqb2lWM1ZvWVc0aUxDSlRWRUZVVlZOZlVrOVZWRVVpT2lKSkluMWRmUT09',
                    "fromSrc": $("#toSrc2_search").val()
                },
                success: function (data) {
                    response(data);
                }
            });
        },
        minLength: 1,
        search: function () {
            $('#toSrc_search').val('');
        },
        select: function (event, ui) {
            event.preventDefault();
            $('#toSrc_search').val(ui.item.CODE);
            $('#toSrc2_search').val(ui.item.CODE);
        },
        open: function () {
            $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            $('#toSrc_search').val('');
        },
        close: function (event, ui) {
            $(this).removeClass("ui-corner-top").addClass("ui-corner-all");

            var resultCity = $('#toSrc_search').val();
            if (resultCity == "")
            {
                $('#toSrc2_search').val('');
            }
        }





    }).click(function () {
        //Use the below line instead of triggering keydown
        if ($('#toSrc2_search').val() == "") {
            $(this).data("autocomplete").search($(this).val());
        }
    }).blur(function () {
        var resultCity = $('#toSrc_search').val();
        if (resultCity == "")
        {
            $('#toSrc2_search').val('');
            $('#toSrc_search').val('');



        }
    });


    $('#insuranceSelected').click(function () {
        var curr;
        curr = 'IDR';
        if (curr != 'IDR')
        {
            swal({
                type: 'error',
                title: 'Oops...',
                text: 'Extra cover insurance not available for this currency'
            });
            return false;
        }

        if ($('#price_detail').val() != '' || $('#price_detail_return').val() != '') {
            if ($('#insuranceSelected').is(':checked')) {
                alert('Are you sure to add extra cover insurance ?');
                value_sti = 1;
            } else {
                alert('Are you sure to cancel extra cover insurance ?');
                value_sti = 0;
                //return false;
            }

            var dataGS = $("#formGS").serializeArray();
            $('#flagClassA').val($('#flagA').val());
            $('#flagClassAR').val($('#flagAR').val());
            if ($('#flagClassA').val() != '' && $('#flagClassAR').val() != '') //finda class a
            {
                dataGS = '';
            }

            $.ajax({
                type: "POST",
                url: "https://www.sriwijayaair.co.id/SJ/Flights/summary_resv",
                data: {
                    status_sti: value_sti,
                    SUMMARY_REST: $('#price_detail_return').val(),
                    DATA_DEPARTURE: $('#price_detail').val(),
                    RETURN: 'NO',
                    POINT_IDR_REDEEM: $('#redeemPointVal').val(),
                    TYPE_ACTION: $('#typeAction').val(),
                    PRICE_OF_BAG: $('#totalPriceBag').val(),
                    GRAND_TOTAL: $('#GrandTotal').val(),
                    GS: dataGS
                },
                success: function (data) {
                    $('#sumRest').html(data);
                    $('#stiVal').val(value_sti);
                    $('#GrandTotal').val($('#grand_total_val').val());
                    $('#GrandTotalORI').val($('#grand_total_ori').val());
                    $('#grandTotal1').html($('#grand_Total').html());
                    $('#grandTotal2').html($('#grand_Total').html());
                    $('#searchKeyDep').val($('#search_key_dep').val());
                    $('#travelDetailDep').val($('#travel_detail_dep').val());
                    bni_instll();
                    mndr_instll();
                    bni_bw(); //finda bniwow
                }
            });


        } else {
            value_sti = 0;
        }

    });

    function detail_flight(A, B) {
        /* Hary */
        $('.detail-flight-' + A).hide();
        /* Hary */
        $("#detailFlight_" + A + "_" + B).show();
    }

    function colorChangeEc(B) {
        $(".btn_price_bus").removeClass('btn btn-danger btn-info').addClass('btn btn-info');
        $(".btn_price_ec").removeClass('btn btn-danger btn-info').addClass('btn btn-info');

        if ($("#btn_price_ec" + B)) {
            $("#btn_price_ec" + B).addClass('btn btn-danger');
        }
    }


    function colorChangeEcR(B) {
        $(".btn_price_bus_r").removeClass('btn btn-danger btn-info').addClass('btn btn-info');
        $(".btn_price_ec_r").removeClass('btn btn-danger btn-info').addClass('btn btn-info');


        if ($("#btn_price_ec_r" + B)) {
            $("#btn_price_ec_r" + B).addClass('btn btn-danger');
        }
    }


    function colorChangeBus(B) {
        $(".btn_price_bus").removeClass('btn btn-danger btn-info').addClass('btn btn-info');
        $(".btn_price_ec").removeClass('btn btn-danger btn-info').addClass('btn btn-info');


        if ($("#btn_price_bus" + B)) {
            $("#btn_price_bus" + B).addClass('btn btn-danger');
        }
    }


    function colorChangeBusR(B) {
        $(".btn_price_bus_r").removeClass('btn btn-danger btn-info').addClass('btn btn-info');
        $(".btn_price_ec_r").removeClass('btn btn-danger btn-info').addClass('btn btn-info');

        if ($("#btn_price_bus_r" + B)) {
            $("#btn_price_bus_r" + B).addClass('btn btn-danger');
        }
    }


    function detail_flight_close(A) {
        $(".btn_price_bus").removeClass('btn btn-danger btn-info').addClass('btn btn-info');
        $(".btn_price_ec").removeClass('btn btn-danger btn-info').addClass('btn btn-info');
        $("#detailFlight_1" + "_" + A).hide();
    }









    function detail_flight_close_r(A) {





        $(".btn_price_bus_r").removeClass('btn btn-danger btn-info').addClass('btn btn-info');
        $(".btn_price_ec_r").removeClass('btn btn-danger btn-info').addClass('btn btn-info');
        $("#detailFlight_2" + "_" + A).hide();
    }

    function detailPricePage() {
        var adultPriceOfBag = 0;
        adultPriceOfBag = parseInt($('#adultPriceBagDep').val()) + parseInt($('#adultPriceBagRet').val());

        var childPriceOfBag = 0;
        childPriceOfBag = parseInt($('#childPriceBagDep').val()) + parseInt($('#childPriceBagRet').val());

        //finda ancill
        $('#adultPriceOfBag').val(adultPriceOfBag);
        $('#childPriceOfBag').val(childPriceOfBag);

        var dgs = $("#formGS").serializeArray();

        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/detail_price_view",

            data: {
                POINT_IDR_REDEEM: $('#redeemPointVal').val(),
                TYPE_ACTION: $('#typeAction').val(),
                DETAIL_PRICE: $('#price_detail').val(),
                status_sti: $('#stiVal').val(),
                ADULT_REFF_BAG: $('#adultReffBag').val(),
                ADULT_PRICE_BAG: $('#adultPriceOfBag').val(),
                CHILD_REFF_BAG: $('#childReffBag').val(),
                CHILD_PRICE_BAG: $('#childPriceOfBag').val(),
                totalSeatPrice: $('#SUM_TPriceGS').val(), //finda ancill
                GRAND_TOTAL: $('#GrandTotal').val(),
                DGS: dgs
            },
            success: function (data) {
                $('#priceDetailBox').html(data);
            }
        });
    }

    function detailPricePageReturn() {
        var adultPriceOfBag = 0;
        adultPriceOfBag = parseInt($('#adultPriceBagDep').val()) + parseInt($('#adultPriceBagRet').val());
        var childPriceOfBag = 0;
        childPriceOfBag = parseInt($('#childPriceBagDep').val()) + parseInt($('#childPriceBagRet').val());

        $('#adultPriceOfBag').val(adultPriceOfBag);
        $('#childPriceOfBag').val(childPriceOfBag);

        var dgs = $("#formGS").serializeArray();

        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/detail_price_return_view",
            data: {
                POINT_IDR_REDEEM: $('#redeemPointVal').val(),
                TYPE_ACTION: $('#typeAction').val(),
                DETAIL_PRICE_DEPARTURE: $('#price_detail').val(),
                DETAIL_PRICE_RETURN: $('#price_detail_return').val(),
                status_sti: $('#stiVal').val(),
                ADULT_REFF_BAG: $('#adultReffBag').val(),
                ADULT_PRICE_BAG: $('#adultPriceOfBag').val(), //finda ancill
                CHILD_REFF_BAG: $('#childReffBag').val(),
                CHILD_PRICE_BAG: $('#childPriceOfBag').val(), //finda ancill
                totalSeatPrice: $('#SUM_TPriceGS').val(), //finda ancill
                GRAND_TOTAL: $('#GrandTotal').val(),
                DGS: dgs
            },
            success: function (data) {
                $('#priceDetailBox').html(data);
            }
        });
    }

    function fareRulesPage() {
        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/fare_detail_view",
            data: {
                //PROMO_CODE : '<?$dataPost['PromoCode']?>', //finda garudamiles
                DATA: $('#price_detail').val(),
                DATA_R: $('#price_detail_return').val()
            },
            success: function (data) {
                $('#fareDetailBox').html(data);
            }
        });
    }

    function getSeat()
    {

        if ($('#price_detail').val() == '')
        {
            swal('', 'Oops, please select departure flight');
            return false;

            $("#viewSeat").data("target").hide();

            if ($('#roundTrip').val() == 'YES')
            {
                if ($('#price_detail_return').val() == '')
                {
                    $("#viewSeat").data("target").hide();
                    swal('', 'Oops, please select return flight');
                    return false;
                }

            }
        }

        var adult = 1;
        var child = 0;
        if (adult > 0)
        {
            var i = 0;
            for (i = 1; i <= adult; i++)
            {
                if ($('#firstNameAdultPax' + i).val() == '' || $('#lastNameAdultPax' + i).val() == '')
                {
                    $("#status-pax-detail").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                    $("#viewSeat").hide(); //finda ancill
                    $('html,body').animate({scrollTop: $("#status-pax-detail").offset().top}, 'slow', alert('Please completed passenger detail'));
                    $("#passColapse").removeClass();
                    $("#collapse-1").addClass('collapse in');
                    return false;
                }
            }
        }

        if (child > 0)
        {
            var c = 0;
            for (c = 1; c <= child; c++)
            {
                if ($('#firstNameChildPax' + c).val() == '' || $('#lastNameChildPax' + c).val() == '')
                {
                    $("#status-pax-detail").text("Uncompleted").removeClass("alert-success badge").addClass("alert-danger badge");
                    $("#viewSeat").hide(); //finda ancill
                    $('html,body').animate({scrollTop: $("#status-pax-detail").offset().top}, 'slow', alert('Please completed passenger detail'));
                    $("#passColapse").removeClass();
                    $("#collapse-1").addClass('collapse in');
                    return false;
                }
            }
        }

        if ($("#status-pax-detail").hasClass("alert-danger badge")) {
            $("#viewSeat").hide(); //finda ancill
            $('html,body').animate({scrollTop: $("#status-pax-detail").offset().top}, 'slow', alert('Please completed passenger detail'));
            $("#passColapse").removeClass();
            $("#collapse-1").addClass('collapse in');
            return false;
        }

        if ($('#roundTrip').val() == 'YES')
        {
            if ($('#flagClassGSD').val() == 'Executive Class' && $('#flagClassGSR').val() == 'Executive Class') //finda bisnis
            {
                swal(
                        '',
                        'Seat selection only for economy class',
                        'error'
                        );
                event.preventDefault();
                return false;
            }

            if ($('#flagClassGSD').val() == 'Eksekutif' && $('#flagClassGSR').val() == 'Eksekutif')
            {
                swal(
                        '',
                        'Seat selection only for economy class',
                        'error'
                        );
                event.preventDefault();
                return false;
            }
        } else {
            if ($('#flagClassGSD').val() == 'Executive Class') //finda bisnis
            {
                swal(
                        '',
                        'Seat selection only for economy class',
                        'error'
                        );
                event.preventDefault();
                return false;
            }

            if ($('#flagClassGSD').val() == 'Eksekutif')
            {
                swal(
                        '',
                        'Seat selection only for economy class',
                        'error'
                        );
                event.preventDefault();
                return false;
            }

        }

        var postData = $("#guessPaymentForm").serialize();
        var dgs = $("#formGS").serializeArray();

        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/getSeat",
            data: {
                DEP: $('#price_detail').val(),
                RET: $('#price_detail_return').val(),
                DATA: postData,
                DGS: dgs
            },
            success: function (data) {
                $('#viewSeat').show();
                $("#viewSeat").modal();
                $('#detailSeat').html(data);

                var PriceFormat_ = 0;
                var PriceFormat = 0;
                if ($('#SUM_TPriceGS_').val() > 0)
                {
                    var PriceFormat_ = $('#SUM_TPriceGS_').val();
                    var PriceFormat = parseInt(PriceFormat_).toLocaleString();
                }

                $('.totalGS').html('IDR ' + PriceFormat);
                $('#SUM_TPriceGS').val($('#SUM_TPriceGS_').val());
            }
        });
    }







    function priceEBT(T, V)
    {
        //T -> D/R
        //V -> Segment
        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/getPriceEBT",
            data: {
                DATA_EBT: V,
                EBT_TYPE: '{"EBT_TYPE":[{"EBT_TYPE_CODE":"BAG05","EBT_TYPE_NAME":"5 Kg"},{"EBT_TYPE_CODE":"BAG10","EBT_TYPE_NAME":"10 Kg"},{"EBT_TYPE_CODE":"BAG15","EBT_TYPE_NAME":"15 Kg"},{"EBT_TYPE_CODE":"BAG20","EBT_TYPE_NAME":"20 Kg"}]}'
            },
            success: function (data) {
                data = data.trim();
                if (data) {
                    loadingHide();
                    var price = JSON.parse(data);
                    if (T == 'D')
                    {
                        $('#EBT_A05_D').val(parseInt(price.EBT_A05_D));
                        $('#EBT_A10_D').val(parseInt(price.EBT_A10_D));
                        $('#EBT_A15_D').val(parseInt(price.EBT_A15_D));
                        $('#EBT_A20_D').val(parseInt(price.EBT_A20_D));
                        $('#EBT_C05_D').val(parseInt(price.EBT_C05_D));
                        $('#EBT_C10_D').val(parseInt(price.EBT_C10_D));
                        $('#EBT_C15_D').val(parseInt(price.EBT_C15_D));
                        $('#EBT_C20_D').val(parseInt(price.EBT_C20_D));
                    } else {
                        $('#EBT_A05_R').val(parseInt(price.EBT_A05_R));
                        $('#EBT_A10_R').val(parseInt(price.EBT_A10_R));
                        $('#EBT_A15_R').val(parseInt(price.EBT_A15_R));
                        $('#EBT_A20_R').val(parseInt(price.EBT_A20_R));
                        $('#EBT_C05_R').val(parseInt(price.EBT_C05_R));
                        $('#EBT_C10_R').val(parseInt(price.EBT_C10_R));
                        $('#EBT_C15_R').val(parseInt(price.EBT_C15_R));
                        $('#EBT_C20_R').val(parseInt(price.EBT_C20_R));

                    }

                } else {
                    loadingHide();
                    swal("", "Sorry, Data EBT can not be show", "error");
                }


            }
        });

    }


    function redeem_point() {
        var redeempoint = 0;
        $('#redeemPointVal').val(redeempoint);
        var idr_point = 100;
        var user_point = parseInt($('#pointCheck').val() * idr_point);

        if (!$('#val_min_redeem').is(":checked") && !$('#val_max_redeem').is(":checked") && !$('#choose_redeem').is(":checked")) {
            swal('', 'Please choose the points for redeem');
            return false;
        } else {
            /*if($('#val_min_redeem').val() > $('#val_max_redeem').val() )
             {
             swal('', 'Can not be choose because of value\'s minimum redeem is greater than maximum redeem');
             return false;
             }*/
            if ($('#val_min_redeem').is(":checked"))
            {
                redeempoint = $('#val_min_redeem').val();
            } else if ($('#val_max_redeem').is(":checked"))
            {
                redeempoint = $('#val_max_redeem').val();
            } else if ($('#choose_redeem').is(":checked"))
            {
                if ($('#values_choose_redeem').val() == '')
                {
                    swal('', 'Please choose the points for redeem');
                    return false;
                } else {
                    redeempoint = $('#values_choose_redeem').val();
                }
            }



































            if ($('#searchKeyDep').val() == '')
            {



                swal('', 'Please choose departure flight');
                return false;
            }
































            else{


                var price_detail = $('#price_detail').val();
                var price_detail_return = $('#price_detail_return').val();

                $('#redeemPointVal').val(redeempoint);

                if ($('#redeemPointVal').val() == 0)
                {


                    swal('', 'Please choose the points for redeem');
                    return false;



                } else if (user_point < $('#redeemPointVal').val())
                {


                    swal('', 'Your point is not enough to redemption');
                    $('.rpoint').prop('checked', false);
                    $('#redeemPointVal').val('');
                    return false;
                }







                    summaryRestReedem(price_detail);
                }
        }
    }







    function summaryRestReedem(V) {

        value_sti = 0;


        if ($('#insuranceSelected').is(':checked')) {
            value_sti = 1;
        }





        $.ajax({
            type: "POST",

            url: "https://www.sriwijayaair.co.id/SJ/Flights/summary_resv",
            data: {

                SUMMARY_REST: $('#price_detail_return').val(),
                DATA_DEPARTURE: V,

                RETURN: 'NO',
                POINT_IDR_REDEEM: $('#redeemPointVal').val(),
                TYPE_ACTION: $('#typeAction').val(),
                status_sti: value_sti,

                PRICE_OF_BAG: $('#totalPriceBag').val(),
                GRAND_TOTAL: $('#GrandTotal').val()
            },
            success: function (data) {
                $('#sumRest').html(data);
                $('#price_detail').val(V);
                $('#stiVal').val(value_sti);










                $('#GrandTotal').val($('#grand_total_val').val());
                $('#GrandTotalORI').val($('#grand_total_ori').val());
                $('#grandTotal1').html($('#grand_Total').html());
                $('#grandTotal2').html($('#grand_Total').html());
                $('#searchKeyDep').val($('#search_key_dep').val());
                $('#travelDetailDep').val($('#travel_detail_dep').val());

                var pricetotal_ = $('#grandTotal1').html();
                var pricetotal__ = pricetotal_.toString().replace(/\./g, '');
                var pricetotal = parseInt(pricetotal__);

                bni_instll();
                mndr_instll();
                bni_bw(); //finda bniwow



            },
            beforeSend: function (d) {




                $('#sumRest').html('<div class="text-center bg-blue-sj" style="padding: 5px 0px;"><div class="tx-white tx-bold">Please wait...</div></div>');
            }
        });





    }



    function summaryRestReedemR(V) {
        var adultPriceOfBag = 0;


        adultPriceOfBag = parseInt($('#adultPriceBagDep').val()) + parseInt($('#adultPriceBagRet').val());

        var childPriceOfBag = 0;


        childPriceOfBag = parseInt($('#childPriceBagDep').val()) + parseInt($('#childPriceBagRet').val());

        var value_sti = 0;


        if ($('#insuranceSelected').is(':checked')) {
            value_sti = 1;
        }





        $('#price_detail_return').val(V);

        $.ajax({
            type: "POST",

            url: "https://www.sriwijayaair.co.id/SJ/Flights/summary_resv",
            data: {
                SUMMARY_REST: V,

                DATA_DEPARTURE: $('#price_detail').val(),
                RETURN: 'NO',
                POINT_IDR_REDEEM: $('#redeemPointVal').val(),
                TYPE_ACTION: $('#typeAction').val(),
                status_sti: value_sti,

                PRICE_OF_BAG: $('#totalPriceBag').val(),
                GRAND_TOTAL: $('#GrandTotal').val()
            },
            success: function (data) {
                $('#sumRest').html(data);



                $('#price_detail_return').val(V);
                $('#stiVal').val(value_sti);






                $('#GrandTotal').val($('#grand_total_val').val());
                $('#GrandTotalORI').val($('#grand_total_ori').val());
                $('#grandTotal1').html($('#grand_Total').html());
                $('#grandTotal2').html($('#grand_Total').html());
                $('#searchKeyRet').val($('#search_key_ret').val());
                $('#travelDetailRet').val($('#travel_detail_ret').val());

                var pricetotal_ = $('#grandTotal1').html();
                var pricetotal__ = pricetotal_.toString().replace(/\./g, '');
                var pricetotal = parseInt(pricetotal__);


                bni_instll();
                mndr_instll();
                bni_bw(); //finda bniwow




            },
            beforeSend: function (d) {




                $('#sumRest').html('<div class="text-center bg-blue-sj" style="padding: 5px 0px;"><div class="tx-white tx-bold">Please wait...</div></div>');
            }
        });




// 			}

    }



    function showRedeem() {



        value_sti = 0;


        if ($('#insuranceSelected').is(':checked')) {
            value_sti = 1;
        }





        $('.rpoint').prop('checked', false);
        $('#redeemPointVal').val('');
        $('#form_values_choose_redeem').hide();
        $('#values_choose_redeem').val('');
        $('#convertPoint').hide();

        $.ajax({
            type: "POST",

            url: "https://www.sriwijayaair.co.id/SJ/Flights/showRedeem",
            data: {

                SUMMARY_REST: $('#price_detail_return').val(),
                DATA_DEPARTURE: $('#price_detail').val(),
                RETURN: 'NO',
                USER_POINT: $('#pointCheck').val(),
                FF_NO: $('#FFNoCheck').val(),

                TYPE_ACTION: $('#typeAction').val(),
                status_sti: value_sti,

                REDEEMPOINT: $('#dataRedeem').val()
            },
            success: function (data) {
                if (data)
                {








                    $('#smiles_redeem_points').html(data);
                }


                $('#GrandTotal').val($('#grand_total_val').val());
                $('#GrandTotalORI').val($('#grand_total_ori').val());
                $('#grandTotal1').html($('#grand_Total').html());
                $('#grandTotal2').html($('#grand_Total').html());
                $('#searchKeyDep').val($('#search_key_dep').val());
                $('#travelDetailDep').val($('#travel_detail_dep').val());
                $('#searchKeyRet').val($('#search_key_ret').val());
                $('#travelDetailRet').val($('#travel_detail_ret').val());
                $("#smiles_redeem_points").show('slow');

                var pricetotal_ = $('#grandTotal1').html();
                var pricetotal__ = pricetotal_.toString().replace(/\./g, '');
                var pricetotal = parseInt(pricetotal__);

                bni_instll();
                mndr_instll();
                bni_bw(); //finda bniwow


            },
            beforeSend: function (d) {





            }
        });
    }

    function summaryRest(V, GS) {

        var value_sti = 0;
        if ($('#insuranceSelected').is(':checked')) {
            value_sti = 1;
        }

        $("#AgreeFOP").prop("checked", false);
        $('#smiles_redeem_points').hide();
        $('.rpoint').prop('checked', false);
        $('#redeemPointVal').val('');
        $('#form_values_choose_redeem').hide();
        $('#values_choose_redeem').val('');
        $('#convertPoint').hide();
        $('#price_detail').val(V);


        if (GS == 'GS')
        {
            var dataGS = $("#formGS").serializeArray();
            $('#flagClassA').val($('#flagA').val());
            $('#flagClassAR').val($('#flagAR').val());
            if ($('#flagClassA').val() != '' || $('#flagClassAR').val() != '')
            {
                $('#TPriceGSD').val(0);
                $('#TPriceGSR').val(0);
            }
            $('.totalGS').html('0');
        } else {
            var dataGS = '';
            $('.rmv-gs-tp').val(0);
            $('.rmv-gs').val('');

            //finda ancill
            $(".bag").val("");
            $(".bagReff").val("");
            $(".bagVal").val(0);
        }

        var postData = $("#guessPaymentForm").serializeArray();

        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/summary_resv",

            data: {
                SUMMARY_REST: $('#price_detail_return').val(),
                DATA_DEPARTURE: V,
                RETURN: 'NO',
                POINT_IDR_REDEEM: 0,
                TYPE_ACTION: $('#typeAction').val(),
                status_sti: value_sti,
                DataPass: postData, //finda ancill
                GS: dataGS
            },
            success: function (data) {
                $('#sumRest').html(data);
                $('#price_detail').val(V);
                $('#stiVal').val(value_sti);
                $('#GrandTotal').val($('#grand_total_val').val());
                $('#GrandTotalORI').val($('#grand_total_ori').val());
                $('#grandTotal1').html($('#grand_Total').html());
                $('#grandTotal2').html($('#grand_Total').html());
                $('#searchKeyDep').val($('#search_key_dep').val());
                $('#travelDetailDep').val($('#travel_detail_dep').val());
                $('#flagClassGSD').val($('#flag_class_gs_d').val()); //finda ancill
                $('#flagClassGSR').val($('#flag_class_gs_r').val()); //finda ancill

                //finda ancill
                if ($('#TPriceGSD').val() > 0 || $('#TPriceGSR').val() > 0)
                {
                    $(".icon-seat").attr("src", "https://www.sriwijayaair.co.id/SJ/assets/images/ancil/I.png");
                    $(".img-seat").attr("src", "https://www.sriwijayaair.co.id/SJ/assets/images/ancil/L.png");
                    $(".sr-seat").hide();
                } else {
                    $(".icon-seat").attr("src", "https://www.sriwijayaair.co.id/SJ/assets/images/ancil/36.png");
                    $(".img-seat").attr("src", "https://www.sriwijayaair.co.id/SJ/assets/images/ancil/86.png");
                    $(".sr-seat").show();
                }


                var pricetotal_ = $('#grandTotal1').html();
                var pricetotal__ = pricetotal_.toString().replace(/\./g, '');
                var pricetotal = parseInt(pricetotal__);
                bni_instll();
                mndr_instll();
                bni_bw(); //finda bniwow
            },
            beforeSend: function (d) {
                $('#sumRest').html('<div class="text-center bg-blue-sj" style="padding: 5px 0px;"><div class="tx-white tx-bold">Please wait...</div></div>');


            }
        });
    }




    function summaryRestR(V, GS) {
        var value_sti = 0;
        if ($('#insuranceSelected').is(':checked')) {
            value_sti = 1;
        }

        $("#AgreeFOP").prop("checked", false);
        $('#smiles_redeem_points').hide();
        $('.rpoint').prop('checked', false);
        $('#redeemPointVal').val('');
        $('#form_values_choose_redeem').hide();
        $('#values_choose_redeem').val('');
        $('#convertPoint').hide();
        $('#price_detail_return').val('');



        if (GS == 'GS')
        {
            var dataGS = $("#formGS").serializeArray();
            $('#flagClassA').val($('#flagA').val());
            $('#flagClassAR').val($('#flagAR').val());
            if ($('#flagClassA').val() != '' || $('#flagClassAR').val() != '')
            {
                $('#TPriceGSD').val(0);
                $('#TPriceGSR').val(0);
            }
            $('.totalGS').html('0');
        } else {
            var dataGS = '';
            $('.rmv-gs-tp').val(0);
            $('.rmv-gs').val('');

            //finda ancill
            $(".bag").val("");
            $(".bagReff").val("");
            $(".bagVal").val(0);
        }

        var postData = $("#guessPaymentForm").serializeArray();

        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/summary_resv",

            data: {
                SUMMARY_REST: V,
                DATA_DEPARTURE: $('#price_detail').val(),
                RETURN: 'NO',
                POINT_IDR_REDEEM: 0,
                TYPE_ACTION: $('#typeAction').val(),
                status_sti: value_sti,
                DataPass: postData, //finda ancill
                GS: dataGS
            },
            success: function (data) {
                $('#sumRest').html(data);
                $('#price_detail_return').val(V);
                $('#stiVal').val(value_sti);
                $('#GrandTotal').val($('#grand_total_val').val());
                $('#GrandTotalORI').val($('#grand_total_ori').val());
                $('#grandTotal1').html($('#grand_Total').html());
                $('#grandTotal2').html($('#grand_Total').html());
                $('#searchKeyRet').val($('#search_key_ret').val());
                $('#travelDetailRet').val($('#travel_detail_ret').val());
                $('#flagClassGSD').val($('#flag_class_gs_d').val()); //finda ancill
                $('#flagClassGSR').val($('#flag_class_gs_r').val()); //finda ancill

                //finda ancill
                if ($('#TPriceGSD').val() > 0 || $('#TPriceGSR').val() > 0)
                {
                    $(".icon-seat").attr("src", "https://www.sriwijayaair.co.id/SJ/assets/images/ancil/I.png");
                    $(".img-seat").attr("src", "https://www.sriwijayaair.co.id/SJ/assets/images/ancil/L.png");
                } else {
                    $(".icon-seat").attr("src", "https://www.sriwijayaair.co.id/SJ/assets/images/ancil/36.png");
                    $(".img-seat").attr("src", "https://www.sriwijayaair.co.id/SJ/assets/images/ancil/86.png");
                }

                var pricetotal_ = $('#grandTotal1').html();
                var pricetotal__ = pricetotal_.toString().replace(/\./g, '');
                var pricetotal = parseInt(pricetotal__);

                bni_instll();
                mndr_instll();
                bni_bw(); //finda bniwow
            },
            beforeSend: function (d) {
                $('#sumRest').html('<div class="text-center bg-blue-sj" style="padding: 5px 0px;"><div class="tx-white tx-bold">Please wait...</div></div>');
            }
        });


    }


    function getEBT(V, F, P, R)
    {
        var typeOfBag = V;
        var typeOfFlight = F;
        var typeOfPass = P;
        var typeOfReff = R;



        if (typeOfFlight == 'D')
        {
            if ($('#pric_edetail').val() == '')
            {
                $(".bag").val("");
                $(".bagReff").val("");
                $(".bagVal").val(0);
                swal('', 'Please choose departure flight');
                return false;
            }
        }



        if (typeOfFlight == 'R')
        {
        }

        var priceOfBag = 0;
        var totalPriceOfBag = 0;
        var ebtA = 0;
        var ebtC = 0;

        var adultBag = 0
        var childBag = 0
        var passOfBag = '';
        passOfBag = 'EBT_' + typeOfFlight + '_' + typeOfPass;
        var adult = 1;
        if (adult > 0)
        {
            if (typeOfPass == 'A')
            {
                ebtA = 0;
                priceOfBag = 0;
                adultBag = '';
                if ($("#ebtSelected").is(':checked'))
                {
                    var i;
                    for (i = 1; i <= adult; i++)
                    {
                        if ($('#' + passOfBag + i).val() == 'BAG05')
                        {
                            if (typeOfFlight == 'D')
                                priceOfBag = parseInt($('#EBT_A05_D').val());
                            else
                                priceOfBag = parseInt($('#EBT_A05_R').val());


                            if (priceOfBag == 0 || priceOfBag == '')
                            {
                                swal('', 'Oops, sorry the extra baggage can not be buy right now.');
                                $('#' + passOfBag + R).val('');
                                return false;
                            }

                        }else if ($('#' + passOfBag + i).val() == 'BAG10')
                        {
                            if (typeOfFlight == 'D')
                                priceOfBag = parseInt($('#EBT_A10_D').val());
                            else
                                priceOfBag = parseInt($('#EBT_A10_R').val());


                            if (priceOfBag == 0 || priceOfBag == '')
                            {
                                swal('', 'Oops, sorry the extra baggage can not be buy right now.');
                                $('#' + passOfBag + R).val('');
                                return false;
                            }

                        } else if ($('#' + passOfBag + i).val() == 'BAG15')
                        {
                            if (typeOfFlight == 'D')
                                priceOfBag = parseInt($('#EBT_A15_D').val());
                            else
                                priceOfBag = parseInt($('#EBT_A15_R').val());

                            if (priceOfBag == 0 || priceOfBag == '')
                            {
                                swal('', 'Oops, sorry the extra baggage can not be buy right now.');
                                $('#' + passOfBag + R).val('');
                                return false;
                            }

                        } else if ($('#' + passOfBag + i).val() == 'BAG20')
                        {
                            if (typeOfFlight == 'D')
                            {
                                priceOfBag = parseInt($('#EBT_A20_D').val());
                            } else
                                priceOfBag = parseInt($('#EBT_A20_R').val());

                            if (priceOfBag == 0 || priceOfBag == '')
                            {
                                swal('', 'Oops, sorry the extra baggage can not be buy right now.');
                                $('#' + passOfBag + R).val('');
                                return false;
                            }
                        } else {
                            priceOfBag = 0;
                        }

                        ebtA += priceOfBag;
                        if (priceOfBag > 0)
                            if (adultBag != '')
                                adultBag = adultBag + '@' + i;
                            else
                                adultBag = i;

                    }

                    $('#adultReffBag').val(adultBag);
                    if (typeOfFlight == 'D')
                        $('#adultPriceBagDep').val(ebtA);
                    else
                        $('#adultPriceBagRet').val(ebtA);

                } else {
                    $('#adultReffBag').val('');
                    if (typeOfFlight == 'D')
                        $('#adultPriceBagDep').val(0);
                    else
                        $('#adultPriceBagRet').val(0);
                }
            }
        }

        var child = 0;
        if (child > 0)
        {
            if (typeOfPass == 'C')
            {
                ebtC = 0;
                priceOfBag = 0;
                childBag = '';
                if ($("#ebtSelected").is(':checked'))
                {
                    var j;
                    for (j = 1; j <= child; j++)
                    {
                        if ($('#' + passOfBag + j).val() == 'BAG05')
                        {
                            if (typeOfFlight == 'D')
                                priceOfBag = parseInt($('#EBT_C05_D').val());
                            else
                                priceOfBag = parseInt($('#EBT_C05_R').val());
                            if (priceOfBag == 0 || priceOfBag == '')
                            {
                                swal('', 'Oops, sorry the extra baggage can not be buy right now.');
                                $('#' + passOfBag + R).val('');
                                return false;
                            }

                        }else if ($('#' + passOfBag + j).val() == 'BAG10')
                        {
                            if (typeOfFlight == 'D')
                                priceOfBag = parseInt($('#EBT_C10_D').val());
                            else
                                priceOfBag = parseInt($('#EBT_C10_R').val());
                            if (priceOfBag == 0 || priceOfBag == '')
                            {
                                swal('', 'Oops, sorry the extra baggage can not be buy right now.');
                                $('#' + passOfBag + R).val('');
                                return false;
                            }

                        } else if ($('#' + passOfBag + j).val() == 'BAG15')
                        {
                            if (typeOfFlight == 'D')
                                priceOfBag = parseInt($('#EBT_C15_D').val());
                            else
                                priceOfBag = parseInt($('#EBT_C15_R').val());


                            if (priceOfBag == 0 || priceOfBag == '')
                            {
                                swal('', 'Oops, sorry the extra baggage can not be buy right now.');
                                $('#' + passOfBag + R).val('');
                                return false;
                            }

                        } else if ($('#' + passOfBag + j).val() == 'BAG20')
                        {
                            if (typeOfFlight == 'D')
                                priceOfBag = parseInt($('#EBT_C20_D').val());
                            else
                                priceOfBag = parseInt($('#EBT_C20_R').val());

                            if (priceOfBag == 0 || priceOfBag == '')
                            {
                                swal('', 'Oops, sorry the extra baggage can not be buy right now.');
                                $('#' + passOfBag + R).val('');
                                return false;
                            }
                        } else {
                            priceOfBag = 0;
                        }

                        ebtC += priceOfBag;
                        if (priceOfBag > 0)
                            childBag = childBag != '' ? childBag + '@' + j : j;
                    }
                    $('#childReffBag').val(childBag);
                    if (typeOfFlight == 'D')
                        $('#childPriceBagDep').val(ebtC);
                    else
                        $('#childPriceBagRet').val(ebtC);

                } else {
                    $('#childReffBag').val('');
                    if (typeOfFlight == 'D')
                        $('#childPriceBagDep').val(0);
                    else
                        $('#childPriceBagRet').val(0);
                }
            }
        }
        totalPriceOfBag = parseInt($('#adultPriceBagDep').val()) + parseInt($('#adultPriceBagRet').val())
                + parseInt($('#childPriceBagDep').val()) + parseInt($('#childPriceBagRet').val());

        adultPriceOfBag = parseInt($('#adultPriceBagDep').val()) + parseInt($('#adultPriceBagRet').val());
        childPriceOfBag = parseInt($('#childPriceBagDep').val()) + parseInt($('#childPriceBagRet').val());

        //finda ancill
        $('#adultPriceOfBag').val(adultPriceOfBag);
        $('#childPriceOfBag').val(childPriceOfBag);

        if ($("#ebtSelected").is(':checked'))
            $('#totalPriceBag').val(totalPriceOfBag);
        else
            $('#totalPriceBag').val(0);

        value_sti = 0;
        if ($('#insuranceSelected').is(':checked')) {
            value_sti = 1;
        }


        //finda ancill
        var dataGS = $("#formGS").serializeArray();
        var dataMeals = $("#formMeals").serializeArray(); //finda meals

        //finda class a
        $('#flagClassA').val($('#flagA').val());
        $('#flagClassAR').val($('#flagAR').val());
        if ($('#flagClassA').val() != '' || $('#flagClassAR').val() != '')
        {
            dataGS = '';
            dataMeals = '';
        }

        $("#AgreeFOP").prop("checked", false);
        $('#smiles_redeem_points').hide();
        $('.rpoint').prop('checked', false);
        $('#redeemPointVal').val('');
        $('#form_values_choose_redeem').hide();
        $('#values_choose_redeem').val('');
        $('#convertPoint').hide();
        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/summary_resv",
            data: {
                SUMMARY_REST: $('#price_detail_return').val(),
                DATA_DEPARTURE: $('#price_detail').val(),
                RETURN: 'NO',
                POINT_IDR_REDEEM: 0,
                TYPE_ACTION: $('#typeAction').val(),
                status_sti: value_sti,
                PRICE_OF_BAG: $('#totalPriceBag').val(),
                GS: dataGS, //finda ancill
                MEALS: dataMeals //finda meals
            },
            success: function (data) {
                $('#sumRest').html(data);
                $('#stiVal').val(value_sti);
                $('#GrandTotal').val($('#grand_total_val').val());
                $('#GrandTotalORI').val($('#grand_total_ori').val());
                $('#grandTotal1').html($('#grand_Total').html());
                $('#grandTotal2').html($('#grand_Total').html());
                $('#searchKeyDep').val($('#search_key_dep').val());
                $('#travelDetailDep').val($('#travel_detail_dep').val());
                $('#adultPriceOfBag_').val($('#adultPriceOfBag').val());
                $('#childPriceOfBag_').val($('#childPriceOfBag').val());

                //finda class a
                $('#flagClassA').val($('#flagA').val());
                $('#flagClassAR').val($('#flagAR').val());
                if ($('#flagClassA').val() != '' || $('#flagClassAR').val() != '')
                {
                    $('#TPriceGSD').val(0);
                    $('#TPriceGSR').val(0);
                }

                var pricetotal_ = $('#grandTotal1').html();
                var pricetotal__ = pricetotal_.toString().replace(/\./g, '');
                var pricetotal = parseInt(pricetotal__);

                bni_instll();
                mndr_instll();
                bni_bw(); //finda bniwow

            },
            beforeSend: function (d) {
                $('#sumRest').html('<div class="text-center bg-blue-sj" style="padding: 5px 0px;"><div class="tx-white tx-bold">Please wait...</div></div>');
            }
        });

    }
    
    //finda bniwow
    function bni_bw()
    {
        var pricetotal = parseInt($('#GrandTotal').val());
        if(pricetotal < 1500000)
        {
            $('#VISA_MC_CC_BW').attr('disabled', true);
            $('#VISA_MC_CC_WB').attr('disabled', true);
        }else{
            $('#VISA_MC_CC_BW').attr('disabled', false);
            $('#VISA_MC_CC_WB').attr('disabled', false);
        }
    }

    function bni_instll()
    {
        $("#CREDIT-BNI").prop('checked', false);
        $('#CREDIT-BNI').attr('disabled', true);
        $('#formCC').hide();

        //BNI INSTALLMENT finda bni
        var pricetotal = parseInt($('#GrandTotal').val());
        var decodedPrice = atob($('#price_detail').val());
        var data = JSON.parse(decodedPrice);
        var getStd = data['StdConv'];
        var dataStd = getStd.split("@");

        var getSta = data['StaConv'];
        var dataSta = getSta.split("@");


        var std = '';
        var departure = '';

        var TENOR_ID = [];
        var START_DATE = [];
        var END_DATE = [];
        var MIN_AMOUNT = [];
        var TENOR_CODE = [];
        var STATUS = [];
        var TENOR = [];
        var valid = false;

        var today = new Date().getTime();

            TENOR_ID[1] = '1';
            START_DATE[1] = new Date('2018/08/23').getTime();
            END_DATE[1] = new Date('2019/05/31').getTime();
            MIN_AMOUNT[1] = '1000000';
            TENOR_CODE[1] = '3 MONTHS';
            STATUS[1] = 'ACTIVE';
            TENOR[1] = '3';
            TENOR_ID[2] = '2';
            START_DATE[2] = new Date('2018/08/23').getTime();
            END_DATE[2] = new Date('2019/05/31').getTime();
            MIN_AMOUNT[2] = '1500000';
            TENOR_CODE[2] = '6 MONTHS';
            STATUS[2] = 'ACTIVE';
            TENOR[2] = '6';
        for (var z = 1; z <= TENOR_ID.length - 1; z++) {
            if (pricetotal >= MIN_AMOUNT[z] && STATUS[z] == "ACTIVE" && today >= START_DATE[z] && today <= END_DATE[z]) {
                $('#TENOR' + z).show();
                valid = true;
            } else {
                $('#TENOR' + z).hide();
            }
        }

        if (valid == true) {
            $('#CREDIT-BNI').attr('disabled', false);
            $('.div-cc-bni').show();
            $('#CC-CICILAN').show();
        }


    }

    function mndr_instll()
    {
        $("#CREDIT-MANDIRI").prop('checked', false);
        $('#CREDIT-MANDIRI').attr('disabled', true);
        $('#formCC').hide();

        var pricetotal = parseInt($('#GrandTotal').val());
        var decodedPrice = atob($('#price_detail').val());
        var data = JSON.parse(decodedPrice);
        var getStd = data['StdConv'];
        var dataStd = getStd.split("@");

        var getSta = data['StaConv'];
        var dataSta = getSta.split("@");


        var std = '';
        var departure = '';

        var TENOR_ID = [];
        var START_DATE = [];
        var END_DATE = [];
        var MIN_AMOUNT = [];
        var TENOR_CODE = [];
        var STATUS = [];
        var TENOR = [];
        var valid = false;

        var today = new Date().getTime();

            TENOR_ID[1] = '1';
            START_DATE[1] = new Date('2018/09/17').getTime();
            END_DATE[1] = new Date('2019/03/31').getTime();
            MIN_AMOUNT[1] = '500000';
            TENOR_CODE[1] = '3 MONTHS';
            STATUS[1] = 'ACTIVE';
            TENOR[1] = '3';
            TENOR_ID[2] = '2';
            START_DATE[2] = new Date('2018/09/17').getTime();
            END_DATE[2] = new Date('2019/03/31').getTime();
            MIN_AMOUNT[2] = '1000000';
            TENOR_CODE[2] = '6 MONTHS';
            STATUS[2] = 'ACTIVE';
            TENOR[2] = '6';
        for (var z = 1; z <= TENOR_ID.length - 1; z++) {
            if (pricetotal >= MIN_AMOUNT[z] && STATUS[z] == "ACTIVE" && today >= START_DATE[z] && today <= END_DATE[z]) {
                $('#TENOR' + z + '_MNDR').show();
                valid = true;
            } else {
                $('#TENOR' + z + '_MNDR').hide();
            }
        }

        if (valid == true) {
            $('#CREDIT-MANDIRI').attr('disabled', false);
            $('.div-cc-mndr').show();
            $('#CREDIT-MANDIRI').show();
        }


    }

    function dateNext(V) {
        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/date_next",
            data: {
                DATE_NEXT: V
            },
            success: function (data) {
                $('#changeDate').html(data);
            }
        });
    }


    function datePrev(V) {
        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/date_prev",
            data: {
                DATE_PREV: V
            },
            success: function (data) {
                $('#changeDate').html(data);
            }
        });
    }


    function datePrevR(V) {
        $.ajax({
            type: "POST",
            url: "https://www.sriwijayaair.co.id/SJ/Flights/date_prev_return",
            data: {
                DATE_PREV: V
            },
            success: function (data) {

                $('#changeDateReturn').html(data);
            }
        });
    }

    function dateNextR(V) {
        $.ajax({
            type: "POST",

            url: "https://www.sriwijayaair.co.id/SJ/Flights/date_next_return",
            data: {
                DATE_NEXT: V
            },
            success: function (data) {

                $('#changeDateReturn').html(data);
            }
        });
    }

    function choose_date(V, T) {

        $('#departureDate').val(V);
        $('#typeAction').val('choose_date');

        var todayDate = new Date('Wed, 17 Apr 2019');
        var dateChoose = new Date(V);
        var returnDate = "";


        if (dateChoose.getTime() < todayDate.getTime())
        {
            if (T != 'a') {




                swal('', 'Please choose the date after today');
                return false;
            }
        } else if (returnDate != "") {








            if (returndate.getTime() < dateChoose.getTime()) {
                if (T != 'a') {


                    swal('', 'Please choose return date more than or equal departure date');
                    return false;
                }
            } else {
                var postData = $("#guessPaymentForm").serialize();
                $.ajax(
                        {
                            url: 'https://www.sriwijayaair.co.id/SJ/Flights/getData',
                            type: "POST",
                            data: postData,
                            success: function (data)
                            {

                                if (data) {
                                    $("#param").val(data);
                                    $('#dataPost').attr('action', 'https://www.sriwijayaair.co.id/SJ/Flights').submit();
                                    return false;
                                } else {
                                    loadingHide();
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                loadingHide();
                                swal('', 'fail to load flight result');
                            },
                            beforeSend: function (d) {
                                loadingShow();
                            }
                        });
            }
        } else {

            var postData = $("#guessPaymentForm").serialize();
            $.ajax(
                    {
                        url: 'https://www.sriwijayaair.co.id/SJ/Flights/getData',
                        type: "POST",
                        data: postData,
                        success: function (data)
                        {
                            if (data) {
                                $("#param").val(data);
                                $('#dataPost').attr('action', 'https://www.sriwijayaair.co.id/SJ/Flights').submit();
                                return false;
                            } else {
                                loadingHide();

                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            loadingHide();
                            swal('', 'fail to load flight result');
                        },
                        beforeSend: function (d) {
                            loadingShow();
                        }
                    });
        }


    }

    function choose_dateR(V, T) {

        $('#returnDate').val(V);
        $('#typeAction').val('choose_dateR');

        var todayDate = new Date('Wed, 17 Apr 2019');
        var dateChoose = new Date(V);
        var departureDate = new Date('Sat, 18 May 2019');

        if (dateChoose.getTime() < todayDate.getTime())
        {
            if (T != 'a') {
                swal('', 'Please choose the date after today');
                return false;
            }

        } else if (departureDate.getTime() > dateChoose.getTime()) {
            if (T != 'a') {
                swal('', 'Please choose return date more than or equal departure date');
                return false;
            }
        } else
        {
            var postData = $("#guessPaymentForm").serialize();
            $.ajax(
                    {
                        url: 'https://www.sriwijayaair.co.id/SJ/Flights/getData',
                        type: "POST",
                        data: postData,
                        success: function (data)

                        {
                            if (data) {
                                $("#param").val(data);
                                $('#dataPost').attr('action', 'https://www.sriwijayaair.co.id/SJ/Flights').submit();


                                return false;
                            } else {
                                loadingHide();
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            loadingHide();
                            swal('', 'fail to load flight result');
                        },
                        beforeSend: function (d) {
                            loadingShow();
                        }
                    });

        }

    }

    function contactDetail()
    {



        if ($('#email').val() == "")
        {
            $('#msgValidator_email').show();
            $('#msgValidator_password').hide();
            $('#msgValidator_checkMeOut').hide();
        } else if ($('#password').val() == "")
        {
            $('#msgValidator_email').hide();
            $('#msgValidator_password').show();
            $('#msgValidator_checkMeOut').hide();
        } else if ($('#checkMeOut').prop('checked') == false)
        {
            $('#msgValidator_email').hide();
            $('#msgValidator_password').hide();
            $('#msgValidator_checkMeOut').show();
        } else {
            $.ajax(
                    {
                        url: 'https://www.sriwijayaair.co.id/SJ/Flights/contactDetail',
                        type: "POST",
                        data: {
                            USERNAME_CONTACT_DETAIL: $('#email').val(),
                            PASSWORD_CONTACT_DETAIL: $('#password').val(),
                            CITY_FROM: 'CGK',
                            CITY_TO: 'UPG',
                            RETURN_STATUS: 'NO',
                            EBT_TYPE: '{"EBT_TYPE":[{"EBT_TYPE_CODE":"BAG05","EBT_TYPE_NAME":"5 Kg"},{"EBT_TYPE_CODE":"BAG10","EBT_TYPE_NAME":"10 Kg"},{"EBT_TYPE_CODE":"BAG15","EBT_TYPE_NAME":"15 Kg"},{"EBT_TYPE_CODE":"BAG20","EBT_TYPE_NAME":"20 Kg"}]}'
                        },
                        success: function (data)

                        {
                            if (data) {
                                loadingHide();

                                $('#dataContactDetail').html(data);


                                $('#usernameCheck').val($('#usernameC').val());
                                $('#FFNoCheck').val($('#FFNoC').val());
                                $('#pointCheck').val($('#pointC').val());

                            } else {
                                loadingHide();
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            loadingHide();
                            //if fails 
                            swal('', 'fail to show contact detail');
                        },
                        beforeSend: function (d) {
                            loadingShow();
                        }
                    });

            //}
            //}).submit();
        }
    }



    function process_ticket()
    {



        $('#typeAction').val('process_ticket');

        var idr_point = 100;
        var user_point = parseInt($('#pointCheck').val() * idr_point);
        var dataGS = '';
        if ($("#formGS").serializeArray() != "")
        {
            dataGS = btoa(JSON.stringify($("#formGS").serializeArray()));//finda ancill
        }

        $('#dataGoldenSeat').val(dataGS);
        
        //finda garudamiles
        
        $(document).ready(function () {


                if ($('#price_detail').val() == "")
                {
                    $('html,body').animate({

                        scrollTop: $("#changeDate").offset().top},
                            'slow',
                            alert('Please choose departure flight'));
                    return false;



                } else {
                    if ($('#AgreeFOP').is(':checked'))
                    {
                        if ($('#redeemPointVal').val() == 0)
                        {
                            $('html,body').animate({scrollTop: $("#smiles_redeem_points").offset().top}, 'slow', alert('Please choose the points for redeem'));
                            return false;

                        } else if (user_point < $('#redeemPointVal').val())
                        {


                            $('html,body').animate({scrollTop: $("#smiles_redeem_points").offset().top}, 'slow', alert('Your point is not enough to redemption'));
                            $('.rpoint').prop('checked', false);
                            $('#redeemPointVal').val('');
                            return false;
                        }
                    }


    
                    if (($('#firstName').val() == "") || ($('#lastName').val() == "") || ($('#address').val() == "") || ($('#city').val() == "") || ($('#province').val() == "") || ($('#originPhone1').val() == "") || ($('#originPhone2').val() == "") || ($('#originPhone3').val() == "") || ($('#mobilePhone1').val() == "") || ($('#mobilePhone2').val() == "") || ($('#mobilePhone3').val() == "") || ($('#emailAddress').val() == "") || ($('#REemailAddress').val() == ""))
                    {
                        $('html,body').animate({scrollTop: $("#status-contact-detail").offset().top}, 'slow', alert('Please completed contact detail'));
                        $("#collapseContact").removeClass();
                        $("#collapse-contact").addClass('collapse in');
                        return false;
                    }

                    if ($('#emailAddress').val() != "")
                    {
                        var email = $('#emailAddress').val();
                        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if (!filter.test(email)) {
                            swal({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Plese enter valid email address'
                            });
                            return false;
                        }

                        if ($('#emailAddress').val() != $('#REemailAddress').val())
                        {
                            swal({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Plese enter email address same with re-email address'
                            });
                            return false;
                        }
                    }

                    if ($("#status-pax-detail").hasClass("alert-danger badge")) {
                        $('html,body').animate({scrollTop: $("#status-pax-detail").offset().top}, 'slow', alert('Please completed passenger detail'));
                        $("#passColapse").removeClass();

                        $("#collapse-1").addClass('collapse in');
                        return false;


                    }

                    if ($('input[name=mystrokeRadioList]:checked').length <= 0) {

                        $('html,body').animate({scrollTop: $("#status-payment").offset().top}, 'slow', alert('Please completed payment detail'));
                        $("#collapsePayment").removeClass();
                        $("#collapse-2").addClass('collapse in');
                        return false;
                    }

                    if ($('#formAgree').prop('checked') == false)
                    {

                        swal('', 'Please check the checkbox for agree all terms and conditions');
                        $('#alertFormAgree').show();

                    } else {
                        if ($('input[name=mystrokeRadioList]:checked').length >= 0) {
                            var flag = 0;
                            //finda bniwow wowbni
                            if ($('input[name="mystrokeRadioList"]:checked').val() == "CREDIT-MCVI" || $('input[name="mystrokeRadioList"]:checked').val() == "CREDIT-MCVI-BW" || $('input[name="mystrokeRadioList"]:checked').val() == "CREDIT-MCVI-WB" || $('input[name="mystrokeRadioList"]:checked').val() == "CREDIT-BNI" || $('input[name="mystrokeRadioList"]:checked').val() == "CREDIT-FFDMD") {
                                if ($('#cardHolderName').val() == "" || $('#emailCC').val() == "") {

                                    $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/doku.png').height(50).width(50);
                                    $("#txtcc").html("Important: You will be redirected to Doku's website to secure your payment.");
                                    $("#formCC").show('slow');

                                    $('html,body').animate({scrollTop: $("#status-payment").offset().top}, 'slow', alert('Please completed payment detail'));
                                    $("#collapsePayment").removeClass();


                                    $("#collapse-2").addClass('collapse in');
                                    return false;

                                    flag = 1;
                                    if ($('input[name="mystrokeRadioList"]:checked').val() == "CREDIT-BNI") {
                                        if ($('#TENOR').val() == "") {
                                            $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/doku.png').height(50).width(50);
                                            $("#txtcc").html("Important: You will be redirected to Doku's website to secure your payment.");
                                            $("#formCC").show('slow');
                                            $('html,body').animate({scrollTop: $("#status-payment").offset().top}, 'slow', alert('Please completed payment detail'));
                                            $("#collapsePayment").removeClass();
                                            $("#collapse-2").addClass('collapse in');
                                            return false;
                                            flag = 1;
                                        }
                                    }

                                }

                                if ($('#emailCC').val() != "" || $('#CC_EMAIL').val() != "")
                                {
                                    var email;
                                    if ($('#emailCC').val() != "")
                                        email = $('#emailCC').val();
                                    else if ($('#CC_EMAIL').val() != "")
                                        email = $('#CC_EMAIL').val();

                                    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                                    if (!filter.test(email)) {
                                        swal({
                                            type: 'error',
                                            title: 'Oops...',
                                            text: 'Plese enter valid email address'
                                        });
                                        return false;
                                    }
                                }

                            } else if ($('input[name="mystrokeRadioList"]:checked').val() == "DEBET-BCA") {
                                if ($('#IDKlikBCA').val() == "") {
                                    flag = 1;
                                    $("#tAndCcondition").show();
                                    $("#klikBCA").show();
                                    $.ajax({
                                        type: "POST",
                                        url: "https://www.sriwijayaair.co.id/SJ/Flights/termConditionbank",
                                        data: {
                                            bank_value: $('#Klik_BCA').val()
                                        },
                                        success: function (data) {
                                            $('#tAndCcondition').html(data);
                                        }
                                    });
                                    $('html,body').animate({scrollTop: $("#status-payment").offset().top}, 'slow', alert('Please completed payment detail'));
                                    $("#collapsePayment").removeClass();
                                    $("#collapse-2").addClass('collapse in');
                                    return false;
                                }
                            } else if ($('input[name="mystrokeRadioList"]:checked').val() == "KLIKDANAMON" || $('input[name="mystrokeRadioList"]:checked').val() == "CIMBCLICKS") {
                                if ($('#CC_NAME').val() == "" || $('#CC_EMAIL').val() == "") {
                                    flag = 1;
                                    $("#CC-INFO-USER").show('slow');
                                    $("#CC-CICILAN").hide('slow');
                                    $('html,body').animate({scrollTop: $("#status-payment").offset().top}, 'slow', alert('Please completed payment detail'));
                                    $("#collapsePayment").removeClass();
                                    $(".div-cc-mndr").hide();
                                    $("#collapse-2").addClass('collapse in');
                                    return false;
                                }
                            } else if ($('input[name="mystrokeRadioList"]:checked').val() == "CREDIT-REDDOT") {
                                        if ($('#cardHolderName').val() == '')
                                    {
                                        swal('', 'Cardholder name is required');
                                        $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/doku.png').height(50).width(100);
                                        $('html,body').animate({scrollTop: $("#status-payment").offset().top}, 'slow');
                                        $("#formCC").show('slow');
                                        $("#collapsePayment").removeClass();
                                        $("#collapse-2").addClass('collapse in');
                                        flag = 1;
                                        return false;
                                    }
                                    if ($('#emailCC').val() == '')
                                    {
                                        swal('', 'Email for field credit card is required');
                                        $("#imgcc").attr('src', 'https://www.sriwijayaair.co.id/SJ/assets/images/payment/doku.png').height(50).width(100);
                                        $('html,body').animate({scrollTop: $("#status-payment").offset().top}, 'slow');
                                        $("#formCC").show('slow');
                                        $("#collapsePayment").removeClass();
                                        $("#collapse-2").addClass('collapse in');
                                        flag = 1;
                                        return false;
                                    }
    
                            }

                        }
                        if (flag == 0) {
                            formSearchFlight();
                        }
                    }

                }

    
        });

    }


    function formSearchFlight()
    {
        $("#guessPaymentForm").bootstrapValidator({
            onSuccess: function (e, data) {

                var postData = $("#guessPaymentForm").serialize();
                $.ajax(
                        {
                            url: 'https://www.sriwijayaair.co.id/SJ/GenerateTicket/index',
                            type: "POST",
                            data: postData,
                            success: function (data)
                            {
                                if (data) {
                                    $("body").html(data);
                                } else {
                                    loadingHide();

                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                loadingHide();
                                //if fails 
                                swal('', 'fail to generate booking code');
                            },
                            beforeSend: function (d) {
                                //$("body").html("<center><strong style='color:blue'>Please Wait...<br><img style='width:150px;height:150px;' src='https://www.sriwijayaair.co.id/SJ/assets/images/image_gif/Preloader_2.gif' /></strong></center>");
                                loadingShow();
                            }
                        });
            }
        }).submit();

    }


    function search_flight()
    {

        if ($('#PromoCode').val() != 'FFDMD') {
            if ($('#PromoCode_search').val() == 'FFDMD')
            {
                swal('', 'You are not allowed to use this promo code ');
                return false;
            }
        }


        $('#fromSrc2').val($('#fromSrc2_search').val());
        $('#fromSrc').val($('#fromSrc_search').val());
        $('#toSrc').val($('#toSrc_search').val());
        $('#toSrc2').val($('#toSrc2_search').val());
        $('#AdultSrc').val($('#AdultSrc_search').val());
        $('#ChildSrc').val($('#ChildSrc_search').val());
        $('#InfantSrc').val($('#InfantSrc_search').val());
        $('#departureDate').val($('#departureDate_search').val());
        $('#returnDate').val($('#returnDate_search').val());
        $('#PromoCode').val($('#PromoCode_search').val());
        $('#typeAction').val('search_flight');



        if ($('#departureDate').val() == '') {
            swal('', 'Departure Date is required ');
            return false;

        }

        if ($('#roundTrip').val() == "YES")
        {
            if ($('#returnDate').val() == '') {
                swal('', 'Return Date is required ');
                return false;

            }
        }

        //DIAMOND
        //FINDA
            var pax = 0;
            pax = parseInt($('#AdultSrc').val()) + parseInt($('#ChildSrc').val());
            if ($('#PromoCode_search').val() == "")
            {
                if (pax >= '2')
                    $('#PromoCode').val(''); //finda SJHEMAT
            } else {
                if ($('#PromoCode_search').val() == "")
                {
                    if (pax >= '2')
                        $('#PromoCode').val(''); //finda SJHEMAT
                    else
                        $('#PromoCode').val("");
                }
                if ($('#PromoCode_search').val() == "SJSHOP")
                    $('#PromoCode').val("");
            }

    
        $(document).ready(function () {

            $("#searchFlightForm").bootstrapValidator().on('success.form.bv', function (e) {




                var postData = $("#guessPaymentForm").serialize();
                $.ajax(
                        {
                            url: 'https://www.sriwijayaair.co.id/SJ/Flights/getData',
                            type: "POST",
                            data: postData,
                            success: function (data)
                            {

                                if (data) {
                                    $("#param").val(data);
                                    $('#dataPost').attr('action', 'https://www.sriwijayaair.co.id/SJ/Flights').submit();
                                    return false;
                                } else {
                                    loadingHide();
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                loadingHide();
                                //swal('','fail to generate booking code');     
                            },
                            beforeSend: function (d) {
                                loadingShow();
                            }
                        });
            }).submit();

        });

    }



    function continue_flight()
    {

        $('#fromSrc2').val($('#fromSrc2_search').val());
        $('#fromSrc').val($('#fromSrc_search').val());
        $('#toSrc').val($('#toSrc_search').val());
        $('#toSrc2').val($('#toSrc2_search').val());
        $('#AdultSrc').val($('#AdultSrc_search').val());
        $('#ChildSrc').val($('#ChildSrc_search').val());
        $('#InfantSrc').val($('#InfantSrc_search').val());
        $('#departureDate').val($('#departureDate_search').val());
        $('#returnDate').val($('#returnDate_search').val());
        $('#typeAction').val('search_flight');

        // $(document).ready(function () {
        $("#guessPaymentForm").bootstrapValidator().on('success.form.bv', function (e) {


            var postData = $("#guessPaymentForm").serialize();
            $.ajax(
                    {
                        url: 'https://www.sriwijayaair.co.id/SJ/Flights/getData',
                        type: "POST",
                        data: postData,
                        success: function (data)
                        {
                            refreshHide();
                            if (data) {
                                $("#param").val(data);
                                $('#dataPost').attr('action', 'https://www.sriwijayaair.co.id/SJ/Flights').submit();
                                return false;
                            } else {
                                loadingHide();
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            loadingHide();
                            //if fails 
                            swal('', 'fail to generate booking code');
                        },
                        beforeSend: function (d) {
                            refreshHide();
                            loadingShow();
                        }
                    });

        }).submit();

        //});
    }


    function calculate_age(birth_month, birth_day, birth_year)
    {
        today_date = new Date();
        today_year = today_date.getFullYear();
        today_month = today_date.getMonth();
        today_day = today_date.getDate();
        age = today_year - birth_year;


        if (today_month < (birth_month - 1))
        {
            age--;
        }
        if (((birth_month - 1) == today_month) && (today_day < birth_day))
        {
            age--;
        }
        return age;
    }


    function loadingShow() {
        //$('#search-dialog').hide();
        $('#my-modal').show();
        var bd = $('<div class="modal-backdrop fade in" id="backdrop"></div>');
        bd.appendTo(document.body);
    }

    function loadingHide() {
        $('#backdrop').remove();
        $('#my-modal').hide();
        // $('#search-dialog').hide();
    }


    function refreshHide()
    {
        $('#continueFlight').hide();
        $('#backToHome').hide();
        $('#refresh-modal').hide();
        $('#search-dialog').hide();
        $('#refresh-modal-dialog').hide();
        $('#refresh-modal-content').hide();
        $('#refresh-modal-body').hide();
        $('#backdropref').remove();
    }

    function refreshShow()
    {
        $('#priceDetailDialog').remove();
        $('#fareRulesDialog').remove();
        $('#search-dialog').hide();
        $('#refresh-modal').show();
        var bdref = $('<div class="modal-backdrop" id="backdropref"></div>');
        bdref.appendTo(document.body);
    }
    function isNumberKey(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;   //if IE
        else
            charCode = evt.which; //if firefox
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function onlyAlphabets(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;  //for IE
        else
            charCode = evt.which;  //for firefox
        if (charCode == 32) //for &lt;space&gt; symbol
            return true;
        if (charCode > 31 && charCode < 65) //for characters before 'A' in ASCII Table
            return false;
        if (charCode > 90 && charCode < 97) //for characters between 'Z' and 'a' in ASCII Table
            return false;
        if (charCode > 122) //for characters beyond 'z' in ASCII Table
            return false;
        return true;
    }

    function signIn()
    {
        $.ajax(
                {
                    url: 'https://www.sriwijayaair.co.id/SJ/Flights/contactDetail',
                    type: "POST",
                    data: {
                        USERNAME_CONTACT_DETAIL: $('#exampleInputEmail2').val(),
                        PASSWORD_CONTACT_DETAIL: $('#exampleInputPassword2').val()
                    },
                    success: function (data)

                    {
                        if (data) {
                            loadingHide();
                            //location.reload();
                        } else {
                            loadingHide();



                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)


                    {
                        loadingHide();
                        //if fails 
                        swal('', 'fail to login');
                    },
                    beforeSend: function (d) {
                        loadingShow();

                    }
                });


    }


    function revalidPaxAmount(int, char) {

        var JS_ADT = $('#AdultSrc_search').val();
        var JS_CHD = $('#ChildSrc_search').val();
        var JS_INF = $('#InfantSrc_search').val();

        if (char == 'AdultSrc_search') {
            var j = 1;
            var k = 1;
            var temp_p;
            document.getElementById('InfantSrc_search').options.length = 0;
            document.getElementById('InfantSrc_search').options[0] = new Option("0", "0", false, false);

            document.getElementById('ChildSrc_search').options.length = 0;
            document.getElementById('ChildSrc_search').options[0] = new Option("0", "0", false, false);

            temp_p = 9 - JS_ADT - JS_CHD;//if(temp_p>2){temp_p=2;}
            for (i = 1; i <= JS_ADT; i++) {
                if (JS_INF == i) {
                    document.getElementById('InfantSrc_search').options[j] = new Option(i, i, true, true);
                } else {
                    document.getElementById('InfantSrc_search').options[j] = new Option(i, i, false, false);
                }
                j++;
            }
            //temp_p =  - JS_ADT - JS_INF;
            temp_p = 9 - JS_ADT;
            for (m = 1; m <= temp_p; m++) {
                if (JS_CHD == m) {
                    document.getElementById('ChildSrc_search').options[k] = new Option(m, m, true, true);
                } else {
                    document.getElementById('ChildSrc_search').options[k] = new Option(m, m, false, false);
                }
                k++;
            }
        } else if (char == 'ChildSrc_search') {
            var j = 1;
            var k = 1;
            var temp_p;
            document.getElementById('InfantSrc_search').options.length = 0;
            document.getElementById('InfantSrc_search').options[0] = new Option("0", "0", false, false);
            document.getElementById('AdultSrc_search').options.length = 0;
            document.getElementById('AdultSrc_search').options[0] = new Option("1", "1", false, false);

            temp_p = 9 - JS_CHD;
            for (m = 2; m <= temp_p; m++) {
                if (JS_ADT == m) {
                    document.getElementById('AdultSrc_search').options[k] = new Option(m, m, true, true);
                } else {
                    document.getElementById('AdultSrc_search').options[k] = new Option(m, m, false, false);
                }
                k++;
            }

            temp_p = 9 - JS_CHD - JS_ADT;//if(temp_p>2){temp_p=2;}
            for (m = 1; m <= JS_ADT; m++) {
                if (JS_INF == m) {
                    document.getElementById('InfantSrc_search').options[j] = new Option(m, m, true, true);
                } else {
                    document.getElementById('InfantSrc_search').options[j] = new Option(m, m, false, false);

                }
                j++;
            }
        } else if (char == 'InfantSrc_search') {
            document.getElementById('ChildSrc_search').options.length = 0;
            document.getElementById('ChildSrc_search').options[0] = new Option("0", "0", false, false);
            var k = 1;
            var j = 1;
            var temp_p;
            temp_p = 9 - JS_ADT;
            for (m = 1; m <= temp_p; m++) {
                if (JS_CHD == m) {
                    document.getElementById('ChildSrc_search').options[k] = new Option(m, m, true, true);
                } else {





                    document.getElementById('ChildSrc_search').options[k] = new Option(m, m, false, false);
                }
                k++;
            }
        }
    }

    function check_FF(T, V)
    {
        //0 = TRUE, 1 = FALSE
        var flag = 0;
        var ffNo = $('#' + T + V).val();



        if (ffNo === '')
        {
            swal("", "Please input FF No.", "warning");
            flag = 0;
            return false;
        } else if (ffNo.length !== 12)
        {
            swal("", "Sorry, invalid FF No.", "error");
            flag = 1;
            return false;
        }

        $.ajax(
                {
                    url: 'https://www.sriwijayaair.co.id/SJ/Flights/check_FF',
                    type: "POST",
                    data: {
                        FF_NO: ffNo
                    },
                    success: function (data)
                    {
                        data = data.trim();
                        if (data) {
                            loadingHide();
                            flag = 0;
                            var json = JSON.parse(data);
                            swal('', 'Hello ' + json.TITLE + ' ' + json.FIRST_NAME + ' ' + json.LAST_NAME, "success");
                        } else {
                            loadingHide();
                            flag = 1;



                            swal("", "Sorry, invalid FF No.", "error");
                            if (ffNo == '')
                                flag = 0;
                            else
                                flag = 1;


                        }
                        $('#checkValidFF').val(flag);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        loadingHide();
                        //if fails 
                        //swal('', 'fail to login');
                    },
                    beforeSend: function (d) {
                        loadingShow();

                    }
                });
    }





</script><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul>

<div class="modal" id="tripTransitDialog" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h5 class="modal-title">Transit Detail</h5>
            </div>
            <div class="modal-body" id="tripTransitBox"></div>
            <!-- div class="modal-footer">
                    <button type="button" class="btn btn-default btn-info" data-dismiss="modal">Close</button>
            </div -->
        </div>
    </div> 
</div>

<div id="ascrail2000" class="nicescroll-rails" style="width: 10px; z-index: 9999; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0.2;"><div style="position: relative; top: 0px; float: right; width: 10px; height: 126px; background-color: rgb(0, 0, 0); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></body></html>