<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 style="text-align: center;">Latest Updates</h1>
<?php

include("news_connection.php");

$sql="select Cricket,Football,Golf,UFC,WWE from news";

$result=mysqli_query($conn,$sql);


echo "<table cellspacing='15' border='0'>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>";


if (mysqli_num_rows($result) > 0) 

{
 while($row = mysqli_fetch_assoc($result))
  {

   echo "<tr>";

echo "<td>" . $row['Cricket'] . "</td>";
echo "<td>" . $row['Football'] . "</td>";
echo "<td>" . $row['Golf'] . "</td>";
echo "<td>" . $row['UFC'] . "</td>";
echo "<td>" . $row['WWE'] . "</td>";


echo "</tr>";
    }
    
}

else 
{

    echo "No Data";
}

mysqli_close($conn);

?>

</body>
</html>