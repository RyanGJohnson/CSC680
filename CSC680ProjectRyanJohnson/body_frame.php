<!doctype html>
<HTML lang="en">

<head>
<link rel="stylesheet" href="projectCSS.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&display=swap" rel="stylesheet">
<meta charset=utf-8> 
</head>

<body>

<?php
$Server_name = "localhost";
$db_name = "rpgcharactersheet";
$user_name = "root";
$password = "";
$mysqli = new mysqli($Server_name, $user_name, $password, $db_name);

$all_users = $mysqli->query("SELECT `characters`.`char_name`, `user`.`user_name`, `char_gender`.`name`, `char_race`.`race_name`, `characters`.`char_hp`, `characters`.`char_mp`, `characters`.`physical_trait`, `characters`.`social_trait`, `characters`.`mental_trait`
FROM `characters` 
	LEFT JOIN `user` ON `characters`.`char_user_id` = `user`.`user_id` 
	LEFT JOIN `char_gender` ON `characters`.`char_gender_id` = `char_gender`.`id` 
	LEFT JOIN `char_race` ON `characters`.`char_race_id` = `char_race`.`race_id`;");
/*
placeholder work area
 *  */
    
    echo "<pre>"; 

    while($one_user = $all_users->fetch_assoc()){
        
        echo "<div class = 'test'>";
        echo "<h1>";
        echo $one_user['char_name']. " (" .$one_user['user_name']. ")";
        echo "</h1>";
        
        
        echo "<p>";
        echo $one_user['name']. " " .$one_user['race_name'];
        echo "-----";
        echo "HP: " .$one_user['char_hp'];
        echo "-----";
        echo "MP: " .$one_user['char_mp'];
        echo "-----";
        echo "Physical: " .$one_user['physical_trait'];
        echo "-----";
        echo "Social: " .$one_user['social_trait'];
        echo "-----";
        echo "Mental: " .$one_user['mental_trait'];
        echo "<a href='character_sheet.php'>";
        echo "<button class = 'EditBtn' onclick=\"parent.body_frame.location.href= 'character_sheet.php'\" >Edit</button>";
        echo "</a>";
        echo "<a href='body_frame.php'>";
        echo "<button class = 'DelBtn' onclick=\"parent.body_frame.location.href= 'body_frame.php'\">Delete</button>";
        echo "</a>";
        echo "</pre>";
        echo "</div>";
        echo "</p>";
    
   $passID = $one_user['char_name'];

   

    
    }
    echo "<br><br>";
    echo "<a href='newCharacterSheet.php'>";
    echo "<button class = 'NewBtn' onclick=\"parent.body_frame.location.href= 'newCharacterSheet.php.php'\">New</button>";
    echo "</a>";


    
?>

		
</body>
	
</HTML>