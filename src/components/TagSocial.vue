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
    class="inline-flex items-center gap-2 bg-white py-2 px-2"
    :href="props.url"
    target="_blank"
  >
    <svg
      xmlns="http://www.w3.org/2000/svg"
      v-html="props.iconSvg"
      class="w-6 h-6 fill-current text-black"
    ></svg>
    <span class="text-base font-bold text-black">{{ props.label }}</span>
  </a>
</template>
