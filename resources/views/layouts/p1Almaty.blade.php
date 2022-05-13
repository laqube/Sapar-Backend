<!DOCTYPE html>
<html>
<head>
    <title>Almaty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="pics/icons/mount.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Josefin+Sans:wght@100&family=Quicksand:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-md navbar-dark" style="background-color:#222831; transition: top 0.3s" id="mirasnav">
    <div class="container">
        <a class="navbar-brand" href="/Welcome">
            <img src="{{asset('pics/icons/logo.png')}}" alt="Avatar Logo" style="width:10rem;" class="">
        </a>

        <div class="navbar" >
            <ul class="nav nav-pills navbar-nav">

                <li class="nav-item dropdown mipill">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" role="button" style="color:#EEEEEE" >
                        <i class="fa-solid fa-bars hicon mx-3" aria-hidden="true"></i>
                        <i class="fa fa-user-circle-o fa-lg hicon mx-3" aria-hidden="true"></i></a>
                    <div class="dropdown-menu mimenu">
                        <a class="dropdown-item" href="/Help">Account settings</a>
                        <a class="dropdown-item" href="/Help">Wishlist</a>
                        <a class="dropdown-item" href="/Help">Archive</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Help">Host your home</a>
                        <a class="dropdown-item" href="/Help">Help</a>
                    </div>
                </li>
            </ul>
        </div>    <!-- navbar elements -->
    </div>   <!-- cont fluid -->
</nav>

<!-- /NAVBAR -->

<!-- GALLERY SM-->
<div class="container-fluid px-0 d-sm-block d-md-none">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('pics/prod/1.png')}}" class="d-block w-100" alt="..." data-bs-interval="1000">
            </div>
            <div class="carousel-item">
                <img src="{{asset('pics/prod/2.png')}}" class="d-block w-100" data-bs-interval="1000">

            </div>
            <div class="carousel-item">
                <img src="{{asset('pics/prod/3.png')}}" class="d-block w-100" data-bs-interval="1000">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- /GALLERY -->

<!-- TRIP HEAD -->
<div class="container ">
    <div class="row my-5">
        <div class="col-12 d-none d-md-block text-start">
            <h4>Trip to the Southern Capital of Kazakhstan</h4>
        </div>

        <div class="col-12 d-sm-block d-md-none text-center border-bottom border-3">
            <h5>Trip to the Southern Capital of Kazakhstan</h5>
        </div>

    </div>

    <div class="row my-5" style=" ">
        <a href="https://www.google.com/search?q=Almaty" class=""> <b>Almaty. Kazakhstan</b></a>
        <a href="#" class="">Part of Sapar's Great Discount</a>

    </div>

</div>


<!-- /TRIP HEAD -->

<!-- GALLERY LG-->
<!-- Container for the image gallery -->
<div class="container d-none d-md-block">

    <div class="row px-auto pb-5" style="width: 100%; height: 100%;">
        <div class="col-12 text-center">
            <!-- Full-width images with number text -->
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="{{asset('pics/prod/1.png')}}" style="width:100%; border-radius: 20px;">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="{{asset('pics/prod/2.png')}}" style="width:100%; border-radius: 20px;">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="{{asset('pics/prod/3.png')}}" style="width:100%; border-radius: 20px;">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="{{asset('pics/prod/4.png')}}" style="width:100%; border-radius: 20px;">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="{{asset('pics/prod/5.png')}}" style="width:100%; border-radius: 20px;">
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img src="{{asset('pics/prod/6.png')}}" style="width:100%; border-radius: 20px;">
            </div>




            <!-- Image text -->
            <div class="caption-container" style="background-color:#EEEEEE; color: #222831">
                <p id="caption"></p>
            </div>

            <!-- Thumbnail images -->
            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="{{asset('pics/prod/1.png')}}" style="width:100%; border-radius: 5px;" onclick="currentSlide(1)" alt="Starry nights">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{asset('pics/prod/2.png')}}" style="width:100%; border-radius: 5px;" onclick="currentSlide(2)" alt="The woods">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{asset('pics/prod/3.png')}}" style="width:100%; border-radius: 5px;" onclick="currentSlide(3)" alt="Cozy campfires">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{asset('pics/prod/4.png')}}" style="width:100%; border-radius: 5px;" onclick="currentSlide(4)" alt="Sports in reach">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{asset('pics/prod/5.png')}}" style="width:100%; border-radius: 5px;" onclick="currentSlide(5)" alt="Canyons">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{asset('pics/prod/6.png')}}" style="width:100%; border-radius: 5px;" onclick="currentSlide(6)" alt="The Golden Wind">
                </div>

            </div>
        </div>
    </div>

</div>
<!-- /GALLERY -->

<!-- INFO -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-12 pe-5">
            <div class="row border-bottom">
                <h4>Trip to Almaty with Sapar</h4>
                <p><b>Up to 3 weeks |</b>
                    <i class="fa fa-leaf mx-3" aria-hidden="true"></i>
                    <i class="fa fa-futbol-o mx-3" aria-hidden="true"></i>
                    <i class="fa-solid fa-person-swimming mx-3"></i>
                    <i class="fa fa-ticket mx-3" aria-hidden="true"></i>
                    <i class="fa fa-heartbeat mx-3" aria-hidden="true"></i>
                </p>
            </div>

            <div class="row my-3 text-start row border-bottom">
                <h4>What can you do?</h4>
                <div class="container-fluid text-start mx-auto">
                    <p> Qosamyn änge atyñdy, Tosamyn är hatyñdy, Sağyndym alma bağyn, Araily Almatymdy. Sağyndym aqqu ündı, Sağyndym aq gülımdı, Almatym, syiladyñ sen Şabytty şattyğymdy.
                    </p>
                    <p>Eske alsam Köktöbenı Janyma ot beredı. Alğaşqy mahabbatqa Kuäger – Kökteregı. Äkelgen bar bağymdy Sağyndym tañdaryñdy. Almatym, senı oilaumen Jalğadym armanymdy.
                    </p>
                    <p> Qalaidy janym jyrdy, Bolmaidy änım mūñdy, Päk köñıl, aq jürektı Dostarym sağyndyrdy. Aspanyn astananyñ, Sağyndym jastar änın.
                    </p>
                    <p>Sağyndym şyñdaryñdy, Alatau – asqaralym! Ğaşyqpyn jauynyña, Talpynğan tau ūlyna, Sağynyp jetem sağan, Bas menı bauyryña!
                    </p>

                </div>
            </div>

            <div class="row my-3 text-start row border-bottom">
                <h4>
                    Tour recomendations
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                </h4>
                <ul>
                    <p>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        Get familiar with upcoming weather conditions. It is just one of the little things even you cannot control.
                    </p>
                    <p>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        Almaty is the biggest city in recreational and fun terms. It is better to stay for a week at least.
                    </p>
                    <p>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        The bueaty is inside, as well as outside of the city.
                    </p>

                    <p>

                        <a class="" value="PLAY" onclick="togglePlay()">
                            <i class="fa fa-play-circle"></i>  Or just enjoy the vibe</a>
                    </p>


                </ul>
            </div>

        </div>

        <div class=" sticky-top col-lg-4 col-md-6 d-none d-md-block shadow-lg p-3 mb-5 rounded " style="height: 100%; background-color:#EEE">
            <div class="container p=2">
                <div class="row mt-4">
                    <h5 style="font-size: 30px;">From 30'000 KZT </h5>
                    <p class="p">/person</p>
                </div>

                <div class="row my-3">
                    <div class="col-6 text-start" style="margin: 7% 0%">
                        <h5 class="thin">Mountain-hiking</h5>
                    </div>
                    <div class="col-6 text-end my-4">
                        <div class="form-check" style="margin: 7% 0%">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined-2" autocomplete="off">
                            <label class="btn btn-outline-dark cartbeton" for="btn-check-outlined-2">Add to cart</label><br>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-6 text-start" style="margin: 7% 0%">
                        <h5 class="thin">Movie night</h5>
                    </div>
                    <div class="col-6 text-end my-4">
                        <div class="form-check" style="margin: 7% 0%">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined-3" autocomplete="off">
                            <label class="btn btn-outline-dark cartbeton" for="btn-check-outlined-3">Add to cart</label><br>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-6 text-start" style="margin: 7% 0%">
                        <h5 class="thin">Bunjee jumping</h5>
                    </div>
                    <div class="col-6 text-end my-4" style="margin: 7% 0%">
                        <div class="form-check">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined-4" autocomplete="off">
                            <label class="btn btn-outline-dark cartbeton" for="btn-check-outlined-4">Add to cart</label><br>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-6 text-start" style="margin: 7% 0%">
                        <h5 class="thin">Weekend marathon</h5>
                    </div>
                    <div class="col-6 text-end my-4">
                        <div class="form-check" style="margin: 7% 0%">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined-5" autocomplete="off">
                            <label class="btn btn-outline-dark cartbeton" for="btn-check-outlined-5">Add to cart</label><br>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mb-6">
                    <button class="btn btn-dark" type="button" href="#">See all options</button>

                </div>


            </div>
        </div>

    </div>

</div>

<!-- adaptivity to small screen - the floating card with pricing will become some sort of a footer -->
<div class="container-fluid fixed-bottom d-sm-block d-mb-none">
    <div class="row ">
        <div class="col-sm-6 text-start">

        </div>
        <div class="col-sm-6 text-end">

        </div>
    </div>

</div>


<!-- BESTSELLERS -->


<div class="container text-center">
    <div class="row my-5" data-aos="zoom-out-up">
        <div class="col-12 my-3">
            <h3>The most popular destinations</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 my-3" data-aos="zoom-out-up">
            <div class="card rounded-2 shadow" style="height: 100%">
                <img src="{{asset('pics/prod/b4.png')}}" class="card-img-top p-3" alt="...">
                <div class="card-body">
                    <h4 class="card-text">The Capital</h4>
                    <a href="#" class="btn stretched-link"> </a>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 my-3" data-aos="zoom-out-up">
            <div class="card rounded-2 shadow" style="height: 100%">
                <img src="{{asset('pics/prod/b2.png')}}" class="card-img-top p-3" alt="...">
                <div class="card-body">
                    <h4 class="card-text">Western Monuments</h4>
                    <a href="#" class="btn stretched-link cartbeton"> </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 my-3" data-aos="zoom-out-up">
            <div class="card rounded-2 shadow" style="height: 100%">
                <img src="{{asset('pics/prod/b3.png')}}" class="card-img-top p-3" alt="...">
                <div class="card-body">
                    <h4 class="card-text">The Pearl of the Steppe</h4>
                    <a href="#" class="btn stretched-link"> </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /BESTSELLERS  -->


<!-- CONTACT US-->
<div class="container-fluid " style="background-color:#222831">
    <div class="container">
        <div class="row py-3">
            <h3 style="color:#EEEEEE">Any questions left?</h3>
        </div>
        <div class="row pt-2">
            <div class="col-lg-6 col-md-12">
                <form action="#">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="example@email.con" name="email">
                    </div>
                    <label for="comment">Questions:</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>

                    <button type="submit" class="btn beton mt-3" href="#" style="text-align: right;">Submit</button>
                </form>

            </div>

            <div class="col-lg-6 col-md-12 pt-2 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1664.5080541139278!2d71.4177786066656!3d51.09041886011061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424585a605525605%3A0x4dff4a1973f7567e!2sAstana%20IT%20University!5e0!3m2!1sen!2skz!4v1645692411660!5m2!1sen!2skz" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>

    </div>

</div>
<!-- /CONTACT US-->


<!-- FOOTER -->

<footer class="container-fluid text-center text-white" style="background-color: #222831;">


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
<!-- /FOOTER -->


<!-- le music -->
<audio id="myAudio" src="baq.mp3" preload="auto"></audio>


<script src="https://kit.fontawesome.com/f83deb805a.js" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    AOS.init();

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    // musique

    var myAudio = document.getElementById("myAudio");
    var isPlaying = false;

    function togglePlay() {
        isPlaying ? myAudio.pause() : myAudio.play();
    };

    myAudio.onplaying = function() {
        isPlaying = true;
    };
    myAudio.onpause = function() {
        isPlaying = false;
    };

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }




    // Popups
    function popFunction1() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
        setTimeout(function(){ popup.className = popup.className.replace("show", ""); }, 1000);
    }

</script>
@yield('content')
</body>

</html>
