/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/*.php",
    "./app/Views/**/*.html",
    "./app/Views/**/*.twig",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
        messiri: ['El Messiri', 'sans-serif'],
        vibes: ['Great Vibes', 'cursive'],
      },
    },
  },
  plugins: [],
}

