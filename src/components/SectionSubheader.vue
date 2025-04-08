<script setup lang="ts">
withDefaults(defineProps<{
  title: string,
}>(), {});
</script>

<template>
  <h3>
    {{ title }}
  </h3>
</template>
