<template>
  <router-link
    :class="[
      'hover:text-indigo-600 text-2xl cursor-pointer',
      isActive ? 'text-indigo-600 cursor-not-allowed' : '',
    ]"
    :to="optionId"
  >
    {{ label }}
  </router-link>
</template>

<script lang="ts" setup>
import {computed} from "vue";
import {useRoute} from "vue-router";

const props = withDefaults(defineProps<{
  optionId: string,
  label: string,
}>(), {});

const route = useRoute();

const isActive = computed(() => {
  return route.name === props.optionId;
})

</script>
