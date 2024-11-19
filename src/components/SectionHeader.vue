<script setup lang="ts">
withDefaults(defineProps<{
  title: string,
}>(), {});
</script>

<template>
  <div class="mt-12 mb-4 border-b">
    <p class="text-xl">
      {{ title }}
    </p>
  </div>
</template>
