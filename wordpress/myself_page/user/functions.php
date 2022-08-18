<?php

define('WP_USE_THEMES', false);
define('BASE_PATH',str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../../')));//获取根目录
require(BASE_PATH.'/wp-load.php' );//关联wordpress，可以调用wordpress里的函数

function tset(){
    echo "hello";
    };
function is_loged_userinfo_massage(){
    if (is_user_logged_in()) {
        global $current_user;get_currentuserinfo();
        echo'<ul> 
        <li class="userinfo_list">
           <p> Hello,'.  $current_user->display_name . "\n".'您已登录<a href="'.get_bloginfo('wpurl').'/wp-login.php?action=logout">&nbsp;&nbsp;注销？</a></p>
           </li>
        <li class="userinfo_list">
           <p> <b>昵称：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> '.  $current_user->display_name . "\n".'</p>
           </li>
        <li class="userinfo_list">
        <p> <b>用户名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> '. $current_user->user_login .  "\n".'</p>
        </li>
        
        <li class="userinfo_list">
        <p> <b>邮箱：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> '.$current_user->user_email . "\n".'</p>
        
        </li>
        <li class="userinfo_list">
        <p> <b>个人简介：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> '.$current_user->user_description . "\n".'</p>
        
        </li>
        
        <li class="userinfo_list">
        <p> <b>注册时间：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> '. $current_user->user_registered . "\n".'</p>
        
        </li>
        <li class="userinfo_list">
        <p> <b>等级：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> '.$current_user->user_level . "\n".'</p>
        
        </li>      
     </ul>   '
    
     ;
    }else{
        echo '
        <h2>您还没有登录，<a href="'. get_bloginfo('wpurl')."/wp-admin". '">点击此处进行登录</a></h2>    

        ';
    }
}
    
?>
