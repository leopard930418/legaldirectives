const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                lighterred:'#F7EAEA',
                lightred: '#BB0000D0',
                mediumred:'#B40000',
                burgundy: '#760A0A',
                darkburgundy: '#5A0000',
                darkerburgundy: '#363636'
            },
            boxShadow: {
                'ldbutton': '0px 3px 6px #00000029'
            },
            borderRadius: {
                'ld6': '6px'
            },
            width: {
                'ldbutton': '210px'
            },
            height: {
                'ldbutton': '32px'
            },
            letterSpacing: {
                'ldbutton': '0.72px'
            },
            fontSize: {
                'ldbutton': '13px'
            },
        },
        fontFamily: {
            'sans': ['Josefin Sans', 'Sans-serif']
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
