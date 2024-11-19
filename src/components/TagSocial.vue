<script setup lang="ts">
const props = withDefaults(defineProps<{
  label: string,
  iconUrl: string,
  url: string,
}>(), {
  label: 'Example',
});
</script>

<template>
  <a
    class="inline-flex items-center gap-2 bg-stone-600 py-1 px-2 m-1 rounded border"
    :href="props.url"
    target="_blank"
  >
    <img
      class="w-6"
      :alt="`${props.label} tag icon`"
      :src="props.iconUrl"
    >
    <span class="text-xs font-medium text-white">{{ props.label }}</span>
  </a>
</template>
