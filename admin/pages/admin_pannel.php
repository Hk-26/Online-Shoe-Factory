<?php

include '../../includes/connection.php';

$query1 = mysqli_query($con,"SELECT * FROM register WHERE category = '2'");
$query2 = mysqli_query($con,"SELECT * FROM register WHERE category = '1'");
$query3 = mysqli_query($con,"SELECT * FROM add_product");
$query4 = mysqli_query($con,"SELECT * FROM `message`");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../../bootstrap-5/css/bootstrap.css">
</head>
<body>
    
    <img src="../../images/logo.jpg" class="admin_logo">
    <a href="../db_files/admin_logout.php" class="admin_logout">Logout</a>
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex align-items-start admin">
                <div class="col-lg-3 left">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-seller-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seller" type="button" role="tab" aria-controls="v-pills-seller" aria-selected="true">Seller</button>
                        <button class="nav-link" id="v-pills-customer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-customer" type="button" role="tab" aria-controls="v-pills-customer" aria-selected="false">Customer</button>
                        <button class="nav-link" id="v-pills-product-tab" data-bs-toggle="pill" data-bs-target="#v-pills-product" type="button" role="tab" aria-controls="v-pills-product" aria-selected="false">Products</button>
                        <button class="nav-link" id="v-pills-msg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-msg" type="button" role="tab" aria-controls="v-pills-msg" aria-selected="false">Messages</button>
                      </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-seller" role="tabpanel" aria-labelledby="v-pills-seller-tab">
                            <div class="row">
                                <?php while($seller = mysqli_fetch_array($query1)){ ?>
                                <div class="col-lg-4">
                                    <div class="card shadow mt-4">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $seller['firstname']."&nbsp;". $seller['lastname'] ?></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $seller['email'] ?></h6>
                                            <hr>
                                            <p class="card-text">Mobile : <?php echo $seller['mobile'] ?></p>
                                            <p class="card-text">Username : <?php echo $seller['username'] ?></p>
                                            <p class="card-text">Password : <?php echo $seller['password'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
                            <div class="row">
                                <?php while($customer = mysqli_fetch_array($query2)){ ?>
                                <div class="col-lg-4">
                                    <div class="card shadow mt-4">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $customer['firstname']."&nbsp;". $customer['lastname'] ?></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $customer['email'] ?></h6>
                                            <hr>
                                            <p class="card-text">Mobile : <?php echo $customer['mobile'] ?></p>
                                            <p class="card-text">Username : <?php echo $customer['username'] ?></p>
                                            <p class="card-text">Password : <?php echo $customer['password'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-product" role="tabpanel" aria-labelledby="v-pills-product-tab">
                            <div class="row">
                                <?php
                                    while($product = mysqli_fetch_array($query3)){
                                        $seller_id = $product['product_add_by'];
                                        $register = mysqli_query($con,"SELECT * FROM register WHERE id = '$seller_id'");
                                        $fetch = mysqli_fetch_array($register);
                                ?>
                                <div class="col-lg-4">
                                    <div class="card shadow mt-4" style="height:570px">
                                        <img src="../../upload/<?php echo $product['product'] ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h3 class="card-title"><?php echo $product['prod_name'] ?></h3>
                                          <p class="card-text"><?php echo $product['prod_desc'] ?></p>
                                          <p class="card-text"><b>Product added by <?php echo $fetch['firstname']."&nbsp;". $fetch['lastname'] ?></b></p>
                                        </div>
                                      </div>
                                </div>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-msg" role="tabpanel" aria-labelledby="v-pills-msg-tab">
                            <div class="row">
                                <?php while($msg = mysqli_fetch_array($query4)){ ?>
                                <div class="col-lg-4">
                                    <div class="card shadow mt-4" style="height: 200px;">
                                        <div class="card-body" >
                                            <h5 class="card-title"><?php echo $msg['firstname']."&nbsp;". $msg['lastname'] ?></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $msg['email'] ?></h6>
                                            <hr>
                                            <p class="card-text">Mobile : <?php echo $msg['message'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
      

    <script src="../../bootstrap-5/js/jquery.js"></script>
    <script src="../../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>