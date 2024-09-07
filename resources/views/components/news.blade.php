@props(['ntitle', 'ndate', 'description'])
<a class="flex gap-4 items-start" href="/">
    {{ $slot }}
    <div class="flex flex-col items-start text-start gap-2">
        <h4 class="font-medium">{{ $ntitle }}</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $ndate }}</p>
        <p>{{ $description }}</p>
    </div>
</a>
