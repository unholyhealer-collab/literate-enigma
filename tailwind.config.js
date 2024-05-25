import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                inter: ["Inter", "sans-serif"],
            },
            colors: {
                "primary": "#0a2342",
                "secondary": "#9db4c0",
                "secondary-palette": {
                    50: "#f5f8f9",
                    100: "#e8eef1",
                    200: "#d7e1e6",
                    300: "#bcccd4",
                    400: "#9db4c0",
                    500: "#839cae",
                    600: "#71899f",
                    700: "#657990",
                    800: "#566577",
                    900: "#475361",
                    950: "#2e353d"
                },
                "accent": "#f96900",
                "accent-palette": {
                    50: "#fff9ec",
                    100: "#fff0d3",
                    200: "#ffdea5",
                    300: "#ffc66d",
                    400: "#ffa132",
                    500: "#ff840a",
                    600: "#f96900",
                    700: "#cc4d02",
                    800: "#a13c0b",
                    900: "#82330c",
                    950: "#461704"
                }
            },
        },
    },

    plugins: [forms],
};
