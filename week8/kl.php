<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$cities=["Almaty","Astana","Karaganda","Kaskelen","Almaty"];
	$sum=0;
	foreach ($cities as $city) {
		if($city=="Almaty"){
			$sum+=1;
		}
	}
	echo $sum;
	?>
	<select>
		<option value="">Select city</option>
		<?php
		for($i=0;$i<count($cities);$i++){
			echo "<option>".$cities[$i]."</option>";
		}
		?>
	</select>
	<input type="submit" name="Submit">
</body>
</html>