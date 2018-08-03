<?php
include("news_connection.php");

$sql = "DELETE FROM news WHERE ID= '3' ";
if (mysqli_query($conn, $sql))
 {
    echo " Deleted successfully";
} 
else
 {
    echo "Error in deleting : " . mysqli_error($conn);
}
mysqli_close($conn);
?>