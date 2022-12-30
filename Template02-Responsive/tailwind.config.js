/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*.{html, js}", "**/**/*.{html, js}", "./index.html"],
  theme: {
    extend: {
      colors: {
        'primary-green': '#36804d',
        'secondary-green': '#8aba31',
        'gray': '#cccecb',
        'rating': "#e8d556"
      },
      fontFamily: {
        'great': ['Great Vibes', 'cursive'],
        'poppins': ['Poppins', 'sans-serif'],
        'crimson': ['Crimson', 'serif'],
        'segeo': ['Segoe Script','sans-serif']
      },
      fontSize: {
        'sm4xl': '5.625vw',
        'sm3xl': '4.688vw',
        'sm2xl': '3.75vw',
        'smxl': '3.125vw',
        'smlg': '2.813vw',
        'smbase': '2.5vw',
        'smsm': '2.188vw',
        'smxs': '1.875vw',
        'md4xl': '4.688vw',
        'md3xl': '3.906vw',
        'md2xl': '3.125vw',
        'mdxl': '2.604vw',
        'mdlg': '2.344vw',
        'mdbase': '2.083vw',
        'mdsm': '1.823vw',
        'mdxs': '1.563vw',
      },
      letterSpacing:{
        'cmn': '0.2rem',
      },
      boxShadow: {
        'footer': '0 -7px 11px rgba(0,0,0,0.16)'
      },
      borderRadius: {
        'mdxl': '1.563vw',
        'smxl': '1.875vw',
        'md3xl': '3.255vw',
        'sm3xl': '3.906vw'
      }
    },
  },
  plugins: [],
}
