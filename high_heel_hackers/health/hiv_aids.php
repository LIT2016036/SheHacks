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
	font-size:20px;
	
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
<h1>HIV/AIDS</h1>
<p>
<img src="pics of disease/HIVAIDS/download.jpg"></img>
HIV is a virus that attacks the immune system, which is our body’s natural defence against illness. The virus destroys a type of white blood cell in the immune system called a T-helper cell, and makes copies of itself inside these cells. T-helper cells are also referred to as CD4 cells.

As HIV destroys more CD4 cells and makes more copies of itself, it gradually breaks down a person’s immune system. This means someone living with HIV, who is not receiving treatment, will find it harder and harder to fight off infections and diseases.

If HIV is left untreated, it may take up to 10 or 15 years for the immune system to be so severely damaged it can no longer defend itself at all. However, the speed HIV progresses will vary depending on age, health and background.  

Basic facts about HIV

HIV stands for human immunodeficiency virus.

There is effective antiretroviral treatmentavailable so people with HIV can live a normal, healthy life.

The earlier HIV is diagnosed, the sooner treatment can start – leading to better long term health. So regular testing for HIV is important.

HIV is found in semen, blood, vaginal and anal fluids, and breast milk.

HIV cannot be transmitted through sweat, saliva or urine.

Using male condoms or female condoms during sex is the best way to prevent HIV and other sexually transmitted infections.

If you inject drugs, always use a clean needle and syringe, and never share equipment.

If you are pregnant and living with HIV, the virus in your blood could pass into your baby’s body, or after giving birth through breastfeeding. Taking HIV treatment virtually eliminates this risk.

What is AIDS?

AIDS is not a virus but a set of symptoms (or syndrome) caused by the HIV virus. A person is said to have AIDS when their immune system is too weak to fight off infection, and they develop certain defining symptoms and illnesses. This is the last stage of HIV, when the infection is very advanced, and if left untreated will lead to death.

Basic facts about AIDS

AIDS stands for acquired immune deficiency syndrome.

AIDS is also referred to as advanced HIV infection or late-stage HIV.

AIDS is a set of symptoms and illnesses that develop as a result of advanced HIV infection which has destroyed the immune system.

Treatment for HIV means that more people are staying well, with fewer people developing AIDS.

Although there is currently no cure for HIV with the right treatment and support, people with HIV can live long and healthy lives. To do this, it is especially important to take treatment correctly and deal with any possible side-effects.
[10/03, 12:13 AM] Chiki: 1/28

Flu (influenza, conventional, H1N1, H3N2, and bird flu [H5N1]) facts

Influenza, commonly called "the flu," is caused by viruses that infect the respiratory tract.

Flu symptoms include

fever,

chills,

cough,

sore throat,

headache,

muscle aches, and

fatigue.

The incubation period for flu is about one to four days.

Flu is contagious, and symptoms may last up to seven to 14 days.

Flu is diagnosed by the patient's history, physical exam, and laboratory tests.

Flu is spread directly and indirectly; directly from person to person by airbor
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