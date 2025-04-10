<?php


function theme_setup() {
    add_theme_support('post-thumbnails'); 
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');

//css and CDN
function nhaxemyduyen_enqueue_styles(){
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0', 'all');
    wp_enqueue_style('nhaxemyduyen_output',get_template_directory_uri().'/nhaxemyduyen/src/css/output.css',array(),'1.0.0','all');
    wp_enqueue_style('swiper-css','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',array(),'11.0.0','all');
    wp_enqueue_style('nhaxemyduyen_styles',get_template_directory_uri().'/nhaxemyduyen/src/css/style.css',array(),'1.0.0','all');
    wp_enqueue_style('flatpickr-css','https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css',array(),'4.6.13','all');
    wp_enqueue_style('post-css',get_template_directory_uri().'/assets/css/post.css',array(),'1.0.0','all');
    wp_enqueue_style('single-css',get_template_directory_uri().'/assets/css/single.css',array(),'1.0.0','all');
    wp_enqueue_style('comments-css',get_template_directory_uri().'/assets/css/comments.css',array(),'1.0.0','all');
    wp_enqueue_style('sidebar-css',get_template_directory_uri().'/assets/css/sidebar.css',array(),'1.0.0','all');
} add_action('wp_enqueue_scripts','nhaxemyduyen_enqueue_styles');

// js and CDN 
function nhaxemyduyen_enqueue_scripts(){
    wp_enqueue_script('nhaxemyduyen_script',get_template_directory_uri().'/nhaxemyduyen/src/js/menu.js',array(),'1.0.0','true');
    wp_enqueue_script('nhaxemyduyen_swiper','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',array(),'11.0.0','true');
    wp_enqueue_script('nhaxemyduyen_swiperslide',get_template_directory_uri(). '/nhaxemyduyen/src/js/swiper.js',array(),'1.0.0','true');
    wp_enqueue_script('nhaxemyduyen_main',get_template_directory_uri(). '/nhaxemyduyen/src/js/main.js',array(),'1.0.0','true');
    wp_enqueue_script('nhaxemyduyen_flatpickr','https://cdn.jsdelivr.net/npm/flatpickr',array(),'4.6.13','true');
    wp_enqueue_script('nhaxemyduyen_date',get_template_directory_uri(). '/nhaxemyduyen/src/js/date.js',array(),'1.0.0','true');
} add_action('wp_enqueue_scripts','nhaxemyduyen_enqueue_scripts');

//menu
function nhaxemyduyen_register_menus(){
    register_nav_menus(
        array(
            'primary-menu' =>__('Primary Menu','nhaxemyduyen'),
        )
    );
} add_action('init','nhaxemyduyen_register_menus');



// Hàm callback tùy chỉnh để định dạng comment (tùy chọn)
function custom_comment_format($comment, $args, $depth) {
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <article class="comment-body">
            <div class="comment-meta">
                <div class="comment-author">
                    <?php echo get_avatar($comment, $args['avatar_size']); ?>
                    <span class="author-name"><?php comment_author(); ?></span>
                </div>
                <div class="comment-metadata">
                    <time datetime="<?php comment_time('c'); ?>">
                        <?php printf('%1$s lúc %2$s', get_comment_date(), get_comment_time()); ?>
                    </time>
                </div>
            </div>

            <div class="comment-content">
                <?php if ($comment->comment_approved == '0') : ?>
                    <p class="comment-awaiting-moderation">Bình luận của bạn đang chờ duyệt.</p>
                <?php endif; ?>
                <?php comment_text(); ?>
            </div>

            <div class="reply">
                <?php
                comment_reply_link(array_merge($args, array(
                    'depth' => $depth,
                    'max_depth' => $args['max_depth'],
                    'reply_text' => 'Trả lời'
                )));
                ?>
            </div>
        </article>
    </li>
    <?php
}






?>
