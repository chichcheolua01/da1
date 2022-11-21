/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        body: "'Roboto', sans-serif"
      },
      colors: {
        primary: "#6C5DD3",
      },
    },
  },
  plugins: [],
};
