<template>
  <NavigationBar />
  <div
    class="transition ease-in fixed top-[100px] right-0 w-20 h-20 bg-white opacity-[.01]" 
    :style="{ transform: `translateY(${scrollY * -0.04}px)` }" 
  />
  <div
    class="transition ease-in fixed top-[300px] right-80 w-20 h-20 bg-white opacity-[.05]" 
    :style="{ transform: `translateY(${scrollY * -0.1}px)` }" 
  />
  <div
    class="transition ease-in fixed top-[600px] right-60 w-20 h-20 bg-white opacity-[.01]" 
    :style="{ transform: `translateY(${scrollY * -0.05}px)` }" 
  />
  <div
    class="transition ease-in fixed top-[900px] right-20 w-20 h-20 bg-white opacity-[.02]" 
    :style="{ transform: `translateY(${scrollY * -0.2}px)` }" 
  />
  <div 
    class="transition ease-in fixed top-[200px] left-10 w-20 h-20 bg-white opacity-[.05]" 
    :style="{ transform: `translateY(${scrollY * -0.15}px)` }" 
  />
  <div 
    class="transition ease-in fixed top-[500px] left-40 w-20 h-20 bg-white opacity-[.02]" 
    :style="{ transform: `translateY(${scrollY * -0.05}px)` }" 
  />
  <div 
    class="transition ease-in fixed top-[800px] left-0 w-20 h-20 bg-white opacity-[.07]" 
    :style="{ transform: `translateY(${scrollY * -0.1}px)` }" 
  />
  <div class="block m-auto w-full max-w-[960px] px-4 md:px-0 pb-16">
    <RouterView />
  </div>
</template>

<script lang="ts" setup>
import { ref, onMounted, onUnmounted } from 'vue';
import NavigationBar from './components/NavigationBar.vue';

const scrollY = ref(0);

// Throttle function to limit the frequency of updates
const throttle = (func: Function, limit: number) => {
  let lastFunc: number;
  let lastRan: number;
  return function (...args: any[]) {
  const context = this;
  const now = Date.now();
  if (!lastRan) {
    func.apply(context, args);
    lastRan = now;
  } else {
    clearTimeout(lastFunc);
    lastFunc = window.setTimeout(() => {
    if (now - lastRan >= limit) {
      func.apply(context, args);
      lastRan = now;
    }
    }, limit - (now - lastRan));
  }
  };
};

const updateScroll = throttle(() => {
  scrollY.value = window.scrollY;
}, 50); // Adjust the throttle limit (in milliseconds) as needed

onMounted(() => {
  window.addEventListener('scroll', updateScroll);
});

onUnmounted(() => {
  window.removeEventListener('scroll', updateScroll);
});
</script>