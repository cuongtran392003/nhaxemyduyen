<?php $object_id=get_queried_object_id(); ?>
<section class="relative w-full h-64 md:h-96 xl:h-[481px]">
            <div class="bg-black h-full inset-0">
                <div class="inset-0 h-full opacity-45"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/banneraboutus.png');">
                </div>
                <div class="absolute top-1/2 translate-x-1/2 text-white font-poppins">
                    <p class="xl:text-[45px]"> <?php echo get_the_title($object_id); ?> </p> 
                    <p class="text-[20px]"><a href="<?php echo home_url('/'); ?>">Trang chủ</a> / <?php echo get_the_title($object_id); ?></p>
                </div>
            </div>
</section>