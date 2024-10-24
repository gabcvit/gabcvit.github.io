<template>
  <div class="grid grid-cols-4 my-8">
    <div class="col-span-3 row-span-1">
      <p class="">
        _ {{ office }}
      </p>
      <p class="">
        {{ title }}
      </p>
      <p>{{ description }}</p>
    </div>
    <div class="col-span-1 mr-16 text-right">
      <p>{{ period }}</p>
    </div>
  </div>
</template>

<script lang="ts" setup>
withDefaults(defineProps<{
  title: string,
  description: string,
  office?: string,
  period?: string,
}>(), {
  office: '',
  period: '',
});

</script>
