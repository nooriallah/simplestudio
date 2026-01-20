/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Livewire/**/*.php",
        "./app/**/*.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#2563EB",
                    100: "#1D4ED8",
                    200: "#1D4ED8",
                    700: "#1E40AF",
                    800: "#1E3A8A",
                    900: "#1E3A8A",
                },
                secondary: { DEFAULT: "#1E40AF" },
                accent: { DEFAULT: "#F59E0B" },
            },
        },
    },
    plugins: [],
};
