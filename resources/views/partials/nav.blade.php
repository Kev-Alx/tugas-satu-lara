<div class="fixed w-full px-5 flex top-4 z-[9999]">
    <nav
        class="bg-white/80 dark:bg-black dark:text-gray-100 backdrop-blur-3xl py-2 px-6 flex-1 rounded-xl shadow-md dark:shadow-white/20">
        <div class="max-w-7xl flex justify-between mx-auto items-center">
            <x-logo></x-logo>
            <div class="gap-6 items-center hidden sm:flex">
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/services">Our services</x-nav-link>
                <button id="themeBtn"
                    class="border-2 border-slate-600 rounded-lg p-1.5 hover:bg-slate-100 dark:hover:bg-zinc-600">
                    <img src={{ asset('sun.svg') }} class="dark:hidden  size-7 " />
                    <img src={{ asset('moon-white.svg') }} class="hidden dark:block size-7" /></button>
                <x-primary-button>
                    <a href="/contact">Contact Us</a>
                </x-primary-button>
            </div>
            <div class="sm:hidden cursor-pointer" id="hamburger"><i class="fa-solid fa-bars"></i></div>
        </div>
        <div id="mobile-nav" class="max-w-7xl hidden mt-4 pt-2 border-t border-gray-300 mx-auto ">
            <div class="flex flex-col gap-4 items-start">
                <x-nav-link href="/" class="w-full">Home</x-nav-link>
                <x-nav-link class="w-full" href="/services">Our
                    services</x-nav-link>
                <x-nav-link class="w-full" href="/contact">Contact</x-nav-link>
                <button id="themeBtn2"
                    class="border-2 border-slate-600 rounded-lg p-1.5 hover:bg-slate-100 dark:hover:bg-zinc-600">
                    <img src={{ asset('sun.svg') }} class="dark:hidden  size-7 " />
                    <img src={{ asset('moon-white.svg') }} class="hidden dark:block size-7" /></button>
            </div>
        </div>
    </nav>
</div>

<script>
    const themeBtn = document.querySelector('#themeBtn');
    const themeBtn2 = document.querySelector('#themeBtn2');
    [themeBtn, themeBtn2].forEach(element => {
        element.addEventListener('click', () => {
            if (localStorage.theme === 'dark') {
                document.body.classList.add('light')
                document.body.classList.remove('dark')
                localStorage.theme = 'light'
            } else {
                document.body.classList.add('dark')
                document.body.classList.remove('light')
                localStorage.theme = 'dark'
            }
        })
    });
    const hamburgerBtn = document.querySelector('#hamburger')
    const mobileNav = document.querySelector('#mobile-nav')
    hamburgerBtn.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden')
    })
</script>
