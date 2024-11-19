<script setup lang="ts">
withDefaults(defineProps<{
  title: string,
}>(), {});
</script>

<template>
  <p class="text-m my-2">
    {{ title }}
  </p>
</template>
