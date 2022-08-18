<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="onewordupdat.css">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="/wp-content/themes/JieStyle-Two-master/images/icon_32.png">    
<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/JieStyle-Two-master/images/icon_152.png">
<link rel="apple-touch-icon" sizes="167x167" href="/wp-content/themes/JieStyle-Two-master/images/icon_167.png">
<div class="main">
    <div class="title">
        <h1 >ONE WORD UPDATA</h1>
        <H5 >每日一言提交</H5>
    
    </div>
    
    <div class="up">
        <fieldset>
            <legend>WE ARE HUIMY.TOP</legend>
                <div class="tw">
                    <form action="process.php" method="post">
                    <b >内容 <input type="text" id="main" name="main"placeholder='名言(不可空)'/></b> 
                    <p> 作者 <input type="text" id="author" name="author" placeholder='名言作者(不可空)'/></p>
                    <p>出处 <input type="text" id="provence" name="provence" placeholder='名言出处（不可空）'/></p>
                    <p>邮箱<input type="text" id="mail" name="mail" placeholder='仅用于通过审核后的通知！(可空)'/></p>
                    <p style="margin-left:-30px;"">AdMss码
                        <input type="text" id="data" style="width: 100px;" name="AdMss"placeholder='非管理员无需填写(可空)'/>
                        <p><input type="hidden" name="rand" value="<?php echo mt_rand(0,1000);?>"></p>
                        <b><input type="submit" on_click="" id="data"style="width: 68px; margin-left:6px; margin-bottom: -13;"/></b>
                    </p>
                    
                    </form>
                    <p style="color: rgba(241, 231, 221,0.9);">注:普通用户无需填写AdMss码,请忽略！</p>
                    <p style="color: rgba(241, 231, 221,0.9);margin-top:-5px;">每日一言API接口调用：<a href="https://blog.huimy.top/myself_page/onewords_api/">链接</a></p>
                    <p style="color: rgba(241, 231, 221,0.9);margin-top:-5px;">
                        有疑问？联系方式：</br> TEL:17591062686 mail:dreammonnor@huimy.top
                    </p>
                    <p style="color: rgba(171, 75, 78,0.9);margin-top:-5px;">
                        普通用户提交接口暂时关闭！
                      </p>
                </div>
        </fieldset>
    </div>
</div>
<script type="text/javascript" src="mousetx.js" color="255,255,255" opacity='0.7' zIndex="-2" count="200"></script>