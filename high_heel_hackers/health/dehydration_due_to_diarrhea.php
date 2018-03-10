<!DOCTYPE html>
<html>
<head>

<style>
img{
	height:300px;
	width:400px;
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
<h2>DIARRHEA</h2>
<p>
<img src="pics of disease/diarrhea/images.jpg"></img>
Diarrhea is one of the most common health complaints. It can range from a mild, temporary condition, to a potentially life-threatening one.
Globally, there an estimated 2 billion cases of diarrheal disease occur each year, and 1.9 million children under the age of 5 years, mostly in developing countries, die from diarrhea.

Diarrhea is characterized by abnormally loose or watery stools.

Some people frequently pass stools, but they are of normal consistency. This is not diarrhea. Similarly, breastfed babies often pass loose, pasty stools. This is normal. It is not diarrhea.
Fast facts on diarrhea
Here are some key points about diarrhea. More detail and supporting information is in the body of this article.
Most cases of diarrhea are caused by bacteria, viruses, or parasites
Inflammatory bowel diseases (IBD) including Crohn's disease and ulcerative colitis can cause chronic diarrhea
Antidiarrheal medications can reduce diarrheal output and zinc supplement is effective in children
Some nutritional and probiotic interventions may help prevent diarrhea
causes

Most cases of diarrhea are caused by an infection in the gastrointestinal tract. The microbes responsible for this infection include:

bacteria
viruses
parasitic organisms
The most commonly identified causes of acute diarrhea in the United States are the bacteria Salmonella, Campylobacter, Shigella, and Shiga-toxin-producing Escherichia coli.

Some cases of chronic diarrhea are called "functional" because a clear cause cannot be found. In the developed world, irritable bowel syndrome (IBS) is the most common cause of functional diarrhea.

IBS is a complex of symptoms. There is cramping abdominal pain and altered bowel habits, including diarrhea, constipation, or both.

Inflammatory bowel disease (IBD) is another cause of chronic diarrhea. It is a term used to describe either ulcerative colitis or Crohn's disease. There is often blood in the stool in both conditions.
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