import path from 'path'
import { createVuePlugin } from 'vite-plugin-vue2'

export default ({ command }) => ({

  base: command === 'serve' ? '' : '/build/',

  publicDir: 'fake_directory', // created to prevent Vite from automatically copy assets

  build: {
    manifest: true,

    outDir: 'public/build',

    rollupOptions: {
      input: [
        'resources/js/app.js',
        'resources/css/app.css',
      ],
    },
  },

  resolve: {
    alias: {
      vue: 'vue/dist/vue.runtime.esm.js',
      '@': path.resolve('resources/js'),
    },
  },

  plugins: [
    createVuePlugin(),
  ],
})
