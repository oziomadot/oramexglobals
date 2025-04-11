import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    mode: 'jit',
        purge: [
    // content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                Audiowide: ["Audiowide", "sans-serif"],
                Sofia: ["Sofia", "sans-serif"],
                Protest: ["Protest Guerrilla", "sans-serif"],
                tangerine: ["Tangerine", "sans-serif"],
                mea: ["Mea Culpa", "serif"],
                dmserif: ["DM Serif Text", "serif"]
            },
        },
    },






    variants: {
        extend: {},
    },

    plugins: [forms],
};
