@extends('base.base')
@section('content')
    <section class="h-[calc(100vh-4rem)] flex flex-col items-center justify-center">
        <p class="mx-auto w-fit text-lg font-medium">Discover our</p>
        <h1 class="font-bold text-gradient text-7xl lg:text-8xl">Services</h1>
    </section>
    <section class="py-4 px-8 max-w-4xl mx-auto">
        <h2 class="text-center font-bold text-2xl lg:text-3xl font-grotesk">Latest Movies & Shows</h2>
        <p class="text-center font-medium lg:text-lg text-gray-600 dark:text-gray-400 my-6">Stay ahead of the crowd with
            up-to-date
            listings of the
            newest releases.
            Explore genres, view showtimes, and plan the
            perfect movie night.</p>
        <img src={{ asset('assets/latest.png') }} alt="" class="mb-12">
        <h2 class="text-center font-bold text-2xl lg:text-3xl font-grotesk">Seamless Ticket Booking</h2>
        <p class="text-center font-medium lg:text-lg text-gray-600 dark:text-gray-400 my-6">Booking has never been easier.
            Pick
            your
            movie, select your seats, and pay in seconds—all from the comfort of your
            device.</p>
        <img src={{ asset('assets/tiket.png') }} alt="" class="mx-auto mb-12 max-h-80">
        <h2 class="text-center font-bold text-2xl lg:text-3xl font-grotesk">Movie News, Trailers & Discounts</h2>
        <p class="text-center font-medium lg:text-lg text-gray-600 dark:text-gray-400 my-6">Catch the latest buzz with news,
            trailers, and exclusive content. Get insider looks at upcoming blockbusters and be the first to know what's hot.
        </p>
        <img src={{ asset('assets/newsf.png') }} alt="" class="mx-auto mb-12 max-h-96">
    </section>
    <section class="grid grid-cols-1 md:grid-cols-2 max-w-3xl mx-auto">
        <div class="text-center md:text-start md:py-32">
            <h2 class="font-bold font-grotesk text-2xl">What are you waiting for?</h2>
            <p class="font-medium lg:text-lg text-gray-600 dark:text-gray-400 mt-6 mb-3">Join us in</p>

            <x-primary-button class="bg-emerald-600 hover:bg-emerald-700">Google play <i
                    class="fa-brands fa-google-play ml-2"></i></x-primary-button>
            <x-primary-button class="bg-sky-500 hover:bg-sky-600">App store <i
                    class="fa-brands fa-app-store ml-2"></i></x-primary-button>

        </div>
        <img src={{ asset('assets/mock.png') }} alt="" class="mx-auto aspect-auto max-h-[28rem]">
    </section>
@endsection
