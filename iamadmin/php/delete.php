<?php
$feedback_id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_STRING);
include_once("config.php");
$sql = "DELETE FROM feedbacks WHERE feedback_id='$feedback_id'";

if ($conn->query($sql) === TRUE) {
echo "<script>";
echo"
alert('Record deleted !');
";

echo "window.location.href='../feedbacks.php'";
echo "</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>