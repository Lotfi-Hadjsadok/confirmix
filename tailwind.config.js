/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./app/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.blade.php",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#10b981",
                warning: "#f57c00",
                error: "#d32f2f",
                info: "#0288d1",
                success: "#388e3c",
            },
            keyframes: {
                heartbeat: {
                    to: { transform: "scale(1.1)" },
                },
            },
            animation: {
                heartbeat:
                    "heartbeat 0.5s cubic-bezier(1,.91,1,.79) infinite alternate",
            },
        },
    },
    plugins: [require("preline/plugin")],
};
