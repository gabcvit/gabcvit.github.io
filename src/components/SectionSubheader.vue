<script setup lang="ts">
withDefaults(defineProps<{
  title: string,
}>(), {});
</script>

<template>
  <h3 class="text-xs uppercase tracking-widest text-brand-pink font-bold pt-4 pb-2 flex items-center gap-2">
    <span aria-hidden="true" class="w-4 h-px bg-brand-pink inline-block"></span>
    {{ title }}
  </h3>
</template>
