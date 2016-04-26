<?php include"common.php"; top();?>

<?php //test data entered
$agetest=$personalitytest=$agemaxtest=$agemintest=" ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])){//blank name test
		die("NOT SUBMITTED NO NAME!");
	}
	if (empty($_POST["age"])){//age test
		die("NOT SUBMITTED NO Age!");
	}else{
		$agetest=$_POST["age"];
	}if(!preg_match("/[0-99]/",$agetest)){
			die("NOT SUBMITTED NO Age!");}


	if (empty($_POST["gender"])){//gender test
		die("NOT SUBMITTED NO GENDER!");
	}

	if (empty($_POST["personality-type"])){//personality test type
		die("NOT SUBMITTED NO PERSONALITY!");
	}else{
		$personalitytest=$_POST["personality-type"];
	}if(!preg_match("/(I|E)(N|S)(T|F)(J|P)/", $personalitytest)){
		die("INCORRECT PERSONALITY TYPE!");
	}

	if (empty($_POST["max-age"])){//max age test 
		die("NOT SUBMITTED NO MAX AGE!");
	}else{
		$agemaxtest=$_POST["max-age"];
	}if(!preg_match("/[0-99]/",$agemaxtest)){
			die("NOT SUBMITTED NO  MAX Age!");}

	if (empty($_POST["min-age"])){//min age test
		die("NOT SUBMITTED NO MIN AGE!");
	}else{
		$agemintest=$_POST["min-age"];
	}if($agemintest>$agemaxtest){
			die("Incorrect Min Age!");}
		
}
?>


		<!-- Returns a completed form submission statement and adds the user to the singles.txt file -->
		<?php
		$username = $_POST["name"];
		$data = $username;
		foreach ($_POST as $key => $value) {
			if ($key != "name"){
				$data = $data.",".$value;
			}
		}
		file_put_contents("singles.txt","\n".$data, FILE_APPEND);
		?> 

		<div>
		<h1>Thank you!</h1>
		<p>Welcome to Geekluv, <?= $username ?>!<br/><br/>
		Now <a href="matches.php">log in to see your matches!</a></p>
		</div>
		


<?php bottom();?>