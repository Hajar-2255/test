<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
    </div>
    <div id="container">
        <span id="title">Registration Form</span>
        <form action="register.php" method="POST">
            <div id="details">
                <div id="input-details">
                    <span id="content">Full Name </span>
                    <input type="text" name="fullname" placeholder="Enter your full name">
                </div>
                <div id="input-details">
                    <span id="content">Username </span>
                    <input type="text" name="uname" placeholder="Enter your username ">
                </div>
                <div id="input-details">
                    <span id="content">Email </span>
                    <input type="email" name="email" placeholder="Enter your email">
                </div>
                <div id="input-details">
                    <span id="content">Phone number </span>
                    <input type="text" name="phone" placeholder="Enter your phone">
                </div>
                <div id="input-details">
                    <span id="content">Password </span>
                    <input type="password" name="pass" placeholder="Enter your password">
                </div>
                <div id="input-details">
                    <span id="content">Confirm Password </span>
                    <input type="password" name="cpass" placeholder="Confirm password ">
                </div>

            </div>
            <div id="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>

</body>

</html>