/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            'navy': '#1e3a8a',
            'navy-dark': '#1e40af',
            'gold': '#fbbf24',
            'gold-dark': '#f59e0b'
        },
        fontFamily: {
            'poppins': ['Poppins', 'sans-serif']
        }
    },
  },
  plugins: [],
}