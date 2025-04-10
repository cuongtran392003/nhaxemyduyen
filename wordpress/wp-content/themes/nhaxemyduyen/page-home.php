<?php get_header();?>
        <!--banner-->
    <section>
        <div class="xl:relative">
            <img src="<?php echo get_template_directory_uri();?>/nhaxemyduyen/assets/image/banner.png" alt="">
            <?php get_template_part('template-parts/home/home_searchticket'); ?>
        </div>

    </section>
    <!--content-->
    <section class="bg-body">
        <!--de dang dat ve-->
        <section class="flex flex-col items-center font-poppins">
            <h1 class="text-red-custom text-sm text-center m-5
            xl:text-43 xl:mt-[100px] xl:mb-[38px]">
                Dễ dàng đặt vé trên website Mỹ Duyên
            </h1>
            <div class="flex gap-x-2">
                <div class="text-sm text-white border rounded-[20px] 
                bg-gradient-to-tr from-blue-custom-0 to-blue-custom-1 p-2
                xl:flex xl:items-center xl:gap-x-2 xl:w-[283px] xl:h-[166px] ">
                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/chonchuyen.png" alt="" class="xl:w-[60px] xl:h-[60px]">
                    <p>Tìm kiếm <br>Chọn thông tin hành trình</p>
                </div>
                <div class="text-sm text-white border rounded-[20px] 
                                bg-gradient-to-tr from-green-custom-0 to-green-custom-1 p-2
                                xl:flex xl:items-center xl:gap-x-2 xl:w-[283px] xl:h-[166px] ">
                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/chonchuyen.png" alt="" class="xl:w-[60px] xl:h-[60px]">
                    <p>Chọn chuyến <br>Chọn chuyến phù hợp ấn " Đặt Chỗ "</p>
                </div>
                <div class="text-sm text-white border rounded-[20px] 
                                bg-gradient-to-tr from-blue-0 to-blue-1 p-2
                                xl:flex xl:items-center xl:gap-x-2 xl:w-[283px] xl:h-[166px] ">
                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/thanhtoan.png" alt="" class="xl:w-[60px] xl:h-[60px]">
                    <p>Thanh toán<br>Chọn cổng thanh toán ấn " Thanh toán "</p>
                </div>
                <div class="text-sm text-white border rounded-[20px] 
                                bg-gradient-to-tr from-orange-custom-0 to-orange-custom-1 p-2
                                xl:flex xl:items-center xl:gap-x-2 xl:w-[283px] xl:h-[166px] ">
                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/datve.png" alt="" class="xl:w-[60px] xl:h-[60px]">
                    <p>Đặt vé<br>Nhận thông tin về thành công và lên xe</p>
                </div>
            </div>
        </section>

        <!--lo trinh pho bien -->
        <?php get_template_part('template-parts/home/home_router'); ?>
        <!--cai dat app-->
        <section class="relative mt-10 bg-blue-custom-0 flex flex-row w-full h-72
        xl:w-full xl:h-[568px] xl:rounded-tl-[280px] xl:mt-[160px]
         justify-between rounded-tl-[100px]">
            <div class="flex flex-col gap-y-3 items-center w-40 justify-center 
            font-poppins text-white text-center 
            xl:ml-40 xl:mt-[101px] xl:w-[409px]
            ">
                <h2 class="text-sm xl:text-43 xl:leading-normal">Cài đặt App đặt vé Mỹ Duyên</h2>
                <p class="text-[10px] xl:text-14">Cài đặt nhanh ứng dụng để đặt vé từ Sài gòn- Sóc trăng ngay hôm nay
                </p>
                <h3 class="text-sm xl:text-43">Tải App và cài đặt </h3>
                <button class="w-14 xl:w-[294px]"><img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/googleplay.png" alt=""></button>
                <button class="w-14 xl:w-[294px]"><img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/appstore.png" alt=""></button>
            </div>
            <div class="w-48 absolute -top-10 right-0
            xl:w-[376px] xl:h-[664.1038818359375px] xl:right-72">
                <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/phone2.png" alt="">
            </div>
            <div class="hidden xl:block">
                <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/phone1.png" alt="">
            </div>
        </section>

        <!--dich vu hanh khach-->
        <section class="flex flex-col gap-y-5 items-center font-poppins xl:mt-[66px]">
            <h1 class="text-red-custom font-poppins text-sm xl:text-43 ">Dịch vụ hành khách</h1>
            <section class="xl:flex xl:flex-row xl:gap-x-[37px]">
                <article class="flex flex-col gap-y-2">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tintuc3.png" alt="" class="xl:w-[375px] xl:h-[267px]"></div>
                    <p class="text-sm xl:text-[25px]">Tiện ích cao cấp</p>
                    <p class="text-[10px] w-60 xl:w-[373px] xl:text-14">Mỹ Duyên có quy mô xe lớn, có hệ thống dòng xe
                        limousine đời mới, hiện đại
                        trên tuyến. Đem lại sự
                        sang trọng và đầy đủ
                        tiện ích như ghế nằm, nước uống, máy lạnh…</p>
                    <hr class="w-60 h-2 border-2 bg-red-custom">
                    <div class="w-60 xl:text-14">
                        <div class="flex gap-x-2 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tick.png" alt="">
                            <p class="text-[10px]">Toàn bộ xe được trang bị nội thất tốt đẹp</p>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tick.png" alt="">
                            <p class="text-[10px]">Toàn bộ xe được trang bị nội thất tốt đẹp</p>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tick.png" alt="">
                            <p class="text-[10px]">Toàn bộ xe được trang bị nội thất tốt đẹp</p>
                        </div>
                    </div>
                </article>
                <article class="flex flex-col gap-y-2">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tintuc3.png" alt="" class="xl:w-[375px] xl:h-[267px]"></div>
                    <p class="text-sm xl:text-[25px]">Đáp ứng mọi khung giờ</p>
                    <p class="text-[10px] w-60 xl:w-[373px]  xl:text-14">Mỹ Duyên cung cấp tới khách hàng các khung giờ
                        đẹp và hợp lý. Tổng đài của
                        chúng tôi luôn sẵn sàng hỗ trợ khách hàng,
                        mang lại sự tiện lợi và thoải mái cho khách hàng trong quá trình sử dụng dịch vụ.</p>
                    <hr class="w-60 h-2 border-2 bg-red-custom">
                    <div class="w-60">
                        <div class="flex gap-x-2 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tick.png" alt="">
                            <p class="text-[10px]">Đáp ứng khung giờ phù hợp nhiều loại khách</p>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tick.png" alt="">
                            <p class="text-[10px]">Hoạt động từ 4h sáng - 24h hằng ngày</p>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tick.png" alt="">
                            <p class="text-[10px]">Tư vấn tại hotline 02862 77 55 44</p>
                        </div>
                    </div>
                </article>
                <article class="flex flex-col gap-y-2">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tintuc3.png" alt="" class="xl:w-[375px] xl:h-[267px]"></div>
                    <p class="text-sm xl:text-[25px]">Dịch vụ đẳng cấp</p>
                    <p class="text-[10px] w-60 xl:w-[373px]  xl:text-14">Đội ngũ nhân viên nhà xe phục vụ chuyên nghiệp.
                        Mỹ Duyên luôn đặt chất lượng
                        dịch vụ lên hàng đầu với khẩu hiệu “Chất
                        lượng là danh dự”. Mỹ Duyên là thương hiệu vận tải hàng đầu trong tuyến Sóc Trăng.</p>
                    <hr class="w-60 h-2 border-2 bg-red-custom">
                    <div class="w-60">
                        <div class="flex gap-x-2 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tick.png" alt="">
                            <p class="text-[10px]">Điểm đón, trả đa dạng, phù hợp với nhu cầu của khách hàng</p>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tick.png" alt="">
                            <p class="text-[10px]">Nhân viên nhà xe được đào tạo chuyên nghiệp</p>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/tick.png" alt="">
                            <p class="text-[10px]">Đặt vé và thanh toán qua nhiều hình thức khác nhau</p>
                        </div>
                    </div>
                </article>
            </section>
        </section>

        <!-- dich vu hang hoa-->
        <section class="flex flex-col gap-y-[122px] items-center text-white bg-red-custom
          xl:mt-[80px] xl:h-[549px]">
            <h1 class="font-poppins text-sm xl:text-43 xl:my-[54px]">Dịch vụ hàng hóa</h1>
            <article class="flex flex-col gap-y-5
            xl:flex-row xl:gap-x-3 
             ">
                <div class="flex flex-col gap-y-2 items-center justify-center w-60 text-center 
                border-2 border-white
                xl:relative xl:w-[378px] xl:h-[230px]">

                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/boithuong.png" alt=""
                        class="xl:w-[127px] xl:h-[141px] xl:bg-red-custom xl:absolute -top-[110px]">

                    <p>Bồi thường thất lạc</p>
                    <p>Khách hàng sẽ nhận bồi thường khi hàng hóa bị mất thiếu hoặc hàng hóa</p>
                </div>
                <div class="flex flex-col gap-y-2 items-center justify-center w-60 text-center 
                                border-2 border-white
                                xl:relative xl:w-[378px] xl:h-[230px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/hoatoc.png" alt=""
                        class="xl:w-[127px] xl:h-[141px] xl:bg-red-custom  xl:absolute -top-[80px]">
                    <p>Giao hàng hỏa tốc</p>
                    <p>Đảm bảo giao hàng nhanh chóng trong khu vực nội thành Sài Gòn và Sóc Trăng</p>
                </div>
                <div class="flex flex-col gap-y-2 items-center justify-center w-60 text-center 
                                border-2 border-white
                                xl:relative xl:w-[378px] xl:h-[230px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/cod.png" alt=""
                        class="xl:w-[127px] xl:h-[141px] xl:bg-red-custom  xl:absolute -top-[90px]">
                    <p>Thu hộ COD</p>
                    <p>Nhận thu hộ (COD) cho hàng hóa chuyển phát, chuyển tiền trong ngày.</p>
                </div>
            </article>
        </section>

        <!--hinh anh nha xe-->
        <section class="flex flex-col items-center">
            <h1 class="font-poppins text-red-custom text-sm xl:my-[53px] xl:text-43">Hình ảnh nhà xe</h1>
            <!--hinh anh-->
            <section class="w-full xl:max-w-full">
                <div class="swiper imageSwiper h-20 xl:h-[159px]">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/image (1).png" alt="Slide 1" class="w-20 h-20 object-cover">
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/image (2).png" alt="Slide 2" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/image (3).png" alt="Slide 3" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/image (4).png" alt="Slide 4" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/image (5).png" alt="Slide 5" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/image (5).png" alt="Slide 6" class="w-full h-full object-cover">
                        </div>
                    </div>

                </div>
            </section>

            <!--hotline-->
            <section class="flex flex-col gap-y-5 items-center font-poppins p-5
            xl:flex-row xl:items-center xl:gap-x-3 xl:justify-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/hotline.png" alt="">
                </div>
                <div class="flex flex-col gap-y-2">
                    <h1 class="text-red-custom text-xl xl:text-43">Hotline dịch vụ</h1>
                    <p class="text-sm xl:text-14">Hotline dịch vụ của Mỹ Duyên hoạt động 24/7. Chúng tôi luôn sẵn sàng
                        phục vụ khách hàng</p>
                    <div class="text-sm flex flex-col gap-y-2 xl:text-14">
                        <div class="flex flex-row gap-x-2 items-center">
                            <div class="bg-blue-custom-0 p-2 text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                            </div>
                            <p>Hotline đặt vé: 1900 6746</p>
                        </div>
                        <div class="flex flex-row gap-x-2 items-center">
                            <div class="bg-blue-custom-0 p-2 text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                            </div>
                            <p>Hotline gửi hàng: 1900 0257</p>
                        </div>
                        <div class="flex flex-row gap-x-2 items-center">
                            <div class="bg-blue-custom-0 p-2 text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                            </div>
                            <p>Hotline gửi hàng: 1900 0257</p>
                        </div>
                        <div class="flex flex-row gap-x-2 items-center">
                            <div class="bg-blue-custom-0 p-2 text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                            </div>
                            <p>Hotline gửi hàng: 1900 0257</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!--tin tuc noi bat-->
        <?php get_template_part('template-parts/home/home_news'); ?>


    </section>

    <?php get_template_part('template/back-to-top'); ?>

    <?php get_footer(); ?>

