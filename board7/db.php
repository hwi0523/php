<?php
    function get_conn()
    {
        define("URL","localhost");
        define("USERNAME","root");
        define("PASSWORD","506greendg@");
        define("DB_NAME","board1");
        define("PORT","3306");
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }
?>
