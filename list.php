<?php
    // 导入连接数据库的公共文件：
    require_once('./conn.php');
    // 设计查询语句：
    $sql = "select * from student order by id desc";
    // 查询数据库：
    $result = mysqli_query($link, $sql);
    // 获取多条数据：
    $arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // 获取记录总数：
    $stuNum = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生信息管理中心</title>
    <script>
        function confirmDel (id) {
            if (window.confirm("您真的要删除吗？")) {
                location.href = './delete.php?id=' + id;
            }
        }
    </script>
</head>
<body>
    <div style="text-align:center; padding-bottom:10px;">
        <h2>学生信息管理中心</h2>
        <a href="./add.php">添加学生</a>
        共有<font color="red"><?php echo $stuNum?></font>个学生信息
    </div>
    <table width="600" border="1" align="center" rules="all" cellpadding="5">
        <tr bgcolor="#ccc">
            <th>编号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>学历</th>
            <th>工资</th>
            <th>奖金</th>
            <th>籍贯</th>
            <th>操作选项</th>
        </tr>
        <?php 
            foreach ($arrs as $arr) {
        ?>
        <tr align="center">
            <td><?php echo $arr['id']?></td>
            <td><?php echo $arr['name']?></td>
            <td><?php echo $arr['sex']?></td>
            <td><?php echo $arr['age']?></td>
            <td><?php echo $arr['edu']?></td>
            <td><?php echo $arr['salary']?></td>
            <td><?php echo $arr['bonus']?></td>
            <td><?php echo $arr['city']?></td>
            <td>
                <a href="#">修改</a> |
                <a href="#" onClick="confirmDel(<?php echo $arr['id'] ?>)">删除</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>