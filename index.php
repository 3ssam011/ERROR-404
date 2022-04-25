<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Managment System</title>
    <link rel="stylesheet" href="login2.css" title="style">
</head>
<p id="logo"><img src="ER.png"><p>
<body>
    <form class="box" action="login.php" method="POST">
        <h1> login </h1>
        <input type="text" name="ID" placeholder="Enter ID" id="username" required>
        <input type="password" name="Password" placeholder="Enter password" id="password"required>
        <input type="submit"  value="Sign In">
        <label id= fontcolor for="Teacher"> Teacher</label>
        <input type="radio" name="type" value="T"required >
        <label id= fontcolor for="Student">Student</label>
        <input type="radio" name="type" value="S" >
        <label id= fontcolor for="Manager">Manager</label>
        <input type="radio" name="type" value="M">
    </form>
</body>
    
</html>