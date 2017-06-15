<?php include 'database.php'?>
 
<?php
 
// create a variable
$game_id=$_POST['game_id'];
$game_name=$_POST['game_name'];
$description=$_POST['description'];
$user=$_POST['user'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO `demonswa_dev-games`.`dev-main` (`game_id`, `game_name`, `description`, `user`)
				VALUES('$game_id','$game_name','$description','$user')");
header('Location: http://www.demonswaltz.com/dev-game/');    

