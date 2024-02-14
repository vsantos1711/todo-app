/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "2rem",
                sm: "3rem",
                lg: "9rem",
                xl: "11rem",
                "2xl": "13rem",
            },
            screens: {
                "2xl": "1400px",
            },
        },
    },
    plugins: [],
};
