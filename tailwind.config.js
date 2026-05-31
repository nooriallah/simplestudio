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
                    50: "#F3FBFE",
                    200: "#D8F2FC",
                    500: "#82D4F6",
                    700: "#68AAC5",
                    900: "#3A5F6F",
                    default: "#82D4F6",
                },
                secondary: {
                    50: "#E8E9EB",
                    200: "#B6B9C0",
                    500: "#141E33",
                    700: "#101829",
                    900: "#090D17",
                    default: "#141E33",
                },
                tertiary: {
                    50: "#F5F5F7",
                    200: "#E0E1E6",
                    500: "#9A9FAD",
                    700: "#747782",
                    900: "#45484E",
                    default: "#9A9FAD",
                },
                gray: {
                    50: "#F9FAFB",
                    100: "#F3F4F6",
                    200: "#E5E7EB",
                    300: "#D1D5DB",
                    400: "#9CA3AF",
                    500: "#6B7280",
                    600: "#4B5563",
                    700: "#374151",
                    800: "#1F2937",
                    900: "#111827",
                    default: "#111827",
                },
                success: {
                    50: "#F0FDF4",
                    200: "#BBF7D0",
                    500: "#22C55E",
                    700: "#15803D",
                    900: "#14532D",
                    default: "#22C55E",
                },
                warning: {
                    50: "#FEFCE8",
                    200: "#FEF08A",
                    500: "#EAB308",
                    700: "#A16207",
                    900: "#713F12",
                    default: "#EAB308",
                },
                error: {
                    50: "#FEF2F2",
                    200: "#FECACA",
                    500: "#EF4444",
                    700: "#B91C1C",
                    900: "#7F1D1D",
                    default: "#EF4444",
                },
                light: {
                    50: "#ffffff",
                },
                liquid: {
                    50: `linear-gradient(
                        90deg,
                        rgba(245, 245, 245, 0.4) 0%,
                        rgba(245, 245, 245, 0.6) 50%,
                        rgba(245, 245, 245, 0.2) 100%
                    );`,
                },
            },

            fontFamily: {
                satoshi: ["Satoshi", "system-ui", "sans-serif"], // Most likely Inter
                guton: ["Guton", "system-ui", "serif"], // For serif needs
                display: ["Montserrat", "Inter", "sans-serif"], // For headings
            },

            fontSize: {
                // Headings
                display: ["64px", { lineHeight: "74px", fontWeight: "800" }], // Extra Bold
                h1: ["48px", { lineHeight: "67px", fontWeight: "700" }], // Bold
                h2: ["36px", { lineHeight: "50px", fontWeight: "700" }], // Bold
                h3: ["28px", { lineHeight: "39px", fontWeight: "500" }], // medium
                h4: ["24px", { lineHeight: "33px", fontWeight: "500" }], // Medium
                h5: ["20px", { lineHeight: "28px", fontWeight: "400" }], // Normal

                // Paragraphs
                p1: ["24px", { lineHeight: "32px", fontWeight: "400" }], // Normal
                p2: ["20px", { lineHeight: "27px", fontWeight: "400" }], // Normal
                p3: ["16px", { lineHeight: "24px", fontWeight: "400" }], // Normal

                // Links
                "link-1": ["24px", { lineHeight: "32px", fontWeight: "400" }], // Normal
                "link-2": ["20px", { lineHeight: "27px", fontWeight: "400" }], // Normal
                "link-3": ["16px", { lineHeight: "22px", fontWeight: "400" }], // Normal
            },
        },
    },
    plugins: [],
};
