<template>
  <p class="hover:text-indigo-600 text-2xl cursor-pointer"
     @click="onOptionClicked">{{ getNameForOptionId() }}</p>
</template>

<script setup lang="ts">
import { defineEmits, defineProps } from "vue";

const emit = defineEmits<{
  (e: 'onOptionClicked', optionId: string): void
}>()

const props = defineProps(['optionId'])

const onOptionClicked = (e: MouseEvent) => {
  emit('onOptionClicked', props.optionId)
};

const getNameForOptionId = () => {
  return props.optionId.charAt(0).toUpperCase()
      + props.optionId.slice(1)
};
</script>

<style scoped>

</style>
