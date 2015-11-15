<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/15
 * Time: 13:33
 */
function getNode($mysqli,$node){
    $sql="select * from root where name='".$node."' ";
    $res=$mysqli->query($sql);
    $rows=$res->fetch_all();
    return $rows;

}