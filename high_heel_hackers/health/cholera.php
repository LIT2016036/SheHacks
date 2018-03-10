<!DOCTYPE html>
<html>
<head>

<style>
img{
	height:300px;
	width:400px;
}
h2{
	text-align:center;
}
h1{
	text-align:center;
}
p{
	font-size:30px;
}
a{
	text-decoration:none;
	font-size:30px;
}
</style>



</head>
<body>
<h1>CHOLERA</h1>
<p>

<img src="pics of disease/Cholera/download.jpg"></img>

Cholera is an infectious disease that causes severe watery diarrhea, which can lead to dehydration and even death if untreated. It is caused by eating food or drinking water contaminated with a bacterium called Vibrio cholerae.

Cholera was prevalent in the U.S. in the 1800s, before modern water and sewage treatment systems eliminated its spread by contaminated water. Only about 10 cases of cholera are reported each year in the U.S. and half of these are acquired abroad. Rarely, contaminated seafood has caused cholera outbreaks in the U.S. However, cholera outbreaks are still a serious problem in other parts of the world. At least 150,000 cases are reported to the World Health Organization each year.


The disease is most common in places with poor sanitation, crowding, war, and famine. Common locations include parts of Africa, south Asia, and Latin America. If you are traveling to one of those areas, knowing the following cholera facts can help protect you and your family.


Symptoms of cholera can begin as soon as a few hours or as long as five days after infection. Often, symptoms are mild. But sometimes they are very serious. About one in 20 people infected have severe watery diarrhea accompanied by vomiting, which can quickly lead to dehydration. Although many infected people may have minimal or no symptoms, they can still contribute to spread of the infection.

Signs and symptoms of dehydration include:


Rapid heart rate
Loss of skin elasticity (the ability to return to original position quickly if pinched)
Dry mucous membranes, including the inside of the mouth, throat, nose, and eyelids
Low blood pressure
Thirst
Muscle cramps
</p>
<h2>NUTRIENTS REQUIRED</h2>
<?php
$dbservername="localhost";
	$dbusername="root";
	$dbpassword="shubhi";
	$dbname="health";
	$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
	$data1 =	mysqli_query($conn, 'SELECT `Nutrient 1` FROM `nutrients` WHERE Disease_type="Cholera"');
	$data2 =	mysqli_query($conn, 'SELECT `Nutrient 2` FROM `nutrients` WHERE Disease_type="Cholera"');
	$data3 =	mysqli_query($conn, 'SELECT `Nutrient 3` FROM `nutrients` WHERE Disease_type="Cholera"');
	$data4 =	mysqli_query($conn, 'SELECT `Nutrient 4` FROM `nutrients` WHERE Disease_type="Cholera"');
	$data5 =	mysqli_query($conn, 'SELECT `Nutrient 5` FROM `nutrients` WHERE Disease_type="Cholera"');
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

            <a href="https://www.healthline.com/nutrition/iron-rich-plant-foods"><?php echo $row1[0];?></a><br>

            <?php endwhile;?>

<a href="find.php" >TO GET LOCATION OF NEARBY DOCTOR CLICK HERE</a>
</body>
</html>