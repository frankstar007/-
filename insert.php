<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/15
 * Time: 16:15
 */
function insert($mysqli,$parent,$name){
    $sql="insert into root (name,parent,lft,rgt) values('$name','$parent',0,0) ";
    $res=$mysqli->query($sql);
    if($res){
        echo "添加成功！";
    }
}