/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        customBlue: "#1e40af",
        Blue: "#e0f2fe",
        vert: "#7c3aed",
        Sky: "dbedf5",
      },
      height: {
        15: "3.75rem", // 60px
      },
      transitionDuration: {
        2000: "2000ms",
      },
    },
  },
  plugins: [],
};
