/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        'brand-green': 'rgb(178, 255, 0)',
        'brand-pink': 'rgb(219, 39, 119)',
        'brand-dark': 'rgb(10, 10, 10)',
      },
      boxShadow: {
        'glow-green': '0 0 12px rgba(178, 255, 0, 0.5)',
        'glow-pink': '0 0 12px rgba(219, 39, 119, 0.5)',
        'glow-green-lg': '0 0 24px rgba(178, 255, 0, 0.35)',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: 0 },
          '100%': { opacity: 1 },
        },
        fadeInUp: {
          '0%': {
            opacity: 0,
            transform: 'translateY(20px)',
          },
          '100%': {
            opacity: 1,
            transform: 'translateY(0)',
          },
        },
        slideInLeft: {
          '0%': { opacity: 0, transform: 'translateX(-16px)' },
          '100%': { opacity: 1, transform: 'translateX(0)' },
        },
        pulseGlow: {
          '0%, 100%': { boxShadow: '0 0 6px rgba(178, 255, 0, 0.4)' },
          '50%': { boxShadow: '0 0 18px rgba(178, 255, 0, 0.8)' },
        },
      },
      animation: {
        fadeIn: 'fadeIn 0.5s ease-in forwards',
        fadeInUp: 'fadeInUp 1.0s ease-out forwards',
        slideInLeft: 'slideInLeft 0.4s ease-out forwards',
        pulseGlow: 'pulseGlow 2s ease-in-out infinite',
      },
    },
  },
  plugins: [],
}
