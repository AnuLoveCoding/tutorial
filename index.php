<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blood Donation Form</title>
</head>

<h1>Blood Donation Camp</h1>
<body bgcolor="FBB917" style="margin-left: 600px; ">
    <div>
        <h2>Registration Form</h2>
    </div>
    <form action="connect.php" method="POST" >
        <label for="user">Name</label>
        <br>
        <input type="text" name="name" id = "name" required placeholder="Enter Your name"><br> <br>

        <label for="email" >Email:</label> <br>
        <input type="email" name="email" id="email" required placeholder="Enter Your Email"> <br><br>


        <label for="phone">Phone :</label> <br> <br>
        <input type="text" name=" phone" id="phone" required placeholder="Enter Your Phone number"> <br><br>

        <label for="bgropu">Blood Group:</label><br>
        <input type="text" name="bgroup" id="bgroup" required placeholder="Enter Your Blood Group"><br><br>

        <input type="submit" name="submit" id="">

        </form>
</body>
</html>