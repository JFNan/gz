<?php 
    include "DBHelper.php";
        $sql  = "select * from users";
        $result = query_sql($sql);
        echo json_encode($result);

?>