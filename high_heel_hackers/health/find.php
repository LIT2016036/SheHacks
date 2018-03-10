<html>
<head>
<style>

p{
	font-size:50px;
	text-align:center;
}
form{
	padding-top:200px;
	text-align:center;
}
body{
	background-image: url("includes/google map image.jpg");
	
}
text-area{
	height:20%;
	width:200px;
}
</style>
</head>
<body>
<!-- This is FIND.PHP this html code to get what information we needed -->
<form method="post" action="get_data.php">
	<p> Enter your city  </p>
	<textarea name='address' placeholder='street name,city state, country'></textarea><br><br>
	<input type="submit" name="submit_address" value="HOSPITALS">
</form>


</body>
</html>
	
	