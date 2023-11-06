/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        laravel: '#F05340',
        laraDark: '#6C6C6C'
      }
    },
  },
  plugins: [],
}

