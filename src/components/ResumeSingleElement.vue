<template>
  <div class="mb-8 pl-4 border-l border-brand-green/30 hover:border-brand-green transition-colors duration-300">
    <div class="grid md:grid-cols-5 grid-rows">
      <div class="col-span-4">
        <h3 class="font-bold text-white">
          {{ title }}<span v-if="office" class="text-white/50 font-normal"> — {{ office }}</span>
        </h3>
      </div>
      <div class="flex col-span-1 items-center md:justify-end justify-start">
        <time class="text-xs font-mono text-white/40 tracking-wide">{{ period }}</time>
      </div>
    </div>
    <div class="w-11/12">
      <p class="text-white/80 text-sm leading-relaxed">{{ description }}</p>
      <div v-if="!isCollapsed" class="animate-fadeInUp">
        <div class="pt-2" v-if="keyAchievements">
          <span class="text-xs uppercase tracking-widest text-brand-green font-bold">Key achievements</span>
          <ul class="mt-2">
            <li v-for="keyAchievement in keyAchievements" :key="keyAchievement" class="text-sm text-white/70 pb-1">{{ keyAchievement }}</li>
          </ul>
        </div>
        <div class="pt-2" v-if="techStack">
          <span class="text-xs uppercase tracking-widest text-brand-green font-bold">Tech stack</span>
          <p class="text-sm text-white/70 mt-1">{{ techStack }}</p>
        </div>
      </div>
    </div>

    <button
      v-if="keyResponsibilities || keyAchievements || techStack"
      @click="toggleCollapse"
      class="mt-2 inline-flex items-center gap-1 text-xs font-bold uppercase tracking-widest text-brand-pink hover:text-brand-green transition-colors duration-200"
      :aria-expanded="!isCollapsed"
    >
      <span>{{ isCollapsed ? 'Show details' : 'Hide details' }}</span>
      <span aria-hidden="true" class="transition-transform duration-200" :class="isCollapsed ? '' : 'rotate-180'">&#9660;</span>
    </button>
  </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue';

withDefaults(defineProps<{
  title: string,
  description: string,
  keyResponsibilities?: string[],
  keyAchievements?: string[],
  techStack: string,
  office?: string,
  period?: string,
}>(), {
  office: '',
  period: '',
});

const isCollapsed = ref(true);

function toggleCollapse() {
  isCollapsed.value = !isCollapsed.value;
}
</script>
