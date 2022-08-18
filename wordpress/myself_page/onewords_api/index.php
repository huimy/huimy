<?php
function sqlserach(){
    @$sql = mysqli_connect("sweb.star-xn.cn","c142a4e9z","u9lg6xc9","c142a4e9z");
    if(mysqli_connect_errno()){
        echo "Mysql connect erron</br><p>please cheack again</p>";
        exit;
    }else {
        echo "Mysql connect successfully";
    }
    mysqli_query($sql,"set names utf8");
    #------------------------------
    echo"<br><p>searching data from database...</p>";
    $query_rownum="SELECT * FROM oneword_2021";
    $result_rownum=mysqli_query($sql,$query_rownum);
    $rownum=mysqli_num_rows($result_rownum);
    echo "ROWNUM:".strval($rownum);
    #------------------------------
    $num=rand(1,$rownum);
    $query="SELECT * FROM oneword_2021 WHERE num='".$num."'";
    $result=mysqli_query($sql, $query);
    #---------------------------
    $text=mysqli_fetch_assoc($result);
    echo "</br>ONEWORD:".$text['main'];
    echo "</br>AUTHOR:".$text['author'];
    echo "</br>PROVENANCE:".$text['provenance'];
}
sqlserach();
echo "</br></br>本页面为名言调用接口页面，可以分割文本形式分割此页得到您想要用的名言数据";
?>