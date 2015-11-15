<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/15
 * Time: 12:18
 */
function conn()
{
    $mysqli = new mysqli("localhost", "root", "frank", "test");
    if (!$mysqli) {
        echo "ERROR:" . mysqli_connect_error();
        exit;
    }
    return $mysqli;
}