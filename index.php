<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>ENHANCE FUTURE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <style>
        body {
            font: 400 15px Alegreya, !important;
            line-height: 1.8;
            color: black;
        }
        
        a {
            color: #f6f6f6;
        }
        
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            
        }
        
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            
        }
        
        .jumbotron {
            background-color: #fff !important;
            color: black;
           
		
            font-family: Alegreya, sans-serif;
        }
        
        .container-fluid {
            padding: 60px 50px;
			
        }
        
        .bg-grey {
            background: linear-gradient(to right,rgb(235, 245, 251), rgb(214, 234, 248));
			
        }
        
        
        .panel-heading {
            color: #fff !important;
            background-color: #32cd32 !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        
        .panel-footer {
            background-color: white !important;
        }
        
        .panel-footer h3 {
            font-size: 32px;
        }
        
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        
        .panel-footer .btn {
            margin: 15px 0;
            background-color: #32cd32;
            color: #fff;
        }
        
        .navbar {
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Alegreya, sans-serif;
        }
        
        .navbar li a,
        .navbar .navbar-brand {
            color: #fff !important;
        }
        
        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #32cd32 !important;
            background-color: #fff !important;
        }
        
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        
        footer .glyphicon {
            font-size: 20px;
			
position:relative;
height:50px;

			
            color: #32cd32;
        }
        
        .slideanim {
            visibility: hidden;
        }
        
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        
        .customer {
            background-color: #32cd32;
            width: 50%;
            color: black;
        }
        
        .customer:hover {
            color: black !important;
        }
        
        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
               
            }
        }
        
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
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
    
      font-family: Alegreya, sans-serif;
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
      
      font-family: Alegreya, sans-serif;
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
     
      font-family: Alegreya, sans-serif;
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
      /*font-family: 'Ubuntu', sans-serif;*/
      /*margin-top: 4%;*/
      font-size: 13px;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
      font-family: Alegreya, sans-serif;
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
        #newacc {
      color:#32cd32;
      font-style: normal;
      text-decoration: none;
     
    }
    .dropbtn {
        font: 400 15px Alegreya, sans-serif !important;
        background-color: transparent;
        color: #fff;
        padding: 16px;
        font-size: 15px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.7);
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {}

    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand">BRIGHT BLIND</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn" style="font-family: Alegreya">LOGIN</button>
                            <div class="dropdown-content">
                                <a data-toggle="modal" data-target="#myModal3">Volunteer</a>
			        <a data-toggle="modal" data-target="#myModal4">Student</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#about">ABOUT</a></li>
                    
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 style="color: #32cd32">I AND EYE</h1>
        
        <div class="row">
            <a><button type="button" class="btn btn-lg customer" data-toggle="modal" data-target="#myModal1">UPLOAD RESOURCES</button></a><br><br>
                <div class="modal fade" id="myModal1" style="margin-top: 50px; color: #32cd32;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
                 <!-- The Modal -->
  
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="main" align="center">
    <!-- <p class="su">LOG-IN</p> -->
    
    <form class="form1" align="center" action="vlogin.php" method="POST">      
      <input class="first" type="text" placeholder="Email .." name="email" autofocus required>
      <input class="pass1" type="password" placeholder="Password .." name="password" required> <br>        
      <input class="submit" type="submit" value="Log In" align="center"> 
    </form>
    <a href="volunteerregistration.php" style="text-decoration: none;"><h4 id="newacc">New User? Create an account</h4></a>
  </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
            </div>
            <div class="col-sm-4">
                
                <!-- The Modal -->
  <div class="modal fade" id="myModal3" style="margin-top: 50px; color: #32cd32;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="main" align="center">
    <!-- <p class="su">LOG-IN</p> -->
    <!-- <p style="color: #32cd32">We're your ride when you need us!</p><br> -->
    <form class="form1" align="center" action="logistics/loglogin.php" method="POST">      
      <input class="first" type="text" placeholder="Email.." name="email" autofocus required>
      <input class="pass1" type="password" placeholder="Password .." name="password" required>         
      <input class="submit" type="submit" value="Log In" align="center"> 
    </form>
    <a href="logistics/logisticregistration.php" style="text-decoration: none;"><h4 id="newacc">New User? Create an account</h4></a>
  </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
            </div>
            <div class="col-sm-4">
                <a><button type="button" class="btn btn-lg customer" data-toggle="modal" data-target="#myModal2">USE RESOURCES</button></a>
                <div class="modal fade" id="myModal2" style="margin-top: 50px; color: #32cd32;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="main" align="center">
    <!-- <p class="su">LOG-IN</p> -->
    <!-- <p style="color: #32cd32">We're your ride when you need us!</p><br> -->
    <form class="form1" align="center" action="slogin.php" method="POST">      
      <input class="first" type="text" placeholder="Email .." name="email" autofocus required>
      <input class="pass1" type="password" placeholder="Password .." name="password" required>         
      <input class="submit" type="submit" value="Log In" align="center"> 
    </form>
    <a href="driver/driverregistration.php" style="text-decoration: none;"><h4 id="newacc">New User? Create an account</h4></a>
  </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
            </div>
        </div>
    </div>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-8">
                <h2>WHAT WE DO</h2><br>
				
                <p> blind people by creating awareness and providing hig education standards to make tomorrow better.The Mission is to provide quality education and health including rectification of vision for visually impaired children; The Goal would be provide a community based learning mechanism and improve the education percentages among the visually impaired children

Our vision is to support and nurture visually impaired children into healthy and independent individuals </p>
          
            </div>
            <div class="col-sm-4">
                <img src="script.jpeg" align="right">
            </div>
        </div>
    </div>

    
            
        </div>
    </div>

    <!-- Container (Services Section) -->
    

    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid" bg-grey>
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-5">
                
                <p><span class="glyphicon glyphicon-map-marker"></span>ABC</p>
                <p><span class="glyphicon glyphicon-phone"></span> +91 12345678</p>
                <p><span class="glyphicon glyphicon-envelope"></span> abc@gmail.com</p>
            </div>
            
        </div>
    </div>
    


    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
    </footer>

    
            

</body>

</html>
<?php
if(isset($_SESSION))
{
    session_destroy();
}
?>