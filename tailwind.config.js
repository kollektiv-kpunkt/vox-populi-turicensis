/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#203a8d',
                "bg": "#fdd391"
            },
            fontSize: {
                "2xs": ".625rem"
            }
        },
    },
    plugins: [],
}

