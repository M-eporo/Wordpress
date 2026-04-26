<?php get_header(); ?>
<div class="container-fluid content">
    <div class="row">
        <div class="col-lg-8">
            <main class="main">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                    <header class="content-Header">
                        <h1 class="content-Title">
                            <?php the_title(); ?>
                        </h1>
                        <div class="content-Meta">
                            <?php the_category(", "); ?>
                            <!-- 月別アーカイブへのリンクを設定 -->
                            <?php
                                $post_year = get_the_date('Y'); 
                                $post_month = get_the_date('m');
                            ?>
                            <a href="<?php echo get_month_link($post_year, $post_month); ?>" class="content-Meta_Date">
                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                            </a>
                        </div>
                    </header>
                    <div class="content-Body">
                        <div class="content-EyeCatch">
                            <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/dummy-image_lg.png" alt="">
                            <?php endif; ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
                    <footer class="content-Footer">
                        <?php the_tags(
                            '<ul class="content-Tags" aria-label="タグ"><li>',
                            '</li><li>',
                            '</li></ul>'
                        ); ?>
                        <nav class="content-Nav" aria-label="前後の記事">
                            <div class="content-Nav_Prev">
                                &lt; <a href="#">前のページタイトル</a>
                            </div>
                            <div class="content-Nav_Next">
                                <a href="#">次のページタイトル</a> &gt;
                            </div>
                        </nav>
                    </footer>
                </article>
                <?php endwhile; endif; ?>
            </main>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
