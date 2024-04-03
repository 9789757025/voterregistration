<?php



include ("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--- Required meta tags-->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OTP Verification for Mobile </title>
  <!--Custom CSS-->
  <link rel="stylesheet" href="otpstyle.css" />

</head>

<body>
  <!--create form to input yout mobile number -->
  <div class="container">
    <h2>OTP Verification</h2>
    <p>Please type verification code sent to
      <span id="mobile">(000) 000-0000</span>
    </p>
    <p>The OTP will expire in <span id="expire">30</span></p>
    <div class="row">
      <input type="number" />
      <input type="number" />
      <input type="number" />
      <input type="number" />
    </div>
    <button type="button">Verify OTP</button>
    <p>
      Didn't receive code?
      <a href="javascript:void(0)" id="request" onclick="generateOTPs()">Request Again</a>
    </p>
  </div>
  <!--Javascript-->
  <script src="script.js"></script>
</body>

</html>


