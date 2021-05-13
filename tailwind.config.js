const colors = require('tailwindcss/colors');

module.exports = {
    darkMode: false, 
    mode: 'jit',
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/jit'),
    ],
    purge: {
        enabled: false,
        content: ['*.php'],
    },
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
            center: true
        },
        fontFamily: {
            sans: ['Overpass', 'sans-serif'],
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
}