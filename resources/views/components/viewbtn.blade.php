<a {{ $attributes->merge(['class' => 'btn px-4 text-13 text-black bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent']) }}>
    {{ $slot }}
</a>
