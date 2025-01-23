<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn px-5 py-2 text-green-500 btn text-15 bg-green-50 border-green-50 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:text-white active:bg-green-600 active:border-green-600 dark:border-transparent' ]) }}>
    {{ $slot }}
</button>
