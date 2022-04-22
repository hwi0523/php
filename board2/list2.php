<?php
    include_once "db2.php";

    $conn = get_conn();
    $sql="SELECT i_board,title,create_at FROM t_board2 ORDER BY i_board DESC";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <h1>리스트</h1>
    <a href ="write2.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성시간</th>
        </tr>
        <?php
            while($row=mysqli_fetch_assoc($result))
            {
                $i_board = $row["i_board"];
                $title = $row["title"];
                $create_at = $row["create_at"];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail2.php?i_board=${i_board}'>${title}</a></td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
        ?>
        </table>
</body>
</html>