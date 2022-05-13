<!DOCTYPE html>
<html>
<head>
    <title>Tours</title>
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
<!-- HMENU -->

<!-- <div class="scrollmenu">

  <a href="#home" class="mx-5">Home</a>
  <a href="#news" class="mx-5">News</a>
  <a href="#contact" class="mx-5">Contact</a>
  <a href="#about" class="mx-5">About</a>
  <a href="#support" class="mx-5">Support</a>
  <a href="#blog" class="mx-5">Blog</a>
  <a href="#tools" class="mx-5">Tools</a>
  <a href="#base" class="mx-5">Base</a>
  <a href="#custom" class="mx-5">Custom</a>
  <a href="#more" class="mx-5">More</a>
  <a href="#logo" class="mx-5">Logo</a>
  <a href="#friends" class="mx-5">Friends</a>
  <a href="#partners" class="mx-5">Partners</a>
  <a href="#people" class="mx-5">People</a>
  <a href="#work" class="mx-5">Work</a>
</div> -->


<!-- /HMENU -->


<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12" >
            <!-- visible on lg -->
            <div class="d-none d-lg-block rounded-3" data-aos="fade-right">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{asset('pics/icons/4.3.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Almaty</h5>
                                <p class="card-text">Small text about it</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- visible on md -->
            <div class="d-none d-md-block d-lg-none" data-aos="fade-right">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('pics/icons/9.16.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Almaty</h5>
                                <p class="card-text">Small text about it</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- visible on sm -->
            <div class="d-sm-block d-md-none" data-aos="zoom-in">
                <div class="card mb-3 mx-5" style="max-width: 30rem" >
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('pics/icons/16.9.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Almaty</h5>
                                <p class="card-text">Small text about it</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <!-- LG -->
            <div class="d-none d-lg-block rounded-3" data-aos="fade-left">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{asset('pics/icons/4.3.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Aqtau</h5>
                                <p class="card-text">Anybody wants salt in their heads?</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MD -->
            <div class="d-none d-md-block d-lg-none" data-aos="fade-left">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('pics/icons/9.16.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Aqtau</h5>
                                <p class="card-text">Small text about it</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SM  -->
            <div class="d-sm-block d-md-none" data-aos="zoom-in">
                <div class="card mb-3 mx-5" style="max-width: 30rem" >
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('pics/icons/16.9.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Aqtau</h5>
                                <p class="card-text">Small text about it</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- SECOND ROW -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <!-- LG -->
            <div class="d-none d-lg-block rounded-3" data-aos="fade-right">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{asset('pics/icons/4.3.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Astana</h5>
                                <p class="card-text">Some text</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MD -->
            <div class="d-none d-md-block d-lg-none" data-aos="fade-right">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('pics/icons/9.16.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Astana</h5>
                                <p class="card-text">Come context</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SM  -->
            <div class="d-sm-block d-md-none" data-aos="zoom-in">
                <div class="card mb-3 mx-5" style="max-width: 30rem" >
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('pics/icons/16.9.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Astana</h5>
                                <p class="card-text">Come context</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <!--

             LG -->
            <div class="d-none d-lg-block rounded-3" data-aos="fade-left">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{asset('pics/icons/4.3.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Burabai</h5>
                                <p class="card-text">Anybody wants salt in their heads?</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MD -->
            <div class="d-none d-md-block d-lg-none" data-aos="fade-left">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('pics/icons/9.16.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Burabai</h5>
                                <p class="card-text">Small text about it</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SM  -->
            <div class="d-sm-block d-md-none" data-aos="zoom-in">
                <div class="card mb-3 mx-5" style="max-width: 30rem" >
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('pics/icons/16.9.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Burabai</h5>
                                <p class="card-text">Small text about it</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- THIRD ROW -->

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <!-- LG -->
            <div class="d-none d-lg-block rounded-3" data-aos="fade-right">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{asset('pics/icons/4.3.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Turkestan</h5>
                                <p class="card-text">Some text</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MD -->
            <div class="d-none d-md-block d-lg-none" data-aos="fade-right">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('pics/icons/9.16.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Turkestan</h5>
                                <p class="card-text">Come context</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SM  -->
            <div class="d-sm-block d-md-none" data-aos="zoom-in">
                <div class="card mb-3 mx-5" style="max-width: 30rem" >
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('pics/icons/16.9.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Turkestan</h5>
                                <p class="card-text">Come context</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div

            class="col-lg-6 col-md-6 col-sm-12">
            <!-- LG -->
            <div class="d-none d-lg-block rounded-3" data-aos="fade-left">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{asset('pics/icons/4.3.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Semei</h5>
                                <p class="card-text">Anybody wants salt in their heads?</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MD -->
            <div class="d-none d-md-block d-lg-none" data-aos="fade-left">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('pics/icons/9.16.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Semei</h5>
                                <p class="card-text">Small text about it</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SM  -->
            <div class="d-sm-block d-md-none" data-aos="zoom-in">
                <div class="card mb-3 mx-5" style="max-width: 30rem" >
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('pics/icons/16.9.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Semei</h5>
                                <p class="card-text">Small text about it</p>
                                <p class="card-text"><small class="text-muted">More</small></p>
                                <a href="/p1Almaty" class="btn stretched-link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





</div>

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
</div>

</div>
@yield('content')
<script src="https://kit.fontawesome.com/f83deb805a.js" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
    AOS.init();
</script>

</body>






</html>
