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
<h1>ALLERGY</h1>
<p>
<img src="pics of disease/Allergy/download.jpg"></img>
Allergy symptoms occur when your immune system overreacts to an allergen—something that usually is harmless, such as plant pollen, dust mites, molds, insect stings or food.Effective treatment of allergic asthma includes identifying and avoiding allergens that trigger symptoms, using drug therapies and developing an emergency action plan for severe attacks.Early identification of childhood allergies will improve your child’s quality of life, reduce the number of missed school days and help you avoid having to use sick time or vacation days to care for your child.If you sneeze and cough, or your nose and eyes itch and are runny during certain times of the year, you may have seasonal allergies. Seasonal allergies, like other allergies, develop when the body’s immune system becomes sensitized and overreacts to something in the environment.Anaphylaxis is a rare but severe allergic reaction. It can occur suddenly, can worsen quickly and can be deadly. Just because an allergic person has never had an anaphylactic reaction doesn’t mean that one won’t occur in the future.Exposure to allergens at times when the body's defenses are weak, such as after an illness or during pregnancy, also may play a role in developing allergies. Although allergies are most common in children, they can occur at any time and any age. Sometimes allergies go away, but they also can come back years later.
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