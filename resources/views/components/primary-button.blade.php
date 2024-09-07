<button
    {{ $attributes->merge(['class' => 'cursor-pointer rounded-md dark:bg-slate-100 dark:text-slate-950 dark:hover:bg-slate-200 bg-slate-950 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-slate-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600']) }}
    type="submit">{{ $slot }}</button>
