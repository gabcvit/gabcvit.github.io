<template>
  <div class="grid grid-cols-4 my-4 p-4 rounded border border-indigo-500 bg-gray-950">
    <div class="col-span-3 row-span-1">
      <p class="font-bold">
        > {{ office }}
      </p>
      <p class="text-indigo-400 pb-2">
        {{ title }}
      </p>
      <p class="text-sm">
        {{ description }}
      </p>
      <p class="text-sm pt-2" v-if="techStack">
        // Tech stack: {{ techStack }}
      </p>
    </div>
    <div class="col-span-1 text-right">
      <p>{{ period }}</p>
    </div>
  </div>
</template>

<script lang="ts" setup>
withDefaults(defineProps<{
  title: string,
  description: string,
  techStack: string,
  office?: string,
  period?: string,
}>(), {
  office: '',
  period: '',
});

</script>
