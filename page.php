<?php get_header(); ?>
<div class="container-fluid content">
    <div class="row">
        <div class="col-lg-8">
            <main class="main">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="content-Header">
                        <h1 class="content-Title">
                            <?php the_title(); ?>
                        </h1>
                    </header>
                    <div class="content-Body">
                        <div class="content-EyeCatch">
                            <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('page_eyecatch'); ?>
                            <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/dummy-image_lg.png" alt="no image" width="1100" height="610">
                            <?php endif; ?>
                        </div>

                        
                        <?php the_content(); ?>
                        <table class="table-striped">
                            <tbody>
                                <tr>
                                    <td>住所</td>
                                    <td>〒000-0000 □□県〇〇市△△区☆☆町000</td>
                                </tr>
                                <tr>
                                    <td>電話番号</td>
                                    <td>000-000-0000</td>
                                </tr>
                                <tr>
                                    <td>営業時間</td>
                                    <td>平日 10:00〜19:00 / 土・日 9:00〜19:00<br>※受付：カットは閉店1時間前まで、カラーまたはパーマは2時間前まで</td>
                                </tr>
                                <tr>
                                    <td>休業日</td>
                                    <td>毎週月曜・第2 &amp; 第4火曜日</td>
                                </tr>
                                <tr>
                                    <td>スタッフ</td>
                                    <td>スタイリスト3名／アシスタント2名</td>
                                </tr>
                            </tbody>
                        </table>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.039827139448!2d137.73227565048458!3d34.70417539044434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ade7760d07ed9%3A0xf0a52daac3b91a51!2z5rWc5p2-!5e0!3m2!1sja!2sjp!4v1619326103946!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </article>
                <?php endwhile; endif; ?>
            </main>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>