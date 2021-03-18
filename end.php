<?php

	session_start();
	$_SESSION['percent'] = array_sum($_SESSION['accarray'])/28*100;
	//$_SESSION['percent2'] = array_sum($_SESSION['accarray'])/40*100;
	$_SESSION['percent'] = round($_SESSION['percent']);
	// $gender = $_POST['gender']; 
	// $age = $_POST['age'];
	// $ethinicity = $_POST['ethnicity'];
	// $time = $_POST['time'];
	// $relation = $_POST['relation'];
	// $MD = $_POST['MD'];
	// $email = $_POST['email'];
	date_default_timezone_set('America/Los_Angeles');
	$t = date("Y-m-d h:i:sa");

	// $stringDatadem = $gender.",".$age.",".$ethinicity.",".$relation.",".$time.",".$MD.",".$email.",";
	
//	for ($i=1; $i<40; $i++) {
//		$stringDataitem = $_SESSION['item'][$i];
//	}
	
	
	$stringDataitem = 	$_SESSION['item'][0].",".
						$_SESSION['item'][1].",".
						$_SESSION['item'][2].",".
						$_SESSION['item'][3].",".
						$_SESSION['item'][4].",".
						$_SESSION['item'][5].",".
						$_SESSION['item'][6].",".
						$_SESSION['item'][7].",".
						$_SESSION['item'][8].",".
						$_SESSION['item'][9].",".
						$_SESSION['item'][10].",".
						$_SESSION['item'][11].",".
						$_SESSION['item'][12].",".
						$_SESSION['item'][13].",".
						$_SESSION['item'][14].",".
						$_SESSION['item'][15].",".
						$_SESSION['item'][16].",".
						$_SESSION['item'][17].",".
						$_SESSION['item'][18].",".
						$_SESSION['item'][19].",".
						$_SESSION['item'][20].",".
						$_SESSION['item'][21].",".
						$_SESSION['item'][22].",".
						$_SESSION['item'][23].",".
						$_SESSION['item'][24].",".
						$_SESSION['item'][25].",".
						$_SESSION['item'][26].",".
						$_SESSION['item'][27];
	//.",".$_SESSION['item'][17].",".$_SESSION['item'][18].",".$_SESSION['item'][19].",".$_SESSION['item'][20].",".$_SESSION['item'][21].",".$_SESSION['item'][22].",".$_SESSION['item'][23].",".$_SESSION['item'][24].",".$_SESSION['item'][25].",".$_SESSION['item'][26].",".$_SESSION['item'][27].",".$_SESSION['item'][28].",".$_SESSION['item'][29].",".$_SESSION['item'][30].",".$_SESSION['item'][31].",".$_SESSION['item'][32].",".$_SESSION['item'][33].",".$_SESSION['item'][34].",".$_SESSION['item'][35].",".$_SESSION['item'][36].",".$_SESSION['item'][37].",".$_SESSION['item'][38].",".$_SESSION['item'][39];
	
//	for ($i=1; $i<40; $i++) {
//		$stringDataacc = $_SESSION['accarray'][$i];
//	}

	
	$stringDataacc = 	$_SESSION['accarray'][0].",".
						$_SESSION['accarray'][1].",".
						$_SESSION['accarray'][2].",".
						$_SESSION['accarray'][3].",".
						$_SESSION['accarray'][4].",".
						$_SESSION['accarray'][5].",".
						$_SESSION['accarray'][6].",".
						$_SESSION['accarray'][7].",".
						$_SESSION['accarray'][8].",".
						$_SESSION['accarray'][9].",".
						$_SESSION['accarray'][10].",".
						$_SESSION['accarray'][11].",".
						$_SESSION['accarray'][12].",".
						$_SESSION['accarray'][13].",".
						$_SESSION['accarray'][14].",".
						$_SESSION['accarray'][15].",".
						$_SESSION['accarray'][16].",".
						$_SESSION['accarray'][17].",".
						$_SESSION['accarray'][18].",".
						$_SESSION['accarray'][19].",".
						$_SESSION['accarray'][20].",".
						$_SESSION['accarray'][21].",".
						$_SESSION['accarray'][22].",".
						$_SESSION['accarray'][23].",".
						$_SESSION['accarray'][24].",".
						$_SESSION['accarray'][25].",".
						$_SESSION['accarray'][26].",".
						$_SESSION['accarray'][27];
	//.",".$_SESSION['accarray'][17].",".$_SESSION['accarray'][18].",".$_SESSION['accarray'][19].",".$_SESSION['accarray'][20].",".$_SESSION['accarray'][21].",".$_SESSION['accarray'][22].",".$_SESSION['accarray'][23].",".$_SESSION['accarray'][24].",".$_SESSION['accarray'][25].",".$_SESSION['accarray'][26].",".$_SESSION['accarray'][27].",".$_SESSION['accarray'][28].",".$_SESSION['accarray'][29].",".$_SESSION['accarray'][30].",".$_SESSION['accarray'][31].",".$_SESSION['accarray'][32].",".$_SESSION['accarray'][33].",".$_SESSION['accarray'][34].",".$_SESSION['accarray'][35].",".$_SESSION['accarray'][36].",".$_SESSION['accarray'][37].",".$_SESSION['accarray'][38].",".$_SESSION['accarray'][39];
	
	$stringDatasubj = $_SESSION['subj'].",".$t;
	
	
	$stringData = $stringDatasubj.",".$stringDataitem.",".$stringDataacc;//.",".$stringDatadem;
	

	$outFile = "data/results.csv";
	$fh = fopen($outFile,'a') or die("Can't open results.csv!");
	fwrite($fh, $stringData."\n");
	fclose($fh);

	session_destroy();

?>

<html>
	<head>
	<style>
	div.img {
	    //margin:40;
	    padding: 0px;
	    height: auto;
	    //width: auto;
	    float: left;
		position: fixed;
	}
	
	div.img2 {
	    margin: 0;
	    padding: 0px;
	    height: auto;
	    width: auto;
		text-align: center;
		position: relative;
	}
	
	div.text {
		font-size: 22;
		font-family: Helvetica;
		text-align: center;
		margin-left: auto;
		margin-right: auto;
		width: 500px;
	}	

	div.copyright {
		position: fixed;
		top: 97%;
		left: 45%;

	}
	</style>
	</head>
	<body>
	<!--div class="img">
		<img src="binimg/Emily.jpg" alt="Emily" width="236" height="387">
	</div>-->
	<br /><br />
	
	<div class="text">
        
    <font size = "6" color="green">
    <center>
    <?php 
        echo "Your accuracy is " .$_SESSION['percent'].  "%!";
    ?>
    </center>
    </font>
		
	<br /><br />
    Thank you for your participation! <br/><br/>
	
	We hope you have can now more effectivly recycle on campus! For more information refer to the <a href="#" target="_blank">Do's and Don'ts of recycling</a> at Solebury School</a>. 
	<br /><br />
	This game was organized by Solebury's Environmental Action Club. To learn more about us and to get involved visit <a href="https://sites.google.com/solebury.org/seac/home" target="_blank">seac.ml</a>. 
	<br /><br />
	
	For more information about Sustainability week and sustainability at Solebury visit the Solebury's <a href="https://www.solebury.org/about/sustainability" target="_blank">Sustainability webpage</a>. 
	<br /><br />
	
	</div>
	
	<div class="img2">
		<img src="binimg/logo.png" alt="Logo" width="203.5" height="203.5">
	</div>
	<!--<div class="copyright" style="font-size: 15">&copy; 2021 Leel Dias</div>-->

	</body>
</html>
