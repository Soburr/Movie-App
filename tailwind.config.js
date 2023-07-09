/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        width: {
            '96': '24rem',
        }
    },
    spinner: (theme) => ({
       default: {
          color: '#dae1e7',
          size: '1rem',
          border: '2px',
          speed: '500ms',
       },
    }),
  },
  plugins: [
    require('tailwindcss-spinner')(),
  ],
}
