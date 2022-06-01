<html>
<head>
    <title>Регистрация</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="pics/icons/mount.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Josefin+Sans:wght@100&family=Quicksand:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="registration.css">

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body style="text-align: center; background-color: #EEEEEE">
    <div class="container mt-5 mb-5">
        <h1 style="color: #222831">Login</h1>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" style="margin: 5rem; "> <span class="circle"><i class="fa fa-check"></i></span>
                    <form action="testReg.php" method="post">
                        <div class="form-input my-2">
                            <i class="fa fa-envelope"></i>
                            <input name="login" class="form-control" type="text" size="15" maxlength="15" placeholder="Email address" > </div>
                            <i class="fa fa-lock"></i>
                        <div class="form-input my-2">
                            <input name="password" type="password" class="form-control"  size="15" maxlength="15" placeholder="Password"> </div>
                            <button class="btn btn-secondary mt-4">
                                <input type="submit" name="submit" value="Login">
                            </button>
                            <div class="text-center mt-4"> <span>Don't have an account?</span> <a href="/rg" class="text-decoration-none" style="color:black">Register</a> </div>
                    </form>
            </div>
                </div>
            </div>
        </div>
    </div>
@yield('content')
</body>
</html>
