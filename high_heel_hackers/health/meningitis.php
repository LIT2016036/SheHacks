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
<h1>MENINGITIS</h1>
<p>
<img src="pics of disease/Meningitis/image.jpg"></img>
Meningococcal meningitis is a serious bacterial infection. It affects the protective lining of the brain and the spinal cord or “meninges.” It’s usually spread via saliva or mucus. Kissing, living in close or communal spaces, or sharing cups and eating utensils are all ways to get the infection.
The most common and recognizable symptoms of meningitis include:

sudden high fever and chills
headache
stiff neck
purple areas on the skin that look like bruises
The symptoms usually come on suddenly, within one week of being exposed to the bacteria.
Meningitis is the inflammation of the membranes that outline your brain and spinal cord. These membranes are called meninges, giving the illness its name: “meningitis.” Meningitis can be bacterial or viral, though there are also fungal forms of the disease. Viral meningitis is the most common form. Bacterial meningitis is the most serious form. Without treatment, bacterial meningitis can cause paralysis, stroke, seizures, sepsis, and even death
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