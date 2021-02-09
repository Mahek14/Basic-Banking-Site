<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="images/bank1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <title>Banking System</title>
</head>

<body class="back">

    <div class="jumbotron jumbotron-fluid">
        <h1><i class="fa fa-university" aria-hidden="true"></i>
        &nbsp;MDD's Bank</h1>
    </div>
    <section class="my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card mx-auto text-center" style="width:400px; height: 320px">
                        <img class="card-img-top" src="images/bg1.jpg" alt="Card image" style="width:100%; height: 190px">
                        <div class="card-body">
                            <h4 class="card-title">All Customer Details</h4>
                            <button class="custom-btn btn-1" onclick="location.href='userinfo.php'">Click Me</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card mx-auto text-center" style="width:400px; height: 320px">
                        <img class="card-img-top" src="images/pep.jpg" alt="Card image" style="width:100%; height: 190px">
                        <div class="card-body">
                            <h4 class="card-title">Find A Particular Customer</h4>
                            <button class="custom-btn btn-1" onclick="location.href='cust.php'">Click Me</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card mx-auto text-center" style="width:400px; height: 320px">
                        <img class="card-img-top" src="images/me.jpg" alt="Card image" style="width:100%; height: 190px">
                        <div class="card-body">
                            <h4 class="card-title">Transfer Money</h4>
                            <button class="custom-btn btn-1" onclick="location.href='transfer.php'">Click Me</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card mx-auto text-center" style="width:400px; height: 320px">
                        <img class="card-img-top" src="images/money.jpg" alt="Card image" style="width:100%; height: 190px">
                        <div class="card-body">
                            <h4 class="card-title">Transfer History</h4>
                            <button class="custom-btn btn-1" onclick="location.href='transferhist.php'">Click Me</button>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <br>
    <footer>
        <h5>Mahek Desai</h5>
        <p>TSP❤</p>
    </footer>

</body>


</html>