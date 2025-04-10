<?php
// Kiểm tra nếu file được gọi trực tiếp thì thoát
if (!defined('ABSPATH')) {
    exit;
}

/*
 * Template xử lý bình luận cho theme WordPress
 */
?>

<?php
// Kiểm tra nếu bài viết được bảo vệ bằng mật khẩu mà chưa nhập mật khẩu
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number === 1) {
                printf('Một bình luận về “%s”', get_the_title());
            } else {
                printf('%s bình luận về “%s”', $comments_number, get_the_title());
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
                'callback'    => 'custom_comment_format' // Tùy chọn: sử dụng hàm callback tùy chỉnh
            ));
            ?>
        </ol>

        <?php
        // Phân trang bình luận nếu cần
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav class="comment-navigation">
                <div class="nav-previous"><?php previous_comments_link('Bình luận cũ hơn'); ?></div>
                <div class="nav-next"><?php next_comments_link('Bình luận mới hơn'); ?></div>
            </nav>
        <?php endif; ?>

    <?php endif; // Kết thúc kiểm tra have_comments() ?>

    <?php
    // Thông báo khi bình luận bị đóng
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
    ?>
        <p class="no-comments">Bình luận đã bị đóng.</p>
    <?php endif; ?>

    <?php
        $current_user=wp_get_current_user();
        $author_name=' ';
        if($current_user->ID && !user_can($current_user,'administrator')){
            $author_name=$current_user->display_name;
        } 
     ?>

    <?php
    // Form bình luận
    comment_form(array(
        'title_reply'         => 'Để lại bình luận',
        'title_reply_before'  => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'   => '</h3>',
        'comment_notes_after' => '',
        'fields' => array(
            'author' => '<div class="comment-form-author">
            <input id="author" name="author" type="text" placeholder="Tên của bạn *" 
                value="' . esc_attr($author_name ? $author_name : $commenter['comment_author']) . '" size="30" required />
            </div>',
            'email'  => '<div class="comment-form-email">
            <input id="email" name="email" type="email" placeholder="Email *" 
                value="' . esc_attr($commenter['comment_author_email']) . '" size="30" required />
            </div>',
            'url'    => '<div class="comment-form-url">
            <input id="url" name="url" type="url" placeholder="Website" 
                value="' . esc_attr($commenter['comment_author_url']) . '" size="30" />
            </div>',
        ),
        'comment_field' => '<div class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Viết bình luận của bạn..." cols="45" rows="8" required></textarea></div>',
        'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">Gửi bình luận</button>',
    ));
    ?>

</div><!-- #comments -->

<?php

?>