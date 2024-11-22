import { defineConfig } from 'vite'
import path from 'path'

export default defineConfig({
    server: {
        strictPort: true,
        port: 5173,
        origin: 'http://localhost:5173'
    },
    root: path.resolve(__dirname, "./src"),
    css: {
        devSourcemap: true
    },
    build: {
        manifest: true,
        outDir: path.resolve(__dirname, "../www/local/assets/dist"),
        emptyOutDir: true,
        rollupOptions: {
            input: {
                app: path.resolve(__dirname, "./src/app.js")
            }
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
