const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    typography: (theme) => ({
      default: {
        css: {
          li: {
            marginBottom: '0',
            marginTop: '0',
          },
          a: {
            color: theme('colors.brand.orange'),
            fontWeight: theme('fontWeight.normal'),
            textDecoration: 'underline',
          },
          h1: {
            fontWeight: theme('fontWeight.normal'),
          },
          h2: {
            fontWeight: theme('fontWeight.normal'),
          }
        }
      }
    }),
    aspectRatio: {
      'none': 0,
      'square': [1, 1],
      '16/9': [16, 9], 
      '4/3': [4, 3],   
      '21/9': [21, 9], 
      '3/4': [3,4],   
      '4/5': [4,5],   
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
        mono: ['Source Code Pro', ...defaultTheme.fontFamily.mono],
      },
      opacity: {
        '05': '0.05',
        '10': '0.1',
      },
      fontSize: {
        'tiny': '10px',
      },
      colors: {
        brand: {
          yellow: '#fffd38',
          gray: '#f2f2f2',
          red: '#FF2816',
          blue: '#035DA9',
          orange: '#EB7366',
          green: '#76C28E'
        }
      },
    },
  },
  variants: {
    scale: ['responsive', 'hover', 'focus', 'group-hover'],
    opacity: ['responsive', 'hover', 'focus', 'group-hover'],
    translate: ['responsive', 'hover', 'focus', 'group-hover'],
    borderWidth: ['last'],
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('tailwindcss-aspect-ratio'),
  ],
}
