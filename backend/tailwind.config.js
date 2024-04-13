/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors:{
          primary: '#FF8700',
          secondary: '#d6d6d6',
          tertiary: '#03171E'
        },
        fontFamily:{
          poppins: ["Nunito, sans-serif"]
        },
        backgroundImage:{
          homeBg: 'url("https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63fc8f011df7042b653ee41c_hero-image-1-1.jpg")'
        },
        spacing:{
          min_vh: 'min(10rem, 20vh) 4rem'
        },
        screens:{
          sml: {'max': '639px'}
        }
      },
    },
    plugins: [],
  }