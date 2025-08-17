import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import elements from '@tailwindplus/elements';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: false,
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            'app': '#2D5980',
            'app': {
                '500': '#2D5980'
            },
            'color1': {
                '50': '#f3f7f8',
                '100': '#e1eaec',
                '200': '#c7d7da',
                '300': '#a0bac0',
                '400': '#72959e',
                '500': '#567a84',
                '600': '#4a6670',
                '700': '#42575f',
                '800': '#3a4950',
                '900': '#343f45',
                '950': '#1f282d',
            },
        }
    },

    plugins: [forms, typography, elements],
};
