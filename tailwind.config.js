import defaultTheme from 'tailwindcss/defaultTheme';
const defaultTheme = require('tailwindcss/defaultTheme')
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {
            fontFamily: {
            sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
          },
        },
    },
    plugins: [],
};
