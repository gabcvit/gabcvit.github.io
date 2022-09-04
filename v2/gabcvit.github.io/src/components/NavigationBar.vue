<template>
  <div class="absolute">
    <p>Gabriel Vitali</p>
  </div>
  <div class="h-screen place-items-center py-10 grid">
    <div class="max-h-64 w-full space-y-8">
      <NavigationBarClicableOption
        optionId="profile"
        @onOptionClicked="selectOption"
      />
      <NavigationBarClicableOption
          optionId="knowledge"
          @onOptionClicked="selectOption"
      />
      <NavigationBarClicableOption
          optionId="resume"
          @onOptionClicked="selectOption"
      />
      <NavigationBarClicableOption
          optionId="portfolio"
          @onOptionClicked="selectOption"
      />
    </div>
  </div>
</template>

<script setup lang="ts">

import NavigationBarClicableOption from "./NavigationBarClickableOption.vue";
import {defineEmits} from "vue";

const emit = defineEmits<{
  (e: 'onNewPageSelected', optionId: string): void
}>()

const selectOption = (optionId: string) => {
  emit('onNewPageSelected', optionId)
};
</script>

<style scoped>
.read-the-docs {
  color: #888;
}
</style>
