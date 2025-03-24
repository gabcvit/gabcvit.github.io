<template>
  <a :href="project.link"
    target="_blank"
    class="grid grid-cols-4 my-4 p-4 rounded border border-emerald-500 bg-gray-950"
    >
    <div class="col-span-3 row-span-1">
      <p class="font-bold">
        > {{ project.theme }}
      </p>
      <p class="text-emerald-500">
        {{ project.title }}
      </p>
      <p>
        Role(s): {{ project.roles }}
      </p>
    </div>
    <div class="col-span-1 text-right">
      <p>{{ project.period }}</p>
    </div>
  </a>
</template>

<script lang="ts" setup>
import { Project } from '@/data/portfolio';

defineProps<{
  project: Project,
}>();
</script>
