<?php 
    include "DBHelper.php";
    $username = !isset($_POST["username"]) ? "" : $_POST["username"];
    $pwd = !isset($_POST["pwd"]) ? "" :$_POST["pwd"];
    $sql = "select * from users where username = '$username' and password = '$pwd'";
    $result = query_sql($sql);
    if(count($result) > 0){
        echo "{status:true}";
    }else{
        echo "{status:false,message:'登录失败'}";
    }


?>