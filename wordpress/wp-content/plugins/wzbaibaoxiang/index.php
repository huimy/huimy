
		<div class="websitebox_box">
		
			<div class="websitebox_news">
				<ul>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox' ); ?>" class="websitebox_adm"><li>常规设置</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=11' ); ?>" ><li>WP优化</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=1' ); ?>"><li>侧边客服</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=9' ); ?>" ><li>手机客服</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=3' ); ?>"><li>留言板</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=4' ); ?>"><li>网站背景</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=5' ); ?>"><li>提示框</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=6' ); ?>"><li>滚动公告</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=7' ); ?>"><li>图片水印</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=8' ); ?>"><li>三合一</li></a>
					<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=10' ); ?>"><li>鼠标特效</li></a>
					<!--<a href="<?php echo admin_url( 'admin.php?page=websitebox&book=12' ); ?>"><li>常见问题</li></a>-->
				</ul>
			</div>
			<div class="websitebox_centen">
			    <form class="layui-form" action="" lay-filter="example" onsubmit="return false">
				<div class="websitebox_cenh3">
					 <span>常规设置</span>
					 <input type="hidden" name="websitebox" value="1">
				  	 <input type="hidden" name="action" value="websitebox">
				  	 <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('websitebox');?>">
					 <button type="submit" class="layui-btn websitebox_bot" lay-submit="" lay-filter="demo1">保存设置</button>
				</div>
					  <div class="layui-form-item websitebox_bor" pane="">
					     <label class="layui-form-label">网页宠物</label>
					     <div class="layui-input-block">
					         <?php 
					            if(isset($websitebox_base['zoo']) && ($websitebox_base['zoo']==1)){
					                echo '<input type="checkbox" name="zoo" lay-skin="switch" lay-text="开|关" checked="">';
					            }else{
					                echo '<input type="checkbox" name="zoo" lay-skin="switch" lay-text="开|关">';
					            }
					       ?>
					  	  <span class="websitebox_zxc">选择是否显示网页宠物</span>
					     </div>
					   </div>
						 <div class="layui-form-item websitebox_bor" pane="">
							<label class="layui-form-label">启用哀悼色</label>
							<div class="layui-input-block">
							    <?php 
					            if(isset($websitebox_base['grey']) && ($websitebox_base['grey']==1)){
					                echo '<input type="checkbox" name="grey" lay-skin="switch" lay-text="开|关" checked="">';
					            }else{
					                echo '<input type="checkbox" name="grey" lay-skin="switch" lay-text="开|关">';
					            }
					       ?>
							  <span class="websitebox_zxc">选择是否启用暮色插件 启动后网站全部内容变为灰白色</span>
							</div>
						  </div>
				     <div class="layui-form-item websitebox_bor" pane="">
						<label class="layui-form-label">禁止复制</label>
						<div class="layui-input-block">
						     <?php 
					            if(isset($websitebox_base['copy']) && ($websitebox_base['copy']==1)){
					                echo '<input type="checkbox" name="copy" lay-skin="switch" lay-text="开|关" checked="">';
					            }else{
					                echo '<input type="checkbox" name="copy" lay-skin="switch" lay-text="开|关">';
					            }
					       ?>
						  <span class="websitebox_zxc">选择是否启用禁止复制 启动后网站全部内容禁止复制</span>
						</div>
				     </div>
					 <div class="layui-form-item websitebox_bor" pane="">
						<label class="layui-form-label">禁止查看源码</label>
						<div class="layui-input-block">
						     <?php 
					            if(isset($websitebox_base['look']) && ($websitebox_base['look']==1)){
					                echo '<input type="checkbox" name="look" lay-skin="switch" lay-text="开|关" checked="">';
					            }else{
					                echo '<input type="checkbox" name="look" lay-skin="switch" lay-text="开|关">';
					            }
					       ?>
						  <span class="websitebox_zxc">开启后，鼠标右键失效，不会让查看任何代码信息及右键信息内容。</span>
						</div>
					 </div>
					 <div class="layui-form-item websitebox_bor" pane="">
							<label class="layui-form-label">启动弹幕</label>
							<div class="layui-input-block">
							    <?php 
					            if(isset($websitebox_base['barrage']) && ($websitebox_base['barrage']==1)){
					                echo '<input type="checkbox" name="barrage" lay-skin="switch" lay-text="开|关" checked="">';
					            }else{
					                echo '<input type="checkbox" name="barrage" lay-skin="switch" lay-text="开|关">';
					            }
					       ?>
							  
							  <span class="websitebox_zxc">文章内页评论弹幕</span>
							</div>
					</div>
				    <div class="layui-form-item websitebox_bor" pane="">
							<label class="layui-form-label">文章定时发布</label>
							<div class="layui-input-block">
							    <?php 
					            if(isset($websitebox_base['art_cron']) && ($websitebox_base['art_cron']==1)){
					                echo '<input type="checkbox" name="art_cron" lay-skin="switch" lay-text="开|关" checked="">';
					            }else{
					                echo '<input type="checkbox" name="art_cron" lay-skin="switch" lay-text="开|关">';
					            }
					       ?>
							  
							  <span class="websitebox_zxc">开启后，如果wordpress定时发布失败，自定检测，再次执行</span>
							</div>
					</div>
				</form>
			</div>		
		</div>
		

		
		<style>
		*{
			padding: 0;
			margin: 0;
			text-decoration: none;
		}
		.tj_lianjie{
			width:100%;
			margin: 0 auto;
			display: flex;
			justify-content: space-between;
		}
		.tj_lianjie1 a{
			display: block;
			width:550px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			height: 150px;
			padding:10px;
			box-shadow: 6px 4px 10px #ccc;
			border-radius: 4px;
		}
		.tj_lianjie1 a>div{
			width:100%;
			display: flex;
			justify-content: space-between;
		}
		.tj_logo{
			width:120px;
			height:120px;
			margin-right:10px;
		}
		.tj_neirong h2{
			font-size:16px;
			line-height:30px;
			color: #000000;
		}
		.tj_neirong  p{
			font-size:12px;
			color: #000000;
		}
		.tj_neirong  span{
			font-size:14px;
			color: #000000;
		}
		.tj_anzhuang{
			width: 120px;
			height: 24px;
			border: 1px solid #ccc;
			text-align: center;
			line-height: 24px;
			border-radius: 3px;		
	    }
		.layui-btn {
		    background-color: #007DDB;
		}
		.layui-form-onswitch {
		    border-color: #007DDB;
            background-color: #007DDB;
		}
		#wpwrap {
		    background-color: #fff;
		}
		
	</style>
		<div style="width: 1200px;padding: 10px;">
		  <h2 style="line-height: 40px;font-size: 16px;font-weight: 600;">相关推荐</h2>
		  <div class="tj_lianjie">
		  <div class="tj_lianjie1">
			  <a href="/wp-admin/plugin-install.php?tab=plugin-information&plugin=baiduseo&TB_iframe=true&width=772&height=524">
				  <div class="tj_neirong">
					 <img src="<?php echo plugin_dir_url( WEBSITEBOX_FILE ); ?>images/icon-256x256.png" class="tj_logo"> 
					   <div>
						   <h2>百度站长SEO合集</h2>
						   <p>含百度站长、百度地图sitemap、关键词排名查询监控、网站蜘蛛、robots、图片alt标签、天级推送、死链查询、百度自动推送、批量提交URL到站长、百度收录查询、批量推送未收录、301/404等功能。</p>
						   <span>作者:沃之涛科技</span>
					   </div>
					   <div class="tj_anzhuang">
						   <span>安装</span>
					   </div> 
				  </div>
				   
			  </a>
		  </div>
		  <div class="tj_lianjie1">
			  <a href="/wp-admin/plugin-install.php?tab=plugin-information&plugin=auto-reply-wechat">
				  <div class="tj_neirong">
					 <img src="<?php echo plugin_dir_url( WEBSITEBOX_FILE ); ?>images/icon_weixin.png" class="tj_logo"> 
					   <div>
						   <h2>公众号自动回复</h2>
						   <p>本插件适用于订阅号（未认证也可以）、服务号。根据关键词自动获取网站相关文章：用户通过公众号发送关键词，公众号即可根据用户的关键词读取wordpress网站内相关的内容，推送URL回复用户。</p>
						   <span>作者:沃之涛科技</span>
					   </div>
					   <div class="tj_anzhuang">
						   <span>安装</span>
					   </div> 
				  </div>
			  </a>
		  </div>
	  </div>
		</div> 
	<script>
	jQuery(document).ready(function($){
    	layui.use(['form', 'layer'], function(){
        	  var form = layui.form
        	  ,layer = layui.layer;
        	 form.on('submit(demo1)', function(data){
        	     var index = layer.load(1, {
                    shade: [0.7,'#111'] //0.1透明度的白色背景
                });
    		  	$.ajax({
    		  		url:'',
    		  		data:{data:JSON.stringify(data.field)},
    		  		type:'post',
    		  		dataType:'json',
    		  		success:function(data){
    		  		    layer.close(index);
    		  			if(data.msg==3){
    		  				layer.confirm('该功能,点击‘确定’后登录官网进行授权', {
    						  btn: ['确定','取消'] //按钮
    						}, function(){
    						  window.location.href='https://www.rbzzz.com/qxcp.html';
    						}, function(){
    					  
    						});
    		  			}else if(data.msg==1){
    		  				layer.alert('保存成功');
    		  			}else{
    		  				layer.msg('保存失败，请刷新后重试');
    		  			}
    		  		}
    		  	})
    		    return false;
    		});
    	});
	})
	</script>

