<?php

include '../includes/connection.php';

$query1 = mysqli_query($con,"SELECT * FROM register WHERE category = '1'");
$customer = mysqli_num_rows($query1);

$query2 = mysqli_query($con,"SELECT * FROM register WHERE category = '2'");
$Seller = mysqli_num_rows($query2);

$query3 = mysqli_query($con,"SELECT * FROM add_product");
$product = mysqli_num_rows($query3);

$query4 = mysqli_query($con,"SELECT * FROM `message`");
$message = mysqli_num_rows($query4);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <div style="margin-top: 100px;">
        <img src="../images/about3_new.jpg" height="500px" width="100%">
    </div>

    <div class="para mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <p style="padding-top: 88px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eligendi dolores dolorum numquam hic fugiat quibusdam obcaecati, excepturi quis aspernatur totam vel placeat laudantium laborum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores corporis ullam doloremque distinctio sapiente aperiam porro,beatae, veritatis libero nobis saepe.</p>
                </div>
                <div class="col-lg-4">
                    <h5>We started off as</h5>
                    <h1>a very small business</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, velit quidem soluta nobis assumenda ipsum odit laborum dolores optio ullam aliquam labore? Soluta doloribus ex labore. Nihil illo eius sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A magni explicabo voluptatibus pariatur minus placeat eius ipsa! Consectetur, atque suscipit. Suscipit voluptas illum possimus ipsa sapiente aspernatur, beatae soluta odit! Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-lg-5">
                    <img src="../images/shoes_about.jpg" width="100%" height="300px" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="container partners">
        <h1 class="text-center">We Are Partners</h1>
        <p>
        The partnership is crucial to the growth of any business venture. A partnership manifests itself in different forms, ranging from business owners cooperating to invest in a project to share technical knowledge and ideas between firms.
        </p>
        <p class="text-center"><a href="team.php"><button class="btn-factory">Know More</button></a></p>
    </div> -->

    <!-- <div class="bg mt-5">
        <img src="../images/shoes_about_2.jpg" width="100%">
    </div> -->

    <div class="container who">
        <h1>WHO WE ARE</h1>
        <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum saepe nihil fugit non? Fugiat, temporibus error? Reprehenderit, dolorum! Odio, quos consequuntur. Doloribus nobis eum ipsam in impedit libero, obcaecati maxime. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, veritatis quisquam neque dolorum cum impedit consectetur laudantium et harum nobis minima blanditiis, totam repudiandae eligendi laboriosam beatae tempore unde sequi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur accusantium quam reprehenderit, ratione incidunt deleniti? Illo sunt iure quos ullam laborum est quaerat. Nisi asperiores autem numquam voluptates iste velit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, reprehenderit ullam ab nam nisi modi culpa cum. Tempore, ad molestiae quas odit incidunt aspernatur quasi quis, reprehenderit corrupti, culpa voluptates. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum saepe nihil fugit non? Fugiat, temporibus error? Reprehenderit, dolorum! Odio, quos consequuntur. Doloribus nobis eum ipsam in impedit libero, obcaecati maxime. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, veritatis quisquam neque dolorum cum impedit consectetur laudantium et harum nobis minima blanditiis, totam repudiandae eligendi laboriosam beatae tempore unde sequi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur accusantium quam reprehenderit, ratione incidunt deleniti? Illo sunt iure quos ullam laborum est quaerat. Nisi asperiores autem numquam voluptates iste velit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, reprehenderit ullam ab nam nisi modi culpa cum. Tempore, ad molestiae quas odit incidunt aspernatur quasi quis, reprehenderit corrupti, culpa voluptates.</P>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis ullam voluptas veniam ut aspernatur omnis unde minus voluptate dolores quisquam, doloribus, voluptatum praesentium itaque facilis odit. Laboriosam numquam culpa aperiam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nulla rerum illum corrupti, qui fuga dolor laborum similique modi vero quo dolorem tempore itaque nesciunt labore eaque alias autem. Voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, delectus ducimus. Porro exercitationem necessitatibus ea dolor, voluptatibus soluta eos et quos earum, tenetur numquam, expedita laboriosam molestias voluptate accusantium magni. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis ullam voluptas veniam ut aspernatur omnis unde minus voluptate dolores quisquam, doloribus, voluptatum praesentium itaque facilis odit. Laboriosam numquam culpa aperiam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nulla rerum illum corrupti, qui fuga dolor laborum similique modi vero quo dolorem tempore itaque nesciunt labore eaque alias autem. Voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, delectus ducimus. Porro exercitationem necessitatibus ea dolor, voluptatibus soluta eos et quos earum, tenetur numquam, expedita laboriosam molestias voluptate accusantium magni.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, beatae ipsam voluptatum at dicta explicabo, quidem enim, ab quis qui consequatur reiciendis quasi! Fugiat veniam accusamus vel autem asperiores numquam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae officia in eius ad! Ut voluptate, quas id dolorem ex mollitia, vero aut voluptates eligendi unde sit? Maiores provident quam nisi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, beatae ipsam voluptatum at dicta explicabo, quidem enim, ab quis qui consequatur reiciendis quasi! Fugiat veniam accusamus vel autem asperiores numquam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae officia in eius ad! Ut voluptate, quas id dolorem ex mollitia, vero aut voluptates eligendi unde sit? Maiores provident quam nisi!</p>
    </div>

    <div class="container people mt-5">
        <div class="container">
            <h1>OUR PEOPLE</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mt-5">
                        <div class="card-body">
                            <img src="../images/seller1.png">
                            <h3>Ravi Verma</h3>
                          <h6 class="card-subtitle mb-2 text-muted">NSB Company</h6>
                          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed dolores ipsam commodi fuga. Debitis quas quia facilis.</p>
                          <br>
                          <p><a href="customer_login.php"><button class="btn-factory">Get Products</button></a></p>
                        </div>
                      </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mt-5">
                        <div class="card-body">
                            <img src="../images/seller2.jpg">
                            <h3>Seema Arora</h3>
                          <h6 class="card-subtitle mb-2 text-muted">Cwiz Company</h6>
                          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed dolores ipsam commodi fuga. Debitis quas quia facilis.</p>
                          <br>
                          <p><a href="customer_login.php"><button class="btn-factory">Get Products</button></a></p>
                        </div>
                      </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mt-5">
                        <div class="card-body">
                            <img src="../images/seller3.png">
                            <h3>Aakash Desai</h3>
                          <h6 class="card-subtitle mb-2 text-muted">Mazinto Company</h6>
                          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed dolores ipsam commodi fuga. Debitis quas quia facilis.</p>
                          <br>
                          <p><a href="customer_login.php"><button class="btn-factory">Get Products</button></a></p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="works w-100">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <h1>How We work ?</h1>
            <p>
            Small businesses often are more flexible about allowing casual wear in the office. You'll enjoy greater flexibility. Small companies are less tied to policy and precedent than big conglomerates, so they can be more flexible with remote work and in general. You can pick your tech.
            </p>
            <p class="text-center"><a class="btn btn-dark" href="more.php">Read More</a></p>
        </div>
    </div> -->

    <!-- <div class="mission" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="../images/mission.png" height="500px" width="90%" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="2000" data-aos-duration="3000">
                </div>
                <div class="col-lg-6">
                    <h1>Our Mission</h1>
                    <p>"Our vision is a world in which people's basic need such as footwear is fulfilled in an environmentally sustainable way, and a company that improves the quality of the environment and the communities where we live and work."</p>
                </div>
            </div>
        </div>
    </div> -->


    <!-- <div class="counter mt-5" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <h1>Our Process</h1>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <h2><?php echo $Seller ?></h2>
                    <p>Seller</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <h2><?php echo $customer ?></h2>
                    <p>Customer</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <h2><?php echo $product ?></h2>
                    <p>Product</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <h2><?php echo $message ?></h2>
                    <p>Message</p>
                </div>
            </div>
        </div>
    </div> -->
    


    <?php 
        include '../includes/sub_header.php';
        include '../includes/footer.php';
    ?>
    



    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>