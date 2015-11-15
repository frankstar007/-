<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/15
 * Time: 9:57
 */
include 'get_child.php';
include 'sqlcon.php';
include "getnode.php";
include "getnodepath.php";
include "rebuild_tree.php";
include "insert.php";
include "delete.php";
$mysqli=conn();
$node=getNode($mysqli,'fruit');
$path=getNodePath($mysqli,$node);
$childs=display_tree($mysqli,'fruit');
#rebuild_tree($mysqli,'food',1);
//insert($mysqli,'red','blood');
//insert($mysqli,'yellow','mum');
delete($mysqli,"blood");
rebuild_tree($mysqli,'food',1);
