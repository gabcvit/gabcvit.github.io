<script setup lang="ts">
const props = withDefaults(defineProps<{
  label: string,
  iconUrl: string,
}>(), {
  label: 'Example',
});
</script>

<template>
  <span class="inline-flex items-center gap-2 p-2 mr-2 mb-2 rounded border border-white">
    <img
      class="w-6"
      :alt="`${props.label} tag icon`"
      :src="props.iconUrl"
    >
    <span class="text-base font-medium text-white pr-1">{{ props.label }}</span>
  </span>
</template>
