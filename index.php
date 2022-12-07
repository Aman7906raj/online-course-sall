<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        #con {
            min-height: 550px;
        }
    </style>
</head>

<body>
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid text-white">
                <a class="navbar-brand text-white text-center" href="#">
                    <h3>Earn With Education</h3>
                </a>
                <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">

                    <!-- <button type="button" class="btn btn-dark text-white"><a href="#">Sign up</a></button> -->
                    <button type="button" class="btn btn-dark text-white"><a href="login.php">Sign in</a></button>

                </div>
            </div>
        </nav>
    </div>
    <div class="container" id="con">

        <div class="container text-center mt-4">
            <div class="row align-items-start">
                <div class="col">
                    <div class="card mt-4" style="width: 18rem;">
                        <img src="co.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Computer Basic</h5>
                            <h3 class="card-text">Rs. 299.00</h3>
                            <a href="checkout.php?rs=299" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- <a href='update-user.php?id=<?php echo $row["user_id"]?> -->
                <div class="col">
                    <div class="card mt-4" style="width: 18rem;">
                        <img src="hard4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Computer Hardware</h5>
                            <h3 class="card-text">Rs. 299.00</h3>
                            <a href="checkout.php?rs=299" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mt-4" style="width: 18rem;">
                        <img src="web1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Web Designing</h5>
                            <h3 class="card-text">Rs. 499.00</h3>
                            <a href="checkout.php?rs=499" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">


        
    </div>

    <div class="container-fluid mt-4 text-white">
        <div class="card-footer text-center bg-primary">
            Powered By ll Er. Aman
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>