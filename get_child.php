<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/15
 * Time: 11:20
 */
function display_tree($mysqli,$root){
    $sql="select lft,rgt from root where name='".$root."';";
    $res=$mysqli->query($sql);
    #var_dump($res);
    $rows=$res->fetch_all();
   foreach($rows as $row){
       $lft=intval($row[0]);
       $rgt=intval($row[1]);
   }
    //
    $sql="
        SELECT name, lft, rgt
        FROM root
        WHERE lft BETWEEN '" . $lft . "' AND '" . $rgt ."'
        ORDER BY lft ASC
        ;";
    $res=$mysqli->query($sql);
    $rows=$res->fetch_all();
    $childs="";
    foreach($rows as $row){
        $childs.=$row[0]." ";

    }
   return $childs;

}