<?php
    // 包含连接数据库的公共文件:
    require_once('./conn.php');
    // 判断是否提交表单：
    // 需要用到token令牌防止黑客攻击，token令牌是一个随机值，使用隐藏域表单控件存储：
    if (isset($_POST['token']) && $_POST['token'] == 'add') {
        // 获取表单提交的数据：
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $edu = $_POST['edu'];
        $salary = $_POST['salary'];
        $bonus = $_POST['bonus'];
        $city = $_POST['city'];

        // 创建查询语句：
        $sql = "insert into student values(null,'$name','$sex',$age,'$edu',$salary,$bonus,'$city')";

        if (mysqli_query($link, $sql)) {
            echo "<h2>添加信息成功</h2>";
            header("refresh:2;url=./list.php");
            die();
        } else {
            echo "<h2>添加信息失败</h2>";
            header("refresh:2;url=./list.php");
            die();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生信息管理中心</title>
</head>
<body>
    <div style="text-align:center; padding-bottom:10px;">
        <h2>学生信息管理中心</h2>
        <a href="./list.php">返回</a>
    </div>
    <form method="post" action="">
        <table width="400" align="center" bordercolor="#ccc" border="1" cellpadding="5" rules="all">
            <tr>
                <td width="80" align="right">姓名：</td>
                <td>
                    <input type="text" name="name" id="">
                </td>
            </tr>
            <tr>
                <td width="80" align="right">性别：</td>
                <td>
                    <input type="radio" name="sex" checked value="男" id="">男
                    <input type="radio" name="sex" value="女" id="">女
                </td>
            </tr>
            <tr>
                <td width="80" align="right">年龄：</td>
                <td>
                    <input type="text" name="age" value="24" id="">
                </td>
            </tr>
            <tr>
                <td width="80" align="right">学历：</td>
                <td>
                    <select name="edu" id="">
                        <option value="初中">初中</option>
                        <option value="高中">高中</option>
                        <option selected value="大专">大专</option>
                        <option value="本科">本科</option>
                        <option value="研究生">研究生</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="80" align="right">薪资：</td>
                <td>
                    <input type="text" name="salary" id="">
                </td>
            </tr>
            <tr>
                <td width="80" align="right">奖金：</td>
                <td>
                    <input type="text" name="bonus" id="">
                </td>
            </tr>
            <tr>
                <td width="80" align="right">籍贯：</td>
                <td>
                    <input type="text" name="city" id="">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="提交">
                    <!-- 隐藏域表单存储token值： -->
                    <input type="hidden" name="token" value="add">
                    <input type="reset" value="重置">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>