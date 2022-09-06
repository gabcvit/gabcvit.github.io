<template>
  <div class="grid grid-cols-4 my-8">
    <div class="col-span-3 row-span-1">
      <p class="text-emerald-500 underline-offset-4 underline"><a :href="link" target="_blank">{{ title }}</a></p>
      <p class="">{{ theme }}</p>
      <p class="">{{ roles }}</p>
      <p>{{ description }}</p>
    </div>
    <div class="col-span-1 mr-16 text-right">
      <p>{{ period }}</p>
    </div>
  </div>
</template>

<script lang="ts">
export default {
  name: "PortfolioSingleElement",
  props: ['title', 'theme', 'roles', 'link', 'period']
}
</script>

<style scoped>

</style>
