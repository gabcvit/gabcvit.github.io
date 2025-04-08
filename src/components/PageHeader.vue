<script setup lang="ts">
	withDefaults(defineProps<{
	title: string,
	}>(), {});
</script>

<template>
  <h1 class="mt-6 text-center text-3xl uppercase font-thin animate-fadeIn">
    {{ title }}
  </h1>
</template>
