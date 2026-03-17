<template>
  <div
    v-for="(element, index) in backgroundElements"
    :key="index"
    class="transition duration-0 ease-linear fixed pointer-events-none"
    :class="element.position"
    :style="{
      transform: `translateY(${scrollY * element.scrollFactor}px)`,
      opacity: element.opacity,
      width: `${ITEMS_SIZE * element.sizeFactor}px`,
      height: `${ITEMS_SIZE * element.sizeFactor}px`,
      backgroundColor: element.color,
    }"
    aria-hidden="true"
  />
</template>

<script lang="ts" setup>
import { ref, onMounted, onUnmounted } from 'vue';

const ITEMS_SIZE = 80;

const elementProximityIndex = {
  CLOSE: { scrollFactor: -0.2, opacity: "0.06", sizeFactor: 1.0 },
  MEDIUM: { scrollFactor: -0.1, opacity: "0.04", sizeFactor: 0.8 },
  FAR: { scrollFactor: -0.07, opacity: "0.02", sizeFactor: 0.6 },
  VERY_FAR: { scrollFactor: -0.05, opacity: "0.01", sizeFactor: 0.4 },
}

const GREEN = 'rgb(178, 255, 0)';
const PINK = 'rgb(219, 39, 119)';

const backgroundElements = [
  { position: "top-[100px] right-0",   ...elementProximityIndex.FAR,      color: GREEN },
  { position: "top-[300px] right-80",  ...elementProximityIndex.MEDIUM,   color: PINK  },
  { position: "top-[600px] right-60",  ...elementProximityIndex.VERY_FAR, color: GREEN },
  { position: "top-[900px] right-20",  ...elementProximityIndex.MEDIUM,   color: PINK  },
  { position: "top-[400px] right-20",  ...elementProximityIndex.CLOSE,    color: GREEN },
  { position: "top-[200px] left-10",   ...elementProximityIndex.FAR,      color: PINK  },
  { position: "top-[300px] left-80",   ...elementProximityIndex.MEDIUM,   color: GREEN },
  { position: "top-[500px] left-40",   ...elementProximityIndex.VERY_FAR, color: PINK  },
  { position: "top-[800px] left-0",    ...elementProximityIndex.MEDIUM,   color: GREEN },
];

const scrollY = ref(0);

const updateScroll = () => {
  scrollY.value = window.scrollY;
};

onMounted(() => {
  window.addEventListener("scroll", updateScroll, { passive: true });
});

onUnmounted(() => {
  window.removeEventListener("scroll", updateScroll);
});
</script>