<template>
  <article class="group relative flex flex-col border border-pink-600/50 hover:border-pink-600 hover:shadow-glow-pink transition-all duration-300 bg-white/[0.02] hover:bg-white/[0.04] p-4">
    <div class="flex-1 mb-8">
      <h3 class="font-bold light-green-color text-lg leading-tight mb-2">
        {{ project.title }}
      </h3>
      <p class="text-white/60 text-sm pt-0 pb-1">
        <span class="text-white/40 uppercase text-xs tracking-widest">Role</span><br>
        {{ project.roles }}
      </p>
      <p class="text-white/60 text-sm pt-0 pb-0">
        <span class="text-white/40 uppercase text-xs tracking-widest">Topic</span><br>
        {{ project.theme }}
      </p>
    </div>
    <div class="mt-auto">
      <a
        :href="project.link"
        target="_blank"
        rel="noopener noreferrer"
        class="inline-flex items-center gap-1 text-sm font-bold text-brand-pink hover:text-brand-green transition-colors duration-200"
        :aria-label="`Open project: ${project.title}`"
      >
        Open project
        <span aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </article>
</template>

<script lang="ts" setup>
import { Project } from '@/data/portfolio';

defineProps<{
  project: Project,
}>();
</script>
