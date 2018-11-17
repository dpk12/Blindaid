<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  .button {
    background-color: #4CAF50; /* Green */
margin:0 auto
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button:hover{
  border-radius: 10px;
  opacity:0.5;
}

.division{
  
}

  </style>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">iandEYE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>

          </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
  </div>
</nav>
  <form action=' <?php echo $_SERVER['PHP_SELF'] ?> '>
    <br><br><br><br>
    <div class="division">
Enter Subject Name:<input type="text" size="40" name="sub_name" value="" placeholder="enter subname(in lower case)">
<input type="submit" class="button" value ="Search" >
  </div>
</form>
</body>
</html>

<?php
if(isset($_GET['sub_name']))
{
  $server="localhost";
  $username="root";
  $password="";
  $db="BOOK_DETAILS";

  $bookname=$_GET['sub_name'];

  $conn=new mysqli($server,$username,$password,$db);
  if($conn->connect_error)
  {
    echo "canmnot connect";
  }
  $sql="select * from books where subject ='".$bookname."'";
  $result=$conn->query($sql);
  if ($result->num_rows > 0) {?>
      // output data of each row
      <table border=2 border-color="green">

        <tr>
<th>Title Name</th>
<th>Author Name</th>
<th>subject</th>
<th>Audio File</th>
</tr>

    <?php  while($row = $result->fetch_assoc()) {
          $title=$row['title'];?>

            <tr>
            <td>
          <?php echo $title ?></td>
          <?php $author=$row['author'];
          $edition=$row['edition'];
          ?></td>
          <td>
              <?php echo $author ?>
          </td>
          <td><?php echo $edition ?></td>
          <td><?php echo " <audio controls >

            <source src='ringtone.mp3' type='audio/mpeg'>
          Your browser does not support the audio element.
          </audio>"
          ?></td>
        </tr>

      <?php } ?>
    </table>
  <?php } ?>
<?php } ?>
