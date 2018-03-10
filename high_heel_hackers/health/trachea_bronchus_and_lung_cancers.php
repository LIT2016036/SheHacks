<!DOCTYPE html>
<html>
<head>

<style>
img{
	height:300px;
	width:400px;
}

h1{
	text-align:center;
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
<h1>LUNG CANCER</h1>
<p>

<img src="pics of disease/lung cancer/images.jpg"></img>
Lung cancer is the number one cause of cancer deaths in both men and women in the U.S. and worldwide.
Cigarette smoking is the principal risk factor for development of lung cancer.
Passive exposure to tobacco smoke (passive smoking) also can cause lung cancer.
The two types of lung cancer, which grow and spread differently, are small cell lung cancers (SCLC) and non-small cell lung cancers (NSCLC).
The stage of lung cancer refers to the extent to which the cancer has spread in the body.
Treatment of lung cancer can involve a combination of surgery, chemotherapy, targeted therapy, immunotherapy, and radiation therapy as well as newer experimental methods.
The general prognosis of lung cancer is poor because doctors tend not to find the disease until it is at an advanced stage. Five-year survival is around 54% for early stage lung cancer that is localized to the lungs, but only around 4% in advanced, inoperable lung cancer.
Smoking cessation is the most important measure that can prevent the development of lung cancer.
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