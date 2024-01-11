/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./index.html",
        "./src/**/*.{js,ts,jsx,tsx}",
        "./resources/**/*.blade.php",
        "./resources/**/*.{js,ts,jsx,tsx}",
    ],

    theme: {
        extend: {},
    },
    plugins: [
        require("@tailwindcss/forms"),
        require('flowbite/plugin'),
        require('@themesberg/flowbite/plugin')],
}
