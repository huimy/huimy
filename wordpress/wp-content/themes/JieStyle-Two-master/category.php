<?php get_header(); ?>
<div id="main">
    <div class="row box">
        <div class="col-md-8">
            <h2 class="uptop"><i class="far fa-folder"></i> <?php $current_category = single_cat_title(); ?></h2>
            <?php while ( have_posts() ) : the_post(); ?>
            <article class="article-list-1 clearfix">
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