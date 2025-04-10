<section class="flex flex-col gap-y-2 p-2 
         font-poppins text-sm
         xl:flex-row xl:gap-x-2 xl:justify-center
         ">
    <?php 
    // Truy vấn bài viết mới nhất
    $args = array(
        'posts_per_page' => 4, 
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) : 
        $first_post = true;
        while ($query->have_posts()) : $query->the_post();
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
            if (!$image_url) {
                $image_url = get_template_directory_uri() . '/nhaxemyduyen/assets/image/bus2.png'; 
            }
    ?>
    
    <?php if ($first_post) :  ?>
    <div>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" class="xl:w-[593px]" style="border-radius:10px;">
        <div class="xl:w-[576px]">
            <p class="text-blue-custom-0 my-2"><?php the_title(); ?></p>
            <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
        </div>
        </a>
    </div>
    <div class="flex flex-col gap-y-2">
    <?php 
        $first_post = false;
        else : 
    ?>
        <a href="<?php the_permalink(); ?>">
            <div class="flex flex-row gap-x-2">
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" class="w-40 xl:w-[238px] xl:h-[187px]"
            style="border-radius:10px;">
            <div class="xl:w-[317px]">
                <p class="text-blue-custom-0 my-2"><?php the_title(); ?></p>
                <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
            </div>
        </div>
        </a>
    <?php endif; endwhile; ?>
    </div>
    <?php endif; wp_reset_postdata(); ?>
</section>
