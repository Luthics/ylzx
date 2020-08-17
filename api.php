<?php
    function pt($zy)
    {
        if(!empty($zy)){
            $sql="SELECT `id`, `zkz`, `name`, `xb`, `byxx` FROM `yuzhong` WHERE id like '%$zy%' or zkz like '%$zy%' or name like '%$zy%' or xb like '%$zy%' or byxx like '%$zy%'";
            //echo $sql;
        }
        else {
            $sql="SELECT `id`, `zkz`, `name`, `xb`, `byxx` FROM `yuzhong` WHERE 1";
        }
        //echo $ids,$zkzs,$names,$xbx,$byxxs;
        //1.连接数据库
        $link=mysql_connect("localhost","md","password");
            if(!$link){
                echo "数据库连接失败！".mysql_error()."<br>";
            }
        //2.选择一个数据库作为默认数据库
        mysql_select_db("md");
        //SELECT `id`, `zkz`, `name`, `xb`, `byxx` FROM `yuzhong` WHERE  id like '%刘%' or zkz like '%刘%' or name like '%刘%' or xb like '%刘%' or byxx like '%刘%'
        //3.执行SQL 查询语句，并将结果集以表格的形式输出
        //echo $sql;
        $zyult=mysql_query($sql);
        echo '<table align="center" border="2" width="800">';
        echo '<caption><h3>榆中录取名单</h3></caption>';
        echo '<tr>';
        echo '<th>中考网报号</th><th>准考证号</th><th>姓名</th><th>性别</th><th>初中毕业学校</th>';
        echo '</tr>';
        //注意：mysql_fetch_row()函数每执行一次，指针向后自动移动一位，直到最后没有数据记录返回false
        while($row=mysql_fetch_row($zyult)){
        echo '<tr align="center">';
            foreach($row as $data){
                echo "<td>{$data}</td>";
            }
        echo '</tr>';
        }
        echo '</table>';
        //4.关闭数据库资源
        mysql_close($link);
    }
    //函数部分完
    //pt(刘);
//	error_reporting(0);
    $res=$_REQUEST["res"];
    if(!empty($res)){
        $sql="SELECT `id`, `zkz`, `name`, `xb`, `byxx` FROM `yuzhong` WHERE id like '%$res%' or zkz like '%$res%' or name like '%$res%' or xb like '%$res%' or byxx like '%$res%'";
        //echo $sql;
    }
    else {
        $sql="SELECT `id`, `zkz`, `name`, `xb`, `byxx` FROM `yuzhong` WHERE 1";
    }
    //echo $ids,$zkzs,$names,$xbx,$byxxs;
    //1.连接数据库
    $link=mysql_connect("localhost","md","6CDznpjJ8i7bzd76");
        if(!$link){
            echo "数据库连接失败！".mysql_error()."<br>";
        }
    //2.选择一个数据库作为默认数据库
    mysql_select_db("md");
    //SELECT `id`, `zkz`, `name`, `xb`, `byxx` FROM `yuzhong` WHERE  id like '%刘%' or zkz like '%刘%' or name like '%刘%' or xb like '%刘%' or byxx like '%刘%'
    //3.执行SQL 查询语句，并将结果集以表格的形式输出
    //echo $sql;
    $result=mysql_query($sql);
    echo '<table align="center" border="2" width="800">';
    echo '<caption><h3>榆中录取名单</h3></caption>';
    echo '<tr>';
    echo '<th>中考网报号</th><th>准考证号</th><th>姓名</th><th>性别</th><th>初中毕业学校</th>';
    echo '</tr>';
    //注意：mysql_fetch_row()函数每执行一次，指针向后自动移动一位，直到最后没有数据记录返回false
    while($row=mysql_fetch_row($result)){
    echo '<tr align="center">';
        foreach($row as $data){
            echo "<td>{$data}</td>";
        }
    echo '</tr>';
    }
    echo '</table>';
    //4.关闭数据库资源
    mysql_close($link);
?>