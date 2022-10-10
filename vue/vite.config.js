import { fileURLToPath, URL } from "node:url";
import { defineConfig } from "vite";
import dns from 'dns';
import vue from "@vitejs/plugin-vue";
import vueJsx from "@vitejs/plugin-vue-jsx";

dns.setDefaultResultOrder('verbatim');

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue(), vueJsx()],
  resolve: {
    alias: {
      "@": fileURLToPath(new URL("./src", import.meta.url)),
    },
  },
  server: {
    host: true,
    port: 5173,
    strictPort: true
  }
});
