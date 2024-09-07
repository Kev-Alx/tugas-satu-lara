/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "selector",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                grotesk: ["OverusedGrotesk"],
                satoshi: ["Satoshi"],
            },
        },
    },
    plugins: [],
};
