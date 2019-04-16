<!DOCTYPE html>
<html lang="en">
<style>
	/*finda tc muamalat*/
	.tnc{
		color:#C90 !important;
	}
	.tnc:hover{
		color:#2dc997;
	}
	
	 @media all and (max-width:30em){
	.margin-btn {
	  padding-top:100% !important;  
	 }
</style>
    <head>
        <meta charset="utf-8">
        <title>Sriwijaya Air</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <!--<link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="https://sriwijayaair.co.id/corporate/assets_corporate/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="https://sriwijayaair.co.id/corporate/assets_corporate/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://sriwijayaair.co.id/corporate/assets_corporate/css/animate.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="https://sriwijayaair.co.id/corporate/assets_corporate/css/style_bankMuamalat.css" rel="stylesheet">
        
        <link href="https://sriwijayaair.co.id/corporate/assets_corporate/css/sweetalert.css" rel="stylesheet">
    </head>

    <body>

        <!--==========================
        Header
        ============================-->
        <header id="header">
            <div class="container">

                <div id="logo" class="pull-left">
                    <a href="https://b2c.rc-sriwijayaair.int/SJ/"><img src="https://sriwijayaair.co.id/corporate/assets_corporate/images/LOGOSJHORIZONTALWHITE1.png" alt="" title="" /></img></a>
                    <!-- Uncomment below if you prefer to use a text logo -->
                    <!--<h1><a href="#hero">Regna</a></h1>-->
                </div>
            </div>
        </header><!-- #header -->

        <!--==========================
          Hero Section
        ============================-->
        <section id="hero">
            <div class="hero-container"> 
            	<!---finda tc muamalat-->
                <form action="https://sriwijayaair.co.id/SJ/" method="post" style="padding-top:31%" class="margin-btn" id="formMuamalat">
                    <a href="javascript:;" onclick="gotoB2C();" class="btn-get-started">KLIK DISINI</a>
                    <br>
                    <a href="javascript:;" onclick="getTCM();" class="tnc"><b>Syarat dan Ketentuan</b></a>
                    <input type="hidden" name="PromoCode" value="BMI10"/>
                    <input type="hidden" name="PromoCode_" value="BMI10"/>
                </form>
               
          </div>
        </section><!-- #hero -->

        <main id="main">
            
        </main>

       
        

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/jquery.min.js"></script>
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/jquery-migrate.min.js"></script>
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/bootstrap.bundle.min.js"></script>
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/easing.min.js"></script>
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/wow.min.js"></script>
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>-->

        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/waypoints.min.js"></script>
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/counterup.min.js"></script>
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/hoverIntent.js"></script>
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/superfish.min.js"></script>

        <!-- Contact Form JavaScript File -->
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/main.js"></script>
        
        <script src="https://sriwijayaair.co.id/corporate/assets_corporate/js/sweetalert.min.js"></script>

    </body>
</html>
<script type="application/javascript">
	<!---finda tc muamalat-->
	function gotoB2C()
	{
		document.getElementById("formMuamalat").submit();
	}
	function getTCM()
	{
		window.open('https://sriwijayaair.co.id/corporate/assets_corporate/document/tnc_muamalat_id.pdf','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;
	}
	
	
</script>
