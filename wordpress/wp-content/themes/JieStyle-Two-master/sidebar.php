<aside class="widget clearfix">
    <form id="searchform" action="<?php bloginfo('siteurl'); ?>">
        <div class="input-group">
            <input type="search" class="form-control" placeholder="搜索…" value="<?php the_search_query(); ?>" name="s">
            <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button></span>
        </div>
    </form>
</aside>
<aside class="widget clearfix">
    
    <ul class="widget-cat" style="text-align:center;">
        富强&nbsp;&nbsp;&nbsp;   民主&nbsp; &nbsp;&nbsp;   文明&nbsp; &nbsp; &nbsp;  和谐
    </ul>
    <ul class="widget-cat" style="text-align:center;">
        自由&nbsp; &nbsp;&nbsp;   平等&nbsp; &nbsp;&nbsp;   公正 &nbsp; &nbsp; &nbsp; 法治
    </ul>
     <ul class="widget-cat" style="text-align:center;">
        爱国&nbsp; &nbsp;&nbsp;   敬业 &nbsp; &nbsp;&nbsp;  诚信 &nbsp; &nbsp;&nbsp;  友善
    </ul>
     
</aside>
<aside class="widget clearfix">
    <h4 class="widget-title">文章分类</h4>
    <ul class="widget-cat">
        <?php wp_list_categories('depth=1&title_li=0&orderby=id&show_count=1'); ?>
    </ul>
</aside>
<aside class="widget clearfix">
    <h4 class="widget-title">热门文章</h4>
    <ul class="widget-hot">
        <?php tangstyle_get_most_viewed(); ?>
    </ul>
</aside>
<aside class="widget clearfix">
    <h4 class="widget-title">随机推荐</h4>
    <ul class="widget-hot">
    <?php $rand_posts = get_posts('numberposts=10&orderby=rand'); foreach( $rand_posts as $post ) : ?>
        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
    <?php endforeach; ?>
    </ul>
</aside>
<aside class="widget clearfix">
    <h4 class="widget-title">标签云</h4>
    <div class="widget-tags">
        <?php wp_tag_cloud();?>
    </div>
</aside>
<?php if (is_home() || is_front_page()) { ?>
<aside class="widget clearfix">
    <h4 class="widget-title">友情链接</h4>
    <ul class="widget-links">
        <?php wp_list_bookmarks('title_li=0&categorize=0&orderby=rating&order=desc'); ?>
    </ul>
</aside>
<?php } ?>