module.exports = {
  content: ["./src/**/*.php"],
  theme: {
    screens: {
      'mobile':{
        'min': '300px',
        'max': '480px'
      },

      'xxs':  {'max': '374px'},

      'xs': {
        'min': '375px',
        'max': '480px'
      },

      'sm': '480px',
      // => @media (min-width: 480px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '1.5xl': '1536px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1792px',
      // => @media (min-width: 1836px) { ... }

      '3xl': '2400px',
      // => @media (min-width: 2400px) { ... }
    },
    container: {
      center: true,
      padding: {
        'DEFAULT': '1.5rem',
        '2xl': '0rem',
      }
    },
    extend: {
      fontSize: {
        'heading-2xl': '4.2rem',
        'heading-3xl': '6.25rem',
      },
      colors: {
        'gray-5E' : '#5E5E5E',
        'dark-blue' : '#00000E',
        'yellow' : '#FFD600',
        'blue': {
          'DEFAULT': '#2867D3'
        }
      },
      width: theme => ({
        "5%": "5%",
        "10%": "10%",
        "15%": "15%",
        "20%": "20%",
        "25%": "25%",
        "30%": "30%",
        "35%": "35%",
        "40%": "40%",
        "45%": "45%",
        "50%": "50%",
        "55%": "55%",
        "60%": "60%",
        "65%": "65%",
        "70%": "70%",
        "75%": "75%",
        "80%": "80%",
        "85%": "85%",
        "90%": "90%",
        "95%": "95%",
      }),
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),

    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          // '@screen sm': {
          //   maxWidth: '600px',
          // },
          // '@screen md': {
          //   maxWidth: '700px',
          // },
          // '@screen lg': {
          //   maxWidth: '800px',
          // },
          '@screen xl': {
            maxWidth: '1280px',
          },
          '@screen 2xl': {
            maxWidth: '1640px',
          },
          '@screen 3xl': {
            maxWidth: '1540px',
          },
        }
      })
    }
  ],
}
