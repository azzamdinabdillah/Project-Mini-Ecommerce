const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'spin-slow': 'spin 7s linear infinite',
              },
            colors: {
                'back-product': '#A5F1E9',
                'biru-agak-gelap': '#113F67',
                'bg-hover-saat-bg-gelap': '#9CB4CC',
                'bg-main': '#E3FDFD',
                'bg-biru-gelap': '#3F3351',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
