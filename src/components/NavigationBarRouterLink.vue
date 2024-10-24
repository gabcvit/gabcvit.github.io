<template>
  <router-link
    class="hover:text-indigo-600 text-2xl cursor-pointer w-full"
    :to="optionId"
  >
    {{ getNameForOptionId() }}
  </router-link>
</template>

<script lang="ts" setup>

const props = withDefaults(defineProps<{
  optionId: string,
}>(), {
  optionId: '',
});

const getNameForOptionId = () => {
  return props.optionId.charAt(0).toUpperCase()
      + props.optionId.slice(1)
};

</script>
