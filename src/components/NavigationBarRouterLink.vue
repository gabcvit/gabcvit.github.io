<template>
  <RouterLink
    :class="[
      'text-xl w-1/4 text-center uppercase font-normal tracking-widest',
      'transition-colors duration-200 relative group py-1',
      isActive ? variantStyles[color] : 'text-white hover:text-brand-green',
    ]"
    :to="optionId"
    :aria-current="isActive ? 'page' : undefined"
  >
    {{ label }}
    <span
      aria-hidden="true"
      :class="[
        'absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 transition-all duration-200',
        isActive ? 'w-full bg-pink-600' : 'w-0 group-hover:w-full bg-brand-green',
      ]"
    />
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

const isBlogPath = computed(() => {
  return route.path.startsWith('/blog') && props.optionId.startsWith('/blog');
})

const isActive = computed(() => {
  return route.path === props.optionId || isBlogPath.value;
})

</script>