<template>
  <div class="grid grid-cols-4 h-screen w-screen place-items-center bg-stone-900">
    <div class="col-span-1 w-full h-screen pl-16">
      <NavigationBar />
    </div>
    <div class="col-span-3 w-full h-screen overflow-y-scroll pr-16">
      <router-view />
    </div>
  </div>
</template>

<script lang="ts" setup>

import NavigationBar from './components/NavigationBar.vue'

</script>
