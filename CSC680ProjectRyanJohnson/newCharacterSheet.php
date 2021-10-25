
<HTML lang='en'>

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

$all_users = $mysqli->query("SELECT * FROM user");
//$one_user = $all_users->fetch_assoc();

    echo "<pre>";
    //print_r($one_user);
    
    
    echo "<table class = 'Tbl' border='1' width = '80%'>";
    echo "<tr>";
    echo "<th>User Name</th>";
    echo "<th>Character Name</th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "</tr>";
    
  
    
    while($one_user = $all_users->fetch_assoc()){

        echo "<tr>";
        echo "<td>".$one_user['user_id']."</td>";
        echo "<td>".$one_user['user_name']."</td>";
        echo "<td>".$one_user['user_email']."</td>";
        echo "<td>".$one_user['user_password']."</td>";
        echo "</tr>";
        
    }
    echo "</table>";
    echo "</pre>";
    ?>
</body>
</HTML>