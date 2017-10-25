<?php
require_once "inc/dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="addDo.php" method="post">
    <input type="hidden" name="user_id" value=" "/>
    <table width="444" border="1" align="center">
        <tr>
            <td>用户名</td>
            <td><input type="text" name="user_name" size="10"/></td>
        </tr>
        <tr>
            <td>性别</td>
            <td><input type="radio" name="sex" value="男" checked="checked"/> 男<input type="radio" name="sex" value="女"/>
                女
            </td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="text" name="age" size="3"/></td>
        </tr>
        <tr>
            <td>年级</td>
            <td><input type="text" name="grade" size="44"/></td>
        </tr>
        <tr>
            <td>专业</td>
            <td><input type="text" name="major" size="44"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="填写完毕，点击报名"/></td>
        </tr>
    </table>

</form>
</body>
</html>
