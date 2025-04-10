<?php get_header(); ?>

<?php get_template_part('template/banner'); ?>

<section>
    <section class="flex flex-col gap-y-2 items-center m-5 xl:flex-row xl:gap-x-10">
        <div class="xl:w-[639px] xl:h-[420px]">
            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/bus_2.png" alt="" class="w-full h-full">
        </div>
        <div class="font-poppins xl:w-[389px]">
            <h2>TIN MỚI NHẤT</h2>
            <?php
            $posts_per_page = 1;
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => $posts_per_page,
                'post_status'    => 'publish',
                'orderby'        => 'date',
            );
            $query = new WP_Query($args);
            // Lặp qua các bài viết 
             if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
            <p class="text-sm"><?php the_title(); ?></p>
            <span class="text-sm"><?php echo wp_trim_words(get_the_excerpt(),20,'...') ?></span>
            <div class="flex flex-row items-center gap-x-2 xl:text-14">
                <button class="bg-[#649243] p-2 rounded-full text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
                <a href="<?php the_permalink(); ?>">
                <p class="text-sm">XEM THÊM</p>
                </a>
            </div>
            <?php endwhile;
            endif; ?>
        </div>
    </section>

    <!-- Details new -->
    <article class="m-5">
        <!-- List posts -->
        <div id="posts" class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            <?php
            // Lấy trang hiện tại
           $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


            $posts_per_page = 9;
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => $posts_per_page,
                'paged'          => $paged,
                'post_status'    => 'publish',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()): 
                while ($query->have_posts()): $query->the_post();
            ?>
                    <div class="post_item">
                        <a href="<?php the_permalink(); ?>" class="block">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                            <?php endif; ?>
                            <h3 class="post_title"><?php the_title(); ?></h3>
                            <p class="post_excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        </a>
                    </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div id="pagination" class="flex justify-center gap-x-2 mt-6">
            <?php
            $big = 999999999; // Giá trị lớn để thay thế trong `base`
            $pages = paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => $paged,
                'total'     => $query->max_num_pages, // Lấy số trang từ WP_Query
                'type'      => 'array', // Trả về dạng mảng
                'show_all'  => false,
                'end_size'  => 1,
                'mid_size'  => 1,
                'prev_next' => true,
                'prev_text' => '&laquo;', // Ký tự «
                'next_text' => '&raquo;', // Ký tự »
            ));

            if (!empty($pages)) {
                echo '<ul class="pagination flex space-x-2">';
                foreach ($pages as $page) {
                    echo '<li class="pagination-item">' . $page . '</li>';
                }
                echo '</ul>';
            }
            ?>
        </div>

        <?php
        else: 
            echo '<p>Không có bài viết nào</p>';
        endif;

        // Reset lại dữ liệu bài viết
        wp_reset_postdata();
        ?>
    </article>



</section>

<?php get_template_part('template/back-to-top'); ?>

<?php get_footer(); ?>