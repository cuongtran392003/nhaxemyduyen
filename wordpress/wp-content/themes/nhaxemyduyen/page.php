<?php
defined('ABSPATH') || exit;

get_header();

// Lấy thông tin bài viết hiện tại
if (have_posts()) : the_post();

    // Lấy slug của trang hiện tại
    $slug = basename(get_permalink());

    // Tạo đường dẫn tới file template trong template-blocks
    $template_path = locate_template("template-blocks/page-{$slug}.php");

    // Hiển thị nội dung trang
    ?>

        <?php
        // Nếu tồn tại template riêng => include
        if ($template_path) {
            include $template_path;
        } else {
            // Nếu không có template riêng => hiển thị nội dung gốc
            the_content();
        }
        ?>
<?php
endif;
get_sidebar();

get_footer();
?>
