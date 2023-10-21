import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        'node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx}',
        'node_modules/flowbite/**/*.{js,jsx,ts,tsx}',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'cube' : '#0077FF',

        },

        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            animation: {
                cube: 'spin 9s linear infinite',
            },
        },
    },

    plugins: [
        forms,
        require('tailwind-scrollbar-hide'),
        require('flowbite/plugin'),
    ],
};
