<?php

include_once("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
 .rating {
    float:left;
    border:none;
}
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0, 0, 0, 0);
}
.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
}
.rating:not(:checked) > label:before {
    content:'★ ';
}
.rating > input:checked ~ label {
    color: #f70;
}
.rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
    color: gold;
}
.rating > input:checked + label:hover, .rating > input:checked + label:hover ~ label, .rating > input:checked ~ label:hover, .rating > input:checked ~ label:hover ~ label, .rating > label:hover ~ input:checked ~ label {
    color: #ea0;
}
.rating > label:active {
    position:relative;
}
  </style>
</head>
<body>
 
<div class="container">
<?php $sql = "select * from comment where seller ='sakshi'";
      $res = mysqli_query($conn,$sql);
      $tow= mysqli_fetch_array($res);
  echo'<h2> Hi '; echo $tow['seller'];echo'</h2>';
  
      while ($row =  mysqli_fetch_array($res) ){
  echo'<div class="panel-group">';
    
    echo'<div class="panel panel-default">
      <pre><div class="panel-heading"><b>'; echo'Customer: ';echo'</b>'; 
													
													
													echo $row['user'];         echo'</div></pre>';
													
      echo'<div class="panel-body"><b>Comment:</b> '; 
													echo $row['comment'];echo'</div>'; 
   echo '</div>
   
  </div>';}?>
</div>



</body>
</html>
