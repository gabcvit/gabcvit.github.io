<template>
  <div class="grid grid-cols-4 my-4 p-4 rounded border border-indigo-500 bg-gray-950">
    <div class="col-span-3 row-span-1">
      <p class="font-bold">
        > {{ office }}
      </p>
      <p class="text-indigo-400 pb-2">
        {{ title }}
      </p>
      <div class="text-sm">
        <span class="font-bold">Description:</span>
        <p>{{ description }}</p>
      </div>
      <div v-if="!isCollapsed">
        <div class="text-sm pt-2" v-if="keyResponsibilities">
          <span class="font-bold">Key responsibilities:</span>
          <ul class="list-disc ml-4">
            <li v-for="keyResponsibility in keyResponsibilities">{{ keyResponsibility }}</li>
          </ul>
        </div>
        <div class="text-sm pt-2" v-if="keyAchievements">
          <span class="font-bold">Key achievements:</span>
          <ul class="list-disc ml-4">
            <li v-for="keyAchievement in keyAchievements">{{ keyAchievement }}</li>
          </ul>
        </div>
        <div class="text-sm pt-2" v-if="techStack">
          <span class="font-bold">Tech stack:</span> 
          <p>{{ techStack }}</p>
        </div>
        </div>
        <button 
          v-if="keyResponsibilities || keyAchievements || techStack"
          @click="toggleCollapse" 
          class="mt-4 text-indigo-400 hover:text-indigo-600">
        {{ isCollapsed ? 'Show More' : 'Show Less' }}
      </button>
    </div>
    
    <div class="col-span-1 text-right">
      <p>{{ period }}</p>
    </div>
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
