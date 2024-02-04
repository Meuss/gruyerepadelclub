import { defineConfig } from 'vite';
import liveReload from 'vite-plugin-live-reload';
import { resolve } from 'path';

export default defineConfig({
    plugins: [liveReload(`${__dirname}/**/*.php`)],

    root: '',
    base: process.env.NODE_ENV === 'development' ? '/' : '/dist/',

    build: {
        // output dir for production build
        outDir: resolve(__dirname, './dist'),
        emptyOutDir: true,
        manifest: true,
        target: 'es2018',
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'main.js'),
            },
            // Uncomment and adjust the output settings as needed
            // output: {
            //     entryFileNames: `[name].js`,
            //     chunkFileNames: `[name].js`,
            //     assetFileNames: `[name].[ext]`
            // }
        },

        minify: true,
        write: true,
    },

    server: {
        cors: true,
        strictPort: true,
        port: 3000,
        https: false,
        hmr: {
            host: 'localhost',
        },
    },

    resolve: {
        alias: {},
    },
});
