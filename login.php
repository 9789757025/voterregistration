<?php
    session_start();

    include("db.php");

    // connection to the local host server

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];
    
        
        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from data where email = '$gmail' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['pass'] == $password)
                    {
                        header("location: file.php");
                        die;
                        
                    }
                }
            }
            // alert the wrong mail or password
            
            echo "<script type='text/javascript'> alert('wrong email or password')</script>";
        }

        else{
            echo "<script type='text/javascript'> alert('wrong email or password')</script>";
        }
    }
      
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="file.php" method="POST">
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>

            <input type="password" name="pass" required>
            <div>
            <div class="g-recaptcha" data-sitekey="6LfOR6kpAAAAAM2dSFsIFlAqEAfUc6TpH4ngWywf"></div>
            </div>
           <input type="submit" name="" value="Submit">
         <p>Not have an account? <a href="signup.php">Signup Here</a></p>
        </form>
        </div>
</body>
</html>