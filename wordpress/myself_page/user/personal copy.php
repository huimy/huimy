<?php
require('functions.php' );
get_header();?>
<link rel="stylesheet" href="./lib/user_style.css">
<link rel="stylesheet" href="./lib/media_style.css">

<div class="user_one">
    <div class="top_img">
        <div class="imgbox">
            <img src="./images/logo1.JPG" alt="">
        </div>
    </div>
    <div class="aside_le">
        <div class="user_info">
            <div class="avtor">

            <?php global $current_user;get_currentuserinfo();echo get_avatar( $current_user->user_email, 100); ?>
            <p>
            <span class="user_massage name"><?php echo $current_user->user_login . "\n"; ?></span>
            <p>
            <span class="user_massage name"><?php echo $current_user->display_name . "\n"; ?></span>
            </p>
            </div>
       
        </div>
        <div class="user_meau">
            <ul class="meau_list" style=" padding:5px !important;">

            <li><a href="#">我的信息</a></li>
            <li><a href="#">修改信息</a></li>
            <li><a href="#">我的评论</a></li>
            <li><a href="#">我的文章</a></li>
            </ul>
        </div>
    </div>
    <div class="main_ri">
        <div class="main_cont">
            <div class="num_massage">
                <h3 style="color:black; border-bottom:3px solid rgba(88, 88,88, 1) ;">数据统计</h3>
                    <ul> 
                    <li class="num_list">
                       <em>3</em>
                       <span>评论数量</span> 
                    </li>
                    <li class="num_list">
                       <em>3</em>
                       <span>评论数量</span> 
                    </li>
                    <li class="num_list">
                       <em>3</em>
                       <span>评论数量</span> 
                    </li>
                    </ul>     
            </div>
            
            <div class="userinfo_massage">
                <h3 style="color:black; border-bottom:3px solid rgba(88, 88,88, 1) ;">我的资料</h3>
                    <ul> 
                    <li class="userinfo_list">
                       <p> <b>昵称：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $current_user->display_name . "\n"; ?></p>
                    <li class="userinfo_list">
                    <p> <b>用户名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php   echo  $current_user->user_login .  "\n"; ?></p>

                    </li>
                    </li>
                    <li class="userinfo_list">
                    <p> <b>邮箱：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo  $current_user->user_email . "\n"; ?></p>
                    
                    </li>
                    <li class="userinfo_list">
                    <p> <b>个人简介：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo  $current_user->user_description . "\n"; ?></p>
                    
                    </li>
                    
                    <li class="userinfo_list">
                    <p> <b>注册时间：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo  $current_user->user_registered . "\n"; ?></p>
                    
                    </li>
                    <li class="userinfo_list">
                    <p> <b>等级：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo  $current_user->user_level . "\n"; ?></p>
                    
                    </li>
                    
                    </ul>     
            </div>
        </div>
    </div>
    <div class="bottom_tag">

    </div>
</div>


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nav.js"></script>

<div id="titleBar">
<a href="#header" class="toggle"></a>
<span class="title">hui-梦苑</span>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/util.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nav.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/skel.min.js"></script>

