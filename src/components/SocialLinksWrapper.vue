<template>
  <div class="absolute bottom-0 left-0 p-5 w-[90%] bg-gray-900 rounded-tr-2xl">
    <p class="mb-4">
      Let's connect! 🚀
    </p>
    <div class="flex flex-start flex-wrap gap-2">
      <TagSocial
        v-for="(link, index) in socialLinks"
        :key="index"
        :iconUrl="link.iconUrl"
        :label="link.label"
        :url="link.url"
      />
    </div>
  </div>
</template>

<script setup lang="ts">
import TagSocial from "./TagSocial.vue";
import { socialLinks } from "../data/socialLinksData";
</script>

