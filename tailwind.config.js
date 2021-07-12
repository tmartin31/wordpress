const colors = require('tailwindcss/colors');

module.exports = {
    purge: {
        enabled: false,
        content: ['*.php'],
    },
    darkMode: false,
    theme: {
        colors: {
            black: '#000000',
            blue: colors.blue,
            gray: colors.gray,
            green: colors.green,
            red: colors.red,
            white: '#ffffff',
        },
        container: {
            center: true,
        },
        fontFamily: {
            sans: ['Overpass', 'sans-serif'],
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}