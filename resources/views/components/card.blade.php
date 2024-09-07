@props(['label'])
<div class="max-h-80 group aspect-[11/16] overflow-hidden bg-yellow-500 mx-auto">
    <div class="relative flex flex-col items-center justify-center bg-yellow-100">
        {{ $slot }}
        <p
            class="absolute top-2 left-3 font-medium text-slate-100 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            {{ $label }}
        </p>
    </div>
</div>
