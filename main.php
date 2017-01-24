<?php
session_start();
include_once("Connection.php");
$result ="select * from additem ";
$res = mysqli_query($conn,$result);
$row_cnt = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
	<title>VIT EMart</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col l12 s12 m12">
 <ul id="slide-out" class="side-nav fixed">
      <li><a>Welcome <?php echo $_SESSION['name'] ?></a></li>
      <li><div class="divider"></div></li>
      <li class="">
        <ul class="collapsible collapsible-accordion">
          <li class="no-padding">
            <a class="collapsible-header">Categories<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
             <li><div class="divider"></div></li>
                <li><a href="#">Educational Equipments</a></li>
                <li><a href="#">Mobile tabs and Accesories</a></li>
                <li><a href="#">Laptops and Accesories</a></li>
                <li><a href="#">Sports And Equipments</a></li>
                <li><a href="#">Footwear</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#">Clothing and Accesories</a></li>
                </ul>
            </div>
          </li>
          <li><div class="divider"></div></li>
               <li class="">
        <ul class="collapsible collapsible-accordion">
          <li class="no-padding">
            <a class="collapsible-header">Filter<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
             <li><div class="divider"></div></li>
                <li><a href="#">By Price</a></li>
                <li><a href="#">By Location</a></li>
            </div>
          </li>

        </ul>
      </li>
    </ul>
    </div>
    </div>
 <div class="container" style="margin-top: 5%;">
  <h3 class="center-align wow zoomIn" >The Products available on Second Hand EMart</h3>
  </div>
  <div class="container wow fadeInDown" data-wow-delay="1s" style="margin-top: 7%;">
<div class="row">

        
        <?php
        for($i=0;$i<$row_cnt;$i++)
        { ?>
<div class="col s12 m4 l4">
        
          <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php $row = mysqli_fetch_array($res); $filepath[] = $row['img_path']; print $filepath[$i];  ?>" width="300" height="200">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php 
  $ProductName[] = $row['ProductName'];
 

   print $ProductName[$i]; 

  ?><i class="material-icons right">more_vert</i></span>
      <!--<p><a href="#">This is a link</a></p>-->
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php print $ProductName[$i] ?><i class="material-icons right">close</i></span>
      <ul>
      <li>Description : <?php  $des[] = $row['Description']; print $des[$i];  ?></li>
      <li>Price: <?php  $price[] = $row['Price']; print $price[$i];  ?> </li>
      <li>Category : <?php $category[] = $row['Category']; print $category[$i]; ?></li>
      <a href="#">Full info</a>
      </ul>

      <a class="waves-effect waves-light btn">Add to Cart</a>
    </div>
  </div>  
          </div>
          <?php
          }?>
    </div>
    </body>
   <!-- <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li>Welcome <?php echo $_SESSION['name'] ?></li>
        <li><a href="updateCustomer.html">Update Info</a></li>

      </ul>
    </div>
  </nav>-->

  <!--<div class="container" style="margin-top: 5%;">
  <h3 class="center-align wow zoomIn" >Welcome <?php echo $_SESSION['name'] ?></h3>
  </div>-->
 
       
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script type="text/javascript">
  $(".button-collapse").sideNav();
    $('.button-collapse').sideNav({
      menuWidth: , // Default is 240
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
</script>
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</body>
</html>