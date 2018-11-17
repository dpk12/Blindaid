<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test3');
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>


<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  function fun($var)
  {<?php
	  $q="update records set status='accepted' where volunteer_name=$var";
	  mysqli_query($dbc,$q);
	?>
	  
  }
  </script>
  </head>

<?php
$query = "SELECT volunteer_name,book_title,link,status FROM records where status='pending'";
$response = @mysqli_query($dbc, $query) ;
if($response){
echo '<div class="container">
  
  <table class="table">
    <thead>
      <tr>
        <th>Volunteer</th>
        <th>Book Title</th>
        <th>Download</th>
      </tr>
    </thead>';

    
while($row = mysqli_fetch_array($response)){
	$v=$row['volunteer_name'];
echo '<tr><td align="left">' .
$row['volunteer_name'] . '</td><td align="left">' .
$row['book_title'] . '</td><td align="left">'.'<a href="www.google.com">click here</a>'.
'</td><td align="left">';


echo '<br>';


   echo '<div class="container">
  
  <div class="btn-group btn-group-lg">
   
    <button type="button" class="btn btn-primary" onclick="fun($v)">Accept</button>
	<button type="button" class="btn btn-primary">Reject</button>
    
  </div>
  
</div>';
echo '</tr>';
echo '<br>';
}
echo '</table>';
} else {
echo "Couldn't issue database query<br/>";
echo "mysqli_error($dbc)";
}

mysqli_close($dbc);
?>
</html>
