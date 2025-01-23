<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn px-5 py-2 text-yellow-500 btn text-15 bg-yellow-50 border-yellow-50 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:text-white active:bg-yellow-600 active:border-yellow-600 dark:border-transparent' ]) }}>
    {{ $slot }}
</button>
