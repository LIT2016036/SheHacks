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
<img src="pics of disease/water and sanitation/downloads.jpg"></img>
The benefits of having access to an improved drinking water source can only be fully realized when there is also access to improved sanitation and adherence to good hygiene practices. Beyond the immediate, obvious advantages of people being hydrated and healthier, access to water, sanitation and hygiene – known collectively as WASH – has profound wider socio-economic impacts, particularly for women and girls.
The fact that WASH is the subject of dedicated targets within the Sustainable Development Goal (SDG 6) is testament to its fundamental role in public health and therefore in the future of sustainable development. Indeed, access to safe water and sanitation are human rights, as recognized in 2010 by the United Nations General Assembly. For universal fulfilment of these rights to become reality, we will need the right systems: well-resourced, capable institutions delivering services and changing behaviour in resilient and appropriate ways.
Current situation
Today, 2.1 billion people lack access to safely managed drinking water services and 4.5 billion people lack safely managed sanitation services. Unsafe hygiene practices are widespread, compounding the effects on people’s health. The impact on child mortality rates is devastating with more than 340 000 children under five who die annually from diarrhoeal diseases due to poor sanitation, poor hygiene, or unsafe drinking water – that is almost 1000 per day.
Water
A person without access to improved drinking water – for example from a protected borehole well or municipal piped supply for instance – is forced to rely on sources such as surface water, unprotected and possibly contaminated wells, or vendors selling water of unverifiable provenance and quality.
For many communities, water sources are usually far from their homes, and it typically falls to women and girls to spend much of their time and energy fetching water, a task which often exposes them to attack from men and even wild animals.
Sanitation
Without improved sanitation – a facility that safely separates human waste from human contact – people have no choice but to use inadequate communal latrines or to practise open defecation. For women and girls, finding a place to go to the toilet outside, often having to wait until the cover of darkness, can leave them vulnerable to abuse and sexual assault.
In the immediate environment, exposed faecal matter will be transferred back into people’s food and water resources, helping to spread serious diseases such as cholera. Beyond the community, the lack of effective waste disposal or sewerage systems can contaminate ecosystems and contribute to disease pandemics.
Hygiene
In some parts of the world there is little or no awareness of good hygiene practices and their role in reducing the spread of disease. However, it is often the case that even when people do have knowledge of good hygiene behaviour, they lack the soap, safe water and washing facilities they need to make positive changes to protect themselves and their community.
Clean water, basic toilets and good hygiene practices are essential for the survival and development of children. Today, there are around 2.4 billion people who do not use improved sanitation, and 663 million who do not have access to improved water sources.

Without these basic needs, the lives of millions of children are at risk. For children under five, water- and sanitation-related diseases are one of the leading causes of death. Every day, over 800 children die from preventable diseases caused by poor water, and a lack of sanitation and hygiene.

UNICEF’s water, sanitation and hygiene (WASH) team works in over 100 countries worldwide to improve water and sanitation services, as well as basic hygiene practices. Last year, UNICEF’s efforts provided nearly 14 million people with clean water and over 11 million with basic toilets.

In times of crisis children are particularly vulnerable; UNICEF responds and provides emergency relief to those in need.
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