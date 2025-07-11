/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1E293B',
        accent: '#FBBF24',
        light: '#F1F5F9',
      },
    },
  },
  darkMode: 'class',
  plugins: [],
}