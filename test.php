<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Swear/Bad Word Filter</title>
</head>

<body>
<?php

include_once("Connection.php");
//$strin = "This seller is dumb";
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

echo $new_string;

?>
</body>
</html>