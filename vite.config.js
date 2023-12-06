import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel([
            'resources/JS/app.js',
            'resources/JS/bootstrap.js',
            'resources/css/style.css',
            'resources/sass/_variables.scss',
            'resources/sass/app.scss',
        ]),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
