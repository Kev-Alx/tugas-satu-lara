@extends('base.base')
@section('content')
    @include('partials.bg')
    <div class="w-full h-full">
        <div class="isolate px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 font-grotesk sm:text-4xl">Contact Us</h2>
            </div>
            <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <x-input label="First name"></x-input>
                    <x-input label="Last name"></x-input>
                    <div class="sm:col-span-2">
                        <x-input label="Email" type="email"></x-input>
                    </div>
                    <div class="sm:col-span-2">
                        <x-input label="Phone number"></x-input>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                        <div class="mt-2.5">
                            <textarea name="message" id="message" rows="4"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-900 sm:text-sm  sm:leading-6"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <x-primary-button class="w-full">Submit</x-primary-button>
                </div>
            </form>
        </div>
    </div>
    <div class="dark:h-4 h-8 w-full relative">
        <div class="h-full z-10 w-full inset-0 absolute bg-gradient-to-b from-transparent to-slate-100 dark:to-zinc-900">
        </div>
    </div>
@endsection
