const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans]
            },
            colors: {
                navy: "#121f3e",
                blue: {
                    primary: "#005596",
                    secondary: "#2579d1",
                    accent: "#e1f0ff"
                },
                red: "#d71920",
                orange: "#ff7a00",
                green: "#50a718",
                yellow: "#ffcc00",
                grey: {
                    primary: "#66696f",
                    secondary: "#abb3c4",
                    accent: "#e7eaf5",
                    stroke: "#f2f2f2"
                },
                background: "#f8f9fd",
                is: {
                    dark: "#877ad8",
                    light: "#f1effa"
                },
                me: {
                    dark: "#7ac9d8",
                    light: "#eff9fa"
                },
                ba: {
                    dark: "#9fdd6f",
                    light: "#f1faea"
                },
                ku: {
                    dark: "#f19e59",
                    light: "#fdf1e7"
                },
                ks: {
                    dark: "#d87aa7",
                    light: "#faeff5"
                }
            }
        }
    },

    variants: {
        opacity: ["responsive", "hover", "focus", "disabled"]
    },

    plugins: [require("@tailwindcss/ui")]
};
