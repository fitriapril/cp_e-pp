<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/SMK.png') }}">
    <title>SMK TERPADU IBAADURRAHMAN</title>
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
html,
body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Quicksand", sans-serif;
    font-size: 62.5%;
    font-size: 10px;
}
/*-- Inspiration taken from abdo steif -->
/* --> https://codepen.io/abdosteif/pen/bRoyMb?editors=1100*/

/* Navbar section */

.nav {
    width: 100%;
    height: 65px;
    position: fixed;
    line-height: 65px;
    text-align: center;
}

.nav div.logo {
    float: left;
    width: auto;
    height: auto;
    padding-left: 3rem;
}

.nav div.logo a {
    text-decoration: none;
    color: #fff;
    font-size: 2.5rem;
}

.nav div.logo a:hover {
    color: #00E676;
}

.nav div.main_list {
    height: 65px;
    float: right;
}

.nav div.main_list ul {
    width: 100%;
    height: 65px;
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav div.main_list ul li {
    width: auto;
    height: 65px;
    padding: 0;
    padding-right: 3rem;
}

.nav div.main_list ul li a {
    text-decoration: none;
    color: #fff;
    line-height: 65px;
    font-size: 2.4rem;
}

.nav div.main_list ul li a:hover {
    color: #00E676;
}


/* Home section */

.home {
    width: 100%;
    height: 90%;
   
}

.navTrigger {
    display: none;
}

.nav {
    padding-top: 20px;
    padding-bottom: 20px;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}


/* Media qurey section */

@media screen and (min-width: 768px) and (max-width: 1024px) {
    .container {
        margin: 0;
    }
}

@media screen and (max-width:768px) {
    .navTrigger {
        display: block;
    }
    .nav div.logo {
        margin-left: 15px;
    }
    .nav div.main_list {
        width: 100%;
        height: 0;
        overflow: hidden;
    }
    .nav div.show_list {
        height: auto;
        display: none;
    }
    .nav div.main_list ul {
        flex-direction: column;
        width: 100%;
        height: 100vh;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: #111;
        /*same background color of navbar*/
        background-position: center top;
    }
    .nav div.main_list ul li {
        width: 100%;
        text-align: right;
    }
    .nav div.main_list ul li a {
        text-align: center;
        width: 100%;
        font-size: 3rem;
        padding: 20px;
    }
    .nav div.media_button {
        display: block;
    }
}


/* Animation */
/* Inspiration taken from Dicson https://codemyui.com/simple-hamburger-menu-x-mark-animation/ */

.navTrigger {
    cursor: pointer;
    width: 30px;
    height: 25px;
    margin: auto;
    position: absolute;
    right: 30px;
    top: 0;
    bottom: 0;
}

.navTrigger i {
    background-color: #fff;
    border-radius: 2px;
    content: '';
    display: block;
    width: 100%;
    height: 4px;
}

.navTrigger i:nth-child(1) {
    -webkit-animation: outT 0.8s backwards;
    animation: outT 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger i:nth-child(2) {
    margin: 5px 0;
    -webkit-animation: outM 0.8s backwards;
    animation: outM 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger i:nth-child(3) {
    -webkit-animation: outBtm 0.8s backwards;
    animation: outBtm 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger.active i:nth-child(1) {
    -webkit-animation: inT 0.8s forwards;
    animation: inT 0.8s forwards;
}

.navTrigger.active i:nth-child(2) {
    -webkit-animation: inM 0.8s forwards;
    animation: inM 0.8s forwards;
}

.navTrigger.active i:nth-child(3) {
    -webkit-animation: inBtm 0.8s forwards;
    animation: inBtm 0.8s forwards;
}

@-webkit-keyframes inM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes inM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes outM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes outM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes inT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes inT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes outT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes outT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes inBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes inBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}

@-webkit-keyframes outBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes outBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}

.affix {
    padding: 0;
    background-color: #111;
}






.myH2 {
	text-align:center;
	font-size: 4rem;
    padding-top: 50px;
    padding-bottom: 25px;
}
.myP {
	text-align: justify;
	padding-left:5%;
	padding-right:5%;
	font-size: 20px;
}
@media all and (max-width:700px){
	.myP {
		padding:2%;
	}
}

.img-size{
/* 	padding: 0;
	margin: 0; */
	height: 450px;
	width: 700px;
	background-size: cover;
	overflow: hidden;
}
.modal-content {
   width: 700px;
  border:none;
}
.modal-body {
   padding: 0;
}

.carousel-control-prev-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
	width: 30px;
	height: 48px;
}
.carousel-control-next-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
	width: 30px;
	height: 48px;
}

#contact .section-title {
    padding-bottom: 0;
  }



.section-title h2 {
    font-size: 24px;
    padding-bottom: 18px;
}

  #contact .text-success,
  #contact .text-danger {
    display: none;
  }

  #contact .form-control {
    background: transparent;
    border: 0;
    border-bottom: 1px solid #dddddd;
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
    font-weight: normal;
    margin-bottom: 15px;
    transition: all ease-in-out 0.4s;
  }

  #contact .form-control:hover,
  #contact .form-control:focus {
    border-bottom-color: #c9c9c9;
  }

  #contact input {
    height: 55px;
  }

  #contact button#cf-submit {
    background: #ce3232;
    border-radius: 0;
    border: 0;
    color: #ffffff;
    font-weight: bold;
    height: 50px;
  }

  #contact button#cf-submit:hover {
    background: #292929;
    color: #ffffff;
  }



  /*---------------------------------------
     FOOTER              
  -----------------------------------------*/

  footer {
    border-top: 1px solid rgba(0,0,0,0.05);
    padding: 120px 0;
    padding-bottom: 80px;
  }

  footer .section-title {
    padding-bottom: 10px;
  }

  footer h2 {
    font-size: 20px;
  }

  footer a,
  footer p {
    color: #909090;
  }

  footer strong {
    color: #d9d9d9;
  }

  footer address p {
    margin-bottom: 0;
  }

  .footer-info,
  footer .social-icon {
    margin-top: 20px;
  }

  .footer-open-hour {
    background: #ce3232;
    background: url('../images/profil.jpg') center center no-repeat;
    background-size: cover;
    border-radius: 20px;
    margin-top: 0;
    padding: 40px 0 40px 80px;
    overflow: hidden;
    position: relative;
    z-index: 22;
    right: 20px;
    bottom: 20px;
  }

  .footer-open-hour::after {
    background: rgba(29,29,29,0.85);
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -2222;
  }

  .footer-open-hour h2 {
    color: #ffffff;
  }

  .footer-open-hour p {
    color: #d9d9d9;
  }

  .footer-open-hour strong {
    color: #f9f9f9;
  }

  
    .form-group {
        margin-bottom: 15px; 
    }
    label { 
        display: block; margin-bottom: 5px; 
    }
    input, textarea { 
        width: 100%; padding: 8px; 
    }
    button { 
        background: #3182CE; color: white; border: none; padding: 10px 15px; cursor: pointer; 
    }
    .alert { 
        padding: 10px; margin-bottom: 15px; border-radius: 4px; 
    }
    .alert-success { 
        background: #C6F6D5; color: #22543D; 
    }
    
    #google-map iframe {
    border: 0;
    width: 100%;
    height: 390px;
  }

    @media only screen and (max-width: 992px) {
    
    #google-map,
    .footer-info {
      margin-bottom: 50px;
    }
  }
  
  </style>
  <body>
    <nav class="nav" style="z-index: 999">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="{{ asset('assets/images/SMK.png') }}" alt="" width="60px"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/kontak">Kontak</a></li>
                    <li><a href="/login">Login</a></li>

                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    

    <section class="home">
       <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="z-index: -100">
        <div class="carousel-inner">
          <div class="carousel-item active home">
            <img src="{{ asset('assets/images/img1.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item home">
            <img src="{{ asset('assets/images/img2.jpg') }}" class="d-block w-100,0,000001" alt="...">
          </div>
          <div class="carousel-item home">
            <img src="{{ asset('assets/images/img3.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </section> 
    <div class="container mb-4">
        @yield('container') 
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <!-- Jquery needed -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
  <script>
      $(window).scroll(function() {
          if ($(document).scrollTop() > 50) {
              $('.nav').addClass('affix');
              console.log("OK");
          } else {
              $('.nav').removeClass('affix');
          }
      });
  </script>
  <script>
    $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

  </script>
 
</html>