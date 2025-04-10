<?php get_header(); ?>

<div id="primary" class="content-area">
    <div id="main" class="site-main">
        <?php
        if (have_posts()) : 
            while (have_posts()) : 
                the_post(); 
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-categories"><?php the_category(', '); ?></div>
                <div class="title">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span><?php the_author(); ?></span>
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                </div>
                <div class="content"><?php the_content(); ?></div>
            </article>
        <?php
            endwhile;
        else: 
            echo '<p>Không tìm thấy bài viết nào</p>';
        endif; 
        ?>
    </div>

    <?php 
$categories = get_the_category();
if ($categories) {
    $category_ids = array();
    foreach ($categories as $category) {
        $category_ids[] = $category->term_id; // Sửa term.id thành term_id
    }
    $related_posts = new WP_Query(array(
        'category__in' => $category_ids, // Sửa category_in thành category__in
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => 3,
    ));

    if ($related_posts->have_posts()) : ?>
        <div class="related_post">
            <h2>Bài viết liên quan</h2>
            <ul>
                <?php if(has_post_thumbnail()) : ?>
                    <li class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>
                <?php endif; ?>
                <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> <!-- Sửa vị trí the_title() -->
                <?php endwhile; ?>
            </ul>
        </div>
    <?php 
    wp_reset_postdata(); 
    endif; 
}
?>
</div>

<?php comments_template(); ?>

<?php get_template_part('template/back-to-top'); ?>
<?php get_footer(); ?>