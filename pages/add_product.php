<?php

include '../db_files/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
</head>
<body>

    <h1 class="text-center" style="margin-top: 150px;">Adding Product</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form action="../db_files/add_product.php" method="POST" enctype="multipart/form-data">
                    <div class="box">
                        <input type="text" name="prod_name" class="input inp1" required>
                        <div class="label1">
                            <label>Product Name</label>
                        </div>
                    </div>

                    <div class="box">
                        <input type="text" name="prod_desc" class="input inp2" required>
                        <div class="label2">
                            <label>Product Description</label>
                        </div>
                    </div>

                    <div class="box">
                        <input type="text" name="size1" class="input inp3" required>
                        <div class="label3">
                            <label>First Size</label>
                        </div>
                    </div>

                    <div class="box">
                        <input type="text" name="size2" class="input inp4" required>
                        <div class="label4">
                            <label>Second Size</label>
                        </div>
                    </div>

                    <div class="box">
                        <input type="text" name="size3" class="input inp5" required>
                        <div class="label5">
                            <label>Third Size</label>
                        </div>
                    </div>

                    <div class="box">
                        <input type="text" name="prize1" class="input inp6" required>
                        <div class="label6">
                            <label>Prize</label>
                        </div>
                    </div>

                    <div class="box">
                        <input type="text" name="prize2" class="input inp7" required>
                        <div class="label7">
                            <label>Prize with Discount</label>
                        </div>
                    </div>

                    <div class="box">
                        <input type="file" name="file" class="mt-5" required>
                    </div>

                    <br>
                    <input type="submit" class="btn btn-warning" style="float: right;">
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>


    <?php
        include '../includes/header2.php';
    ?>

    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>