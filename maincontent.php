 <?php
 include_once("Connection.php");
$result ="select * from additem ";
$res = mysqli_query($conn,$result);
$row_cnt = mysqli_num_rows($res);
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