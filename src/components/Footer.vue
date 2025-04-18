<script setup lang="ts">
	
</script>

<template>
  <div class="relative">
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="wave-shape" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#wave-shape" x="48" y="0" fill="rgba(255, 255, 255, 0.7" />
        <use xlink:href="#wave-shape" x="48" y="0" fill="rgba(255, 255, 255, 0.5" />
        <use xlink:href="#wave-shape" x="48" y="0" fill="rgba(255, 255, 255, 0.3" />
        <use xlink:href="#wave-shape" x="48" y="0" fill="rgba(255, 255, 255, 0.1" />
      </g>
	  </svg>
  </div>
  <div class="bg-white align-center flex flex-col md:flex-row py-2 px-2 md:px-16" >
    <h3 class="text-black flex-grow text-left">Copyright © {{new Date().getFullYear()}}</h3>
    <h3 class="text-black md:text-right">Developed by gabcvit.dev</h3>
  </div>
  
  
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
    height:40px;
    min-height:40px;
  }
  h1 {
    font-size:24px;
  }
}

</style>