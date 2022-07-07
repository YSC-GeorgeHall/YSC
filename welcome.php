<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style type="text/css">
      .contentfromsidenav{
        margin-left: 15%;

      }
      @media only screen and (max-width:600px) {
    .contentfromsidenav {
    width:100%;

  }
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>
<body>


<div class="contentfromsidenav">
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="margin-left: 1.9%;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a> <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>




  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <div class="d-flex justify-content-center"><h5>What are you shopping for?</h5></div>
          
        
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Browsing - View All Stores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              Books & Stationary
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Childrenwear
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Food & Drink
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Health & Beauty
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Homewear
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Jewellery
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Menswear
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Technology
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Travel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Womenswear
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link"  href="view-profile.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              View Your Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="reset-password.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Reset Your Password
            </a>
          </li>
        </ul>
      </div>
    </nav>
</div>
</div>
   
   
 
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"  >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/728x120.png?text=Image1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/728x120.png?text=Image2" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/728x120.png?text=Image3" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
<div class="container" style="padding-left: 5%;">

<form action="insert.php" method="post">
    <p>
        <label for="advert_title">First Name:</label>
        <input type="text" name="advert_title" id="advert_title">
    </p>
    <input type="submit" value="Submit">
</form>






 <div class="row" style="padding-top: 10px;"><!-- Start of Row -->

        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None">
                <div class="thumbnail center well well-small text-center">
                    <div class="thumbnail center well well-small text-center">
                            <!-- Start: A Quarter Of... -->
                            <a  href="https://www.awin1.com/cread.php?s=2756069&v=978&q=401243&r=1052665" target="blank">
                                <img src="https://www.awin1.com/cshow.php?s=2756069&v=978&q=401243&r=1052665" border="0" style="height: 200px; width: 250px; padding: 5px;">
                            </a>
                            <!-- End: A Quarter Of... -->
                        <div class="card-body">
                            <div class="span12">
                                <div class="thumbnail center well well-small text-center">
                                    <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 --> 
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None">
                <div class="thumbnail center well well-small text-center">
                    <div class="thumbnail center well well-small text-center">
                    <!-- Start: AfterShock -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=26385&awinaffid=1052665&ued=https%3A%2F%2Fwww.aftershockplc.com%2F" target="blank">
                    <img src="images/other/aftershock_london.jpg" style="height: 100px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: AfterShock -->
                        <div class="card-body">
                            <div class="span12">
                                <div class="thumbnail center well well-small text-center">
                                    <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 --> 
    </div><!-- End of row -->    
    <div class="row"><!-- Start of Row -->  
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None">
                <div class="thumbnail center well well-small text-center">
                    <div class="thumbnail center well well-small text-center">
                    <!-- Start: Bennys of London -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=23629&awinaffid=1052665&ued=https%3A%2F%2Fwww.bennysoflondon.com%2F" target="blank">
                    <img src="images/other/bennys_london.jpg" style="height: 100px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: Bennys of London -->
                        <div class="card-body">
                            <div class="span12">
                                <div class="thumbnail center well well-small text-center">
                                    <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 --> 
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None">
                <div class="thumbnail center well well-small text-center">
                    <div class="thumbnail center well well-small text-center">
                        <!-- Start: Bunches.co.uk -->
                        <a  href="https://www.awin1.com/cread.php?s=66682&v=488&q=54630&r=1052665" target="blank">
                        <img src="https://www.awin1.com/cshow.php?s=66682&v=488&q=54630&r=1052665" border="0" style="height: 100px; width: 250px; padding: 5px;">
                        </a>
                        <!-- End: Bunches.co.uk -->
                        <div class="card-body">
                            <div class="span12">
                                <div class="thumbnail center well well-small text-center">
                                    <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->      
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None">
                <div class="thumbnail center well well-small text-center">
                    <div class="thumbnail center well well-small text-center">
                        <!-- Start: Cadburys.co.uk -->
                        <a  href="https://www.awin1.com/cread.php?awinmid=736&awinaffid=1052665&ued=https%3A%2F%2Fwww.cadburygiftsdirect.co.uk%2F" target="blank">
                        <img src="images/other/cadbury_gifts.jpg" border="0" style="height: 100px; width: 250px; padding: 5px;">
                        </a>
                        <!-- End: Cadbury.co.uk -->
                        <div class="card-body">
                            <div class="span12">
                                <div class="thumbnail center well well-small text-center">
                                    <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->  
    </div><!-- End of row -->    
    <div class="row"><!-- Start of Row -->      
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None">
                <div class="thumbnail center well well-small text-center">
                    <div class="thumbnail center well well-small text-center">
                        <!-- Start: dresslily.co.uk -->
                        <a  href="https://www.awin1.com/cread.php?awinmid=7138&awinaffid=1052665&ued=https%3A%2F%2Fwww.dresslily.com%2F" target="blank">
                        <img src="images/other/dress_lilly.jpg" border="0" style="height: 100px; width: 250px; padding: 5px;">
                        </a>
                        <!-- End: dresslily.co.uk -->
                        <div class="card-body">
                            <div class="span12">
                                <div class="thumbnail center well well-small text-center">
                                    <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 --> 
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None">
                <div class="thumbnail center well well-small text-center">
                    <div class="thumbnail center well well-small text-center">
                        <!-- Start: For You Personalised Gifts -->
                        <a  href="https://www.awin1.com/cread.php?s=2900422&v=23912&q=414983&r=1052665" target="blank">
                        <img src="https://www.awin1.com/cshow.php?s=2900422&v=23912&q=414983&r=1052665" style="height: 100px; width: 250px; padding: 5px;">
                        </a>
                        <!-- End: For You Personalised Gifts -->
                        <div class="card-body">
                            <div class="span12">
                                <div class="thumbnail center well well-small text-center">
                                    <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->  
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None">
                <div class="thumbnail center well well-small text-center">
                    <div class="thumbnail center well well-small text-center">
                        <!-- Start: For Your little one -->
                        <a  href="https://www.awin1.com/cread.php?awinmid=26038&awinaffid=1052665&ued=https%3A%2F%2Fforyourlittleone.com%2F" target="blank">
                        <img src="images/other/for_little_one.jpg" style="height: 100px; width: 250px; padding: 5px;">
                        </a>
                        <!-- End: For Your little one -->
                        <div class="card-body">
                            <div class="span12">
                                <div class="thumbnail center well well-small text-center">
                                    <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 --> 
    </div><!-- End of row -->    
    <div class="row"><!-- Start of Row -->  
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None; padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Ink & Drop -->
                    <a  href="https://www.awin1.com/cread.php?s=3104134&v=23266&q=433923&r=1052665" target="blank">
                    <img src="images/other/ink_drop.jpg" style="padding: 5px;">
                    </a>
                    <!-- End: Ink & Drop -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->  
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Kelsey Media -->
                    <a  href="https://www.awin1.com/cread.php?s=3105047&v=19854&q=433993&r=1052665" target="blank">
                    <img src="images/other/kelsey_media.jpg" >
                    </a>
                    <!-- End: Kelsey Media -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None; ">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Libertas London -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=26670&awinaffid=1052665&ued=https%3A%2F%2Flibertas-london.com%2F" target="blank">
                    <img src="images/other/libertas.jpg" style="height:75px">
                    </a>
                    <!-- End: Libertas London -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
    </div><!-- End of row -->    
    <div class="row"><!-- Start of Row -->  
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None; ">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Cashmere Co London -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=20071&awinaffid=1052665&ued=https%3A%2F%2Flondoncashmerecompany.com%2F" target="blank">
                    <img src="images/other/london_cashmere.jpg" style="height:75px">
                    </a>
                    <!-- End: Cashmere Co London -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None; ">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Mighty pea London -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=24179&awinaffid=1052665&ued=https%3A%2F%2Fwww.mightydrinks.com%2F" target="blank">
                    <img src="images/other/mighty_pea.jpg" style="height:75px">
                    </a>
                    <!-- End: Mighty pea London -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Miss Foxy -->
                    <a  href="https://www.awin1.com/cread.php?s=2945143&v=24098&q=418980&r=1052665"  target="blank">
                    <img src="https://www.awin1.com/cshow.php?s=2945143&v=24098&q=418980&r=1052665"  style="height: 100px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: Miss Foxy -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
    </div><!-- End of row -->    
    <div class="row"><!-- Start of Row -->      
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Office Stationery -->
                    <a  href="https://www.awin1.com/cread.php?s=118513&v=2193&q=79587&r=1052665"  target="blank">
                    <img src="images/other/office_stationery.jpg" style="height: 100px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: Office Stationery -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: PatPat UK -->
                    <a  href="https://www.awin1.com/cread.php?s=2218940&v=15189&q=343586&r=1052665" target="blank">
                    <img src="https://www.awin1.com/cshow.php?s=2218940&v=15189&q=343586&r=1052665">
                    </a>
                    <!-- End: PatPat UK -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Perfect Pets -->
                    <a  href="https://www.awin1.com/cread.php?s=2737280&v=21220&q=399760&r=1052665">
                        <img src="https://www.awin1.com/cshow.php?s=2737280&v=21220&q=399760&r=1052665" border="0">
                    </a>
                    <!-- End: Perfect Pets -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
    </div><!-- End of row -->    
    <div class="row"><!-- Start of Row -->   
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Perfume Click -->
                    <a  href="https://www.awin1.com/cread.php?s=2561283&v=6561&q=379615&r=1052665" target="blank">
                    <img src="https://www.awin1.com/cshow.php?s=2561283&v=6561&q=379615&r=1052665" style="height: 100px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: Perfume Click -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Prezzybox -->
                    <a  href="https://www.awin1.com/cread.php?s=373236&v=164&q=176146&r=1052665"  target="blank">
                    <img src="https://www.awin1.com/cshow.php?s=373236&v=164&q=176146&r=1052665 style="height: 75px; width: 200px; padding: 5px;" >
                    </a>
                    <!-- End: Prezzybox -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <br>
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Printer Pix -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=3993&awinaffid=1052665&ued=https%3A%2F%2Fwww.printerpix.co.uk%2F"  target="blank">
                    <img src="images/other/printer_pix.jpg"style="height: 75px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: Printer Pix -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Red on Socks -->
                    <a  href="https://www.awin1.com/cread.php?s=3058989&v=26697&q=428065&r=1052665" target="blank">
                        <img src="https://www.awin1.com/cshow.php?s=3058989&v=26697&q=428065&r=1052665" border="0">
                    </a>
                    <!-- End: Red on Socks -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->    
 
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Red Rickshaw Limited -->
                    <a href="https://www.awin1.com/cread.php?s=3084516&v=18038&q=432201&r=1052665" target="blank">
                        <img src="https://www.awin1.com/cshow.php?s=3084516&v=18038&q=432201&r=1052665" style="height: 150px; width: 225px; padding: 5px;">
                    </a>
                    <!-- End: Red Rickshaw Limited -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Ruffles Bexley -->
                    <a  href="https://www.awin1.com/cread.php?s=2992522&v=23849&q=423684&r=1052665" target="blank">
                    <img src="https://www.awin1.com/cshow.php?s=2992522&v=23849&q=423684&r=1052665" style="height: 100px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: Ruffles Bexley -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
            </div><!-- End of row -->    
    <div class="row"><!-- Start of Row -->   
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Soak Sunday -->
                    <a  href="https://www.awin1.com/cread.php?s=2963680&v=25455&q=420644&r=1052665" target="blank">
                    <img src="https://www.awin1.com/cshow.php?s=2963680&v=25455&q=420644&r=1052665" style="height: 75px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: Soak Sunday -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Straight My Teeth -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=20132&awinaffid=1052665&ued=https%3A%2F%2Fwww.straightmyteeth.com%2F" target="blank">
                    <img src="images/other/straight_teeth.jpg" style="height: 75px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: Straight My Teeth -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: The Cake Decorating Company -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=23157&awinaffid=1052665&ued=https%3A%2F%2Fwww.thecakedecoratingcompany.co.uk%2F" target="blank">
                    <img src="images/other/cake_decorating.jpg" style="height: 75px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: The Cake Decorating Company -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
    </div><!-- End of row -->    
    <div class="row"><!-- Start of Row --> 
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: The Little Blanket Shop -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=22213&awinaffid=1052665&ued=https%3A%2F%2Fthelittleblanketshop.co.uk%2F"  target="blank">
                    <img src="images/other/little_blanket.jpg" style="height: 75px; width: 250px; padding: 5px;">
                    </a>
                    <!-- End: The Little Blanket Shop -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;  padding-top: 5px;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Penshop -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=23079&awinaffid=1052665&ued=https%3A%2F%2Fwww.penshop.co.uk%2F"  target="blank">
                    <img src="images/other/pen_shop.jpg">
                    </a>
                    <!-- End: Penshop -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: The Towel Shop -->
                    <a  href="https://www.awin1.com/cread.php?s=532369&v=5611&q=234245&r=1052665" target="blank">
                    <img src="https://www.awin1.com/cshow.php?s=528249&v=5611&q=234245&r=1052665" style="height: 75px;  padding: 5px;">
                    </a>
                    <!-- End: The Towel Shop -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->  
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Travis Perkins -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=16300&awinaffid=1052665&ued=https%3A%2F%2Fwww.travisperkins.co.uk%2F" target="blank">
                    <img src="images/other/travis_perkins.jpg" style="height: 75px;  padding: 5px;">
                    </a>
                    <!-- End: Travis Perkins -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 --> 

        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Vitalife Health -->
                    <a  href="https://www.awin1.com/cread.php?s=2449833&v=17230&q=369519&r=1052665" target="blank">
                    <img src="https://www.awin1.com/cshow.php?s=2449833&v=17230&q=369519&r=1052665"  style="height:100px; width: 250px;">
                    </a>
                    <!-- End: Vitalife Health -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 --> 
        <div class="col-md-4"><!-- Start of Col 4 -->
            <div class="card" style="border: None;">
                <div class="thumbnail center well well-small text-center">
                    <!-- Start: Your Dogs Club -->
                    <a  href="https://www.awin1.com/cread.php?awinmid=24575&awinaffid=1052665&ued=https%3A%2F%2Fwww.yourdogsclub.co.uk%2F" target="blank">
                    <img src="images/other/dog_club.jpg"  style="height:100px; width: 250px;">
                    </a>
                    <!-- End: Your Dogs Club -->
                    <div class="card-body">
                        <div class="span12">
                            <div class="thumbnail center well well-small text-center">
                                <!--  <button class="btn btn-primary mb-2">Add to Favourites!</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Col 4 -->
    </div><!-- End of Row --> 


</div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>