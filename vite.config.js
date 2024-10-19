import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/brands.min.css',
                'resources/css/fontawesome.min.css',
                'resources/css/regular.min.css',
            ],
            refresh: true,
        }),
    ],
});
