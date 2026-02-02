<script setup lang="ts">
	withDefaults(defineProps<{
	title: string,
	}>(), {});
</script>

<template>
  <h1 class="animate-fadeIn">
    {{ title }}
  </h1>
</template>
