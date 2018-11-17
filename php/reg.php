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