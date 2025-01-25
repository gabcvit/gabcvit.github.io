<template>
  <div class="grid md:grid-cols-4 h-screen w-screen place-items-center bg-stone-900">
    <div class="md:col-span-1 w-full h-screen pl-4 md:pl-16">
      <NavigationBar />
    </div>
    <div class="md:col-span-3 w-full h-screen md:overflow-y-scroll px-4 md:pl-0 md:pr-16">
      <RouterView />
    </div>
  </div>
</template>

<script lang="ts" setup>

import NavigationBar from './components/NavigationBar.vue'

</script>
