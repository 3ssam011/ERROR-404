<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <form action="r2.PHP" method="POST">
    <input type="text" name="FullName" placeholder="Enter FullName"  required>
    <br>
    <br>
    <input type="text" name="NationalID" placeholder="Enter ID"  required>
    <br>
    <br>
    <input type="date" name="Date" placeholder="Enter DOB"required>
    <br>
    <br>
    <input type="text" name="Email" placeholder="Enter Email" required>
    <br>
    <br>
    <input type="text" name="PhoneNum" placeholder="Enter your PhoneNum" required>
    <br>
    <br>
    <input type="text" name="Grade" placeholder="Enter Grade" required>
    <br>
    <br>
    Enter your BirthCertificate
    <br>
    <input type="file" name="BC" name="img" accept="image/*">
    <br>
    <br>
    <input type="text" name="Age" placeholder="Enter Your Age" required>
    <br>
    <br>
        <button>
            Ok
        </button>
    </form>
</body>
</html>