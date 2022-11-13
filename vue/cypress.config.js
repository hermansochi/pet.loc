/* eslint-env node */
const { defineConfig } = require("cypress");

/* eslint-env node */
module.exports = defineConfig({
  e2e: {
    specPattern: "cypress/e2e/**/*.{cy,spec}.{js,jsx,ts,tsx}",
    baseUrl: "http://localhost:4173",
  },
});
