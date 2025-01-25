<template>
  <RouterLink
    :class="[
      'hover:text-indigo-600 text-2xl cursor-pointer',
      isActive ? 'text-indigo-600 cursor-not-allowed' : '',
    ]"
    :to="optionId"
  >
    {{ label }}
  </RouterLink>
</template>

<script lang="ts" setup>
import {computed} from "vue";
import {useRoute} from "vue-router/auto";

const props = withDefaults(defineProps<{
  optionId: string,
  label: string,
}>(), {});

const route = useRoute();

const isActive = computed(() => {
  return route.path === props.optionId;
})

</script>
