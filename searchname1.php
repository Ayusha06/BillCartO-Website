<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
echo "hey";
   if(isset($_POST['mysql_connect']))
   {
   $conn = mysql_connect('localhost','root', '');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT * FROM bill";
   mysql_select_db('application');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   if($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo $row['date'];
   }
   }
   echo "Fetched data successfully\n";
   if(isset($_POST['mysql_connect']))
   {
   mysql_close($conn);
}

?>
