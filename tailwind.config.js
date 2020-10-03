module.exports = {
  purge: [],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      colors: {
        grey: {
          '100': '#fcfaf7',
          '200': '#f7f3ed',
          '300': '#f0eae2',
          '400': '#e0d9cb',
          '500': '#c0b6a0',
          '600': '#968771',
          '700': '#68594a',
          '800': '#483c2d',
          '900': '#2c231a',
        }
      }
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
