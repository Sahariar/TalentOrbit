<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn px-5 py-2 text-red-500 btn text-15 bg-red-50 border-red-50 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:text-white active:bg-red-600 active:border-red-600 dark:border-transparent' ]) }}>
    {{ $slot }}
</button>
