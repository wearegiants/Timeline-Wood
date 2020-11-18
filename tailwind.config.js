const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    aspectRatio: {
      'none': 0,
      'square': [1, 1],
      '16/9': [16, 9], 
      '4/3': [4, 3],   
      '21/9': [21, 9], 
    },
    container: {
      center: true,
      padding: {
        default: '1rem'
      },
    },
    extend: {
      fontFamily: {
        sans: ['SuperGroteskPro','Inter var', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        brand: {
          yellow: '#fffd38',
          gray: '#f2f2f2',
        }
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('tailwindcss-aspect-ratio'),
  ],
}
