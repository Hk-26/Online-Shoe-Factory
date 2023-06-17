<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
</head>
<body>
    
    <img src="../images/logo.jpg" class="admin_logo1"> 
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h3 class="card-title text-center">Admin Login</h3>
                <div class="card shadow">
                    <div class="card-body">
                      <form action="db_files/admin_login.php" method="POST">
                        <div class="box">
                            <input type="text" name="username" class="input inp1" required>
                            <div class="label1">
                                <label>Username</label>
                            </div>
                        </div>
                        <div class="box">
                            <input type="password" name="password" class="input inp2" id="password" required>
                            <div class="label2">
                                <label>Password</label>
                            </div>
                        </div>
                        <br>
                        <p style="float: right;"><input type="submit" name="admin" class="btn btn-warning" value="Submit"></p>
                    </form>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>



    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>