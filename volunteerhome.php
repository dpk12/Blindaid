<?php session_start();
if(isset($_SESSION['vid']))
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>IandEYE</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font: 400 15px Alegreya;
            line-height: 1.8;
            color: black;
            background: linear-gradient(to right,rgb(242, 243, 244), rgb(209, 242, 235));
            margin-bottom: 100px;
        }
        
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: black;
            font-weight: 600;
            margin-bottom: 30px;
        }
        
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: black;
            font-weight: 400;
            margin-bottom: 30px;
        }
        
        .container-fluid {
            padding: 60px 50px;
        }
        
        .tab-container {
            margin-top: 5%;
            min-width: 100%;
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
        
        .navbar-nav li a:hover .glyphicon-bell {
            color: #32cd32;
        }

        /*.navbar-nav li a i:hover {
            color: #32cd32 !important;
            background-color: #fff !important;
        }*/
        
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        
        a:hover,
        a:focus {
            text-decoration: none;
            outline: none;
        }
        
        .tab .nav-tabs {
            border: none;
            margin-left: 10%;
        }
        
        .tab .nav-tabs li a {
            padding: 10px;
            margin-right: 20px;
            font-size: 20px;
            font-weight: 600;
            color: black;
            text-transform: uppercase;
            border: none;
            border-radius: 0;
            background: transparent;
            z-index: 2;
            position: relative;
            transition: all 0.3s ease 0s;
        }
        
        .tab .nav-tabs li a:hover,
        .tab .nav-tabs li.active a {
            border: none;
        }
        
        .tab .nav-tabs li a:before {
            content: "";
            width: 100%;
            height: 4px;
            background: #f6f6f6;
            border: 1px solid #e9e9e9;
            border-radius: 2px;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        
        .tab .nav-tabs li a:after {
            content: "";
            width: 0;
            height: 4px;
            background: #32cd32;
            border: 1px solid #32cd32;
            border-radius: 2px;
            position: absolute;
            bottom: 0;
            left: 0;
            opacity: 0;
            z-index: 1;
            transition: all 1s ease 0s;
        }
        
        .tab .nav-tabs li:hover a:after,
        .tab .nav-tabs li.active a:after {
            width: 100%;
            opacity: 1;
        }
        
        .tab .tab-content {
            padding: 15px 20px;
            margin-top: 20px;
            font-size: 17px;
            color: black;
            letter-spacing: 1px;
            line-height: 30px;
            background: transparent;
            width: 100%;
            margin-left: 0%;
        }
        
        table.table-bordered {
            border: 1px solid #32cd32`;
        }
        
        table.table-bordered>thead>tr>th {
            border: 1px solid #32cd32`;
        }
        
        table.table-bordered>tbody>tr>td {
            border: 1px solid #32cd32`;
        }
        
        .map-container {
            border: 1px solid #32cd32`;
            width: 100%;
            height: 700%;
            position: absolute;
            overflow: hidden;
            margin-bottom: 5%;
        }
        
        .form-control:focus {
            border: #32cd32;
            box-shadow: 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px #32cd32;
        }
        
        .book {
            border: 1px solid #32cd32;
            font: 400 15px Alegreya, sans-serif;
            line-height: 1.8;
            color: black;
        }
        
        .book:hover {
            background-color: #32cd32;
            color: #fff;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            min-height: 8%;
        }

        .inputwidth {
            width: 60%;
            margin-left: 20%;
        }

        .formclass {
            text-align: center;
        }

        .border {
            border-right: 1px solid #32cd32;
            min-height: 450px;
        }

        .logo {
            color: #32cd32;
            font-size: 100px;
            margin-left: 40%;
        }

        .card {
    /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            margin-top: 10%;

            border: 1px solid #32cd32;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
                        
        @media only screen and (max-width: 479px) {
            .tab .nav-tabs li {
                width: 100%;
                text-align: center;
                margin-bottom: 1%;
                margin-top: 2%;
            }
            .tab .nav-tabs {
                margin-left: 0%;
            }
            .tab .tab-content {
                margin-top: 0;
                width: 100%;
                margin-left: 0%;
            }
            .tab {
                margin-top: 10%;
            }
        }
        
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
            .tab .nav-tabs {
                margin-left: 0%;
            }
            .tab {
                margin-top: 5%;
            }
        }
        
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
                /*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  margin-left: 50px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #32cd32;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #32cd32;
  background-image: #32cd32;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #32cd32;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}

.has-search .form-control {
    padding-left: 2.375rem;
}
#myInput1 {
  /*background-position: 10px 10px;*/
  background-repeat: no-repeat;
  width: 30%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 110px;
  display: inline-block;
}
#myInput2 {
  /*background-position: 10px 10px;*/
  background-repeat: no-repeat;
  width: 30%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 180px;
  display: inline-block;
}
/**/
.glyphicon-bell{
  color: white;
  font-size: 15px;
  padding-bottom: 5px;
  padding-top: 5px;
}
.dropdown {
    display:inline-block;
    margin-left:20px;
    padding:10px;
  }
.notifications {
   min-width:420px;
   overflow: auto; 
  }
  .notifications-wrapper {
     overflow:auto;
      max-height:350px;
    }
    .menu-title {
     color:#32cd32;
     font-size:2.5rem;
    display:inline-block;
      }
 
   .notification-heading, .notification-footer  {
  padding:0px 10px;
       }
  .dropdown-menu.divider {
  margin:5px 0;          
  }

.item-title {  
 font-size:1.4rem;
 color:#000;    
}
.notifications a.content {
 text-decoration:none;
 background:#ccc;

 }
    
.notification-item {
 padding:10px;
 margin:5px;
 background:#ccc;
 border-radius:4px;
 }
 /**/

    </style>
</head>
<body>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand"><?php echo "Welcome, ".$_SESSION['name'];?></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    
                    <!-- <li><a data-toggle="modal" data-target="#myModal">PROFILE</a></li> -->
                    <!-- The Modal -->
                      <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">PROFILE</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <!-- Modal body -->
                          <div class="modal-body">
                            <div class="container">
                              <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-9 col-xs-10 bhoechie-tab-container">
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                                    <div class="list-group">
                                      <a href="#" class="list-group-item active text-center">
                                        <h4 class="glyphicon glyphicon-user"></h4><br/>View Profile
                                      </a>
                                      <a href="#" class="list-group-item text-center">
                                        <h4 class="glyphicon glyphicon-wrench"></h4><br/>Change Password
                                      </a>
                                      <a href="#" class="list-group-item text-center">
                                        <h4 class="glyphicon glyphicon-pencil"></h4><br/>Edit Profile
                                      </a>
                                    </div>
                                  </div>
                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                                    <!-- View section -->
                <div class="bhoechie-tab-content active">
                    <center>
                      <form method="post" style="margin-top: 10px">
                          <div class="form-group">
                              <label for="name">Name:</label>
                              <?php
                              require_once("DBConn.php");
                              
                              ?>
                              <input class="form-control" type="text" id="name" name="name" value="" disabled>
                          </div>
                          <div class="form-group">
                              <label for="mail">Email address:</label>
                              <input class="form-control" type="email" id="mail" name="mail" value="" disabled>
                          </div>
                          <div class="form-group">
                              <label for="uname">Username:</label>
                              <input class="form-control" type="text" id="uname" name="uname" value="" disabled>
                          </div>
                          <div class="form-group">
                              <label for="ph">Phone number:</label>
                              <input class="form-control" type="text" name="ph" id="ph" value="" disabled>
                          </div>                          
                      </form>
                    </center>
                </div>
                <!-- pwd section -->
                <div class="bhoechie-tab-content" style="margin-top: 50px">
                    <center>                      
                      <form method="post" action="custchangepwd.php">
                          <div class="form-group">
                            <label for="opwd">Old Password:</label>
                            <input type="password" class="form-control" id="opwd" name="opwd" required>
                          </div>
                          <div class="form-group">
                            <label for="npwd">New Password:</label>
                            <input type="password" class="form-control" id="npwd" name="npwd" required>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>                     
                    </center>
                </div>
                <!-- edit section -->
                <div class="bhoechie-tab-content"  style="margin-top: 30px">
                    <center>                      
                      <form method="post" action="custchangeinfo.php">
                          <div class="form-group">
                              <label for="ph">Phone number:</label>
                              <input class="form-control" type="text" name="ph" id="ph" value="">
                          </div>
                          <div class="form-group">
                              <label for="mail">Email:</label>
                              <input class="form-control" type="email" name="mail" id="mail" value="">                              
                          </div>
                          <div class="form-group">
                              <label for="uname">Username:</label>
                              <input class="form-control" type="text" name="uname" id="uname" value="">                              
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>                      
                    </center>
                </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                        </div>
                      </div>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container tab-container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <center>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Your uploads</a></li>
                        <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Upload file</a></li>                        
                        
                    </ul>
                  </center>
                    <!-- Tab panes -->
                    <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade" id="Section2">
                            <form class="form-horizontal" action="upload.php" method="POST" enctype="multipart/form-data">
                              <div class="form-group">      
                                  <div class="inputwidth">
                                    <label class="control-label">Book name: </label>
                                      <input type="text" class="form-control" id="" placeholder="Enter book name.." name="title" required>
                                  </div>
                              </div>
                              <div class="form-group">      
                                  <div class="inputwidth">
                                    <label class="control-label">Class: </label>
                                      <input type="text" class="form-control" id="" placeholder="Enter class.." name="class" required>
                                  </div>
                              </div>
                              <div class="form-group">      
                                  <div class="inputwidth">
                                    <label class="control-label">Subject: </label>
                                      <input type="text" class="form-control" id="" placeholder="Enter subject.." name="subject" required>
                                  </div>
                              </div>
                              <div class="form-group">      
                                  <div class="inputwidth">
                                    <input type="file" name="fileToUpload" required><br>
                                    <!-- <center><input type="submit"></center> -->
                                    <button type="submit">SUBMIT</button>
                                  </div>
                              </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                            <div class="col-lg-6">
                              <center><h3>Your uploads</h3></center>
                              
                            </div>
                                                     
                        </div>
                               
                </div>
            </div>
        </div>
        <div class="footer">
            <a href="#" style="color: #fff"><h3>IandEYE</h3></a>
        </div>        
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</body>
</html>
<?php
                                            
}
else
{
   echo "<script type='text/javascript'>alert('Please Login To Continue');window.location='index.php'</script>";
}?>