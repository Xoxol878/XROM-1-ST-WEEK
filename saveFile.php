<?php

 $name=$_GET['author'];
 $comment=$_GET['comment'];

echo $name;
echo '<br>';
echo $comment;

$con = mysqli_connect("localhost", "root", "", "mybd");
mysqli_set_charset($con, "utf8");
if (mysqli_connect_errno()){
    echo "no" . myaqli_connect_error();
}

$query = "INSERT INTO author (author, comment) VALUES ('$name', '$comment');";
$result = mysqli_query($con, $query);
?>