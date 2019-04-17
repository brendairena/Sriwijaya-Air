<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<head>

    <title>Web-Checkin</title>

    <link type="image/x-icon" href="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/images/fluteweb_favicon_0.png" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <link href="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/css/jquery.datetimepicker.css">

<style type="text/css">
    body {
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .navbar {
        margin-bottom: 20px;
    }
    .tab-pane {
        height:400px;
        overflow:auto;
    }
    #termsModal .modal-dialog{
        width: 90%; /* desired relative width */
        margin-left:auto;
        margin-right:auto;
        overflow:hidden;
    }
    .nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
        background-color: transparent;
    }
    .nav  > li > a:focus, .nav  > li  > a:hover {
        background-color: transparent;
    }
    .navbar-default {
        background-color:transparent;
        border-color:transparent;
    }
</style>


</head>

<body>
</style>
<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default bg-transparent">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- LOGO PINDAH KE KIRI, HREF -->
                <a class="navbar-brand" href="#"><img src="https://webcheckin.sriwijayaair.co.id/webcheckin/assets//images/SJ_Horizontal3.png" class="img-responsive"></a>
            </div>
        </div><!--/.container-fluid -->
    </nav>
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center"><strong>Welcome to Sriwijaya Air Group Web Check-In!</strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body" style="background:#f5f5f5;">
                        <div class="active">
                            <h5 class="text-justify">Important:</h5>
                            <ul>
                                <li><h6 class="text-justify">Web check-in service is available from 24 hours to 4 hours before departure.</h6></li>
                                <li><h6 class="text-justify">You are kindly requested to read the terms and conditions of this web check-in.</h6></li>
                                <li><h6 class="text-justify">If you have used web check-in and have baggage, you are required to report back to our check-in counter at the airport no later than 30 minutes before departure.</h6></li>
                                <li><h6 class="text-justify">If you can not print a boarding pass, you can reprint the boarding pass when checking in at the airport.</h6></li>
                            </ul>
                            <h6 class="text-justify"><a href='https://webcheckin.sriwijayaair.co.id/webcheckin/howtouse'>How to use</a></h6>
                            <h6 class="text-justify"><a href='https://webcheckin.sriwijayaair.co.id/webcheckin/faq'>FAQ</a></h6>
                            <div class="col-md-12">
                            <p class="pull-left">
                                <a href="https://www.sriwijayaair.co.id"><img src="https://webcheckin.sriwijayaair.co.id/webcheckin/assets//images/callcenter.png" class="img-responsive"></a>
                            </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-ticket"></i> Your Details </h3>
                    </div>
                    <div class="panel-body" style="overflow:hidden;">
                        <div class="active" style="overflow:hidden;">
                            <form id="formCheckin" name="formCheckin" method="post" class="form-horizontal" action='https://webcheckin.sriwijayaair.co.id/webcheckin/checkin/checkin'>
                                <div class="form-group">
                                    <label for="departureDate" class="col-md-5 control-label">Departure Date</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="departureDate" name="departureDate"
                                                   required data-bv-notempty-message="Required." autocomplete=off>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" id="opendepartureDate"><span class="fas fa-calendar-week"></span></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bookingCode" class="col-md-5 control-label">Booking Code</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="bookingCode" name="bookingCode" maxlength="6" onKeyUp="this.value = this.value.toUpperCase();"
                                                   required data-bv-notempty-message="Required."
                                                   pattern="^[a-zA-Z]+$" data-bv-regexp="true" data-bv-regexp-message="alphabets" autocomplete=off>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" id="btnbookingCode" style="cursor: not-allowed;"><span class="glyphicon glyphicon-barcode"></span></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-5 col-md-7">
                                        <button type="submit" class="btn btn-primary" id="btnSearch" name="btnSearch">Search</button>
                                        <input type="hidden" class="form-control" id="agree" name="agree" value="no">
                                        <input type="hidden" name="ORIGIN_PAGE" value="HOME">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert" style="display:none;">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                                            </div>
                </div>
                <div class="col-md-12" style="padding-left:0px;padding-right: 0px;">
                </div>
            </div>
        </div>
    </div>

        <script type="text/javascript" language="javascript" src="https://webcheckin.sriwijayaair.co.id/webcheckin/assets/js/jquery.datetimepicker.js"></script>
    <script type="text/javascript">
        $('#departureDate').datetimepicker({
            timepicker:false,
            format:'d-m-Y'
        });
        $('#opendepartureDate').click(function(){
            $('#departureDate').datetimepicker('show');
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