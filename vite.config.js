import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [
    laravel({
      input: ["resources/css/main.css"],
      refresh: true,
    }),
  ],
  build: {
    outDir: "public/build",
    manifest: true,
    rollupOptions: {
      output: {
        manualChunks: undefined,
      },
    },
  },
  server: {
    hmr: {
      host: "localhost",
    },
  },
});
