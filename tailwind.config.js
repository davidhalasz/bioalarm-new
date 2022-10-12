const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './*.html", "./ecommerce/*.html", "./assets/**/*.js'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'baseBlue': '#0099ff',
            },
            backgroundImage: {
                'wave-bg': "url('../public/images/footer-bg.svg')"
            }
        },
    },

    plugins: [ require('@tailwindcss/typography'), require('@tailwindcss/line-clamp'), require("tailgrids/plugin")],
};
