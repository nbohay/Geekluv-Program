<?php include"common.php"; top();?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	if (empty($_GET["name"])){//blank name test
		die("NOT SUBMITTED NO NAME!");
	}}
?>	

<?php //goes through text and pulls info about user 
global $usergender,$userage,$userpersonality,$useros, $usermin,$usermax;
$file=file('singles.txt');
$user=$_GET['name'];

foreach ($file as $line){ 
$myarray=explode(",",$line);
if($user== $myarray[0] ){
	$usergender=$myarray[1];
	$userage= $myarray[2];
	$userpersonality= $myarray[3];
	$useros= $myarray[4];
	$usermin= $myarray[5];
	$usermax= $myarray[6];
}} 
?>

<h1> Matches for <?= $user?></h1>

<?php //matches user with other users with similar interests
foreach ($file as $line){ 

$myarray=explode(",",$line);

if($user!= $myarray[0] && $usergender!= $myarray[1] && $useros==$myarray[4] &&
 $myarray[2]>=$usermin && $myarray[2]<=$usermax && $userpersonality== $myarray[3]){ ?>
<div class="Match">
	

	<?php if($myarray[1]=="F"){
	$logo="user.png";
	}
	else{
	$logo="userm.png";
	}?>


	<p><?= $myarray[0] ?><img src="<?=$logo?>" alt="Profile Logo"></p>
	<ul>
		<li>Gender: <?=$myarray[1]?></li>
		<li>Age: <?=$myarray[2]?></li>
		<li>Type: <?=$myarray[3]?></li>
		<li>OS: <?=$myarray[4]?></li>


	</ul>	
</div>
<?php 
}


 } ?>







<?php bottom();?>