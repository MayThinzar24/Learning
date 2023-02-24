/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*.{html, js}", "**/**/*.{html, js}", "./index.html"],
  theme: {
    extend: {
      colors: {
        'gold': '#c49516',
        'darkgold': "#945a04",
        'merry': "#d60b15",
        'leaves': "#109404",
        'menubg': "#f0d775",
        'lightpurple': "#e7dcf5",
        'darkpurple': "#a893fa",
        "purple-01": "#9869c7",
        "snowy": "#d8ecf2",
        "bluewish": "#5c71bd",
        "lightgray": "#e4e9eb",
        "darkgray": "#b4c9d1",
        "mediumgray": "#b9c5c9"
      },
      fontFamily: {
        signiko: ['Signika Negative', 'sans-serif'],
        elite: ['Special Elite', 'cursive'],
      }
    },
  },
  plugins: [],
}
