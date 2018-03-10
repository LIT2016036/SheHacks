
<?php
if($_POST['submit_address'])
{
	$address= $_POST['address'];
	$location="https://www.google.co.in/search?q=hospitals+in+'+$address+'&rlz=1C1NDCM_enIN784IN784&oq=gggg&aqs=chrome..69i57j0l5.1272j0j9&sourceid=chrome&ie=UTF-8";
	$ch = curl_init($location);
	curl_exec($ch);
}
?>
