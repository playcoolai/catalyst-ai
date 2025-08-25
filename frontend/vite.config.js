import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: 'dist',
    manifest: true,
    rollupOptions: {
      input: {
        main: './src/main.js',
      },
    },
  },

  server: {
    cors: true,
    port: 3000,
    strictPort: true,
    hmr: {
      host: 'localhost',
    },
  },
});