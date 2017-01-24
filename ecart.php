<!DOCTYPE html>
<html>
<head>
  <title>VIT EMart</title>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="loginSeller.html">Login as a Seller</a></li>
  <li><a href="loginCustomer.html">Login as a Customer</a></li>
  <li class="divider"></li>
</ul>

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">About</a></li>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>

<div class="container" style="margin-top: 5%;">
  <h3 class="center-align wow zoomIn" >Ecart<span><i class="medium material-icons"></span>shopping_cart</i></h3>
  </div>

<ul class="collapsible" data-collapsible="accordion">
       <?php
       $count=4;
      $json=array
      (
        array("shoes","great shoes blue in color"),
        array("tshirt","red tshirt of puma brand"),
        array("book","maths book K.Indra"),
        array("mobile","black nokia lumia")
  );
        for($i=0;$i<$count;$i++)
        { ?>
  <li>
    <div class="collapsible-header"><span class="badge">view<i class="material-icons">view_list</i></span><i class="material-icons">filter_drama</i><?php echo $json[$i][0];?></div>
    <div class="collapsible-body"><p><?php echo $json[$i][1];?>
    <a class="waves-effect waves-light btn right red"><i class="material-icons right">delete</i>remove</a>
    <a class="waves-effect waves-light btn right"><i class="material-icons right">buy now</i>buy now</a>
   
    </p>
    </div>
     <?php
       } ?>
</ul><script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
            
</body>
</html>