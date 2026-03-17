<template>
  <NavigationBar />
  <Background />
  <div class="block m-auto w-full max-w-[960px] px-4 md:px-0 pb-16">
    <RouterView v-slot="{ Component }">
      <Transition name="page" mode="out-in">
        <component :is="Component" :key="$route.path" />
      </Transition>
    </RouterView>
  </div>
  <Footer />
</template>

<script lang="ts" setup>
import NavigationBar from './components/NavigationBar.vue';
import Footer from './components/Footer.vue';
import Background from './components/Background.vue';
</script>