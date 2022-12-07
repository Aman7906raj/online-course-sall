<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>checkout</title>
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
                <a class="navbar-brand text-white" href="#">
                    <h3>Earn With Education</h3>
                </a>
                <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">

                    <!-- <button type="button" class="btn btn-dark text-white"><a href="#">Sign up</a></button> -->
                    <button type="button" class="btn btn-dark text-white"><a href="#">Sign in</a></button>

                </div>
            </div>
        </nav>
    </div>


<div class="container">
  <!-- Content here -->

  <form action="Payments\razorpay-php\Razorpay.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"name="email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Create Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="pass">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="number" name="mobile" placeholder="please enter the UPI linked mobile number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Refral code</label>
    <input type="text" class="form-control" name="refral" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Amount</label>
    <input type="number" class="form-control" name="amount" id="exampleInputEmail1" value="<?php echo $_GET['rs']?>" aria-describedby="emailHelp">
    
  </div>
  <button type="submit" class="btn btn-primary">Proceed to Buy</button>
</form>

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