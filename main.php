<?php
session_start();
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
                <li><a href="#" id="edu">Educational Equipments</a></li>
                <li><a href="#" id="mobile">Mobile tabs and Accesories</a></li>
                <li><a href="#" id="laptops">Laptops and Accesories</a></li>
                <li><a href="#" id="sports">Sports And Equipments</a></li>
                <li><a href="#" id="footwear">Footwear</a></li>
                <li><a href="#" id="books">Books</a></li>
                <li><a href="#" id="clothes">Clothing and Accesories</a></li>
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
<div class="row" id="full">
<?php include_once('maincontent.php'); ?>
          </div>
          <div class="row" id="edu">

            
          </div>
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
      menuWidth: 240, // Default is 240
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
<script type="text/javascript">
 $(document).ready(function(){
    $("#edu").click(function(){
      $("#full").load("cuseducation.php");
    });
});
 $(document).ready(function(){
    $("#mobile").click(function(){
      $("#full").load("mobile.php");
    });
});
 $(document).ready(function(){
    $("#laptops").click(function(){
      $("#full").load("laptops.php");
    });
});
 $(document).ready(function(){
    $("#sports").click(function(){
      $("#full").load("sports.php");
    });
});
  $(document).ready(function(){
    $("#footwear").click(function(){
      $("#full").load("footwear.php");
    });
});
    $(document).ready(function(){
    $("#books").click(function(){
      $("#full").load("books.php");
    });
});
        $(document).ready(function(){
    $("#clothes").click(function(){
      $("#full").load("clothes.php");
    });
});
</script>
</body>
</html>

























































































































