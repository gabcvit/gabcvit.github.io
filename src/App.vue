<template>
    <NavigationBar />
    <div class="block m-auto w-full max-w-[960px] px-4 md:px-0 pb-16">
      <RouterView />
    </div>
</template>

<script lang="ts" setup>
import NavigationBar from './components/NavigationBar.vue';
</script>