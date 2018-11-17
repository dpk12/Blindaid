<!DOCTYPE html>
<html lang="en" >

<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>sign up form </title>
      
      <style type="text/css">
            body {
              background: linear-gradient(to right,rgb(242, 243, 244), rgb(209, 242, 235));
      font: 400 15px Lato, sans-serif;
      color: #818181;
      line-height: 1.8;
    }
    
    .main {
      width: 300px;
      height:450px;
      margin: 0 auto;
      background-color: #ECEFF1;
      border-radius: 20px;
      padding-top: 0;
      padding-bottom: 0;
      margin-top: 0;
      box-shadow: 0px 11px 14px 1px #32cd32;
      font-family: 'Ubuntu', sans-serif;
    }
    
    .su {
      color: #32cd32;
      font-weight: 600;
      font-size: 25px;
      font-family: 'Ubuntu', sans-serif;
    }
    
    .first {
      width: 80%;
      color: #32cd32;
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      text-align: center;
     
      font-family: 'Ubuntu', sans-serif;
    }
    
    .mail {
      width: 80%;
      color: rgb(38, 50, 56);
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      text-align: center;
      margin-bottom: 27px;
      font-family: 'Ubuntu', sans-serif;
    }
    
    .pass1 {
      width: 80%;
      color: rgb(38, 50, 56);
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      text-align: center;
      margin-bottom: 27px;
      font-family: 'Ubuntu', sans-serif;
    }
            
    .cal {
      width: 80%;
      color: rgba(38, 50, 56, 0.58);
      font-weight: 600;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      text-align: center;
      margin-bottom: 27px;
      font-family: 'Ubuntu', sans-serif;
    }
    
    .country {
      width: 80%;
      color: rgba(38, 50, 56, 0.58);
      font-weight: 600;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      text-align-last: center;
      margin-bottom: 27px;
      margin: 40px;
      margin-top: 0px;
      font-family: 'Ubuntu', sans-serif;
    }
        
    .submit {
      border-radius: 5em;
      color: #fff;
      background: #32cd32;
      border: 0;
      padding-left: 40px;
      padding-right: 40px;
      padding-bottom: 10px;
      padding-top: 10px;
      font-family: 'Ubuntu', sans-serif;
      margin-top: 4%;
      font-size: 13px;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
      font-family: 'Ubuntu', sans-serif;
    }
    .file{
      border-radius: 5em;
      font-size: 13px;
      font-family: 'Ubuntu', sans-serif;
      color: #fff;
      background: #32cd32;
      padding-left: 0;
      padding-right: 0;
      padding-bottom: 0;
      padding-top: 0;
      
    }
    .first:focus,
    .mail:focus,
    .pass1:focus,
    .pass2:focus,
    .cal:focus,
    .country:focus {
      border: 2px solid #32cd32;
      outline: 0;
    }
    
    .submit:hover {
      box-shadow: 0 0 13px 1px #32cd32;
      cursor: pointer;
    }
    
    .submit:active {
      box-shadow: none;
    }
    
    textarea:focus,
    input:focus {
      color: #32cd32;
    }
	a {
      color:#32cd32;
      font-style: normal;
      text-decoration: none;
    }
    
    .mb {
      color: #32cd32;
    }
    
    span.mb-2:hover {
      color: #32cd32;
    }
    .captchamargin {
      margin-left: 20%;
    }
      </style>  
</head>

<body>

  <html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/style.css">

  <title>Sign up</title>
</head>

<body>
  <div class="main" align="center">
    <p class="su">LOGIN</p>
    <p style="color: #32cd32">You're one step away from using our services!</p><br>
    <form name="customerreg" class="form1" align="center" action="cregistration.php" method="POST" onsubmit="return regform()">
      <input class="mail" type="email" placeholder="Email Address" name="email" autofocus required>
      <input class="pass1" type="password" placeholder="Choose Password" name="password" required>
      
          
      <input class="submit" type="submit" value="Login" align="center" required> </form>
  </div>
  <script>
  function regform() 
            {
              var x=document.customerreg.email.value;  
              var pwd = document.customerreg.password.value;
                var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
                var phoneno = /^\d{10}$/;
                if(!(document.customerreg.phonenumber.value.match(phoneno)))
                {
                  alert("Enter a Valid Phone Number!");
                  return false;
                }   
                if(!re.test(pwd))
                {
                  alert("Password should be like 'Aa@1' and must contain 8 characters!");
                  return false;
                }
                var atposition=x.indexOf("@");  
                var dotposition=x.lastIndexOf(".");  
                if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
                  alert("Please enter a valid e-mail address ");  
                  return false;  
                }
                if (grecaptcha.getResponse() == ""){
                    alert("Please click on I'm not a robot");
                    return false;
                } else {
                    return true;
                }
            }
</script>
</body>

</html>
    