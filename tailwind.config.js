/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': { DEFAULT: '#00529C', 50: '#EEF7FF', 100: '#CFEAFF', 200: '#92CEFF', 300: '#55B2FF', 400: '#1794FF', 500: '#0074D9', 600: '#00529C', 700: '#003E78', 800: '#002B55', 900: '#001931' },
      },
      fontFamily: {
        // serif: 'Noto Serif Display'
        serif: 'Libre Baskerville',
        // serif: 'Cormorant Garamond',
      },
      typography: ({ theme }) => ({
        white: {
          css: {
            '--tw-prose-body': 'white',
            '--tw-prose-headings': 'white',
            '--tw-prose-lead': 'white',
            '--tw-prose-links': 'white',
            '--tw-prose-bold': 'white',
            '--tw-prose-counters': 'white',
            '--tw-prose-bullets': 'white',
            '--tw-prose-hr': 'white',
            '--tw-prose-quotes': 'white',
            '--tw-prose-quote-borders': 'white',
            '--tw-prose-captions': 'white',
            '--tw-prose-code': 'white',
            '--tw-prose-pre-code': 'white',
            '--tw-prose-pre-bg': 'white',
            '--tw-prose-th-borders': 'white',
            '--tw-prose-td-borders': 'white',
            '--tw-prose-invert-body': 'white',
            '--tw-prose-invert-headings': 'white',
            '--tw-prose-invert-lead': 'white',
            '--tw-prose-invert-links': 'white',
            '--tw-prose-invert-bold': 'white',
            '--tw-prose-invert-counters': 'white',
            '--tw-prose-invert-bullets': 'white',
            '--tw-prose-invert-hr': 'white',
            '--tw-prose-invert-quotes': 'white',
            '--tw-prose-invert-quote-borders': 'white',
            '--tw-prose-invert-captions': 'white',
            '--tw-prose-invert-code': 'white',
            '--tw-prose-invert-pre-code': 'white',
            '--tw-prose-invert-pre-bg': 'rgb(0 0 0 / 50%)',
            '--tw-prose-invert-th-borders': 'white',
            '--tw-prose-invert-td-borders': 'white',
          },
        },
      }),
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    plugin(function ({ addVariant }) {
      addVariant('hocus', ['&:hover', '&:focus'])
    }),
    plugin(function ({ addVariant }) {
      addVariant('group-hocus', ['.group:hover &', '.group:focus &'])
    })
  ],
}

