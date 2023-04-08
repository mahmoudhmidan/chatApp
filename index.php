<?php
session_start();
if(isset($_SESSION['unique_id'])){
    header("location:users.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register Realtime Chat App | Ma7moud</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>RealTime Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First name" required>
                    </div>

                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="last name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Adress</label>
                        <input type="text" name="email" placeholder="Enter Your Email" required>
                    </div>

                    <div class="field input">
                        <label>password</label>
                        <input type="password" name="password" placeholder="Enter Your Password" required>
                        <i class="fas fa-eye"></i>
                    </div>

                    <div class="field input">
                        <label>Select Image</label>
                        <input type="file" name="image" accept="image/x-png, image/gif, image/jpeg, image/jpg" required>
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="continue to chat">
                    </div>
            </form>
            <div class="link">Already singned up? <a href="login.php">log in </a></div>
        </section>
    </div>


    <script src="js/pass-script.js"></script>


    <script src="js/signup.js"></script>
</body>
</html>