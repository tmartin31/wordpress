const colors = require('tailwindcss/colors');

module.exports = {
	content: ['*.php'],
	theme: {
		colors: {
			black: '#000',
			blue: colors.blue,
			gray: colors.gray,
			green: colors.green,
			red: colors.red,
			white: '#fff'
		},
		container: {
            center: true
        },
		extend: {},
		fontFamily: {
			sans: ['Overpass', 'sans-serif']
		}
	}
}