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
    <title>Transfer</title>

</head>

<body class="back">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <a class="nav-link" href="cust.php">Customer Information</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="transferhist.php">Transaction History</a>
                </li>
            </ul>
        </div>
    </nav><br>

    <h2 style="text-align: center;">Transfer Money</h2>
    <?php include("info.php");

    $detailFrom  = mysqli_query($conn, "SELECT name FROM customer");
    $detailTo = mysqli_query($conn, "SELECT name FROM customer");
    ?>
    <form action="" method="GET" id="drop">
        <label for="">From:-</label>
        <select name="user1">
            <option value="">From</option>
            <?php
            while ($name1 = mysqli_fetch_array($detailFrom)) {
                echo "<option value='" . $name1["name"] . "'>" . $name1["name"] . "</option>";
            }
            ?>
        </select>
        <br> <br>
        <label for="">To:-</label>
        <select name="user2">
            <option value="">To</option>
            <?php
            while ($name1 = mysqli_fetch_array($detailTo)) {
                echo "<option value='" . $name1["name"] . "'>" . $name1["name"] . "</option>";
            }
            ?>
        </select> <br><br><label for="">Enter Amount</label>
        <input type="number" name="amount" style="background-color: #fff; color:black; width:500px; height:50px"
            placeholder="Enter Amount"><br><br>
        <input class="view" name="transfer" type="submit" value="Transfer"><br>
    </form>
    <?php

        if (isset($_GET['transfer'])) {
            
            $cust1 = $_GET["user1"];
            $cust2 = $_GET["user2"];
            $amount =$_GET["amount"];

        if ($cust1 != "" && $cust2 != "" && $amount != "") 
        {
            if($cust1!=$cust2)
            {
            // update the balance amount      
                $receive = "UPDATE customer SET Balance = Balance + '$amount' WHERE Name= '$cust2' ";
                $updatedData2 = mysqli_query($conn, $receive);
                $send = "UPDATE customer SET Balance = Balance - '$amount' WHERE Name= '$cust1' ";
                $updatedData1 = mysqli_query($conn, $send);

                if ($updatedData2 && $updatedData1) {
                    echo "<div class='alert alert-success'>
                <h2 style='text-align:center; color:#000' id='h2'>Payment Done Successfully.</h2>
                </div>";
                }
                else {
                    echo "<div class='alert alert-warning'>
                <h2 style='text-align:center; color:#000' id='h2'>Oops! Payment Unsuccessful. Please Try Again.</h2>
                </div>";
                }
                // insert value into transfer
                $transaction = "INSERT INTO transfer(Sender,Receiver,Amount_send) VALUES ('$cust1', '$cust2', '$amount')";
                $done = mysqli_query($conn, $transaction);

                if($done){
                    $u1 = "SELECT * FROM customer WHERE  Name='$cust1' ";
                    $res=mysqli_query($conn,$u1);
                    $row_count=mysqli_num_rows($res);
                }


            }else {
                echo "<script>alert('Error ! Same Name Selected. Please Check Properly!')</script>";
            }
        }else {
            echo "<script>alert('Enter all Field.')</script> ";
        }
    }
    ?>

    <footer style="position: fixed;">
        <h5>Mahek Desai</h5>
        <p>TSP❤</p>
    </footer>

</body>


</html>