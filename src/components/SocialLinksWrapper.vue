<template>
  <div class="block py-2 ">
    <div class="flex flex-start flex-wrap gap-2">
      <TagSocial
        v-for="(link, index) in socialLinks"
        :key="index"
        :iconSvg="link.iconSvg"
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

