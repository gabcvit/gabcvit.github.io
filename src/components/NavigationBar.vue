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
</template>

<script setup lang="ts">

import NavigationBarRouterLink from "./NavigationBarRouterLink.vue";
import {routes} from "../router";
import {capitalizeString} from "../utils/capitalize";

</script>
