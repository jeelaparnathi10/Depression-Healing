<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depression Healing</title>
    <link rel="stylesheet" href="doctor.css">
</head>
<body>
    <div id="main">
        <div id="details">
            <h2 id="h2">Doctor's Details</h2>
            <form action="doctorDB.php" id="register" method="post" target="_blank">
                <label>Doctor's Name :</label>
                <br>
                <input type="text" name="dname" id="dd">
                <br><br>
                <label>Address :</label>
                <br>
                <input type="text" name="address" id="dd">
                <br><br>
                <label>Experience :</label>
                <br>
                <input type="text" name="experience" id="dd">
                <br><br>
                <label>Degree :</label>
                <br>
                <input type="text" name="degree" id="dd">
                <br><br>
                <label>Age :</label>
                <br>
                <input type="number" name="age" id="dd">
                <br><br>
                <label class="gender">Gender :</label>
                <br>
                <input type="radio" name="gender" id="male" value="Male">
                Male
                <input type="radio" name="gender" id="female" value="Female">
                Female
                <br><br>
                <label>Email :</label>
                <br>
                <input type="email" name="email" id="dd">
                <br><br>
                <label>University :</label>
                <br>
                <input type="text" name="university" id="dd">
                <br><br>
                <label>Phone No. :</label>
                <br>
                <input type="number" name="phoneno" id="dd">
                <br><br>
                <input type="submit" value="Submit" name="submit" id="submit">
                <br><br>
                <p#p>*If You Want To <br><br>
                    <a href="update.php" target="_blank" id="update">Update</a>
                     Or
                    <button><a href="delete.php" target="_blank" id="delete">Delete</a></button> 
                </p>
            </form>
        </div>
    </div>
</body>

</html>