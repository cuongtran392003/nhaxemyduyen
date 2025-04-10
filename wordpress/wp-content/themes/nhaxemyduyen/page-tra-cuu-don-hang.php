<?php get_header(); ?>

<?php get_template_part('template/banner'); ?>

<!--content-->
    <section>
        <!--check_ticket-->
        <section class="flex flex-col items-center gap-y-5 mb-5">
            <div class="xl:mb-[32px]">
                <h1 class="font-poppins text-red-custom text-sm m-5
                xl:text-43 xl:mt-[73px] xl:mb-[32px]">Kiểm tra thông tin đơn hàng</h1>
                <p class="text-center text-sm xl:text-14 w-52 xl:w-[540px]">Mỹ Duyên có văn phòng thuận tiện trên các
                    khu vực xe chạy
                    qua, có thể nhận vé và nhận hàng chuyển phát giữa Sóc Trăng –
                    Sài Gòn</p>
            </div>

            <section class="flex flex-col items-center gap-y-2 font-poppins">
                <div class="flex flex-col gap-y-2
                xl:flex-row xl:gap-x-5">
                    <div class="flex flex-col gap-y-2 font-poppins text-sm
                                    xl:text-14">
                        <p class="text-red-custom">Mã đơn hàng</p>
                        <input type="text" placeholder="Nhập mã vé" name="" id="" class="outline-none bg-[#F9F6EF] p-2
                         xl:w-[582px] xl:h-[68px]">
                    </div>

                    <div class="flex flex-col gap-y-2 font-poppins text-sm
                                                    xl:text-14">
                        <p class="text-red-custom">Số điện thoại</p>
                        <input type="text" placeholder="Nhập số điện thoại" name="" id="" class="outline-none bg-[#F9F6EF] p-2
                         xl:w-[582px] xl:h-[68px]">
                    </div>
                </div>
                <button class="bg-red-custom text-white rounded-[12px] p-2
                xl:w-[278px] xl:h-[68px]">Kiểm tra đơn hàng</button>
            </section>

            <div class="flex flex-row gap-x-5 xl:gap-x-[186px]">
                <div class="flex flex-col gap-y-5 text-sm font-poppins xl:text-14">
                    <p class="text-red-custom">Bước 1: Nhập thông tin đơn hàng</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/check_cart.png" alt="" class="w-40 xl:w-[369px] xl:h-[401px]">
                </div>
                <div class="flex flex-col gap-y-5 text-sm font-poppins xl:text-14">
                    <p class="text-red-custom">Bước 2: Kiểm tra đơn hàng</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/check_cart1.png" alt="" class="w-40 xl:w-[369px] xl:h-[401px]">
                </div>
            </div>
        </section>


    </section>


<?php get_template_part('template/back-to-top'); ?>



<?php get_footer(); ?>
