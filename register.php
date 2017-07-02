<?php
header('Content-Type:text/html;charset=utf8');

//获取url传来的参数
if($_GET){
    $usename = $_GET['username'];

    $dsn = "mysql:host=localhost;dbname=xiaomimi";
    $pdo = new PDO($dsn, "root", "");
    //访问PDO类的成员方法query
    $query = "select id,username from user where username='{$usename}'";
    $statm = $pdo->prepare($query);

    $result = $statm->execute();
//    var_dump($result);

    if($result){
        echo 1; //用户名存在
    }else{
        echo 2; //用户名不存在
    }

}
