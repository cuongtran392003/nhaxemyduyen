/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        "red-custom": "#ED2625",
        body: "#F9F6EF",
        "blue-custom": ["#16469B", "#386FCF"],
        "green-custom": ["#2E566E", "#4ABA8D"],
        blue: ["#288EA8", "#60C7E0"],
        "orange-custom": ["#D88616", "#FEA731"],
      },
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
        montserrat: ["Montserrat", "sans-serif"],
      },
      fontSize: {
        14: "14px",
        43: "43px",
        28: "28px",
        25: "25px",
      },
      screens: {
        desktop: "1440px",
      },
    },
  },
  plugins: [],
};
