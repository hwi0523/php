<?php
    include_once "db.php";

    $i_board=$_GET["i_board"];
    $sql="DELETE FROM t_board8 WHERE i_board=$i_board";

    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location: list.php");

?>