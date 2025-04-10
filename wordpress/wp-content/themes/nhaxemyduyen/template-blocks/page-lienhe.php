<?php get_header();?>

<?php get_template_part('template/banner'); ?>

<section class="bg-white mt-5 font-poppins">
        <div class="flex flex-row p-2 items-center justify-center">
            <div class="text-sm
            xl:w-[405px]">
                <p class="xl:text-[40px] xl:leading-normal">Need any kind of fixhero help? <span class="text-[#2277AABB]">Send us a message</span></p>
                <span class="text-[14px]">Proactively envisioned multimedia based expertisee cross-media growth strategies. Seamlessly visualize quality
                intellectual capital without superior collaboration.</span>
            </div>
            <div v class="flex flex-col items-center gap-y-5 
            bg-[#C60B12] p-2 rounded-[15px]
            xl:w-[633px] xl:px-[40px] xl:py-[40px]">
                <div class="flex flex-row gap-x-2 w-full">
                    <input type="text" placeholder="Họ và Tên" class="w-1/2
                    xl:w-[270px] xl:h-[52px] xl:text-[14px]
                     rounded-[15px] text-[10px] p-1">
                    <input type="text" placeholder="Số điện thoại" class="w-1/2
                    xl:w-[270px] xl:h-[52px] xl:text-[14px]
                     rounded-[15px] text-[10px] p-1">
                </div>
                <input type="text" placeholder="Email" class="rounded-[15px] p-1 text-[10px
                 w-full
                 xl:w-[552px] xl:h-[52px] xl:text-[14px]">
                <input type="text" placeholder="Ghi chú nội dung" class="h-28
                xl:w-[552px] xl:h-[137px] xl:text-[14px]
                rounded-[15px] p-1
                ">
                <button class="text-white text-sm flex flex-row gap-x-2 
                items-center justify-center border border-white rounded-xl
                w-32 p-1 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                    </svg>
                    Gửi tin nhắn
                </button>
            </div>
        </div>
    </section>

    <!--gg map-->
    <section class="mt-5 mb-5 relative font-poppins">
        <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/bando.png" alt="" class="w-full">
        <button class=" flex flex-row items-center absolute top-1/2 left-1/3
        xl:top-1/2 xl:left-1/2
        bg-[#76A852] text-white p-1 rounded-[15px]">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
        </svg>
            Xem bản đồ
        </button>
    </section>

<?php get_template_part('template/back-to-top'); ?>
<?php get_footer();?>
