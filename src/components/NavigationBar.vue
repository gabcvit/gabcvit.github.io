<template>
  <div class="absolute top-5 left-5">
    <p class="text-xl">
      Gabriel Vitali<span class="animate-ping">_</span>
    </p>
  </div>
  <nav class="h-screen w-1/2 grid content-center space-y-10">
    <NavigationBarRouterLink
      label="Home"
      optionId="/"
    />
    <NavigationBarRouterLink
      label="Resume"
      optionId="/resume"
    />
    <NavigationBarRouterLink
      label="Blog"
      optionId="/blog"
    />
    <NavigationBarRouterLink
      label="Portfolio"
      optionId="/portfolio"
    />
  </nav>
  <SocialLinksWrapper />
</template>

<script setup lang="ts">

import NavigationBarRouterLink from "./NavigationBarRouterLink.vue";
import SocialLinksWrapper from './SocialLinksWrapper.vue'
import { routes } from 'vue-router/auto-routes'

</script>
