<html>
<body>
  <form action=' <?php echo $_SERVER['PHP_SELF'] ?> '>
Enter Book Name:<input type="text" name="sub_name" value="">
<input type="submit" value ="Search">
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
      <table border=2>



    <?php  while($row = $result->fetch_assoc()) {
          $title=$row['title'];?>
          <tr>
            <td>
          <?php echo $title ?></td>
          <?php $author=$row['author'];
          $edition=$row['edition'];
          ?>
          <td>
              <?php echo $author ?>
          </td>
          <td><?php echo $edition ?></td>
          <td><a href ="http://www.google.com">LINK</a></td>
        </tr>

      <?php } ?>
    </table>
  <?php } ?>
<?php } ?>
