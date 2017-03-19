 <?php
 include_once("Connection.php");
$output = '';
if(isset($_POST['search'])){
  $searchq=$_POST['search'];
  $result ="select * from additem where ProductName LIKE '$searchq%' ";
  $r = mysqli_query($conn,$result);
  $count = mysqli_num_rows($r);
  if($count==0)
  {
    echo "There was no search result";
  }
  else
  {
    while ($row =  mysqli_fetch_assoc($r)) {
     $rows[] = $row; 
    }
   foreach ($rows as $row) {
           
           if($row['available'] != 0)
           { ?>
         <div class="col s12 m4 l4">
        
          <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php print $row['img_path'];  ?>" width="300" height="200">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php

  
 
   print $row['ProductName']; 
    
         

  ?><i class="material-icons right">more_vert</i></span>
      <!--<p><a href="#">This is a link</a></p>-->
    </div>
     <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php print $row['ProductName'] ?><i class="material-icons right">close</i></span>
      <ul>
       
      <li>Description : <?php  print $row['Description'];  ?></li>
      <li>Price: <?php  print $row['Price'];  ?> </li>
      <li>Category : <?php  print $row['Category']; ?></li>
      <a href="#">Full info</a>
      </ul>

      <a class="waves-effect waves-light btn add" id="<?php echo $row["id"]; ?>">Add to Cart</a>
      <input type="hidden" name="postId" value="" />
    </div>
  </div>  

          </div>

             
 <?php 
}
}
}
}
else
{
$result ="select * from additem  ";
$res = mysqli_query($conn,$result);
$row_cnt = mysqli_num_rows($res);
 $rows = array();
    while ($row =  mysqli_fetch_assoc($res))
    {
        $rows[] = $row;
    }

        foreach ($rows as $row) {
           
           if($row['available'] != 0)
           {
            ?>
<div class="col s12 m4 l4">
        
          <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php print $row['img_path'];  ?>" width="300" height="200">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php

  
 
   print $row['ProductName']; 
    
         

  ?><i class="material-icons right">more_vert</i></span>
      <!--<p><a href="#">This is a link</a></p>-->
    </div>
     <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php print $row['ProductName'] ?><i class="material-icons right">close</i></span>
      <ul>
       
      <li>Description : <?php  print $row['Description'];  ?></li>
      <li>Price: <?php  print $row['Price'];  ?> </li>
      <li>Category : <?php  print $row['Category']; ?></li>
      <a href="#">Full info</a>
      </ul>

      <a class="waves-effect waves-light btn add" id="<?php echo $row["id"]; ?>">Add to Cart</a>
      <input type="hidden" name="postId" value="" />
    </div>
  </div>  

          </div>




            <?php
           } 
         }
            }
          ?>
          