<?php
$admss=$_POST["AdMss"];
$time=date('Y-m-d h:m:s');
$main=$_POST["main"];
$author=$_POST["author"];
$provence=$_POST["provence"];
$mail=$_POST['mail'];
$rand=$_POST['rand'];
if($main!=""){
    if($author!=""){
        if($provence!=""){
           if($admss=="suguohui2004"){

                $resout_userup=adminup($main,$author,$provence,$time);
                if($resout_userup==1){
                    echo "<script>alert('admin提交成功！');history.back();</script>";
                }else{
                    echo "<script>alert('提交失败，服务器接收失败请过些时日再试，你可以联系17095309470！');history.back();</script>";
                }
           }else{
                check_haveup($rand);
                $resout_userup=userup($main,$author,$provence,$time,$mail);
                if($resout_userup==1){
                    echo "<script>alert('提交成功，待审核中！请关注您的邮箱，通知将以邮件形式发送');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
                    
                }else{
                    echo "<script>alert('提交失败，服务器接收失败请过些时日再试，你可以联系17095309470！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
                }
           }
        }else{
            echo "<script>alert('请标明出处！');history.back();</script>";
        }
    }else{
        echo "<script>alert('请标明作者！');history.back();</script>";
    }
}else{
    echo "<script>alert('内容不可为空！');history.back();</script>";

}






function adminup($main,$author,$provence,$time){
    @$sql = mysqli_connect("sweb.star-xn.cn","c142a4e9z","u9lg6xc9","c142a4e9z");
     $query_coding="set names utf8";            
     mysqli_query($sql,$query_coding);
      #-------
      $query_row="SELECT * FROM oneword_2021";
      $resout_row=mysqli_query($sql,$query_row);
      $num_row=mysqli_num_rows($resout_row);
      $num_row=$num_row+1;
      #-------
      $query_inset="INSERT INTO". "`oneword_2021` (`num`, `data`, `author`, `main`, `provenance`) VALUES ('".$num_row."', '".$time."', '".$author."', '".$main."', '".$provence."')";
      $resout_inset=mysqli_query($sql,$query_inset);
      echo $resout_inset;     
      if($resout_inset=1){
        return(1);
    }else{
        return(0);
    }                                       
}
function userup($main,$author,$provence,$time,$mail){
    
    @$sql = mysqli_connect("cn-zz-bgp-4.natfrp.cloud","oneword","suguohui2004","oneword","12892");
    if(mysqli_connect_errno()){
        echo 'connect mysql server errno';
        return(0);
        exit;
    }
    $query_coding="set names utf8";
    mysqli_query($sql,$query_coding);
    #-------
    $query_row="SELECT * FROM oneword_2021";
    $resout_row=mysqli_query($sql,$query_row);
    $num_row=mysqli_num_rows($resout_row);
    $num_row=$num_row+1;
    #-------
    $query_inset="INSERT INTO". "`oneword_2021` (`num`, `data`, `author`, `main`, `provenance`, `mail`) VALUES ('".$num_row."', '".$time."', '".$author."', '".$main."', '".$provence."','".$mail."')";
    $resout_inset=mysqli_query($sql,$query_inset);
    echo $resout_inset;
    if($resout_inset==1){
        return(1);
    }else{
        return(0);
    }
}

function check_haveup($vrand)
{
    session_start();
    echo $vrand.'<br>';
    if(isset($_POST['rand'])){
        if($_POST['rand']==$_SESSION['rand']){
            echo "<script>alert('请勿重复提交或者刷新后重新提交！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
            exit;
        }else{
            $_SESSION['rand']=$_POST['rand'];
        }
        
    }
}



?>