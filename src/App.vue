<template>
  <div class="grid md:grid-cols-4 h-screen w-screen place-items-center">
    <div class="md:col-span-1 w-full pl-4 md:pl-16 md:h-screen h-auto md:relative fixed navbar-background md:bg-transparent">
      <div class="fixed md:absolute top-0 right-0 left-0 p-4 z-50 shadow-md md:shadow-none navbar-background md:bg-transparent ">
        <p class="text-xl">
          Gabriel Vitali<span class="animate-ping">_</span>
        </p>
        <button @click="toggleNav" class="md:hidden right-0 top-0 p-4 absolute z-50">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <div :class="{'hidden': !isNavOpen, 'block': isNavOpen, 'md:block': true}" >
        <div class="md:block">
          <NavigationBar />
        </div>
      </div>
    </div>
    
    
    <div class="md:col-span-3 w-full h-screen md:overflow-y-scroll px-4 md:pl-0 md:pr-16 pb-16 pt-8 md:pt-0">
      <RouterView />
    </div>
  </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue';
import NavigationBar from './components/NavigationBar.vue';

const isNavOpen = ref(false);
const route = useRoute();

function toggleNav() {
  isNavOpen.value = !isNavOpen.value;
}

watch(route, () => {
  isNavOpen.value = false;
});

</script>

<style scoped>
.navbar-background {
  background-color: rgb(13, 17, 23);
}
</style>