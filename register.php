
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <form action="ok.php" method="POST">
    <input type="text" name="FullName" placeholder="Enter FullName"  required>
    <input type="text" name="ID" placeholder="Enter ID"  required>
    <input type="date" name="Date" placeholder="Enter DOB"required>
    <input type="text" name="Email" placeholder="Enter Email" required>
    <label id= fontcolor for="Teacher"> Teacher</label>
        <input type="radio" name="type" value="T"required >
        <label id= fontcolor for="Student">Student</label>
        <input type="radio" name="type" value="S" >
        <br>
        <label id= fontcolor for="Hire"> Hire</label>
        <input type="radio" name="choose" value="H"required >
        <label id= fontcolor for="Fire">Fire</label>
        <input type="radio" name="choose" value="F" >
        <label id= fontcolor for="Update">UpdateUser</label>
        <input type="radio" name="choose" value="U">
        <button>
            ok
        </button>
    </form>
</body>
</html>

