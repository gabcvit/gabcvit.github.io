<template>
  <div class="mb-6">
    <div class="grid md:grid-cols-5 grid-rows">
      <div class="col-span-4">
        <h3>
          {{ title }} - {{ office }}
        </h3>
      </div>
      <div class="flex col-span-1 items-center md:justify-end justify-start">
        <span class="opacity-80">{{ period }}</span>
      </div>
    </div>
    <div class="w-11/12">
      <span class="font-bold">Description:</span>
      <p>{{ description }}</p>
      <div v-if="!isCollapsed">
        <div v-if="keyResponsibilities">
          <span class="font-bold">Key responsibilities:</span>
          <ul>
            <li v-for="keyResponsibility in keyResponsibilities">{{ keyResponsibility }}</li>
          </ul>
        </div>
        <div class="pt-2" v-if="keyAchievements">
          <span class="font-bold">Key achievements:</span>
          <ul>
            <li v-for="keyAchievement in keyAchievements">{{ keyAchievement }}</li>
          </ul>
        </div>
        <div class="pt-2" v-if="techStack">
          <span class="font-bold">Tech stack:</span> 
          <p>{{ techStack }}</p>
        </div>
      </div>
    </div>
    
    <button 
      v-if="keyResponsibilities || keyAchievements || techStack"
      @click="toggleCollapse" 
      class="font-bold text-indigo-400 hover:text-indigo-600">
    {{ isCollapsed ? 'Show More' : 'Show Less' }}
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
