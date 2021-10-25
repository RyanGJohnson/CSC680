
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
    $userName = "Enter User Name";
    $email = "Enter Email";
    $passwordField = "Enter Password";
    $passwordRetype = "Re-Type Password";
    
echo "<p>User Name</p>";
echo '<input type="text" name="CharName" value="'.$userName.'">';

echo "<p>Email</p>";
echo '<input type="text" name="email" value="'.$email.'">';

echo "<p>Password</p>";
echo '<input type="text" name="PasswordField" value="'.$passwordField.'">';

echo "<p>Re-type Password</p>";
echo '<input type="text" name="PasswordField" value="'.$passwordRetype.'">';


    ?>
</body>
</HTML>