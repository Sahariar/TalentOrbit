import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/guest.js',
                'resources/css/dashboard.css',
                'resources/css/icons.min.css',
                'resources/js/dashboard.js',
                'resources/css/public.css',
                'resources/css/nouislider.min.css',
                'resources/js/nouislider.min.js',
            ],
            refresh: true,
        }),
    ],
});
