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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="images/bank1.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <title>Customer Information</title>
</head>

<body class="back">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
        <a class="navbar-brand" href="home.php"><i class="fa fa-university" aria-hidden="true"></i>
        &nbsp;  MDD's Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="userinfo.php">Customer List</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="transfer.php">Transfer Money</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="transferhist.php">Transaction History</a>
                </li>
            </ul>
        </div>
    </nav><br>
    <?php include("info.php");

    $dropName = mysqli_query($conn, "SELECT name FROM customer");


    ?>
    <h2 style="text-align: center;">Find a Customer Information</h2>
    <form action="" method="post" id="drop">
        <select name="name">
            <option value="">Select a customer</option>
            <?php
            while ($Dname = mysqli_fetch_array($dropName)) {
                echo "<option value='" . $Dname["name"] . "'>" . $Dname["name"] . "</option>";
            }
            ?>
        </select> <br><br>
        <input class="view" type="submit" name="findData" value="View Details">
    </form>
    <br>
    <?php include("info.php");

    $form = mysqli_query($conn, "SELECT name FROM customer");
    if (isset($_POST['findData'])) {
        $name = $_POST['name'];

        $query = " SELECT * FROM `customer` where name='$name'";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_array($result)) {
    ?>
    <form style="color:white;" class="hidden" action="" method="POST">

        <label for="">Customer Name:-</label>
        <input class="lab" type="text" name="name" value="<?php echo $row['Name'] ?>" disabled /><br><br>
        <label for="">Email Id:- </label>
        <input class="lab" type="text" name="email" value="<?php echo $row['Email'] ?>" disabled /><br><br>
        <label for="">Balance:-</label>
        <input class="lab" type="text" name="balance" value="<?php echo $row['Balance'] ?>" disabled /><br><br>

    </form>
    <?php
        } else {
            echo " <br><br>
            <div class='alert alert-info alert-dismissible fade show' style= 'background-color:'red' role='alert'>
            <h2><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true' style='font-size: 50px; text-align: center;color:red'>&times;</span>
            </button></h2>
            <h2 style='text-align:center; color:red' id='h2'>Please Select a Customer!.</h2>
            </div>";
        }
    }

    ?>
    <footer style="position: fixed;">
        <h5>Mahek Desai</h5>
        <p>TSP❤</p>
    </footer>
</body>

</html>