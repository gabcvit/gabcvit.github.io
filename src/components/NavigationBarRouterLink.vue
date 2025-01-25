<template>
  <RouterLink
    :class="[
      'text-2xl',
      isActive ? variantStyles[color] : 'cursor-pointer',
    ]"
    :to="optionId"
  >
    {{ label }}
  </RouterLink>
</template>

<script lang="ts" setup>
import {computed} from "vue";
import {useRoute} from "vue-router/auto";

const variantStyles = {
  orange: 'text-orange-600',
  pink: 'text-pink-600',
  emerald: 'text-emerald-600',
  indigo: 'text-indigo-600',
};

const props = withDefaults(defineProps<{
  optionId: string,
  label: string,
  color: keyof variantStyles,
}>(), {});

const route = useRoute();

const isActive = computed(() => {
  return route.path === props.optionId;
})

</script>