<style>
    @keyframes scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(calc(-100%));
        }
    }
</style>
<div class="flex overflow-hidden min-w-fit">
    <div class="flex flex-[0_0_auto] scroll w-fit animate-[scroll_10s_linear_infinite]"><img
            src="https://asset.tix.id/wp-content/uploads/2022/01/xxi.png" loading="eager" alt=""
            class="aspect-video object-contain max-w-80"><img
            src="https://assets.website-files.com/634f69e43807ee7b3741ad25/634f6d88cb905b0d0744223f_logoipsum-286%20(1).svg"
            loading="eager" alt="" class="aspect-video object-contain max-w-80"><img
            src="https://asset.tix.id/wp-content/uploads/2022/01/dana.png" loading="eager" alt=""
            class="aspect-video object-contain max-w-80"><img
            src="https://asset.tix.id/wp-content/uploads/2022/01/cgv.png" loading="eager" alt=""
            class="aspect-video object-contain max-w-80">
        <img src="https://asset.tix.id/wp-content/uploads/2022/01/vidio.png" loading="eager" alt=""
            class="aspect-video object-contain max-w-80"><img
            src="https://asset.tix.id/wp-content/uploads/2022/01/sushiroll.png" loading="eager" alt=""
            class="aspect-video object-contain max-w-80">
    </div>
</div>

<script>
    function updateMarqueDivWidth() {

        const flexContainer = document.querySelector('.marquee');
        const flexItems = document.querySelectorAll('.marquee .scroll');

        let totalWidth = 0;
        flexItems.forEach((item) => {
            totalWidth += item.offsetWidth;
        });

        flexContainer.style.width = totalWidth + 'px';

    }
    window.addEventListener('load', updateMarqueDivWidth);
    window.addEventListener('resize', updateMarqueDivWidth);
</script>
