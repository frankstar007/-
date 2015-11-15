<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/15
 * Time: 20:20
 */
function delete($mysqli,$name){
    $sql="delete from root where name= '".$name."'";
    var_dump($sql);
    $res=$mysqli->query($sql);
    if($res){
        echo "删除成功！";
    }
}