<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-up</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">

</head>
<body>
       
        
    
        
    

    <div class="login-form">
      <img class="form-image" >
      
      
      <form action="includes/signup.inc.php" method="post">
        
        
        <video autoplay muted loop id="myVideo" style="max-height: 200px;     max-width: 170px; text-align: center; ">
          <source src="../internal-video/slack.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
        <h3>SIGN UP TO SIRI </h3 >
          
        <input type="text" name="username" placeholder="Username.." oninvalid="this.setCustomValidity('please provide username')" oninput="setCustomValidity('')"   required autofocus>
        <input type="text" name="email-id" placeholder="Email-id.." oninvalid="this.setCustomValidity(' Email must be atleast with containing 2 alphanumerical along with 4 numeric number and not contain any special character and it must have domain name appending gmail.com ex:= me1234@gmail.com')" oninput="setCustomValidity('')" pattern="^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$" required>
        <input type="password" name="password" placeholder="Password.."  oninvalid="this.setCustomValidity(' Password must have Minimum eight characters, at least one uppercase letter, one lowercase letter and one number')" oninput="setCustomValidity('')"  pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>
        <input type="text" name="phone-number" id="" placeholder="Phone Number.." oninvalid="this.setCustomValidity('phone number must be 10 digit and should not contain any alphanumerical and special character and it must be valid.  ')" oninput="setCustomValidity('')"    pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$"  required>
       
        <button class="submit-button1" name="logout-submit" >Sign-up</button>
        <a href="sign-in.php" style="color: blueviolet; margin-top: 22px;">Already have an account?</a>
      </form>
    </div>

        
    
  
        

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../js/login.js"></script>
</body>
</html>