@extends('base.base')

@section('content')
    @include('partials.carousel')
    <section class="max-w-6xl mx-auto p-4 text-center overflow-hidden">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-gradient font-grotesk font-bold text-3xl">TIX ID</h3>
            <h2 class="font-bold text-3xl md:text-6xl font-grotesk text-balance my-3">Your Ultimate Entertainment Hub</h2>
            <p class="font-medium font-grotesk text-gray-700 md:text-lg text-balance dark:text-gray-400">Enjoy the best movie
                and entertainment,
                keep
                up to date
                with the latest
                news, and get attractive deals and
                promos!</p>
            <x-primary-button class="space-x-2 my-4"><span>Join us!</span> <i
                    class="fa-solid fa-arrow-right"></i></x-primary-button>
        </div>
        <h3 class="font-semibold text-3xl md:text-5xl  font-grotesk text-balance mt-16">Now Airing</h3>
        <div class="grid w-fit my-8 mx-auto gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
            <x-card label="Jungkook: I AM STILL">
                <img class="h-full w-full object-cover mx-auto" src={{ asset('assets/image-6.png') }} alt="">
            </x-card>
            <x-card label="Thaghut">
                <img class="h-full w-full object-cover" src={{ asset('assets/image-7.png') }} alt="">
            </x-card>
            <x-card label="Dosen Ghaib">
                <img class="h-full w-full object-cover" src={{ asset('assets/image-9.png') }} alt="">
            </x-card>
            <x-card label="Deadpool and Wolverine">
                <img class="h-full w-full object-cover" src={{ asset('assets/image-10.png') }} alt="">
            </x-card>
        </div>
        <x-primary-button>See more</x-primary-button>
        <h2 class="font-semibold text-3xl md:text-5xl  font-grotesk mt-16 mb-8 text-gradient">TIX
            NOW
        </h2>
        <div class="grid md:grid-cols-[2fr_1fr] gap-4">
            <div class="flex flex-col gap-8">
                <x-news ndate="Thursday, 05 September 2024"
                    ntitle="Monica Bellucci dan Jenna Ortega, Turut Ramaikan Film Beetlejuice Beetlejuice!"
                    description="Tim Burton belum selesai menceritakan kisah antara alam kematian dan alam manusia lewat film waralaba Beetlejuice yang pertama tayang pada 1988. Sudah sekitar 36 tahun...">
                    <img src="https://asset.tix.id/wp-content/uploads/2024/09/9eef1bf8-efb2-43b0-8941-ffff95aacbb6.webp"
                        alt="" class="w-fit h-full object-cover rounded-lg max-h-28 sm:max-h-36">
                </x-news>
                <x-news ndate="Tuesday, 03 September 2024"
                    ntitle="Arcadian: Petualangan Epik Penyelamatan Diri Nicolas Cage!"
                    description="Aktor legendaris Nicolas Cage nampaknya belum usai membintangi film-film bergenre aksi. Kali ini ia kembali lagi dengan film Arcadian yang menceritakan perjuangan seorang ayah dan...">
                    <img src="https://asset.tix.id/wp-content/uploads/2024/09/d233face-3e91-461d-a1bc-4095c5d0d49d.webp"
                        alt="" class="w-fit h-full object-cover rounded-lg max-h-28 sm:max-h-36">
                </x-news>
            </div>
            <div class="flex flex-col gap-2 items-start text-start">
                <h3 class="font-semibold ">More news</h3>
                <x-news-link>'Sumala'
                    Diangkat
                    Dari
                    Kisah Nyata Mengerikan di
                    Tahun
                    1948!</x-news-link>
                <x-news-link>Beli
                    Tiket Nonton
                    di TIX ID dan Dapetin Cashback Hingga Rp25.000
                    GoPay Coins!</x-news-link>
                <x-news-link>Apa
                    Yang Akan Kamu
                    Lakukan Jika Kamu Harus Terjerumus ke Dalam
                    Aliran Sesat?</x-news-link>
            </div>
        </div>
        <h2 class="font-semibold text-3xl md:text-5xl  font-grotesk text-balance mt-16">Our partners</h2>
        @include('partials.marquee')
    </section>
@endsection
