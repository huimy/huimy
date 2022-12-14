<?php get_header(); ?>
<div id="main">
<?php while ( have_posts() ) : the_post(); ?>
    <article class="col-md-8 col-md-offset-2 view clearfix">
        <h1 class="view-title"><?php the_title(); ?></h1>
        <div class="view-meta">
<span>发布者: <?php the_author() ?></span>
            <span>分类: <?php the_category(',') ?></span>
            <span>发布时间: <?php the_time('Y-m-d H:i') ?></span>
            
             <span>访问量: <?php the_views() ?></span>
            <span><?php edit_post_link('<i class="far fa-edit"></i> 编辑'); ?></span>
        </div>
        <div class="view-content">
<?php the_content(); ?>
        </div>
        <section class="view-tag">
            <div class="pull-left"><i class="fas fa-tags"></i> <?php the_tags('',''); ?></div>
        </section>

        <div class="bdsharebuttonbox">
    <a href="#" class="bds_more" data-cmd="more"></a>
    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
    <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
    <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">
    </a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">
    </a>
    </div>
    
    <script>
       window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];

    </script>
        <?php if (get_option('tang_dashang') == '启用') { ?>
        <section class="support-author">
            <p><?php echo stripslashes(get_option('tang_dashang_info')); ?></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-gift"></i> 赞赏支持</button>
        </section>

        <?php } ?>
        <section id="comments">
            <?php comments_template(); ?>
        </section>
    </article>
<?php endwhile; ?>

    <section class="col-md-8 col-md-offset-2 clearfix">
    <div class="read">
        <div class="read-head"><i class="fas fa-book"></i> 更多阅读</div>
        <div class="read-list row">
            <div class="col-md-6">
                <ul>
                    <?php tangstyle_get_most_viewed(); ?>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                <?php $rand_posts = get_posts('numberposts=10&orderby=rand');  foreach( $rand_posts as $post ) : ?>
                    <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="read">
        <div class="read-head"><i class="fas fa-tags"></i> 标签云</div>
        <div class="read-list">
            <?php wp_tag_cloud();?>
        </div>
    </div>
    </section>
</div>
<!--modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content single-dashang">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fas fa-gift"></i> 赞赏支持</h4>
            </div>
            <div class="modal-body text-center">
                <p><img src="<?php echo stripslashes(get_option('tang_dashang_alipay')); ?>"><img src="<?php echo stripslashes(get_option('tang_dashang_wechat')); ?>"></p>
                <p>扫描二维码，输入您要赞赏的金额</p>
                <p>赞赏不用多，心意到了即可</p>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<?php get_footer(); ?>