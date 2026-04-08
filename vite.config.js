import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    darkMode: 'class',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    theme: {
        extend: {
            "colors": {
                "surface-container": "#edeeef",
                "secondary-container": "#90efef",
                "surface-container-low": "#f3f4f5",
                "on-surface-variant": "#414750",
                "tertiary-fixed": "#ffdad8",
                "on-error-container": "#93000a",
                "inverse-surface": "#2e3132",
                "tertiary": "#840019",
                "surface": "#f8f9fa",
                "surface-container-lowest": "#ffffff",
                "on-secondary-fixed-variant": "#004f4f",
                "surface-bright": "#f8f9fa",
                "on-primary-fixed-variant": "#004a79",
                "primary-fixed": "#cfe4ff",
                "background": "#f8f9fa",
                "error-container": "#ffdad6",
                "on-tertiary-fixed-variant": "#92001c",
                "primary-fixed-dim": "#9acbff",
                "surface-tint": "#15629a",
                "on-primary": "#ffffff",
                "tertiary-fixed-dim": "#ffb3b1",
                "outline-variant": "#c1c7d1",
                "on-secondary-fixed": "#002020",
                "on-primary-fixed": "#001d34",
                "error": "#ba1a1a",
                "secondary-fixed": "#93f2f2",
                "secondary-fixed-dim": "#76d6d5",
                "surface-variant": "#e1e3e4",
                "on-error": "#ffffff",
                "on-surface": "#191c1d",
                "on-tertiary-container": "#ffbbb9",
                "inverse-on-surface": "#f0f1f2",
                "primary-container": "#005a92",
                "on-tertiary": "#ffffff",
                "surface-container-highest": "#e1e3e4",
                "on-secondary": "#ffffff",
                "secondary": "#006a6a",
                "surface-dim": "#d9dadb",
                "outline": "#717881",
                "on-primary-container": "#a6d0ff",
                "on-tertiary-fixed": "#410007",
                "on-background": "#191c1d",
                "tertiary-container": "#af0525",
                "surface-container-high": "#e7e8e9",
                "primary": "#00426d",
                "on-secondary-container": "#006e6e",
                "inverse-primary": "#9acbff"
            }
        }
    }
});
