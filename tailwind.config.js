module.exports = {
  mode: 'jit',
  purge: [
    './src/*.php',
    './src/**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
	fontSize: {
	}
  },
  variants: {
    extend: {},
  },
  plugins: [
    //require('@tailwindcss/forms'),
    // ...
  ],
}
