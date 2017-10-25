<?php
require_once 'inc/dbConn.php';
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>报名信息列表</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0" id="userList" align="center">
    <tr><td colspan="7" ><h1>报名信息列表</h1></td></tr>
    <tr align="center">
        <th> </th>
        <th>姓名</th>
        <th>性别</th>
        <th>年龄</th>
        <th>专业</th>
        <th>年级</th>
        <th>注册时间</th>
    </tr>
    <?php
    //这是啥东东。。
    //date_default_timezone_set("PRC");
    //读数据。。。
    $sql = "SELECT * FROM baoming ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $userList = array();
    while ($rs = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $userList[] = $rs;
    }
    // 循环用户列表
    foreach ($userList as $user) {
        echo "
             <tr>
              <td> " . $user['id'] . "</td>
              <td> " . $user['name'] . "</td>
              <td> " . $user['sex'] . "</td>
              <td> " . $user['age'] . "</td>
              <td> " . $user['major'] . "</td>
              <td> " . $user['grade'] . "</td>
              <td> " . $user['regdate'] . "</td>
             </tr>
          ";
    }

    ?>
</table>
</body>
</html>
<?php
//mysqli_free_result($result);
//
//mysqli_close($con);
?>