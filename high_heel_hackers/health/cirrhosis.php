<!DOCTYPE html>
<html>
<head>

<style>
img{
	height:300px;
	width:400px;
}
p{
	font-size:30px;
}

h2{
	text-align:center;
}
a{
	text-decoration:none;
	font-size:30px;
}



</style>



</head>
<body>
<h2>CIRRHOSIS</h2>
<p>
<img src="pics of disease/cirrhosis/downloads.jpg"></img>
Cirrhosis is a late stage of scarring (fibrosis) of the liver caused by many forms of liver diseases and conditions, such as hepatitis and chronic alcoholism. The liver carries out several necessary functions, including detoxifying harmful substances in your body, cleaning your blood and making vital nutrients.
Cirrhosis occurs in response to damage to your liver. Each time your liver is injured, it tries to repair itself. In the process, scar tissue forms. As cirrhosis progresses, more and more scar tissue forms, making it difficult for the liver to function.

Decompensated cirrhosis is the term used to describe the development of specific complications resulting from the changes brought on by cirrhosis. Decompensated cirrhosis is life-threatening.

The liver damage done by cirrhosis generally can't be undone. But if liver cirrhosis is diagnosed early and the cause is treated, further damage can be limited and, rarely, reversed.
Symptoms
Cirrhosis often has no signs or symptoms until liver damage is extensive. When signs and symptoms do occur, they may include:

Fatigue
Bleeding easily
Bruising easily
Itchy skin
Yellow discoloration in the skin and eyes (jaundice)
Fluid accumulation in your abdomen (ascites)
Loss of appetite
Nausea
Swelling in your legs
Weight loss
Confusion, drowsiness and slurred speech (hepatic encephalopathy)
Spiderlike blood vessels on your skin
Redness in the palms of the hands
Testicular atrophy in men
Breast enlargement in men
</p>

<h2>NUTRIENTS REQUIRED</h2>
<?php
$dbservername="localhost";
	$dbusername="root";
	$dbpassword="shubhi";
	$dbname="health";
	$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
	$data1 =	mysqli_query($conn, 'SELECT `Nutrient 1` FROM `nutrients` WHERE Disease_type="Maternal Disease"');
	$data2 =	mysqli_query($conn, 'SELECT `Nutrient 2` FROM `nutrients` WHERE Disease_type="Maternal Disease"');
	$data3 =	mysqli_query($conn, 'SELECT `Nutrient 3` FROM `nutrients` WHERE Disease_type="Maternal Disease"');
	$data4 =	mysqli_query($conn, 'SELECT `Nutrient 4` FROM `nutrients` WHERE Disease_type="Maternal Disease"');
	$data5 =	mysqli_query($conn, 'SELECT `Nutrient 5` FROM `nutrients` WHERE Disease_type="Maternal Disease"');
	?>
	<?php while($row1 = mysqli_fetch_array($data1)):;?>

            <a href="https://www.healthline.com/nutrition/15-calcium-rich-foods"><?php echo $row1[0];?></a><br>

            <?php endwhile;?>
			
			
			<?php while($row1 = mysqli_fetch_array($data2)):;?>

            <a href="https://www.healthline.com/health/foods-nutrition-vitamins-a-b-c-d-e-k"><?php echo $row1[0];?></li><br>

            <?php endwhile;?>
			
			<?php while($row1 = mysqli_fetch_array($data3)):;?>

            <a href="https://www.myfooddata.com/articles/food-sources-of-potassium.php"><?php echo $row1[0];?></a><br>

            <?php endwhile;?>
			
			<?php while($row1 = mysqli_fetch_array($data4)):;?>

            <a href="https://www.healthline.com/nutrition/10-foods-high-in-magnesium"><?php echo $row1[0];?></a><br>

            <?php endwhile;?>
			
			<?php while($row1 = mysqli_fetch_array($data4)):;?>

            <a href="https://www.healthline.com/nutrition/iron-rich-plant-foods"><?php echo $row1[0];?></a><br>

            <?php endwhile;?>
			
			<?php while($row1 = mysqli_fetch_array($data5)):;?>

            <a href="https://www.healthline.com/nutrition/iron-rich-plant-foods"><?php echo $row1[0];?></a><br><br><br>

            <?php endwhile;?>
			<a href="find.php" >TO GET LOCATION OF NEARBY DOCTOR CLICK HERE</a>
</body>
</html>