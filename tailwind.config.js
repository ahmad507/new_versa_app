module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    colors: {
      "teal_primary": "#00bfa6",
      "teal_background": "#36cbb7",
      "teal_light": "#e0f2f2",
      "teal_header": "#a7feeb",
      "blue_ocean": "#1fb4ff",
      "gray_stone": "#b7b7b7",
      "black_dop" : "#000000",
      "white_smoke" : "#f5f5f5"
    },
    fontFamily: {
      SourceSans: ["Source Sans Pro, sans-serif"]
    },
    container: {
      center: true,
      padding: "1rem",
      screens: {
        lg: "1820px",
        xl: "1820px",
        "2xl": "1820px"
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('daisyui'),
  ],
}
