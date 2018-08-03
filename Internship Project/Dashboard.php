<?php
session_start();
echo "Welcome ".$_SESSION['Username'];
?>

<br><br><br><br>

<a href="news_display.php" style="font-size: 30" >Upload News</a>
<br><br><br>
<a href="news_delete.php" style="font-size: 30">Delete News</a>


<br><br><br><br>
<a href="logout.php" style="font-size: 20">Logout</a>