<style>
    .custom-nav-swiper {
        top: var(--swiper-navigation-top-offset, 50%);
        width: calc(var(--swiper-navigation-size)/ 44 * 27);
        height: var(--swiper-navigation-size);
        margin-top: calc(0px - (var(--swiper-navigation-size)/ 2));
    }

    .left-nav {
        left: var(--swiper-navigation-sides-offset, 10px);
        right: auto;
    }

    .right-nav {
        right: var(--swiper-navigation-sides-offset, 10px);
        left: auto
    }
</style>
<div class="pt-20 sm:pt-24 lg:pt-0">
    <div class="swiper bg-slate-200 w-full lg:rounded-b-3xl  max-h-[38rem]">
        <div class="swiper-wrapper flex items-center">
            <div class="swiper-slide ">
                <img class="object-contain h-full w-full" src={{ asset('assets/slide-script.webp') }} />
            </div>
            <div class=" swiper-slide"> <img class="object-contain h-full w-full"
                    src={{ asset('assets/slide-kfc.webp') }} />
            </div>
            <div class="swiper-slide"> <img class="object-contain h-full w-full" src={{ asset('assets/dana.webp') }} />
            </div>
        </div>
        <div class="swiper-pagination"></div>

        <div class="custom-nav-swiper absolute z-10 cursor-pointer flex items-center justify-center left-nav">
            <i class="fa-solid fa-chevron-left text-white bg-gray-500/30 p-3"></i>
        </div>
        <div class="custom-nav-swiper absolute z-10 cursor-pointer flex items-center justify-center right-nav">
            <i class="fa-solid fa-chevron-right text-white bg-gray-500/30 p-3"></i>
        </div>
    </div>
</div>
<script>
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 8000
        },

        pagination: {
            el: '.swiper-pagination',
        },

        navigation: {
            nextEl: '.right-nav',
            prevEl: '.left-nav',
        },
    });
</script>
