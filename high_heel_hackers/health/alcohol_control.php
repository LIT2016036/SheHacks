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
<h1>ALCOHOL CONTROL</h1>
<p>
<img src="pics of disease/alcohol control/downloads.jpg"></img>
It’s not always easy to see when your alcohol intake has crossed the line from moderate or social drinking to problem drinking. But if you consume alcohol to cope with difficulties or to avoid feeling bad, you’re in potentially dangerous territory. Drinking problems can sneak up on you, so it’s important to be aware of the warning signs of alcohol abuse and alcoholism and take steps to cut back if you recognize them. Understanding the problem is the first step to overcoming it and either cutting back to healthy levels or quitting altogether.

Do you have a drinking problem?
Since drinking is so common in many cultures and the effects vary so widely from person to person, it’s not always easy to figure out where the line is between social drinking and problem drinking. You may have a drinking problem if you:

Feel guilty or ashamed about your drinking.
Lie to others or hide your drinking habits.
Need to drink in order to relax or feel better.
“Black out” or forget what you did while you were drinking.
Regularly drink more than you intended to.
The bottom line is how alcohol affects you. If your drinking is causing problems in your life, then you have a drinking problem.
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