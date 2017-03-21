
<?php

include_once("Connection.php");

$string = $_POST['swear'];

$string_to_array = explode(" ",$string);

foreach($string_to_array as $word)
{
	$query = mysqli_query($conn,"SELECT * FROM `badwords` WHERE `word` LIKE '$word'");
	while($row = mysqli_fetch_assoc($query))
	{
		$word_found = $row['word'];
		$new_word = preg_replace('/(?!^.?).(?!.{0}$)/','*',$word_found);
		
		$key = array_search($word_found,$string_to_array);
		$length = strlen($word_found) - 1;
		
		$replace = array($key => $new_word);
		$string_to_array = array_replace($string_to_array,$replace);
	}
}

$new_string = implode(" ",$string_to_array);
$sql = "insert into comment(comment,user,seller) values('$new_string','akshit','sakshi')";
$quer = mysqli_query($conn,$sql);
echo "<b><h3>Your feedback has been recorded.</h3></b>";
header( "refresh:3;url=main.php" );

?>
