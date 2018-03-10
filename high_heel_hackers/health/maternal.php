<!DOCTYPE html>
<html>
<head>

<style>
img{
	height:300px;
	width:300px;
}

p{
	font-size:20px;
	text-align:right;
}
h2{
	text-align:center;
}
a{
	text-decoration:none;
	font-size:30px;
	text-align:center;
}
</style>



</head>
<body>
<h2> MATERNAL DISEASE</h2>
<p>
<img src="pics of disease/Maternal Disease/images.jpg" align="left"></img><br><br>



The United Nations Population Fund (UNFPA) estimated that 289,000 women died of pregnancy or childbirth related causes in 2013. These causes range from severe bleeding to obstructed labour, all of which have highly effective interventions. As women have gained access to family planning and skilled birth attendance with backup emergency obstetric care, the global maternal mortality ratio has fallen from 380 maternal deaths per 100,000 live births in 1990 to 210 deals per 100,000 live births in 2013.[2] This has resulted in many countries halving their maternal death rates.<b>

While there has been a decline in worldwide mortality rates much more has to be done. High rates still exist particularly in impoverished communities with over 85% living in Africa and Southern Asia. The effect of a mother's death results in vulnerable families, and their infants, if they survive childbirth, are more likely to die before reaching their second birthday.<b>

Both maternal mortality and severe maternal mortality (SMM) are "associated with a high rate of preventability."<b>

In 2010 the U.S. Joint Commission on Accreditation of Healthcare Organizations described maternal mortality as a "sentinel event", and uses it to assess the quality of a health care system.<b>

Four elements are essential to maternal death prevention.First, prenatal care. It is recommended that expectant mothers receive at least four antenatal visits to check and monitor the health of mother and foetus. Second, skilled birth attendance with emergency backup such as doctors, nurses and midwives who have the skills to manage normal deliveries and recognize the onset of complications. Third, emergency obstetric care to address the major causes of maternal death which are haemorrhage, sepsis, unsafe abortion, hypertensive disorders and obstructed labour. Lastly, postnatal care which is the six weeks following delivery. During this time bleeding, sepsis and hypertensive disorders can occur and newborns are extremely vulnerable in the immediate aftermath of birth. Therefore, follow-up visits by a health worker is assess the health of both mother and child in the postnatal period is strongly recommended.<b>



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