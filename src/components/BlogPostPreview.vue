<template>
  <RouterLink 
    class="grid grid-cols-4 my-4 p-4 rounded border border-pink-500 bg-gray-950"
    :to="path"
  >
    <div class="col-span-3 row-span-1">
      <p class="font-bold">
        > {{ title }}
      </p>
      <p class="pb-2 text-pink-400">
        Reading duration: {{ duration }}
      </p>
      <p class="text-sm">
        {{ description }}
      </p>
    </div>
    <div class="col-span-1 text-right">
      <p>{{ formattedDate }}</p>
    </div>
  </RouterLink>
</template>
  
  <script lang="ts" setup>
  const props = withDefaults(defineProps<{
	title: string,
	path: string,
	date: string,
	duration: string,
	description: string,
  }>(), {});

  const formattedDate = new Date(props.date).toLocaleDateString();
  
  </script>
  