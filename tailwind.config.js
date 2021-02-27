module.exports = {
  purge: {
    content: ['./public/**/*.html'],
    options: {
      safelist: []
    }
  },
  theme: {
    extend: {
      fontFamily: {
        "body": ["Consolas", "monaco", "monospace"]
      },
      colors: {
        black: {
          "400": "#373737",
          "600": "#404040",
          "700": "#414141",
          "900": "#212121"
        },
        "win-close": "#E51323",
        "win-maximize": "#E8E8E8",
        "win-minimize": "#E8E8E8",
        "mac-close": "#F35F57",
        "mac-maximize": "#F8BC2E",
        "mac-minimize": "#44C83F"
      },
      minHeight: {
        '64': '16rem'
       }
    },
  },
  variants: {},
  plugins: [],}
