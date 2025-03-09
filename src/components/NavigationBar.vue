<template>
  <nav class="h-screen w-1/2 grid content-center space-y-10">
    <NavigationBarRouterLink
      label="Home"
      optionId="/"
      color="orange"
    />
    <NavigationBarRouterLink
      label="Resume"
      optionId="/resume"
      color="indigo"
    />
    <NavigationBarRouterLink
      label="Blog"
      optionId="/blog"
      color="pink"
    />
    <NavigationBarRouterLink
      label="Portfolio"
      optionId="/portfolio"
      color="emerald"
    />
  </nav>
  <SocialLinksWrapper />
</template>

<script setup lang="ts">

import NavigationBarRouterLink from "./NavigationBarRouterLink.vue";
import SocialLinksWrapper from './SocialLinksWrapper.vue'

</script>
