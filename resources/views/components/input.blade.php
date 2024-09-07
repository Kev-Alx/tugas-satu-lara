@props(['label'])
<div>
    <label for={{ $label }}
        class="block text-sm font-semibold leading-6 text-gray-900">{{ $label }}</label>
    <div class="mt-2.5">
        <input {{ $attributes }} name={{ $label }} id={{ $label }}
            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-900 sm:text-sm sm:leading-6">
    </div>
</div>
