@props([
    'tag' => '',
    'href' => '#',
])
@if($tag == 'a')
   <a {{ $attributes->merge(['class' => 'inline-flex item-items-center px-4 py-2 bg-bg-white dark:bg-gray-800 border-gray-300 dark:border-gray-500 rounded-md font-font-semibold text-xs text-bg-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-ease-in-out duration-150']) }}
    href="{{ $href }}">
    {{ $slot }}
   </a>
   @else
<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
@endif
