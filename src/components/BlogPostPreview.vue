<template>
  <RouterLink 
    class="grid md:grid-cols-5 my-4"
    :to="path"
  >
    <div class="col-span-1">
      <h3 class="font-thin opacity-80">{{ formattedDate }}</h3>
    </div>
    <div class="col-span-4">
      <h3>{{ title }}</h3>
      <p>
        {{ description }}... 
      </p>
      <p>
        Reading duration: {{ duration }}
      </p>
      <a class="text-pink-600">
        Read more
      </a>
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
  