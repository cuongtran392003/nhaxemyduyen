<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
    <header class="xl:h-[166px] ">
        <nav class="flex justify-between items-center w-full p-5 xl:py-5 xl:px-[120px] ">
            <!--logo-->
            <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/image14.png" alt="">
            <!--lien he-->
            <div class="hidden md:block">
                <ul class="flex text-[14px] xl:gap-x-5 xl:font-sans  ">
                    <li>
                        <div class="w-[165px] h-[41px] xl:w-[165px] 
                        xl:h-[41px] 
                        flex items-center gap-x-2 p-2 border border-black rounded-[100px]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            <p class="">02862 77 55 44</p>
                        </div>
                    </li>
                    <li>
                        <button class="xl:w-[135px] xl:h-[41px] rounded-[100px] text-white bg-red-500">
                            <a href="<?php echo home_url('/tra-cuu-ve/') ?>"><p class="">TRA CỨU VÉ</p></a>
                        </button>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/tra-cuu-don-hang/') ?>"><button class="xl:w-[181px] xl:h-[41px] rounded-[100px] text-white bg-red-500">TRA CỨU ĐƠN
                            HÀNG</button></a>
                    </li>
                </ul>
            </div>
            <!--menu-->
            <div id="menuBtn" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
        </nav>
        <!--menu dieu huong-->
        <section id="menu" class="invisible absolute w-3/4 transition-all duration-500 ease-in-out
        xl:static xl:visible xl:w-full 
        font-poppins ">
            <ul class="flex flex-col gap-y-10 xl:flex-row
            xl:justify-center xl:gap-x-[78px] xl:gap-y-[39px]
            text-[14px] p-2">
                <li><a href="<?php echo home_url('/') ?>">
                        TRANG CHỦ
                    </a></li>
                <li id="gt" class="flex gap-x-2 relative">
                    <button href="">GIỚI THIỆU</button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                    <div id="dr-gt" class="absolute left-28
                    text-black bg-white hidden
                    xl:top-10 xl:left-0 xl:w-[190px] xl:z-10">
                        <ul>
                            <li class="hover:bg-red-custom hover:text-white xl:p-2"><a href="<?php echo home_url('/ve-chung-toi/') ?>">VỀ CHÚNG TÔI</a></li>
                            <hr class="bg-red-custom h-0.5">
                            <li class="hover:bg-red-custom hover:text-white xl:p-2"><a href="<?php echo home_url('/he-thong-van-phong/') ?>">HỆ THỐNG VĂN PHÒNG</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li id="dv" class="flex gap-x-2 relative">
                    <button href="">DỊCH VỤ</button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                    <div id="dr-dv" class="absolute left-28
                                        text-black bg-white hidden
                                        xl:top-10 xl:left-0 xl:w-[190px] xl:z-10">
                        <ul>
                            <li class="hover:bg-red-custom hover:text-white xl:p-2"><a href="<?php echo home_url('/dich-vu-van-tai-hanh-khach/') ?>">DỊCH VỤ VẬN TẢI HÀNH
                                    KHÁCH</a></li>
                            <hr class="bg-red-custom h-0.5">
                            <li class="hover:bg-red-custom hover:text-white xl:p-2"><a href="<?php echo home_url('/dich-vu-van-tai-hang-hoa/') ?>">DỊCH VỤ VẬN TẢI HÀNG
                                    HÓA</a></li>
                        </ul>
                    </div>
                </li>
                <li id="tc" class="flex gap-x-2 relative">
                    <button href="">TRA CỨU</button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                    <div id="dr-tc" class="absolute left-28
                                        text-black bg-white hidden
                                        xl:top-10 xl:left-0 xl:w-[190px] xl:z-10">
                        <ul>
                            <li class="hover:bg-red-custom hover:text-white xl:p-2"><a href="<?php echo home_url('/tra-cuu-ve/') ?>">TRA CỨU VÉ</a></li>
                            <hr class="bg-red-custom h-0.5">
                            <li class="hover:bg-red-custom hover:text-white xl:p-2"><a href="<?php echo home_url('/tra-cuu-don-hang/') ?>">TRA CỨU ĐƠN HÀNG</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?php echo home_url('/tintuc/') ?>">
                        TIN TỨC
                    </a></li>
                <li><a href="<?php echo home_url('/lienhe/') ?>">
                        LIÊN HỆ
                    </a></li>
                <li class="flex items-center gap-x-2">
                    <a href="<?php echo home_url('/tuyen-dung/') ?>">
                        TUYỂN DỤNG
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </li>
            </ul>
        </section>
    </header>
