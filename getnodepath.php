<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/15
 * Time: 13:16
 */

function getNodePath($mysqli,$nodes){
    foreach ($nodes as $node) {
        $lft=intval($node[2]);
        $rgt=intval($node[3]);
   }
    $sql="select name from root where lft <=".$lft ." and rgt >=".$rgt." order by lft asc";
    $res=$mysqli->query($sql);
    $rows=$res->fetch_all();
    $path='';
    foreach($rows as $row){
        $path.=$row[0]." ";
    }
    return $path;
}