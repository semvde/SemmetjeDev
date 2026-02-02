import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/mobile-menu.js',
                'resources/js/admin-publishing.js', 'resources/js/admin-projectimages.js', 'resources/js/admin-projecttechnologies.js'],
            refresh: true,
        }),
    ],
});
