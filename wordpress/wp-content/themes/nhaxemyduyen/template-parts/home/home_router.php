
<?php
 // get flied
 $slides=[];
 if(have_rows('popular_routes')){
    while(have_rows('popular_routes')){
        the_row();
        $slides[]=[
            'departure' => get_sub_field('departure') ?: 'Sài Gòn', 
            'destination' => get_sub_field('destination') ?: 'Bến Tre',
            'price' => get_sub_field('price') ?: '160.000đ',
            'time' => get_sub_field('time') ?: '1h30',
            'distance' => get_sub_field('distance') ?: '240km',
            'bus_images' => get_sub_field('bus_images'), 
        ];
    }
 }
?>

<!-- Lộ trình phổ biến -->
<section class="flex flex-col font-poppins items-center">
    <h1 class="text-sm text-red-custom m-5 xl:text-43">Lộ trình phổ biến</h1>
    <!-- Slider -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php foreach ($slides as $slide) : ?>
                <div class="swiper-slide">
                    <div class="flex flex-col gap-y-2 bg-white rounded-[20px] shadow-xl xl:w-[286px] xl:h-[398px]">
                        <div>
                            <?php
                                if($slide['bus_images'] && is_array($slide['bus_images'])){
                                    $first_image=$slide['bus_images'][0];
                                    echo '<img src="'.esc_url($first_image['url']).'" alt="Bus">';
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/nhaxemyduyen/assets/image/bus.png" alt="Bus">';
                                }
                             ?>
                        </div>
                        <div class="flex justify-between items-center text-[10px] lg:text-14 font-poppins p-2">
                            <div class="flex flex-col gap-y-2">
                                <div class="flex gap-x-2 items-center">
                                    <div class="h-2 w-2 xl:w-[17px] xl:h-[17px]">
                                        <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/diadiem1.png" alt="Departure">
                                    </div>
                                    <p><?php echo esc_html($slide['departure']); ?></p>
                                </div>
                                <div class="flex gap-x-2 items-center">
                                    <div class="w-2 h-2 xl:w-[17px] xl:h-[17px]">
                                        <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/diadiem2.png" alt="Destination">
                                    </div>
                                    <p><?php echo esc_html($slide['destination']); ?></p>
                                </div>
                            </div>
                            <hr class="border-2 border-dashed bg-[#F48124] h-[61px]">
                            <p><?php echo esc_html($slide['price']); ?></p>
                        </div>
                        <hr class="w-full border-2 border-dashed bg-[#F48124]">
                        <div class="px-2">
                            <div class="p-2 flex gap-x-2 items-center justify-center text-[10px] xl:text-14 bg-[#D9D9D9] rounded-[5px]">
                                <div class="w-5 h-5">
                                    <img src="<?php echo get_template_directory_uri(); ?>/nhaxemyduyen/assets/image/iconbus.png" alt="Bus Icon">
                                </div>
                                <p>LIMOUSINE 34 GIƯỜNG</p>
                            </div>
                        </div>
                        <div class="flex justify-between text-[10px] p-2 xl:text-[12px]">
                            <div>
                                <div class="flex gap-x-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p>Thời gian: <?php echo esc_html($slide['time']); ?></p>
                                </div>
                                <div class="flex items-center gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <p>Khoảng cách: <?php echo esc_html($slide['distance']); ?></p>
                                </div>
                            </div>
                            <button onClick="window.location.href=''"
                            class="bg-red-custom text-white rounded-[7px] p-2 xl:w-[103px] xl:h-[39px]">
                                Đặt vé
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>