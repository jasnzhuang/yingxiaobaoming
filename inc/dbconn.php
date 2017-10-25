<?php
/**
 * Created by PhpStorm.
 * User: JaaonZhuang
 * Date: 2017/07/22
 * Time: 20:25
 */
require_once "functions.php";
session_start();
// 创建数据库连接
//$con = mysqli_connect("localhost","root","pass","crudtest") or die('error:'.mysqli_connect_error());
$conn = mysqli_connect("localhost", "root", "ruanjian17", "crudtest");
if (!$conn) {
    die("连接错误: " . mysqli_connect_error());
}
//mysqli_select_db('crudtest',$con) or die('error:'.mysqli_error());
mysqli_query($conn, 'set NAMES utf8');

