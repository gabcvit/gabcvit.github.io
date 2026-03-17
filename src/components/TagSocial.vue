<script setup lang="ts">
const props = withDefaults(defineProps<{
  label: string,
  iconSvg: string,
  url: string,
}>(), {
  label: 'Example',
});
</script>

<template>
  <a
    class="inline-flex items-center gap-2 border border-brand-green bg-transparent text-brand-green py-2 px-3 transition-all duration-200 hover:bg-brand-green hover:text-black focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-green rounded-sm"
    :href="props.url"
    target="_blank"
    rel="noopener noreferrer"
    :aria-label="props.label"
  >
    <svg
      xmlns="http://www.w3.org/2000/svg"
      v-html="props.iconSvg"
      class="w-5 h-5 fill-current"
      aria-hidden="true"
    ></svg>
    <span class="text-sm font-bold uppercase tracking-wide">{{ props.label }}</span>
  </a>
</template>
