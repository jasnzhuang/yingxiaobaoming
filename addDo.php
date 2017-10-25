<?php
require_once 'inc/dbConn.php';
////////////////////
///获取用户信息
////////////////////
//$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$grade = $_POST['grade'];
$major = $_POST['major'];
$regdate = date("Y-m-d", time());
$sql = "insert into baoming (name,sex,age,grade,major,regdate) " .
    "values('$user_name','$sex','$age','$grade','$major','$regdate')";
// 执行sql语句
mysqli_query($conn, $sql);
// 获取影响的行数
$rows = mysqli_affected_rows($conn);
// 返回影响行数
// 如果影响行数>=1,则判断添加成功,否则失败
if ($rows >= 1) {
    href("true.php");
} else {
    alert("添加失败");
    href("index.php");
}
