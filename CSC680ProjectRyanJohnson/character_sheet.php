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

$all_users = $mysqli->query("SELECT *
FROM `characters` 
	LEFT JOIN `user` ON `characters`.`char_user_id` = `user`.`user_id` 
	LEFT JOIN `char_gender` ON `characters`.`char_gender_id` = `char_gender`.`id` 
	LEFT JOIN `char_race` ON `characters`.`char_race_id` = `char_race`.`race_id`
        WHERE char_id = 6;");
    while($one_user = $all_users->fetch_assoc()){
    
    $tempID = 6; //work in progress
    $charName = $one_user['char_name'];
    $race = $one_user['race_name'];
    $gender = $one_user['name'];
    $age_max = $one_user['race_max_age'];
    $height = $one_user['race_max_height'];
    $hairColor = $one_user['race_hair_color'];
    $skinColor = $one_user['race_skin_color'];
    $hpCur = $one_user['char_hp'];
    $mpCur = $one_user['char_mp'];
    $physical = $one_user['physical_trait'];
    $social = $one_user['social_trait'];
    $intellectual = $one_user['mental_trait'];
    $phySkill_ath = $one_user['phys_skill_athletics'];
    $phySkill_stealth = $one_user['phys_skill_stealth'];
    $phySkill_h2h = $one_user['phys_skill_hand2hand'];
    $socSkill_spy = $one_user['social_skill_spy'];
    $socSkill_speach = $one_user['social_skill_speach'];
    $socSkill_network = $one_user['social_skill_network'];
    $intSkill_tech = $one_user['mental_skill_tech'];
    $intSkill_science = $one_user['mental_skill_science'];
    $intSkill_med = $one_user['mental_skill_medicine'];
    
//echo "<p>$passID</p>";
    
echo "<table class = 'Tbl' border='1' width = '80%'>

<tr>

<th>Character Name</th>

<th>Race</th>

<th>Gender</th>

<th>Age</th>

<th>Height</th>

<th>Hair Color</th>

<th>Skin Color</th>

<th>Current HP</th>

<th>Current MP</th>

</tr>";

  echo "<tr>";

  echo "<td>$charName</td>";

  echo "<td>$race</td>";

  echo "<td>$gender</td>";

  echo "<td>$age_max</td>";
  
  echo "<td>$height</td>";
    
  echo "<td>$hairColor</td>";
      
  echo "<td>$skinColor</td>";
  
  echo "<td>$hpCur</td>";
  
  echo "<td>$mpCur</td>";

  echo "</tr>";

 

echo "</table style = tbl>";

echo '<hr/>';

echo "<h1>Traits</h1>";

echo "<table class = 'Tbl' border='1' width = '80%'>

<tr>

<th>Physical</th>

<th>Social</th>

<th>Intellectual</th>

</tr>";

  echo "<tr>";
  echo "<td>$physical</td>";
  echo "<td>$social</td>";
  echo "<td>$social</td>";
  echo "</tr>";
  
 
  
echo "</table>";

 echo '<hr/>';
 
 echo "<h1>Skills</h1>";

 echo "<table class = 'Tbl' border='1' width = '80%'>

<tr>

<th>Physical</th>

<th>Social</th>

<th>Intellectual</th>

</tr>";

    echo "<tr>";
    echo "<td>Athletics</td>";
    echo "<td>Spycraft</td>";
    echo "<td>Technology</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>$phySkill_ath</td>";
    echo "<td>$socSkill_spy</td>";
    echo "<td>$intSkill_tech</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Stealth</td>";
    echo "<td>Speach</td>";
    echo "<td>Science</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>$phySkill_stealth</td>";
    echo "<td>$socSkill_speach</td>";
    echo "<td>$intSkill_Science</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Hand to Hand</td>";
    echo "<td>Networking</td>";
    echo "<td>Medicine</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>$phySkill_h2h</td>";
    echo "<td>$socSkill_network</td>";
    echo "<td>$intSkill_med</td>";
    echo "</tr>";



  
echo "</table>";

        echo "<a href='body_frame.php'>";
        echo "<button class = 'backBtn' onclick=\"parent.body_frame.location.href= 'body_frame.php'\">Back</button>";
        echo "</a>";
        
        echo "<a href='character_sheet  .php'>";
        echo "<button class = 'saveBtn' onclick=\"parent.character_sheet.location.href= 'body_frame.php'\">Save</button>";
        echo "</a>";
    }
    

    ?>
</body>
</HTML>