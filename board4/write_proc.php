<?php
    include_once "db.php";

    $title=$_POST["title"];
    $ctnt=$_POST["ctnt"];

    $sql=
    "INSERT INTO t_board4 
    (title,ctnt)
    VALUES
    ('${title}','${ctnt}')
    ";

    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location: list.php");
?>