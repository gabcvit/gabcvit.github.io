<script setup lang="ts">
withDefaults(defineProps<{
  title: string,
}>(), {});
</script>

<template>
  <h2 class="opacity-100">
      {{ title }}
    </h2>
</template>
