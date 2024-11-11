import { defineConfig } from 'vite'
import path from 'path'

export default defineConfig({
    root: path.resolve(__dirname, "./src"),
    css: {
        devSourcemap: true
    },
    build: {
        manifest: true,
        outDir: path.resolve(__dirname, "../www/local/assets/dist"),
        emptyOutDir: true,
        rollupOptions: {
            input: path.resolve(__dirname, "./src/app.js")
        },
    },
    experimental: {
        renderBuiltUrl: (filename, { type, hostId, hostType, ssr }) => {
            return "/local/assets/dist/" + filename
        }
    },
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "./src")
        }
    }
})
