<template>
  <nav
    aria-label="Main navigation"
    class="w-full align-middle flex justify-between items-center border-b border-white/10"
  >
    <div class="relative bg-white w-56 min-w-56 p-6 flex-none">
      <a
        href="/"
        class="text-2xl text-black uppercase font-normal focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-pink"
        aria-label="gabcvit.dev — home"
      >
        GABCVIT.DEV<span class="animate-ping" aria-hidden="true">_</span>
      </a>
      <span
        aria-hidden="true"
        class="absolute top-0 right-[-1px] bottom-[-5px] w-8 bg-dark [clip-path:polygon(100%_0,100%_100%,0_100%)]"
      ></span>
    </div>

    <button
      @click="toggleNav"
      class="md:hidden right-0 top-0 p-6 absolute z-30 text-white hover:text-brand-green transition-colors duration-200"
      :aria-expanded="isNavOpen"
      aria-controls="mobile-menu"
      :aria-label="isNavOpen ? 'Close navigation menu' : 'Open navigation menu'"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>

    <div class="hidden md:flex w-4/6 max-w-[960px] align-middle">
      <NavigationBarRouterLink
        v-for="(link, index) in navigationLinks"
        :key="index"
        :label="link.label"
        :optionId="link.optionId"
        :color="link.color"
      />
    </div>

    <div class="hidden md:flex w-1/6">
      <SocialIconsWrapper class="absolute right-0 top-0" />
    </div>

    <!-- Mobile Menu -->
    <div
      id="mobile-menu"
      v-if="isNavOpen"
      class="fixed top-0 left-0 w-full h-screen bg-dark z-40 flex flex-col items-center justify-center md:hidden border-t-4 border-brand-green"
      role="dialog"
      aria-modal="true"
      aria-label="Navigation menu"
    >
      <button
        @click="toggleNav"
        class="absolute top-6 right-6 text-white hover:text-brand-green transition-colors duration-200"
        aria-label="Close navigation menu"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
      <div class="flex flex-col items-center space-y-6">
        <NavigationBarRouterLink
          v-for="(link, index) in navigationLinks"
          :key="index"
          :label="link.label"
          :optionId="link.optionId"
          :color="link.color"
        />
        <SocialIconsWrapper />
      </div>
    </div>
  </nav>
</template>

<script setup lang="ts">
import NavigationBarRouterLink from "./NavigationBarRouterLink.vue";
import SocialIconsWrapper from './SocialIconsWrapper.vue';
import { ref, watch } from "vue";
import { useRoute } from "vue-router";

const isNavOpen = ref(false);
const route = useRoute();

function toggleNav() {
  isNavOpen.value = !isNavOpen.value;
}

watch(route, () => {
  isNavOpen.value = false;
});

const navigationLinks = [
  { label: "Home", optionId: "/", color: "pink" },
  { label: "Resume", optionId: "/resume", color: "pink" },
  { label: "Blog", optionId: "/blog", color: "pink" },
  { label: "Portfolio", optionId: "/portfolio", color: "pink" },
];
</script>
