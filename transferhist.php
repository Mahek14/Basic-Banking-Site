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
    <title>Transaction Details</title>
</head>

<body class="back">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php"><i class="fa fa-university" aria-hidden="true"></i>
            &nbsp; MDD's Bank</a>
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
                    <a class="nav-link" href="transfer.php">Transfer Money</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <h2 style="text-align: center;">Customer Details</h2>
    <section class="container">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Amount Send</th>
                </tr>
            </thead>
            <?php
            include("info.php");

            $results = mysqli_query($conn, "SELECT * FROM `transfer`");

            while ($row = mysqli_fetch_array($results)) {
                echo "<tr>";
                echo "<td>" . $row["Sender"] . "</td>";
                echo "<td>" . $row["Receiver"] . "</td>";
                echo "<td>" . 'Rs ' . $row["Amount_send"] . "</td>";
                echo "</tr>";
            }
            echo  "</table>";
            echo "</section>";
            mysqli_close($conn);
            ?>

            <footer>
                <h5>Mahek Desai</h5>
                <p>TSP❤</p>
            </footer>

</body>


</html>