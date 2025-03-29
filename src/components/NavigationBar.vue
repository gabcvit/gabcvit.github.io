<template>
  <nav class="h-screen w-1/2 grid content-center space-y-10">
    <NavigationBarRouterLink
      v-for="(link, index) in navigationLinks"
      :key="index"
      :label="link.label"
      :optionId="link.optionId"
      :color="link.color"
    />
  </nav>
  <SocialLinksWrapper />
</template>

<script setup lang="ts">
import NavigationBarRouterLink from "./NavigationBarRouterLink.vue";
import SocialLinksWrapper from './SocialLinksWrapper.vue';

const navigationLinks = [
  { label: "Home", optionId: "/", color: "orange" },
  { label: "Resume", optionId: "/resume", color: "indigo" },
  { label: "Blog", optionId: "/blog", color: "pink" },
  { label: "Portfolio", optionId: "/portfolio", color: "emerald" },
];
</script>
