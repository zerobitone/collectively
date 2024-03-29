// vite.config.js
import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  server: {
    host: 'localhost',
    hmr: {
      host: 'localhost',
    },
  },
  plugins: [

    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false,
        },
      },
    }),

    laravel({
      input: ['resources/js/app.js'],
      refresh: true,
    }),
  ],
});
