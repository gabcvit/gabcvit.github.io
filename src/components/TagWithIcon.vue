<script setup lang="ts">
const props = withDefaults(defineProps<{
  label: string,
  iconUrl: string,
}>(), {
  label: 'Example',
});
</script>

<template>
  <span class="inline-flex items-center gap-2 p-2 mr-2 mb-2 rounded-sm border border-white/30 transition-all duration-200 hover:border-brand-green hover:shadow-glow-green cursor-default">
    <img
      class="w-5 h-5"
      :alt="`${props.label} icon`"
      :src="props.iconUrl"
    >
    <span class="text-sm font-medium text-white/90 pr-1 group-hover:text-brand-green">{{ props.label }}</span>
  </span>
</template>
