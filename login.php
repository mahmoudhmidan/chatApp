<?php  
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App | Ma7moud</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
        <section class="form login">
            <header>RealTime Chat App</header>
            <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
              
                    <div class="field input">
                    <label>Email Adress</label>
                        <input type="text" name="email" placeholder="Enter Your Email" required>
                    </div>

                    <div class="field input">
                    <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password" required>
                        <i class="fas fa-eye"></i>
                    </div>

                    <div class="field button">
                        <input type="submit" name="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">not yet signed up? <a href="index.php">singup now</a></div>
         </section>
</div>

<script src="js/pass-script.js"></script>
<script src="js/login.js"></script>
</body>
</html>