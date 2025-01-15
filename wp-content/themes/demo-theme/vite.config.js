import { defineConfig } from 'vite'
const path = require('path')

export default defineConfig({

    root: path.resolve(__dirname, 'src'),
    resolve: {
        alias: {
            '@bootstrap': path.resolve(__dirname, './node_modules/bootstrap'),
        },
    },
    build: {
        outDir: path.resolve(__dirname, './dist'),
        emptyOutDir: true,
        // manifest: true,
        // sourcemap: true,
        rollupOptions: {
            input: path.resolve(__dirname, './src/js/script.js'),
            output: {
            assetFileNames: (assetInfo) => {
                if (assetInfo.name == 'script.css') return 'index.css';
                return assetInfo.name;
            },
            entryFileNames: 'index.js',
            },
        },
        minify: false
    },
    server: {
        port: 8080,
    },
    css: {
        preprocessorOptions: {
          scss: {
            quietDeps: true, // This suppresses warnings from third-party packages
          },
        },
    },

});



