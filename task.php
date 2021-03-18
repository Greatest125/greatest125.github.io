<?php
	session_start();
	
	//check whether key was pressed and move on to next trial	
	if (isset($_POST['resp'])) {

		$_SESSION['pos'] = $_SESSION['pos'] + 1;
		$_SESSION['counter'] = $_SESSION['counter'] +1;
		// trial - 1 = 39
		if ($_SESSION['pos'] > 27 && $_SESSION['counter'] > 28) {
			header('Location: end.php');
		}
	}
	//print_r($_SESSION['item']); check the image array 
	
	//$_SESSION['acctotal'] = array_fill(0, 39, $_SESSION['acc']);

	
	if (strpos($_SESSION['item'][$_SESSION['pos']], 'Food') !==false) {
   		$keycode = 51;
   		$answer = 'Food Scraps';
	}elseif (strpos($_SESSION['item'][$_SESSION['pos']], 'Recy') !==false) {
   		$keycode = 53;
   		$answer = 'Recyclable Containers';
   	}elseif (strpos($_SESSION['item'][$_SESSION['pos']], 'Paper') !==false) {
   		$keycode = 55;
   		$answer = 'Paper';
	}elseif(strpos($_SESSION['item'][$_SESSION['pos']], 'Garb') !==false) {
   		$keycode = 57;
   		$answer = 'Garbage';
	}

	if (strpos($_SESSION['item'][$_SESSION['pos'] - 1], 'Food') !==false) {
   		if ($_POST['resp'] == "3") {
			array_push($_SESSION['accarray'], 1);
   		}else{
   			array_push($_SESSION['accarray'], 0);
   		}
	}elseif (strpos($_SESSION['item'][$_SESSION['pos']-1], 'Recy') !==false) {
		if ($_POST['resp'] == "5") {
			array_push($_SESSION['accarray'], 1);
   		}else{
   			array_push($_SESSION['accarray'], 0);
   		}
   	}elseif (strpos($_SESSION['item'][$_SESSION['pos']-1], 'Paper') !==false) {
		if ($_POST['resp'] == "7") {
			array_push($_SESSION['accarray'], 1);
   		}else{
   			array_push($_SESSION['accarray'], 0);
   		}
	}elseif (strpos($_SESSION['item'][$_SESSION['pos']-1], 'Garb') !==false) {
		if ($_POST['resp'] == "9") {
			array_push($_SESSION['accarray'], 1);
   		}else{
   			array_push($_SESSION['accarray'], 0);
   		}
	}
	
?>

<html>
<head>
<style>
  <style>
    div.binimage {
    	float:left;
    }

    counter {
    	top: 580px;
    	font-size: 20;
    }
</style>
<script type="text/javascript">

		function binclick(id) { 
    		var eles = document.getElementsByTagName('img');
			for (var i=0; i < eles.length; i++)
   				eles[i].onclick = null;
			var keynum;
			switch(id) {
				case 'Food': 
					keynum = 51;
					document.getElementById("resp").value = "3";
					if (keynum==<?php echo $keycode;?>) {
			 			document.getElementById('alrt_correct').innerHTML='<b> Correct! </b>'; 
			 			break;
			 		}else{
			 			document.getElementById('alrt_wrong').innerHTML='<b>Wrong! This should go to the <?php echo $answer; ?> bin.</b>';
			 		}		
			 		break;	

			 	case 'Recycle':	
					keynum = 53;
					document.getElementById("resp").value = "5";
					if (keynum==<?php echo $keycode;?>) {
			 			document.getElementById('alrt_correct').innerHTML='<b> Correct! </b>';
			 			break;
					}else{
			 			document.getElementById('alrt_wrong').innerHTML='<b>Wrong! This should go to the <?php echo $answer; ?> bin.</b>';
			 		}	
			 		break;

				case 'Paper':	
					keynum = 55;
					document.getElementById("resp").value = "7";
					if (keynum==<?php echo $keycode;?>) {
			 			document.getElementById('alrt_correct').innerHTML='<b> Correct! </b>';
			 			break;

					}else {
			 			document.getElementById('alrt_wrong').innerHTML='<b>Wrong! This should go to the <?php echo $answer; ?> bin.</b>';
					}
			 		break;
			 	
			 	case 'Garbage':		
					keynum = 57;
					document.getElementById("resp").value = "9";					
					if (keynum==<?php echo $keycode;?>) {
			 			document.getElementById('alrt_correct').innerHTML='<b> Correct! </b>';
			 			break;
					}else{
			 			document.getElementById('alrt_wrong').innerHTML='<b>Wrong! This should go to the <?php echo $answer; ?> bin.</b>';
			 		}	
			 		break;	

			 }	
			 setTimeout (function() {
			 	document.getElementById("formy").submit();
			 },1500);	
		}

</script>

</head>

<body>
<center>
<div class="binimage">

	<img class="sign" id="Food" src="binimg/Food.jpg" alt="Food Bin" onclick= "binclick(id)"><!--
    --><img class="sign" id="Recycle" src="binimg/Recycle.jpg" alt="Recycle Bin" onclick="binclick(id)"><!--
    --><img class="sign" id="Paper" src="binimg/Paper.jpg" alt="Paper Bin" onclick="binclick(id)"><!--
    --><img class="sign" id="Garbage" src="binimg/Garbage.jpg" alt="Garbage Bin" onclick="binclick(id)">

</div>

<br />

<!-- <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> -->
<?php
   	echo "<img src='images/" . $_SESSION['item'][$_SESSION['pos']] . ".jpg' />";
?>

<br />

<div id='alrt_correct' style="color:green;font-family:Helvetica; font-size: 30"></div>
<div id='alrt_wrong' style="color:red;font-family:Helvetica; font-size: 30"></div>
<br /><br />




<counter><?php echo 'Items: '.$_SESSION['counter'].'/28';?></counter>
</center>

<center>
<form action="" method="post" id="formy">
	<input type="hidden" id="resp" name="resp" value="" />
</form>

</center>

</body>
</html>
