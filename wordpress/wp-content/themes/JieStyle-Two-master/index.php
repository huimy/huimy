<?php get_header(); ?>
<div id="main" ;
">
 


    <div class="row box">
        <div class="col-md-8">
<style type="text/css">

        /*标题样式*/
       p{
            text-align: center;
        }

     .imgBox{
            border-top: 2px solid cadetblue;
            width: 100%;
            height: 200px;
            
        }


		
					  
		@keyframes animated-border {
  				0% {
    				box-shadow: 0 0 0 0 rgba(25,25,25,0.4);
 					 }
  			100% {
    				 box-shadow: 0 0 0 8px rgba(255,255,255,0);
					  }
						}			  
					  
		 .boxwords {
  animation: animated-border 1.5s infinite;
  font-family: Arial;
 
  line-height: fit-content;
  font-weight: bold;
  color: black;
  border: 1px solid;
  border-radius: 10px;
  padding: 6px;
  margin-bottom:6px;
 text-align: center;
font-size:17px 
}
		
	
		.boxwords #titlew{
					 height:20px;
					  margin-top:-15px;
					  margin-left:3px;
					  margin-bottom:0px;
					  font-size:14px;
					  background:white;
					  width:110px;
					  text-align:center;
					  }	
					  .boxwords #footew{
					 height:20px;
					  margin-top:-25px;
					  margin-left:4px;
					  margin-bottom:0px;
					  font-size:14px;
					  background:white;
					  width:150px;
					  text-align:center;
					  }	     
					  
					  .lbt-list{
    
}
.lbt-list .lbt-dian li{
    width: 30px;
    height: 10px;
    border-radius: 0;
    margin: 0;
}
.lbt-list img{
    width: 100%;
    max-height: 190px;
    background-size:100% 100%;
    height:190px !important;
}
.lbt-list .carousel-control{
    top:50%;
    bottom: 50%;
    width: 5%;
    height: 190;
}
.lbt-list .left{
    background: rgba(0,0,0,0.5);
}
.lbt-list .right{
    background: rgba(0,0,0,0.5);
}


.containerM {
    width: 100%;
}

    </style>
    <script type="text/javascript">
    var index=0;
    //改变图片
    function ChangeImg() {
        index++;
        var a=document.getElementsByClassName("img-slide");
        if(index>=a.length) index=0;
        for(var i=0;i<a.length;i++){
            a[i].style.display='none';
        }
        a[index].style.display='block';
    }
    //设置定时器，每隔两秒切换一张图片
    setInterval(ChangeImg,4000);
</script>
    <div class="imgBox">
      
        <div class="containerM mg-top">
        <div class="rowM pd-lr-1 lbt-list">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators lbt-dian">
                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item">
                  <img alt="First slide [900x500]" src="<?php echo get_bloginfo('url')?>/myself/index/logo5.jpg">
                </div>
                <div class="item">
                  <img alt="Second slide [900x500]" src="<?php echo get_bloginfo('url')?>/myself/index/logo21.jpg">
                </div>
                <div class="item active">
                  <img alt="Third slide [900x500]" src="<?php echo get_bloginfo('url')?>/myself/index/logo1.jpg">
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
       
    </div>
    
    
    <div class="boxwords">	
        <?php
            $word=MY_oneword();
            echo "<b>".$word['main']."</b>"."<p style='text-align:right; margin-left:-10;'>----".$word['author']."</p>";
        ?>
    <h4 id="footew"><a href="https://blog.huimy.top/myself_page/onewords_api">API调用</a>&nbsp;|&nbsp; <a href="https://blog.huimy.top/myself_page/onewords_out/">提交名言</a>     </h4>

    </div>

<?php while ( have_posts() ) : the_post(); ?>
            <?php if ( is_sticky() ) : ?>

            <h2 class="uptop"><i class="fas fa-arrow-circle-up"></i> <a href="<?php the_permalink() ?>" target="_blank"><?php the_title(); ?></a></h2>
            <?php else : ?>
            <article class="article-list-1 clearfix" >
                <header class="clearfix">
                    <h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    <div class="post-meta">
                        <span class="meta-span"><i class="far fa-calendar-alt"></i> <?php the_time('m月d日') ?></span>
                        <span class="meta-span"><i class="far fa-folder"></i> <?php the_category(',') ?></span>
                        <span class="meta-span"><i class="fas fa-comments"></i> <?php comments_popup_link ('没有评论','1条评论','%条评论'); ?></span>
                        <span class="meta-span hidden-xs"><i class="fas fa-tags"></i> <?php the_tags('',',',''); ?></span>
                        <span class="meta-span"> <i class="far fa-eye"></i> <?php the_views() ?></span>
                    </div>
                </header>
                <div class="post-content clearfix">
                    <p><?php echo mb_strimwidth(strip_tags(apply_filters('content', $post->post_content)), 0, 200,"..."); ?></p>
                </div>
            </article>
            <?php endif; ?>
            <?php endwhile; ?>
            <nav style="float:right">
                <?php pagination($query_string); ?>
            </nav>
        </div>
        <div class="col-md-4 hidden-xs hidden-sm">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>