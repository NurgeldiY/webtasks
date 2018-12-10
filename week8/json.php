<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel="stylesheet"  href="json.php?x=5&y=6""></link>
	<?php
	$x=$_GET["x"];
	$y=$_GET["y"];
	if($x>$y){
		echo $x;
	}
	else{
		echo $y;
	}
	?>
	<?php
	$students=[["name"=>"Bill","surname"=>"Gates","Math"=>90,"web"=>0],
["name"=>"Steve","surname"=>"Jobs","Math"=>40,"web"=>90]];
foreach ($students as $student) {
	if($student["web"]>80){
		echo $student["name"];
	}
	# code...
}
?>
</body>
</html>