<template>
  <a :href="project.link"
    target="_blank"
    class="relative px-2 border border-white"
    >
    <div class="mb-16">
      <h3 class="font-bold">
        {{ project.title }}
      </h3>
      <p class="pt-0 pb-0">
        Role(s): {{ project.roles }}
      </p>
      <p class="pt-0 pb-0">
        Topic: {{ project.theme }}
      </p>
    </div>
    <div class="absolute bottom-2 right-2">
      <a class="text-emerald-500 text-right">Open project</a>
    </div>
  </a>
</template>

<script lang="ts" setup>
import { Project } from '@/data/portfolio';

defineProps<{
  project: Project,
}>();
</script>
