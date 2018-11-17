<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test3');
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function openCity(evt, cityName){
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #3cb371;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: right;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #90ee90;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #90ee90
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>


<div id="a" width="100px">
<div class="tab" width="100px">

<button class="tablinks">Logout</button>
  <button class="tablinks" onclick="openCity(event, 'London')">Notification</button>
  <button class="tablinks">Profile</button>
  
  
</div>

<div id="London" class="tabcontent" width="100px">
  <h3>Notification:</h3>
  <p>Requested Books are available now!!</p>
  <?php
$query = "SELECT volunteer_name,book_title,link,status FROM records where status='accepted'";
$response = @mysqli_query($dbc, $query);
if($response){
while($row = mysqli_fetch_array($response)){
	
echo '<tr><td align="left">'.

$row['book_title']. '</td>';
echo '<br>';
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
</div>   </div>  
</body>
</html> 
