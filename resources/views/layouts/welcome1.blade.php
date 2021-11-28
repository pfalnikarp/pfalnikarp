<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS File -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



 <!-- bootstrap css file completed -->

  <!-- <link href="{{ URL::asset('css/datepicker.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ URL::asset('css/datepicker.min.css') }}" rel="stylesheet" type="text/css" >
 -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" /> 

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" />

  <!-- <link href="{{ URL::asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->

  <!-- Libraries CSS Files -->
  
  <!-- Responsive Stylesheet File -->
  <!-- <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet"> -->


 

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->



  <!-- navigation bar css -->

 <!-- DIALOG THEME -->
  

 <!--  <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.structure.css') }}" /> -->
  <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}" />
  <!-- <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.theme.css') }}" /> -->

  <!-- DIALOG THEME -->

 <!-- multi select bootstrap option -->
 <link rel="stylesheet" href="{{ URL::asset('dist/css/bootstrap-multiselect.css') }}" />

 <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- file upload css-->
<link rel="stylesheet" href="{{ URL::asset('fileupload/css/style.css') }}">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="{{ URL::asset('fileupload/css/jquery.fileupload.css') }}">
<link rel="stylesheet" href="{{ URL::asset('fileupload/css/jquery.fileupload-ui.css') }}">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="{{ URL::asset('fileupload/css/jquery.fileupload-noscript.css') }}"></noscript>
<noscript><link rel="stylesheet" href="{{ URL::asset('fileupload/css/jquery.fileupload-ui-noscript.css') }}"></noscript>

    
    

<style type="text/css">

div.progress.progress-bar-success {
   
    height: 20px !important;
    background: blue !important ;
    display: block !important;
}

.progress2 {
   
    height: 20px !important;
    background: blue  ;
     display: block ;
}
/* multiselect option  */

.multiselect-container>li>a>label {
  padding: 4px 20px 3px 20px;
}

h2 { text-align: center }

 /*  hide input file  */
#photos {
  opacity: 0;
  height: 1px;
  width: 1px;
}

/* images thumbnail  */
.selectedImages img {
  max-width: 100px;
  max-height: 100px;
  padding: 5px;
  vertical-align: middle;
  text-align: center;
}

@supports (object-fit: cover) {
 .selectedImages img {
    width: 100px;
    height: 100px;
    object-fit: cover;
  }
}

/* images thumbnail */


/*  hide input file  */
  
#selectedFiles {
    max-height: 200px;
    width: auto ;
    /*border: 1px solid ;*/
    overflow-y: scroll;
}

.form1 {

    height: 500px;
}


/* style select option css */

/*select {
  width: 120px;
  padding: 5px;
  display: block;
}        commented on 25/06/2019 live 
*/  

/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}

.semi-square {
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
}

/* -------------------- Colors: Background */
.slate   { background-color: #ddd; }
.green   { background-color: #779126; }
.blue    { background-color: #3b8ec2; }
.yellow  { background-color: #eec111; }
.black   { background-color: #000; }

/* -------------------- Colors: Text */
.slate select   { color: #000; }
.green select   { color: #fff; }
.blue select    { color: #fff; }
.yellow select  { color: #000; }
.black select   { color: #fff; }


/* style select option css */

.panel-default {

  padding: 5px 5px 5px 5px;
}

</style>


<!-- file upload css --> 

<style type="text/css" media="screen">

/* mult select option value bootstrap css */
/*.multiselect-container>li>a>label {
  padding: 4px 20px 3px 20px;
}*/


/* Notifications */

.notification {
    display: inline-block;
    position: relative;
    padding: 0.6em;
    /*background: #3498db;*/
    color: blue;
    border-radius: 0.2em;
    font-size: 1.3em;
/*    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);*/
}

.notification::before, 
.notification::after {
    /*color: #fff;*/
    color: blue;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
}

.notification::before {
    display: block;
    content: "\f0f3";
    font-family: "FontAwesome";
    transform-origin: top center;
}

.notification::after {
    font-family: Arial;
    font-size: 0.7em;
    font-weight: 700;
    position: absolute;
    top: -15px;
    right: -15px;
    padding: 5px 8px;
    line-height: 100%;
    border: 2px #fff solid;
    border-radius: 60px;
    background: #3498db;
    opacity: 0;
    content: attr(data-count);
    opacity: 0;
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    transition: transform, opacity;
    transition-duration: 0.3s;
    transition-timing-function: ease-out;
}

.notification.notify::before {
    -webkit-animation: ring 1.5s ease;
    animation: ring 1.5s ease;
}

.notification.show-count::after {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
}

@-webkit-keyframes ring {
    0% {
        -webkit-transform: rotate(35deg);
    }
    12.5% {
        -webkit-transform: rotate(-30deg);
    }
    25% {
        -webkit-transform: rotate(25deg);
    }
    37.5% {
        -webkit-transform: rotate(-20deg);
    }
    50% {
        -webkit-transform: rotate(15deg);
    }
    62.5% {
        -webkit-transform: rotate(-10deg);
    }
    75% {
        -webkit-transform: rotate(5deg);
    }
    100% {
        -webkit-transform: rotate(0deg);
    }
}

@keyframes ring {
    0% {
        -webkit-transform: rotate(35deg);
        transform: rotate(35deg);
    }
    12.5% {
        -webkit-transform: rotate(-30deg);
        transform: rotate(-30deg);
    }
    25% {
        -webkit-transform: rotate(25deg);
        transform: rotate(25deg);
    }
    37.5% {
        -webkit-transform: rotate(-20deg);
        transform: rotate(-20deg);
    }
    50% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
    }
    62.5% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg);
    }
    75% {
        -webkit-transform: rotate(5deg);
        transform: rotate(5deg);
    }
    100% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
}



/* notification ends here */


/* thumbnail  css  */

 .square-thumb

 {

    width: 150px;

    height: 150px;

 }

</style>



<style type="text/css">


/*  status color */

.quotecolor {
  background: #0a17ec !important;
  color: white;
}

.allotedcolor {
  background: black !important;
  color: white;
}

.revisioncolor {
    background: #FA7C7C !important;
    color: black !important;
}

.unapprovedcolor {
    background: #FFAC5C !important;
    color: black !important;
}

.complaincolor {
    background: #FF0000 !important;
    color: white !important;
}

.followupcolor {
   background:  #E5ff28 !important ;
   color:  black !important;
}

.onholdcolor {
    background: #A606C8 !important;
    color: white !important;
}

.cancelcolor {
    background: #C9303F !important;
    color: white !important;
}



.qcpendingcolor {
  background: #FA4193 !important;
  color: black !important;
}

.completedcolor {
  background: #41E329 !important;
  color: black !important;
}

.qcokcolor {
  background: #DED641 !important;
  color: black !important;
}


.requotecolor {
  background: #4bc2f9 !important;
  color: #0a17ec !important;
}

.noresponsecolor {
  background: #FFFE0B !important;
  color: black !important;
}

.approvedcolor {
  background: #00F0E1 !important ;
  color: black !important ;
}



/*  status color  */


.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   /*background-color: red;
   color: white;*/
   text-align: center;
}

.container {
  padding-left: 15px !important;
  padding-right: 15px !important;
  width: 100% !important ;
}

.container main {

    height: 500px;
}

/* css for modal */

.modal-header {
/*  background: #2196f3; removed on 12/04/17  */ 
    /*background:  #9c9391;
    background:#0480be;
    border-color: #004b8e !important;
    color: white;  */

}

  
.modal-dialog{
    overflow-y: initial !important;
}

.modal-body{
    max-height: calc(100vh - 200px) !important;
    overflow-y: auto  !important;
    /*background: #00bfa5 ;
    background:    #44703c   ; removed on 12/04/17  
    background: transparent !important ;  */
    scrollbar-face-color: #414340;
            scrollbar-shadow-color: #cccccc;
            scrollbar-highlight-color: #cccccc;
            scrollbar-3dlight-color: #cccccc;
            scrollbar-darkshadow-color: #cccccc;
            scrollbar-track-color: #cccccc;
            scrollbar-arrow-color: #000000;
}


.modal-footer {
   /*background: #2196f3;*/
    /*background:  #9c9391;
    background:#0480be;  */
}



/* css for modal */

    .container>.navbar-collapse, .container>.navbar-header {
        padding: 15px 0px 1px 1px;  
    }
    

    .navbar-left 
  {
    margin-top: 20px !important;
  }
   
   ul.nav ul, ul.nav ul li ul {
    list-style: none;
    margin: 0;
    padding: 0;
/*the next 2 styles are very important,
being the ones which make the drop-down to stay hidden */
    visibility:hidden;
    opacity:0;
    position: absolute;
    z-index: 99999;
    /*width:180px;
    background:#f8f8f8;*/
    box-shadow:1px 1px 3px #ccc;
/* css3 transitions for smooth hover effect */
    -webkit-transition:opacity 0.2s linear, visibility 0.2s linear;
    -moz-transition:opacity 0.2s linear, visibility 0.2s linear;
    -o-transition:opacity 0.2s linear, visibility 0.2s linear;
    transition:opacity 0.2s linear, visibility 0.2s linear;
}    

ul.nav li:hover > ul
{
/*these 2 styles are very important,
being the ones which make the drop-down to appear on hover */
    visibility:visible;
    opacity:1;
}

ul.nav ul li ul {
    top: 0;
    right: 181px; /* strong related to width:180px; from above */
}
 
 .open > .btn-default.dropdown-toggle {
    color: #222222;
    border-color: #e0e0e0;
    background-color: #e6e6e6; }
    .btn-default.active.focus, .btn-default.active:focus, .btn-default.active:hover, .btn-default:active.focus, .btn-default:active:focus, .btn-default:active:hover,
    .open > .btn-default.dropdown-toggle.focus,
    .open > .btn-default.dropdown-toggle:focus,
    .open > .btn-default.dropdown-toggle:hover {
      color: #222222;
      border-color: #bfbfbf;
      background-color: #d4d4d4; }
  .btn-default.active, .btn-default:active,
  .open > .btn-default.dropdown-toggle {
    background-image: none; }
  .btn-default.disabled.focus, .btn-default.disabled:focus, .btn-default.disabled:hover, .btn-default[disabled].focus, .btn-default[disabled]:focus, .btn-default[disabled]:hover,
  fieldset[disabled] .btn-default.focus,
  fieldset[disabled] .btn-default:focus,
  fieldset[disabled] .btn-default:hover {
    border-color: white;
    background-color: white; }
  .btn-default .badge {
    color: white;
    background-color: #222222; }



  </style>

  <!-- navigation bar css -->

</head>

<body >
  <!-- <hr> -->
  <!-- <br> -->
  <header>
    <!-- header-area start -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
       
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  

                <!-- <picture>

                  <a class="topnav" href="{{ url ('/') }}">  
                       <source srcset="">
                        <source media="(min-width: 768px)" 
                        srcset="">
                          <source media="(min-width: 1024px)" srcset="">
                        <img src="" alt="">

                 </a>      
               </picture> -->
         
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                

                <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> Welcome {{ isset(Auth::user()->name) ? Auth::user()->name : "Guest" }} </b> </li></ul>
                <ul class="nav navbar-nav navbar-right">
                     <li><div class="notification"></div>
                     </li> 
                     <li>
                        <a href="{{ url ('/home') }}">Home</a>
                    </li>
                 
                                     

                        <!-- added below code -->

                  <li> <a href="{{ route('contactform.index') }}">ContactForm</a></li>
                       
                
              
                <li class="dropdown">
                        <a id="themes1" href="#" data-toggle="dropdown" class="dropdown-toggle">Reports <span class="caret"></span></a>

                        

                        <ul aria-labelledby="themes" class="dropdown-menu">
                           <!--  <li><a class="dropdown-submenu" target="_new" href=""><i class="icon-th icon-white"></i> Daily Orders</a>
                            
                        
                            </li> -->
                            <li class="divider"></li>
                            <li><a target="_new" 
                                    href=""><i class="icon-th icon-white"></i>  Report1</a> 
                            </li>

                            
                            

                        </ul>
                </li>

                <li class="dropdown">
                 <li>    <a id="themes1" href="#" data-toggle="dropdown" class="dropdown-toggle">Support <span class="caret"></span></a>

                       <ul aria-labelledby="themes" class="dropdown-menu">
                            <li><a class="dropdown-submenu" target="_new" href="#"><i class="icon-th icon-white"></i> Change Password</a>
                            
                        
                            </li>
                            <li class="divider"></li>
                            <li><a target="_new" 
                                    href=""><i class="icon-th icon-white"></i> Contact Us</a> 
                            </li>
                            
                        </ul>
          
                  </li>  
                </li>  
               
           

                    
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                
                </ul>
            </div>


            <!-- /.navbar-collapse -->
          
        </div>
        <!-- /.container -->
    </nav>

    
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start slider area-->
  <!-- End Slider Area -->

  <!-- Start About area -->
  
  <!-- End About area -->

  <!-- Start Service area -->
  
  <!-- End Service area -->

  <!-- our-skill-area start -->
  
  <!-- our-skill-area end -->

  <!-- Faq area start -->
  
  <!-- End Faq Area -->

  <!-- Start Wellcome Area -->
  
  <!-- End Wellcome Area -->

  <!-- Start team Area -->
  
  <!-- End Team Area -->

  <!-- Start reviews Area -->

  <section>
      <p><hr></p>
      
      <div class="container main">
        @yield('content')

      </div>    

  </section>

 
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->

  
  
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer">
    <div class="footer-area">
      <div class="container">
        
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Prashant</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <!-- <script src="{{ URL::asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('lib/bootstrap/js/bootstrap.min.js') }}"></script> -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />

 <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>


 
 <!-- Datatables included -->


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


  <!-- datatables included-->

  <!-- <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script> -->
 

  <script type="text/javascript" src="{{ URL::asset('js/moment.js') }}"></script>

 <script type="text/javascript" src="{{ URL::asset('js/moment-timezone-with-data.js') }}"></script>

  <script  src="{{ URL::asset('dist/js/bootstrap-multiselect.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

     <!-- script added below for toastr -->   
    <script src="{{ URL::asset('js/toastr.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/toastr.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.dialogextend.js') }}"></script>

    <!-- script added above for toastr -->
    <!-- script added for dialog extend -->
  <!-- Contact Form JavaScript File -->
  <!-- <script src="contactform/contactform.js"></script> -->
  <script src="{{ URL::asset('js/jquery.multiDownload.js') }}"></script>

    @yield('script')   
   
    <script type="text/javascript">
         //var visitorname =  "{!! Auth::user()->name !!}";
      //var visitoremail =  "{!! Auth::user()->email !!}";
      var visitorname =  "";
      var visitoremail =  "";

     // alert(visitoremail);
      //alert('hello');

      $(document).ready(function() {
            $(".dropdown").hover(function () {
                    $(this).addClass("open");
                    }, function() {
                        $(this).removeClass("open");
                    });
             $(".dropdown-menu1").hover(function () {
                     $(this).addClass("open");
                     }, function() {
                          $(this).removeClass("open");
                     });

 

                   var el = document.querySelector('.notification');
                // setInterval(function(){ 

                
                //    formData = { test: 'hello'};
                   var cnt = 0;
    

            
     });

      function myError(jqx, textStatus, errStr) {
    alert(errStr);
}


    </script>

  
</body>

</html>
