<script setup lang="ts">
const props = withDefaults(defineProps<{
  label: string,
  iconUrl: string,
}>(), {
  label: 'Example',
});
</script>

<template>
  <span class="inline-flex items-center gap-2 bg-gray-950 py-1 px-2 mr-2 mb-2 rounded border border-indigo-500">
    <img
      class="w-6"
      :alt="`${props.label} tag icon`"
      :src="props.iconUrl"
    >
    <span class="text-xs font-medium text-indigo-300">{{ props.label }}</span>
  </span>
</template>
