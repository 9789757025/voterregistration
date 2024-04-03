<?php
    session_start();
   // connnect to local server
    include("db.php");
    

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $applicantname = $_POST['aname'];
        $fathername = $_POST['fname'];
        $Gender = $_POST['gender'];
        $dateofbirth = $_POST['dob'];
        $Age = $_POST['age'];
        $num = $_POST['number'];
        $address = $_POST['add'];
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];
        $aadharno = $_POST['aad'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            // create a database and table name form
            $query = "insert into form (aname, fname, gender, dob, age, cnum, address, mail, pass, aad) values ('$applicantname', '$fathername', '$Gender', '$dateofbirth', '$Age', '$num', '$address', '$gmail', '$password', '$aadharno')";

            mysqli_query($con, $query);
            // alert the message successfully register
            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            // alert the message to invalid details
            echo "<script type='text/javascript'> alert('Please Enter some valid Information')</script>";
        }

    }
    


?>
<?php

if(isset($_POST['submit'])){

$age = $_POST['age'];

if($age >= 18){

echo "<script type='text/javascript'> alert ('Congratulations! You are eligible to register vote id')</script>";

} else {

echo "<script type='text/jascript'> alert('Sorry, you are not eligible to register for voter id')</script>";

}

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <form method="POST" >
            <label>Applicant Name</label>
            <input type="text" name="aname" class="class" required>
            <label>Father Name</label>
            <input type="text" name="fname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Date Of Birth</label>
            <input type="text" name="dob" required>
            <label>Age</label>
            <input type="number" name="age"  value="check" required>
            <label>Contact</label>
            <input type="tel" name="number" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <label>Aadhar No</label>
            <input type="text" name="aad" required>
            <input type="submit" name="submit" value="Submit">
        </form>
        <p><a href="">Terms and Condition</a> and <a href="#">Privacy Policy</a></p>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
        <p>Mobile OTP Verification<a href="mobileotp.php">Click Verification</a></p>
    </div>
</body>
</html>