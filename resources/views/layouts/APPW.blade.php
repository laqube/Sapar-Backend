<!DOCTYPE html>
<html>
<head>
    <title>Welcome page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('pics/icons/mount.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Josefin+Sans:wght@100&family=Quicksand:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script> -->
    <script src="https://api-maps.yandex.ru/2.0-stable/?apikey=ваш API-ключ?apikey=ваш API-ключ&load=package.standard&lang=ru-RU" type="text/javascript"> </script>


</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-md navbar-dark" style="background-color:#222831; transition: top 0.3s" id="mirasnav">
    <div class="mx-auto d-md-flex d-block flex-md-nowrap  ">
        <a class="navbar-brand" href="#">
            <img src="{{asset('pics/icons/logo.png')}}" alt="Avatar Logo" style="width:10rem;" class="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#abt">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#srv">SERVICES</a>
                </li>

                <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="background-color: #222831; color: #EEEEEE">ACCOUNT</a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="/rg">Sign up</a></li>
                            <li><a class="dropdown-item" href="/sn">Login</a></li>
                            <li><a class="dropdown-item" href="/Help">Help</a></li>
                        </ul>
                    </li>


            </ul>
        </div>    <!-- navbar elements -->
    </div>   <!-- cont fluid -->
</nav>

<!-- /NAVBAR -->

<!-- BIG PIC -->
<div class="img-container container-fluid position-relative col-12">
    <div class="row">
        <div class="bg-transparentext-white text-center" style="color: #EEEEEE">
            <h1 class="d-none d-sm-block panim" style="padding-top: 8%"> SAPAR</h1>
        </div>
        <div class="bg-transparentext-white text-center" style="color: #EEEEEE">
            <h1 class="d-sm-block d-lg-none" style="padding-top: 10%"></h1>
            <div class="wrapper" >
                <div class="" style="height:35px">
                    <p>The travel of your choice</p>
                </div>
            </div>
            <h1 class="" style="margin-bottom: 10%"></h1>

        </div>
    </div>
</div>

<!-- /BIC PIC -->

<!-- ABOUTUS -->

<div class="container-fluid" style="background-color: #EEEEEE">
    <div class="container" >

        <!-- About us -->
        <div class="row" id="abt" style="padding-top: 8%;">
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="fade-down-right" style="">
                <h3> So who are we?</h3>
                <p>We are the team of two sharing the one dream: <mark class="highlighted">the dream of seeing the world.</mark> </p>
                <p>The truth is - people often miss the beauty lying right in front of them. This is why we want to help them see all the beauty of our precios lands.</p>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 text-center" data-aos="fade-down-left" style="">
                <img src="{{asset('pics/icons/con1.jpg')}}" class="img-fluid rounded" alt="sup">
            </div>
        </div>

        <!-- Why us?? -->

        <div class="row mb-5" id="abt" style="padding-top: 8%">

            <div class="col-lg-5 col-md-6 col-sm-12 text-center" data-aos="fade-right" style="">
                <img src="{{asset('pics/icons/con2.jpg')}}" class="img-fluid rounded" alt="sup">

            </div>

            <div class="col-lg-7 col-md-6 col-sm-12 text-end" data-aos="fade-left">
                <h3> Why us?</h3>
                <p> -It is simple. You can choose <mark class="highlighted"> any scenario </mark> you want: </p>
                <p>Have you missed the extreme sport? - We got you! </p>
                <p>Or is it time for cozy family night out in the woods? -The tent is ready!</p>

            </div>
        </div>
    </div>

</div>


<!-- SERVICES -->

<div class="container-fluid">
    <!-- Services -->
    <div class="container">
        <div class="row" style="background-color:#EEEEEE">
            <div class="container text-center border-top border-3" >
                <div class="row" id="srv" style="padding-top:5%">
                    <h3>WE ARE <mark style="color: #7BC74D; background-color: #EEEEEE">PROUD</mark> TO SERVE YOU</h3>
                </div>

                <div class="row my-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 my-5">
                                <div class="card shadow-sm " data-aos="zoom-in-up" style="background-color:#222831; height:100% ">
                                    <i class="fa fa-handshake-o fa-5x my-5 mx-5" aria-hidden="true" style="color:#EEEEEE"></i>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#7BC74D">Personalised tours</h5>
                                        <p class="card-text" style="padding-bottom: 15%; color:#EEEEEE">We don't restrics - we offer options</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 my-5">
                                <div class="card shadow-sm" data-aos="zoom-in-up" style="background-color:#222831; height:100% ">
                                    <i class="fa fa-diamond fa-5x my-5" aria-hidden="true" style="color:#EEEEEE"></i>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#7BC74D">Reasonable pricing</h5>
                                        <p class="card-text" style="padding-bottom: 15%; color:#EEEEEE">You will never overpay with us</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 my-5">
                                <div class="card shadow-sm" data-aos="zoom-in-up" style="background-color:#222831; height:100% ">
                                    <i class="fa fa-map-o fa-5x my-5" aria-hidden="true" style="color:#EEEEEE"></i>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#7BC74D">Local tourism</h5>
                                        <p class="card-text" style="padding-bottom: 15%; color:#EEEEEE">The beauty is right there</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div> <!-- CARDS -->

                </div>
            </div>

        </div>

    </div>




    <!-- <div class="row parax2 plenka"></div> -->
</div>

<!-- Thing with cards -->
<div class="container-fluid text-center border-0 sales" style="background-color:#EEEEEE; padding-top:5%;">

    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 text-end d-none d-lg-block">
                <h3 class="" style="margin-top: 5%; margin-bottom:5%; color:#EEEEEE"> Don't you miss on the <mark style="color: #7BC74D; background-color: #222831">coupons</mark>!</h3>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-end d-sm-block d-lg-none">
                <h3 class="text-center my-" style="color:#EEEEEE"> Don't you miss on the coupons!</h3>

            </div>

            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="d-none d-lg-block">
                    <img src="{{asset('pics/prod/trio.png')}}" alt="trio" class="img-fluid" style="">
                </div>

                <div class="d-sm-block block d-lg-none">
                    <img src="{{asset('pics/prod/single.png')}}" alt="single" class="img-fluid" style="height: 30%; width: 50%">
                </div>


            </div>

        </div>

    </div>


</div>

<!-- /SERVICES -->




<!-- Piece of gallery, mb parallax -->
<!-- <div class="row parax3 plenka text-center">
  <div class="col-4">
    <h3 class="text-center">
    </h3>
  </div>
  <div class="col-4 my-auto">
    <h5 class="text-center text-transparent" style="background-color: #EEEEEE; background-transparent: 70%">
      Can't wait to contact us?
    </h5>

  </div>
  <div class="col-4">
    <h3 class="text-center">
    </h3>
  </div>
</div> -->


<!-- contact info -->




<!-- FOOTER -->
<footer class="container-fluid text-center text-white" style="background-color: #222831;">

    <!-- FUN STUFF -->
    <!-- <div class="row">
      <div class="col-12 easterbody ">
        <ul class="eul">
          <li class="eli">
            <input type="checkbox" />
            <div>S</div>
          </li>
          <li class="eli">
            <input type="checkbox" />
            <div>A</div>
          </li>
          <li class="eli">
            <input type="checkbox" />
            <div>P</div>
          </li>
          <li class="eli">
            <input type="checkbox" />
            <div>A</div>
          </li>
          <li class="eli">
            <input type="checkbox" />
            <div>R</div>
          </li>
        </ul>
      </div>

    </div> -->

    <!-- /FUN STUFF -->

    <!-- Grid container -->
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4" >

            <!-- Twitter -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://twitter.com/melseeto"
                role="button"
                data-mdb-ripple-color="light"
            ><i class="fab fa-twitter" style="color: #EEEEEE"></i
                ></a>

            <!-- Google -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://www.google.com/search?q=how+to+make+pizza"
                role="button"
                data-mdb-ripple-color="light"
            ><i class="fab fa-google" style="color: #EEEEEE"></i
                ></a>

            <!-- Instagram -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://www.instagram.com/melseeto/"
                role="button"
                data-mdb-ripple-color="light"
            ><i class="fab fa-instagram" style="color: #EEEEEE"></i>
            </a>

            <!-- Github -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://github.com/laqube"
                role="button"
                data-mdb-ripple-color="light"
            ><i class="fab fa-github" style="color: #EEEEEE"></i
                ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color:  #EEEEEE">
        © 2021 Copyright:
        <h5 class="" style="color: #EEEEEE">Actually it is fine if you use my code :)</h5>
    </div>
    <!-- Copyright -->
</footer>










<!-- le music -->
<audio id="audio" src="nauryz.mp3"></audio>
<script src="https://kit.fontawesome.com/f83deb805a.js" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
    // initialize aos
    AOS.init();
    // ugly cross
    function cross(x) {
        x.classList.toggle("change");
    }
    // play nauryz
    function play() {
        var audio = document.getElementById("audio");
        audio.play();
    }



    // random background
    $(document).ready(function() {
        var bgArray = ['1.png'];
        var bg = bgArray[Math.floor(Math.random() * bgArray.length)];
        var path = 'pics/icons/';
        var imageUrl = path + bg;
        $('.img-container').css('background-image', 'url(' + imageUrl +')');
    });


</script>
@yield ('content')
</body>


</html>

