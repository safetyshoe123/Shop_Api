/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {

    },
  },
  daisyui: {
    themes: ["retro",],
  },
  plugins: [require ("daisyui")],
}