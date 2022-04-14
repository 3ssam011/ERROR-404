<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Managment System</title>
    <link rel="stylesheet"$type="text/css" href="login.css" title="style">
</head>
<body>
    <div id="All">
        
        <head>
            <div id="Welcome">
                <p>
                    <h1>
                        Welcome To School System
                    </h1>                
                </p>
            </div>
        </head>
        
            <form action="login.php" method="POST">
                <div id="choose">
                    <label for="Teacher"> Teacher</label>
                    <input type="radio" name="type" value="T">
                    <label for="Student">Student</label>
                    <input type="radio" name="type" value="S">
                    <label for="Manager">Manager</label>
                    <input type="radio" name="type" value="M">
                </div>
                <div id="id">           
                    <label> Enter your ID</label>
                    <span id="ID_TextBox">
                        <input type="text" placeholder="ID" name="ID" >
                    </span>                            
                </div>
                <div id="password">
                    <label >Enter your Password</label>
                    <span id="Pass_TextBox">
                        <input type="password" placeholder="password" name="Password">
                    </span>                               
                </div>
                <input type="submit">
            </form> 
            
    </div>
    
    </body>

</html>