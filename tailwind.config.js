/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.{blade.php,vue,js}"],
  theme: {
    extend: {
      colors: {
        background: '#F5F5F5', // Replace this with your hex code
        scarlet: '#900D09',
        sangria: '#5E1916',
        grayD: '#565E60',
        creamcorn: "#F2C75B",
        wala:"#DE9967",
        brownish:"#783201",
        lightgray:"#DBDBDB"
      },
      width: {
        '112': '32rem', // set a custom utility class for width up to 1920px
        'max-112': '32rem',
        'min-112': '32rem',
        'max-100': '22rem',
      },
      height: {
        '112': '32rem', // set a custom utility class for width up to 1920px
        '120': '36rem',
        '128': '40rem',
        '132': '44rem',
        '140': '49rem',
        'max-112': '32rem',
        'min-112': '32rem',
        'max-100': '22rem',

      },
    },
  },
  plugins: [],
}
