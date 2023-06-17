<?php

// session_start();
include '../includes/connection.php';
include 'session.php';


$view = $_GET['view'];
$query = "SELECT * FROM add_product where prod_id = $view";
$result = mysqli_query($con,$query);

$rows = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center" style="margin-top: 150px;">
        <div class="row">
            <div class="col-lg-6">
                <img src="../upload/<?php echo $rows['product'] ?>" height="400px" width="100%" style="margin: auto;" data-aos="zoom-in" data-aos-duration="2000">
            </div>
            <div class="col-lg-6" style="margin-top: 100px;">
                <h1 style="color: #1c233f"><?php echo $rows['prod_name'] ?></h1>
                <p style="color: #1c233f"><?php echo $rows['prod_desc'] ?></p>
                <a href="../pages/seller_home.php"><button class="btn-factory">Close</button></a>
            </div>
        </div>
    </div>


    <?php include '../includes/header2.php'; ?>

    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>