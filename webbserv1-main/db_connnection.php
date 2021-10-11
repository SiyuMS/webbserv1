<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "test";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

$query = mysqil_fetch($conn, "SELECT * FORM tbl_articles");
while($row = mysqil_fetch_assoc($query))
{
  $title = $row['title'];
  $content = $row['content'];
}

function CloseCon($conn)
 {
 $conn -> close();
 }
?>
