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
<h1>WATER AND SANITATION</h1>
<p>
<img src="pics of disease/heart disease/image.jpg"></img>
The heart is like any other muscle in body. It needs an adequate blood supply to provide oxygen so that the muscle can contract and pump blood to the rest of the body. Not only does the heart pump blood to the rest of the body, it also pumps blood to itself via the coronary arteries. These arteries originate from the base of the aorta (the major blood vessel that carries oxygenated blood from the heart) and then branch out along the surface of the heart.

When one or more coronary arteries narrow, it may make it difficult for adequate blood to reach the heart, especially during exercise. This can cause the heart muscle to ache like any other muscle in the body. Should the arteries continue to narrow, it may take less activity to stress the heart and provoke symptoms. The classic symptoms of chest pain or pressure and shortness of breath that often spreads to the shoulders, arms, and/or neck due to atherosclerotic heart disease (ASHD) or coronary artery disease (CAD) are called angina.

Should one of the coronary arteries become completely blocked -- usually due to a plaque that ruptures and causes a blood clot to form -- blood supply to part of the heart may be lost. This causes a piece of heart muscle to die. This is called a heart attack or myocardial infarction (myo=muscle + cardia=heart + infarction= tissue death).

Cardiovascular disease, for this article, will be limited to describing the spectrum of atherosclerosis or hardening of the arteries that ranges from minimal blockage that may produce no symptoms to complete obstruction that presents as a myocardial infarction. Other topics, such as myocarditis, heart valve problems, and congenital heart defects will not be covered.
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