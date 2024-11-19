<template>
  <div class="absolute top-5 left-5">
    <p class="text-xl">
      Gabriel Vitali<span class="animate-ping">_</span>
    </p>
  </div>
  <nav class="h-screen w-1/2 grid content-center space-y-10">
    <NavigationBarRouterLink
      v-for="singleRouteOption in routes"
      :key="`navigationOptions-${singleRouteOption.name}`"
      :label="capitalizeString(singleRouteOption.name)"
      :optionId="singleRouteOption.path"
    />
  </nav>
  <div class="absolute bottom-0 left-0 p-5 w-52 bg-stone-800 rounded-tr-2xl">
    <p class="m-1">
      Social links:
    </p>
    <TagSocial
      iconUrl="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original.svg"
      label="GitHub"
      url="https://github.com/gabcvit"
    />
    <TagSocial
      iconUrl="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/stackoverflow/stackoverflow-original.svg"
      label="Stackoverflow"
      url="https://stackoverflow.com/users/6231562/gabcvit"
    />
    <TagSocial
      iconUrl="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linkedin/linkedin-original.svg"
      label="LinkedIn"
      url="https://www.linkedin.com/in/gabcvit/"
    />
  </div>
</template>

<script setup lang="ts">

import NavigationBarRouterLink from "./NavigationBarRouterLink.vue";
import {routes} from "../router";
import {capitalizeString} from "../utils/capitalize";
import TagSocial from "./TagSocial.vue";

</script>
