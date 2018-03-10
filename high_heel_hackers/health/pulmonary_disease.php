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
<h1>PULMONARY DISEASE</h1>
<p>
<img src="pics of disease/pulmonary disease/image.jpg"></img>
Chronic obstructive pulmonary disease, or COPD, is a group of progressive lung diseases. The most common are emphysema and chronic bronchitis. Many people with COPD have both of these conditions.

Emphysema slowly destroys air sacs in your lungs, which interferes with outward air flow. Bronchitis causes inflammation and narrowing of the bronchial tubes, which allows mucus to build up.
At first, symptoms of COPD can be quite mild. You might be inclined to dismiss them as a cold.

Early symptoms include:

occasional shortness of breath, especially after exercise
mild but recurrent cough
needing to clear your throat often, especially first thing in the morning
You might start making subtle changes, such as avoiding stairs and skipping physical activities.

Symptoms can get progressively worse and harder to ignore. As the lungs become more damaged, you may experience:

shortness of breath, after even mild exercise such as walking up a flight of stairs
wheezing, or noisy breathing
chest tightness
chronic cough, with or without mucus
In developed countries like the United States, the single biggest cause of COPD is cigarette smoking. About 90 percent of people who have COPD are smokers or former smokers.
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

            <a href="https://www.healthline.com/nutrition/iron-rich-plant-foods"><?php echo $row1[0];?></a><br>

            <?php endwhile;?>
			<a href="find.php" >TO GET LOCATION OF NEARBY DOCTOR CLICK HERE</a>
</body>
</html>