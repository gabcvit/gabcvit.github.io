<script setup lang="ts">
	
</script>

<template>
  <div class="relative overflow-hidden" aria-hidden="true">
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="wave-shape" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#wave-shape" x="48" y="0" fill="rgba(219, 39, 119, 0.15)" />
        <use xlink:href="#wave-shape" x="48" y="0" fill="rgba(219, 39, 119, 0.1)" />
        <use xlink:href="#wave-shape" x="48" y="0" fill="rgba(178, 255, 0, 0.06)" />
        <use xlink:href="#wave-shape" x="48" y="0" fill="rgba(178, 255, 0, 0.04)" />
      </g>
    </svg>
  </div>
  <footer class="bg-dark border-t border-brand-green/30 py-6 px-4">
    <div
      xmlns:cc="http://creativecommons.org/ns#"
      xmlns:dct="http://purl.org/dc/terms/"
      class="flex text-white/60 gap-1 justify-center flex-wrap text-sm items-center"
    >
      <a
        property="dct:title"
        rel="cc:attributionURL"
        href="https://gabcvit.dev/"
        class="text-brand-green font-bold text-sm hover:text-white transition-colors duration-200"
      >
        gabcvit.dev
      </a>
      <span>by</span>
      <a
        rel="cc:attributionURL dct:creator"
        property="cc:attributionName"
        href="https://gabcvit.dev/"
        class="text-brand-green font-bold text-sm hover:text-white transition-colors duration-200"
      >
        Gabriel Vitali
      </a>
      <span>is licensed under</span>
      <a
        href="https://creativecommons.org/licenses/by-nc-sa/4.0/?ref=chooser-v1"
        target="_blank"
        rel="license noopener noreferrer"
        class="flex gap-1 items-center text-sm hover:text-brand-green transition-colors duration-200"
      >
        CC BY-NC-SA 4.0
        <img class="license-icon" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt="Creative Commons">
        <img class="license-icon" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt="Attribution">
        <img class="license-icon" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt="NonCommercial">
        <img class="license-icon" src="https://mirrors.creativecommons.org/presskit/icons/sa.svg?ref=chooser-v1" alt="ShareAlike">
      </a>
    </div>
  </footer>
  
  
</template>

<style scoped>

.waves {
  position:relative;
  width: 100%;
  height: 30vh;
  margin-bottom:-7px;
  min-height: 20px;
  max-height: 50px;
}

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5) infinite;
}

.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}

.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}

.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}

.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}

.license-icon {
  height: 18px !important;
  margin-left: 2px;
  vertical-align: middle;
  filter: invert(1) opacity(0.6);
}

@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}

@media (max-width: 768px) {
  .waves {
    height: 40px;
    min-height: 40px;
  }
}

</style>