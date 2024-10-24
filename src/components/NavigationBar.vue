<template>
  <div class="absolute top-5 left-5">
    <p class="text-xl">
      Gabriel Vitali<span class="animate-ping">_</span>
    </p>
  </div>
  <nav class="h-screen w-1/2 grid content-center space-y-10">
    <NavigationBarRouterLink optionId="profile" />
    <NavigationBarRouterLink optionId="knowledge" />
    <NavigationBarRouterLink optionId="resume" />
    <NavigationBarRouterLink optionId="portfolio" />
  </nav>
</template>

<script setup lang="ts">

import NavigationBarRouterLink from "./NavigationBarRouterLink.vue";

</script>
