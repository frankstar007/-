<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/15
 * Time: 15:36
 */
function rebuild_tree($mysqli,$parent,$lft){
    $rgt=$lft+1;
    $sql="select name from root where parent= '".$parent."'";
    $res=$mysqli->query($sql);
    while($row=mysqli_fetch_array($res)){
       var_dump($row['name']);
        $rgt=rebuild_tree($mysqli,$row['name'],$rgt);
       var_dump($rgt);
    }
    $sql="update root set lft= '".$lft."',rgt='".$rgt."' where name='".$parent."'";
    $res=$mysqli->query($sql);
    var_dump($res);
    return $rgt+1;
}