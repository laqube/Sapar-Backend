<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name'.'Backend')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>

    </style>
</head>
<body class="antialiased">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-md navbar-dark" style="background-color:#222831; transition: top 0.3s" id="mirasnav">
    <div class="mx-auto d-md-flex d-block flex-md-nowrap  ">
        <a class="navbar-brand" href="#">
            <img src="../../../public/pics/icons/logo.png" alt="Avatar Logo" style="width:10rem;" class="">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="background-color: #222831; color: #EEEEEE">ACCOUNT</a>
                    <ul class="dropdown-menu" >
                        <li><a class="dropdown-item" href="rg.html">Sign up</a></li>
                        <li><a class="dropdown-item" href="sn.html">Login</a></li>
                        <li><a class="dropdown-item" href="404.html">Help</a></li>
                    </ul>
                </li>
                <li class="d-lg-none d-md-none nav-item">
                    <a class="nav-link text-white" href="#" value="PLAY" onclick="play()">SALEM :D</a>
                </li>
            </ul>
        </div>    <!-- navbar elements -->
    </div>   <!-- cont fluid -->
</nav>
@yield ('content')
</body>
</html>
